<?php

/* memo
for i + 1
i =< 100
	if 3で割り切れる then Fizz
	if 5で割り切れる then Buzz
	if ３かつ５で割り切れる(15) then FizzBuzz
	else i
end if
END
*/

// FizzBuzz課題

	// 宣言
	declare(strict_types=1);

	// 1-100
	for ($i = 1; $i <= 100; $i++) {
		// 15の倍数
		if ($i % 15 === 0) {
			echo 'FizzBuzz';
        // 3の倍数
		} elseif ($i % 3 === 0) {
			echo 'Fizz';
		// 5の倍数
		} elseif ($i % 5 === 0) {
			echo 'Buzz';
		// 例外
		} else {
			echo $i;
		}
		//改行
		echo PHP_EOL;
		echo "<br/>";
	}



?>
