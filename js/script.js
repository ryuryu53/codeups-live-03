
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  let topBtn = $('.c-to-top');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });
  
  // ヘッダークラス名付与
  let header = $('.p-header');
  let headerheight = $('.p-header').height();
  let height = $('.js-mv-height').height();
  console.log('ヘッダーの高さ>>> +' + headerheight);
  console.log('メインビューの高さ>>> +' + height);
  console.log(height - headerheight);
  $(window).scroll(function () {  // ↓ heightだけだと、下へスクロールしてヘッダーがメインビューから完全に出る直前に、ナビゲーションの白文字が白い背景の中に入り、文字が読めなくなる瞬間がある
    if ($(this).scrollTop() > (height - headerheight)) {   // thisはwindowのことを示す
      header.addClass('is-color');
    } else {
      header.removeClass('is-color');
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $(".js-hamburger, .js-sp-nav").click(function () {  // .js-sp-navを追加しXマーク以外がクリックされてもドロワーメニューがfadeOutするようにした
    if($(".js-hamburger").hasClass('is-active')) {
      $(".js-hamburger").removeClass("is-active");
      // $("html").toggleClass("is-fixed");
      $(".js-sp-nav").fadeOut(300);
    } else {
      $(".js-hamburger").addClass("is-active");
      $(".js-sp-nav").fadeIn(300);
    }
  });

   // 画面幅のサイズが変わったら（まさたさん課題で追加したものをこちらでも追加）
    $(window).on('resize', function () {

    // xマークを三マークにする（.js-hamburgerの要素にクラス名is-activeがあれば削除する）
    $('.js-hamburger').removeClass('is-active');

    // .js-sp-navを閉じる（.js-sp-navが表示されていれば非表示にする）
    $('.js-sp-nav').fadeOut(300);
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  // 動画ではここの説明なかったと思う
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  var swiper = new Swiper(".js-works-swiper", {
    // slidesPerView: 1,
    // spaceBetween: 30,
    pagination: {
      el: ".js-works-pagination",
      clickable: true,  // 画像1の表示から画像2のボタンを押すと1→3→2の順番で画像がスライドして画像2が表示される！また、画像2の表示から画像3のボタンを押すと2→1→3の順番で画像がスライドし画像3が表示される！ループによる画像の切り替わりの順番とは逆で、少し不自然では？
    },
    loop: true,
    speed: 5000,
    autoplay: {
      delay: 3000,
    },
  });

});
