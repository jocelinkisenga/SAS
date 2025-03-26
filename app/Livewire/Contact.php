<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name, $email,$subject, $message = "";

    protected $rules = [
        "name" => "required",
        "email" => "required|email",
        "subject" => "required",
        "message" => "required",
    ];

    public function render()
    {
        return view('livewire.contact');
    }

    public function submit(){
     
        $this->validate();

        Mail::to(env("MAIL_FROM_ADDRESS"))->send(new ContactMail($this->name, $this->subject,$this->email, $this->msg));

       



        session()->flash("message", "Message envoyé avec succés");
        
    }
}
