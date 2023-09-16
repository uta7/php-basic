<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <title>15章の課題</title>
</head>
 
<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する
            public $name;
            public $price;

            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price($price){
                echo $price;
            }
        }
 
        // インスタンス化する
        $Food = new Food('potato', 250);

        print_r($Food);
        ?>
    </p>
    <p>
        <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            public $name;
            public $height;
            public $weight;
 
            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
            }

            public function show_weight($weight){
                echo "<br>";
                echo $weight;
            }
        }
 
        // インスタンス化する
        $Animal = new Animal('dog', 60, 5000);

        print_r($Animal);
        ?>
    </p>
    <p>
        <?php
        //出力する
        $Food->show_price($Food->price);
        $Animal->show_weight($Animal->height);
        ?>
    </p>
</body>
 
</html>