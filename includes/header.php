<?php

    require_once('type_manager.php');
    require_once('view.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/full.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php

    $aTypes = TypeManager::getTypes();

    echo View::renderNav($aTypes);
    ?>

<!--                    <ul class="nav navbar-nav">
                    <li>
                        <img src="assets/splogoblksmall.jpg" alt="#">
                    </li>
                    <li>
                        <a href="indexabout.html">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>

                    <li>
                        <a href="showType.php?typeid=1">Sacred Oils</a>
                    </li>
                    <li>
                        <a href="showType.php?typeid=2">Incense</a>
                    </li>
                    <li>
                        <a href="showType.php?typeid=2">Soap</a>
                    </li>
                    <li>
                        <a href="showType.php?typeid=2">Alter Necklaces</a>
                    </li>
                    <li>
                        <a href="showType.php?typeid=2">Fabric Art</a>
                    </li>
                    <li>
                        <a href="showType.php?typeid=2">Charms</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="#contact">Sign up</a>
                    </li>
                    <li>
                        <a href="#contact">Admin Login</a>
                    </li>
                    <li>
                        <a href="#contact">User Details</a>
                    </li>
                    <li>
                        <a href="#contact">Logout</a>
                    </li>


            <form class="pure-form pure-form-stacked"> 
                    <form class="login">

                        <label for="username">Username</label>
                        <input id="username" type="text" 
                        Placeholder="Username">

                        <label for="password">Password</label>
                        <input id="password" type="password" placeholder="Password">
                        <button type="submit" class="btn">Log in</button>
                  
                    </form>



                </ul>
 -->            </div>
        </div>

    </nav>