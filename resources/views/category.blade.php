@extends('welcome')

@section('content')

    <h1>{{ $category['name'] }}</h1>

    <div id="textBlock">

        @if(count($items))
            <div class="wrapper">
                <ul class="products clearfix">
				@for($i = 0; $i < count($items); $i++)
                    <li class="product-wrapper">
                        <div class="product">
                            <div class="product-main">
                                <div class="product-photo">
                                    <img src="/images/items/{{$items[$i]->image_name}}" alt="{{$items[$i]->image_alt}}">
                                </div>
                                <div class="product-text">
                                    <h4 class="produvt-name">{{$items[$i]->name}}</h4>
                                    {{$items[$i]->characteristics}}
                                    @if ($items[$i]->existence == 1)
										<div class="product-icons"></div>
									@endif
                                </div>
                            </div>
                            <div class="product-details-wrap"> 
                                <div class="product-details">
                                    @if ($items[$i]->existence == 1)
										<div class="product-availability"><span class="icon icon-check"></span>В наличии</div>
									@endif
                                    <!--<span class="product-price product-price-old">
                                        <b>2550</b>
                                        <small>грн.</small>
                                    </span>-->
                                    <span class="product-price">
                                        <b>{{ number_format( (float) $items[$i]->price, 2) }}</b>
                                        <small>грн</small>
                                    </span>
                                </div>
                                <div class="product-buttons-wrap">
                                    <div class="buttons">
                                        <div class="ulightbox oneClick"><span class="button">Купить в 1 клик</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
					@endfor
                </ul>
            </div>
        @else
            <div class="alert-info">Товара в данной категории еще нет</div>
        @endif

        {!! $category['full_description'] !!}
    </div>

@endsection