<?php

namespace App\Http\Controllers;

use App\Form7;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form7::select('*', 'form7s.created_at')
        ->join('users', 'form7s.form7s_user', '=', 'users.id')
        ->where('form7s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.7.index', compact('form', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.7.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form7();

        $form->form7s_user = Auth::user()->id;
        $form->form7s_districts_id = Auth::user()->districts_id;
        $form->form7s_title = $request->form7s_title;
        $form->form7s_details = str_replace("uploads_image","../uploads_image",$request['form7s_details']);

        $form->save();

        return redirect()->to('forms-7');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form7::find($id);
        $details = str_replace("../uploads_image", "../uploads_image", $form->form7s_details);

        return view('forms.7.show', compact('form','details'));
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
        $form = Form7::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
