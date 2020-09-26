$(document).ready(function(){

    $('#btnConsulta').click(function(){
        // alert("hola");
        $.ajax({
            url:"consulta.php",
            type: "POST",
            dataType:"json",
            success: function(data){
                // CASO 1:
                // console.log(data);
                // console.log(data[0].nombre);
                // console.log(data[0].apellido);
                // console.log(data[0].edad);

                // CASO 2
                // console.log($data);

                // CASO 3
                // var temp = data[1].edad;
                // var suma = temp +12;
                // console.log(suma);

                // CASO 4
                console.log(data);
                var strjson = JSON.stringify(data);
                var jsonparse = JSON.parse(strjson);
                console.log(strjson);
                console.log(jsonparse);

            }
        })
    });
    

});