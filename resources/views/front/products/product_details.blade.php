@extends('layout.front.master')
@section('content')

<div id="c39433" class="frame frame-default frame-type-list frame-layout-0">


    <div class="breadcrumb" id="breadcrumb-wrap">
        <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">

            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-6158' class='inactive'
                    href="{{url('products')}}" property='item' typeof='WebPage'><span
                        property='name'>{{$module->module_name}}</span></a>
                <meta property='position' content='1'>
            </li>
            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-5633' class='inactive'
                    href="{{url('products',$category->slug)}}" property='item' typeof='WebPage'><span
                        property='name'>{{$category->category_name}} </span></a>
                <meta property='position' content='2'>
            </li>
            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-28907' class='inactive'
                    href="{{url('products',$subCategory->slug)}}" property='item' typeof='WebPage'><span
                        property='name'>{{$subCategory->subcat_name}}</span></a>
                <meta property='position' content='3'>
            </li>
            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-1200' class='inactive'
                    href='#' property='item'
                    typeof='WebPage'><span property='name'>Silicon-Systems</span></a>
                <meta property='position' content='4'>
            </li>
            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-32380' class='active'
                    href="{{url('products',$products->slug)}}" property='item' typeof='WebPage'><span
                        property='name'>{{$products->product_name}}</span></a>
                <meta property='position' content='5'>
            </li>



        </ul>
    </div>


</div>

<div class="flexslider content">


    <ul class="slides">


        <li>


            <img src="{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_e2c94c316e.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_e2c94c316e.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_3caa9ef798.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_9921bb50ab.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_a5d5124228.jpg')}} 767w, {{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_16e4ec54a7.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_a701b15768.jpg')}} 1200w,{{asset('public/assets/fileadmin/redaktion/bilder/produkte/header_produkte-neutral_beton.jpg')}} 1600w"
                sizes="100vw" alt="Products">



        </li>


    </ul>
</div>

<div class="subnavigation grey">
    <ul class="container nav navbar-nav sprungmarken_large"></ul>
</div>

<div id="c39431" class="frame frame-default frame-type-list frame-layout-0">

    <div class="subnavigation subnavigation-product grey">
        <ul class="container nav navbar-nav">

            <li id="bxtoolbarmenuwrap" class="dropdown navbar-right"> <a href="#" class="dropdown-toggle"
                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i
                        class="fa fa-share-square-o"></i></a>
                <ul id="bxtoolbarmenu" class="dropdown-menu">
                    <li id="bxtoolbarprint"><a href="javascript:window.print()"><i class="fa fa-print"></i>
                            Print page</a></li>
                    <li id="bxtoolbarmail"><a
                            href="mailto:?subject=Website recommendation: Silicone%20Facade%20Paint%20918&amp;body=Silicone%20Facade%20Paint%20918%0d%0a%20Facade%20paint%20based%20on%20silicone-resin%20for%20water-resistant%20and%20water-vapor-permeable%20facade%20coatings%20on%20all%20load-bearing%20substrates.%20%0D%0D%20%0ahttps://www.brillux.com/products/10918_silicone-facade-paint-918/"><i
                                class="fa fa-envelope-o"></i> Send by e-mail</a></li>
                    <li role="separator" class="divider"></li>
                    <li><span>Share:</span> <span class="socialmedia"><a target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u=www.brillux.com/products/10918_silicone-facade-paint-918/"
                                title="Share on facebook"><i class="fa fa-facebook"></i></a><a
                                href="https://twitter.com/home?status=www.brillux.com/products/10918_silicone-facade-paint-918/"
                                title="Share on twitter"><i class="fa fa-twitter"></i></a>
                            <!--<a href="#"><i class="fa fa-share-alt"></i></a>--><a
                                href="https://plus.google.com/share?url=www.brillux.com/products/10918_silicone-facade-paint-918/"
                                title="Share on Google+"><i class="fa fa-google-plus"></i></a>
                        </span></li>
                </ul>
            </li>
        </ul>
    </div>


    <div class="container">
        <div class="lead">
            <div class="vertical-zentriert">
                <h1>{{$products->product_name}}</h1>
                <p>{{$products->short_description}}

                </p>
                <div class="hidden-xs">

                </div>
            </div>

        </div>


    </div><!-- container end -->


    <!-- SUBNAV START -->
    <div class="subnavigation2">
        <div id="meinTabContent" class="container mb10">
            <div class="col-md-6 col-sm-6 col-lg-6">




                <span id="product-accentuation-list" class="product-accentuation-list-wide">
                </span>
                <div id="product-imggallery-wrap" class="produktdetail slider owl-carousel">
                    <div id="product-imagewrap-0" class="item"><a rel="productimages" class="big_picture bxprodimgbig"
                            href='/produkte/kat1/prodimages/en/600px/BX_0918-0015-0095.jpg'><img
                                src="{{asset('public/assets/images/product/'.$products->product_image)}}"
                                alt="{{$products->product_name}}" />
                        </a></div>
                </div>





                <div>&nbsp;</div>

                <ul>
                    <li> Matt</li>
                    <li> Water resistant</li>
                    <li> Highly weather-resistant</li>
                    <li> Highly water-vapor-permeable</li>
                    <li> Low soiling tendency</li>
                    <li> Optionally available in "Protect Quality" (film protection against an algal and fungal
                        infestation on the coating)</li>
                    <li> Very cost-effective</li>
                    <li> Non-saponifiable</li>
                    <li> With high protective function against aggressive air pollutants</li>
                    <li> Quick-drying</li>
                    <li> Microporous</li>
                    <li> Not film-forming</li>
                    <li> Very easy to apply</li>
                </ul>
                <div>&nbsp;</div>


                <div id="verbrauch_wrap">
                    <h4 id="verbrauch_headline_31104">Consumption</h4>
                    <p id="verbrauch_text_31104">
                        Approx. 150 - 180 ml/m² per layer
                    </p>
                    <div>&nbsp;</div>
                </div>
                <!-- verbrauch -->






                <div class="clearfix product-orderoptions">
                    <h4 id="bestellangaben_title_5298">Ordering Information</h4>
                    <p id="bestellangaben_text_5298">White:<br />
                        918 / 15 l / PU 1<br />
                        918 / 10 l / PU 1<br />
                        <br />
                        Color System:<br />
                        918 / 1 l / PU 1<br />
                        918 / 15 l / PU 1<br />
                        918 / 10 l / PU 1<br />
                        918 / 2.5 l / PU 1
                    </p>
                    <div>&nbsp;</div>
                </div>







            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                @php
                $gallery = App\Models\ImageGallery::where('product_id',$products->id)->get();

                @endphp
                <div class="MyElement">
                    <div class="slider_vertical owl-carousel]">
                        @foreach($gallery as $img)
                        <div class="item bxcolorpreviewarea"><img
                                src="{{asset('public/assets/images/product/gallery/'.$img->gallery)}}"
                                srcset="{{asset('public/assets/images/product/gallery/'.$img->gallery)}} 400w, {{asset('public/assets/images/product/gallery/'.$img->gallery)}} 720w"
                                alt="" /></div>
                        @endforeach

                    </div>
                    <div class="thumbnails_vertical owl-carousel">
                        @foreach($gallery as $img)
                        <div class="item bxcolorpreviewarea"><img
                                src="{{asset('public/assets/images/product/gallery/'.$img->gallery)}}" alt="" />
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class='bx-orderform-positionwrap' id="bx-orderform-positionwrap2"></div>
                <div class="small mt50"><strong>Tip for color shade representation on the monitor</strong><br>
                    <p>Please be aware that technically contingent deviations to the original color shades occur
                        with the on-screen representation and hardcopy of the color shades. Brillux products
                        should only be
                        ordered after examination of the color card.
                    </p>
                </div>

            </div>
            <div class="mb20">
                <div class="clearfix">
                    <div class="produkt_signets productsignetlist mt30">
                        <div class='productsignet'><span class='productsignetinnerwrap'><span
                                    class='productsignetinnerwrap2'><img alt="Quality Mark" data-placement="bottom"
                                        data-toggle="tooltip"
                                        src="{{asset('public/assets/produkte/kat1/pruefzeichen/en/150px/Farbsystem.jpg')}}"
                                        src="{{asset('public/assets/produkte/kat1/pruefzeichen/en/100px/Farbsystem.jpg')}}"
                                        srcset="{{asset('public/assets/produkte/kat1/pruefzeichen/en/100px/Farbsystem.jpg')}} 100w, {{asset('public/assets/produkte/kat1/pruefzeichen/en/150px/Farbsystem.jpg')}} 150w"
                                        data-original-title="Quality Mark"></span></span></div>
                        <div class='productsignet'><a target="_blank" title="Quality Mark"
                                href="http://www.brillux.de/anwendungen-und-loesungen/fassaden/schutz-vor-algen-und-pilzen/"><span
                                    class='productsignetinnerwrap'><span class='productsignetinnerwrap2'><img
                                            alt="Quality Mark" data-placement="bottom" data-toggle="tooltip"
                                            src='/produkte/kat1/pruefzeichen/en/150px/Protect-Fassade.jpg'
                                            src="/produkte/kat1/pruefzeichen/en/100px/Protect-Fassade.jpg"
                                            srcset='/produkte/kat1/pruefzeichen/en/100px/Protect-Fassade.jpg 100w, /produkte/kat1/pruefzeichen/en/150px/Protect-Fassade.jpg 150w'
                                            data-original-title="Quality Mark"></span></span></a></div>
                        <div class='productsignet'><a target="_blank" title="Quality Mark"
                                href="https://www.brillux.com/applications/paint-mixing-technology/#basecode-system"><span
                                    class='productsignetinnerwrap'><span class='productsignetinnerwrap2'><img
                                            alt="Quality Mark" data-placement="bottom" data-toggle="tooltip"
                                            src='/produkte/kat1/pruefzeichen/en/150px/Basecode.jpg'
                                            src="/produkte/kat1/pruefzeichen/en/100px/Basecode.jpg"
                                            srcset='/produkte/kat1/pruefzeichen/en/100px/Basecode.jpg 100w, /produkte/kat1/pruefzeichen/en/150px/Basecode.jpg 150w'
                                            data-original-title="Quality Mark"></span></span></a></div>
                    </div>
                </div>


            </div>

        </div>
        <div class="container">
            <div class="dcol-xs-12">
                <div class="panel-group" style="margin-top:0;" id="accordion" role="tablist">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="430"> <span class="panel-title"> <a role="button"
                                    data-toggle="collapse" data-parent="#accordion" href="#collapse430"
                                    aria-expanded="false" aria-controls="collapse430" class="collapsed">Data sheets <i
                                        class="pull-right fa fa-plus"></i> </a>
                            </span> </div>
                        <div id="collapse430" class="panel-collapse collapse" role="tabpanel" aria-labelledby="430"
                            aria-expanded="false">
                            <div class="panel-body">
                                <div id="product-fileassets-wrap">
                                    @php
                                    $dataSheet = App\Models\Datasheet::where('product_id',$products->id)->get();

                                    @endphp
                                    @foreach($dataSheet as $data)
                                    <div class="download col-md-4 col-sm-6 col-xs-6"
                                        style="margin-bottom:10px;min-height:160px;"><a
                                            id="productfile-linktechnicalsheet-1" target="_blank"
                                            href="{{asset('public/assets/images/product/datasheets/'.$data->data_sheets)}}" target="_blank"><img
                                                alt="Data Sheet" src="/fileadmin/template/global/img/file-icon-pm.jpg"
                                                style="max-width:80px;" class="col-md-5 col-xs-6"><span
                                                class="col-md-6 col-xs-6"><strong>Data Sheet</strong> <i
                                                    class="fa fa-file-pdf-o"></i> PDF, 101 <abbr lang="en"
                                                    title="Kilobyte">KB</abbr> <i
                                                    class="red fa fa-angle-right"></i></span></a><span
                                            class="col-md-6 col-xs-6"><a title="Recommend by e-mail"
                                                href="mailto:?subject=Data%20Sheet:%20Silicone%20Facade%20Paint%20918&amp;body=Data%20Sheet:%20Silicone%20Facade%20Paint%20918%0a%20Facade%20paint%20based%20on%20silicone-resin%20for%20water-resistant%20and%20water-vapor-permeable%20facade%20coatings%20on%20all%20load-bearing%20substrates.%20%0D%0D%20%0ahttps://www.brillux.com/produkte/kat1/pm-pdfs/com/pm918_gbr.pdf"><i
                                                    class="fa fa-envelope-o"></i> Recommend by e-mail</a></span>
                                    </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="434"> <span class="panel-title"> <a role="button"
                                    data-toggle="collapse" data-parent="#accordion" href="#collapse434"
                                    aria-expanded="false" aria-controls="collapse434" class="collapsed">Related content
                                    <i class="pull-right fa fa-plus"></i> </a>
                            </span> </div>
                        <div id="collapse434" class="panel-collapse collapse" role="tabpanel" aria-labelledby="434"
                            aria-expanded="false">
                            <div class="panel-body">
                                <div class="product-weblinks bxpanel nomargintop">

                                    <div class="col-xs-3 col-sm-4 col-lg-2  clearfix"><a class="arrow"
                                            href="https://www.brillux.com/applications/facade-protection/">
                                            <div
                                                style="background-image:url(fileadmin/template/global/img/symbol-link.jpg);width:80px;height:80px;background-color:#ddd;border:1px solid #ccc;background-size:contain;background-repeat:no-repeat;background-position:center center;">
                                                &nbsp;</div>
                                        </a></div>
                                    <div class="col-xs-9 col-sm-8 col-lg-10">&nbsp;<br><a class="arrow"
                                            href="https://www.brillux.com/applications/facade-protection/"><i
                                                class="fa fa-chevron-right"></i> <b>Optimal protection and
                                                individual design</b></a><br>&nbsp;</div>
                                    <div class="col-xs-12 clearfix">&nbsp;</div>

                                    <div class="col-xs-3 col-sm-4 col-lg-2  clearfix"><a class="arrow"
                                            href="https://www.brillux.com/applications/insulate-correctly/facade-design/#intense">
                                            <div
                                                style="background-image:url(fileadmin/template/global/img/symbol-link.jpg);width:80px;height:80px;background-color:#ddd;border:1px solid #ccc;background-size:contain;background-repeat:no-repeat;background-position:center center;">
                                                &nbsp;</div>
                                        </a></div>
                                    <div class="col-xs-9 col-sm-8 col-lg-10">&nbsp;<br><a class="arrow"
                                            href="https://www.brillux.com/applications/insulate-correctly/facade-design/#intense"><i
                                                class="fa fa-chevron-right"></i> <b>SolRefelx</b></a><br>&nbsp;
                                    </div>
                                </div><br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="container mb50">


    </div>

    <div class="container">
        <div class="col-md-12 col-sm-12">
        </div>
    </div>




    <script type="text/javascript">
    $(document).ready(function() {
        $('.flexslider').html(
            "<img style='max-width:100%;' src='{{asset("public/assets/produkte/kat1/headerbild/de/header_prod_farben.jpg ")}}' alt='Silicone Facade Paint 918' />"
        );
    });
    </script>


    <style type="text/css">
    .sprungmarken_large {
        display: none;
    }
    </style>



</div>


<div id="c39430" class="frame frame-default frame-type-list frame-layout-0">
    <div class="container">
        <div id="bx-orderform-wrap" class="bx-orderform-layout2 clearfix">

            <div>
                <form method="post" class="bx-orderform-default">
                    <div class="wrapper2">
                        <div class="dropdown">
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="changeTyp active" changeTyp="NORM">
                                    <a id="orderform-tabnorm" href="#standardfarbton" role="tab"
                                        data-toggle="tab">Standard colors</a>
                                </li>
                                <li role="presentation" class="changeTyp " changeTyp="FMIX">
                                    <a id="orderform-tabfmix" href="#farbtonsuche" role="tab" data-toggle="tab">Color
                                        shade search</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content warenkorb">
                        <!-- Standardfarben -->
                        <div role="tabpanel" class="tab-pane  active" id="standardfarbton">
                            <div class="farbwahl bxcolorchoicelist">
                                <p><strong>Color</strong> <em id='normselectedlabel'></em></p>
                                <div id="colorLineNORM">
                                    <a id="bxColorOptionNORM5" href="#"
                                        onclick="changeActiveColor('5');refreshColorPreviewAreasByElem($(this));return false;">
                                        <span style="font-size:12px; padding: 4px; color: white;width:120px;"
                                            data-toggle="tooltip" data-placement="bottom" title="weiß"> </span>
                                    </a>
                                </div>
                                <div class="clearfix">&nbsp;</div>
                            </div>
                            <div id="bxsizelistNORM" class="clearfix panel-body bxdividertop bxsizelist">
                                <p><strong>Size</strong></p>
                                <label class="radio-inline" id="bxSizeOptionNORM4l">
                                    <input type="radio" name="inlineRadioOptionen" id="bxSizeOptionNORM4"
                                        onclick='changeActiveSize("","4");' value=""> 10 l </label>
                                <label class="radio-inline" id="bxSizeOptionNORM1l">
                                    <input type="radio" name="inlineRadioOptionen" id="bxSizeOptionNORM1"
                                        class="bxdefaultsize" checked="checked" onclick='changeActiveSize("","1");'
                                        value=""> 15 l </label>

                                        
                            </div>

                        </div>
                        <!-- Farbtonsuche -->
                        <div role="tabpanel" class="tab-pane " id="farbtonsuche">
                            <p class="small"></p>
                            <p class="small">Schnell und sicher zum gewünschten Farbton: <a
                                    href="/color-shades-samples/color-shade-search/">Color shade search</a></p>

                            <div id="bxsizelistFMIX"
                                class="panel-body clearfix bxdividertop bxsizelist bxsizelistnoshop">
                                <strong id="bxsizelistfmixlbl">Size</strong>

                            </div>

                        </div>
                    </div>
                    <div class="panel-group warenkorb accordion_warenkorb">
                        <div id="bxorderarticleinfo" class="small"></div>


                        <div>&nbsp;</div>


                        <input id="bxordersorte" type="hidden" name="Sorte" value="918" />
                        <input id="bxordersize" type="hidden" name="Groesse" value="0015" />
                        <input id="bxordercolor" type="hidden" name="Farbe" value="95" />
                        <input id="bxordercolorid" name="colorId" type="hidden" value="" />
                        <input id="bxordercolorcollection" name="kollektion" type="hidden" value="" />
                        <input id="bxordercolorname" type="hidden" name="farbname" value="" />





                    </div>
                </form>
            </div>






            <script type="text/javascript">
            //default ll values
            if (typeof(bxOrderFormLang) == "undefined") {
                var bxOrderFormLang = new Array();
                bxOrderFormLang["llpricedisabledhint"] =
                    "Bitte treffen Sie zunächst eine Auswahl, um einen Preis zu ermitteln.";
                bxOrderFormLang["llorderbtndisabledhint"] =
                    "Bitte treffen Sie zunächst eine Auswahl, um das Produkt in den Warenkorb legen zu können.";
                bxOrderFormLang["llshowprice"] = "Show price";
                bxOrderFormLang["llartno"] = "Art.-Nr.";
                bxOrderFormLang["llve"] = "packaging unit";
                bxOrderFormLang["llordervariantfailure"] =
                    "Bitte entschuldigen Sie: Diese Variante kann zur Zeit nicht online bestellt werden. Bitte wenden Sie sich an Ihren Verkaufsberater.";
                bxOrderFormLang["llconscalcfailure"] =
                    "Bitte entschuldigen Sie: Die Mengenberechnung für diesen Artikel hat leider nicht geklappt. Bitte prüfen Sie die Verbrauchsangaben.";

                bxOrderFormLang["lllayersize"] = "layer";
                bxOrderFormLang["llpalletsize"] = "palette";
                bxOrderFormLang["llpacketsize"] = "pack";


            }



            var fmixSizes = JSON.parse(
                '{"FMIX":{"1":{"1":1},"2":{"2":2,"3":3,"4":4,"1":1},"3":{"2":2,"3":3,"4":4,"1":1},"4":{"2":2,"3":3,"4":4,"1":1}},"NORM":{"5":{"4":4,"1":1}}}'
            );



            //var articleSizes = JSON.parse( '' );
            var artSizes = JSON.parse(
                '{"FMIX":{"5541":{"1":{"quantity":"15","size":"\/015","unit":"l"}},"3340":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}},"3330":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}},"3310":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}},"4440":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}},"4410":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}},"4430":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}},"5510":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}},"5530":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}},"5540":{"2":{"quantity":"1","size":"\/001","unit":"l"},"3":{"quantity":"2,5","size":"\/2,5","unit":"l"},"4":{"quantity":"10","size":"\/010","unit":"l"},"1":{"quantity":"15","size":"\/015","unit":"l"}}},"NORM":{"95":{"4":{"quantity":"10","size":"0010","unit":"l"},"1":{"quantity":"15","size":"0015","unit":"l"}}}}'
            );
            var ColorToSizes = JSON.parse(
                '{"FMIX":{"1":{"1":1},"2":{"2":2,"3":3,"4":4,"1":1},"3":{"2":2,"3":3,"4":4,"1":1},"4":{"2":2,"3":3,"4":4,"1":1}},"NORM":{"5":{"4":4,"1":1}}}'
            );
            var allColors = JSON.parse(
                '{"FMIX":{"2":{"name":null,"colorName":null,"rgb":"#FFFFFF","filename":"","farbtonId":"0","collectionId":null,"color":"3340","colorCurId":2,"position":"14"},"3":{"name":null,"colorName":null,"rgb":"#FFFFFF","filename":"","farbtonId":"0","collectionId":null,"color":"4440","colorCurId":3,"position":"17"},"4":{"name":null,"colorName":null,"rgb":"#FFFFFF","filename":"","farbtonId":"0","collectionId":null,"color":"5510","colorCurId":4,"position":"20"},"1":{"name":null,"colorName":null,"rgb":"#FFFFFF","filename":"","farbtonId":"0","collectionId":null,"color":"5541","colorCurId":1,"position":"50"}},"NORM":{"5":{"RGB":"","":"FARB_FILE","colorName":"wei\u00df","colorCurId":5,"position":"12"}}}'
            );
            var allSizes = JSON.parse(
                '{"FMIX":{"1":{"quantity":"15","unit":"l"},"2":{"quantity":"1","unit":"l"},"3":{"quantity":"2,5","unit":"l"},"4":{"quantity":"10","unit":"l"}},"NORM":{"4":{"quantity":"10","unit":"l"},"1":{"quantity":"15","unit":"l"}}}'
            );
            var allArticles = JSON.parse(
                '{"FMIX":{"1":{"1":{"sorte":"918","groesse":"\/015","farbe":"5541","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"411994","quantity":"15","unit":"l","packetSize":"1","layerSize":"8","palletSize":"24"}},"2":{"2":{"sorte":"918","groesse":"\/001","farbe":"3310","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"296862","quantity":"1","unit":"l","packetSize":"1","layerSize":"42","palletSize":"252"},"3":{"sorte":"918","groesse":"\/2,5","farbe":"3310","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"191608","quantity":"2,5","unit":"l","packetSize":"1","layerSize":"20","palletSize":"100"},"4":{"sorte":"918","groesse":"\/010","farbe":"3340","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"223098","quantity":"10","unit":"l","packetSize":"1","layerSize":"10","palletSize":"40"},"1":{"sorte":"918","groesse":"\/015","farbe":"3310","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"191607","quantity":"15","unit":"l","packetSize":"1","layerSize":"8","palletSize":"24"}},"3":{"2":{"sorte":"918","groesse":"\/001","farbe":"4430","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"296866","quantity":"1","unit":"l","packetSize":"1","layerSize":"42","palletSize":"252"},"3":{"sorte":"918","groesse":"\/2,5","farbe":"4440","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"180897","quantity":"2,5","unit":"l","packetSize":"1","layerSize":"20","palletSize":"100"},"4":{"sorte":"918","groesse":"\/010","farbe":"4410","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"223093","quantity":"10","unit":"l","packetSize":"1","layerSize":"10","palletSize":"40"},"1":{"sorte":"918","groesse":"\/015","farbe":"4410","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"155955","quantity":"15","unit":"l","packetSize":"1","layerSize":"8","palletSize":"24"}},"4":{"2":{"sorte":"918","groesse":"\/001","farbe":"5540","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"296870","quantity":"1","unit":"l","packetSize":"1","layerSize":"42","palletSize":"252"},"3":{"sorte":"918","groesse":"\/2,5","farbe":"5540","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"200439","quantity":"2,5","unit":"l","packetSize":"1","layerSize":"20","palletSize":"100"},"4":{"sorte":"918","groesse":"\/010","farbe":"5510","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"223094","quantity":"10","unit":"l","packetSize":"1","layerSize":"10","palletSize":"40"},"1":{"sorte":"918","groesse":"\/015","farbe":"5510","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"155407","quantity":"15","unit":"l","packetSize":"1","layerSize":"8","palletSize":"24"}}},"NORM":{"5":{"4":{"sorte":"918","groesse":"0010","farbe":"95","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"228657","quantity":"10","unit":"l","packetSize":"1","layerSize":"10","palletSize":"40"},"1":{"sorte":"918","groesse":"0015","farbe":"95","farbname":null,"kollektion":null,"farbtonId":"0","collectionId":null,"artnr":"154926","quantity":"15","unit":"l","packetSize":"1","layerSize":"8","palletSize":"24"}}}}'
            );


            var articleQuantities = JSON.parse(
                '{"FMIX":{"1":{"quantity":"15","size":"\/015"},"2":{"quantity":"1","size":"\/001"},"3":{"quantity":"2,5","size":"\/2,5"},"4":{"quantity":"10","size":"\/010"}},"NORM":{"4":{"quantity":"10","size":"0010"},"1":{"quantity":"15","size":"0015"}}}'
            );
            var curArticleTyp = 'NORM';
            var curMinSize = '';

            var curColorId = "";
            var curSizeId = "";


            var leadingArticleNumber = '918 . 0015 . 95';
            var leadingArticleTyp = 'NORM';
            var leadingArticleColorId = '5';
            var leadingArticleSizeId = '1';



            var flagPaintArticle = true;
            var flagVariantchoices = false;


            var defaultArticleSorte = '918';
            var defaultArticleGroesse = '0015';
            var defaultArticleFarbe = '95';

            var articlesQuantities = undefined;
            articlesQuantities = JSON.parse(
                '{"articlesQuantities":{"1":{"minimumQuantity":"1","quantityStepSize":"1"},"2":{"minimumQuantity":"1","quantityStepSize":"1"},"3":{"minimumQuantity":"1","quantityStepSize":"1"},"4":{"minimumQuantity":"1","quantityStepSize":"1"},"5":{"minimumQuantity":"1","quantityStepSize":"1"},"6":{"minimumQuantity":"1","quantityStepSize":"1"},"7":{"minimumQuantity":"1","quantityStepSize":"1"},"8":{"minimumQuantity":"1","quantityStepSize":"1"},"9":{"minimumQuantity":"1","quantityStepSize":"1"},"10":{"minimumQuantity":"1","quantityStepSize":"1"},"11":{"minimumQuantity":"1","quantityStepSize":"1"},"12":{"minimumQuantity":"1","quantityStepSize":"1"},"13":{"minimumQuantity":"1","quantityStepSize":"1"},"14":{"minimumQuantity":"1","quantityStepSize":"1"},"15":{"minimumQuantity":"1","quantityStepSize":"1"},"16":{"minimumQuantity":"1","quantityStepSize":"1"},"17":{"minimumQuantity":"1","quantityStepSize":"1"},"18":{"minimumQuantity":"1","quantityStepSize":"1"},"19":{"minimumQuantity":"1","quantityStepSize":"1"},"20":{"minimumQuantity":"1","quantityStepSize":"1"},"21":{"minimumQuantity":"1","quantityStepSize":"1"},"22":{"minimumQuantity":"1","quantityStepSize":"1"},"23":{"minimumQuantity":"1","quantityStepSize":"1"},"24":{"minimumQuantity":"1","quantityStepSize":"1"},"25":{"minimumQuantity":"1","quantityStepSize":"1"},"26":{"minimumQuantity":"1","quantityStepSize":"1"},"27":{"minimumQuantity":"1","quantityStepSize":"1"},"28":{"minimumQuantity":"1","quantityStepSize":"1"},"29":{"minimumQuantity":"1","quantityStepSize":"1"},"30":{"minimumQuantity":"1","quantityStepSize":"1"},"31":{"minimumQuantity":"1","quantityStepSize":"1"},"32":{"minimumQuantity":"1","quantityStepSize":"1"},"33":{"minimumQuantity":"1","quantityStepSize":"1"},"34":{"minimumQuantity":"1","quantityStepSize":"1"},"35":{"minimumQuantity":"1","quantityStepSize":"1"},"36":{"minimumQuantity":"1","quantityStepSize":"1"},"37":{"minimumQuantity":"1","quantityStepSize":"1"},"38":{"minimumQuantity":"1","quantityStepSize":"1"},"39":{"minimumQuantity":"1","quantityStepSize":"1"}}}'
            );


            var articleArtNoList = Array();
        
            articleArtNoList['918./015.5541'] = '411994';
            articleArtNoList['918./001.3340'] = '296864';
            articleArtNoList['918./001.3330'] = '296863';
            articleArtNoList['918./001.3310'] = '296862';
            articleArtNoList['918./2,5.3340'] = '180896';
            articleArtNoList['918./2,5.3330'] = '188303';
            articleArtNoList['918./2,5.3310'] = '191608';
            articleArtNoList['918./010.3310'] = '223092';
            articleArtNoList['918./010.3330'] = '223095';
            articleArtNoList['918./010.3340'] = '223098';
            articleArtNoList['918./015.3330'] = '187763';
            articleArtNoList['918./015.3340'] = '155772';
            articleArtNoList['918./015.3310'] = '191607';
            articleArtNoList['918./001.4440'] = '296867';
            articleArtNoList['918./001.4410'] = '296865';
            articleArtNoList['918./001.4430'] = '296866';
            articleArtNoList['918./2,5.4430'] = '180898';
            articleArtNoList['918./2,5.4410'] = '181031';
            articleArtNoList['918./2,5.4440'] = '180897';
            articleArtNoList['918./010.4440'] = '223099';
            articleArtNoList['918./010.4430'] = '223096';
            articleArtNoList['918./010.4410'] = '223093';
            articleArtNoList['918./015.4440'] = '155636';
            articleArtNoList['918./015.4430'] = '155598';
            articleArtNoList['918./015.4410'] = '155955';
            articleArtNoList['918./001.5510'] = '296868';
            articleArtNoList['918./001.5530'] = '296869';
            articleArtNoList['918./001.5540'] = '296870';
            articleArtNoList['918./2,5.5530'] = '181030';
            articleArtNoList['918./2,5.5510'] = '181032';
            articleArtNoList['918./2,5.5540'] = '200439';
            articleArtNoList['918./010.5540'] = '223100';
            articleArtNoList['918./010.5530'] = '223097';
            articleArtNoList['918./010.5510'] = '223094';
            articleArtNoList['918./015.5540'] = '200440';
            articleArtNoList['918./015.5530'] = '155785';
            articleArtNoList['918./015.5510'] = '155407';
            articleArtNoList['918.0010.95'] = '228657';
            articleArtNoList['918.0015.95'] = '154926';





            if (curArticleTyp == '') {
                curArticleTyp = "NORM";
            }

            var validArticleTypes = Array('NORM', 'SCALA', 'RAL', 'CSUNIT', 'FMIX');
            //array to store articles to preselect or preselected by user
            preselectArticle = Array();
            //create array for preselection
            for (var vt = 0; vt < validArticleTypes.length; vt++) {
                preselectArticle[validArticleTypes[vt]] = Array();
                if (leadingArticleTyp == validArticleTypes[vt]) {
                    preselectArticle[validArticleTypes[vt]]["size"] = '0015';
                    preselectArticle[validArticleTypes[vt]]["color"] = '95';
                    preselectArticle[validArticleTypes[vt]]["colorid"] = '5';
                    preselectArticle[validArticleTypes[vt]]["sizeid"] = '1';


                } else {
                    preselectArticle[validArticleTypes[vt]]["size"] = '';
                    preselectArticle[validArticleTypes[vt]]["color"] = '';
                    preselectArticle[validArticleTypes[vt]]["colorid"] = '';
                    preselectArticle[validArticleTypes[vt]]["sizeid"] = '';
                }

            }

            //create article lookup structure, TODO REMOVE
            var tSectionName = "";
            var flagHasLayerOrPalletteInfo = false;
            var tArticleObj = null;
            allArticlesLookUp = new Array();
            if (allArticles) {
                for (var tArticleSection in allArticles) {
                    tSectionName = tArticleSection;
                    for (var tArticleList in allArticles[tArticleSection]) {
                        for (var tArticleEntry in allArticles[tArticleSection][tArticleList]) {
                            tArticleObj = allArticles[tArticleSection][tArticleList][tArticleEntry];
                            tArticleObj["articleTyp"] = tSectionName;
                            if (tArticleObj.sorte && tArticleObj.groesse && tArticleObj.farbe) {
                                allArticlesLookUp[tArticleObj.sorte + "." + tArticleObj.groesse + "." +
                                    tArticleObj.farbe] = tArticleObj;
                            }
                            if (tArticleObj.layerSize || tArticleObj.palletSize) {
                                flagHasLayerOrPalletteInfo = true;
                            }
                        }
                    }
                }
            }
            tSectionName = null;
            tArticleObj = null;


            $(document).ready(function() {
                //tabnav event handler
                $('.changeTyp').click(function() {
                    var typName = $(this).attr("changeTyp");
                    changeTypOnClick(typName);
                });
                //show article no. if there is just one article
                if (!flagVariantchoices) {
                    refreshArticleInfo();
                }
                if (flagPaintArticle) { // flagVariantchoices
                    changeTypOnClick(curArticleTyp);
                }

                //article select event handler
                if ($('#bxproductvariantselect1').length > 0) {
                    $('#bxproductvariantselect1').change(function() {
                        deleteInpageNotice();

                        var options = $(this).val().split("||", 2);
                        if (options.length == 2 && options[0] != "" && options[1] != "") {
                            $("#bxordersize").attr('value', options[0]);
                            $("#bxordercolor").attr('value', options[1]);



                            if (typeof articlesQuantities !== 'undefined') {
                                var selectedIndex = $("select option:selected").index() - 1;
                                if (selectedIndex in articlesQuantities[
                                        'articlesQuantities']) {
                                    var minimumQuantity = articlesQuantities[
                                        'articlesQuantities'][selectedIndex][
                                        'minimumQuantity'
                                    ];
                                    $("#minimumQuantity").attr('value', minimumQuantity);
                                    var quantityStepSize = articlesQuantities[
                                        'articlesQuantities'][selectedIndex][
                                        'quantityStepSize'
                                    ];
                                    $("#quantityStepSize").attr('value', quantityStepSize);
                                    var currentValue = $("#bxorderamount").val();
                                    var rest = bxRoundArticleCount(((currentValue * 1000) -
                                        (minimumQuantity * 1000)) % (
                                        quantityStepSize * 1000));
                                    if (rest != 0) {
                                        $('.bx-basket-btnplus').trigger("click");
                                    }
                                }
                            }

                            enablePriceCheck();
                            enableOrder();
                        } else {
                            disableOrderAndPriceButton();
                            if ($(this).val() != '') {
                                setInpageNotice(bxOrderFormLang["llordervariantfailure"]);
                            }
                        }
                        refreshArticleInfo();
                    });
                    //select default value
                    if ($('#bxproductvariantselect1 .defaultvariant').length > 0 && $(
                            '#bxproductvariantselect1 .defaultvariant').val().length > 0) {
                        $('#bxproductvariantselect1').val($(
                            '#bxproductvariantselect1 .defaultvariant').val()).change();
                    }
                }
                if ($('#calcconsqm').length > 0) {
                    $('#calcconsqm').keydown(function(e) {
                        if (e.which == 13) {
                            refreshCalcCons();
                            e.preventDefault();
                        }
                    });
                    //if qm field exits, check for select
                    if ($('#calcconsnc').length > 0) {
                        $('#calcconsnc').change(function(e) {
                            if ($('#calcconsqm').val() != "") {
                                refreshCalcCons();
                            }
                        });
                    }

                }
                if ($('#bxcalcquantamount').length > 0) {
                    $('#bxcalcquantamount').keydown(function(e) {
                        if (e.which == 13) {
                            refreshAmountByQuantAmount();
                            e.preventDefault();
                        }
                    });
                }




                $(".bx-basket-calcquantbtn").click(function() {
                    try {
                        cqtargel = $(this).data("targetelement");
                        cqtardir = $(this).data("targetdirection");
                        if (cqtargel && cqtardir) {
                            cqtaramount = $('#' + cqtargel).text() * 1;
                            cqrecamount = $('#bxcalcquantamount').val() * 1;
                            if (!isNaN(cqrecamount) && cqrecamount < 0) {
                                cqrecamount = 0;
                            }
                            if (cqtardir == "minus") {
                                cqrecamount = cqrecamount - cqtaramount;
                            } else {
                                cqrecamount = cqrecamount + cqtaramount;
                            }
                            if (cqrecamount < 0) {
                                cqrecamount = 0;
                            }
                            $('#bxcalcquantamount').val(cqrecamount);


                        }
                    } catch (e) {
                        console.log(e);
                    }
                });

                //TODO:
                if (flagHasLayerOrPalletteInfo) {
                    $('#bxordervecalc').show();
                }



            });

            /*
             * refreshAmountByQuantAmount
             * simple value copy, copy value from quantity calculation helper window to order amount field
             */
            function refreshAmountByQuantAmount() {
                try {
                    if ($("#bxcalcquantamount").val().length > 0) {
                        $("#bxorderamount").val($("#bxcalcquantamount").val());
                        $("#calcquantcontainer").hide();
                        //$("#bxorderamount").css('backgroundColor','#cff4c7');
                        //setTimeout(function() {$("#bxorderamount").css('backgroundColor','#fff')},500);

                    }
                } catch (e) {
                    console.log("ERROR: Sorry, refreshAmountByQuantAmount failed");
                }
            }

            /*
             * triggerProcessFormData
             * trigger function processFormData depending on curArticleTyp
             * @Params
             * actiontyp - actionstring
             */
            function triggerProcessFormData(actiontyp) {

                //	if(curArticleTyp=="FMIX") {
                //console.log("FMIX > sending colorid "+$('#bxordercolorid').val());
                processFormDataExt(actiontyp, $('#bxordersorte').val(), $('#bxordersize').val(), $(
                    '#bxordercolor').val(), $('#bxorderamount').val(), '', 0, '', $(
                    '#bxordercolorcollection').val(), $('#bxordercolorid').val());

                //	} else {
                //console.log("No FMIX > sending bxordercolorsearchterm "+$('#bxordercolorsearchterm').val());
                //bxordercolorname
                //		processFormData(actiontyp, $('#bxordersorte').val(), $('#bxordersize').val(), $('#bxordercolor').val()  , $('#bxorderamount').val(), $('#bxordercolorname').val(),0,'',$('#bxordercolorcollection').val());
                //	}
            }



            /*
             * changeTypOnClick
             * default dispatcher when changing color tab
             * selected values are removed by default, fssuche results are removed
             */
            function changeTypOnClick(newTypName) {


                $('#bxsizelist' + curArticleTyp).find('label').removeClass('active').addClass(
                    'labeldisabled');
                $("#bxsizelist" + curArticleTyp).find('input').attr('disabled', 'disabled');
                $('#colorLine' + curArticleTyp).find('a').removeClass('active')

                disableOrderAndPriceButton();
                deleteInpageNotice();
                disableAllSizeOptions('bxsizelist' + curArticleTyp);
                if (newTypName == 'FMIX') {
                    //disableAllSizeOptions( 'bxsizelist' + newTypName );
                    deleteAllSizeOptions('bxsizelist' + newTypName);
                    clearArticleInfo();
                    //no consumption calc on fmix yet
                    hideCalcConsBtn();
                    hideCalcCons();
                } else {
                    //show calc btn but clear consumption calc results
                    showCalcConsBtn();
                    clearCalcConsResult();
                }

                setMinSize('');
                $("#bxordercolor").attr('value', '');
                $("#bxordersize").attr('value', '');
                $("#bxordercolorid").attr('value', '');
                $("#bxordercolorsearchterm").attr('value', '');
                $("#bxordercolorcollection").attr('value', '');
                setSearchColorInfoLine('', '', '#FFFFFF', '');
                curArticleTyp = newTypName;

                //initial selection
                changeActiveColorToDefault();
            }

            /*
             * changeActiveColorToDefault
             * set active by preselect value, trigger a selection in ui
             */
            function changeActiveColorToDefault() {
                //preselect color
                if (curArticleTyp != "FMIX") {
                    if (preselectArticle[curArticleTyp]["colorid"] != '' && $('#bxColorOption' +
                            curArticleTyp + preselectArticle[curArticleTyp]["colorid"]).length > 0) {
                        $('#bxColorOption' + curArticleTyp + preselectArticle[curArticleTyp]["colorid"])
                            .trigger("click");
                        //console.log("trying to set to color to preselected value");

                    } else {
                        $("#colorLine" + curArticleTyp + " a:first").trigger("click");


                        //console.log("no default value, trying to set first color in list");
                    }
                }
            }

            /*
             * refreshActiveColorByColorIdAndSize
             * since color part of artno can be different depending on size, a check has to be made after color and size change
             * @params
             * colorId – a valid color id
             */
            function refreshActiveColorByColorIdAndSize(colorId, sizeval, sizeId) {

                ordercolorid = colorId;
                curColorId = colorId;
                curSizeId = sizeId;
                //tempcollection = "";
                //tempcolorname = "";
                if (curArticleTyp != "FMIX") {
                    if (typeof(sizeId) !== 'undefined') {
                        if (typeof(allArticles[curArticleTyp]) !== 'undefined') {
                            if (typeof(allArticles[curArticleTyp]) !== 'undefined') {
                                try {
                                    if (typeof(allArticles[curArticleTyp][curColorId][sizeId]) !==
                                        'undefined') {
                                        ordercolorid = allArticles[curArticleTyp][curColorId][sizeId].farbe;
                                        $("#bxordersize").attr('value', allArticles[curArticleTyp][
                                            curColorId
                                        ][sizeId].groesse);
                                        setFSColorName(allArticles[curArticleTyp][curColorId][sizeId]
                                            .farbname);
                                        setFSColorCollection(allArticles[curArticleTyp][curColorId][sizeId]
                                            .kollektion);
                                        setFSColorId(allArticles[curArticleTyp][curColorId][sizeId]
                                            .farbtonId);
                                    }
                                } catch (e) {
                                    console.log("Error reading article data " + e);
                                }
                            }
                        }
                    }

                }
                $("#bxordercolor").attr('value', ordercolorid);
            }


            /*
             * changeActiveColor
             * set active color for order process
             * @params
             * colorId – a valid color id
             */
            function changeActiveColor(colorId) {
                //console.log("changeActiveColor"+colorId);
                //store value now depending on size
                refreshActiveColorByColorIdAndSize(colorId, preselectArticle[curArticleTyp]["size"],
                    preselectArticle[curArticleTyp]["sizeid"]);

                //set active class for trigger click
                $("#bxColorOption" + curArticleTyp + colorId).addClass("active");

                if ($('#' + curArticleTyp.toLowerCase() + 'selectedlabel').length > 0) {
                    var colorTitle = $("#bxColorOption" + curArticleTyp + colorId).find("span:first").attr(
                        "data-original-title");
                    if (typeof(colorTitle) == "undefined") {
                        colorTitle = $("#bxColorOption" + curArticleTyp + colorId).find("span:first").attr(
                            "title");
                    }
                    $('#' + curArticleTyp.toLowerCase() + 'selectedlabel').html(colorTitle);
                }
                disableAllSizeOptions('bxsizelist' + curArticleTyp);
                enableSizeOptions(curArticleTyp, colorId);
                //store decision
                storeSelectedColor(colorId);
            }


            /*
             * changeActiveSize
             * set active Size for order process
             * checking against allSizes array for anomalies in size values
             * @params
             * sizeVal– a size val
             * sizeId – a valid size id
             */
            function changeActiveSize(sizeVal, sizeId) {

                var orderLineSize = sizeVal;
                var activeColorVal = $('#bxordercolor').val();
                if (curArticleTyp != "FMIX" && sizeId != null) {
                    if (!(typeof allSizes[curArticleTyp] == 'undefined')) {
                        if (!(typeof allSizes[curArticleTyp][activeColorVal] == 'undefined')) {
                            if (!(typeof allSizes[curArticleTyp][activeColorVal][sizeId] == 'undefined')) {
                                //console.log("Size val in array allSizes found, storing value");
                                orderLineSize = allSizes[curArticleTyp][activeColorVal][sizeId].size;
                            }
                        }
                    }
                }
                //console.log(orderLineSize+" original:"+sizeVal);
                $("#bxordersize").attr('value', orderLineSize);
                refreshActiveColorByColorIdAndSize(curColorId, sizeVal, sizeId);
                enablePriceCheck();
                enableOrder();
                refreshArticleInfo();
                storeSelectedSize(sizeVal, sizeId);
                curSizeId = sizeId;
                orderLineSize = null;
                activeColorVal = null;
            }

            /*
             * refreshArticleInfo
             * refresh article number, ve for customer information, fav obj data
             * @params
             */
            function refreshArticleInfo() {
                //clear consumption calc
                clearCalcConsResult();
                artno = $('#bxordersorte').val() + "." + $('#bxordersize').val() + "." + $('#bxordercolor')
                    .val();
                veinfo = "";
                //if(typeof articleVeList[artno] !== 'undefined' && articleVeList[artno].length>0) {
                //	veinfo = ", "+bxOrderFormLang["llve"]+": "+articleVeList[artno];
                //}
                //old articleVeList, new allArticlesLookUp
                if (typeof allArticlesLookUp[artno] !== 'undefined') {
                    if (typeof allArticlesLookUp[artno].packetSize !== 'undefined' && allArticlesLookUp[
                            artno].packetSize > 0) {
                        veinfo = ",<br>" + bxOrderFormLang["llve"] + ": " + allArticlesLookUp[artno]
                            .packetSize;

                        //Todo bind
                        $('#infopacketsize').html(allArticlesLookUp[artno].packetSize);

                        if (typeof allArticlesLookUp[artno].layerSize !== 'undefined' && allArticlesLookUp[
                                artno].layerSize > 0) {
                            veinfo += ", " + bxOrderFormLang["lllayersize"] + ": " + allArticlesLookUp[
                                artno].layerSize;
                            $('#infolayersize').html(allArticlesLookUp[artno].layerSize);
                        } else {
                            $('#infolayersize').html(allArticlesLookUp[artno].packetSize);
                        }
                        if (typeof allArticlesLookUp[artno].palletSize !== 'undefined' && allArticlesLookUp[
                                artno].palletSize > 0) {
                            veinfo += ", " + bxOrderFormLang["llpalletsize"] + ": " + allArticlesLookUp[
                                artno].palletSize;
                            $('#infopalletsize').html(allArticlesLookUp[artno].palletSize);
                        } else {
                            $('#infopalletsize').html(allArticlesLookUp[artno].packetSize);
                        }
                    } else {
                        $('#infopacketsize').html("1");
                    }
                }
                $('#bxorderarticleinfo').html(bxOrderFormLang["llartno"] + " " + artno + veinfo);

                if (typeof articleArtNoList[artno] !== 'undefined' && articleArtNoList[artno].length > 0) {
                    productRefreshSaveFavValue({
                        value1: articleArtNoList[artno]
                    });
                }

                veinfo = null;
                artno = null;
            }
            /*
             * clearArticleInfo
             * clear article number, ve for customer information
             * @params
             */
            function clearArticleInfo() {
                $('#bxorderarticleinfo').html("");

            }

            /*
             * storeSelectedColor
             * save selected color for later reselection
             * @params
             * colorId – a valid color id
             */
            function storeSelectedColor(colorId) {

                if (curArticleTyp != "FMIX") {
                    if (typeof preselectArticle[curArticleTyp] == undefined) {
                        //save failed
                    } else {
                        preselectArticle[curArticleTyp]["color"] = colorId;
                    }
                }
            }

            /*
             * storeSelectedSize
             * save selected size for later reselection
             * @params
             * sizeId – a valid size id
             */
            function storeSelectedSize(sizeval, sizeId) {
                if (typeof preselectArticle[curArticleTyp] == undefined) {
                    //save failed
                } else {
                    preselectArticle[curArticleTyp]["size"] = sizeId;
                    preselectArticle[curArticleTyp]["sizeid"] = sizeId;
                }
            }

            /*
             * setSearchColorInfoLine
             * set color info by FSSUCHE
             * @params
             * collection – String, name of collection
             * colorName - String, pg basis
             * rgb - String, hex value
             */
            function setSearchColorInfoLine(collection, colorName, rgb, texture) {
                //console.log(collection+" "+colorName+" "+rgb);
                $('#csCollection').empty();
                $('#csCollection').append(collection);
                $('#csColorname').empty();
                $('#csColorname').append(colorName);
                $('#csColorField').attr('title', colorName);


                if (texture != null && texture != "") {
                    $('#csColorField').attr('style', 'background-image:url(' + texture + ');');
                } else {
                    $('#csColorField').attr('style', 'background-color:' + rgb + ';');
                }

                refreshColorPreviewAreas(rgb, texture);

                if (colorName != '' || collection != '') {
                    $('#csColorinfoInner').fadeIn('slow');
                } else {
                    $('#csColorinfoInner').hide();
                }
            }

            /*
             * setFSColorId
             * set colorid FSSUCHE
             * @params
             * fmixcolorid – unique colorid
             */
            function setFSColorId(fmixcolorid) {
                if ($('#bxordercolorid').length) {
                    $('#bxordercolorid').val(fmixcolorid);
                } else {
                    //if(console){console.log("bxordercolorid field missing");}
                }
            }
            /*
             * setFSColorName
             * set color name FSSUCHE
             * @params
             * colorname – string
             */
            function setFSColorName(colorname) {
                if ($('#bxordercolorname').length) {
                    $('#bxordercolorname').val(colorname);
                } else {
                    //if(console){console.log("bxordercolorid field missing");}
                }
            }
            /*
             * setFSColorCollection
             * set collection name
             * @params
             * collection – string, collection name
             */
            function setFSColorCollection(collection) {
                if ($('#bxordercolorcollection').length) {
                    $('#bxordercolorcollection').val(collection);
                } else {
                    //if(console){console.log("collection string missing");}
                }
            }


            /*
             * setMinSize
             * set additional minsize value, ColorToSizes does not match all fmix articles
             * @params
             * minsize – minsize val
             */
            function setMinSize(minSize) {
                curMinSize = minSize;
            }

            /*
             * deleteAllSizeOptions
             * delete size radio buttons for fmix
             * @params
             * id – id of type container like bxsizelistfmix, shouldnt be any other
             */
            function deleteAllSizeOptions(id) {
                $('#' + id).each(function(index, value) {
                    $(this).find("label").remove();
                });
                $('#bxsizelistfmixlbl').hide();

            }
            /*
             * disableAllSizeOptions
             * disable size radio buttons
             * @params
             * id – id of type container like bxsizelistNORM
             */
            function disableAllSizeOptions(id) {
                $('#' + id).each(function(index, value) {
                    $(this).find("input").attr('disabled', 'disabled');
                    $(this).find("input").removeAttr('checked');
                    $(this).find("label").addClass('labeldisabled');
                });
            }


            /*
             * enableSizeOption
             * enable radio button for size selection + preselection
             * @params
             * id - id prefix
             * preselectedSize - size val
             */
            function enableSizeOption(id, preselectedSize) {
                $('#' + id + 'l').each(function(index, value) {
                    $(this).find("input").removeAttr('disabled');
                    $(this).removeClass('labeldisabled');
                    //preselect
                    if ($(this).find("input").hasClass("bxdefaultsize")) {
                        //if( $(this ).find("input").val()==preselectedSize && preselectedSize!="") {
                        $(this).find("input").attr('checked', 'checked');
                    }
                });
            }

            /*
             * disableOrderAndPriceButton
             * disable price check and order button
             */
            function disableOrderAndPriceButton() {
                disablePriceCheck();
                disableOrder();
            }

            /*
             * disablePriceCheck
             * disable price check button
             */
            function disablePriceCheck() {
                $('#bxorderopricebtn').attr('disabled', 'disabled');
                $('#bxorderopricebtn').attr('data-original-title', bxOrderFormLang["llpricedisabledhint"]);
                $('#bxorderopricebtn').attr('data-toggle', 'tooltip');
                $('#bxorderopricebtn').tooltip('enable');
            }

            /*
             * disableOrder
             * disable order button
             */
            function disableOrder() {
                $('#bxorderbasketbtn').attr('disabled', 'disabled');
                $('#bxorderbasketbtn').attr('data-original-title', bxOrderFormLang[
                    "llorderbtndisabledhint"]);
                $('#bxorderbasketbtn').attr('data-toggle', 'tooltip');
                $('#bxorderbasketbtn').tooltip('enable');
            }

            /*
             * enablePriceCheck
             * enable price check button
             */
            function enablePriceCheck() {
                $('#bxorderopricebtn').removeAttr('disabled');
                $('#bxorderopricebtn').attr('data-original-title', bxOrderFormLang["llshowprice"]);
                $('#bxorderopricebtn').tooltip('disable');
            }

            /*
             * enableOrder
             * enable order button
             */
            function enableOrder() {
                $('#bxorderbasketbtn').removeAttr('disabled');
                $('#bxorderbasketbtn').attr('data-toggle', '');
                $('#bxorderbasketbtn').attr('data-original-title', '');
                $('#bxorderbasketbtn').tooltip('disable');
            }

            /*
             * enableSizeOptions
             * enable sizes, reselect already selected size option if possible
             */
            function enableSizeOptions(typName, colorId) {
                //console.log("enableSizeOptions"+typName+" "+colorId);
                selectedOrderSize = $('#bxordersize').val();
                if (selectedOrderSize == "") {
                    selectedOrderSize = preselectArticle[typName]["size"]; //defaultArticleGroesse
                }

                //check vs curMinSize
                var minSizeBlockFlag = false;

                //console.log(typName+" colorid"+colorId);
                //console.log(artSizes[typName]);

                if (typName == "FMIX") {
                    var htmlsizeoptions = "";
                    colorIndex = null;
   

                    var validsizes = null;
                    validsizes = artSizes[typName][colorId];

                    //console.log(validsizes);
                    //console.log("curMinSize "+curMinSize);
                    if (validsizes != null) {
                        $.each(validsizes, function(index, value) {
                            //console.log(curMinSize+" "+allSizes["FMIX"][value].quantity.replace(",",".")+" "+allSizes["FMIX"][value].size);
                            if ((curMinSize.replace(",", ".") * 1) <= (value.quantity.replace(",",
                                    ".") * 1)) {
                                //console.log(value.quantity);
                                htmlsizeoptions +=
                                    "<label class=\"radio-inline\"><input name=\"inlineRadioOptionen\" id=\"bxSizeOption" +
                                    typName + value.size +
                                    "\" type=\"radio\" onclick=\"changeActiveSize('" + value.size +
                                    "','" + index + "');\" /> " + value.quantity + " " + value
                                    .unit + "</label>";
                            }

                        });
                        deleteInpageNotice();
                        if (typName == "FMIX") {
                            $('#bxsizelistfmixlbl').show();
                        }
                        $('#bxsizelist' + typName).html(htmlsizeoptions);
                    } else {
                        //Fallback no size found
                        setInpageNotice(bxOrderFormLang["llordervariantfailure"]);
                    }

                } else {
                    for (var sizeId in ColorToSizes[typName][colorId]) {
                        enableSizeOption('bxSizeOption' + typName + sizeId, selectedOrderSize);
                    }
                }

                //check the first one if default value does not fit
                if ($("#bxsizelist" + curArticleTyp).find('input:checked').length < 1) {
                    $("#bxsizelist" + curArticleTyp).find('input:enabled:first').attr("checked", "checked");
                }
                $("#bxsizelist" + curArticleTyp).find('input:enabled:checked').trigger("click");
            }

            /*
             * setInpageNotice
             * sets a text hint within the page
             * @params
             * note - some text
             */
            function setInpageNotice(note) {
                $('#bxorderfeedback').html('<p class="small error">' + note + '</p>');
                $('#bxorderfeedback').fadeIn("slow").fadeOut("slow").fadeIn("slow");
            }
            /*
             * deleteInpageNotice
             * clear text note within page
             */
            function deleteInpageNotice() {
                $('#bxorderfeedback').html('');
            }

            /*
             * refreshColorPreviewAreasByElem
             * find color or img of an element and trigger recoloring of preview areas
             * @params
             * elem - a color tile link
             */
            function refreshColorPreviewAreasByElem(elem) {
                colorfield = $(elem).find("span");
                bgcolor = colorfield.css('background-color');
                bgimg = colorfield.css('background-image');
                refreshColorPreviewAreas(bgcolor, bgimg);
            }
            /*
             * refreshColorPreviewAreas
             * refresh color areas of the page with a background color or image
             * @params
             * bgcolor - a background color
             * bgimg - background image, full path
             */
            function refreshColorPreviewAreas(bgcolor, bgimg) {

                if (bgimg != undefined && bgimg != "none" && bgimg.length > 0) {
                    $('.bxcolorpreviewarea').css('background-image', "url(" + bgimg + ")");
                    $('.bxcolorpreviewarea').css('background-color', 'transparent');
                } else {
                    $('.bxcolorpreviewarea').css('background-color', bgcolor);
                    $('.bxcolorpreviewarea').css('background-image', 'none');
                }
            }

            /*
             * refreshCalcCons
             * refresh consumption calculator values
             */
            function refreshCalcCons() {
                $('#calcconsreswrap').hide();
                $('#calcconsresloader').show();
                var terror = true;
                try {
                    var qm = $('#calcconsqm').val();
                    if (qm == null || qm == "") {
                        qm == 1;
                    } else {
                        qm = qm.replace(",", ".");

                    }
                    var mp = null;
                    if ($('#calcconsnc').length) {
                        mp = $('#calcconsnc').val();
                    }
                    if (mp == null || mp == "" || mp <= 0) {
                        mp = 1;
                    }
                    var areasize = (mp * 1) * (qm * 1);
                    if (curArticleTyp != "FMIX") {

                        var articleid = null;
                        //find farbtonId within allArticles data structure
                        var tordersize = $('#bxordersize').val().toString();
                        var tordercol = $('#bxordercolor').val().toString();
                        //find artnr
                        $.each(allArticles[curArticleTyp], function(keyOuter, OuterObj) {
                            $.each(OuterObj, function(ikey, sarticle) {
                                if (sarticle["groesse"] == tordersize && sarticle[
                                        "farbe"] == tordercol) {
                                    //console.log(sarticle);
                                    articleid = sarticle["artnr"];
                                }
                            });
                        });

                        if (articleid != null) {
                            terror = false;
                            processCalcConsData(articleid, areasize);
                        } else {
                            console.log("articleid not found");
                        }


                    } else {
                        //TODO FMIX?

                    }

                    if (terror == true) {
                        clearCalcConsResult();
                        bxSetAndShowModalBox(bxOrderFormLang["llconscalcfailure"]);

                    }
                } catch (e) {
                    console.log(e);
                    //console.log("error refreshCalcCons"+e);
                }

            }

            /*
             * processCalcConsData
             * prepare call for consumption info
             * @params
             * articleId - valid internal articleId
             * areaSize	- area in square meters
             */
            function processCalcConsData(articleId, areaSize) {
                ajdata = {
                    eID: "bxAjaxOnlineShop",
                    type: "calcConsumption",
                    articleId: articleId,
                    areaSize: areaSize
                };
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    scriptCharset: "utf-8",
                    success: function(data, textStatus) {

                        //bxTriggerToast ("Debug","articleId: "+articleId+"<br>areaSize: "+areaSize+"<br>Ajax result, data.msg: "+data.msg+"<br>data.action: "+data.action, "info",true);
                        clearCalcConsResult();
                        if (data.action == "errorMsg") {
                            bxSetAndShowModalBox(data.msg);
                            clearCalcConsResult();

                        } else {
                            processCalcConsResult(data, textStatus);
                        }
                    },
                    error: function(data, textStatus) {
                        clearCalcConsResult();
                    },
                    url: "/index.php",
                    cache: false,
                    async: true,
                    data: ajdata
                });

            }
            /*
             * processCalcConsResult
             * show consumption calc result
             * @params
             * articleId - valid internal articleId
             * areaSize	- area in square meters
             */

            function processCalcConsResult(data, textStatus) {
                if (data.action == "show") {

                    //console.log(allSizes[curArticleTyp]);
                    //console.log($("#bxordercolor").val());

                    var r1 = data.msg.quantity.replace(".", ",");
                    if (r1.indexOf(",") == 0) {
                        r1 = "0" + r1.toString();
                    }
                    $('#calcconsres').html(r1);

                    var q1 = "";
                    if (data.msg.calculationUnit) {
                        //q1 = data.msg.calculationUnit.replace([">","<"], "");
                        q1 = data.msg.calculationUnit;
                    }
                    $('#calcconsunit').html(q1);
                    $('#calcconsreswrap').fadeIn("slow");
                    $('#calcconsresloader').hide();
                    r1 = null;
                } else {
                    clearCalcConsResult()
                }
            }
            /*
             * clearCalcConsResult
             * reset consumption calc result
             * @params
             */
            function clearCalcConsResult() {
                $('#calcconsres').html("");
                $('#calcconsreswrap').hide();
                $('#calcconsresloader').hide();

            }
            /*
             * hideCalcCons
             * hide consumption calc container
             * @params
             */
            function hideCalcCons() {
                clearCalcConsResult()
                $('#calcconscontainer').hide();

            }
            /*
             * hideCalcCons
             * hide consumption calc button (just temp for fmix)
             * @params
             */
            function hideCalcConsBtn() {
                $('#bxordercalccons').attr("disabled", "disabled").hide();
            }
            /*
             * hideCalcCons
             * hide consumption calc button (just temp for fmix)
             * @params
             */
            function showCalcConsBtn() {
                $('#bxordercalccons').removeAttr("disabled").show();
            }
            /*
             * productRefreshSaveFavValue
             * refresh saveFavValue Variable for favorite
             * @params
             */
            function productRefreshSaveFavValue(overwrobj) {
                if (saveFavValue && overwrobj) {
                    if (overwrobj.title != null && overwrobj.title != "") {
                        saveFavValue.title = overwrobj.title;
                    }
                    if (overwrobj.value1 != null && overwrobj.value1 != "") {
                        saveFavValue.value1 = overwrobj.value1;
                    }
                    if (overwrobj.value2 != null && overwrobj.value2 != "") {
                        saveFavValue.value2 = overwrobj.value2;
                    }
                    if (overwrobj.favType != null && overwrobj.favType != "") {
                        saveFavValue.favType = overwrobj.favType;
                    }
                }
                //bxTriggerToast("Debug","Setze Artikel-ID auf: "+saveFavValue.value1,"info");
            }




            var saveFavValue = {
                title: 'Silicon-Fassadenfarbe 918',
                value1: '154926',
                value2: null,
                favType: 'ART',
                parentID: null,
                position: null,
                controller: 'Ajax',
                action: 'create'
            };
            </script>
            <!-- Close Bestellzeile -->
        </div><!-- order-form-wrap end -->
    </div><!-- container end-->


    <script type="text/javascript">
    var curOrderLinePos = "";
    /*
     * repositionOrderLine
     * move orderline to container depending on resolution
     */
    function repositionOrderLine() {

        if ($('#accordion').is(":visible")) {
            if (curOrderLinePos != 2) {
                $('#bx-orderform-wrap').appendTo("#bx-orderform-positionwrap2");
                curOrderLinePos = 2;
                //if(console) {console.log("move mobile");}
            }

        } else {
            if (curOrderLinePos != 1) {
                $('#bx-orderform-wrap').appendTo("#bx-orderform-positionwrap");
                curOrderLinePos = 1;
                //if(console) {console.log("move desktop");}
            }

        }
    }
    $(document).ready(function() {
        //Reposition div in mobile or desktop markup
        $(window).resize(function() {
            repositionOrderLine();
        });
        repositionOrderLine();
    });
    </script>





</div>


<div id="c100632" class="frame frame-default frame-type-shortcut frame-layout-0">
    <div id="c90990" class="frame frame-default frame-type-html frame-layout-0">
        <style>
        .product-protipp,
        .product-proinfo {
            float: left;
        }

        /* remove after 20220118*/
        .produkt_signets img {
            max-width: 135px;
            margin-right: 5px;
        }
        </style>
    </div>
</div>



<!--TYPO3SEARCH_end-->
<!-- Backend Layout: Inhaltsbereich END -->

@endsection