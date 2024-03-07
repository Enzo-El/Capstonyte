<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Guide') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div role="main"> <!-- class="col-md-9 ml-sm-auto col-lg-10 px-4" -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h3"><b> Welcome to our Sample page! </b></p>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5"><b>Disclaimer:</b> all the data inputs consolidated herewith came from all of the users who
                         tried accessing this sample webpage for the purpose of trying this website for demonstration.</p>
                </div>    

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5"></p>
                    <br/>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5">
                        Should you have any request, questions, suggestions and other inquiries,
                        You may contact us at <b><u>kodegohost.wd92p@gmail.com</u></b></p>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5"></p>
                    <br/>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5"> <b>Customer Lists</b> </p>
                    <p class="h5">
                        This is where you may add, edit, view and delete your customers list or records.
                    </p>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5"> <b>Product Lists</b> </p>
                    <p class="h5">
                        This is where you may add, edit, view and delete your products list or records.
                    </p>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <p class="h5"> <b>Supplier Lists</b> </p>
                    <p class="h5">
                        This is where you may add, edit, view and delete your supplier list or records.
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
