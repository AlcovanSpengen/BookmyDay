@extends('layouts.main')

@section('content')
<h5>Kinderboeken</h5>
<br>
<a href="/kinderboeken/prentenboeken"><h5>Prentenboeken</h5></a><br>
@include('partials._carousel2')
<br>
<a href="/kinderboeken/kleurboeken"><h5>Kleurboeken</h5></a><br>
@include('partials._carousel3')
<br>
<a href="/kinderboeken/verhalenensprookjes"><h5>Verhalen & Sprookjes</h5></a><br>
@include('partials._carousel4')


@endsection