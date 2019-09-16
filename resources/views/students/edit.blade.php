@extends('layout.main')

@section('title', 'From Ubah Data Mahasiswa')
    
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
            <form method="post" action="{{url('/students/'.$students->id)}}">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{$students->nama}}">
                  @error('nama')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="npm">NPM</label>
                <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukan NPM" name="npm" value="{{$students->npm}}">
                  @error('npm')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{$students->email}}">
                  @error('email')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{$students->jurusan}}">
                  @error('jurusan')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data!</button>
              </form>
      </div>
    </div>
  </div>

@endsection