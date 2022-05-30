$(function() {

    // Generic logic
    var toggleDropdown = function(dropdown1) {
      // hasdropdown1 is a boolean store
      var hasdropdown1 = typeof dropdown1 !== typeof undefined && dropdown1;
    
      // Use boolean to decide whether to disable/enable co-dropdown1 field
      $('#dropdown2').prop('disabled', !hasdropdown1).val('');
    }
    
    // Trigger logic when #dropdown1 is updated
    $('#dropdown1').on('change', function() {
      toggleDropdown($(this).val());
    });
    
    // Trigger logic on DOM ready
    toggleDropdown();
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
    