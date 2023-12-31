<?php

$msg = 'Hello, PHP on Unit!';
$img_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . '/newyear2024.jpg';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHPテスト</title>
    </head>
    <body>
        <h1>PHPテスト</h1>
        <p><?php echo $msg; ?></p>
        <div>
           <img src="<?php echo $img_url; ?>" alt="初日の出" />
        </div>
    </body>
</html>
