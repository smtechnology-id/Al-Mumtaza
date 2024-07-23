@extends('admin.layouts.app')

@section('content')
    <div class="container my-3">
        <div class="card">
            <h5 class="card-header">Input Guru</h5>
            <div class="card-body">
                <h5 class="card-title">Form Input Data Guru</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('teacherCreate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap <span style="color: red">*</span></label>
                                <input type="text" required class="form-control" name="name" id="name" placeholder="name"
                                       value="{{ old('name') }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span style="color: red">*</span></label>
                                <input type="email" required class="form-control" name="email" id="email"
                                       placeholder="email@mail.com" value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password <span style="color: red">*</span></label>
                                <input type="password" required class="form-control" name="password" id="password"
                                       placeholder="********">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Password Confirmation <span style="color: red">*</span></label>
                                <input type="password" required class="form-control" name="password_confirmation"
                                       id="password_confirmation" placeholder="********">
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
@endsection
