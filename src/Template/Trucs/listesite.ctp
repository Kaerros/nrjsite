<html>
	<body>
		<h1>Liste Site</h1>
		<form method="post" action="TrucsController.php">
			<h2>Ajouter un site:</h2>
			<p><label for="Site">Nom du Site :</label></p>
   			<p><input type="text" name="Site" /></p>
   			<p>Type de site:</p>
			<p><input type="radio" name="typesite" value="producteur" id="producteur" checked="checked" /> <label for="producteur">Producteur</label>
			<input type="radio" name="typesite" value="consommateur" id="consommateur" /> <label for="consommateur">Consommateur</label> </p>
			<p><label for="position">Position GPS :</label></p>
			<p> <input type="text" name="position" /></p>
			<p><input type="submit" value="Envoyer" /></p>
		</form>
	</body>
</html>