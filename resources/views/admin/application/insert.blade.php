@extends('layout.admin.master')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->

                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.dashboard')}}" class="text-muted text-hover-primary">{{$title}}</a>
                    </li>
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('admin.application')}}" class="text-muted text-hover-primary">{{$view_title}}
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->

                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">@if(empty($id))<a href="{{route('admin.product.insert')}}"
                            class="text-muted text-hover-primary">{{$add_title}}</a> @else
                        {{$edit_title}}@endif</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->

            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Form-->
            <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" method="post"
                @if(empty($application->id)) action="{{route('admin.application.insert')}}" @else
                action="{{route('admin.application.insert',$application->id)}}" @endif enctype="multipart/form-data">
                @csrf
                <!--begin::Aside column-->

                <!--end::Aside column-->
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">@if(empty($application->id)){{$add_title}} @else
                                {{$edit_title}}@endif</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->

                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->

                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">

                                    <div class="d-flex flex-wrap gap-5">



                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label">Application Category</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <select class="form-select mb-2" name="category_id" id="category_id"
                                                    data-control="select2" data-allow-clear="true"
                                                    data-placeholder="Select an option">
                                                    <option></option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->id}}" @if(!empty($application->
                                                        id))@if($cat->id==$application->category_id) selected="" @endif
                                                        @else @endif>{{$cat->category_name}}</option>
                                                    @endforeach

                                                </select>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product Category.</div> -->
                                                <!--end::Description-->
                                            </div>


                                            



                                            <!--end::Input group-->
                                        </div>

                                        
                                        <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label"> Main Image</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-empty image-input-outline mb-3"
                                                            data-kt-image-input="true" style=@if(empty($application->
                                                            id))"background-image:
                                                            url(assets/media/svg/files/blank-image.svg)" @else
                                                            "background-image:
                                                            url({{asset('public/assets/images/application/'.$application->application_image8)}})"@endif>
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper " style="width:400px;height:250px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary  bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="application_image8"
                                                                    accept=".png, .jpg, .jpeg, .webp" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product thumbnail image.
                                                            Only *.png, *.jpg and *.jpeg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product  Application Image.</div> -->
                                                <!--end::Description-->
                                            </div>

                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Short Description Title</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea type="text" name="main_header" class="form-control mb-2">  @if(empty($application->id))  @else
                                            {{$application->main_header}} @endif</textarea>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">A product name is required and recommended to
                                                be unique.</div>
                                            <!--end::Description-->
                                        </div>

                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label">Short Description </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea type="text" name="main_description" class="form-control mb-2">  @if(empty($application->id))  @else
                                            {{$application->main_description}} @endif</textarea>
                                            <!--end::Input-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">A product name is required and recommended to
                                                be unique.</div>
                                            <!--end::Description-->
                                        </div>
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label">Application Image</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-empty image-input-outline mb-3"
                                                            data-kt-image-input="true" style=@if(empty($application->
                                                            id))"background-image:
                                                            url(assets/media/svg/files/blank-image.svg)" @else
                                                            "background-image:
                                                            url({{asset('public/assets/images/application/'.$application->application_image1)}})"@endif>
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="application_image1"
                                                                    accept=".png, .jpg, .jpeg,webp" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product thumbnail image.
                                                            Only *.png, *.jpg and *.jpeg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product Application Image.</div> -->
                                                <!--end::Description-->
                                            </div>



                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label"> Application Image</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-empty image-input-outline mb-3"
                                                            data-kt-image-input="true" style=@if(empty($application->
                                                            id))"background-image:
                                                            url(assets/media/svg/files/blank-image.svg)" @else
                                                            "background-image:
                                                            url({{asset('public/assets/images/application/'.$application->application_image2)}})"@endif>
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="application_image2"
                                                                    accept=".png, .jpg, .jpeg,webp" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product thumbnail image.
                                                            Only *.png, *.jpg and *.jpeg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product  Application Image.</div> -->
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label">Application Image</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-empty image-input-outline mb-3"
                                                            data-kt-image-input="true" style=@if(empty($application->
                                                            id))"background-image:
                                                            url(assets/media/svg/files/blank-image.svg)" @else
                                                            "background-image:
                                                            url({{asset('public/assets/images/application/'.$application->application_image3)}})"@endif>
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="application_image3"
                                                                    accept=".png, .jpg, .jpeg,webp" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product thumbnail image.
                                                            Only *.png, *.jpg and *.jpeg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product Application Image.</div> -->
                                                <!--end::Description-->
                                            </div>



                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label"> Application Image</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-empty image-input-outline mb-3"
                                                            data-kt-image-input="true" style=@if(empty($application->
                                                            id))"background-image:
                                                            url(assets/media/svg/files/blank-image.svg)" @else
                                                            "background-image:
                                                            url({{asset('public/assets/images/application/'.$application->application_image4)}})"@endif>
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="application_image4"
                                                                    accept=".png, .jpg, .jpeg,webp" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product thumbnail image.
                                                            Only *.png, *.jpg and *.jpeg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product  Application Image.</div> -->
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label">Application Image</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-empty image-input-outline mb-3"
                                                            data-kt-image-input="true" style=@if(empty($application->
                                                            id))"background-image:
                                                            url(assets/media/svg/files/blank-image.svg)" @else
                                                            "background-image:
                                                            url({{asset('public/assets/images/application/'.$application->application_image5)}})"@endif>
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="application_image5"
                                                                    accept=".png, .jpg, .jpeg,webp" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product thumbnail image.
                                                            Only *.png, *.jpg and *.jpeg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product Application Image.</div> -->
                                                <!--end::Description-->
                                            </div>



                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label"> Application Image</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-empty image-input-outline mb-3"
                                                            data-kt-image-input="true" style=@if(empty($application->
                                                            id))"background-image:
                                                            url(assets/media/svg/files/blank-image.svg)" @else
                                                            "background-image:
                                                            url({{asset('public/assets/images/application/'.$application->application_image6)}})"@endif>
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="application_image6"
                                                                    accept=".png, .jpg, .jpeg,webp" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product thumbnail image.
                                                            Only *.png, *.jpg and *.jpeg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product  Application Image.</div> -->
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <div class="d-flex flex-wrap gap-5">
                                            <!--begin::Input group-->
                                            <div class="fv-row w-100 flex-md-root">
                                                <!--begin::Label-->
                                                <label class="required form-label">Application Image</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <div class="card card-flush py-4">
                                                    <!--begin::Card header-->
                                                    
                                                    <!--end::Card header-->
                                                    <!--begin::Card body-->
                                                    <div class="card-body text-center pt-0">
                                                        <!--begin::Image input-->
                                                        <div class="image-input image-input-empty image-input-outline mb-3"
                                                            data-kt-image-input="true" style=@if(empty($application->
                                                            id))"background-image:
                                                            url(assets/media/svg/files/blank-image.svg)" @else
                                                            "background-image:
                                                            url({{asset('public/assets/images/application/'.$application->application_image7)}})"@endif>
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="application_image7"
                                                                    accept=".png, .jpg, .jpeg,webp" />
                                                                <input type="hidden" name="avatar_remove" />
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                        <!--end::Image input-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fs-7">Set the product thumbnail image.
                                                            Only *.png, *.jpg and *.jpeg
                                                            image files are accepted</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <!-- <div class="text-muted fs-7">Set the product Application Image.</div> -->
                                                <!--end::Description-->
                                            </div>


                                            <!--end::Input group-->
                                        </div>
                                        <!--begin::Input group-->

                                        

                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Description Title</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <textarea type="text" name="long_header" class=" form-control mb-2">  @if(empty($application->id))  @else
                                            {{$application->long_header}} @endif</textarea>
                                            <!--end::Editor-->
                                        </div>

                                        
                                        <div>
                                            <!--begin::Label-->
                                            <label class="form-label">Description</label>
                                            <!--end::Label-->
                                            <!--begin::Editor-->
                                            <textarea type="text" name="long_description" class="ckeditor form-control mb-2">  @if(empty($application->id))  @else
                                            {{$application->long_description}} @endif</textarea>
                                            <!--end::Editor-->

                                        </div>




                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Card header-->
                                </div>


                                <!--end::General options-->
                                <!--begin::Media-->

                                <!--end::Media-->
                                <!--begin::Pricing-->

                                <!--end::Pricing-->
                            </div>
                        </div>
                        <!--end::Tab pane-->
                        <!--begin::Tab pane-->

                        <!--end::Tab pane-->
                    </div>
                    <!--end::Tab content-->
                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{route('admin.product')}}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>

                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Container-->
    </div>
    <!-- end::Post -->


    @endsection
