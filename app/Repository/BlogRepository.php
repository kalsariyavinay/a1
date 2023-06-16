<?php

namespace App\Repository;

use App\Repository\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;
use App\Models\Blog_media;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogRepository implements BlogRepositoryInterface
{

    protected $blog = null;

    public function list(): LengthAwarePaginator
    {
        return Blog::with('blog_medias')->paginate(5);
    }

    public function findById($id): Blog
    {
        return Blog::find($id);
    }

    public function storeOrUpdate($id = null, array $data = [], $request)
    {
        if (is_null($id)) {
            $blog = new Blog;
            $blog->title = $data['title'];
            $blog->description = $data['description'];
            $blog->hyperlink = $data['hyperlink'];
            $blog->meta_data = $data['meta_data'];
            $tag = explode(" ", $data['tags']);
            $result = implode(",", $tag);
            $blog->tags = $result;
            $blog->title_spanish = $data['title_spanish'];
            $blog->description_spanish = $data['description_spanish'];
            $blog->hyperlink_spanish = $data['hyperlink_spanish'];
            $blog->meta_data_spanish = $data['meta_data_spanish'];
            $tags = explode(" ", $data['tags_spanish']);
            $results = implode(",", $tags);
            $blog->tags_spanish = $results;
            $blog->save();
            if ($request->hasFile('image_url')) {
                $imageupload = 'uploads/';
                $i = 1;
                foreach ($request->file('image_url') as $imagefile) {
                    $imageextention = $imagefile->getClientOriginalName();
                    $imagename = time() . $i++ . '.' . $imageextention;
                    $imagefile->move($imageupload, $imagename);
                    $imagepathname = $imageupload . $imagename;

                    $imagestore = new Blog_media();
                    $imagestore->blog_id = $blog->id;
                    $imagestore->media_type = 1;
                    $imagestore->url = $imagepathname;
                    if ($i == 2) {
                        $imagestore->primary_img = 1;
                    }
                    $imagestore->save();
                }
            }
            if ($request->hasFile('video_url')) {
                $imageupload = 'uploads/';
                $i = 1;
                foreach ($request->file('video_url') as $imagefile) {
                    $imageextention = $imagefile->getClientOriginalName();
                    $imagename = time() . $i++ . '.' . $imageextention;
                    $imagefile->move($imageupload, $imagename);
                    $imagepathname = $imageupload . $imagename;

                    $imagestore = new Blog_media();
                    $imagestore->blog_id = $blog->id;
                    $imagestore->media_type = 2;
                    $imagestore->url = $imagepathname;
                    $imagestore->save();
                }
            }
            return $blog;
        }

        $blog = Blog::find($id);
        $blog->title = $data['title'];
        $blog->description = $data['description'];
        $blog->hyperlink = $data['hyperlink'];
        $blog->meta_data = $data['meta_data'];
        $tags = explode(" ", $data['tags']);
        $result = implode(",", $tags);
        $blog->tags = $result;
        $blog->title_spanish = $data['title_spanish'];
        $blog->description_spanish = $data['description_spanish'];
        $blog->hyperlink_spanish = $data['hyperlink_spanish'];
        $blog->meta_data_spanish = $data['meta_data_spanish'];
        $tags = explode(" ", $data['tags_spanish']);
        $results = implode(",", $tags);
        $blog->tags_spanish = $results;
        $blog->save();
        if ($request->hasFile('image_url')) {
            $imageupload = 'uploads/';
            $i = 1;
            foreach ($request->file('image_url') as $imagefile) {
                $imageextention = $imagefile->getClientOriginalName();
                $imagename = time() . $i++ . '.' . $imageextention;
                $imagefile->move($imageupload, $imagename);
                $imagepathname = $imageupload . $imagename;

                $imagestore = new Blog_media();
                $imagestore->blog_id = $blog->id;
                $imagestore->media_type = 1;
                $imagestore->url = $imagepathname;
                $imagestore->save();
            }
        }
        if ($request->hasFile('video_url')) {
            $imageupload = 'uploads/';
            $i = 1;
            foreach ($request->file('video_url') as $imagefile) {
                $imageextention = $imagefile->getClientOriginalName();
                $imagename = time() . $i++ . '.' . $imageextention;
                $imagefile->move($imageupload, $imagename);
                $imagepathname = $imageupload . $imagename;

                $imagestore = new Blog_media();
                $imagestore->blog_id = $blog->id;
                $imagestore->media_type = 2;
                $imagestore->url = $imagepathname;
                $imagestore->save();
            }

        }
        return $blog;
    }

    public function deleteById($id)
    {
        return Blog::find($id)->delete();
    }

    public function blog_media_deleteById($id)
    {
        return Blog_media::find($id)->delete();
    }
    public function status_update($id, $status)
    {
        $blog = Blog::find($id);
        $blog->is_active = $status;
        $blog->save();
        return $blog;
    }
}