<?php get_header(); ?>

<h1>ブログ一覧</h1>

<?php
// 投稿ループを開始
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
    <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
    </article>
<?php
    endwhile;
else :
?>
    <p>投稿はありません</p>
<?php endif; ?>

<?php get_footer(); ?>
