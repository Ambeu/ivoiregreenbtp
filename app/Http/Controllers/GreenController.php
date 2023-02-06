<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\GallerieAnnonce;
use Illuminate\Http\Request;

class GreenController extends Controller
{

    public function home(){
        $data['annonces'] = Annonce::where('etat','=',1)->latest()->limit(10)->get();
        return view('pages.home',$data);
    }
    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view("pages.service");
    }

    public function projets(){
        return view("pages.projet");
    }

    public function contact(){
        return view("pages.contact");
    }

    public function detailAnnonce($id){
        $data['annonce'] = Annonce::find($id);
        $data['galleries'] = GallerieAnnonce::where('annonce_id', '=', Annonce::find($id)->id)->get();
        $data['annonces'] = Annonce::latest()->where('id','!=',Annonce::find($id)->id)->limit(10)->get();
        return view('pages.annonces.detail',$data);
    }

}
