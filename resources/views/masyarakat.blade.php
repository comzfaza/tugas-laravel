@include('layout.navbar')

@section('content')
@endsection




    <table class="center" border="1">
      <tr>
        <th>NIK</th>
        <th>NAMA</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>TLP</th>
     
      </tr>
      @foreach($masyarakat as $masyarakat)
      <tr>
      <td>{{$masyarakat->nik}}</td>
      <td>{{$masyarakat->nama}}</td>
      <td>{{$masyarakat->username}}</td>
      <td>{{$masyarakat->password}}</td>
      <td>{{$masyarakat->tlp}}</td>
      
    </tr>
    @endforeach

    </table>