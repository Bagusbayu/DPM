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
                <form role = "form" action="{{ route('vpemira.update', $data->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                <div class = "form-group">
                    <label for = "about">Input About</label>
                    <input type = "text" class = "form-control" id = "misi" placeholder = "Input About" name = "about" value="{{ $datas->about }}">
                </div>
                  
                <div class = "form-group">
                    <label for = "misi">Input komisi</label>
                    <input type = "text" class = "form-control" id = "komisi" placeholder = "Input komisi" name = "komisi" value="{{ $datas->komisi }}">
                </div>
                <div class = "form-group">
                    <label for = "nama">Input bpp</label>
                    <input type = "text" class = "form-control" id = "bpp" placeholder = "Input bpp" name = "bpp" value="{{ $datas->bpp }}">
                </div>
                
                    <button type = "submit" class = "btn btn-default">Submit</button>
                    <a type="reset" class="btn btn-md btn-danger" href="{{route('vpemira.index')}}">Cancel</a>
                </form>
                 @endforeach
        </div>

    </section>
@endsection