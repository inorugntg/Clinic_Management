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
                <table>
                    <tr style="background-color:black;">
                        <th style="padding:10px">Customer Name</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Doctor Name</th>
                        <th style="padding:10px">Date</th>
                        <th style="padding:10px">Message</th>
                        <th style="padding:10px">Status</th>
                        <th style="padding:10px">Action</th>
                    </tr>
                    @foreach ($data as $appoint)
                    <tr align="center" style="background-color: skyblue;">
                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>{{$appoint->message}}</td>
                        <td>{{$appoint->status}}</td>
                        <td>
                            <div class="btn-group">
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