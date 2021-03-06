@extends('app')

@section('content')

    <div class=" d-flex mb-3">
        <h1><a href="{{ route('index') }}"><i class="fa fa-home"></i></a> <i class="fa fa-angle-right"></i> {{ trans('messages.users') }}</h1>
    </div>



    <div class="users">
        @if ($users)
            @foreach($users as $user)
                @include('users.user')
            @endforeach
            {!! $users->render() !!}
        @else
            {{trans('messages.nothing_yet')}}
        @endif
    </div>
    

@endsection
