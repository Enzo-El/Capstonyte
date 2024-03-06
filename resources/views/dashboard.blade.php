<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12"> -->
    <!--    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
    <!--        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> -->
    <!--            <div class="p-6 text-gray-900 dark:text-gray-100"> -->
    <!--                {{ __("You're logged in!, Welcome to Dashboard") }} -->
    <!--            </div> -->
    <!--        </div> -->
    <!--    </div> -->
    <!-- </div> -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div role="main"> <!-- class="col-md-9 ml-sm-auto col-lg-10 px-4" -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Your Total Figures are here!</h1>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Customers</h5>

                                <!-- Include customers count -->

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Suppliers</h5>

                                <!-- Include suppliers count -->

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Products</h5>

                                <!-- Include products count -->

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Transactions</h5>

                                <!-- Include transaction count -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
