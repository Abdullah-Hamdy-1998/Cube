$(function() {
    var Dropdown1 = function(dropdown1) {
      var hasdropdown1 = typeof dropdown1 !== typeof undefined && dropdown1;
      $('#dropdown2').prop('disabled', !hasdropdown1).val('');
    }
    $('#dropdown1').on('change', function() {
    });
    
    Dropdown1();
    });

    function validate(){
        var submit = document.getElementById('submit');
        var submi_final = document.getElementById('submi_final');
        var weight = document.getElementById('WSum').value === ""? false: true; 
        var qyantity = document.getElementById('Quantity').value === ""? false: true; 
        
        var filled =(weight && qyantity );
        filled? submit.disabled=false: submit.disabled=true;
        filled? submi_final.disabled=false: submi_final.disabled=true;
    };
    
    $("#dropdown2").change(function() {
        var disabled = ( this.value == "default");
        console.log(disabled);
        $("#submitagain").prop("disabled", disabled);
     $("#WSum").prop("disabled", disabled);
     $("#Quantity").prop("disabled", disabled);
    }).change();   
    