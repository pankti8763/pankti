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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var value = '';
            $('.number').on('click', function() {
                var number = $(this).text();
                value += number;
                $('#result').val(value).focus();

            });

            $('#equal').click(function() {
                let ans = eval($('#result').val());
                $('#result').val(ans).focus();
            });

            $('#clear').on('click', function() {
                value = '';
                $('#result').val('').focus();
            });

            $('#clear_last').on('click', function() {
                var clear = $('#result').val().slice(0, -1);
                $('#result').val(clear);
                value = clear.toString().focus();
            });

            $(document).on("keypress", function(event) {
                event.preventDefault();
                if (event.which >= '42' && event.which <= "57") {
                    event.originalEvent.key
                    $('#result').val(
                        $('#result').val() + event.originalEvent.key
                    );
                }
                if (event.which == 13) {
                    event.preventDefault();
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
        <button class="number">+</button>
        <button class="number">4</button>
        <button class="number">5</button>
        <button class="number">6</button>
        <button class="number">-</button>
        <button class="number">7</button>
        <button class="number">8</button>
        <button class="number">9</button>
        <button class="number">*</button>
        <button class="number">0</button>
        <button class="number">/</button>
        <button id="clear">C</button>
        <button id="clear_last">Cl</button>
        <button id="equal">=</button>
    </div>
</div>


</body>

</html>