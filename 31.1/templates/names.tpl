<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
	{foreach from=$names item=name  name=n}
		<tr>
			<td>{$smarty.foreach.n.iteration}.</td>
			<td>{$name->getName()}</td>
		</tr>
	{/foreach}
</table>		
</body>
</html>

