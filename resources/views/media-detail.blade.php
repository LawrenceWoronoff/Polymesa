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
                                            @foreach(json_decode($media->taglist) as $tag)
                                            <span class="me-2 hand-cursor">{{$tag}}</span>
                                            @endforeach
                                        </div>
                                        <div class="hand-cursor" style = "width: 35px; height: 35px; background:#574a4187; border-radius:50%;">
                                            <i class="fas fa-flag me-2 p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Report"></i>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ URL::asset('public/assets/medias'). '/'. $media->path }}" class="img-fluid w-100" alt="Responsive image">
                            </div>
                            
                            <div class="comment-section d-none d-md-block">
                                <div class="d-flex pb-3 pt-4 add_comment">
                                    <img src="{{ asset($media->user->avatar) }}" alt="" class="rounded-circle avatar-sm">
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
                            <div class="py-2 font-size-20"><a href="https://polymesa.com/{{$media->user->username}}">https://polymesa.com/{{$media->user->username}}</a></div>
                            <div id="ownder_section" class="d-flex py-2" style="border-bottom: solid 1px #d0d0d0">
                                <img src="{{ asset($media->user->avatar) }}" alt="" class="rounded-circle avatar-md">
                                <div class="ms-4">
                                    <p class="mb-2 mt-2 font-size-18">{{$media->user->lastname. ' '. $media->user->firstname}} / {{$media->user->uploaded}} images</p>
                                    <button type="button" class="min-width-100 btn btn-soft-dark btn-rounded waves-effect waves-light px-4 py-1">Follow</button>
                                </div>
                            </div>

                            <div id="rate_section" class="py-4" style="border-bottom: solid 1px #d0d0d0">
                                <button type="button" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-1 fw-bold"><i class="fas fa-thumbs-up me-2"></i>{{$media->liked}}</button>
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
                                @if($final_img_info['make'] != null)
                                <i class="fas fa-camera me-2 font-size-20" style="color:#b3b3b3;"></i><span class="font-size-20 text-info">{{$final_img_info['make']}}</span>
                                @endif
                                @if($final_img_info['model'] != null) 
                                <p class="mb-2 mt-2 font-size-16">{{$final_img_info['model']}}</p>
                                @endif
                                <p class="mb-4 font-size-16">
                                    @if($final_img_info['FocalLength'] != null) 
                                        {{$final_img_info['FocalLength']}}mm · 
                                    @endif
                                    @if($final_img_info['ApertureFNumber'] != null)
                                        {{$final_img_info['ApertureFNumber']}} · 
                                    @endif
                                    @if($final_img_info['ShutterSpeedValue'] != null)
                                        1/{{$final_img_info['ShutterSpeedValue']}}s · 
                                    @endif
                                    @if($final_img_info['ISO'] != null)
                                        ISO {{$final_img_info['ISO']}}
                                    @endif
                                </p>
                                <p class="mb-4" style="border-bottom: solid 1px #d0d0d0"></p>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Image type</p>
                                    <p class="m-0 font-size-18">{{$final_img_info['fileExtension']}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Resolution</p>
                                    <p class="m-0 font-size-18">{{$final_img_info['width']}} x {{$final_img_info['height']}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Published</p>
                                    <p class="m-0 font-size-18">{{date('M.d, Y', strtotime($media->created_at))}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Category</p>
                                    <p class="m-0 text-info font-size-18">{{$media->category->name}}/{{$media->subcategory->name}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Views</p>
                                    <p class="m-0 font-size-18">{{$media->views}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Downloads</p>
                                    <p class="m-0 font-size-18">{{$media->downloads}}</p>
                                </div>
                            </div>

                            <div class="comment-section d-sm-block d-md-none">
                                <div class="d-flex pb-3 pt-4 add_comment">
                                    <img src="{{ asset($media->user->avatar) }}" alt="" class="rounded-circle avatar-sm">
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
