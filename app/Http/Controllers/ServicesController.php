<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function aardewerkuitdemiddeleeuwenendenieuwetijd()
    {
        return view('diensten.aardewerk-uit-de-middeleeuwen-en-de-nieuwe-tijd');
    }
    public function adviesenprojectbegeleiding()
    {
        return view('/diensten.advies-en-projectbegeleiding');
    }
    public function archeobotanie()
    {
        return view('/diensten.archeobotanie');
    }
    public function archeologischleer()
    {
        return view('diensten.archeologisch-leer');
    }
    public function bureauonderzoek()
    {
        return view('diensten.bureau-onderzoek');
    }
    public function deponeren()
    {
        return view('diensten.deponeren');
    }
    public function dierlijkbotmateriaal()
    {
        return view('diensten.dierlijk-botmateriaal');
    }
    public function digitaliseren()
    {
        return view('diensten.digitaliseren');
    }
    public function directievoeringofprojectleidingbijeenopgraving()
    {
        return view('diensten.directievoering-of-projectleiding-bij-een-opgraving');
    }
    public function expositieenrestauratie()
    {
        return view('diensten.expositie-en-restauratie');
    }
    public function fysischgeografischonderzoek()
    {
        return view('diensten.fysisch-geografisch-onderzoek');
    }
    public function fysischeantropologie()
    {
        return view('diensten.fysische-antropologie');
    }
    public function glasbouwmateriaalpijpaardemetaal()
    {
        return view('diensten.glas-bouwmateriaal-pijpaarde-metaal');
    }
    public function historischonderzoek()
    {
        return view('diensten.historisch-onderzoek');
    }
    public function inventariserendbooronderzoek()
    {
        return view('diensten.inventariserend-booronderzoek');
    }
    public function karterendbooronderzoek()
    {
        return view('diensten.karterend-booronderzoek');
    }
    public function natuursteen()
    {
        return view('diensten.natuursteen');
    }
    public function objectfotografie()
    {
        return view('diensten.object-fotografie');
    }
    public function opstellenpva()
    {
        return view('diensten.opstellen-pva');
    }
    public function opstellenpve()
    {
        return view('diensten.opstellen-pve');
    }
    public function prehistorischaardewerk()
    {
        return view('diensten.prehistorisch-aardewerk');
    }
    public function proefsleuvenonderzoek()
    {
        return view('diensten.proefsleuvenonderzoek');
    }
    public function projectleidingveldwerk()
    {
        return view('diensten.projectleiding-veldwerk');
    }
    public function sporenstructurenensynthese()
    {
        return view('diensten.sporen-structuren-en-synthese');
    }
    public function verkennendbooronderzoek()
    {
        return view('diensten.verkennend-booronderzoek');
    }
    public function vondstverwerking()
    {
        return view('diensten.vondstverwerking');
    }
    public function voorwerptekenen()
    {
        return view('diensten.voorwerptekenen');
    }
    public function vuursteen()
    {
        return view ('diensten.vuursteen');
    }
    public function waarderendbooronderzoek()
    {
        return view('diensten.waarderend-booronderzoek');
    }

}
