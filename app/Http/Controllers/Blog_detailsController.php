<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Blog_detail;
use App\Blog_subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Intervention\Image\Facades\Image;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class Blog_detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_subjects = Blog_subject::get();
        return view('blog.blog_details.index',compact('blog_subjects'));
    }

    public function upload_tiny(Request $request)
    {
        // $fileName = time() . '.' . $request->file('file')->extension();
        // $request->file('file')->move(public_path('upload_blog'), $fileName);



        $imgwidth = 1250;
    
        $folderupload = 'upload_blog';
        
        $file = $request->file('file');
        $filename = time() . $file->getClientOriginalName(); 
        $path = public_path($folderupload.'/' . $filename);

        $img = Image::make($file->getRealPath());
        
        if($img->width()>$imgwidth){
           
            $img->resize($imgwidth, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        $img->save($path);

        $url = "../../upload_blog/" . $filename;
        return response()->json(['location' => $url]);
    }


    public function show_subject($id)
    {
    
        $blog_subjects = Blog_subject::where('blog_subjects_id',$id)->first();
        $subjects =  $blog_subjects->blog_subjects_title;

        $blog_detail = Blog_detail::select('*')->where('blog_details_blog_subjects_id',$id)->where('blog_details_user',Auth::user()->id)->get();
        
        return view('blog.blog_details.read.index',compact('blog_subjects','subjects','id','blog_detail'));
       
    }

    public function write($id)
    {
      return view('blog.blog_details.write.index',compact('id'));
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


    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {



            $imgwidth = 800;
            //folder upload (public/imgpics)
            $folderupload = 'images';
            
            $file = $request->file('upload');
            $filename = time() . $file->getClientOriginalName(); // prepend the time (integer) to the original file name
            $path = public_path($folderupload.'/' . $filename);
            
            // create instance of Intervention Image
            $img = Image::make($file->getRealPath());
            
            if($img->width()>$imgwidth){
                // See the docs - http://image.intervention.io/api/resize
                // resize the image to a width of 300 and constrain aspect ratio (auto height)
                $img->resize($imgwidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $img->save($path);
           

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$filename); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
    public function store(Request $request)
    {
        $input = $request->all();
          
        $data = new Blog_detail();
        $data->blog_details_title =  $input['blog_details_title'];
        // $data->blog_details_body = str_replace("upload_blog","upload_blog",$request['blog_details_body']);
        $data->blog_details_body = $request['blog_details_body'];
        $data->blog_details_blog_subjects_id  =  $input['blog_details_blog_subjects_id'];
        $data->blog_details_user   =  Auth::user()->id;
        $data->blog_details_districts_id   = Auth::user()->districts_id ;
        $data->save();
        // return Redirect::back()->withsuccess(__('เพิ่มไดอารี่สำเร็จ.'));
        return redirect('blog_details/subject/'.$input['blog_details_blog_subjects_id'])->withsuccess(__('เพิ่มไดอารี่สำเร็จ.'));
    }

    public function copy($id)
    {
      
            $new_data = Blog_detail::find($id);
        $data = new Blog_detail();
        $data->blog_details_title =  $new_data->blog_details_title;
        $data->blog_details_body =  $new_data->blog_details_body;
        $data->blog_details_blog_subjects_id  =  $new_data->blog_details_blog_subjects_id;
        $data->blog_details_user   =  Auth::user()->id;
        $data->blog_details_districts_id   = Auth::user()->districts_id ;
        $data->created_at   =$new_data->created_at;
        $data->updated_at   = $data->updated_at;
        $data->save();


       
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
        $blog_detail =  Blog_detail::where('blog_details_id',$id)->first();
        $blog_details_blog_subjects_id=$blog_detail->blog_details_blog_subjects_id;
        return view('blog.blog_details.edit.index',compact('blog_detail','id','blog_details_blog_subjects_id'));
    }

    public function select_data($id)
    {
        $blog_detail = Blog_detail::where('blog_details_id',$id)->first();

        return response()->json($blog_detail);
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
        $input = $request->all();
          
        $data =  Blog_detail::find($id);
        $data->blog_details_title =  $input['blog_details_title'];
        $data->blog_details_body =  $input['blog_details_body'];
        $data->blog_details_user   =  Auth::user()->id;
        $data->blog_details_districts_id   = Auth::user()->districts_id ;
        $data->save();
        // return Redirect::back()->withsuccess(__('เพิ่มไดอารี่สำเร็จ.'));
        return redirect('blog_details/subject/'.$input['blog_details_blog_subjects_id'])->withsuccess(__('แก้ไขไดอารี่สำเร็จ.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_detail = Blog_detail::find($id);
        $blog_detail->delete();
        return Redirect::back()->withsuccess(__('ลบข้อมูลสำเร็จ.'));
 
    }
}
