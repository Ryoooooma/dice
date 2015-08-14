<?php

$dice_1 = mt_rand(1, 6);
$dice_2 = mt_rand(1, 6);

$zorome = ($dice_1 == $dice_2) ? true : false;

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>サイコロ</title>
	</head>
	<body>
		<h1>サイコロ</h1>
		<p>サイコロの目は「<?php echo $dice_1; ?>」　「<?php echo $dice_2; ?>」でした！</p>
		<?php if ($zorome): ?>
			ゾロ目です！
		<?php endif; ?>
		<p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一度！</a></p>
	</body>
</html>