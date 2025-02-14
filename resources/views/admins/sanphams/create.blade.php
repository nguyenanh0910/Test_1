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
                            <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Thêm mới sản phẩm</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('sanphams.store') }}" method="POST" enctype="multipart/form-data">
                                    {{-- Khi sử dụng form trong Laravel bắt buộc phải có @csrf --}}
                                    @csrf

                                    <div class="row gy-4">
                                        <div class="col-md-4">
                                            <div class="mt-3">
                                                <label for="ma_san_pham" class="form-label">Mã sản phẩm</label>
                                                <input type="text"
                                                    class="form-control"
                                                    name="ma_san_pham" id="ma_san_pham">
                                            </div>

                                            <div class="mt-3">
                                                <label for="ten_san_pham" class="form-label">Tên sản phẩm</label>
                                                <input type="text" name="ten_san_pham" id="ten_san_pham"
                                                    placeholder="Nhập tên sản phẩm"
                                                    class="form-control" >
                                            </div>

                                            <div class="mt-3">
                                                <label for="gia" class="form-label">Giá bán</label>
                                                <input type="number" step="0.01" name="gia"
                                                    class="form-control" id="gia"
                                                    placeholder="Giá bán">
                                            </div>

                                            <div class="mt-3">
                                                <label for="gia_khuyen_mai" class="form-label">Giá khuyến mãi</label>
                                                <input type="number" step="0.01"
                                                    class="form-control"
                                                    name="gia_khuyen_mai" id="gia_khuyen_mai" placeholder="Giá khuyến mãi"  >

                                            </div>
                                            <div class="mt-3">
                                                <label for="hinh_anh" class="form-label">Hình ảnh</label>
                                                <input type="file"
                                                    class="form-control"
                                                    name="hinh_anh" id="hinh_anh" >

                                            </div>




                                                <div class="mt-3 text-center">
                                                    <button class="btn btn-primary" type="submit">Thêm mới</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--end col-->
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
    <script src="https:////cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('mo_ta');
    </script>
@endsection
