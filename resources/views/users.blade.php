@extends('master')

@section('content')
    <h2>Users</h2>

    <a href="{{ route('users.create') }}">Create</a>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->firstName }} {{ $user->lastName }} | <a
                    href=" {{ route('users.edit', ['user' => $user->id]) }}">Edit
                </a>
                |
                <a href="{{ route('users.show', ['user' => $user->id]) }}">Show</a>
            </li>
        @endforeach
    </ul>
@endsection
