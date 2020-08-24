@extends('base')
@section('content')
    <section class="main-section">

        <div class="container">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
                <form role = "form" action="{{ route('vanggota.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class = "form-group">
                    <label for = "nama">Input Nama</label>
                    <input type = "text" class = "form-control" id = "nama" placeholder = "Input Nama" name = "nama" value="{{ $data->nama }}">
                </div>
                <div class = "form-group">
                    <label for = "jurusan">Input Jurusan</label>
                    <input type = "text" class = "form-control" id = "jurusan" placeholder = "Input Jurusan" name = "jurusan" value="{{ $data->jurusan }}">
                </div>
                <div class = "form-group">
                    <label for = "angkatan">Input Angkatan</label>
                    <input type = "text" class = "form-control" id = "angkatan" placeholder = "Input Angkatan" name = "angkatan" value="{{ $data->angkatan }}">
                </div>
                    <div class="form-group">
                        <label for="picto">Foto Lama:</label>
                        <img src="{{ url('uploads/file/'.$data->pict) }}" style="width: 150px; height: 150px;">
                    </div>
                    <div class = "form-group">
                        <label for = "pict">File input</label>
                        <input type = "file" id = "pict" name="pict">
                    </div>
                    <button type = "submit" class = "btn btn-default">Submit</button>
                    <a type="reset" class="btn btn-md btn-danger" href="{{route('vanggota.index')}}">Cancel</a>
                </form>
        </div>

    </section>
@endsection