<?php
/*Female Given Names */

function africanGivenNamesFemale()
{
    $giveNames = array ( 'Aba', 'Abeni', 'Abiba', 'Abmaba', 'Aissa', 'Ajua', 'Akosua', 'Armani', 'Arziki', 'Asha', 'Ashanti', 'Ayana', 'Baako', 'Beyonce', 'Bisa', 'Cacey', 'Cassietta', 'Catava', 'Chipo', 'Cleotha', 'Deiondre', 'Deka', 'Delu', 'Dericia', 'Diara', 'Doli', 'Dumi', 'Ebere', 'Ekua', 'Faizah', 'Fola', 'Gaynelle', 'Habika', 'Hawa', 'Isoke', 'Jendayi', 'Jira', 'Kabibe', 'Kabira', 'Kacela', 'Kacondra', 'Kadija', 'Kainda', 'Kambo', 'Kande', 'Kanene', 'Kanesha', 'Kanoni', 'Kapera', 'Kapuki', ' Karasi', 'Karimah', 'Karna', 'Kasinda', 'Keeya', 'Keilantra', 'Keisha', 'Keishla', 'Kendis', 'Kenyatta', 'Keshia', 'Keshon', 'Kesia', 'Keyah', 'Kia', 'Kianga', 'Kiden', 'Kiho', 'Kijana', 'Kinfe', 'Kione', 'Kirabo', 'Kiros', 'Kumani', 'Kuron', 'Kwashi', 'Kya', 'Lachelle', 'Lakin', 'Lanelle', 'Laquanna', 'Laqueta', 'Laquinta', 'Laquita', 'Lashawn', 'Latanya', 'Latifah', 'Latonya', 'Latoya', 'Layla', 'Lehana', 'Lewa', 'Lilovarti', 'Limber', 'Lisimba', 'Loba', 'Lolovivi', 'Lulu', 'Maha', 'Mahari ', ' Mahdi', 'Maisha', 'Maizah', 'Malaika', 'Malkia', 'Mandisa', 'Manyara', 'Marjani', 'Mekell', 'Messina', 'Moesha', 'Muncel', 'Nafuna', 'Nailah', 'Naja', 'Najwa', 'Nakeisha', 'Nala', 'Narkaesha', 'Nasha', 'Nashaly', 'Nichelle', 'Niesha', 'Nimeesha', 'Nyeki', 'Okal', 'Okapi', 'Onaedo', 'Ontibile', 'Paka', 'Panya', 'Pasua', 'Pedzi', 'Pemba', 'Penda', 'Pita', 'Quanella', 'Quanesha', 'Quisha', 'Raimy', 'Ranielle', 'Rashida', 'Raziya', 'Ronnell', 'Safara', 'Safiya', 'Saidah', 'Salihah', 'Sekai', 'Semira ', ' Serwa', 'Sesen', 'Shakila', 'Shakina', 'Shandra', 'Shaquana', 'Shasa', 'Shasmecka', 'Shateque', 'Sibongile', 'Sidone', 'Sika', 'Sima', 'Sitembile', 'Siyanda', 'Sukutai', 'Taifa', 'Taja', 'Takala', 'Talaitha', 'Tale', 'Talisa', 'Talisha', 'Tamasha', 'Tamika', 'Tamira', 'Tamyra', 'Tanasha', 'Tandice', 'Tanesha', 'Tanginika', 'Taniel', 'Tanisha', 'Tapanga', 'Tarana', 'Tariana', 'Tarisai', 'Tazara', 'Temima', 'Tendai', 'Terehasa', 'Thandiwe', 'Thema', 'Tiaret', 'Timberly', 'Tineka-Jawana', 'Tiombe', 'Tyesha', 'Tyrell', 'Tyrina ', ' Tyronica', 'Uchenna', 'Ulu', 'Urbi', 'Uwimana', 'Velinda', 'Wangari', 'Waseme', 'Wyetta', 'Yaa', 'Yetty', 'Zabia', 'Zaci', 'Zahwa', 'Zaila', 'Zaire', 'Zakiya', 'Zalika', 'Zanta', 'Zarina', 'Zasu', 'Zawadi', 'Zilli', 'Zina', 'Zoila' 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function africanAmericanGivenNamesFemale()
{
    $giveNames = array ('Beyonce', 'Cassietta', 'Cleotha', 'Deiondre', 'Dericia', 'Gaynelle', 'Kacondra', 'Kanesha', 'Keilantra', 'Kendis', 'Keshon', 'Lachelle', 'Lakin', 'Lanelle', 'Laquanna', 'Laqueta', 'Laquinta', 'Lashawn', 'Latanya', 'Latonya', 'Latoya', 'Mekell', 'Moesha', 'Muncel', 'Najwa', 'Nakeisha', 'Nichelle', 'Niesha', 'Quanella', 'Quanesha', 'Quisha', 'Ranielle', 'Ronnell', 'Shandra', 'Shaquana', 'Shateque', 'Sidone', 'Talaitha', 'Talisa', 'Talisha', 'Tamika', 'Tamira', 'Tamyra', 'Tanasha', 'Tandice', 'Tanginika', 'Taniel', 'Tanisha', 'Tariana', 'Temima', 'Timberly', 'Tyesha', 'Tyrell', 'Tyrina', 'Tyronica', 'Velinda', 'Wyetta', 'Yetty');

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function americanGivenNamesFemale()
{
    $giveNames = array ('Apple', 'Atlanta', 'Blue Angel', 'Brandie', 'Cady', 'Camera', 'Cricket', 'Dannon', 'Darena', 'Day', 'Dimaia', 'Dixie', 'Doli', 'Easter', 'Eternity', 'February', 'Fiolla', 'Gaeriel', 'Geena', 'Gentle', 'Heavenly', 'Iesha', 'Jakki', 'Jazz', 'Jo Dee', 'Jody', 'Joey', 'JoJo', 'Joni', 'Juice', 'Kacy', 'Kaden', 'Kadie', 'Kaelyn', 'Kailey', 'Kaili', 'Kailyn', 'Kalei', 'Kaley', 'Kalisa', 'Kallan', 'Kallima', 'Kalyn', 'Kameron', 'Kamryn', 'Kandra', 'Kaneesha', 'Kanisha', 'Kaprece', 'Karan ', 'Karbie', 'Karel', 'Karian', 'Karleen', 'Karsen', 'Kat', 'Katchi', 'Katima', 'Katrice', 'Kaydence', 'Kaylana', 'Kaylee', 'Kayleen', 'Kayley', 'Kaylin', 'Kelis', 'Kember', 'Kenadia', 'Kenisha', 'Kennita', 'Kerryn', 'Kesha', 'Kevlyn', 'Keyanna', 'Keyla', 'Kory', 'Kreeli', 'Krisalyn', 'Krystal', 'Kylia', 'Ladan', 'Laken', 'Lakeshia', 'Lalaine', 'Lanette', 'Laquiesha', 'Larby', 'Lashonda', 'Latasha', 'Latreece', 'Latrice', 'Lavada', 'Lavonn', 'Lawanda', 'Leatrix', 'Lecea', 'Leighna', 'Lesa', 'Linaeve', 'Lorelle ', 'Lorene', 'Lovey', 'Lucky', 'Lyn', 'Lynda', 'Lynelle', 'Lynsey', 'Lysette', 'Makaila', 'Makayla', 'Makeena', 'Malloren', 'Mandelina', 'Marge', 'Meridian', 'Minelli', 'Mink', 'Moon Unit', 'Nerice', 'Nevaeh', 'Nikki', 'Precious', 'Quanika', 'Quantina', 'Queisha', 'Quiana', 'Quianna', 'Quincylia', 'Rayanne', 'Ryo', 'Sailor', 'Sanne', 'Shanequa', 'Shaniqua', 'Shantelle', 'Shantina', 'Shawmbria', 'Shepry', 'Sherlyn', 'Sissy', 'Snow', 'Snowy', 'Star', 'Sugar', 'Symona', 'Taci', 'Tahlia', 'Tailynn', 'Takira', 'Tamatha ', 'Tamber', 'Tambrey', 'Tamya', 'Tangia', 'Tasmine', 'Tassilyn', 'Teal', 'Telissa', 'Tender', 'Teness', 'Terrylyn', 'Tessica', 'Tigerlily', 'Tinisha', 'Torie', 'Trish', 'Trixie', 'Tyanne', 'Tynice', 'Wade', 'Wanisha', 'Wednesday', 'Zabrina', 'Zariel', 'Zavrina', 'Zaylin', 'Ziarre' 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



?>