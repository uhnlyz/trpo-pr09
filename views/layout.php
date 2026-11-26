<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title ?? 'Настольная', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
<header class="topbar">
    <a class="brand" href="/"><img src="/assets/shop-logo.svg" alt="" width="34" height="34"> Настольная</a>
    <nav><a href="/">Главная</a><a href="/catalog">Каталог</a></nav>
</header>
<main class="container"><?= $content ?></main>
<footer class="footer">Учебный интернет-магазин · Практическая работа № 7</footer>
</body>
</html>
