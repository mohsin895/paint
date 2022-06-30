@extends('layout.front.master')
@section('content')

@php 
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="/color-shades-samples/" target="_self" property="item"
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
                srcset="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_e62f169f3b.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_99383fd7f6.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_b88745b5dd.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_f8194c9261.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_0e03e545ef.jpg')}} 1200w,{{asset('public/assets/fileadmin/redaktion/bilder/farbtoene-muster/abb-farbtoene-muster-boden.jpg')}} 1600w"
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
                    @foreach($colorcategory as $color)
                    <li class=" hidden-xs"><a href="{{url('color-shades',$color['slug'])}}">{{$color->category_name}}</a></li>
                    <!-- <li class="hidden-xs"><a href="/color-shades-samples/wall/">Wall</a></li>
                    <li class="active hidden-xs"><a href="/color-shades-samples/floor/">Floor</a></li>
                    <li class="hidden-xs"><a href="/color-shades-samples/color-shade-search/"><i
                                class="icon-farbtonsuche"></i> Search</a></li>
                    <li class="hidden-xs"><a href="/color-shades-samples/sample-service/">Sample service</a> -->
                    @endforeach
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
                    <!-- <li><a href="/color-shades-samples/wall/">Wall</a></li>
                    <li class="active"><a href="/color-shades-samples/floor/">Floor</a></li>
                    <li><a href="/color-shades-samples/color-shade-search/"><i class="icon-farbtonsuche"></i>
                            Search</a></li>
                    <li><a href="/color-shades-samples/sample-service/">Sample service</a></li> -->
                    @endforeach
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
                                    <li><a href="#" class="dekor_400 col-md-3 col-sm-3 col-xs-3"><span class="dekor_400"
                                                title="Decor 400"></span><strong>Decor
                                                400</strong></a><a href="#"
                                            class="dekor_401 col-md-3 col-sm-3 col-xs-3"><span class="dekor_401"
                                                title="Decor 401"></span><strong>Decor 401</strong></a><a href="#"
                                            class="dekor_402 col-md-3 col-sm-3 col-xs-3"><span class="dekor_402"
                                                title="Decor 402"></span><strong>Decor
                                                402</strong></a><a href="#"
                                            class="dekor_403 col-md-3 col-sm-3 col-xs-3"><span class="dekor_403"
                                                title="Decor 403"></span><strong>Decor 403</strong></a><a href="#"
                                            class="dekor_404 col-md-3 col-sm-3 col-xs-3"><span class="dekor_404"
                                                title="Decor 404"></span><strong>Decor
                                                404</strong></a><a href="#"
                                            class="dekor_405 col-md-3 col-sm-3 col-xs-3"><span class="dekor_405"
                                                title="Decor 405"></span><strong>Decor 405</strong></a><a href="#"
                                            class="dekor_406 col-md-3 col-sm-3 col-xs-3"><span class="dekor_406"
                                                title="Decor 406"></span><strong>Decor
                                                406</strong></a><a href="#"
                                            class="dekor_407 col-md-3 col-sm-3 col-xs-3"><span class="dekor_407"
                                                title="Decor 407"></span><strong>Decor 407</strong></a><a href="#"
                                            class="dekor_416 col-md-3 col-sm-3 col-xs-3"><span class="dekor_416"
                                                title="Decor 416"></span><strong>Decor
                                                416</strong></a><a href="#"
                                            class="dekor_417 col-md-3 col-sm-3 col-xs-3"><span class="dekor_417"
                                                title="Decor 417"></span><strong>Decor 417</strong></a><a href="#"
                                            class="dekor_420 col-md-3 col-sm-3 col-xs-3"><span class="dekor_420"
                                                title="Decor 420"></span><strong>Decor
                                                420</strong></a><a href="#"
                                            class="dekor_421 col-md-3 col-sm-3 col-xs-3"><span class="dekor_421"
                                                title="Decor 421"></span><strong>Decor 421</strong></a></li>
                                    <li><a href="#" class="dekor_425 col-md-3 col-sm-3 col-xs-3"><span class="dekor_425"
                                                title="Decor 425"></span><strong>Decor
                                                425</strong></a><a href="#"
                                            class="dekor_450 col-md-3 col-sm-3 col-xs-3"><span class="dekor_450"
                                                title="Decor 450"></span><strong>Decor 450</strong></a><a href="#"
                                            class="dekor_451 col-md-3 col-sm-3 col-xs-3"><span class="dekor_451"
                                                title="Decor 451"></span><strong>Decor
                                                451</strong></a><a href="#"
                                            class="dekor_452 col-md-3 col-sm-3 col-xs-3"><span class="dekor_452"
                                                title="Decor 452"></span><strong>Decor 452</strong></a><a href="#"
                                            class="dekor_453 col-md-3 col-sm-3 col-xs-3"><span class="dekor_453"
                                                title="Decor 453"></span><strong>Decor
                                                453</strong></a><a href="#"
                                            class="dekor_454 col-md-3 col-sm-3 col-xs-3"><span class="dekor_454"
                                                title="Decor 454"></span><strong>Decor 454</strong></a><a href="#"
                                            class="dekor_455 col-md-3 col-sm-3 col-xs-3"><span class="dekor_455"
                                                title="Decor 455"></span><strong>Decor
                                                455</strong></a><a href="#"
                                            class="dekor_456 col-md-3 col-sm-3 col-xs-3"><span class="dekor_456"
                                                title="Decor 456"></span><strong>Decor 456</strong></a><a href="#"
                                            class="dekor_457 col-md-3 col-sm-3 col-xs-3"><span class="dekor_457"
                                                title="Decor 457"></span><strong>Decor
                                                457</strong></a><a href="#"
                                            class="dekor_458 col-md-3 col-sm-3 col-xs-3"><span class="dekor_458"
                                                title="Decor 458"></span><strong>Decor 458</strong></a><a href="#"
                                            class="dekor_459 col-md-3 col-sm-3 col-xs-3"><span class="dekor_459"
                                                title="Decor 459"></span><strong>Decor
                                                459</strong></a><a href="#"
                                            class="dekor_460 col-md-3 col-sm-3 col-xs-3"><span class="dekor_460"
                                                title="Decor 460"></span><strong>Decor 460</strong></a></li>
                                    <li><a href="#" class="dekor_461 col-md-3 col-sm-3 col-xs-3"><span class="dekor_461"
                                                title="Decor 461"></span><strong>Decor
                                                461</strong></a><a href="#"
                                            class="dekor_462 col-md-3 col-sm-3 col-xs-3"><span class="dekor_462"
                                                title="Decor 462"></span><strong>Decor 462</strong></a><a href="#"
                                            class="dekor_463 col-md-3 col-sm-3 col-xs-3"><span class="dekor_463"
                                                title="Decor 463"></span><strong>Decor
                                                463</strong></a><a href="#"
                                            class="dekor_464 col-md-3 col-sm-3 col-xs-3"><span class="dekor_464"
                                                title="Decor 464"></span><strong>Decor 464</strong></a><a href="#"
                                            class="dekor_465 col-md-3 col-sm-3 col-xs-3"><span class="dekor_465"
                                                title="Decor 465"></span><strong>Decor
                                                465</strong></a><a href="#"
                                            class="dekor_466 col-md-3 col-sm-3 col-xs-3"><span class="dekor_466"
                                                title="Decor 466"></span><strong>Decor 466</strong></a><a href="#"
                                            class="dekor_467 col-md-3 col-sm-3 col-xs-3"><span class="dekor_467"
                                                title="Decor 467"></span><strong>Decor
                                                467</strong></a><a href="#"
                                            class="dekor_468 col-md-3 col-sm-3 col-xs-3"><span class="dekor_468"
                                                title="Decor 468"></span><strong>Decor 468</strong></a><a href="#"
                                            class="dekor_301 col-md-3 col-sm-3 col-xs-3"><span class="dekor_301"
                                                title="Decor 301"></span><strong>Decor
                                                301</strong></a><a href="#"
                                            class="dekor_303 col-md-3 col-sm-3 col-xs-3"><span class="dekor_303"
                                                title="Decor 303"></span><strong>Decor 303</strong></a><a href="#"
                                            class="dekor_305 col-md-3 col-sm-3 col-xs-3"><span class="dekor_305"
                                                title="Decor 305"></span><strong>Decor
                                                305</strong></a><a href="#"
                                            class="dekor_307 col-md-3 col-sm-3 col-xs-3"><span class="dekor_307"
                                                title="Decor 307"></span><strong>Decor 307</strong></a></li>
                                    <li><a href="#" class="dekor_310 col-md-3 col-sm-3 col-xs-3"><span class="dekor_310"
                                                title="Decor 310"></span><strong>Decor
                                                310</strong></a><a href="#"
                                            class="dekor_311 col-md-3 col-sm-3 col-xs-3"><span class="dekor_311"
                                                title="Decor 311"></span><strong>Decor 311</strong></a><a href="#"
                                            class="dekor_312 col-md-3 col-sm-3 col-xs-3"><span class="dekor_312"
                                                title="Decor 312"></span><strong>Decor
                                                312</strong></a><a href="#"
                                            class="dekor_313 col-md-3 col-sm-3 col-xs-3"><span class="dekor_313"
                                                title="Decor 313"></span><strong>Decor 313</strong></a><a href="#"
                                            class="dekor_1401 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1401"
                                                title="Decor 1401"></span><strong>Decor
                                                1401</strong></a><a href="#"
                                            class="dekor_1404 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1404"
                                                title="Decor 1404"></span><strong>Decor
                                                1404</strong></a><a href="#"
                                            class="dekor_1450 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1450"
                                                title="Decor 1450"></span><strong>Decor
                                                1450</strong></a><a href="#"
                                            class="dekor_1451 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1451"
                                                title="Decor 1451"></span><strong>Decor
                                                1451</strong></a><a href="#"
                                            class="dekor_1458 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1458"
                                                title="Decor 1458"></span><strong>Decor
                                                1458</strong></a><a href="#"
                                            class="dekor_1465 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1465"
                                                title="Decor 1465"></span><strong>Decor
                                                1465</strong></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: -85px;">
                        <div class="MyElement">
                            <div class="slider_vertical boden">
                                <div class="item"><img
                                        src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/boden/designboden/raumbild.gif')}}"
                                        class="dekor_403" alt="Kleurweergave" /></div>
                            </div>
                        </div>
                        <div class="pull-left">
                            <div class="wrapper row mb20 mt20">
                                <div class="col-md-9 col-sm-8 col-xs-8"><strong>Room view</strong><br>

                                    <div class="small mt10">These are some examples from our design floor
                                        collection. You will find all decors in the Brillux colour designer.
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="pull-left clear small mt20"><strong>Note on color tone
                                    representation</strong><br>
                                For technical reasons, the color tone display on a monitor differs from the
                                original color sample. For a binding comparison, we recommend using an original
                                colour sample. You can order Brillux Scala colour samples online via the sample
                                service.</div>
                        </div>
                    </div>
                </div><!-- Tab Timber-Design -->
                <div role="tabpanel" class="tab-pane" id="timber">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="farbwahl farbtoene_muster">
                            <div class="flexslider1 farbtoene-muster">
                                <ul class="slides">
                                    <li><a href="#" class="timber_5912 col-md-3 col-sm-3 col-xs-3"><span
                                                class="timber_5912" title="timber_5912"></span><strong>5912 Oak
                                                Pearl Grey</strong></a><a href="#"
                                            class="timber_5913 col-md-3 col-sm-3 col-xs-3"><span class="timber_5913"
                                                title="timber_5913"></span><strong>5913
                                                Smoked Oak</strong></a><a href="#"
                                            class="timber_5914 col-md-3 col-sm-3 col-xs-3"><span class="timber_5914"
                                                title="timber_5914"></span><strong>5914 Oak
                                                Natural</strong></a><a href="#"
                                            class="timber_5915 col-md-3 col-sm-3 col-xs-3"><span class="timber_5915"
                                                title="timber_5915"></span><strong>5915
                                                Limed Oak Grey</strong></a><a href="#"
                                            class="timber_5916 col-md-3 col-sm-3 col-xs-3"><span class="timber_5916"
                                                title="timber_5916"></span><strong>5916
                                                Limed Oak White</strong></a><a href="#"
                                            class="timber_5917 col-md-3 col-sm-3 col-xs-3"><span class="timber_5917"
                                                title="timber_5917"></span><strong>5917 Oak
                                                Blond</strong></a><a href="#"
                                            class="timber_5918 col-md-3 col-sm-3 col-xs-3"><span class="timber_5918"
                                                title="timber_5918"></span><strong>5918 Oak
                                                Natural Sense</strong></a><a href="#"
                                            class="timber_5919 col-md-3 col-sm-3 col-xs-3"><span class="timber_5919"
                                                title="timber_5919"></span><strong>5919
                                                Rustic Pine Grey</strong></a><a href="#"
                                            class="timber_5920 col-md-3 col-sm-3 col-xs-3"><span class="timber_5920"
                                                title="timber_5920"></span><strong>5920
                                                Limed Oak Blond</strong></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="margin-top: -85px;">
                        <div class="MyElement">
                            <div class="slider_vertical boden">
                                <div class="item"><img
                                        src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/boden/designboden/raumbild.gif')}}"
                                        class="timber_5912" alt="Farbdarstellung" /></div>
                            </div>
                        </div>
                        <div class="pull-left">
                            <div class="wrapper row mb20 mt20">
                                <div class="col-md-9 col-sm-8 col-xs-8"><strong>Detail view</strong><br>

                                    <div class="small mt10">These are some examples from our timber design
                                        collection. You will find all decors in the Brillux colour designer.
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="pull-left clear small mt20"><strong>Note on color tone
                                    representation</strong><br>
                                For technical reasons, the color tone display on a monitor differs from the
                                original color sample. For a binding comparison, we recommend using an original
                                colour sample. You can order Brillux Scala colour samples online via the sample
                                service.</div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="teppich">Tapijt</div><!-- close Tab Teppich -->
                <!-- Tab Sauberlauf -->
                <div role="tabpanel" class="tab-pane" id="sauberlauf">Schoonloop</div>
                <!-- close Tab Sauberlauf -->
                <!-- Tab Nadelflies -->
                <div role="tabpanel" class="tab-pane" id="nadelflies">Naaldvlies</div>
                <div role="tabpanel" class="tab-pane" id="modultex">Modultex</div><!-- close Tab Modultex -->
                <div role="tabpanel" class="tab-pane" id="beschichtungen">Afwerkingslagen</div>
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
                                        <li><a href="dekor_400" class="dekor_400 col-md-3 col-sm-3 col-xs-3"><span
                                                    class="dekor_400" title="Decor 400"></span><strong>Decor
                                                    400</strong></a><a href="dekor_401"
                                                class="dekor_401 col-md-3 col-sm-3 col-xs-3"><span class="dekor_401"
                                                    title="Decor 401"></span><strong>Decor
                                                    401</strong></a><a href="dekor_402"
                                                class="dekor_402 col-md-3 col-sm-3 col-xs-3"><span class="dekor_402"
                                                    title="Decor 402"></span><strong>Decor
                                                    402</strong></a><a href="dekor_403"
                                                class="dekor_403 col-md-3 col-sm-3 col-xs-3"><span class="dekor_403"
                                                    title="Decor 403"></span><strong>Decor
                                                    403</strong></a><a href="dekor_404"
                                                class="dekor_404 col-md-3 col-sm-3 col-xs-3"><span class="dekor_404"
                                                    title="Decor 404"></span><strong>Decor
                                                    404</strong></a><a href="dekor_405"
                                                class="dekor_405 col-md-3 col-sm-3 col-xs-3"><span class="dekor_405"
                                                    title="Decor 405"></span><strong>Decor
                                                    405</strong></a><a href="dekor_406"
                                                class="dekor_406 col-md-3 col-sm-3 col-xs-3"><span class="dekor_406"
                                                    title="Decor 406"></span><strong>Decor
                                                    406</strong></a><a href="dekor_407"
                                                class="dekor_407 col-md-3 col-sm-3 col-xs-3"><span class="dekor_407"
                                                    title="Decor 407"></span><strong>Decor
                                                    407</strong></a><a href="dekor_416"
                                                class="dekor_406 col-md-3 col-sm-3 col-xs-3"><span class="dekor_416"
                                                    title="Decor 416"></span><strong>Decor
                                                    416</strong></a><a href="dekor_417"
                                                class="dekor_417 col-md-3 col-sm-3 col-xs-3"><span class="dekor_417"
                                                    title="Decor 417"></span><strong>Decor
                                                    417</strong></a><a href="dekor_420"
                                                class="dekor_420 col-md-3 col-sm-3 col-xs-3"><span class="dekor_420"
                                                    title="Decor 420"></span><strong>Decor
                                                    420</strong></a><a href="dekor_421"
                                                class="dekor_421 col-md-3 col-sm-3 col-xs-3"><span class="dekor_421"
                                                    title="Decor 421"></span><strong>Decor
                                                    421</strong></a></li>
                                        <li><a href="dekor_425" class="dekor_425 col-md-3 col-sm-3 col-xs-3"><span
                                                    class="dekor_425" title="Decor 425"></span><strong>Decor
                                                    425</strong></a><a href="dekor_450"
                                                class="dekor_450 col-md-3 col-sm-3 col-xs-3"><span class="dekor_450"
                                                    title="Decor 450"></span><strong>Decor
                                                    450</strong></a><a href="dekor_451"
                                                class="dekor_451 col-md-3 col-sm-3 col-xs-3"><span class="dekor_451"
                                                    title="Decor 451"></span><strong>Decor
                                                    451</strong></a><a href="dekor_452"
                                                class="dekor_452 col-md-3 col-sm-3 col-xs-3"><span class="dekor_452"
                                                    title="Decor 452"></span><strong>Decor
                                                    452</strong></a><a href="dekor_453"
                                                class="dekor_453 col-md-3 col-sm-3 col-xs-3"><span class="dekor_453"
                                                    title="Decor 453"></span><strong>Decor
                                                    453</strong></a><a href="dekor_454"
                                                class="dekor_454 col-md-3 col-sm-3 col-xs-3"><span class="dekor_454"
                                                    title="Decor 454"></span><strong>Decor
                                                    454</strong></a><a href="dekor_455"
                                                class="dekor_455 col-md-3 col-sm-3 col-xs-3"><span class="dekor_455"
                                                    title="Decor 455"></span><strong>Decor
                                                    455</strong></a><a href="dekor_456"
                                                class="dekor_456 col-md-3 col-sm-3 col-xs-3"><span class="dekor_456"
                                                    title="Decor 456"></span><strong>Decor
                                                    456</strong></a><a href="dekor_457"
                                                class="dekor_457 col-md-3 col-sm-3 col-xs-3"><span class="dekor_457"
                                                    title="Decor 457"></span><strong>Decor
                                                    457</strong></a><a href="dekor_458"
                                                class="dekor_458 col-md-3 col-sm-3 col-xs-3"><span class="dekor_458"
                                                    title="Decor 458"></span><strong>Decor
                                                    458</strong></a><a href="dekor_459"
                                                class="dekor_459 col-md-3 col-sm-3 col-xs-3"><span class="dekor_459"
                                                    title="Decor 459"></span><strong>Decor
                                                    459</strong></a><a href="dekor_460"
                                                class="dekor_460 col-md-3 col-sm-3 col-xs-3"><span class="dekor_460"
                                                    title="Decor 460"></span><strong>Decor
                                                    460</strong></a></li>
                                        <li><a href="dekor_461" class="dekor_461 col-md-3 col-sm-3 col-xs-3"><span
                                                    class="dekor_461" title="Decor 461"></span><strong>Decor
                                                    461</strong></a><a href="dekor_462"
                                                class="dekor_462 col-md-3 col-sm-3 col-xs-3"><span class="dekor_462"
                                                    title="Decor 462"></span><strong>Decor
                                                    462</strong></a><a href="dekor_463"
                                                class="dekor_463 col-md-3 col-sm-3 col-xs-3"><span class="dekor_463"
                                                    title="Decor 463"></span><strong>Decor
                                                    463</strong></a><a href="dekor_464"
                                                class="dekor_464 col-md-3 col-sm-3 col-xs-3"><span class="dekor_464"
                                                    title="Decor 464"></span><strong>Decor
                                                    464</strong></a><a href="dekor_465"
                                                class="dekor_465 col-md-3 col-sm-3 col-xs-3"><span class="dekor_465"
                                                    title="Decor 465"></span><strong>Decor
                                                    465</strong></a><a href="dekor_466"
                                                class="dekor_466 col-md-3 col-sm-3 col-xs-3"><span class="dekor_466"
                                                    title="Decor 466"></span><strong>Decor
                                                    466</strong></a><a href="dekor_467"
                                                class="dekor_467 col-md-3 col-sm-3 col-xs-3"><span class="dekor_467"
                                                    title="Decor 467"></span><strong>Decor
                                                    467</strong></a><a href="dekor_468"
                                                class="dekor_468 col-md-3 col-sm-3 col-xs-3"><span class="dekor_468"
                                                    title="Decor 468"></span><strong>Decor
                                                    468</strong></a><a href="dekor_301"
                                                class="dekor_301 col-md-3 col-sm-3 col-xs-3"><span class="dekor_301"
                                                    title="Decor 301"></span><strong>Decor
                                                    301</strong></a><a href="dekor_303"
                                                class="dekor_303 col-md-3 col-sm-3 col-xs-3"><span class="dekor_303"
                                                    title="Decor 303"></span><strong>Decor
                                                    303</strong></a><a href="dekor_305"
                                                class="dekor_305 col-md-3 col-sm-3 col-xs-3"><span class="dekor_305"
                                                    title="Decor 305"></span><strong>Decor
                                                    305</strong></a><a href="dekor_307"
                                                class="dekor_307 col-md-3 col-sm-3 col-xs-3"><span class="dekor_307"
                                                    title="Decor 307"></span><strong>Decor
                                                    307</strong></a></li>
                                        <li><a href="dekor_310" class="dekor_310 col-md-3 col-sm-3 col-xs-3"><span
                                                    class="dekor_310" title="Decor 310"></span><strong>Decor
                                                    310</strong></a><a href="dekor_311"
                                                class="dekor_311 col-md-3 col-sm-3 col-xs-3"><span class="dekor_311"
                                                    title="Decor 311"></span><strong>Decor
                                                    311</strong></a><a href="dekor_312"
                                                class="dekor_312 col-md-3 col-sm-3 col-xs-3"><span class="dekor_312"
                                                    title="Decor 312"></span><strong>Decor
                                                    312</strong></a><a href="dekor_313"
                                                class="dekor_313 col-md-3 col-sm-3 col-xs-3"><span class="dekor_313"
                                                    title="Decor 313"></span><strong>Decor
                                                    313</strong></a><a href="dekor_1401"
                                                class="dekor_1401 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1401"
                                                    title="Decor 1401"></span><strong>Decor
                                                    1401</strong></a><a href="dekor_1404"
                                                class="dekor_1404 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1404"
                                                    title="Decor 1404"></span><strong>Decor
                                                    1404</strong></a><a href="dekor_1450"
                                                class="dekor_1450 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1450"
                                                    title="Decor 1450"></span><strong>Decor
                                                    1450</strong></a><a href="dekor_1451"
                                                class="dekor_1451 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1451"
                                                    title="Decor 1451"></span><strong>Decor
                                                    1451</strong></a><a href="dekor_1458"
                                                class="dekor_1458 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1458"
                                                    title="Decor 1458"></span><strong>Decor
                                                    1458</strong></a><a href="dekor_1465"
                                                class="dekor_1465 col-md-3 col-sm-3 col-xs-3"><span class="dekor_1465"
                                                    title="Decor 1465"></span><strong>Decor
                                                    1465</strong></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="MyElement">
                                <div class="slider_vertical boden">
                                    <div class="item"><img
                                            src="/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/boden/designboden/raumbild.gif"
                                            class="dekor_403" alt="Kleurweergave" /></div>
                                </div>
                            </div>
                            <hr /><a href="https://www.farbdesigner.de" target="_blank" class="pull-right"><img
                                    src="/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/logo-farbdesigner.png"
                                    alt="Kleurdesigner" /></a>
                            <div class="pull-left clear small mt20"><strong>Tip voor kleurweergave</strong><br>
                                De kleurweergave op een beeldscherm wijkt om technische redenen af van het
                                originele kleurstaal. Voor een bindende vergelijking raden we aan om een
                                origineel kleursjabloon te gebruiken. Via de stalenservice kunt u Brillux Scala
                                kleurstalen online bestellen.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="clearfix"></div>


@endsection