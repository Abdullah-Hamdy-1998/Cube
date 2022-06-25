function getData() {
    var shipment = [];
    var table = document.getElementById("shipment_items");
    var rowCount = table.rows.length;
    if (rowCount <= 2) {
        alert("No data to send");
    } else {
        for (var i = 2; i < rowCount; i++) {
            var shipment_item = {
                shipment_type: document.getElementById("shipment_type").value,
                shipmentable_id: document.getElementById("shipmentable").value,
                shipmentable_type: document
                    .getElementById("shipmentable")
                    .options[
                        document.getElementById("shipmentable").selectedIndex
                    ].getAttribute("data-type"),
                description: document.getElementById("description").value,
                item_id: table.rows[i].cells[2].getAttribute("data-id"),
                item_weight: table.rows[i].cells[3].innerHTML,
                item_quantity: table.rows[i].cells[4].innerHTML,
            };
            shipment.push(shipment_item);
        }
    }
    return shipment;
}

