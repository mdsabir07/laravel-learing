<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function page(Request $request){
        $seo = DB::table("seoproperties")->where("pageName","=","contact")->first();
        return view("pages.contracts",["seo"=>$seo]);
    }

    function ContactRequest(Request $request) {
        return DB::table("contracts")->insert($request->input());
    }
}
