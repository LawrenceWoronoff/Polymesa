@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Form_File_Upload')
@endsection
@section('css')
    <!-- plugin css -->
    <link href="{{ URL::asset('public/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') File Upload @endslot
        @slot('sub_title') @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 px-4">
                            <h4 class="font-size-18 mb-2 fw-bold">Supported file types</h4>

                            <h5 class="font-size-16 mt-4 fw-bold">Photos/Vetors</h5>
                            <p class="border-bottom border-2 mt-2 pb-4">
                                PNG, JPEG, JPG, PSD and AI images up to 10 MB with at least 3000 pixels along one side.
                                <a><span class="text-info" style="cursor: pointer;">Image Quality Guidelines...</span></a>
                            </p>

                            <h5 class="font-size-16 mt-4 fw-bold">Videos</h5>
                            <p class="border-bottom border-2 mt-2 pb-4">
                                MP4, AVI and MK videos up to 10 MB and a minimum resolution of 1920x800 pixels. Clips should but no longer than 60 seconds.
                                <a><span class="text-info" style="cursor: pointer;">Video Quality Guidelines...</span></a>
                            </p>

                            <h5 class="font-size-16 mt-4 fw-bold">Music/Audios</h5>
                            <p class="border-bottom border-2 mt-2 pb-4">
                                MP3, FLAC, WAV, WMA and AAC music up to 10 MB file size limit. Duration should be no longer than 15 minutes.
                                <a><span class="text-info" style="cursor: pointer;">Music Quality Guidelines...</span></a>
                            </p>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <form action="#" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted uil uil-cloud-upload"></i>
                                    </div>

                                    <h4 class="font-size-18">Drag and drop media file anywhere on the form</h4>
                                    <p class="font-size-16">7 uploads remaining this week</p>
                                </div>
                            </form>

                            <div class="row  mt-4">
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-4 col-form-label">Select Category</label>
                                        <div class="col-md-8">
                                            <select class="form-select">
                                                <option selected="">Image</option>
                                                <option>Video</option>
                                                <option>Music</option>
                                                <option>Sound Effect</option>
                                                <option>Podcast</option>
                                                <option>News</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-4 col-form-label">Select Subcategory</label>
                                        <div class="col-md-8">
                                            <select class="form-select">
                                                <option selected="">Photo</option>
                                                <option>Vector Graphic</option>
                                                <option>Illustration</option>
                                                <option>Featured Photo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3 row">
                                        <label for="tag_filter" class="col-md-4 col-form-label">Enter Tag</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="text" value="" id="tag_filter" placeholder="Please input over 3 characters.">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3 row">
                                        <p class="pt-2 text-info">
                                            Once you enter the word, the app displays word related to it below
                                        </p>
                                    </div>
                                </div>
                                <div id="selected_tags" style="display: none">
                                    <div id="selected_tag_label">
                                        <h5 class="font-size-16 mt-4 fw-bold">Selected Tags</h5>
                                    </div>
                                    <div id="tag_list">
                                    </div>
                                </div>
                                <div id="available_tags" style="display:none;">
                                    <div>
                                        <h5 class="font-size-16 mt-4 fw-bold">Available Tags</h5>
                                    </div>
                                    <div id="available_tags_list" style="max-height: 500px; overflow:auto;">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button id="upload_submit" type="button" class="btn btn-primary waves-effect waves-light px-4">Upload</button>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!-- Plugins js -->
    <script src="{{ URL::asset('public/assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script>
        $("#tag_filter").change(function(){     // When user type value in filter tag input
            var keyword = $(this).val();
            if(keyword.length < 3)
                return;

            var param = {
                keyword : keyword,
            };
            $.ajax({
                url: "{{URL::to('/tags/search')}}",
                type: 'POST',
                dataType: 'json',
                contentType: 'application/json',
                data: JSON.stringify(param),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (result) {
                    var html = "";
                    for(i = 0; i < result.length; i++)
                        html += '<button type="button" class="btn btn-outline-secondary m-1 select-tag" onclick="selectTag(this)">' + result[i] + '</button>';
                    
                    $("#available_tags_list").html(html);
                },
            });

            $("#available_tags").show();
        })

        function selectTag(obj){    // When user click one of available tag
            $this = $(obj);
            var tag_name = $this.html().trim();
            
            // ======= Check if the tag is already selected ======== //
            var children = $("#tag_list")[0].children;
            for(var i = 0; i < children.length; i++)
            {
                console.log(children[i].children[0].innerHTML);
                if(children[i].children[0].innerHTML == tag_name)
                {
                    Swal.fire("Warning", "You have already selected this tag.", "warning");
                    return;
                }
            }

            $("#selected_tags").show();
            $("#selected_tag_label").show();

            $("#available_tags").hide();
            $("#tag_filter").val('');
            
            var element = '<p class="selected-tag m-1"><span>'+ tag_name +'</span><i class="fas fa-trash-alt text-danger ms-2 deselect-tag" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Deselect Tag" onclick="deSelectTag(this)"></i></p>'
            $("#tag_list").append(element);
        }

        function deSelectTag(obj){      // When user click trash icon of selected tag.
            $(obj).parent().remove();

            console.log('length', $("#tag_list").children().length);
            if($("#tag_list").children().length == 0)
                $("#selected_tag_label").hide();
        }


        $("#upload_submit").click(function(){
            var selected_tag_cnt = $("#tag_list").children().length;
            console.log($("#tag_list").children().length);
            if(selected_tag_cnt < 3 || selected_tag_cnt > 8)
            {
                Swal.fire("Warning", "Please select tag count more than 3 and less than 8 to upload", "warning");
                return;
            }
            
            
            
            Swal.fire("Success", "File Uploaded Successfully", "success");
            
        })
    </script>

@endsection
