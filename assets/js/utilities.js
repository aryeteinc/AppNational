$("#register").on('click', function (event) {
    event.preventDefault();
    var getUrl = window.location;
    var baseurl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/AppNational/index.php";
    //vamos a capturar las variables de la pagina
    //y luego las vamos a enviar pir ajax hacia el controlador
    //Y este se va a encargar de procesar los datos

    //Primer paso recolectar los datos

    var SchoolName = $("#schoolname").text().trim();
    var SchoolAddress = $("#schooladdress").text().trim();
    var Coach = $("#coach").text().trim();
    var CellPhone = $("#cellphone").text().trim();
    var SchoolCity = $("#schoolcity").text().trim();
    var SchoolState = $("#schoolstate").text().trim();
    var SchoolZip = $("#schoolzip").text().trim();
    var Email = $("#email").text().trim();
    var Location = $("#location").text().trim();
    var DateLocation = $("#datelocation").text().trim();
    var FirstDay = $("#firstday").text().trim();
    var SecondDay = $("#secondday").text().trim();
    var EstimatedDay = $("#estimatedday").text().trim();



    console.log(
        SchoolName + "\n" +
        SchoolAddress + "\n" +
        Coach + "\n" +
        CellPhone + "\n" +
        SchoolCity + "\n" +
        SchoolState + "\n" +
        SchoolZip + "\n" +
        Email + "\n" +
        Location + "\n" +
        DateLocation + "\n" +
        FirstDay + "\n" +
        SecondDay + "\n" +
        EstimatedDay
    );

    //Definimos nuestra estructura ajax para enviar 
    //nuestros datos a un metodo de nuestro controlador


    var TableData, DataFull;
    TableData = storeTblValues()
    //ableData = $.toJSON(TableData);


    function storeTblValues() {
        var TableData = new Array();
        $('#tablecrew tr').each(function (row, tr) {
            TableData[row] = {
                "name": $(tr).find('td:eq(0)').text(),
                "student": $(tr).find('td:eq(1)').text(),
                "gender": $(tr).find('td:eq(2)').text()

            }
        });


        TableData.shift(); // first row will be empty - so remove
        return TableData;
    }


    DataFull = [{
        "Crew": TableData,
        "SchoolName": SchoolName,
        "SchoolAddress": SchoolAddress,
        "Coach": Coach,
        "CellPhone": CellPhone,
        "SchoolCity": SchoolCity,
        "SchoolState": SchoolState,
        "SchoolZip": SchoolZip,
        "Email": Email,
        "Location": Location,
        "DateLocation": DateLocation,
        "FirstDay": FirstDay,
        "SecondDay": SecondDay,
        "EstimatedDay": EstimatedDay,
    }];
    //console.log(TableDataFull);


    $.ajax({
        url: baseurl + "/main/getDatosAjax",
        type: "POST",
        data: {
            "Datos": JSON.stringify(DataFull)
        },
        success: function (result) {
            //location.href = baseurl+"/main/success";
        }
    });
});