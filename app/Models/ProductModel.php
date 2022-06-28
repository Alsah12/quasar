<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    protected $guarded =['id_project'];

    public function Alldata(){
        return DB::table('tbl_project')
        ->leftJoin('tbl_imgproject','tbl_imgproject.id_imgproject','=','tbl_project.id_imgproject')
        ->leftJoin('tbl_imgproject2','tbl_imgproject2.id_imgproject2','=','tbl_project.id_imgproject2')
        ->leftJoin('tbl_imgproject3','tbl_imgproject3.id_imgproject3','=','tbl_project.id_imgproject3')
        ->leftJoin('tbl_imgproject4','tbl_imgproject4.id_imgproject4','=','tbl_project.id_imgproject4')
        ->leftJoin('tbl_imgproject5','tbl_imgproject5.id_imgproject5','=','tbl_project.id_imgproject5')
        ->leftJoin('tbl_imgproject6','tbl_imgproject6.id_imgproject6','=','tbl_project.id_imgproject6')
        ->get();
    }
    //Detail data
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
}
