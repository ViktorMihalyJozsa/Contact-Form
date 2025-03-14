$(document).ready(function() {
    $('#contactForm').submit(function(event) {
      event.preventDefault();
      
      var formData = $(this).serialize();

      $.ajax({
        type: 'POST',
        url: 'send_email.php',
        data: formData,
        success: function(response) {
          $('#response').html(response);
        },
        error: function() {
          $('#response').html('Hiba történt, próbáld újra.');
        }
      });
    });
  });