<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryNews;
use Illuminate\Http\Request;

class categoryNewsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $CategoryNews = CategoryNews::all();
        return view("Admin.CategoryNews.index" , compact("CategoryNews"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.CategoryNews.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required' , 'min:3'],
            'status' => ['required'  , 'min:0' , 'max:1'],
            'description' => ['required' , 'min:3'],

        ]);
        CategoryNews::create([
            'title' => $validated['title'] ,
            'status' => $validated['status'] ,
            'description' => $validated['description'] ,
        ]);
        return redirect('Admin/CategoryNews/')->with('status', 'با موفقیت ثبت شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $CategoryNews = CategoryNews::find($id);
        return view("Admin.CategoryNews.edit" , compact("CategoryNews"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        dd($request->all());

        $CategoryNews = CategoryNews::findOrFail($id);
        $validated = $request->validate([
            'title' => ['required' , 'min:3'],
            'status' => ['required'  , 'min:0' , 'max:1'],
            'description' => ['required' , 'min:3'],
        ]);
        $CategoryNews->update($validated);

        return redirect('Admin/CategoryNews/')->with('status', 'با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $CategoryNews = CategoryNews::findOrFail($id);
        $CategoryNews->destroy($id);
        return redirect('Admin/CategoryNews/')->with('status', 'با موفقیت حذف شد.');
    }
}
