@extends('layout.front.master')
@section('content')

<style>
    @foreach($floor_timber as $row)
    span.timber_{{$row->id}}, img.timber_{{$row->id}} { background-image:url({{asset('public/assets/images/floor/'.$row->image)}})}
@endforeach
@foreach($floor_luxury as $row)
span.dekor_{{$row->id}}, img.dekor_{{$row->id}} { background-image:url({{asset('public/assets/images/floor/'.$row->image)}})}
img.dekor_{{$row->id}} { background-image:url({{asset('public/assets/images/floor/'.$row->luxury_image)}})}

@endforeach

    </style>

@php 
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="#" target="_self" property="item"
                typeof="WebPage"><span property="name">Color shades<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">Floor<span>
                    <meta property="position" content="2">
        </li>
    </ul>
</div>


<div class="flexslider content">

    <ul class="slides">

        <li>

            <img src="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1200w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w"
                sizes="100vw" alt="Floor">

        </li>


    </ul>
</div>

<div id="c52736" class="frame frame-default frame-type-html frame-layout-0">
    <!-- Subnavigation -->
    <div class="subnavigation">
        <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs"
            data-example-id="togglable-tabs">
            <div class="grey">
                <ul id="meineTabs" class="nav nav-tabs grey container" role="tablist">
                    <li class="dropdown navbar-right">

                    </li>
                    <!-- @foreach($colorcategory as $color)
                    <li class=" hidden-xs"><a href="{{url('color-shades',$color['slug'])}}">{{$color->category_name}}</a></li>
                    @endforeach -->


                    
                    <li><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li class="active hidden-xs"><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>
                    
        <li class=" hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}"> Search</a></li>
        <!-- <li class="hidden-xs"><a href="/color-shades-samples/sample-service/">Sample service</a></li> -->
                    </li>
                </ul>
            </div>
        </div>
        <ul class="nav nav-tabs hidden-sm hidden-md hidden-lg ">
            <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">Selection <span class="caret"></span></a>
                <ul class="dropdown-menu">
                @foreach($colorcategory as $color)
                    <li class="active"><a href="{{url('color-shades',$color['slug'])}}">{{$color->category_name}}</a></li>
                    @endforeach
                    
        <li class="active hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}"><i
              class="icon-farbtonsuche"></i> Search</a></li>
        <li class="hidden-xs"><a href="/color-shades-samples/sample-service/">Sample service</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- close Subnavigation -->
</div>


<div id="c52735" class="frame frame-default frame-type-html frame-layout-0">
    <style type="text/css" title="text/css" media="all">
    @import url({{asset('public/assets/html_dummy_farbtoene_muster_v2/templates/css/styles-brillux-farbtoene-muster.css')}});

    span.timber_5912,
    img.timber_5912 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5912_timber.jpg')}})
    }

    span.timber_5913,
    img.timber_5913 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5913_timber.jpg')}})
    }

    span.timber_5914,
    img.timber_5914 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5914_timber.jpg')}})
    }

    span.timber_5915,
    img.timber_5915 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5915_timber.jpg')}})
    }

    span.timber_5916,
    img.timber_5916 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5916_timber.jpg')}})
    }

    span.timber_5917,
    img.timber_5917 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5917_timber.jpg')}})
    }

    span.timber_5918,
    img.timber_5918 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5918_timber.jpg')}})
    }

    span.timber_5919,
    img.timber_5919 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5919_timber.jpg')}})
    }

    span.timber_5920,
    img.timber_5920 {
        background-image: url({{asset('public/assets/fileadmin/images/farbtoene_muster/boden/timber/5920_timber.jpg')}})
    }

    .farbtoene-muster .farbtoene_muster .active {
        border: solid 1px #dddddd;
    }

    @media (max-width: 767px) {

        .farbtoene-muster .farbwahl.farbtoene_muster a.col-md-3.col-sm-3.col-xs-4,
        .farbtoene-muster .farbtoene_muster a.col-md-3.col-sm-3.col-xs-4 {
            padding: 5px;
            min-height: 166px;
        }
    }
    </style>
</div>


<div id="c52734" class="frame frame-default frame-type-html frame-layout-0">
    <div class="container mt30 farbtoene-muster hidden-xs">
        <div class="row">
            <!-- Tabs-Navs -->
            <div class="col-md-6 col-sm-6">
                <div class="wrapper">
                    <ul class="nav nav-tabs warenkorb" role="tablist">
                        <li role="presentation" class="active"><a href="#designboden" role="tab"
                                data-toggle="tab">Luxury Vinyl Tiles</a></li>
                        <li role="presentation"><a href="#timber" role="tab" data-toggle="tab">Timber-Design</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content warenkorb">
                <div role="tabpanel" class="tab-pane active" id="designboden">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="bs-example col-md-6 col-sm-6 col-xs-12" data-example-ids="select-form-control">
                            </div>
                        </div>
                        <div class="farbwahl farbtoene_muster">
                            <div class="flexslider3 farbtoene-muster">
                                <ul class="slides">
                                    <li>
                                            
                                                @foreach($floor_luxury as $row)
                                                @php 
                                                     $luxuryImage =$row->id;
                                                @endphp
                                                <a href="#"
                                            class="dekor_{{$row->id}} col-md-3 col-sm-3 col-xs-3"><span class="dekor_{{$row->id}}"
                                                title="Decor {{$row->id}}"></span><strong>{{$row->name}}</strong></a>
                                                @endforeach
                                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: -85px;">
                        <div class="MyElement">
                            <div class="slider_vertical boden">
                                <div class="item">
                                    <img
                                        src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/boden/designboden/raumbild.gif')}}"
                                        class="dekor_{{$luxuryImage}}" alt="Kleurweergave" style="background-repeat: no-repeat;" />
                                    </div>
                            </div>
                        </div>
                      
                    </div>
                </div><!-- Tab Timber-Design -->
                <div role="tabpanel" class="tab-pane" id="timber">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="farbwahl farbtoene_muster">
                            <div class="flexslider1 farbtoene-muster">
                                <ul class="slides">
                                  
                                    <li>
                                                @foreach($floor_timber as $row)
                                                @php 
                                                     $timberImage =$row->id;
                                                @endphp
                                                
                                                <a href="#"
                                            class="timber_{{$row->id}} col-md-3 col-sm-3 col-xs-3"><span class="timber_{{$row->id}}"
                                                title="timber_{{$row->id}}"></span><strong>5913
                                                Smoked Oak</strong></a>
                                                @endforeach
                                            </li>

                                               
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: -85px;">
                        <div class="MyElement">
                            <div class="slider_vertical boden">
                                <div class="item"><img
                                        src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/boden/designboden/raumbild.gif')}}"
                                        class="timber_{{ $timberImage}}" alt="Farbdarstellung" /></div>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>
    <div class="hidden-sm hidden-md hidden-lg farbtoene-muster" id="accordion">
        <div id="collapse_farbtoene" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="boden"
            aria-expanded="false">
            <div class="container">
                <div class="tab-content warenkorb">
                    <div class="wrapper">
                        <div class="dropdown"><button class="btn btn-default dropdown-toggle" type="button"
                                id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Vloerkeuze <i class="fa fa-angle-down pull-right"></i></button>
                            <ul class="nav nav-tabs warenkorb dropdown-menu" role="tablist">
                                <li role="presentation" class="active"><a href="#designboden2" role="tab"
                                        data-toggle="tab">Designvloer</a></li>
                            </ul>
                        </div>
                    </div><!-- Tab Scala -->
                    <div role="tabpanel" class="tab-pane active" id="designboden2">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="farbwahl farbtoene_muster pull-left">
                                <div class="flexslider3 farbtoene-muster">
                                <ul class="slides">
                                  
                                  <li>
                                              @foreach($floor_timber as $row)
                                              @php 
                                                   $timberImage =$row->id;
                                              @endphp
                                              
                                              <a href="#"
                                          class="timber_{{$row->id}} col-md-3 col-sm-3 col-xs-3"><span class="timber_{{$row->id}}"
                                              title="timber_{{$row->id}}"></span><strong>5913
                                              Smoked Oak</strong></a>
                                              @endforeach
                                          </li>

                                             
                              </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="MyElement">
                                <div class="slider_vertical boden">
                                <div class="item"><img
                                        src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/boden/designboden/raumbild.gif')}}"
                                        class="timber_{{ $timberImage}}" alt="Farbdarstellung" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="clearfix"></div>




@endsection