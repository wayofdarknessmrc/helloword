@extends('./layout')

@section('title', 'Danh sách sản phẩm')

@section('content')
    <table class="table table-bordered">
        <tr class="success">
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Nội dung</th>
            <th>Ảnh sản phẩm</th>
            <th>Đăng bán</th>
            <th>Action</th>
        </tr>
        @foreach($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->title }}</td>
            <td class="text-right">{{ number_format($p->price) }}</td>
            <td>{{ $p->content }}</td>
            <td>
                <img src="{{ Asset($p->image) }}" alt="{{ $p->title }}" width="120" height="120">
            </td>
            <td>
                @if($p->status == 'active')
                    <span class="text-success glyphicon glyphicon-ok"></span>
                @else
                    <span class="text-danger glyphicon glyphicon-remove"></span>
                @endif
            </td>
            <td>
                <a href="{{ '/product/' . $p->id . '/edit'}}"><span class="glyphicon glyphicon-pencil">Edit</span></a>
                <a href="{{ '/product/' . $p->id }}"><span class="glyphicon glyphicon-trash">Delete</span></a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $products->count() }}
    {{ $products->appends(['minprice' => 300000, 'maxprice' => 600000]) }}
@endsection
