<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// 1)
$str = "Name";
echo "Hello! My name is '$str' <br>";

// 2)
$Age = 16;
echo "I’m $Age<br><br>";

//3)
$a = 1;
$b = 2;
$rez = $a + $b;
echo "$a + $b = $rez<br> <br>";

// 4)
$a = 5;
$b = 10;

echo "До обміну: a = $a, b = $b <br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "Після обміну: a = $a, b = $b";

?>

<h1>Тест</h1>

<h2>a) 1 — питання з 4 варіантами відповіді і лише 1 з них правильний:</h2>
<form method="post" action="">
    <p>Питання 1: Яка столиця України?</p>
    <input type="radio" name="question1" value="a"> а) Київ<br>
    <input type="radio" name="question1" value="b"> б) Харків<br>
    <input type="radio" name="question1" value="c"> в) Львів<br>
    <input type="radio" name="question1" value="d"> г) Одеса<br>
    <br>
    <input type="submit" name="submit" value="Відправити">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["question1"])) {
        $answer1 = $_POST["question1"];
        if ($answer1 == "a") {
            echo "<p>Відповідь на питання 1: Правильно!</p>";
        } else {
            echo "<p>Відповідь на питання 1: Неправильно.</p>";
        }
    }
}
?>

<h2>b) 2 — питання з 4 варіантами відповіді і кілька з них правильні:</h2>
<form method="post" action="">
    <p>Питання 2: Які кольори є в райдужному спектрі?</p>
    <input type="checkbox" name="question2[]" value="a"> а) Червоний<br>
    <input type="checkbox" name="question2[]" value="b"> б) Синій<br>
    <input type="checkbox" name="question2[]" value="c"> в) Зелений<br>
    <input type="checkbox" name="question2[]" value="d"> г) Жовтий<br>
    <br>
    <input type="submit" name="submit" value="Відправити">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["question2"])) {
        $answers2 = $_POST["question2"];
        $correct_answers = array("a", "c");
        $user_answers = array();
        foreach ($answers2 as $answer) {
            if (in_array($answer, $correct_answers)) {
                $user_answers[] = $answer;
            }
        }
        if (count($user_answers) == count($correct_answers)) {
            echo "<p>Відповідь на питання 2: Правильно!</p>";
        } else {
            echo "<p>Відповідь на питання 2: Неправильно.</p>";
        }
    }
}
?>

<h2>c) 3 — питання з розгорнутою відповіддю:</h2>
<form method="post" action="">
    <p>Питання 3: Напишіть коротку відповідь на питання "Що таке PHP?".</p>
    <textarea name="question3" rows="4" cols="50"></textarea>
    <br>
    <input type="submit" name="submit" value="Відправити">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["question3"])) {
        $answer3 = $_POST["question3"];
        echo "<p>Ваша відповідь на питання 3: $answer3</p>";
    }
}
?>

<?php
$tag = "div";
$background_color = "#474a50";
$color = "white";
$width = "200px";
$height = "100px";

$styles = "background-color: $background_color; color: $color; width: $width; height: $height;";

echo "<$tag style='$styles'>Зразок тексту у $tag зі стилями</$tag>";
?>
</body>
</html>
