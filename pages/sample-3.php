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
                制作実績 [ No.3 ]
            </li>
        </ol>
    </nav>
</div>
<!-- /.top -->

<main class="container">
    <section class="description fadein">
        <img class="description__image" src="../assets/images/sample3.webp" alt="クリエイティブ・ギルド　キユリアス">
        <div class="description__caption">
            <h2 class="description__title">クリエイティブ・ギルド　キユリアス</h2>
            <ul class="description__list works-card__list">
                <li class="works-card__item">実案件</li>
                <li class="works-card__item">Webサイト</li>
                <li class="works-card__item">コーディング</li>
            </ul>
            <a class="description__link button" href="https://qrious.jp/" target="_blank">
                サイトはこちら
            </a>
        </div>
        <!-- /.description__caption -->
    </section>
    <section class="detail fadein">
        <h4 class="detail__heading">
            Web制作、開発ギルド「キユリアス」のホームページのリニュアルにおけるコーディング作業をチームで担当しました。
        </h4>
        <dl class="detail__contents">
            <dt class="detail__title">依頼目的</dt>
            <dd class="detail__text">ホームページのリニューアル</dd>
            <dt class="detail__title">制作ポイント</dt>
            <dd class="detail__text">
                ピクセルパーフェクトにてコーディングを行い、レスポンシブに対してはコーダー側にてよしなに対応しました。
            </dd>
            <dt class="detail__title">制作期間</dt>
            <dd class="detail__text">
                <ul class="point">
                    <li class="point__item">要件整理：2日</li>
                    <li class="point__item">コーディング：30日間</li>
                </ul>
            </dd>
        </dl>
    </section>
    <!-- pagination -->
    <div class="pagination fadein">
        <a class="pagination__contents pagination-reverse__contents" href="sample-2.php">
            <span class="pagination__text">No.2</span>
            <img class="pagination__image" src="../assets/images/sample2.webp">
        </a>
        <a class="pagination__contents" href="sample-4.php">
            <span class="pagination__text">No.4</span>
            <img class="pagination__image" src="../assets/images/sample4.webp">
        </a>
    </div>
    <!-- /.pagination -->
</main>

<?php include '../footer.php'; ?>