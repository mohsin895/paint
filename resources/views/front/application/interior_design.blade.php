@extends('layout.front.master')
@section('content')
@php 
$applicationcategory= App\Models\Category::where('module_id','3')->get();
if(!empty($application->category_id)){
$navbar = App\Models\Category::where('id',$application->category_id)->first();
}else{

}
@endphp

<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="#" target="_self" property="item"
                typeof="WebPage"><span property="name">Applications<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">@if(!empty($navbar)){{$navbar->category_name}} @else @endif<span>
                    <meta property="position" content="2">
        </li>
    </ul>
</div>
<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->

<div class="flexslider schmal">


    <ul class="slides">


        <li>




<!-- 
            <img src="{{asset('public/assets/fileadmin/_processed_/0/0/csm_header_BX_Senden-GrothuesPotthoff-56_1600x540px_34a4a8cdbe.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/0/0/csm_header_BX_Senden-GrothuesPotthoff-56_1600x540px_34a4a8cdbe.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/0/0/csm_header_BX_Senden-GrothuesPotthoff-56_1600x540px_e747f441b2.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/0/0/csm_header_BX_Senden-GrothuesPotthoff-56_1600x540px_5de1e358b6.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/0/0/csm_header_BX_Senden-GrothuesPotthoff-56_1600x540px_0e08ec6580.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/0/0/csm_header_BX_Senden-GrothuesPotthoff-56_1600x540px_b0e797e24d.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/0/0/csm_header_BX_Senden-GrothuesPotthoff-56_1600x540px_066db4f979.jpg')}} 1200w,{{asset('public/assets/fileadmin/redaktion/bilder/anwendungen/innenraumgestaltung/header_BX_Senden-GrothuesPotthoff-56_1600x540px.jpg')}} 1600w"
                sizes="100vw" alt="Interior design"> -->


                
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
        <li id="bxtoolbarmenuwrap" class="dropdown navbar-right"><a href="#" class="dropdown-toggle"
                data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
         
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"
                role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i>@if(!empty($navbar)){{$navbar->category_name}} @else @endif</a>
            <ul class="dropdown-menu">
            @foreach($applicationcategory as $row)
         <li><a href="{{url('applications/interior-design',$row['slug'])}}" title="{{$row->cateory_name}}"><span>{{$row->category_name}}</span></a></li>
          @endforeach
            </ul>
        </li>
    </ul>
</div>
<!-- TS: lib.subnavigationwithankernav END -->

<!-- Backend Layout: Inhaltsbereich BEGIN -->
<!--TYPO3SEARCH_begin-->
@if(!empty($application))


<div class="container mb20 mt-10" >
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 teaser"><a href="#"><img
                    src="{{asset('public/assets/images/application/'.$application->application_image8)}}"
                    srcset="{{asset('public/assets/images/application/'.$application->application_image8)}} 800w,{{asset('public/assets/images/application/'.$application->application_image8)}} 120w,{{asset('public/assets/images/application/'.$application->application_image8)}} 195w,{{asset('public/assets/images/application/'.$application->application_image8)}} 210w,{{asset('public/assets/images/application/'.$application->application_image8)}} 284w,{{asset('public/assets/images/application/'.$application->application_image8)}} 330w,{{asset('public/assets/images/application/'.$application->application_image8)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt="" style="height:300px;margin-top:20px"></a></div>
       </div>
</div>

<div class="tx-dce-pi1">


    <div class="container">

        <div class="col-md-12 copy mb30 mt20 row">

            <div class="row">
                <span style="font-family: 'Roboto';
font-style: normal;
font-weight: 500;
font-size: 32px;
line-height: 38px;
/* identical to box height */


color: #868686;">@if(!empty($navbar)){{$navbar->category_name}} @else @endif</span><br>

<span class="mb30" style="font-family: 'Roboto';
font-style: normal;
font-weight: 500;
font-size: 40px;
line-height: 47px;
/* identical to box height */


color: #000000;">{{$application->main_header}}</span>

         <div class="col-md-12 col-sm-12 col-xs-12 mb20 " style="">

         {!! $application->main_description !!}

              </div>

            </div>
        </div>
    </div>
</div>
<div class="container mb20">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-6 teaser"><a href="#"><img
                    src="{{asset('public/assets/images/application/'.$application->application_image1)}}"
                    srcset="{{asset('public/assets/images/application/'.$application->application_image1)}} 800w,{{asset('public/assets/images/application/'.$application->application_image1)}} 120w,{{asset('public/assets/images/application/'.$application->application_image1)}} 195w,{{asset('public/assets/images/application/'.$application->application_image1)}} 210w,{{asset('public/assets/images/application/'.$application->application_image1)}} 284w,{{asset('public/assets/images/application/'.$application->application_image1)}} 330w,{{asset('public/assets/images/application/'.$application->application_image1)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt=""></a></div>
        <div class="col-md-4 col-sm-4 col-xs-6 teaser"><a href="#"><img
                    src="{{asset('public/assets/images/application/'.$application->application_image2)}}"
                    srcset="{{asset('public/assets/images/application/'.$application->application_image2)}} 800w,{{asset('public/assets/images/application/'.$application->application_image2)}} 120w,{{asset('public/assets/images/application/'.$application->application_image2)}} 195w,{{asset('public/assets/images/application/'.$application->application_image2)}} 210w,{{asset('public/assets/images/application/'.$application->application_image2)}} 284w,{{asset('public/assets/images/application/'.$application->application_image2)}} 330w,{{asset('public/assets/images/application/'.$application->application_image2)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt=""></a></div>
        <div class="col-md-4 col-sm-4 col-xs-6 teaser"><a href="#"><img
                    src="{{asset('public/assets/images/application/'.$application->application_image3)}}"
                    srcset="{{asset('public/assets/images/application/'.$application->application_image3)}} 800w,{{asset('public/assets/images/application/'.$application->application_image3)}} 120w,{{asset('public/assets/images/application/'.$application->application_image3)}} 195w,{{asset('public/assets/images/application/'.$application->application_image3)}} 210w,{{asset('public/assets/images/application/'.$application->application_image3)}} 284w,{{asset('public/assets/images/application/'.$application->application_image3)}} 330w,{{asset('public/assets/images/application/'.$application->application_image3)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt=""></a></div>
       </div>
</div>

<div class="tx-dce-pi1">


    <div class="container">

        <div class="col-md-12 copy mb30 mt20 row">

            <h1>


                <span class="" style="font-family: 'Roboto';
font-style: normal;
font-weight: 500;
font-size: 40px;
line-height: 47px;
/* identical to box height */


color: #000000;margin-bottom:30px">Experts Pic</span>

             
            </h1>
        </div>
    </div>
</div>


<div class="container mb50">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-6 teaser"><a href="#"><img
                    src="{{asset('public/assets/images/application/'.$application->application_image4)}}"
                    srcset="{{asset('public/assets/images/application/'.$application->application_image4)}} 800w,{{asset('public/assets/images/application/'.$application->application_image4)}} 120w,{{asset('public/assets/images/application/'.$application->application_image4)}} 195w,{{asset('public/assets/images/application/'.$application->application_image4)}} 210w,{{asset('public/assets/images/application/'.$application->application_image4)}} 284w,{{asset('public/assets/images/application/'.$application->application_image4)}} 330w,{{asset('public/assets/images/application/'.$application->application_image4)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt=""></a></div>
        <div class="col-md-3 col-sm-3 col-xs-6 teaser"><a href="#"><img
                    src="{{asset('public/assets/images/application/'.$application->application_image5)}}"
                    srcset="{{asset('public/assets/images/application/'.$application->application_image5)}} 800w,{{asset('public/assets/images/application/'.$application->application_image5)}} 120w,{{asset('public/assets/images/application/'.$application->application_image5)}} 195w,{{asset('public/assets/images/application/'.$application->application_image5)}} 210w,{{asset('public/assets/images/application/'.$application->application_image5)}} 284w,{{asset('public/assets/images/application/'.$application->application_image5)}} 330w,{{asset('public/assets/images/application/'.$application->application_image5)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt=""></a></div>
        <div class="col-md-3 col-sm-3 col-xs-6 teaser"><a href="#"><img
                    src="{{asset('public/assets/images/application/'.$application->application_image6)}}"
                    srcset="{{asset('public/assets/images/application/'.$application->application_image6)}} 800w,{{asset('public/assets/images/application/'.$application->application_image6)}} 120w,{{asset('public/assets/images/application/'.$application->application_image6)}} 195w,{{asset('public/assets/images/application/'.$application->application_image6)}} 210w,{{asset('public/assets/images/application/'.$application->application_image6)}} 284w,{{asset('public/assets/images/application/'.$application->application_image6)}} 330w,{{asset('public/assets/images/application/'.$application->application_image6)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt=""></a></div>
        <div class="col-md-3 col-sm-3 col-xs-6 teaser"><a href="#"><img
                    src="{{asset('public/assets/images/application/'.$application->application_image7)}}"
                    srcset="{{asset('public/assets/images/application/'.$application->application_image7)}} 800w,{{asset('public/assets/images/application/'.$application->application_image7)}} 120w,{{asset('public/assets/images/application/'.$application->application_image7)}} 195w,{{asset('public/assets/images/application/'.$application->application_image7)}} 210w,{{asset('public/assets/images/application/'.$application->application_image7)}} 284w,{{asset('public/assets/images/application/'.$application->application_image7)}} 330w,{{asset('public/assets/images/application/'.$application->application_image7)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt=""></a>
        </div>
    </div>
</div>



<div class="tx-dce-pi1">


    <div class="container">

        <div class="col-md-12 copy mb30 mt20 row">

            <div class="row">
                
<span class="mb30" style="font-family: 'Roboto';
font-style: normal;
font-weight: 500;
font-size: 40px;
line-height: 47px;
/* identical to box height */


color: #000000;">{{$application->long_header}}</span>

         <div class="col-md-12 col-sm-12 col-xs-12 mb0">


{!! $application->long_description !!}

              </div>

            </div>
        </div>
    </div>
</div>
@else 


@endif

<div class="tx-dce-pi1">


    <div class="container">

        <div class="col-md-12 copy mb30 mt20 row">

            <h1>


                <span class="h2" style="font-family: 'Roboto';
font-style: normal;
font-weight: 500;
font-size: 40px;
line-height: 47px;
/* identical to box height */


color: #000000;">Other Application</span>

             
            </h1>
        </div>
    </div>
</div>


<div class="container mb50">
    <div class="row">
    @foreach($applicationcategory as $row)
        <div class="col-md-3 col-sm-3 col-xs-6 teaser"><a href="{{url('applications/interior-design',$row['slug'])}}"><img
                    src="{{asset('public/assets/images/category/'.$row->category_image)}}"
                    srcset="{{asset('public/assets/images/category/'.$row->category_image)}} 800w,{{asset('public/assets/images/category/'.$row->category_image)}} 120w,{{asset('public/assets/images/category/'.$row->category_image)}} 195w,{{asset('public/assets/images/category/'.$row->category_image)}} 210w,{{asset('public/assets/images/category/'.$row->category_image)}} 284w,{{asset('public/assets/images/category/'.$row->category_image)}} 330w,{{asset('public/assets/images/category/'.$row->category_image)}} 350w"
                    sizes="(min-width: 993px) 33vw,  50vw" alt=""></a></div>

                    @endforeach
        </div>
    </div>
</div>


@endsection
