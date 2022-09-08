@extends('layout.front.master')
@section('content')
<div class="breadcrumb">
    <ul class="container" vocab="" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="#" target="_self" property="item"
                typeof="WebPage"><span property="name">Media<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">Image Gallery<span>
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
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i>Image Gallery</a>
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

color: #000000; border-bottom:1px solid #000000"><span>Photo Gallary</span></h4>
<div id="c52426" class="frame frame-default frame-type-list frame-layout-0">
    <div class="clearfix">&nbsp;</div>
    <div class="container news-list-container clear-block">
        @foreach($image as $row)
        <div class="news-list-item col-xs-12 col-sm-4 col-md-4 col-lg-3">
           <a
                    href="#"
                    title="{{$gs->website_name}}"><img
                        src="{{asset('public/assets/images/galleryImage/'.$row->company_image)}}"
                         alt=""></a>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
        </div>
        @endforeach
        <div class="col-xs-12 news-list-browse"></div>
    </div>
</div>


@endsection