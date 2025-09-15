@extends("content")


@section("content")
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5 h-100">
            <div class="col-12 pt-lg-5   d-flex align-items-center justify-content-center h-100">
                <div class="text-center d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 text-white animated zoomIn">{{__("index.blog objava")}}</h1>
                        <a href="/" class="h5 text-white">{{__("index.pocetna")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/blog" class="h5 text-white">{{__("index.blog")}}</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/kontakt" class="h5 text-white">{{__("index.blog objava")}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                               placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <blog-post :post="{{json_encode($post)}}" :blog_categories="{{json_encode($blogCategories)}}" locale="{{app()->getLocale()}}" :translate="@js(__('index'))"> </blog-post>

    @include("sections.insurances")
@endsection
