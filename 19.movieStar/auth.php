<?php
    include_once("templates/header.php");
    include_once("global.php");
?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="<?= $BASE_URL; ?>auth-process-login.php" method="POST">
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input 
                            type="email" 
                            class="form-control" 
                            id="email" 
                            name="email"
                            placeholder="Digite seu e-mail"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="password" 
                            name="password"
                            placeholder="Digite sua senha"
                            required
                        />
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                        Entrar
                    </button>
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Criar Conta</h2>
                <form action="<?= $BASE_URL; ?>auth-process-create.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name" 
                            placeholder="Digite seu nome"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobrenome:</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="lastname" 
                            name="lastname" 
                            placeholder="Digite seu sobrenome"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input 
                            type="email" 
                            class="form-control" 
                            id="email" 
                            name="email" 
                            placeholder="Digite seu e-mail"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="password" 
                            name="password" 
                            placeholder="Digite sua senha"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="confirmpassword">Confirmação de Senha:</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="confirmpassword"
                            name="confirmpassword"
                            placeholder="Confirme a senha"
                            required
                        />
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                        Registrar
                    </button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once("templates/footer.php");
?>