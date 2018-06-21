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
            <form action="{{ route('users.store') }}" method="post">
                <legend>Naujas mokytojas</legend>
                {{ csrf_field() }}

                <div class="form-group">
                   <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Vardas" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                </div>

                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="El. paštas" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Slaptažodis" name="password" required>

                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                               
                <button type="submit" class="btn btn-primary">Registruoti</button>
            </form>
        </div>
    </div>

</div>


@endsection