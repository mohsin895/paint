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
            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-5634' class='active'
                    href="{{url('products',$category->slug)}}" property='item'
                    typeof='WebPage'><span property='name'>{{$category->category_name}}</span></a>
                <meta property='position' content='2'>
            </li>



        </ul>
    </div>


</div>

<div class="flexslider content">


    <ul class="slides">


        <li>





            <img src="{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_e2c94c316e.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_e2c94c316e.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_3caa9ef798.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_9921bb50ab.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_a5d5124228.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_16e4ec54a7.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/7/6/csm_header_produkte-neutral_beton_a701b15768.jpg')}} 1200w,{{asset('public/assets/fileadmin/redaktion/bilder/produkte/header_produkte-neutral_beton.jpg')}} 1600w"
                sizes="100vw" alt="Products">








        </li>


    </ul>
</div>

<!-- Backend Layout: Kopfbereich END -->

<!-- TS: lib.subnavigationwithankernav BEGIN -->
<div class="subnavigation grey">
    <ul class="container nav navbar-nav sprungmarken_large"></ul>
</div>
<!-- TS: lib.subnavigationwithankernav END -->

<!-- Backend Layout: Inhaltsbereich BEGIN -->
<!--TYPO3SEARCH_begin-->


<div id="c39431" class="frame frame-default frame-type-list frame-layout-0">


    <div id="subnavigation-wrap" class="subnavigation subnavigation-product grey">
        <ul class="container nav navbar-nav">

            <li id="bxtoolbarmenuwrap" class="dropdown navbar-right"> <a href="#" class="dropdown-toggle"
                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i
                        class="fa fa-share-square-o"></i></a>
                <ul id="bxtoolbarmenu" class="dropdown-menu">
                    <li id="bxtoolbarprint"><a href="javascript:window.print()"><i class="fa fa-print"></i>
                            Print page</a></li>
                    <li id="bxtoolbarmail"><a
                            href="mailto:?subject=Website recommendation: Enamel%20paints%2C%20varnishes%20and%20woodstains&amp;body=Enamel%20paints%2C%20varnishes%20and%20woodstains%0d%0a%0ahttps://www.brillux.com/products/5634_enamel-paints-varnishes-and-woodstains/"><i
                                class="fa fa-envelope-o"></i> Send by e-mail</a></li>
                    <li role="separator" class="divider"></li>
                    <li><span>Share:</span> <span class="socialmedia"><a target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u=www.brillux.com/products/5634_enamel-paints-varnishes-and-woodstains/"
                                title="Share on facebook"><i class="fa fa-facebook"></i></a><a
                                href="https://twitter.com/home?status=www.brillux.com/products/5634_enamel-paints-varnishes-and-woodstains/"
                                title="Share on twitter"><i class="fa fa-twitter"></i></a>
                            <!--<a href="#"><i class="fa fa-share-alt"></i></a>--><a
                                href="https://plus.google.com/share?url=www.brillux.com/products/5634_enamel-paints-varnishes-and-woodstains/"
                                title="Share on Google+"><i class="fa fa-google-plus"></i></a>
                        </span></li>
                </ul>
            </li>
        </ul>
    </div>



    <div id="productcatalog-wrap">
        <div class=" container text-center lead mb50 mt50">
            <h1 id="productlist_headline">{{$category->category_name}}</h1>
            <p id="freitextoben_text_16642">Whether it be iron, steel, zinc, coil-coating, wood, plastic or old
                coats: substrates are diverse. The Brillux product range offers you perfectly coordinated
                systems for high-quality coatings, even under demanding conditions. Top-class wood protection
                products with woodstains and a topcoat are just as much part of our product range as water-based
                quality products from the Lacryl-PU or Hydro-PU series, the aromatics-free Impredur enamel paint
                or other special products.


            </p>
        </div>
        <h2 class="container text-center lined-heading" id="brillux-produkte"><span>Products</span></h2>

        <div id="content" class="clear-block clearfix">
            <div id="productlist-wrap" class="container mb50">
                @foreach($subcategory as $subcat)
                <div id="productlistelem-10771" class="produkt col-md-3 col-xs-6 col">
                    <div class="ih-item square effect4"><a id="productlistelem-link-10771"
                            href="{{url('products',$subcat->slug)}}"><span class="img"
                                id="productlistelem-imgwrap-10771"><img alt="Impregnations"
                                    src="{{asset('public/assets/produkte/kat1/group_images/en/225px/lp_lacke_impraegnierung2.jpg')}}" /></span><span
                                class="mask1"></span> <span class="mask2"></span><span class="info"
                                id="productlistelem-desc-10771"><span class="vertical-zentriert"><span
                                        class="h3"><?php echo $subcat->subcat_name; ?></span><span class="p"><span class="clearfix red">..more
                                            <i class="fa fa-angle-right"></i></span></span></span></span><span
                                id="productlistelem-headline-10771" class="h2 text-center"><?php echo $subcat->subcat_name; ?></span></a>
                    </div>
                </div>
                @endforeach
                </div>


            <div class="clear-block clearfix"></div>




        </div><!-- content end -->
    </div>
    <!--productcatalog-wrap end -->
    <!-- V2016  -->

</div>


<div id="c39430" class="frame frame-default frame-type-list frame-layout-0"></div>


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

@endsection