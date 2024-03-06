<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customers List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div role="main"> <!-- class="col-md-9 ml-sm-auto col-lg-10 px-4" -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Your List of Customers is here:</h1>
                    
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addCustomerModal">Create/Add</button>
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

                <!-- Customer Table -->
                @if (count($customer) == 0)
                    <h1 style="font-size: 32px;">
                        No Customers!
                    </h1>
                @else
                <table class="table table-striped" id="customerTable">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Sales</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Display product data here -->
                        
                        @foreach ($customer as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->customer_name}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->contact}}</td>
                                <td>
                                    <a href="{{url('customersView/'.$customer->id.'')}}" type="button" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{url('customerupdateview/'.$customer->id.'')}}" type="button" class="btn btn-secondary btn-sm">Edit</a>
                                    <a href="{{ route('customerdelete', [$customer->id]) }}" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete this customer?')" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>

            <!-- Add Product Modal -->
            <div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addCustomerModalLabel">Add Customer</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <!-- Add Customer Form -->
                            <form action="{{ route('customer.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="customer_name">Customer Name:</label>
                                    <input type="text" class="form-control" id="product_name" name="customer_name" placeholder="Name of Customer" required />
                                    @error('customer_name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required />
                                    @error('address')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="contact">Sales:</label>
                                    <input type="number" class="form-control" id="contact" name="contact" placeholder="Sales" required />
                                    @error('contact')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary" name="addCustomer">Done</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <!-- Delete Product Modal -->
            <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
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
                            <form method="post" action="">
                                <input type="hidden" id="deleteProductId" name="deleteProductId">

                                <button type="submit" class="btn btn-danger" name="deleteProduct">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

</x-app-layout>