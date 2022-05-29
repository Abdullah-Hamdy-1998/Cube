$(document).ready(function()
{
    if ($("input:checkbox:checked").length > 1)
    {
        $("#checkerButton").show();
    }
    else
    {
        $("#checkerButton").hide();
    }

    $("input:checkbox").on("change",function(){

        if($("input:checkbox:checked").length > 1){
        $("#checkerButton").show();
        }else{
        $("#checkerButton").hide();
        }
    });

    })
