



/*function votar() {

    var valor1 = parseInt(document.getElementById("campo1").value);
    var valor2 = parseInt(document.getElementById("campo2").value);
    var candidato = (valor1 * 10) + valor2;
    if (sessionStorage.getItem(candidado) !== null) {
        votos = parseInt(sessionStorage.getItem(candidado)) + 1;
        sessionStorage.setItem(candidado, votos);
    } else {
        sessionStorage.setItem(candidado, 1);

    }
    alert("Confirmado voto no candidato " + candidado)
    document.getElementById("campo1").value = "";
    document.getElementById("campo2").value = "";
}





var voto = votos;
var xhr2 = new XMLHttpRequest();
xhr2.open("POST", "BancoDeDados.php", true);
xhr2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr2.onreadystatechange = function () {
    if (xhr2.readyState === 4 && xhr2.status === 200) {
        console.log(xhr2.responseText);
    }
};

xhr2.send("voto=" + voto);




function resultado() {
    document.getElementById("resultado").innerHTML = ""
    for (i = 0; i < 100; i++) {
        if (sessionStorage.getItem(i) !== null) {
            //alert(i);
            document.getElementById("resultado").innerHTML += "Cantidado " + i + " tem " + sessionStorage.getItem(i) + " votos<br/>";
        }
    }
}


function resultado2() {
    document.getElementById("resultado2").innerHTML = ""
    if (branco !== null) {
        //alert(i);
        document.getElementById("resultado2").innerHTML += "Cantidado Branco tem " + votos + " votos<br/>";
    }
}
*/








