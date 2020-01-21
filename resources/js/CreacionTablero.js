var formURL = "../views/home.blade.php";
var formData = $("#PostJugar").serialize();

// The important bit. Add custom data like URL strings.
formData += "&customVariable=foobar";

$.post({
  url:  formURL,
  data: formData,
  dataType: 'json',
  success: function (data) {
      console.log("Success.", data);
  }
}
);  