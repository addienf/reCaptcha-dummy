@extends('Layout.layout')
@section('content')
    <div class="container w-50 mt-5">
        <form action="login" method="post">
            {{ csrf_field() }}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-floating mb-3">
                <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip">
                <label for="floatingInput">NIP</label>
                @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <div class="g-recaptcha mb-3" data-sitekey="6Ldo-iEnAAAAAAyI1394pFyZWLnjxZSkBJWRx_77"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
