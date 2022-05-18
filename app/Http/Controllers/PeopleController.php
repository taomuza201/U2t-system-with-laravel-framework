<?php

namespace App\Http\Controllers;

use App\District;
use App\people;
use App\User;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $districts = District::get();
        $people = User::join('districts', 'users.districts_id', '=', 'districts.districts_id')->where('position','operator')->get();
        $pro = User::join('districts', 'users.districts_id', '=', 'districts.districts_id')->where('position','professor')->get();
        return  view('people.index',compact('districts','people','pro'));
    }
    public function getpro(Request $request)
    {
        $districts_name = $request->get('districts_name');

        if($districts_name==''){
            $pro = User::join('districts', 'users.districts_id', '=', 'districts.districts_id')
            ->where('position','professor')
            ->get();
        }else{
            $pro = User::join('districts', 'users.districts_id', '=', 'districts.districts_id')
            ->where('districts_name',$districts_name)
            ->where('position','professor')
            ->get();
        }
        

        return view('people.pro', compact('pro'))->render();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = people::join('districts', 'people.districts_id', '=', 'districts.districts_id')->where('id',$id)->first();

        return response()->json($data);

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
        //
    }
}
