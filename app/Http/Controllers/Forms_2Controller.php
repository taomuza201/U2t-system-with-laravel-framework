<?php

namespace App\Http\Controllers;

use App\Form2;
use App\District;
use App\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form2::select('*','form2s.created_at')
        ->join('users', 'form2s.form2s_user', '=', 'users.id')
        ->where('form2s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);

        return view('forms.2.index',compact('form','districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villages = Village::where('villages_districts_id',Auth::user()->districts_id)->get();
        return view('forms.2.form',compact('villages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $form = new Form2();

         $form->form2s_user   = Auth::user()->id;
         $form->form2s_districts_id    =Auth::user()->districts_id;
        //  $form->form2s_village_number = $request->form2s_village_number;
        //  $form->form2s_village_name = $request->form2s_village_name;
         $form->form2s_villages_id  = $request->form2s_villages_id ;
         $form->form2s_house_number = $request->form2s_house_number;
         $form->form2s_name	 = $request->form2s_name	;
         $form->form2s_sex = $request->form2s_sex;
         $form->form2s_age = $request->form2s_age;
         $form->form2s_religion = $request->form2s_religion;
         $form->form2s_about_head_of_household = $request->form2s_about_head_of_household;
         $form->form2s_education_level = $request->form2s_education_level;
         $form->form2s_occupation = $request->form2s_occupation;
         $form->form2s_expertise = $request->form2s_expertise;
         $form->form2s_address_on = $request->form2s_address_on;
         $form->form2s_occupational_land = $request->form2s_occupational_land;
         $form->form2s_saving_type = $request->form2s_saving_type;
         $form->form2s_main_money = $request->form2s_main_money;
         $form->form2s_sub_money = $request->form2s_sub_money;
         $form->form2s_expenses = $request->form2s_expenses;
         $form->save();

             return redirect()->to('forms-2');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form2::find($id);
        $villages = Village::find($form->form2s_villages_id);

        return view('forms.2.show',compact('form','villages'));
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
         $form = Form2::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
