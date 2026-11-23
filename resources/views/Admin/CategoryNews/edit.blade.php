@extends('Admin.layouts.master')


@section('content')


    <!-- Browser Default -->
    <div class="col-md mb-4 mb-md-0">
        <div class="card">
            <h5 class="card-header">ویرایش دسته بندی فیلم</h5>
            <div class="card-body">
                <form class="browser-default-validation" method="post" action="{{route('CategoryNews.update' , $CategoryNews->id)}}">
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-name">تایتل</label>
                        <input
                            type="text"
                            name="title"
                            class="form-control"
                            id="basic-default-name"
                            value="{{$CategoryNews->title}}"
                            placeholder="نام و نام خانوادگی..."
                            required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-">توضیحات</label>
                        <input
                            type="text"
                            name="description"
                            id="basic-default-"
                            class="form-control"
                            value="{{$CategoryNews->description}}"
                            placeholder="john.doe"
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
                    {{--                    <div class="mb-3">--}}
                    {{--                        <label class="form-label" for="basic-default-">وضعیت</label>--}}
                    {{--                        <input--}}
                    {{--                            type="text"--}}
                    {{--                            name="status"--}}
                    {{--                            id="basic-default-"--}}
                    {{--                            class="form-control"--}}
                    {{--                            value="{{$Movies->status}}"--}}
                    {{--                            placeholder="john.doe"--}}
                    {{--                            required />--}}
                    {{--                    </div>--}}
                    {{--                    <div class="mb-3 form-password-toggle">--}}
                    {{--                        <label class="form-label" for="basic-default-password">رمز عبور</label>--}}
                    {{--                        <div class="input-group input-group-merge">--}}
                    {{--                            <input--}}
                    {{--                                type="password"--}}
                    {{--                                id="basic-default-password"--}}
                    {{--                                class="form-control"--}}
                    {{--                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"--}}
                    {{--                                aria-describedby="basic-default-password3"--}}
                    {{--                                required />--}}
                    {{--                            <span class="input-group-text cursor-pointer" id="basic-default-password3"--}}
                    {{--                            ><i class="ti ti-eye-off"></i--}}
                    {{--                                ></span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="mb-3">--}}
                    {{--                        <label class="form-label" for="basic-default-country">کشور</label>--}}
                    {{--                        <select class="form-select" id="basic-default-country" required>--}}
                    {{--                            <option value="">انتخاب کشور</option>--}}
                    {{--                            <option value="usa">آمریکا</option>--}}
                    {{--                            <option value="uk">بریتانیا</option>--}}
                    {{--                            <option value="France">فرانسه</option>--}}
                    {{--                            <option value="Australia">استرالیا</option>--}}
                    {{--                            <option value="spain">اسپانیا</option>--}}
                    {{--                        </select>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="mb-3">--}}
                    {{--                        <label class="form-label" for="basic-default-dob">تاریخ تولد</label>--}}
                    {{--                        <input--}}
                    {{--                            type="text"--}}
                    {{--                            class="form-control flatpickr-validation"--}}
                    {{--                            id="basic-default-dob"--}}
                    {{--                            required />--}}
                    {{--                    </div>--}}
                    {{--                    <div class="mb-3">--}}
                    {{--                        <label class="form-label" for="basic-default-upload-file">عکس پروفایل</label>--}}
                    {{--                        <input type="file" class="form-control" id="basic-default-upload-file" required />--}}
                    {{--                    </div>--}}
                    {{--                    <div class="mb-3">--}}
                    {{--                        <label class="d-block form-label">جنسیت</label>--}}
                    {{--                        <div class="form-check mb-2">--}}
                    {{--                            <input--}}
                    {{--                                type="radio"--}}
                    {{--                                id="basic-default-radio-male"--}}
                    {{--                                name="basic-default-radio"--}}
                    {{--                                class="form-check-input"--}}
                    {{--                                required--}}
                    {{--                                checked />--}}
                    {{--                            <label class="form-check-label" for="basic-default-radio-male">اقا</label>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-check">--}}
                    {{--                            <input--}}
                    {{--                                type="radio"--}}
                    {{--                                id="basic-default-radio-female"--}}
                    {{--                                name="basic-default-radio"--}}
                    {{--                                class="form-check-input"--}}
                    {{--                                required />--}}
                    {{--                            <label class="form-check-label" for="basic-default-radio-female">خانم</label>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="mb-3">--}}
                    {{--                        <label class="form-label" for="basic-default-bio">بیوگرافی</label>--}}
                    {{--                        <textarea--}}
                    {{--                            class="form-control"--}}
                    {{--                            id="basic-default-bio"--}}
                    {{--                            name="basic-default-bio"--}}
                    {{--                            rows="3"--}}
                    {{--                            required></textarea>--}}
                    {{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <div class="form-check">--}}
{{--                            <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required />--}}
{{--                            <label class="form-check-label" for="basic-default-checkbox"--}}
{{--                            >با شرایط و ضوابط ما موافقت میکنید</label--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    {{--                    <div class="mb-3">--}}
                    {{--                        <label class="switch switch-primary">--}}
                    {{--                            <input type="checkbox" class="switch-input" required />--}}
                    {{--                            <span class="switch-toggle-slider">--}}
                    {{--                              <span class="switch-on"></span>--}}
                    {{--                              <span class="switch-off"></span>--}}
                    {{--                            </span>--}}
                    {{--                            <span class="switch-label">ایمیل های مرتبط را برای من ارسال کنید</span>--}}
                    {{--                        </label>--}}
                    {{--                    </div>--}}
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
