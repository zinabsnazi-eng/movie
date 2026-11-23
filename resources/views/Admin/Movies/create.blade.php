@extends('Admin.layouts.master')


@section('content')


    <!-- Browser Default -->
    <div class="col-md mb-4 mb-md-0">
        <div class="card">
            <h5 class="card-header">  اضافه کردن  فیلم</h5>
            <div class="card-body">
                <form class="browser-default-validation" action="{{route('movie.store')}}" method="post" enctype="multipart/form-data">
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
                            name="title"
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                            placeholder="عنوان را وارد کنید "
                            required />
                    </div>
                    <div class="mb-3">
                        <label class="d-block form-label">دسته بندی فیلم</label>
                        <div class="form-check mb-2">
                            <select name="category_id" class="form-select" aria-label="Default select example">
                                <option selected>دسته بندی رو انتخاب کنید</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
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
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-bio">سال تولید</label>
                        <input
                            name="year"
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                            placeholder="سال ساخت را وارد کنید "
                            />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-bio"> نمره imdb</label>
                        <input
                            name="imdb"
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                            placeholder="imdb  را وارد کنید "
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-bio"> کشور سازنده </label>
                        <input
                            name="country"
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                            placeholder="کشور سازنده  را وارد کنید "
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-bio">  مدت زمان فیلم </label>
                        <input
                            name="time"
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                            placeholder=" مدت زمان فیلم  را وارد کنید "
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-bio">   پوستر فیلم </label>
                        <input
                            name="poster"
                            type="file"
                            class="form-control"
                            id="basic-default-name"
                            placeholder="  پوستر فیلم  را وارد کنید "
                        />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-bio">  محتوا </label>
                        <textarea
                            name="content"
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                        > </textarea>
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
