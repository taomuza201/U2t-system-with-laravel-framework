<?php

namespace App\Http\Controllers;

use App\District;
use App\Form1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Forms_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form1::select('*','form1s.created_at')
        ->join('users', 'form1s.form1s_user', '=', 'users.id')
        ->where('form1s_districts_id',Auth::user()->districts_id)
        ->get();
        $districts = District::find(Auth::user()->districts_id);
        return view('forms.1.index',compact('form','districts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.1.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new Form1();
         $data->form1s_man  =  $request->form1s_man;
         $data->form1s_woman  =  $request->form1s_woman;
         $data->form1s_totalgender  =  $request->form1s_totalgender;
         $data->form1s_household  =  $request->form1s_household;
         $data->form1s_elderly  =  $request->form1s_elderly;
         $data->form1s_child_to_6_years  =  $request->form1s_child_to_6_years;
         $data->form1s_chronic_patient  =  $request->form1s_chronic_patient;
         $data->form1s_pregnant_women  =  $request->form1s_pregnant_women;
         $data->form1s_elderly_can_not_help  =  $request->form1s_elderly_can_not_help;
         $data->form1s_woman_to_35_years  =  $request->form1s_woman_to_35_years;
         $data->form1s_handicapped  =  $request->form1s_handicapped;
         $data->form1s_child_development_center  =  $request->form1s_child_development_center;
         $data->form1s_school  =  $request->form1s_school;
         $data->form1s_college  =  $request->form1s_college;
         $data->form1s_university  =  $request->form1s_university;
         $data->form1s_community_learning_center  =  $request->form1s_community_learning_center;
         $data->form1s_non_formal_education  =  $request->form1s_non_formal_education;
         $data->form1s_village_books  =  $request->form1s_village_books;
         $data->form1s_other_educational_1  =  $request->form1s_other_educational_1;
         $data->form1s_other_educational_1_quantity  =  $request->form1s_other_educational_1_quantity;
         $data->form1s_other_educational_2  =  $request->form1s_other_educational_2;
         $data->form1s_other_educational_2_quantity  =  $request->form1s_other_educational_2_quantity;
         $data->form1s_measure  =  $request->form1s_measure;
         $data->form1s_church  =  $request->form1s_church;
         $data->form1s_abbey  =  $request->form1s_abbey;
         $data->form1s_shrine  =  $request->form1s_shrine;
         $data->form1s_other_religion_1  =  $request->form1s_other_religion_1;
         $data->form1s_other_religion_1_quantity  =  $request->form1s_other_religion_1_quantity;
         $data->form1s_other_religion_2  =  $request->form1s_other_religion_2;
         $data->form1s_other_religion_2_quantity  =  $request->form1s_other_religion_2_quantity;
         $data->form1s_health_hospital  =  $request->form1s_health_hospital;
         $data->form1s_other_public_health_1  =  $request->form1s_other_public_health_1;
         $data->form1s_other_public_health_1_quantity  =  $request->form1s_other_public_health_1_quantity;
         $data->form1s_other_public_health_2  =  $request->form1s_other_public_health_2;
         $data->form1s_other_public_health_2_quantity  =  $request->form1s_other_public_health_2_quantity;
         $data->form1s_police  =  $request->form1s_police;
         $data->form1s_other_police_1  =  $request->form1s_other_police_1;
         $data->form1s_other_police_1_quantity  =  $request->form1s_other_police_1_quantity;
         $data->form1s_other_police_2  =  $request->form1s_other_police_2;
         $data->form1s_other_police_2_quantity  =  $request->form1s_other_police_2_quantity;
         $data->form1s_district_office  =  $request->form1s_district_office;
         $data->form1s_community_development_office  =  $request->form1s_community_development_office;
         $data->form1s_agriculture_office  =  $request->form1s_agriculture_office;
         $data->form1s_public_health_office  =  $request->form1s_public_health_office;
         $data->form1s_livestock_office  =  $request->form1s_livestock_office;
         $data->form1s_other_government_agencies_1  =  $request->form1s_other_government_agencies_1;
         $data->form1s_other_government_agencies_1_quantity  =  $request->form1s_other_government_agencies_1_quantity;
         $data->form1s_other_government_agencies_2  =  $request->form1s_other_government_agencies_2;
         $data->form1s_other_government_agencies_2_quantity  =  $request->form1s_other_government_agencies_2_quantity;
         $data->form1s_bank  =  $request->form1s_bank;
         $data->form1s_oil_and_gas_pump  =  $request->form1s_oil_and_gas_pump;
         $data->form1s_industrial_plant  =  $request->form1s_industrial_plant;
         $data->form1s_pig_farm  =  $request->form1s_pig_farm;
         $data->form1s_chicken_farm  =  $request->form1s_chicken_farm;
         $data->form1s_rice_mill  =  $request->form1s_rice_mill;
         $data->form1s_garage  =  $request->form1s_garage;
         $data->form1s_food_store  =  $request->form1s_food_store;
         $data->form1s_electronics_store  =  $request->form1s_electronics_store;
         $data->form1s_other_business_1  =  $request->form1s_other_business_1;
         $data->form1s_other_business_1_quantity  =  $request->form1s_other_business_1_quantity;
         $data->form1s_other_business_2  =  $request->form1s_other_business_2;
         $data->form1s_other_business_2_quantity  =  $request->form1s_other_business_2_quantity;
         $data->form1s_river  =  $request->form1s_river;
         $data->form1s_creek  =  $request->form1s_creek;
         $data->form1s_natural_reservoir  =  $request->form1s_natural_reservoir;
         $data->form1s_other_river_1  =  $request->form1s_other_river_1;
         $data->form1s_other_river_1_quantity  =  $request->form1s_other_river_1_quantity;
         $data->form1s_other_river_2  =  $request->form1s_other_river_2;
         $data->form1s_other_river_2_quantity  =  $request->form1s_other_river_2_quantity;
         $data->form1s_irrigation_system  =  $request->form1s_irrigation_system;
         $data->form1s_irrigation_canal  =  $request->form1s_irrigation_canal;
         $data->form1s_canal  =  $request->form1s_canal;
         $data->form1s_pool  =  $request->form1s_pool;
         $data->form1s_self_built_reservoir  =  $request->form1s_self_built_reservoir;
         $data->form1s_shallow_well  =  $request->form1s_shallow_well;
         $data->form1s_rocking_pond  =  $request->form1s_rocking_pond;
         $data->form1s_village_water_supply  =  $request->form1s_village_water_supply;
         $data->form1s_other_water_source_1  =  $request->form1s_other_water_source_1;
         $data->form1s_other_water_source_1_quantity  =  $request->form1s_other_water_source_1_quantity;
         $data->form1s_other_water_source_2  =  $request->form1s_other_water_source_2;
         $data->form1s_other_water_source_2_quantity  =  $request->form1s_other_water_source_2_quantity;
         $data->form1s_forest  =  $request->form1s_forest;
         $data->form1s_other_natural_resources_1  =  $request->form1s_other_natural_resources_1;
         $data->form1s_other_natural_resources_1_quantity  =  $request->form1s_other_natural_resources_1_quantity;
         $data->form1s_other_natural_resources_2  =  $request->form1s_other_natural_resources_2;
         $data->form1s_other_natural_resources_2_quantity  =  $request->form1s_other_natural_resources_2_quantity;
         $data->form1s_community_welfare_fund  =  $request->form1s_community_welfare_fund;
         $data->form1s_savings_program  =  $request->form1s_savings_program;
         $data->form1s_health_security_fund  =  $request->form1s_health_security_fund;
         $data->form1s_contribution_welfare_fund  =  $request->form1s_contribution_welfare_fund;
         $data->form1s_other_capital_1  =  $request->form1s_other_capital_1;
         $data->form1s_other_capital_1_quantity  =  $request->form1s_other_capital_1_quantity;
         $data->form1s_other_capital_2  =  $request->form1s_other_capital_2;
         $data->form1s_other_capital_2_quantity  =  $request->form1s_other_capital_2_quantity;
         $data->form1s_otop  =  $request->form1s_otop;
         $data->form1s_community_enterprise_group  =  $request->form1s_community_enterprise_group;
         $data->form1s_other_enterprise_1  =  $request->form1s_other_enterprise_1;
         $data->form1s_other_enterprise_1_quantity  =  $request->form1s_other_enterprise_1_quantity;
         $data->form1s_other_enterprise_2  =  $request->form1s_other_enterprise_2;
         $data->form1s_other_enterprise_2_quantity  =  $request->form1s_other_enterprise_2_quantity;
         $data->form1s_user   = Auth::user()->id;
         $data->form1s_districts_id    =Auth::user()->districts_id;
         $data->save();


             return redirect()->to('forms-1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $form = Form1::find($id);
        return view('forms.1.show',compact('form'));
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
        $form = Form1::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
