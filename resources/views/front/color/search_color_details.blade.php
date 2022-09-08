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



<div id="c52716" class="frame frame-default frame-type-html frame-layout-0">
    <!-- Subnavigation -->
    <div class="subnavigation">
        <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs"
            data-example-id="togglable-tabs">
            <div class="grey">
                <ul id="meineTabs" class="nav nav-tabs grey container" role="tablist">
                    <li class="dropdown navbar-right">
      
                    </li>
                    <li class=" hidden-xs"><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>

                    <li class="active hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}"> Search</a></li>
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



<div id="c109442" class="frame frame-default frame-type-list frame-layout-0">
                
                
                    



                
                
                    



                
                

    
        



		

                <f:variable name=”collectionName" value="PURE  ORIGINAL"/>
                
                
                
                
                
                <div class="container">
                    <div>&nbsp;</div>
                    <div class="btn-group pull-right">
                        <ul class="nav nav-tabs">
                            
                            
                                
                            
                            <li role="presentation"><a href="{{url('color-shades-seacrh/color-shade-search')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <span>Modify search</span></a></li>
                            <li role="presentation" class="last"><a href="{{url('color-shades-seacrh/color-shade-search')}}"><i class="fa fa-long-arrow-left"
                                                                                                aria-hidden="true"></i> <span>Start new search</span></a>
                            </li>
                        </ul>
                    </div>
                
                
                    <div class="bxpanel farbtonsuche-formular-container farbtonsuche-formular clear">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                
                            <label class="fsearchlabel">
                                Product group
                            </label>
                            <span>Facade paints&nbsp;</span>
                            <br/>
                            
                            
                                <label class="fsearchlabel">
                                    Color shade
                                </label>
                                <span>{{$product_search->color}}</span>
                                <br/>
                            
                
                            
                                <div class="clear"></div>
                                <label class="fsearchlabel">
                                    Collection
                                </label>
                                <span>PURE  ORIGINAL (rgb{{"219.220.217" }} ) </span>
                                <br/>
                            
                        </div>
                
                
                        
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label class="fsearchlabel">
                                    Color preview
                                </label>
                                
                                    <div class="farbfeld fsearchcolorpreview"
                                         style="background-image: url(); background-color:rgb({{$product_search->color}})">
                                        &nbsp;
                                    </div>
                                
                            </div>
                        
                
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            
                                <br/><label class="fsearchlabel">
                                RGB values
                            </label>
                                <span>77.85.74</span>
                                <br/>
                            
                            
                                <label class="fsearchlabel clear">
                                    Light reflective value
                                </label>
                                <span>8,5</span>
                            
                        </div>
                
                        <div class="clear"></div>
                    </div>
                </div>
                
                
                                        
                                
                               
                
                                
                            </div>
                
    
                
                        
                
                

@endsection