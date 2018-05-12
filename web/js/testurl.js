
$("#mainform").submit(function (e) {
  e.preventDefault();
  $('#alert-success, #alert-danger').addClass("hide")

$.ajax({
  url: '/tests/url',
  type: 'POST',
  dataType: 'json',
  data: $('#mainform').serialize(),
  success: function (data, textStatus, jqXHR) {
    if (data.success == "true") {
        $('#alert-success')
            .removeClass("hide")
            .text("Strona pod adresem " + $('#mainform #site').val() + " jest dostępna")
    }  else {
        $('#alert-danger')
            .removeClass("hide")
            .text("Strona pod adresem " + $('#mainform #site').val()+ " jest nie dostępna")
    }
  },
  error: function (jqXHR, textStatus, errorThrown) {

  }
});
});

