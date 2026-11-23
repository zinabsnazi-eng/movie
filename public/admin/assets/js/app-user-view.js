/**
 * App User View - Suspend User Script
 */
'use strict';

(function () {
  const suspendUser = document.querySelector('.suspend-user');

  // Suspend User javascript
  if (suspendUser) {
    suspendUser.onclick = function () {
      Swal.fire({
        title: 'مطمئن هستید؟',
        text: "شما قادر به بازگردانی مجدد کاربر نخواهید بود!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'بله، کاربر را تعلیق کن!',
        customClass: {
          confirmButton: 'btn btn-primary me-2',
          cancelButton: 'btn btn-label-secondary'
        },
        buttonsStyling: false
      }).then(function (result) {
        if (result.value) {
          Swal.fire({
            icon: 'success',
            title: 'تعلیق شد !',
            text: 'کاربر به حالت تعلیق درآمده است.',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: 'لغو شد',
            text: 'تعلیق لغو شد :)',
            icon: 'error',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        }
      });
    };
  }

  //? Billing page have multiple buttons
  // Cancel Subscription alert
  const cancelSubscription = document.querySelectorAll('.cancel-subscription');

  // Alert With Functional Confirm Button
  if (cancelSubscription) {
    cancelSubscription.forEach(btnCancle => {
      btnCancle.onclick = function () {
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
    });
  }
})();
