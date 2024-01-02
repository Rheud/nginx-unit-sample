<?php

$msg = 'Hello, PHP on Unit!';
$url_base = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];
$css_url = $url_base . './style.css';
$img_url = $url_base . '/newyear2024.jpg';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHPテスト</title>
        <link rel="stylesheet" href="<?php echo $css_url; ?>">
    </head>
    <body>
        <main>
            <h1>PHPテスト</h1>
            <p><?php echo $msg; ?></p>
            <div>
                <img src="<?php echo $img_url; ?>" alt="初日の出" />
            </div>
        </main>
    </body>
</html>
