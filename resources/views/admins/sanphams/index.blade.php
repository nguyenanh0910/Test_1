{{-- Để kế thừa lại master layout ta sử dụng extends --}}
@extends('layouts.admin')
{{-- Một file chỉ được kế thừa 1 master layout --}}

@section('title')
    Quản lý sản phẩm
@endsection

@section('CSS')

@endsection

{{-- @section: dùng để chị định phần nội dụng được hiển thị --}}
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                    <h4 class="mb-sm-0">Quản lý sản phẩm</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách sản phẩm</h4>
                            <a href="{{ route('sanphams.create') }}" class="btn btn-soft-success material-shadow-none">
                                <i class="ri-add-circle-line align-middle me-1"></i>
                                Thêm sản phẩm
                            </a>
                        </div><!-- end card header -->
                        <form action="{{ route('sanphams.index') }}" method="GET" class="mt-3 d-flex ms-3 ">
                            <div class="form-group mx-2">
                                <input type="text" class="form-control" name="key" value="{{ request('key') }}" placeholder="Mã sản phẩm / Tên sản phẩm" style="width:250px">
                            </div>
                            <button type="submit" class="btn btn-primary">Tìm</button>
                            <a href="{{ route('sanphams.index') }}" class="btn btn-danger mx-2">Xóa</a>
                        </form>

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive">
                                    <table class="table table-striped table-nowrap align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">Mã</th>
                                                <th scope="col">Tên</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Giá khuyến mãi</th>
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($listSanPham as $key => $sp)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $sp->ma_san_pham }}</td>
                                                    <td>{{ $sp->ten_san_pham }}</td>
                                                    <td>{{number_format($sp->gia,0,'.','.')  }}đ</td>
                                                    <td>{{number_format($sp->gia_khuyen_mai,0,'.','.')  }}đ</td>
                                                    <td><img src="{{ Storage::url($sp->hinh_anh) }}" alt="" width="150px"></td>
                                                    <td>
                                                        <a href="" class="btn btn-warning">Sửa</a>
                                                        <a href="" class="btn btn-danger">Xóa</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $listSanPham->links('pagination::bootstrap-5') }}
                                </div>
                            </div>

                        </div><!-- end card-body -->
                    </div><!-- end card -->

                </div> <!-- end .h-100-->

            </div> <!-- end col -->
        </div>

    </div>
@endsection

@section('JS')
@endsection
