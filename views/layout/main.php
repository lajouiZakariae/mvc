<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once(APP_DIR . "/views/static/tmp.php") ?>
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #232232;
        }

        p {
            color: #111;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        {{content}}
    </div>
</body>

</html>