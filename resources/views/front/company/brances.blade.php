@extends('layout.front.master')
@section('content')
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
        <li property="itemListElement" typeof="ListItem"><a href="/company/" target="_self" property="item"
                typeof="WebPage"><span property="name">Company<span></a>
            <meta property="position" content="1">
        </li>
        <li class="active" property="itemListElement" typeof="ListItem"><span property="name">Branches<span>
                    <meta property="position" content="2">
        </li>
    </ul>
</div>
<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->

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
<div class="subnavigation grey">
    <ul class="container nav navbar-nav sprungmarken_large">

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars"></i>Branches</a>
            <ul class="dropdown-menu">
                
            <li><a href="{{url('company/about-us')}}" title="About us">About us</a></li>
                            <li class="haschildren"><a href="{{url('company/brances')}}" title="Branches">Branches</a>
                                
                            </li>
                            <li><a href="{{url('company/news')}}" title="News">News & Blog</a></li>
                
        </ul>
        </li>
    </ul>
</div>
<!-- TS: lib.subnavigationwithankernav END -->

<!-- Backend Layout: Inhaltsbereich BEGIN -->
<!--TYPO3SEARCH_begin-->

<div class="container col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 text-center lead mb50 mt50">
<table class="table table-bordered">
  <thead class="">
    <tr style="background-color: #000;color: #fff;">
      <th scope="col">#</th>
      <th scope="col">Location</th>
      <th scope="col">Shop Owner</th>
      <th scope="col">Phone No.</th>
    </tr>
  </thead>
  <tbody>
      @foreach($branch as $row)
    <tr>
      <th >{{$loop->index+1}}</th>
      <td >{{$row->location}}</td>
      <td>{{$row->shop_owner}}</td>
      <td>{{$row->phone}}</td>
    </tr>

    @endforeach

  </tbody>
</table>

</div>




@endsection