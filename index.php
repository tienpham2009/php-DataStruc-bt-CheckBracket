<?php

$string = "s*(s-a)*(s-b)*(s-c)";

function checkBracket($string): bool
{
    $length = strlen($string);
    $stack = new SplStack();
    for ($i = 0; $i < $length; $i++) {
        switch ($string[$i]) {
            case "(":
                $stack->push(0);
                break;
            case ")":
                $right = $stack->pop();
                if ($right !== 0) {
                    return false;
                }
                break;
            default:
                break;
        }
    }
    return $stack->isEmpty();

}

var_dump(checkBracket($string));
