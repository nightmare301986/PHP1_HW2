<?php
$string = "Тестовая строка, длЯ транслитаЩ!";
echo $string . "\n";

$alfabet = [
    'а' => 'a', 'б' => 'b', 'в' => 'v',
    'г' => 'g', 'д' => 'd', 'е' => 'e',
    'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];

function translate($string, $alfabet) {
    $result = "";
    for ($i = 0; $i < mb_strlen($string); $i++) {
        $letter = substr($string, $i, 1);
//mb_strlen($letter,"utf-8");
        if (isset($alfabet[mb_strtolower($letter)])) {
            if ($letter === mb_strtolower($letter)) {
                $latin_letter = $alfabet[$letter];
            } else {
                $latin_letter = ucfirst($alfabet[mb_strtolower($letter)]);
            }
        } else {
            $latin_letter = $letter;
        }
        $result .= $latin_letter;

    }
    return $result;
}


echo translate($string, $alfabet);