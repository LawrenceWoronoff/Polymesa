@extends('layouts.master-layouts-landing')
@section('title')
    @lang('translation.Home')
@endsection
@section('content')
    <div>
        <div class="pd-top-10">
            <div class="">
                <ul class="image-gallery">
                    @if(count($medias) == 0)
                        <div class="col-md-12">
                            <div class="text-center">
                                <div>
                                    <div class="row justify-content-center">
                                        <div class="col-sm-4">
                                            <div class="error-img">
                                                <img src="{{ URL::asset('public/assets/images/404-error.png') }}" alt=""
                                                    class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-uppercase mt-4">Sorry, no matching media found</h4>
                                <p class="text-muted">You should try to find with other keyword please.</p>
                                <div class="mt-5">
                                    <a class="btn btn-primary waves-effect waves-light" href="{{ url('/') }}">Back to Home</a>
                                </div>
                            </div>

                        </div>
                    @endif
                    @foreach($medias as $media)
                        @if($media->declined < Setting('minimumLikes'))
                        <li>
                            <div class="gallery-content">
                                <a href="{{route('media-detail', $media->id)}}">
                                    <div class="content-overlay"></div>
                                    <img class="content-image" src="{{ URL::asset('public/assets/medias'). '/640_'. $media->path }}">
                                    <div class="content-details fadeIn-bottom">
                                    <div class="" style="float:right;">
                                        <p class="content-text"><i class="fas fa-heart"></i> {{$media->liked}} &nbsp; <i class="fas fa-comment"></i> {{$media->commented}} &nbsp; <i class="fas fa-bookmark"></i> </p>
                                    </div>
                                    <div class="" style="float:left;">
                                        <h2 class="content-title ">
                                            @foreach(json_decode($media->taglist) as $tag)
                                                <a type='button' href="" class="overlay-text">{{$tag}}</a>
                                            @endforeach
                                        </h2>
                                    </div>
                                    
                                    </div>
                                </a>
                            </div>
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
