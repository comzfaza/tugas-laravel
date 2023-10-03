@include('layout.navbar')

@section('content')
@endsection




    <table class="center" border="1">
      <tr>
        <th>id_petugas</th>
        <th>nama_petugas</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>TLP</th>
        <th>level</th>
     
      </tr>
      @foreach($petugas as $petugas)
      <tr>
      <td>{{$petugas->id_petugas}}</td>
      <td>{{$petugas->nama_petugas}}</td>
      <td>{{$petugas->password}}</td>
      <td>{{$petugas->username}}</td>
      <td>{{$petugas->tlp}}</td>
      <td>{{$petugas->level}}</td>
      
    </tr>
    @endforeach

    </table>