<?php
    require_once'Funcionario.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <style>
        body
        {
            margin: 0px;
        }
        .container
        {
            width: 100vw;
            height: 100vh;
            background: #F1C40f;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .box
        {
            width: 700px;
            height: 700px;
            background: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h4>Informações do Funcionario</h4>
            <form method="post" action="Exibir.php">
                <input type="text" name="nome" id="nome" placeholder="Digite o nome">
                <input type="text" name="cidade" id="cidade" placeholder="informe a cidade">
                <input type="text" name="salario" id="salario" placeholder="Salario">
                <input type="text" name="horasTrab" id="horasTrab" placeholder="Horas de trabalho">
                <select name="Operacao" id="Operacao">
                    <option value="0">=== OPÇÕES===</option>
                    <option value="1">1- Cadastrar Funcionario</option>
                    <option value="2">2- Calcular Salario</option>
                    <option value="3">3- Dar Aumento</option>
                    <option value="4">4- Mostrar os Dados</option>
                    <option value="5">0- Sair</option>
                </select>
                <input type="submit" name="bntEnviar" id="bntEnviar"><br/>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if(isset($_POST['bntEnviar'])){
        $cadastroFun = new Funcionario();
        $cadastroFun->setHorasTrab($_POST['horas']);
        
        switch($_POST['Opercacao'])
        {
            case 1:
                $Exibicao = $cadastroFun->setNome($_POST['nome']);
                $Exibicao = $cadastroFun->setCidade($_POST['cidade']);
                $Exibicao = $cadastroFun->setSalarioFinal($_POST['salario']);
                break;
            case 2:
                $Exibicao = $cadastroFun->calcularSalario();
                break;
            case 3:
                $Exibicao = $cadastroFun->darAumento($_POST['salario']);
                break;
            case 4:
                $Exibicao = $cadastroFun->mostrarDados();
                break;
            default:
                echo"Operação Invalida";
                break;
        }
        echo "" .$Exibicao.""; 
    }
?>