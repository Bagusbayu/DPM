@extends('base')
@section('content')

 <section class="main-section">
        <div class="container">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <a type="button" class="btn btn-primary" href="{{url('inputpemira')}}">Input</a>
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>About</th>
                    <th>Komisi</th>
                    <th>BPP</th>
                    
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->about}}</td>
                        <td>{{$datas->komisi}}</td>
                        <td>{{$datas->bpp}}</td>
                        <td>
                                <form action="{{ route('vpemira.destroy', $datas->id) }}" method="post">
                                <a href="{{ route('vpemira.edit',$datas->id) }}" type="Button" class="btn btn-link"> Update</a> |
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-link" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $data->links(); !!}
            </div>
        </div>
    </section>

@endsection