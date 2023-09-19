<!--Gun クラスのコンストラクタを完成させなさい。
ただし以下の要件を満たすこと

・名前と最大装弾数はコンストラクタの引数として定義しインスタンス化する際に定義できるようにすること
・残弾数は初期値を０とすること

<?php
class Gun{

    private $name;

    private $maxMagazine;

    private $currentMagazine;

    function __construct($name, $maxMagazine){
        echo "残弾数". $this->currentMagazine . "0";
    }

}
?>