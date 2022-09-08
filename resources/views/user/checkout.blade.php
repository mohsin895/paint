@extends('layout.front.master')
@section('content')


@php
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp

<?php $total_amount = 0;  ?>

<!-- TS: lib.breadcrumbnavigation BEGIN -->
<div class="breadcrumb">
    <ul class="container" vocab="http://schema.org/" typeof="BreadcrumbList">
       
    </ul>
</div>
<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->

<div class="flexslider content">


    <ul class="slides">


        <li>

            <img src="{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_1c398223e0.jpg')}}"
                srcset="{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_1c398223e0.jpg')}} 1600w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_43beaa20ca.jpg')}} 350w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_38deff2649.jpg')}} 480w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_72aa32522a.jpg')}} 767w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_7959b359de.jpg')}} 992w,{{asset('public/assets/fileadmin/_processed_/9/5/csm_slider-brillux-standardgrafik_caa208a7ca.jpg')}} 1200w,{{asset('public/assets/fileadmin/images/dummy/slider-brillux-standardgrafik.jpg')}} 1600w"
                sizes="100vw" alt="Color shades">

        </li>


    </ul>
</div>


<div id="c52754" class="frame frame-default frame-type-html frame-layout-0">

    <div class="subnavigation">
        <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs"
            data-example-id="togglable-tabs">
            <div class="grey">
                <ul id="meineTabs" class="nav nav-tabs grey container" role="tablist">
                    </ul>
            </div>
        </div>



        <div class="card">
            <div class="row">
                <form method="post" action="{{route('user.checkout')}}">
                    @csrf
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Shopping Address</b></h4>
                            </div>
                            <div class="col align-self-center text-right text-muted">{{ $userCartCount}} items</div>
                        </div>
                    </div>


                    <table class="table table-responsive">

                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="user_name" readonly value="{{Auth::user()->name}}">

                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="user_email" readonly
                                            value="{{Auth::user()->email}}">

                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="text" class="form-control" name="phone"  value="{{Auth::user()->phone}}" placeholder="Enter Your District">

                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Your Address</label>
                                        <textarea id="w3review" name="address" class="form-control" placeholder="Enter Your Address" rows="4" cols="50"></textarea>                </div>

                                </td>
                            </tr>


                        </tbody>
                    </table>

                    <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span>
                    </div>
                </div>

                @foreach($userCart as $cart)
                @php
                $product = APP\Models\Product::find($cart->product_id);
                @endphp

                <?php $total_amount =  $total_amount + ($cart->selling_price*$cart->quantity); ?>
                @endforeach
                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Order Summary</b></h5>
                    </div>
                    <hr>
                    @php 
                        $totalVat = ($total_amount*$gs->vat)/100;
                    @endphp
                    <div class="row">
                        <div class="col-md-6 col-sm-6" style="padding-left:0;">Subtotal</div>
                        <div class="col-md-6 col-sm-6 text-right">{{$gs->currency}}&nbsp;&nbsp;
                            <?php echo $total_amount; ?></div>
                            <input type="hidden" class="form-control" name="subtotal"  value=" <?php echo $total_amount; ?>" >
                            <input type="hidden" class="form-control" name="vat"  value=" {{$totalVat}}" >
                            <input type="hidden" class="form-control" name="shipping_charge"  value=" <?php echo $gs->shipping_charge; ?>" >
                            <input type="hidden" class="form-control" name="paybale_total"  value=" <?php echo $total_amount + $totalVat + $gs->shipping_charge; ?>" >
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6" style="padding-left:0;">vat</div>
                        <div class="col-md-6 col-sm-6 text-right">{{$gs->currency}}&nbsp;&nbsp;
                            {{$totalVat}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" style="padding-left:0;">Shipping Charge</div>
                        <div class="col-md-6 col-sm-6 text-right">{{$gs->currency}}&nbsp;&nbsp;
                            {{$gs->shipping_charge}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" style="padding-left:0;">Grand Total</div>
                        <div class="col-md-6 col-sm-6 text-right">{{$gs->currency}}&nbsp;&nbsp;
                            <?php echo $total_amount + $totalVat + $gs->shipping_charge; ?></div>
                    </div>

                    <button class="btn" type="submit" style="width:100%">CHECKOUT</button>
                </div>
                </form>
            </div>

        </div>
        @endsection