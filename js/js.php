<html>

<body>
    <input type="text" id="myText">
    <!-- <input type="text" id="myText1"> -->
    <p id="demo"></p>
    <button onclick="myFunction()">Click here</button>
    <script>
        // var x = "Test";
        // var x = "Test1";

        function myFunction() {
            var mytext = document.getElementById("myText");
            // document.getElementById("myText1").value = myText.value;
            // const myText1 = document.getElementById("myText1");
            // myText1.remove();
            // document.getElementById("demo").innerHTML = mytext;
            var input = document.createElement("INPUT");
            document.body.appendChild(input);
        }
    </script>
</body>

</html>