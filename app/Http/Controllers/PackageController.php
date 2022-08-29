<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageModel;

class PackageController extends Controller
{
    public function packages() {
        $travel_packages = PackageModel::all();

        $data = [
            'travel_packages' => $travel_packages
        ];

        return view('home', $data);
    }
}
