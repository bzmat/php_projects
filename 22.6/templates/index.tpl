<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$title}</title>
</head>
<body>

		<h1>{$title}</h1>

		<table>
			
				{foreach from=$content item=i}
					<tr>
						<td>{$i[0]}</td>
						<td>{$i[1]}</td>
						<td>{$i[2]}</td>
						<td>{$i[3]}</td>
					</tr>	
				{/foreach}
			
			
		</table>

		
	
	
</body>
</html>