<?php

use Illuminate\Foundation\Inspiring;
use App\Models\Annonce;
Inspiring::quote();
$annonce= Annonce::find(1);
$annonce=Annonce::where("ville", "fes")->get();
$annonce=Annonce::where("titre", "like","%R+2%")->orwhere("description", "like", "%R+2%")->get();
$annonce=Annonce::where("type", "villa")->orwhere("type", 'maison')->get();
$annonce=Annonce::where("neuf", 0)->orwhere("prix", "<=", 400000)->get();
$annonce=Annonce::where("created_at", Annonce::max("created_at"))->first();
$annonce=Annonce::whereBetween("superficie",  [70,100])->where("neuf", 1)->get();
$annonce=Annonce::where("type", "Maison")->orderby("id", "desc")->limit(4)->get();
$annonce=Annonce::select("ville")->distinct()->get();
$annonce=Annonce::select("titre")->selectRaw("prix - (prix * 0.05) as prix")->distinct()->get();
$annonce=Annonce::wheredate("created_at", "<", date("Y-m-d", strtotime("-2 years")))->wheredate("updated_at", "<", date("Y-m-d", strtotime("-3 months")))->delete();
$annonce=Annonce::where("ville", "meknes")->count();
