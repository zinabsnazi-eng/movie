
@extends('Admin.layouts.master')


@section('content')


    <!-- Browser Default -->
    <div class="col-md mb-4 mb-md-0">
        <div class="card">
            <h5 class="card-header">   افزودن   </h5>
            <div class="card-body">
                <form class="browser-default-validation" action="{{route('casts.store')}}"  enctype="multipart/form-data" method="post">
                    @method('POST')
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-name">اسم   </label>
                        <input
                            name="full_name"
                            type="text"
                            class="form-control"
                            id="basic-default-name"
                            placeholder="عنوان را وارد کنید "
                            required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-name">عکس   </label>
                        <input
                            name="image"
                            type="file"
                            class="form-control"
                            id="basic-default-name"
                            placeholder="عنوان را وارد کنید "
                            required />
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
                        <label class="d-block form-label">نقش</label>
                        <div class="form-check mb-2">
                            <input
                                name="role"
                                type="radio"
                                value="actor"
                                id="basic-default-radio-male"
                                class="form-check-input"
                                required
                                checked />
                            <label class="form-check-label" for="basic-default-radio-male">بازیگر </label>
                        </div>
                        <div class="form-check">
                            <input
                                type="radio"
                                id="basic-default-radio-female"
                                name="role"
                                value="director"
                                class="form-check-input"
                                required />
                            <label class="form-check-label" for="basic-default-radio-female">کارگردان </label>
                        </div>
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
