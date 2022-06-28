<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BerandaModel extends Model
{
    protected $guarded =['id_beranda'];

    public function Alldata(){
        return DB::table('tbl_beranda')
        ->leftJoin('tbl_about','tbl_about.id_about','=','tbl_beranda.id_about')
        ->leftJoin('tbl_artikel','tbl_artikel.id_artikel','=','tbl_beranda.id_artikel')
        ->leftJoin('tbl_artikel2','tbl_artikel2.id_artikel2','=','tbl_beranda.id_artikel2')
        ->leftJoin('tbl_artikel3','tbl_artikel3.id_artikel3','=','tbl_beranda.id_artikel3')
        ->leftJoin('tbl_service','tbl_service.id_service','=','tbl_beranda.id_service')
        ->leftJoin('tbl_project','tbl_project.id_project','=','tbl_beranda.id_project')
        ->leftJoin('tbl_imgproject','tbl_imgproject.id_imgproject','=','tbl_beranda.id_imgproject')
        ->leftJoin('tbl_imgproject2','tbl_imgproject2.id_imgproject2','=','tbl_beranda.id_imgproject2')
        ->leftJoin('tbl_imgproject3','tbl_imgproject3.id_imgproject3','=','tbl_beranda.id_imgproject3')
        ->leftJoin('tbl_imgproject4','tbl_imgproject4.id_imgproject4','=','tbl_beranda.id_imgproject4')
        ->leftJoin('tbl_imgproject5','tbl_imgproject5.id_imgproject5','=','tbl_beranda.id_imgproject5')
        ->leftJoin('tbl_imgproject6','tbl_imgproject6.id_imgproject6','=','tbl_beranda.id_imgproject6')
        ->get();
    }

    //DETAIL ARTIKEL
    public function Detailartikel($id_artikel){
        return DB::table('tbl_artikel')->where('id_artikel',$id_artikel)->first();
    }
    public function Detailartikel2($id_artikel2){
        return DB::table('tbl_artikel2')->where('id_artikel2',$id_artikel2)->first();
    }
    public function Detailartikel3($id_artikel3){
        return DB::table('tbl_artikel3')->where('id_artikel3',$id_artikel3)->first();
    }

    //SERVICE & PRODUCT
    public function Detailservice($id_service){
        return DB::table('tbl_service')->where('id_service',$id_service)->first();
    }
    public function Detailproject($id_project){
        return DB::table('tbl_project')->where('id_project',$id_project)->first();
    }

    //DETAIL GAMBAR
    public function Detailimgproject($id_imgproject){
        return DB::table('tbl_imgproject')->where('id_imgproject',$id_imgproject)->first();
    }
    public function Detailimgproject2($id_imgproject2){
        return DB::table('tbl_imgproject2')->where('id_imgproject2',$id_imgproject2)->first();
    }
    public function Detailimgproject3($id_imgproject3){
        return DB::table('tbl_imgproject3')->where('id_imgproject3',$id_imgproject3)->first();
    }
    public function Detailimgproject4($id_imgproject4){
        return DB::table('tbl_imgproject4')->where('id_imgproject4',$id_imgproject4)->first();
    }
    public function Detailimgproject5($id_imgproject5){
        return DB::table('tbl_imgproject5')->where('id_imgproject5',$id_imgproject5)->first();
    }
    public function Detailimgproject6($id_imgproject6){
        return DB::table('tbl_imgproject6')->where('id_imgproject6',$id_imgproject6)->first();
    }
    //Edit data
    public function Editimgproject($id_imgproject,$data){
        DB::table('tbl_imgproject')->where('id_imgproject',$id_imgproject)->update($data);
    }
    public function Editimgproject2($id_imgproject2,$data){
        DB::table('tbl_imgproject2')->where('id_imgproject2',$id_imgproject2)->update($data);
    }
    public function Editimgproject3($id_imgproject3,$data){
        DB::table('tbl_imgproject3')->where('id_imgproject3',$id_imgproject3)->update($data);
    }
    public function Editimgproject4($id_imgproject4,$data){
        DB::table('tbl_imgproject4')->where('id_imgproject4',$id_imgproject4)->update($data);
    }
    public function Editimgproject5($id_imgproject5,$data){
        DB::table('tbl_imgproject5')->where('id_imgproject5',$id_imgproject5)->update($data);
    }
    public function Editimgproject6($id_imgproject6,$data){
        DB::table('tbl_imgproject6')->where('id_imgproject6',$id_imgproject6)->update($data);
    }
}
