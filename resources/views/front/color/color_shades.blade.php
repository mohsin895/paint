@extends('layout.front.master')
@section('content')


@php 
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp

  <!-- TS: lib.breadcrumbnavigation BEGIN -->
  <div class="breadcrumb"><ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList"><li property="itemListElement" typeof="ListItem"><a href="/color-shades-samples/" target="_self" property="item" typeof="WebPage"><span property="name">Color shades<span></a><meta property="position" content="1"></li><li class="active" property="itemListElement" typeof="ListItem"><span property="name">Color shades<span><meta property="position" content="2"></li></ul></div>
  <!-- TS: lib.footercompanynavigation END -->
  
  <!-- Backend Layout:Kopfbereich BEGIN -->
  
	<div class="flexslider content"><ul id="c52753" class="slides"><li>
        
  <img src="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1200w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w"
                sizes="100vw" alt="Floor">
    </li></ul></div>

  <!-- Backend Layout: Kopfbereich END -->
  
  <!-- TS: lib.subnavigationwithankernav BEGIN -->
  
  <!-- TS: lib.subnavigationwithankernav END -->
  
  <!-- Backend Layout: Inhaltsbereich BEGIN -->
  <!--TYPO3SEARCH_begin-->
  
	
    

            <div id="c52754" class="frame frame-default frame-type-html frame-layout-0">
                
                
                    



                
                
                

    <!-- Subnavigation --><div class="subnavigation">
      <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs" data-example-id="togglable-tabs">
      <div class="grey">
        <ul id="meineTabs" class="nav nav-tabs grey container" role="tablist">
        <li class="active hidden-xs"><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>

                    <li class="hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}">Search</a></li>
        </ul>
    </div>
  </div>

         
<ul class="nav nav-tabs hidden-sm hidden-md hidden-lg ">
  <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Selection <span class="caret"></span></a><ul class="dropdown-menu">
  <li class="active hidden-xs"><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>

                    <li class="hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}">Search</a></li>
    </ul>
  </li>
</ul>


</div><!-- close Subnavigation -->
  
                    



                
            </div>

        


    

            <div id="c64423" class="frame frame-default frame-type-html frame-layout-0">
                
                  
            </div>
       <div id="c52751" class="frame frame-default frame-type-html frame-layout-0">
                
                
                    



                
                
                

    <div id="bx-color-scala-wrap">

<noscript>
<div class="container">
  <div class="error">
  <h3>JavaScript deactivated</h3>
  <p>Please activate JavaScript to use the functions on this page.</p>
   </div>
</div>
</noscript><!-----------------------------------------------------------------------------------------------
                     Darstellung Desktop & Tablet
    ------------------------------------------------------------------------------------------------><div class="container mt30 farbtoene-muster">
        <div class="row"><!-- Tabs-Navs --> <!--<div class="col-md-6 col-sm-6"><div class="wrapper">
    
      <ul class="nav nav-tabs warenkorb" role="tablist">
                <li role="presentation" class="active"><a href="#scala" role="tab" data-toggle="tab">Scala</a></li>
                <li role="presentation"><a href="#stilkarten" role="tab" data-toggle="tab">Stilkarten</a></li>
                <li role="presentation"><a href="#ral" role="tab" data-toggle="tab">RAL</a></li>
                <li role="presentation"><a href="#farbwelten" role="tab" data-toggle="tab">Farbwelten</a></li>
                
              </ul>
                 
                </div></div>
              --> <!-- Tab-Inhalte --> <!-- SCALA --><div class="col-xs-12"><strong>Select a color shade</strong></div>
              <div class="tab-content warenkorb">
                
                
<div role="tabpanel" class="tab-pane active" id="scala">

<div class="col-md-6 col-sm-6 col-xs-12">
          
      
<div class="farbwahl farbtoene_muster" style="margin-top:0px">
 <div id="bx-color-scala" style="display:none;">
  <div class="farbtoene_muster" >
    <div style="margin-left:10px;">Please select first the color shade family:</div>

    
    @foreach($color_category as $row)
                                                <a id="scala{{$row->id}}" href="#"
                                            class="scalafamtrigger col-md-2 col-sm-3 col-xs-3"><span
                                                style="background-color:{{$row->color_code}}" data-original-title="{{$row->id}}.xx.xx"
                                                class="scala_{{$row->id}}" data-placement="bottom" title=""></span><strong>{{$row->name}}</strong></a>
                                                @endforeach
        
   </div>
  </div>
                  
</div>
         

</div>
                  
                  
<div id="bx-color-scala-previewimages" class="col-md-6 col-sm-6 col-xs-12">
            <div class="MyElement">
                  
                <div class="slider_vertical">
                  
                @foreach($color_shade_image as $image)
                                    <div class="item bxcolorpreviewarea">
                                        
                                    
                                    <img src="{{asset('public/assets/images/colorShadeImage/'.$image->color_shade_image)}}" alt="Color depiction" />
                                        
                                        </div>
                                            @endforeach
                </div>

                <div class="thumbnails_vertical">
                 
                @foreach($color_shade_image as $image)
                                    <div class="item bxcolorpreviewarea"><img
                                            src="{{asset('public/assets/images/colorShadeImage/'.$image->color_shade_image)}}"
                                            alt="Color depiction" /></div>
                                            @endforeach>
                </div>
            </div>
            




    



<div class="pull-left">
                 
        <div id='colorpreviewbox' class="copy wrapper row mb20 mt20" style="display:none;">
                    <div class="farbwahl farbtoene_muster" style="margin: 0px;"> <p href="#" class="col-md-3 col-sm-4 col-xs-4"><span class="bxcolorpreviewarea" title=""></span></p></div>
                    <div class="col-md-9 col-sm-8"><strong>Your selection</strong><br /><span class='bxcolorpreviewtitle'></span><br /><p><span id='bxcolorpreviewfdlink'></span></p>
          
          </div>
                </div>


                  <hr /><!--<div class="socialmedia"><a href="#" title="Favorit hinzufügen"><i class="fa fa-star-o"></i></a> <a href="#" title="Per E-Mail verschicken"><i class="fa fa-envelope-o"></i></a> <a href="#" title="Auf Facebook teilen"><i class="fa fa-facebook"></i></a> <a href="#" title="Auf Twitter teilen"><i class="fa fa-twitter"></i></a> <a href="#" title="Auf Google+ teilen"><i class="fa fa-google-plus"></i></a> <span class="popover-content hide"> <span class="h2">Produktmanagement Farben</span> <i class="fa fa-envelope-o"></i> <a href="mailto:k.willers@brillux.de"> k.willers@brillux.de</a><br>
                    <i class="fa fa-phone"></i> <a href="tel:+492517188792">+49 251 7188-792</a></span></div>--> <a href="https://www.farbdesigner.de" target="_blank" class="pull-right"> </a><div class="pull-left clear small mt20"><strong></strong><br> For technical reasons, the color shade depiction on a monitor will differ from the original color sample. For a reliable comparison, we recommend using an original color shade template. {{$gs->website_name}}color samples can be ordered online from the <a href="?id=8034"></a>.</div>
                </div>









           

            </div>
                  
                  
                </div>

      
              </div><!-- close SCALA --></div>
    </div><!-- close Farbtöne --></div>

<style type="text/css">
  
@media (max-width: 768px) {
  #bx-color-scala-wrap {margin:0px 20px;}
  
}
</style>



                
                    



                
                
                    



                
            </div>

        


    

            <div id="c52750" class="frame frame-default frame-type-html frame-layout-0">
                
                
                    



                
                
            

                
                    



                
                
                    



                
            </div>

        



  <!--TYPO3SEARCH_end-->
  <!-- Backend Layout: Inhaltsbereich END -->
  <script>
    var bxscar = new Array();
    @foreach($color_category as $category)
    
    @foreach($category['color'] as $co)
  
    bxscar['{{$co['category_id']}}.{{$co['category_id']}}.{{$co['id']}}'] = {rgb:'({{$co['rgb']}})',cmyk:'(0,0,10,6)',hex:'#e9e7e1',ral:'',hbz:'82,3',pg:'33'};
 @endforeach
@endforeach

    

$(document).ready(function(){
			
            var action = decodeURIComponent($(document).getUrlParam("show"));
            var pid  = decodeURIComponent($(document).getUrlParam("id"));
            var colorhtmloutput = "";
            //create empty lang array if not defined
        
            //erlaubte zeichen: zahlen, buchstaben, punkte, minus, unterstrich
            if(action!="null" && action!=null && action.length>0 && action!="overview") {
                action =  action.replace(/[^0-9a-zA-Z\-\.\_]+/g, '');
                if(typeof scalafamlang == "undefined") {
                    colorhtmloutput = $("#bx-color-scala" ).scalaFamilyView({action:action,colorlist: bxscar,pid:pid});
                } else {
                    colorhtmloutput = $("#bx-color-scala" ).scalaFamilyView({action:action,colorlist: bxscar,pid:pid,ll:scalafamlang});
                }
        
                $("#bx-color-scala").html("<div class='bx-color-scala-inner'>"+colorhtmloutput+"<div class='invclear'>&nbsp;</div></div>")
            } 
                
            $("#bx-color-scala").show();
            
            //inital trigger links
            $('.scalafamtrigger').click(function(){
                var scalafam  = ($(this).attr('id').replace("scala",""));	
                document.location.href = getScalaFamilyViewLink(scalafam,pid);
            });
        
        });

    </script>


<style>
@foreach($color_category as $row)
span.scala_{{$row->id}}, img.scala_{{$row->id}} { background-color: {{$row->color_code}}; color:{{$row->color_code}};}
@endforeach
    </style>
  

@endsection