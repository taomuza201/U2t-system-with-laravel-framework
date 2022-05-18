<?php

namespace App\Http\Controllers;

use App\District;
use App\Form4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form4::select('*', 'form4s.created_at')
        ->join('users', 'form4s.form4s_user', '=', 'users.id')
        ->where('form4s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.4.index', compact('form', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.4.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form4();

        $form->form4s_user = Auth::user()->id;
        $form->form4s_districts_id = Auth::user()->districts_id;
        $form->form4s_title = $request->form4s_title;
        $form->form4s_refer = $request->form4s_refer;
        $form->form4s_details = str_replace("uploads_image","../uploads_image",$request['form4s_details']);

        $form->save();

        return redirect()->to('forms-4');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $form = Form4::find($id);
        $details = str_replace("../uploads_image", "../uploads_image", $form->form4s_details);

        return view('forms.4.show', compact('form','details'));
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
        $form = Form4::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
