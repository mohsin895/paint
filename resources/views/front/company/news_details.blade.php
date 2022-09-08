@extends('layout.front.master')
@section('content')

<!-- TS: lib.breadcrumbnavigation BEGIN -->
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="/company/" target="_self" property="item"
                typeof="WebPage"><span property="name">Company<span></a>
            <meta property="position" content="1">
        </li>
        <li property="itemListElement" typeof="ListItem"><a href="/company/news/" target="_self" property="item"
                typeof="WebPage"><span property="name">News<span></a>
            <meta property="position" content="2">
        </li>
        </li>
    </ul>
</div>
<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->

<div class="flexslider schmal">
    <ul id="c104401" class="slides">
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
        
        <li class="dropdown"><a href="/company/news/company/packaging-design-2022/" class="dropdown-toggle"
                data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i
                    class="fa fa-bars"></i>News Details</a>
            <ul class="dropdown-menu">
                 </ul>
        </li>
    </ul>
</div>
<!-- TS: lib.subnavigationwithankernav END -->

<!-- Backend Layout: Inhaltsbereich BEGIN -->
<!--TYPO3SEARCH_begin-->

<div class="tx-dce-pi1">

    
    <div class="tx-dce-pi1">

        <div class="container mb20" id="c104412">

            <div class="col-md-12 copy mb20 mt20 row">
                <h1>


                </h1>



                <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12 pull-right">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="mt-20" style="font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 36px;
line-height: 42px;

color: #000000;">
{{$news->news_heading}}

                        </div>


                        <div class="mb20 mt20">

                        </div>
                        <div class="row">

                            <div class="flexslider3  big steuerelemente ">
                                <ul class="slides">
                                    <li>
                                        <a class="big_picture"
                                            href="{{asset('public/assets/images/news/details/'.$news->news_image)}}"
                                            title="" rel="Gruppe104412">

                                            <img src="{{asset('public/assets/images/news/details/'.$news->news_image)}}"
                                                srcset="{{asset('public/assets/images/news/details/'.$news->news_image)}} 350w,{{asset('public/assets/images/news/details/'.$news->news_image)}} 283w,{{asset('public/assets/images/news/details/'.$news->news_image)}} 345w,{{asset('public/assets/images/news/details/'.$news->news_image)}} 720w,{{asset('public/assets/images/news/details/'.$news->news_image)}} 1110w"
                                                sizes="calc(100vw - 30px)" alt="">

                                        </a>

                                    </li>




                                </ul>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="tx-dce-pi1">

        <div id="c104410" class="container">
            <div class="col-md-12 copy mb20 mt20 row">
                <div class="row">
                    <div class="clearfix">&nbsp;</div>


                    <p>{!! $news->description !!}
                        <table class="contenttable">
                            <tbody> </tbody>
                        </table>
                    </p>



                    <div class="clearfix">&nbsp;</div>
                </div>
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

color: #000000; border-bottom:1px solid #000000"><span>Relatad Articles</span></h4>
    
<div id="c52426" class="frame frame-default frame-type-list frame-layout-0">

    <div class="clearfix">&nbsp;</div>
    <div class="container  clear-block">
    
        @foreach($newsall as $row)
        <div class=" col-xs-12 col-lg-4" >
            <div class="col-xs-12 col-sm-5 col-lg-12 news-list-img" style="margin-bottom:-125px"><a
                    href="{{url('company/news/details',$row['slug'])}}"
                    title="{{$row->news_heading}}"><img
                        src="{{asset('public/assets/images/news/'.$row->news_image)}}"
                        style="width:100%;margin-bottom:-125px" alt=""></a></div>
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
