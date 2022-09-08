@php
$products = App\Models\Module::where('id',1)->first();
$color = App\Models\Module::where('id',2)->first();
$application = App\Models\Module::where('id',3)->first();
$service = App\Models\Module::where('id',4)->first();
$media = App\Models\Module::where('id',5)->first();
$company = App\Models\Module::where('id',6)->first();
$category= App\Models\Category::where('module_id','1')->get();
$colorcategory= App\Models\Category::where('module_id','2')->get();



@endphp
<nav class="container navbar navbar-default navbar-fixed-top">
    <div id="logo"><a href="{{url('/')}}" class="navbar-brand"><img
                src="{{asset('public/assets/images/setting/'.$gs->site_logo)}}" alt="Brillux ..more than paint"></a>
    </div>

    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Hide/Show Navigation</span>

        </button>
    </div>




    <div class="navbar-form navbar-right">
        <div class="overlay"></div>
        <ul class="nav navbar-nav">
            <li id='checklink' class="dropdown"><a href="#" class="dropdown-toggle" id="navbar-checklink"><i
                        class="fa fa-check"></i> <span class="hidden-s">Efficiency
                        check</span></a></li>
        </ul>
    </div>

    <form onsubmit="bxAddFieldForProductSearch('search','swordforproductsearch1')" action="/search/" method="post"
        name="formsearch" id="formsearch" class="suche"><input name="tx_indexedsearch_pi2[search][sword]" id="search"
            autocomplete="off" type="text" placeholder="Search" class="form-control header"><button
            id="navbar-btnsearch" type="submit" class="btn header">
            <i class="fa fa-search" style="margin-left: 90%;margin-top: 8px"></i> </button>


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
                                            <a id="productmenu-link-1" href="{{url('products',$subcat['slug'])}}"
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
            <li class="dropdown simple"><a id="mainnavigation-link-{register:count_HMENU_MENUOBJ}" href="{field:slug}/"
                    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">{{$color->module_name}}</a>
                <ul class="dropdown-menu">
                    @foreach($colorcategory as $color)
                    <li><a href="{{url('color-shades',$color['slug'])}}"
                            title="{{$color->category_name}}">{{$color->category_name}}</a></li>
                    @endforeach
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
                                    <li class="col-md-3 col-xs-3"><a href="/applications/facade-protection/"
                                            title="Facade protection"><img
                                                src="/fileadmin/_processed_/3/f/csm_teaser_BX_Ellerstadt-AmHohenweg-EX-42_263x135px_cda56dbf3f.jpg"
                                                srcset="/fileadmin/_processed_/3/f/csm_teaser_BX_Ellerstadt-AmHohenweg-EX-42_263x135px_cda56dbf3f.jpg 206w,/fileadmin/_processed_/3/f/csm_teaser_BX_Ellerstadt-AmHohenweg-EX-42_263x135px_c32289a5b4.jpg 75w,,/fileadmin/_processed_/3/f/csm_teaser_BX_Ellerstadt-AmHohenweg-EX-42_263x135px_05b7263abc.jpg 150w,,/fileadmin/_processed_/3/f/csm_teaser_BX_Ellerstadt-AmHohenweg-EX-42_263x135px_20cd7b29a0.jpg 165w,,/fileadmin/_processed_/3/f/csm_teaser_BX_Ellerstadt-AmHohenweg-EX-42_263x135px_ecd896e71f.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Facade protection" title="Facade protection"><span>Facade
                                                protection</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/interior-design/"
                                            title="Interior design"><img
                                                src="/fileadmin/_processed_/b/6/csm_BX_Senden-GrothuesPotthoff-56_263x135px_b002bb0a59.jpg"
                                                srcset="/fileadmin/_processed_/b/6/csm_BX_Senden-GrothuesPotthoff-56_263x135px_b002bb0a59.jpg 206w,/fileadmin/_processed_/b/6/csm_BX_Senden-GrothuesPotthoff-56_263x135px_9d7face00a.jpg 75w,,/fileadmin/_processed_/b/6/csm_BX_Senden-GrothuesPotthoff-56_263x135px_2064010ff2.jpg 150w,,/fileadmin/_processed_/b/6/csm_BX_Senden-GrothuesPotthoff-56_263x135px_b5c9ff670c.jpg 165w,,/fileadmin/_processed_/b/6/csm_BX_Senden-GrothuesPotthoff-56_263x135px_414dce40a3.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Interior design" title="Interior design"><span>Interior
                                                design</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/high-quality-paints/"
                                            title="High-quality paints"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/hochwertige-lacke/teaser_BX_Lack_1-047124-206px.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/hochwertige-lacke/teaser_BX_Lack_1-047124-206px.jpg 206w,/fileadmin/_processed_/7/4/csm_teaser_BX_Lack_1-047124-206px_424b253f28.jpg 75w,,/fileadmin/_processed_/7/4/csm_teaser_BX_Lack_1-047124-206px_6507de5aaa.jpg 150w,,/fileadmin/_processed_/7/4/csm_teaser_BX_Lack_1-047124-206px_12a1bc5b39.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/hochwertige-lacke/teaser_BX_Lack_1-047124-206px.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="High-quality paints" title="High-quality paints"><span>High-quality
                                                paints</span></a>
                                    </li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/protecting-wooden-components/"
                                            title="Protecting wooden components"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/holzschutz/teaser_FO_3670455-Baum-Herz_X_206px.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/holzschutz/teaser_FO_3670455-Baum-Herz_X_206px.jpg 206w,/fileadmin/_processed_/a/f/csm_teaser_FO_3670455-Baum-Herz_X_206px_6988ffd5ab.jpg 75w,,/fileadmin/_processed_/a/f/csm_teaser_FO_3670455-Baum-Herz_X_206px_12513b2a8f.jpg 150w,,/fileadmin/_processed_/a/f/csm_teaser_FO_3670455-Baum-Herz_X_206px_e22f1394ab.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/holzschutz/teaser_FO_3670455-Baum-Herz_X_206px.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Protecting wooden components"
                                                title="Protecting wooden components"><span>Protecting wooden
                                                components</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/smooth-surfaces/"
                                            title="Smooth surfaces"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/spachtelmassen/BX_Hamburg-Armgartenstr-04_206x105.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/spachtelmassen/BX_Hamburg-Armgartenstr-04_206x105.jpg 206w,/fileadmin/_processed_/f/d/csm_BX_Hamburg-Armgartenstr-04_206x105_343cb0a3be.jpg 75w,,/fileadmin/_processed_/f/d/csm_BX_Hamburg-Armgartenstr-04_206x105_0da14d7f99.jpg 150w,,/fileadmin/_processed_/f/d/csm_BX_Hamburg-Armgartenstr-04_206x105_1409a32964.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/spachtelmassen/BX_Hamburg-Armgartenstr-04_206x105.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Smooth surfaces" title="Smooth surfaces"><span>Smooth
                                                surfaces</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/prime-coats/"
                                            title="Prime coats"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/grundierungen/teaser_grundierungen_206x105.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/grundierungen/teaser_grundierungen_206x105.jpg 206w,/fileadmin/_processed_/7/7/csm_teaser_grundierungen_206x105_cfed1c55fc.jpg 75w,,/fileadmin/_processed_/7/7/csm_teaser_grundierungen_206x105_3ab8261c98.jpg 150w,,/fileadmin/_processed_/7/7/csm_teaser_grundierungen_206x105_397084ba49.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/grundierungen/teaser_grundierungen_206x105.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Prime coats" title="Prime coats"><span>Prime
                                                coats</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/paint-mixing-technology/"
                                            title="Paint mixing technology"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/farbmischtechnologie/teaser_BX_Pigmente-4_206px.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/farbmischtechnologie/teaser_BX_Pigmente-4_206px.jpg 206w,/fileadmin/_processed_/5/9/csm_teaser_BX_Pigmente-4_206px_36e2558f82.jpg 75w,,/fileadmin/_processed_/5/9/csm_teaser_BX_Pigmente-4_206px_a58666f08d.jpg 150w,,/fileadmin/_processed_/5/9/csm_teaser_BX_Pigmente-4_206px_bb06fb84a4.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/farbmischtechnologie/teaser_BX_Pigmente-4_206px.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Paint mixing technology"
                                                title="Paint mixing technology"><span>Paint mixing
                                                technology</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/insulate-correctly/"
                                            title="Insulate correctly"><img
                                                src="/fileadmin/_processed_/a/f/csm_1_BX_WebsiteHeader_1600x540_DraussenImDezember_02_eng_260x105_fa17bb880d.jpg"
                                                srcset="/fileadmin/_processed_/a/f/csm_1_BX_WebsiteHeader_1600x540_DraussenImDezember_02_eng_260x105_fa17bb880d.jpg 206w,/fileadmin/_processed_/a/f/csm_1_BX_WebsiteHeader_1600x540_DraussenImDezember_02_eng_260x105_e77e54b4d6.jpg 75w,,/fileadmin/_processed_/a/f/csm_1_BX_WebsiteHeader_1600x540_DraussenImDezember_02_eng_260x105_454e0d10cc.jpg 150w,,/fileadmin/_processed_/a/f/csm_1_BX_WebsiteHeader_1600x540_DraussenImDezember_02_eng_260x105_fe644d4726.jpg 165w,,/fileadmin/_processed_/a/f/csm_1_BX_WebsiteHeader_1600x540_DraussenImDezember_02_eng_260x105_87a8f2443d.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Insulate correctly" title="Insulate correctly"><span>Insulate
                                                correctly</span></a>
                                    </li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/tool-quality/"
                                            title="Tool quality"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/werkzeuge/teaser_BX_Abstreifgitter-Farbwalze-2-206px.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/werkzeuge/teaser_BX_Abstreifgitter-Farbwalze-2-206px.jpg 206w,/fileadmin/_processed_/7/3/csm_teaser_BX_Abstreifgitter-Farbwalze-2-206px_f070eef994.jpg 75w,,/fileadmin/_processed_/7/3/csm_teaser_BX_Abstreifgitter-Farbwalze-2-206px_521cd3745f.jpg 150w,,/fileadmin/_processed_/7/3/csm_teaser_BX_Abstreifgitter-Farbwalze-2-206px_9191982502.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/werkzeuge/teaser_BX_Abstreifgitter-Farbwalze-2-206px.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Tool quality" title="Tool quality"><span>Tool
                                                quality</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/floor-coatings/"
                                            title="Floor coatings"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/bodenbeschichtungen/teaser_BX_2K-Mineralico-SL470-Essecke-4_v2_206px.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/bodenbeschichtungen/teaser_BX_2K-Mineralico-SL470-Essecke-4_v2_206px.jpg 206w,/fileadmin/_processed_/4/9/csm_teaser_BX_2K-Mineralico-SL470-Essecke-4_v2_206px_fd575a598d.jpg 75w,,/fileadmin/_processed_/4/9/csm_teaser_BX_2K-Mineralico-SL470-Essecke-4_v2_206px_fd0019a285.jpg 150w,,/fileadmin/_processed_/4/9/csm_teaser_BX_2K-Mineralico-SL470-Essecke-4_v2_206px_6e2f1f547d.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/bodenbeschichtungen/teaser_BX_2K-Mineralico-SL470-Essecke-4_v2_206px.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Floor coatings" title="Floor coatings"><span>Floor
                                                coatings</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/concrete-protection/"
                                            title="Concrete protection"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/fassaden/betonschutz/teaser_BX_Bugalow-weiss-Titelbild-206px.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/fassaden/betonschutz/teaser_BX_Bugalow-weiss-Titelbild-206px.jpg 206w,/fileadmin/_processed_/5/9/csm_teaser_BX_Bugalow-weiss-Titelbild-206px_21a896a3d5.jpg 75w,,/fileadmin/_processed_/5/9/csm_teaser_BX_Bugalow-weiss-Titelbild-206px_50137ed16e.jpg 150w,,/fileadmin/_processed_/5/9/csm_teaser_BX_Bugalow-weiss-Titelbild-206px_6204c37d18.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/fassaden/betonschutz/teaser_BX_Bugalow-weiss-Titelbild-206px.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Concrete protection" title="Concrete protection"><span>Concrete
                                                protection</span></a>
                                    </li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/historic-preservation/"
                                            title="Historic preservation"><img
                                                src="/fileadmin/_processed_/6/9/csm_teaser_MG_9995-413x209px_8ac488af14.jpg"
                                                srcset="/fileadmin/_processed_/6/9/csm_teaser_MG_9995-413x209px_8ac488af14.jpg 206w,/fileadmin/_processed_/6/9/csm_teaser_MG_9995-413x209px_3a54680193.jpg 75w,,/fileadmin/_processed_/6/9/csm_teaser_MG_9995-413x209px_661bfa2d01.jpg 150w,,/fileadmin/_processed_/6/9/csm_teaser_MG_9995-413x209px_a6780096bb.jpg 165w,,/fileadmin/_processed_/6/9/csm_teaser_MG_9995-413x209px_4824c05c89.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Historic preservation" title="Historic preservation"><span>Historic
                                                preservation</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/mold-protection/"
                                            title="Mold protection"><img
                                                src="/fileadmin/user_upload/Schimmelschutz_Start_Teaser_263x135.jpg"
                                                srcset="/fileadmin/user_upload/Schimmelschutz_Start_Teaser_263x135.jpg 206w,/fileadmin/_processed_/8/0/csm_Schimmelschutz_Start_Teaser_263x135_c303c705b8.jpg 75w,,/fileadmin/_processed_/8/0/csm_Schimmelschutz_Start_Teaser_263x135_8f794098ce.jpg 150w,,/fileadmin/_processed_/8/0/csm_Schimmelschutz_Start_Teaser_263x135_daf23107f5.jpg 165w,,/fileadmin/user_upload/Schimmelschutz_Start_Teaser_263x135.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Mold protection" title="Mold protection"><span>Mold
                                                protection</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/health/" title="Health"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/gesundheit/nav_anwendung_gesundheit_02.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/gesundheit/nav_anwendung_gesundheit_02.jpg 206w,/fileadmin/_processed_/1/e/csm_nav_anwendung_gesundheit_02_1fae99fab9.jpg 75w,,/fileadmin/_processed_/1/e/csm_nav_anwendung_gesundheit_02_771d108112.jpg 150w,,/fileadmin/_processed_/1/e/csm_nav_anwendung_gesundheit_02_d84f64f26b.jpg 165w,,/fileadmin/redaktion/bilder/anwendungen/gesundheit/nav_anwendung_gesundheit_02.jpg 206w,"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Health" title="Health"><span>Health</span></a></li>
                                    <li class="col-md-3 col-xs-3"><a href="/applications/painting-ocean-liners/"
                                            title="Painting ocean liners"><img
                                                src="/fileadmin/redaktion/bilder/anwendungen/Seeschifffahrt/AS_237380019-Kreuzfahrtschiff_Teaser.jpg"
                                                srcset="/fileadmin/redaktion/bilder/anwendungen/Seeschifffahrt/AS_237380019-Kreuzfahrtschiff_Teaser.jpg 206w,/fileadmin/_processed_/a/1/csm_AS_237380019-Kreuzfahrtschiff_Teaser_975e110b17.jpg 75w,/fileadmin/_processed_/a/1/csm_AS_237380019-Kreuzfahrtschiff_Teaser_ea4281da43.jpg 150w,/fileadmin/_processed_/a/1/csm_AS_237380019-Kreuzfahrtschiff_Teaser_3fa9dcc350.jpg 165w,/fileadmin/redaktion/bilder/anwendungen/Seeschifffahrt/AS_237380019-Kreuzfahrtschiff_Teaser.jpg 206w"
                                                sizes="(min-width: 993px) 20vw, (max-width: 768px) 25vw, 17vw"
                                                alt="Painting ocean liners" title="Painting ocean liners"><span>Painting
                                                ocean
                                                liners</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="col-md-2 hidden-sm hidden-xs">
                        <ul>


                            <!-- li><a href="#"><span class="h2">News</span>  <span class="red">..mehr <i class="fa fa-angle-right"></i></span></a></li -->
                            <li><a href="/applications/interior-design/interior-paints/"><span class="h2">Interior
                                        paints</span>Interior emulsion paints from Brillux
                                    provide advantages in any situation.&nbsp; <span class="red">..more <i
                                            class="fa fa-angle-right"></i></span></a></li>



                            <!-- li><a href="#"><span class="h2">News</span>  <span class="red">..mehr <i class="fa fa-angle-right"></i></span></a></li -->
                            <li><a href="/applications/interior-design/creative-techniques/"><span class="h2">Creative
                                        techniques</span>Formerly costly and laborious, now
                                    efficient and fashionable: creative wall design. <span class="red">..more <i
                                            class="fa fa-angle-right"></i></span></a></li>



                            <!-- li><a href="#"><span class="h2">News</span>  <span class="red">..mehr <i class="fa fa-angle-right"></i></span></a></li -->
                            <li><a href="/applications/floor-coatings/mineral-plaster-floor/"><span class="h2">Mineral
                                        plaster floor</span>Puristic floor surfaces are in
                                    demand – in both the commercial outfitting and the private... <span
                                        class="red">..more <i class="fa fa-angle-right"></i></span></a></li>


                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown simple"><a id="mainnavigation-link-{register:count_HMENU_MENUOBJ}" href="{field:slug}/"
                    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">{{$service->module_name}}</a>
                <ul class="dropdown-menu">
                    <li class="haschildren"><a href="/service/events/" title="Events">Events</a>
                        <ul class="menu menu2 col-md-offset-12 col-xs-offset-12">
                            <li><a href="/service/events/architects-forum/" title="Architect's Forum"
                                    id="mainnavigation-link-4">Architect's Forum</a></li>
                            <li><a href="/service/events/afternoon-architecture/" title="Afternoon Architecture"
                                    id="mainnavigation-link-5">Afternoon Architecture</a></li>
                        </ul>
                    </li>
                    <li class="haschildren"><a href="/service/marketing-support/" title="Marketing support">Marketing
                            support</a>
                        <ul class="menu menu2 col-md-offset-12 col-xs-offset-12">
                            <li><a href="/service/marketing-support/website-content/" title="Website content"
                                    id="mainnavigation-link-7">Website content</a></li>
                            <li><a href="/service/marketing-support/outdoor-advertising/" title="Outdoor advertising"
                                    id="mainnavigation-link-8">Outdoor
                                    advertising</a></li>
                        </ul>
                    </li>
                    <li class="haschildren"><a href="/service/color-design/" title="Color design">Color
                            design</a>
                        <ul class="menu menu2 col-md-offset-12 col-xs-offset-12">
                            <li><a href="/service/color-design/scala-color-planning-system/"
                                    title="Scala color planning system" id="mainnavigation-link-10">Scala color
                                    planning system</a></li>
                            <li><a href="/service/color-design/color-studios/" title="Color studios"
                                    id="mainnavigation-link-11">Color studios</a></li>
                            <li><a href="/service/color-design/color-as-people-age/" title="Color as people age"
                                    id="mainnavigation-link-12">Color as people age</a></li>
                        </ul>
                    </li>
                    <li><a href="/service/object-service/" title="Object service">Object service</a></li>
                    <li><a href="/service/construction-site-logistics/" title="Construction site logistics">Construction
                            site logistics</a></li>
                    <li><a href="/service/references/single-family-homes-and-apartment-buildings/for-the-specialist-trade/"
                            title="For the specialist trade">For the specialist trade</a></li>
                    <li class="haschildren"><a href="/service/references/" title="References">References</a>
                        <ul class="menu menu2 col-md-offset-12 col-xs-offset-12">
                            <li><a href="/service/references/single-family-homes-and-apartment-buildings/"
                                    title="Single-family homes and apartment buildings"
                                    id="mainnavigation-link-17">Single-family homes and apartment buildings</a>
                            </li>
                            <li><a href="/service/references/residential-and-commercial-buildings/"
                                    title="Residential and commercial buildings" id="mainnavigation-link-18">Residential
                                    and commercial buildings</a></li>
                            <li><a href="/service/references/high-rise-buildings-and-prefabricated-constructions/"
                                    title="High-rise buildings and prefabricated constructions"
                                    id="mainnavigation-link-19">High-rise buildings and prefabricated
                                    constructions</a></li>
                            <li><a href="/service/references/streets-and-settlements/" title="Streets and settlements"
                                    id="mainnavigation-link-20">Streets and
                                    settlements</a></li>
                            <li><a href="/service/references/historical-buildings/" title="Historical buildings"
                                    id="mainnavigation-link-21">Historical buildings</a></li>
                            <li><a href="/service/references/kindergartens-and-educational-institutions/"
                                    title="Kindergartens and educational institutions"
                                    id="mainnavigation-link-22">Kindergartens and educational institutions</a>
                            </li>
                            <li><a href="/service/references/health-and-social-affairs/"
                                    title="Health and social affairs" id="mainnavigation-link-23">Health and
                                    social affairs</a></li>
                            <li><a href="/service/references/industrial-and-commercial-buildings/"
                                    title="Industrial and commercial buildings" id="mainnavigation-link-24">Industrial
                                    and commercial buildings</a></li>
                            <li><a href="/service/references/other-public-buildings/" title="Other public buildings"
                                    id="mainnavigation-link-25">Other public
                                    buildings</a></li>
                        </ul>
                    </li>
                    <li class="haschildren"><a href="/service/software/" title="Software">Software</a>
                        <ul class="menu menu2 col-md-offset-12 col-xs-offset-12">
                            <li><a href="/service/software/the-brillux-app/" title="The Brillux app"
                                    id="mainnavigation-link-27">The Brillux app</a></li>
                            <li><a href="/service/software/color-libraries/" title="Color libraries"
                                    id="mainnavigation-link-28">Color libraries</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown simple"><a id="mainnavigation-link-{register:count_HMENU_MENUOBJ}" href="{field:slug}/"
                    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">{{$media->module_name}}</a>
                <ul class="dropdown-menu">
                    <li><a href="/media-library/documents-and-videos/" title="Documents and videos">Documents
                            and videos</a></li>
                </ul>
            </li>
            <li class="dropdown simple"><a id="mainnavigation-link-{register:count_HMENU_MENUOBJ}" href="{field:slug}/"
                    class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">{{$company->module_name}}</a>
                <ul class="dropdown-menu">
                    <li><a href="/company/about-us/" title="About us">About us</a></li>
                    <li class="haschildren"><a href="/company/branches/" title="Branches">Branches</a>
                        <ul class="menu menu2 col-md-offset-12 col-xs-offset-12">
                            <li><a href="/company/branches/germany/" title="Germany"
                                    id="mainnavigation-link-34">Germany</a></li>
                            <li><a href="/company/branches/italy/" title="Italy" id="mainnavigation-link-35">Italy</a>
                            </li>
                            <li><a href="/company/branches/the-netherlands/" title="The Netherlands"
                                    id="mainnavigation-link-36">The Netherlands</a></li>
                            <li><a href="/company/branches/austria/" title="Austria"
                                    id="mainnavigation-link-37">Austria</a></li>
                            <li><a href="/company/branches/poland/" title="Poland"
                                    id="mainnavigation-link-38">Poland</a></li>
                            <li><a href="/company/branches/switzerland/" title="Switzerland"
                                    id="mainnavigation-link-39">Switzerland</a></li>
                            <li><a href="/company/branches/international-trade-partners/"
                                    title="International trade partners" id="mainnavigation-link-40">International trade
                                    partners</a></li>
                            <li><a href="/company/branches/branch-search/" title="Branch search"
                                    id="mainnavigation-link-41">Branch search</a></li>
                        </ul>
                    </li>
                    <li><a href="/company/quality-and-environmental-protection/"
                            title="Quality and environmental protection">Quality and environmental
                            protection</a></li>
                    <li class="haschildren"><a href="/company/career/" title="Career">Career</a>
                        <ul class="menu menu2 col-md-offset-12 col-xs-offset-12">
                            <li><a href="/company/career/training-studies/" title="Training &amp; studies"
                                    id="mainnavigation-link-44">Training & studies</a></li>
                            <li><a href="/company/career/trainee-program/" title="Trainee program"
                                    id="mainnavigation-link-45">Trainee program</a></li>
                            <li><a href="/company/career/specialists-and-managers/" title="Specialists and managers"
                                    id="mainnavigation-link-46">Specialists and
                                    managers</a></li>
                        </ul>
                    </li>
                    <li class="haschildren"><a href="/company/academy/" title="Academy">Academy</a>
                        <ul class="menu menu2 col-md-offset-12 col-xs-offset-12">
                            <li><a href="/company/academy/employees/" title="Employees"
                                    id="mainnavigation-link-48">Employees</a></li>
                            <li><a href="/company/academy/tradesmen/" title="Tradesmen"
                                    id="mainnavigation-link-49">Tradesmen</a></li>
                        </ul>
                    </li>
                    <li><a href="/company/news/" title="News">News</a></li>
                    <li><a href="/company/press/" title="Press">Press</a></li>
                    <li><a href="/company/blog/" title="Blog">Blog</a></li>
                    <li><a href="/company/brillux-design-award/" title="Brillux Design Award">Brillux Design
                            Award</a></li>
                </ul>
            </li>
            </ul>
            <!-- TS: lib.mainnavigation END -->

        </div>
    </div>

    <!--/.nav-collapse -->
</nav>