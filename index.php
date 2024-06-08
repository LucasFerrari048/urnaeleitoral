<?php
include("BancoDeDados.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Votação - ETEPUGS</title>
    <link rel="website icon" type="png" href="img/Logo_da_ETE_2.png">
    <meta charset="UTF-8">
    <script src="codigo.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="painel">
        <div class="juntos">
            <img src="img/Logo_da_ETE_2.png" width="10%">
            <center>
                <h1>BEM VINDOS</h1>
                <h1>SISTEMA DE VOTAÇÃO - ETEPUGS</h1>
            </center>
            <img src="img/Logo_GRE_3.PNG.png" width="10%">
        </div>
    </div>

    <div class="container">
        <div class="branco">
            <div class="cinzaClaro">
                <center>
                    <p>Número:</p>
                    <form action="">
                        <input size="1" id="campo1" value="" maxlength="1" type="text" readonly="readonly" />
                        <input size="1" id="campo2" value="" maxlength="1" type="text" readonly="readonly" />
                </center>
                </form>
            </div>
            <div class="cinzaEscuro">
                <b>JUSTIÇA<br>ELEITORAL</b>
            </div>
            <div class="preto">
                <center>
                    <button class="bnt click" onclick="inserir(1)">1</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(2)">2</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(3)">3</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(4)">4</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(5)">5</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(6)">6</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(7)">7</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(8)">8</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(9)">9</button>
                    <button class="bnt click" id="meuBotao" onclick="inserir(0)">0</button>
                    <div class="teclado2">
                        <button class="branco " onclick="branco()">BRANCO</button>
                        <button class="laranja  click" onclick="corrige()">CORRIGE</button>
                        <button class="verde" onclick="inserirNoBancoDeDados()">CONFIRMA</button>
                </center>
            </div>
        </div>
    </div>
    </div>
    <script>



    </script>


    <script>
        function inserir(valor) {
            document.addEventListener('keydown', (event) => {
                if (event.key === '') {
                    alert('Tecla Enter pressionada!');
                }
            });


            var valor1 = document.getElementById("campo1").value;
            var valor2 = document.getElementById("campo2").value;

            if (valor1 == "") {
                document.getElementById("campo1").value = valor;
            } else if (valor2 == "") {
                document.getElementById("campo2").value = valor;
            }
        }
    </script>
    <script>
        function corrige() {
            document.getElementById("campo1").value = "";
            document.getElementById("campo2").value = "";
        }
    </script>

    <div id="mensagem"></div>

    <script>
        function inserirNoBancoDeDados() {
            var valor1 = parseInt(document.getElementById("campo1").value);
            var valor2 = parseInt(document.getElementById("campo2").value);
            var candidato2 = (valor1 * 10) + valor2;

            alert("Confirmar voto " + candidato2)

            var candidato = candidato2;
            if (candidato) {
                // Envia o nome para o script PHP usando AJAX
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "BancoDeDados.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert("VOTO CONFIRMADO ")
                    }
                };
                xhr.send("candidato=" + candidato);
            } else {
                document.getElementById("mensagem").textContent = "NÃO FUNCIONOU AINDA.";
            }

            document.getElementById("campo1").value = "";
            document.getElementById("campo2").value = "";
        }
    </script>
    <script>
        function branco() {
            var branco = 1;
            if (sessionStorage.getItem(branco) !== null) {
                votos = parseInt(sessionStorage.getItem(branco)) + 1;
                sessionStorage.setItem(branco, votos);
            } else {
                sessionStorage.setItem(branco, 1);

            }
            alert("Confirmar voto BRANCO ")

            var candidato = branco

            if (candidato) {
                // Envia o nome para o script PHP usando AJAX
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "BancoDeDados.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert("VOTO CONFIRMADO ")
                    }
                };
                xhr.send("candidato=" + candidato);
            } else {
                document.getElementById("mensagem").textContent = "NÃO FUNCIONOU AINDA.";
            }
        }
    </script>
</body>

</html>