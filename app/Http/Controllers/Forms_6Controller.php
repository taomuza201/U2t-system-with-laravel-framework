<?php

namespace App\Http\Controllers;

use App\Form6;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form6::select('*', 'form6s.created_at')
        ->join('users', 'form6s.form6s_user', '=', 'users.id')
        ->where('form6s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.6.index', compact('form', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.6.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form6();

        $form->form6s_user = Auth::user()->id;
        $form->form6s_districts_id = Auth::user()->districts_id;
        $form->form6s_agency = $request->form6s_agency;
        $form->form6s_work = $request->form6s_work;



        $form6s_file = time().'.'.$request->form6s_file->extension();
        $request->form6s_file->move(public_path('uploads_image'),$form6s_file);
        $form->form6s_file  =$form6s_file ;

        $form->save();

        return redirect()->to('forms-6');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form6::find($id);
        $checkpdf= 'false';
        if (strpos($form, 'pdf') !== false) {
            $checkpdf= 'true';
        }

        return view('forms.6.show', compact('form','checkpdf'));
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
        $form = Form6::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
