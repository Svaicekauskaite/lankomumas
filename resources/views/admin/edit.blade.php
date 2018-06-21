@extends ('layouts.app')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <form action="{{route('clubs.update', $club)}}" method="post">
                <legend>Redaguoti klubą</legend>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div>Klubo ID <b>{{$club->id}}</b></div>

                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('name')) alert-danger @endif" name="name" id="" value="{{ $club->name }}">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('year')) alert-danger @endif" name="year" id="" value="{{ $club->year }}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('quarter')) alert-danger @endif" name="quarter" id="" value="{{ $club->quarter }}">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control @if ($errors->has('address')) alert-danger @endif" name="address" id="" value="{{ $club->address }}">
                </div>

                <div class="form-group">
                   <select type="text" class="form-control" name="type" id="" placeholder="Tipas">
                        <option value="Bup">BUP</option>
                        <option value="Sport" >SPORT</option> 
                        <option value="Art">ART</option>  
                    </select> 
                </div>

                <div class="form-group" >
                    <select name="user_id" class="form-control">
                        @foreach ($users as $user)
                    <option value="{{ $user->id }}"   @if ($club->user_id==$user->id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Redaguoti</button>
                <a href="{{route('clubs.index')}}"><button class="btn btn-primary">Grįžti</button></a>
            </form>
        </div>
    </div>

</div>

@endsection