function json_obj (){
var table = document.getElementById('table');
var jsonArr = [];
for(var i =1,row;row = table.rows[i];i++){
    var col = row.cells;
      var jsonObj = {
      avater : col[0].innerHTML,
      name : col[1].innerHTML,
      weight : col[2].innerHTML,
      quantity : col[3].innerHTML,
      modified : col[4].innerHTML,

      }
    jsonArr.push(jsonObj);
}

console.log(jsonArr);
}
