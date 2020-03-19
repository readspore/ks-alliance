function rs_SubmitFormHandler(e, type = "default"){
  var form = e.target;
  e.preventDefault();
  if (type == "with-dd-1" && document.querySelector("#service-form-inp").value == "")
  {
    // document.querySelector("#service-form-inp").closest(".select__wrap").classList.add("inp-error");
    return;
  }  
  // document.querySelector("#service-form-inp").closest(".select__wrap").classList.remove("inp-error");
  var formData = new FormData(form);
  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', form.getAttribute('action'), true);
  xhttp.send(formData);
  xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4) {
          if (xhttp.status == 200) {
              response = JSON.parse(xhttp.response );
              if(response.success){
                  alert("Ваша заявка успешно отправлена");
                  $('input[type="text"]').each((i, elem)=>{elem.value = '';});
                  $('textarea').each((i, elem)=>{elem.value = '';});
              } else {
                  alert("Что-то пошло не так, попробуйте написать нам.");
              }
          } else {
              alert("Что-то пошло не так, попробуйте написать нам.");
          }
      }
  }
}