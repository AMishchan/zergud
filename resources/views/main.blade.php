@extends('welcome')

@section('content')

    <p>"Zergud"- надёжный партнёр на рынке строительных материалов г. Харькова</p>

    <p>
        <strong>"Zergud"</strong>открывает вам возможность приобрести
        качественные стройматериалы в Харькове по оптимальной цене. Основами
        наших материалов без которых, в сущности, невозможен сам процесс
        строительства и возведения зданий относятся: кирпич, песок, бетон,
        щебень, пеноблок, шлакоблок, керамзит. Все строительные материалы
        сертифицированы и доставляются заказчику в кротчайшие сроки и в любых
        объемах
    </p>
    <h1>Строительные Материалы:</h1>

    <div class="container home-page-nav">
        @if(count($categorys))
			@for($i = 0; $i < count($categorys); $i++)
				<div class="row main-page-category-img">
					<img src="/images/categorys/{{ $categorys[$i]['image_name'] }}" alt="{{ $categorys[$i]['image_alt'] }}">
				</div>
				<div class="row main-page-category-full-desc">
					<a href="/category/{{ $categorys[$i]['slug'] }}" title="{{ $categorys[$i]['slug'] }}"><h3>{{ $categorys[$i]['name'] }}</h3></a>
					{!! htmlspecialchars_decode($categorys[$i]['intro_description']) !!}
				</div>
			@endfor
        @endif
    </div>
@endsection