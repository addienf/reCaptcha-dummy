@extends('Layout.layout')
@section('content')
    <div class="container w-75 mt-5">
        <div class="title">Data Pegawai</div>
        <div class="container w-75 mt-2">
            <a href="{{ url('login') }}" class="btn btn-warning mb-3">Login</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $list)
                        <tr>
                            <td>{{ $list['nip'] }}</td>
                            <td><a href="{{ 'detail/' . $list->id }}" class="btn btn-warning">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
