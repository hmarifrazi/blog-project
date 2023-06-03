<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['categories'] = Category::all();
        // return view('backend.category.index',$data);

        $categories = Category::all();
        // return view('backend.category.index',['categories'=>$categories]);
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormRequest $request)
    {
        // $data['name'] = $request->name;
        // $data['description'] = $request->description;
        $request->validated();
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        // ],[
        //     'name.required' => 'name field is must be filled out',
        //     'description.required' => 'description field is must be required',
        // ]);
        
       
        Category::create([
            "name" => $request->name,
            "description" => $request->description
        ]);
        // Session::flash('success', 'Category added successfully!');
        // session()->flash('success', 'Category added successfully!');
        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
    //    $data['category'] = $category;
    //    return view('backend.category.show',['category' => $category]);
       return view('backend.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //    $data['category'] = $category;
    //    return view('backend.category.edit',['category' => $category]);
       return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFormRequest $request, Category $category)
    {
        // $data['name'] = $request->name;
        // $data['description'] = $request->description;
        // $category->update($data);
        // Category::where('id',$category->id)->update([
        //     "name" => $request->name,
        //     "description" => $request->description
        // ]);
        $request->validated();
             $category->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
