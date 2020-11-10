<?php

#Asignación
$num = 9;
$lang = [
    'es' => 'Español',
    'en' => 'Inglés'
];

#Aritmética
echo "Suma 2+2 = " . ((int)2 + (int)2) . "<br>";
echo "Resta 2-2 = " . ((int)2 - (int)2) . "<br>";
echo "Multiplación 2*2 = " . ((int)2 * (int)2) . "<br>";
echo "División 2/2 = " . ((int)2 / (int)2) . "<br>";
echo "Módulo 2%2 = " . ((int)2 % (int)2) . "<br>";
echo "Exponencial 2**2 = " . ((int)2 ** (int)2);

#espacios
echo "<br><br><br>";

#comparación
#igual [==], valor '9'== 9 (true)
#igual [===], valor '9'=== 9 (false)
#diferencias [!=], valor
#diferencias [!==], valor - tipo
#<,>,<=,>=

#variables variables
$app = 'name';
$name = 'Platzi';
echo $$app; #Imprime las variables de la variable asignada
echo $app; #Imprime el valor de la variable

#espacios
echo "<br><br><br>";

#sentencias
#if
if ($app === 'miname') {
    echo "El nombre es ${app}";
} elseif ($app === 'tunombre') {
    echo "Tu nombre es ${app}";
} else {
    echo "No salio ningún nombre";
}

#switch
switch ($app) {
    case 'value':
        # code...
        break;

    default:
        # code...
        break;
}

#foreach
$miarreglo = [];
foreach ($miarreglo as $row) {
    # code...
}

#while
$a = 1;
while ($a <= 10) {
    # code...
    $a += 1;
}

#dowhile (Solo si se desea ejecutar el código una vez)
$b = 1;
do {
    # code...
    $b += 1;
} while ($b <= 10);

#for
for ($i = 0; $i < 10; $i++) {
    # code...
}
