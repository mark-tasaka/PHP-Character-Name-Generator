<?php

function africanSurnames()
{
    $surname = array ('Ba', 'Bah', 'Ballo', 'Cisse', 'Contee', 'Conteh', 'Diallo', 'Fall', 'Kone', 'Mensah', 'Ndiaye', 'Nwosu', 'Okafor', 'Okeke', 'Okoro', 'Osei', 'Owusu', 'Sall', 'Sane', 'Sarr', 'Sesay', 'Sow', 'Sy', 'Toure', 'Traore', 'Turay', 'Yeboah');

    $select = rand(0, (count($surname) - 1) );

    $name = $surname[$select];

    return $name;
    
}

?>