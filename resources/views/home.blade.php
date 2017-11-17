@extends('layouts.master')

@section('content')
    <div class="centered">
        <a href="{{ route('greet') }}">Greet</a>
        <a href="{{ route('hug') }}">Hug</a>
        <a href="{{ route('kiss') }}">Kiss</a>
        <br>
        <form action="{{ route('benice')}}" method="post">
            <label for="select-action">I want to...</label>
            <select id="select-action" name="action">
                <option value="greet">Greet</option>
                <option value="hug">Hug</option>
                <option value="kiss">Kiss</option>
            </select>
            <input type="text" name="name"/>
            <button type="submit">Do a nice action!</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token"/>
        </form>
    </div> 
@endsection