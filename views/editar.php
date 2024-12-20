<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Informações - SP Medical Group</title>
    <link rel="stylesheet" href="/PROJETO-FINAL-CLINICA/views/editar.css">
   

</head>
<body>
    <header class="header">
        <h1>Editar Informações</h1>
    </header>

    <main class="container">
    <form method="POST" action="/PROJETO-FINAL-CLINICA/public/update-user">
    
    <input type="hidden" name="id" value="<?= $user['id']; ?>">

            <div class="input-group">
                <img src="/PROJETO-FINAL-CLINICA/views/imagens/image6.png" alt="Ícone de usuário" class="icon user-icon">
                <input type="text" name="nome" value="<?= $user['nome']; ?>" placeholder="Nome completo" required>
            </div>

            <div class="input-group">
                <img src="/PROJETO-FINAL-CLINICA/views/imagens/image6.png" alt="Ícone de usuário" class="icon user-icon">
                <input type="email" name="email" value="<?= $user['email']; ?>" placeholder="Email" required>
            </div>

            <div class="input-group">
                <img src="/PROJETO-FINAL-CLINICA/views/imagens/image7.png" alt="Ícone de chave" class="icon key-icon">
                <input type="password" name="senha" placeholder="Nova senha" required>
            </div>

            <div class="input-group">
                <img src="/PROJETO-FINAL-CLINICA/views/imagens/image7.png" alt="Ícone de chave" class="icon key-icon">
                <input type="password" name="confirmar_senha" placeholder="Confirmar nova senha" required>
            </div>

            <div class="input-group">
                <img src="/PROJETO-FINAL-CLINICA/views/imagens/mapa.png" alt="Ícone de endereço" class="icon user-icon">
                <input type="text" name="endereco" value="<?= $user['endereco']; ?>" placeholder="Endereço" required>
            </div>

            <div class="input-group">
                <img src="/PROJETO-FINAL-CLINICA/views/imagens/cartao.png" alt="Ícone de CPF" class="icon user-icon">
                <input type="text" name="cpf" value="<?= $user['cpf']; ?>" placeholder="CPF" required>
            </div>

            <button type="submit" class="botao">Salvar Alterações</button>
        </form>
    </main>
</body>
</html>
