<?php

namespace App\Http\Controllers;

use App\subjectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=subjectModel::get();
        return view('admin.view_subject', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=DB::table('teacher')->get();
        return view('admin.add_subject', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $validator=Validator::make($request->all(),[

            'sub_name'=>'required',
            'sub_id'=>'required|unique:subject',
            'class'=>'required',
            'full_mark'=>'required',
            'teacher_id'=>'required|unique:subject'

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data=subjectModel::create($input);
        return redirect('/subject');
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
        $data=subjectModel::findOrFail($id);
        $data_teacher=DB::table('teacher')->get();
        return view('admin.edit_subject', compact('data','data_teacher'));
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
        $data=subjectModel::findOrFail($id);
        $input=$request->all();
        $data->update($input);
        return redirect('/subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=subjectModel::findOrFail($id);
        $data->delete($data);
        return redirect('/subject');
    }
}
