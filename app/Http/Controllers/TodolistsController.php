<?php

namespace App\Http\Controllers;

use App\User;
use App\Todolist;
use Carbon\Carbon;
use App\TodolistFile;
use App\TodolistsAssign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TodolistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $todolist = Todolist::select('*')
        
 
            ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
            // ->join('todolists_assigns', 'todolists.todolists_id', '=', 'todolists_assigns.todolists_assigns_todolists')

            // ->groupBy('todolists_assigns_at')
            ->get();




            

        $todolist_all = count(Todolist::select('*')->join('users', 'todolists.todolists_madeby', '=', 'users.id')->get());
        $todolist_notcompleted = count(Todolist::select('*')->join('users', 'todolists.todolists_madeby', '=', 'users.id')->where('todolists_status', 0)->get());
        $todolist_completed = count(Todolist::select('*')->join('users', 'todolists.todolists_madeby', '=', 'users.id')->where('todolists_status', 1)->get());
        $todolist_assign = count(Todolist::select('*')->join('users', 'todolists.todolists_madeby', '=', 'users.id')->where('todolists_madeby', Auth::user()->id)->where('todolists_status', 0)->get());
        $todolist_assigncompleted = count($todolist = Todolist::select('*')->join('users', 'todolists.todolists_madeby', '=', 'users.id')->where('todolists_madeby', Auth::user()->id)->where('todolists_status', 1)->get());
        $todolist_my = count($todolist = Todolist::select('*')->join('users', 'todolists.todolists_madeby', '=', 'users.id')->join('todolists_assigns', 'todolists.todolists_id', '=', 'todolists_assigns.todolists_assigns_todolists')->where('todolists_assigns_at', Auth::user()->id)->where('todolists_status', 0)->orderBy('todolists_id', 'DESC')->get());
        $todolist_mycompleted = count($todolist = Todolist::select('*')->join('users', 'todolists.todolists_madeby', '=', 'users.id')->join('todolists_assigns', 'todolists.todolists_id', '=', 'todolists_assigns.todolists_assigns_todolists')->where('todolists_assigns_at', Auth::user()->id)->where('todolists_status', 1)->orderBy('todolists_id', 'DESC')->get());
        $count_todolist = array(0, 0, 0, 0, 0, 0,0);
        $count_todolist = array($todolist_all, $todolist_completed, $todolist_assign, $todolist_assigncompleted, $todolist_my, $todolist_mycompleted,$todolist_notcompleted);
        

        $user = User::select('*')->where('position', 'operator', 'count_todolist')->where('position_orther','admin')->get();

      

        return view('todolist.index', compact('user', 'todolist', 'count_todolist'));

    }

    public function fetch_todolist(Request $request)
    {
        $status = $request->get('status');
        if ($request->ajax()) {

            if ($status == 'all') {
                $todolist = Todolist::select('*')
                    ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
                    ->orderBy('todolists_id', 'DESC')
                    ->get();

                return view('todolist.todolists', compact('todolist'))->render();
            } else if ($status == 'notcompleted') {
                $todolist = Todolist::select('*')
                    ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
                    ->where('todolists_status', 0)
                    ->orderBy('todolists_id', 'DESC')
                    ->get();

                return view('todolist.todolists', compact('todolist'))->render();
            } 
            else if ($status == 'completed') {
                $todolist = Todolist::select('*')
                    ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
                    ->where('todolists_status', 1)
                    ->orderBy('todolists_id', 'DESC')
                    ->get();

                return view('todolist.todolists', compact('todolist'))->render();
            } else if ($status == 'assign') {
                $todolist = Todolist::select('*')
                    ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
                    ->where('todolists_madeby', Auth::user()->id)
                    ->where('todolists_status', 0)
                    ->orderBy('todolists_id', 'DESC')
                    ->get();

                return view('todolist.mytodolists', compact('todolist'))->render();
            } else if ($status == 'assigncompleted') {
                $todolist = Todolist::select('*')
                    ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
                    ->where('todolists_madeby', Auth::user()->id)
                    ->where('todolists_status', 1)
                    ->orderBy('todolists_id', 'DESC')
                    ->get();

                return view('todolist.todolists', compact('todolist'))->render();
            } 
            
            
            
            else if ($status == 'my') {
                $todolist = Todolist::select('*')
                    ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
                    ->join('todolists_assigns', 'todolists.todolists_id', '=', 'todolists_assigns.todolists_assigns_todolists')
                    ->where('todolists_assigns_at', Auth::user()->id)
                    ->where('todolists_status', 0)
                    ->orderBy('todolists_id', 'DESC')
                    ->get();

                return view('todolist.mytodolists', compact('todolist'))->render();


            } else if ($status == 'mycompleted') {
                $todolist = Todolist::select('*')
                    ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
                    ->join('todolists_assigns', 'todolists.todolists_id', '=', 'todolists_assigns.todolists_assigns_todolists')
                    ->where('todolists_assigns_at', Auth::user()->id)
                    ->where('todolists_status', 1)
                    ->orderBy('todolists_id', 'DESC')
                    ->get();

                return view('todolist.todolists', compact('todolist'))->render();
            }

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
        $todolists = new Todolist();
        $todolists->todolists_title = $request->todolists_title;
        $todolists->todolists_detail = $request->todolists_detail;
        $todolists->todolists_madeby = Auth::user()->id;

        $todolists->todolists_deadline = Carbon::parse($request->todolists_deadline)->format('Y-m-d');

        $todolists->save();



        $last_todolist = Todolist::select('*')->orderBy('todolists_id','desc')->first();
        if ($request->file != '') {

          

            foreach ($request->file('file') as $file) {
                $todolist_files_path = time() . '.' . $file->extension();
                $file->move(public_path('uploads_file'), $todolist_files_path);

                $todolist_file = new TodolistFile();
                $todolist_file->todolist_files_title = $file->getClientOriginalName();
                $todolist_file->todolist_files_path = $todolist_files_path;
                $todolist_file->todolist_files_refer = $last_todolist->todolists_id;
                $todolist_file->save();

            }

        }
        // return Redirect::back()->withsuccess(__('เพิ่มข้อมูล Todo List สำเร็จ.'));

              if(Auth::user()->position == 'professor' || Auth::user()->position == 'admin'  || Auth::user()->position_orther == 'admin' ){
                foreach ($request->todolists_assign as $row) {


                    $new_todolists_assign = new TodolistsAssign();
                    $new_todolists_assign->todolists_assigns_at  = $row;
                    $new_todolists_assign->todolists_assigns_todolists   = $last_todolist->todolists_id;
                    $new_todolists_assign->save();
                    }
              }else{

                $new_todolists_assign = new TodolistsAssign();
                $new_todolists_assign->todolists_assigns_at  =  Auth::user()->id;
                $new_todolists_assign->todolists_assigns_todolists   = $last_todolist->todolists_id;
                $new_todolists_assign->save();
              }  
   return Redirect::back()->withsuccess(__('เพิ่มข้อมูล Todo List สำเร็จ.'));




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
        $data = Todolist::select('*')
            ->where('todolists_id', $id)
            ->join('todolists_assigns', 'todolists.todolists_id', '=', 'todolists_assigns.todolists_assigns_todolists')
            ->first();

        return response()->json($data);

    }
    public function todolists_assigns($id)
    {
        $data = TodolistsAssign::select('*')
            ->where('todolists_assigns_todolists', $id)
            ->where('todolists_assigns_at', Auth::user()->id)
            ->first();

        return response()->json($data);

    }

    public function get_todolist_files($id)
    {
        $data = TodolistFile::select('*')
        ->where('todolist_files_status', 0)
            ->where('todolist_files_refer', $id)
            ->get();

        return response()->json($data);

    }
    public function get_todolist_files_success($id)
    {
        $data = TodolistFile::select('*')
            ->where('todolist_files_refer', $id)
            ->where('todolist_files_status', 1)
            ->get();

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

        $todolist = Todolist::find($id);
        $todolist->todolists_title = $request->todolists_title;
        $todolist->todolists_detail = $request->todolists_detail;
        $todolist->todolists_deadline = Carbon::parse($request->todolists_deadline)->format('Y-m-d');

        if (Auth::user()->position == 'professor'  ||Auth::user()->position == 'admin' || Auth::user()->position_orther == 'admin') {
      

            if($request->todolists_assign != ''){

              DB::table('todolists_assigns')->where('todolists_assigns_todolists', $id)->delete();
             
              foreach ($request->todolists_assign as $row) {


                $new_todolists_assign = new TodolistsAssign();
                $new_todolists_assign->todolists_assigns_at  = $row;
                $new_todolists_assign->todolists_assigns_todolists   = $id;
                $new_todolists_assign->save();
              }
                
            }
        }

        $todolist->save();


        if ($request->file != '') {


            $data_delete =   DB::table('todolist_files')->where('todolist_files_refer', $id)->get();

            if($data_delete != '' ){
                foreach( $data_delete  as $row){
                    unlink(public_path('uploads_file/'.$row->todolist_files_path));
            }
            DB::table('todolist_files')->where('todolist_files_refer', $id)
            ->where('todolist_files_status', 0)
            ->delete();

            }


            foreach ($request->file('file') as $file) {
                $todolist_files_path = time() . '.' . $file->extension();
                $file->move(public_path('uploads_file'), $todolist_files_path);

                $todolist_file = new TodolistFile();
                $todolist_file->todolist_files_title = $file->getClientOriginalName();
                $todolist_file->todolist_files_path = $todolist_files_path;
                $todolist_file->todolist_files_refer = $id;
                $todolist_file->save();

            }
            


        }









        return Redirect::back()->withsuccess(__('แก้ไข Todo List สำเร็จ.'));
    }

    public function success(Request $request)
    {

        $todolist = Todolist::find($request->uploadid);
        $todolist->todolists_status = 1;

        $todolist->save();



        
        if ($request->fileupload != '') {


            foreach ($request->file('fileupload') as $file) {
                $todolist_files_path = time() . '.' . $file->extension();
                $file->move(public_path('uploads_file'), $todolist_files_path);

                $todolist_file = new TodolistFile();
                $todolist_file->todolist_files_title = $file->getClientOriginalName();
                $todolist_file->todolist_files_path = $todolist_files_path;
                $todolist_file->todolist_files_refer = $request->uploadid;
                $todolist_file->todolist_files_status = 1;
                $todolist_file->save();

            }
          
        }
     



        return Redirect::back()->withsuccess(__('งาน Todo List สำเร็จ.'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_delete =   DB::table('todolist_files')->where('todolist_files_refer', $id)->get();

        if($data_delete != '' ){
            foreach( $data_delete  as $row){
                unlink(public_path('uploads_file/'.$row->todolist_files_path));
        }
        DB::table('todolist_files')->where('todolist_files_refer', $id)
        ->where('todolist_files_status', 0)
        ->delete();

        }

        $Todolist = Todolist::find($id);
        $Todolist->delete();
        return Redirect::back()->withsuccess(__('ลบรายการข้อมูลสำเร็จ.'));
    }


    public function search(Request $request)
    {
        
        $search = $request->get('search');

        if ($request->ajax()) {
            $todolist = Todolist::select('*')
                    ->join('users', 'todolists.todolists_madeby', '=', 'users.id')
                    ->where('todolists_title', 'like', '%' . $search . '%')
                    ->orderBy('todolists_id', 'DESC')
                    ->get();

                    return view('todolist.mytodolists', compact('todolist'))->render();
        }
    }
}
