@extends('master')

@section('content')
    <h2>Edit</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action=" {{ route('users.store') }}" class="container" method='post'>
        @csrf
        <label for="fName">First name</label>
        <input type="text" name="firstName" id="fName" placeholder="Your first name">
        <label for="lName">Last name</label>
        <input type="text" name="lastName" id="lName" placeholder="Your last name">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Your email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Your password">
        <button type="submit">Submit</button>
    </form>
@endsection
