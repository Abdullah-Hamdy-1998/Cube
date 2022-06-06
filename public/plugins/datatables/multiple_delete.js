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

//when clicking the delete button, apply multiple delete function

$("#mdelete-button").click(function () {
    var ids = [];
    $("input[type=checkbox]:checked").each(function () {
        ids.push($(this).val());
    });
    $.ajax({
        url: "users-delete",
        type: "POST",
        data: {
            ids: ids,
            _token: $('meta[name="csrf-token"]').attr("content"),
            _method: "DELETE",
        },
        //delete the rows, if successful
        success: function () {
            $("input[type=checkbox]:checked").each(function () {
                $(this).closest("tr").remove();
            });
            $("#mdelete-button").hide();
        },
        error: function (data) {
            console.log(data);
        },
    });
});
