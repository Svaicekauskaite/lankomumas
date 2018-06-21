
@extends ('layouts.app')

@section ('content')

<div class="container">



<a href="{{ route('clubs.create')}}"><button class="btn btn-primary">Kurti naują burelį</button></a>
<a href="{{ route('users.create')}}"><button class="btn btn-primary">Kurti naują mokytoją</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Metai</th>
      <th scope="col">Ketvirtis</th>
      <th scope="col">Pavadinimas</th>
      <th scope="col">Adresas</th>
      <th scope="col">Tipas</th>
      <th scope="col">Mokytojas</th>
      <th scope="col">Trinti</th>
      <th scope="col">Redaguoti</th>
      <th scope="col">Lankomumas</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clubs as $club)
    <tr>
      <td>{{$club->year}}</td>
      <td>{{$club->quarter}}</td>
      <td>{{$club->name}}</td>
      <td>{{$club->address}}</td>
      <td>{{$club->type}}</td>
      <td>{{$club->user->name}}</td>
      <td>
        <a href="{{route('clubs.destroy', $club)}}">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </a>
      </td>
      <td>
        <a href="{{route('clubs.edit', $club)}}">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        </a>
      </td> 
      <td>
        <a href="" aria-label="Left Align">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          </a>
      </td>    
    </tr>
    @endforeach
  </tbody>
</table>
</div>


@endsection