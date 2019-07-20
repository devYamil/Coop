<?php

namespace Coop\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use Coop\Post;
use Illuminate\Support\Facades\Auth;
use DB;

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

    public function subirImagenesCooperativa(Request $request)
    {
        if($request->hasFile('file'))
        {
            try {
                $file = $request->file('file');
                $file_new_name = time() . $file->getClientOriginalName();
                $file_name = $file->getClientOriginalName();
                $file_extencion = $file->getClientOriginalExtension();

                $file_path = public_path().'/imagenes_cooperativa_editable/';
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
    public function paginatePost(){
        $id_cooperativa = $_REQUEST['id_cooperativa'];
        //return Post::where('id_cooperativa', '=' , $id_cooperativa)->orderBy('id', 'DESC')->paginate(5);
         return $posts = DB::table('posts AS ps')
                   ->join('users AS us', 'us.id', '=', 'ps.id_user')
                   ->where('ps.id_cooperativa', '=' , $id_cooperativa)
                   ->select('ps.*',
                            'us.name',
                             DB::raw("DATE_FORMAT(ps.created_at, 'Publicado el %d-%m-%Y horas %H:%i') as publicado"))
                   ->orderBy('ps.id', 'DESC')
                   ->paginate(5);
    }
    public function firstPagePosts(Request $request){
        try {
            // LIST FIRST 10 POSTs
            if($request->json()){
                $posts = Post::orderBy('id', 'DESC')->paginate(10);
                return response()->json(['posts'=>$posts], 200);
            }
        } catch(Exception $e) {
            return response()->json([
                'error_custom' => $e
            ], 401);
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
            $currentUser = Auth::user();
            $text = $request->input('text');
            $resource = $request->input('resource');
            $status = 1;
            /*
             *  SIGNIFICA QUE ES UN USUARIO SUPER ADMIN Y PUEDE PUBLICAR EN CUALQUIER COOPERATIVA
             *  si el usuario es SUPER ADMIN 2 TENEMOS QUE SACAR LA URL Y EL ID DE COOPERATIVA EN DONDE ESTA
             *  PUBLICANDO LA NOTICIA y ese parametro nos esta llegando por via POST ya que se esta extrayendo
             *  en el componente y se envia al controlador
             */
            $id_cooperativa = $currentUser['id_cooperativa'];
            if ($currentUser['type_user'] == 2 || $currentUser['id_cooperativa'] == 0){
                $id_cooperativa = $request->input('id_cooperativa');
            }
            $post = Post::create([
                                    'id_user'        => $currentUser['id'],
                                    'id_cooperativa' => $id_cooperativa,
                                    'text'           => $text,
                                    'resource'       => json_encode($resource),
                                    'status'         => $status,
                                ]);
            $postsReturn = DB::table('posts AS ps')
                        ->join('users AS us', 'us.id', '=', 'ps.id_user')
                        ->where('ps.id_cooperativa', '=' , $id_cooperativa)
                        ->where('ps.id', '=' , $post['id'])
                        ->select('ps.*',
                            'us.name',
                            DB::raw("DATE_FORMAT(ps.created_at, 'Publicado el %d-%m-%Y horas %H:%i') as publicado"))
                        ->orderBy('ps.id', 'DESC')
                        ->get();
            return response()->json(['post'=>$postsReturn], 201);
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
