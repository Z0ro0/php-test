<?php
    // 정수 5개를 짝수, 홀수별 합계 출력
    // 1 2 3 4 5 짝수의 합 = 6, 홀수의 합 = 9
 $sum = 0;
 $odd = 0;
 for($i = 0; $i < 6; $i++){
    if($i%2==0){
        $sum += $i;
    }else{
        $odd += $i;
    }
 }
 echo "짝수의 합은 : ".$sum;
 echo "홀수의 합은 : ".$odd;
?>