<div id="contenu">
	<h2>La Genèse</h2>
	<p>Bienvenue sur la page de la genèse.</p>
	<table id="tableBalises">
		<thead>
			<tr>
				<th>Année</th>
				<th>Cours</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($cphp as $annee => $cours) { ?>
			<tr>
			<td><span class="html"><?php echo $annee ?></span></td>
			<td><?php echo $cours ?></td>		
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<img src="<?php echo CHEMIN_VUES ?>images/big-w3cvalidtemplate.png" alt="W3C Valid" >
</div><!-- #contenu -->