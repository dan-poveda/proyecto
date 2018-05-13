<!DOCTYPE html>
<html>
<head>
	<meta charset="uft-8">
	<title> HTML5 Contact Form</title>
	<link rel="stylesheet" media="screen" href="Proyecto/CSS/Style.CSS">

</head>
<body>
	<form class="contact-form" action="" method="post" name="contact-form">
		<header>
			<ul>
				<li>
					<h2>Contactos</h2>
					<span class="notification-requerida">Campo requerida</span>
				</li>
				<li>
					<label for="name">Nombre:</label>
						<input type="text" name="name" placeholder="Daniela Poveda" />
				</li><br>	
				<li>
					<label for="email">Nombre:</label>
					<input type="email" name="email" placeholder="dany.p6@gmail.com" />
					<span class="form.hint">Formato correcto "name@someting.com"</span>
				</li><br>
				<li>
					<label for ="website">Sitio web:</label>
					<input type="text" name="website" placeholder="http://dan.com" required/>
					<span class="form-hint">Formato correcto "http://someaddress.com"</span>	
				</li><br>
				<li>
				<label for="Mensaje">Mensaje:</label>	
				</li>
					<textarea name="Mensaje" cols="40" rows="6"> </textarea>
				<li>
					<button class="submit" type="submit">Enviar Formulario</button>
				</li><br>	
			</ul>
		</header>		
	</form>	

</body>
</html>