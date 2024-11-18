<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = DB::table('san_phams')->orderByDesc('id');
        $key = $request->input('key');
        if ($key) {
            $query->where(function ($query) use ($key) {
                $query->where('ma_san_pham', 'like', "%$key%")
                    ->orWhere('ten_san_pham', 'like', "%$key%");
            });
        }
        $listSanPham = $query->paginate(2);
        return view('admins.sanphams.index', compact('listSanPham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.sanphams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filePath = null;
        if($request->hasFile('hinh_anh')){
            $filePath = $request->file('hinh_anh')->store('uploads/sanpham','public');
        }
        $dataSanPham = [
            'ma_san_pham' => $request->input('ma_san_pham'),
            'ten_san_pham' => $request->input('ten_san_pham'),
            'gia' => $request->input('gia'),
            'gia_khuyen_mai' => $request->input('gia_khuyen_mai'),
            'hinh_anh' => $filePath
        ];
        // dd($dataSanPham);
        DB::table('san_phams')->insert($dataSanPham);
        DB::commit();
        return redirect()->route('sanphams.index')
        ->with('success', 'Thêm sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
