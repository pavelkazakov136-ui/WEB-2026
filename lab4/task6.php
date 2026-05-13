<?php

if (isset($_POST['expression']) && $_POST['expression'] != '') {
    $expression = $_POST['expression'];
    if (!isset($expression[199])) {
        $stack = [];
        $top = -1;
        $curr = 0;
        $errorFlag = false;
        while (isset($expression[$curr])){
            if ($expression[$curr] >= '0' && $expression[$curr] <= '9') {
                $top++;
                $stack[$top] = (int)$expression[$curr];
            }
            elseif ($expression[$curr] == '-' && isset($stack[1])) {
                $num1 = $stack[$top];
                $stack[$top] = null;
                $top--;
                $num2 = $stack[$top];
                $stack[$top] = ($num2 - $num1);
            }
            elseif ($expression[$curr] == '+' && isset($stack[1])) {
                $num1 = $stack[$top];
                $stack[$top] = null;
                $top--;
                $num2 = $stack[$top];
                $stack[$top] = ($num2 + $num1);
            }
            elseif ($expression[$curr] == '*' && isset($stack[1])) {
                $num1 = $stack[$top];
                $stack[$top] = null;
                $top--;
                $num2 = $stack[$top];
                $stack[$top] = ($num2 * $num1);
            }
            else {
                if ($expression[$curr] != ' ') {
                    $errorFlag = true;
                    echo 'неправильно введены данные';
                    break;
                }
            }
            $curr++;
        }
        if (!isset($stack[1])) {
            echo $stack[0];
        }
        else {
            echo 'error input';
        }
    }
    else{
        echo 'overflow';
    }
}
else {
    echo 'no data';
}
