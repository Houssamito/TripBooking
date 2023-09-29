<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCategoryRequest;
use App\Http\Requests\updateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['route'] = 'categories';
        $data['categories']=Category::select('id','name', 'description', 'image', 'is_showing')->get();
        return view('admin.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'categories';
        return view('admin.category.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeCategoryRequest $request)
    {

        try {
            $validate = $request->validated();


            $image = $request->file('image')->store('public/assets/uploads/Category');

            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->is_showing = $request->is_showing ? '1' : '0';
            $category->image = $image;
            $category->save();
            
            

            return redirect()->route('categories.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $data['category'] = $category;
        $data['route'] = 'categories';
        
        return view('admin.category.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $data['category'] = $category;
        $data['route'] = 'categories';
        
        return view('admin.category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCategoryRequest $request, Category $category)
    {

        try {
            $validate = $request->validated();
            $image = $category->image;
            if ($request->hasFile('image')) {
                Storage::delete($image);
                $image = $request->file('image')->store('public/assets/uploads/Category');
            }

            $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_showing' => $request->is_showing ? '1' : '0',
            'image' => $image,
            ]);
            

            return redirect()->route('categories')->with('success',trans("messages_trans.success_update"));;
        } catch (\Exception $e) {
            return redirect()->withErrors('error', $e->getMessage());

        }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Storage::delete($category->image);
        $category->delete();
        return redirect()->route('categories')->with('success',trans("messages_trans.success_delete"));
    }
}
