<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blog_media;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Portfolio_media;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Hash;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        return redirect()->back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        $blogs = Blog::all();
        return view('welcome', compact('portfolios', 'blogs'));
    }

    public function adminlogin()
    {
        return view('admin.auth.login');
    }

    public function userloginpost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->orWhere('username', $request->email)->first();
        if (isset($user) && $user->user_type != 1) {
            return redirect()->route('login');
        }
        if ($user != null) {
            if (Hash::check($request->password, $user->password)) {
                auth()->login($user, true);
                Session::flash('message', 'Login successfully');
                Session::flash('errormsg', 'success');
                return redirect()->route('index');
            }
        }
        return back();
    }
    public function adminloginpost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        if (isset($user) && $user->user_type != 2) {
            return redirect()->route('adminlogin');
        }
        $users = $request->only('email', 'password');
        if (Auth::attempt($users)) {
            return view('admin.dashboard');
        } else {
            return redirect()->route('adminlogin');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function perform()
    {
        Session::flush();
        Auth::logout();
        return redirect()->back();
    }

    public function contactus()
    {
        return view('pages.contactus');
    }

    public function blogview()
    {
        $blogs = Blog::all();
        $blog_medias = Blog_media::all();
        return view('blog.blogview', compact('blogs', 'blog_medias'));
    }

    public function blog_single($id)
    {
        $blogs = Blog::where('id', $id)->get();
        $blog_medias = Blog_media::all();
        return view('blog.blog_single', compact('blogs', 'blog_medias'));
    }


    public function portfolioview()
    {
        $categorys = Category::all();
        $portfolios = Portfolio::all();
        $portfolio_medias = Portfolio_media::all();
        return view('portfolio.portfolioview', compact('portfolios', 'categorys', 'portfolio_medias'));
    }

    public function portfolio_single($id)
    {
        $categorys = Category::all();
        $portfolios = Portfolio::where('id', $id)->get();
        $portfolio_medias = Portfolio_media::all();
        return view('portfolio.portfolio_single', compact('portfolios', 'categorys', 'portfolio_medias'));
    }
}