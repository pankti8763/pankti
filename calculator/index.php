<html>

<head>
    <style>
        .calculator {
            width: 200px;
            margin: 0 auto;
        }

        #result {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
            font-size: 20px;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 5px;
        }

        button {
            padding: 10px;
            font-size: 18px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var operator = '';
            var operators = ['-', '+', '*', '/'];
            $(".number").on("click", function() {
                var value = $(this).text();
                var text = $("#result").val();
                // console.log(text);
                disable();
                $("#result").val(text + value).focus();
            });
            $('.operators').click(function() {
                // debugger
                var value = $(this).text();
                var first_operator = $("#result").val().length;
                // console.log(first_operator);
                if (first_operator == 0) {
                    alert("Please Enter First Number");
                    return false;
                }
                operator = value;
                if (['+', '-', '*', '/'].includes($("#result").val()[$("#result").val().length - 1])) {
                    let ans = $("#result").val().replace(
                        $("#result").val()[$("#result").val().length - 1],
                        value
                    );
                    $("#result").val(ans);
                    return false;
                }
                var text = $("#result").val();
                $("#result").val(text + value).focus();
            });

            function calculate() {
                // debugger
                var expression = $("#result").val();
                var values = expression.split(/[-+*/]/);
                var num1 = parseFloat(values[0]);
                var num2 = parseFloat(values[1]);
                var result;

                switch (operator) {
                    case "+":
                        result = num1 + num2;
                        break;
                    case "-":
                        result = num1 - num2;
                        break;
                    case "*":
                        result = num1 * num2;
                        break;
                    case "/":
                        if (num2 === 0) {
                            alert("Error: Division by zero");
                        } else {

                            result = num1 / num2;
                        }
                        break;
                }
                operator = '';
                $("#result").val(result);
                $('.operators').removeAttr("disabled");
            }

            function disable() {
                var value = $("#result").val();
                var check_operator = value[$("#result").val().length - 1];
                if (operators.includes(check_operator)) {
                    $(".operators").attr("disabled", "disabled");
                }
            }
            // function calculate() {
            //     var expression = $("#result").val();
            //     var numbers = expression.split(/[-+*/]/);
            //     var operators = expression.replace(/[0-9.]/g, '').split('');

            //     var result = parseFloat(numbers[0]);

            //     for (var i = 0; i < operators.length; i++) {
            //         var num = parseFloat(numbers[i + 1]);

            //         switch (operators[i]) {
            //             case '+':
            //                 result += num;
            //                 break;
            //             case '-':
            //                 result -= num;
            //                 break;
            //             case '*':
            //                 result *= num;
            //                 break;
            //             case '/':
            //                 result /= num;
            //                 break;
            //         }
            //     }
            //     $("#result").val(result);
            // }

            $('#equal').click(function() {
                // let ans = eval($('#result').val());
                // $('#result').val(ans).focus();
                calculate();

            });

            $('#clear').on('click', function() {
                value = '';
                $('#result').val('').focus();
                $('.operators').removeAttr("disabled");
            });

            $('#clear_last').on('click', function() {
                var clear = $('#result').val().slice(0, -1);
                $('#result').val(clear).focus();
                $('.operators').removeAttr("disabled");
                value = clear.toString();
            });

            $(document).on("keydown", function(event) {
                if (event.keyCode == 8)
                    $('.operators').removeAttr("disabled");
            });

            $(document).on("keypress", function(event) {
                event.preventDefault();
                // var value = $("#result").val();
                // var check_operator = value[$("#result").val().length -1];
                // if (['+', '-', '*', '/'].includes(check_operator)) {
                //     if (event.which >= '48' && event.which <= '57') {
                //     event.preventDefault();
                //     $(".operators").attr("disabled", "disabled");
                //     $('#result').val(
                //         $('#result').val() + event.originalEvent.key
                //     );
                //     return false;
                //     }
                // }
                if (event.which >= '42' && event.which <= '47') {
                    if (event.which === 46) {
                        event.preventDefault();
                        return false;
                    }
                    operator = event.originalEvent.key
                    var first_operator = $("#result").val().length;
                    // console.log(first_operator);
                    if (first_operator == 0) {
                        alert("Please Enter First Number");
                        return false;
                    }
                    if (['+', '-', '*', '/'].includes($("#result").val()[$("#result").val().length - 1])) {
                        let ans = $("#result").val().replace(
                            $("#result").val()[$("#result").val().length - 1],
                            operator
                        );
                        $("#result").val(ans);
                        return false;
                    }
                    $('#result').val(
                        $('#result').val() + event.originalEvent.key

                    );
                }
                if (event.which >= '48' && event.which <= '57') {
                    // var value = $('#result').val() + event.originalEvent.key;
                    // console.log(value);
                    // debugger
                    $('#result').val(
                        $('#result').val() + event.originalEvent.key
                    );
                }
                if (event.which == 13) {
                    event.preventDefault();
                    // debugger
                    $("#equal").trigger('click');
                }
            });

        });
    </script>

</head>

<div class="calculator">
    <input type="text" id="result">
    <div class="buttons">
        <button class="number">1</button>
        <button class="number">2</button>
        <button class="number">3</button>
        <button class="operators">+</button>
        <button class="number">4</button>
        <button class="number">5</button>
        <button class="number">6</button>
        <button class="operators">-</button>
        <button class="number">7</button>
        <button class="number">8</button>
        <button class="number">9</button>
        <button class="operators">*</button>
        <button class="number">0</button>
        <button class="operators">/</button>
        <!-- <button class="number">.</button> -->
        <button id="clear">C</button>
        <button id="clear_last">CL</button>
        <button id="equal">=</button>
    </div>
</div>


</body>

</html>