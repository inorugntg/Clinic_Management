<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('dokter.css')
    <style>
        table {
            margin: 0 auto;
            /* Center-align the table both horizontally and vertically */
            width: 100%;
            /* Adjust the width as needed */
            border-collapse: collapse;
            /* Collapse table borders */
        }

        th,
        td {
            padding: 10px;
            /* Add padding for spacing */
            text-align: center;
            /* Center-align text in table cells */
        }

        tr:nth-child(odd) {
            background-color: skyblue;
            /* Apply background color to alternate rows */
        }

        th {
            background-color: black;
            /* Header row background color */
            color: white;
            /* Header row text color */
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('dokter.sidebar')
        <!-- partial -->
        @include('dokter.navbar')
        <!--partial-->
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top:130px;">
                <table class="table table-dark table-hover border rounded text-center align-middle">
                    <tr>
                        <th class="align-middle text-center mx-3">Customer Name</th>
                        <th class="align-middle text-center mx-3">Email</th>
                        <th class="align-middle text-center mx-3">Phone</th>
                        <th class="align-middle text-center mx-3">Doctor Name</th>
                        <th class="align-middle text-center mx-3">Date</th>
                        <th class="align-middle text-center mx-3">Message</th>
                        <th class="align-middle text-center mx-3">Status</th>
                        <th class="align-middle text-center mx-3">Action</th>
                    </tr>
                    @foreach ($data as $appoint)
                    <tr>
                        <td class="align-middle text-center mx-3">{{$appoint->name}}</td>
                        <td class="align-middle text-center mx-3">{{$appoint->email}}</td>
                        <td class="align-middle text-center mx-3">{{$appoint->phone}}</td>
                        <td class="align-middle text-center mx-3">{{$appoint->doctor}}</td>
                        <td class="align-middle text-center mx-3">{{$appoint->date}}</td>
                        <td class="align-middle text-center mx-3">{{$appoint->message}}</td>
                        <td class="align-middle text-center mx-3">{{$appoint->status}}</td>
                        <td class="align-middle text-center mx-3">
                            <div class="mx-5">
                                <a class="btn btn-danger" href="{{ route('canceled.appointment', $appoint->id) }}">Canceled</a>
                                <a class="btn btn-success" href="{{ route('appointment.approved', $appoint->id) }}">Approved</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    @include('dokter.script')
    <!-- End custom js for this page -->
</body>

</html>
<!-- Your other content goes here -->