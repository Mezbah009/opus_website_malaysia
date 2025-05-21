<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use App\Models\TempImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::query()->latest(); // Order by created_at DESC

        if (!empty($request->get('keyword'))) {
            $blogs->where('title', 'like', '%' . $request->get('keyword') . '%');
        }

        $blogs = $blogs->paginate(10); // No need for another latest() call
        return view('admin.blog.list', compact('blogs'));
    }


    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'image_id' => 'required',
            'category' => 'nullable|string',
            'title' => 'required|string',
            'date' => 'required|date',
            'excerpt' => 'required|string',
            'slug' => 'required|string|unique:blogs,slug',
            'description' => 'nullable',
        ]);

        if ($validator->passes()) {
            $blogPost = new Blog();

            $blogPost->category = $request->category;
            $blogPost->title = $request->title;
            $blogPost->date = $request->date;
            $blogPost->excerpt = $request->excerpt;
            $blogPost->description = $request->description;
            $blogPost->slug = $request->slug;

            // Handle image upload and save
            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);
                $newImageName = uniqid() . '.' . $ext; // Generate a unique filename
                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/blogs/' . $newImageName;

                File::copy($sPath, $dPath);

                $blogPost->image = $newImageName;
            }

            // dd($blogPost);
            $blogPost->save();

            return redirect()->route('blog.index')->with('success', 'Section added successfully');
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'category' => 'nullable|string',
            'title' => 'required|string',
            'date' => 'required|date',
            'excerpt' => 'required|string',
            'slug' => 'required|string|unique:blogs,slug,' . $id,
        ]);

        if ($validator->passes()) {
            // Find the blog post by its ID
            $blogPost = Blog::findOrFail($id);

            // Update the blog post attributes
            $blogPost->category = $request->category;
            $blogPost->title = $request->title;
            $blogPost->date = $request->date;
            $blogPost->excerpt = $request->excerpt;
            $blogPost->description = $request->description;
            $blogPost->slug = $request->slug;

            // Handle image update
            if (!empty($request->image_id)) {
                $tempImage = TempImage::find($request->image_id);
                $extArray = explode('.', $tempImage->name);
                $ext = last($extArray);
                $newImageName = uniqid() . '.' . $ext; // Generate a unique filename
                $sPath = public_path() . '/temp/' . $tempImage->name;
                $dPath = public_path() . '/uploads/blogs/' . $newImageName;

                File::copy($sPath, $dPath);

                // Remove old image if exists
                if (!empty($blogPost->image) && file_exists(public_path('/uploads/blogs/' . $blogPost->image))) {
                    unlink(public_path('/uploads/blogs/' . $blogPost->image));
                }

                $blogPost->image = $newImageName;
            }

            // Save the updated blog post
            $blogPost->save();

            return redirect()->route('blog.index')->with('success', 'Blog post updated successfully');
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    public function destroy($id)
    {
        $section = Blog::findOrFail($id);
        $section->delete();

        // Flash success message
        session()->flash('success', 'Blog deleted successfully');

        // Return JSON response
        return response()->json([
            'status' => true,
            'message' => 'Blog deleted successfully'
        ]);
    }
}
