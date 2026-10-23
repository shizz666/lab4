<?php
$index = [
    "king"   => ", Ваше Величество",
    "friend" => ", Серёжа!",
];

function hello($name, $index)
{
    if ($name == "king") {
        echo "<h2>Здравствуйте" . $index[$name] . "</h2>";
    } else {
        echo "<h2>Привет" . $index[$name] . "</h2>";
    }
}

hello("king", $index);
hello("friend", $index);
?>