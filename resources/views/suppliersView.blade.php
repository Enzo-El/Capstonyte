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
                        The Current Supplier is:
                    </h1>

                    <div class="card">

                        <div class="card-header">
                            <h2>The Supplier is {{ $supplierUpdate->supplier_name }}</h2>
                        </div>

                        <div class="card-body">
                            <!-- Update Supplier Form -->
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="supplier_name">Supplier Name:</label>
                                    <input type="text" class="form-control" name="supplier_name" value="{{ $supplierUpdate->supplier_name }}" disabled required />
                                </div>

                                <div class="form-group">
                                    <label for="ingredient">Ingredient Supplied:</label>
                                    <input type="text" class="form-control" id="ingredient" name="ingredient" value="{{ $supplierUpdate->ingredient }}" disabled required />
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $supplierUpdate->quantity }}" disabled required />
                                </div>

                                <a href="{{ route('suppliers') }}" type="button" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>