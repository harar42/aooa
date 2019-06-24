<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Partner;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DealController extends Controller
{

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
        $deals = DB::table('deals')
            ->join('partners', 'partners.id', '=', 'deals.partner_id')
            ->select('deals.*', 'partners.nom as allo')
            ->get();
//        $partners = Partner::all()->categories;
        return view('deals.index')->with('deals', $deals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($partner_id)
    {
        return view('deals.create')->with('partner_id',$partner_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->get('partner_id') );
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'promotion'=>'required'
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/deals/' . $filename);
            Image::make($image)->resize(500,500)->save($location);
        }
        $partner = new Deal([
            'title'=> $request->get('title'),
            'description' => $request->get('description'),
            'promotion' => $request->get('promotion'),
            'image' => $filename,
            'partner_id' => $request->get('partner_id'),
        ]);
        $partner->save();



        return redirect('/deals')->with('success', 'Stock has been updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deal = Deal::find($id);
        $partner = DB::table('partners')
            ->select('partners.*')->where('id',$deal->partner_id)
            ->get();
        return view('deals.show')->with(['deal'=> $deal,'partner' => $partner]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deal = Deal::find($id);

//        dd($partner);
        return view('deals.edit', compact('deal'));
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
            'code_postal'=>'required',
            'ville'=>'required',
            'latitude'=>'required',
            'longitude'=> 'required',
            'category_id' => 'required'
        ]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/deals/' . $filename);
            Image::make($image)->resize(500,500)->save($location);
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
            $partner->image =$filename;
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
        $deal = Deal::find($id);
        $deal->delete();

        return redirect('/deals')->with('success', 'Stock has been deleted Successfully');
    }
}
