@extends('layouts.master-layouts-landing')
@section('title')
    @lang('translation.Home')
@endsection
@section('content')
    <div>
        <div class="pd-top-10">
            <div class="">
                <ul class="image-gallery">
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
