<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function view()
    {
        $data['allData'] = Product::all();
        return view('pages.home_content', $data);
     
       
    }
}
