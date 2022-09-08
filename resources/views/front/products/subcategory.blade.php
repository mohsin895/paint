@extends('layout.front.master')
@section('content')
<?php 
$category = App\Models\Category::find($subcategory->category_id);
?>
<div id="c39433" class="frame frame-default frame-type-list frame-layout-0">




    <div class="breadcrumb" id="breadcrumb-wrap">
        <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">

            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-6158' class='inactive'
                    href="{{url('products')}}" property='item' typeof='WebPage'><span
                        property='name'>{{$module->module_name}}</span></a>
                <meta property='position' content='1'>
            </li>
            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-5634' class='inactive'
                    href="{{url('products',$category->slug)}}" property='item' typeof='WebPage'><span
                        property='name'>{{$category->category_name}}</span></a>
                <meta property='position' content='2'>
            </li>
            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-10771' class='active'
                    href="{{url('products',$subcategory->slug)}}" property='item' typeof='WebPage'><span
                        property='name'>Impregnations</span></a>
                <meta property='position' content='3'>
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
                    data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <ul id="bxtoolbarmenu" class="dropdown-menu">
                    <!-- <li id="bxtoolbarprint"><a href="javascript:window.print()"><i class="fa fa-print"></i>
                            Print page</a></li> -->
                    <!-- <li id="bxtoolbarmail"><a
                            href="mailto:?subject=Website recommendation: Impregnations&amp;body=Impregnations%0d%0a%0ahttps://www.brillux.com/products/10771_impregnations/"><i
                                class="fa fa-envelope-o"></i> Send by e-mail</a></li>
                    <li role="separator" class="divider"></li>
                    <li><span>Share:</span> <span class="socialmedia"><a target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u=www.brillux.com/products/10771_impregnations/"
                                title="Share on facebook"><i class="fa fa-facebook"></i></a><a
                                href="https://twitter.com/home?status=www.brillux.com/products/10771_impregnations/"
                                title="Share on twitter"><i class="fa fa-twitter"></i></a>
                          <a
                                href="https://plus.google.com/share?url=www.brillux.com/products/10771_impregnations/"
                                title="Share on Google+"><i class="fa fa-google-plus"></i></a>
                        </span></li> -->
                </ul>
            </li>
        </ul>
    </div>



    <div id="productcatalog-wrap">
        <div class=" container text-center lead mb50 mt50">
            <h1 id="productlist_headline" style="text-align:center">{{$subcategory->subcat_name}}</h1>
        </div>
        <h2 class="container text-center lined-heading" id="brillux-produkte"><span>Products</span></h2>

        <div id="content" class="clear-block clearfix">
            <div id="productlist-wrap" class="container mb50">
                @foreach($product as $row)
                <div id="productlistelem-132437" class="produkt col-md-3 col-xs-6 col">
                    <div class="ih-item square effect4"><a id="productlistelem-link-132437"
                            href="{{url('products',$row->slug)}}"><span
                                id="productlistelem-imgwrap-132437" class="img"><img alt="{{$row->product_name}}"
                                    src="{{asset('public/assets/images/product/'.$row->product_image)}}" style="height:200px;width:200px"/></span><span
                                class="mask1"></span> <span class="mask2"></span><span class="info"
                                id="productlistelem-desc-132437"><span class="vertical-zentriert"><span
                                        class="h3">{{$row->product_name}}</span><span class="p">{{$row->short_description}}
                                        use<span class="clearfix red">..more <i
                                                class="fa fa-angle-right"></i></span></span></span></span><span
                                id="productlistelem-headline-132437" class="h2 text-center">{{$row->product_name}}</span></a></div>
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