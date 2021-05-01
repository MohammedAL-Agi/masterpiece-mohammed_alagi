<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();

        return view('admin.admin', compact('admins'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name'     => 'required|min:3',
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

        $admin           = new Admin;
        $admin->name     = $request->input('name');
        $admin->email    = $request->input('email');
        $admin->password = Hash::make($request->get('password'));
        $admin->image    = $imageName;

        $admin->save();
        toast('Admin Created!', 'success');

        return back()->with('success', 'Admin created successfully.');
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.editAdmin', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email',
            'password' => 'required|min:6',
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $admin = Admin::findOrFail($id);
            $imageName = $admin->image;
        }

        $admin = Admin::findOrFail($id);
        $admin->name     = $request->get('name');
        $admin->email    = $request->get('email');
        $admin->password = Hash::make($request->get('password'));
        $admin->image    = $imageName;
        $admin->save();
        toast('Admin Updated!', 'success');

        return redirect('/admin/admin')->with('success', 'Contact updated!');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        toast('Admin Deleted!', 'success');

        return back()->with('success', 'Admin deleted!');
    }

    public function test(Request $req)
    {
        return ($req->textarea);
    }
}
