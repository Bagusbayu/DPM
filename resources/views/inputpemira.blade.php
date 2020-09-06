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
            <form role = "form" action="{{ route('vpemira.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div>
                <label for = "name">Input About </label>
                    <textarea type = "text" class = "form-control" id="about" placeholder = "Input About" name="about"></textarea>
                </div>
                <div class = "form-group">
                    <label for = "misi">Input Komisi </label>
                    <textarea type = "text" class = "form-control" id = "komisi" placeholder = "Input Komisi" name="komisi"></textarea>
                </div>
                <div class = "form-group">
                    <label for = "about">Input BPP </label>
                    <textarea type = "text" class = "form-control" id = "bpp" placeholder = "Input BPP" name="bpp"></textarea>
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{route('vpemira.index')}}">Cancel</a>
            </form>
        </div>
    </section>

@endsection