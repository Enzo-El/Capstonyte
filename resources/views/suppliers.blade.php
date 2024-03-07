<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Suppliers List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div role="main"> <!-- class="col-md-9 ml-sm-auto col-lg-10 px-4" -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Your List of Suppliers is here:</h1>
                    
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addSupplierModal">Create/Add</button>
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
                        {{-- <button class="btn btn-secondary" data-toggle="modal" data-target="#sortModal">Sort</button> --}}
                    
                        <!-- Print Button -->
                        <button class="btn btn-success" id="printButton">Print</button>
                    </div>
                </div>

                <!-- Supplier Table -->
                @if (count($supplier) == 0)
                    <h1 style="font-size: 32px;">
                        No Suppliers!
                    </h1>
                @else
                <table class="table table-striped" id="supplierTable">
                    <thead>
                        <tr>
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>Ingredient Supplied</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Display supplier data here -->
                        
                        @foreach ($supplier as $supplier)
                            <tr>
                                <td>{{$supplier->id}}</td>
                                <td>{{$supplier->supplier_name}}</td>
                                <td>{{$supplier->ingredient}}</td>
                                <td>{{$supplier->quantity}}</td>
                                <td>
                                    <a href="{{url('suppliersView/'.$supplier->id.'')}}" type="button" class="btn btn-primary btn-sm" style="color:black">View</a>
                                    <a href="{{url('supplierupdateview/'.$supplier->id.'')}}" type="button" class="btn btn-secondary btn-sm" style="color:black">Edit</a>
                                    <a href="{{ route('supplierdelete', [$supplier->id]) }}" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete this Supplier?')" style="color:black">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>

            <!-- Add Supplier Modal -->
            <div class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-labelledby="addSupplierModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSupplierModalLabel">Add Supplier</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <!-- Add Supplier Form -->
                            <form action="{{ route('supplier.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="supplier_name">Supplier Name:</label>
                                    <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Name of Supplier" required />
                                    @error('supplier_name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="ingredient">Ingredient Supplied:</label>
                                    <input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Ingredient" required />
                                    @error('ingredient')
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

                                <button type="submit" class="btn btn-primary" name="addSupplier" style="color:black">Done</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color:black">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
                // Print Button
                $('#printButton').click(function () {
                    var printContents = document.getElementById('productTable').outerHTML;
                    var originalContents = document.body.innerHTML;
                    
                    document.body.innerHTML = '<h2 class="text-center">List of Customers</h2><p class="text-center">As of ' + new Date().toLocaleDateString() + '</p><br>' + printContents;
        
                    window.print();
        
                    document.body.innerHTML = originalContents;
                    location.reload();
                });
            });
    </script>

</x-app-layout>