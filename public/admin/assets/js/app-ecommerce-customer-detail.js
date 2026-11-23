/**
 * App eCommerce Customer Detail - delete customer Script
 */
'use strict';

(function () {
  const deleteCustomer = document.querySelector('.delete-customer');

  // Suspend User javascript
  if (deleteCustomer) {
    deleteCustomer.onclick = function () {
      Swal.fire({
        title: 'مطمئن هستید؟',
        text: "شما نمی توانید مشتری را برگردانید!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'بله، مشتری را حذف کنید!',
        customClass: {
          confirmButton: 'btn btn-primary me-2',
          cancelButton: 'btn btn-label-secondary'
        },
        buttonsStyling: false
      }).then(function (result) {
        if (result.value) {
          Swal.fire({
            icon: 'success',
            title: 'حذف شد!',
            text: 'مشتری حذف شده است.',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          Swal.fire({
            title: 'لغو شد',
            text: 'حذف لغو شد :)',
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
