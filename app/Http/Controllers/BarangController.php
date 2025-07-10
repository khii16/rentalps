<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;
use Illuminate\View\View;
class BarangController extends Controller
{
    public function list(): View
	{
		$data = Barang::all();
		return view('barang.list', [ 'data' => $data ]);
	}
}
