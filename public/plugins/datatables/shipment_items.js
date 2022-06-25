var counter = 0;

function insert_item() {
    var avatar = "avatar";

    var item = document.getElementById("items");
    var item_id = item.value;
    var item_name = item.options[item.selectedIndex].text;

    var cum_weight = document.getElementById("cum_weight").value;
    var quantity = document.getElementById("quantity").value;
    var table = document.getElementById("shipment_items");

    if (item_id == "Select") {
        alert("Please Select an Item");
    } else if (cum_weight <= 0 || isNaN(cum_weight)) {
        alert("Please Enter a valid Weight");
    } else if (quantity <= 0 || isNaN(quantity)) {
        alert("Please Enter a valid Quantity");
    } else {
        var data = [++counter, avatar, item_name, cum_weight, quantity];
        var new_row = table.insertRow();

        for (var i = 0; i < 5; i++) {
            var new_cell = new_row.insertCell(i);
            if (i == 2) {
                new_cell.setAttribute("data-id", item_id);
            }
            var new_text = document.createTextNode(data[i]);
            new_cell.appendChild(new_text);
        }
    }
}
