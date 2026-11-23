@extends('Admin.layouts.master')


@section('content')


    <!-- Browser Default -->
    <div class="col-md mb-4 mb-md-0">
        <div class="card">
            <h5 class="card-header">  اضافه کردن دسته بندی فیلم</h5>
            <div class="card-body">
                <form class="browser-default-validation" action="{{route('CategoryMovie.store')}}" method="post">
                    @method('POST')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-name">عنوان دسته بندی </label>
                        <input
                            name="name"
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                            placeholder="عنوان را وارد کنید "
                            required />
                    </div>
                    <div class="mb-3">
                        <label class="d-block form-label">وضعیت</label>
                        <div class="form-check mb-2">
                            <input
                                name="status"
                                type="radio"
                                value="1"
                                id="basic-default-radio-male"
                                class="form-check-input"
                                required
                                checked />
                            <label class="form-check-label" for="basic-default-radio-male">فعال</label>
                        </div>
                        <div class="form-check">
                            <input
                                type="radio"
                                id="basic-default-radio-female"
                                name="status"
                                value="0"
                                class="form-check-input"
                                required />
                            <label class="form-check-label" for="basic-default-radio-female">غیر قعال</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-bio">توضیحات</label>
                        <textarea
                            class="form-control"
                            id="basic-default-bio"
                            name="description"
                            rows="3"
                            required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Browser Default -->




@endsection
