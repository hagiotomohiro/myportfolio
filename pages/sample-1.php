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
                制作実績 [ No.1 ]
            </li>
        </ol>
    </nav>
</div>
<!-- /.top -->

<main class="container">
    <section class="description fadein">
        <img class="description__image" src="../assets/img/sample1.webp" alt="小さなパスタ屋Tino">
        <div class="description__caption">
            <h2 class="description__title">小さなパスタ屋Tino</h2>
            <ul class="description__list works-card__list">
                <li class="works-card__item">実案件</li>
                <li class="works-card__item">Webサイト</li>
                <li class="works-card__item">デザイン</li>
                <li class="works-card__item">コーディング</li>
            </ul>
            <a class="description__link button" href="https://tino-pasta.com/" target="_blank">
                サイトはこちら
            </a>
        </div>
        <!-- /.description__caption -->
    </section>
    <section class="detail fadein">
        <h4 class="detail__heading">
            パスタ専門店Tino様の<wbr>Webサイトのデザイン、<wbr>コーディングを担当しました。
        </h4>
        <dl class="detail__contents">
            <dt class="detail__title">依頼目的</dt>
            <dd class="detail__text">店舗移転に伴い店舗の認知向上、集客向上</dd>
            <dt class="detail__title">コンセプト</dt>
            <dd class="detail__text">幅広いターゲット層に対応しシンプルかつ優し気な店舗の雰囲気を意識したデザイン</dd>
            <dt class="detail__title">制作ポイント</dt>
            <dd class="detail__text">
                <ul class="point">
                    <li class="point__item">
                        もともとInstagramをメインにPRをされていたため、Instagramをお知らせページとして載せることで、店舗側の更新作業の負担を軽減するとともに、WebサイトとSNSに閲覧者が流入することで相互に活性化することを狙いました。
                    </li>
                    <li class="point__item">Instagramとの連携でWebサイトとSNS相互に閲覧者が流入しやすくしました。</li>
                    <li class="point__item">
                        オーナーが猫好き、保護猫活動をされているとのことで、「TOPに戻るボタン」に猫をあしらいボタンを押すとデザインが変わるなど遊び心も入れることでオーナー、店舗のイメージをより伝わりやすくしました。</li>
                    <li class="point__item">問い合わせフォームをPHPで実装しました。記入漏れ等のエラー表示、セキュリティ対策、問い合わせ者への自動返信を搭載しています。</li>
                </ul>
            </dd>
            <dt class="detail__title">制作期間</dt>
            <dd class="detail__text">
                <ul class="point">
                    <li class="point__item">要件整理：2日</li>
                    <li class="point__item">ワイヤーフレーム：2日</li>
                    <li class="point__item">デザイン：3日</li>
                    <li class="point__item">コーディング：7日間</li>
                </ul>
            </dd>
        </dl>
    </section>
    <!-- pagination -->
    <div class="pagination pagination--first fadein">
        <a class="pagination__contents" href="sample-2.php">
            <span class="pagination__text">No.2</span>
            <img class="pagination__image" src="../assets/img/sample2.webp">
        </a>
    </div>
    <!-- /.pagination -->
</main>

<?php include '../footer.php'; ?>