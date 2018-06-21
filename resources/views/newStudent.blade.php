@extends ('layouts.app')

@section ('content')


<div class="container">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row">
        <div class="col-xs-12">
            <form action="{{ route('sukurti') }}" method="post">
                <legend>Naujas studentas</legend>
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('name')) alert-danger @endif" name="name" id="" placeholder="Vardas" value="{{ Request::old('name') }}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('surname')) alert-danger @endif" name="surname" id="" placeholder="Pavardė" value="{{ Request::old('surname') }}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('class')) alert-danger @endif" name="class" id="" placeholder="Klasė" value="{{ Request::old('class') }}">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('school')) alert-danger @endif" name="school" id="" placeholder="Mokykla" value="{{ Request::old('school') }}">
                </div>               

                <button type="submit" class="btn btn-primary">Pridėti</button>
            </form>
        </div>
    </div>

</div>


@endsection