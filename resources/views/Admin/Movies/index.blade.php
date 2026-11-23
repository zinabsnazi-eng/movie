@extends('Admin.layouts.master')


@section('content')


    <!-- Browser Default -->
    <div class="col-md mb-4 mb-md-0">
        <div class="card">
            <h5 class="card-header">  اضافه کردن  فیلم</h5>
            <div class="card-body">

                @foreach($movies as $movie)
                    <li>{{$movie->title}}</li>
                    <li>{{$movie->category->name}}</li>

                @endforeach
            </div>
        </div>
    </div>
    <!-- /Browser Default -->




@endsection
