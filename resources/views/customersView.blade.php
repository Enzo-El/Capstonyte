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
                        The Current Customers is:
                    </h1>

                    <div class="card">

                        <div class="card-header">
                            <h2>The Customer is {{ $customerUpdate->customer_name }}</h2>
                        </div>

                        <div class="card-body">
                            <!-- View Customer Form -->
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="customer_name">Customer Name:</label>
                                    <input type="text" class="form-control" name="customer_name" value="{{ $customerUpdate->customer_name }}" disabled required />
                                </div>

                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ $customerUpdate->address }}" disabled required />
                                </div>

                                <div class="form-group">
                                    <label for="contact">Sales:</label>
                                    <input type="number" class="form-control" id="contact" name="contact" value="{{ $contactUpdate->contact }}" disabled required />
                                </div>

                                <a href="{{ route('customers') }}" type="button" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>