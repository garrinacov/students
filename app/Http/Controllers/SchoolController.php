<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolcases = School::all();

        return view('index', compact('schoolcases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
        ]);
        $show = school::create($validatedData);
   
        return redirect('/school')->with('success', 'School is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schoolcase = School::findOrFail($id);

        return view('edit', compact('schoolcase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
        ]);
        School::whereId($id)->update($validatedData);

        return redirect('/school')->with('success', 'School data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schoolcase = School::findOrFail($id);
        $schoolcase->delete($id);

        return redirect('/school')->with('sucess', 'School data is successfully deleted');
    }
}