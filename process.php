<?php
session_start();
$secret = '6Lfp4C4UAAAAAL7PWotQjs2vxqRfMSlOeaZeLMma';

function has_header_injection($str){
    return preg_match( "/[\r\n]/", $str );
}

function showErrors($errors) {
    $data = array(
        'status' => 'error',
        'errors' => $errors
    );
    echo json_encode($data);
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $service = trim($_POST['service']);
    $messageElem = trim($_POST['message']);
    
    $csrf = $_POST['csrf'];
    $sessionCsrf = $_SESSION['csrf'];
    $errors = array();

    if (!isset($sessionCsrf) || $sessionCsrf !== $csrf)
    {
        throw new RuntimeException('CSRF Attack');
        array_push($errors, 'Are you doing the right thing? Refresh the page and try again');
        echo json_encode($errors);
        die();
    }
    else {

        if (has_header_injection($email) || has_header_injection($name) || has_header_injection($service) || has_header_injection($messageElem)) {
            array_push($errors, 'Header Injection Detected');
        }

        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $service = filter_var($service, FILTER_SANITIZE_STRING);
        $messageElem = filter_var($messageElem, FILTER_SANITIZE_STRING);

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, 'Invaild Email');
        }

        if (count($errors) > 0)
        {
            showErrors($errors);
        }
        else {
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if (!$responseData->success) {
                array_push($errors, 'Please fill in recaptcha');
            }

            if (count($errors) > 0) {
                showErrors($errors);
            }
            else {
                $to = 'hurricane.interactive@gmail.com';
                $subject = 'Job Submission from Winking Owl';
                $message = "Name: " . $name;
                $message .= "\r\nEmail: " . $email;
                $message .= "\r\nService Type: " . $service;
                $message .= "\r\nMessage: " . $messageElem;

                //Set the mail headers
        		$headers = "MIMI-Version: 1.0\r\n";
        		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        		$headers .= "From: Winking Owl <$email> \r\n";
        		$headers .= "X-Priority: 1\r\n";
        		$headers .= "X-MSMail: High\r\n\r\n";

                mail($to, $subject, $message, $headers);

                $data = array(
                    'status' => 'success',
                    'message' => 'Message sent'
                );
                echo json_encode($data);
                die();
            }
        }
    }
}
