@extends('layouts.master')

@section('content')

    <section>
        <div class="container"><!--slider - phan than cua trang bao gom ca sidebar-->
            <div class="row">
                <div class="col-sm-3">
                    @include('includes.left_sidebar')
                </div>
            </div>
        </div>
    </section>

@endsection