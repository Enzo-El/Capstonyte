<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
            <div role="main"> <!-- class="col-md-9 ml-sm-auto col-lg-10 px-4" -->
                <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">
                        Update your Products here:
                    </h1>

                    <div class="card">

                        <div class="card-header">
                            <h2>Edit Product {{ $productUpdate->product_name }}</h2>
                        </div>

                        <div class="card-body">
                            <!-- Update Product Form -->
                            <form action="{{ route('productupdate', [$productUpdate->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="product_name">Product Name:</label>
                                    <input type="text" class="form-control" name="product_name" value="{{ $productUpdate->product_name }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $productUpdate->quantity }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="number" class="form-control" id="price" name="price" value="{{ $productUpdate->price }}" required>
                                </div>

                                <button type="submit" class="btn btn-primary" style="color:black">Update</button>
                                <a href="{{ route('products') }}" type="button" class="btn btn-secondary" style="color:black">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>