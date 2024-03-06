<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transactions List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div role="main"> <!-- class="col-md-9 ml-sm-auto col-lg-10 px-4" -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Your List of Transactions is here:</h1>
                    
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addTransactionModal">Create/Add</button>
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

                <!-- Transaction Table -->
                <table class="table table-striped" id="transactionTable">
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>Transaction Date</th>
                            <th>Description</th>
                            <th>Total Amount</th>
                            <th>Transaction Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Display transaction data here -->
                        
                    </tbody>
                </table>
            </div>

            <!-- Add Transaction Modal -->
            <div class="modal fade" id="addTransactionModal" tabindex="-1" role="dialog" aria-labelledby="addTransactionModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addTransactionModalLabel">Add Transaction</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-group">
                                    <label for="transaction_date">Transaction Date</label>
                                    <input type="date" class="form-control" id="transaction_date" name="transaction_date" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" required>
                                </div>

                                <div class="form-group">
                                    <label for="amount">Total Amount</label>
                                    <input type="number" class="form-control" id="amount" name="amount" required>
                                </div>

                                <div class="form-group">
                                    <label for="transaction_type">Transaction Type</label>
                                    <select class="form-control" id="transaction_type" name="transaction_type" required>
                                        <option value="cash_income">cash_income</option>
                                        <option value="cash_expense">cash_expense</option>
                                        <option value="credit_receivable">credit_receivable</option>
                                        <option value="credit_payable">credit_payable</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary" name="addTransaction">Done</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Transaction Modal -->
            <div class="modal fade" id="updateTransactionModal" tabindex="-1" role="dialog" aria-labelledby="updateTransactionModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateTransactionModalLabel">Update Transaction</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <!-- Update Transaction Form -->
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" id="transactionId" name="transactionId">

                                <div class="form-group">
                                    <label for="updateTransactionDate">Transaction Date</label>
                                    <input type="date" class="form-control" id="updateTransactionDate" name="updateTransactionDate" required>
                                </div>

                                <div class="form-group">
                                    <label for="updateDescription">Description</label>
                                    <input type="text" class="form-control" id="updateDescription" name="updateDescription" required>
                                </div>

                                <div class="form-group">
                                    <label for="updateAmount">Total Amount</label>
                                    <input type="number" class="form-control" id="updateAmount" name="updateAmount" required>
                                </div>

                                <div class="form-group">
                                    <label for="updateTransactionType">Transaction Type</label>
                                    <select class="form-control" id="updateTransactionType" name="updateTransactionType" required>
                                        <option value="cash_income">cash_income</option>
                                        <option value="cash_expense">cash_expense</option>
                                        <option value="credit_receivable">credit_receivable</option>
                                        <option value="credit_payable">credit_payable</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary" name="updateTransaction">Update</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Transaction Modal -->
            <div class="modal fade" id="deleteTransactionModal" tabindex="-1" role="dialog" aria-labelledby="deleteTransactionModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteTransactionModalLabel">Delete Transaction</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <p>Are you sure you want to delete this transaction?</p>
                        </div>

                        <div class="modal-footer">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" id="deleteTransactionId" name="deleteTransactionId">

                                <button type="submit" class="btn btn-danger" name="deleteTransaction">Delete</button>
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
                            <h5 class="modal-title" id="filterModalLabel">Filter Transactions</h5>

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
                                        <option value="cash_income">cash_income</option>
                                        <option value="cash_expense">cash_expense</option>
                                        <option value="credit_receivable">credit_receivable</option>
                                        <option value="credit_payable">credit_payable</option>
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
                            <h5 class="modal-title" id="sortModalLabel">Sort Transactions</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="sortForm">
                                <div class="form-group">
                                    <label for="sortBy">Sort By:</label>
                                    <select class="form-control" id="sortBy">
                                        <option value="transaction_date">Transaction Date</option>
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