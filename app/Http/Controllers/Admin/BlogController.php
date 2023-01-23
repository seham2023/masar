<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Traits\FileUploadTRait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBlogRequest;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{


    use FileUploadTRait;
    public function index()
    {
        $blogs =Blog::all();
        return view('Admin.Pages.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Pages.blogs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $request)
    {


        try {
            $file=$request->file('image_path');
            if($file){
                $filename=time().'.'.$file->getClientOriginalExtension();
                $this->uploadFile($file,'blog','uploads',$filename,null);
            }
            Blog::create([
                'title' => $request->title,
                'description' => $request->description,
                'image_path' => $filename
            ]);
            Alert::success('Success Title', 'saved successfully');
            return redirect()->route('admin.blog.create');
        } catch (\Exception $e) {
            Alert::error('Error Title', 'An error occurred while saving the blog post, please try again later.');
            return redirect()->route('admin.blog.create');
        }


        // $file=$request->file('image_path');
        // if($file){
        //     $filename=time().'.'.$file->getClientOriginalExtension();
        //     $this->uploadFile($file,'blog','uploads',$filename,null);
        // }
        // Blog::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'image_path' => $filename
        // ]

        // );
        // Alert::success('Success Title', 'saved successfully');
        // return redirect()->route('admin.blog.create');

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
        //
    }
}
