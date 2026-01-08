
@extends('layouts.master')
@section('title')
    Halaman Pendaftaran
@endsection

@section('content')
    <h1> Pendaftaran </h1>

    <form action="/welcome" method="POST">
      @csrf
      <a href="/">Kembali</a><br />
      <br />

      <!-- input-1 (Text) -->
      <br />
      <label>First Name</label><br />
      <input
        type="text"
        name="firstname"
        placeholder="Masukan nama depan"
        required
      />
      <br />
      <br />
      <label>Last Name</label><br />
      <input
        type="text"
        name="lastname"
        placeholder="Masukan nama belakang"
        required
      />
      <br />
      <br />
      <label>Age</label><br />
      <input type="number" name="age" min="20" max="90" /> <br />
      <br />
      <label>Password</label><br />
      <input type="password" name="password" /> <br />
      <br />

      <!-- input-2 (Radio) -->
      <br />
      <label>Gender</label><br />
      <input type="radio" value="1" name="gender" /> Male <br />
      <input type="radio" value="2" name="gender" /> Female <br />
      <input type="radio" value="3" name="gender" /> Other <br />
      <br />

      <!-- input-3 (Checkbox) -->
      <br />
      <input type="checkbox" value="1" name="skill" /> Laravel <br />
      <input type="checkbox" value="2" name="skill" /> PHP <br />
      <input type="checkbox" value="3" name="skill" /> CSS <br />
      <input type="checkbox" value="4" name="skill" /> Javascript <br />
      <br />

      <!-- input-4 (Drop Down) -->
      <br />
      <label>Nationality</label>
      <select>
        <option value="1">Indonesian</option>
        <option value="2">American</option>
        <option value="3">British</option>
        <option value="4">Australian</option>
        <option value="5">Japanese</option>
        <option value="6">Korean</option>
        <option value="7">German</option>
        <option value="8">India</option>
      </select>
      <br />
      <br />

      <!-- input-5 (Text Area) -->
      <br />
      <label>Address</label> <br />
      <textarea name="address" cols="30" rows="10"></textarea> <br />
      <br />
      <br />
      <!-- Tombol Submit -->
      <input type="submit" value="Daftar" />
    </form>

@endsection
    
    