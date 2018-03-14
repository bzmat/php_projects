<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$title}</title>
</head>
<body>

	<table>
		<ul>{foreach from=$content item=fruit}
			<li>{$fruit}</li>
		{/foreach}</ul>
	</table>
	
</body>
</html>
