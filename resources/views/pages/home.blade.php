@extends('layouts.master')

@section('content')
    <section id="slider"><!--slider - trinh chieu tren dau trang-->
        @include('includes.slider')
    </section><!--/slider-->

    <section>
        <div class="container"><!--slider - phan than cua trang bao gom ca sidebar-->
            <div class="row">
                <div class="col-sm-3">
                    @include('includes.left_sidebar')
                </div>

                <div class="col-sm-9 padding-right">
                    @include('includes.features_items')

                    @include('includes.category_tab')


                    <div class="recommended_items"><!--recommended_items-->
                    @include('includes.recommends')
                    </div><!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>

@endsection