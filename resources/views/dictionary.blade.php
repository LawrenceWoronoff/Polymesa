@extends('layouts.master-layouts')
@section('title')
    @lang('translation.English_Dictionary')
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle') Tag @endslot
        @slot('title') @lang('translation.English_Dictionary') @endslot
        @slot('sub_title')  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                        <th class="border-0 bg-info bg-gradient">&nbsp;</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>abactinally</td>
                                        <td>abaction</td>
                                        <td>abactor</td>
                                        <td>abaculi</td>
                                        <td>abaculus</td>
                                        <td>abacus</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abadejo</td>
                                    </tr>
                                    <tr>
                                        <td>fruit</td>
                                        <td>fruitade</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitarianism</td>
                                        <td>fruitbearing</td>
                                        <td>fruitbearing</td>
                                        <td>fruitcakey</td>
                                        <td>fruitcakes</td>
                                    </tr>
                                    <tr>
                                        <td>fruiteress</td>
                                        <td>fruitery</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruitful</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfully</td>
                                        <td>fruitfullness</td>
                                    </tr>
                                    <tr>
                                        <td>monocondylous</td>
                                        <td>monocoque</td>
                                        <td>monocormic</td>
                                        <td>monocotyl</td>
                                        <td>monocots</td>
                                        <td>monocrotic</td>
                                        <td>monoculate</td>
                                        <td>monoculate</td>
                                        <td>monoculus</td>
                                        <td>monodactyle</td>
                                    </tr>
                                    <tr>
                                        <td>monodromy</td>
                                        <td>monoecia</td>
                                        <td>monogenesis</td>
                                        <td>monographers</td>
                                        <td>monohydroxy</td>
                                        <td>monomachy</td>
                                        <td>monomastigate</td>
                                        <td>monomyarian</td>
                                        <td>mononaphthalene</td>
                                        <td>mononuclear</td>
                                    </tr>
                                    <tr>
                                        <td>abactinally</td>
                                        <td>abaction</td>
                                        <td>abactor</td>
                                        <td>abaculi</td>
                                        <td>abaculus</td>
                                        <td>abacus</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abadejo</td>
                                    </tr>
                                    <tr>
                                        <td>fruit</td>
                                        <td>fruitade</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitarianism</td>
                                        <td>fruitbearing</td>
                                        <td>fruitbearing</td>
                                        <td>fruitcakey</td>
                                        <td>fruitcakes</td>
                                    </tr>
                                    <tr>
                                        <td>fruiteress</td>
                                        <td>fruitery</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruitful</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfully</td>
                                        <td>fruitfullness</td>
                                    </tr>
                                    <tr>
                                        <td>monocondylous</td>
                                        <td>monocoque</td>
                                        <td>monocormic</td>
                                        <td>monocotyl</td>
                                        <td>monocots</td>
                                        <td>monocrotic</td>
                                        <td>monoculate</td>
                                        <td>monoculate</td>
                                        <td>monoculus</td>
                                        <td>monodactyle</td>
                                    </tr>
                                    <tr>
                                        <td>monodromy</td>
                                        <td>monoecia</td>
                                        <td>monogenesis</td>
                                        <td>monographers</td>
                                        <td>monohydroxy</td>
                                        <td>monomachy</td>
                                        <td>monomastigate</td>
                                        <td>monomyarian</td>
                                        <td>mononaphthalene</td>
                                        <td>mononuclear</td>
                                    </tr>
                                    <tr>
                                        <td>abactinally</td>
                                        <td>abaction</td>
                                        <td>abactor</td>
                                        <td>abaculi</td>
                                        <td>abaculus</td>
                                        <td>abacus</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abadejo</td>
                                    </tr>
                                    <tr>
                                        <td>fruit</td>
                                        <td>fruitade</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitarianism</td>
                                        <td>fruitbearing</td>
                                        <td>fruitbearing</td>
                                        <td>fruitcakey</td>
                                        <td>fruitcakes</td>
                                    </tr>
                                    <tr>
                                        <td>fruiteress</td>
                                        <td>fruitery</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruitful</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfully</td>
                                        <td>fruitfullness</td>
                                    </tr>
                                    <tr>
                                        <td>monocondylous</td>
                                        <td>monocoque</td>
                                        <td>monocormic</td>
                                        <td>monocotyl</td>
                                        <td>monocots</td>
                                        <td>monocrotic</td>
                                        <td>monoculate</td>
                                        <td>monoculate</td>
                                        <td>monoculus</td>
                                        <td>monodactyle</td>
                                    </tr>
                                    <tr>
                                        <td>monodromy</td>
                                        <td>monoecia</td>
                                        <td>monogenesis</td>
                                        <td>monographers</td>
                                        <td>monohydroxy</td>
                                        <td>monomachy</td>
                                        <td>monomastigate</td>
                                        <td>monomyarian</td>
                                        <td>mononaphthalene</td>
                                        <td>mononuclear</td>
                                    </tr>
                                    <tr>
                                        <td>abactinally</td>
                                        <td>abaction</td>
                                        <td>abactor</td>
                                        <td>abaculi</td>
                                        <td>abaculus</td>
                                        <td>abacus</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abadejo</td>
                                    </tr>
                                    <tr>
                                        <td>fruit</td>
                                        <td>fruitade</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitarianism</td>
                                        <td>fruitbearing</td>
                                        <td>fruitbearing</td>
                                        <td>fruitcakey</td>
                                        <td>fruitcakes</td>
                                    </tr>
                                    <tr>
                                        <td>fruiteress</td>
                                        <td>fruitery</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruitful</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfully</td>
                                        <td>fruitfullness</td>
                                    </tr>
                                    <tr>
                                        <td>monocondylous</td>
                                        <td>monocoque</td>
                                        <td>monocormic</td>
                                        <td>monocotyl</td>
                                        <td>monocots</td>
                                        <td>monocrotic</td>
                                        <td>monoculate</td>
                                        <td>monoculate</td>
                                        <td>monoculus</td>
                                        <td>monodactyle</td>
                                    </tr>
                                    <tr>
                                        <td>monodromy</td>
                                        <td>monoecia</td>
                                        <td>monogenesis</td>
                                        <td>monographers</td>
                                        <td>monohydroxy</td>
                                        <td>monomachy</td>
                                        <td>monomastigate</td>
                                        <td>monomyarian</td>
                                        <td>mononaphthalene</td>
                                        <td>mononuclear</td>
                                    </tr>
                                    <tr>
                                        <td>abactinally</td>
                                        <td>abaction</td>
                                        <td>abactor</td>
                                        <td>abaculi</td>
                                        <td>abaculus</td>
                                        <td>abacus</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abacuses</td>
                                        <td>abadejo</td>
                                    </tr>
                                    <tr>
                                        <td>fruit</td>
                                        <td>fruitade</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitages</td>
                                        <td>fruitarianism</td>
                                        <td>fruitbearing</td>
                                        <td>fruitbearing</td>
                                        <td>fruitcakey</td>
                                        <td>fruitcakes</td>
                                    </tr>
                                    <tr>
                                        <td>fruiteress</td>
                                        <td>fruitery</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruiteries</td>
                                        <td>fruitful</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfuller</td>
                                        <td>fruitfully</td>
                                        <td>fruitfullness</td>
                                    </tr>
                                    <tr>
                                        <td>monocondylous</td>
                                        <td>monocoque</td>
                                        <td>monocormic</td>
                                        <td>monocotyl</td>
                                        <td>monocots</td>
                                        <td>monocrotic</td>
                                        <td>monoculate</td>
                                        <td>monoculate</td>
                                        <td>monoculus</td>
                                        <td>monodactyle</td>
                                    </tr>
                                    <tr>
                                        <td>monodromy</td>
                                        <td>monoecia</td>
                                        <td>monogenesis</td>
                                        <td>monographers</td>
                                        <td>monohydroxy</td>
                                        <td>monomachy</td>
                                        <td>monomastigate</td>
                                        <td>monomyarian</td>
                                        <td>mononaphthalene</td>
                                        <td>mononuclear</td>
                                    </tr>
                                </tbody>
                            </table>
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

    <script>
        var table = $('#datatable-buttons').DataTable({
            buttons: ['excel', 'pdf'],
            "columnDefs": [
                { "orderable": false, "targets": [0, 1, 2, 3, 4, 5, 6, 7, 8, 9] },
            ],
            "aaSorting": []
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
