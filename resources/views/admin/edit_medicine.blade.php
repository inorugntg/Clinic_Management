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
            <div class="container">
                <h2>Edit Medicine</h2>
                <form action="{{ route('admin.medicine.update', $medicines->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Ini digunakan untuk menandai bahwa ini adalah request PUT untuk update -->
                    <div class="form-group">
                        <label for="medicine_name">Medicine Name</label>
                        <input type="text" class="form-control" required name="medicine_name" id="medicine_name" value="{{ $medicines->medicine_name }}">
                    </div>
                    <div class="form-group">
                        <label for="stock_quantity">Stock Quantity</label>
                        <input type="number" class="form-control" required name="stock_quantity" id="stock_quantity" value="{{ $medicines->stock_quantity }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" required name="price" id="price" value="{{ $medicines->price }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" required name="description" id="description">{{ $medicines->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End custom js for this page -->
</body>

</html>
