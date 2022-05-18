<?php

namespace App\Http\Controllers;

use App\Form14;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_14Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form14::select('*', 'form14s.created_at')
        ->join('users', 'form14s.form14s_user', '=', 'users.id')
        ->where('form14s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.14.index', compact('form', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.14.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form14();

        $form->form14s_user = Auth::user()->id;
        $form->form14s_districts_id = Auth::user()->districts_id;
        $form->form14s_title = $request->form14s_title;
        $form->form14s_details = str_replace("uploads_image","../uploads_image",$request['form14s_details']);

        $form->save();

        return redirect()->to('forms-14');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form14::find($id);
        $details = str_replace("../uploads_image", "../uploads_image", $form->form14s_details);

        return view('forms.14.show', compact('form','details'));
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
        $form = Form14::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
