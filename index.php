<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Formulário</title>
</head>

<body>

    

    <div class="cad">
        <form method="post" action="controller/controllerInsert.php"  class="form">
            <div >
                <h2>Lista de Tarefas</h2>
            </div>
            <div>
                <label>
                    <h4>Nome da Tarefa:</h4>
                </label>
                <input type="text" name="nm_tar" placeholder="Digite o nome aqui:" required>
            </div>
            <div>
                <label>
                    <h4>Prazo de Entrega:</h4>
                </label>
                <input type="date" name="pe" required>
            </div>
            <div>
                <label>
                    <h4>Prióridade:</h4>
                </label>
                <input type="text" name="prio" placeholder="Informe nível de prioridade" required>
            </div>
            <div>
                <label>
                    <h4>Responsável:</h4>
                </label>
                <select name="selec">
                    <option>Usuário 1</option>
                    <option>Usuário 2</option>
                    <option>Usuário 3</option>
                </select>
            </div>
            <div>
                <label >
                    <h4>Observações</h4>
                </label>
                <textarea name="obs" placeholder="">
                    
            </textarea>
            </div>
            <div>
               
            </div>

            <div>
                <button type="submit" name="btn-enviar" class="btn_enviar">Enviar</button>
                <button type="reset" name="btn-limpar" class="btn_limpar">Limpar</button>
            </div>
        </form>
    </div>

</body>

</html>