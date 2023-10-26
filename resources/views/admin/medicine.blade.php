<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!--partial-->
        <div class="container-fluid page-body-wrapper">
            <div class="container">
                <h2>Medicines CRUD</h2>
                <a href="{{ url('medicine/add') }}" class="btn btn-success mb-2">Add Medicine</a>
                <table class="table table-bordered" style="width: 900px; height: 200px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Medicine Name</th>
                            <th>Stock Quantity</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Doctor</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($medicines as $medicine)
                            <tr style="font-size: 16px;">
                                <td style="padding: 10px;">{{ $medicine->id }}</td>
                                <td style="padding: 10px;">{{ $medicine->medicine_name }}</td>
                                <td style="padding: 10px;">{{ $medicine->stock_quantity }}</td>
                                <td style="padding: 10px;">{{ $medicine->price }}</td>
                                <td style="padding: 10px;">{{ $medicine->description }}</td>
                                <td style="padding: 10px;">{{ $medicine->doctor->name }}</td>
                                <td style="padding: 10px;">
                                    <a href="#" class="btn btn-info btn-sm" style="font-size: 14px;">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm" style="font-size: 14px;">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
