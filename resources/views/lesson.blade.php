
@extends ('layouts.app')

@section ('content')

<div class="container">


<h3>Mokiniai</h3> <a href="{{route('create')}}"><button class="btn btn-primary">Sukurti naują mokinį</button></a>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Vardas</th>
        <th scope="col">Pavardė</th>
        <th scope="col">Klasė</th>
        <th scope="col">Mokykla</th>
        <th scope="col">Trinti</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($club->students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->surname}}</td>
        <td>{{$student->class}}</td>
        <td>{{$student->school}}</td>
        <td>

            <form action="{{ route('pasalinti') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="student_id" value="{{$student->id}}">
    <input type="hidden" name="club_id" value="{{$club->id}}">
    <button  class="btn btn-primary">Pašalinti</button>
</form>
        
          
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<h4>Pridėti mokinį</h4>

    <form action="{{ route('prideti') }}" method="post">
    {{ csrf_field() }}
    <select name="student_id" class="form-control">
    @foreach ($students as $student)
    <option value="{{ $student->id }}">{{ $student->name }} {{ $student->surname }}</option>
    @endforeach
    </select>
    <input type="hidden" name="club_id" value="{{$club->id}}">
    <br>

    <button type="submit" class="btn btn-primary">Pridėti</button>
</form>


<br>
<br>
<br>
<br>


<h3>Pamokos</h3>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Data</th>
        <th scope="col">Lankomumas</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($club->lessons as $lesson)
    <tr>
        <td>{{$lesson->date}}</td>
        <td> <a href="{{ route('attendance', [$club->id, $lesson->id])}}" aria-label="Left Align">
          <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
          </a>
    </td>
        
    </tr>
    @endforeach
  </tbody>
</table>

<h4>Pridėti pamoką</h4>

<form action="{{ route('lessons.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                   <input type="date" class="form-control" name="date" placeholder="Data" >
                   <input type="hidden" name="club_id" value="{{$club->id}}">
                   <br>
                   <button type="submit" class="btn btn-primary">Pridėti</button>
                </div>
            </form>

</div>

@endsection


