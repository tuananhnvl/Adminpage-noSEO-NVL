
  
 $('#valueTTDKinput').on('input', function() {
    const xs =  $(this).val();
     if(xs !== "") {
        document.querySelectorAll('#valueTTDKshow').forEach(function(el) {
            el.innerHTML = xs;
          });
      
    }else {
        document.querySelectorAll('#valueTTDKshow').forEach(function(el) {
            el.innerHTML = 'Nhập thông tin';
          });
    }
  
   
 });