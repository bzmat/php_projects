<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$title}</title>
</head>
<body>

	<table>
		{foreach from=$content item=mountain name=peaks }
			<tr>
				<td>{$smarty.foreach.peaks.iteration}</td>
				<td>{$mountain.peak}</td>
				<td>{$mountain.height}</td>
			</tr>
			
		{/foreach}
	</table>
	
</body>
</html>