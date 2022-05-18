<?php

namespace App\Http\Controllers;

use App\Form3;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form3::select('*','form3s.created_at')
        ->join('users', 'form3s.form3s_user', '=', 'users.id')
        ->where('form3s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.3.index',compact('form','districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$districts = District::find(Auth::user()->districts_id);
        return view('forms.3.form',compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form3();

        $form->form3s_user   = Auth::user()->id;
        $form->form3s_districts_id    =Auth::user()->districts_id;
        $form->form3s_district = $request->form3s_district;
        $form->form3s_prefecture = $request->form3s_prefecture;
        $form->form3s_province = $request->form3s_province;
        $form->form3s_country = $request->form3s_country;
        $form->form3s_continent = $request->form3s_continent;
        $form->form3s_world = $request->form3s_world;

        $form->save();

            return redirect()->to('forms-3');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form3::find($id);
        $districts = District::find($form->form3s_districts_id);
        return view('forms.3.show',compact('form','districts'));
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
        $form = Form3::find($id);
        $form->delete();
        return Redirect()->back();
    }
}
