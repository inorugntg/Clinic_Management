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
                <!-- Tampilkan pesan notifikasi jika ada -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <table class="table table-bordered" style="width: 900px; height: 200px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Medicine Name</th>
                            <th>Stock Quantity</th>
                            <th>Price</th>
                            <th>Description</th>
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
                            <td style="padding: 10px;">
                                <a href="{{ route('admin.medicine.edit', $medicine->id) }}" class="btn btn-info btn-sm" style="font-size: 14px;">Edit</a>
                                <a href="{{ url('medicine/delete', $medicine->id) }}" class="btn btn-danger btn-sm" style="font-size: 14px;" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $medicine->id }}').submit();">Delete</a>
                                
                                <form id="delete-form-{{ $medicine->id }}" action="{{ url('medicine/delete', $medicine->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
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