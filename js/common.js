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

// JSモーダル
const modalBtn = document.querySelector('.modal-btn');
const modalOuter = document.querySelector('.modal-outer');
modalBtn.addEventListener('click',function(){
  modalOuter.classList.add('active');
});
modalOuter.addEventListener('click',function(element){
  if(!element.target.closest('.modal-inner')){
    modalOuter.classList.remove('active');
  }
});

//JSタブ切り替えコンテンツ
// const tab01Btns = document.querySelectorAll('.tab01-btn li');
// const tab01Contents = document.querySelectorAll('.tab01-content li');
// tab01Btns.forEach(function(tab01BtnA,tab01BtnIndexA){
//   tab01BtnA.addEventListener('click',function(){
//     tab01Btns.forEach(function(tab01BtnB,tab01BtnIndexB){
//       if(tab01BtnIndexA === tab01BtnIndexB){
//         tab01BtnB.classList.add('active');
//       }else{
//         tab01BtnB.classList.remove('active');
//       }
//     });
//     tab01Contents.forEach(function(tab01ContentA,tab01ContentIndexA){
//       if(tab01BtnIndexA === tab01ContentIndexA){
//         tab01ContentA.classList.add('active');
//       }else{
//         tab01ContentA.classList.remove('active');
//       }
//     });
//   });
// });








































const tab01Btns = document.querySelectorAll('.tab01-btn li');
const tab01Contents = document.querySelectorAll('.tab01-content li');
tab01Btns.forEach(function(tab01btn01,tab01btnIndex01){
  tab01btn01.addEventListener('click',function(){
    tab01Btns.forEach(function(tab01btn02,tab01btnIndex02){
      if(tab01btnIndex01 === tab01btnIndex02){
        tab01btn02.classList.add('active');
      }else{
        tab01btn02.classList.remove('active');
      }
    })
    tab01Contents.forEach(function(tab01Content01,tab01ContentIndex01){
      if(tab01btnIndex01 === tab01ContentIndex01){
        tab01Content01.classList.add('active');
      }else{
        tab01Content01.classList.remove('active');
      }
    });
  });
});



