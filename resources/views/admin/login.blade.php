@extends('layouts.admin')

@section('content')
    <div class="col-4 mx-auto mt-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <p class="display-4">Login Kang</p>
                    <p style="font-size: small">Silahkan login untuk masuk islam</p>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.login.cek') }}">
                    @csrf
                    <div class= "d-flex flex-column gap-2">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="text" placeholder="Email" @class(['is-invalid' => $errors->get('email'), 'form-control'])>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="text" placeholder="password" @class(['is-invalid' => $errors->get('password'), 'form-control'])>
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Login Kang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
