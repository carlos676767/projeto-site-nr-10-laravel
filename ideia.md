

## ⚡ **Sistema de Gestão de Riscos Elétricos e Treinamentos NR-10**

### 🧠 Descrição geral:
Um sistema web completo para **controle de treinamentos obrigatórios (NR-10)**, **gestão de EPIs**, **registro de intervenções elétricas**, **checklists de segurança**, e **monitoramento de conformidade dos profissionais**.

---

### 🧩 Funcionalidades:
#### 1. **Cadastro de profissionais**
- Nome, função, matrícula, setor, etc.
- Data de vencimento do curso NR-10.
- Upload de certificados digitalizados (PDF/JPG).

#### 2. **Controle de treinamentos**
- Histórico de cursos (NR-10 Básico, NR-10 SEP, NR-35 etc).
- Alertas automáticos (via JS) quando um treinamento estiver prestes a vencer.
- Geração de relatório de pendências (PDF com PHP).
- criar um painel para o usuario consultar se a nr dele esta valida com o cpf

#### 3. **Registro de atividades elétricas**
- Formulário com detalhes da intervenção.
- Checklist de segurança obrigatório (tipo "marque se usou EPI", se desligou o circuito etc).
- Assinatura digital ou campo para responsável.

#### 4. **Painel de conformidade**
- Dashboard (com JS/Chart.js) mostrando:
  - % de colaboradores com NR-10 em dia.
  - Ocorrências registradas por mês.
  - Status dos treinamentos.
  - Quantidade de intervenções elétricas realizadas.

#### 5. **Login por níveis de acesso**
- Admin (RH/Engenharia).
- Técnico (só pode preencher e visualizar seus próprios dados).

---

### 🧰 Tecnologias sugeridas:
- **Backend**: PHP (pode usar Slim ou Laravel, se quiser ir mais longe).
- **Frontend**: HTML5, CSS3 (pode aplicar Clowbit/Glassmorphism), JavaScript.
- **Banco de dados**: MySQL ou SQLite.
- **PDF**: PDFKit ou dompdf para gerar relatórios.
- **Chart.js**: para os gráficos de conformidade.


Se quiser, posso te ajudar a montar a estrutura de pastas, banco de dados, ou até te guiar passo a passo no desenvolvimento.

Quer começar por qual parte? 😄