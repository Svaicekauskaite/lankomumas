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
            <form action="{{ route('clubs.store') }}" method="post">
                <legend>Naujas klubas</legend>
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('name')) alert-danger @endif" name="name" id="" placeholder="Pavadinimas" value="{{ Request::old('name') }}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('year')) alert-danger @endif" name="year" id="" placeholder="Metai" value="{{ Request::old('year') }}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('quarter')) alert-danger @endif" name="quarter" id="" placeholder="Ketvirtis" value="{{ Request::old('quarter') }}">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('address')) alert-danger @endif" name="address" id="" placeholder="Adresas" value="{{ Request::old('address') }}">
                </div>
                <div class="form-group">
                    <select type="text" class="form-control @if ($errors->has('type')) alert-danger @endif" name="type" id="" placeholder="Tipas">
                        <option value="Bup">BUP</option>
                        <option value="Sport">SPORT</option> 
                        <option value="Art">ART</option>  
                    </select> 
                </div>

                <div class="form-group">
                    <select name="user_id" class="form-control">
                        @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    </select>
                </div>
               

                <button type="submit" class="btn btn-primary">Pridėti</button>
            </form>
        </div>
    </div>

</div>


@endsection