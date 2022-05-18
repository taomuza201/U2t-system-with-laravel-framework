<?php

namespace App\Http\Controllers;

use App\Goals_13s;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Goals_13sController extends Controller
{
    public function index($id)
    {

      $round = $id;
        $goals_13s = Goals_13s::where('goals_13s_districts_id',Auth::user()->districts_id)->where('goals_13s_refer',$round)->first();
        if($goals_13s!=''){
         
            return view('goals.goals_13s.edit',compact('goals_13s','round'));
        }else{
           
          return view('goals.goals_13s.index',compact('round'));
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

          $goals_13s = new  Goals_13s(); 
        //   $goals_13s->goals_13s_refer  = $request->goals_13s_refer;
          $goals_13s->goals_13s_at_name  = $request->goals_13s_at_name;
          $goals_13s->goals_13s_address  = $request->goals_13s_address;
          $goals_13s->goals_13s_problem  = $request->goals_13s_problem;
          $goals_13s->goals_13s_refer   = $request->goals_13s_refer ;


          $goals_13s->goals_13s_indicators_1  = $request->goals_13s_indicators_1;
          if( $request->goals_13s_indicators_1_refer != '' ){

            $goals_13s_indicators_1_refer = time().'.'.$request->goals_13s_indicators_1_refer->extension();  
            $request->goals_13s_indicators_1_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_1_refer);
            $goals_13s->goals_13s_indicators_1_refer  =$goals_13s_indicators_1_refer ;
            $goals_13s->goals_13s_indicators_1_name  =$request->goals_13s_indicators_1_refer->getClientOriginalName();
          }

          
          $goals_13s->goals_13s_indicators_2  = $request->goals_13s_indicators_2;
          if( $request->goals_13s_indicators_2_refer != '' ){
            $goals_13s_indicators_2_refer = time().'.'.$request->goals_13s_indicators_2_refer->extension();  
            $request->goals_13s_indicators_2_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_2_refer);
            $goals_13s->goals_13s_indicators_2_refer  =$goals_13s_indicators_2_refer ;
            $goals_13s->goals_13s_indicators_2_name  =$request->goals_13s_indicators_2_refer->getClientOriginalName();
          }

          
          $goals_13s->goals_13s_indicators_3  = $request->goals_13s_indicators_3;
          if( $request->goals_13s_indicators_3_refer != '' ){
            $goals_13s_indicators_3_refer = time().'.'.$request->goals_13s_indicators_3_refer->extension();  
            $request->goals_13s_indicators_3_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_3_refer);
            $goals_13s->goals_13s_indicators_3_refer  =$goals_13s_indicators_3_refer ;
            $goals_13s->goals_13s_indicators_3_name  =$request->goals_13s_indicators_3_refer->getClientOriginalName();
          }


        //   $goals_13s->goals_13s_indicators_4  = $request->goals_13s_indicators_4;
        //   if( $request->goals_13s_indicators_4_refer != '' ){
        //     $goals_13s_indicators_4_refer = time().'.'.$request->goals_13s_indicators_4_refer->extension();  
        //     $request->goals_13s_indicators_4_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_4_refer);
        //     $goals_13s->goals_13s_indicators_4_refer  =$goals_13s_indicators_4_refer ;
        //     $goals_13s->goals_13s_indicators_4_name  =$request->goals_13s_indicators_4_refer->getClientOriginalName();
        //   }


        //   $goals_13s->goals_13s_indicators_5  = $request->goals_13s_indicators_5;
        //   if( $request->goals_13s_indicators_5_refer != '' ){
        //     $goals_13s_indicators_5_refer = time().'.'.$request->goals_13s_indicators_5_refer->extension();  
        //     $request->goals_13s_indicators_5_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_5_refer);
        //     $goals_13s->goals_13s_indicators_5_refer  =$goals_13s_indicators_5_refer ;
        //     $goals_13s->goals_13s_indicators_5_name  =$request->goals_13s_indicators_5_refer->getClientOriginalName();
        //   }

         




          $goals_13s->goals_13s_operation_1  = $request->goals_13s_operation_1;
          if( $request->goals_13s_operation_1_refer != '' ){
            $goals_13s_operation_1_refer = time().'.'.$request->goals_13s_operation_1_refer->extension();  
            $request->goals_13s_operation_1_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_1_refer);
            $goals_13s->goals_13s_operation_1_refer  =$goals_13s_operation_1_refer ;
            $goals_13s->goals_13s_operation_1_name  =$request->goals_13s_operation_1_refer->getClientOriginalName();
          }

          
          $goals_13s->goals_13s_operation_2  = $request->goals_13s_operation_2;
          if( $request->goals_13s_operation_2_refer != '' ){
            $goals_13s_operation_2_refer = time().'.'.$request->goals_13s_operation_2_refer->extension();  
            $request->goals_13s_operation_2_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_2_refer);
            $goals_13s->goals_13s_operation_2_refer  =$goals_13s_operation_2_refer ;
            $goals_13s->goals_13s_operation_2_name  =$request->goals_13s_operation_2_refer->getClientOriginalName();
          }
          
          $goals_13s->goals_13s_operation_3  = $request->goals_13s_operation_3;
          if( $request->goals_13s_operation_3_refer != '' ){
            $goals_13s_operation_3_refer = time().'.'.$request->goals_13s_operation_3_refer->extension();  
            $request->goals_13s_operation_3_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_3_refer);
            $goals_13s->goals_13s_operation_3_refer  =$goals_13s_operation_3_refer ;
            $goals_13s->goals_13s_operation_3_name  =$request->goals_13s_operation_3_refer->getClientOriginalName();
          }

          $goals_13s->goals_13s_operation_4  = $request->goals_13s_operation_4;
          if( $request->goals_13s_operation_4_refer != '' ){
            $goals_13s_operation_4_refer = time().'.'.$request->goals_13s_operation_4_refer->extension();  
            $request->goals_13s_operation_4_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_4_refer);
            $goals_13s->goals_13s_operation_4_refer  =$goals_13s_operation_4_refer ;
            $goals_13s->goals_13s_operation_4_name  =$request->goals_13s_operation_4_refer->getClientOriginalName();
          }
          $goals_13s->goals_13s_operation_5  = $request->goals_13s_operation_5;
          if( $request->goals_13s_operation_5_refer != '' ){
            $goals_13s_operation_5_refer = time().'.'.$request->goals_13s_operation_5_refer->extension();  
            $request->goals_13s_operation_5_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_5_refer);
            $goals_13s->goals_13s_operation_5_refer  =$goals_13s_operation_5_refer ;
            $goals_13s->goals_13s_operation_5_name  =$request->goals_13s_operation_5_refer->getClientOriginalName();
          }

          $goals_13s->goals_13s_operation_6  = $request->goals_13s_operation_6;
          if( $request->goals_13s_operation_6_refer != '' ){
            $goals_13s_operation_6_refer = time().'.'.$request->goals_13s_operation_6_refer->extension();  
            $request->goals_13s_operation_6_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_6_refer);
            $goals_13s->goals_13s_operation_6_refer  =$goals_13s_operation_6_refer ;
            $goals_13s->goals_13s_operation_6_name  =$request->goals_13s_operation_6_refer->getClientOriginalName();
          }

          $goals_13s->goals_13s_operation_7  = $request->goals_13s_operation_7;
          if( $request->goals_13s_operation_7_refer != '' ){
            $goals_13s_operation_7_refer = time().'.'.$request->goals_13s_operation_7_refer->extension();  
            $request->goals_13s_operation_7_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_7_refer);
            $goals_13s->goals_13s_operation_7_refer  =$goals_13s_operation_7_refer ;
            $goals_13s->goals_13s_operation_7_name  =$request->goals_13s_operation_7_refer->getClientOriginalName();
          }

          $goals_13s->goals_13s_operation_8  = $request->goals_13s_operation_8;
          if( $request->goals_13s_operation_8_refer != '' ){
            $goals_13s_operation_8_refer = time().'.'.$request->goals_13s_operation_8_refer->extension();  
            $request->goals_13s_operation_8_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_8_refer);
            $goals_13s->goals_13s_operation_8_refer  =$goals_13s_operation_8_refer ;
            $goals_13s->goals_13s_operation_8_name  =$request->goals_13s_operation_8_refer->getClientOriginalName();
          }

        //   $goals_13s->goals_13s_operation_9  = $request->goals_13s_operation_9;
        //   if( $request->goals_13s_operation_9_refer != '' ){
        //     $goals_13s_operation_9_refer = time().'.'.$request->goals_13s_operation_9_refer->extension();  
        //     $request->goals_13s_operation_9_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_9_refer);
        //     $goals_13s->goals_13s_operation_9_refer  =$goals_13s_operation_9_refer ;
        //     $goals_13s->goals_13s_operation_9_name  =$request->goals_13s_operation_9_refer->getClientOriginalName();
        //   }

        //   $goals_13s->goals_13s_operation_10  = $request->goals_13s_operation_10;
        //   if( $request->goals_13s_operation_10_refer != '' ){
        //     $goals_13s_operation_10_refer = time().'.'.$request->goals_13s_operation_10_refer->extension();  
        //     $request->goals_13s_operation_10_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_10_refer);
        //     $goals_13s->goals_13s_operation_10_refer  =$goals_13s_operation_10_refer ;
        //     $goals_13s->goals_13s_operation_10_name  =$request->goals_13s_operation_10_refer->getClientOriginalName();
        //   }

        //   $goals_13s->goals_13s_operation_11  = $request->goals_13s_operation_11;
        //   if( $request->goals_13s_operation_11_refer != '' ){
        //     $goals_13s_operation_11_refer = time().'.'.$request->goals_13s_operation_11_refer->extension();  
        //     $request->goals_13s_operation_11_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_11_refer);
        //     $goals_13s->goals_13s_operation_11_refer  =$goals_13s_operation_11_refer ;
        //     $goals_13s->goals_13s_operation_11_name  =$request->goals_13s_operation_11_refer->getClientOriginalName();
        //   }


        //   $goals_13s->goals_13s_operation_12  = $request->goals_13s_operation_12;
        //   if( $request->goals_13s_operation_12_refer != '' ){
        //     $goals_13s_operation_12_refer = time().'.'.$request->goals_13s_operation_12_refer->extension();  
        //     $request->goals_13s_operation_12_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_12_refer);
        //     $goals_13s->goals_13s_operation_12_refer  =$goals_13s_operation_12_refer ;
        //     $goals_13s->goals_13s_operation_12_name  =$request->goals_13s_operation_12_refer->getClientOriginalName();
        //   }
          

          $goals_13s->goals_13s_user  = Auth::user()->id;
          $goals_13s->goals_13s_districts_id  =Auth::user()->districts_id;
          $goals_13s->save();


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
        $goals_13s = Goals_13s::where('goals_13s_districts_id',Auth::user()->districts_id)->first();
        return response()->json($goals_13s);
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

      $data = Goals_13s::where('goals_13s_id',$id)->first();
      $goals_13s =   Goals_13s::find($id);
      //   $goals_13s->goals_13s_refer  = $request->goals_13s_refer;
        $goals_13s->goals_13s_at_name  = $request->goals_13s_at_name;
        $goals_13s->goals_13s_address  = $request->goals_13s_address;
        $goals_13s->goals_13s_problem  = $request->goals_13s_problem;


        $goals_13s->goals_13s_indicators_1  = $request->goals_13s_indicators_1;
          if( $request->goals_13s_indicators_1_refer != '' ){

            $goals_13s_indicators_1_refer = time().'.'.$request->goals_13s_indicators_1_refer->extension();  
            $request->goals_13s_indicators_1_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_1_refer);
            $goals_13s->goals_13s_indicators_1_refer  =$goals_13s_indicators_1_refer ;
            $goals_13s->goals_13s_indicators_1_name  =$request->goals_13s_indicators_1_refer->getClientOriginalName();
          }
          
          $goals_13s->goals_13s_indicators_2  = $request->goals_13s_indicators_2;
          if( $request->goals_13s_indicators_2_refer != '' ){
            $goals_13s_indicators_2_refer = time().'.'.$request->goals_13s_indicators_2_refer->extension();  
            $request->goals_13s_indicators_2_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_2_refer);
            $goals_13s->goals_13s_indicators_2_refer  =$goals_13s_indicators_2_refer ;
            $goals_13s->goals_13s_indicators_2_name  =$request->goals_13s_indicators_2_refer->getClientOriginalName();
          }
          
          $goals_13s->goals_13s_indicators_3  = $request->goals_13s_indicators_3;
          if( $request->goals_13s_indicators_3_refer != '' ){
            $goals_13s_indicators_3_refer = time().'.'.$request->goals_13s_indicators_3_refer->extension();  
            $request->goals_13s_indicators_3_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_3_refer);
            $goals_13s->goals_13s_indicators_3_refer  =$goals_13s_indicators_3_refer ;
            $goals_13s->goals_13s_indicators_3_name  =$request->goals_13s_indicators_3_refer->getClientOriginalName();
          }


        //   $goals_13s->goals_13s_indicators_4  = $request->goals_13s_indicators_4;
        //   if( $request->goals_13s_indicators_4_refer != '' ){
        //     $goals_13s_indicators_4_refer = time().'.'.$request->goals_13s_indicators_4_refer->extension();  
        //     $request->goals_13s_indicators_4_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_4_refer);
        //     $goals_13s->goals_13s_indicators_4_refer  =$goals_13s_indicators_4_refer ;
        //     $goals_13s->goals_13s_indicators_4_name  =$request->goals_13s_indicators_4_refer->getClientOriginalName();
        //   }


        //   $goals_13s->goals_13s_indicators_5  = $request->goals_13s_indicators_5;
        //   if( $request->goals_13s_indicators_5_refer != '' ){
        //     $goals_13s_indicators_5_refer = time().'.'.$request->goals_13s_indicators_5_refer->extension();  
        //     $request->goals_13s_indicators_5_refer->move(public_path('goals/goals_13s'),$goals_13s_indicators_5_refer);
        //     $goals_13s->goals_13s_indicators_5_refer  =$goals_13s_indicators_5_refer ;
        //     $goals_13s->goals_13s_indicators_5_name  =$request->goals_13s_indicators_5_refer->getClientOriginalName();
        //   }

         







          $goals_13s->goals_13s_operation_1  = $request->goals_13s_operation_1;
          if( $request->goals_13s_operation_1_refer != '' ){
            $goals_13s_operation_1_refer = time().'.'.$request->goals_13s_operation_1_refer->extension();  
            $request->goals_13s_operation_1_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_1_refer);
            $goals_13s->goals_13s_operation_1_refer  =$goals_13s_operation_1_refer ;
            $goals_13s->goals_13s_operation_1_name  =$request->goals_13s_operation_1_refer->getClientOriginalName();
          }

          
          $goals_13s->goals_13s_operation_2  = $request->goals_13s_operation_2;
          if( $request->goals_13s_operation_2_refer != '' ){
            $goals_13s_operation_2_refer = time().'.'.$request->goals_13s_operation_2_refer->extension();  
            $request->goals_13s_operation_2_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_2_refer);
            $goals_13s->goals_13s_operation_2_refer  =$goals_13s_operation_2_refer ;
            $goals_13s->goals_13s_operation_2_name  =$request->goals_13s_operation_2_refer->getClientOriginalName();
          }
          
          $goals_13s->goals_13s_operation_3  = $request->goals_13s_operation_3;
          if( $request->goals_13s_operation_3_refer != '' ){
            $goals_13s_operation_3_refer = time().'.'.$request->goals_13s_operation_3_refer->extension();  
            $request->goals_13s_operation_3_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_3_refer);
            $goals_13s->goals_13s_operation_3_refer  =$goals_13s_operation_3_refer ;
            $goals_13s->goals_13s_operation_3_name  =$request->goals_13s_operation_3_refer->getClientOriginalName();
          }

          $goals_13s->goals_13s_operation_4  = $request->goals_13s_operation_4;
          if( $request->goals_13s_operation_4_refer != '' ){
            $goals_13s_operation_4_refer = time().'.'.$request->goals_13s_operation_4_refer->extension();  
            $request->goals_13s_operation_4_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_4_refer);
            $goals_13s->goals_13s_operation_4_refer  =$goals_13s_operation_4_refer ;
            $goals_13s->goals_13s_operation_4_name  =$request->goals_13s_operation_4_refer->getClientOriginalName();
          }

          $goals_13s->goals_13s_operation_5  = $request->goals_13s_operation_5;
          if( $request->goals_13s_operation_5_refer != '' ){
            $goals_13s_operation_5_refer = time().'.'.$request->goals_13s_operation_5_refer->extension();  
            $request->goals_13s_operation_5_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_5_refer);
            $goals_13s->goals_13s_operation_5_refer  =$goals_13s_operation_5_refer ;
            $goals_13s->goals_13s_operation_5_name  =$request->goals_13s_operation_5_refer->getClientOriginalName();
          }

          $goals_13s->goals_13s_operation_6  = $request->goals_13s_operation_6;
          if( $request->goals_13s_operation_6_refer != '' ){
            $goals_13s_operation_6_refer = time().'.'.$request->goals_13s_operation_6_refer->extension();  
            $request->goals_13s_operation_6_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_6_refer);
            $goals_13s->goals_13s_operation_6_refer  =$goals_13s_operation_6_refer ;
            $goals_13s->goals_13s_operation_6_name  =$request->goals_13s_operation_6_refer->getClientOriginalName();
          }
        

          $goals_13s->goals_13s_operation_7  = $request->goals_13s_operation_7;
          if( $request->goals_13s_operation_7_refer != '' ){
            $goals_13s_operation_7_refer = time().'.'.$request->goals_13s_operation_7_refer->extension();  
            $request->goals_13s_operation_7_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_7_refer);
            $goals_13s->goals_13s_operation_7_refer  =$goals_13s_operation_7_refer ;
            $goals_13s->goals_13s_operation_7_name  =$request->goals_13s_operation_7_refer->getClientOriginalName();
          }


          
          $goals_13s->goals_13s_operation_8  = $request->goals_13s_operation_8;
          if( $request->goals_13s_operation_8_refer != '' ){
            $goals_13s_operation_8_refer = time().'.'.$request->goals_13s_operation_8_refer->extension();  
            $request->goals_13s_operation_8_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_8_refer);
            $goals_13s->goals_13s_operation_8_refer  =$goals_13s_operation_8_refer ;
            $goals_13s->goals_13s_operation_8_name  =$request->goals_13s_operation_8_refer->getClientOriginalName();
          }



          
        //   $goals_13s->goals_13s_operation_9  = $request->goals_13s_operation_9;
        //   if( $request->goals_13s_operation_9_refer != '' ){
        //     $goals_13s_operation_9_refer = time().'.'.$request->goals_13s_operation_9_refer->extension();  
        //     $request->goals_13s_operation_9_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_9_refer);
        //     $goals_13s->goals_13s_operation_9_refer  =$goals_13s_operation_9_refer ;
        //     $goals_13s->goals_13s_operation_9_name  =$request->goals_13s_operation_9_refer->getClientOriginalName();
        //   }

        //   $goals_13s->goals_13s_operation_10  = $request->goals_13s_operation_10;
        //   if( $request->goals_13s_operation_10_refer != '' ){
        //     $goals_13s_operation_10_refer = time().'.'.$request->goals_13s_operation_10_refer->extension();  
        //     $request->goals_13s_operation_10_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_10_refer);
        //     $goals_13s->goals_13s_operation_10_refer  =$goals_13s_operation_10_refer ;
        //     $goals_13s->goals_13s_operation_10_name  =$request->goals_13s_operation_10_refer->getClientOriginalName();
        //   }

        //   $goals_13s->goals_13s_operation_11  = $request->goals_13s_operation_11;
        //   if( $request->goals_13s_operation_11_refer != '' ){
        //     $goals_13s_operation_11_refer = time().'.'.$request->goals_13s_operation_11_refer->extension();  
        //     $request->goals_13s_operation_11_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_11_refer);
        //     $goals_13s->goals_13s_operation_11_refer  =$goals_13s_operation_11_refer ;
        //     $goals_13s->goals_13s_operation_11_name  =$request->goals_13s_operation_11_refer->getClientOriginalName();
        //   }


        //   $goals_13s->goals_13s_operation_12  = $request->goals_13s_operation_12;
        //   if( $request->goals_13s_operation_12_refer != '' ){
        //     $goals_13s_operation_12_refer = time().'.'.$request->goals_13s_operation_12_refer->extension();  
        //     $request->goals_13s_operation_12_refer->move(public_path('goals/goals_13s'),$goals_13s_operation_12_refer);
        //     $goals_13s->goals_13s_operation_12_refer  =$goals_13s_operation_12_refer ;
        //     $goals_13s->goals_13s_operation_12_name  =$request->goals_13s_operation_12_refer->getClientOriginalName();
        //   }

        $goals_13s->goals_13s_user  = Auth::user()->id;
        $goals_13s->goals_13s_districts_id  =Auth::user()->districts_id;
        $goals_13s->save();
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
