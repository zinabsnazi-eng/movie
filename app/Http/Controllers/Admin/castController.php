<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Casts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class castController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Casts = Casts::all();
        return view("Admin.casts.index" , compact("Casts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.casts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $validated =    $request->validate([
            'full_name' => ['required' , 'min:3'],
            'description' => ['required' , 'min:3'],
            'image'=>['required' , 'image' , 'mimes:jpeg,png,jpg,gif,svg'],
            'role' => ['required'  , 'in:actor,director'],

        ]);
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image_c', 'public');
        }
//        $path=$request->file('image')->store('image_c' , 'public');


        Casts::create([
            'full_name' => $validated['full_name'] ,
            'image' => $path ,
            'description' => $validated['description'] ,
            'role' => $validated['role'] ,
        ]);
        return redirect('/Admin/casts')->with('status', 'با موفقیت ثبت شد.');
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
        $Casts = Casts::find($id);
        return view("Admin.casts.edit" , compact("Casts"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        dd($request->all());
        $Casts = Casts::findOrFail($id);
        $validated = $request->validate([
            'full_name' => ['required' , 'min:3'],
            'description' => ['required' , 'min:3'],
            'image'=>['nullable' , 'image' , 'mimes:jpeg,png,jpg,gif,svg'],
            'role' => ['required'  , 'in:actor,director'],
        ]);
        $dataToUpdate = [
            'full_name' => $validated['full_name'] ,
            'description' => $validated['description'] ,
            'role' => $validated['role'] ,
        ];
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image_c', 'public');

        }
        $Casts->update($validated);
        return redirect('/Admin/casts')->with('status', 'با موفقیت ویرایش شد.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Casts = Casts::findOrFail($id);
        $Casts->delete($id);
        return redirect('/Admin/casts')->with('status', 'با موفقیت حذف شد.');
    }

}
