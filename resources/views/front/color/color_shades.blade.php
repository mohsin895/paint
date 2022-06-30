@extends('layout.front.master')
@section('content')
@php 
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp

<!-- TS: lib.breadcrumbnavigation BEGIN -->
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="/color-shades-samples/" target="_self" property="item"
                typeof="WebPage"><span property="name">Color shades<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">Color shades<span>
                    <meta property="position" content="2">
        </li>
    </ul>
</div>
<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->

<div class="flexslider content">


    <ul class="slides">


        <li>

            <img src="{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_1c398223e0.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_1c398223e0.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_43beaa20ca.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_38deff2649.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_72aa32522a.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_7959b359de.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_caa208a7ca.jpg')}} 1200w,{{asset('public/assets/fileadmin/images/dummy/slider-brillux-standardgrafik.jpg')}} 1600w"
                sizes="100vw" alt="Color shades">

        </li>


    </ul>
</div>


<div id="c52754" class="frame frame-default frame-type-html frame-layout-0">

    <div class="subnavigation">
        <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs"
            data-example-id="togglable-tabs">
            <div class="grey">
                <ul id="meineTabs" class="nav nav-tabs grey container" role="tablist">
                <li class="dropdown navbar-right">

</li>
                @foreach($colorcategory as $color)
                    <li class="hidden-xs"><a href="{{url('color-shades',$color['slug'])}}">{{$color->category_name}}</a></li>
                    <!-- <li class="hidden-xs"><a href="/color-shades-samples/wall/">Wall</a></li>
                    <li class="active hidden-xs"><a href="/color-shades-samples/floor/">Floor</a></li>
                    <li class="hidden-xs"><a href="/color-shades-samples/color-shade-search/"><i
                                class="icon-farbtonsuche"></i> Search</a></li>
                    <li class="hidden-xs"><a href="/color-shades-samples/sample-service/">Sample service</a> -->
                    @endforeach
                </ul>
            </div>
        </div>
        <ul class="nav nav-tabs hidden-sm hidden-md hidden-lg ">
            <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">Selection <span class="caret"></span></a>
                <ul class="dropdown-menu">
                @foreach($colorcategory as $color)
                    <li><a href="{{url('color-shades',$color['slug'])}}">{{$color->category_name}}</a></li>
                    <!-- <li><a href="/color-shades-samples/wall/">Wall</a></li>
                    <li class="active"><a href="/color-shades-samples/floor/">Floor</a></li>
                    <li><a href="/color-shades-samples/color-shade-search/"><i class="icon-farbtonsuche"></i>
                            Search</a></li>
                    <li><a href="/color-shades-samples/sample-service/">Sample service</a></li> -->
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</div>


<div id="c64423" class="frame frame-default frame-type-html frame-layout-0">

</div>


<div id="c52751" class="frame frame-default frame-type-html frame-layout-0">
    <div id="bx-color-scala-wrap">
        <link rel="stylesheet" type="text/css" href="" media="all" />
        <noscript>
            <div class="container">
                <div class="error">
                    <h3>JavaScript deactivated</h3>
                    <p>Please activate JavaScript to use the functions on this page.</p>
                </div>
            </div>
        </noscript>
        <div class="container mt30 farbtoene-muster">
            <div class="row">

                <div class="col-xs-12"><strong>Select a color shade</strong></div>
                <div class="tab-content warenkorb">
                    <div role="tabpanel" class="tab-pane active" id="scala">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="farbwahl farbtoene_muster" style="margin-top:0px">
                                <div id="bx-color-scala" style="display:none;">
                                    <div class="farbtoene_muster">
                                        <div style="margin-left:10px;">Please select first the color shade
                                            family:</div><a id="scala03" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#edb700" data-original-title="03.xx.xx"
                                                class="scala_03" data-placement="bottom" title=""></span><strong>Family
                                                03</strong></a><a id="scala06" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#dba008" data-original-title="06.xx.xx"
                                                class="scala_06" data-placement="bottom" title=""></span><strong>Family
                                                06</strong></a><a id="scala09" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#faa800" data-original-title="09.xx.xx"
                                                class="scala_09" data-placement="bottom" title=""></span><strong>Family
                                                09</strong></a><a id="scala12" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#e79420" data-original-title="12.xx.xx"
                                                class="scala_12" data-placement="bottom" title=""></span><strong>Family
                                                12</strong></a><a id="scala15" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#cc7b27" data-original-title="15.xx.xx"
                                                class="scala_15" data-placement="bottom" title=""></span><strong>Family
                                                15</strong></a><a id="scala18" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#d4711e" data-original-title="18.xx.xx"
                                                class="scala_18" data-placement="bottom" title=""></span><strong>Family
                                                18</strong></a><a id="scala21" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#ca6135" data-original-title="21.xx.xx"
                                                class="scala_21" data-placement="bottom" title=""></span><strong>Family
                                                21</strong></a><a id="scala24" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#a94335" data-original-title="24.xx.xx"
                                                class="scala_24" data-placement="bottom" title=""></span><strong>Family
                                                24</strong></a><a id="scala27" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#993033" data-original-title="27.xx.xx"
                                                class="scala_27" data-placement="bottom" title=""></span><strong>Family
                                                27</strong></a><a id="scala30" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#9c313e" data-original-title="30.xx.xx"
                                                class="scala_30" data-placement="bottom" title=""></span><strong>Family
                                                30</strong></a><a id="scala33" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#9c313e" data-original-title="33.xx.xx"
                                                class="scala_33" data-placement="bottom" title=""></span><strong>Family
                                                33</strong></a><a id="scala36" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#843356" data-original-title="36.xx.xx"
                                                class="scala_36" data-placement="bottom" title=""></span><strong>Family
                                                36</strong></a><a id="scala39" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#913a76" data-original-title="39.xx.xx"
                                                class="scala_39" data-placement="bottom" title=""></span><strong>Family
                                                39</strong></a><a id="scala42" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#713a72" data-original-title="42.xx.xx"
                                                class="scala_42" data-placement="bottom" title=""></span><strong>Family
                                                42</strong></a><a id="scala45" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#482d59" data-original-title="45.xx.xx"
                                                class="scala_45" data-placement="bottom" title=""></span><strong>Family
                                                45</strong></a><a id="scala48" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#695093" data-original-title="48.xx.xx"
                                                class="scala_48" data-placement="bottom" title=""></span><strong>Family
                                                48</strong></a><a id="scala51" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#524a83" data-original-title="51.xx.xx"
                                                class="scala_51" data-placement="bottom" title=""></span><strong>Family
                                                51</strong></a><a id="scala54" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#373e4a" data-original-title="54.xx.xx"
                                                class="scala_54" data-placement="bottom" title=""></span><strong>Family
                                                54</strong></a><a id="scala57" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#27528f" data-original-title="57.xx.xx"
                                                class="scala_57" data-placement="bottom" title=""></span><strong>Family
                                                57</strong></a><a id="scala60" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#095589" data-original-title="60.xx.xx"
                                                class="scala_60" data-placement="bottom" title=""></span><strong>Family
                                                60</strong></a><a id="scala63" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#005e8e" data-original-title="63.xx.xx"
                                                class="scala_63" data-placement="bottom" title=""></span><strong>Family
                                                63</strong></a><a id="scala66" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#006086" data-original-title="66.xx.xx"
                                                class="scala_66" data-placement="bottom" title=""></span><strong>Family
                                                66</strong></a><a id="scala69" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#00768c" data-original-title="69.xx.xx"
                                                class="scala_69" data-placement="bottom" title=""></span><strong>Family
                                                69</strong></a><a id="scala72" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#007a81" data-original-title="72.xx.xx"
                                                class="scala_72" data-placement="bottom" title=""></span><strong>Family
                                                72</strong></a><a id="scala75" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#006f5e" data-original-title="75.xx.xx"
                                                class="scala_75" data-placement="bottom" title=""></span><strong>Family
                                                75</strong></a><a id="scala78" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#007d59" data-original-title="78.xx.xx"
                                                class="scala_78" data-placement="bottom" title=""></span><strong>Family
                                                78</strong></a><a id="scala81" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#05573f" data-original-title="81.xx.xx"
                                                class="scala_81" data-placement="bottom" title=""></span><strong>Family
                                                81</strong></a><a id="scala84" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#0e7038" data-original-title="84.xx.xx"
                                                class="scala_84" data-placement="bottom" title=""></span><strong>Family
                                                84</strong></a><a id="scala87" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#a1bc21" data-original-title="87.xx.xx"
                                                class="scala_87" data-placement="bottom" title=""></span><strong>Family
                                                87</strong></a><a id="scala90" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#c2cb21" data-original-title="90.xx.xx"
                                                class="scala_90" data-placement="bottom" title=""></span><strong>Family
                                                90</strong></a><a id="scala93" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#e5d214" data-original-title="93.xx.xx"
                                                class="scala_93" data-placement="bottom" title=""></span><strong>Family
                                                93</strong></a><a id="scala96" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#f1d216" data-original-title="96.xx.xx"
                                                class="scala_96" data-placement="bottom" title=""></span><strong>Family
                                                96</strong></a><a id="scala99" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:#171819" data-original-title="99.xx.xx"
                                                class="scala_99" data-placement="bottom" title=""></span><strong>Family
                                                99</strong></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx-color-scala-previewimages" class="col-md-6 col-sm-6 col-xs-12">
                            <div class="MyElement">
                                <div class="slider_vertical">
                                    <div class="item bxcolorpreviewarea"><img
                                            src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/musterbild_innenraum_1.png')}}"
                                            alt="Color depiction" /></div>
                                    <div class="item bxcolorpreviewarea"><img
                                            src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/musterbild_innenraum_2.png')}}"
                                            alt="Color depiction" /></div>
                                    <div class="item bxcolorpreviewarea"><img
                                            src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/musterbild_innenraum_4.png')}}"
                                            alt="Color depiction" /></div>
                                </div>
                                <div class="thumbnails_vertical">
                                    <div class="item bxcolorpreviewarea"><img
                                            src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/musterbild_innenraum_1.png')}}"
                                            alt="Color depiction" /></div>
                                    <div class="item bxcolorpreviewarea"><img
                                            src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/musterbild_innenraum_2.png')}}"
                                            alt="Topcoat 871" /></div>
                                    <div class="item bxcolorpreviewarea"><img
                                            src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/musterbild_innenraum_4.png')}}"
                                            alt="Topcoat 871" /></div>
                                </div>
                            </div>
                            <div class="pull-left">
                                <div id='colorpreviewbox' class="copy wrapper row mb20 mt20" style="display:none;">
                                    <div class="farbwahl farbtoene_muster" style="margin: 0px;">
                                        <p href="#" class="col-md-3 col-sm-4 col-xs-4"><span class="bxcolorpreviewarea"
                                                title=""></span></p>
                                    </div>
                                    <div class="col-md-9 col-sm-8"><strong>Your selection</strong><br /><span
                                            class='bxcolorpreviewtitle'></span><br />
                                        <p><span id='bxcolorpreviewfdlink'></span></p>
                                    </div>
                                </div>
                                <hr />

                                <div class="pull-left clear small mt20"><strong>Note on color shade
                                        depiction</strong><br> For technical reasons, the color shade depiction
                                    on a monitor will differ from the original color sample. For a reliable
                                    comparison, we recommend using an original color shade template. Brillux
                                    Scala color samples can be ordered online from the <a href="?id=8034">sample
                                        service</a>.</div>
                            </div>
                        </div>
                    </div>
                </div><!-- close SCALA -->
            </div>
        </div><!-- close Farbtöne -->
    </div>
    <style type="text/css">
    @media (max-width: 768px) {
        #bx-color-scala-wrap {
            margin: 0px 20px;
        }

    }
    </style>
</div>


<div id="c52750" class="frame frame-default frame-type-html frame-layout-0">

</div>



<!--TYPO3SEARCH_end-->
<!-- Backend Layout: Inhaltsbereich END -->

<!-- /.container -->
<div class="clearfix"></div>
<!-- TS: lib.footer BEGIN -->

@endsection