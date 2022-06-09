var cum_weight = 0;
var counter = 0;

function calculate_cumulative_sum() {
    var weight = parseInt(document.getElementById("socket_weight").value);
    if (weight <= 0 || isNaN(weight)) {
        alert("Please Enter Weight");
    } else {
        cum_weight += parseInt(weight);

        counter++;

        document.getElementById("cum_weight").value = cum_weight;

        var table = document.getElementById("cum_weights");
        var newRow = table.insertRow();

        var idCell = newRow.insertCell(0);
        var wCell = newRow.insertCell(1);
        var newCell3 = newRow.insertCell(2);

        var id = document.createTextNode(counter);
        var w = document.createTextNode(weight);
        var newText3 = document.createElement("div");

        idCell.appendChild(id);
        wCell.appendChild(w);
        newCell3.appendChild(newText3);
    }
}
