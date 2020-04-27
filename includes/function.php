<?php
    function getHeader(array $data) {
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
                                <?php
                                    foreach ($data as $key => $value) {

                                    }
                                ?>
                            </ul>
                        </div>
            </nav>

        <?php
    }

    function getNav($title, $slug) {
        ?>
        <li class="nav-item">
            <a class="nav-link" href="<?=$slug?>" tabindex="-1" aria-disabled="true"><?=$title?></a>
        </li>
        <?php
    }

    function getPage(array $dataPage) {
        ?>
        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <h1><?=$dataPage['title']?></h1>
            <p><?=$dataPage['description']?></p>
                <span class="label btn btn-<?=$dataPage['span-label']?>"><?=$dataPage['span-text']?></span>
            </div>
            <img class="img-thumbnail" alt="<?=$dataPage['img-alt']?>" src="../public/img/<?=$dataPage['img']?>" data-holder-rendered="true">
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