<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryMovie;
use Illuminate\Http\Request;

class CategoryMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Movies = CategoryMovie::all();
        return view("Admin.CategoryMovie.index" , compact("Movies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.CategoryMovie.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required' , 'min:3'],
            'description' => ['required' , 'min:3'],
            'status' => ['required'  , 'min:0' , 'max:1'],

        ]);
        CategoryMovie::create([
            'name' => $validated['name'] ,
            'description' => $validated['description'] ,
            'status' => $validated['status'] ,
        ]);
        return redirect('/Admin/CategoryMovie')->with('status', 'با موفقیت ثبت شد.');
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
        $Movies = CategoryMovie::find($id);
        return view("Admin.CategoryMovie.edit" , compact("Movies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Movies = CategoryMovie::findOrFail($id);
        $validated = $request->validate([
            'name' => ['required' , 'min:3'],
            'description' => ['required' , 'min:3'],
            'status' => ['required'  , 'min:0' , 'max:1'],
        ]);
        $Movies->update($validated);

        return redirect('/Admin/CategoryMovie')->with('status', 'با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Movies = CategoryMovie::findOrFail($id);
        $Movies->delete($id);
        return redirect('/Admin/CategoryMovie')->with('status', 'با موفقیت حذف شد.');
    }
}
