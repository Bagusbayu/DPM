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
            <form role = "form" action="{{ route('vormawa.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "judul">Input Nama</label>
                    <input type = "text" class = "form-control" id="nama" placeholder = "Input Nama" name="nama">
                </div>
                <div class = "form-group">
                    <label for = "Deskripsi">Input Deskripsi</label>
                    <textarea type = "text" class = "form-control" id="deskripsi" placeholder = "Input Deskripsi" name="deskripsi"></textarea>
                </div>
                <div class = "form-group">
                   <label for = "pict">File input</label>
                   <input type = "file" id = "file" name="file">
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{route('vormawa.index')}}">Cancel</a>
            </form>
        </div>
    </section>

@endsection