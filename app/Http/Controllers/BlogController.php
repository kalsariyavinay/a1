<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Repository\Interfaces\BlogRepositoryInterface;
class BlogController extends Controller
{
    protected $blog;
    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        $blog = $this->blog->list();
        return view('admin.blog.index', compact('blog'));
    }

    public function create()
    {
        return view('admin.blog.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image_url' => ['required', 'max:10240'],
            'video_url' => ['required', 'max:20480'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:65535'],
            'hyperlink' => ['required', 'max:255'],
            'meta_data' => ['required', 'max:255'],
            'tags' => ['required', 'max:255'],
            'title_spanish' => ['required', 'max:255'],
            'description_spanish' => ['required', 'max:65535'],
            'hyperlink_spanish' => ['required', 'max:255'],
            'meta_data_spanish' => ['required', 'max:255'],
            'tags_spanish' => ['required', 'max:255'],
        ]);

        $this->blog->storeOrUpdate($id = null, $data, $request);

        return redirect()->route('blogs.index');
    }

    public function show()
    {
    }

    public function edit($id)
    {
        $blog = $this->blog->findById($id);

        $blogs = Blog::with('blog_medias')->get();

        return view('admin.blog.edit', compact('blog','blogs'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'image_url' => [ 'max:10240'],
            'video_url' => [ 'max:20480'],
            'title' => ['required', 'max:255'],
            'description' => ['required', 'max:65535'],
            'hyperlink' => ['required', 'max:255'],
            'meta_data' => ['required', 'max:255'],
            'tags' => ['required', 'max:255'],
            'title_spanish' => ['required', 'max:255'],
            'description_spanish' => ['required', 'max:65535'],
            'hyperlink_spanish' => ['required', 'max:255'],
            'meta_data_spanish' => ['required', 'max:255'],
            'tags_spanish' => ['required', 'max:255'],
        ]);

        $this->blog->storeOrUpdate($id , $data, $request);

        return redirect()->route('blogs.index');
    }

    public function delete($id)
    {
        $this->blog->deleteById($id);
        return redirect()->route('blogs.index');
    }

    public function blog_media_delete($id)
    {
        $this->blog->blog_media_deleteById($id);

        return redirect()->back();
    }

    public function status_update($id, $status)
    {
        $this->blog->status_update($id, $status);

        return back();
    }
}