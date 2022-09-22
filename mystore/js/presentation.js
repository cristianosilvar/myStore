function pag($pag) {
  // voltar ao topo
 window.scrollTo(0, 0);

  // display
  document.getElementById('presentation').style.display = "none"
  document.getElementById('login').style.display = "none"
  document.getElementById('registration').style.display = "none"
          
  document.getElementById($pag).style.display = "block"
}

//fazer com que funcione a partir de 6 caracteres, ou igual ao numero de caracteres do input pass
function passConfirmation() {
  let pass = document.getElementById('password').value
  let passConfirmation = document.getElementById('passwordConfirmation').value

  if (pass.length >= 6) {

    document.getElementsByClassName('alertPass')[0].style.display = "none"

    if (passConfirmation.length >= pass.length) {
  
      if (passConfirmation != "") {
  
        if (pass == passConfirmation) {
  
          document.getElementById('passwordConfirmation').style.borderColor = "#712FFF";
          document.getElementById('passwordConfirmation').style.backgroundColor = "#712FFF10";
    
          document.getElementsByClassName('alertPass')[1].style.display = "none"
    
          document.getElementById('btnRegistrationOff').style.display = "none";
          document.getElementById('btnRegistrationOn').style.display = "block";
          
          console.log("senhas iguais")
  
        } 
        else {
  
          document.getElementById('passwordConfirmation').style.borderColor = "#FF0F00";
          document.getElementById('passwordConfirmation').style.backgroundColor = "#FF7A7A10";
    
          document.getElementsByClassName('alertPass')[1].style.display = "block"
    
          document.getElementById('btnRegistrationOff').style.display = "block";
          document.getElementById('btnRegistrationOn').style.display = "none";
    
          console.log("senhas diferentes")
  
        }
      }
      
      else {
        document.getElementById('passwordConfirmation').style.borderColor = "#FF0F00";
        document.getElementById('passwordConfirmation').style.backgroundColor = "#FF7A7A10";
        
        document.getElementsByClassName('alertPass')[1].style.display = "block"
        
        document.getElementById('btnRegistrationOff').style.display = "block";
        document.getElementById('btnRegistrationOn').style.display = "none";
        
        console.log("senhas diferentes")
      
      }
    }
  }

  else {
    document.getElementsByClassName('alertPass')[0].style.display = "block"
  }
}