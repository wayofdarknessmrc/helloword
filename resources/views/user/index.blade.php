@extends('./layout')

@section('title', 'Trang người dùng')

@section('content')
<table>
<tr>
    <th>User ID</th>
    <th>User name</th>
</tr>
@foreach($users as $user)
<tr>
    <th>{{ $user-> id }}</th>
    <th>{{ $user->name }}</th>
</tr>
@endforeach
<table>
@endsection
