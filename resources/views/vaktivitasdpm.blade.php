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
            <a type="button" class="btn btn-primary" href="{{url('inputaktivitas')}}">Input</a>
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->judul}}</td>
                        <td>{{$datas->deskripsi}}</td>
                        <td><img src="{{ url('uploads/file/'.$datas->file) }}" style="width: 150px; height: 150px;"></td>
                        <td>
                        <form action="{{ route('vaktivitasdpm.destroy', $datas->id) }}" method="post">
                         <a href="{{ route('vaktivitasdpm.edit',$datas->id) }}" type="Button" class="btn btn-link"> Update</a>
                        |
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