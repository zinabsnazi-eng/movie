@extends("Admin.layouts.master")
@section("content")
<div class="card mb-4">
    <h5 class="card-header">جزئیات پروفایل</h5>
    <!-- Account -->
    <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img
                src="../../assets/img/avatars/14.png"
                alt="user-avatar"
                class="d-block w-px-100 h-px-100 rounded"
                id="uploadedAvatar" />
            <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                    <span class="d-none d-sm-block">آپلود عکس جدید</span>
                    <i class="ti ti-upload d-block d-sm-none"></i>
                    <input
                        type="file"
                        id="upload"
                        class="account-file-input"
                        hidden
                        accept="image/png, image/jpeg" />
                </label>
                <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                    <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">بازنشانی</span>
                </button>

                <div class="text-muted">JPG، GIF یا PNG مجاز است. حداکثر اندازه 800K</div>
            </div>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">نام</label>
                    <input
                        class="form-control"
                        type="text"
                        id="firstName"
                        name="firstName"
                        value="علی"
                        autofocus />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="lastName" class="form-label">نام خانوادگی</label>
                    <input class="form-control" type="text" name="lastName" id="lastName" value="زمانی" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">ایمیل</label>
                    <input
                        class="form-control"
                        type="text"
                        id="email"
                        name="email"
                        value="ali.za145@gmail.com"
                        placeholder="ali.za145@gmail.com" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="organization" class="form-label">سازمان</label>
                    <input
                        type="text"
                        class="form-control"
                        id="organization"
                        name="organization"
                        value="Pixinvent" />
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="phoneNumber">تلفن همراه</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text">IR (+98)</span>
                        <input
                            type="text"
                            id="phoneNumber"
                            name="phoneNumber"
                            class="form-control"
                            placeholder="9125263256" />
                    </div>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="address" class="form-label">آدرس</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="آدرس" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="state" class="form-label">استان</label>
                    <input class="form-control" type="text" id="state" name="state" placeholder="برای مثال البرز" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="zipCode" class="form-label">کد پستی</label>
                    <input
                        type="text"
                        class="form-control"
                        id="zipCode"
                        name="zipCode"
                        placeholder="231465"
                        maxlength="6" />
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="country">کشور</label>
                    <select id="country" class="select2 form-select">
                        <option value="">انتخاب کنید</option>
                        <option value="Australia">استرالیا</option>
                        <option value="Bangladesh">بنگلادش</option>
                        <option value="Belarus">بلاروس</option>
                        <option value="Brazil">برزیل</option>
                        <option value="Canada">کانادا</option>
                        <option value="China">چین</option>
                        <option value="France">فرانسه</option>
                        <option value="Germany">آلمان</option>
                        <option value="India">هندوستان</option>
                        <option value="Indonesia">اندونزی</option>
                        <option value="Israel">اسرائیل</option>
                        <option value="Italy">ایتالیا</option>
                        <option value="Japan">ژاپن</option>
                        <option value="Korea">جمهوری کره</option>
                        <option value="Mexico">مکزیک</option>
                        <option value="Philippines">فیلیپین</option>
                        <option value="Russia">روسیه</option>
                        <option value="South Africa">آفریقای جنوبی</option>
                        <option value="Thailand">تایلند</option>
                        <option value="Turkey">ترکیه</option>
                        <option value="Ukraine">اوکراین</option>
                        <option value="United Arab Emirates">امارات متحده عربی</option>
                        <option value="United Kingdom">انگلستان</option>
                        <option value="United States">آمریکا</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="language" class="form-label">زبان</label>
                    <select id="language" class="select2 form-select">
                        <option value="">زبان خود را انتخاب کنید</option>
                        <option value="en">انگلیسی</option>
                        <option value="fr">فرانسوی</option>
                        <option value="de">آلمانی</option>
                        <option value="pt">پرتغالی</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="timeZones" class="form-label">منطقه زمانی</label>
                    <select id="timeZones" class="select2 form-select">
                        <option value="">منطقه زمانی را انتخاب کنید</option>
                        <option value="-12">(GMT-12:00) International Date Line West</option>
                        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                        <option value="-10">(GMT-10:00) Hawaii</option>
                        <option value="-9">(GMT-09:00) Alaska</option>
                        <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                        <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                        <option value="-7">(GMT-07:00) Arizona</option>
                        <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                        <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                        <option value="-6">(GMT-06:00) Central America</option>
                        <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                        <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                        <option value="-6">(GMT-06:00) Saskatchewan</option>
                        <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                        <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                        <option value="-5">(GMT-05:00) Indiana (East)</option>
                        <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                        <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="currency" class="form-label"> واحد پول</label>
                    <select id="currency" class="select2 form-select">

                        <option value="usd">دلار آمریکا</option>
                        <option value="euro">یورو</option>
                        <option value="pound">پوند</option>
                        <option value="bitcoin">بیت کوین</option>
                    </select>
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                <button type="reset" class="btn btn-label-secondary">لغو</button>
            </div>
        </form>
    </div>
    <!-- /Account -->
</div>
<div class="card">
    <h5 class="card-header">حذف حساب</h5>
    <div class="card-body">
        <div class="mb-3 col-12 mb-0">
            <div class="alert alert-warning">
                <h5 class="alert-heading mb-1">آیا مطمئن هستید که می خواهید اکانت خود را حذف کنید؟</h5>
                <p class="mb-0">هنگامی که حساب خود را حذف می کنید، دیگر راه برگشتی وجود ندارد. لطفا مطمئن باشید</p>
            </div>
        </div>
        <form id="formAccountDeactivation" onsubmit="return false">
            <div class="form-check mb-4">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="accountActivation"
                    id="accountActivation" />
                <label class="form-check-label" for="accountActivation"
                >من غیرفعال کردن حساب خود را تأیید می کنم</label
                >
            </div>
            <button type="submit" class="btn btn-danger deactivate-account">غیرفعال کردن حساب</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
