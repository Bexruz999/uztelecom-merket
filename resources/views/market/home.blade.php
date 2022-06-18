<x-layout>


	<x-header/>

	<x-section-banner>
		@foreach($pictures as $image)
			<a class="banner-section__slider-item" href="#">
				<img class="banner-section__slider-img" src="{{ Voyager::image($image) }}" alt="">
			</a>
		@endforeach
	</x-section-banner>

	<x-search/>

	<x-categories>
		@foreach($categories as $caregory)
			<a class="categories__item" href="{{ route('marketplace.categories', ['category' => $caregory->name]) }}">
				<div class="categories__item-info">
					<h4 class="categories__item-title">Квадроциклы</h4>
					<p class="categories__item-text">Подробее</p>
				</div>
				<div class="categories__item-img">
					<img class="" src="{{ Voyager::image($caregory->image) }}" alt="">
				</div>
			</a>
		@endforeach
	</x-categories>

	<x-products/>

	<div class="banner">
		<div class="container">
			<a class="banner__link" href="#">
				<img src="{{ Voyager::image($banner) }}" alt="">
			</a>
		</div>
	</div>

	<section class="products">
		<div class="container">
			<div class="products__inner">
				<h3 class="product__title">С этим товаром покупают</h3>
				<div class="tabs-wrapper">
					<div class="tabs products__tabs mobile-overflow">
						<a class="tab products__tab tab--active" href="#popular-tab-1">запчасти</a>
						<a class="tab products__tab" href="#popular-tab-2">моторы</a>
						<a class="tab products__tab" href="#popular-tab-3">шины</a>
						<a class="tab products__tab" href="#popular-tab-4">электроника</a>
						<a class="tab products__tab" href="#popular-tab-5">инструменты</a>
						<a class="tab products__tab" href="#popular-tab-6">инструменты</a>
					</div>
				</div>

				<div class="tabs-container products__container">
					<div id="popular-tab-1" class="tabs-content products__content tabs-content--active">

						<div class="product-slider">

							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-1.png" alt="">
										<h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
										<p class="price product-item__price">9 800 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-2.png" alt="">
										<h4 class="product-item__title">Спасательный жилет BRP Men's Airflow PFD</h4>
										<p class="price product-item__price">6 900 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-3.png" alt="">
										<h4 class="product-item__title">BRP Audio-Premium System</h4>
										<p class="price product-item__price">68 000 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper product-item__not-available">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-4.png" alt="">
										<h4 class="product-item__title">Спасательное снаряжение</h4>
										<p class="price product-item__price">8 800 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-1.png" alt="">
										<h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
										<p class="price product-item__price">9 800 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-2.png" alt="">
										<h4 class="product-item__title">Спасательный жилет BRP Men's Airflow PFD</h4>
										<p class="price product-item__price">6 900 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-3.png" alt="">
										<h4 class="product-item__title">BRP Audio-Premium System</h4>
										<p class="price product-item__price">68 000 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper product-item__not-available">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-4.png" alt="">
										<h4 class="product-item__title">Спасательное снаряжение</h4>
										<p class="price product-item__price">8 800 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>

						</div>
					</div>
					<div id="popular-tab-2" class="tabs-content products__content">
						<div class="product-slider">

							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-1.png" alt="">
										<h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
										<p class="price product-item__price">9 800 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-2.png" alt="">
										<h4 class="product-item__title">Спасательный жилет BRP Men's Airflow PFD</h4>
										<p class="price product-item__price">6 900 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-3.png" alt="">
										<h4 class="product-item__title">BRP Audio-Premium System</h4>
										<p class="price product-item__price">68 000 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper product-item__not-available">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-4.png" alt="">
										<h4 class="product-item__title">Спасательное снаряжение</h4>
										<p class="price product-item__price">8 800 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-1.png" alt="">
										<h4 class="product-item__title">Водонепроницаемый Рюкзак</h4>
										<p class="price product-item__price">9 800 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-2.png" alt="">
										<h4 class="product-item__title">Спасательный жилет BRP Men's Airflow PFD</h4>
										<p class="price product-item__price">6 900 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-3.png" alt="">
										<h4 class="product-item__title">BRP Audio-Premium System</h4>
										<p class="price product-item__price">68 000 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
							<div class="product-slider__item">
								<div class="product-item__wrapper product-item__not-available">
									<button class="product-item__favorite"></button>
									<button class="product-item__basket">
										<img src="images/basket-white.svg" alt="">
									</button>
									<a class="product-item__notify-link" href="#"><span>Сообщить о поступлении</span></a>
									<a class="product-item product-item--sale" href="#">
										<p class="product-item__hover-text">посмотреть товар</p>
										<img class="product-item__img" src="images/content/product-4.png" alt="">
										<h4 class="product-item__title">Спасательное снаряжение</h4>
										<p class="price product-item__price">8 800 ₽</p>
										<p class="product-item__notify-text">нет в наличии</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div id="popular-tab-3" class="tabs-content products__content">slider-3</div>
					<div id="popular-tab-4" class="tabs-content products__content">slider-4</div>
					<div id="popular-tab-5" class="tabs-content products__content">slider-5</div>
					<div id="popular-tab-6" class="tabs-content products__content">slider-6</div>
				</div>
			</div>
		</div>
	</section>

	<x-footer></x-footer>

</x-layout>
