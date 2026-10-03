<?php
//PHP 動作確認 page
date_default_timezone_set('Asia/Tokyo');
$projectName = "Phone Repair Training Platform";
$phpVersion = phpversion();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $projectName ?></title>
</head>
<body>
    <h1><?= $projectName ?></h1>
    <p>動作確認 Ok </p>
    <p>PHP version: <?= $phpVersion ?></p>
    <p>Server time: <?= date('Y-m-d H:i:s') ?></p>
    <p>Timezone: <?= date_default_timezone_get() ?></p>
</body>
</html>