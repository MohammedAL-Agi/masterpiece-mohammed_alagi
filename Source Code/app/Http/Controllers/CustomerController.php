<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        $Customers = Customer::all();
        return view('admin.Customer', compact('Customers'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'     => 'required|min:4',
            'email'    => 'required|email',
            'password' => 'required|min:6',
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }

        $customer           = new Customer;
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->password = Hash::make($request->get('password'));
        $customer->image    = $imageName;
        $customer->save();
        toast('Customer Created', 'success');

        return back()->with('success', 'Customer created successfully.');
    }

    public function edit($id)
    {
        $Customer = Customer::findOrFail($id);
        return view('admin.editCustomer', compact('Customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required|min:4',
            'email'    => 'required|email',
            'password' => 'required|min:6',
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $Customer  = Customer::findOrFail($id);
            $imageName = $Customer->image;
        }

        $Customer           = Customer::findOrFail($id);
        $Customer->name     =  $request->get('name');
        $Customer->email    = $request->get('email');
        $Customer->password = $request->get('password');
        $Customer->image    = $imageName;
        $Customer->save();
        toast('Customer Updated', 'success');

        return redirect('/admin/Customer')->with('success', 'Contact updated!');
    }

    public function destroy($id)
    {
        $Customer = Customer::findOrFail($id);
        $Customer->delete();
        toast('Customer Deleted', 'success');

        return back()->with('success', 'Customer deleted!');
    }
}
