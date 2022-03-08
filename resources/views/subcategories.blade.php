@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Subcategories')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Categories @endslot
        @slot('title') Subcategories @endslot
        @slot('sub_title')  @endslot

    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Category Name : Image</h4>
                    <div class="d-flex justify-content-end align-items-center mb-3">
                        <button type="button" class="btn btn-success waves-effect waves-light me-3" id="add_subcategory">
                            <i class="mdi mdi-plus me-1"></i> Add Subcategory
                        </button>

                        <a href="{{url('categories')}}">
                            <button type="button" class="btn btn-danger waves-effect waves-light" id="back_to">
                            <i class="uil-backspace me-1"></i> Back
                            </button>
                        </a>
                    </div>
                    
                    <div class="col-md-6 col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-id="1">
                                        <td data-field="name">Photo</td>
                                        <td style="width: 100px">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm remove" title="Remove">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr data-id="2">
                                        <td data-field="name">Vector Graphic</td>
                                        <td>
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm remove" title="Remove">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr data-id="3">
                                        <td data-field="name">Illustration</td>
                                        <td>
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm remove" title="Remove">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr data-id="4">
                                        <td data-field="name">Featured Photo</td>
                                        <td>
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm remove" title="Remove" onclick="remove()">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <!-- Modal Dialog For Add Subcategory -->

    <div id="subcategory_add_modal" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="subcategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="category_modal_title">Add Subcategory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-2 row">
                        <label for="icon_classname" class="col-md-3 col-form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" value="" id="subcategory_name" placeholder="Subcategory name">
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
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/table-editable.init.js') }}"></script>

    <script>
        function remove(){
            console.log('reove');
        }

        $(document).ready(function() {
            $('.remove').click(function(){
                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to delete selected subcategory?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#34c38f",
                    cancelButtonColor: "#f46a6a",
                    confirmButtonText: "Yes, delete it!"
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire("Deleted!", "The subcategory has been deleted.", "success");
                    }
                });
            })  

            $("#add_subcategory").click(function(){
                $("#subcategory_add_modal").modal('show');
            })
        })
        
    </script>
@endsection
