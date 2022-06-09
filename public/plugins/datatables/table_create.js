// var weights = [];
// var wSum = 0;
// var str = 0;
// var strr = 1;

// function Add_Sum() {
//     var input = document.getElementById("myInput").value;
//     weights = [[parseInt(input)]];
//     console.log(weights);
//     str++;
//     wSum += parseInt(weights);

//     document.getElementById("WSum").value = wSum;

//     var table = document.getElementById("fetch");
//     var newRow = table.insertRow();
//     var newCell1 = newRow.insertCell(0);
//     var newCell2 = newRow.insertCell(1);
//     var newCell3 = newRow.insertCell(2);
//     var newText1 = document.createTextNode(str);
//     var newText2 = document.createTextNode(input);
//     var newText3 = document.createElement("div");
//     newCell1.appendChild(newText1);
//     newCell2.appendChild(newText2);
//     newCell3.appendChild(newText3);
// }

// function table_again() {
//     var date = new Date();
//     //get option name from select element

//     var name = document.getElementById("submitagain");
//     alert(name);
//     var w = document.getElementById("WSum").value;
//     var Quantity = document.getElementById("Quantity").value;
//     var tableagain = document.getElementById("table");
//     var newcolumn = tableagain.insertRow();
//     var newCelll1 = newcolumn.insertCell(0);
//     var newCelll2 = newcolumn.insertCell(1);
//     var newCelll3 = newcolumn.insertCell(1);
//     var newCelll4 = newcolumn.insertCell(1);
//     var newCelll5 = newcolumn.insertCell(1);
//     var newCelll6 = newcolumn.insertCell(1);
//     var newTextt1 = document.createTextNode(strr++);
//     var newTextt2 = document.createTextNode(
//         date.getDate() +
//             "-" +
//             (date.getUTCMonth() + 1) +
//             "-" +
//             date.getFullYear()
//     );
//     var newTextt3 = document.createTextNode(Quantity);
//     var newTextt4 = document.createTextNode(w);
//     var newTextt5 = document.createTextNode(name);
//     var newTextt6 = document.createTextNode("");
//     newCelll1.appendChild(newTextt1);
//     newCelll2.appendChild(newTextt2);
//     newCelll3.appendChild(newTextt3);
//     newCelll4.appendChild(newTextt4);
//     newCelll5.appendChild(newTextt5);
//     newCelll6.appendChild(newTextt6);
// }
