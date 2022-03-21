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
                        <?php $index = 0; foreach($categories as $category) { $index++;?>
                            <li class="nav-item">
                                <a class="nav-link {{$index == 1 ? 'active' : '' }}" data-bs-toggle="tab" href="#accordiontab_{{$category->id}}" role="tab">
                                    <i class="{{$category->className}} font-size-20"></i>
                                    <span class="d-none d-sm-block">{{$category->name}}</span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <!-- Tab content -->
                    <div class="tab-content py-3">
                        <?php $index = 0; foreach($categories as $category) { $index++; ?>
                            <div class="tab-pane {{$index == 1 ? 'active' : '' }}" id="accordiontab_{{$category->id}}" role="tabpanel">
                                <?php if($category->mediaType == "Image") {?>
                                    <div class="row m-0">
                                        @foreach($category->my_media as $media)
                                        @if($media->declined < Setting('minimumLikes'))
                                        <div class="mb-2 px-1 col-lg-3 d-flex flex-row justify-content-center">
                                            <div>
                                                <a href="{{route('media-detail', $media->id)}}">
                                                    <img src="{{ URL::asset('public/assets/medias'). '/640_'. $media->path }}" class="img-fluid grid-image" alt="Responsive image">
                                                </a>

                                                @if($media->accepted >= Setting('minimumLikes'))
                                                    <p class="text-center font-size-16 mt-3"><i class="fas fa-award me-2" style="color: gray"> </i>Featured</p>
                                                @else
                                                    <p class="text-center font-size-16 mt-3">Published</p>
                                                @endif
                                            </div>
                                            <div class="static">
                                                <i class="fas fa-eye static-fa-icon"> {{$media->views}}</i>
                                                <i class="fas fa-download static-fa-icon"> {{$media->downloads}}</i>
                                                <!-- <i class="fas fa-thumbs-up static-fa-icon"> {{$media->liked}}</i> -->
                                                <i class="fas fa-comment static-fa-icon">  {{$media->commented}}</i>
                                                <i class="fas fa-share-alt static-fa-icon">  {{$media->shared}}</i>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                <?php } else if($category->mediaType == "Video") { ?>

                                <?php } else if($category->mediaType == "Audio") { ?>

                                <?php }?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
