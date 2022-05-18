<?php

namespace App\Http\Controllers;

use App\Form5;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form5::select('*', 'form5s.created_at')
        ->join('users', 'form5s.form5s_user', '=', 'users.id')
        ->where('form5s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.5.index', compact('form', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.5.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form5();

        $form->form5s_user = Auth::user()->id;
        $form->form5s_districts_id = Auth::user()->districts_id;
        $form->form5s_title = $request->form5s_title;
        $form->form5s_commentator = $request->form5s_commentator;
        $form->form5s_details = str_replace("uploads_image","../uploads_image",$request['form5s_details']);

        $form->save();

        return redirect()->to('forms-5');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form5::find($id);
        $details = str_replace("../uploads_image", "../uploads_image", $form->form5s_details);

        return view('forms.5.show', compact('form','details'));
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
        $form = Form5::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
