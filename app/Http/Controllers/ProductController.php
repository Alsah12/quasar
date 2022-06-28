<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
        $this->middleware('auth');
    }
    public function index(){
        $data = [
            'product' => $this->ProductModel->Alldata(),
        ];
        return view('konten.v_product',$data);
    }
    public function imgproject($id_imgproject){
        if(!$this->ProductModel->Detailimgproject($id_imgproject)){
            abort(404);
        }
        $data = [
            'product' => $this->ProductModel->Detailimgproject($id_imgproject),
        ];
        return view('detail.v_detail-imgproject',$data);
    }
    public function imgproject2($id_imgproject2){
        if(!$this->ProductModel->Detailimgproject2($id_imgproject2)){
            abort(404);
        }
        $data = [
            'product' => $this->ProductModel->Detailimgproject2($id_imgproject2),
        ];
        return view('detail.v_detail-imgproject2',$data);
    }
    public function imgproject3($id_imgproject3){
        if(!$this->ProductModel->Detailimgproject3($id_imgproject3)){
            abort(404);
        }
        $data = [
            'product' => $this->ProductModel->Detailimgproject3($id_imgproject3),
        ];
        return view('detail.v_detail-imgproject3',$data);
    }
    public function imgproject4($id_imgproject4){
        if(!$this->ProductModel->Detailimgproject4($id_imgproject4)){
            abort(404);
        }
        $data = [
            'product' => $this->ProductModel->Detailimgproject4($id_imgproject4),
        ];
        return view('detail.v_detail-imgproject4',$data);
    }
    public function imgproject5($id_imgproject5){
        if(!$this->ProductModel->Detailimgproject5($id_imgproject5)){
            abort(404);
        }
        $data = [
            'product' => $this->ProductModel->Detailimgproject5($id_imgproject5),
        ];
        return view('detail.v_detail-imgproject5',$data);
    }
    public function imgproject6($id_imgproject6){
        if(!$this->ProductModel->Detailimgproject6($id_imgproject6)){
            abort(404);
        }
        $data = [
            'product' => $this->ProductModel->Detailimgproject6($id_imgproject6),
        ];
        return view('detail.v_detail-imgproject6',$data);
    }
}
