<?php
    session_start();
    function calc() {
        switch($_SESSION["operator"])
        {
            case '+':
                $_SESSION["result"] = $_SESSION["current"] + $_SESSION["saved"];
                $_SESSION["current"] = "";
            break;
            case '-':
                $_SESSION["result"] = $_SESSION["saved"] - $_SESSION["current"];
                $_SESSION["current"] = "";
            break;
            case '*':
                $_SESSION["result"] = $_SESSION["current"] * $_SESSION["saved"];
                $_SESSION["current"] = "";
            break;
            case '/':
                $_SESSION["result"] = $_SESSION["saved"] / $_SESSION["current"];
                $_SESSION["current"] = "";
            break;
        }
        $_SESSION["operator"] = "";
    }
    function addNumber() {
        if($_SESSION["current"] == 0) {
            $_SESSION["current"] = "";
            $_SESSION["current"] .= $_GET["input"];
        } else {
            $_SESSION["current"] .= $_GET["input"];
        }
    }
    function setOperator() {
        $_SESSION["saved"] += $_SESSION["current"];
        $_SESSION["current"] = 0;
        $_SESSION["operator"] = $_GET["input"];
    }
    function clear() {
        $_SESSION["current"] = 0;
        $_SESSION["saved"] = 0;
        $_SESSION["result"] = "";
        $_SESSION["operator"] = "";
    }
    if(isset($_GET["input"])) {
        $_SESSION["pressed"] = $_GET["input"];

        switch ($_SESSION["pressed"]) {
            case '0':
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
            case '7':
            case '8':
            case '9':
                addNumber();
            break;
            case '+':
            case '-':
            case '*':
            case '/':
                setOperator();
            break;
            case '=':
                calc();
            break;
            case 'c':
                clear();
            break;
        }

        header("Location: ./calc.php");
    }
