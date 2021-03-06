<!DOCTYPE html>
<html lang="en-gb">

<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Paul Robert Lloyd"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>

    <!--detect js+svg support-->
    <script>
        document.getElementsByTagName('html')[0].className += ' js';

        (function flagSVG() {
            var ns = {'svg': 'http://www.w3.org/2000/svg'};
            if(!!document.createElementNS && !!document.createElementNS(ns.svg, 'svg').createSVGRect) {
                 document.getElementsByTagName('html')[0].className += ' svg';
            }
        })();
    </script>

    <!--fonts-->
    <noscript>
        <link rel="stylesheet" href="http://f.fontdeck.com/s/css/vs28dz705JJtCmrxyO35ASy7y2Q/<?php echo $_SERVER['SERVER_NAME']; ?>/18137.css" type="text/css" />
    </noscript>
    <script>
        document.getElementsByTagName('html')[0].className += ' wf-loading';
        (function() {
            WebFontConfig = { fontdeck: { id: 18137 } }
            var wf = document.createElement('script');
            wf.src = 'http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js'
            wf.async = 'true';
            var s = document.getElementsByTagName('head')[0];
            s.appendChild(wf);
        })();
    </script>
    <script src="_js/lib/responsive-enhance/responsive-enhance.min.js"></script>

    <!--css-->
    <link rel="stylesheet" href="_css/base.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="_css/patterns.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="_css/layout.css" type="text/css" media="all"/>

    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="_js/lib/respond/respond.min.js"></script>
    <![endif]-->

    <!--icons-->
    <link rel="shortcut icon" href="_assets/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon-precomposed" href="_assets/apple-touch-icon-precomposed.png" type="image/png"/>

    <!--http://microformats.org/profile/specs/-->
    <link rel="profile" href="http://microformats.org/profile/specs/" title="Microformats"/>

    <!--meta-->
    <title>Road Trip: <?php echo $title ?></title>
</head>

<body>
