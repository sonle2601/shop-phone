@extends('admin.home')

@section('content')
    <table class="table table-striped">
        @include('share_admin.alert')
        <thead>
            <tr>
                <th>Mã chủ đề</th>
                <th>Tên chủ đề</th>
                <th style="width:20%">Ảnh</th>
                <th>Đường dẫn</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td>{{ $slider->name }}</td>
                    <td><img src="/template_admin/img/{{ $slider->image }}" style="max-width: 50%; max-height: 20%;">
                    </td>
                    <td>{{ $slider->url }}</td>
                    <td>{{ $slider->active }}</td>
                    <td>
                        <a href="/admin/edit-slider/{{ $slider->id }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="/admin/delete-slider/{{ $slider->id }}" class="btn btn-danger"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $sliders->links('pagination::bootstrap-5') }}
@endsection
