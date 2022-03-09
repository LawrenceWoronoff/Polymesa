@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Statistics')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') @lang('translation.Statistics') @endslot
        @slot('sub_title')  @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Category types -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#image" role="tab">
                                <i class="far fa-images font-size-20"></i>
                                <span class="d-none d-sm-block">Image</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#video" role="tab">
                                <i class="fas fa-video font-size-20"></i>
                                <span class="d-none d-sm-block">Video</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#music" role="tab">
                                <i class="fas fa-music font-size-20"></i>
                                <span class="d-none d-sm-block">Music</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#sound_effect" role="tab">
                                <i class="fas fa-broadcast-tower font-size-20"></i>
                                <span class="d-none d-sm-block">Sound Effect</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#podcast" role="tab">
                                <i class="fas fa-boxes font-size-20"></i>
                                <span class="d-none d-sm-block">Postcast</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#post_card" role="tab">
                                <i class="fas fa-chalkboard-teacher font-size-20"></i>
                                <span class="d-none d-sm-block">Post Card</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#news" role="tab">
                                <i class="fas fas fa-globe font-size-20"></i>
                                <span class="d-none d-sm-block">News</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#movie" role="tab">
                                <i class="fas fa-file-video font-size-20"></i>
                                <span class="d-none d-sm-block">Movie</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content py-3">
                        <div class="tab-pane active" id="image" role="tabpanel">
                            <div class="row">
                                <div class="mb-2 px-1 col-lg-3 d-flex flex-row">
                                    <div>
                                        <img src="{{ URL::asset('public/assets/images/small/img-3.jpg') }}" class="img-fluid" alt="Responsive image">
                                        <p class="text-center font-size-16 mt-3">Published</p>
                                    </div>
                                    <div class="static">
                                        <i class="fas fa-eye static-fa-icon"> 217</i>
                                        <i class="fas fa-download static-fa-icon"> 47</i>
                                        <i class="fas fa-thumbs-up static-fa-icon"> 1</i>
                                        <i class="fas fa-comment static-fa-icon"> 1</i>
                                        <i class="fas fa-share-alt static-fa-icon"> 2</i>
                                    </div>
                                </div>
                                <div class="mb-2 px-1 col-lg-3 d-flex flex-row">
                                    <div>
                                        <img src="{{ URL::asset('public/assets/images/small/img-2.jpg') }}" class="img-fluid" alt="Responsive image">
                                        <p class="text-center font-size-16 mt-3"><i class="fas fa-award me-2" style="color: gray"> </i>Featured</p>
                                    </div>
                                    <div class="static">
                                        <i class="fas fa-eye static-fa-icon"> 217</i>
                                        <i class="fas fa-download static-fa-icon"> 47</i>
                                        <i class="fas fa-thumbs-up static-fa-icon"> 1</i>
                                        <i class="fas fa-comment static-fa-icon"> 1</i>
                                        <i class="fas fa-share-alt static-fa-icon"> 2</i>
                                    </div>
                                </div>
                                <div class="mb-2 px-1 col-lg-3 d-flex flex-row">
                                    <div>
                                        <img src="{{ URL::asset('public/assets/images/small/img-1.jpg') }}" class="img-fluid" alt="Responsive image">
                                        <p class="text-center font-size-16 mt-3">Published</p>
                                    </div>
                                    <div class="static">
                                        <i class="fas fa-eye static-fa-icon"> 217</i>
                                        <i class="fas fa-download static-fa-icon"> 47</i>
                                        <i class="fas fa-thumbs-up static-fa-icon"> 1</i>
                                        <i class="fas fa-comment static-fa-icon"> 1</i>
                                        <i class="fas fa-share-alt static-fa-icon"> 2</i>
                                    </div>
                                </div>
                                <div class="mb-2 px-1 col-lg-3 d-flex flex-row">
                                    <div>
                                        <img src="{{ URL::asset('public/assets/images/small/img-4.jpg') }}" class="img-fluid" alt="Responsive image">
                                        <p class="text-center font-size-16 mt-3">Published</p>
                                    </div>
                                    <div class="static">
                                        <i class="fas fa-eye static-fa-icon"> 217</i>
                                        <i class="fas fa-download static-fa-icon"> 47</i>
                                        <i class="fas fa-thumbs-up static-fa-icon"> 1</i>
                                        <i class="fas fa-comment static-fa-icon"> 1</i>
                                        <i class="fas fa-share-alt static-fa-icon"> 2</i>
                                    </div>
                                </div>
                                <div class="mb-2 px-1 col-lg-3 d-flex flex-row">
                                    <div>
                                        <img src="{{ URL::asset('public/assets/images/small/img-7.jpg') }}" class="img-fluid" alt="Responsive image">
                                        <p class="text-center font-size-16 mt-3"><i class="fas fa-award me-2" style="color: gray"> </i>Featured</p>
                                    </div>
                                    <div class="static">
                                        <i class="fas fa-eye static-fa-icon"> 217</i>
                                        <i class="fas fa-download static-fa-icon"> 47</i>
                                        <i class="fas fa-thumbs-up static-fa-icon"> 1</i>
                                        <i class="fas fa-comment static-fa-icon"> 1</i>
                                        <i class="fas fa-share-alt static-fa-icon"> 2</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="video" role="tabpanel">
                            <div class="row">
                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <img src="{{ URL::asset('public/assets/images/small/img-5.jpg') }}" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <div class="position-absolute d-flex justify-content-center align-items-center" style="top:10px; left: 10px; width: 35px; height: 35px; background:#e9e8e89c; border-radius:50%;">
                                        <i class="fas fa-award font-size-20 text-white"></i>
                                    </div>
                                    <img src="{{ URL::asset('public/assets/images/small/img-3.jpg') }}" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <img src="{{ URL::asset('public/assets/images/small/img-4.jpg') }}" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <div class="position-absolute d-flex justify-content-center align-items-center" style="top:10px; left: 10px; width: 35px; height: 35px; background:#e9e8e89c; border-radius:50%;">
                                        <i class="fas fa-award font-size-20 text-white"></i>
                                    </div>                                    
                                    <img src="{{ URL::asset('public/assets/images/small/img-1.jpg') }}" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <img src="{{ URL::asset('public/assets/images/small/img-1.jpg') }}" class="img-fluid" alt="Responsive image">

                                </div>
                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <img src="{{ URL::asset('public/assets/images/small/img-2.jpg') }}" class="img-fluid" alt="Responsive image">
                                </div>

                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <img src="{{ URL::asset('public/assets/images/small/img-2.jpg') }}" class="img-fluid" alt="Responsive image">
                                </div>
                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <div class="position-absolute d-flex justify-content-center align-items-center" style="top:10px; left: 10px; width: 35px; height: 35px; background:#e9e8e89c; border-radius:50%;">
                                        <i class="fas fa-award font-size-20 text-white"></i>
                                    </div>
                                    <img src="{{ URL::asset('public/assets/images/small/img-3.jpg') }}" class="img-fluid" alt="Responsive image">
                                </div>
                                
                                <div class="mb-2 px-1 col-lg-3">
                                    <div class=overlay></div>
                                    <i class="far fa-play-circle position-absolute" style="cursor: pointer; font-size: 50px; color: #f9f7f7; top: calc(50% - 25px); left: calc(50% - 25px);"></i>

                                    <div class="position-absolute d-flex justify-content-center align-items-center" style="top:10px; left: 10px; width: 35px; height: 35px; background:#e9e8e89c; border-radius:50%;">
                                        <i class="fas fa-award font-size-20 text-white"></i>
                                    </div>   
                                    <img src="{{ URL::asset('public/assets/images/small/img-6.jpg') }}" class="img-fluid" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="music" role="tabpanel">
                            dsfsdfs
                        </div>
                        <div class="tab-pane" id="sound_effect" role="tabpanel">
                            dsfsdfs
                        </div>
                        <div class="tab-pane" id="podcast" role="tabpanel">
                            dsfsdfs
                        </div>
                        <div class="tab-pane" id="post_card" role="tabpanel">
                            dsfsdfs
                        </div>
                        <div class="tab-pane" id="news" role="tabpanel">
                            dsfsdfs
                        </div>
                        <div class="tab-pane" id="movie" role="tabpanel">
                            dsfsdfs
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
