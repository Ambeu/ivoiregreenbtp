<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class ContactAdmin extends Component
{
    use WithPagination;

    public $isButton = false;

    protected $paginationTheme = "bootstrap";
    public $messageArr = [];

    public function render()
    {
        return view('livewire.contact-admin',
                [
                    "messages"=> Message::latest()->paginate(15)
                ])
                ->extends('admin.layouts.master')
                ->section('content');
    }

    public function detailMessage($id){
        $this->messageArr = Message::find($id)->toArray();
        return $this->isButton = true;

    }

    public function retourListContact(){
        return $this->isButton = false;
    }
} 
