<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="">
                    <div class="container" style="padding-top: 30px;">
                        <h1 class="text-center">Add Medical Device</h1>
                        <form action="{{ url('medicaldevice/add') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="device_name">Device Name</label>
                                <input type="text" class="form-control text-white" required name="device_name" id="device_name" placeholder="Enter device name">
                            </div>
                            <div class="form-group">
                                <label for="serial_number">Serial Number</label>
                                <input type="number" class="form-control text-white" required name="serial_number" id="serial_number" placeholder="Enter serial number">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Speciality</label>
                                <input type="text" class="form-control text-white" required name="speciality" id="speciality" placeholder="Enter speciality">
                            </div>
                            <!-- Add more form fields as needed -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>

</html>