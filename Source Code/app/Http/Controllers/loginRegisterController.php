<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginRegisterController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);
        $Admin = Admin::where('email', "=", request()->email)->get();
        if (count($Admin) && Hash::check(request()->password, $Admin->first()->password)) {
            $request->session()->put("loginUser", ["id" => $Admin[0]->id, "role" => "admin"]);
            return redirect('/');
        }

        $Customer = Customer::where('email', "=", request()->email, "And", 'password', "=", request()->password)
            ->get();
        if (count($Customer) && Hash::check(request()->password, $Customer->first()->password)) {
            $request->session()->put("loginUser", ["id" => $Customer[0]->id, "role" => "customer"]);
            return redirect('/');
        } else {
            return redirect('/login')->with('Error', 'Wrong email or password');
        }
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name'     => 'required',
                'email'    => 'required|email',
                'password' => 'required|min:6',
            ]
        );

        $customer = Customer::where('email', '=', $request->email)
            ->get();
        if (count($customer)) {
            return back()->with('failed', 'email already exists');
        } else {
            $customer = new Customer();
            $customer->name     = $request->input('name');
            $customer->email    = $request->input('email');
            $customer->password = Hash::make($request->input('password'));
            $customer->save();

            $id = DB::getPdo()->lastInsertId();
            $request->session()->put("loginUser", ["id" => $id, "role" => "customer"]);
            return redirect('/');
        }
    }
    public function logout()
    {
        session()->forget('loginUser');
        session()->forget('cart');
        return redirect('/');
    }
}
