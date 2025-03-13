<?php

namespace App\Livewire;

use App\Mail\CandidatureMail;
use App\Models\Candidate;
use App\Models\Company;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormCandidate extends Component
{
    use WithFileUploads;

    public $PIE;
    public $RS;
    public $cv;
    public $SC;
    public $BP;
    public $EF;
    public $PC;

    protected $rules = [
        "SC" => "required",
        "PIE" => "required",
        "RS" => "required",
        "BP" => "required",
        "EF" => "required",
        "PC" => "required"
    ];
    
    public function render()
    {
        return view('livewire.form-candidate');
    }
    public function submit(){

        
     //   $cvpath = $this->cv->store("uploads","public");
     //   $motivpath = $this->motivation->store('uploads',"public");

      //  Mail::to(env("MAIL_FROM_ADDRESS"))->send(new CandidatureMail($this->name, $this->email));

        session()->flash("message","Candidature envoyé avec succès, nous vous informerons
        dans un bref delai");
        $this->vider();
    }

    private function vider()
    {
         $this->name = " ";
         $this->email = " ";
         $this->phone = " ";
         $this->domaine = " ";
         $this->cv = "";
         $this->motivation = " ";
    }
}
