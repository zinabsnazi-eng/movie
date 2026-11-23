@extends('Admin.layouts.master')


@section('content')


    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">جدول /</span> جداول پایه</h4>
            <h4 class="py-3 mb-4"><a href="{{route('insert')}}" class="text-muted fw-light">افزودن /</a> دسته بندی فیلم </h4>
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header"> جدول پایه</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>نام دسته بندی فیلم</th>
                            <th>وضعیت</th>
                            <th>توضیحات</th>
                            <th>اقدامات</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($Movies as $movie)
                            <tr>

                            <td>
                                <span class="fw-medium"> {{$movie->id}}</span>

                                <i class="ti ti-brand-angular ti-lg text-danger me-3"></i>
                                <span class="fw-medium"> {{$movie->name}}</span>
                            </td>
                            <td><span class="badge bg-label-primary me-1">{{$movie->status}}</span></td>
                            <td> {{$movie->description}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('CategoryMovie.edit' , $movie->id)}}"
                                        ><i class="ti ti-pencil me-1"></i> ویرایش</a
                                        >
                                        <form action="{{route('CategoryMovie.destroy', $movie->id)}} "
                                        method="post">
                                            @method("DELETE")
                                            <button type="submit" class="dropdown-item">
                                                <i class="ti ti-trash me-1">حذف</i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->



        <!-- / Content -->

        </div>

    </div>
@endsection
