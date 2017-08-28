<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="/public/css/common.css">
    <?php
    if (isset($_CSS)) {
        foreach($_CSS as $css) {
            echo '<link rel="stylesheet" href="/public/css/', $css, '">';
        }
    }
    ?>

</head>
<body>

<header>
    <div class="wrap">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/">
                <img src="/public/img/vietloot-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                <b>Vietloot</b>
            </a>
            <!-- <a class="navbar-brand" href="#">Vietloot</a> -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Play</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Win</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Responsibility</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Vietloot</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownLanguageMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/us.svg" alt="US">
                            Language
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownLanguageMenuLink">
                            <a class="dropdown-item" href="/en">
                                <img class="flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/us.svg" alt="US">
                                English
                            </a>
                            <a class="dropdown-item" href="/vi">
                                <img class="flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/vn.svg" alt="VN">
                                Vietnamese
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signInModal">Sign in</a>
                    </li>
                </ul>

                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
    </div>
</header>

<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <p>Modal body text goes here.</p> -->
                <div class="alert alert-danger" role="alert">
                    Sorry, we couldn't find that combination of username, password.
                </div>
                <form>
                    <div class="form-group">
                        <label for="signInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="signInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="signInputPassword1">Password</label>
                        <input type="password" class="form-control" id="signInputPassword1" placeholder="Password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </div>
</div>