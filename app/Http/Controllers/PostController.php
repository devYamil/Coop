<?php

namespace Coop\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use Coop\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storageFile(Request $request)
    {
        if($request->hasFile('file'))
        {
            try {
                $file = $request->file('file');
                $file_new_name = time() . $file->getClientOriginalName();
                $file_name = $file->getClientOriginalName();
                $file_extencion = $file->getClientOriginalExtension();

                $file_path = public_path().'/uploads/';
                $file->move($file_path, $file_new_name);


                return response()->json(['file'=>
                    ['name' => $file_name,
                        'new_name' => $file_new_name,
                        'extension' => $file_extencion,
                        'url' => $file_path]], 200);
            } catch (Exception $e) {
                return response()->json(['error' => $e], 200);;
            }
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->json()){
            $posts = Post::all();
            return response()->json($posts, 200);
        }
    }
    public function firstPagePosts(Request $request){
        // LIST FIRST 10 POSTs
        if($request->json()){
            $posts = Post::paginate();
            return response()->json($posts, 200);
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
        if($request->json()){
            $id_user = 1;
            $text = $request->input('text');
            $resource = $request->input('resource');
            $status = 1;
            $post = Post::create([
                'id_user' => $id_user,
                'text' => $text,
                'resource' => json_encode($resource),
                'status' => $status,
            ]);
            return response()->json(['post'=>$post], 201);
        }
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
