$(document).ready(function(){
  $('#form1').validate({
    rules: {
      username: {
        minlength: 3,
        maxlength: 20,
        required: true
      },
      email: {
        email: true,
        required: true
      },
      password: {
        minlength: 5,
        required: true
      },
      payment: {
        required: true
      }
    },
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error')
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function(element) {
      $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
    }
  });

  $('#form1').formAnimation({ animatedClass: 'jello' });

  // $('#form1').on('invalid-form.validate', function(e) {
  //   $(this).addClass('animated jello');
  // });
  //
  // $('.submit input').click(function() {
  //   $('#form1.animated').removeClass('animated jello');
  // });
});
