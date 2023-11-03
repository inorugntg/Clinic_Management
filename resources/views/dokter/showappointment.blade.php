<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('dokter.css')
    <style>
        table {
            margin: 0;
            /* Menghapus margin di sisi kiri dan kanan */
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            white-space: nowrap;
            /* Menghindari teks yang terlalu panjang untuk pindah ke baris berikutnya */
            overflow: hidden;
            text-overflow: ellipsis;
            /* Menambahkan titik-titik lanjutan jika teks terlalu panjang */
            max-width: 200px;
            /* Batasan lebar maksimum untuk teks */
        }

        tr:nth-child(odd) {
            background-color: skyblue;
        }

        th {
            background-color: black;
            color: white;
        }

        /* Tambahkan style khusus untuk kolom Status dan Action */
        td.status,
        td.action {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
            /* Sesuaikan dengan lebar yang Anda inginkan */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
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
                                <a href="{{ route('canceled.appointment', $appoint->id) }}"><i  class="fa fa-times" aria-hidden="true" ></i></a>
                                <a href="{{ route('appointment.approved', $appoint->id) }}"><i class="fas fa-check" aria-hidden="true"></i></a>
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