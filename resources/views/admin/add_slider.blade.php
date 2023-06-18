@extends('admin.home')

@section('content')
    <form action="/admin/slider-add" method="post" enctype="multipart/form-data">
        <div class="card-body">
            @include('share_admin.alert')
            <div class="form-group">
                <label for="menu">Tiêu đề</label>
                <input type="text" class="form-control" id="menu" placeholder="Tên chủ đề" name="name">
            </div>
            <div class="form-group">
                <label for="menu">Đường dẫn</label>
                <input type="text" class="form-control" id="menu" name="url" placeholder="Đường dẫn">
            </div>


            <div class="form-group">
                <label for="menu">Ảnh</label>
                <input type="file" class="form-control" id="upload" name="image">

            </div>


            <div class="form-group">
                <label for="menu">Sắp xếp</label>
                <input type="number" class="form-control" id="menu" name="sort_by">
            </div>

            <div class="form-group">
                <label for="menu">Trạng thái</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" id="active" name="active">
                    <label class="form-check-label">on</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" id="no_active" name="active"
                        checked="">
                    <label class="form-check-label">off</label>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Tạo chủ đề</button>
        </div>
        @csrf
    </form>
@endsection
