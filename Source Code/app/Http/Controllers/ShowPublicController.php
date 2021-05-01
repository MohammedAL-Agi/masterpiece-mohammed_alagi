<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowPublicController extends Controller
{
    public function index()
    {
        $Categories = Category::all();
        $FeaturedProducts = Product::limit(8)-> get();
        $HotProducts = Product::where('discount', '!=', '0')->limit(9)->orderBy("discount", "desc")->get();
        return view('public.index', compact('FeaturedProducts', 'Categories', 'HotProducts'));
    }
    public function shop()
    {
        $Products = Product::paginate(9);
        $Categories = Category::select('id', 'name')->get();
        return view('public.shop', compact('Products', 'Categories'));
    }

    public function shopID($id)
    {
        $Products = Product::where('category_id', $id)->paginate(9);
        $Categories = Category::select('id', 'name')->get();
        return view('public.shop', compact('Products', 'Categories'));
    }

    public function Product($id)
    {
        $Products = DB::table('products')
            ->select('products.id', 'products.name', 'products.image', 'products.price', 'products.discount', 'products.description', 'categories.name AS category_name', 'categories.id AS category_id')
            ->where('products.id', $id)
            ->join("categories", "products.category_id", "categories.id")
            ->get();
        // dd($Products);
        $Product = $Products[0];

        $reviews = DB::table('customers')
            ->select('reviews.comment', 'reviews.rate', 'reviews.created_at',  'customers.name', 'customers.image')
            ->where('reviews.product_id', '=', $id)
            ->join('reviews', 'customers.id', 'reviews.customer_id')
            ->get();
        //        dd($reviews);
        $category_id = $Product->category_id;

        $relatedProducts = DB::table('products')
            ->where('category_id', "=", $category_id)
            ->where("id", "!=", $id)
            ->get();
        // dd($relatedProducts);
        $averageRate = 0;
        if (count($reviews)) {
            $total = 0;
            foreach ($reviews as $review) {
                $total += $review->rate;
            }
            $averageRate = round($total / count($reviews));
        }

        return view('public.productDetails', compact('Product', 'reviews', "relatedProducts", "averageRate"));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $Products = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->paginate(9);
        $Categories = Category::select('id', 'name')->get();
        return view('public.shop', compact('Products', 'Categories'));
    }
}
