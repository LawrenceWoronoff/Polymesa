@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Tags')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') Tags @endslot
        @slot('sub_title')  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h4 class="card-title mb-3">Featured Tags</h4>
                            <div class="mb-2 row">
                                <div class="col-md-9 mb-2">
                                    <input class="form-control" type="text" value="" id="example-text-input" placeholder="Please tag name to insert.">
                                </div>
                                <div class="col-md-3 mb-2 d-flex justify-content-end">
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-3" style="width: 100px;">
                                        <i class="mdi mdi-plus me-1"></i> Add
                                    </button>
                                </div>
                                
                            </div>
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Tag</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>NFT</td>
                                        <td>
                                            <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                            class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bacano</td>
                                        <td>
                                            <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                            class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Covid</td>
                                        <td>
                                            <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                            class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6 col-sm-12" style="padding-top: 100px; padding-right: 50px;">
                            <div>
                                <a href="{{url('dictionary')}}">
                                    <button type="button" class="btn btn-primary waves-effect waves-light mb-3" style="width: 200px;">
                                        <i class="fas fa-book me-2"></i> English Dictionary
                                    </button>
                                </a>
                            </div>
                            <div>
                                <a href="{{url('dictionary')}}">
                                    <button type="button" class="btn btn-danger waves-effect waves-light mb-3" style="width: 200px;">
                                        <i class="fas fa-book me-2"></i> Spanish Dictionary
                                    </button>
                                </a>
                            </div>
                            <div>
                                <a href="{{url('dictionary')}}">
                                    <button type="button" class="btn btn-info waves-effect waves-light mb-3" style="width: 200px;">
                                        <i class="fas fa-book me-2"></i> French Dictionary
                                    </button>
                                </a>
                            </div>
                            <div>
                                <a href="{{url('dictionary')}}">
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-3" style="width: 200px;">
                                        <i class="fas fa-book me-2"></i> Serbian Dictionary
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script> -->

    <script>
        var table = $('#datatable-buttons').DataTable({
            buttons: [{
                            extend: 'excel',
                            title: 'ConProcesos.com',
                            exportOptions: {
                                columns: [0]
                            },
                            text: '<i class="far fa-file-excel"> Excel</i>',
                        },
                        {
                            extend: 'pdf',
                            title: 'ConProcesos.com',
                            exportOptions: {
                                columns: [0]
                            },
                            text: '<i class="far fa-file-pdf"> Pdf</i>',

                        }],
            "columns": [
                { "width": "90%" },
                { "width": "10%" },
            ]
        });
        table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        $(".dataTables_length select").addClass('form-select form-select-sm');

        function removeUser(obj) {
            var jBtn = $(obj);
            console.log($(obj).parent());
            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to delete this tag?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Yes, delete it!"
            }).then(function (result) {
                if (result.value) {
                    
                    // jBtn.parents('tr').remove().draw();
                    // console.log( jBtn.parents('tr'));
                    // table
                    //     .row( jBtn.parents('tr') )
                    //     .remove()
                    //     .draw();

                    // table.rows({ search: 'applied' }).iterator( 'row', function ( context, index ) {
                    //     $(this.cell(index, 0).nodes()).html(index + 1);
                    // });
                    Swal.fire("Deleted!", "The user has been deleted.", "success");
                }
            });
        }
    </script>
@endsection
