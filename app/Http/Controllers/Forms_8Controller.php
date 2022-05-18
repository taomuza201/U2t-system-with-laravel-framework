<?php

namespace App\Http\Controllers;

use App\Form8;
use App\Village;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_8Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form8::select('*','form8s.created_at')
        ->join('users', 'form8s.form8s_user', '=', 'users.id')
        ->where('form8s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.8.index',compact('form','districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villages = Village::where('villages_districts_id',Auth::user()->districts_id)->get();
        return view('forms.8.form',compact('villages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $form = new Form8();

         $form->form8s_user   = Auth::user()->id;
         $form->form8s_districts_id    =Auth::user()->districts_id;

         $form->form8s_villages_id  = $request->form8s_villages_id ;
        //  $form->form8s_village_number = $request->form8s_village_number;
        //  $form->form8s_village_name = $request->form8s_village_name;

         $form->form8s_house_number = $request->form8s_house_number;
         $form->form8s_name	 = $request->form8s_name	;
         $form->form8s_sex = $request->form8s_sex;
         $form->form8s_age = $request->form8s_age;
         $form->form8s_religion = $request->form8s_religion;
         $form->form8s_about_head_of_household = $request->form8s_about_head_of_household;
         $form->form8s_education_level = $request->form8s_education_level;
         $form->form8s_occupation = $request->form8s_occupation;
         $form->form8s_expertise = $request->form8s_expertise;
         $form->form8s_address_on = $request->form8s_address_on;
         $form->form8s_occupational_land = $request->form8s_occupational_land;
         $form->form8s_saving_type = $request->form8s_saving_type;
         $form->form8s_main_money = $request->form8s_main_money;
         $form->form8s_sub_money = $request->form8s_sub_money;
         $form->form8s_expenses = $request->form8s_expenses;
         $form->save();

             return redirect()->to('forms-8');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form8::find($id);
        $villages = Village::find($form->form8s_villages_id);
        return view('forms.8.show',compact('form','villages'));
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
        $form = Form8::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
