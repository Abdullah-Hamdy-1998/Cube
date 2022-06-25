var cum_weight = 0;
var counter = 0;

function calculate_cumulative_sum() {
    var weight = parseInt(document.getElementById("socket_weight").value);

    if (weight <= 0 || isNaN(weight)) {
        alert("Please Enter a valid Weight");
    } else {
        var data = [++counter, weight, "div"];
        cum_weight += parseInt(weight);
        counter++;

        document.getElementById("cum_weight").value = cum_weight;

        for (var i = 0; i < 3; i++) {
            var new_cell = new_row.insertCell(i);
            var new_text = document.createTextNode(data[i]);
            new_cell.appendChild(new_text);
        }
    }
}
