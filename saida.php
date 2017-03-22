<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Gerador de tabuadas</title>

	<?php
		
		$pNumero        = $_POST['pNumero'];
		$sNumero        = $_POST['sNumero'];
		$pNumeroM        = $_POST['pNumeroM'];
		$sNumeroM        = $_POST['sNumeroM'];
		
		
		
	?>
	
	<style>
				table,th,td{
			text-align: center;
			border: 1px solid black;
		}
		
		tr:nth-child(even) {
			background-color: #DFDFDF
		}
			
		th {
			background-color: #808080;
			color: white;
		}
		
		table {
			
			display: inline;
			border-collapse: collapse;
			align: center;
			margin: 20px;
			
		}
		
		body{
			width: 650px;
			margin: 0px auto;
			padding: 0px;
			position: relative;
			
			
		}
	</style>
	
</head>

<body>

	<?php
		for($nCont = $pNumero; $nCont <= $sNumero; $nCont++){ ?>
			
			<table>
				<thead>
				<tr>
					<th colspan=2><label>Tabuada do <?php echo $nCont;?></label></th>
				</tr>
				<tr>
				  <th>Fórmula</th>
				  <th>Valor</th>
				 </tr>
				</thead>
				
				<tbody>
					<?php 
						for($mCont = $pNumeroM; $mCont <= $sNumeroM ; $mCont++){ ?>
							<tr>
								<td><?php echo $nCont . "x" . $mCont ?>  </td>
								<td><?php echo $nCont * $mCont ?>
						<?php } ?>
				
				</tbody>
				
			</table>
			<?php }	?>
		

</body>


</html>