<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SubjectsController extends Controller
{
    public function index()
    {
        // dd('sdsd');
        $subjects = Subjects::select('id', 'name', 'description')->get();
        return view('subjects.index')->with('subjects', $subjects);
    }

    public function create()
    {
        // dd('sdsd');
        return view('subjects.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }

        if ($record = Subjects::firstOrCreate($data)) {
            Session::flash('message', 'Added Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('subject.index');
        } else {
            Session::flash('message', 'Data not saved!');
            Session::flash('alert-class', 'alert-danger');
        }

        return Back();
    }

    public function edit($id)
    {
        // dd('sdsd');
        $subject = Subjects::find($id);
        return view('subjects.edit')->with('subject', $subject);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_method', '_token', 'submit');

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'description' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->Back()->withInput()->withErrors($validator);
        }
        $subject = Subjects::find($id);

        if ($subject->update($data)) {

            Session::flash('message', 'Update successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('subject.index');
        } else {
            Session::flash('message', 'Data not updated!');
            Session::flash('alert-class', 'alert-danger');
        }

        return Back()->withInput();
    }
    
     // Delete
     public function destroy($id){
        Subjects::destroy($id);
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('subject.index');
     }
}
