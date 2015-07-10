window.onload = function(e)
                {
                    $("#wrapper").toggleClass("toggled");
                 }

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});


function verConvocatorias()
{
	$.ajax
            ({
                type: "POST",
                url: "verConvocatorias",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");
                                $("#page-content-wrapper").html(jso);                                 
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function verConvInfor()
{
    $.ajax
            ({
                type: "POST",
                url: "verConvInfo",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");
                                $("#page-content-wrapper").html(jso);
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function verMisConv()
{
    $.ajax
            ({
                type: "POST",
                url: "verMisConv",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");
                                $("#page-content-wrapper").html(jso);
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function verMiHistorico()
{
    $.ajax
            ({
                type: "POST",
                url: "verMiHistorico",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");                                
                                $("#page-content-wrapper").html(jso);
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function verSeguimiento()
{
    $.ajax
            ({
                type: "POST",
                url: "verSeguimiento",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");
                                $("#page-content-wrapper").html(jso);
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function verDetalleCov()
{
    $.ajax
            ({
                type: "POST",
                url: "verDetalleConv",
                success: function(jso)
                        {
                            try
                            {     
                                $("#page-content-wrapper").html(jso);
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function getTipos()
{    
    var Reporte = document.getElementById("Reporte");
    var idReporte = Reporte.options[Reporte.selectedIndex].id;
    $.ajax
            ({
                type: "POST",
                url: "getTipos",
                data: {'id': idReporte },
                success: function(jso)
                        {
                            try
                            {   
                                //alert(jso);                                                        
                                //$("#page-content-wrapper").html(jso);
                                var list = document.getElementById("FiltroReportes");  
                                while (list.hasChildNodes())
                                {   
                                    list.removeChild(list.firstChild);
                                }
                                contenido = jso;
                                list.innerHTML = contenido;
                                if (idReporte == 1 || idReporte == 6) 
                                {
                                    var list = document.getElementById("area_report");
                                    var contenido = list.innerHTML;  
                                    while (list.hasChildNodes())
                                    {   
                                        list.removeChild(list.firstChild);
                                    }
                                    list.innerHTML = contenido;
                                    /*var obj = document.createElement("object");
                                    obj.setAttribute("id", "objectPDF");
                                    var base_url = window.location.origin;
                                    obj.setAttribute("data", base_url+"/recursos/pdf/temporal.pdf?#zoom=80");
                                    obj.setAttribute("type", "application/pdf");
                                    obj.setAttribute("width", "100%");
                                    obj.setAttribute("height", "1000");
                                    obj.setAttribute("zoom", "100%");
                                    list.appendChild(obj);   */
                                };
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });

}

function verReportContenido()
{
    var Reporte = document.getElementById("Reporte");
    var idReporte = Reporte.options[Reporte.selectedIndex].id;
    var tipoReporte = document.getElementById("tipoReporte");
    var tipo = tipoReporte.options[tipoReporte.selectedIndex].text;
    $.ajax
            ({
                type: "POST",
                url: "verReporteContenido",
                data: {'idReporte':idReporte, 'tipo': tipo},
                success: function(jso)
                        {
                            try
                            {           
                                //alert(jso);                                                 
                                //$("#page-content-wrapper").html(jso);
                                var list = document.getElementById("area_report");
                                var contenido = list.innerHTML;  
                                while (list.hasChildNodes())
                                {   
                                    list.removeChild(list.firstChild);
                                }   
                                list.innerHTML = contenido;
                                /*barraCarga();
                                var obj = document.createElement("object");
                                obj.setAttribute("id", "objectPDF");
                                var base_url = window.location.origin;
                                obj.setAttribute("data", base_url+"/recursos/pdf/temporal.pdf?#zoom=80");
                                obj.setAttribute("type", "application/pdf");
                                obj.setAttribute("width", "100%");
                                obj.setAttribute("height", "1000");
                                obj.setAttribute("zoom", "100%");
                                list.appendChild(obj);*/

                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function barraCarga()
{

    var progress = setInterval(function() 
    {
        var $bar = $('.bar');

        if ($bar.width()==400) {
            clearInterval(progress);
            $('.progress').removeClass('active');
        } else {
            $bar.width($bar.width()+40);
        }
        $bar.text($bar.width()/4 + "%");
    }, 800);

}