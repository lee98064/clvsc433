<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::with('user')->orderBy('id', 'desc')->paginate(9);
        return view('posts.index' ,['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::with('user')->find($id);
        return view('posts.show',['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = $request->validate([
            'title'=> 'required|min:2',
            'content'=> 'required'
        ]);

        $post = auth()->user()->posts()->create($post);
        return redirect()->route('posts.show',$post)->with('notice', '文章新增成功！');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);    
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);

        $content = $request->validate([
            'title'=> 'required|min:2',
            'content'=> 'required'
        ]);

        $post->update($content);
        return redirect()->route('posts.show', $post)->with('notice', '文章更新成功！');
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('root')->with('notice', '文章已刪除！');
    }
}
