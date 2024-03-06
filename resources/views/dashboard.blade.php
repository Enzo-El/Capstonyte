<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Guide') }}
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
                    <p class="h5">Welcome to our Sample page! </p>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5">Disclaimer: all the data inputs consolidated herewith came from all of the users who tried accessing this sample webpage for the purpose of trying this website</p>
                </div>    

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5">
                        Should you have any request, questions, suggestions and other inquiries,
                        You may contact us at <u>kodegohost.wd92p@gmail.com</u></p>
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
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Suppliers</h5>

                                <!-- Include suppliers count -->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Products</h5>

                                <!-- Include products count -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
