<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>


    <form action="answer.php" method="post">
        <input type="number" id="number1" name="number1">
        <select name="operator" id="operator">
            <option>-</option>
            <option>+</option>
            <option>/</option>
            <option>*</option>
        </select>
        <input type="number" id="number2" name="number2">
        <button id="calculate" >Calculate</button>
        <button  name="calculate">Calculate in php</button>

        <p id="jsresult"></p>
        <p id="phpresult"></P>

    </form>



    <script src="script.js"></script>
</body>

</html>