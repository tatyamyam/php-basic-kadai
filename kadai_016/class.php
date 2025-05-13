<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
  <p>
    <?php
    // Food クラスの定義
    class Food
    {
      private $name;
      private $price;

      public function show_price()
      {
        echo $this->price . '<br>';
      }

      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // Animal クラスの定義
    class Animal
    {
      private $name;
      private $height;
      private $weight;

      public function show_height()
      {
        echo $this->height . '<br>';
      }

      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス作成
    $food = new Food('potato', 250);
    $animal = new Animal('dog', 60, 5000);

    // 出力
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';

    // メソッド実行
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>

</html>