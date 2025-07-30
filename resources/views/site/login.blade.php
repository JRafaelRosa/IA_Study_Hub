<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Teste de Login via API</title>
</head>
<body>
<h2>Formulário de Login para Teste da API</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if(session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif

<form method="POST" action="{{ url('/login') }}">
    @csrf
    <label for="email">Email:</label><br />
    <input type="email" name="email" id="email" required /><br /><br />

    <label for="password">Senha:</label><br />
    <input type="password" name="password" id="password" required /><br /><br />

    <button type="submit">Entrar</button>
</form>
</body>
</html>
