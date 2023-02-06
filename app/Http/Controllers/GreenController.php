<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\GallerieAnnonce;
use Illuminate\Http\Request;

class GreenController extends Controller
{

    public function home(){
        $data['title'] = "PAGE ACCUEIL";
        $data['annonces'] = Annonce::where('etat','=',1)->latest()->limit(10)->get();
        return view('pages.home',$data);
    }
    public function about(){
        $data['title'] = "QUI SOMMES NOUS ?";
        return view('pages.about',$data);
    }

    public function services(){
        $data['title'] = "MA PAGE SERVICE";
        return view("pages.service",$data);
    }

    public function projets(){
        $data['title'] = "MA PAGE PROJET";
        return view("pages.projet",$data);
    }

    public function contact(){
        $data['title'] = "MA PAGE CONTACT";
        return view("pages.contact",$data);
    }

    public function detailAnnonce($id){
        $data['annonce'] = Annonce::find($id);
        $data['title'] = Annonce::find($id)->titre;
        $data['galleries'] = GallerieAnnonce::where('annonce_id', '=', Annonce::find($id)->id)->get();
        $data['annonces'] = Annonce::latest()->where('id','!=',Annonce::find($id)->id)->where('etat',1)->limit(10)->get();
        return view('pages.annonces.detail',$data);
    }

}
