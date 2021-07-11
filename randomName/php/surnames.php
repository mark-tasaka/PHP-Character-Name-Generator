<?php

function africanSurnames()
{
    $surname = array ('Ba', 'Bah', 'Ballo', 'Cisse', 'Contee', 'Conteh', 'Diallo', 'Fall', 'Kone', 'Mensah', 'Ndiaye', 'Nwosu', 'Okafor', 'Okeke', 'Okoro', 'Osei', 'Owusu', 'Sall', 'Sane', 'Sarr', 'Sesay', 'Sow', 'Sy', 'Toure', 'Traore', 'Turay', 'Yeboah');

    $select = rand(0, (count($surname) - 1) );

    $name = $surname[$select];

    return $name;
    
}

function arabicSurnames()
{
    $surname = array ('Abadi', 'Abboud', 'Almasi', 'Amari', 'Antar', 'Antoun', 'Arian', 'Asfour', 'Asfour', 'Asghar', 'Asker', 'Aswad', 'Aswad', 'Atiyeh', 'Attia', 'Awad', 'Awad', 'Awad', 'Ba', 'Baba', 'Bahar', 'Bahar', 'Basara', 'Baz', 'Bishara', 'Bitar', 'Botros', 'Boulos', 'Boutros', 'Cham', 'Dagher', 'Daher', 'Deeb', 'Essa', 'Fakhoury', 'Ganem', 'Ganim', 'Gerges', 'Ghannam', 'Guirguis', 'Hadad', 'Haddad', 'Haik', 'Hajjar', 'Hakimi', 'Halabi', 'Hanania', 'Handal', 'Harb', 'Isa', 'Issa', 'Kalb', 'Kanaan', 'Kassab', 'Kassis', 'Kattan', 'Khouri', 'Khoury', 'Kouri', 'Koury', 'Maalouf', 'Maloof', 'Malouf', 'Maroun', 'Masih', 'Mifsud', 'Mikhail', 'Moghadam', 'Morcos', 'Nader', 'Nahas', 'Naifeh', 'Najjar', 'Naser', 'Nassar', 'Nazari', 'Quraishi', 'Qureshi', 'Rahal', 'Rahal', 'Sabbag', 'Sabbagh', 'Safar', 'Said', 'Salib', 'Saliba', 'Samaha', 'Sarraf', 'Sayegh', 'Seif', 'Shadid', 'Shalhoub', 'Shammas', 'Shamon', 'Shamoon', 'Shamoun', 'Sleiman', 'Tahan', 'Tannous', 'Toma', 'Totah', 'Touma', 'Tuma', 'Wasem', 'Zogby');

    $select = rand(0, (count($surname) - 1) );

    $name = $surname[$select];

    return $name;
    
}

?>