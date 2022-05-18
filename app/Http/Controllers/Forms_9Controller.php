<?php

namespace App\Http\Controllers;

use App\Form9;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Forms_9Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = Form9::select('*', 'form9s.created_at')
        ->join('users', 'form9s.form9s_user', '=', 'users.id')
        ->where('form9s_districts_id',Auth::user()->districts_id)
        ->get();

        $districts = District::find(Auth::user()->districts_id);
        return view('forms.9.index', compact('form', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.9.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form9();

        $form->form9s_user = Auth::user()->id;
        $form->form9s_districts_id = Auth::user()->districts_id;
        $form->form9s_title = $request->form9s_title;
        $form->form9s_refer = $request->form9s_refer;
        $form->form9s_details = str_replace("uploads_image","../uploads_image",$request['form9s_details']);

        $form->save();

        return redirect()->to('forms-9');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $form = Form9::find($id);
        $details = str_replace("../uploads_image", "../uploads_image", $form->form9s_details);

        return view('forms.9.show', compact('form','details'));
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
        $form = Form9::find($id);
        $form->delete();
        return Redirect()->back();
    }
}


