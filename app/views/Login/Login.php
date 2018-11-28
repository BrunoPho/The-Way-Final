<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="../../../assets/css/css_login.css" rel="stylesheet">

</head>
<body>

  <h2> É novo aqui faça: </h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Login </button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="../../controllers/">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b> E-mail </b></label>
      <input type="email" placeholder="Insira seu email" name="uname" required>

      <label for="psw"><b> Senha </b></label>
      <input type="password" placeholder="Insira sua senha" name="psw" required>
        
      <button type="submit"> Login </button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Lembre de mim
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"> Cancelar </button>
      <span class="psw"> Esqueceu a <a href="esqueci.php"> senha? </a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
