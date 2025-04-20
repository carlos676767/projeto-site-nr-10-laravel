class ObjectValues {
  static objectValues() {
    const usuario = document.getElementById('usuario');
    const password = document.getElementById('password');
    return JSON.stringify({
      usuario: usuario.value,
      password: password.value
    });
  }
}


function alertSucess() {
  const alerta = document.getElementById(`alertSucess`)

  
  alerta.classList.remove(`hidden`)


  setTimeout(() => {
    alerta.classList.add(`hidden`)
  }, 2000);
}


function AlertErr(msg) {
  const alertErr = document.getElementById(`alertErr`)

  
  alertErr.classList.remove(`hidden`)

  const textMsg = document.getElementById(`textMsg`)
  textMsg.innerText = msg
  setTimeout(() => {
    alertErr.classList.add(`hidden`)
  }, 2000);
}

class LoginHttp {
  static async http() {
    try {
      const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      console.log(csrfToken);
      
      const response = await fetch('http://localhost:8000/loginUser', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json' ,
          'X-CSRF-TOKEN': csrfToken 
        },
        body: ObjectValues.objectValues()
      });

      const data = await response.json();
      
      if (response.ok) {
        alertSucess()
        LocalStorageSet.localStorageSetString(`tkUser`,data.token)
        return RedirectHandler.redictPageInTimeDefined(`http://localhost:8000/`, 5000)
      }
      
      const {error} = data
      AlertErr(error)

      
    
    } catch (error) {
      AlertErr(error)
    }
  }
}

class Btn {
  static btn() {
    const button = document.querySelector('button');

    if (button) {
      button.addEventListener('click', (e) => {
        e.preventDefault(); 
        LoginHttp.http();
      });
    }
  }
}


document.addEventListener('DOMContentLoaded', () => {
  Btn.btn();
});



