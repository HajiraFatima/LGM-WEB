<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="calculator.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 </head>
<body>

<table class="calculator" >
  <tr>
    <td colspan="3"> <input class="display-box" type="text" id="result" disabled /> </td>
 
    <td> <input type="button" value="C" onclick="clearScreen()" id="btn" /> </td>
  </tr>
  <tr>
    <td> <input type="button" value="1" onclick="display('1')" /> </td>
    <td> <input type="button" value="2" onclick="display('2')" /> </td>
    <td> <input type="button" value="3" onclick="display('3')" /> </td>
    <td> <input type="button" value="/" onclick="display('/')" /> </td>
  </tr>
  <tr>
    <td> <input type="button" value="4" onclick="display('4')" /> </td>
    <td> <input type="button" value="5" onclick="display('5')" /> </td>
    <td> <input type="button" value="6" onclick="display('6')" /> </td>
    <td> <input type="button" value="-" onclick="display('-')" /> </td>
  </tr>
  <tr>
    <td> <input type="button" value="7" onclick="display('7')" /> </td>
    <td> <input type="button" value="8" onclick="display('8')" /> </td>
    <td> <input type="button" value="9" onclick="display('9')" /> </td>
    <td> <input type="button" value="+" onclick="display('+')" /> </td>
  </tr>
  <tr>
    <td> <input type="button" value="." onclick="display('.')" /> </td>
    <td> <input type="button" value="0" onclick="display('0')" /> </td>
 
    <td> <input type="button" value="=" onclick="calculate()" id="btn" /> </td>
    <td> <input type="button" value="*" onclick="display('*')" /> </td>
  </tr>
</table>
 
<script>
    function clearScreen() {
    document.getElementById("result").value = "";
}
 

function display(value) {
    document.getElementById("result").value += value;
}
 
function calculate() {
    var p = document.getElementById("result").value;
    var q = eval(p);
    document.getElementById("result").value = q;
}
</script>

</html>
</body>
