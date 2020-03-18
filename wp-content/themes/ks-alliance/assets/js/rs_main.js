function rs_SubmitFormHandler(e){
  var form = e.target;
  console.log(form);
  e.preventDefault();
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