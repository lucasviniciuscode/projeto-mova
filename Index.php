<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/style/style.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<section class="sec">
    <main>
        <form action="exibirInformacoes.php" method="GET">
            <div class="caixa2">
                <select class="form-select" aria-label="Default select example" name="dia" id="t2">
                    <option value="8">Selecione um dia da semana...</option>
                    <option value="0">Domingo</option>
                    <option value="1">Segunda-Feira</option>
                    <option value="2">Terça-feira</option>
                    <option value="3">Quarta-Feira</option>
                    <option value="4">Quinta-Feira</option>
                    <option value="5">Sexta-Feira</option>
                    <option value="6">Sábado</option>
                </select>
            </div>
            <button class="but">Enviar</button>
        </form>
    </main>
</section>
</body>
</html>