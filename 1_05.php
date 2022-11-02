<?php
$userTxt = readline('Enter text: ');
$makeLower = strtolower($userTxt);
$txtToLetters = str_split($makeLower);
foreach($txtToLetters as $letter){
    switch($letter){
        case 'a':
            echo 2, ' ';
            break;
        case 'b':
            echo 22, ' ';
            break;
        case 'c':
            echo 222, ' ';
            break;
        case 'd':
            echo 3, ' ';
            break;
        case 'e':
            echo 33, ' ';
            break;
        case 'f':
            echo 333, ' ';
            break;
        case 'g':
            echo 4, ' ';
            break;
        case 'h':
            echo 44, ' ';
            break;
        case 'i':
            echo 444, ' ';
            break;
        case 'j':
            echo 5, ' ';
            break;
        case 'k':
            echo 55, ' ';
            break;
        case 'l':
            echo 555, ' ';
            break;
        case 'm':
            echo 6, ' ';
            break;
        case 'n':
            echo 66, ' ';
            break;
        case '0':
            echo 666, ' ';
            break;
        case 'p':
            echo 7, ' ';
            break;
        case 'q':
            echo 77, ' ';
            break;
        case 'r':
            echo 777, ' ';
            break;
        case 's':
            echo 7777, ' ';
            break;
        case 't':
            echo 8, ' ';
            break;
        case 'u':
            echo 88, ' ';
            break;
        case 'v':
            echo 888, ' ';
            break;
        case 'w':
            echo 9, ' ';
            break;
        case 'x':
            echo 99, ' ';
            break;
        case 'y':
            echo 999, ' ';
            break;
        case 'z':
            echo 9999, ' ';
            break;
        default:
            echo ' ';
    }
}


