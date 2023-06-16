<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Repository\Interfaces\PortfolioRepositoryInterface;

class PortfolioController extends Controller
{
    protected $portfolio;

    public function __construct(PortfolioRepositoryInterface $portfolio)
    {
        $this->portfolio = $portfolio;
    }

    public function index()
    {
        $portfolios = $this->portfolio->list();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.portfolio.add', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:65535'],
            'url' => ['required','max:20480'],
            'category' => ['required', 'string', 'max:255'],
            'map_url' => ['required', 'string', 'max:255'],
            'text' => ['required', 'max:255'],
            'value' => ['required', 'max:255'],

        ]);

        $this->portfolio->storeOrUpdate($id = null, $data, $request);

        return redirect()->route('portfolio.index');
    }

    public function edit($id)
    {
        $portfolio = $this->portfolio->findById($id);

        $category = Category::all();

        $portfolios = Portfolio::with('portfolio_medias')->get();

        return view('admin.portfolio.edit', compact('portfolio', 'category'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:65535'],
            'url' => ['max:20480'],
            'category' => ['required', 'string', 'max:255'],
            'map_url' => ['required', 'string', 'max:255'],
            'text' => ['required', 'max:255'],
            'value' => ['required', 'max:255'],
        ]);

        $this->portfolio->storeOrUpdate($id, $data, $request);

        return redirect()->route('portfolio.index');
    }

    public function delete($id)
    {
        $this->portfolio->deleteById($id);

        return redirect()->route('portfolio.index');
    }

    public function portfolio_media_delete($id)
    {
        $this->portfolio->portfolio_media_deleteById($id);

        return redirect()->back();
    }

    public function status_update($id, $status)
    {
        $this->portfolio->status_update($id, $status);

        return back();
    }
}