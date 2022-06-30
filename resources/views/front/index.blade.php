@extends('layout.front.master')
@section('content')
<div class="flexslider">

    <ul class="slides">
        @foreach($slider as $row)

        <li>

            <a href="https://www.brillux.com/company/news/company/packaging-design-2022/">


                <img src="{{asset('public/assets/images/slider/large/'.$row->slider_image)}}"
                    srcset="{{asset('public/assets/images/slider/large/'.$row->slider_image)}} 1600w,{{asset('public/assets/images/slider/large/'.$row->slider_image)}} 767w,{{asset('public/assets/images/slider/large/'.$row->slider_image)}} 992w,{{asset('public/assets/images/slider/large/'.$row->slider_image)}} 1200w,{{asset('public/assets/images/slider/large/'.$row->slider_image)}} 1600w"
                    sizes="100vw" alt="Familiar {{$gs->site_title}} quality in a new design"
                    title="Familiar {{$gs->site_title}} quality in a new design">


            </a>

            <div class="flex-caption">
                <div class="caption carousel-caption">


                    <span class="h1">{{$row->slider_title}}</span>
                    <span class="h2">The new packaging.</span>


                    <a href="https://www.brillux.com/company/news/company/packaging-design-2022/"
                        class="btn btn-default hidden-xs">..more <i class="fa fa-angle-right"></i></a>



                    <div class="trapez hidden-xs"></div>


                </div>
            </div>


        </li>
        @endforeach




    </ul>
</div>



<div class="container col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 text-center lead mb50 mt50">
    <h1>A perfect link</h1>
    <p>
    <p>Direct sales is the shortest link between our partners and us. We deliver quality directly. As a reliable
        manufacturer with complete product range and a wide range of services, we offer a perfect partnership
        that you benefit from every day. All this is {{$gs->site_title}}.</p>
    </p>
</div>
<div id="example3" class="accordion-slider pull-left">

    <div class="as-panels">

@foreach($categoryProduct as $row)
@php 
$category= App\Models\Category::find($row->category_id);
@endphp

        <div class="as-panel">
            <a href="/products/1001_paints-and-plasters/">



                <img src="{{asset('public/assets/images/link/'.$row->link_image)}}"
                    srcset="{{asset('public/assets/images/link/'.$row->link_image)}} 514w,{{asset('public/assets/images/link/'.$row->link_image)}} 375w,{{asset('public/assets/images/link/'.$row->link_image)}} 386w,{{asset('public/assets/images/link/'.$row->link_image)}} 448w,{{asset('public/assets/images/link/'.$row->link_image)}} 515w"
                    sizes="(min-width: 993px) 33vw, (min-width: 768px) 50vw, 75vw" class='as-background grayscale'
                    alt="Interior and facade colors" title="{{$category->category_name}}">




                <p class="as-layer as-opened as-white as-padding" data-position="bottomLeft" data-show-transition="up"
                    data-hide-transition="down" data-show-delay="700">{{$category->category_name}}<i class="fa fa-angle-right pull-right"></i>
                </p>
            </a>
        </div>

@endforeach




    </div>
</div>
<div class="container-fluid">
    <div class=" mt50 mb30 teaser-wide grey clearfix">

        <div class="col-md-3 col-xs-4 row"
            style="background-image: url({{asset('public/assets/fileadmin/redaktion/bilder/startseite/teaser_startseite_produktcollage.png')}})">
            <img src="{{asset('public/assets/templates/css/images/spacer.gif')}}" alt="{{$gs->site_title}} ..more than paint">
        </div>

        <div class="col-md-4 col-xs-8">
            <div class="vertical-zentriert">
                <h2>{{$gs->site_title}} ..more than paint</h2>
                <p>
                <p>Products for every purpose. Perfectly coordinated systems. You can get all of this locally to
                    you in our branches. In addition to all this, we offer services that make you even stronger.
                    Discover Brillux.</p>
                </p>

                <a href="/company/about-us/" class="btn btn-default">..more <i class="fa fa-angle-right"></i></a>

            </div>
        </div>

        <div class="col-md-5 hidden-xs hidden-sm"
            style="background-image: url({{asset('public/assets/fileadmin/redaktion/bilder/startseite/teaser-wide-brillux-scala-farbwelten.png')}});">
            <img src="{{asset('public/assets/templates/css/images/spacer.gif')}}" alt="Brillux ..more than paint"></div>

    </div>
</div>
<div class="  teaser-half pull-left">
    <div class="col-md-5 col-xs-4 "
        style="background-image: url({{asset('public/assets/fileadmin/redaktion/bilder/aktuelles/teaser-aktuelles_BX_Showroom-121-Webnews_300x300.png')}})">
        <a href="/company/news/"><img src="{{asset('public/assets/templates/css/images/spacer.gif')}}" alt=""></a></div>
    <div class="col-md-7 col-xs-8">
        <div class="vertical-zentriert text-right">
            <h2>News</h2>
            <p>
            <p>Keep up to date with the latest reports, trends and information on innovative products.</p>
            </p>

            <a href="/company/news/" class="btn btn-default">..more <i class="fa fa-angle-right"></i></a>

        </div>
    </div>
</div>
<div class="teaser-half pull-right">
    <div class="col-md-5 col-xs-4  pull-right"
        style="background-image: url({{asset('public/assets/fileadmin/redaktion/bilder/startseite/teaser_referenzen_startseite_300px.jpg')}})">
        <a href="/service/references/"><img src="{{asset('public/assets/templates/css/images/spacer.gif')}}" alt=""></a>
    </div>
    <div class="col-md-7 col-xs-8">
        <div class="vertical-zentriert">
            <h2>References</h2>
            <p>
            <p>Variety in form and function: Single family home or industrial building, historical building
                structure or modern nurseries.</p>
            </p>

            <a href="/service/references/" class="btn btn-default">..more <i class="fa fa-angle-right"></i></a>

        </div>
    </div>
</div>
@endsection