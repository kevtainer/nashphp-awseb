<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .env {
                margin-top: 30px;
                padding: 2% 10%;
                text-align: left;
                background: #aeaeae;
            }
            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
            <br />
            Hello Nashville PHP User Group!<br />

            <div class="env">
                <?php
                echo sprintf("<b>APP_KEY:</b> %s<br />", getenv('APP_KEY'));
                echo sprintf("<b>APP_ENV:</b> %s<br />", getenv('APP_ENV'));
                echo sprintf("<b>APP_DEBUG:</b> %s<br />", getenv('APP_DEBUG'));
                echo sprintf("<b>APP_URL:</b> %s<br />", getenv('APP_URL')); ?>
            </div>
        </div>

    </body>
</html>
