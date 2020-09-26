<?php

// nomer 1 (1 2 3 8 9 10)

function satu()
{
    for($a=1;$a<=10;$a++)
    {
        if($a>3 && $a<8)
        {
            echo "";
        }else{
            echo "$a  ";
        }
    }
}
satu();

echo PHP_EOL;

// nomer 2 (5 4 3 * *)

function dua()
{
    for ($b=5;$b>=1;$b--)
    {
        if($b==5 || $b==3)
        {
            echo " $b " ;
            continue;
        }
        elseif($b<3)
        {
            echo " * " ;
        continue;
        }
        else{
        
        echo $b;
        }
    }

}
dua();


echo PHP_EOL;

// nomor 3 (1a 2b 3a 4b)

function tiga()
{
    for($a=1;$a<=4;$a++)
{
    if($a %2 ==0)
    {
        echo $a."b  ";   
    }else{
        echo $a."a  ";
        
    }
}
}
tiga(); 


echo PHP_EOL;

// nomor 4 (1 2 3 A A A 7)

function empat()
{
    for($e=1;$e<8;$e++)
{
    if($e>3 && $e<7)
    {
        echo " A ";
    }else{
        echo $e."  ";
    }
}
}
empat();


echo PHP_EOL;

// nomer 5 (4 3 A 1 A)

function lima()
{
    for($a=4; $a>=0; $a--)
{
    
     if($a==2 || $a==0 )
     {
         echo "A  ";
         continue;
     }
    echo $a."  ";
}
}
lima();


echo PHP_EOL;

// nomer 6 (A A 2 3 4)

function enam()
{
    for($f=0; $f<=4; $f++)
{
    if($f<=1)
    {
        echo "A \t";
        continue;
    }
    echo $f."\t";
}

}
enam();

