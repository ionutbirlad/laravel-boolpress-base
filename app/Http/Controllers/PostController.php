<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      // ------------------così visualizzo tutti in una pagina------------------
      // $posts = Post::all();
      // ------------------così visualizzo tutti in una pagina------------------

      // $posts = Post::orderBy('id','desc')->paginate('25');
      $posts = Post::paginate('25');
      // dd($posts);

        return view('posts.index', compact('posts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPublished()
    {

      $posts = Post::where('published', true)->get();
      // dd($posts);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title'] , '-') . rand(1,100);

        // ----------------PER CAPIRE COME FUNZIONA LA FACADE----------------
        // $slug = new Str;
        // dd($slug);
        // $data['slug'] = $slug->slug($data['title'], '-') . rand(1,100);
        // ----------------PER CAPIRE COME FUNZIONA LA FACADE----------------

        $validator = Validator::make($data, [
          'title' => 'required|string|max:100',
          'body' => 'required',
          'author' => 'required'
        ]);

        if ($validator->fails()) {
          return redirect('posts/create')->withErrors($validator)->withInput();
        }

        $post = new Post;
        $post->fill($data);
        $saved = $post->save();
        if(!$saved) {
            dd('errore di salvataggio');
        }

        return redirect()->route('posts.show', compact('post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //se uso $id
      $post = Post::find($id);

      if(empty($post)){
            abort('404');
        }

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if (empty($post)) {
          abort('404');
        }

        return view('posts.edit', compact('post'));
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
      // -------------Per vedere se esiste il post in questione-------------
      $post = Post::find($id);
      if (empty($post)) {
        abort ('404');
      }
      // -------------Per vedere se esiste il post in questione-------------

      $data = $request->all();
      $now = Carbon::now()->format('Y-m-d-H-i-s');
      $data['slug'] = Str::slug($data['title'] , '-') . $now;

      $validator = Validator::make($data, [
        'title' => 'required|string|max:100',
        'body' => 'required',
        'author' => 'required'
      ]);

      if ($validator->fails()) {
        return redirect()->route('posts.edit')->withErrors($validator)->withInput();
      }

      if (empty($data['img'])) {
        unset($data['img']);
      }

      $post->fill($data);
      $updated = $post->update();

      return redirect()->route('posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (empty($post)) {
          abort ('404');
        }

        $post->delete();

        return redirect()->route('posts.index');
    }
}
