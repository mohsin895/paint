@extends('layout.front.master')
@section('content')


@php
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp

<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="#" target="_self" property="item"
                typeof="WebPage"><span property="name">Color shades<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">Wall<span>
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


<div id="c52748" class="frame frame-default frame-type-html frame-layout-0">

    <div class="subnavigation">
        <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs"
            data-example-id="togglable-tabs">
            <div class="grey">
                <ul id="meineTabs" class="nav nav-tabs grey container" role="tablist">
                    <li class="dropdown navbar-right">

                    </li>
                    <!-- @foreach($colorcategory as $color)
                    <li class="hidden-xs"><a href="{{url('color-shades',$color['slug'])}}">{{$color->category_name}}</a>
                    </li>
                    @endforeach -->
                    
                    <li><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li class="active hidden-xs"><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>

                    <li class=" hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}"> Search</a></li>
                    <!-- <li class="hidden-xs"><a href="/color-shades-samples/sample-service/">Sample service</a></li> -->
                </ul>
            </div>
        </div>
        <ul class="nav nav-tabs hidden-sm hidden-md hidden-lg ">
            <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">Selection <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <!-- @foreach($colorcategory as $color)
                    <li><a href="{{url('color-shades',$color['slug'])}}">{{$color->category_name}}</a></li>
                    @endforeach -->

                    
                    <li><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li class="active"><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>

                    <li class=" hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}"><i
                                class="icon-farbtonsuche"></i> Search</a></li>
                    </ul>
            </li>
        </ul>
    </div>
</div>


<div id="c52746" class="frame frame-default frame-type-html frame-layout-0">
    <style type="text/css" title="text/css" media="all">
    @import url({{asset('public/assets/html_dummy_farbtoene_muster_v2/templates/css/styles-brillux-farbtoene-muster.css')}});


    .farbtoene-muster .flexslider3.farbtoene-muster>.flex-control-nav {
        padding: 0% 8%;
        bottom: -50px !important;

    }

    .farbtoene-muster .flexslider3.farbtoene-muster>ul.flex-direction-nav {
        width: 100%;

    }
    </style>
</div>


<div id="c52742" class="frame frame-default frame-type-html frame-layout-0">
    <div class="container mt30 farbtoene-muster hidden-xs">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="wrapper">
                    <ul class="nav nav-tabs warenkorb" role="tablist">
                        <li role="presentation" class="active"><a href="#tapeten" role="tab"
                                data-toggle="tab">Wallpapers</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content warenkorb">
                <div role="tabpanel" class="tab-pane active" id="tapeten">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="farbwahl farbtoene_muster">
                            <div class="flexslider3 farbtoene-muster">
                                <ul class="slides">
                                    <li>
                                                @foreach($wall as $row)
                                                <a
                                            href="#" class="tapete_{{$row->id}} col-md-3 col-sm-3 col-xs-3"><span
                                                class="tapete_{{$row->id}}" title="{{$row->id}}"></span><strong>Nr. 5301</strong></a>
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
                                        src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/wand/tapeten/raumbild.gif')}}"
                                        class="tapete_5300" alt="Color depiction" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-sm hidden-md hidden-lg farbtoene-muster" id="accordion">
        <div id="collapse_farbtoene" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="wand"
            aria-expanded="false">
            <div class="container">
                <div class="tab-content warenkorb">
                    <div role="tabpanel" class="tab-pane active" id="tapeten2">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="farbwahl farbtoene_muster">
                                <div class="flexslider3 farbtoene-muster">
                                    <ul class="slides">
                                        <li>
                                            
                                        @foreach($wall as $row)
                                                <a
                                            href="#" class="tapete_{{$row->id}} col-md-3 col-sm-3 col-xs-3"><span
                                                class="tapete_{{$row->id}}" title="{{$row->id}}"></span><strong>Nr. 5301</strong></a>
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
                                        src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/wand/tapeten/raumbild.gif')}}"
                                        class="tapete_5300" alt="Color depiction" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="glasgewebe2">Glass fabric</div>
                    <div role="tabpanel" class="tab-pane" id="relief2">Relief</div>
                    <div role="tabpanel" class="tab-pane" id="kreativ2">Creative</div><!-- close Tab Kreativ -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<style>
@foreach($wall as $row)
span.tapete_{{$row->id}}, img.tapete_{{$row->id}} { background-image:url({{asset('public/assets/images/wall/'.$row->image)}})}
@endforeach
  </style>

@endsection