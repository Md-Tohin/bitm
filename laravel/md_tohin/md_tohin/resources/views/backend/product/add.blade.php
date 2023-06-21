@extends('backend.admin_layout')

@section('title')
    Add Product
@endsection

@section('admin-content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Product</h1>
            <ol class="breadcrumb mb-4">
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            <div class="row mt-5">
                <div class="col-xl-10 mx-auto">
                    <div class="card mb-4 bg-light">
                        <div class="card-body mt-3">
                            <form action="{{route('store.product')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Product Name</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="cat_id" class="form-label">Select Category</label>
                                            <select class="form-select" name="cat_id" aria-label="Default select example">
                                                <option selected>Choose One</option>
                                                <option value="1">Electronics</option>
                                                <option value="2">Fashion</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Product Price</label>
                                            <input type="number" class="form-control" name="price" id="price">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="qty" class="form-label">Product Quantity</label>
                                            <input type="number" class="form-control" name="qty" id="qty">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="short_desc" class="form-label">Product Short Description</label>
                                            <textarea name="short_desc" id="short_desc" name="short_desc" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="long_desc" class="form-label">Product Lomg Description</label>
                                            <textarea name="long_desc" id="long_desc" name="long_desc" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Product Image</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary mt-3">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
