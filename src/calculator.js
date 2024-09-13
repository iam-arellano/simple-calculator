let display = document.getElementById("display");
let equation = "";

function calculate(value) {
    if (value === "=") {
        try {
            display.value = eval(equation);
            equation = "";
        } catch (error) {
            display.value = "Error";
        }
    } else if (value === "C") {
        display.value = "";
        equation = "";
    } else {
        equation += value;
        display.value = equation;
    }
}
