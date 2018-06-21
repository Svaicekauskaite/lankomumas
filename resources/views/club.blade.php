
@extends ('layouts.app')

@section ('content')


  <div class="container">
    <div>
   
<b>Sveiki, {{Auth::user()->name}}</b>
<br>
<br>

</div>


<table class="table">
  <thead>
    <tr>
        <th scope="col">Pavadinimas</th>
        <th scope="col">Metai</th>
        <th scope="col">Ketvirtis</th>
        <th scope="col">Adresas</th>
        <th scope="col">Tipas</th>
        <th scope="col">Lankomumas</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clubs as $club)
    <tr>
        <td>{{$club->name}}</td>
        <td>{{$club->year}}</td>
        <td>{{$club->quarter}}</td>
        <td>{{$club->address}}</td>
        <td>{{$club->type}}</td>
        <td>
        <a href="{{ route('lesson', $club->id)}}" aria-label="Left Align">
          <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
          </a>
      </td>    
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection


