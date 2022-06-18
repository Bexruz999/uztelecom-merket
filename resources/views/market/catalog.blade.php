<x-layout>
    <x-header></x-header>




<!--    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list mobile-overflow">
                    <li class="breadcrumbs__list-item">
                        <a href="#">Главная</a>
                    </li>
                    <li class="breadcrumbs__list-item">
                        <span>Гидроциклы</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>-->


<!--    <section class="catalog">
        <div class="container">

            <h2 class="catalog__title">Гидроциклы</h2>

            <div class="catalog__inner">
                <div class="aside__btn">
                    фильтр
                </div>
                <aside class="catalog__inner-aside aside-filter">
                    <div class="tabs-wrapper tabs-wrapper&#45;&#45;no-scroll">
                        <div class="tabs aside-filter__tabs">
                            <a class="tab aside-filter__tab tab&#45;&#45;active" href="#filter-1"><span>Параметры</span></a>
                            <a class="tab aside-filter__tab" href="#filter-2"><span>по марке</span></a>
                        </div>
                    </div>
                    <div class="tabs-container">
                        <div id="filter-1" class="tabs-content aside-filter__tabscontent tabs-content&#45;&#45;active">

                            <form class="aside-filter__form">
                                <ul class="aside-filter__list">
                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title flter__item-drop flter__item-drop&#45;&#45;active">Наличие</p>
                                        <div class="aside-filter__content">
                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    В наличие
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Под заказ
                                                </label>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title flter__item-drop flter__item-drop&#45;&#45;active">Новинки</p>
                                        <div class="aside-filter__content aside-filter__content-radio">
                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" name="radio" type="radio">
                                                    Все
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" name="radio" type="radio">
                                                    Новинки
                                                </label>
                                            </div>
                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" name="radio" type="radio">
                                                    Акции
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title flter__item-drop flter__item-drop&#45;&#45;active">Цена</p>
                                        <div class="aside-filter__content">
                                            <input type="text" class="js-range-slider" name="my_range" value=""/>
                                        </div>
                                    </li>


                                    <li class="aside-filter__item-list">
                                        <div class="filter__item-list">
                                            <p class="filter__item-listtitle">Мощность, л.с.</p>
                                            <select class="filter-style filter__item-listselect">
                                                <option value="">90</option>
                                                <option value="">130</option>
                                                <option value="">154</option>
                                                <option value="">230</option>
                                            </select>
                                        </div>
                                        <div class="filter__item-list">
                                            <p class="filter__item-listtitle">Мощность двигателя, л.с.</p>
                                            <select class="filter-style filter__item-listselect">
                                                <option value="">90</option>
                                                <option value="">130</option>
                                                <option value="">154</option>
                                                <option value="">230</option>
                                            </select>
                                        </div>
                                        <div class="filter__item-list">
                                            <p class="filter__item-listtitle">Макс. скорость</p>
                                            <select class="filter-style filter__item-listselect">
                                                <option value="">90</option>
                                                <option value="">130</option>
                                                <option value="">154</option>
                                                <option value="">230</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title flter__item-drop flter__item-drop&#45;&#45;active">Бренд</p>
                                        <div class="aside-filter__content">
                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox" checked>
                                                    BRP
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox" checked>
                                                    Spark 2
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Spark 3
                                                </label>
                                            </div>
                                            <div class="filter-more">
                                                <button class="filter-more__btn">Показать еще</button>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title flter__item-drop flter__item-drop&#45;&#45;active">Модель</p>
                                        <div class="aside-filter__content">
                                            <input class="filter-search" type="text" placeholder="Введите модель">
                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Sea-doo Spark 2
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    SeaDoo Spark 90
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    SeaDoo GTI 155
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    SeaDoo GTR 230
                                                </label>
                                            </div>
                                            <div class="filter-more">
                                                <button class="filter-more__btn">Показать еще</button>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="aside-filter__item-drop btn-checked">
                                        <p class="aside-filter__item-title flter__item-drop flter__item-drop&#45;&#45;active">Акции</p>
                                        <div class="aside-filter__content">
                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    <span class="btn-checked__text">SALE</span>
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    <span class="btn-checked__text">NEW</span>
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    <span class="btn-checked__text">HIT</span>
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    <span class="btn-checked__text">ДИЛЕР</span>
                                                </label>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="aside-filter__item-drop">
                                        <p class="aside-filter__item-title flter__item-drop flter__item-drop&#45;&#45;active">Страны</p>
                                        <div class="aside-filter__content">

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox" checked>
                                                    Россия
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox" checked>
                                                    Германия
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    Китай
                                                </label>
                                            </div>

                                            <div class="aside-filter__content-box">
                                                <label class="aside-filter__content-label">
                                                    <input class="filter-style" type="checkbox">
                                                    CША
                                                </label>
                                            </div>
                                            <div class="filter-more">
                                                <button class="filter-more__btn">Показать еще</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="aside-filter__item-drop aside-filter__item-btn">
                                        <button class="filter-btn__send filter-btn__send&#45;&#45;active" type="submit">ВЫБРАТЬ</button>
                                        <p class="filter__extra">Дополнительные параметры</p>
                                        <div class="filter__extra-content">more</div>
                                        <button class="filter-btn__reset" type="submit">Сбросить фильтр</button>
                                    </li>
                                </ul>
                            </form>

                        </div>
                        <div id="filter-2" class="tabs-content aside-filter__tabscontent">content-2</div>
                    </div>
                </aside>
                <div class="catalog__inner-list">
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-1.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item product-item&#45;&#45;sale" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-2.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-3.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item product-item&#45;&#45;sale" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-4.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-5.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item product-item&#45;&#45;sale" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-6.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-7.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item product-item&#45;&#45;sale" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-8.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-9.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item product-item&#45;&#45;sale" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-10.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-11.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>
                    <div class="product-item__wrapper">
                        <button class="product-item__favorite"></button>
                        <button class="product-item__basket">
                            <img src="images/basket-white.svg" alt="">
                        </button>
                        <a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
                        <a class="product-item product-item&#45;&#45;sale" href="/product-page.html">
                            <p class="product-item__hover-text">посмотреть товар</p>
                            <img class="product-item__img" src="images/content/gidrotsikl-12.png" alt="">
                            <h4 class="product-item__title">Гидроцикл BRP SeaDoo GTI 130hp SE Black\Mango</h4>
                            <p class="price product-item__price">1 049 500 ₽</p>
                            <p class="product-item__notify-text">нет в наличии</p>
                        </a>
                    </div>

                    <div class="pagination">
                        <ul class="pagination-list">
                            <li class="pagination-list__item active"><a href="#">1</a></li>
                            <li class="pagination-list__item"><a href="#">2</a></li>
                            <li class="pagination-list__item"><a href="#">3</a></li>
                            <li class="pagination-list__item"><a href="#">4</a></li>
                            <li class="pagination-list__item"><a href="#">5</a></li>
                            <li class="pagination-list__item pagination-list__item&#45;&#45;dots"><span>...</span></li>
                            <li class="pagination-list__item"><a href="#">11</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>-->

    <x-footer></x-footer>
</x-layout>
