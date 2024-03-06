<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customers List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div role="main" class="px-4"> <!-- class="col-md-9 ml-sm-auto col-lg-10 px-4" -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Your List of Customers is here:</h1>
            
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addCustomerModal">Create/Add</button>
                </div>

                <!-- Filter and Print Buttons -->
                <div class="row">
                    <!-- Filter Button -->
                    <div class="col-md-6">
                        <!-- Filter Button code goes here -->
                        <button class="btn btn-info" data-toggle="modal" data-target="#filterModal">Filter</button>
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
                <table class="table table-striped" id="customerTable">
                    <thead>
                        <tr>
                            <th>Customer ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Display customer data here -->
                
                    </tbody>
                </table>
            </div>

            <!-- Add Customer Modal -->
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
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                </div>

                                <div class="form-group">
                                    <label for="middleName">Middle Name:</label>
                                    <input type="text" class="form-control" id="middleName" name="middleName">
                                </div>

                                <div class="form-group">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>

                                <div class="form-group">
                                    <label for="contact">Contact:</label>
                                    <input type="number" class="form-control" id="contact" name="contact" required>
                                </div>

                                <div class="form-group">
                                    <label for="sales">Sales Amount:</label>
                                    <input type="number" class="form-control" id="sales" name="sales" required>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary" name="addCustomer">Done</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Customer Modal -->
            <div class="modal fade" id="updateCustomerModal" tabindex="-1" role="dialog" aria-labelledby="updateCustomerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateCustomerModalLabel">Update Customer</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <!-- Update Customer Form -->
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" id="customerId" name="customerId">

                                <div class="form-group">
                                    <label for="updateFirstName">First Name:</label>
                                    <input type="text" class="form-control" id="updateFirstName" name="updateFirstName" required>
                                </div>

                                <div class="form-group">
                                    <label for="updateMiddleName">Middle Name:</label>
                                    <input type="text" class="form-control" id="updateMiddleName" name="updateMiddleName">
                                </div>

                                <div class="form-group">
                                    <label for="updateLastName">Last Name:</label>
                                    <input type="text" class="form-control" id="updateLastName" name="updateLastName" required>
                                </div>

                                <div class="form-group">
                                    <label for="updateAddress">Address:</label>
                                    <input type="text" class="form-control" id="updateAddress" name="updateAddress" required>
                                </div>

                                <div class="form-group">
                                    <label for="updateContact">Contact:</label>
                                    <input type="number" class="form-control" id="updateContact" name="updateContact" required>
                                </div>

                                <div class="form-group">
                                    <label for="updateSales">Sales Amount:</label>
                                    <input type="number" class="form-control" id="updateSales" name="updateSales" required>
                                </div>

                                <div class="form-group">
                                    <label for="updateStatus">Status:</label>
                                    <select class="form-control" id="updateStatus" name="updateStatus" required>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary" name="updateCustomer">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Customer Modal -->
            <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteCustomerModalLabel">Delete Customer</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p>Are you sure you want to delete this customer?</p>
                        </div>

                        <div class="modal-footer">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" id="deleteCustomerId" name="deleteCustomerId">

                                <button type="submit" class="btn btn-danger" name="deleteCustomer">Delete</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filter Modal -->
            <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="filterModalLabel">Filter Customers</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="filterForm">
                                <div class="form-group">
                                    <label for="filterStatus">Status:</label>
                                    <select class="form-control" id="filterStatus">
                                        <option value="">All</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="applyFilter">Apply Filter</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sort Modal -->
            <div class="modal fade" id="sortModal" tabindex="-1" role="dialog" aria-labelledby="sortModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sortModalLabel">Sort Customers</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="sortForm">
                                <div class="form-group">
                                    <label for="sortBy">Sort By:</label>
                                    <select class="form-control" id="sortBy">
                                        <option value="firstname">First Name</option>
                                        <option value="lastname">Last Name</option>
                                        <option value="date_added">Date Added</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sortOrder">Sort Order:</label>
                                    <select class="form-control" id="sortOrder">
                                        <option value="asc">Ascending</option>
                                        <option value="desc">Descending</option>
                                    </select>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="applySort">Apply Sort</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>