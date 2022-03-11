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
                        <?php $index = 0; foreach ($users_fetch as $user) {  $index++;?>
                        <tr>
                            <td>
                                {{ $index }}
                            </td>
                            <td>
                                <a href="javascript: void(0);" class="text-dark fw-bold">
                                    <img src="{{asset($user->avatar)}}" alt="" class="avatar-xs rounded-circle me-2">{{ $user->username }}
                                </a> 
                            </td>
                            <td>
                                {{ $user->lastname. ' '. $user->firstname }}
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>
                                {{ $user->uploaded }}
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light" data-status="active" onclick="toogleActive(this)">Active</button>
                            </td>
                            <td>
                                {{ date_format($user->created_at, 'm/d/Y') }}
                            </td>
                            <td>
                                <a href="{{url('user-edit')}}" class="px-3 text-primary user-edit"><i
                                        class="uil uil-pen font-size-18"></i></a>
                                <a class="px-3 text-danger" onclick="removeUser(this)"><i
                                        class="uil uil-trash-alt font-size-18"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')

    <script>
        var table;
        $(document).ready(function() {
            table = $('.datatable').DataTable();
            $(".dataTables_length select").addClass('form-select form-select-sm');
        });
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
