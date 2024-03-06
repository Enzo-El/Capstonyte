<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() { 
        $supplier = Supplier::all();
        return view('/suppliers', compact('supplier'));
    }

    public function create() {
        return view('suppliers.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'supplier_name' => 'required',
            'ingredient' => 'required',
            'quantity' => 'required'
        ]);

        $supplier = Supplier::create([
            'supplier_name' => $request->supplier_name,
            'ingredient' => $request->ingredient,
            'quantity' => $request->quantity
        ]);

        if ($supplier) {
            return back()->with('success', 'Supplier created successfully!');
        }

        return back()->with('error', 'Unable to create Supplier!');
    }

    public function supplierupdateview($id) {
        $supplierUpdate = Supplier::findOrFail($id);
        return view('suppliersUpdate', compact('supplierUpdate'));
    }

    public function supplierupdate(Request $request, int $id) {
        $this->validate($request, [
            'supplier_name' => 'required',
            'ingredient' => 'required',
            'quantity' => 'required'
        ]);

        Supplier::findOrFail($id)->update([
            'supplier_name' => $request->supplier_name,
            'ingredient' => $request->ingredient,
            'quantity' => $request->quantity
        ]);

        return redirect('suppliers');
    }


    public function supplierdelete(int $id) {
        $supplierdel = Supplier::findOrFail($id);
            $supplierdel->delete();
        return redirect()->back()->with('status', 'Supplier Deleted!');
    }

    public function supplierView($id) {
        $supplierUpdate = Supplier::findOrFail($id);
        return view('suppliersView', compact('supplierUpdate'));
    }
}
