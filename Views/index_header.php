<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
        <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
        <title><?= (isset($this->title)) ? $this->title : 'Welcome'; ?></title>

        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <!-- Favicons-->
        <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
        <!-- For iPhone -->
        <meta name="msapplication-TileColor" content="#00bcd4">
        <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
        <!-- For Windows Phone -->


        <!-- CORE CSS-->    
        <link href="<?= URL; ?>public/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
        <link href="<?= URL; ?>public/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- Custome CSS-->    
        <link href="<?= URL; ?>public/css/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">


        <!-- jQuery Library -->
        <script type="text/javascript" src="<?= URL; ?>public/js/jquery-1.11.2.min.js"></script>    
        <!--materialize js-->
        <script type="text/javascript" src="<?= URL; ?>public/js/materialize.min.js"></script>
        <!--scrollbar-->
        <script type="text/javascript" src="<?= URL; ?>public/js/perfect-scrollbar.min.js"></script>
        
        <!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="<?= URL; ?>public/js/plugins.min.js"></script>

        <?php
        if (isset($this->js)) {
            // Let loop through the array from the controller
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . $js . '"></script>';
            }
        }


        if (isset($this->css)) {
            // Let loop through the array from the controller
            foreach ($this->css as $css) {
                echo '<link type="text/css" rel="stylesheet" href="' . URL . $css . '" media="screen,projection"/>';
            }
        }
        ?>

    </head>

    <body class="blue lighten-3">