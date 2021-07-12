<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= theme("/assets/css/style.css") ?>"/>
</head>
<body>
<header class="main-header">
    <div class="content">
        <h1>AppFacilita</h1>
    </div>
</header>
<main class="main-container">
    <?= $v->section("content"); ?>
</main>

</body>
</html>
