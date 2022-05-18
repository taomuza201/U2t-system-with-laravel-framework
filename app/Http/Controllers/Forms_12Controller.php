<?php

namespace App\Http\Controllers;

use App\Form12;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form12::select('*', 'form12s.created_at')
        ->join('users', 'form12s.form12s_user', '=', 'users.id')
        ->where('form12s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.12.index', compact('form', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.12.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form12();

        $form->form12s_user = Auth::user()->id;
        $form->form12s_districts_id = Auth::user()->districts_id;
        $form->form12s_definition = $request->form12s_definition;
        $form->form12s_refer = $request->form12s_refer;
        $form->form12s_details = str_replace("uploads_image","../uploads_image",$request['form12s_details']);
        $form->form12s_learning_tools = str_replace("uploads_image","../uploads_image",$request['form12s_learning_tools']);

        $form->save();

        return redirect()->to('forms-12');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $form = Form12::find($id);
        $details = str_replace("../uploads_image", "../uploads_image", $form->form12s_details);
        $details_learning_tools = str_replace("../uploads_image", "../uploads_image", $form->form12s_learning_tools);

        return view('forms.12.show', compact('form','details','details_learning_tools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Form12::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
