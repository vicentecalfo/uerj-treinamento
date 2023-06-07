<!DOCTYPE html>
<html>

<head>
    <base href="<?php echo APP_CONFIG['url']; ?>" target="_self">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UERJ Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  
    <?php echo !empty($css) ? "<style>$css</style>" : "" ?>
</head>

<body>

    <?php if (!$noWrapper) require_once 'appHead.php'; ?>