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
            <form role = "form" action="{{ route('vadminsuper.store') }}" method="post">
                {{ csrf_field() }}
                <div class = "form-group">
                    <label for = "username">Input User Name</label>
                    <input type = "text" class = "form-control" id="username" placeholder = "Input User Name" name="username">
                </div>
                
                <div class = "form-group">
                    <label  for = "password">Masukan Password</label>
                    <input type = "text" class = "form-control" id = "password" placeholder = "Masukan Password" name="password">
                </div>
                <button type = "submit" class = "btn btn-default">Submit</button>
                <a type="reset" class="btn btn-md btn-danger" href="{{route('vadminsuper.index')}}">Cancel</a>
            </form>
        </div>
    </section>
@endsection