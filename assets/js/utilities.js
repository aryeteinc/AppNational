// Este archiovo sera el encargado de poder gestionar
// todas las operaciones referente a la plantilla de email
// para las Nacionales

document.querySelector('#register').addEventListener('click', e => {
    e.preventDefault();

    var getUrl = window.location;
    var baseurl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/AppNational/index.php";
    //vamos a capturar las variables de la pagina
    //y luego las vamos a enviar pir ajax hacia el controlador
    //Y este se va a encargar de procesar los datos

    //Primer paso recolectar los datos

    var SchoolName = $("#schoolname").text().trim();
    var SchoolAddress = $("#schooladdress").text().trim();
    var SchoolCity = $("#schoolcity").text().trim();
    var SchoolState = $("#schoolstate").text().trim();
    var SchoolZip = $("#schoolzip").text().trim();
    var Coach = $("#coach").text().trim();
    var Cellphone = $("#cellphone").text().trim();
    var Email = $("#email").text().trim();
    var Location = $("#location").text().trim();
    var dateLocation = $("#datelocation").text().trim();
    var Level = $("#level").text().trim();
    var FirstDay = $("#firstday").text().trim();
    var EstimatedDateFull = $("#estimatedday").text().trim();
    var mp = $("#mp").text().trim();
    let price = $("#price").text().trim();
    let idtransaction = $("#idtransaction").text().trim();

    let TableDataFull = (() => {
        let TableData = new Array();
        //let items = document.querySelector("#items");

        var tableObj = document.getElementById("items");
        var arr = [];
        var allTRs = tableObj.getElementsByClassName("itemsHijos");
        for (var trCounter = 0; trCounter < allTRs.length; trCounter++) {
            var tmpArr = [];
            var allTDsInTR = allTRs[trCounter].getElementsByClassName("valoresHijos");
            for (var tdCounter = 0; tdCounter < allTDsInTR.length; tdCounter++) {
                tmpArr.push(allTDsInTR[tdCounter].innerHTML);
            }
            arr.push(tmpArr);
        }
        arr.forEach((element, row) => {
            TableData[row] = {
                name: element[0],
                kind: element[1],
                gender: element[2],
                //priceTotal: element[3],
            }
        });
        return TableData;
    })();

    let datosemaiplantilla = {
        Crew: TableDataFull,
        SchoolName: SchoolName,
        SchoolAddress: SchoolAddress,
        SchoolCity: SchoolCity,
        SchoolState: SchoolState,
        SchoolZip: SchoolZip,
        Coach: Coach,
        Cellphone: Cellphone,
        Email: Email,
        Location: Location,
        dateLocation: dateLocation,
        Level: Level,
        FirstDay: FirstDay,
        //competition: SecondDay,
        EstimatedDate: EstimatedDateFull,
        mp: mp,
        price: price,
        idtransaction: idtransaction,

    };
    console.log(datosemaiplantilla);
    mandarAjax(datosemaiplantilla, baseurl);

});

let mandarAjax = (DataFull, path) => {
    $.ajax({
        url: path + "/main/getDatosAjax",
        type: "POST",
        data: {
            "Datos": JSON.stringify(DataFull)
        },
        success: function (response) {
            var obj = JSON.parse(response);
            var rp = obj['redireccion pagina']
            // if (result == "Nothing") {
            //     location.href = baseurl + "/main/index";
            // } else {
            var doc = document.open("text/html", "redireccion");
            doc.write(rp);
            doc.close();
            //console.log(rp);

            // }
        }
    });
}

// $("#register").on('click', function (event) {
//     event.preventDefault();
//     var getUrl = window.location;
//     var baseurl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/AppNational/index.php";
//     //vamos a capturar las variables de la pagina
//     //y luego las vamos a enviar pir ajax hacia el controlador
//     //Y este se va a encargar de procesar los datos

//     //Primer paso recolectar los datos

//     var SchoolName = $("#schoolname").text().trim();
//     var SchoolAddress = $("#schooladdress").text().trim();
//     var SchoolCity = $("#schoolcity").text().trim();
//     var SchoolState = $("#schoolstate").text().trim();
//     var SchoolZip = $("#schoolzip").text().trim();
//     var Coach = $("#coach").text().trim();
//     var Cellphone = $("#cellphone").text().trim();
//     var Email = $("#email").text().trim();
//     var Location = $("#location").text().trim();
//     var dateLocation = $("#datelocation").text().trim();
//     var Level = $("#level").text().trim();
//     var FirstDay = $("#firstday").text().trim();
//     var EstimatedDateFull = $("#estimatedday").text().trim();
//     var mp = $("#mp").text().trim();

//     console.log(
//         SchoolName + "\n" +
//         SchoolAddress + "\n" +
//         SchoolCity + "\n" +
//         SchoolState + "\n" +
//         SchoolZip + "\n" +
//         Coach + "\n" +
//         Cellphone + "\n" +
//         Email + "\n" +
//         Location + "\n" +
//         dateLocation + "\n" +
//         Level + "\n" +
//         FirstDay + "\n" +
//         EstimatedDateFull + "\n" +
//         mp + "\n" +
//         storeTblValues()
//     );

//     //Definimos nuestra estructura ajax para enviar 
//     //nuestros datos a un metodo de nuestro controlador


//     var TableData, DataFull;
//     TableData = storeTblValues()
//     //ableData = $.toJSON(TableData);

//     let datosemaiplantilla = {
//         Crew: TableData,
//         SchoolName: SchoolName,
//         SchoolAddress: SchoolAddress,
//         SchoolCity: SchoolCity,
//         SchoolState: SchoolState,
//         SchoolZip: SchoolZip,
//         Coach: Coach,
//         Cellphone: Cellphone,
//         Email: Email,
//         Location: Location,
//         dateLocation: dateLocation,
//         Level: Level,
//         FirstDay: FirstDay,
//         // "SecondDay": SecondDay,
//         EstimatedDate: EstimatedDateFull,
//         mp: mp,
//     };
//     console.log(datosemaiplantilla);

// });

// let TableData = () => {
//     var TableData = new Array();
//     $('#tablecrew tr').each(function (row, tr) {
//         TableData[row] = {
//             name: $(tr).find('td:eq(0)').text(),
//             kind: $(tr).find('td:eq(1)').text(),
//             gender: $(tr).find('td:eq(2)').text()
//         }
//     });

//     TableData.shift(); // first row will be empty - so remove
//     return TableData;
// }