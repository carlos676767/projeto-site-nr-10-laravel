class GetTk {
  static get tkGet() {
    return GetLocalStorage.getStorage(`tkUser`);
  }
}

class GetSccs {
  static get getSrcs() {
    return document
      .querySelector('meta[name="csrf-token"]')
      .getAttribute("content");
  }
}

class TokenExist extends GetTk {
  static existToken() {
    const token = GetTk.tkGet;
    if (!token) {
      RedirectHandler.redirectPageNext(`http://127.0.0.1:8000/login`);
    }
  }
}


class HttpUser extends GetSccs {
  static async getUser() {
    const data = await fetch(`http://localhost:8000/getUserTk`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": GetSccs.getSrcs,
      },
      body: JSON.stringify({ token:  GetTk.tkGet }),
    });

    const response = await data.json();
    
    return response.usuario[0];
  }
}

class ViewUser extends HttpUser {
  static async viewUser(){
    const textRole = document.getElementById("textRole")
    const {usuario, role, id} = await HttpUser.getUser()
    textRole.innerHTML = `Bem-vindo, ${usuario} — <span class="font-semibold">${role}</span>`
  }
}

//estagiario pode ver a home
//
class Roles {
 static permsRoles(role){
  }
}



class Redriect404 {
 static Redriect404Page(){
  const btnSvg = document.getElementById(`btnSvg`)
  console.log(btnSvg);
  

  btnSvg.addEventListener(`click`, () => {
    RedirectHandler.redirectPageNext(`http://localhost:8000/404Page`);
  })
 }
}

addEventListener(`DOMContentLoaded`, () => { 
  TokenExist.existToken()
  ViewUser.viewUser()
  Redriect404.Redriect404Page()
});