//when hovering over the row, show the hidden checkbox

$("table tbody tr").hover(
    function () {
        $(this).find("#row-checkbox").show();
    },
    function () {
        if ($(this).find("#row-checkbox").is(":checked") == false)
            $(this).find("#row-checkbox").hide();
    }
);

$(document).ready(function () {
    $(document).on("click", "input[type=checkbox]", function () {
        if ($("input[type=checkbox]:checked").length > 1) {
            $("#mdelete-button").show();
        } else {
            $("#mdelete-button").hide();
        }
    });
});

//when clicking the delete button, apply multiple delete

$("#mdelete-button").click(function () {
    var ids = [];
    $("input[type=checkbox]:checked").each(function () {
        ids.push($(this).val());
    });
    alert(ids);
});
