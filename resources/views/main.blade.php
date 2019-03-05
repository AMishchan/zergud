@extends('welcome')

@section('content')

    <p>"СтройЭлемент"- надёжный партнёр на рынке строительных материалов г. Харькова</p>

    <p>
        <strong>"Строй Элемент"</strong>открывает вам возможность приобрести
        качественные стройматериалы в Харькове по оптимальной цене. Основами
        наших материалов без которых, в сущности, невозможен сам процесс
        строительства и возведения зданий относятся: кирпич, песок, бетон,
        щебень, пеноблок, шлакоблок, керамзит. Все строительные материалы
        сертифицированы и доставляются заказчику в кротчайшие сроки и в любых
        объемах
    </p>
    <h1>Строительные Материалы:</h1>

    <div class="home-page-nav">
        @if(count($categorys))
			@for($i = 0; $i < count($categorys); $i++)
				<div style="float: left; width:50%; clear:both; padding-top: 10px;">
					<img src="/images/categorys/{{ $categorys[$i]['image_name'] }}" alt="{{ $categorys[$i]['image_alt'] }}">
				</div>
				<div style="float: left; width:46%; padding:2%;">
					<a href="/category/{{ $categorys[$i]['slug'] }}" title="{{ $categorys[$i]['slug'] }}"><h3>{{ $categorys[$i]['name'] }}</h3></a>
					{!! $categorys[$i]['intro_description'] !!}
				</div>
			@endfor
        @endif
    </div>
@endsection