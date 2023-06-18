@extends('admin.home')

@section('content')
    <form action="/admin/add" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                @include('share_admin.alert')

                <label for="menu">Tên sản phẩm</label>
                <input type="text" class="form-control" id="menu" placeholder="Nhập tên sản phẩm" name="ProName">
            </div>
            <div class="form-group">


                <label for="menu">Ảnh</label>
                <input type="file" class="form-control" id="upload" name="ProImage">

            </div>
            <div class="form-group">
                <label for="menu">Danh mục</label>
                <select class="form-control" name="ProCate" id="">
                    <option value="">Chọn loại danh mục</option>
                    <option value="1">Di động</option>
                    <option value="2">Máy tính bảng</option>
                    <option value="3">Laptop</option>
                    <option value="4">Đồng hồ thông minh</option>
                    <option value="5">Phụ kiện</option>
                </select>
            </div>
            <div class="form-group">
                <label for="menu">Thông số</label>
                <textarea name="ProInfo" id="menu" cols="10" rows="2" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="menu">Nội dung</label>
                <textarea name="ProDes" id="content" cols="20" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="menu">Giá tiền</label>
                <input type="text" class="form-control" id="menu" placeholder="Nhập giá" name="ProPrice">
            </div>
            <div class="form-group">
                <label for="menu">Số lượng</label>
                <input type="text" class="form-control" id="menu" placeholder="Nhập số lượng" name="ProQuantity">
            </div>

            <div class="form-group">
                <label for="menu">Trạng thái</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" id="active" name="ProStatus">
                    <label class="form-check-label">on</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" id="no_active" name="ProStatus"
                        checked="">
                    <label class="form-check-label">off</label>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
        </div>
        @csrf
    </form>
@endsection
