<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Suppliers List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

                <!-- Supplier Table -->
                <table class="table table-striped" id="supplierTable">
                    <thead>
                        <tr>
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Status</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Display supplier data here -->

                    </tbody>
                </table>
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
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group">
                                    <label for="supplierName">Supplier Name:</label>
                                    <input type="text" class="form-control" id="supplierName" name="supplierName" required>
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
                                    <label for="status">Status:</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Amount:</label>
                                    <input type="number" class="form-control" id="amount" name="amount" required>
                                </div>

                                <button type="submit" class="btn btn-primary" name="addSupplier">Done</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Supplier Modal -->
            <div class="modal fade" id="updateSupplierModal" tabindex="-1" role="dialog" aria-labelledby="updateSupplierModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateSupplierModalLabel">Update Supplier</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <!-- Update Supplier Form -->
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" id="supplierId" name="supplierId">

                                <div class="form-group">
                                    <label for="updateSupplierName">Supplier Name:</label>
                                    <input type="text" class="form-control" id="updateSupplierName" name="updateSupplierName" required>
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
                                    <label for="updateStatus">Status:</label>
                                    <select class="form-control" id="updateStatus" name="updateStatus" required>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="updateAmount">Amount:</label>
                                    <input type="number" class="form-control" id="updateAmount" name="updateAmount" required>
                                </div>

                                <button type="submit" class="btn btn-primary" name="updateSupplier">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Supplier Modal -->
            <div class="modal fade" id="deleteSupplierModal" tabindex="-1" role="dialog" aria-labelledby="deleteSupplierModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteSupplierModalLabel">Delete Supplier</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p>Are you sure you want to delete this supplier?</p>
                        </div>

                        <div class="modal-footer">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" id="deleteSupplierId" name="deleteSupplierId">

                                <button type="submit" class="btn btn-danger" name="deleteSupplier">Delete</button>
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
                            <h5 class="modal-title" id="filterModalLabel">Filter Suppliers</h5>

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
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
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
                            <h5 class="modal-title" id="sortModalLabel">Sort Suppliers</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="sortForm">
                                <div class="form-group">
                                    <label for="sortBy">Sort By:</label>
                                    <select class="form-control" id="sortBy">
                                        <option value="company_name">Supplier Name</option>
                                        <option value="amount">Amount</option>
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