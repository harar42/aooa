<?php

namespace App\Http\Controllers;
use http\Params;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $villes = ['PARIS','LYON','MARSEILLE','BORDEAUX','LILLE','NANTES'];
        $categories = DB::select('SELECT nom from categories limit 12');
        $partners = DB::select("SELECT p.id,p.nom, p.description,p.image,c.nom as category FROM partners  p
                  join categories c  on p.category_id = c.id ");

        return view('home')->with(['partners' => $partners,'villes' => $villes,'categories' => $categories]);
    }


    public function dashboard()
    {
        $villes = ['PARIS','LYON','MARSEILLE','BORDEAUX','LILLE','NANTES'];
        $categories = DB::select('SELECT nom from categories limit 12');
        $deals = DB::select('SELECT title,description,promotion from deals limit 3');
        $partners = DB::select("SELECT p.id,p.nom, p.adresse,p.ville,p.image,c.nom as category FROM partners  p
                  join categories c  on p.category_id = c.id limit 3");

//        dd($categories);
        return view('dashboard')->with(['partners' => $partners,'deals' => $deals,'villes' => $villes,'categories' => $categories]);
    }

    public function ville($ville)
    {
        if(!empty($ville))
        {
            $arg_ville = [$ville];
            $string = 'SELECT latitude,longitude from coordonnees where ville = ?';
            $datas = DB::select($string, $arg_ville);

        }
//        dd($datas[0]->latitude);

        $lat = $datas[0]->latitude;
        $lng = $datas[0]->longitude;
        $string = "SELECT p.id,p.nom, p.description,p.image,c.nom as category, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance FROM partners  p
                  join categories c  on p.category_id = c.id  HAVING distance < 50 ORDER BY distance LIMIT 0 , 20;";
        $args = [$lat, $lng, $lat];
        $datas = DB::select($string, $args);

//        dd($datas);
        return view('pages.ville')->with(['datas'=>$datas,'ville' => $ville]);
    }

    public function geolocation($latitude,$longitude)
    {

        $lat = $latitude;
        $lng = $longitude;
        $string = "SELECT p.id,p.nom, p.description,p.image,c.nom as category, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance FROM partners  p
                  join categories c  on p.category_id = c.id  HAVING distance < 50 ORDER BY distance LIMIT 0 , 20;";
        $args = [$latitude, $lng, $lat];
        $datas = DB::select($string, $args);

//        dd($datas);
        return view('pages.geolocation')->with('datas',$datas);
    }


    public function welcome()
    {
        return view('welcome');
    }


    public function mail(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'email'=>'required',
            'activity'=>'required',
            'message'=>'required'
        ]);

        $phone = ($request->phone) ? $request->phone : '';
        $activity = ($request->activity) ? $request->activity : '';
        $data = array('nom' => $request->nom,
            'email' => $request->email,
            'activity' => $activity,
            'phone' => $phone,
            'message' => $request->message,
        );

        Mail::to('ararhaouas@yahoo.fr')->send(new SendMail($data));
        return back()->with('success','Merci de nous avoir contacté');
    }

}
