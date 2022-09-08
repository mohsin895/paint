@if(empty($row->id))
<div class="modal fade" id="kt_modal_colorShade" tabindex="-1" aria-hidden="true">
    @else
    <div class="modal fade" id="kt_modal_colorShade_edit{{$row->id}}" tabindex="-1" aria-hidden="true">
        @endif
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" method="post" @if(empty($row->id)) action="{{route('admin.colorShade.insert')}}" @else
                    action="{{route('admin.colorShade.insert',$row->id)}}" @endif id="kt_modal_colorShade_form"
                    enctype="multipart/form-data">
                    @csrf
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_colorShade_header">
                        <!--begin::Modal title-->
                        <h2>@if(empty($row->id)){{$add_title}} @else {{$edit_title}} @endif</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_colorShade_scroll" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_modal_colorShade_header"
                            data-kt-scroll-wrappers="#kt_modal_colorShade_scroll" data-kt-scroll-offset="300px">


                            <!--end::Input group-->

                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                    <span class="required">Module Name</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        title="Your payment statements may very based on selected country"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="Module"
                                    data-kt-ecommerce-order-filter="module" name="category_id" required>
                                    <option>Select Module Name</option>
                                    @foreach($colorCategory as $cat)
                                    <option value="{{$cat->id}}" @if(empty($row->id)) @else @if($row->category_id ==
                                        $cat->id) selected="" @endif @endif>{{$cat->name}}</option>
                                    @endforeach


                                </select>
                                <!--end::Select-->
                            </div>


                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Color Shade Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="name"
                                    @if(empty($row->id)) @else value="{{$row->name}}" @endif required />
                                <!--end::Input-->
                            </div>

                            
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Color Shade Color Code</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="color_code"
                                    @if(empty($row->id)) @else value="{{$row->color_code}}" @endif required />
                                <!--end::Input-->
                            </div>
                            
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Color Shade RGB</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="rgb"
                                    @if(empty($row->id)) @else value="{{$row->rgb}}" @endif required />
                                <!--end::Input-->
                            </div>


                            
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Color Shade CMYK</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="cmyk"
                                    @if(empty($row->id)) @else value="{{$row->cmyk}}" @endif required />
                                <!--end::Input-->
                            </div>

                            
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Color Shade HBW</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" name="hbw"
                                    @if(empty($row->id)) @else value="{{$row->hbw}}" @endif required />
                                <!--end::Input-->
                            </div>

                       


                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_colorShade_module_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>