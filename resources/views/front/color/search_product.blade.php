@extends('layout.front.master')
@section('content')

@php
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp
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

<!-- TS: lib.subnavigationwithankernav END -->

<!-- Backend Layout: Inhaltsbereich BEGIN -->
<!--TYPO3SEARCH_begin-->


<div id="c52716" class="frame frame-default frame-type-html frame-layout-0">
    <!-- Subnavigation -->
    <div class="subnavigation">
        <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs"
            data-example-id="togglable-tabs">
            <div class="grey">
                <ul id="meineTabs" class="nav nav-tabs grey container" role="tablist">
                    <li class="dropdown navbar-right">
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-square-o"></i></a>
   -->
                    </li>
                    <li class=" hidden-xs"><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>

                    <li class=" active hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}"> Search</a></li>
                     </ul>
            </div>
        </div>
        <ul class="nav nav-tabs hidden-sm hidden-md hidden-lg ">
            <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">Selection <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @foreach($colorcategory as $color)
                    <li class="hidden-xs"><a href="{{url('color-shades',$color['slug'])}}">{{$color->category_name}}</a>
                    </li>
                    <!-- <li class="hidden-xs"><a href="/color-shades-samples/wall/">Wall</a></li>
                    <li class="active hidden-xs"><a href="/color-shades-samples/floor/">Floor</a></li>
                    <li class="hidden-xs"><a href="/color-shades-samples/color-shade-search/"><i
                                class="icon-farbtonsuche"></i> Search</a></li>
                    <li class="hidden-xs"><a href="/color-shades-samples/sample-service/">Sample service</a> -->

                    @endforeach

                    <li class="active"><a href="{{url('color-shades-seacrh/color-shade-search')}}"><i
                                class="icon-farbtonsuche"></i>
                            Search</a></li>
                                        </ul>
            </li>
        </ul>
    </div><!-- close Subnavigation -->
</div>


<div id="c109442" class="frame frame-default frame-type-list frame-layout-0">




    <div class="container">
        <div>&nbsp;</div>
        <div class="btn-group pull-right">
            <ul class="nav nav-tabs">


                <li role="presentation"><a href="{{url('color-shades-seacrh/color-shade-search')}}"><i
                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <span>Modify search</span></a></li>
                <li role="presentation" class="last"><a href="{{url('color-shades-seacrh/color-shade-search')}}"><i
                            class="fa fa-long-arrow-left" aria-hidden="true"></i> <span>Start new search</span></a>
                </li>
            </ul>
        </div>


        <div class="bxpanel farbtonsuche-formular-container farbtonsuche-formular clear">
            <div class="col-xs-12 col-sm-6 col-md-6">

                <label class="fsearchlabel">
                    Product group
                </label>
                @if(empty($search_product))
                <span>{{$category->category_name}}&nbsp;</span>
                @else 

                @endif
                <br />


                <label class="fsearchlabel">
                    Color shade
                </label>
                <span>@if(empty($search_product)){{$get_session_color}} @else @endif</span>
                <br />



            </div>




            <div class="col-xs-12 col-sm-6 col-md-3">


            </div>

            <div class="clear"></div>
        </div>
    </div>



    <div class="container">




        <div class="bxpanel">
            <h3>
                Specify a color shade
            </h3>
            <p>
                There are several color shades that match your search. Please select the color shade about which you
                would like more information from the following list. Narrow your search criteria to reduce the number of matches.

            </p>
        </div>



        <div class="farbtonsuche-farbliste">





            @foreach($product_search as $search)

            <div id="resCol81834" class="fsearchcolorresult">
                <div class="col-xs-12 col-sm-4 farbtonsuche-farbliste-bez">
                    <h5><a id="resColRef81834" href="/color-shades-samples/color-shade-search/?idLine=1">
                            <span>Description:</span>
                            2011 Blackened
                            <br /><span id="resColCol81834">Collection:</span>
                            FARROWBALL / Colors</a></h5>
                </div>

                <div id="resColPre81834" class="col-xs-12 col-sm-8 fsearchcolorpreview"
                    style='background-color: {{$search->color_code}}'>
                    <a id="resColRefC81834" href="{{url('color-shades-seacrh/color-shade-search/color-serach-details',$search->id)}}"><span
                            class="fsearchcolorselectlabel"> <i class="fa fa-angle-right"></i> Select color
                            shade</span></a>
                </div>

                <div class="invclear">&nbsp;</div>
            </div>
            @endforeach














        </div>
        <div class="clear"></div>
    </div>
    ﻿
























</div>






<div id="c52713" class="frame frame-default frame-type-html frame-layout-0">










    <script type="text/javascript">
    //get color by url param if set
    $(document).ready(function() {
        var ft = decodeURIComponent($(document).getUrlParam("ft"));
        if (ft != null && ft != "null" && ft.length > 3) {
            ft = ft.replace(/[^0-9a-zA-Z\-\.\_]+/g, '');
            $("#farbtonName").val(ft);
        }
    });
    </script>














</div>










@endsection