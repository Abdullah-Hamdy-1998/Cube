$(document).ready(function () {
    $("#items").on("change", function () {
        var item_id = $(this).val();

        $("#cum_weight").val("");
        $("#quantity").val("");
    });
});
