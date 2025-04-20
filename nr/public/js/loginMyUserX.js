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


      if (response.ok) {
        // location.href = `http://localhost:8000/`
      }
      
      const data = await response.json();
      console.log(data);
      
    // senhaSegura123A@
    
    } catch (error) {
      console.error('Erro:', error.message);
      alert('Usuário ou senha inválidos!');
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
