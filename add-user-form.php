<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "head.html" ?>
    <title>Home</title>
</head>

<body>
    <?php require "header.php" ?>

    <div id="conteudo" class="container my-4 w-75">
        <!-- inicio conteudo -->

        <h1 class="text-center">Criar Conta</h1>

        <div id="add-user-form" class="mx-auto w-75">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="">
                </div>
                <div>
                    <p>Tipo de conta</p>
                    <input type="radio" name="fiscal" id="cpf" value="cpf">
                    <label for="cpf">CPF</label>
                    <input type="radio" name="fiscal" id="cnpj" value="cnpj">
                    <label for="cnpj">CNPJ</label>
                    <div id="isCpf" hidden>
                        <label for="cpf">CPF</label>
                        <input type="text" class="fiscal form-control" name="cpf">
                    </div>
                    <div id="isCnpj" hidden>
                        <label for="cnpj">CNPJ</label>
                        <input type="text" class="fiscal form-control" name="cnpj">
                    </div>
                </div>
                <h2 class="text-center pt-2">Dados Pessoais</h2>
                <div class="form-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="birthdate">Data de Nascimento</label>
                    <input type="date" name="birthdate" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmar senha</label>
                    <input type="password" name="confirm_password" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="zipcode">CEP</label>
                    <input type="text" name="zipcode" id="cep" class="form-control" onblur="pesquisacep(this.value);">
                </div>
                <div class="form-group">
                    <label for="address">Endereço</label>
                    <input type="text" name="address" id="rua" class="form-control">
                </div>
                <div class="form-group">
                    <label for="additional_info">Complemento</label>
                    <input type="text" name="additional_info" id="additional_info" class="form-control">
                </div>
                <div class="form-group">
                    <label for="neighbourhood">Bairro</label>
                    <input type="text" name="neighbourhood" id="bairro" class="form-control">
                </div>
                <div class="form-group">
                    <label for="state">Estado</label>
                    <input type="text" name="state" id="uf" class="form-control">
                </div>
                <div class="form-group">
                    <label for="city">Cidade</label>
                    <input type="text" name="city" id="cidade" class="form-control">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="mailing-list" id="mailing-list">
                    <label for="mailing-list">Quero receber ofertas e conteúdos referentes a sustentabilidade por e-mail.</label>
                </div>
                <p>Ao se cadastrar, você concorda com as <strong>Condições de Uso</strong> e com a <strong>Política de Privacidade</strong> da Redecora&copy;.</p>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Criar sua conta na Redecora</button>
                </div>

            </form>
        </div>

    </div> <!-- fim conteudo -->


    <?php require "footer.php" ?>

    <script>
        $('input[type="radio"]').click(function() {
            if ($(this).attr("value") == "cpf") {
                $("#isCpf").removeAttr('hidden');
                $("#isCnpj").prop('hidden', true);
            } else if ($(this).attr("value") == "cnpj") {
                $("#isCpf").prop('hidden', true);
                $("#isCnpj").removeAttr('hidden');
            }
        });
    </script>

</body>

</html>