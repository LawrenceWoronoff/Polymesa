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
                                            @if($media->accepted >= Setting('minimumLikes'))
                                            <i class="fas fa-award me-2 hand-cursor" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Featured Media"></i>
                                            @endif
                                            @foreach(json_decode($media->taglist) as $tag)
                                            <span class="me-2 hand-cursor">{{$tag}}</span>
                                            @endforeach
                                        </div>
                                        <div class="hand-cursor" style = "width: 35px; height: 35px; background:#574a4187; border-radius:50%;">
                                            <i class="fas fa-flag me-2 p-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Report"></i>
                                        </div>
                                    </div>
                                </div>

                                @if($media->category->mediaType == "Image")
                                <img src="{{ URL::asset('public/assets/medias'). '/'. $media->path }}" class="img-fluid w-100" alt="Responsive image">
                                @elseif($media->category->mediaType == "Video")
                                <video class="w-100" controls>
                                    <source src="{{ URL::asset('public/assets/medias'). '/'. $media->path }}" type="video/mp4">
                                </video>
                                @endif
                            </div>
                            
                            @Auth
                            <div class="comment-section d-none d-md-block">
                                <form action="{{route('media-addcomment')}}" method="POST">
                                @csrf
                                <div class="d-flex pb-3 pt-4 add_comment">
                                    <input name="mediaId" value="{{$media->id}}" hidden/>
                                    <img src="{{ asset(Auth::user()->avatar) }}" alt="" class="rounded-circle avatar-sm">
                                    <textarea class="form-control comment_text ms-4 w-100" name="comment" placeholder="Add your comment ..."></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-2 fw-bold"><i class="fas fa-thumbs-up me-2"></i>Submit</button>    
                                </div>  
                                </form>
                                <?php $index = 0; foreach($comments as $comment) {?>
                                    <div class="comment-list py-2 {{$index > 4 ? 'additional_comment d-none' : 'd-flex'}}">
                                        <img src="{{ asset($comment->user->avatar) }}" alt="" class="rounded-circle avatar-sm">
                                        <div class="ms-4 w-100">
                                            <p class="text-info mb-1">{{ $comment->user->lastname. ' '. $comment->user->firstname }} <span class="font-size-13 ms-2 text-secondary">{{$comment->created_at}}</span></p>
                                            <textarea class="bio-area w-100" disabled>{{$comment->comment}}</textarea>
                                        </div>
                                    </div>
                                <?php $index ++; } ?>
                                <button type="button" class="btn btn-light btn-rounded waves-effect waves-light px-4 py-1 fw-bold w-100 show_more_comment {{$index > 5 ? '' : 'd-none'}}">+{{count($comments) - 5}} more</button>
                                <button type="button" class="btn btn-light btn-rounded waves-effect waves-light px-4 py-1 fw-bold w-100 show_less_comment d-none">show less</button>
                            </div>
                            @endAuth

                            @Guest
                            <div class="mt-4  font-size-16 ">
                                <button type="submit" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-1 fw-bold">{{$media->commented}} comments </button>
                                <a href="{{Route('login')}}" class="ms-2 text-info" style="cursor: pointer;">Sign in</a> to leave a comment  
                            </div>
                            @endGuest
                        </div>
                        <div class="col-md-4">
                            <div class="py-2 font-size-20"><a href="https://polymesa.com/{{$media->user->username}}">https://polymesa.com/{{$media->user->username}}</a></div>
                            <div id="ownder_section" class="d-flex py-2" style="border-bottom: solid 1px #d0d0d0">
                                <img src="{{ asset($media->user->avatar) }}" alt="" class="rounded-circle avatar-md">
                                <div class="ms-4">
                                    <p class="mb-2 mt-2 font-size-18">{{$media->user->lastname. ' '. $media->user->firstname}} / {{$media->user->uploaded}} images</p>
                                    <button type="button" class="min-width-100 btn btn-success btn-rounded waves-effect waves-light px-4 py-1">Coffee</button>
                                    <!-- <button type="button" class="min-width-100 btn btn-soft-dark btn-rounded waves-effect waves-light px-4 py-1">Follow</button> -->
                                </div>
                            </div>

                            <div id="rate_section" class="py-4" style="border-bottom: solid 1px #d0d0d0">
                                @Auth
                                <form action="{{url('media-setLike')}}" method="POST">
                                    @csrf
                                    <input value="{{$media->id}}" name="mediaId" hidden/>
                                    <button type="submit" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-1 fw-bold"><i class="fas fa-thumbs-up me-2"></i>{{$media->liked}}</button>
                                    <!-- <button type="button" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-1"><i class="far fa-bookmark"></i></button> -->
                                    <button type="button" class="min-width-100 btn btn-soft-dark btn-rounded waves-effect waves-light px-4 py-1"><i class="fas fa-share-alt"></i></button>
                                </form>
                                @endAuth
                                @Guest
                                <i class="fas fa-thumbs-up me-2 text-info font-size-18"> {{$media->liked}}</i>
                                <a href="{{Route('login')}}" class="ms-2 text-info font-size-18" style="cursor: pointer;">Sign in</a> <span class="font-size-16">to evaluate</span>
                                @endGuest

                            </div>
                            
                            <div id="media_detail_info" class="mt-4 p-4 text-secondary" style="background: #f6f5fa">                                
                                <u><p class="mb-2 mt-2 font-size-18">Polymesa License</p></u>
                                <p class="m-0 font-size-16">No attribution required</p>
                                <p class="m-0 font-size-16">Free for commercial use</p>
                            </div>
                            <div id="download_section" class="py-4 mb-4" style="border-bottom: solid 1px #d0d0d0">
                                <!-- <a href="{{ URL::asset('public/assets/medias'). '/'. $media->path }}" download><button type="button" class="btn btn-success btn-rounded waves-effect waves-light px-4 py-2 font-size-20 free-download"><i class="fas fa-download me-2"></i>Free Download</button></a> -->

                                @if($media->category->mediaType == "Image")
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light px-4 py-2 font-size-20 free-download"><i class="fas fa-download me-2"></i>Free Download</button>
                                   
                                <div class="position-relative drop-down-download" style="display:none;">
                                    <div class="popover__menu mt-3">
                                    </div>
                                </div>
                                @else
                                <a href="{{ URL::asset('public/assets/medias'). '/'. $media->path }}" download><button type="button" class="btn btn-success btn-rounded waves-effect waves-light px-4 py-2 font-size-20 sub-download"><i class="fas fa-download me-2"></i>Free Download</button></a>

                                @endif
                                <div class="rounded-3 p-4 font-size-16 drop-down-download" style="display:none; background: rgb(30, 30, 30); color: #b5b5b5; max-width: 350px;">
                                    <!-- <div class="tooltip-arrow"></div> -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check mb-2">
                                                <input type="radio" id="radio1" name="download_option" class="form-check-input" value="{{ URL::asset('public/assets/medias'). '/640_'. $media->path }}" checked>
                                                <label class="form-check-label" for="radio1">640 x {{$height_640}}</label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input type="radio" id="radio2" name="download_option" class="form-check-input" value="{{ URL::asset('public/assets/medias'). '/1280_'. $media->path }}">
                                                <label class="form-check-label" for="radio2">1280 x {{$height_1280}}</label>
                                            </div>

                                            <div class="form-check mb-2">
                                                <input type="radio" id="radio3" name="download_option" class="form-check-input" value="{{ URL::asset('public/assets/medias'). '/1920_'. $media->path }}">
                                                <label class="form-check-label" for="radio3">1920 x {{$height_1920}}</label>
                                            </div>

                                            <div class="form-check mb-2">                                                
                                                <input type="radio" id="radio4" name="download_option" class="form-check-input" value="{{ URL::asset('public/assets/medias'). '/'. $media->path }}" @Guest disabled @Endguest>
                                                
                                                <label class="form-check-label" for="radio4">{{$final_img_info['width']}} x {{$final_img_info['height']}}</label>
                                            </div>
                                            
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-2">
                                                {{$final_img_info['fileExtension']}}
                                            </div>
                                            <div class="mb-2">
                                                {{$final_img_info['fileExtension']}}
                                            </div>
                                            <div class="mb-2">
                                                {{$final_img_info['fileExtension']}}
                                            </div>
                                            
                                            <div class="mb-2" @Guest style="color: rgb(105 105 105)" @endGuest>
                                                {{$final_img_info['fileExtension']}}
                                            </div>
                                            
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="mb-2">
                                                {{ $size_640 }}
                                            </div>
                                            <div class="mb-2">
                                                {{ $size_1280}}
                                            </div>
                                            <div class="mb-2">
                                                {{ $size_1920 }}
                                            </div>
                                            <div class="mb-2" @Guest style="color: rgb(105 105 105)" @endGuest>
                                                {{ $size_original }}
                                            </div>                                            
                                        </div>
                                    </div>
                                    @Guest
                                    <div>
                                        <p class="font-size-18"><a class="text-info" href="{{Route('login')}}">Sign in</a> to download original high resolution media.</p>
                                    </div>
                                    @endGuest
                                    <div class="mt-2 d-flex justify-content-between">
                                        <a class="sub-download" href="{{ URL::asset('public/assets/medias'). '/640_'. $media->path }}"  style="width:45%;" download>
                                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light py-1 font-size-16 w-100">Download</button>
                                        </a>
                                        <a class="sub-download" href="{{ URL::asset('public/assets/medias'). '/640_'. $media->path }}" target="_blank"  style="width:45%;">
                                            <button type="button" class="btn btn-light btn-rounded waves-effect waves-light py-1 font-size-16 sub-view w-100">View</button>
                                        </a>
                                    </div>
                                </div>
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

                                    <p class="m-0 font-size-18">{{ $media->category->mediaType == "Image" ? "Image type" : "Video type" }}</p>
                                    <p class="m-0 font-size-18">{{$final_img_info['fileExtension']}}</p>
                                </div>
                                @if($media->category->mediaType == "Image")
                                    <div class="d-flex justify-content-between">
                                        <p class="m-0 font-size-18">Resolution</p>
                                        <p class="m-0 font-size-18">{{$final_img_info['width']}} x {{$final_img_info['height']}}</p>
                                    </div>
                                @endif
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Published</p>
                                    <p class="m-0 font-size-18">{{date('M.d, Y', strtotime($media->created_at))}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="m-0 font-size-18">Category</p>
                                    <p class="m-0 text-info font-size-18">{{$media->category->name}}{{$media->subcategory? '/'. $media->subcategory->name : ''}}</p>
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

                            @Auth
                            <div class="comment-section d-sm-block d-md-none">
                                <form action="{{route('media-addcomment')}}" method="POST">
                                @csrf
                                <div class="d-flex pb-3 pt-4 add_comment">
                                    <input name="mediaId" value="{{$media->id}}" hidden/>
                                    <img src="{{ asset($media->user->avatar) }}" alt="" class="rounded-circle avatar-sm">
                                    <textarea class="form-control comment_text ms-4 w-100" name="comment" placeholder="Add your comment ..."></textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-2 fw-bold"><i class="fas fa-thumbs-up me-2"></i>Submit</button>    
                                </div>  
                                </form>
                                <?php $index = 0; foreach($comments as $comment) {?>
                                    <div class="comment-list py-2 {{$index > 4 ? 'additional_comment d-none' : 'd-flex'}}">
                                        <img src="{{ asset($comment->user->avatar) }}" alt="" class="rounded-circle avatar-sm">
                                        <div class="ms-4 w-100">
                                            <p class="text-info mb-1">{{ $comment->user->lastname. ' '. $comment->user->firstname }} <span class="font-size-13 ms-2 text-secondary">{{$comment->created_at}}</span></p>
                                            <textarea class="bio-area w-100" disabled>{{$comment->comment}}</textarea>
                                        </div>
                                    </div>
                                <?php $index ++; } ?>
                                <button type="button" class="btn btn-light btn-rounded waves-effect waves-light px-4 py-1 fw-bold w-100 show_more_comment {{$index > 5 ? '' : 'd-none'}}">+{{count($comments) - 5}} more</button>
                                <button type="button" class="btn btn-light btn-rounded waves-effect waves-light px-4 py-1 fw-bold w-100 show_less_comment d-none">show less</button>
                            </div>
                            @endAuth

                            @Guest
                            <div class="mt-4  font-size-16 row">
                                <div class="col-md-3 col-sm-12">
                                    <button type="submit" class="min-width-100 btn btn-info btn-rounded waves-effect waves-light px-4 py-1 fw-bold">{{$media->commented}} comments </button>
                                </div>
                                <div class="col-md-9 col-sm-12 mt-2">
                                    <a href="{{Route('login')}}" class="ms-2 text-info" style="cursor: pointer;">Sign in</a> to leave a comment
                                </div>
                            </div>
                            @endGuest
                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection

@section('script')
    <script>
        var mediaId = <?php echo $media->id?>;

        $(".free-download").click(function(){
            $('.drop-down-download').show();
        });
        $(".sub-download").click(function(){
             var param = {
                id : mediaId,
            };
            console.log(mediaId);
            $.ajax({
                url: "{{URL::to('/media-download')}}",
                type: 'POST',
                dataType: 'json',
                contentType: 'application/json',
                data: JSON.stringify(param),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (result) {
                    // console.log('Result:', result);                    
                },
            });

            $('.drop-down-download').hide();
        })

        $('input[type=radio][name=download_option]').change(function() {
            $(".sub-download").attr("href", this.value);
        });

        $('.show_more_comment').click(function(){
            $('.additional_comment').addClass('d-flex');
            $('.additional_comment').removeClass('d-none');

            $('.show_more_comment').addClass('d-none');
            $('.show_less_comment').removeClass('d-none');
        })

        $('.show_less_comment').click(function(){
            $('.additional_comment').removeClass('d-flex');
            $('.additional_comment').addClass('d-none');

            $('.show_less_comment').addClass('d-none');
            $('.show_more_comment').removeClass('d-none');
        })
    </script>
@endsection
