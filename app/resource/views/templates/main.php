<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title><?=SITE_NAME ?> - <?=$pageName ?></title>
</head>
<body>
<div id="page">
    <header>
        <h1>
            <a href="<?=\core\Route::url('main')?>">My site</a>

        </h1>
    </header>
    <nav class="">
        <ul>
            <li><a <?=$this->setActiveStyleInNavBar('main-page', $page)?>  href="<?=\core\Route::url('main')?>">Главная</a></li>
            <li><a <?=$this->setActiveStyleInNavBar('contacts-page', $page)?> href="<?=\core\Route::url('contacts')?>">Контакты</a></li>
            <li><a <?=$this->setActiveStyleInNavBar('about-page', $page)?> href="<?=\core\Route::url('about')?>">О нас</a></li>
        </ul>

    </nav>

    <main>

        <?php include_once 'app/resource/views/pages/'.$page.'.php'?>
    </main>

    <footer>
        Evgenij Frolov 2022 ©
    </footer>
</div>

</body>
</html>
