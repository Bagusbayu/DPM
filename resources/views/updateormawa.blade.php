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
        @foreach($data as $datas)
                <form role = "form" action="{{ route('vormawa.update', $datas->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class = "form-group">
                    <label for = "judul">Input About</label>
                    <textarea type = "text" class = "ckeditor form-control" id = "about" placeholder = "Input Nama" name = "about" value=""> {{ $datas->about }} </textarea>
                </div>
				<div class = "form-group">
                    <label for = "Deskripsi">Input Arti</label>
                    <textarea type = "text" class = "ckeditor form-control" id = "arti" placeholder = "Input Deskripsi" name = "arti" value="">{{ $datas->arti }}</textarea>
                </div>
                <div class = "form-group">
                    <label for = "judul">Input Visi</label>
                    <textarea type = "text" class = "ckeditor form-control" id = "visi" placeholder = "Input Nama" name = "visi" value="">{{ $datas->visi }}</textarea>
                </div>
                <div class = "form-group">
                    <label for = "Deskripsi">Input Misi</label>
                    <textarea type = "text" class = "ckeditor form-control" id = "misi" placeholder = "Input Deskripsi" name = "misi" value="">{{ $datas->misi }}</textarea>
                </div>
                
                    <button type = "submit" class = "btn btn-default">Submit</button>
                    <a type="reset" class="btn btn-md btn-danger" href="{{route('vormawa.index')}}">Cancel</a>
                </form>
                @endforeach
        </div>

    </section>
@endsection