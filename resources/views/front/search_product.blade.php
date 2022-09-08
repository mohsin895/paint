@extends('layout.front.master')
@section('content')


<!-- TS: lib.breadcrumbnavigation BEGIN -->
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">Search<span>
                    <meta property="position" content="1">
        </li>
    </ul>
</div>
<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->

<div class="flexslider content">
    <ul id="c46116" class="slides">
        <li>
            
    <img src="{{asset('public/assets/fileadmin/_processed_/0/8/csm_header-farbtonsuche_3_b7b6d28ffa.jpg')}}"
      srcset="{{asset('public/assets/fileadmin/_processed_/0/8/csm_header-farbtonsuche_3_b7b6d28ffa.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/0/8/csm_header-farbtonsuche_3_f3b3cd1cfd.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/0/8/csm_header-farbtonsuche_3_2d277eef62.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/0/8/csm_header-farbtonsuche_3_0202be8b0d.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/0/8/csm_header-farbtonsuche_3_600cc1b85d.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/0/8/csm_header-farbtonsuche_3_05cda5861c.jpg')}} 1200w,{{asset('public/assets/fileadmin/redaktion/bilder/farbtoene-muster/header-farbtonsuche_3.jpg')}} 1600w"
      sizes="100vw" alt="Color shade search">
            </li>
    </ul>
</div>

<!-- Backend Layout: Kopfbereich END -->

<!-- TS: lib.subnavigationwithankernav BEGIN -->
<div class="subnavigation grey">
    <ul class="container nav navbar-nav sprungmarken_large">
     
        <li class="dropdown"><a href="/search/" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i>Search</a>
            <ul class="dropdown-menu">
                <li><a href="/products/"><span>Products</span></a></li>
                <li><a href="/color-shades-samples/"><span>Color shades</span></a></li>
                <li><a href="/applications/"><span>Applications</span></a></li>
                <li><a href="/service/"><span>Service</span></a></li>
                <li><a href="/media-library/"><span>Media library</span></a></li>
                <li><a href="/company/"><span>Company</span></a></li>
            </ul>
        </li>
    </ul>
</div>

<div class="tx-dce-pi1">

    <div class="container mb20" id="c46120">

        <div class="col-md-12 copy mb20 mt20 row">
            <h1>

                Search
            </h1>



            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="mt-20">

                    </div>
                    <div class="mb20 mt20">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="c109334" class="frame frame-default frame-type-list frame-layout-0">
    <div class="container">

        <style type="text/css">
            .pagination-node {
                cursor: pointer;
            }

        </style>

        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <p id='product-pagination-count' class='text-center'></p>
                <p class="text-center hidden" id="product-loading">

                </p>
                <h2>({{count($product_search)}}) Products  found</h2>
                <div id='products-list'>

                
@foreach($product_search as $product)
                    <div class="tx-indexedsearch-res bxpanel3 bxsearchresult">
                        <h4 class="nomargintop">
                         <img
                                    src="{{asset('public/assets/images/product/'.$product->product_image)}}" width="128" height="128"
                                    alt="">

                            <span class="tx-indexedsearch-title-default"><a
                                    href="{{url('products',$product->slug)}}">{{$product->product_name}}</a></span>
                        </h4>

                        <p class="tx-indexedsearch-description"> {{$product->short_description}} </p>
                        <dl class="tx-indexedsearch-info">


                        </dl>



                    </div>

                    @endforeach
                </div>
                <br />

                <nav aria-label="Page navigation" class="text-center" id="product-pagination" style="display:none">
                    <p id="product-pagination-info" style="padding: 0;margin: 0"></p>
                    <ul class="pagination">
                        <li id="product-pagination-first">

                            <a href="#" aria-label="First">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li id="product-pagination-prev">

                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        </li>
                        <li id="product-pagination-next">
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>

                        </li>
                        <li id="product-pagination-last">
                            <a href="#" aria-label="Last">
                                <span aria-hidden="true">&raquo;</span>
                            </a>

                        </li>
                    </ul>
                </nav>

            </div>

            <div class="col-lg-6 col-xs-12">


                <p class="text-center">

                    {{count($application_search)}} elements found


                </p>
                <h2>Texts</h2>



                <div class="tx-indexedsearch-browsebox nomargintop">

                @foreach($application_search as $product)

                    <div class="tx-indexedsearch-res bxpanel3 bxsearchresult">
                        <h4 class="nomargintop">
                            <span class="tx-indexedsearch-icon"><img
                                    src="/fileadmin/templates/indexed_search/Icons/default.png" width="128" height="128"
                                    alt=""></span>

                            <span class="tx-indexedsearch-title-default"><a
                                    href="/applications/interior-design/creative-techniques/metallic-wall-design/velvet-effect-technique-serico-4c14/">Velvet
                                    effect technique Serico 4c14</a></span>
                        </h4>

                        <p class="tx-indexedsearch-description"> ... material on acrylate emulsion base, wet… ..more
                            Creativ Tenero 84 <strong class="tx-indexedsearch-redMarkup">Super</strong>lux ELF 3000
                            Emissions, solvent and plasticizer-free, dull matt, wet… ..more <strong
                                class="tx-indexedsearch-redMarkup">Super</strong>lux ELF 3000 Effect Spatula 1155
                            Venetian shape, 24 x 8/10 cm, ... of 100 %… ..more Microfiber Inking Rollcoater 1221
                            Venetian Spatula, <strong class="tx-indexedsearch-redMarkup">Super</strong>grip 1764
                            Stainless steel. For filigree smoothening and filling with… ..more Venetian Spatula, </p>
                        <dl class="tx-indexedsearch-info">


                        </dl>



                    </div>

                    @endforeach



                </div>


            </div>
        </div>
    </div>





</div>





<!--TYPO3SEARCH_end-->
<!-- Backend Layout: Inhaltsbereich END -->

<!-- /.container -->
<div class="clearfix"></div>



@endsection
