@extends('layouts.master-layouts')
@section('title')
    @lang('translation.Users')
@endsection
@section('css')
    <!-- DataTables -->

    
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') User List @endslot
        @slot('sub_title') @endslot

    @endcomponent

    <div class="d-flex justify-content-end">
        <a href="{{url('user-add')}}">
            <button type="button" class="btn btn-success waves-effect waves-light mb-3">
                <i class="mdi mdi-plus me-1"></i> Add User
            </button>
        </a>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="table-responsive mb-4">
                <table class="table table-centered datatable dt-responsive nowrap table-card-list"
                    style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="bg-transparent">
                            <th>No.</th>
                            <th>Userame</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Uploaded<br> Media</th>
                            <th>Status</th>
                            <th>Register Date</th>
                            <th style="width: 120px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-2.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">ramon094
                                </a> 
                            </td>
                            <td>
                                Ramon Juan
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="{{url('user-edit')}}" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                2
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-3.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">david18
                                </a> 
                            </td>
                            <td>
                                David Hernandez
                            </td>
                            <td>jdavid18@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="{{url('user-edit')}}" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                3
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="{{url('user-edit')}}" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                4
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="{{url('user-edit')}}" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                5
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="{{url('user-edit')}}" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                6
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="{{url('user-edit')}}" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                7
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="{{url('user-edit')}}" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                8
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="console.log('edit 3');" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                9
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="console.log('edit 3');" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                10
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="console.log('edit 3');" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                11
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="console.log('edit 3');" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset('public/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">pepske
                                </a> 
                            </td>
                            <td>
                                Peske peski
                            </td>
                            <td>cloudrider123.m92@gmail.com</td>
                            <td>
                                15
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                10/20/2021
                            </td>
                            <td>
                                <a href="console.log('edit 3');" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script> -->
    <!-- <script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js') }}"></script> -->



    <script>
        var table;
        $(document).ready(function() {
            table = $('.datatable').DataTable();
            $(".dataTables_length select").addClass('form-select form-select-sm');
        });
        $( document ).ready(function() {
            // $('.btn-setactive').click(function(){
            //     console.log($(this)[0].checked);
            //     if($(this)[0].checked)
            //         $(this).parent().find("label").html('Active');
            //     else
            //         $(this).parent().find("label").html('Inactive');
            // })
        })
        function toogleActive(obj){
            var jobj = $(obj);
            var status = jobj.attr('data-status');
            if(status == 'active'){
                jobj.html('Inactive');
                jobj.attr('data-status', 'inactive');
                jobj.removeClass('btn-success');
                jobj.addClass('btn-secondary');
            }
            else{
                jobj.html('Active');
                jobj.attr('data-status', 'active');
                jobj.removeClass('btn-secondary');
                jobj.addClass('btn-success');
            }
        }

        function removeUser(obj) {
            var jBtn = $(obj);
            console.log($(obj).parent());
            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to delete selected user?",
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
