<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>フォームでデータを送ろう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>フォームでデータを送ろう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<h4>あなたの名前は...</h4>
		<!-- ここから -->
		<?php echo $_POST["name"] ?>さんです。
		<!-- ここまで -->
	</div>
</body>
</html>
