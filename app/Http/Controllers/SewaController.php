<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sewa;
use App\Models\Barang;
use Illuminate\View\View;

class SewaController extends Controller
{
    public function list(): View
	{
		$data = Sewa::all();
		return view('sewa.list', [ 'data' => $data ]);
	}
	
	public function list_barang($id): View
	{
		$data = Sewa::where("id_barang",$id)->get();
		$dataBarang = Barang::find($id);
		return view('sewa.kategori', [ 'data' => $data, 'kategori'=>$dataBarang ]);
	}
	
	public function detail($id): View
	{
		$data = Sewa::find($id);
	return view('sewa.detail', [ 'data' => $data ]);
	}
}
