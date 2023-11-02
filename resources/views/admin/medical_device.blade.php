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
            <div class="container mt-5">
                <h2 class="mb-3">Medical Devices CRUD</h2>
                <a href="{{ url('/medicaldevice_add') }}" class="btn btn-success mb-3">Add Medical Device</a>
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
                            <th>Device Name</th>
                            <th>Serial Number</th>
                            <th>Speciality</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($medicalDevices as $key => $device)
                        <tr style="font-size: 16px;">
                            <td style="padding: 10px;">{{ $key + 1 }}</td>
                            <td style="padding: 10px;">{{ $device->device_name }}</td>
                            <td style="padding: 10px;">{{ $device->serial_number }}</td>
                            <td style="padding: 10px;">{{ $device->speciality }}</td>
                            <td style="padding: 10px;">
                                <a href="{{ url('medicaldevice/edit', $device->id) }}" class="btn btn-info btn-sm" style="font-size: 14px;">Edit</a>
                                <a href="{{ url('medicaldevice/delete', $device->id) }}" class="btn btn-danger btn-sm" style="font-size: 14px;" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $device->id }}').submit();">Delete</a>

                                <form id="delete-form-{{ $device->id }}" action="{{ url('medicaldevice/delete', $device->id) }}" method="POST" style="display: none;">
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
    </div>
    <!-- Include your scripts and other footer content here -->
    @include('admin.script')
</body>

</html>