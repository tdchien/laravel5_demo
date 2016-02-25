@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (not($errors->isEmpty()))
                        @foreach($errors->all() as $message)
                            <div>{{ $message }}</div>
                        @endforeach
                    @endif

                    {{ Form::open() }}
                        <div>
                            <label>Name :</label>
                            {{ Form::text('name', old('name')) }}
                        </div>
                        <div>
                            <label for="captcha">Captcha :</label>
                            {{ Form::text('captcha', old('captcha')) }}
                        </div>
                        {!! captcha_img('flat') !!}
                        {{ Form::submit('submit', ['value' => 'chien 1']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
