<h1>Cadastro</h1>

<form action="index.php?pessoas" method="post">
    
    <input type="text" name="nome" placeholder="Nome Pessoa">
    <input type="number" name="cpf" placeholder="CPF Pessoa">
    <input type="number" name="idade" placeholder="Idade Pessoa">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="senha" placeholder="Senha">
    <select name="tipoPessoa">
        <option value="usuario">Usuario</option>
        <option value="funcionario">Funcionario</option>
    
    </select>

<button type="submit">Enviar</button>

</form>