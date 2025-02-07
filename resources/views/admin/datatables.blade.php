<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Datatables - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    @include('admin.layouts._css')
</head>

<body ng-app="myApp" ng-controller="MyController as manup">
    <div class="wrapper" ng-init="manup.ticket_init({{ $ticket_details }})">
        <!-- Sidebar -->
        @include('admin.layouts._sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            @include('admin.layouts._mainHeader')

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3">DataTables.Net</h3>
                        <ul class="breadcrumbs mb-3">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="icon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Tables</a>
                            </li>
                            <li class="separator">
                                <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Datatables</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card " ng-repeat="ticket in manup.ticket_person ">
                                <div class="card-header">
                                    <h4 class="card-title text-capitalize">@{{ ticket.name.replace('_', ' ') }} ( Ticket -
                                        @{{ ticket.count }} )</h4>
                                </div>
                                <div class="card-body overflow-x-scroll">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>Persons</th>
                                                <th>Check in Status</th>
                                                <th>Check-in Time</th>
                                                {{-- <th>Entry</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Inner loop: Iterate over persons -->
                                            <tr ng-repeat="check_in in ticket.check_in_details track by $index">
                                                <td class="text-capitalize">@{{ check_in.name.replace('_', ' ') }}</td>
                                                <td class="text-capitalize fw-bold @{{ check_in.check_in_status ? 'text-success' : ' text-warning' }}">
                                                    @{{ check_in.check_in_status ? "Checked In" : "Not Checked In" }}</td>
                                                {{-- <td>@{{ ticket.check_in_count }}</td> --}}
                                                <td>@{{ check_in.check_in_time || 'N/A' }}</td>
                                                {{-- <td ><input class="form-control text-center fw-bold" type="number" min="0"
                                                         id="@{{ 'checkInCoutn_' + $index }}"></td> --}}
                                                <td><button ng-click="manup.checkin_btn(ticket.name,$index)"
                                                        class="btn  text-nowrap @{{ check_in.check_in_status ? 'disabled btn-success' : ' btn-warning' }} ">Check@{{ check_in.check_in_status ? 'ed' : '' }}
                                                        In</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <button ng-click="manup.checked_in_submit('{{ request()->ticket_code }}')"
                                class="btn btn-primary">Submite</button>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.layouts._footer')
        </div>

        <!-- Custom template | don't include it in your project! -->
        @include('admin.layouts._customTemplate')
        <!-- End Custom template -->
    </div>
    @include('admin.layouts._js')
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script>
        $(document).ready(function() {
            $("#basic-datatables").DataTable({});

            $("#multi-filter-select").DataTable({
                pageLength: 5,
                initComplete: function() {
                    this.api()
                        .columns()
                        .every(function() {
                            var column = this;
                            var select = $(
                                    '<select class="form-select"><option value=""></option></select>'
                                )
                                .appendTo($(column.footer()).empty())
                                .on("change", function() {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column
                                        .search(val ? "^" + val + "$" : "", true, false)
                                        .draw();
                                });

                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function(d, j) {
                                    select.append(
                                        '<option value="' + d + '">' + d + "</option>"
                                    );
                                });
                        });
                },
            });

            // Add Row
            $("#add-row").DataTable({
                pageLength: 5,
            });

            var action =
                '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $("#addRowButton").click(function() {
                $("#add-row")
                    .dataTable()
                    .fnAddData([
                        $("#addName").val(),
                        $("#addPosition").val(),
                        $("#addOffice").val(),
                        action,
                    ]);
                $("#addRowModal").modal("hide");
            });
        });
    </script>
</body>

</html>
