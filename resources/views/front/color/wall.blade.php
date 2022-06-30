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
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">Wall<span>
              <meta property="position" content="2">
        </li>
      </ul>
    </div>

    <div class="flexslider content">


      <ul class="slides">


        <li>

          <img src="{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}}"
            srcset="{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7d7a0ca3ec.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_7184eb78f6.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_f67698e27e.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_0acbf39c2c.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_f2e40b28c7.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/b/6/csm_abb-farbtoene-muster-wand_22eff879b5.jpg')}} 1200w,{{asset('public/assets/fileadmin/redaktion/bilder/farbtoene-muster/abb-farbtoene-muster-wand.jpg')}} 1600w"
            sizes="100vw" alt="Wall">

        </li>


      </ul>
    </div>


    <div id="c52748" class="frame frame-default frame-type-html frame-layout-0">
  
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


    <div id="c52746" class="frame frame-default frame-type-html frame-layout-0">
      <style type="text/css" title="text/css" media="all">
        @import url({{asset('public/assets/html_dummy_farbtoene_muster_v2/templates/css/styles-brillux-farbtoene-muster.css')}});


        .farbtoene-muster .flexslider3.farbtoene-muster>.flex-control-nav {
          padding: 0% 8%;
          bottom: -50px !important;

        }

        .farbtoene-muster .flexslider3.farbtoene-muster>ul.flex-direction-nav {
          width: 100%;

        }
      </style>
    </div>


    <div id="c52742" class="frame frame-default frame-type-html frame-layout-0">
      <div class="container mt30 farbtoene-muster hidden-xs">
        <div class="row">
         
          <div class="col-md-6 col-sm-6">
            <div class="wrapper">
              <ul class="nav nav-tabs warenkorb" role="tablist">
                <li role="presentation" class="active"><a href="#tapeten" role="tab" data-toggle="tab">Wallpapers</a>
                </li>
     </ul>
            </div>
          </div>
  
          <div class="tab-content warenkorb">
            <div role="tabpanel" class="tab-pane active" id="tapeten">
              <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="farbwahl farbtoene_muster">
                  <div class="flexslider3 farbtoene-muster">
                    <ul class="slides">
                      <li><a href="tapete_5300" class="tapete_5300 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5300"
                            title="5300"></span><strong>Nr. 5300</strong></a><a href="#"
                          class="tapete_5301 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5301"
                            title="5301"></span><strong>Nr. 5301</strong></a><a href="#"
                          class="tapete_5302 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5302"
                            title="5302"></span><strong>Nr. 5302</strong></a><a href="#"
                          class="tapete_5303 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5303"
                            title="5303"></span><strong>Nr. 5303</strong></a><a href="#"
                          class="tapete_5304 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5304"
                            title="5304"></span><strong>Nr. 5304</strong></a><a href="#"
                          class="tapete_5305 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5305"
                            title="5305"></span><strong>Nr. 5305</strong></a><a href="#"
                          class="tapete_5306 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5306"
                            title="5306"></span><strong>Nr. 5306</strong></a><a href="#"
                          class="tapete_5307 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5307"
                            title="5307"></span><strong>Nr. 5307</strong></a><a href="#"
                          class="tapete_5308 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5308"
                            title="5308"></span><strong>Nr. 5308</strong></a><a href="#"
                          class="tapete_5309 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5309"
                            title="5309"></span><strong>Nr. 5309</strong></a><a href="#"
                          class="tapete_5310 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5310"
                            title="5310"></span><strong>Nr. 5310</strong></a><a href="#"
                          class="tapete_5311 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5311"
                            title="5311"></span><strong>Nr. 5311</strong></a></li>
                      <li><a href="#" class="tapete_5312 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5312"
                            title="5312"></span><strong>Nr. 5312</strong></a><a href="#"
                          class="tapete_5313 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5313"
                            title="5313"></span><strong>Nr. 5313</strong></a><a href="#"
                          class="tapete_5314 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5314"
                            title="5314"></span><strong>Nr. 5314</strong></a><a href="#"
                          class="tapete_5315 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5315"
                            title="5315"></span><strong>Nr. 5315</strong></a><a href="#"
                          class="tapete_5316 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5316"
                            title="5316"></span><strong>Nr. 5316</strong></a><a href="#"
                          class="tapete_5317 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5317"
                            title="5317"></span><strong>Nr. 5317</strong></a><a href="#"
                          class="tapete_5318 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5318"
                            title="5318"></span><strong>Nr. 5318</strong></a><a href="#"
                          class="tapete_5319 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5319"
                            title="5319"></span><strong>Nr. 5319</strong></a><a href="#"
                          class="tapete_5320 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5320"
                            title="5320"></span><strong>Nr. 5320</strong></a><a href="#"
                          class="tapete_5321 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5321"
                            title="5321"></span><strong>Nr. 5321</strong></a><a href="#"
                          class="tapete_5322 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5322"
                            title="5322"></span><strong>Nr. 5322</strong></a><a href="#"
                          class="tapete_5323 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5323"
                            title="5323"></span><strong>Nr. 5323</strong></a></li>
                      <li><a href="#" class="tapete_5324 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5324"
                            title="5324"></span><strong>Nr. 5324</strong></a><a href="#"
                          class="tapete_5325 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5325"
                            title="5325"></span><strong>Nr. 5325</strong></a><a href="#"
                          class="tapete_5326 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5326"
                            title="5326"></span><strong>Nr. 5326</strong></a><a href="#"
                          class="tapete_5327 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5327"
                            title="5327"></span><strong>Nr. 5327</strong></a><a href="#"
                          class="tapete_5328 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5328"
                            title="5328"></span><strong>Nr. 5328</strong></a><a href="#"
                          class="tapete_5329 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5329"
                            title="5329"></span><strong>Nr. 5329</strong></a><a href="#"
                          class="tapete_5330 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5330"
                            title="5330"></span><strong>Nr. 5330</strong></a><a href="#"
                          class="tapete_5331 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5331"
                            title="5331"></span><strong>Nr. 5331</strong></a><a href="#"
                          class="tapete_5332 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5332"
                            title="5332"></span><strong>Nr. 5332</strong></a><a href="#"
                          class="tapete_5333 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5333"
                            title="5333"></span><strong>Nr. 5333</strong></a><a href="#"
                          class="tapete_5334 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5334"
                            title="5334"></span><strong>Nr. 5334</strong></a><a href="#"
                          class="tapete_5335 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5335"
                            title="5335"></span><strong>Nr. 5335</strong></a></li>
                      <li><a href="#" class="tapete_5336 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5336"
                            title="5336"></span><strong>Nr. 5336</strong></a><a href="#"
                          class="tapete_5337 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5337"
                            title="5337"></span><strong>Nr. 5337</strong></a><a href="#"
                          class="tapete_5338 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5338"
                            title="5338"></span><strong>Nr. 5338</strong></a><a href="#"
                          class="tapete_5339 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5339"
                            title="5339"></span><strong>Nr. 5339</strong></a><a href="#"
                          class="tapete_5340 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5340"
                            title="5340"></span><strong>Nr. 5340</strong></a><a href="#"
                          class="tapete_5341 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5341"
                            title="5341"></span><strong>Nr. 5341</strong></a><a href="#"
                          class="tapete_5342 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5342"
                            title="5342"></span><strong>Nr. 5342</strong></a><a href="#"
                          class="tapete_5343 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5343"
                            title="5343"></span><strong>Nr. 5343</strong></a><a href="#"
                          class="tapete_5344 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5344"
                            title="5344"></span><strong>Nr. 5344</strong></a><a href="#"
                          class="tapete_5345 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5345"
                            title="5345"></span><strong>Nr. 5345</strong></a><a href="#"
                          class="tapete_5346 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5346"
                            title="5346"></span><strong>Nr. 5346</strong></a><a href="#"
                          class="tapete_5347 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5347"
                            title="5347"></span><strong>Nr. 5347</strong></a></li>
                      <li><a href="#" class="tapete_5348 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5348"
                            title="5348"></span><strong>Nr. 5348</strong></a><a href="#"
                          class="tapete_5349 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5349"
                            title="5349"></span><strong>Nr. 5349</strong></a><a href="#"
                          class="tapete_5350 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5350"
                            title="5350"></span><strong>Nr. 5350</strong></a><a href="#"
                          class="tapete_5351 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5351"
                            title="5351"></span><strong>Nr. 5351</strong></a><a href="#"
                          class="tapete_5352 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5352"
                            title="5352"></span><strong>Nr. 5352</strong></a><a href="#"
                          class="tapete_5353 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5353"
                            title="5353"></span><strong>Nr. 5353</strong></a><a href="#"
                          class="tapete_5354 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5354"
                            title="5354"></span><strong>Nr. 5354</strong></a><a href="#"
                          class="tapete_5355 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5355"
                            title="5355"></span><strong>Nr. 5355</strong></a><a href="#"
                          class="tapete_5356 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5356"
                            title="5356"></span><strong>Nr. 5356</strong></a><a href="#"
                          class="tapete_5357 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5357"
                            title="5357"></span><strong>Nr. 5357</strong></a><a href="#"
                          class="tapete_5358 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5358"
                            title="5358"></span><strong>Nr. 5358</strong></a><a href="#"
                          class="tapete_5359 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5359"
                            title="5359"></span><strong>Nr. 5359</strong></a></li>
                      <li><a href="#" class="tapete_5360 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5360"
                            title="5360"></span><strong>Nr. 5360</strong></a><a href="#"
                          class="tapete_5361 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5361"
                            title="5361"></span><strong>Nr. 5361</strong></a><a href="#"
                          class="tapete_5362 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5362"
                            title="5362"></span><strong>Nr. 5362</strong></a><a href="#"
                          class="tapete_5363 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5363"
                            title="5363"></span><strong>Nr. 5363</strong></a><a href="#"
                          class="tapete_5364 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5364"
                            title="5364"></span><strong>Nr. 5364</strong></a><a href="#"
                          class="tapete_5365 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5365"
                            title="5365"></span><strong>Nr. 5365</strong></a><a href="#"
                          class="tapete_5366 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5366"
                            title="5366"></span><strong>Nr. 5366</strong></a><a href="#"
                          class="tapete_5367 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5367"
                            title="5367"></span><strong>Nr. 5367</strong></a><a href="#"
                          class="tapete_5368 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5368"
                            title="5368"></span><strong>Nr. 5368</strong></a><a href="#"
                          class="tapete_5369 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5369"
                            title="5369"></span><strong>Nr. 5369</strong></a><a href="#"
                          class="tapete_5370 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5370"
                            title="5370"></span><strong>Nr. 5370</strong></a><a href="#"
                          class="tapete_5371 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5371"
                            title="5371"></span><strong>Nr. 5371</strong></a></li>
                      <li><a href="#" class="tapete_5372 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5372"
                            title="5372"></span><strong>Nr. 5372</strong></a><a href="#"
                          class="tapete_5373 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5373"
                            title="5373"></span><strong>Nr. 5373</strong></a><a href="#"
                          class="tapete_5374 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5374"
                            title="5374"></span><strong>Nr. 5374</strong></a><a href="#"
                          class="tapete_5375 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5375"
                            title="5375"></span><strong>Nr. 5375</strong></a><a href="#"
                          class="tapete_5376 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5376"
                            title="5376"></span><strong>Nr. 5376</strong></a><a href="#"
                          class="tapete_5377 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5377"
                            title="5377"></span><strong>Nr. 5377</strong></a><a href="#"
                          class="tapete_5378 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5378"
                            title="5378"></span><strong>Nr. 5378</strong></a><a href="#"
                          class="tapete_5379 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5379"
                            title="5379"></span><strong>Nr. 5379</strong></a><a href="#"
                          class="tapete_5380 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5380"
                            title="5380"></span><strong>Nr. 5380</strong></a><a href="#"
                          class="tapete_5381 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5381"
                            title="5381"></span><strong>Nr. 5381</strong></a><a href="#"
                          class="tapete_5382 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5382"
                            title="5382"></span><strong>Nr. 5382</strong></a><a href="#"
                          class="tapete_5383 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5383"
                            title="5383"></span><strong>Nr. 5383</strong></a></li>
                      <li><a href="#" class="tapete_5384 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5384"
                            title="5384"></span><strong>Nr. 5384</strong></a><a href="#"
                          class="tapete_5385 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5385"
                            title="5385"></span><strong>Nr. 5385</strong></a><a href="#"
                          class="tapete_5386 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5386"
                            title="5386"></span><strong>Nr. 5386</strong></a><a href="#"
                          class="tapete_5387 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5387"
                            title="5387"></span><strong>Nr. 5387</strong></a><a href="#"
                          class="tapete_5388 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5388"
                            title="5388"></span><strong>Nr. 5388</strong></a><a href="#"
                          class="tapete_5389 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5389"
                            title="5389"></span><strong>Nr. 5389</strong></a><a href="#"
                          class="tapete_5390 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5390"
                            title="5390"></span><strong>Nr. 5390</strong></a><a href="#"
                          class="tapete_5391 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5391"
                            title="5391"></span><strong>Nr. 5391</strong></a><a href="#"
                          class="tapete_5392 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5392"
                            title="5392"></span><strong>Nr. 5392</strong></a><a href="#"
                          class="tapete_5393 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5393"
                            title="5393"></span><strong>Nr. 5393</strong></a><a href="#"
                          class="tapete_5394 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5394"
                            title="5394"></span><strong>Nr. 5394</strong></a><a href="#"
                          class="tapete_5395 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5395"
                            title="5395"></span><strong>Nr. 5395</strong></a></li>
                      <li><a href="#" class="tapete_5396 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5396"
                            title="5396"></span><strong>Nr. 5396</strong></a><a href="#"
                          class="tapete_5397 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5397"
                            title="5397"></span><strong>Nr. 5397</strong></a><a href="#"
                          class="tapete_5398 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5398"
                            title="5398"></span><strong>Nr. 5398</strong></a><a href="#"
                          class="tapete_5399 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5399"
                            title="5399"></span><strong>Nr. 5399</strong></a><a href="#"
                          class="tapete_5400 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5400"
                            title="5400"></span><strong>Nr. 5400</strong></a><a href="#"
                          class="tapete_5401 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5401"
                            title="5401"></span><strong>Nr. 5401</strong></a><a href="#"
                          class="tapete_5402 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5402"
                            title="5402"></span><strong>Nr. 5402</strong></a><a href="#"
                          class="tapete_5403 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5403"
                            title="5403"></span><strong>Nr. 5403</strong></a><a href="#"
                          class="tapete_5404 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5404"
                            title="5404"></span><strong>Nr. 5404</strong></a><a href="#"
                          class="tapete_5405 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5405"
                            title="5405"></span><strong>Nr. 5405</strong></a><a href="#"
                          class="tapete_5406 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5406"
                            title="5406"></span><strong>Nr. 5406</strong></a><a href="#"
                          class="tapete_5407 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5407"
                            title="5407"></span><strong>Nr. 5407</strong></a></li>
                      <li><a href="#" class="tapete_5408 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5408"
                            title="5408"></span><strong>Nr. 5408</strong></a><a href="#"
                          class="tapete_5409 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5409"
                            title="5409"></span><strong>Nr. 5409</strong></a><a href="#"
                          class="tapete_5410 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5410"
                            title="5410"></span><strong>Nr. 5410</strong></a><a href="#"
                          class="tapete_5411 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5411"
                            title="5411"></span><strong>Nr. 5411</strong></a><a href="#"
                          class="tapete_5412 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5412"
                            title="5412"></span><strong>Nr. 5412</strong></a><a href="#"
                          class="tapete_5413 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5413"
                            title="5413"></span><strong>Nr. 5413</strong></a><a href="#"
                          class="tapete_5414 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5414"
                            title="5414"></span><strong>Nr. 5414</strong></a><a href="#"
                          class="tapete_5415 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5415"
                            title="5415"></span><strong>Nr. 5415</strong></a><a href="#"
                          class="tapete_5416 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5416"
                            title="5416"></span><strong>Nr. 5416</strong></a><a href="#"
                          class="tapete_5417 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5417"
                            title="5417"></span><strong>Nr. 5417</strong></a><a href="#"
                          class="tapete_5418 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5418"
                            title="5418"></span><strong>Nr. 5418</strong></a><a href="#"
                          class="tapete_5419 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5419"
                            title="5419"></span><strong>Nr. 5419</strong></a></li>
                      <li><a href="#" class="tapete_5420 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5420"
                            title="5420"></span><strong>Nr. 5420</strong></a><a href="#"
                          class="tapete_5421 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5421"
                            title="5421"></span><strong>Nr. 5421</strong></a><a href="#"
                          class="tapete_5422 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5422"
                            title="5422"></span><strong>Nr. 5422</strong></a><a href="#"
                          class="tapete_5423 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5423"
                            title="5423"></span><strong>Nr. 5423</strong></a></li>
                      <li><a href="#" class="tapete_7300 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7300"
                            title="7300"></span><strong>Nr. 7300</strong></a><a href="#"
                          class="tapete_7301 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7301"
                            title="7301"></span><strong>Nr. 7301</strong></a><a href="#"
                          class="tapete_7302 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7302"
                            title="7302"></span><strong>Nr. 7302</strong></a><a href="#"
                          class="tapete_7303 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7303"
                            title="7303"></span><strong>Nr. 7303</strong></a><a href="#"
                          class="tapete_7304 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7304"
                            title="7304"></span><strong>Nr. 7304</strong></a><a href="#"
                          class="tapete_7305 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7305"
                            title="7305"></span><strong>Nr. 7305</strong></a><a href="#"
                          class="tapete_7306 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7306"
                            title="7306"></span><strong>Nr. 7306</strong></a><a href="#"
                          class="tapete_7307 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7307"
                            title="7307"></span><strong>Nr. 7307</strong></a><a href="#"
                          class="tapete_7308 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7308"
                            title="7308"></span><strong>Nr. 7308</strong></a><a href="#"
                          class="tapete_7309 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7309"
                            title="7309"></span><strong>Nr. 7309</strong></a><a href="#"
                          class="tapete_7310 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7310"
                            title="7310"></span><strong>Nr. 7310</strong></a><a href="#"
                          class="tapete_7311 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7311"
                            title="7311"></span><strong>Nr. 7311</strong></a></li>
                      <li><a href="#" class="tapete_7312 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7312"
                            title="7312"></span><strong>Nr. 7312</strong></a><a href="#"
                          class="tapete_7313 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7313"
                            title="7313"></span><strong>Nr. 7313</strong></a><a href="#"
                          class="tapete_7314 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7314"
                            title="7314"></span><strong>Nr. 7314</strong></a><a href="#"
                          class="tapete_7315 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7315"
                            title="7315"></span><strong>Nr. 7315</strong></a><a href="#"
                          class="tapete_7316 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7316"
                            title="7316"></span><strong>Nr. 7316</strong></a><a href="#"
                          class="tapete_7317 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7317"
                            title="7317"></span><strong>Nr. 7317</strong></a><a href="#"
                          class="tapete_7318 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7318"
                            title="7318"></span><strong>Nr. 7318</strong></a><a href="#"
                          class="tapete_7319 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7319"
                            title="7319"></span><strong>Nr. 7319</strong></a><a href="#"
                          class="tapete_7320 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7320"
                            title="7320"></span><strong>Nr. 7320</strong></a><a href="#"
                          class="tapete_7321 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7321"
                            title="7321"></span><strong>Nr. 7321</strong></a><a href="#"
                          class="tapete_7322 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7322"
                            title="7322"></span><strong>Nr. 7322</strong></a><a href="#"
                          class="tapete_7323 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7323"
                            title="7323"></span><strong>Nr. 7323</strong></a></li>
                      <li><a href="#" class="tapete_7324 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7324"
                            title="7324"></span><strong>Nr. 7324</strong></a><a href="#"
                          class="tapete_7325 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7325"
                            title="7325"></span><strong>Nr. 7325</strong></a><a href="#"
                          class="tapete_7326 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7326"
                            title="7326"></span><strong>Nr. 7326</strong></a><a href="#"
                          class="tapete_7327 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7327"
                            title="7327"></span><strong>Nr. 7327</strong></a><a href="#"
                          class="tapete_7328 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7328"
                            title="7328"></span><strong>Nr. 7328</strong></a><a href="#"
                          class="tapete_7329 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7329"
                            title="7329"></span><strong>Nr. 7329</strong></a><a href="#"
                          class="tapete_7330 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7330"
                            title="7330"></span><strong>Nr. 7330</strong></a><a href="#"
                          class="tapete_7331 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7331"
                            title="7331"></span><strong>Nr. 7331</strong></a><a href="#"
                          class="tapete_7332 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7332"
                            title="7332"></span><strong>Nr. 7332</strong></a><a href="#"
                          class="tapete_7333 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7333"
                            title="7333"></span><strong>Nr. 7333</strong></a><a href="#"
                          class="tapete_7334 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7334"
                            title="7334"></span><strong>Nr. 7334</strong></a><a href="#"
                          class="tapete_7335 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7335"
                            title="7335"></span><strong>Nr. 7335</strong></a></li>
                      <li><a href="#" class="tapete_7336 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7336"
                            title="7336"></span><strong>Nr. 7336</strong></a><a href="#"
                          class="tapete_7337 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7337"
                            title="7337"></span><strong>Nr. 7337</strong></a><a href="#"
                          class="tapete_7338 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7338"
                            title="7338"></span><strong>Nr. 7338</strong></a><a href="#"
                          class="tapete_7339 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7339"
                            title="7339"></span><strong>Nr. 7339</strong></a><a href="#"
                          class="tapete_7340 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7340"
                            title="7340"></span><strong>Nr. 7340</strong></a><a href="#"
                          class="tapete_7341 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7341"
                            title="7341"></span><strong>Nr. 7341</strong></a><a href="#"
                          class="tapete_7342 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7342"
                            title="7342"></span><strong>Nr. 7342</strong></a><a href="#"
                          class="tapete_7343 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7343"
                            title="7343"></span><strong>Nr. 7343</strong></a><a href="#"
                          class="tapete_7344 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7344"
                            title="7344"></span><strong>Nr. 7344</strong></a><a href="#"
                          class="tapete_7345 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7345"
                            title="7345"></span><strong>Nr. 7345</strong></a><a href="#"
                          class="tapete_7346 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7346"
                            title="7346"></span><strong>Nr. 7346</strong></a><a href="#"
                          class="tapete_7347 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7347"
                            title="7347"></span><strong>Nr. 7347</strong></a></li>
                      <li><a href="#" class="tapete_7348 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7348"
                            title="7348"></span><strong>Nr. 7348</strong></a><a href="#"
                          class="tapete_7349 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7349"
                            title="7349"></span><strong>Nr. 7349</strong></a><a href="#"
                          class="tapete_7350 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7350"
                            title="7350"></span><strong>Nr. 7350</strong></a><a href="#"
                          class="tapete_7351 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7351"
                            title="7351"></span><strong>Nr. 7351</strong></a><a href="#"
                          class="tapete_7352 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7352"
                            title="7352"></span><strong>Nr. 7352</strong></a><a href="#"
                          class="tapete_7353 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7353"
                            title="7353"></span><strong>Nr. 7353</strong></a><a href="#"
                          class="tapete_7354 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7354"
                            title="7354"></span><strong>Nr. 7354</strong></a><a href="#"
                          class="tapete_7355 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7355"
                            title="7355"></span><strong>Nr. 7355</strong></a><a href="#"
                          class="tapete_7356 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7356"
                            title="7356"></span><strong>Nr. 7356</strong></a><a href="#"
                          class="tapete_7357 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7357"
                            title="7357"></span><strong>Nr. 7357</strong></a><a href="#"
                          class="tapete_7358 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7358"
                            title="7358"></span><strong>Nr. 7358</strong></a><a href="#"
                          class="tapete_7359 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7359"
                            title="7359"></span><strong>Nr. 7359</strong></a></li>
                      <li><a href="#" class="tapete_7360 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7360"
                            title="7360"></span><strong>Nr. 7360</strong></a><a href="#"
                          class="tapete_7361 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7361"
                            title="7361"></span><strong>Nr. 7361</strong></a><a href="#"
                          class="tapete_7362 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7362"
                            title="7362"></span><strong>Nr. 7362</strong></a><a href="#"
                          class="tapete_7363 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7363"
                            title="7363"></span><strong>Nr. 7363</strong></a><a href="#"
                          class="tapete_7364 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7364"
                            title="7364"></span><strong>Nr. 7364</strong></a><a href="#"
                          class="tapete_7365 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7365"
                            title="7365"></span><strong>Nr. 7365</strong></a><a href="#"
                          class="tapete_7366 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7366"
                            title="7366"></span><strong>Nr. 7366</strong></a><a href="#"
                          class="tapete_7367 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7367"
                            title="7367"></span><strong>Nr. 7367</strong></a><a href="#"
                          class="tapete_7368 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7368"
                            title="7368"></span><strong>Nr. 7368</strong></a><a href="#"
                          class="tapete_7369 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7369"
                            title="7369"></span><strong>Nr. 7369</strong></a><a href="#"
                          class="tapete_7370 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7370"
                            title="7370"></span><strong>Nr. 7370</strong></a><a href="#"
                          class="tapete_7371 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7371"
                            title="7371"></span><strong>Nr. 7371</strong></a></li>
                      <li><a href="#" class="tapete_7372 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7372"
                            title="5372"></span><strong>Nr. 7372</strong></a><a href="#"
                          class="tapete_7373 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7373"
                            title="5373"></span><strong>Nr. 7373</strong></a><a href="#"
                          class="tapete_7374 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7374"
                            title="5374"></span><strong>Nr. 7374</strong></a><a href="#"
                          class="tapete_7375 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7375"
                            title="5375"></span><strong>Nr. 7375</strong></a><a href="#"
                          class="tapete_7376 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7376"
                            title="5376"></span><strong>Nr. 7376</strong></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="MyElement">
                  <div class="slider_vertical boden">
                    <div class="item"><img
                        src="{{asset('public/assets/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/wand/tapeten/raumbild.gif')}}"
                        class="tapete_5300" alt="Color depiction" /></div>
                  </div>
                </div>
                <div class="pull-left">
                  <div class="wrapper row mb20 mt20">
                    <div class="col-md-9 col-sm-8"><strong>Detail view</strong><br>
                      <div class="small mt10">These are a few decor examples from our wallpaper collection. In the
                        Brillux color designer, you can design your own rooms with our wallpapers. <br><br>
                       </div>
                    </div>
                  </div>
                  <hr />
                  <div class="pull-left clear small mt20"><strong>Note on color shade depiction</strong><br> For
                    technical reasons, the color shade depiction on a monitor will differ from the original color
                    sample. For a reliable comparison, we recommend using an original color shade template. Brillux
                    Scala color samples can be ordered online from the sample service.</div>
                </div>
              </div>
            </div>
         </div>
        </div>
      </div>
      <div class="hidden-sm hidden-md hidden-lg farbtoene-muster" id="accordion">
        <div id="collapse_farbtoene" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="wand"
          aria-expanded="false">
          <div class="container">
            <div class="tab-content warenkorb">
              <div role="tabpanel" class="tab-pane active" id="tapeten2">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="farbwahl farbtoene_muster">
                    <div class="flexslider3 farbtoene-muster">
                      <ul class="slides">
                        <li><a href="tapete_5300" class="tapete_5300 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5300" title="5300"></span><strong>No. 5300</strong></a><a href="tapete_5301"
                            class="tapete_5301 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5301"
                              title="5301"></span><strong>No. 5301</strong></a><a href="tapete_5302"
                            class="tapete_5302 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5302"
                              title="5302"></span><strong>No. 5302</strong></a><a href="tapete_5303"
                            class="tapete_5303 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5303"
                              title="5303"></span><strong>No. 5303</strong></a><a href="tapete_5304"
                            class="tapete_5304 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5304"
                              title="5304"></span><strong>No. 5304</strong></a><a href="tapete_5305"
                            class="tapete_5305 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5305"
                              title="5305"></span><strong>No. 5305</strong></a><a href="tapete_5306"
                            class="tapete_5306 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5306"
                              title="5306"></span><strong>No. 5306</strong></a><a href="tapete_5307"
                            class="tapete_5307 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5307"
                              title="5307"></span><strong>No. 5307</strong></a><a href="tapete_5308"
                            class="tapete_5308 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5308"
                              title="5308"></span><strong>No. 5308</strong></a><a href="tapete_5309"
                            class="tapete_5309 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5309"
                              title="5309"></span><strong>No. 5309</strong></a><a href="tapete_5310"
                            class="tapete_5310 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5310"
                              title="5310"></span><strong>No. 5310</strong></a><a href="tapete_5311"
                            class="tapete_5311 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5311"
                              title="5311"></span><strong>No. 5311</strong></a></li>
                        <li><a href="tapete_5312" class="tapete_5312 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5312" title="5312"></span><strong>No. 5312</strong></a><a href="tapete_5313"
                            class="tapete_5313 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5313"
                              title="5313"></span><strong>No. 5313</strong></a><a href="tapete_5314"
                            class="tapete_5314 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5314"
                              title="5314"></span><strong>No. 5314</strong></a><a href="tapete_5315"
                            class="tapete_5315 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5315"
                              title="5315"></span><strong>No. 5315</strong></a><a href="tapete_5316"
                            class="tapete_5316 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5316"
                              title="5316"></span><strong>No. 5316</strong></a><a href="tapete_5317"
                            class="tapete_5317 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5317"
                              title="5317"></span><strong>No. 5317</strong></a><a href="tapete_5318"
                            class="tapete_5318 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5318"
                              title="5318"></span><strong>No. 5318</strong></a><a href="tapete_5319"
                            class="tapete_5319 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5319"
                              title="5319"></span><strong>No. 5319</strong></a><a href="tapete_5320"
                            class="tapete_5320 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5320"
                              title="5320"></span><strong>No. 5320</strong></a><a href="tapete_5321"
                            class="tapete_5321 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5321"
                              title="5321"></span><strong>No. 5321</strong></a><a href="tapete_5322"
                            class="tapete_5322 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5322"
                              title="5322"></span><strong>No. 5322</strong></a><a href="tapete_5323"
                            class="tapete_5323 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5323"
                              title="5323"></span><strong>No. 5323</strong></a></li>
                        <li><a href="tapete_5324" class="tapete_5324 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5324" title="5324"></span><strong>No. 5324</strong></a><a href="tapete_5325"
                            class="tapete_5325 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5325"
                              title="5325"></span><strong>No. 5325</strong></a><a href="tapete_5326"
                            class="tapete_5326 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5326"
                              title="5326"></span><strong>No. 5326</strong></a><a href="tapete_5327"
                            class="tapete_5327 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5327"
                              title="5327"></span><strong>No. 5327</strong></a><a href="tapete_5328"
                            class="tapete_5328 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5328"
                              title="5328"></span><strong>No. 5328</strong></a><a href="tapete_5329"
                            class="tapete_5329 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5329"
                              title="5329"></span><strong>No. 5329</strong></a><a href="tapete_5330"
                            class="tapete_5330 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5330"
                              title="5330"></span><strong>No. 5330</strong></a><a href="tapete_5331"
                            class="tapete_5331 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5331"
                              title="5331"></span><strong>No. 5331</strong></a><a href="tapete_5332"
                            class="tapete_5332 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5332"
                              title="5332"></span><strong>No. 5332</strong></a><a href="tapete_5333"
                            class="tapete_5333 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5333"
                              title="5333"></span><strong>No. 5333</strong></a><a href="tapete_5334"
                            class="tapete_5334 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5334"
                              title="5334"></span><strong>No. 5334</strong></a><a href="tapete_5335"
                            class="tapete_5335 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5335"
                              title="5335"></span><strong>No. 5335</strong></a></li>
                        <li><a href="tapete_5336" class="tapete_5336 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5336" title="5336"></span><strong>No. 5336</strong></a><a href="tapete_5337"
                            class="tapete_5337 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5337"
                              title="5337"></span><strong>No. 5337</strong></a><a href="tapete_5338"
                            class="tapete_5338 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5338"
                              title="5338"></span><strong>No. 5338</strong></a><a href="tapete_5339"
                            class="tapete_5339 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5339"
                              title="5339"></span><strong>No. 5339</strong></a><a href="tapete_5340"
                            class="tapete_5340 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5340"
                              title="5340"></span><strong>No. 5340</strong></a><a href="tapete_5341"
                            class="tapete_5341 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5341"
                              title="5341"></span><strong>No. 5341</strong></a><a href="tapete_5342"
                            class="tapete_5342 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5342"
                              title="5342"></span><strong>No. 5342</strong></a><a href="tapete_5343"
                            class="tapete_5343 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5343"
                              title="5343"></span><strong>No. 5343</strong></a><a href="tapete_5344"
                            class="tapete_5344 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5344"
                              title="5344"></span><strong>No. 5344</strong></a><a href="tapete_5345"
                            class="tapete_5345 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5345"
                              title="5345"></span><strong>No. 5345</strong></a><a href="tapete_5346"
                            class="tapete_5346 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5346"
                              title="5346"></span><strong>No. 5346</strong></a><a href="tapete_5347"
                            class="tapete_5347 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5347"
                              title="5347"></span><strong>No. 5347</strong></a></li>
                        <li><a href="tapete_5348" class="tapete_5348 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5348" title="5348"></span><strong>No. 5348</strong></a><a href="tapete_5349"
                            class="tapete_5349 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5349"
                              title="5349"></span><strong>No. 5349</strong></a><a href="tapete_5350"
                            class="tapete_5350 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5350"
                              title="5350"></span><strong>No. 5350</strong></a><a href="tapete_5351"
                            class="tapete_5351 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5351"
                              title="5351"></span><strong>No. 5351</strong></a><a href="tapete_5352"
                            class="tapete_5352 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5352"
                              title="5352"></span><strong>No. 5352</strong></a><a href="tapete_5353"
                            class="tapete_5353 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5353"
                              title="5353"></span><strong>No. 5353</strong></a><a href="tapete_5354"
                            class="tapete_5354 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5354"
                              title="5354"></span><strong>No. 5354</strong></a><a href="tapete_5355"
                            class="tapete_5355 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5355"
                              title="5355"></span><strong>No. 5355</strong></a><a href="tapete_5356"
                            class="tapete_5356 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5356"
                              title="5356"></span><strong>No. 5356</strong></a><a href="tapete_5357"
                            class="tapete_5357 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5357"
                              title="5357"></span><strong>No. 5357</strong></a><a href="tapete_5358"
                            class="tapete_5358 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5358"
                              title="5358"></span><strong>No. 5358</strong></a><a href="tapete_5359"
                            class="tapete_5359 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5359"
                              title="5359"></span><strong>No. 5359</strong></a></li>
                        <li><a href="tapete_5360" class="tapete_5360 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5360" title="5360"></span><strong>No. 5360</strong></a><a href="tapete_5361"
                            class="tapete_5361 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5361"
                              title="5361"></span><strong>No. 5361</strong></a><a href="tapete_5362"
                            class="tapete_5362 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5362"
                              title="5362"></span><strong>No. 5362</strong></a><a href="tapete_5363"
                            class="tapete_5363 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5363"
                              title="5363"></span><strong>No. 5363</strong></a><a href="tapete_5364"
                            class="tapete_5364 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5364"
                              title="5364"></span><strong>No. 5364</strong></a><a href="tapete_5365"
                            class="tapete_5365 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5365"
                              title="5365"></span><strong>No. 5365</strong></a><a href="tapete_5366"
                            class="tapete_5366 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5366"
                              title="5366"></span><strong>No. 5366</strong></a><a href="tapete_5367"
                            class="tapete_5367 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5367"
                              title="5367"></span><strong>No. 5367</strong></a><a href="tapete_5368"
                            class="tapete_5368 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5368"
                              title="5368"></span><strong>No. 5368</strong></a><a href="tapete_5369"
                            class="tapete_5369 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5369"
                              title="5369"></span><strong>No. 5369</strong></a><a href="tapete_5370"
                            class="tapete_5370 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5370"
                              title="5370"></span><strong>No. 5370</strong></a><a href="tapete_5371"
                            class="tapete_5371 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5371"
                              title="5371"></span><strong>No. 5371</strong></a></li>
                        <li><a href="tapete_5372" class="tapete_5372 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5372" title="5372"></span><strong>No. 5372</strong></a><a href="tapete_5373"
                            class="tapete_5373 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5373"
                              title="5373"></span><strong>No. 5373</strong></a><a href="tapete_5374"
                            class="tapete_5374 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5374"
                              title="5374"></span><strong>No. 5374</strong></a><a href="tapete_5375"
                            class="tapete_5375 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5375"
                              title="5375"></span><strong>No. 5375</strong></a><a href="tapete_5376"
                            class="tapete_5376 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5376"
                              title="5376"></span><strong>No. 5376</strong></a><a href="tapete_5377"
                            class="tapete_5377 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5377"
                              title="5377"></span><strong>No. 5377</strong></a><a href="tapete_5378"
                            class="tapete_5378 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5378"
                              title="5378"></span><strong>No. 5378</strong></a><a href="tapete_5379"
                            class="tapete_5379 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5379"
                              title="5379"></span><strong>No. 5379</strong></a><a href="tapete_5380"
                            class="tapete_5380 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5380"
                              title="5380"></span><strong>No. 5380</strong></a><a href="tapete_5381"
                            class="tapete_5381 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5381"
                              title="5381"></span><strong>No. 5381</strong></a><a href="tapete_5382"
                            class="tapete_5382 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5382"
                              title="5382"></span><strong>No. 5382</strong></a><a href="tapete_5383"
                            class="tapete_5383 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5383"
                              title="5383"></span><strong>No. 5383</strong></a></li>
                        <li><a href="tapete_5384" class="tapete_5384 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5384" title="5384"></span><strong>No. 5384</strong></a><a href="tapete_5385"
                            class="tapete_5385 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5385"
                              title="5385"></span><strong>No. 5385</strong></a><a href="tapete_5386"
                            class="tapete_5386 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5386"
                              title="5386"></span><strong>No. 5386</strong></a><a href="tapete_5387"
                            class="tapete_5387 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5387"
                              title="5387"></span><strong>No. 5387</strong></a><a href="tapete_5388"
                            class="tapete_5388 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5388"
                              title="5388"></span><strong>No. 5388</strong></a><a href="tapete_5389"
                            class="tapete_5389 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5389"
                              title="5389"></span><strong>No. 5389</strong></a><a href="tapete_5390"
                            class="tapete_5390 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5390"
                              title="5390"></span><strong>No. 5390</strong></a><a href="tapete_5391"
                            class="tapete_5391 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5391"
                              title="5391"></span><strong>No. 5391</strong></a><a href="tapete_5392"
                            class="tapete_5392 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5392"
                              title="5392"></span><strong>No. 5392</strong></a><a href="tapete_5393"
                            class="tapete_5393 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5393"
                              title="5393"></span><strong>No. 5393</strong></a><a href="tapete_5394"
                            class="tapete_5394 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5394"
                              title="5394"></span><strong>No. 5394</strong></a><a href="tapete_5395"
                            class="tapete_5395 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5395"
                              title="5395"></span><strong>No. 5395</strong></a></li>
                        <li><a href="tapete_5396" class="tapete_5396 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5396" title="5396"></span><strong>No. 5396</strong></a><a href="tapete_5397"
                            class="tapete_5397 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5397"
                              title="5397"></span><strong>No. 5397</strong></a><a href="tapete_5398"
                            class="tapete_5398 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5398"
                              title="5398"></span><strong>No. 5398</strong></a><a href="tapete_5399"
                            class="tapete_5399 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5399"
                              title="5399"></span><strong>No. 5399</strong></a><a href="tapete_5400"
                            class="tapete_5400 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5400"
                              title="5400"></span><strong>No. 5400</strong></a><a href="tapete_5401"
                            class="tapete_5401 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5401"
                              title="5401"></span><strong>No. 5401</strong></a><a href="tapete_5402"
                            class="tapete_5402 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5402"
                              title="5402"></span><strong>No. 5402</strong></a><a href="tapete_5403"
                            class="tapete_5403 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5403"
                              title="5403"></span><strong>No. 5403</strong></a><a href="tapete_5404"
                            class="tapete_5404 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5404"
                              title="5404"></span><strong>No. 5404</strong></a><a href="tapete_5405"
                            class="tapete_5405 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5405"
                              title="5405"></span><strong>No. 5405</strong></a><a href="tapete_5406"
                            class="tapete_5406 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5406"
                              title="5406"></span><strong>No. 5406</strong></a><a href="tapete_5407"
                            class="tapete_5407 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5407"
                              title="5407"></span><strong>No. 5407</strong></a></li>
                        <li><a href="tapete_5408" class="tapete_5408 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5408" title="5408"></span><strong>No. 5408</strong></a><a href="tapete_5409"
                            class="tapete_5409 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5409"
                              title="5409"></span><strong>No. 5409</strong></a><a href="tapete_5410"
                            class="tapete_5410 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5410"
                              title="5410"></span><strong>No. 5410</strong></a><a href="tapete_5411"
                            class="tapete_5411 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5411"
                              title="5411"></span><strong>No. 5411</strong></a><a href="tapete_5412"
                            class="tapete_5412 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5412"
                              title="5412"></span><strong>No. 5412</strong></a><a href="tapete_5413"
                            class="tapete_5413 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5413"
                              title="5413"></span><strong>No. 5413</strong></a><a href="tapete_5414"
                            class="tapete_5414 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5414"
                              title="5414"></span><strong>No. 5414</strong></a><a href="tapete_5415"
                            class="tapete_5415 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5415"
                              title="5415"></span><strong>No. 5415</strong></a><a href="tapete_5416"
                            class="tapete_5416 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5416"
                              title="5416"></span><strong>No. 5416</strong></a><a href="tapete_5417"
                            class="tapete_5417 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5417"
                              title="5417"></span><strong>No. 5417</strong></a><a href="tapete_5418"
                            class="tapete_5418 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5418"
                              title="5418"></span><strong>No. 5418</strong></a><a href="tapete_5419"
                            class="tapete_5419 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5419"
                              title="5419"></span><strong>No. 5419</strong></a></li>
                        <li><a href="tapete_5420" class="tapete_5420 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_5420" title="5420"></span><strong>No. 5420</strong></a><a href="tapete_5421"
                            class="tapete_5421 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5421"
                              title="5421"></span><strong>No. 5421</strong></a><a href="tapete_5422"
                            class="tapete_5422 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5422"
                              title="5422"></span><strong>No. 5422</strong></a><a href="tapete_5423"
                            class="tapete_5423 col-md-3 col-sm-3 col-xs-3"><span class="tapete_5423"
                              title="5423"></span><strong>No. 5423</strong></a></li>
                        <li><a href="tapete_7300" class="tapete_7300 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_7300" title="7300"></span><strong>No. 7300</strong></a><a href="tapete_7301"
                            class="tapete_7301 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7301"
                              title="7301"></span><strong>No. 7301</strong></a><a href="tapete_7302"
                            class="tapete_7302 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7302"
                              title="7302"></span><strong>No. 7302</strong></a><a href="tapete_7303"
                            class="tapete_7303 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7303"
                              title="7303"></span><strong>No. 7303</strong></a><a href="tapete_7304"
                            class="tapete_7304 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7304"
                              title="7304"></span><strong>No. 7304</strong></a><a href="tapete_7305"
                            class="tapete_7305 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7305"
                              title="7305"></span><strong>No. 7305</strong></a><a href="tapete_7306"
                            class="tapete_7306 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7306"
                              title="7306"></span><strong>No. 7306</strong></a><a href="tapete_7307"
                            class="tapete_7307 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7307"
                              title="7307"></span><strong>No. 7307</strong></a><a href="tapete_7308"
                            class="tapete_7308 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7308"
                              title="7308"></span><strong>No. 7308</strong></a><a href="tapete_7309"
                            class="tapete_7309 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7309"
                              title="7309"></span><strong>No. 7309</strong></a><a href="tapete_7310"
                            class="tapete_7310 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7310"
                              title="7310"></span><strong>No. 7310</strong></a><a href="tapete_7311"
                            class="tapete_7311 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7311"
                              title="7311"></span><strong>No. 7311</strong></a></li>
                        <li><a href="tapete_7312" class="tapete_7312 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_7312" title="7312"></span><strong>No. 7312</strong></a><a href="tapete_7313"
                            class="tapete_7313 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7313"
                              title="7313"></span><strong>No. 7313</strong></a><a href="tapete_7314"
                            class="tapete_7314 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7314"
                              title="7314"></span><strong>No. 7314</strong></a><a href="tapete_7315"
                            class="tapete_7315 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7315"
                              title="7315"></span><strong>No. 7315</strong></a><a href="tapete_7316"
                            class="tapete_7316 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7316"
                              title="7316"></span><strong>No. 7316</strong></a><a href="tapete_7317"
                            class="tapete_7317 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7317"
                              title="7317"></span><strong>No. 7317</strong></a><a href="tapete_7318"
                            class="tapete_7318 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7318"
                              title="7318"></span><strong>No. 7318</strong></a><a href="tapete_7319"
                            class="tapete_7319 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7319"
                              title="7319"></span><strong>No. 7319</strong></a><a href="tapete_7320"
                            class="tapete_7320 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7320"
                              title="7320"></span><strong>No. 7320</strong></a><a href="tapete_7321"
                            class="tapete_7321 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7321"
                              title="7321"></span><strong>No. 7321</strong></a><a href="tapete_7322"
                            class="tapete_7322 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7322"
                              title="7322"></span><strong>No. 7322</strong></a><a href="tapete_7323"
                            class="tapete_7323 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7323"
                              title="7323"></span><strong>No. 7323</strong></a></li>
                        <li><a href="tapete_7324" class="tapete_7324 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_7324" title="7324"></span><strong>No. 7324</strong></a><a href="tapete_7325"
                            class="tapete_7325 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7325"
                              title="7325"></span><strong>No. 7325</strong></a><a href="tapete_7326"
                            class="tapete_7326 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7326"
                              title="7326"></span><strong>No. 7326</strong></a><a href="tapete_7327"
                            class="tapete_7327 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7327"
                              title="7327"></span><strong>No. 7327</strong></a><a href="tapete_7328"
                            class="tapete_7328 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7328"
                              title="7328"></span><strong>No. 7328</strong></a><a href="tapete_7329"
                            class="tapete_7329 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7329"
                              title="7329"></span><strong>No. 7329</strong></a><a href="tapete_7330"
                            class="tapete_7330 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7330"
                              title="7330"></span><strong>No. 7330</strong></a><a href="tapete_7331"
                            class="tapete_7331 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7331"
                              title="7331"></span><strong>No. 7331</strong></a><a href="tapete_7332"
                            class="tapete_7332 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7332"
                              title="7332"></span><strong>No. 7332</strong></a><a href="tapete_7333"
                            class="tapete_7333 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7333"
                              title="7333"></span><strong>No. 7333</strong></a><a href="tapete_7334"
                            class="tapete_7334 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7334"
                              title="7334"></span><strong>No. 7334</strong></a><a href="tapete_7335"
                            class="tapete_7335 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7335"
                              title="7335"></span><strong>No. 7335</strong></a></li>
                        <li><a href="tapete_7336" class="tapete_7336 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_7336" title="7336"></span><strong>No. 7336</strong></a><a href="tapete_7337"
                            class="tapete_7337 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7337"
                              title="7337"></span><strong>No. 7337</strong></a><a href="tapete_7338"
                            class="tapete_7338 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7338"
                              title="7338"></span><strong>No. 7338</strong></a><a href="tapete_7339"
                            class="tapete_7339 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7339"
                              title="7339"></span><strong>No. 7339</strong></a><a href="tapete_7340"
                            class="tapete_7340 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7340"
                              title="7340"></span><strong>No. 7340</strong></a><a href="tapete_7341"
                            class="tapete_7341 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7341"
                              title="7341"></span><strong>No. 7341</strong></a><a href="tapete_7342"
                            class="tapete_7342 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7342"
                              title="7342"></span><strong>No. 7342</strong></a><a href="tapete_7343"
                            class="tapete_7343 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7343"
                              title="7343"></span><strong>No. 7343</strong></a><a href="tapete_7344"
                            class="tapete_7344 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7344"
                              title="7344"></span><strong>No. 7344</strong></a><a href="tapete_7345"
                            class="tapete_7345 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7345"
                              title="7345"></span><strong>No. 7345</strong></a><a href="tapete_7346"
                            class="tapete_7346 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7346"
                              title="7346"></span><strong>No. 7346</strong></a><a href="tapete_7347"
                            class="tapete_7347 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7347"
                              title="7347"></span><strong>No. 7347</strong></a></li>
                        <li><a href="tapete_7348" class="tapete_7348 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_7348" title="7348"></span><strong>No. 7348</strong></a><a href="tapete_7349"
                            class="tapete_7349 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7349"
                              title="7349"></span><strong>No. 7349</strong></a><a href="tapete_7350"
                            class="tapete_7350 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7350"
                              title="7350"></span><strong>No. 7350</strong></a><a href="tapete_7351"
                            class="tapete_7351 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7351"
                              title="7351"></span><strong>No. 7351</strong></a><a href="tapete_7352"
                            class="tapete_7352 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7352"
                              title="7352"></span><strong>No. 7352</strong></a><a href="tapete_7353"
                            class="tapete_7353 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7353"
                              title="7353"></span><strong>No. 7353</strong></a><a href="tapete_7354"
                            class="tapete_7354 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7354"
                              title="7354"></span><strong>No. 7354</strong></a><a href="tapete_7355"
                            class="tapete_7355 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7355"
                              title="7355"></span><strong>No. 7355</strong></a><a href="tapete_7356"
                            class="tapete_7356 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7356"
                              title="7356"></span><strong>No. 7356</strong></a><a href="tapete_7357"
                            class="tapete_7357 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7357"
                              title="7357"></span><strong>No. 7357</strong></a><a href="tapete_7358"
                            class="tapete_7358 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7358"
                              title="7358"></span><strong>No. 7358</strong></a><a href="tapete_7359"
                            class="tapete_7359 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7359"
                              title="7359"></span><strong>No. 7359</strong></a></li>
                        <li><a href="tapete_7360" class="tapete_7360 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_7360" title="7360"></span><strong>No. 7360</strong></a><a href="tapete_7361"
                            class="tapete_7361 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7361"
                              title="7361"></span><strong>No. 7361</strong></a><a href="tapete_7362"
                            class="tapete_7362 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7362"
                              title="7362"></span><strong>No. 7362</strong></a><a href="tapete_7363"
                            class="tapete_7363 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7363"
                              title="7363"></span><strong>No. 7363</strong></a><a href="tapete_7364"
                            class="tapete_7364 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7364"
                              title="7364"></span><strong>No. 7364</strong></a><a href="tapete_7365"
                            class="tapete_7365 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7365"
                              title="7365"></span><strong>No. 7365</strong></a><a href="tapete_7366"
                            class="tapete_7366 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7366"
                              title="7366"></span><strong>No. 7366</strong></a><a href="tapete_7367"
                            class="tapete_7367 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7367"
                              title="7367"></span><strong>No. 7367</strong></a><a href="tapete_7368"
                            class="tapete_7368 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7368"
                              title="7368"></span><strong>No. 7368</strong></a><a href="tapete_7369"
                            class="tapete_7369 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7369"
                              title="7369"></span><strong>No. 7369</strong></a><a href="tapete_7370"
                            class="tapete_7370 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7370"
                              title="7370"></span><strong>No. 7370</strong></a><a href="tapete_7371"
                            class="tapete_7371 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7371"
                              title="7371"></span><strong>No. 7371</strong></a></li>
                        <li><a href="tapete_7372" class="tapete_7372 col-md-3 col-sm-3 col-xs-3"><span
                              class="tapete_7372" title="5372"></span><strong>No. 7372</strong></a><a href="tapete_7373"
                            class="tapete_7373 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7373"
                              title="5373"></span><strong>No. 7373</strong></a><a href="tapete_7374"
                            class="tapete_7374 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7374"
                              title="5374"></span><strong>No. 7374</strong></a><a href="tapete_7375"
                            class="tapete_7375 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7375"
                              title="5375"></span><strong>No. 7375</strong></a><a href="tapete_7376"
                            class="tapete_7376 col-md-3 col-sm-3 col-xs-3"><span class="tapete_7376"
                              title="5376"></span><strong>No. 7376</strong></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="MyElement">
                    <div class="slider_vertical boden">
                      <div class="item"><img
                          src="/html_dummy_farbtoene_muster_v2/images/farbtoene_muster/wand/tapeten/raumbild.gif"
                          class="tapete_5300" alt="Color depiction" /></div>
                    </div>
                  </div>
                    href="https://www.farbdesigner.de" target="_blank" class="pull-right"><img
                      src="/html_dummy_farbtoene_muster_v1/images/farbtoene_muster/logo-farbdesigner.png"
                      alt="Color designer" /></a>
                  <div class="pull-left clear small mt20"><strong>Note on color shade depiction</strong><br> For
                    technical reasons, the color shade depiction on a monitor will differ from the original color
                    sample. For a reliable comparison, we recommend using an original color shade template. Brillux
                    Scala color samples can be ordered online from the sample service.</div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="glasgewebe2">Glass fabric</div>
              <div role="tabpanel" class="tab-pane" id="relief2">Relief</div>
              <div role="tabpanel" class="tab-pane" id="kreativ2">Creative</div><!-- close Tab Kreativ -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
  
@endsection