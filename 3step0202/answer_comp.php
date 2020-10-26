<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>リンクでデータを送ろう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>リンクでデータを送ろう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<h4>あなたの好きなものは...</h4>
		<?php echo $_GET["favorit"]; ?>です。
	</div>
</body>
</html>
