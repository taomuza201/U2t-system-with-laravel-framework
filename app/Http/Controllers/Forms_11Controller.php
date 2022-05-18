<?php

namespace App\Http\Controllers;

use App\Form11;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form11::select('*', 'form11s.created_at')
        ->join('users', 'form11s.form11s_user', '=', 'users.id')
        ->where('form11s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.11.index', compact('form', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.11.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form11();

        $form->form11s_user = Auth::user()->id;
        $form->form11s_districts_id = Auth::user()->districts_id;
        $form->form11s_title = $request->form11s_title;
        $form->form11s_refer = $request->form11s_refer;
        $form->form11s_details = str_replace("uploads_image","../uploads_image",$request['form11s_details']);

        $form->save();

        return redirect()->to('forms-11');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $form = Form11::find($id);
        $details = str_replace("../uploads_image", "../uploads_image", $form->form11s_details);

        return view('forms.11.show', compact('form','details'));
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
        $form = Form11::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
