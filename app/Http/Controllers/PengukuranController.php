<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengukuran;
use App\Models\Waktu;
use App\Http\Controllers\Controller;


class PengukuranController extends Controller
{
    public function file()
    {
        //$data = Home::paginate(1);
        //$data = Home::getTable('homes')->latest('created_at')->first();
        $wt = Waktu::all();
        $datawaktu= Waktu::latest('id')->take(4)->get();
        $data = Pengukuran::latest('id')->first();
        $datasuhu = Pengukuran::latest('id')->take(4)->get();
        $datatekud = Pengukuran::latest('id')->take(4)->get();
        $datakelem = Pengukuran::latest('id')->take(4)->get();
        $datacurah = Pengukuran::latest('id')->take(4)->get();
        $dataAangin = Pengukuran::latest('id')->take(4)->get();
        $dataKec = Pengukuran::latest('id')->take(4)->get();

        $dsuhu = [];
        foreach($datasuhu as $ds){
            $dsuhu[] = (int) $ds->suhu;
        }
        $re1 = array_reverse($dsuhu);
        //dd ($re1);
        //////////////////////////////////////////////
        $dtekud = [];
        foreach($datatekud as $dtu){
            $dtekud[] = (int) $dtu->tekanan_udara;
        }
        $re2 = array_reverse($dtekud);
        /////////////////////////////////////////////
        $dkel = [];
        foreach($datakelem as $dkl){
            $dkel[] = (int) $dkl->kelembaban;
        }
        $re3 = array_reverse($dkel);
        ///////////////////////////////////////////
        
        $dcur = [];
        foreach($datacurah as $dcr){
            $dcur[] = (int) $dcr->curah_hujan;
        }
        $re4 = array_reverse($dcur);
        //////////////////////////////////////////
        $dAng = [];
        foreach($dataAangin as $da){
            $dAng[] = (int) $da->arah_angin;
        }
        $re5 = array_reverse($dAng);
        ////////////////////////////////////////////
        $dkecA = [];
        foreach($dataKec as $dkc){
            $dkecA[] = (int) $dkc->kecepatan_angin;
        }
        $re6 = array_reverse($dkecA);
        ///////////////////////////////////////////
        
        $dwaktu = [];
        foreach($datawaktu as $dw){
            $dwaktu[] = $dw->vv;
        }
        $rew = array_reverse($dwaktu);
        ////////////////////////////////////////////
        
        //dd (!!json_encode($dsuhu)!!);
        //dd(json_encode($dsuhu));
        //dd(json_encode($dwaktu ?? ''));
        //$data = Pengukuran::latest('id')->take(3)->get();
        return view("pengukuran",["data"=>$data, "re1" =>$re1, "rew" =>$rew
        , "re2" =>$re2, "re3" =>$re3, "re4" =>$re4, "re5" =>$re5, "re6" =>$re6]);

    }
}
