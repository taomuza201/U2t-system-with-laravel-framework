<?php

namespace App\Http\Controllers;

use App\Form10;
use App\Village;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form10::select('*','form10s.created_at')->join('users', 'form10s.form10s_user', '=', 'users.id')
        ->join('villages', 'form10s.form10s_villages_id', '=', 'villages.villages_id')
        ->where('form10s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.10.index',compact('form','districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $villages = Village::where('villages_districts_id',Auth::user()->districts_id)->get();

        return view('forms.10.form',compact('villages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $form = new Form10();

         $form->form10s_user   = Auth::user()->id;
         $form->form10s_districts_id    =Auth::user()->districts_id;

         $form->form10s_villages_id   = $request->form10s_villages_id  ;
        //  $form->form10s_village_number = $request->form10s_village_number;
        //  $form->form10s_village_name = $request->form10s_village_name;



         $form->form10s_economic = $request->form10s_economic;
         $form->form10s_social	 = $request->form10s_social	;
         $form->form10s_environmental = $request->form10s_environmental;
         $form->form10s_culture = $request->form10s_culture;
         $form->form10s_community_grants = $request->form10s_community_grants;

         $form->save();

             return redirect()->to('forms-10');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form10::find($id);
        $villages = Village::find($form->form10s_villages_id);
        return view('forms.10.show',compact('form','villages'));
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
        $form = Form10::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
