<?php

namespace App\Http\Controllers\Backend;
use App\Model\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view()
    {
        $data['allData'] = Category::all();
        return view('admin.category.view', $data);
    }
    public function add()
    {
       
        return view('admin.category.edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',

            
        ]);
        


        $data = new Category();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('category.view')->with('success', 'Category Added Successfully');
    }



    public function edit($id)
    {

      
        
        $editData = Category::find($id);

        return view('admin.category.edit', compact('editData'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',

            
        ]);
        
        $data = Category::find($id);
        $data->name = $request->name;
        

        $data->save();
        return redirect()->route('category.view')->with('success', 'Edit Category Successfully');
    }

    public function delete($id)
    {
        $class = Category::find($id);


        $class->delete();
        return redirect()->route('category.view')->with('success', 'Year Deleted Successfully');
    }

}
