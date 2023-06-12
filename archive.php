<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- リセットcss -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <!-- Googlefont -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- style.css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <title>Hamburger</title>
    </head>

    <body>
        <div class="main-watermark_bg"></div>
        <div class="u-grid">
            <header class="l-header">
                <div class="c-inner">
                    <h2 class="c-button--sidebar">Menu</h2>
                    <div class="l-header__section">
                        <a href="index.html"><h1 class="c-title--header">Hamburger</h1></a>
                        <form action="" class="p-search__form">
                        <input type="text" class="p-search__box">
                        <input type="button" onclick="location.href='archive-search.html'" name="submit" class="p-search__button" value="検索">
                        </form>
                    </div>
                </div><!--.c-inner-->
            </header>

            <main class="u-grid__main">
                <div class="p-main-visual--archive">
                    <img class="c-main-bg" src="mainvisual-img/page-title_archive.png" alt="">
                    <h2 class="c-title--textline__bg">Menu:</h2>
                </div><!--.p-main-visual-->

                <section class="p-archive-description c-inner-archive">
                    <h3 class="c-title--description">小見出しが入ります</h3>
                    <p class="c-text--description">
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </section><!--.p-archive-description-->
                
                <div class="p-archive__section c-inner-archive">
                    <figure class="p-archive__card">
                        <img src="mainvisual-img/archive-menu-card.png" alt="">
                        <figcaption class="p-archive__item">
                            <div class="p-archive__item-text">
                                <h2 class="c-title--archive__card">チーズバーガー</h2>
                                <h3 class="c-sub-title--archive__card">小見出しが入ります</h3>
                                <p class="c-text-archive__card">
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                    テキストが入ります。テキストが入ります。
                                </p>
                            </div><!--.p-archive__text-->
                            <button><a href="archive-search.html">詳しく見る</a></button>
                        </figcaption>
                    </figure>

                    <figure class="p-archive__card">
                        <img src="mainvisual-img/archive-menu-card.png" alt="">
                        <figcaption class="p-archive__item">
                            <div class="p-archive__item-text">
                                <h2 class="c-title--archive__card">ダブルチーズバーガー</h2>
                                <h3 class="c-sub-title--archive__card">小見出しが入ります</h3>
                                <p class="c-text-archive__card">
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div><!--.p-archive__text-->
                            <button><a href="archive-search.html">詳しく見る</a></button>
                        </figcaption>
                    </figure>

                    <figure class="p-archive__card">
                        <img src="mainvisual-img/archive-menu-card.png" alt="">
                        <figcaption class="p-archive__item">
                            <div class="p-archive__item-text">
                                <h2 class="c-title--archive__card">スペシャルチーズバーガー</h2>
                                <h3 class="c-sub-title--archive__card">小見出しが入ります</h3>
                                <p class="c-text-archive__card">
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div><!--.p-archive__text-->
                            <button><a href="archive-search.html">詳しく見る</a></button>
                        </figcaption>
                    </figure>
                </div><!--.p-archive__section-->
            </main><!--.u-grid__main-->
        
            <footer class="l-footer">
                <ul class="l-footer__menu">
                    <li><a href="shop.html">ショップ情報</a></li>
                    <li>ヒストリー</li>
                </ul>
                <address>Copyright : RaiseTech</address>
            </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>

    <article class="l-sidebar">
        <div class="l-sidebar__section">
            <div class="c-sidebar__button--close">
                <img src="img/close.png" alt="">
            </div>
            <h2 class="c-title--sidebar">Menu</h2>
            <div class="l-sidebar__content">
                <ul class="l-sidebar-lists">
                    <ul class="l-sidebar__lists--burger">
                        <li>
                            <h3 class="c-title--sidebar--main-menu">バーガー</h3>
                        </li>
                        <ul class="c-text-sidebar--sub-menu">
                            <li>ハンバーガー</li>
                            <a href="archive.php"><li>チーズバーガー</li></a>
                            <li>テリヤキバーガー</li>
                            <li>アボカドバーガー</li>
                            <li>フィッシュバーガー</li>
                            <li>ベーコンバーガー</li>
                            <li>チキンバーガー</li>
                        </ul>
                    </ul><!--.l-sidebar__lists-->
                    <ul class="l-sidebar__lists--side-menu">
                        <li>
                            <h3 class="c-title--sidebar--main-menu">サイド</h3>
                        </li>
                        <ul class="c-text-sidebar--sub-menu">
                            <li>ポテト</li>
                            <li>サラダ</li>
                            <li>ナゲット</li>
                            <li>コーン</li>
                        </ul>
                    </ul><!--.l-sidebar__lists-->
                    <ul class="l-sidebar__lists--drink">
                        <li>
                            <h3 class="c-title--sidebar--main-menu">ドリンク</h3>
                        </li>
                        <ul class="c-text-sidebar--sub-menu">
                            <li>コーラー</li>
                            <li>ファンタ</li>
                            <li>オレンジ</li>
                            <li>アップル</li>
                            <li>紅茶(Ice/Hot)</li>
                            <li>コーヒー(Ice/Hot)</li>
                        </ul>
                    </ul><!--.l-sidebar__lists-->
                </ul><!--.l-sidebar-main-->
            </div><!--.l-sidebar__content-->
        </div><!--.l-sidebar__section-->
    </article>
</div><!--.u-grid-->
</html>