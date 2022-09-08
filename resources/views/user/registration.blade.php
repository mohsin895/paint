@extends('layout.front.master')
@section('content')

@php 
$colorcategory= App\Models\Category::where('module_id','2')->get();
@endphp

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

<div class="main-w3layouts wrapper registration-body">
@include('error.message')
		<h5 style="text-align:center">Creative New Account</h5>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{route('user.registration')}}" method="post">
                    @csrf
					<input class="text" type="text" name="name" placeholder="name" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text email" type="text" name="phone" placeholder="Phone" required="">
					<input class="text w3lpass" type="password" name="password" placeholder="Password" required="">
					<!-- <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required=""> -->
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" name="t_c" class="checkbox-login" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already Register? <a href="{{route('user.login')}}"> Login Now!</a></p>
			</div>
		</div>
		
	</div>


@endsection