<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Partner;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;



class PartnerController extends Controller
{

    /**
     * Enforce middleware.
     */
    public function __construct()
    {
        $this->middleware('isadmin', ['only' => ['create', 'store', 'edit', 'delete','index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = DB::table('partners')
            ->join('categories', 'partners.category_id', '=', 'categories.id')
            ->select('partners.*', 'categories.nom as allo')
            ->get();
//        $partners = Partner::all()->categories;
        return view('partners.index')->with('partners', $partners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =  Category::all();
//        dd($categories);
        return view('partners.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

        $request->validate([
            'nom'=>'required',
            'description'=>'required',
            'adresse'=>'required',
            'ville'=>'required',
            'code_postal'=>'required',
            'latitude'=>'required',
            'longitude'=> 'required',
            'category_id' => 'required|integer'
        ]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/partners/' . $filename);
            Image::make($image)->resize(400,400)->save($location);
        }
        else
        {
                $filename = "http://lorempixel.com/400/400/";
        }
        $partner = new Partner([
            'nom'=> $request->get('nom'),
            'description' => $request->get('description'),
            'adresse' => $request->get('adresse'),
            'ville' => $request->get('ville'),
            'code_postal' => $request->get('code_postal'),
            'latitude' => $request->get('latitude'),
            'longitude' => $request->get('longitude'),
            'image' => $filename,
            'category_id' => $request->get('category_id'),
        ]);

        $partner->save();
        return redirect('/partners')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::find($id);
        $deals = DB::table('deals')
            ->select('deals.*')->where('partner_id',$id)
            ->get();
        return view('partners.show')->with(['deals'=> $deals,'partner' => $partner]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        $categories =  Category::all();

//        dd($partner);
        return view('partners.edit')->with(['partner' => $partner,'categories' =>  $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom'=>'required',
            'description'=>'required',
            'adresse'=>'required',
            'ville'=>'required',
            'code_postal'=>'required',
            'latitude'=>'required|string',
            'longitude'=> 'required|string',
            'category_id' => 'required|integer'
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/partners/' . $filename);
            Image::make($image)->resize(400,400)->save($location);
        }


        $partner = Partner::find($id);
        $partner->nom = $request->get('nom');
        $partner->description = $request->get('description');
        $partner->adresse = $request->get('adresse');
        $partner->code_postal = $request->get('code_postal');
        $partner->ville = $request->get('ville');
        $partner->latitude = $request->get('latitude');
        $partner->longitude = $request->get('longitude');
        if($filename)
        {
            $partner->image = $filename;
        }
        $partner->category_id = $request->get('category_id');
        $partner->save();

        return redirect('/partners')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();

        return redirect('/partners')->with('success', 'Stock has been deleted Successfully');
    }

    public function deals($id)
    {
        $deals = DB::table('deals')
            ->select('deals.*')->where('partner_id',$id)
            ->get();
        return view('partner.show')->with('deals', $deals);

    }
}
