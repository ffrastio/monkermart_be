<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection\Paginate;


class BarangController extends Controller
{
    //
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 5);
        $nama = $request->input('nama');
        $kategori = $request->input('kategori');
        $hargabeli = $request->input('hargabeli');
        $hargajual = $request->input('hargajual');

        if ($id) {
            $items = Barang::all()->find($id);

            if ($items)

                return ResponeFormatter::success($items, 'Data Berhasil Diambil');

            else
                return ResponeFormatter::error(null, 'Data Tidak Berhasil Diambil', 404);
        }

        $items = Barang::all();

        if ($nama)
            $items->where('name', 'like', '%' . $nama . '%');
        if ($kategori)
            $items->where('type', 'like', '%' . $kategori . '%');
        if ($hargabeli)
            $items->where('price', '>=', $hargabeli);
        if ($hargajual)
            $items->where('price', '<=', $hargajual);

        return ResponeFormatter::success(
            $items->paginate($limit),
            'Data List Berhasil Diambil'
        );
    }
}
