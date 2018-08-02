$(document).ready(function () {

});

// function assignEventsAndFunctions() {
//   $("#send-button").on('click',sendDataDIY);
//   $("#examples-button").on('click',showExamples);
//   getDataDIY();
// }
//
//
//
// function getDataDIY(){
//     $.ajax({
//         "method": "GET",
//         "dataType": 'JSON',
//         "url": "http://web-unicen.herokuapp.com/api/thing/group/" + 114,
//         "success": function(resultData){
//             wipeTable();
//             showDataDIY(resultData);
//             createButton();
//             $('button[name=delete-button]').on('click', deleteDataDIY);
//         },
//         "error":function(jqxml, status, errorThrown){
//         console.log(errorThrown);
//         }
//     });
// }
//
// function deleteDataDIY(){
//   let id = $(this).parent().parent().data("id");
//   console.log(id);
//   $.ajax({
//     "method": 'DELETE',
//     "dataType": 'JSON',
//     "url": "https://web-unicen.herokuapp.com/api/thing/" + id,
//     "success": function(resultData){
//         $(".alert").removeClass("alert-danger");
//         $(".alert").addClass("alert-success");
//         $(".alert").html("Proyecto borrado!");
//         console.log(resultData);
//         getDataDIY();
//      },
//      "error":function(jqxml, status, errorThrown){
//      console.log(errorThrown);
//      $(".alert").addClass("alert-danger");
//      $(".alert").html("Error, por favor intente nuevamente");
//      }
//   });
//   for (let i = 0; i < 3; i++) {
//   let img = document.createElement("img");
//   img.src = "images/charmander-loading.gif";
//   img.class = "img-responsive";
//   $(".show-data").append(img);
//   }
// }
//
// function showDataDIY(resultData){
//   let table = $(".show-data");
//   for (let i = 0; i < resultData.information.length; i++) {
//     let html = "<tr data-id="+resultData.information[i]._id+">"+
//                 "<td>"+resultData.information[i].thing.Difficulty+"</td>"+
//                 "<td>"+resultData.information[i].thing.Materials+"</td>"+
//                 "<td>"+resultData.information[i].thing.Steps+"</td>"+
//                 "<td class='button-cell'></td>"+
//                 "</tr>";
//     table.append(html);
//   }
// }
//
// function createButton(){
//   let cell = $(".button-cell");
//   let button = document.createElement("button");
//   button.name = "delete-button";
//   button.innerHTML = "Borrar";
//   cell.append(button);
// }
//
// function wipeTable(){
//     wipeForm();
//     let table = $(".show-data");
//     let buttons = $(".button-cell");
//     table.empty();
//     buttons.empty();
// }
//
//  function wipeForm(){
//      let diff = $("#diff").get(0);
//      let form = $("#form").get(0);
//      diff.reset();
//      form.reset();
//  }
//
// function sendDataDIY(){
//     let dataDifficulty =  $("input:radio[name ='Difficulty']:checked").val();
//     let dataMaterials = $(".input-materials").val();
//     let dataSteps = $(".input-steps").val();
//
//     let information = {
//         Difficulty: dataDifficulty,
//         Materials: dataMaterials,
//         Steps: dataSteps
//     };
//     let info = {
//         group: 114,
//         thing: information
//     };
//     if (information){
//         $.ajax({
//             "method": 'POST',
//             "dataType": 'JSON',
//             "data": JSON.stringify(info),
//             "contentType": "application/json; charset=utf-8",
//             "url": "https://web-unicen.herokuapp.com/api/thing/",
//             "success": function(resultData){
//                 $(".alert").removeClass("alert-danger");
//                 $(".alert").addClass("alert-success");
//                 $(".alert").html("Proyecto guardado!");
//                 console.log(resultData);
//                 getDataDIY();
//             },
//             "error":function(jqxml, status, errorThrown){
//             console.log(errorThrown);
//             $(".alert").addClass("alert-danger");
//             $(".alert").html("Error, por favor intente nuevamente");
//             }
//         });
//     }
//     else {
//         $(".alert").addClass("alert-danger");
//         $(".alert").html("Todos los campos deben ser completados!");
//     }
//     for (let i = 0; i < 3; i++) {
//     let img = document.createElement("img");
//     img.src = "images/charmander-loading.gif";
//     img.class = "img-responsive";
//     $(".show-data").append(img);
//     }
//}
