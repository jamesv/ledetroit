<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
        <?php
            if(array_key_exists('title', $page)) {
                print $page['title'] . " - ";
            }
        ?>
            LE D&Eacute;TROIT
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/css/normalize.css" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="/css/ld.css" />
        <link rel="stylesheet" href="/css/ld_story.css" />
        
        <?php
            # Use custom stylesheet?
            if(array_key_exists('content_css', $page)) {
                print '<link rel="stylesheet" href="/css/content' . str_replace('.php', '.css', $_SERVER['REQUEST_URI']).'" />';
            }
        ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="/js/vendor/jquery.easing.1.3.js"></script>
        <script src="/js/vendor/jquery.easing.compatibility.js"></script>
        <script src="/js/vendor/jquery.cycle.all.js"></script>  
        
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class='<?php if(array_key_exists('class', $page)) {print $page['class'];} ?>'>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=155942744562019";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Global nav -->
        <div id='header'>
            <div class='cols'>
                <a href='/' title='Le D&eacute;troit' class='brand'>Le D&eacute;troit</a>
                <ul id='nav'>
                    <li><a href='/music/' class='music' title='Music'>Music</a></li>
                    <li><a href='/style/' class='style' title='Style'>Style</a></li>
                    <li><a href='/life/' class='life' title='Life'>Life</a></li>
                    <li><a href='/events/' class='events' title='Events'>Events</a></li>
                    <li><a href='/places/' class='places' title='Places'>Places</a></li>
                </ul>
            </div>
        </div>
        <div class='main'>
