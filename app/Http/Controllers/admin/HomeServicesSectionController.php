<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HomeServicesSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class HomeServicesSectionController extends Controller
{
    public function index(Request $request)
    {
        $sections = HomeServicesSection::latest();
        if(!empty($request->get('keyword'))){
            $sections = $sections->where('title','like','%'.$request->get('keyword').'%');
        }
        $sections = $sections->latest()->paginate(10);
        return view('admin.home_services_section.list',compact('sections'));
    }

    public function create()
    {
        return view('admin.home_services_section.create');
    }


    public function store(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'nullable|string',
        ]);

        if ($validator->passes()) {
            $section = new HomeServicesSection();
            $section->title = $request->title;

            if ($request->hasFile('icon')) {
                $icon = $request->file('icon');
                $iconName = 'icon_' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('uploads/first_section'), $iconName);
                $section->icon = $iconName;
            }

            $section->save();

            // Redirect to index page
            return redirect()->route('home_services_section.index')->with('success', 'Service added successfully');
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }


    public function edit($id)
{
    $section = HomeServicesSection::findOrFail($id);
    return view('admin.home_services_section.edit')->with('section', $section);
}

public function update(Request $request, $id)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title' => 'nullable|string',
    ]);

    if ($validator->passes()) {
        $section = HomeServicesSection::findOrFail($id);
        $section->title = $request->title;

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconName = 'icon_' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('uploads/first_section'), $iconName);
            $section->icon = $iconName;
        }

        $section->save();

        // Redirect to index page
        return redirect()->route('home_services_section.index')->with('success', 'Service updated successfully');
    } else {
        return back()->withErrors($validator)->withInput();
    }
}

public function destroy($id)
{
    $section = HomeServicesSection::findOrFail($id);
    $section->delete();

    // Flash success message
    session()->flash('success', 'Service deleted successfully');

    // Return JSON response
    return response()->json([
        'status' => true,
        'message' => 'Service deleted successfully'
    ]);
}


}
