<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="萩尾智弘のポートフォリオサイト">
    <title>Hagio Tomohiro's Portfolio</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Twitterカード -->
    <meta name="twitter:card" content="summary">
    <meta property="og:url" content="https://pilina-cs.com/">
    <meta property="og:title" content="Hagio Tomohiro's Portfolio">
    <meta property="og:description" content="萩尾智弘のポートフォリオサイト">
    <meta property="og:image" content="https://pilina-cs.com/assets/images/twitter_card.png">
    <!-- Googl font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header start -->
    <header>
        <!-- ハンバーガーメニュー -->
        <div class="hamburger">
            <span class="hamburger__line"></span>
            <span class="hamburger__line"></span>
            <span class="hamburger__text">MENU</span>
        </div>
        <!-- /.hamburger -->
        <?php
        // 現在のパスに '/pages/' を含むかどうかで下層ページかを判定
        $is_subpage = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;
        ?>
        <nav class="gnav">
            <ul class="gnav__list">
                <li class="gnav__item">
                    <a class="gnav__link" href="<?= $is_subpage ? '../index.php' : '#top' ?>">HOME</a>
                </li>
                <li class="gnav__item">
                    <a class="gnav__link" href="<?= $is_subpage ? '../index.php#works' : '#works' ?>">WORKS</a>
                </li>
                <li class="gnav__item">
                    <a class="gnav__link" href="<?= $is_subpage ? '../index.php#skill' : '#skill' ?>">SKILL</a>
                </li>
                <li class="gnav__item">
                    <a class="gnav__link" href="<?= $is_subpage ? '../index.php#about' : '#about' ?>">ABOUT</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- header end -->