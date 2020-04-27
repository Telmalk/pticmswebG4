<?php
    function getHeader() {
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Ptis Cms</title>
            <link href="../public/boostrap/css/bootstrap.css" rel="stylesheet">
        </head>
        <body role="document">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">PETIT CMS<a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Game of Thrones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">con de mimes</a>
                                </li>
                            </ul>
                        </div>
            </nav>

        <?php
    }

    function getPage() {
        ?>
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <h1>Game Of Thrones</h1>
                <p>Neuf familles nobles rivalisent pour le contrôle du Trône de Fer dans les sept royaumes de Westeros. Pendant ce temps, des anciennes créatures mythiques oubliées reviennent pour faire des ravages.</p>
                <span class="label btn btn-danger">Palpitant</span>
            </div>
            <img class="img-thumbnail" alt="la" src="../public/img/got.jpg" data-holder-rendered="true">
        </div>
        </div>
        <?php
    }

    function getFooter() {
        ?>
        </body>
        </html>
        <?php
    }