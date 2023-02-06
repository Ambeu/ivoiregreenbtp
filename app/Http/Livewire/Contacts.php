<?php

namespace App\Http\Livewire;

use App\Jobs\SendContactMailJob;
use App\Mail\SendContactMail;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contacts extends Component
{
    public $newContact = [];

    protected $rules = [
        'newContact.nom' => 'required',
        'newContact.email' => 'required|email',
        'newContact.tel' => 'required',
        'newContact.corps' => 'required',

    ];

    public $messages = [
        'newContact.nom.required' => 'Ce champs est obligatoire',
        'newContact.email.required' => 'Ce champs est obligatoire',
        'newContact.email.email' => 'Votre email est incorrect',
        'newContact.tel.required' => 'Ce champs est obligatoire',
        'newContact.corps.required' => 'Ce champs est obligatoire',
    ];

    public function render()
    {
        return view('livewire.contacts');
    }


    public function addContact(){
       $contact =  $this->validate();

       $mes = Message::create($contact["newContact"]);
       $contact["newContact"]['created_at'] = $mes->created_at->diffForHumans();
       SendContactMailJob::dispatch($contact["newContact"]);
       $this->newContact = [];
       session()->flash('success', 'Votre message a été envoyé avec succès !');

    }


}
