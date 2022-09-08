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
                    <li class="dropdown navbar-right">

                    </li>
                   
                </ul>
            </div>
        </div>



        <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Shopping Cart</b></h4>
                            </div>
                            <div class="col align-self-center text-right text-muted">{{ $userCartCount}} items</div>
                        </div>
                    </div>


                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userCart as $cart)
                            @php
                            $product = APp\Models\Product::find($cart->product_id);
                            @endphp
                            <tr>
                                <th scope="row"> <img class="phn-fix-media"
                                        src="{{asset('public/assets/images/product/'.$product->product_image)}}"
                                        alt="{{$product->product_name}}" class="img-fluid"></th>
                                <td>{{$cart->product_name}}</td>
                                <td>
                                    <div class="col">
                                        <a href="{{url('/cart/update-quantity/'.$cart->id.'/-1')}}">-</a><a href="#"
                                            class="border">{{$cart->quantity}}<input type="hidden"
                                                value="{{$cart->quantity}}" /></a><a
                                            href="{{url('/cart/update-quantity/'.$cart->id.'/1')}}">+</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="col">{{$gs->currency}}&nbsp;&nbsp; {{$cart->selling_price}} <span
                                            class="close">&#10005;</span></div>
                                </td>
                                <td>
                                    {{$gs->currency}}&nbsp;&nbsp;
                                    {{$cart->selling_price * $cart->quantity}}

                                </td>
                            </tr>
                            <?php $total_amount =  $total_amount + ($cart->selling_price*$cart->quantity); ?>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">Shirt</div>
                                <div class="row">Cotton T-shirt</div>
                            </div>
                            <div class="col">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div>
                            <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row main align-items-center col-md-12">
                            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/ba3tvGm.jpg"></div>
                            <div class="col-2">
                                <div class="row text-muted">Shirt</div>
                                <div class="row">Cotton T-shirt</div>
                            </div>
                            <div class="col-2">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div>
                            <div class="col-2">&euro; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">Shirt</div>
                                <div class="row">Cotton T-shirt</div>
                            </div>
                            <div class="col">
                                <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                            </div>
                            <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div> -->
                    <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span>
                    </div>
                </div>
                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-sm-6" style="padding-left:0;">Subtotal</div>
                        <div class="col-md-6 col-sm-6 text-right">{{$gs->currency}}&nbsp;&nbsp;
                            <?php echo $total_amount; ?></div>
                    </div>
                    @php
                    $totalVat = ($total_amount*$gs->vat)/100;
                    @endphp

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

                    <a href="{{route('user.checkout')}}"> <button class="btn" type="submit" style="width:100%">CHECKOUT</button></a>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection