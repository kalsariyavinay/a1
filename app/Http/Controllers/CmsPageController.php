<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interfaces\CmsPageRepositoryInterface;

class CmsPageController extends Controller
{
    protected $cmspage;

    public function __construct(CmsPageRepositoryInterface $cmspage)
    {
        $this->cmspage = $cmspage;
    }

    public function index()
    {
        $cmspages = $this->cmspage->list();
        return view('admin.cmspage.index', compact('cmspages'));
    }

    public function create()
    {
        return view('admin.cmspage.add');

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255', ],
            'url' => ['required', 'max:255', ],
            'description' => ['required', 'max:65535'],
        ]);

        $this->cmspage->storeOrUpdate($id = null, $data);

        return redirect()->route('cmspage.index');
    }

    public function edit($id)
    {
        $cmspage = $this->cmspage->findById($id);

        return view('admin.cmspage.edit', compact('cmspage'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255', ],
            'url' => ['required', 'max:255', ],
            'description' => ['required','max:65535' ],
        ]);

        $this->cmspage->storeOrUpdate($id, $data);

        return redirect()->route('cmspage.index');
    }

    public function delete($id)
    {
        $this->cmspage->deleteById($id);

        return redirect()->route('cmspage.index');
    }

    public function status_update($id, $status)
    {
        $this->cmspage->status_update($id, $status);

        return back();
    }
}