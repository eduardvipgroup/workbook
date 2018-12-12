<?php
//обход директории для вывода файлов
$dir = new DirectoryIterator('../');
foreach ($dir as $file){
    if($file->isFile()){
        //echo $file->getExtension().'<br>';
        //echo $file->getFilename(). " (".$file->getSize()." байт) ".'<br>';
        //echo $file->getType().'<br>';
        echo $file->getPathname().'<br>';
    }
}

$time_start = microtime(true);

//Рекурсивный обход директории с помощью итератора RecursiveDirectoryIterator
$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('../'), TRUE);

foreach ($dir as $file) {
    echo str_repeat('++', $dir->getDepth()) . '<a href="'.$file.'">'.$file.'</a>' . '<br>';
}

$time_end = microtime(true);
$time = round($time_end - $time_start, 4);

echo "Время выполнения скрипта: <b style='color: red'>$time</b> секунд." . PHP_EOL. "<br>"; // перевод каретки
//Время выполнения скрипта: 0.004119873046875 секунд .

$time_start = microtime(true);

$arr = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('../'), TRUE);
$obj = new ArrayObject( $arr );
$iter = $obj->getIterator();
// Цикл для обработки объекта
while( $iter->valid() )
{
    $iter->key() . "=" . $iter->current() . "\n";
    $iter->next();
}

$time_end = microtime(true);
$time = round($time_end - $time_start, 8);
echo "Время выполнения скрипта: <b style='color: red'>$time</b> секунд.";
//Время выполнения скрипта: 4.6014785766602E-5 секунд



function quickSort($arr){

    $step = null; // для подсчета итераций
    $simple = null; // для подсчета простых действий

    $count = count($arr);
    if($count<=1){
        $simple++;

        return $arr;
    }
    $first_val=$arr[0];
    $left_arr=[];
    $right_arr=[];


    for($i=1;$i<$count;$i++){
        if($arr[$i]<=$first_val){
            $left_arr[$i] = $arr[$i];
            $step++; //
        }
        else{
            $right_arr[] = $arr[$i];
            $step++; //
        }
    }
    var_dump($step);


    $left_arr = quickSort($left_arr);
    $right_arr = quickSort($right_arr);
    return array_merge($left_arr,array($first_val),$right_arr);
}

quickSort([1, 3, 2, 5]);