<?php
session_start();
if (isset($_SESSION['nome'])) {
    header('Location: ./painel.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Cadastro</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="item"><a href="./">Home</a></li>
        </ul>
    </nav>

    <div class="box">
        <form action="./scripts/_cadastrar.php" method="POST" autocomplete="off">
            <h2>Cadastro</h2>
            <div class="inputBox semefeitoinput">
                <input type="email" name="email" id="email" class="inputEmail" required placeholder="Email">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox semefeitoinput">
                <input type="text" name="nome" id="nome" class="inputNome" required placeholder="Nome">
                <span>Nome</span>
                <i></i>
            </div>
            <div class="inputBox semefeitoinput">
                <input type="password" name="senha" id="senha" class="inputSenha" required placeholder="Senha">
                <span>Senha</span>
                <i></i>
            </div>
            <div class="inputBox semefeitoinput">
                <input type="text" name="nascimento" id="nascimento" class="inputNascimento" required placeholder="__/__/____">
                <span>Data de Nascimento</span>
                <i></i>
            </div>
            <div class="inputBox semefeitoinput">
                <input type="tel" name="celular" id="celular" class="inputCelular" required placeholder="(00) 00000-0000">
                <span>Celular</span>
                <i></i>
            </div>
            <div class="inputBox semefeitoinput">
                <input type="text" name="cidade" id="cidade" class="inputCidade" required placeholder="Cidade" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$">
                <span>Cidade</span>
                <i></i>
            </div>
            <div class="box-select">
                <span>Estado</span>
                <select id="uf" name="uf" required>
                    <option selected disabled value="">Selecione</option>
                    <option value="RO">Roraima</option>
                    <option value="AC">Acre</option>
                    <option value="AM">Amazonas</option>
                    <option value="RR">Roraima</option>
                    <option value="PA">Pará</option>
                    <option value="AP">Amapá</option>
                    <option value="TO">Tocantins</option>
                    <option value="MA">Maranhão</option>
                    <option value="PI">Piauí</option>
                    <option value="CE">Ceará</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="PB">Paraíba</option>
                    <option value="PE">Pernambuco</option>
                    <option value="AL">Alagoas</option>
                    <option value="SE">Sergipe</option>
                    <option value="BA">Bahia</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="SP">São Paulo</option>
                    <option value="PR">Paraná</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="GO">Goiás</option>
                    <option value="DF">Distrito Federal</option>
                </select>
                <!-- <i></i> -->
            </div>
            <div class="inputBox semefeitoinput">
                <input type="text" name="cep" id="cep" class="inputCep" required placeholder="00000-000">
                <span>Cep</span>
                <i></i>
            </div>
            <div class="sexo">
                <span>Sexo</span>
                <fieldset required>
                    <input type="radio" name="sexo" id="feminino" class="inputFeminino" value="F">
                    <label for="feminino">Feminino</label>
                    <input type="radio" name="sexo" id="masculino" class="inputMasculino" value="M">
                    <label for="masculino">Masculino</label>
                </fieldset>
                <!-- <i></i> -->
            </div>
            <?php if(isset($_SESSION['userexiste'])): ?>
            <div class="popup_login">
                <div>
                    <p>Usuário já existe</p>
                </div>
            </div>
            <?php session_destroy(); endif; ?>
            <div class="links">
                <a href="./login.php">Já tenho login</a>
            </div>
            <input type="submit" value="Cadastrar-se">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $('.inputNascimento').mask('00/00/0000');
        $('.inputCelular').mask('(00) 0000-00000');
        $('.inputCep').mask('00000-000');
    </script>
</body>
</html>