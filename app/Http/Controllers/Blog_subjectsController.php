<?php

namespace App\Http\Controllers;

use App\Blog_detail;
use App\Blog_subject;
use App\District;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Blog_subjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_subjects = Blog_subject::get();
        return view('blog.blog_subjects.index', compact('blog_subjects'));
    }

    public function sum($id, $subject)
    {

        if ($id == 'all') {
            $data = Blog_detail::where('blog_details_blog_subjects_id', $subject)->get();
            $data = $data->count();
        } else {
            $data = Blog_detail::where('blog_details_districts_id', $id)->where('blog_details_blog_subjects_id', $subject)->get();
            $data = $data->count();
        }

        return response()->json($data);
    }
    public function history($id, Request $request)
    {

        $user = DB::table('blog_details')->where('blog_details_blog_subjects_id', $id)
            ->groupBy('blog_details_user')
            ->select('blog_details_user')
            ->get();

        $user_id = array();
        foreach ($user as $item) {
            $user_id[] = $item->blog_details_user;
        }

        $blog_detail = User::whereIn('id', $user_id)
            ->join('districts', 'users.districts_id', '=', 'districts.districts_id')
            ->get();
        $blog_subjects_title = $request->get('blog_subjects_title');

        // print_r($blog_detail);

        $districts = District::get();

        return view('blog.blog_subjects.history.index', compact('blog_detail', 'blog_subjects_title', 'id', 'districts'));
    }

    public function history_detail($blog_subjects_id, $blog_details_user)
    {

        // echo $id;
        $Blog_subject = Blog_subject::where('blog_subjects_id', $blog_subjects_id)->first();
        $blog_detail = Blog_detail::select('*')->where('blog_details_blog_subjects_id', $blog_subjects_id)->where('blog_details_user', $blog_details_user)
        ->orderBy('blog_details_id', 'DESC')
        ->get();
        $blog_subjects_title = $Blog_subject->blog_subjects_title;
        $user = User::where('id', $blog_details_user)->first();
        $name = $user->fname . ' ' . $user->lname;
        return view('blog.blog_subjects.read.index', compact('blog_detail', 'blog_subjects_title', 'name'));

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
        $blog_subjects = new Blog_subject();
        $blog_subjects->blog_subjects_title = $request->blog_subjects_title;
        $blog_subjects->blog_subjects_start = Carbon::parse($request->blog_subjects_start)->format('Y-m-d');
        $blog_subjects->blog_subjects_end = Carbon::parse($request->blog_subjects_end)->format('Y-m-d');
        $blog_subjects->blog_subjects_user = Auth::user()->id;
        $blog_subjects->blog_subjects_color = $request->blog_subjects_color;

        $blog_subjects->save();
        return Redirect::back()->withsuccess(__('เพิ่มเรื่อง : ' . $request->blog_subjects_title . 'สำเร็จ.'));
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
        $blog_subjects = Blog_subject::where('blog_subjects_id', $id)->first();
        return response()->json($blog_subjects);
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
        $blog_subjects = Blog_subject::find($id);
        $blog_subjects->blog_subjects_title = $request->blog_subjects_title;
        $blog_subjects->blog_subjects_start = Carbon::parse($request->blog_subjects_start)->format('Y-m-d');
        $blog_subjects->blog_subjects_end = Carbon::parse($request->blog_subjects_end)->format('Y-m-d');
        $blog_subjects->blog_subjects_user = Auth::user()->id;
        $blog_subjects->blog_subjects_color = $request->blog_subjects_color;

        $blog_subjects->save();
        return Redirect::back()->withsuccess(__('แก้ไขข้อมูลสำเร็จ.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_subjects = Blog_subject::find($id);
        $blog_subjects->delete();

        return Redirect::back()->withsuccess(__('ลบข้อมูลสำเร็จ.'));

    }
}
