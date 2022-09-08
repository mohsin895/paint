@extends('layout.front.master')
@section('content')
<style>
     @media print {
            /* * {
                font-size:12px;
                line-height: 20px;
            }
            td,th {padding: 5px 0;} */

            .hidden-print {
                display: none !important;
            }

            /* @page { margin: 0; } body { margin: 0.5cm; margin-bottom:1.6cm; }  */
        }
    </style>

    </style>


@php
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp

<?php $total_amount = 0;  ?>

<!-- TS: lib.breadcrumbnavigation BEGIN -->
<div class="breadcrumb">
    
</div>
<!-- TS: lib.footercompanynavigation END -->

<!-- Backend Layout:Kopfbereich BEGIN -->

<div class="flexslider content hidden-print">


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
        <div class="bs-example bs-example-tabs subnavigation farbtoene-muster hidden-xs hidden-print"
            data-example-id="togglable-tabs">
            <div class="grey">
                
            </div>
        </div>



        <div class="card mt-10">
            <div class="row">
                <div class="col-md-12 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Order Details</b></h4>
                            </div>
                            <div class="col align-self-center  text-muted text-center"> INVOICE</br>
                                
                            <span class="fs-2"> <span class="text-muted">Order
                                                            ID</span> #{{$orderDetails->random_order_id}}</span>
                            </div>


                            <div class="col align-self-center text-center  text-muted  "> 
                                
                            <span class="fs-2 text-center "> <span class="text-muted">
                                                    <img alt="Logo"
                                                        src="{{asset('public/assets/images/setting/'.$gs->site_logo)}}"
                                                        class="w-30" style="" /></br>
                                                    {{$gs->site_title}}, <br>{{$gs->mobile}}
                                                            </span></span>


<!--                                                             
                            <span class=" text-right col-6 col-lg-6 col-md-6 col-sm-6"> <span class="text-muted"><h2>{{$user->name}}</h2></br>
                                                            </span>Email: {{$user->email}}</br></span> -->
                            </div>


                            
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
                            @foreach($ordeProduct as $order)
                            <tr>
                                <th scope="row"> <img class="phn-fix-media"
                                        src=""
                                        alt="" class="img-fluid"></th>
                                <td>{{$order->product_name}}</td>
                               
                                <td>
                                    <div class="col">{{$order->quantity}} <span
                                            class="close">&#10005;</span></div>
                                </td>

                                <td>
                                    <div class="col">{{$gs->currency}}&nbsp;{{$order->selling_price}} <span
                                            class="close">&#10005;</span></div>
                                </td>
                                <td>
                                    {{$gs->currency}}&nbsp;&nbsp;{{$order->selling_price*$order->quantity}} 
                                  

                                </td>
                            </tr>
                            @endforeach


                            <tr>
                                <th scope="row"> <img class="phn-fix-media"
                                        src=""
                                        alt="" class="img-fluid"></th>
                                <td></td>
                               
                                <td>
                                    <div class="col"> <span
                                            class="close">&#10005;</span></div>
                                </td>

                                <td>
                                    <div class="col">Subtotal <span
                                            class="close">&#10005;</span></div>
                                </td>
                                <td>
                                    {{$gs->currency}}&nbsp;&nbsp;{{$orderDetails->subtotal}} 
                                  

                                </td>
                            </tr>
                            
                            <tr>
                                <th scope="row"> <img class="phn-fix-media"
                                        src=""
                                        alt="" class="img-fluid"></th>
                                <td></td>
                               
                                <td>
                                    <div class="col"> <span
                                            class="close">&#10005;</span></div>
                                </td>

                                <td>
                                    <div class="col">Vat <span
                                            class="close">&#10005;</span></div>
                                </td>
                                <td>
                                    {{$gs->currency}}&nbsp;&nbsp;{{$orderDetails->vat}} 
                                  

                                </td>
                            </tr>

                            
                            <tr>
                                <th scope="row"> <img class="phn-fix-media"
                                        src=""
                                        alt="" class="img-fluid"></th>
                                <td></td>
                               
                                <td>
                                    <div class="col"> <span
                                            class="close">&#10005;</span></div>
                                </td>

                                <td>
                                    <div class="col">Shipping Charge <span
                                            class="close">&#10005;</span></div>
                                </td>
                                <td>
                                    {{$gs->currency}}&nbsp;&nbsp;{{$orderDetails->shipping_charge}} 
                                  

                                </td>
                            </tr>

                            
                            <tr>
                                <th scope="row"> <img class="phn-fix-media"
                                        src=""
                                        alt="" class="img-fluid"></th>
                                <td></td>
                               
                                <td>
                                    <div class="col"> <span
                                            class="close">&#10005;</span></div>
                                </td>

                                <td>
                                    <div class="col">Payable total <span
                                            class="close">&#10005;</span></div>
                                </td>
                                <td>
                                    {{$gs->currency}}&nbsp;&nbsp;{{$orderDetails->paybale_total}} 
                                  

                                </td>
                            </tr>

                        </tbody>
                    </table>
                 
                    <div class="back-to-shop hidden-print"><a href="{{url('/')}}">&leftarrow;</a><span class="text-muted">Back to shop</span>
                    
                    <button type="button" class="btn btn-success my-1 me-12 text-right"
                                                    onclick="window.print();">Print Invoice</button>
                    </div>
                </div>
           
                
            </div>

        </div>
    </div>
</div>



      
        @endsection