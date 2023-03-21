var Time = new Date();
var tempID;
function LanzarConfetiEsquinas(){

    var canvas = document.getElementById('my-canvas');
    canvas.confetti = canvas.confetti || confetti.create(canvas, { resize: true });

    var duration = 15 * 1000;
    var animationEnd = Date.now() + duration;
    var defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

    function randomInRange(min, max) {
    return Math.random() * (max - min) + min;
    }

    var interval = setInterval(function() {
    var timeLeft = animationEnd - Date.now();

    if (timeLeft <= 0) {
        return clearInterval(interval);
    }

    var particleCount = 50 * (timeLeft / duration);
    // Aleatorio
    canvas.confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 } }));
    canvas.confetti(Object.assign({}, defaults, { particleCount, origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 } }));
    }, 250);

} 

function LanzarConfetiCentro(){
    var count = 200;
var defaults = {
  origin: { y: 0.7 }
};

function fire(particleRatio, opts) {
    confetti(Object.assign({}, defaults, opts, {
        particleCount: Math.floor(count * particleRatio)
    }));
    }

    fire(0.25, {
    spread: 26,
    startVelocity: 55,
    });
    fire(0.2, {
    spread: 60,
    });
    fire(0.35, {
    spread: 100,
    decay: 0.91,
    scalar: 0.8
    });
    fire(0.1, {
    spread: 120,
    startVelocity: 25,
    decay: 0.92,
    scalar: 1.2
    });
    fire(0.1, {
    spread: 120,
    startVelocity: 45,
    });
}

LanzarConfetiCentro();
LanzarConfetiEsquinas();

function padleft(value, length){
 
    return (value.toString().length < length) ? padleft("0" + value, length) : 
    value;
}

function CalcularDias(fechaNAC){
    var oldfecha = new Date();
    var mes = oldfecha.getMonth() + 1;
    var dia = oldfecha.getDate();
    var FechaActual = oldfecha.getFullYear()+"-"+padleft(mes,2)+"-"+padleft(dia,2);
    var fecha1 = FechaActual;
    //Carcular los dias
    var Dif = Date.parse(fechaNAC) - Date.parse(FechaActual);
    var dias = Math.floor(Dif / (1000 * 60 * 60 * 24));
    var horas = padleft(23 - oldfecha.getHours(),2);
    var minutos = padleft(59 - oldfecha.getMinutes(),2);
    var segundos = padleft(60 - oldfecha.getSeconds()-1,2);
    var TiempoTranscurrido;
   

    if((dias==0 && horas==00 & minutos==00 & segundos==00) || (horas<0) ){
        clearInterval(tempID);
        dias=00;
        horas=00;
        minutos=00;
        segundos=00;
        TiempoTranscurrido = "Faltan "+ padleft(dias,2) + " dia " +padleft(horas,2)+ ":" + 
        padleft(minutos,2) + ":" + padleft(segundos,2);
    }else{
        if(dias > 1){
            TiempoTranscurrido = "Faltan "+ dias + " dias " +horas+ ":" + minutos + ":" + segundos;
        }else{
            TiempoTranscurrido = "Faltan "+ dias + " dia " +horas+ ":" + minutos + ":" + segundos;
        }
    }
   
    return TiempoTranscurrido;
}

function DateActual(){
    var DateTime = new Date();
    var diaSemana = ['Domingo','Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
    var Meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    return diaSemana[DateTime.getDay()] + " " + DateTime.getDate() + " de " + Meses[DateTime.getMonth()] +
    " del " + DateTime.getFullYear();
}

function Cronometro(){
    Time = new Date();
    var transcurrido = CalcularDias($('#fecha1').val());
    $('.p_Crono').html(transcurrido);
    $('.dateNow').html(DateActual());

    
    setInterval(function(){
        Time = new Date();
        $('.div_fotos_inicio').load('top_empleados_ani.php');
    }, (86400000 - (Time.getHours() * 60 * 60 * 1000)));

}

function SetCriterio(name){

    //Limpiar campos
    $('#lista_empleado_criterio').html("");
    $('#Res_sel_criterio input[type="hidden"]')[0].value = "";
    $('#txtMes').val("");
    //Ocultar y Mostrar los campos de acuerdo al criterio seleccionado.
    switch(name){
        case 'Tarjeta':
            $('#txtNombre').attr('type','hidden');
            $('#txtMes').attr('type','hidden');

            $('#lblCriterio').text('Tarjeta:');
            $('#txtTarjeta').attr('type','text');
        break;

        case 'Nombre':
            $('#txtTarjeta').attr('type','hidden');
            $('#txtMes').attr('type','hidden');
            
            $('#lblCriterio').text('Nombre:');
            $('#txtNombre').attr('type','text');
            break;

        case 'Fecha Nacimiento':
            $('#txtNombre').attr('type','hidden');
            $('#txtTarjeta').attr('type','hidden');

            $('#lblCriterio').text('Fecha Nacimiento:');
            $('#txtMes').attr('type','date');
        break;
    }


}

function SetErrors(elementID){
    switch(elementID.id){
        case "txtTarjeta":
            if(elementID.value==""){
                return $('#lista_empleado_criterio').html("<span id='msg_error'>" +
                "El campo [ Tarjeta ] no puede estar vacio</span>");
            }
            if(elementID.value.length < 6){
                return $('#lista_empleado_criterio').html("<span id='msg_error'>" +
                "El campo [ Tarjeta ] debe tener 6 digitos</span>");
            }

            if(!Math.floor(elementID.value)){
                return $('#lista_empleado_criterio').html("<span id='msg_error'>" +
                "El campo [ Tarjeta ] solo permite digitos</span>");
            }
        break;

        case "txtNombre":
            if(elementID.value==""){
                return $('#lista_empleado_criterio').html("<span id='msg_error'>" +
                "El campo [ Nombre ] no puede estar vacio</span>");
            }

        break;

        case "txtMes":
            if(elementID.value==""){
                return $('#lista_empleado_criterio').html("<span id='msg_error'>" +
                "Debe indicar una fecha en el campo [ Fecha Nacimiento ]</span>");
            }
        break;

    }
}

$('#lstcriterios').click(function(event){
    var Select = event.target.innerHTML;
    SetCriterio(Select);
});

function GetEmpleadoCriterio(){
    var criterio = $('#Res_sel_criterio input[type="text"],#Res_sel_criterio input[type="date"]')[0];
    //var prueba = criterio[0].type;
    //Validacion de Campos
    var msg_error = SetErrors(criterio);

    if(msg_error==undefined){
        if(criterio.id=='txtTarjeta' && criterio.type=='text'){
            $.ajax({
                url : 'busqueda_empleado_criterio.php',
                type: 'POST',
                data: {tarjeta:criterio.value},
                success: function(result){
                    $('#lista_empleado_criterio').html(result);
                }   
            });
        }
        else if(criterio.id=='txtNombre' && criterio.type=='text'){
            $.ajax({
                url : 'busqueda_empleado_criterio.php',
                type: 'POST',
                data: {nombre:criterio.value},
                success: function(result){
                    $('#lista_empleado_criterio').html(result);
                }   
            });
        }
        else if(criterio.id=='txtMes' && criterio.type=='date'){
            $.ajax({
                url : 'busqueda_empleado_criterio.php',
                type: 'POST',
                data: {mes:criterio.value},
                success: function(result){
                    $('#lista_empleado_criterio').html(result);
                }   
            });
        }
        
    } 

}

$('#bthBuscar').click(function(){
    GetEmpleadoCriterio();
});

$("#txtNombre").keypress(function(e){
    var code = (e.keyCode ? e.keyCode : e.which);
        if(code > 64 && code < 123 || code==32){
            return true;
        }else if(code==13){
            GetEmpleadoCriterio();
        }
    return false;         
});

$("#txtTarjeta, #txtMes").keypress(function(e){
    var code = (e.keyCode ? e.keyCode : e.which);
        if(code > 47 && code < 58){
            return true;
        }else if(code==13){
            GetEmpleadoCriterio();
        }
    return false;         
});

function set_vista(event,fila){
    $('.div_vista').slideUp(600, function(){
        $('.div_vista #foto_empleado').fadeOut(800);
        $('#tarjeta_result').fadeOut(800);
        $('#nombre_result').fadeOut(800);
    });

    $('.div_vista').slideDown(600, function(){
        $('#tarjeta_result').fadeIn(800);
        $('#nombre_result').fadeIn(800);
        $('.div_vista #foto_empleado').fadeIn(800);
        $('#tarjeta_result').text(event.path[2].cells[1].innerText);
        $('#nombre_result').text(event.path[2].cells[2].innerText);
        $('.div_vista #foto_empleado').attr('src',event.path[2].cells[6].innerText);
    });  
}

$('#boton_cambiar').click(function(){
    $('#file_foto').slideToggle();
    $('#bth_enviar').fadeToggle();
});

$("#bth_enviar").click(function(){
    var file_foto = $('#file_foto')[0].files[0];
    if(file_foto!=undefined){
        var progreso = $('.progress_bar');
        var file_data = $('#file_foto').prop('files')[0];
        var tarjeta = $('#tarjeta_result').text();
        var Newpath = "http://989j4v1:81/AutoCalendar/fotos/" + file_foto.name;
        var form_data = new FormData();

        form_data.append('file', file_data);
        form_data.append('size', file_data);
        form_data.append('file_foto', file_foto.name);
        form_data.append('tarjeta', tarjeta);
        $('.progress').show();
        $.ajax({
            xhr:function(){
                let xhr = new window.XMLHttpRequest();

                xhr.upload.addEventListener('progress', function(e){
                    if(e.lengthComputable){
                        let percentComplete = Math.floor((e.loaded / e.total) * 100);

                        progreso.css('height', percentComplete+'%');
                        progreso.html(percentComplete+'%');
                    }
                },false);

                return xhr;

            },


            url : 'upload.php',
            type : 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data : form_data,
            success: function(res){
                if(res!=""){
                    $('#foto_empleado').prop('src',Newpath);
                    $('#MyModal').modal('show');
                    $('#contenido_emergente h5')[0].innerText = res;
                    $('#file_foto').val("");
                    $('#file_foto').slideToggle();
                    $('#bth_enviar').fadeToggle();

                    progreso.css('height', 0+'%');
                    progreso.html(0+'%');
                    $('.progress').hide();
                }else{
                    $('#contenido_emergente h5')[0].innerText = "El archivo Supera los 8 MegasJS";
                    $('#MyModal').modal('show');
                }
            }
        });
    }else{
        $('#MyModal').modal('show');
        $('#contenido_emergente h5')[0].innerText = "Debe seleccionar una imagen para continuar.";
    }
});

$("#btn_insertar_empleado").click(function(){

    var tarjeta = $('#txtTarjeta').val();
    var nombre = $('#txtNombre').val();
    var fechaNacimiento = $('#txtFechaNacimiento').val();
    var supervisor = $('#lstsupervisor option:selected').text();
    var segmento = $('#lstsegmento option:selected').text();
    var foto = $('#txtFile_Foto').val();
    var idmensaje = 1;

    $.ajax({
        url : 'insertar_empleado.php',
        type : 'POST',
        data: {tarjeta:tarjeta, nombre:nombre, fechaNacimiento:fechaNacimiento,
             supervisor:supervisor, segmento:segmento, foto:foto, idmensaje:idmensaje},
        success: function(result){
            if(result=="Debe indicar una tarjeta de empleado"){
                $('#contenido_emergente h5').css('color', 'red');
            }else{
                $('#contenido_emergente h5').css('color', 'green');
            }
            $('#contenido_emergente h5')[0].innerHTML = result;
            $('#MyModal_Add').modal('show');
            //Limpiar campos
            ClearFormEmpleados();
        }   

    });
});

$('#btn_clear').click(function(){
    ClearFormEmpleados();
});

function set_edit(event,ID,count){
    $('#contenido_emergente_EDIT h5')[0].innerHTML = "MODO EDICION:" ;
    $('#contenido_emergente_EDIT #Ident_Mensaje')[0].innerHTML = ID;
    $('#contenido_emergente_EDIT #txtMensaje').val($('.result_tarjeta')[count - 1].innerText);
    $('#contenido_emergente_EDIT #txtAsignado').val($('.result_Nombre')[count - 1].innerText);
    
    $('#MyModal_EDIT').modal('show');
}

$('#boton_save_edit').click(function(){
    var id = $('#contenido_emergente_EDIT #Ident_Mensaje')[0].innerHTML;
    var mensaje = $('#txtMensaje').val();

    $.ajax({
        url : 'update_mensaje.php',
        type : 'POST',
        data : {id:id, mensaje:mensaje},
        success: function(result){
            $('#contenido_emergente h5').css('color', 'green');
            $('#contenido_emergente h5')[0].innerHTML = result;
            $('#MyModal_Add #title_MOD')[0].innerHTML = "Actualizar registro";
            $('#MyModal_EDIT').modal('hide');
            $('#MyModal_Add').modal('show');
        }
    });
});

function ClearFormEmpleados(){
    $('#txtTarjeta').val("");
    $('#txtNombre').val("");
    $('#txtFechaNacimiento').val("");
    $('#file_foto').val("");
}

$('#boton_search').click(function(){
    function Get_empleado(){
        var tarjeta = $('#txtFind').val();
    
    
        $.ajax({
            url: 'get_Empleados.php',
            type: 'POST',
            dataType: 'json',
            data: {tarjeta:tarjeta},
            success: function(result){
                $('#txtFind_result')[0].innerText = "Encontrado: " + result[0];
                $('#foto_empleado')[0].src = result[1];
            }
    
        });
    }

    Get_empleado();
    
});

$('#lstmensajes').change(function(event){
    var id = event.currentTarget.options[event.currentTarget.options.selectedIndex].innerText;

    $.ajax({
        url : 'Ver_Mensaje.php',
        type : 'POST',
        data : {id:id},
        success:function(resp){

                $('#lblmensajes')[0].innerHTML = resp;
            
            
        }
    });

});

$('#btn_set').click(function(){
    var tarjeta = $('#txtFind').val();
    var IdMensaje = $('#lstmensajes option:selected').text();

    if(tarjeta!="" && IdMensaje!=""){
        $.ajax({
            url : 'Set_msg_empleado.php',
            type : 'POST',
            data : {tarjeta:tarjeta, idmensaje:IdMensaje},
            success:function(resp){
                $('#txtFind').val("");
                $('#contenido_emergente h5').css('color', 'green');
                $('#contenido_emergente h5')[1].innerHTML = resp;
                $('#MyModal_Mensaje #title_MOD')[0].innerHTML = "Mensaje asignado";
                $('#MyModal_Mensaje').modal('show');
            }
        });
    }
});

$('#btn_create').click(function(){
    $('#MyModal_Mensaje_Crear #title_crear').css('fontWeight', 'bold');
    $('#MyModal_Mensaje_Crear').modal('show');
});

$('#boton_save_mensaje').click(function(){
    var mensaje_nuevo = $('#txtNewMsg').val();

    $.ajax({
        url : 'save_mensaje.php',
        type : 'post',
        data : {mensaje:mensaje_nuevo},
        success:function(resp){
            if(resp!=0){
                $('#msg_status').css('color', 'green')
                $('#msg_status').text("Se ha insertado el nuevo mensaje");
                $('#txtNewMsg').val('');
                $('#msg_status').fadeToggle(2000);
            }else{
                $('#msg_status').css('color', 'red')
                $('#msg_status').text("No fue posible insertar el mensaje");
                $('#txtNewMsg').val('');
                $('#msg_status').fadeToggle(2000);
            }

            $('#msg_status').fadeOut(2000);
        }
    });
});


tempID = setInterval('Cronometro()', 1000);




