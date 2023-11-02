<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        /* Tambahkan margin atas untuk menghindari tumpang tindih dengan navbar */
        .container_waw {
            margin-top: 20px;
            width: 100%;
        }

        /* Membuat form lebih lebar dan tengah */
        .form-group {
            width: 70%;
            margin: 0 auto;
        }

        /* Membuat tombol Submit lebih rapi */
        button[type="submit"] {
            margin-top: 10px;
        }

        /* Gaya tambahan sesuai kebutuhan Anda */
        /* Misalnya, mengubah warna latar belakang form atau teks */
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="" style="padding-top: 100px; width: 85%;">
            <h2 class="text-center">Add Medicine</h2>
            <form action="{{ url('medicine/add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="medicine_name">Medicine Name</label>
                    <input type="text" class="form-control text-white" required name="medicine_name" id="medicine_name" placeholder="Enter medicine name">
                </div>
                <div class="form-group mb-3">
                    <label for="stock_quantity">Stock Quantity</label>
                    <input type="number" class="form-control text-white" required name="stock_quantity" id="stock_quantity" placeholder="Enter stock quantity">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="text" class="form-control text-white" required name="price" id="price" placeholder="Enter price">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control text-white" required name="description" id="description" placeholder="Enter description"></textarea>
                </div>
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    @include('admin.script')
</body>

</html>