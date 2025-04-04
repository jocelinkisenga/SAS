<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminCandidateController extends Controller
{
    public  $file = "";
    public function index () : View {

        $candidates = Candidate::latest()->get();

        return view("admin.listcandidates", ['candidates' => $candidates]);
    }
}
