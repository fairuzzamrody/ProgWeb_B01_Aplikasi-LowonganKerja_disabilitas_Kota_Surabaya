
<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Login Admin</title>
<style>
body {font-family: Arial}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.button{
  background-color: #3695c2;
  color: rgb(255, 255, 255);
  padding: 15px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 10px;
  cursor: pointer;
  width: 180px;
  margin-top: 20px;
  border-radius: 10px;
}
.button:hover{
  opacity: 0.8;
}
.container {
  padding: 20px;
  margin: 10px;
}

.span.psw {
  float: right;
  padding-top: 16px;
}

.form_login{
	
	width: 100%;
	padding: 6px;
	font-size: 11pt;
	margin-bottom: 10px;
	border-radius: 15px;
} 

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: auto; 
  height: auto ;  
  padding-top: auto;

}
.modal-content {
  background-color: #ffffff;
  border: 1px solid rgb(223, 223, 223);
  height: auto;
  width: 30%;
  max-width: max-content;
  border-radius: 10px 10px; 
  margin-top: 10%;
  position: fixed;
  margin-left: 450px;
}
.container{
  border-radius: 100px;
}
.animate {
  -webkit-animation: animatezoom 0.7s;
  animation: animatezoom 0.7s
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
</style>
</head>
<body>
<div id="card">
  <div class="modal">
  </div>
  <form class="modal-content animate" action="action.php" method="POST">
    <div class="imgcontainer">
    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text"  class="form_login" placeholder="Masukkan Email" title="Email" id="e_mail" required>

      <label for="uname"><b>Password</b></label>
			<input type="password" class="form_login" title="Password" placeholder="Masukkan Password" id="password" required><br><br>
				<input type="checkbox" onclick="myFunction()">Show Password
				<script>
				function myFunction() {
				  var x = document.getElementById("myInput");
				  if (x.type === "password") {
					x.type = "text";
				  } else {
					x.type = "password";
				  }
				}
				</script>
        </body>
        <a href= "profileuser1.php" class="button"> Masuk </button></a>
          <p>Belum Punya akun ? <a href="pendaftaran.html">Daftar</a></p>
    </div>
     </div>
  </form>
</div> 
</body>
</html>
