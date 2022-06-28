let id = 0;

function insert_item() {
    var table = document.getElementById("shipment_items");

    // var rowCount = table.rows.length;
    // if (rowCount > 2) {
    //     //check if data-id attribute is == to 0
    //     alert(table.rows[rowCount - 1].cells[2].getAttribute("data-id"));
    // }

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
        var data = [++id, item_name, cum_weight, quantity];
        var new_row = table.insertRow();

        for (var i = 0; i < 4; i++) {
            var new_cell = new_row.insertCell(i);
            if (i == 1) {
                new_cell.setAttribute("data-id", item_id);
            }
            var new_text = document.createTextNode(data[i]);
            new_cell.appendChild(new_text);
        }
    }
}
