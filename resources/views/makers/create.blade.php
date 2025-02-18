@extends('layout')
 
        <main>
            @yield('content')
        </main>
 
   
@section('content')
<h1>Új gyártó</h1>
<div>
   
@include('error')
    <form action="{{route('makers.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
            <label for="logo">Logo</label>
            <!--<input type="text" id="logo" name="logo">{{--type="file"--}}-->
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('makers.index') }}">Mégse</a>
    </form>
</div>
@endsection