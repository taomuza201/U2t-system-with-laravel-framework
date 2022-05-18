<?php

namespace App\Http\Controllers;

use App\Goals_8s;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Goals_8sController extends Controller
{
    public function index($id)
    {

      $round = $id;
        $goals_8s = Goals_8s::where('goals_8s_districts_id',Auth::user()->districts_id)->where('goals_8s_refer',$round)->first();
        if($goals_8s!=''){
         
            return view('goals.goals_8s.edit',compact('goals_8s','round'));
        }else{
           
          return view('goals.goals_8s.index',compact('round'));
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

          $goals_8s = new  Goals_8s(); 
        //   $goals_8s->goals_8s_refer  = $request->goals_8s_refer;
          $goals_8s->goals_8s_at_name  = $request->goals_8s_at_name;
          $goals_8s->goals_8s_address  = $request->goals_8s_address;
          $goals_8s->goals_8s_problem  = $request->goals_8s_problem;
          $goals_8s->goals_8s_refer   = $request->goals_8s_refer ;


          $goals_8s->goals_8s_indicators_1  = $request->goals_8s_indicators_1;
          if( $request->goals_8s_indicators_1_refer != '' ){

            $goals_8s_indicators_1_refer = time().'.'.$request->goals_8s_indicators_1_refer->extension();  
            $request->goals_8s_indicators_1_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_1_refer);
            $goals_8s->goals_8s_indicators_1_refer  =$goals_8s_indicators_1_refer ;
            $goals_8s->goals_8s_indicators_1_name  =$request->goals_8s_indicators_1_refer->getClientOriginalName();
          }

          
          $goals_8s->goals_8s_indicators_2  = $request->goals_8s_indicators_2;
          if( $request->goals_8s_indicators_2_refer != '' ){
            $goals_8s_indicators_2_refer = time().'.'.$request->goals_8s_indicators_2_refer->extension();  
            $request->goals_8s_indicators_2_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_2_refer);
            $goals_8s->goals_8s_indicators_2_refer  =$goals_8s_indicators_2_refer ;
            $goals_8s->goals_8s_indicators_2_name  =$request->goals_8s_indicators_2_refer->getClientOriginalName();
          }

          
          $goals_8s->goals_8s_indicators_3  = $request->goals_8s_indicators_3;
          if( $request->goals_8s_indicators_3_refer != '' ){
            $goals_8s_indicators_3_refer = time().'.'.$request->goals_8s_indicators_3_refer->extension();  
            $request->goals_8s_indicators_3_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_3_refer);
            $goals_8s->goals_8s_indicators_3_refer  =$goals_8s_indicators_3_refer ;
            $goals_8s->goals_8s_indicators_3_name  =$request->goals_8s_indicators_3_refer->getClientOriginalName();
          }

          $goals_8s->goals_8s_indicators_4  = $request->goals_8s_indicators_4;
          if( $request->goals_8s_indicators_4_refer != '' ){
            $goals_8s_indicators_4_refer = time().'.'.$request->goals_8s_indicators_4_refer->extension();  
            $request->goals_8s_indicators_4_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_4_refer);
            $goals_8s->goals_8s_indicators_4_refer  =$goals_8s_indicators_4_refer ;
            $goals_8s->goals_8s_indicators_4_name  =$request->goals_8s_indicators_4_refer->getClientOriginalName();
          }

          $goals_8s->goals_8s_indicators_5  = $request->goals_8s_indicators_5;
          if( $request->goals_8s_indicators_5_refer != '' ){
            $goals_8s_indicators_5_refer = time().'.'.$request->goals_8s_indicators_5_refer->extension();  
            $request->goals_8s_indicators_5_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_5_refer);
            $goals_8s->goals_8s_indicators_5_refer  =$goals_8s_indicators_5_refer ;
            $goals_8s->goals_8s_indicators_5_name  =$request->goals_8s_indicators_5_refer->getClientOriginalName();
          }
          $goals_8s->goals_8s_indicators_6  = $request->goals_8s_indicators_6;
          if( $request->goals_8s_indicators_6_refer != '' ){
            $goals_8s_indicators_6_refer = time().'.'.$request->goals_8s_indicators_6_refer->extension();  
            $request->goals_8s_indicators_6_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_6_refer);
            $goals_8s->goals_8s_indicators_6_refer  =$goals_8s_indicators_6_refer ;
            $goals_8s->goals_8s_indicators_6_name  =$request->goals_8s_indicators_6_refer->getClientOriginalName();
          }


          
          $goals_8s->goals_8s_operation_1  = $request->goals_8s_operation_1;
          if( $request->goals_8s_operation_1_refer != '' ){
            $goals_8s_operation_1_refer = time().'.'.$request->goals_8s_operation_1_refer->extension();  
            $request->goals_8s_operation_1_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_1_refer);
            $goals_8s->goals_8s_operation_1_refer  =$goals_8s_operation_1_refer ;
            $goals_8s->goals_8s_operation_1_name  =$request->goals_8s_operation_1_refer->getClientOriginalName();
          }

          
          $goals_8s->goals_8s_operation_2  = $request->goals_8s_operation_2;
          if( $request->goals_8s_operation_2_refer != '' ){
            $goals_8s_operation_2_refer = time().'.'.$request->goals_8s_operation_2_refer->extension();  
            $request->goals_8s_operation_2_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_2_refer);
            $goals_8s->goals_8s_operation_2_refer  =$goals_8s_operation_2_refer ;
            $goals_8s->goals_8s_operation_2_name  =$request->goals_8s_operation_2_refer->getClientOriginalName();
          }
          
          $goals_8s->goals_8s_operation_3  = $request->goals_8s_operation_3;
          if( $request->goals_8s_operation_3_refer != '' ){
            $goals_8s_operation_3_refer = time().'.'.$request->goals_8s_operation_3_refer->extension();  
            $request->goals_8s_operation_3_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_3_refer);
            $goals_8s->goals_8s_operation_3_refer  =$goals_8s_operation_3_refer ;
            $goals_8s->goals_8s_operation_3_name  =$request->goals_8s_operation_3_refer->getClientOriginalName();
          }

          $goals_8s->goals_8s_operation_4  = $request->goals_8s_operation_4;
          if( $request->goals_8s_operation_4_refer != '' ){
            $goals_8s_operation_4_refer = time().'.'.$request->goals_8s_operation_4_refer->extension();  
            $request->goals_8s_operation_4_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_4_refer);
            $goals_8s->goals_8s_operation_4_refer  =$goals_8s_operation_4_refer ;
            $goals_8s->goals_8s_operation_4_name  =$request->goals_8s_operation_4_refer->getClientOriginalName();
          }
          $goals_8s->goals_8s_operation_5  = $request->goals_8s_operation_5;
          if( $request->goals_8s_operation_5_refer != '' ){
            $goals_8s_operation_5_refer = time().'.'.$request->goals_8s_operation_5_refer->extension();  
            $request->goals_8s_operation_5_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_5_refer);
            $goals_8s->goals_8s_operation_5_refer  =$goals_8s_operation_5_refer ;
            $goals_8s->goals_8s_operation_5_name  =$request->goals_8s_operation_5_refer->getClientOriginalName();
          }

          $goals_8s->goals_8s_operation_6  = $request->goals_8s_operation_6;
          if( $request->goals_8s_operation_6_refer != '' ){
            $goals_8s_operation_6_refer = time().'.'.$request->goals_8s_operation_6_refer->extension();  
            $request->goals_8s_operation_6_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_6_refer);
            $goals_8s->goals_8s_operation_6_refer  =$goals_8s_operation_6_refer ;
            $goals_8s->goals_8s_operation_6_name  =$request->goals_8s_operation_6_refer->getClientOriginalName();
          }


          

          $goals_8s->goals_8s_user  = Auth::user()->id;
          $goals_8s->goals_8s_districts_id  =Auth::user()->districts_id;
          $goals_8s->save();


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
        $goals_8s = Goals_8s::where('goals_8s_districts_id',Auth::user()->districts_id)->first();
        return response()->json($goals_8s);
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

      $data = Goals_8s::where('goals_8s_id',$id)->first();
      $goals_8s =   Goals_8s::find($id);
      //   $goals_8s->goals_8s_refer  = $request->goals_8s_refer;
        $goals_8s->goals_8s_at_name  = $request->goals_8s_at_name;
        $goals_8s->goals_8s_address  = $request->goals_8s_address;
        $goals_8s->goals_8s_problem  = $request->goals_8s_problem;


        $goals_8s->goals_8s_indicators_1  = $request->goals_8s_indicators_1;
          if( $request->goals_8s_indicators_1_refer != '' ){

            $goals_8s_indicators_1_refer = time().'.'.$request->goals_8s_indicators_1_refer->extension();  
            $request->goals_8s_indicators_1_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_1_refer);
            $goals_8s->goals_8s_indicators_1_refer  =$goals_8s_indicators_1_refer ;
            $goals_8s->goals_8s_indicators_1_name  =$request->goals_8s_indicators_1_refer->getClientOriginalName();
          }
          
          $goals_8s->goals_8s_indicators_2  = $request->goals_8s_indicators_2;
          if( $request->goals_8s_indicators_2_refer != '' ){
            $goals_8s_indicators_2_refer = time().'.'.$request->goals_8s_indicators_2_refer->extension();  
            $request->goals_8s_indicators_2_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_2_refer);
            $goals_8s->goals_8s_indicators_2_refer  =$goals_8s_indicators_2_refer ;
            $goals_8s->goals_8s_indicators_2_name  =$request->goals_8s_indicators_2_refer->getClientOriginalName();
          }
          
          $goals_8s->goals_8s_indicators_3  = $request->goals_8s_indicators_3;
          if( $request->goals_8s_indicators_3_refer != '' ){
            $goals_8s_indicators_3_refer = time().'.'.$request->goals_8s_indicators_3_refer->extension();  
            $request->goals_8s_indicators_3_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_3_refer);
            $goals_8s->goals_8s_indicators_3_refer  =$goals_8s_indicators_3_refer ;
            $goals_8s->goals_8s_indicators_3_name  =$request->goals_8s_indicators_3_refer->getClientOriginalName();
          }


          $goals_8s->goals_8s_indicators_4  = $request->goals_8s_indicators_4;
          if( $request->goals_8s_indicators_4_refer != '' ){
            $goals_8s_indicators_4_refer = time().'.'.$request->goals_8s_indicators_4_refer->extension();  
            $request->goals_8s_indicators_4_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_4_refer);
            $goals_8s->goals_8s_indicators_4_refer  =$goals_8s_indicators_4_refer ;
            $goals_8s->goals_8s_indicators_4_name  =$request->goals_8s_indicators_4_refer->getClientOriginalName();
          }

          $goals_8s->goals_8s_indicators_5  = $request->goals_8s_indicators_5;
          if( $request->goals_8s_indicators_5_refer != '' ){
            $goals_8s_indicators_5_refer = time().'.'.$request->goals_8s_indicators_5_refer->extension();  
            $request->goals_8s_indicators_5_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_5_refer);
            $goals_8s->goals_8s_indicators_5_refer  =$goals_8s_indicators_5_refer ;
            $goals_8s->goals_8s_indicators_5_name  =$request->goals_8s_indicators_5_refer->getClientOriginalName();
          }
          $goals_8s->goals_8s_indicators_6  = $request->goals_8s_indicators_6;
          if( $request->goals_8s_indicators_6_refer != '' ){
            $goals_8s_indicators_6_refer = time().'.'.$request->goals_8s_indicators_6_refer->extension();  
            $request->goals_8s_indicators_6_refer->move(public_path('goals/goals_8s'),$goals_8s_indicators_6_refer);
            $goals_8s->goals_8s_indicators_6_refer  =$goals_8s_indicators_6_refer ;
            $goals_8s->goals_8s_indicators_6_name  =$request->goals_8s_indicators_6_refer->getClientOriginalName();
          }

         
          




          $goals_8s->goals_8s_operation_1  = $request->goals_8s_operation_1;
          if( $request->goals_8s_operation_1_refer != '' ){
            $goals_8s_operation_1_refer = time().'.'.$request->goals_8s_operation_1_refer->extension();  
            $request->goals_8s_operation_1_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_1_refer);
            $goals_8s->goals_8s_operation_1_refer  =$goals_8s_operation_1_refer ;
            $goals_8s->goals_8s_operation_1_name  =$request->goals_8s_operation_1_refer->getClientOriginalName();
          }

          
          $goals_8s->goals_8s_operation_2  = $request->goals_8s_operation_2;
          if( $request->goals_8s_operation_2_refer != '' ){
            $goals_8s_operation_2_refer = time().'.'.$request->goals_8s_operation_2_refer->extension();  
            $request->goals_8s_operation_2_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_2_refer);
            $goals_8s->goals_8s_operation_2_refer  =$goals_8s_operation_2_refer ;
            $goals_8s->goals_8s_operation_2_name  =$request->goals_8s_operation_2_refer->getClientOriginalName();
          }
          
          $goals_8s->goals_8s_operation_3  = $request->goals_8s_operation_3;
          if( $request->goals_8s_operation_3_refer != '' ){
            $goals_8s_operation_3_refer = time().'.'.$request->goals_8s_operation_3_refer->extension();  
            $request->goals_8s_operation_3_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_3_refer);
            $goals_8s->goals_8s_operation_3_refer  =$goals_8s_operation_3_refer ;
            $goals_8s->goals_8s_operation_3_name  =$request->goals_8s_operation_3_refer->getClientOriginalName();
          }

          $goals_8s->goals_8s_operation_4  = $request->goals_8s_operation_4;
          if( $request->goals_8s_operation_4_refer != '' ){
            $goals_8s_operation_4_refer = time().'.'.$request->goals_8s_operation_4_refer->extension();  
            $request->goals_8s_operation_4_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_4_refer);
            $goals_8s->goals_8s_operation_4_refer  =$goals_8s_operation_4_refer ;
            $goals_8s->goals_8s_operation_4_name  =$request->goals_8s_operation_4_refer->getClientOriginalName();
          }

          $goals_8s->goals_8s_operation_5  = $request->goals_8s_operation_5;
          if( $request->goals_8s_operation_5_refer != '' ){
            $goals_8s_operation_5_refer = time().'.'.$request->goals_8s_operation_5_refer->extension();  
            $request->goals_8s_operation_5_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_5_refer);
            $goals_8s->goals_8s_operation_5_refer  =$goals_8s_operation_5_refer ;
            $goals_8s->goals_8s_operation_5_name  =$request->goals_8s_operation_5_refer->getClientOriginalName();
          }

          $goals_8s->goals_8s_operation_6  = $request->goals_8s_operation_6;
          if( $request->goals_8s_operation_6_refer != '' ){
            $goals_8s_operation_6_refer = time().'.'.$request->goals_8s_operation_6_refer->extension();  
            $request->goals_8s_operation_6_refer->move(public_path('goals/goals_8s'),$goals_8s_operation_6_refer);
            $goals_8s->goals_8s_operation_6_refer  =$goals_8s_operation_6_refer ;
            $goals_8s->goals_8s_operation_6_name  =$request->goals_8s_operation_6_refer->getClientOriginalName();
          }
        

  

        $goals_8s->goals_8s_user  = Auth::user()->id;
        $goals_8s->goals_8s_districts_id  =Auth::user()->districts_id;
        $goals_8s->save();
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
