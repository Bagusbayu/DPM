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
                    <label for = "judul">Input About</label>
                    <textarea type = "text" class = "ckeditor form-control" id="about" placeholder = "Input Nama" name="about"></textarea>
                </div>
                <div class = "form-group">
                    <label for = "Deskripsi">Input Arti</label>
                    <textarea type = "text" class = "ckeditor form-control" id="arti" placeholder = "Input Deskripsi" name="arti"></textarea>
                </div>
                <div class = "form-group">
                    <label for = "judul">Input Visi</label>
                    <textarea type = "text" class = "ckeditor form-control" id="visi" placeholder = "Input Nama" name="visi"></textarea>
                </div>
                <div class = "form-group">
                    <label for = "Deskripsi">Input Misi</label>
                    <textarea type = "text" class = "ckeditor form-control" id="misi" placeholder = "Input Deskripsi" name="misi"></textarea>
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{route('vormawa.index')}}">Cancel</a>
            </form>
        </div>
    </section>

@endsection