<?php

function africanGivenNamesMale()
{
    $giveNames = array ( 'Afram', 'Arali', 'Armani', 'Banji', 'Chata', 'Chiamaka', 'Chike', 'Dakarai', 'Deion', 'Deiondre', 'Dele', 'Dembe', 'Denzel', 'Dewayne', 'Diallo', 'Dikembe', 'Duante', 'Dume', 'Ebi', 'Essien', 'Faraji', 'Ibeamaka', 'Jamar', 'Jayvyn', 'Jevonte', 'Kabonero', 'Kabonesa', 'Kadeem', 'Kaleb', 'Kasi', 'Kendis', 'Kentay', 'Keshawn', 'Khalon', 'Kofi', 'Kwamin', 'Kwau', 'Kyan', 'Kyrone', 'La Vonn', 'Lado', 'Laken', 'Lakista', 'Lamech', 'Lavaughn', 'LeBron', 'Lisimba', 'Ludacris', 'Lugono', 'Luister', 'Mablevi', 'Mahdi', 'Makalo', 'Manu', 'Marques', 'Mashawn', 'Montraie', 'Mykelti', 'Nabulung', 'Naeem', 'Naftali', 'Napoleon', 'Nuru', 'Nwa', 'Obiajulu', 'Oja', 'Okal', 'Okapi', 'Okoth', 'Onaedo', 'Ontibile', 'Oringo', 'Orma', 'Otieno', 'Paulo', 'Peabo', 'Penda', 'Phornello', 'Polo', 'Quaashie', 'Quaddus', 'Quadrees', 'Quannell', 'Quarren', 'Quashawn', 'Quintavius', 'Quoitrel', 'Raimy', 'Rashon', 'Razi', 'Roshaun', 'Runako', 'Salim', 'Shaquille', 'Shevon', 'Shontae', 'Simba', 'Sulaiman', 'Tabansi', 'Tabari', 'Tamarius', 'Tavarius', 'Tavon', 'Tevaughn', 'Tevin', 'Trory', 'Tyrell', 'Uba', 'Ubanwa', 'Udenwa', 'Ulan', 'Uland', 'Umi', 'Useni', 'Usi', 'Uzoma', 'Uzondu', 'Vandwon', 'Vashon', 'Veltry', 'Verlyn', 'Voshon', 'Vul', 'Wasaki', 'Xayvion', 'Xhosas', 'Xyshaun', 'Yobachi', 'Zaid', 'Zareb', 'Zashawn', 'Girls', 'Mahdi', 'Maisha', 'Maizah', 'Malaika', 'Malkia', 'Mandisa', 'Manyara', 'Marjani', 'Mekell', 'Messina', 'Moesha', 'Muncel', 'Nafuna', 'Nailah', 'Naja', 'Najwa', 'Nakeisha', 'Nala', 'Narkaesha', 'Nasha', 'Nashaly', 'Nichelle', 'Niesha', 'Nimeesha', 'Nyeki', 'Okal', 'Okapi', 'Onaedo', 'Ontibile', 'Paka', 'Panya', 'Pasua', 'Pedzi', 'Pemba', 'Penda', 'Pita', 'Quanella', 'Quanesha', 'Quisha', 'Raimy', 'Ranielle', 'Rashida', 'Raziya', 'Ronnell', 'Safara', 'Safiya', 'Saidah', 'Salihah', 'Sekai', 'Semira');

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


?>