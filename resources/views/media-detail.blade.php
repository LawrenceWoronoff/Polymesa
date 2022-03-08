@extends('layouts.master-layouts-landing')
@section('title')
    @lang('translation.Detail')
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body my-100-md">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="media-content">
                                <div class="media-detail-overlay text-white font-size-18 p-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <i class="fas fa-award me-2 hand-cursor" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Featured Media"></i>
                                            <span class="me-2 hand-cursor">Child</span>
                                            <span class="me-2 hand-cursor">Birds</span>
                                            <span class="me-2 hand-cursor">sea</span>
                                            <span class="me-2 hand-cursor">loneliness</span>
                                            <span class="me-2 hand-cursor">sadness</span>
                                            <span class="me-2 hand-cursor">reverie</span>
                                            <span class="me-2 hand-cursor">beach</span>
                                        </div>
                                        <div class="hand-cursor" style = "width: 35px; height: 35px; background:#574a4187; border-radius:50%;">
                                            <i class="fas fa-flag me-2 p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Report"></i>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ URL::asset('public/assets/images/gallery/1.jpg') }}" class="img-fluid w-100" alt="Responsive image">
                            </div>
                            
                            <div class="comment-section d-none d-md-block">
                                <div class="d-flex pb-3 pt-4 add_comment">
                                    <img src="{{ asset('public/assets/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <textarea class="form-control comment_text ms-4 w-100" placeholder="Add your comment ..."></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-2 fw-bold"><i class="fas fa-thumbs-up me-2"></i>Submit</button>    
                                </div>  
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">Elesemargrit <span class="comment-time">11 hours ago</span></p>
                                        <p>Van harte gefelicited met de EC!</p>
                                    </div>
                                </div>
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">rumanujannosdnow <span class="comment-time">13 hours ago</span></p>
                                        <p>I like this picture very much.</p>
                                    </div>
                                </div>
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">Longman <span class="comment-time">13 hours ago</span></p>
                                        <p>How beautiful it is. 👏👏👏</p>
                                    </div>
                                </div>
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">Singungung <span class="comment-time">1 day ago</span></p>
                                        <p>How slow am I?</p>
                                    </div>
                                </div>
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">Leopard <span class="comment-time">3 days ago</span></p>
                                        <p>I love nature image like this forest, river and sky.</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-light btn-rounded waves-effect waves-light px-4 py-1 fw-bold w-100">+97 more</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="ownder_section" class="d-flex py-4" style="border-bottom: solid 1px #d0d0d0">
                                <img src="{{ asset('public/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle avatar-md">
                                <div class="ms-4">
                                    <p class="mb-2 mt-2 font-size-18">Nemanja Djordjevic / 123 images</p>
                                    <button type="button" class="min-width-100 btn btn-soft-dark btn-rounded waves-effect waves-light px-4 py-1">Follow</button>
                                </div>
                            </div>
                            
                            <div id="rate_section" class="py-4" style="border-bottom: solid 1px #d0d0d0">
                                <button type="button" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-1 fw-bold"><i class="fas fa-thumbs-up me-2"></i>124</button>
                                <button type="button" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-1"><i class="far fa-bookmark"></i></button>
                                <button type="button" class="min-width-100 btn btn-soft-dark btn-rounded waves-effect waves-light px-4 py-1"><i class="fas fa-share-alt"></i></button>
                            </div>
                            
                            <div id="media_detail_info" class="mt-4 p-4 text-secondary" style="background: #f6f5fa">                                
                                <u><p class="mb-2 mt-2 font-size-18">Polymesa License</p></u>
                                <p class="m-0 font-size-16">No attribution required</p>
                                <p class="m-0 font-size-16">Free for commercial use</p>
                            </div>
                            <div id="download_section" class="py-4 mb-4" style="border-bottom: solid 1px #d0d0d0">
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light px-4 py-2 font-size-20"><i class="fas fa-download me-2"></i>Free Download</button>
                            </div>
                            <div id="media_detail_info" class="mt-4 p-4 text-secondary" style="background: #f6f5fa">
                                <i class="fas fa-camera me-2 font-size-20" style="color:#b3b3b3;"></i><span class="font-size-20 text-info">Nikon D7500</span>
                                <p class="mb-2 mt-2 font-size-16">Sigma 17-70mm F2.8-4 DC Macro OS HS....</p>
                                <p class="mb-4 font-size-16">62.00mm f/8.0 1/640s ISO 125</p>
                                <p class="mb-4" style="border-bottom: solid 1px #d0d0d0"></p>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Image type</p>
                                    <p class="m-0 font-size-18">JPG</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Resolution</p>
                                    <p class="m-0 font-size-18">5568x3712</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Published</p>
                                    <p class="m-0 font-size-18">Aug.4, 2021</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Category</p>
                                    <p class="m-0 text-info font-size-18">Nature/Landscapes</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Views</p>
                                    <p class="m-0 font-size-18">102387</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Downloads</p>
                                    <p class="m-0 font-size-18">84233</p>
                                </div>
                            </div>

                            <div class="comment-section d-sm-block d-md-none">
                                <div class="d-flex pb-3 pt-4 add_comment">
                                    <img src="{{ asset('public/assets/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <textarea class="form-control comment_text ms-4 w-100" placeholder="Add your comment ..."></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-2 fw-bold"><i class="fas fa-thumbs-up me-2"></i>Submit</button>    
                                </div>  
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">Elesemargrit <span class="comment-time">11 hours ago</span></p>
                                        <p>Van harte gefelicited met de EC!</p>
                                    </div>
                                </div>
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">rumanujannosdnow <span class="comment-time">13 hours ago</span></p>
                                        <p>I like this picture very much.</p>
                                    </div>
                                </div>
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">Longman <span class="comment-time">13 hours ago</span></p>
                                        <p>How beautiful it is. 👏👏👏</p>
                                    </div>
                                </div>
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">Singungung <span class="comment-time">1 day ago</span></p>
                                        <p>How slow am I?</p>
                                    </div>
                                </div>
                                <div class="comment-list d-flex py-2">
                                    <img src="{{ asset('public/assets/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle avatar-sm">
                                    <div class="ms-4">
                                        <p class="text-info mb-1">Leopard <span class="comment-time">3 days ago</span></p>
                                        <p>I love nature image like this forest, river and sky.</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-light btn-rounded waves-effect waves-light px-4 py-1 fw-bold w-100">+97 more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
