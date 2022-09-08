@extends('layout.front.master')
@section('content')
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="/company/" target="_self" property="item"
                typeof="WebPage"><span property="name">Company<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">News<span>
                    <meta property="position" content="2">
        </li>
    </ul>
</div>

<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->

<div class="flexslider content">


    <ul class="slides">


        <li>

            <img src="{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}} 1200w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}} 1600w"
                sizes="100vw" alt="News">

        </li>


    </ul>
</div>


<!-- Backend Layout: Kopfbereich END -->

<!-- TS: lib.subnavigationwithankernav BEGIN -->
<div class="subnavigation grey">
    <ul class="container nav navbar-nav sprungmarken_large">
        
        <li class="dropdown"><a href="/company/news/" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i>News</a>
            <ul class="dropdown-menu">
            <li><a href="{{url('company/about-us')}}" title="About us">About us</a></li>
                            <li class="haschildren"><a href="{{url('company/brances')}}" title="Branches">Branches</a>
                                
                            </li>
                            <li><a href="{{url('company/news')}}" title="News">News & Blog</a></li>
           
            </ul>
        </li>
    </ul>
</div>
<!-- TS: lib.subnavigationwithankernav END -->

<!-- Backend Layout: Inhaltsbereich BEGIN -->
<!--TYPO3SEARCH_begin-->


<div class="tx-dce-pi1" style="margin-top:30px">
<div class="container mb20">

<div class="flexslider schmal">

    <ul class="slides">

       <li>

       <img src="{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e265d181ea.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_467fd4cf9c.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_1d2f1d0545.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e82eb3e78a.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_56a4fa34d4.jpg')}} 1200w,{{asset('public/assets/fileadmin/redaktion/bilder/unternehmen/ueber-uns/header_ueber-uns_0004_Ebene-1_1600x540px.jpg')}} 1600w"
                sizes="100vw" alt="About us">

       </li>


    </ul>
</div>
</div>
</div>


<h4 class="container text-left" style="font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 32px;
line-height: 38px;
/* identical to box height */

text-align: justify;

color: #000000; border-bottom:1px solid #000000"><span>News & Blog</span></h4>
<div id="c52426" class="frame frame-default frame-type-list frame-layout-0">
    <div class="clearfix">&nbsp;</div>
    <div class="container news-list-container clear-block">
        @foreach($news as $row)
        <div class=" col-xs-12 col-lg-6" >
            <div class="col-xs-12 col-sm-5 col-lg-12 news-list-img"><a
                    href="{{url('company/news/details',$row['slug'])}}"
                    title="{{$row->news_heading}}"><img
                        src="{{asset('public/assets/images/news/'.$row->news_image)}}"
                        style="width:100%" alt=""></a></div>
            <div class="col-xs-12 col-sm-7 col-lg-12" style="margin-top:20px">
                <div style="border-bottom: 1px solid #000000;border-left: 1px solid #000000; border-right: 1px solid #000000;margin-left:3px;margin-right:-3px">
                
                <p style="font-family: 'Roboto';font-style: normal;font-weight: 400;font-size: 32px;line-height: 38px;color: #000000;margin-left: 15px; margin-bottom: 10px;"><a href="{{url('company/news/details',$row['slug'])}}"
                        title="{{$row->news_heading}}">{{$row->news_heading}} </a></p>
                        <h5 class="news-list-date" style=" margin-left: 15px; margin-bottom: 10px;">{{$row->created_at->format('d/m/Y')}}</h5>
</div>
                
            </div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
        </div>
        @endforeach
        <div class="col-xs-12 news-list-browse"></div>
    </div>
</div>


@endsection