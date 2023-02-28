<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			text-align: right;
			padding: 5px;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th></th>
				<?php
					for ($i=1; $i<=10; $i++) {
						echo "<th>$i</th>";
					}
				?>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i=1; $i<=10; $i++) {
					echo "<tr>";
					echo "<th>$i</th>";
					for ($j=1; $j<=10; $j++) {
						echo "<td>" . ($i*$j) . "</td>";
					}
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>
