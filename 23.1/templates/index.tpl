<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<ul>
		{foreach from=$content item=row  name=books}
			<a href=""><li>{$row.title}</li></a>
		{/foreach}
	</ul>
	
	
</body>
</html>