<div id="contenu">
    <h2> Suivi de remboursement des Frais </h2>
    
	<form name="formConsultFrais" method="post" action="chercheFrais.php">
		<h1> Période </h1>
			<label class="titre">Mois/Année :</label> <input class="zone" type="text" name="dateConsult" size="12" />
		<p class="titre" />
		<div style="clear:left;"><h2>Frais au forfait </h2></div>
		<table style="color:white;" border="1">
			<tr><th>Repas midi</th><th>Nuitée </th><th>Etape</th><th>Km </th><th>Situation</th><th>Date opération</th><th>Remboursement</th></tr>
			<tr align="center"><td width="80"><label  size="3" name="repas"/></td>
				<td width="80"><label size="3" name="nuitee"/></td> 
				<td width="80"> <label size="3" name="etape"/></td>
				<td width="80"> <label size="3" name="km" /></td>
				<td width="80"> <label size="3" name="situation" /></td>	
				<td width="80"> <label size="3" name="dateOper" /></td>	
				<td width="80"> <label size="3" name="dateOper" /></td>						
			</tr>
		</table>
		
		<p class="titre" /><div style="clear:left;"><h2>Hors Forfait</h2></div>
		<table style="color:white;" border="1">
			<tr><th>Date</th><th>Libellé </th><th>Montant</th><th>Situation</th><th>Date opération</th></tr>
			<tr align="center"><td width="100" ><label size="12" name="hfDate1"/></td>
				<td width="220"><label size="30" name="hfLib1"/></td> 
				<td width="90" ><label size="10" name="hfMont1"/></td>
				<td width="80"> <label size="3" name="hfSitu1" /></td>
				<td width="80"> <label size="3" name="hfDateOper1" /></td>		
				</tr>
		</table>	
		<p class="titre"></p>
		<div class="titre">Nb Justificatifs</div><input type="text" class="zone" size="4" name="hcMontant"/>
	</form>
	</div>
</div>