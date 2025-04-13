<?php get_header(); ?>
<main class="l-main">
    <section class="l-main-visual">
        <div class="l-main-visual_text">ダミーサイト</div>
    </section>
    <section class="p-content--wrapper">
        <div class="p-content--TakeOut">
            <div class="title--wrapper">
                <h2 class="c-title">Take Out</h2>
                <span class="c-horizonline"></span>
            </div>
            <div class="p-content__item--wrapper">
                <section class="p-content__item">
                    <h3>Take OUT</h3>
                    <p>当店のテイクアウトで利用できる商品を掲載しています。</p>
                </section>
                <section class="p-content__item">
                    <h3>Take OUT</h3>
                    <p>当店のテイクアウトで利用できる商品を掲載しています。</p>
                </section>
            </div>
        </div>
        <div class="p-content--EatIn">
            <section class="title--wrapper">
                <h2 class="c-title">Eat In</h2>
                <span class="c-horizonline"></span>
            </section>
            <div class="p-content__item--wrapper">
                <section class="p-content__item">
                    <h3>Eat In</h3>
                    <p>店内でお食事いただけるメニューです。</p>
                </section>
                <section class="p-content__item">
                    <h3>Eat In</h3>
                    <p>店内でお食事いただけるメニューです。</p>
                </section>
            </div>
        </div>
    </section>
    <section class="p-map">
        <div class="p-map__shadow">
            <div class="p-map__shadow--dark">
                <h2>見出しが入ります</h2>
                <span class="c-horizonline__large"></span>
                <p>テキストが入ります。</p>
            </div>
        </div>
    </section>
</main>
    
<?php if (is_active_sidebar('side-menu')) : ?>
<?php dynamic_sidebar('side-menu'); ?>
<?php endif; ?>

<?php get_footer(); ?>
