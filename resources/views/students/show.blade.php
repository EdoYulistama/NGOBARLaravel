@extends('layout.main')

@section('title', 'Detail Mahasiswa')
    
@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Detail Mahasiswa</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$students->nama}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$students->npm}}</h6>
                <p class="card-text">{{$students->email}}</p>
                <p class="card-text">{{$students->jurusan}}</p>
                    
                    <a href="{{url('/students/'.$students->id.'/edit')}}" class="btn btn-primary">Edit</a>

                <form action="{{url('/students/'.$students->id)}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{url('/students')}}" class="card-link">Kembali</a>
                </div>
              </div>
      </div>
    </div>
  </div>

@endsection