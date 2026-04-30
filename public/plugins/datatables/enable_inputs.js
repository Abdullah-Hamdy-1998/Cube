//enable inputs when select is changed
$(document).ready(function () {
    $(document).on("change", "#shipment_type", function () {
        $("#shipmentable").prop("disabled", false);
        $("#description").prop("disabled", false);
    });

    $(document).on("change", "#shipmentable", function () {
        $("#socket_weight").prop("disabled", false);
        $("#items").prop("disabled", false);
        $("#quantity").prop("disabled", false);
    });
});
