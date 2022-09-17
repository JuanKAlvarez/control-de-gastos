function ch(urlHijo) {
    console.log("Hola");
    $.ajax({
        type: "POST",
        url: urlHijo,
        data:{},
        success: function(datosP){
            $('#qa').html(datosP);
        }
    });
}