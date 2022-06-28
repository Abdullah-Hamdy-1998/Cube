let cum_weight = 0;
let counter = 0;

function calculate_cumulative_sum() {
    var weight = parseInt(document.getElementById("socket_weight").value);

    if (weight <= 0 || isNaN(weight)) {
        alert("Please Enter a valid Weight");
    } else {
        var data = [++counter, weight];
        cum_weight += parseInt(weight);

        document.getElementById("cum_weight").value = cum_weight;

        var table = document.getElementById("cum_weights");
        var new_row = table.insertRow();

        for (var i = 0; i < 2; i++) {
            var new_cell = new_row.insertCell(i);
            var new_text = document.createTextNode(data[i]);
            new_cell.appendChild(new_text);
        }
    }
}
