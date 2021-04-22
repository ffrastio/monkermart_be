<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //melihat halaman barang
        $items = Barang::paginate(5);
        return view('pages.barang.index', [
            'item' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menyimpan data
        $data = $request->all();

        Barang::create($data);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengedit data barang
        $item = Barang::findOrFail($id);

        return view('pages.barang.edit')->with([
            'item' => $item
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //mengupdate data barang
        $data = $request->all();

        $item = Barang::findOrFail($id);
        $item->update($data);

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data barang
        $item = Barang::findOrFail($id);
        $item->delete();
        return redirect('/barang');
    }

    public function trash()
    {
        // mengampil data Barang yang sudah dihapus
        $item = Barang::onlyTrashed()->get();
        return view('pages.barang.trash', ['item' => $item]);
    }
    public function restore($id)
    {
        $items = Barang::onlyTrashed()->where('id', $id);
        $items->restore();
        return redirect()->route('barang.trash');
    }
    public function restoreAll()
    {
        $items = Barang::onlyTrashed();
        $items->restore();
        return redirect()->route('barang.trash');
    }
    public function delete($id)
    {
        $items = Barang::onlyTrashed()->where('id', $id);
        $items->forceDelete();
        return redirect()->route('barang.index');
    }
    public function deleteAll()
    {
        $items = Barang::onlyTrashed();
        $items->forceDelete();
        return redirect()->route('barang.index');
    }
}
