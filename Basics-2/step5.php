<?php
function word_to_digit($word) {
    $wor = explode(';',$word);
    $result = '';
    foreach($wor as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;
                default: echo "The number is not correct";
        }
    }
    return $result;
}

print word_to_digit("seven")."\n";
print word_to_digit("ten")."\n";
?>