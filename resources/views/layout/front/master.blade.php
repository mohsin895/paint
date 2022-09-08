@php
$products = App\Models\Module::where('id',1)->first();
$color = App\Models\Module::where('id',2)->first();
$application = App\Models\Module::where('id',3)->first();
$media = App\Models\Module::where('id',5)->first();
$company = App\Models\Module::where('id',6)->first();
$category= App\Models\Category::where('module_id','1')->get();
$colorcategory= App\Models\Category::where('module_id','2')->get();
$applicationcategory= App\Models\Category::where('module_id','3')->get();
$search_slug ='color-shade-search';



@endphp


<!DOCTYPE html>
<html lxmlns="http://www.w3.org/1999/xhtml" xml:lang="en-EN">

<head>

    <meta charset="utf-8">


    <base href="{{url('/')}}">
    <link rel="shortcut icon" href="{{asset('public/assets/images/setting/'.$gs->favicon)}}" type="">

    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="generator" content="TYPO3 CMS" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index,follow" />
    <meta name="twitter:card" content="summary" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    


    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/front/css/style.css')}}" media="all " />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/front/css/color.css')}}" media="all " />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/front/css/index.css')}}" media="all " />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    

    <script src="{{ asset('public/assets/front/css/style.js')}}" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:700,400" media="all">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700,300"
        media="all">
@yield('css')


    <title>{{$gs->site_title}}</title>

    <style>
        .badge:after{
content:attr(value);
font-size:12px;
background: red;
border-radius:50%;
padding:3px;
position:relative;
left:-8px;
top:-10px;
opacity:0.9;
}
        </style>



</head>

<body class="loading">
<?php
use App\Models\Cart;
$cartCount = Cart::cartCount();

 ?>

<!-- 
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNS4789" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> -->


    <a href="#top" class="backtotop" title="Scroll to top"><span><i class="fa fa-angle-up fa-5x"></i><br>Scroll to
            top</span> </a>
    <div id="body" class="row-offcanvas row-offcanvas-right">
        <div class="overlay"></div>

        <div></div>

        <nav class="container navbar navbar-default navbar-fixed-top hidden-print">
            <div id="logo"><a href="{{url('/')}}" class="navbar-brand"><img
                        src="{{asset('public/assets/images/setting/'.$gs->site_logo)}}"
                        alt="{{$gs->website_name}} ..more than paint"></a></div>

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Hide/Show Navigation</span>

                </button>
            </div>




            <div class="navbar-form navbar-right">
                <div class="overlay"></div>
                
                <ul class="nav navbar-nav">
                <li id='checklink' class="dropdown"> <a href="{{route('cart')}}" class="dropdown-toggle" id="navbar-checklink"><i class="fa badge" style="font-size:24px" value="{{$cartCount}}">&#xf07a;</i></a></li>
                    @if(empty(Auth::check()))
                    <li id='checklink' class="dropdown"><a href="{{route('user.login')}}" class="dropdown-toggle" id="navbar-checklink">Login</a></li>
                    @else
                    <li id='checklink' class="dropdown"><a href="{{route('user.logout')}}" class="dropdown-toggle" id="navbar-checklink">Logout</a></li>
                @endif
                </ul>
            </div>

            <form action="{{route('front.search')}}" method="post" id="formsearch" class="suche">
                @csrf
                <input name="search"
                    id="search" autocomplete="off" type="text" placeholder="Search" value="{{request()->input('search')}}" class="form-control header">
                    <button
                    id="navbar-btnsearch" type="submit" class="btn header"> 
                    <i class="fa fa-search responsive-search"></i> 
                </button>

            </form>


            <div id="sidebar" class="sidebar-offcanvas">
                <div id="navbar" class="navbar-collapse collapse">


                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="#" id="mainnavigation-productlink" class="dropdown-toggle"
                                data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">{{$products->module_name}}</a>


                            <ul id="productmenu-wrap" class="wide-produkte dropdown-menu">
                                @foreach($category as $cat)
                                <li id="productmenu-listitemlvl2-0"
                                    class="col-md-3 col-xs-3 bxmenuitem bxmenuitem{{$cat->id}}  bxmenuitemc15"><a
                                        id="productmenu-linklvl2-0" href="{{url('products',$cat->slug)}}"
                                        title="Enamel paints, varnishes and woodstains">
                                        <span>{{$cat->category_name}}</span>
                                    </a>
                                    @php
                                    $subcategory
                                    =App\Models\Subcategory::where('category_id',$cat->id)->get()->toArray();

                                    $categoryChank = array_chunk($subcategory ,2);
                                    @endphp
                                    <ul class="menu col-md-offset-12 col-xs-offset-12 submenu1">
                                        @foreach( $categoryChank as $key => $value)
                                        <li class="col-md-6 col-xs-6">
                                            <ul>
                                                @foreach($value as $subcat)
                                                <li id="productmenu-listitem-1" class="bxsubmenuitem bxsubmenuitemno0">
                                                    <a id="productmenu-link-1"
                                                        href="{{url('products',$subcat['slug'])}}"
                                                        title="Impregnations">
                                                        <span>{{$subcat['subcat_name']}}</span>
                                                    </a>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                        @endforeach

                                    </ul>
                                </li>
                                @endforeach

                        </li>
                    </ul>
                    </li>
                    <li class="dropdown simple"><a id="mainnavigation-link-{register:count_HMENU_MENUOBJ}"
                            href="{field:slug}/" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">{{$color->module_name}}</a>
                        <ul class="dropdown-menu">
                            <!-- @foreach($colorcategory as $color) -->
                            <!-- <li><a href="{{url('color-shades',$color['slug'])}}"
                                    title="{{$color->category_name}}">{{$color->category_name}}</a></li>
                            @endforeach -->

                            
                            <li><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>
                            <li><a href="{{url('color-shades-seacrh/color-shade-search')}}">
                            Search</a></li>
                    
                        </ul>
                    </li>
                    <li class="dropdown"><a id="mainnavigation-link-{register:count_HMENU_MENUOBJ}" href="{field:slug}/"
                            class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">{{$application->module_name}}</a>
                        <ul id="mainnavigation" class="wide-anwendungen dropdown-menu">
                            <li class="col-md-10 col-xs-12">
                                <ul class="anwendungen">
                                    <li class="col-md-12 col-xs-12">
                                        <ul>
                                            @foreach($applicationcategory as $row)
                                            <li class="col-md-3 col-xs-3"><a href="{{url('applications/interior-design',$row['slug'])}}" title="{{$row->cateory_name}}"><img
                                                        src="{{asset('public/assets/images/category/'.$row->category_image)}}"
                                                        srcset="{{asset('public/assets/images/category/'.$row->category_image)}} 206w,{{asset('public/assets/images/category/'.$row->category_image)}} 75w,{{asset('public/assets/images/category/'.$row->category_image)}} 150w,{{asset('public/assets/images/category/'.$row->category_image)}},{{asset('public/assets/images/category/'.$row->category_image)}} 206w,"
                                                        sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                        alt="{{$row->category_name}}" title="{{$row->category_name}}"><span>{{$row->category_name}}</span></a></li>
                                                        @endforeach
                                      </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown simple"><a id="mainnavigation-link-{register:count_HMENU_MENUOBJ}"
                            href="{field:slug}/" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">{{$media->module_name}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('media/library/image')}}" title="Documents and videos"> Image Gallery</a></li>
                                    <li><a href="{{url('media/library/video')}}" title="Documents and videos">Video Gallery</a></li>
                        </ul>
                    </li>
                    <li class="dropdown simple"><a id="mainnavigation-link-{register:count_HMENU_MENUOBJ}"
                            href="{field:slug}/" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">{{$company->module_name}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('company/about-us')}}" title="About us">About us</a></li>
                            <li class="haschildren"><a href="{{url('company/brances')}}" title="Branches">Branches</a>
                             
                            </li>
                            <li><a href="{{url('company/news')}}" title="News">News & Blog</a></li>
                        </ul>
                    </li>
                    </ul>
                    <!-- TS: lib.mainnavigation END -->

                </div>
            </div>

            <!--/.nav-collapse -->
        </nav>



        @yield('content')

        <!--TYPO3SEARCH_end-->
        <!-- Backend Layout: Inhaltsbereich END -->

        <!-- /.container -->
        <div class="clearfix"></div>
        <!-- TS: lib.footer BEGIN -->

        <footer class="footer mt50 hidden-print">
            <div class="container">
                <div class="col-xs-12 col-md-4 col-lg-4 col-sm-12" style="text-align:center"> <span class="h2">Social Media</span> <span></span>
                   
                    <div class="clearfix">&nbsp;</div>
                   
                    <div class="socialmedia mt20"> <a title="{{$gs->site_title}} op Facebook" target="_blank" href="{{$gs->fb}}"><img
                        src="{{asset('public/assets/images/socialMedia/fb.png')}}"
                        alt="{{$gs->website_name}} ..more than paint"></a> 
                        <a title="Twitter" target="_blank" href="{{$gs->twiter}}"><img
                        src="{{asset('public/assets/images/socialMedia/twiter.png')}}"></a>
                        <a title="Instagram" target="_blank" href="{{$gs->insta}}"><img
                        src="{{asset('public/assets/images/socialMedia/instagram.png')}}"></a>
                        <a title="YouTube" target="_blank" href="{{$gs->youtube}}"><img
                        src="{{asset('public/assets/images/socialMedia/youtube.png')}}"></a>
                        <!-- <a title="Xing" target="_blank" href="{{$gs->mobile}}"><i
                                class="fa fa-xing"></i></a> -->
                        <a title="LinkedIn" target="_blank" href="{{$gs->lin}}"><img
                        src="{{asset('public/assets/images/socialMedia/linkdi.png')}}"></a>
                    </div>
                </div>
                <div class="col-xs-12  col-sm-12 col-md-4 col-lg-4" style="text-align:center;list-style:none"><span class="h2">Qick Links</span>
                <li ><a href="{{url('color-shades/color-shades')}}" title="Legal notice">Color Shade</a></li>
                <li><a href="{{url('company/news')}}" title="Legal notice">News & Blog</a></li>
                <li><a href="{{url('company/brances')}}" title="Legal notice">Branches</a></li>
                
                <li><a href="{{url('setting/legal-notice')}}" title="Legal notice">Legal notice</a></li>
                <li><a href="{{url('setting/privacy-policy')}}" title="Privacy Policy">Privacy Policy</a></li>
                </div>
                <div class="col-xs-12  col-sm-12 col-md-4 col-lg-4" style="text-align:center"> <span class="h2" >Contact</span>
                    <p class="big">
                        <a href="tel:{{$gs->mobile}}"><i class="fa fa-phone"></i> {{$gs->mobile}}</a><br>
                        <a href="mailto:{{$gs->email}}"><i class="fa fa-envelope-square"></i> {{$gs->email}}</a>
                    </p>

                    &nbsp;&nbsp;


                    <p  style="font-size:20px;font-weight:600">Corporate Office:</p>{{$gs->company_address}}
&nbsp;&nbsp;

<p  style="font-size:20px;font-weight:600">Factory:</p> {{$gs->factory_address}}
                </div>
                <!-- <div class="col-xs-3"><span class="h2">Locations</span>
                    <form action="/index.php" method="GET" name="haendler" id="bxfooternlsearchform"><input
                            type="hidden" name="id" id="id" value="7946" /> <input type="hidden" value="suche"
                            name="aktion" />
                        <input type="hidden" value="" maxlength="5" name="plz" id="bxfooternlsearchplz" />
                        <input type="hidden" value="" maxlength="40" name="str" id="bxfooternlsearchstreet" />
                        <input type="hidden" value="" maxlength="5" name="hnr" id="bxfooternlsearchhno" />
                        <input type="hidden" value="" maxlength="255" name="ort" id="bxfooternlsearchlocation" />
                        <input type="hidden" value="COM" maxlength="5" size="3" name="land"
                            id="bxfooternlsearchcountry" />
                    </form>
                    <input id="footer-branchessearchterm" class='bxfooternlsearchinput form-control' type="text"
                        placeholder="">
                    <button style="width:auto" id="footer-branchessearchbtn"
                        class='footer-branchessearchbtn btn btn-default'><i class="fa fa-angle-right"></i> Find
                        locations</button>
                </div> -->

            </div>

            <div class="footer-imprint">
                <div class="container">
                    <div class="row  text-center"> ©&nbsp;<script>
                        document.write(new Date().getFullYear())
                        </script>&nbsp;&nbsp; All Rights Reserved{{$gs->website_name}}</div>
                    
                </div>
            </div>


        </footer>
    </div>



    <script src="{{asset('public/assets/front/js/color.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/assets/front/js/index.js')}}" type="text/javascript"></script>
    @yield('js')



</body>

</html>