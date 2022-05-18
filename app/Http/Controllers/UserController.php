<?php

namespace App\Http\Controllers;

use App\District;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $districts = District::select('*')->get();
        $user = User::select('*')
            ->join('districts', 'users.districts_id', '=', 'districts.districts_id')
            ->get();
        return view('users.index', compact('user', 'districts'));
    }

    public function store(Request $requestl)
    {

        $chk_data = User::select('*')->where('email', $requestl->email)->first();

        if ($chk_data != '') {
            return Redirect::back()->withsfail(__('เพิ่มข้อมูลผู้ใช้งานสำเร็จ.'));
        } else {

            $user = new User();
            $user->gender = $requestl->gender;
            $user->fname = $requestl->fname;
            $user->lname = $requestl->lname;
            $user->email = $requestl->email;
            $user->position = $requestl->position;

            $user->status = $requestl->status;
            $user->type = $requestl->type;
            $user->phone = $requestl->phone;
            $user->active = $requestl->active;
            $user->position_orther = $requestl->position_orther;





            $user->districts_id = $requestl->districts_id;
            $user->email_verified_at = Carbon::now();
            $user->password = Hash::make($requestl->password);
            $user->save();
            return Redirect::back()->withsuccess(__('เพิ่มข้อมูลผู้ใช้งานสำเร็จ.'));
        }

    }

    public function edit(Request $requestl, $id)
    {
        $data =User::select('*')
        ->join('districts', 'users.districts_id', '=', 'districts.districts_id')
        ->where('id',$id)
        ->first();

        return response()->json($data);

    }
    public function update(Request $requestl, $id)
    {
        $user = User::find($id);
        $user->gender = $requestl->gender;
        $user->fname = $requestl->fname;
        $user->lname = $requestl->lname;
        $user->email  = $requestl->email ;
        $user->position = $requestl->position;
        $user->districts_id  = $requestl->districts_id ;
        if( $requestl->password == ''){

            $chk_data = User::where('id',$id)->first();
            $user->password = $chk_data->password;
        }else{
            $user->password = $requestl->password;
        }
      
        $user->status = $requestl->status;
        $user->type = $requestl->type;
        $user->phone = $requestl->phone;
        $user->active = $requestl->active;
        $user->position_orther = $requestl->position_orther;


        $user->save();
        return Redirect::back()->withsuccess(__('แก้ไขข้อมูลผู้ใช้งานสำเร็จ.'));

    }
    public function destroy(Request $requestl, $id)
    {
       $user =  User::find($id);
       $user->delete();

        return Redirect::back()->withsuccess(__('ลบข้อมูลผู้ใช้งานสำเร็จ.'));

    }
}
