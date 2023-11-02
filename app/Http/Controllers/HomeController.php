<?php


namespace App\Http\Controllers;


use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index(Request $request)
    {
//        Cookie::queue('test', 'Test cookie', 5);
//        Cookie::queue(Cookie::forget('test'));
//        dump(Cookie::get('test'));
        /*dump(Cookie::get('test'));
        dump($request->cookie('test'));*/

//        Cache::put('key', 'Value', 60);

//        dump(Cache::get('key'));

//        Cache::put('key', 'Value', 300);
        /*Cache::forget('key');
        dump(Cache::get('key'));*/

//        Cache::flush();

//        dump(Cache::pull('key'));
//        dump(Cache::get('key'));

        if (Cache::has('posts')) {
            $posts = Cache::get('posts');
        } else {
            $posts = Post::orderBy('id', 'desc')->get();
            Cache::put('posts', $posts);
        }

        $title = 'Home Page';
        return view('home', compact('title', 'posts'));
    }

    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('create', compact('title', 'rubrics'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
             'title' => 'required|min:5|max:100',
             'content' => 'required',
             'rubric_id' => 'integer',
        ]);

        Post::create($request->all());
        $request->session()->flash('success', 'Данные сохранены!');
        return redirect()->route('home');
    }

}
