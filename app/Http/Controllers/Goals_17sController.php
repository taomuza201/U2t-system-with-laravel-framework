<?php

namespace App\Http\Controllers;

use App\Goals_17s;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Goals_17sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

      $round = $id;
        $goals_17s = Goals_17s::where('goals_17s_districts_id',Auth::user()->districts_id)->where('goals_17s_refer',$round)->first();
        if($goals_17s!=''){
         
            return view('goals.goals_17s.edit',compact('goals_17s','round'));
        }else{
           
          return view('goals.goals_17s.index',compact('round'));
        }
        
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
        $goals_17s = new  Goals_17s(); 
     

          $goals_17s->goals_17s_refer   = $request->goals_17s_refer ;

          $goals_17s->goals_17s_people   = $request->goals_17s_people ;
          $goals_17s->goals_17s_male   = $request->goals_17s_male ;
          $goals_17s->goals_17s_female   = $request->goals_17s_female ;


          $goals_17s->goals_17s_age_1_14   = $request->goals_17s_age_1_14 ;
          $goals_17s->goals_17s_age_15_35   = $request->goals_17s_age_15_35 ;
          $goals_17s->goals_17s_age_36_56   = $request->goals_17s_age_36_56 ;
          $goals_17s->goals_17s_age_57_plus   = $request->goals_17s_age_57_plus ;

          $goals_17s->goals_17s_area_size   = $request->goals_17s_area_size ;



          
        $goals_17s->goals_17s_user  = Auth::user()->id;
        $goals_17s->goals_17s_districts_id  =Auth::user()->districts_id;
        $goals_17s->save();
        return redirect('goal/1');

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
    public function edit($id)
    {
        $goals_17s = Goals_17s::where('goals_17s_districts_id',Auth::user()->districts_id)->first();
        return response()->json($goals_17s);
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
        $goals_17s = Goals_17s::find($id); 
     

        // $goals_17s->goals_17s_refer   = $request->goals_17s_refer ;

        $goals_17s->goals_17s_people   = $request->goals_17s_people ;
        $goals_17s->goals_17s_male   = $request->goals_17s_male ;
        $goals_17s->goals_17s_female   = $request->goals_17s_female ;


        $goals_17s->goals_17s_age_1_14   = $request->goals_17s_age_1_14 ;
        $goals_17s->goals_17s_age_15_35   = $request->goals_17s_age_15_35 ;
        $goals_17s->goals_17s_age_36_56   = $request->goals_17s_age_36_56 ;
        $goals_17s->goals_17s_age_57_plus   = $request->goals_17s_age_57_plus ;

        $goals_17s->goals_17s_area_size   = $request->goals_17s_area_size ;



        
      $goals_17s->goals_17s_user  = Auth::user()->id;
      $goals_17s->goals_17s_districts_id  =Auth::user()->districts_id;
      $goals_17s->save();
      return redirect('goal/1');
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
