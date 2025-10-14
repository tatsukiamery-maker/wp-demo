console.log('a'); // 動作確認

// スワイパースライダー01
document.addEventListener("DOMContentLoaded", () => {
  const swiper = new Swiper('.swiper-outer.ver01 .swiper', {
    slidesPerView: 'auto', // 自動計算にする
    loop: true,              // 無限ループ
    spaceBetween: 100,        // スライド間の余白(px)
    centeredSlides: true, // 中央揃えにする
    pagination: {
      el: '.swiper-outer.ver01 .swiper-pagination',
      clickable: true,       // クリック可能にする
    },
    navigation: {
      nextEl: '.swiper-outer.ver01 .swiper-button-next',
      prevEl: '.swiper-outer.ver01 .swiper-button-prev',
    },
  });
});
// スワイパースライダー02
document.addEventListener("DOMContentLoaded", () => {
  const swiper = new Swiper('.swiper-outer.ver02 .swiper', {
    loop: true,              // 無限ループ
                                    slidesPerView: 3,        // 一度に3枚表示
                                    // slidesPerView: 'auto', // 自動計算にする
    spaceBetween: 100,        // スライド間の余白(px)
    pagination: {
      el: '.swiper-outer.ver02 .swiper-pagination',
      clickable: true,       // クリック可能にする
    },
    navigation: {
      nextEl: '.swiper-outer.ver02 .swiper-button-next',
      prevEl: '.swiper-outer.ver02 .swiper-button-prev',
    },
  });
});

//スリックスライダー01
$(document).ready(function(){
    $('.slick-wrapper.ver01 .slick-wrap').slick({
        dots: true,
        arrows: true, // 矢印の表示を有効にする
        infinite: true,
        speed: 300,
                                      slidesToShow: 3,
                                      // variableWidth: true, // ← 個別幅指定
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });
});
//スリックスライダー02
$(document).ready(function(){
    $('.slick-wrapper.ver02 .slick-wrap').slick({
        dots: true,
        arrows: true, // 矢印の表示を有効にする
        infinite: true,
        speed: 300,
                                      slidesToShow: 4,
                                      // variableWidth: true, // ← 個別幅指定
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });
});

// モダル01（ギャラリー非対応）
$(function(){
  $('.modal-group01').modaal({
    type: 'inline',         // インラインモードにする
    gallery_active: true,   // ギャラリー矢印ON
    gallery_loop: true,     // 最後から最初へループON
    background: '#000',     // 背景色
    overlay_opacity: 0.8,   // 背景オーバーレイの透明度
  });
});



