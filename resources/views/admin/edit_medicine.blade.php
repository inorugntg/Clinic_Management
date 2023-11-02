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

        <div class="" style="padding-top: 100px; width: 85%;">
            <h2 class="text-center">Edit Medicine</h2>
            <form action="{{ route('admin.medicine.update', $medicines->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Ini digunakan untuk menandai bahwa ini adalah request PUT untuk update -->
                <div class="form-group mb-3">
                    <label for="medicine_name">Medicine Name</label>
                    <input type="text" class="form-control text-white" required name="medicine_name" id="medicine_name" placeholder="Enter medicine name" value="{{ $medicines->medicine_name }}">
                </div>
                <div class="form-group mb-3">
                    <label for="stock_quantity">Stock Quantity</label>
                    <input type="number" class="form-control text-white" required name="stock_quantity" id="stock_quantity" placeholder="Enter stock quantity" value="{{ $medicines->stock_quantity }}">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="text" class="form-control text-white" required name="price" id="price" placeholder="Enter price" value="{{ $medicines->price }}">
                </div>
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control text-white" required name="description" id="description" placeholder="Enter description">{{ $medicines->description }}"</textarea>
                </div>
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        
    </div>
    <!-- End custom js for this page -->
</body>

</html>
