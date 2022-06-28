<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BerandaModel;

class BerandaController extends Controller
{
    public function __construct()
    {
        $this->BerandaModel = new BerandaModel();
        $this->middleware('auth');
    }
    public function index(){
        $data = [
            'beranda' => $this->BerandaModel->Alldata(),
        ];
        return view('konten.v_beranda',$data);
    }
    public function artikel($id_artikel){
        if(!$this->BerandaModel->Detailartikel($id_artikel)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailartikel($id_artikel),
        ];
        return view('detail.v_detail-artikel',$data);
    }
    public function artikel2($id_artikel2){
        if(!$this->BerandaModel->Detailartikel2($id_artikel2)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailartikel2($id_artikel2),
        ];
        return view('detail.v_detail-artikel2',$data);
    }
    public function artikel3($id_artikel3){
        if(!$this->BerandaModel->Detailartikel3($id_artikel3)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailartikel3($id_artikel3),
        ];
        return view('detail.v_detail-artikel3',$data);
    }
    public function service($id_service){
        $data = [
            'beranda' => $this->BerandaModel->Detailservice($id_service),
        ];
        return view('detail.v_detail-service',$data);
    }
    public function project($id_project){
        $data = [
            'beranda' => $this->BerandaModel->Detailproject($id_project),
        ];
        return view('detail.v_detail-project',$data);
    }
    public function imgproject($id_imgproject){
        if(!$this->BerandaModel->Detailimgproject($id_imgproject)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject($id_imgproject),
        ];
        return view('detail.v_detail-imgproject',$data);
    }
    public function imgproject2($id_imgproject2){
        if(!$this->BerandaModel->Detailimgproject2($id_imgproject2)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject2($id_imgproject2),
        ];
        return view('detail.v_detail-imgproject2',$data);
    }
    public function imgproject3($id_imgproject3){
        if(!$this->BerandaModel->Detailimgproject3($id_imgproject3)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject3($id_imgproject3),
        ];
        return view('detail.v_detail-imgproject3',$data);
    }
    public function imgproject4($id_imgproject4){
        if(!$this->BerandaModel->Detailimgproject4($id_imgproject4)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject4($id_imgproject4),
        ];
        return view('detail.v_detail-imgproject4',$data);
    }
    public function imgproject5($id_imgproject5){
        if(!$this->BerandaModel->Detailimgproject5($id_imgproject5)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject5($id_imgproject5),
        ];
        return view('detail.v_detail-imgproject5',$data);
    }
    public function imgproject6($id_imgproject6){
        if(!$this->BerandaModel->Detailimgproject6($id_imgproject6)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject6($id_imgproject6),
        ];
        return view('detail.v_detail-imgproject6',$data);
    }
    public function imgedit($id_imgproject){
        if(!$this->BerandaModel->Detailimgproject($id_imgproject)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject($id_imgproject),
        ];
        return view('edit.v_edit-imgproject',$data);
    }
    public function imgupdate($id_imgproject){
        request()->validate([
            'img_project'=>'mimes:png,jpg,jpeg,bmp,svg',
            'img_judul' => 'required|max:25',
            'img_isi' => 'required',
        ],[
            'img_judul.required' => 'Judul product belum terisi',
            'img_judul.max' => 'Max nama judul 25 karakter',
            'img_isi.required' => 'Isi product belum terisi',
        ]);


        if(Request()->img_project <> ''){
            $file = request()->img_project;
            $filename = request()->img_judul.'.'.$file->extension();
            $file->move(public_path('img'), $filename);

            $data = [
                'img_project'=> $filename,
                'img_judul' => request()->img_judul,
                'img_isi' => request()->img_isi,
            ];
            $this->BerandaModel->Editimgproject($id_imgproject,$data);
        }else {
            $data = [
                'img_judul' => request()->img_judul,
                'img_isi' => request()->img_isi,
            ];
            $this->BerandaModel->Editimgproject($id_imgproject,$data);
        }
        return redirect()->route('product')->with('pesan','Data berhasil di ubah');
    }

    public function imgedit2($id_imgproject2){
        if(!$this->BerandaModel->Detailimgproject2($id_imgproject2)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject2($id_imgproject2),
        ];
        return view('edit.v_edit-imgproject2',$data);
    }
    public function imgupdate2($id_imgproject2){
        request()->validate([
            'img_project2'=>'mimes:png,jpg,jpeg,bmp,svg',
            'img_judul2' => 'required|max:25',
            'img_isi2' => 'required',
        ],[
            'img_judul2.required' => 'Judul product belum terisi',
            'img_judul2.max' => 'Max nama judul 25 karakter',
            'img_isi2.required' => 'Isi product belum terisi',
        ]);


        if(Request()->img_project2 <> ''){
            $file = request()->img_project;
            $filename = request()->img_judul2.'.'.$file->extension();
            $file->move(public_path('img'), $filename);

            $data = [
                'img_project2'=> $filename,
                'img_judul2' => request()->img_judul2,
                'img_isi2' => request()->img_isi2,
            ];
            $this->BerandaModel->Editimgproject2($id_imgproject2,$data);
        }else {
            $data = [
                'img_judul2' => request()->img_judul2,
                'img_isi2' => request()->img_isi2,
            ];
            $this->BerandaModel->Editimgproject2($id_imgproject2,$data);
        }
        return redirect()->route('product')->with('pesan','Data berhasil di ubah');
    }

    public function imgedit3($id_imgproject3){
        if(!$this->BerandaModel->Detailimgproject3($id_imgproject3)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject3($id_imgproject3),
        ];
        return view('edit.v_edit-imgproject3',$data);
    }
    public function imgupdate3($id_imgproject3){
        request()->validate([
            'img_project3'=>'mimes:png,jpg,jpeg,bmp,svg',
            'img_judul3' => 'required|max:25',
            'img_isi3' => 'required',
        ],[
            'img_judul3.required' => 'Judul product belum terisi',
            'img_judul3.max' => 'Max nama judul 25 karakter',
            'img_isi3.required' => 'Isi product belum terisi',
        ]);


        if(Request()->img_project3 <> ''){
            $file = request()->img_project;
            $filename = request()->img_judul3.'.'.$file->extension();
            $file->move(public_path('img'), $filename);

            $data = [
                'img_project3'=> $filename,
                'img_judul3' => request()->img_judul3,
                'img_isi3' => request()->img_isi3,
            ];
            $this->BerandaModel->Editimgproject3($id_imgproject3,$data);
        }else {
            $data = [
                'img_judul3' => request()->img_judul3,
                'img_isi3' => request()->img_isi3,
            ];
            $this->BerandaModel->Editimgproject3($id_imgproject3,$data);
        }
        return redirect()->route('product')->with('pesan','Data berhasil di ubah');
    }
    public function imgedit4($id_imgproject4){
        if(!$this->BerandaModel->Detailimgproject4($id_imgproject4)){
            abort(404);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject4($id_imgproject4),
        ];
        return view('edit.v_edit-imgproject4',$data);
    }
    public function imgupdate4($id_imgproject4){
        request()->validate([
            'img_project4'=>'mimes:png,jpg,jpeg,bmp,svg',
            'img_judul4' => 'required|max:25',
            'img_isi4' => 'required',
        ],[
            'img_judul4.required' => 'Judul product belum terisi',
            'img_judul4.max' => 'Max nama judul 25 karakter',
            'img_isi4.required' => 'Isi product belum terisi',
        ]);


        if(Request()->img_project4 <> ''){
            $file = request()->img_project;
            $filename = request()->img_judul4.'.'.$file->extension();
            $file->move(public_path('img'), $filename);

            $data = [
                'img_project4'=> $filename,
                'img_judul4' => request()->img_judul4,
                'img_isi4' => request()->img_isi4,
            ];
            $this->BerandaModel->Editimgproject4($id_imgproject4,$data);
        }else {
            $data = [
                'img_judul4' => request()->img_judul4,
                'img_isi4' => request()->img_isi4,
            ];
            $this->BerandaModel->Editimgproject4($id_imgproject4,$data);
        }
        return redirect()->route('product')->with('pesan','Data berhasil di ubah');
    }
    public function imgedit5($id_imgproject5){
        if(!$this->BerandaModel->Detailimgproject5($id_imgproject5)){
            abort(505);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject5($id_imgproject5),
        ];
        return view('edit.v_edit-imgproject5',$data);
    }
    public function imgupdate5($id_imgproject5){
        request()->validate([
            'img_project5'=>'mimes:png,jpg,jpeg,bmp,svg',
            'img_judul5' => 'required|max:25',
            'img_isi5' => 'required',
        ],[
            'img_judul5.required' => 'Judul product belum terisi',
            'img_judul5.max' => 'Max nama judul 25 karakter',
            'img_isi5.required' => 'Isi product belum terisi',
        ]);


        if(Request()->img_project5 <> ''){
            $file = request()->img_project;
            $filename = request()->img_judul5.'.'.$file->extension();
            $file->move(public_path('img'), $filename);

            $data = [
                'img_project5'=> $filename,
                'img_judul5' => request()->img_judul5,
                'img_isi5' => request()->img_isi5,
            ];
            $this->BerandaModel->Editimgproject5($id_imgproject5,$data);
        }else {
            $data = [
                'img_judul5' => request()->img_judul5,
                'img_isi5' => request()->img_isi5,
            ];
            $this->BerandaModel->Editimgproject5($id_imgproject5,$data);
        }
        return redirect()->route('product')->with('pesan','Data berhasil di ubah');
    }
    public function imgedit6($id_imgproject6){
        if(!$this->BerandaModel->Detailimgproject6($id_imgproject6)){
            abort(606);
        }
        $data = [
            'beranda' => $this->BerandaModel->Detailimgproject6($id_imgproject6),
        ];
        return view('edit.v_edit-imgproject6',$data);
    }
    public function imgupdate6($id_imgproject6){
        request()->validate([
            'img_project6'=>'mimes:png,jpg,jpeg,bmp,svg',
            'img_judul6' => 'required|max:25',
            'img_isi6' => 'required',
        ],[
            'img_judul6.required' => 'Judul product belum terisi',
            'img_judul6.max' => 'Max nama judul 25 karakter',
            'img_isi6.required' => 'Isi product belum terisi',
        ]);


        if(Request()->img_project6 <> ''){
            $file = request()->img_project;
            $filename = request()->img_judul6.'.'.$file->extension();
            $file->move(public_path('img'), $filename);

            $data = [
                'img_project6'=> $filename,
                'img_judul6' => request()->img_judul6,
                'img_isi6' => request()->img_isi6,
            ];
            $this->BerandaModel->Editimgproject6($id_imgproject6,$data);
        }else {
            $data = [
                'img_judul6' => request()->img_judul6,
                'img_isi6' => request()->img_isi6,
            ];
            $this->BerandaModel->Editimgproject6($id_imgproject6,$data);
        }
        return redirect()->route('product')->with('pesan','Data berhasil di ubah');
    }
}
