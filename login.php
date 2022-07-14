<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LDStore | Login</title>
    <link rel="stylesheet" href="CSS/cadastro.css">

</head>
<body>
    <header>

    </header>
    <main>
        <h1>Entrar</h1>
        <p>Realize seu login para uma melhor experiência</p>
        <form>
            <p id="pForm">Preencha os campos abaixo com as informações necessárias *</p>

            <label for="iEmail">E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" name="eEmail" id="iEmail" required placeholder="Ex: fulano@gmail.com"><br>
            
            <label for="iSenha">Senha&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" name="eSenha" id="iSenha" required placeholder="*************"><br>

            <p id="logar">Ainda não possui uma conta? <a href="cadastro.php">Registre-se agora</a></p>

            <input type="submit" value="Entrar" id="botCadastro">

        </form>
    </main>
    <footer>
        <h2>Formas de Pagamento</h2>
        <img class="pagamentos" src="Imagens/visa-logo.png" alt="VISA">
        <img class="pagamentos" src="Imagens/mastercard-logo.png" alt="Mastercard">
        <img class="pagamentos" src="Imagens/hipercard-logo.png" alt="hypercard">
        <img class="pagamentos" src="Imagens/elo-logo.png" alt="ELO">
        <img class="pagamentos" src="Imagens/boleto.png" alt="Boleto">
        <img class="pagamentos" src="Imagens/pix.png" alt="PIX">

        <h3>Siga-nos nas redes sociais</h3>
        <img id="sociais" src="Imagens/05.png" alt="Logodas redes sociais">

        <p>Site desenvolvido por <a href="https://www.linkedin.com/in/lucasantossp/" target="_blank">Lucas Santos</a> e <a href="https://www.linkedin.com/in/david-c-798a47113/" target="_blank">David Cordeiro</a></p>
    </footer>
</body>
</html>