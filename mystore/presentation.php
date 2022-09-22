<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/pattern.css">
    <link rel="stylesheet" href="styles/presentation.css">
    <script src="js/presentation.js"></script>
</head>
<body>
    <header>
        <div class="container text-center mb-6">
            <a class="logotipo fs-5 fw-medium" onclick="pag('presentation')">myStore</a>
        </div>
    </header>
    <main>
        <div class="container">      
            <div id="presentation">
                <div class="text-center mb-6">
                    <h6 class="fs-3 fw-light">Conecte-se para aproveitar e descubrir novos jogos</h6>
                </div>
                <div class="animation mb-6 center">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ja4edvdc.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay class="center"></lottie-player>
                </div>
                <div class="column">
                    <a class="button btn-primary center mb-3" onclick="pag('login')">Entrar na conta</a>
                    <a class="button btn-text center" onclick="pag('registration')">Criar nova conta</a>
                </div>
            </div>  
            <div id="login">
                <div class="text-center">
                    <h6 class="fs-3 fw-light mb-4">Faça login na sua conta</h6>
                </div>
                <form class="formulario center mb-6" method="POST" action="php/userAuthentication.php">
                    <div class="field mb-4">
                        <h6 class="fs-2 fw-light mb-2">Usuário ou e-mail</h6>
                        <input type="text" class="fs-2 fw-light" maxlength="30" name="user" autocomplete="off" required>
                    </div>
                    <div class="field mb-6">
                        <h6 class="fs-2 fw-light mb-2">Senha</h6>
                        <input type="password" class="fs-2 fw-light" maxlength="30" name="password" autocomplete="off" required>
                    </div>
                    <div class="text-center mb-2">
                        <button type="submit" class="button btn-primary bw-100 fs-2 fw-light">Entrar</button>
                    </div>
                </form>
                <div class="text-center">
                    <a class="btn-text fs-2 fw-light" onclick="pag('registration')">Criar nova conta</a>
                </div>
            </div> 
            <div id="registration">
                <div class="text-center">
                    <h6 class="fs-3 fw-light mb-6">Faça sua conta</h6>
                </div>
                <form class="formulario center mb-6" method="POST" action="presentation.php">
                    <div class="field mb-4">
                        <h6 class="fs-2 fw-light mb-2">Nome  de usuário</h6>
                        <input type="text" class="fs-2 fw-light" maxlength="30" name="username" autocomplete="off"  required>
                    </div>
                    <div class="field mb-4">
                        <h6 class="fs-2 fw-light mb-2">Email</h6>
                        <input type="email" class="fs-2 fw-light" maxlength="30" name="email"  autocomplete="off" required>
                    </div>
                    <div class="field mb-4">
                        <h6 class="fs-2 fw-light mb-2">Senha</h6>
                        <input type="password" class="fs-2 fw-light" maxlength="30" id="password" autocomplete="off"  name="password" 
                        onkeyup="passConfirmation()" required>
                        <div class="mt-1 alertPass">
                            <h6 class="fs-1 fw-lighter">A senha deve conter pelo menos 6 caracteres</h6>
                        </div>
                    </div>
                    <div class="field mb-6">
                        <h6 class="fs-2 fw-light mb-2">Confirmar senha</h6>
                        <input type="password" class="fs-2 fw-light" maxlength="30" id="passwordConfirmation" name="passwordConfirmation"  autocomplete="off" 
                        onkeyup="passConfirmation()" required>
                        <div class="mt-1 alertPass">
                            <h6 class="fs-1 fw-lighter">As senhas não coincidem</h6>
                        </div>
                    </div>
                    <div class="text-center mb-2" id="btnRegistrationOff">
                        <button class="button bw-100 btn-primary fs-2 fw-light" title="Preencha todos os campos para se cadastrar" disabled>Cadastrar</button>
                    </div>
                    <div class="text-center mb-2" id="btnRegistrationOn">
                        <button type="submit" class="button bw-100 btn-primary fs-2 fw-light" name="btnRegistration">Cadastrar</button>
                    </div>
                </form>
                <div class="text-center">
                    <a class="btn-text fs-2 fw-light" onclick="pag('login')">Entre na sua conta</a>
                </div>
                <?php
                if (isset($_POST['btnRegistration'])) {
                  include('php/userRegistration.php');

                  if ($rt == true) {
                    echo "<script>pag('login')</script>";
                  }
                }
                ?>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>