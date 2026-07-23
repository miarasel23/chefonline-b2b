<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private function loadDataFromJson()
    {
        $publicPath = resource_path();
        $file_name = '/data/data.json';
        $items = file_get_contents($publicPath . $file_name);
        return json_decode($items, true);
    }
    public function packageIndex()
    {
        $data = $this->loadDataFromJson();

        $chefOnlineEpos = $data['category'][0];
        // $addons = $data['category'][1];

        return view('frontend.package', ['chefOnlineEpos' => $chefOnlineEpos]);
    }

    public function packageDetail($slug)
    {
        $data = $this->loadDataFromJson();

        $products = $data['category'][0]['products'];
        $relatedCategory = $data['category'][0];

        $selectedProduct = null;

        foreach ($products as $value) {
            if ($value['slug'] == $slug) {
                $selectedProduct = $value;
                break;
            }
        }

        if (!$selectedProduct) {
            abort(404, 'Product not found');
        }

        return view('frontend.package-detail', [
            'chefOnlineEpos' => $selectedProduct,
            'chefOnlineEposRelatedProduct' => $relatedCategory
        ]);
    }


    // public function packageDetail($slug)
    // {
    //     $data = $this->loadDataFromJson();

    //     $chefOnlineEpos = $data['category'][0]['products'];
    //     $chefOnlineEposRelatedProduct = $data['category'][0];

    //     foreach ($chefOnlineEpos as $value) {
    //         if ($value['id'] == $id) {
    //             $chefOnlineEpos = $value;
    //         }
    //     }

    //     return view('frontend.package-detail', ['chefOnlineEpos' => $chefOnlineEpos, 'chefOnlineEposRelatedProduct' => $chefOnlineEposRelatedProduct]);
    // }

    public function addonIndex()
    {
        $data = $this->loadDataFromJson();

        $addons = $data['category'][1];

        return view('frontend.addon', ['addons' => $addons]);
    }

    public function addonDetail($slug)
    {
        $data = $this->loadDataFromJson();

        $chefOnlineEposList = $data['category'][1]['products'];

        $chefOnlineEpos = null;
        foreach ($chefOnlineEposList as $value) {
            if ($value['slug'] == $slug) {
                $chefOnlineEpos = $value;
                break;
            }
        }

        if (!$chefOnlineEpos) {
            abort(404); // show 404 if not found
        }

        // dd($chefOnlineEpos);

        return view('frontend.addon-detail', ['chefOnlineEpos' => $chefOnlineEpos]);
    }


    // public function addonDetail($id)
    // {
    //     $data = $this->loadDataFromJson();

    //     $chefOnlineEpos = $data['category'][1]['products'];

    //     foreach ($chefOnlineEpos as $value) {
    //         if ($value['id'] == $id) {
    //             $chefOnlineEpos = $value;
    //         }
    //     }

    //     // dd($chefOnlineEpos);

    //     return view('frontend.package-detail', ['chefOnlineEpos' => $chefOnlineEpos]);
    // }
}