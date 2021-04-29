<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {

        request()->validate([
            'name' => 'required|min:4',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default_product.jpg';
        }

        $category        = new Category;
        $category->name  = $request->input('name');
        $category->image = $imageName;
        $category->save();
        // alert()->success('SuccessAlert', 'Category Created');
        toast('Category Created!', 'success');

        return back();
    }

    public function show(Category $category)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.editCategory', compact('category'));
    }
    public function update(Request $request, $id)
    {
        request()->validate([
            'name'  => 'required|min:4',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $category = Category::findOrFail($id);
            $imageName = $category->image;
        }

        $category        =  Category::find($id);
        $category->name  = $request->get('name');
        $category->image = $imageName;
        $category->save();
        toast('Category Updated.', 'success');
        return redirect('admin/category')->with('success', 'category updated!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        toast('Category Deleted', 'success');
        return back()->with('success', 'Category deleted!');
    }
}
