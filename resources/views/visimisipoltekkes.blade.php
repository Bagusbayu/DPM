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
            <a type="button" class="btn btn-primary" href="{{url('inputvmpoltekkes')}}">Input</a>
            <a type="button" class="btn btn-primary" href="{{url('vcontact')}}">Input Contact</a>
            <a type="button" class="btn btn-primary" href="{{url('visit')}}">Input Visit</a>
            <br><br>
            <table class = "table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>About</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$datas->visi}}</td>
                        <td>{{$datas->misi}}</td>
                        <td>{!!$datas->about!!}</td>
                        <td>
                                <a href="{{ route('visimisipoltekkes.edit',$datas->id) }}" type="Button" class="btn btn-link"> Update</a>
                            <!--    {{ csrf_field() }} -->
                            <!--   {{ method_field('DELETE') }} -->
                            <!--    <button class="btn btn-link" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>  
                            </form>x-->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection