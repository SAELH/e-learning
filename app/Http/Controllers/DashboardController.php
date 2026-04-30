<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Actions\Fortify\CreateNewUser;

class DashboardController extends Controller
{
    public function get_courses(){

        $courses = Course::all();
        return view('dashboard.courses',compact('courses'));
    }

    public function get_assignments(){

        return view('dashboard.assignments');
    }

    public function add_course(Request  $request){
        
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'level'=> 'required',
            'description' => 'required',
            'thumbnail'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'=> 'required',
        ], [
            'name.required' => 'Course name is required',
            'category.required'  => 'Category is required',
            'level.required'=> 'Level is required',
            'description.required' => 'Description is required',
            'thumbnail.required' => 'Thumbnail is required',
            'price.required'=> 'Price is required',
        ]);

        if ($request->hasFile('thumbnail')) {
            // Store the file in 'storage/app/public/images'
            $path = $request->file('thumbnail')->store('images', 'public');

            Course::create([
            'name'=> $request->name,
            'category'=> $request->category,
            'level'=> $request->level,
            'description'=> $request->description,
            'thumbnail'=> $path,
            'price'=> $request->price,
            ]);
        }

        return back();
    }

    public function delete_course($id){

        $course = Course::find($id);
        $course->delete();
        return back();
    }

    public function edit_course($id){

        $course = Course::find($id);
        return view('dashboard.edit_courses', compact('course'));
    }

    public function update_course(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'level'=> 'required',
            'description' => 'required',
            'thumbnail'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'=> 'required',
        ], [
            'name.required' => 'Course name is required',
            'category.required'  => 'Category is required',
            'level.required'=> 'Level is required',
            'description.required' => 'Description is required',
            'thumbnail.required' => 'Thumbnail is required',
            'price.required'=> 'Price is required',
        ]);
        
        if ($request->hasFile('thumbnail')) {
            // Store the file in 'storage/app/public/images'
            $path = $request->file('thumbnail')->store('images', 'public');

            $course = Course::find($id);
            $course->update([
            'name'=> $request->name,
            'category'=> $request->category,
            'level'=> $request->level,
            'description'=> $request->description,
            'thumbnail'=> $path,
            'price'=> $request->price,
            ]);
        }
        return redirect()->route('dashboard.courses');
    }

    public function store_employee(Request $request,CreateNewUser $createNewUser){
       $createNewUser->create($request->all());
       return back();
    }
}
