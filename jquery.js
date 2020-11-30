$(document).ready(function () {
  $("form.ajax").on("submit", function (e) {
    e.preventDefault();
    data = {};
    data = { file: $("#file").val() };
    console.log($("#file").attr("name"));
    $.ajax({
      url: "mysql.php",
      type: "POST",
      data: data,
      success: function (response) {
        console.log(response);
      },
    });
    //console.log();
    return false;
  });
  $("input:file").change(function () {
    $("input:submit").trigger("click");
  });
  $("#button").click(function () {
    $.get("getdata.php", function (result) {
      $("#list").html(result);
    });
  });
});
// Custom file drop extension
