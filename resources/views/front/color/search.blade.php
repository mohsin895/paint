@extends('layout.front.master')
@section('content')

@php 
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp
<div class="flexslider content">


<ul class="slides">


  <li>





  <img src="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1200w,{{asset('public/assets/fileadmin/_processed_/3/a/csm_abb-farbtoene-muster-boden_62eed88761.jpg')}} 1600w"
                sizes="100vw" alt="Floor">








  </li>


</ul>
</div>

<!-- Backend Layout: Kopfbereich END -->

<!-- TS: lib.subnavigationwithankernav BEGIN -->

<!-- TS: lib.subnavigationwithankernav END -->

<!-- Backend Layout: Inhaltsbereich BEGIN -->
<!--TYPO3SEARCH_begin-->


<div id="c52716" class="frame frame-default frame-type-html frame-layout-0">
<!-- Subnavigation -->
<div class="subnavigation">
  <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs"
    data-example-id="togglable-tabs">
    <div class="grey">
      <ul id="meineTabs" class="nav nav-tabs grey container" role="tablist">
        <li class="dropdown navbar-right">
          <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-square-o"></i></a>
   -->
        </li>
        <li class=" hidden-xs"><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>

        <li class=" active hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}"></i> Search</a></li>
        <!-- <li class="hidden-xs"><a href="/color-shades-samples/sample-service/">Sample service</a></li> -->
      </ul>
    </div>
  </div>
  <ul class="nav nav-tabs hidden-sm hidden-md hidden-lg ">
    <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"
        role="button" aria-haspopup="true" aria-expanded="false">Selection <span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li class=" hidden-xs"><a href="{{url('color-shades/color-shades')}}"
                                    title="Color Shades">Color Shades</a></li>
                            <li><a href="{{url('color-shades/wall')}}"
                                    title="Wall">Wall</a></li>

                                    
                            <li><a href="{{url('color-shades/floor')}}"
                                    title="Floor">Floor</a></li>

        <li class="active hidden-xs"><a href="{{url('color-shades-seacrh/color-shade-search')}}">
            Search</a></li>
   
      </ul>
    </li>
  </ul>
</div><!-- close Subnavigation -->
</div>


<div id="c52714" class="frame frame-default frame-type-list frame-layout-0">
<div class="container">
  <div class="bxpanel3">
    <div class="col-xs-12">
      <p>First select the desired product group and the product, as required. Then enter a
        color designation, e.g. 09.21.12, 5010, S 1050-Y40R, Bordeaux, etc., and start the search. The color
        card is to be selected in the next step.
      </p>
    </div>
    <div class="clearfix"></div>
  </div>

  <noscript>
    <div class="row">
      <div class="bg-danger">
        <h3>Please activate JavaScript</h3>
        <p>JavaScript must be activated in your browser to use the color shade search
          function. JavaScript is a script language for websites. This function is deactivated in your browser.
          Please activate this function in your browser to use the color shade search function.
        </p>
      </div>
    </div>
  </noscript>






  <div>&nbsp;</div>


  <div class="bxpanel farbtonsuche-formular-container clear">

    <form action="{{url('color-shades-seacrh/color-shade-search/color-serach')}}" class="farbtonsuche-formular" 
       method="post">
       @csrf


      <div  class="fsearchformcol col-xs-12 col-md-6">
        <label class="farbtonsuche-label" for="prodGrp">Product group*</label>
        <select tabindex="1"  class="select1 farbtonsuche-select" name="category_id" id="category_id"
        >
          @foreach($color_shade_category as $cat)
          <option value="{{$cat->id}}">{{$cat->category_name}}</option>
          @endforeach
        </select>
      </div>
      <div  class="fsearchformcol col-xs-12 col-md-6">
        <label  class="farbtonsuche-label" for="produkt">Product&nbsp;</label>
        <div >
          <select tabindex="1" name="subcategory_id"  id="subcategory_id">
            <option value="2">All</option>
          
          </select>
        </div>
      </div>
      <div id="bxsectioncolorname" class="fsearchformcol col-xs-12 col-md-6 clearfix">
        <div class="form-group has-feedback">
          <label class="farbtonsuche-label" for="farbtonName">Color *&nbsp;</label>
          <input tabindex="3" id="farbtonName" name="color"
            class="form-control hasclear farbtonsuche-text textfield1" type="text" size="30" maxlength="100"
            value="" style="  border: 1px solid #d5d5d5; 
     border-radius: 0; 
     background-color: #fff; 
     border: 1px solid #ccc; 
     line-height: 35px; 
     padding: 0 0 0 9px; 
    border-radius: 0;
     width: 100%;"/>
        </div>
      </div>
      <div id="bxsectioncollection" class="fsearchformcol col-xs-12 col-md-6">
        <label id="collectionlabel" class="farbtonsuche-label" for="collectionId">Color Code&nbsp;</label>
        <div id="collectionSelect"><select tabindex="4" name="collectionId" class="select1 farbtonsuche-select"
            id="collectionId">
            <option value="0">All</option>
            @foreach($product as $pro)
            <option value="{{$pro->id}}">{{$pro->color_code}}</option>
            @endforeach
          </select></div>
      </div>
      <div class="col-xs-12">
        <div class="btn-right-wrap">
          <button type="submit">Start new
            search <i class="fa fa-angle-right"></i></button></div>
      </div>
      <div class="clearfix">&nbsp;</div>
    </form>
  </div>
</div>
﻿

</div>





<script type="text/javascript">
$(function() {
    $(document).on('change', '#category_id', function() {
      $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

        var category_id = $(this).val();
  

        $.ajax({
            url: "{{route('user.get_subcategory')}}",
            type: "GET",
            data: {
                category_id: category_id
            },
            success: function(data) {
                var html = '<option value="">Select SubCategory</option>';
                $.each(data, function(key, v) {
                    html += '<option value ="' + v.id + '"  data-name="' + v
                        .subcat_name + '">' + v.subcat_name + '</option>';
                });
                $('#subcategory_id').html(html);
            }
        });
    });
});
</script>


@endsection