<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $id = session('loginUser')['id'];

        $customer = Customer::where('id', '=', $id)->get();
        //=======================
        $orders = Orders::where("customer_id", $id)->get();

        $ordersTable = [];
        foreach ($orders as $order) {
            $order_products = DB::table("order_products")
                ->select("products.name", "products.image", "order_products.quantity")
                ->where("order_id", $order->id)
                ->join("products", "order_products.product_id", "products.id")
                ->get();
            $ordersTable[] = [
                "order" => $order,
                "order_products" => $order_products,
            ];
        }

        return view('public.profile', compact('customer', 'ordersTable'));
    }

    public function update(Request $request)
    {
        $id = session('loginUser')['id'];
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
        }
        $customer        = Customer::find($id);
        $customer->name  = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');

        if (isset($imageName)) {
            $customer->image = $imageName;
        }
        $customer->save();
        toast('Profile updated successfully', 'success');

        return redirect('/profile');
    }
}
