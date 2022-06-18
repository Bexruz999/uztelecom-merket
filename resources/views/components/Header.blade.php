    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top-inner">
                    <nav class="menu">
                        <button class="menu__btn">
                            <div class="menu__btn-line"></div>
                            <div class="menu__btn-line"></div>
                            <div class="menu__btn-line"></div>
                        </button>
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a class="menu__link" href="">
                                    Магазины
                                </a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="">
                                    Акции
                                </a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="">
                                    Доставка и оплата
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <a class="logo" href="#">
                        <img class="logo__img" src="{{ asset('images/marketplace/logo.svg') }}" alt="">
                    </a>
                    <div class="header__box">
                        <p class="header__adress">
                            Москва, ул. Науки 25
                        </p>
                        <ul class="user-list">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="user-list__item">
                                    <a class="user-list__link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="user-list">
                            <li class="user-list__item">
                                <a class="user-list__link" href="">
                                    <img src="{{ asset('images/marketplace/heart.svg') }}" alt="">
                                </a>
                            </li>
                            <li class="user-list__item">
                                <a class="user-list__link" href="">
                                    <img src="{{ asset('images/marketplace/user.svg') }}" alt="">
                                </a>
                            </li>
                            <li class="user-list__item">
                                <a class="user-list__link basket" href="">
                                    <img src="{{ asset('images/marketplace/basket.svg') }}" alt="">
                                    <p class="basket__num">1</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="menu-mobile__list">
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <img class="menu-mobile__img" src="{{ asset('images/marketplace/user.svg') }}" alt="">
                    <p>войти</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <img class="menu-mobile__img" src="images/user.svg" alt="">
                    <p>Регистрация</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <img class="menu-mobile__img" src="images/heart.svg" alt="">
                    <p>Избранное</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <img class="menu-mobile__img" src="images/basket.svg" alt="">
                    <p>Корзина</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <img class="menu-mobile__img" src="images/house.svg" alt="">
                    <p>Магазины</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <img class="menu-mobile__img" src="images/procent.svg" alt="">
                    <p>Акции</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <img class="menu-mobile__img" src="images/box.svg" alt="">
                    <p>Доставка и оплата</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>войти</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>Квадроциклы</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>Катера</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>Гидроциклы</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>Лодки</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>Вездеходы</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>Снегоходы</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>Двигатели</p>
                </a>
            </li>
            <li class="menu-mobile__item"><a class="menu-mobile__link" href="">
                    <p>Запчасти</p>
                </a>
            </li>
        </ul>
        <div class="menu__mobile-linewrapper">
            <ul class="menu__mobile-line">
                <li class="menu__item">
                    <a class="menu__link" href="">
                        Магазины
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="">
                        Акции
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu__link" href="">
                        Доставка и оплата
                    </a>
                </li>
            </ul>
        </div>
        <div class="header__bottom">
            <div class="container">
                <ul class="menu-categories">
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="#">Квадроциклы</a>
                    </li>
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="#">Катера</a>
                    </li>
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="/catalog.html">Гидроциклы</a>
                    </li>
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="#">Лодки</a>
                    </li>
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="#">Вездеходы</a>
                    </li>
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="#">Снегоходы</a>
                    </li>
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="#">Двигатели</a>
                    </li>
                    <li class="menu-categories__item">
                        <a class="menu-categories__link" href="#">Запчасти</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
