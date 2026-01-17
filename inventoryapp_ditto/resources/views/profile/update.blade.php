@extends('layouts.master')
@section('title', 'Update Profile')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-md-11 col-12"> <!-- dibuat lebih lebar -->

            <!-- Card dengan shadow besar seperti register -->
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                
                <div class="card-header bg-gradient-primary text-white py-5 text-center">
                    <h3 class="mb-1 fw-bold fs-5">Update Profile</h3>
                    <p class="mb-0 fs-2 text-muted">Update your profile information</p>
                </div>

                <div class="card-body p-5 p-md-5"> <!-- padding lebih nyaman -->

                    <!-- Tombol kembali -->
                    <a href="{{ url()->previous() }}" class="btn btn-link text-decoration-none mb-4 d-inline-block">
                        ← Back
                    </a>

                    <!-- Error handling dengan alert lebih stylish -->
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                            <strong>Oops! Ada kesalahan:</strong>
                            <ul class="mb-0 mt-2 ps-4">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="/profile" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Nama Kategori - lebih lebar & floating -->
                        <div class="mb-5">
                            <div class="form-floating">
                                <input type="number"
                                    class="form-control form-control-lg"
                                    id="age"
                                    name="age"
                                    value="{{ old('age', $profile->age) }}"
                                    placeholder="Age"
                                    required autofocus>
                                <label for="age">Age</label>
                            </div>
                            <small class="text-muted d-block mt-2">Example: 18, 25, 30.</small>
                        </div>

                        <!-- Deskripsi - textarea lebih lebar & tinggi -->
                        <div class="mb-5">
                            <div class="form-floating">
                                <textarea class="form-control form-control-lg" id="bio" name="bio" 
                                          placeholder="Bio (optional)" style="height: 160px">{{ old('bio', $profile->bio) }}</textarea>
                                <label for="bio">Bio (optional)</label>
                            </div>
                            <small class="text-muted d-block mt-2">Briefly describe yourself, your interests, or your background.</small>
                        </div>

                        <!-- Tombol Submit - besar, gradient, shadow hover -->
                        <div class="d-grid mt-5">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold rounded-pill shadow-lg">
                                <i class="bi bi-save me-2"></i> Update
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection