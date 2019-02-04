<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>

    <body>

    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text">aKindOfBlog</li>
                <li><a href="#">hotels</a></li>
                <li><a href="#">Restaurant</a></li>
                <li><a href="#">oenologie</a></li>
            </ul>
        </div>
    </div>

    <div class="callout large primary">
        <div class="row column text-center">
            <h1>Our Blog</h1>
            <h2 class="subheader">Such a Simple Blog Layout</h2>
        </div>
    </div>

    <?= $content ?>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
        $(document).foundation();
    </script>

    </body>
<html>

