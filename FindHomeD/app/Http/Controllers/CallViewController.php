<?php

namespace App\Http\Controllers;
use App\Models\Lease;
use App\Models\TypeOfLease;
use Illuminate\Http\Request;

class CallViewController extends Controller
{
    public function __construct(){
        $this->type_of_rental = TypeOfLease::where("status",1)->get();
    }
    public function index(){
        $top_10_post = Lease::paginate(6);    
        return view('pages.index',['type_of_rental'=>$this->type_of_rental,'top_10_post'=>$top_10_post]);
    }
}
