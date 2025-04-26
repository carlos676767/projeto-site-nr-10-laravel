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
    
    if (response.err) {
    return  RedirectHandler.redirectPageNext(`http://localhost:8000/login`);
    }
    
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


class ModalFun {
  static modal = document.getElementById('modal');

  static showFunBBtnHome() {
    const funcionario = document.getElementById('funcionario');
    funcionario.addEventListener('click', () => {
      this.modal.classList.remove('hidden');
    });
  }

  static closerModal() {
    const btn = document.getElementById('tnCloser');
    btn.addEventListener('click', () => {
      this.modal.classList.add('hidden');
    });
  }
}


ModalFun.showFunBBtnHome()
ModalFun.closerModal()

const ctx = document.getElementById('graficoGenero').getContext('2d');

const graficoGenero = new Chart(ctx, {
  type: 'doughnut', 
  data: {
    labels: ['Homens', 'Mulheres', 'Outros'],
    datasets: [{
      label: 'Total por Gênero',
      data: [12, 18, 5], 
      backgroundColor: ['#3B82F6', '#EC4899', '#FF6347'], 
      borderColor: ['#2563EB', '#DB2777', '#FF4500'], 
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'bottom'
      },
      tooltip: {
        callbacks: {
          label: function(context) {
            return `${context.label}: ${context.parsed} pessoas`;
          }
        }
      }
    }
  }
});


class ObjectValuesPerson {
  static get getValues() {
    const nomeFuncionario = document.getElementById('nomeFuncionario').value;
    const cpfFuncionario = document.getElementById('cpfFuncionario').value;
    const setorFuncionario = document.getElementById('setorFuncionario').value;
    const funcaoFuncionario = document.getElementById('funcaoFuncionario').value;
    const sexo = document.getElementById('sexo').value;
    
    const funcionario = {
      nomeFuncionario: nomeFuncionario,
      cpfFuncionario: cpfFuncionario,
      setorFuncionario: setorFuncionario,
      funcaoFuncionario: funcaoFuncionario,
      sexo: sexo
    };
    

    return JSON.stringify(funcionario);
  }
}


class SendFunRequest {
 static async sendFun(){
  try {
    alert(ObjectValuesPerson.getValues)
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    // const response = await fetch('', {
    //   method: 'POST',
    //   headers: {
    //     'Content-Type': 'application/json' ,
    //     'X-CSRF-TOKEN': csrfToken 
    //   },
    //   body: ObjectValuesPerson.getValues
    // });

    // cadastrarFuncionario
  } catch (error) {
    
  }
 }
}



class BtnInsertUser {
 static BtnIEventInsert(){
  const cadastrarFuncionario = document.getElementById(`cadastrarFuncionario`)

  cadastrarFuncionario.addEventListener(`click`, () => {
    SendFunRequest.sendFun()
  })
 }
}

BtnInsertUser.BtnIEventInsert()