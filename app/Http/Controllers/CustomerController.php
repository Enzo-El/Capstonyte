<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() { 
        $customer = Customer::all();
        return view('/customers', compact('customer'));
    }

    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'customer_name' => 'required',
            'address' => 'required',
            'contact' => 'required'
        ]);

        $customer = Customer::create([
            'customer_name' => $request->customer_name,
            'address' => $request->address,
            'contact' => $request->contact
        ]);

        if ($customer) {
            return back()->with('success', 'Customer created successfully!');
        }

        return back()->with('error', 'Unable to create Customer!');
    }

    public function customerupdateview($id) {
        $customerUpdate = Customer::findOrFail($id);
        return view('customersUpdate', compact('customerUpdate'));
    }

    public function customerupdate(Request $request, int $id) {
        $this->validate($request, [
            'customer_name' => 'required',
            'address' => 'required',
            'contact' => 'required'
        ]);

        Customer::findOrFail($id)->update([
            'customer_name' => $request->customer_name,
            'address' => $request->address,
            'contact' => $request->contact
        ]);

        return redirect('customers');
    }


    public function customerdelete(int $id) {
        $customerdel = Customer::findOrFail($id);
            $customerdel->delete();
        return redirect()->back()->with('status', 'Customer Deleted!');
    }

    public function customerView($id) {
        $customerUpdate = Customer::findOrFail($id);
        return view('customersView', compact('customerUpdate'));
    }
}
