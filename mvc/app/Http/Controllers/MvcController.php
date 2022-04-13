<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Compound;

class MvcController extends Controller
{
    public function index()
    {

        $notes = Note::all();
        $notes = compact("notes");
        $notes = view("mvc", $notes);
        
        return $notes;
    }
}
