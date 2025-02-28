<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Code Examples</title>
    <style>
        .code-box {
            border: 1px solid black;
            padding: 10px;
            margin: 5px;
            position: relative;
            background: #f4f4f4;
            font-size: 18px;
        }

        .copy-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            cursor: pointer;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        pre code {
            font-size: 16px;
        }
    </style>
    <script>
        function copyCode(id) {
            var code = document.getElementById(id).innerText;
            navigator.clipboard.writeText(code).then(() => {
                // alert("Code copied!");
            });
        }
    </script>
</head>

<body>

    <?php

    function createCodeBox($title, $code, $id)
    {
        echo "<div class='code-box'>";
        echo "<h3>$title</h3>";
        echo "<button class='copy-btn' onclick='copyCode(\"$id\")'>Copy</button>";
        echo "<pre><code id='$id'>" . htmlspecialchars($code) . "</code></pre>";
        echo "</div>";
    }

    // 1. PHP Script to check Prime Number
    createCodeBox("1. Prime Number Check", 'function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
$num = 17;
echo isPrime($num) ? "$num is Prime" : "$num is not Prime";', "code1");

    // 2. PHP Script to find Factorial
    createCodeBox("2. Factorial Calculation", 'function factorial($num) {
    if ($num < 0) return "Invalid input";
    return $num == 0 ? 1 : $num * factorial($num - 1);
}
$num = 5;
echo "Factorial of $num is " . factorial($num);', "code2");

    // 3. PHP Script for Number Triangle
    createCodeBox("3. Number Triangle", 'function numberTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j ";
        }
        echo "<br>";
    }
}
numberTriangle(5);', "code3");

    // 4. PHP Script for Grade System
    createCodeBox("4. Grade System", 'function displayGrade($marks) {
    if ($marks >= 70) echo "Distinction";
    elseif ($marks >= 60) echo "First Class";
    elseif ($marks >= 40) echo "Pass";
    else echo "Fail";
}
displayGrade(75);', "code4");

    // 5. PHP Script for String Functions
    createCodeBox("5. String Functions", 'echo "String Length: " . strlen("Hello PHP");
echo "<br>String Reverse: " . strrev("Hello PHP");', "code5");

    // 6. PHP Script Demonstrating OOP in PHP
    createCodeBox("6. OOP Concept", 'class Car {
    public $brand;
    function __construct($brand) {
        $this->brand = $brand;
    }
    function showBrand() {
        return "Car brand is " . $this->brand;
    }
}
$myCar = new Car("Toyota");
echo $myCar->showBrand();', "code6");

    ?>

</body>

</html>