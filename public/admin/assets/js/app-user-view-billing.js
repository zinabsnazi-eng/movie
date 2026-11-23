/**
 * App User View - Billing
 */

'use strict';

(function () {
  // Cancel Subscription alert
  const cancelSubscription = document.querySelector('.cancel-subscription');

  // Alert With Functional Confirm Button
  if (cancelSubscription) {
    cancelSubscription.onclick = function () {
      Swal.fire({
        text: 'آیا مطمئن هستید که می خواهید اشتراک خود را لغو کنید؟',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'بله',
        customClass: {
          confirmButton: 'btn btn-primary me-2',
          cancelButton: 'btn btn-label-secondary'
        },
        buttonsStyling: false
      }).then(function (result) {
        if (result.value) {
          Swal.fire({
            icon: 'success',
            title: 'لغو اشتراک شد',
            text: 'اشتراک شما با موفقیت لغو شد.',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: 'لغو شد',
            text: 'لغو اشتراک کنسل شد!!',
            icon: 'error',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        }
      });
    };
  }

  // On edit address click, update text of add address modal
  const addressEdit = document.querySelector('.edit-address'),
    addressTitle = document.querySelector('.address-title'),
    addressSubTitle = document.querySelector('.address-subtitle');

  addressEdit.onclick = function () {
    addressTitle.innerHTML = 'ویرایش آدرس'; // reset text
    addressSubTitle.innerHTML = 'آدرس خود را ویرایش کنید';
  };
})();
