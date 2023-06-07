// var number = 50;
// function myFunction() {
//   var square = number * number;
//   console.log(square);
// }
// console.log(number); // 50
// myFunction();
$(document).ready(function () {
 
    $("#btn1").click(function () {
      $("#test1").text("Hello world!");
    });
    $("#btn2").click(function () {
      $("#test2").html("<b>Hello world!</b>");
    });
    $("#btn3").click(function () {
      $("#test3").val("Hello ");
    });
    $("#btn4").click(function () {
      $("p:first").append(" <b>Appended text</b>.");
    });
    $("#btn5").click(function () {
      $("#test4").remove();
    });
});
