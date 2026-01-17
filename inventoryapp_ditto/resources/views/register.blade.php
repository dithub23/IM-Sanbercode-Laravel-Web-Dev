@extends('layouts.master')
@section('title', 'Register Page')

@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-7 col-md-9 col-12">

            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-gradient-primary text-white text-center py-4">
                    <h3 class="mb-0 fw-bold">Create New Account</h3>
                    <p class="mb-0 opacity-75">Fill in your personal details</p>
                </div>

                <div class="card-body p-4 p-md-5">

                    <a href="/" class="btn btn-link text-decoration-none mb-4 d-inline-block">
                        ← Back to Dashboard
                    </a>

                    <form action="/welcome" method="POST">
                        @csrf

                        <div class="row g-3">

                            <!-- First & Last Name -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="firstname" name="firstname" 
                                           placeholder="Masukan nama depan" required>
                                    <label for="firstname">First Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="lastname" name="lastname" 
                                           placeholder="Masukan nama belakang" required>
                                    <label for="lastname">Last Name</label>
                                </div>
                            </div>

                            <!-- Age -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="age" name="age" 
                                           min="20" max="90" placeholder="Umur">
                                    <label for="age">Age</label>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" name="password" 
                                           placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>

                            <!-- Gender -->
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Gender</label>
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="1">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="2">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="other" value="3">
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Skills (Checkbox) -->
                            <div class="col-12 mb-4">
                                <label class="form-label fw-bold">Your Skill</label>
                                <div class="row g-3">
                                    <div class="col-6 col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="skill[]" value="1" id="laravel">
                                            <label class="form-check-label" for="laravel">Laravel</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="skill[]" value="2" id="php">
                                            <label class="form-check-label" for="php">PHP</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="skill[]" value="3" id="css">
                                            <label class="form-check-label" for="css">CSS</label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="skill[]" value="4" id="javascript">
                                            <label class="form-check-label" for="javascript">JavaScript</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Nationality -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="nationality" name="nationality">
                                        <option value="1" selected>Indonesian</option>
                                        <option value="2">American</option>
                                        <option value="3">British</option>
                                        <option value="4">Australian</option>
                                        <option value="5">Japanese</option>
                                        <option value="6">Korean</option>
                                        <option value="7">German</option>
                                        <option value="8">Indian</option>
                                    </select>
                                    <label for="nationality">Nationality</label>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea class="form-control" name="address" placeholder="Alamat lengkap" 
                                              id="address" style="height: 120px"></textarea>
                                    <label for="address">Address</label>
                                </div>
                            </div>

                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold rounded-pill shadow">
                                Register Now
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection