<?php

namespace App\Http\Livewire;

use App\Models\Annonce;
use App\Models\GallerieAnnonce;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;

use Livewire\Component;
use Livewire\WithPagination;

class Annonces extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $currentPage = PAGEANNONCE;
    public $fileUpload;
    public $titre;
    public $lieu;
    public $imageAnnonce;
    public $ville;
    public $proprietaire;
    public $contact2;
    public $description;
    public $prix_annonce;
    public $type;

    public $annonceID;

    public $annonceEdit = [];
    public $allVues = [];


    public $validateData = [
        "titre" => "required",
        "lieu" => "required",
        "imageAnnonce" => "required",
        "proprietaire" => "required",
        "contact2" => "required",
        "description" => "required",
        "prix_annonce" => "required",
        "ville" => "required",
        "type" => "required",
    ];

    public $validateDataUp = [
        "titre" => "required",
        "lieu" => "required",
        // "imageAnnonce" => "required",
        "proprietaire" => "required",
        "contact2" => "required",
        "description" => "required",
        "prix_annonce" => "required",
        "ville" => "required",
        "type" => "required",
    ];

    public $messages = [
        "titre.required" => "Ce champs est obligatoire",
        "lieu.required" => "Ce champs est obligatoire",
        "imageAnnonce.required" => "Ce champs est obligatoire",
        "proprietaire.required" => "Ce champs est obligatoire",
        "contact2.required" => "Ce champs est obligatoire",
        "description.required" => "Ce champs est obligatoire",
        "prix_annonce.required" => "Ce champs est obligatoire",
        "ville.required" => "Ce champs est obligatoire",
        "type.required" => "Ce champs est obligatoire",
    ];

    public function render()
    {
        return view('livewire.annonces',
        [
            "annonces" => Annonce::where('etat','=',1)->latest()->paginate(5)
        ]
            )
                    ->extends('admin.layouts.master')
                    ->section('content');
    }

    public function goToaddPage(){
        $this->titre = null;
        $this->lieu= null;
       $this->proprietaire= null;
       $this->contact2= null;
       $this->description= null;
       $this->prix_annonce= null;
       $this->ville= null;
       $this->type= null;
       $this->imageAnnonce = null;
       $this->fileUpload = null;
        $this->currentPage = PAGEADDANNONCE;
    }

    public function goToAnnonce(){
        $this->currentPage = PAGEANNONCE;
    }

    public function goToUpdatePage($id){
        $this->annonceID = $id;
        $this->annonceEdit = Annonce::find($id);

       $this->titre = $this->annonceEdit->titre;
       $this->lieu= $this->annonceEdit->lieu;
       $this->proprietaire= $this->annonceEdit->proprietaire;
       $this->contact2= $this->annonceEdit->contact2;
       $this->description= $this->annonceEdit->description;
       $this->prix_annonce= $this->annonceEdit->prix_annonce;
       $this->ville= $this->annonceEdit->ville;
       $this->type= $this->annonceEdit->type;
       $this->imageAnnonce = $this->annonceEdit->image;
    //    $this->fileUpload = null;
        $this->currentPage = PAGEUPDATEANNONCE;
    }

    public function goToViewImagePage($id){
        $this->annonceEdit = Annonce::find($id)->toArray();
        $this->allVues = GallerieAnnonce::where('annonce_id', '=', $id)->get();
        $this->currentPage  = PAGEVIEWANNONCE;
    }

    public function save(){

        $data = [
            "titre" => $this->titre,
            "lieu" => $this->lieu,
            "proprietaire" => $this->proprietaire,
            "contact2" => $this->contact2,
            "description"=> $this->description,
            "prix_annonce" => $this->prix_annonce,
            "ville" => $this->ville,
            "type" => $this->type,
            "user_id" => auth()->user()->id,
            "etat" => 1
        ];

        if(!empty($this->imageAnnonce)){
            // hash name image
            $imageHashName = $this->imageAnnonce->hashName();

            $validateData = array_merge($this->validateData, [
                "imageAnnonce" => 'image'
            ]);

            $data = array_merge($data,[
                'image' => $imageHashName
            ]);

            $this->imageAnnonce->store('public/photos');
            Storage::makeDirectory('public/photos_annonce');

            $manager = new ImageManager();
            $image = $manager->make('storage/photos/'.$imageHashName)->resize(300,200);
            $image->save('storage/photos_annonce/'.$imageHashName);

        }

        $this->validate($this->validateData);


        $annonceNewCreate = Annonce::create($data);

        if(!empty($this->fileUpload)){
            foreach($this->fileUpload as $photo){
                $photo->store('public/additional_photos');

                GallerieAnnonce::create([
                    "annonce_id"=> $annonceNewCreate->id,
                    "filename" =>$photo->hashName()
                ]);
            }
        }

         $this->titre = null;
         $this->lieu= null;
        $this->proprietaire= null;
        $this->contact2= null;
        $this->description= null;
        $this->prix_annonce= null;
        $this->ville= null;
        $this->type= null;
        $this->imageAnnonce = null;
        $this->fileUpload = null;

        $this->dispatchBrowserEvent("ShowSuccesMessage",["message" => "Annonce créé avec succes !"]);
    }


    public function updateAnnonce(){
        $data = [
            "titre" => $this->titre,
            "lieu" => $this->lieu,
            "proprietaire" => $this->proprietaire,
            "contact2" => $this->contact2,
            "description"=> $this->description,
            "prix_annonce" => $this->prix_annonce,
            "ville" => $this->ville,
            "type" => $this->type
        ];

        $this->validate($this->validateDataUp);

        // dump($this->fileUpload);

        $annonceUpdate = Annonce::find($this->annonceID)->update($data);

        if(!empty($this->fileUpload)){
            foreach($this->fileUpload as $photo){
                $photo->store('public/additional_photos');

                GallerieAnnonce::create([
                    "annonce_id"=> Annonce::find($this->annonceID)->id,
                    "filename" =>$photo->hashName()
                ]);
            }

        }

        return redirect()->to('/admin-annonce');

        // $this->dispatchBrowserEvent("ShowSuccesMessage",["message" => "Annonce modifier avec succes !"]);

    }


    public function confirmDelete($id){
        // $annonce = Annonce::find($id)->get();

        $this->dispatchBrowserEvent("ShowConfirmMessage",["message" => [
        "text"=>"Vous etes sur le point de supprimer cette annonce.  Voulez-vous continuer ?",
        "title" =>"Etes vous sure ? ",
        "type" => "warning",
        "data"=> [
            "userId" =>  Annonce::find($id)->id
        ]
        ]
    ]);

    }


    public function deleteAnnonce($id){
        // $data = [
        //     "etat" => 0
        // ];
        $annonce = Annonce::find($id);
        $annonce->etat = 0;
        $annonce->update();
        $this->dispatchBrowserEvent("ShowSuccesMessage",["message" => "Annonce supprimer avec succes !"]);
    }



}
