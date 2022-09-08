@extends('layout.front.master')
@section('css')

@endsection
@section('content')

<div id="c39433" class="frame frame-default frame-type-list frame-layout-0">


    <div class="breadcrumb" id="breadcrumb-wrap">
        <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">

            <li property='itemListElement' typeof='ListItem'><a id='breadcrumb-link-6158' class='inactive' href='#'
                    property='item' typeof='WebPage'><span property='name'>Checkout</span></a>
                <meta property='position' content='1'>
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
<div class="container">
    <div class="col-12 col-lg-12 col-sm-12 col-md-12">
        <form>
            <div class="col-12 col-lg-6 col-sm-12 col-md-6">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="name">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputPassword1"
                        placeholder="mobile">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">District</label>
                    <input type="text" class="form-control" name="district" id="exampleInputPassword1"
                        placeholder="district">
                </div>




                <div class="form-group">
                    <label for="exampleInputPassword1">Upazalla</label>
                    <input type="text" class="form-control" name="upazalla" id="exampleInputPassword1"
                        placeholder="upazalla">
                </div>



                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <textarea type="text" class="form-control" name="upazalla" id="exampleInputPassword1"
                        placeholder="address"></textarea>
                </div>



            </div>


            <div class="col-12 col-lg-6 col-sm-12 col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        Product Details
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>

            </div>

        </form>


    </div>




</div>






@endsection

@section('js')

@endsection