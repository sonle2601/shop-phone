@extends('admin.home')

@section('content')
    <table class="table table-striped">
        @include('share_admin.alert')
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th style="width:20%">Ảnh</th>
                <th>Tên danh mục</th>
                <th>Số lượng sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Thông số</th>
                <th>Mô tả sản phẩm</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->ProName }}</td>
                    <td><img src="/template_admin/img/{{ $product->ProImage }}" alt="" sizes="" srcset=""
                            style="max-width: 50%; max-height: 20%;">
                    </td>
                    <td>
                        @switch($product->ProCate)
                            @case(1)
                                Điện thoại
                            @break

                            @case(2)
                                Máy tính bảng
                            @break

                            @case(3)
                                Laptop
                            @break

                            @case(4)
                                Đồng hồ thông minh
                            @break

                            @case(5)
                                Phụ kiện
                            @break

                            @default
                                Không xác định
                        @endswitch
                    </td>
                    <td>{{ $product->ProQuantity }}</td>
                    <td>{{ $product->ProPrice }}</td>
                    <td>{{ $product->ProInfo }}</td>
                    <td>{{ $product->ProDes }}</td>
                    <td>
                        <a href="/admin/edit/{{ $product->id }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="/admin/delete/{{ $product->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links('pagination::bootstrap-5') }}
@endsection
