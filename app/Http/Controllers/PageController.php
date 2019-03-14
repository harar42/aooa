<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $partners = DB::table('partners')
            ->join('categories', 'partners.category_id', '=', 'categories.id')
            ->select('partners.*', 'categories.nom as allo')
            ->get();
//        $partners = Partner::all()->categories;
        return view('pages.homepage')->with('partners', $partners);
    }
}
