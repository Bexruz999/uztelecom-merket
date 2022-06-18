<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap"
	rel="stylesheet">
	<link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" >
</head>
<body>
<style>
	.sale-item__price-new::after{
		background-image:url("{{ asset('/images/marketplace/icons-price.svg') }}");
		}
	.sale-item__price-old::after{
		background-image:url("{{ asset('/images/marketplace/icon-price-old.svg') }}");
		}
	.categories__item-text::after{
		content:url("{{ asset('/images/marketplace/link-arrow.svg') }}");
		}
	.sale-item__price-old{
		background-image:url("{{ asset('/images/marketplace/old-line.svg') }}");
		}
	.header__adress::before{
		background-image:url("{{ asset('/images/marketplace/address-icon.svg') }}");
		}
	.product-item__favorite::before {
		background-image:url("{{ asset('/images/marketplace/favorite.svg') }}");
		}
	.product-item__favorite--active::before {
		background-image:url("{{ asset('/images/marketplace/favorite-active.svg') }}");
		}
	.breadcrumbs__list-item::after {
		background-image:url("{{ asset('/images/marketplace/link-arrow.svg') }}");
		}
	.flter__item-drop::before {
		background-image:url("{{ asset('/images/marketplace/arrow-down.svg') }}");
		}
	.jq-checkbox.checked .jq-checkbox__div {
		background-image:url("{{ asset('/images/marketplace/checked-icon.svg') }}");
		}
	.jq-selectbox__trigger {
		background-image:url("{{ asset('/images/marketplace/arrow-down.svg') }}");
		}
	.filter__extra::after {
		background-image:url("{{ asset('/images/marketplace/arrow-down.svg') }}");
	}
	.product-card__price-old {
		background-image:url("{{ asset('/images/marketplace/old-line.svg') }}");
		}
	.search__content-btn {
		background-image:url("{{ asset('/images/marketplace/search.svg') }}");
		}
	.footer__topdrop {
		background-image:url("{{ asset('/images/marketplace/arrow-down.svg') }}");
		}
	﻿
	@font-face{
		font-family:'SFProDisplay-Regular',
		sans-serif;src:url("{{ asset('assets/fonts/SFProDisplay-Regular.woff2') }}") format("woff2"),
		url("{{ asset('assets/fonts/SFProDisplay-Regular.woff') }}") format("woff");
		font-weight:400;
		font-style:normal;
		font-display:swap
		}

	@font-face{
		font-family:'SFProDisplay-Medium', sans-serif;
		src:url("{{ asset('assets/fonts/SFProDisplay-Medium.woff2') }}") format("woff2"),
		url("{{ asset('assets/fonts/SFProDisplay-Medium.woff') }}") format("woff");
		font-weight:400;
		font-style:normal;
		font-display:swap
		}

	@font-face{font-family:'SFProDisplay-Semibold', sans-serif;
		src:url("{{ asset('assets/fonts/SFProDisplay-Semibold.woff2') }}") format("woff2"),
		url("{{ asset('assets/fonts/SFProDisplay-Semibold.woff') }}") format("woff");
		font-weight:600;
		font-style:normal;
		font-display:swap
		}

	@font-face{font-family:'SFProDisplay-Bold', sans-serif;
		src:url("{{ asset('assets/fonts/SFProDisplay-Bold.woff2') }}") format("woff2"),
		url("{{ asset('assets/fonts/SFProDisplay-Bold.woff') }}") format("woff");
		font-weight:700;
		font-style:normal;
		font-display:swap
		}

	@font-face{font-family:'SFProDisplay-Medium', sans-serif;
		src:url("{{ asset('assets/fonts/SFProDisplay-Medium.woff2') }}") format("woff2"),
		url("{{ asset('assets/fonts/SFProDisplay-Medium.woff') }}") format("woff");
		font-weight:500;
		font-style:normal;
		font-display:swap
		}
</style>

{{ $slot }}

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.formstyler.min.js') }}"></script>
<script src="{{ asset('assets/js/ion.rangeSlider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.rateyo.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
