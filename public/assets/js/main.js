$(function () {

  window.addEventListener("load", function(){

  $('.banner-section__slider').slick({
    dots: true,
    prevArrow: '<button class="banner-section__slider-btn banner-section__slider-btnprev"><svg width="17" height="29" viewBox="0 0 17 29" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
        '<path d="M1.9673 14.1924L14.9422 1.37269C15.2613 1.05741 15.2613 0.551755 14.9422 0.236466C14.6231 -0.0788221 14.1113 -0.0788221 13.7922 0.236466L0.239328 13.6273C-0.0797759 13.9426 -0.0797759 14.4482 0.239328 14.7635L13.7922 28.1484C13.9487 28.3031 14.1595 28.3864 14.3642 28.3864C14.5689 28.3864 14.7796 28.309 14.9362 28.1484C15.2553 27.8331 15.2553 27.3275 14.9362 27.0122L1.9673 14.1924Z" fill="black"/>\n' +
        '</svg></button>',
    nextArrow: '<button class="banner-section__slider-btn banner-section__slider-btnnext"><svg width="17" height="29" viewBox="0 0 17 29" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
        '<path d="M15.8936 13.632L2.33608 0.236548C2.01686 -0.0788495 1.50491 -0.0788495 1.1857 0.236548C0.866485 0.551946 0.866485 1.05777 1.1857 1.37317L14.1651 14.1974L1.1857 27.0216C0.866485 27.337 0.866485 27.8428 1.1857 28.1582C1.3423 28.3129 1.5531 28.3962 1.75788 28.3962C1.96266 28.3962 2.17346 28.3189 2.33005 28.1582L15.8876 14.7627C16.2068 14.4533 16.2068 13.9415 15.8936 13.632Z" fill="black"/>\n' +
        '</svg></button>',
    responsive: [{
      breakpoint: 969,
      settings: {
        arrows: false
      }
    }]
  });
  });

  $('.tab').on('click', function (e) {
    e.preventDefault();

    $($(this).siblings()).removeClass('tab--active');
    $($(this).closest('.tabs-wrapper').siblings().find('div')).removeClass('tabs-content--active');

    $(this).addClass('tab--active');
    $($(this).attr('href')).addClass('tabs-content--active');

    $('.product-slider').slick('setPosition');
  });

  $('.product-item__favorite').on('click', function () {
    $(this).toggleClass('product-item__favorite--active')
  });

  $('.product-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button class="product-slider__slider-btn product-slider__slider-btnprev"><img src="images/arrow-black-left.svg" alt=""></button>',
    nextArrow: '<button class="product-slider__slider-btn product-slider__slider-btnnext"><img src="images/arrow-black-right.svg" alt=""></button>',
    responsive: [{
      breakpoint: 1301,
      settings: {
        arrows: false,
        dots: true
      },
    },
    {
      breakpoint: 1201,
      settings: {
        slidesToShow: 3,
        dots: true
      }
    },
    {
      breakpoint: 870,
      settings: {
        slidesToShow: 2,
        dots: true
      }
    },
    {
      breakpoint: 590,
      settings: {
        slidesToShow: 1,
        dots: true
      }
    },
  ]
  });

  $('.filter-style').styler();

  $('.flter__item-drop, .filter__extra').on('click', function () {
    $(this).toggleClass('flter__item-drop--active');
    $(this).next().slideToggle('200');
  });

  $(".js-range-slider").ionRangeSlider({
    type: "double",
    grid: false,
    min: 100000,
    max: 500000,
    from: 100000,
    to: 220000,
  });

  $('.catalog__filter-btngrid').on('click', function () {
    $(this).addClass('catalog__filter-button--active');
    $('.catalog__filter-btnline').removeClass('catalog__filter-button--active');
    $('.product-item__wrapper').removeClass('product-item__wrapper--list');
  });

  $('.catalog__filter-btnline').on('click', function () {
    $(this).addClass('catalog__filter-button--active');
    $('.catalog__filter-btngrid').removeClass('catalog__filter-button--active');
    $('.product-item__wrapper').addClass('product-item__wrapper--list');
  });

  $(".rate-yo").rateYo({
    ratedFill: "#1C62CD",
    spacing: "7px",
    normalFill: "#c4c4c4"
  });

  $('.menu__btn').on('click', function () {
    $('.menu-mobile__list').toggleClass('menu-mobile__list--active');
  });

  $('.footer__topdrop').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('footer__topdrop--active');
  });
  
  $('.aside__btn').on('click', function () {
    $(this).next().slideToggle();
  });

});
