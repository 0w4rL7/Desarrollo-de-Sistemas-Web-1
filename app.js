//Variable global que va a instanciar el objeto[cite:7]
var Alert = new CustomAlert();

function CustomAlert() {
    this.render = function() {
    //Show Modal: busca la caja del Pop-Up y la hace visible[cite:7]
    let popUpBox = document.getElementById('popUpBox');
    popUpBox.style.display = "block";
    }

    //Close Modal: Agrega el boton con la redireccion del index.php[cite:7]
    document.getElementById('closeModal').innerHTML = '<a href="index.php"><button type="button">Aceptar</button></a>';
}

this.ok = function() {
    //Oculta el Pop-Up [cite:7]
    document.getElementById('popUpBox').style.display = "none";
    //Suponiendo que el usuario le haya dado estilos y un ID al overlay[cite:7]
    document.getElementById('popUpOverlay').style.display = "none";
} 