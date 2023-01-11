<html>
<head><title>PyrhagorasPHP中身</title></head>
<body>

<?php

	// 引数
#テスト用引数
#$_GET['int1'] = 3;
#$_GET['int2'] = 4;
	$input_int_a = $_GET['int1'];
	$input_int_b = $_GET['int2'];

	// a , bを二乗
	$input_int_a2 = $input_int_a ** 2;
	$input_int_b2 = $input_int_b ** 2;

	// 加算
	$input_int_c2 = $input_int_a2 + $input_int_b2;

	// cの平方根を求める
	$input_int_c = sqrt($input_int_c2);

	// 確認用msg
	echo "■■■■■■■　確認用　■■■■■■■"."<br>\n";
	echo "入力値辺a：".$input_int_a."<br>\n";
	echo "入力値辺b：".$input_int_b."<br>\n";
	echo "辺aの二乗：".$input_int_a2."<br>\n";
	echo "辺bの二乗：".$input_int_b2."<br>\n";
	echo "二乗加算 ：".$input_int_c2."<br>\n";
	echo "辺c平方根：".$input_int_c."<br>\n";
	echo "■■■■■■■　確認用　■■■■■■■"."<br>\n";

	// テキスト出力
	echo "<br>\n";
	echo "直角をはさむ2辺の長さが ".number_format($input_int_a,1)." と ".number_format($input_int_b,1)." のとき、 斜辺の長さは ".number_format($input_int_c,1)." になります。";

?>

</body>
</html>