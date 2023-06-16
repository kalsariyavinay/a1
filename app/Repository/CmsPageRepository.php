<?php

namespace App\Repository;
use App\Repository\Interfaces\CmsPageRepositoryInterface;
use App\Models\CmsPage;
use Illuminate\Pagination\LengthAwarePaginator;

class CmsPageRepository implements CmsPageRepositoryInterface {

    protected $cmspage = null;

    public function list() : LengthAwarePaginator 
    {
        return CmsPage::paginate(5);
    }

    public function findById($id) : CmsPage
    {
        return CmsPage::find($id);
    }

    public function storeOrUpdate($id = null, $data = [] )
    {   
        if(is_null($id)) {
            $cmspage = new CmsPage;
            $cmspage->title = $data['title'];
            $cmspage->url = $data['url'];
            $cmspage->description = $data['description'];
            $cmspage->save();

            return $cmspage;
        }

        $cmspage = CmsPage::find($id);
        $cmspage->title = $data['title'];
        $cmspage->url = $data['url'];
        $cmspage->description = $data['description'];
        $cmspage->save();

        return $cmspage;
    }
    
    public function deleteById($id)
    {
        return CmsPage::find($id)->delete();
    }

    public function status_update($id,$status)
    {
        $cmspage=CmsPage::find($id);
        $cmspage->is_active = $status;
        $cmspage->save();
        return $cmspage;
    }
}