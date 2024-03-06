<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div role="main"> <!-- class="col-md-9 ml-sm-auto col-lg-10 px-4" -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Your List of Products is here:</h1>
                    
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">Create/Add</button>
                </div>

                <!-- Filter and Print Buttons -->
                <div class="row">
                    <!-- Filter Button -->
                    <div class="col-md-6">
                        <!-- Filter Button code goes here -->
                    </div>
                
                    <!-- Sort and Print Buttons -->
                    <div class="col-md-6 text-right">
                        <!-- Sort Button -->
                        <button class="btn btn-secondary" data-toggle="modal" data-target="#sortModal">Sort</button>
                    
                        <!-- Print Button -->
                        <button class="btn btn-success" id="printButton">Print</button>
                    </div>
                </div>

                <!-- Product Table -->
                @if (count($product) == 0)
                    <h1 style="font-size: 32px;">
                        No Products!
                    </h1>
                @else
                <table class="table table-striped" id="productTable">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Display product data here -->
                        
                        @foreach ($product as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <a href="{{url('productsView/'.$product->id.'')}}" type="button" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{url('productupdateview/'.$product->id.'')}}" type="button" class="btn btn-secondary btn-sm">Edit</a>
                                    <a href="{{ route('productdelete', [$product->id]) }}" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete this product?')" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>

            <!-- Add Product Modal -->
            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <!-- Add Product Form -->
                            <form action="{{ route('product.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="product_name">Product Name:</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Name of Product" required />
                                    @error('product_name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required />
                                    @error('quantity')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required />
                                    @error('price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary" name="addProduct">Done</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Product Modal -->
            <div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteProductModalLabel">Delete Product</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p>Are you sure you want to delete this product?</p>
                        </div>

                        <div class="modal-footer">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" id="deleteProductId" name="deleteProductId">

                                <button type="submit" class="btn btn-danger" name="deleteProduct">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>