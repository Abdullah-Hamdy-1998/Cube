

$(function() {
    $(".selecr input[type='checkbox']").change(function() {
    if ($(this).is(":checked")) {
    $(this).closest("tr").addClass("highlight");
    } else {
    $(this).closest("tr").removeClass("highlight");
    }
});
});

$("#files").change(function() {
    filename = this.files[0].name;
    console.log(filename);
  });