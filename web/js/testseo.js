
$("#mainform").submit(function (e) {
    var data = $('#mainform').serialize()
    e.preventDefault();
    $('#alert-success, #alert-danger').addClass("hide")

$.ajax({
  url: '/tests/seo',
  type: 'POST',
  dataType: 'json',
  data: data,
  success: function (data, textStatus, jqXHR) {
    if (data.success == true) {
      for (var prop in data) {
          if (data.hasOwnProperty(prop)){
            if (!data[prop]) {
             $("#" + prop).addClass("show") 
            }
          }
      }
    }  
  },
  error: function (jqXHR, textStatus, errorThrown) {

  }
});
});

