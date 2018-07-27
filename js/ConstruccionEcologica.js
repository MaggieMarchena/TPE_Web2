$(document).ready(function () {
    "use strict";
    $(".partial-render").on("click", function(event){
        event.preventDefault();
        let href = $(this).attr("href");
      $.ajax({
        url: "http://localhost/Projects/TPE_Web2/" + href,
        success: function(result){
            $("#window-content").html(result);
            assignEventsAndFunctions();
        }
        //error
      });
      let img = document.createElement("img");
      img.src = "images/charmander-loading.gif";
      $(".window-content").append(img);
    });


    // $(".partial-render").on("click", function(event){
    //     event.preventDefault();
    //     let href = $(this).attr("href");
    //     $.ajax({
    //         "url": "http://localhost/Projects/24 - Molina/site/" + href,
    //         "type": 'GET',
    //         "dataType": 'html',
    //         "success": function(partRendered){
    //             $(".window-content").html(partRendered);
    //             assignEventsAndFunctions();
    //         },
    //         "error": function(jqxml, status, errorThrown){
    //         console.log(errorThrown);
    //         }
    //     });
    //     let img = document.createElement("img");
    //     img.src = "images/charmander-loading.gif";
    //     $(".window-content").append(img);
    // });
});

function assignEventsAndFunctions() {
  $("#send-button").on('click',sendDataDIY);
  $("#examples-button").on('click',showExamples);
  getDataDIY();
}

function showExamples(){
    let information = [];
    information[0] = {
        Difficulty: "Difícil",
        Materials: "Botellas plasticas, Residuos no orgánicos, Madera reciclada, Mezcla de cemento",
        Steps: "Paso 1: Junta todas las botellas plásticas que puedas, dile a tus familiares y amigos que no las boten, límpialas y recuerda no botar las tapas; Paso 2: Introduce en la botellas residuos no orgánicos como papel, aluminios, cartón, plumavit, bolsas, etc. El relleno tiene que ser duro, así que empuja los residuos con un palo. Hazlo con tiempo este proceso puede durar varios días, pero es muy relajante si tienes paciencia, además tu bolsa de basura se hará mucho más pequeña; Paso 3: Crea un rectángulo de madera reciclada para hacer el molde del tamaño que quieres que sea tu ladrillo, lo ideal es que sea de 7 botellas de ancho por 3 botellas de alto. Cabe señalar que un ladrillo ecológico es mucho más grande que los normales, de hecho se parecen más a un bloque; Paso 4: Introduce las botellas en el molde y rellena los espacios con la mezcla de cemento. No desarme el molde y espera que seque todo el día. Para hacer varios ladrillos en un mismo día debes tener más de un molde; Paso 5: Luego de dejar un día el molde con la mezcla y las botellas en un lugar seco, desármalo y tendrás un hermoso ladrillo ecológico, listo para construir lo que quieras."
    };
    information[1] = {
        Difficulty: "Fácil",
        Materials: "Botellas de plástico, Silicona, Tijeras, Pintura acrílica, Pincel",
        Steps: "Paso 1: Antes de comenzar, aplica unas gotas de Axion líquido con agua dentro de la botellas y agita varias veces así eliminaras el polvo y la suciedad; Paso 2: Con unas tijeras o bisturí corta la botella por la mitad dando forma al borde, si te gusta la variedad puedes hacer cortes diferentes así tendrás varios modelos de materas; Paso 3: Después de tener las botellas cortadas, toma el CD y pégalo de la parte superior de la botella utilizando silicona caliente. Luego de pegarlo haz presión y déjala en una superficie plana; Paso 4: Para irle dando más vida a tus botellas píntalas con pintura acrílica del color que quieras y dibuja diferentes formas pueden ser flores, círculos o la figura que quieras. Ahora están listas para que pongas tus plantas favoritas."
    };
    information[2] = {
        Difficulty: "Media",
        Materials: "Cucharas de plástico, botellón plástico de 5 litros, pegamento, cutter/tijera, lámpara larga duración y conexión eléctrica",
        Steps: "Paso 1: cortar los mangos de las cucharas y la base del botellón; Paso 2: pegar las cucharas en el botellón una al lado de la otra como si fueran pétalos, una fila encimándose sobre la anterior hasta llegar a la boca del botellón; Paso 3: realizar una rosca del diámetro de la boca del botellón pegando una cuchara sobre otra; Paso 4: instalar el portalámparas en la boca del botellón y colocar la lámpara desde la abertura de la base"
    };

    let info = {
        group: 114,
        thing: information
    };

    for (let i = 0; i < 3; i++) {
        info.thing = information[i];
        $.ajax({
            "method": 'POST',
            "dataType": 'JSON',
            "data": JSON.stringify(info),
            "contentType": "application/json; charset=utf-8",
            "url": "https://web-unicen.herokuapp.com/api/thing/",
            "success": function(resultData){
                console.log(resultData);
                getDataDIY();
            },
            "error":function(jqxml, status, errorThrown){
            console.log(errorThrown);
            $(".alert").addClass("alert-danger");
            $(".alert").html("Error, por favor intente nuevamente");
            }
        });
    }
}

function getDataDIY(){
    $.ajax({
        "method": "GET",
        "dataType": 'JSON',
        "url": "http://web-unicen.herokuapp.com/api/thing/group/" + 114,
        "success": function(resultData){
            wipeTable();
            showDataDIY(resultData);
            createButton();
            $('button[name=delete-button]').on('click', deleteDataDIY);
        },
        "error":function(jqxml, status, errorThrown){
        console.log(errorThrown);
        }
    });
}

function deleteDataDIY(){
  let id = $(this).parent().parent().data("id");
  console.log(id);
  $.ajax({
    "method": 'DELETE',
    "dataType": 'JSON',
    "url": "https://web-unicen.herokuapp.com/api/thing/" + id,
    "success": function(resultData){
        $(".alert").removeClass("alert-danger");
        $(".alert").addClass("alert-success");
        $(".alert").html("Proyecto borrado!");
        console.log(resultData);
        getDataDIY();
     },
     "error":function(jqxml, status, errorThrown){
     console.log(errorThrown);
     $(".alert").addClass("alert-danger");
     $(".alert").html("Error, por favor intente nuevamente");
     }
  });
  for (let i = 0; i < 3; i++) {
  let img = document.createElement("img");
  img.src = "images/charmander-loading.gif";
  img.class = "img-responsive";
  $(".show-data").append(img);
  }
}

function showDataDIY(resultData){
  let table = $(".show-data");
  for (let i = 0; i < resultData.information.length; i++) {
    let html = "<tr data-id="+resultData.information[i]._id+">"+
                "<td>"+resultData.information[i].thing.Difficulty+"</td>"+
                "<td>"+resultData.information[i].thing.Materials+"</td>"+
                "<td>"+resultData.information[i].thing.Steps+"</td>"+
                "<td class='button-cell'></td>"+
                "</tr>";
    table.append(html);
  }
}

function createButton(){
  let cell = $(".button-cell");
  let button = document.createElement("button");
  button.name = "delete-button";
  button.innerHTML = "Borrar";
  cell.append(button);
}

function wipeTable(){
    wipeForm();
    let table = $(".show-data");
    let buttons = $(".button-cell");
    table.empty();
    buttons.empty();
}

 function wipeForm(){
     let diff = $("#diff").get(0);
     let form = $("#form").get(0);
     diff.reset();
     form.reset();
 }

function sendDataDIY(){
    let dataDifficulty =  $("input:radio[name ='Difficulty']:checked").val();
    let dataMaterials = $(".input-materials").val();
    let dataSteps = $(".input-steps").val();

    let information = {
        Difficulty: dataDifficulty,
        Materials: dataMaterials,
        Steps: dataSteps
    };
    let info = {
        group: 114,
        thing: information
    };
    if (information){
        $.ajax({
            "method": 'POST',
            "dataType": 'JSON',
            "data": JSON.stringify(info),
            "contentType": "application/json; charset=utf-8",
            "url": "https://web-unicen.herokuapp.com/api/thing/",
            "success": function(resultData){
                $(".alert").removeClass("alert-danger");
                $(".alert").addClass("alert-success");
                $(".alert").html("Proyecto guardado!");
                console.log(resultData);
                getDataDIY();
            },
            "error":function(jqxml, status, errorThrown){
            console.log(errorThrown);
            $(".alert").addClass("alert-danger");
            $(".alert").html("Error, por favor intente nuevamente");
            }
        });
    }
    else {
        $(".alert").addClass("alert-danger");
        $(".alert").html("Todos los campos deben ser completados!");
    }
    for (let i = 0; i < 3; i++) {
    let img = document.createElement("img");
    img.src = "images/charmander-loading.gif";
    img.class = "img-responsive";
    $(".show-data").append(img);
    }
}
