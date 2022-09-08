@extends('layout.front.master')
@section('content')
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="/company/" target="_self" property="item"
                typeof="WebPage"><span property="name">Company<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">About us<span>
                    <meta property="position" content="2">
        </li>
    </ul>
</div>

<div class="flexslider schmal">

    <ul class="slides">

       <li>
<!-- 
       <img src="{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e265d181ea.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_467fd4cf9c.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_1d2f1d0545.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e82eb3e78a.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_56a4fa34d4.jpg')}} 1200w,{{asset('public/assets/fileadmin/redaktion/bilder/unternehmen/ueber-uns/header_ueber-uns_0004_Ebene-1_1600x540px.jpg')}} 1600w"
                sizes="100vw" alt="About us"> -->

                
            <img src="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1200w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w"
                sizes="100vw" alt="Floor">

       </li>


    </ul>
</div>

<div class="subnavigation grey">
    <ul class="container nav navbar-nav sprungmarken_large">
      
        <li class="dropdown"><a href="/company/about-us/" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i>About us</a>
            <ul class="dropdown-menu">

            <li><a href="{{url('company/about-us')}}" title="About us">About us</a></li>
                            <li class="haschildren"><a href="{{url('company/brances')}}" title="Branches">Branches</a>
                                
                            </li>
                            <li><a href="{{url('company/news')}}" title="News">News & Blog</a></li>



<!--             
                <li class="active selected"><a href="/company/about-us/"><span>About us</span></a></li>
                <li><a href="/company/branches/"><span>Branches</span></a></li>
                <li><a href="/company/quality-and-environmental-protection/"><span>Quality and environmental
                            protection</span></a></li>
                <li><a href="/company/career/"><span>Career</span></a></li>
                <li><a href="/company/academy/"><span>Academy</span></a></li>
                <li><a href="/company/news/"><span>News</span></a></li>
                <li><a href="/company/press/"><span>Press</span></a></li>
                <li><a href="/company/blog/"><span>Blog</span></a></li>
                <li><a href="/company/brillux-design-award/"><span>Brillux Design Award</span></a></li> -->
            </ul>
        </li>
    </ul>
</div>


<div class="tx-dce-pi1" style="margin-top:30px">
<div class="container mb20">

<div class="flexslider schmal">

    <ul class="slides">

       <li>

       <img src="{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 1200w,{{asset('public/assets/fileadmin/_processed_/0/6/csm_header_ueber-uns_0004_Ebene-1_1600x540px_e71c31b22c.jpg')}} 1600w"
                sizes="100vw" alt="About us">

       </li>


    </ul>
</div>
</div>

    
<h4 class="container text-left" style="font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 32px;
line-height: 38px;
/* identical to box height */

text-align: justify;

color: #000000; border-bottom:1px solid #000000"><span>History</span></h4>
    </h2>
    <div class="tx-dce-pi1">

        <div class="container mb20">


            <div class="col-md-12 copy row">


                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12 pull-right mb30">

                        <div class="flexslider3 steuerelemente ">
                            <ul class="slides">

                                <li>
                                    <a class="big_picture"
                                        href="{{asset('public/assets/fileadmin/redaktion/bilder/unternehmen/ueber-uns/BX_Fassadenfarbe_01-800px.jpg')}}"
                                        title="" rel="Gruppe50148">


                                        <img src="{{asset('public/assets/images/setting/'.$au->research_development_image)}}"
                                            srcset="{{asset('public/assets/images/setting/'.$au->research_development_image)}} 350w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 283w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 345w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 720w"
                                            sizes="(min-width: 993px) 33vw, (min-width: 768px) 50vw, calc(100vw - 30px)"
                                            alt="12,000 products for every requirement"
                                            title="12,000 products for every requirement">


                                    </a>

                                </li>





                            </ul>
                        </div>


                    </div>


                    <div class="col-md-6 col-sm-6 col-xs-12">
{!! $au->history !!}

                </div>
            </div>
        </div>

    </div>
</div>


<h4 class="container text-left" style="font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 32px;
line-height: 38px;
/* identical to box height */

text-align: justify;

color: #000000; border-bottom:1px solid #000000"><span>Philosophy</span></h4>
<div class="tx-dce-pi1">

    <div class="container mb20">


        <div class="col-md-12 copy row">


            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12 pull-right">

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    {!! $au->philosophy !!}
                    
                    
                    
                        <div class="row">


                        <div class="flexslider3  big steuerelemente ">
                            <ul class="slides">




                                <li>
                                    <a class="big_picture"
                                        href="{{asset('public/assets/fileadmin/redaktion/bilder/unternehmen/ueber-uns/BX_Treppe-Brillux-1110x740px.jpg')}}"
                                        title="" rel="Gruppe50155">


                                        <img src="{{asset('public/assets/images/setting/'.$au->research_development_image)}}"
                                            srcset="{{asset('public/assets/images/setting/'.$au->research_development_image)}} 350w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 283w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 345w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 720w"
                                            sizes="(min-width: 993px) 33vw, (min-width: 768px) 50vw, calc(100vw - 30px)"
                                            alt="Brillux direct – uncompromising quality"
                                            title="Brillux direct – uncompromising quality" style="height:413px">


                                    </a>

                                </li>




                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="tx-dce-pi1">

    
<h4 class="container text-left" style="font-family: 'Roboto';
font-style: normal;
font-weight: 400;
font-size: 32px;
line-height: 38px;
/* identical to box height */

text-align: justify;

color: #000000; border-bottom:1px solid #000000"><span>Reachers & Development</span></h4>
    <div class="tx-dce-pi1">

        <div class="container mb20">


            <div class="col-md-12 copy row">


                <div class="row">


                    <div class="col-md-6 col-sm-6 col-xs-12 ">

                    <div class="flexslider3 steuerelemente ">
                            <ul class="slides">




                                <li>
                                    <a class="big_picture"
                                        href="{{asset('public/assets/fileadmin/redaktion/bilder/unternehmen/ueber-uns/BX_WVZ-Hochregal-11-800px.jpg')}}"
                                        title="" rel="Gruppe50146">


                                        <img src="{{asset('public/assets/images/setting/'.$au->research_development_image)}}"
                                            srcset="{{asset('public/assets/images/setting/'.$au->research_development_image)}} 350w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 283w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 345w,{{asset('public/assets/images/setting/'.$au->research_development_image)}} 720w"
                                            sizes="(min-width: 993px) 33vw, (min-width: 768px) 50vw, calc(100vw - 30px)"
                                            alt="The high bay warehouse at the goods distribution center in Münster"
                                            title="The high bay warehouse at the goods distribution center in Münster">


                                    </a>

                                </li>





                            </ul>
                        </div>


                    </div>



                    <div class="col-md-6 col-sm-6 col-xs-12">

{!! $au->research_development !!}


                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


    @endsection