@extends('layout.nav_bar')


@section('page_title')    
<h1>Welcome Home! {{ session('username') }} </h1>
@endsection


@section('title')
E-Pay | Customer-Home
@endsection