function json_obj() {
    var table = document.getElementById("table");
    var jsonArr = [];
    for (var i = 1, row; (row = table.rows[i]); i++) {
        var col = row.cells;
        var jsonObj = {
            avatar: col[1].innerHTML,
            name: col[2].innerHTML,
            weight: col[3].innerHTML,
            quantity: col[4].innerHTML,
            modified: col[5].innerHTML,
        };
        jsonArr.push(jsonObj);
    }

    console.log(jsonArr);
}
