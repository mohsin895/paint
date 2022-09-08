@extends('layout.front.master')
@section('content')
<style>
    <style>
    .laravel-embed__responsive-wrapper { position: relative; height: 0; overflow: hidden; max-width: 100%; } 
    .laravel-embed__fallback { background: rgba(0, 0, 0, 0.15); color: rgba(0, 0, 0, 0.7); display: flex; align-items: center; justify-content: center; } 
    .laravel-embed__fallback,
    .laravel-embed__responsive-wrapper iframe,
    .laravel-embed__responsive-wrapper object,
    .laravel-embed__responsive-wrapper embed { position: absolute; top: 0; left: 0; width: 350px; height: 230px;margin-bottom:10px; }
</style>

    </style>
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="#" target="_self" property="item"
                typeof="WebPage"><span property="name">Media<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">Video Gallery<span>
                    <meta property="position" content="2">
        </li>
    </ul>
</div>
<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->


<div class="flexslider content">


    <ul class="slides">


        <li>

        <img src="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1200w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w"
                sizes="100vw" alt="Floor">

        </li>


    </ul>
</div>
<!-- Backend Layout: Kopfbereich END -->

<!-- TS: lib.subnavigationwithankernav BEGIN -->
<div class="subnavigation grey">
    <ul class="container nav navbar-nav sprungmarken_large">
        
        <li class="dropdown"><a href="/company/news/" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i>Video Gallery</a>
            <ul class="dropdown-menu">
            <li><a href="{{url('media/library/image')}}" title="Documents and videos"> Image Gallery</a></li>
                                    <li><a href="{{url('media/library/video')}}" title="Documents and videos">Video Gallery</a></li>
                 </ul>
        </li>
    </ul>
</div>
<!-- TS: lib.subnavigationwithankernav END -->

<!-- Backend Layout: Inhaltsbereich BEGIN -->
<!--TYPO3SEARCH_begin-->


<h4 class="container text-left" style="font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 32px;
line-height: 38px;
/* identical to box height */

text-align: justify;

color: #000000; border-bottom:1px solid #000000"><span>Video Gallary</span></h4>
<div id="c52426" class="frame frame-default frame-type-list frame-layout-0">
    <div class="clearfix">&nbsp;</div>
    <div class="container news-list-container clear-block">
        @foreach($video as $row)
        <div class=" col-xs-12 col-lg-4" style="max-height:200px;margin-bottom:50px">
            <div class="col-xs-12 col-sm-5 col-lg-12 " ><a
                    href="{{$row->url}}"
                    title="{{$row->news_heading}}"><x-embed url="{{$row->url}}" /> </a></div>
            
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
        </div>
        @endforeach
        <div class="col-xs-12 news-list-browse"></div>
    </div>
</div>


@endsection