<?php 
//for loop:
    echo "=======This is FOR loop=========\n";
    for ( $i = 0; $i <= 5; $i++ ) {
        echo $i;
        echo PHP_EOL;
    }
//for loop:
    echo "=======This is FOR loop=========\n";
    for ( $i = 0; $i < 5; $i++ ) {
        echo $i;
        echo PHP_EOL;
    }
//for loop:
    echo "=======This is FOR loop=========\n";
    for ( $i = 0; $i < 10; $i+=2 ) {
        echo $i;
        echo PHP_EOL;
    }
//for nested loop:
    echo "=======This is FOR nested loop=========\n";
    for ( $i = 1; $i <= 5; $i++ ) {
        echo $i;
        echo PHP_EOL;
        for ( $j = 0; $j < $i; $j++ ) {
            echo "*";
            
        }
    }
    echo PHP_EOL;

    echo "=======This is FOR nested loop=========";
    for ( $i = 0; $i <= 5; $i++) {
        //echo $i;
        echo PHP_EOL;
        for ( $j = 0; $j < $i; $j++ ) {
            echo "*";
            
        }
    }
    echo PHP_EOL;
//while loop:
    echo "=======This is FOR loop=========\n";
    $i = 0;
    while ( $i < 10 ) {
        echo $i;
        $i++;
        echo PHP_EOL;
    }
    echo PHP_EOL;

    echo "=======This is goto loop=========\n";
$i = 0;
loop:
if ($i < 10) {
  echo $i;
  echo PHP_EOL;
  $i++;
  goto loop;
}
echo PHP_EOL;

    echo "=======This is goto loop=========\n";
$i=1;
a:$i++;
echo $i. PHP_EOL;
if ($i < 10) goto a;

