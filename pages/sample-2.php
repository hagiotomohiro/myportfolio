<?php include '../header.php'; ?>

<div class="top">
    <h1 class="top__title">制作実績</h1>
    <!-- パンくずリスト -->
    <nav aria-label="Breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb__item">
                <a href="../index.php" class="breadcrumb__link">ホーム</a>
            </li>
            <li class="breadcrumb__item">
                制作実績 [ No.2 ]
            </li>
        </ol>
    </nav>
</div>
<!-- /.top -->

<main class="container">
    <section class="description fadein">
        <img class="description__image" src="../assets/images/sample2.webp" alt="株式会社アリオン">
        <div class="description__caption">
            <h2 class="description__title">株式会社アリオン</h2>
            <ul class="description__list works-card__list">
                <li class="works-card__item">実案件</li>
                <li class="works-card__item">Webサイト</li>
                <li class="works-card__item">その他</li>
                <li class="works-card__item">コーディング</li>
                <li class="works-card__item">WordPress</li>
            </ul>
            <a class="description__link button" href="https://allion-kk.com/" target="_blank">
                サイトはこちら
            </a>
        </div>
        <!-- /.description__caption -->
    </section>
    <section class="detail fadein">
        <h4 class="detail__heading">
            警備事業、橋梁点検事業、<wbr>ドローン事業を提供する<wbr>株式会社アリオン様の<wbr>コーポレートサイトへの<wbr>問い合わせフォームの実装、<wbr>採用ページほか一部デザイン、<wbr>掲載内容の加筆修正ならびに<wbr>Wordpress化作業を<wbr>担当しました。
        </h4>
        <dl class="detail__contents">
            <dt class="detail__title">依頼目的</dt>
            <dd class="detail__text">問い合わせ方法の充実化、デザイン修正、お知らせページ・実績紹介のページを実装するにあたり既存のサイトのWordpress化のご依頼</dd>
            <dt class="detail__title">制作ポイント</dt>
            <dd class="detail__text">
                既存ホームページのWordpress化作業。トップページへのお知らせ欄、実績紹介欄の追加。お知らせページ、実績紹介のページの実装。実績ページとYouTubeと連携し自動更新されるよう設定しております。
            </dd>
            <dt class="detail__title">制作期間</dt>
            <dd class="detail__text">
                <ul class="point">
                    <li class="point__item">要件整理：2日</li>
                    <li class="point__item">ワイヤーフレーム：1日</li>
                    <li class="point__item">デザイン：1日</li>
                    <li class="point__item">コーディング：5日間</li>
                </ul>
            </dd>
        </dl>
    </section>
    <!-- pagination -->
    <div class="pagination fadein">
        <a class="pagination__contents pagination-reverse__contents" href="sample-1.php">
            <span class="pagination__text">No.1</span>
            <img class="pagination__image" src="../assets/images/sample1.webp">
        </a>
        <a class="pagination__contents" href="sample-3.php">
            <span class="pagination__text">No.3</span>
            <img class="pagination__image" src="../assets/images/sample3.webp">
        </a>
    </div>
    <!-- /.pagination -->
</main>

<?php include '../footer.php'; ?>