<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Customer;
use App\Orders;
use App\Contact;
use App\Admin;


class AdminIndexController extends Controller
{
    function index()
    {
        $admins = Admin::all();
        $products = Product::all();
        $customers = Customer::all();
        $orders = Orders::all();
        $categories = Category::all();
        $contacts = Contact::all();
        return view('admin.index', compact('products', 'customers', 'orders', 'categories', 'contacts', 'admins'));
    }
}
