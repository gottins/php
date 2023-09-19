<!--### 問題 7: 偶数と奇数
- **要件**: 整数を引数に取り、その数が偶数であれば"Even"、奇数であれば"Odd"と
いう文字列を返す関数`evenOrOdd`を定義してください。

<?php
$num = "3";
$result = evenOrOdd($num);
echo $result;

function evenOrOdd($num){
    if($num % 2 == 0){
        echo "Even";
    }else{
        echo "Odd";
    }
}
?>