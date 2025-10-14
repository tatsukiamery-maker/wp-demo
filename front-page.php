<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- SwiperのCSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <!-- slickのCSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <!-- Modaal CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
    <link rel="stylesheet" href="/wp-content/themes/demo/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <p>front-pageだよお</p>
    <a href="<?php echo home_url('/dummy') ?>">dummy固定ページへ</a>
   
    <?php 
        $posts = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 5          
        ]);
    ?>
    <?php if ( $posts->have_posts() ) : ?>
        <ul>
            <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php 
                        $terms = get_the_terms( get_the_ID(), 'category' );
                        foreach($terms as $term){
                            $term_link = get_term_link($term);
                            echo '<a href="'.$term_link.'">'.$term->name.'</a>';
                        }
                    ?>
                    <?php 
                        $terms = get_the_terms(get_the_ID(),'post_tag');
                        if($terms){
                            foreach($terms as $term){
                                $term_link = get_term_link($term);
                                echo '<a href="'.$term_link.'">'.$term->name.'</a>';
                            }
                        }
                    ?>
                </li>
            <?php endwhile; ?>
        </ul>
                <!------- こんな書き方しなくても問題なし。 ------->
                <?php 
                    // 投稿タイプのアーカイブリンクを取得（ループ外で1回だけ）
                    $post_type = 'post'; // このクエリは post 投稿タイプなので直接指定でOK
                    $archive_link = get_post_type_archive_link($post_type);
                ?>
                <p>
                    <a href="<?php echo home_url('/home'); ?>">
                        初期投稿一覧へ
                    </a>
                </p>

        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p>投稿はありません</p>
    <?php endif; ?>


    <?php 
        $posts = new WP_Query([
            'post_type' => 'test',
            'posts_per_page' => 5          
        ]);
    ?>
    <?php if ( $posts->have_posts() ) : ?>
        <ul>
            <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
        <p>
            <a href="<?php echo home_url('/test'); ?>">
                テスト投稿一覧へ
            </a>
        </p>

        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p>投稿はありません</p>
    <?php endif; ?>

    <div class="main-wrapper">
        <!-- swiper ver01 -->
        <div class="swiper-outer ver01">
            <div class="swiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide width01"><div class="slid-item">スライド1</div></li>
                    <li class="swiper-slide width02"><div class="slid-item">ス<br>ラ<br>イ<br>ド<br>2</div></li>
                    <li class="swiper-slide width03"><div class="slid-item">スライド3</div></li>
                    <li class="swiper-slide width04"><div class="slid-item">スライド4</div></li>
                    <li class="swiper-slide width05"><div class="slid-item">スライド5</div></li>
                    <li class="swiper-slide width06"><div class="slid-item">スライド6</div></li>
                    <li class="swiper-slide width07"><div class="slid-item">スライド7</div></li>
                    <li class="swiper-slide width08"><div class="slid-item">スライド8</div></li>
                    <li class="swiper-slide width09"><div class="slid-item">スライド9</div></li>
                </ul>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- slick -->
        <div class="slick-wrapper ver01">
            <div class="slick-wrap">
                <!-- ここにsingle-postの内容を入れる -->
                <div class="slider-item"><div class="slide-inner">Slide 1</div></div>
                <div class="slider-item"><div class="slide-inner">ス<br>ラ<br>イ<br>ド<br>2</div></div>
                <div class="slider-item"><div class="slide-inner">Slide 3</div></div>
                <div class="slider-item"><div class="slide-inner">Slide 4</div></div>
                <div class="slider-item"><div class="slide-inner">Slide 5</div></div>
            </div>
        </div>
        <!-- swiper ver02 -->
        <div class="swiper-outer ver02">
            <div class="swiper">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <a href="#modal01-con" class="slid-item modal-group01" rel="gallery1">
                            
                          <iframe src="https://www.youtube.com/embed/wn0IyvGBeUI?si=ZRxp4UZEfD95I_P6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </a>
                    </li>
                    <li class="swiper-slide"><a href="#modal02-con" class="slid-item modal-group01" rel="gallery1">ス<br>ラ<br>イ<br>ド<br>2</a></li>
                    <li class="swiper-slide"><a href="#modal03-con" class="slid-item modal-group01" rel="gallery1">スライド3</a></li>
                    <li class="swiper-slide"><a href="#modal04-con" class="slid-item modal-group01" rel="gallery1">スライド4</a></li>
                    <li class="swiper-slide"><a href="#modal05-con" class="slid-item modal-group01" rel="gallery1">スライド5</a></li>
                    <li class="swiper-slide"><a href="#modal06-con" class="slid-item modal-group01" rel="gallery1">スライド6</a></li>
                    <li class="swiper-slide"><a href="#modal07-con" class="slid-item modal-group01" rel="gallery1">スライド7</a></li>
                    <li class="swiper-slide"><a href="#modal08-con" class="slid-item modal-group01" rel="gallery1">スライド8</a></li>
                    <li class="swiper-slide"><a href="#modal09-con" class="slid-item modal-group01" rel="gallery1">スライド9</a></li>
                </ul>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="modal-con">
            <p id="modal01-con">modal01</p>
            <p id="modal02-con">modal02</p>
            <p id="modal03-con">modal03</p>
            <p id="modal04-con">modal04</p>
            <p id="modal05-con">modal05</p>
            <p id="modal06-con">modal06</p>
            <p id="modal07-con">modal07</p>
            <p id="modal08-con">modal08</p>
            <p id="modal09-con">modal09</p>
        </div>


        <!-- アニメーション -->
         <div class="animation-wrap">
            <p class="animation-text"><span>ア</span><span>ニ</span><span>メ</span><span>ー</span><span>シ</span><span>ョ</span><span>ン</span><span>の</span><span>れ</span><span>ん</span><span>し</span><span>ゅ</span><span>う</span><span>だ</span><span>よ</span><span>お</span></p>
         </div>
         <!-- ドロップダウンメニュー -->
          <div class="dropdown-wrap">
            <ul class="dropdown-ul">
                <li class="dropdown-li">
                    nav01
                    <ul class="dropdown-items">
                        <li class="dropdown-item">nav01-01</li>
                        <li class="dropdown-item">nav01-02</li>
                        <li class="dropdown-item">nav01-03</li>
                        <li class="dropdown-item">nav01-04</li>
                    </ul>
                </li>
                <li class="dropdown-li active">
                    nav02
                    <ul class="dropdown-items">
                        <li class="dropdown-item">nav02-01</li>
                        <li class="dropdown-item">nav02-02</li>
                        <li class="dropdown-item">nav02-03</li>
                        <li class="dropdown-item">nav02-04</li>
                    </ul>
                </li>
                <li class="dropdown-li">
                    nav03
                    <ul class="dropdown-items">
                        <li class="dropdown-item">nav03-01</li>
                        <li class="dropdown-item">nav03-02</li>
                        <li class="dropdown-item">nav03-03</li>
                        <li class="dropdown-item">nav03-04</li>
                    </ul>
                </li>
                <li class="dropdown-li">
                    nav04
                    <ul class="dropdown-items">
                        <li class="dropdown-item">nav04-01</li>
                        <li class="dropdown-item">nav04-02</li>
                        <li class="dropdown-item">nav04-03</li>
                        <li class="dropdown-item">nav04-04</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="grid-content">
            <div class="grid-item item01">01</div>
            <div class="grid-item item02">02</div>
            <div class="grid-item item03">03</div>
            <div class="grid-item item04">04</div>
            <div class="grid-item item05">05</div>
            <div class="grid-item item06">06</div>
            <div class="grid-item item07">07</div>
            <div class="grid-item item08">08</div>
            <div class="grid-item item09">09</div>
        </div>

        <div class="trapezoid">
        <span>テキストあああああああああああああああああああああああああああいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいああああああ</span>
        </div>

        <!-- slick -->
        <!-- ここにFancyboxモーダル実装 -->
        <div class="slick-wrapper ver02">
            <div class="slick-wrap">
                <!-- ここにsingle-postの内容を入れる -->
                <div class="slider-item"><div class="slide-inner">Slide 1</div></div>
                <div class="slider-item"><div class="slide-inner">ス<br>ラ<br>イ<br>ド<br>2</div></div>
                <div class="slider-item"><div class="slide-inner">Slide 3</div></div>
                <div class="slider-item"><div class="slide-inner">Slide 4</div></div>
                <div class="slider-item"><div class="slide-inner">Slide 5</div></div>
            </div>
        </div>
        <!-- <div class="modal-con">
            <p id="modal01-con">modal01</p>
            <p id="modal02-con">modal02</p>
            <p id="modal03-con">modal03</p>
            <p id="modal04-con">modal04</p>
            <p id="modal05-con">modal05</p>
            <p id="modal06-con">modal06</p>
            <p id="modal07-con">modal07</p>
            <p id="modal08-con">modal08</p>
            <p id="modal09-con">modal09</p>
        </div> -->

    </div>
      <!--jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <!-- SlickのJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
      <!-- SwiperのJS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>    
      <!-- Modaal JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
    <!-- js -->
        <script src="/wp-content/themes/demo/js/common.js"></script>
    <?php wp_footer(); ?>
</body>
</html>