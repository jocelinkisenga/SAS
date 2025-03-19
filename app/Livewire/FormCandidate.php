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

        
     $pie= $this->PIE->store("uploads","public");
     $rs = $this->RS->store('uploads',"public");
     $bp = $this->BP->store('uploads',"public");
$ef = $this->EF->store('uploads',"public");

$pc = $this->PC->store('uploads',"public");
Candidate::create([
        "SC" => $this->PC ,
        "PIE" => $pie,
        "RS" =>  $rs,
        "BP" => $bp ,
        "EF" =>$ef,
        "PC" => $pc
]);
//Mail::to(env("MAIL_FROM_ADDRESS"))->send(new CandidatureMail($this->name, $this->email));

       // session()->flash("message","Candidature envoyé avec succès, nous vous informerons
       // dans un bref delai");
        $this->vider();
    }

    private function vider()
    {
         $this->SC = " ";
         $this->PIE = " ";
         $this->RS = " ";
         $this->BP = " ";
         $this->EF = "";
         $this->PC = " ";
    }
}
