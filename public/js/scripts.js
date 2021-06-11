$(function(){
    $('.dropdown').hover(function(){
        $(this).addClass('open');
    }, function(){
        $(this).removeClass('open');
    });

    $.datepicker.setDefaults({
        dateFormat: 'dd-mm-yy',
        nextText: 'Sig',
        prevText: 'Ant',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
        dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab']
    });

    $("#last_contact, #next_contact, #sale_date, #delivery_date, #filter_since, #filter_until").datepicker({changeMonth: true, changeYear: true});
});

function onlyI(evt){evt = (evt) ? evt : event;var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));var respuesta = true;if (charCode > 31 && (charCode < 48 || charCode > 57)){respuesta = false;}return respuesta;}
function onlyC(evt){evt = (evt) ? evt : event;var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));var respuesta = true;if (!(charCode < 48 || charCode > 57)){respuesta = false;}return respuesta;}
function onlyD(evt){evt = (evt) ? evt : event;var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));var respuesta = true;if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=46){respuesta = false;}return respuesta;}
function exoPopuu(url,params) {window.open(url,'exo_window',params);}
function exoCheckboxMon(form,checked){for (i=0; i<form.length; i++){if ((form.elements[i].type == "checkbox")) {form.elements[i].checked = checked;}}}
