<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TambahController extends Controller
{
  public function tambah()
  {
    $a = new \App\data_sekolah;
    $a->nama = \Input::get('nama');
    $a->alamat = \Input::get('alamat');
    $a->kota = \Input::get('kota');
    $a->jumlah_siswa = \Input::get('jumlah_siswa');
    $a->save();

    // var_dump($a);
    // die();

    return redirect(url('tampil_edit/'.$a->id));
    }
    public function tampil_edit($id)
    {
      $data['sekolah'] = \App\data_sekolah::whereIdSekolah($id)->first();
      return view('edit')->with($data);
    }
    public function edit()
    {
      $a = \App\data_sekolah::where('id_sekolah',\Input::get('id_sekolah'))->first();
      $a->nama = \Input::get('nama');
      $a->alamat = \Input::get('alamat');
      $a->kota = \Input::get('kota');
      $a->jumlah_siswa = \Input::get('jumlah_siswa');
      $a->save();
      }
}
