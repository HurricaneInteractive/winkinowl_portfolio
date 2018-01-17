<?php
    session_start();
    $key = sha1(microtime());
    $_SESSION['csrf'] = $key;
    require('config.php');
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />

        <title>Winking Owl</title>
        <meta name="description" content="Winking Owl is a independent digital agency offering web services to help clients improve their web presence">

        <meta property="og:url" content="https://www.winkingowl.digital/">
        <meta property="og:title" content="Winking Owl">
        <meta property="og:description" content="Winking Owl is a independent digital agency offering web services to help clients improve their web presence">
        <meta property="og:site_name" content="Winking Owl">
        <meta property="og:type" content="website">
        <meta name="author" content="Winking Owl">
        <meta property="og:locale" content="en_US">
        <meta property="og:image" content="http://winkingowl.hurricane-interactive.me/img/thumbnail.png" >

        <meta name="Keywords" content="Canberra web design, digital agency, web design, canberra website, canberra digital agency, small business solutions, website services" />

        <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.8/release/featherlight.min.css" type="text/css" rel="stylesheet" />
        <link href="css/normalize.css" media="all" rel="stylesheet" type="text/css" />
        <link href="style.css" media="all" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Halant:400,500" rel="stylesheet">

        <link rel="icon" type="image/ico" href="wologo.ico"/>
        
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body id="#top">
        <?php include_once('analytics.php'); ?>

        <div class="flashmessages"></div>
        <header>
            <h1 class="logo">
                <a href="#top">Winking Owl Digital</a>
            </h1>
            <nav>
                <ul>
                    <li class="active"><a href="#top">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section class="intro">
            <blockquote>
                <p>My goal is to help <span>you</span> improve your web presence.</p>
                <small>Find out more below</small>
            </blockquote>
        </section>

        <section id="services" class="about">
            <div class="services" data-tab-child="0">
                <ul>
                    <li>
                        <div class="content-container">
                            <img src="img/web-small.svg" alt="Web design icon" />
                            <h3>Website Development</h3>
                            <p>
                                We can provide your business with a innovative web solution to make you stand out from your competitors.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="content-container">
                            <img src="img/personal-small.svg" alt="App design icon" />
                            <h3>Personalised Solutions</h3>
                            <p>
                                A template based website is not a one size fits all, a personalised solution will help reach your audience.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="content-container">
                            <img src="img/responsive-small.svg" alt="Responsive design icon" />
                            <h3>Responsive Design</h3>
                            <p>
                                Having your site is very important, studies show that not having a responsive website can lead to a 61% loss in audience.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- <div class="about-blurb">
                <h3>Our Story</h3>
                <p>
                    WinkingOwl is an independent digital agency based in Australia. Our goal to provide high-quality web solutions for small/medium businesses. We tailor each solution to the companies needs, to provide the best solution possible.
                </p>
            </div> -->
        </section>

        <section id="portfolio" class="portfolio">
            <h2>Portfolio</h2>
            <div class="portfolio-section">
                <h4>Recent</h4>
                <ul>
                    <li>
                        <a class="lightbox" href="#" data-featherlight="img/seacliff.jpg">
                            <div class="image">
                                <img src="img/seacliff.jpg" alt="Seacliff House website screenshot">
                            </div>
                        </a>
                        <h4>Seacliff House</h4>
                        <p>Seacliff is a custom built WordPress website and has many features that small businesses can benefit from.</p>
                        <a href="http://seacliff.hurricane-interactive.me/" rel="noopener" target="_blank">View Site</a>
                    </li>
                    <li>
                        <a class="lightbox" href="#" data-featherlight="img/infosite.jpg">
                            <div class="image">
                                <img src="img/infosite.jpg" alt="Informational website screenshot">
                            </div>
                        </a>
                        <h4>Self Harm Informational website</h4>
                        <p>This was a university project and shows the number of deaths from self harm between 2006 and 2012</p>
                        <a href="http://infosite.hurricane-interactive.me/" rel="noopener" target="_blank">View Site</a>
                    </li>
                    <li>
                        <a class="lightbox" href="#" data-featherlight="img/datavis.jpg">
                            <div class="image">
                                <img src="img/datavis.jpg" alt="Datavisualisation website screenshot">
                            </div>
                        </a>
                        <h4>Data visualisation</h4>
                        <p>Utilising Chartjs to create a interactive and customisable graph.</p>
                        <a href="http://datavis.hurricane-interactive.me/" rel="noopener" target="_blank">View Site</a>
                    </li>
                </ul>
            </div>
            <div class="portfolio-section">
                <h4>In Progress</h4>
                <ul>
                    <li>
                        <a class="lightbox" href="#" data-featherlight="img/choose_layout@2x.png">   
                            <div class="image">
                                <img src="img/choose_layout@2x.png" alt="Choose layout screenshot">
                            </div>
                        </a>
                        <h4>CV Bot</h4>
                        <p>Generate a beautifully designed CV/Resume from a users input. (Design Prototype on Github)</p>
                        <a href="https://github.com/HurricaneInteractive/cv-generator" rel="noopener" target="_blank">Github</a>
                    </li>
                    <li>
                        <a class="lightbox" href="#" data-featherlight="img/BarColours@2x.png">
                            <div class="image">
                                <img src="img/BarColours@2x.png" alt="Bar colours logo">
                            </div>
                        </a>
                        <h4>Bar Colours</h4>
                        <p>A website for choosing a colour palette, built with ReactJS and Google's Firebase.</p>
                        <a href="http://lol.winkingowl.digital/" rel="noopener" target="_blank">Prototype</a>
                    </li>
                    <li>
                        <a class="lightbox" href="#" data-featherlight="img/builtin_showcase.png">
                            <div class="image">
                                <img src="img/builtin_showcase.png" alt="Builtin.io submission page">
                            </div>
                        </a>
                        <h4>Builtin.io</h4>
                        <p>A collection of React Components to be used to create quick Minimum Viable Products.</p>
                        <a href="https://builtin.herokuapp.com/" rel="noopener" target="_blank">View Site</a>
                    </li>
                </ul>
            </div>
            <div class="portfolio-section">
                <h4>Open source projects & project updates</h4>
                <ul>
                    <li class="social">
                        <a href="https://github.com/HurricaneInteractive" el="noopener" target="_blank">
                            <img src="img/Github.svg" alt="Github Logo">
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://www.instagram.com/adro.codes/" el="noopener" target="_blank">
                            <img src="img/Instagram.svg" alt="Instagram Logo">
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://twitter.com/hurricane_int" el="noopener" target="_blank">
                            <img src="img/Twitter.svg" alt="Twitter Logo">
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section id="contact" class="contact">
            <h2>Get in touch</h2>
            <form id="submitRequest" method="post">
                <input type="hidden" name="csrf" value="<?php echo $key; ?>" />
                <input type="text" name="name" placeholder="Full Name" />
                <input type="text" name="email" placeholder="Email" />
                <input type="text" name="service" placeholder="Service needed" />
                <textarea name="message" id="message" cols="30" rows="2" placeholder="Message"></textarea>
                <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
                <input type="submit" value="Send">
            </form>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//cdn.rawgit.com/noelboss/featherlight/1.7.8/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/main.js"></script>
        <script>
            $ = jQuery.noConflict(), $(document).ready(function() {
                var a = $('#submitRequest'),
                    b = a.find('button[type="submit"]'),
                    c = $('.flashmessages');
                a.on('submit', function(d) {
                    if (d.preventDefault(), !b.hasClass('disabled')) {
                        b.addClass('disabled'), b.attr('value', 'Sending...');
                        var f = new FormData(a[0]);
                        $.ajax({
                            url: '/process.php',
                            type: 'post',
                            contentType: false,
                            processData: false,
                            headers: {
                                'X-CSRF-TOKEN': '<?php echo $key; ?>'
                            },
                            data: f,
                            success: function(g) {
                                g = JSON.parse(g);
                                var h = g.status;
                                if ('success' == h) {
                                    var j = '<div id="messages"><ul class="' + h + '"><li>' + g.message + '</li></ul></div>';
                                    c.append($(j));
                                    a[0].reset();
                                } else if ('error' == h) {
                                    var j = '<div id="messages"><ul class="' + h + '"></ul></div>';
                                    c.append($(j));
                                    for (var k = 0; k < g.errors.length; k++) c.find('ul').append($('<li>' + g.errors[k] + '</li>'))
                                }
                            },
                            error: function() {
                                alert('ABORT MISSION!')
                            },
                            complete: function() {
                                grecaptcha.reset();
                                hideFlashMsg(c), b.removeClass('disabled'), b.attr('value', 'Send');
                            }
                        })
                    }
                })
            });
        </script>
    </body>
</html>