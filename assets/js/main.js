$(document).ready(function () {
   $('#signUpForm').submit(function (e) {
       e.preventDefault();
       const formData = $(this).serialize();
       $.ajax({
           type: "POST",
           url: "utilities.php",
           data: formData,
           dataType: 'json',
           beforeSend: function () {
               $('#signUpButton')
                   .empty()
                   .append(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Please wait ...`)
           },
           success: function (response) {
               // response = JSON.parse(response);
               $('#signUpButton')
                   .empty()
                   .append(`Sign Up
                            <i class="fas fa-user-plus"></i>`);
               if (response.responseCode === 0) {
                   $('#signUpForm').trigger('reset');
                    $('#responseMessage')
                        .empty()
                        .append(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong>Congratulations !</strong> ${response.responseMessage}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>`);
                   // setTimeout(() => {
                   //     location.href = 'login/';
                   // }, 3000)
               } else {
                   $('#responseMessage')
                       .empty()
                       .append(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <strong>Oops !</strong> ${response.responseMessage}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>`);
               }
           }
       });
   })
})