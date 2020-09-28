<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/favicon/apple-touch-icon-57x57.png" async />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/favicon/apple-touch-icon-114x114.png" async />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/favicon/apple-touch-icon-72x72.png" async />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/favicon/apple-touch-icon-144x144.png" async />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/favicon/apple-touch-icon-60x60.png" async />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/favicon/apple-touch-icon-120x120.png" async />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/favicon/apple-touch-icon-76x76.png" async />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/favicon/apple-touch-icon-152x152.png" async />
    <link rel="icon" type="image/png" href="/favicon/favicon-196x196.png" sizes="196x196" async />
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" async />
    <link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32" async />
    <link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16" async />
    <link rel="icon" type="image/png" href="/favicon/favicon-128.png" sizes="128x128" async />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <title>
        <?php echo $pageTitle ?>
    </title>

    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <meta name="description" content="<?php echo $pageDescription ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" media="screen" href="/muscularSystem/main.css" async />
    <link rel="stylesheet" media="screen" type="text/css" href="/animated.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" async>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet" async>

    <? $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

    <!-- <script src="/jss/main.js"></script> -->
    <!-- <script src="/jss/header.js"></script> -->
    <script src="/jss/headerChange.mjs"></script>
    <script src="muscleGroups.mjs"></script>
    <script src="https://kit.fontawesome.com/33fe2dde2c.js" crossorigin="anonymous"></script>
</head>

<body id="wrapper">
    <header id="navigationBar">
        <div id="navContent">
            <div class="logo">
                <a href="/">
                    <p>Muscular System<p>
                </a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a class="<?= ($activePage == 'index') ? 'selected':''; ?>" href="/">
                            My plan
                        </a>
                    </li>
                    <li>
                        <a class="<?= ($activePage == 'index') ? 'selected':''; ?>" href="/">
                            Diet
                        </a>
                    </li>
                    <li>
                        <a class="<?= ($activePage == 'contact') ? 'selected':''; ?>" href="/contact">
                            Support
                        </a>
                    </li>
                    <li>
                        <a class="<?= ($activePage == 'contact') ? 'selected':''; ?>" href="/contact">
                            Login
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>