<?php
namespace Laraveldaily\LaravelPermissionEditor\Http\Controllers;

use App\Http\Controllers\Controller;
use laraveldaily\laravelpermissioneditor\Model\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use File;
use Image;
class CrudController extends Controller
{
    public function index()
    {
       
        $data = Crud::all();
        return view('crud::index', compact('data'));
    }

    public function create()
    {
        return view('crud::create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'profile_image' => 'required|image',
        ]);

        // Handle the file upload


    if ($request->hasFile('profile_image')) {
        $profileImage = $request->file('profile_image');
        $imageName = Str::random(20) . '.' . $profileImage->getClientOriginalExtension();
        $imagePath =  $profileImage->store('profile_images', 'public');
        $validatedData['profile_image'] = $imagePath;
      
    }



      
        // Create the record
        Crud::create($validatedData);

        return redirect()->route('crud.index')->with('success', 'Record created successfully.');
    }

    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('crud::show', compact('data'));
    }

    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('crud::edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // Find the record
        $data = Crud::findOrFail($id);

        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'profile_image' => 'nullable|image',
        ]);

        // Handle the file upload
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->store('profile_images', 'public');

            $validatedData['profile_image'] = $imagePath;
        }

        // Update the record
        $data->update($validatedData);

        return redirect()->route('crud.index')->with('success', 'Record updated successfully.');
    }

    public function destroy($id)
    {
        // Find the record
        $data = Crud::findOrFail($id);

        // Delete the record
        $data->delete();

        return redirect()->route('crud.index')->with('success', 'Record deleted successfully.');
    }
}