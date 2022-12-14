@extends('layout.base')

@section('title', 'Chi tiết sản phẩm')

@section('content_header','Sản phẩm có id = '.$products->id)
@section('content')

    @if($products == null)
        <hi> Sản Phẩm Không Tồn Tại</hi>
    @else
        <table class="table table-bordered table-striped table-responsive-md ">
            <tr class="table-primary">
                <th>ID</th>
                <th>Tên Sách</th>
                <th>Tác Giả</th>
                <th>Hình Ảnh</th>
                <th>Thể Loại</th>
                <th>Số Lượng</th>
                <th>Giá Sản Phẩm</th>
                <th>Mã ISBN</th>
                <th>Nhà Xuất Bản</th>
                <th>Mô Tả</th>
            </tr>
            <tr>
                <td>{{$products->id }}</td>
                <td>
                    {{$products -> nameProduct}}
                </td>
                <td>
                    {{$products -> author}}
                </td>
                <td>
                    <img width="150px" src="{{asset( $products->image)}}">
                </td>
                <td>
                    {{$products -> quantity}}
                </td>
                <td>
                    {{$products -> price}}{{(" VND")}}
                </td>
                <td>
                    {{$products -> ISBN}}
                </td>
                <td>
                    {{$products -> id_publishers}}
                </td>
                <td><br>
                    {{$products -> des}}
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="rol text-center">

            </div>
        </div>
    @endif
@endsection
