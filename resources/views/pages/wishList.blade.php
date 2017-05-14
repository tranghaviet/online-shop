@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('includes.left_sidebar')
                </div>

                <div class="col-sm-9 padding-right">
                    @include('includes.features_items')
                    <div class="text-center"> {{ $features_items->links() }} </div>
                </div>
            </div>
        </div>
    </section>
@endsection
