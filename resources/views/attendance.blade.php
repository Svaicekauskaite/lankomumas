
@extends ('layouts.app')

@section ('content')


    <div class="container">
 <form method="post" action="{{route('dalyvavo', $lesson->id)}}">
        {{ csrf_field() }}
<table class="table">
  <thead>
    <tr>
        <th scope="col">Vardas</th>
        <th scope="col">Pavardė</th>
        <th scope="col">Nedalyvavo</th>
        <th scope="col">Dalyvavo</th>
    </tr>
  </thead>
 
  <tbody>
    
    @foreach ($club->students as $student)
    <?php $i=$loop->index; ?>
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->surname}}</td>
        <td><input type="radio" name="attended[{{$student->id}}]" value="0" checked></td>
        <td><input type="radio" name="attended[{{$student->id}}]" value="1"></td>
    </tr>
    @endforeach

    
  </tbody>



</table>


<input type="submit" class="btn btn-primary" value="Išsaugoti" name="submit">
</form>
    </div>


@endsection


