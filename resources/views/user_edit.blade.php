@extends('master')

@section('content')
    <h2>Edit</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action=" {{ route('users.update', ['user' => $user->id]) }}" class="container" method='post'>
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <label for="fName">First name</label>
        <input type="text" name="firstName" id="fName" value="{{ $user->firstName }}">
        <label for="lName">Last name</label>
        <input type="text" name="lastName" id="lName" value="{{ $user->lastName }}">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ $user->email }}">
        <button type="submit">Submit</button>
    </form>
@endsection
