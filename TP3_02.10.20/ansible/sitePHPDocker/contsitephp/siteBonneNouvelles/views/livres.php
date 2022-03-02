<div id="contenu">
	<h2>Les Livres</h2>
	<p>Bienvenue sur la page des livres.</p>
	<table id="tableBalises">
		<thead>
			<tr>
				<th>Titre</th>
				<th>Auteur</th>
			</tr>
		</thead>
		<tbody>
		<form action="index.php?action=livres" method="post">
			<h3>Inserer un livre ?</h3>
			<label for="something">introduisez qqch: </label>
			<input type="text" id="something" name="something"> 
			<input type = "submit" name = "submit" value = "Envoyer"> 
		</form>
		
		<?php for ($i=0;$i<count($tablivres);$i++) { ?>
			<tr>
			<td><span class="html"><?php echo $tablivres[$i]->titre() ?></span></td>
			<td><?php echo $tablivres[$i]->auteur() ?></td>		
			</tr>
		<?php } ?>
		</tbody>
		
		
	</table>
</div><!-- #contenu -->