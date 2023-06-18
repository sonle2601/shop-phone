@extends('admin.home')

@section('content')
    <form action="/admin/edit/{{ $products->id }}" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="form-group">
                @include('share_admin.alert')

                <label for="menu">Tên sản phẩm</label>
                <input type="text" value="{{ $products->ProName }}" class="form-control" id="menu" name="ProName">
            </div>
            <div class="form-group">


                <label for="menu">Ảnh</label>
                <input type="file" class="form-control" id="menu" name="ProImage">
                <img src="/template_admin/img/{{ $products->ProImage }}" alt=""
                    style="max-width: 15%; max-height: 7%;">
            </div>
            <div class="form-group">
                <label for="menu">Danh mục</label>
                <select class="form-control" name="ProCate" id="">
                    <option value="">Chọn loại danh mục</option>
                    <option value="1" {{ $products->ProCate == 1 ? 'selected' : '' }}>Di động</option>
                    <option value="2" {{ $products->ProCate == 2 ? 'selected' : '' }}>Máy tính bảng</option>
                    <option value="3" {{ $products->ProCate == 3 ? 'selected' : '' }}>Laptop</option>
                    <option value="4" {{ $products->ProCate == 4 ? 'selected' : '' }}>Đồng hồ thông minh</option>
                    <option value="5" {{ $products->ProCate == 5 ? 'selected' : '' }}>Phụ kiện</option>
                </select>
            </div>
            <div class="form-group">
                <label for="menu">Thông số</label>
                <textarea name="ProInfo" id="menu" cols="10" rows="2" class="form-control">{{ $products->ProInfo }}</textarea>
            </div>

            <div class="form-group">
                <label for="menu">Nội dung</label>
                <textarea name="ProDes" id="content" cols="20" rows="5" class="form-control">{{ $products->ProDes }}</textarea>
            </div>
            <div class="form-group">
                <label for="menu">Giá tiền</label>
                <input type="text" class="form-control" id="menu" placeholder="Nhập giá" name="ProPrice"
                    value="{{ $products->ProPrice }}">
            </div>
            <div class="form-group">
                <label for="menu">Số lượng</label>
                <input type="text" class="form-control" id="menu" placeholder="Nhập số lượng" name="ProQuantity"
                    value="{{ $products->ProQuantity }}">
            </div>

            <div class="form-group">
                <label for="menu">Trạng thái</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" id="active" name="ProStatus"
                        {{ $products->ProStatus == 1 ? 'checked' : '' }}>
                    <label class="form-check-label">on</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" id="no_active" name="ProStatus"
                        {{ $products->ProStatus == 0 ? 'checked' : '' }}>
                    <label class="form-check-label">off</label>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
        </div>
        @csrf
    </form>
@endsection
