@extends('layouts.master')

@section('content')

    <h1 align="center">{{Auth::user()->name}} Thankyou</h1>

    <h3 align="center">
        Your order has been placed</h3>

@endsection
