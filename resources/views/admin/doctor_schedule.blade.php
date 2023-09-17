<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- Include your sidebar, navbar, and other content here -->
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="container">
                <h2>Doctor Schedule CRUD</h2>
                <a href="#" class="btn btn-success mb-2">Add Doctor Schedule</a>
                <!-- <table class="table table-bordered" style="width: 900px; height: 200px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Doctor Name</th>
                            <th>Specialty</th>
                            <th>Schedule</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size: 16px;">
                            <td style="padding: 10px;">1</td>
                            <td style="padding: 10px;">Dr. Lydia</td>
                            <td style="padding: 10px;">Skin</td>
                            <td style="padding: 10px;">
                                <ul>
                                    <li>Monday: 09.00 AM - 04.00 PM</li>
                                    <li>Tuesday: 09.00 AM - 04.00 PM</li>
                                    <li>Wednesday: 09.00 AM - 12.00 PM</li>
                                </ul>
                            </td>
                            <td style="padding: 10px;">
                                <a href="#" class="btn btn-info btn-sm" style="font-size: 14px;">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" style="font-size: 14px;">Delete</a>
                            </td>
                        </tr>
                        <!-- Tambahkan jadwal dokter lainnya di sini -->
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
    <!-- Include your scripts and other footer content here -->
    @include('admin.script')
</body>
</html>