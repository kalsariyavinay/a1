<?php

namespace App\Repository;

use App\Models\portfolio_media;
use App\Repository\Interfaces\PortfolioRepositoryInterface;
use App\Models\Portfolio;
use Illuminate\Pagination\LengthAwarePaginator;

class PortfolioRepository implements PortfolioRepositoryInterface
{


    protected $portfolio = null;

    public function list(): LengthAwarePaginator
    {
        return Portfolio::with('portfolio_medias')->paginate(5);
    }

    public function findById($id): Portfolio
    {
        return Portfolio::find($id);
    }

    public function storeOrUpdate($id = null, $data = [], $request)
    {
        if (is_null($id)) {
            $portfolio = new Portfolio;
            $portfolio->title = $data['title'];
            $portfolio->description = $data['description'];
            $portfolio->category = $data['category'];
            $portfolio->map_url = $data['map_url'];

            $inputtext = $request->input('text');
            $text = $inputtext;
            $inputvalue = $request->input('value');
            $value = $inputvalue;
            $multi_store = compact('text', 'value');
            $portfolio->custom_data = json_encode($multi_store);
            $portfolio->save();

            if ($request->hasFile('url')) {
                $imageupload = 'uploads/';
                $i = 1;
                foreach ($request->file('url') as $imagefile) {
                    $imageextention = $imagefile->getClientOriginalName();
                    $imagename = time() . $i++ . '.' . $imageextention;
                    $imagefile->move($imageupload, $imagename);
                    $imagepathname = $imageupload . $imagename;
    
                    $imagestore = new portfolio_media();
                    $imagestore->portfolio_id = $portfolio->id;
                    $imagestore->url = $imagepathname;
                    if ($i==2) {
                        $imagestore->primary_img = 1;
                    }
                    $imagestore->save();
                }
            }

            return $portfolio;
        }

        $portfolio = Portfolio::find($id);
        
        $portfolio->title = $data['title'];
        $portfolio->description = $data['description'];
        $portfolio->category = $data['category'];
        $portfolio->map_url = $data['map_url'];

        $inputtext = $request->input('text');
        $text = $inputtext;
        $inputvalue = $request->input('value');
        $value = $inputvalue;
        $multi_store = compact('text', 'value');
        $portfolio->custom_data = json_encode($multi_store);
        $portfolio->save();


        if ($request->hasFile('url')) {
            $imageupload = 'uploads/';
            $i = 1;
            foreach ($request->file('url') as $imagefile) {
                $imageextention = $imagefile->getClientOriginalName();
                $imagename = time() . $i++ . '.' . $imageextention;
                $imagefile->move($imageupload, $imagename);
                $imagepathname = $imageupload . $imagename;

                $imagestore = new portfolio_media();
                $imagestore->portfolio_id = $portfolio->id;
                $imagestore->url = $imagepathname;
                $imagestore->save();
            }
        }

        return $portfolio;
    }

    public function deleteById($id)
    {
        return Portfolio::find($id)->delete();
    }

    public function portfolio_media_deleteById($id)
    {
        return portfolio_media::find($id)->delete();
    }

    public function status_update($id, $status)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->is_active = $status;
        $portfolio->save();
        return $portfolio;
    }
}