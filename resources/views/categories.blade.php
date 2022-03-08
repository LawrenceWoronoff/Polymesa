@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Categories')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') @lang('translation.Categories') @endslot
        @slot('sub_title')  @endslot
    @endcomponent
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-success waves-effect waves-light mb-3" id="add_cateogry">
            <i class="mdi mdi-plus me-1"></i> Add Category
        </button>
    </div>

    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item edit_category">Edit</a>
                            <a class="dropdown-item remove_category">Remove</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <i class="far fa-images rounded-circle img-thumbnail p-3" style="font-size: 40px;"></i>
                        <!-- <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail"> -->
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Image (Image)</a></h5>
                    <p class="text-muted mb-2">This is the category for image media.</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate">
                        <a href="{{url('subcategories')}}">
                            <i class="far fa-eye me-1"></i>
                            View Subcategories
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item edit_category">Edit</a>
                            <a class="dropdown-item remove_category">Remove</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <i class="fas fa-video rounded-circle img-thumbnail p-3" style="font-size: 40px;"></i>
                        <!-- <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail"> -->
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Video (Video)</a></h5>
                    <p class="text-muted mb-2">This is the category for Videos and clips.</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate">
                        <a href="{{url('subcategories')}}">
                            <i class="far fa-eye me-1"></i>
                            View Subcategories
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item edit_category">Edit</a>
                            <a class="dropdown-item remove_category">Remove</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <i class="fas fa-music rounded-circle img-thumbnail p-3" style="font-size: 40px;"></i>
                        <!-- <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail"> -->
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Music (Audio)</a></h5>
                    <p class="text-muted mb-2">This is the category for image media.</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate">
                        <a href="{{url('subcategories')}}">
                            <i class="far fa-eye me-1"></i>
                            View Subcategories
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item edit_category">Edit</a>
                            <a class="dropdown-item remove_category">Remove</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <i class="fas fa-broadcast-tower rounded-circle img-thumbnail p-3" style="font-size: 40px;"></i>
                        <!-- <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail"> -->
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Sound Effect (Audio)</a></h5>
                    <p class="text-muted mb-2">This is the category for image media.</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate">
                        <a href="{{url('subcategories')}}">
                            <i class="far fa-eye me-1"></i>
                            View Subcategories
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item edit_category">Edit</a>
                            <a class="dropdown-item remove_category">Remove</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <i class="fas fa-boxes rounded-circle img-thumbnail p-3" style="font-size: 40px;"></i>
                        <!-- <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail"> -->
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Podcast (Video)</a></h5>
                    <p class="text-muted mb-2">This is the category for image media.</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate">
                        <a href="{{url('subcategories')}}">
                            <i class="far fa-eye me-1"></i>
                            View Subcategories
                        </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item edit_category">Edit</a>
                            <a class="dropdown-item remove_category">Remove</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <i class="fas fa-chalkboard-teacher rounded-circle img-thumbnail p-3" style="font-size: 40px;"></i>
                        <!-- <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail"> -->
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">PostCard (Video)</a></h5>
                    <p class="text-muted mb-2">This is the category for image media.</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate">
                        <a href="{{url('subcategories')}}">
                            <i class="far fa-eye me-1"></i>
                            View Subcategories
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item edit_category">Edit</a>
                            <a class="dropdown-item remove_category">Remove</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <i class="fas fas fa-globe rounded-circle img-thumbnail p-3" style="font-size: 40px;"></i>
                        <!-- <img src="{{ URL::asset('/assets/images/users/avatar-2.jpg') }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail"> -->
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">News (Book)</a></h5>
                    <p class="text-muted mb-2">This is the category for image media.</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate">
                        <a href="{{url('subcategories')}}">
                            <i class="far fa-eye me-1"></i>
                            View Subcategories
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true">
                            <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item edit_category">Edit</a>
                            <a class="dropdown-item remove_category">Remove</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                        <i class="fas fa-file-video rounded-circle img-thumbnail p-3" style="font-size: 40px;"></i>
                    </div>
                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">Movie (Video)</a></h5>
                    <p class="text-muted mb-2">This is the category for image media.</p>

                </div>

                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-light text-truncate">
                        <a href="{{url('subcategories')}}">
                            <i class="far fa-eye me-1"></i>
                            View Subcategories
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- <div class="row mt-3">
        <div class="col-xl-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-primary"><i
                        class="mdi mdi-loading mdi-spin font-size-20 align-middle me-2"></i> Load more </a>
            </div>
        </div>
    </div> -->
    <!-- end row -->

    <!-- Modal Dialog For Add or Edit Category -->

    <div id="category_edit_modal" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="category_modal_title">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-2 row">
                        <label for="icon_classname" class="col-md-3 col-form-label">Icon Class</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" value="fas fa-image" id="icon_classname" placeholder="fas fa-image">
                        </div>
                        <p class="m-1 text-info text-end small">Note: You can find class name in Admin fonts page.</p>
                    </div>
                    <div class="mb-2 row">
                        <label for="media_type" class="col-md-3 col-form-label">Media Type</label>
                        <div class="col-md-9">
                            <select class="form-select" id="media_type">
                                <option selected>Video</option>
                                <option>Image</option>
                                <option>Audio</option>
                                <option>Document</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label for="description" class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" value="This is the category for Images and Vectors" id="description" placeholder="Short Description for Category.">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script>
        $(".edit_category").click(function(){
            $("#category_modal_title").html('Edit Category');
            $("#category_edit_modal").modal('show');
            console.log('Edit Category');
        })

        $("#add_cateogry").click(function(){
            $("#category_modal_title").html('Add Category');
            $("#icon_classname").val('');
            $("#description").val('');
            $("#category_edit_modal").modal('show');
            console.log('Edit Category');
        })
        $(".remove_category").click(function(){
            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to delete selected category?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Yes, delete it!"
            }).then(function (result) {
                if (result.value) {
                    Swal.fire("Deleted!", "The category has been deleted.", "success");
                }
            });
        })
        
    </script>
@endsection
