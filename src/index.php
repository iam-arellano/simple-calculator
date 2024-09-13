<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="calculator">
        <input type="text" class="display" id="display" readonly>
        <div class="keys">
            <button onclick="calculate('C')">C</button>
            <button onclick="calculate('7')">7</button>
            <button onclick="calculate('8')">8</button>
            <button onclick="calculate('9')">9</button>
            <button onclick="calculate('/')">/</button>
            <button onclick="calculate('4')">4</button>
            <button onclick="calculate('5')">5</button>
            <button onclick="calculate('6')">6</button>
            <button onclick="calculate('*')">*</button>
            <button onclick="calculate('1')">1</button>
            <button onclick="calculate('2')">2</button>
            <button onclick="calculate('3')">3</button>
            <button onclick="calculate('-')">-</button>
            <button onclick="calculate('0')">0</button>
            <button onclick="calculate('.')">.</button>
            <button onclick="calculate('+')">+</button>
            <button onclick="calculate('=')">=</button>
        </div>
    </div>

    <script src="calculator.js"></script>
</body>
</html>
