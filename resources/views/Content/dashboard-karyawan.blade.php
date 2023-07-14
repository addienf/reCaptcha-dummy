@extends('Layout.layout')
@section('content')
    <div class="container w-75 mt-5">
        <div class="container w-75 mt-3">
            <a href="{{ url('list') }}" class="btn btn-warning mb-3">Detail</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>FOTO</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $users['id'] }}</td>
                        <td>{{ $users['email'] }}</td>
                        <td>{{ $users['first_name'] }}</td>
                        <td>{{ $users['last_name'] }}</td>
                        <td><img src="{{ $users['avatar'] }}" /></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
