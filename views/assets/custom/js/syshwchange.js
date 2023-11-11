    // Get a reference to the "Check All" checkbox and all checkboxes with the class "my-checkbox"
    const checkAll = document.getElementById('selectall');
    const checkboxes = document.querySelectorAll('.selectall');

    // Add an event listener to the "Check All" checkbox
    checkAll.addEventListener('change', function() {
        // Loop through all checkboxes with the class "my-checkbox" and set their checked property to match the "Check All" checkbox
        checkboxes.forEach(checkbox => {
            checkbox.checked = checkAll.checked;
        });
    });


    //add new DIMMs




$(".checkSlotsDIMMsAvailables").click(function() {
    var idsystembyDIMMs = $(this).attr("idsystembyDIMMs");
    var datos = new FormData();
    datos.append("idsystembyDIMMs", idsystembyDIMMs);

    $.ajax({

        url: "ajax/ajax-slotsByDIMMAvailabes.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            $('#mHWCAddDIMM').modal('show');



            var divAgreg = document.getElementById('divAgregarDIMMInputs');
            for(i=response; i<33; i++) {   
        divAgreg.innerHTML = divAgreg.innerHTML + '<span class="input-group-text" style="width:80px;">DIMM ' + i + '</span> <input id="dimminput'+i+'" class="form-control input-lg" style="width:30%;" name="updateMasDIMMs[]" type="text" oninput="getValue(this)"/><br /><div class="valid-feedback">Valid.</div><div class="invalid-feedback">Please fill out this field.</div>';
        
    }
    
}
    });
});

$(".clearDivNewDIMMs").click(function () {

    var divAgreg = document.getElementById('divAgregarDIMMInputs');
    divAgreg.innerHTML="";

})


function getValue(element){
      var data = new FormData();
      data.append("validargdcdimmInfo", element.value);
  
      $.ajax({
        url: "ajax/dimms.ajax.php",
        method: "POST",
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        dataType: "JSON",
        success: function(response) {
console.log(response);
if (response["status"] == "In Use") {
        Swal.fire({
            title: 'Error',
            text: 'DIMM ' + response["gdc"] + ' is already in use in ' + response["location"] + ' system!'            
          });
    element.value = "";
  }
if ((element.value.length > 8) && response == false) {
    Swal.fire({
        title: 'Error',
        text: 'DIMM ' + element.value + ' is not registered!'            
      });
element.value = "";
}
      }
  });
   
  }




