<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class settingsController extends Controller
{
    public function index()
    {
        $settings = settings::all();
        return view("Admin.settings.index" , compact("settings"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.settings.create");
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


        ]);
//        $path = null;
//        if ($request->hasFile('image')) {
//            $path = $request->file('image')->store('image_c', 'public');
//        }
////        $path=$request->file('image')->store('image_c' , 'public');


        settings::create([
            'full_name' => $validated['full_name'] ,
            'description' => $validated['description'] ,

        ]);
        return redirect('/Admin/settings')->with('status', 'با موفقیت ثبت شد.');
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
        $settings = settings::find($id);
        return view("Admin.settings.edit" , compact("settings"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        dd($request->all());
        $settings = settings::findOrFail($id);
        $validated = $request->validate([
            'full_name' => ['required' , 'min:3'],
            'description' => ['required' , 'min:3'],

        ]);
//        $dataToUpdate = [
//            'full_name' => $validated['full_name'] ,
//            'description' => $validated['description'] ,
//            'role' => $validated['role'] ,
//        ];
//        if ($request->hasFile('image')) {
//            $path = $request->file('image')->store('image_c', 'public');
//
//        }
        $settings->update($validated);
        return redirect('/Admin/settings')->with('status', 'با موفقیت ویرایش شد.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $settings = settings::findOrFail($id);
        $settings->delete($id);
        return redirect('/Admin/settings')->with('status', 'با موفقیت حذف شد.');
    }

}
