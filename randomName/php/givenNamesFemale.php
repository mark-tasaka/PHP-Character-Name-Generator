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



function arabicGivenNamesFemale()
{
    $giveNames = array ('Abia', 'Afra', 'Ah lam', 'Aisha', 'Akilah', 'Alima', 'Aliye', 'Alyssa', 'Amber', 'Amina', 'Anan', 'Anara', 'Aneesa', 'Anisa', 'Ara', 'Ayasha', 'Azalea', 'Bashira', 'Basimah', 'Bibi', 'Cala', 'Chaka', 'Debbani', 'Duaa', 'Emani', 'Fatima', 'Ghada', 'Habiba', 'Halima', 'Haya', 'Hayfa', 'Jamila', 'Janan', 'Jarita', 'Kadejah', 'Kadin', 'Kahlilia', 'Kalea', 'Kaleigh', 'Kalila', 'Kaliyah', 'Kalyn', 'Kamila', 'Kamilah', 'Karida', 'Karima', 'Kayley', 'Kedma', 'Khadijah', 'Khalidah', 'Laela', 'Laila', 'Lakia', 'Laleh', 'Lama', 'Lamees', 'Lamis', 'Lamya', 'Leetefa', 'Leila', 'Lila', 'Lilah', 'Lilith', 'Lula', 'Mahala', 'Mahalath', 'Mahubeh', 'Maimun', 'Maja', 'Maliha', 'Malika', 'Manar', 'Manoush', 'Marta', 'Matana', 'Maysa', 'Mehri', 'Melika', 'Mina', 'Mona', 'Mouna', 'Muna', 'Muriel', 'Myiesha', 'Nadda', 'Nadira', 'Nafeeza', 'Nahid', 'Naimah', 'Natara', 'Navila', 'Nawar', 'Nayely', 'Nazirah', 'Nekia', 'Nenet', 'Nimah', 'Noura', 'Noya', 'Nura', 'Oma', 'Omaira', 'Qadira', 'Qamra', 'Qatai', 'Qitarah', 'Qubilah', 'Rabab', 'Rabiah', 'Raja', 'Rida', 'Rihana', 'Rukan', 'Saamiya', 'Sabiha', 'Sabirah', 'Sabra', 'Sadah', 'Sadira', 'Safa', 'Sahara', 'Saida', 'Saima', 'Sakinah', 'Saleema', 'Salimah', 'Salwa', 'Samiah', 'Samira', 'Samirah', 'Samma', 'Saree', 'Selima', 'Shakira', 'Shamara', 'Shammara', 'Siham', 'Soraya', 'Souzan', 'Sumayah', 'Sumehra', 'Taahira', 'Tabassum', 'Tahirah', 'Takia', 'Tameka', 'Taraneh', 'Tarja', 'Thana', 'Thara', 'Thuraya', 'Ulima', 'Umm', 'Unaiza', 'Vega', 'Wafa', 'Waheeda', 'Waja', 'Walada', 'Walida', 'Widjan', 'Xaviera', 'Yaminah', 'Yesenia', 'Yusra', 'Zaafirah', 'Zafaran', 'Zafina', 'Zahara', 'Zahidah', 'Zahira', 'Zahra', 'Zahwah', 'Zaida', 'Zaina', 'Zaira', 'Zane', 'Zanubiya', 'Zaray', 'Zaria', 'Zarifa', 'Zarola', 'Zay', 'Zayna', 'Zenda', 'Zuleika', 'Zulema'    
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function armenianGivenNamesFemale()
{
    $giveNames = array ("Erato", "Karyan", "Keran", "Lucine", "Ohanna", "Seda", "Siran", "Siroun", "Sirvat", "Taleen", "Taline", "Ziazan"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function celticGivenNamesFemale()
{
    $giveNames = array ("Fallon", "Flannery", "Kaie", "Kaitlyn", "Kassidy", "Kathleen", "Keena", "Keir", "Keira", "Keita", "Kendall", "Kenna", "Kera", "Kern", "Kiara", "Kirra", "Kylee", "Lachlan", "Lorna", "Maeve", "Malise", "Morgance", "Morgandy", "Nonnita", "Nuala", "Raelin", "Rhonda", "Saoirse", "Saraid", "Seanna", "Shela", "Shylah", "Tara", "Teranika", "Tieve", "Treasa", "Treva"  
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function chineseGivenNamesFemale()
{
    $giveNames = array ("Ah lam", "An", "Bao", "Chen", "Chen-chio", "Chen-tao", "Chow", "Chu hua", "Chun", "Chyou", "Da-Shin", "Da-xia", "Fai", "Fang", "Fang hua", "Genji", "Guanyin", "Hua", "Hui fang", "Jing Wei", "Jun", "Kimora", "Le", "Lee", "Lei", "Li", "Li Hua", "Li Mei", "Li Ming", "Lian", "Lien", "Lin", "Ling", "Lixue", "Mee", "Mei", "Mingmei", "Quan", "Shu Fang", "Ting", "Ushi", "Xiang", "Xiao-Niao", "Xiao-Xing", "Xin", "Xiu Mei", "Yin", "Yu", "Zan", "Zhengqiu", "Zhi", "Zhijuan", "Zi"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function czechGivenNamesFemale()
{
    $giveNames = array ("Bela", "Kalene", "Katarzyna", "Krista", "Krysta", "Marjeta", "Nadezda", "Pribislava", "Rickena", "Ryba", "Virsila", "Vondra", "Zdenek", "Zelenka", "Zuza"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function danishGivenNamesFemale()
{
    $giveNames = array ("Dagmar", "Madja", "Saffi", "Semine"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function dutchGivenNamesFemale()
{
    $giveNames = array ("Brandie", "Haven", "Hester", "Kaatje", "Kalie", "Liannaka", "Lieneke", "Lonikie", "Nelleke", "Schuyler", "Tryne", "Van"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function egyptianGivenNamesFemale()
{
    $giveNames = array ( "Chione", "Femi", "Hekenu", "Hekt", "Icess", "Kanika", "Khety", "Lapis", "Mariasha", "Nakia", "Nashwa", "Nebta", "Neferu", "Neith", "Nile", "Nubia", "Ramla", "Rennefer", "Sabola", "Sagira", "Sahirah", "Salama", "Sanura", "Suma", "Tauret", "Tetisheri" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function englishGivenNamesFemale()
{

    $giveNames = array (  "Addison", "Alivia", "Allaya", "Amarie", "Amaris", "Annabeth", "Annalynn", "Araminta", "Ardys", "Ashland", "Avery", "Bedegrayne", "Bernadette", "Billie", "Birdee", "Bliss", "Brice", "Brittany", "Bryony", "Cameo", "Carol", "Chalee", "Christy", "Corky", "Cotovatre", "Courage", "Daelen", "Dana", "Darnell", "Dawn", "Delsie", "Denita", "Devon", "Devona", "Diamond", "Divinity", "Duff", "Dustin", "Dusty", "Ellen", "Eppie", "Evelyn", "Everilda", "Falynn", "Fanny", "Faren", "Freedom", "Gala", "Galen", "Gardenia", " Germain", "Gig", "Gilda", "Giselle", "Githa", "Haiden", "Halston", "Heather", "Henna", "Honey", "Iblis", "Idalis", "Ilsa", "Jersey", "Jette", "Jill", "Jo Beth", "Joanna", "Kachelle", "Kade", "Kady", "Kaela", "Kalyn", "Kandice", "Karrie", "Karyn", "Katiuscia", "Kempley", "Kenda", "Kennice", "Kenyon", "Kiandra", "Kimber", "Kimn", "Kinsey", "Kipling", "Kipp", "Kismet", "Kolton", "Kordell", "Kortney", "Kourtney", "Kristal", "Kylar", "Ladawn", "Ladye", "Lainey", "Lajerrica", "Lake", "Lalisa", " Landen", "Landon", "Landry", "Laney", "Langley", "Lanna", "Laquetta", "Lari", "Lark", "Laurel", "Lavender", "Leane", "LeAnn", "Leanna", "Leanne", "Leanore", "Lee", "Leeann", "Leighanna", "Lexie", "Lexis", "Liberty", "Liliana", "Lillian", "Lindley", "Linne", "Liora", "Lisabet", "Liz", "Lizette", "Lona", "London", "Loni", "Lorena", "Loretta", "Lovette", "Lynde", "Lyndon", "Lyndsay", "Lynette", "Lynley", "Lynna", "Lynton", "Mada", "Maddox", "Madison", "Mae", "Maggie", "Mahogany", "Maia", " Maitane", "Maitland", "Malachite", "Mamie", "Manhattan", "Maridel", "Marla", "Marley", "Marliss", "Maud", "May", "Merleen", "Mersadize", "Mildred", "Milissa", "Millicent", "Mily", "Mopsa", "Mykala", "Nan", "Nautica", "Nelda", "Niki", "Nikole", "Nimue", "Nineve", "Norina", "Ofa", "Palmer", "Pansy", "Paris", "Patience", "Patricia", "Peony", "Petunia", "Pixie", "Pleasance", "Polly", "Primrose", "Princell", "Providence", "Purity", "Quanah", "Queena", "Quella", "Quinci", "Rae", "Rainbow", "Rainelle", "Raleigh", " Ralphina", "Randi", "Raven", "Rayelle", "Rea", "Remington", "Richelle", "Ripley", "Roberta", "Robin", "Rosemary", "Rowan", "Rumer", "Ryesen", "Sable", "Sadie", "Saffron", "Saga", "Saige", "Salal", "Salia", "Sandora", "Sebille", "Sebrina", "Selby", "Serenity", "Shae", "Shandy", "Shanice", "Sharman", "Shelbi", "Sheldon", "Shelley", "Sheridan", "Sherill", "Sheryl", "Sheyla", "Shirley", "Shirlyn", "Silver", "Skyla", "Skylar", "Sorilbran", "Sparrow", "Spring", "Starleen", "Stockard", "Storm", "Sudie", "Summer", " Sunniva", "Suzana", "Symphony", "Tacey", "Tahnee", "Taite", "Talon", "Tambre", "Tamia", "Taniya", "Tanner", "Tanzi", "Taria", "Tate", "Tatum", "Tawnie", "Taya", "Tayla", "Taylor", "Tayna", "Teddi", "Tena", "Tera", "Teri", "Teryl", "Thistle", "Timotha", "Tinble", "Tosha", "Totie", "Traci", "Tru", "Trudie", "Trudy", "Tryamon", "Tuesday", "Twila", "Twyla", "Tyne", "Udele", "Unity", "Vail", "Vala", "Velvet", "Venetta", "Walker", "Wallis", "Waneta", "Waverly", "Wendy", " Weslee", "Whitley", "Whitney", "Whoopi", "Wilda", "Wilfreda", "Willow", "Wilona", "Winifred", "Winsome", "Winter", "Wisdom", "Wrenn", "Yale", "Yardley", "Yeardley", "Yedda", "Young", "Ysolde", "Zadie", "Zanda", "Zavannah", "Zavia", "Zeolia", "Zinnia" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function finnishGivenNamesFemale()
{
    $giveNames = array ( "Kaija", "Kalle", "Louhi", "Preita", "Senja", "Tarja", "Terhi" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function frenchGivenNamesFemale()
{
    $giveNames = array ( "Abril", "Alair", "Alberta", "Alize", "Amour", "Avril", "Babette", "Bailey", "Bedelia", "Bernadette", "Caroline", "Caron", "Cerise", "Chablis", "Chanel", "Charlotte", "Cheriss", "Cheryl", "Claudette", "Colette", "Courtesy", "Cydney", "Darcie", "Darlene", "Deja", "Denise", "Desiree", "Destiny", "Didina", "Dior", "Djab", "Dominique", "Doreen", "Elaine", "Elise", "Elita", "Elle", "Eloise", "Emeraude", "Etoile", "Evonne", "Fifine", "Fleur", "Fontanna", "Fortune", "Garland", "Gay", "Geneva", "Gervaise", "Ghislaine", " Harriet", "Honor", "Isabeau", "Ivette", "Jacqueline", "Jaimie", "Janel", "Jolie", "Juliet", "Kadence", "Kalet", "Kordell", "Kyrielle", "L'Oréal", "Larue", "Lauren", "Laverne", "Leala", "Leontyne", "Lesh", "Lisette", "Lisle", "Lois", "Loring", "Lucetta", "Lucie", "Lunette", "Lyla", "Lyle", "Maine", "Mallory", "Manon", "Mardi", "Margo", "Marianne", "Maribel", "Marie", "Marion", "Marvelle", "Maureen", "Mauve", "Mavis", "Melisenda", "Merane", "Merla", "Merle", "Merlyn", "Meryl", "Miette", "Mignon", " Monique", "Moselle", "Nadia", "Naeva", "Nanette", "Narcisse", "Nathaly", "Ninon", "Noella", "Odetta", "Odette", "Odil", "Opaline", "Orane", "Oriel", "Ouida", "Page", "Pascale", "Perry", "Prunella", "Purvis", "Questa", "Quiterie", "Raylene", "Remy", "Renee", "Riva", "Rochelle", "Roslin", "Ruby", "Rui", "Sage", "Salene", "Sarotte", "Satin", "Scout", "Searlait", "Sebastiona", "Sennett", "Shannelle", "Shantay", "Shanton", "Sharice", "Shyann", "Sidonie", "Sigourney", "Solange", "Soleil", "Sorrel", "Sosie", "Stella", "Susie", "Suzette", "Sydney", "Sydni", "Symone", "Tallis", "Tallys", "Tayce", "Taylar", "Tempest", "Therese", "Tiffany", "Tilda", "Tolena", "Toni", "Tracy", "Troy", "Turquoise", "Vedette", "Vilette", "Yvonne", "Zanette" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function gaelicGivenNamesFemale()
{
    $giveNames = array (  "Blaine", "Blair", "Eilis", "Kalene", "Keaira", "Keelty", "Keely", "Keen", "Keitha", "Kellan", "Kennis", "Kerry", "Kevina", "Killian", "Kyna", "Lakyle", "Lee", "Mab", "Maeryn", "Maille", "Mairi", "Maisie", "Meara", "Meckenzie", "Myrna", "Nara", "Neala", "Nelia", "Oona", "Quinn", "Rhoswen", "Riane", "Riley", "Rogan", "Rona", "Ryan", "Sadb", "Shanley", "Shelagh", "Sine", "Siobhan", "Sorcha", "Ultreia", "Vevila"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function germanGivenNamesFemale()
{
    $giveNames = array ( "Adalgisa", "Adelaide", "Adolfina", "Aemilia", "Alberta", "Alice", "Alisha", "Amelia", "Amerie", "Anneliese", "Antje", "Arabelle", "Aria", "Arrietty", "Aubrey", "Berit", "Berlynn", "Binney", "Bluma", "Bruna", "Callan", "Cecania", "Clay", "Dagmar", "Dale", "Dame", "Della", "Dustin", "Ebba", "Edwina", "Elfriede", "Emma", "Emmylou", "Ermine", "Faiga", "Farica", "Frederica", "Frieda", "Galiana", "Geraldine", "Gertrude", "Gretchen", "Griselda", "Hallam", "Heidi", "Henrietta", "Hilda", "Honey", "Ilsa", "Imelda", " Irma", "Isela", "Jarvia", "Jenell", "Jerolyn", "Johanna", "Joss", "Kalona", "Karel", "Karla", "Karlotta", "Kateri", "Katrin", "Katrina", "Kelby", "Kerstin", "Klarissa", "Leisel", "Leoma", "Leona", "Leonie", "Liese", "Liesel", "Lise", "Lorelei", "Lotte", "Louanna", "Louisa", "Luana", "Lucina", "Lysa", "Mallory", "Mandel", "Mariel", "Maritza", "Mathilda", "Meryl", "Meta", "Mina", "Morgen", "Nixie", "Norberta", "Nordica", "Notburga", "Odelia", "Odella", "Olinda", "Oma", "Orlantha", "Ormanda", " Otylia", "Quartz", "Rae", "Rayma", "Richelle", "Roderica", "Rolanda", "Rory", "Rosamund", "Schmetterling", "Senta", "Serilda", "Sieglinde", "Silke", "Sommer", "Sonnenschein", "Tabea", "Tawanda", "Tillie", "Trude", "Trula", "Ulla", "Ulrika", "Ulva", "Uta", "Viveka", "Walda", "Wanda", "Wilhelmina", "Wilma", "Winola", "Zelda", "Zelinda", "Zelma", "Zenzi"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function greekGivenNamesFemale()
{
    $giveNames = array ( "Acantha", "Adara", "Adelpha", "Adrienne", "Aegle", "Afrodite", "Agape", "Agata", "Aglaia", "Agnes", "Aileen", "Alcina", "Aldora", "Alethea", "Alexandra", "Alice", "Alida", "Alisha", "Alixia", "Althea", "Aludra", "Amara", "Ambrosia", "Amethyst", "Aminta", "Amphitrite", "Anastasia", "Andrea", "Andromache", "Andromeda", "Angela", "Anstice", "Antonia", "Anysia", "Aphrodite", "Apus", "Arali", "Aretha", "Ariadne", "Ariana", "Arissa", "Artemia", "Artemis", "Astrid", "Athena", "Atropos", "Aurora", "Avel", "Basalt", "Basilissa", " Bernice", "Bloodstone", "Calandra", "Calantha", "Calista", "Calliope", "Candace", "Candra", "Carina", "Carisa", "Cassandra", "Cassiopeia", "Catherine", "Celandia", "Cerelia", "Chalcedony", "Charisma", "Christina", "Cinnabar", "Clio", "Cloris", "Clotho", "Colette", "Cora", "Cressida", "Cybill", "Cyd", "Cynthia", "Damaris", "Damia", "Daphne", "Daria", "Daryn", "Dasha", "Dea", "Delbin", "Della", "Delphine", "Delta", "Demetria", "Desdemona", "Desma", "Despina", "Dionne", "Diotama", "Dora", "Dorcas", "Doria", "Dorian", "Doris", " Dorothy", "Dorrit", "Drew", "Drucilla", "Dysis", "Ebony", "Effie", "Eileen", "Elani", "Eleanor", "Electra", "Elke", "Elma", "Elodie", "Eos", "Eppie", "Eris", "Ethereal", "Eudora", "Eugenia", "Eulalia", "Eunice", "Euphemia", "Euphrosyne", "Euterpe", "Evadne", "Evangeline", "Filmena", "Gaea", "Galina", "Gelasia", "Gemini", "Georgia", "Greer", "Greta", "Harmony", "Hebe", "Hecate", "Hecuba", "Helen", "Hera", "Hermia", "Hermione", "Hero", "Hestia", "Hilary", "Hippolyta", "Hyacinth", "Hydra", "Ianthe", " Ilena", "Iolite", "Iona", "Irene", "Iris", "Isidore", "Jacey", "Jacinta", "Jolanta", "Kacia", "Kaethe", "Kaia", "Kaija", "Kairi", "Kairos", "Kali", "Kalidas", "Kalika", "Kalista", "Kalli", "Kalliope", "Kallista", "Kalonice", "Kalyca", "Kanchana", "Kandace", "Kara", "Karana", "Karen", "Karin", "Karis", "Karissa", "Karlyn", "Kasandra", "Kassandra", "Katarina", "Kate", "Katherine", "Katina", "Khina", "Kineta", "Kirsten", "Kolina", "Kora", "Koren", "Kori", "Korina", "Kosma", "Kristen", "Kristi", " Kristina", "Kristine", "Kristy", "Kristyn", "Krysten", "Krystina", "Kynthia", "Kyra", "Kyrene", "Kyria", "Lacy", "Lali", "Lareina", "Laria", "Larina", "Larisa", "Larissa", "Lasthenia", "Latona", "Layna", "Leandra", "Leda", "Ledell", "Lenore", "Leonora", "Leta", "Letha", "Lethia", "Lexi", "Lexie", "Lidia", "Lilika", "Lina", "Linore", "Litsa", "Livana", "Livvy", "Lotus", "Lyanne", "Lycorida", "Lycoris", "Lydia", "Lydie", "Lykaios", "Lyra", "Lyric", "Lyris", "Lysandra", "Macaria", "Madalena", " Madelia", "Madeline", "Madge", "Maeve", "Magan", "Magdalen", "Maia", "Mala", "Malissa", "Mara", "Margaret", "Marigold", "Marilee", "Marjorie", "Marlene", "Marmara", "Maya", "Medea", "Medora", "Megan", "Megara", "Melanctha", "Melanie", "Melba", "Melenna", "Melia", "Melinda", "Melissa", "Melitta", "Melody", "Melpomene", "Minta", "Mnemosyne", "Mona", "Muse", "Myda", "Myrtle", "Naia", "Naida", "Naiyah", "Narcissa", "Narella", "Natasha", "Nell", "Nellie", "Nellis", "Nelly", "Neola", "Neoma", "Nerin", " Nerina", "Neysa", "Nichole", "Nicia", "Nicki", "Nicole", "Nike", "Nikita", "Niobe", "Nitsa", "Noire", "Nora", "Nyla", "Nysa", "Nyssa", "Nyx", "Obelia", "Oceana", "Odea", "Odessa", "Ofelia", "Olympia", "Omega", "Onyx", "Ophelia", "Ophira", "Orea", "Oriana", "Padgett", "Pallas", "Pamela", "Pandora", "Panphila", "Parthenia", "Pelagia", "Penelope", "Phedra", "Philadelphia", "Philippa", "Philomena", "Phoebe", "Phyllis", "Pirene", "Prisma", "Psyche", "Ptolema", "Pyhrrha", "Pyrena", "Pythia", "Raissa", " Rasia", "Rene", "Rhea", "Rhoda", "Rhodanthe", "Rita", "Rizpah", "Saba", "Sandra", "Sandrine", "Sapphira", "Sappho", "Seema", "Selena", "Selina", "Sema", "Sherise", "Sibley", "Sirena", "Sofi", "Sondra", "Sophie", "Sophronia", "Spirituality", "Spodumene", "Stacia", "Stefania", "Stephaney", "Stesha", "Sybella", "Sybil", "Syna", "Tabitha", "Talia", "Talieya", "Taliyah", "Tallya", "Tamesis", "Tanith", "Tansy", "Taryn", "Tasha", "Tasia", "Tedra", "Teigra", "Tekla", "Telma", "Terentia", "Terpsichore", "Terri", " Tess", "Thaddea", "Thaisa", "Thalassa", "Thalia", "Than", "Thea", "Thelma", "Themis", "Theodora", "Theodosia", "Theola", "Theone", "Theophilia", "Thera", "Theresa", "Thisbe", "Thomasa", "Thracia", "Thyra", "Tiana", "Tienette", "Timandra", "Timothea", "Titania", "Titian", "Tomai", "Tona", "Tresa", "Tressa", "Triana", "Trifine", "Trina", "Tryna", "Urania", "Uriana", "Vanessa", "Vasiliki", "Velma", "Venus", "Voleta", "Xandria", "Xandy", "Xantha", "Xenia", "Xenobia", "Xianthippe", "Xylia", "Xylona", "Yolanda", " Yolie", "Zagros", "Zale", "Zanaide", "Zandra", "Zanita", "Zanthe", "Zebina", "Zelia", "Zena", "Zenaide", "Zenia", "Zenobia", "Zenon", "Zera", "Zeta", "Zeuti", "Zeva", "Zinaida", "Zoe", "Zosima"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function hawaiianGivenNamesFemale()
{
    $giveNames = array ( "Alana", "Aloani", "Aloha", "Alohi", "Alona", "Anani", "Aulii", "Edena", "Haimi", "Iolana", "Kai", "Kailani", "Kaili", "Kaimi", "Kalama", "Kalani", "Kalena", "Kaley", "Kali", "Kalia", "Kalina", "Kaloni", "Kamea", "Kawena", "Keahi", "Keala", "Keandra", "Keanu", "Keiki", "Keilana", "Kekona", "Keola", "Kiana", "Kiele", "Kina", "Kinipela", "Konane", "Lahela", "Lanai", "Lani", "Lanikai", "Leilana", "Liliha", "Lilo", "Loe", "Lokelani", "Luana", "Mahala", "Mahina", "Maik", " Makaio", "Makala", "Makana", "Makani", "Makelina", "Malana", "Maleah", "Malia", "Malu", "Mei", "Mekia", "Melia", "Mily", "Nalani", "Nalanie", "Nallely", "Napua", "Nira", "Noelani", "Okelani", "Ola", "Oliana", "Olina", "Onaona", "Palakika", "Palila", "Paterekia", "Pela", "Pelenakino", "Pelika", "Pelulio", "Puakai", "Puanani", "Roselani", "Sasilvia", "Ululani", "Walanika", "Wanaao", "Wanika" 
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function hebrewGivenNamesFemale()
{
    $giveNames = array ( "Aaliyah", "Aari", "Aase", "Abbellonna", "Abie", "Abigail", "Abira", "Abital", "Abra", "Achazia", "Ada", "Adamina", "Adena", "Affera", "Afra", "Ahava", "Ahmose", "Akiva", "Aliza", "Alumit", "Amissa", "Anita", "Ann", "Apphia", "Araminta", "Arashel", "Arella", "Ariel", "Arnon", "Ascah", "Asenath", "Asenka", "Asisa", "Atara", "Aviva", "Ayala", "Ayla", "Ayn", "Bara", "Basha", "Bathsheba", "Becky", "Bena", "Beryl", "Bess", "Bethany", "Bettina", "Beulah", "Bina", "Bo", " Bracha", "Carmel", "Chaka", "Chanah", "Chaya", "Daba", "Dagen", "Dalia", "Danielle", "Danuta", "Dara", "Davan", "Daya", "Dayla", "Deborah", "Delilah", "Denna", "Derora", "Dinah", "Diza", "Dodie", "Dorrit", "Eden", "Edena", "Edna", "Edria", "Efrosini", "Elam", "Eleora", "Eliann", "Elizabeth", "Emanuelle", "Endora", "Eve", "Gabriela", "Galya", "Gana", "Gayora", "Gelilah", "Geva", "Gilana", "Gilla", "Gita", "Giuseppina", "Hadara", "Hadassa", "Hannah", "Hariel", "Hava", "Heba", " Hedia", "Hedva", "Hepziba", "Hila", "Hinda", "Hosea", "Ideh", "Idit", "Ikia", "Ilana", "Iras", "Isela", "Iva", "Ivana", "Ivria", "Iyana", "Jael", "Jaen", "Jana", "Jane", "Janese", "Janica", "Jariah", "Jedida", "Jemima", "Jenay", "Jenova", "Jerusha", "Jesse", "Jessica", "Jezebel", "Jimena", "Joakima", "Joan", "Joaquina", "Jobey", "Joelle", "Jonina", "Jora", "Jordan", "Josephine", "Josie", "Judith", "Kadisha", "Kaila", "Kalanit", "Kaleigh", "Kanara", "Karmel", "Karmina", " Katriel", "Kay", "Kayla", "Kazia", "Kefira", "Keilah", "Kelila", "Kenia", "Keturah", "Ketzia", "Kezia", "Kitra", "Kizzy", "Kochava", "Laah", "Labana", "Lael", "Laela", "Laila", "Lailie", "Laisha", "Lavey", "Lavi", "Lea", "Leah", "Ledah", "Leeza", "Leia", "Lemuela", "Lena", "Leora", "Levia", "Lexine", "Lia", "Liana", "Libba", "Libby", "Liora", "Lirit", "Lisa", "Lisbet", "Lisea", "Livia", "Liza", "Lizbeth", "Lizeth", "Lois", "Lysia", "Macayle", "Madeline", " Magda", "Magdalen", "Magena", "Mahala", "Mahalia", "Mahola", "Malca", "Malha", "Malina", "Malka", "Mangena", "Mara", "Maretta", "Maria", "Mariah", "Mariam", "Mariasha", "Marilynne", "Marna", "Marnina", "Marsena", "Mary", "Matana", "Mathea", "Mattea", "May", "Meera", "Mehitabel", "Meira", "Mia", "Michaela", "Minna", "Mira", "Mireya", "Miriam", "Moria", "Moselle", "Nancy", "Nanna", "Naomi", "Nasya", "Natania", "Nataniella", "Naysa", "Nediva", "Neorah", "Neria", "Netta", "Neviah", "Nira", " Nisi", "Nitza", "Nitzana", "Nizana", "Noemi", "Nuria", "Odeda", "Odele", "Odera", "Ofira", "Oma", "Oprah", "Oralee", "Orpah", "Ozora", "Paz", "Peliah", "Peninah", "Raanana", "Rachel", "Rahab", "Raizel", "Rakel", "Raphaella", "Rayna", "Reba", "Rebecca", "Rena", "Richael", "Rimona", "Rishona", "Ruth", "Sabeans", "Sabra", "Saloma", "Salome", "Samara", "Samatha", "Samicah", "Sammy-Jo", "Samuela", "Sarah", "Sarahi", "Sarai", "Sarea", "Sari", "Sariah", "Sela", "Seraphina", "Shaina", " Shaine", "Shalom", "Shamira", "Shana", "Shanae", "Shanna", "Sharay", "Shari", "Sharis", "Sharon", "Shawn", "Shayna", "Sheba", "Sheera", "Shelah", "Shera", "Sheri", "Sherine", "Sherri", "Shira", "Shobi", "Shoshannah", "Shulamit", "Simone", "Soshannah", "Susan", "Sydelle", "Taanach", "Tahlia", "Talia", "Talor", "Tamara", "Tamitha", "Tamma", "Tammy", "Tamra", "Tebeth", "Tema", "Temina", "Temira", "Thadine", "Thirza", "Tiarra", "Timera", "Tirza", "Tivona", "Tobit", "Tora", "Tova", "Tzila", " Tziporah", "Tzippa", "Tzofit", "Tzvia", "Udiya", "Uriah", "Vada", "Varda", "Vida", "Vidette", "Ximena", "Yaara", "Yachne", "Yadira", "Yael", "Yaffa", "Yakira", "Yanira", "Yardena", "Yardeniya", "Yavonna", "Ydel", "Yenta", "Yesmina", "Yoana", "Yona", "Yoninah", "Yovela", "Yudelle", "Zaanannim", "Zacharee", "Zahari", "Zahava", "Zaide", "Zair", "Zakia", "Zalia", "Zambda", "Zan", "Zana", "Zanoah", "Zara", "Zareah", "Zareen", "Zarephath", "Zaretan", "Zati", "Zayit", "Zayra", "Zaza", " Zeanes", "Zee", "Zehava", "Zelek", "Zella", "Zelotes", "Zelpha", "Zemaraim", "Zemil", "Zeph", "Zephath", "Zeredah", "Zeresh", "Zerlinda", "Zeruah", "Zethel", "Zevida", "Zez", "Zhalore", "Zia", "Ziahon", "Zibiah", "Zila", "Ziona", "Zippora", "Zisel", "Zita", "Zoleen", "Zonda", "Zula", "Zuriel"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}




function hindiGivenNamesFemale()
{
    $giveNames = array ("Akuti", "Alka", "Aloani", "Amari", "Ami", "Anjali", "Anuradha", "Anusha", "Aparna", "Aruna", "Ayana", "Basanti", "Bharati", "Bhuma", "Bina", "Bindiya", "Chandra", "Charu", "Chhaya", "Chitrangda", "Darshana", "Deepa", "Deva", "Devaki", "Dharma", "Dipti", "Divya", "Dristi", "Ekta", "Gatha", "Gayatri", "Gopi", "Harhsa", "Hema", "Henna", "Hiten", "India", "Indira", "Indu", "Ishara", "Jahnavi", "Jamuna", "Jaya", "Jayani", "Juhy", "Jyoti", "Kailas", "Kajal", "Kajol", "Kala", "Kali", "Kalinda", "Kamakshi", "Kamala", "Kamana", "Kamna", "Kaniya", "Kantha", "Kanushi", "Karishma", "Karka", "Karya", "Kasi", "Katyayani", "Kausalya", "Kaveri", "Kavi", "Kavindra", "Kavita", "Kazanna", "Kerani", "Ketika", "Kimatra", "Kiran", "Kirana", "Kirit", "Kirsi", "Kirtana", "Kirti", "Kitu", "Komal", "Komala", "Kriti", "Krupa", "Krupali", "Kshama", "Kuhuk", "Kumud", "Kunti", "Laasya", "Laksha", "Lakshmi", "Lalan", "Lalasa", "Lalima", "Lalita", "Lalitamohana", "Lata", "Latika", "Lavani", "Lavanya", "Laxmi", "Lolaksi", "Madhavi", "Madhu", "Madhul", "Madhulika", "Madhur", "Madhuri", "Magan", "Mahima", "Mahita", "Maina", "Maitryi", "Makara", "Malati", "Malavika", "Maliha", "Mallika", "Malti", "Mamta", "Manasa", "Manasi", "Manavi", "Mandara", "Mandeep", "Manisha", "Manjari", "Manju", "Manjula", "Manjusha", "Manushi", "Maruti", "Matangi", "Matrika", "Maya", "Mayuri", "Medha", "Meena", "Meenakshi", "Megha", "Meghana", "Mela", "Mena", "Menaka", "Mesha", "Minda", "Mitra", "Mohini", "Monisha", "Mridul", "Mrinalini", "Mukul", "Naina", "Namrata", "Nanda", "Nandini", "Nandita", "Natesa", "Navdeep", "Nayana", "Neeharika", "Neelam", "Neelja", "Neema", "Neena", "Neerja", "Neeta", "Neha", "Nidra", "Niju", "Nilima", "Nilini", "Niloufer", "Nimisha", "Nimmi", "Niradhara", "Niral", "Nirguna", "Nirmala", "Nirupa", "Nirvana", "Nisha", "Nitara", "Niti", "Nitu", "Nitya", "Niverta", "Niyati", "Ojal", "Paavana", "Paavani", "Parvani", "Pausha", "Pavana", "Pollyam", "Pragyata", "Prarthana", "Prashanti", "Pratiksha", "Pratima", "Preeti", "Prema", "Premila", "Prerana", "Preyasi", "Pritha", "Priti", "Pritika", "Priya", "Priyanka", "Pulkita", "Pundari", "Punita", "Purandhri", "Purnima", "Purva", "Purvaja", "Purvi", "Pusti", "Radha", "Radhika", "Rafa", "Ragini", "Rajni", "Rakhil", "Raksha", "Ramya", "Rani", "Ranjana", "Ranjita", "Rasika", "Rasna", "Rati", "Reena", "Rekha", "Reman", "Renuka", "Reshma", "Revati", "Rhu", "Riddhi", "Rima", "Rina", "Rishabh", "Ritu", "Rohana", "Rohini", "Roshni", "Ruchi", "Ruchika", "Ruchira", "Rudrani", "Rukmini", "Rupa", "Rupal", "Rupali", "Sabita", "Sachi", "Sadhana", "Sagara", "Saheli", "Sahiba", "Sahila", "Sajili", "Sajni", "Sakina", "Sakti", "Saloni", "Samiksha", "Sampriti", "Samta", "Sanchay", "Sandya", "Sangita", "Saniya", "Sanjna", "Sanjula", "Sanyogita", "Sanyukta", "Sapna", "Sarasvati", "Saravati", "Sarika", "Sarisha", "Sarita", "Sarmistha", "Saryu", "Sashi", "Sasthi", "Satyavati", "Saumya", "Saundarya", "Savarna", "Savita", "Savitri", "Sayana", "Seema", "Sesha", "Sevati", "Sevita", "Shaila", "Shailaja", "Shaili", "Shalini", "Shamita", "Shanata", "Shanata", "Shanika", "Shantah", "Shante", "Shanti", "Sharda", "Sharmila", "Sharmistha", "Sharvani", "Shashi", "Sheetal", "Shobha", "Shobhna", "Shradhdha", "Shreya", "Shri", "Shridevi", "Shrijani", "Shruti", "Shubha", "Shyla", "Siddhi", "Simoni", "Simran", "Sirisha", "Smita", "Smridhi", "Smriti", "Smriti", "Sneh", "Sneha", "Snigdha", "Somatra", "Sona", "Sonakshi", "Sonal", "Sonika", "Sraddha", "Srilata", "Sripada", "Srishti", "Sruti", "Subhadra", "Subhaga", "Subhangi", "Subhuja", "Suchi", "Suchitra", "Sudevi", "Sudha", "Sujata", "Sukanya", "Suksma", "Sumana", "Sumanna", "Sumati", "Sundarai", "Sunee", "Sunila", "Sunita", "Suniti", "Suparna", "Suprabha", "Supriti", "Supriya", "Surabhi", "Suravinda", "Surotama", "Suruchi", "Surupa", "Surya", "Sushanti", "Sushma", "Sushmita", "Susila", "Suvarna", "Suvrata", "Swarupa", "Sweta", "Tamali", "Tamanna", "Tanaya", "Tanika", "Tanu", "Tanuja", "Tanushi", "Tanvi", "Tapi", "Tapti", "Tarala", "Tarannum", "Tarika", "Tejal", "Teji", "Toral", "Trishna", "Triveni", "Trupti", "Trusha", "Tuhina", "Tulasi", "Tusti", "Udaya", "Ujila", "Ujwala", "Uma", "Umali", "Unnati", "Urmila", "Urvasi", "Usha", "Ushmil", "Uttara", "Vachya", "Vaishali", "Vandana", "Vani", "Vanika", "Vanita", "Vanjan", "Varana", "Varsha", "Varuni", "Vasanta", "Vasavi", "Vasudha", "Vasumati", "Veda", "Veena", "Vibhuti", "Vidya", "Vimala", "Vinata", "Vinaya", "Vineeta", "Visala", "Vrinda", "Vyoma", "Waheeda", "Yaksha", "Yamini", "Yamuna", "Yashona", "Yauvani", "Yogini", "Yogita", "Zankhana", "Zarna"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function hungarianGivenNamesFemale()
{
    $giveNames = array ("Bela", "Kamella", "Katalin", "Katoka", "Klara", "Klarika", "Lenci", "Lilike", "Lorand", "Nusa", "Onella", "Zigana", "Zizi", "Zsa Zsa"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function indianGivenNamesFemale()
{
    $giveNames = array ("Ketaki", "Kusum", "Narmada", "Naveena", "Nishtha", "Nivedita", "Sahana", "Salena", "Sanchali", "Sanchaya", "Sanjana", "Shivani", "Shubhada", "Sumitra", "Swati", "Tarangini", "Tarjani", "Trilochana", "Zaqaria"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function irishGivenNamesFemale()
{
    $giveNames = array ( "Adan", "Aella", "Afric", "Ailis", "Akaisha", "Alana", "Alison", "Arlene", "Bedelia", "Birgit", "Breck", "Breena", "Brena", "Brenda", "Brice", "Bridget", "Cacey", "Caitlin", "Callan", "Cara", "Carey", "Carin", "Casey", "Cassidy", "Ceara", "Chay", "Ciannait", "Clodagh", "Colleen", "Cordelia", "Darby", "Darcie", "Daryn", "Derry", "Dierdre", "Donelle", "Duvessa", "Dymphna", "Earlene", "Ennis", "Erin", "Farran", "Feena", "Gail", "Gilda", "Glen", "Guinevere", "Haley", "Hiolair", "Hisolda", " Ilene", "Ina", "Innis", "Kacey", "Kaci", "Kaelin", "Kalin", "Kasey", "Kasie", "Kassie", "Katelin", "Katen", "Katlin", "Kayley", "Keanna", "Keara", "Keegan", "Keeley", "Keelia", "Keelin", "Kella", "Kellen", "Kelly", "Kellyn", "Kennedy", "Kevina", "Kianna", "Kiarra", "Kiera", "Kiley", "Killian", "Kyara", "Kyla", "Kyle", "Kyleigh", "Kylene", "Lanni", "Lassie", "Lee", "Liadan", "Mackenzie", "Maegan", "Maeron", "Maeve", "Maire", "Mallow", "Maura", "Maureen", "Meryl", "Moira", " Mollie", "Mona", "Muna", "Muriel", "Murphy", "Nelda", "Nevina", "Nya", "Nyah", "Nyasia", "Ohnicio", "Onora", "Oola", "Oria", "Regan", "Reilley", "Riana", "Richael", "Rosa", "Shanessa", "Shannon", "Shauna", "Shawnee", "Shawnnessy", "Shay", "Shayla", "Shaylee", "Shea", "Sheena", "Shenna", "Sinead", "Sosanna", "Taban", "Teagan", "Tully", "Tyree", "Ula", "Zenevieva", "Zephan"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function italianGivenNamesFemale()
{
    $giveNames = array ("Abriana", "Bambi", "Bianca", "Caprice", "Cara", "Carin", "Carlotta", "Cettina", "Contessa", "Domani", "Donatella", "Fabiana", "Fiorella", "Fiorenza", "Gaetana", "Gioia", "Giordana", "Giovanna", "Graziella", "Ilaria", "Itala", "Justina", "Lanza", "Lave", "Liona", "Luca", "Lucia", "Luciana", "Mariabella", "Marietta", "Marsala", "Mia", "Michelle", "Mila", "Natalia", "Neroli", "Ornella", "Prima", "Primavera", "Quorra", "Ricarda", "Rocio", "Romana", "Ruffina", "Sidonia", "Sienna", "Sistine", "Speranza", "Tessa", "Trilby", "Uberta", "Vedette", "Venecia", "Venetia", "Zola"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function japaneseGivenNamesFemale()
{
    $giveNames = array ("Ai", "Aiko", "Akako", "Akanah", "Aki", "Akina", "Akiyama", "Amarante", "Amaya", "Aneko", "Anzan", "Anzu", "Aoi", "Asa", "Ayame", "Bankei", "Chika", "Chinshu", "Chiyo", "Cho", "Chorei", "Dai", "Eido", "Etsu", "Fuyo", "Gyo Shin", "Hakue", "Hama", "Hanako", "Haya", "Hisa", "Hoshi", "Ima", "Ishi", "Iva", "Jakushitsu", "Jimin", "Jin", "JoMei", "Kaede", "Kagami", "Kaida", "Kaiya", "Kameko", "Kamin", "Kane", "Kaori", "Kaoru", "Kata", "Kaya", " Kei", "Keiko", "Kiaria", "Kichi", "Kiku", "Kimi", "Kin", "Kioko", "Kira", "Kita", "Kiwa", "Kiyoshi", "Koge", "Kogen", "Kohana", "Koto", "Kozue", "Kuma", "Kumi", "Kumiko", "Kuniko", "Kura", "Kyoko", "Leiko", "Machi", "Machiko", "Maeko", "Maemi", "Mai", "Maiko", "Makiko", "Mamiko", "Mariko", "Masago", "Masako", "Matsuko", "Mayako", "Mayuko", "Michi", "Michiko", "Midori", "Mieko", "Mihoko", "Mika", "Miki", "Minako", "Mine", "Misako", "Mitsuko", "Miwa", " Miya", "Miyoko", "Miyuki", "Momoko", "Mutsuko", "Myoki", "Nahoko", "Nami", "Nanako", "Nanami", "Naoko", "Nariko", "Natsuko", "Natsuko", "Nayoko", "Nishi", "Nori", "Noriko", "Nozomi", "Nyoko", "Oki", "Rai", "Raku", "Rei", "Reiko", "Ren", "Renora", "Rieko", "Rikako", "Riku", "Rinako", "Rini", "Risako", "Roshin", "Rumiko", "Ruri", "Ryoko", "Sachi", "Sachiko", "Sada", "Saeko", "Saiun", "Saki", "Sakiko", "Sakuko", "Sakura", "Sakurako", "Sanako", "Sasa", "Sashi", " Sato", "Satoko", "Sawa", "Sayo", "Sayoko", "Seki", "Shika", "Shikah", "Shina", "Shinko", "Shoko", "Sorano", "Suki", "Sumi", "Tadako", "Taido", "Taka", "Takako", "Takara", "Taki", "Tamaka", "Tamiko", "Tanaka", "Taney", "Tani", "Taree", "Tazu", "Tennen", "Tetsu", "Tokiko", "Tomi", "Tomiko", "Tora", "Tori", "Toyo", "Umeko", "Usagi", "Wakana", "Washi", "Yachi", "Yaki", "Yama", "Yasu", "Yayoi", "Yei", "Yoi", "Yoko", "Yori", "Yoshiko", "Yuka", "Yukako", "Yukiko", "Yumi", "Yumiko", "Yuri", "Yuriko", "Yutsuko", "Zadhiya"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function koreanGivenNamesFemale()
{
    $giveNames = array ("Cho", "Chon", "HeeWon", "Jeong", "Joo Mi", "Min", "Moon", "Shin", "Soo", "Sun"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function latinGivenNamesFemale()
{
    $giveNames = array ( "Abby", "Ada", "Aderes", "Adora", "Adrienne", "Aemilia", "Affinity", "Aimee", "Alba", "Allegra", "Alma", "Amanda", "Amity", "Amory", "Amriel", "Amy", "Antlia", "Antonia", "April", "Aqualina", "Aquamarine", "Arbor", "Arden", "Aril", "Arva", "Auburn", "Augusta", "Aurelia", "Autumn", "Ava", "Avalon", "Barbara", "Beata", "Beatrice", "Bellona", "Benedetta", "Blase", "Calcite", "Calendula", "Callis", "Cambria", "Camille", "Campbell", "Candida", "Candra", "Cara", "Carey", "Carina", "Carisa", "Carla", " Carnelian", "Cassiel", "Cecilia", "Celeste", "Cerelia", "Charity", "Chastity", "Cheridah", "Citrine", "Claire", "Clementine", "Colomba", "Comfort", "Compassion", "Concepción", "Concordia", "Constance", "Coral", "Cordelia", "Corky", "Cornelia", "Corrina", "Dabria", "Daisy", "Danica", "Delinda", "Desiree", "Dextra", "Diana", "Dido", "Diella", "Dillian", "Diva", "Dolores", "Donna", "Emily", "Enza", "Ermine", "Esme", "Essence", "Estelle", "Eternal", "Eustacia", "Faith", "Fantasia", "Fawn", "Felicia", "Feronia", "Fidelity", "Flavia", " Florence", "Fortitude", "Fortuna", "Franca", "Fulvia", "Garnet", "Gemma", "Genesis", "Gill", "Gillian", "Ginger", "Gloria", "Grace", "Gratia", "Gustava", "Heliotrope", "Hester", "Honesty", "Honor", "Hortense", "Humbleness", "Humility", "Imogene", "Integrity", "Ivory", "Jae", "Jillian", "Jocosa", "Jovanna", "Joy", "Joyce", "Julia", "June", "Juniper", "Juno", "Justice", "Kadenza", "Kalare", "Kambrea", "Kambria", "Karise", "Karlee", "Karly", "Karmen", "Katarina", "Khara", "Kira", "Kitty", "Konstance", "Kordell", " Lacey", "Lachesis", "Laetitia", "Lalo", "Lara", "Laraine", "Lasthenia", "Latisha", "Latonia", "Laura", "Laurinda", "Laveda", "Lavina", "Lavinia", "Lawrence", "Leann", "Leauna", "Lella", "Leola", "Leta", "Leticia", "Letitia", "Levana", "Libra", "Licia", "Lilian", "Liliana", "Lilianna", "Lilliana", "Lillias", "Lily", "Lita", "Livi", "Lora", "Lori", "Lorinda", "Lotta", "Lottie", "Luce", "Lucille", "Lucinda", "Lucrece", "Lucretia", "Lucy", "Luka", "Lumina", "Luna", "Lupe", "Lynnea", "Mabel", " Madonna", "Mae", "Maeve", "Magna", "Magnolia", "Marcella", "Marcia", "Maren", "Maricel", "Marina", "Maris", "Marissa", "Martina", "Maxine", "May", "Medea", "Mei", "Melba", "Melina", "Mercedes", "Merit", "Messina", "Meta", "Minerva", "Mira", "Mirabelle", "Miranda", "Modestus", "Modesty", "Monica", "Muriel", "Myra", "Napea", "Narda", "Nasia", "Natalie", "Neci", "Necia", "Nedra", "Nerissa", "Nevada", "Nigella", "Nivea", "Noble", "Nohely", "Nola", "Noletta", "Nona", "Nonnita", "Norma", " Nova", "Nydia", "Octavia", "Odina", "Oistin", "Olive", "Ondine", "Oralia", "Orchid", "Oria", "Oria", "Oriana", "Orianna", "Oriole", "Orla", "Orlanda", "Orsa", "Ortensia", "Osma", "Ova", "Paula", "Pax", "Pearl", "Persis", "Petronella", "Petula", "Pia", "Poppy", "Portia", "Priscilla", "Prudence", "Quartilla", "Quinella", "Quintessa", "Quintina", "Quirina", "Quirita", "Quita", "Rain", "Regina", "Renata", "Renita", "Revelation", "Rhea", "Risa", "Rosanne", "Rose", "Rue", "Sabana", "Sabina", " Nova", "Nydia", "Octavia", "Odina", "Oistin", "Olive", "Ondine", "Oralia", "Orchid", "Oria", "Oria", "Oriana", "Orianna", "Oriole", "Orla", "Orlanda", "Orsa", "Ortensia", "Osma", "Ova", "Paula", "Pax", "Pearl", "Persis", "Petronella", "Petula", "Pia", "Poppy", "Portia", "Priscilla", "Prudence", "Quartilla", "Quinella", "Quintessa", "Quintina", "Quirina", "Quirita", "Quita", "Rain", "Regina", "Renata", "Renita", "Revelation", "Rhea", "Risa", "Rosanne", "Rose", "Rue", "Sabana", "Sabina", " Tosca", "Toshi", "Tosia", "Tranquility", "Tricia", "Trini", "Trinity", "Trisha", "Trista", "Tristana", "Tristessa", "Tryphena", "Ultima", "Una", "Undine", "Uny", "Urbana", "Ursula", "Valencia", "Valentine", "Valerie", "Valisa", "Valonia", "Valora", "Vanecia", "Venice", "Vera", "Verda", "Verena", "Verity", "Vernice", "Veronica", "Vesper", "Vesta", "Vestal", "Vevina", "Victoria", "Vidonia", "Vienna", "Vincentia", "Violet", "Virgilia", "Virginia", "Virgo", "Viridis", "Vita", "Vivian", "Viviefont", "Zama", "Zanna", " Zea", "Zinnia", "Zona"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function middleEnglishGivenNamesFemale()
{
    $giveNames = array ("Amiable", "Cavanaugh", "Citrine", "Doe", "Knowledge", "Lane", "Mercy", "Merry", "Scarlet"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function nativeAmericanGivenNamesFemale()
{
    $giveNames = array ( "Abeque", "Abey", "Abeytu", "Adoette", "Adsila", "Aiyana", "Alameda", "Alaqua", "Alawa", "Aleshanee", "Algoma", "Alsoomse", "Amadahy", "Amitola", "Anaba", "Angeni", "Aponi", "Aquene", "Awendela", "Ayasha", "Ayita", "Bly", "Chapa", "Chenoa", "Cheyenne", "Chimalis", "Dakota", "Doli", "Donoma", "Dyani", "Elu", "Enola", "Etenia", "Eyota", "Fala", "Galilahi", "Genesee", "Hachi", "Haiwee", "Halona", "Honovi", "Hurit", "Huyana", "Istas", "Ituha", "Kachine", "Kai", "Kaniya", "Kanti", "Karmiti", "Kilenya", "Kimama", "Kimimela", "Kiona", "Kishi", "Koko", "Koleyn", "Kwanita", "Labdhi", "Lahoma", "Lakota", "Leotie", "Lequoia", "Liluye", "Liseli", "Litonya", "Lomasi", "Luyu", "Macha", "Magena", "Mahala", "Mai", "Maka", "Makya", "Malina", "Mapiya", "Meda", "Miakoda", "Migisi", "Mika", "Mitena", "Mitexi", "Nahimana", "Nara", "Nascha", "Nasnan", "Nata", "Nayeli", "Netis", "Nita", "Nitika", "Nituna", "Nokomis", "Nuna", "Nuttah", "Ohio", "Olathe", "Olisa", "Onawa", "Oneida", "Oni", "Onida", "Opa", "Pala", "Pana", "Pelipa", "Pinquana", "Pocahontas", "Quanah", "Sahyko", "Sakari", "Sakima", "Salali", "Satinka", "Sequoia", "Shada", "Shako", "Shania", "Shaniya", "Shasta", "Shima", "Shysie", "Sihu", "Snana", "Sokanon", "Sora", "Soyala", "Taa", "Taborri", "Tacincala", "Tadewi", "Tadita", "Taima", "Taini", "Tainn", "Takoda", "Tala", "Tama", "Tamsyn", "Tareva-Chine'", "Tarsha", "Tawana", "Tayen", "Tazanna", "Tehya", "Tiva", "Tolinka", "Topanga", "Tuwa", "Unega", "Urika", "Usdi", "Utina", "Wachiwi", "Waneta", "Wapeka", "Wapin", "Wasula", "Wateka", "Wawetseka", "Weayaya", "Weetamoo", "Winema", "Wyanet", "Wynonah", "Wyome", "Yalika", "Yanaha", "Yoki", "Zabana", "Zaltana", "Zonta"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function norseGivenNamesFemale()
{
    $giveNames = array ("Bo", "Frigg", "Grid", "Gro", "Guro", "Haley", "Heidrun", "Hela", "Magna", "Oda", "Ove", "Ragnhild", "Unni"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function oldEnglishGivenNamesFemale()
{
    $giveNames = array ( "Afton", "Agrona", "Aida", "Aislinn", "Alcott", "Alden", "Alvina", "Arantxa", "Ariana", "Arleigh", "Ashley", "Aspen", "Audrey", "Avon", "Bailey", "Beverly", "Blaine", "Blossom", "Blythe", "Brea", "Brenda", "Brook", "Buffy", "Cady", "Cameron", "Chelsea", "Corliss", "Courtney", "Demelza", "Eartha", "Edda", "Edith", "Ethel", "Farrah", "Fern", "Fiona", "Godiva", "Golda", "Halsey", "Harmony", "Hazel", "Hedwig", "Hertha", "Hollace", "Holly", "Hope", "Idina", "Isolda", "Ivy", "Jocelyn", " Kim", "Kimberley", "Kyla", "Lee", "Leigh", "Leslie", "Lindsay", "Locke", "Love", "Luella", "Maida", "Mirth", "Missy", "Misty", "Nara", "Obsession", "Radella", "Sacrifice"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function oldFrenchGivenNamesFemale()
{
    $giveNames = array ("Chance", "Chantal", "Delight", "Fay", "Frances", "Jewel", "Musetta", "Olive", "Raissa", "Sojourner"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}




function oldGermanGivenNamesFemale()
{
    $giveNames = array ("Aloysia", "Carla", "Carol", "Chay", "Ella", "Emiline", "Ernestine", "Etta", "Ida", "Leopolda", "Leyna", "Lorraine", "Louise", "Minna"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function oldNorseGivenNamesFemale()
{
    $giveNames = array ("Astrid", "Deila", "Gail", "Harper", "Kippi", "Nessa", "Olive", "Ronalda", "Sigrid", "Thora", "Valda"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function persianGivenNamesFemale()
{
    $giveNames = array ("Abtin", "Ardeshir", "Azarin", "Azura", "Cyra", "Darice", "Esther", "Fila", "Gelsey", "Jaleh", "Jasmine", "Kasra", "Kira", "Mahdis", "Mahsa", "Mandana", "Midge", "Mina", "Nickan", "Roxanne", "Sanam", "Vashti", "Yasmine", "Zeeba", "Zohreh"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function polishGivenNamesFemale()
{
    $giveNames = array ("Danuta", "Ewa", "Filipina", "Jadwiga", "Kalene", "Karolina", "Kasia", "Kassia", "Klementyna", "Ksena", "Lilka", "Macy", "Olesia", "Rasine", "Tajsa", "Tekli", "Tesia", "Tola", "Tolia", "Truda", "Valeska", "Walentya", "Wislawa", "Zima", "Zofia", "Zotia"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function polynesianGivenNamesFemale()
{
    $giveNames = array ("Kaula", "Lana", "Mahal", "Maili", "Pua", "Uinise", "Vailea"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function russianGivenNamesFemale()
{
    $giveNames = array ("Akelah", "Alexandrite", "Anya", "Bohdana", "Cyzarine", "Dusana", "Feodora", "Jelena", "Kisa", "Kiska", "Leena", "Lenya", "Lida", "Luba", "Marinka", "Mika", "Mila", "Misha", "Nadie", "Nickita", "Nika", "Oksana", "Olga", "Olien", "Raissa", "Sashenka", "Savina", "Sezja", "Sonia", "Svetlana", "Taneya", "Tanya", "Tatiana", "Vanka", "Vanya", "Verushka", "Vilhemina", "Yelena", "Yeva", "Yula", "Zagir", "Zasha", "Zdebka", "Zhenya", "Zilya"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function sanskritGivenNamesFemale()
{
    $giveNames = array ("Chandra", "Kalinda", "Kalpana", "Kama", "Karma", "Kashmir", "Leelea", "Lilac", "Malika", "Manjusha", "Nalini", "Opal", "Shobha", "Sitara", "Taruna"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function scandinavianGivenNamesFemale()
{
    $giveNames = array ("Alleta", "Bo", "Dagna", "Dahlia", "Delling", "Eir", "Erica", "Evonne", "Freya", "Gudrun", "Gunda", "Halle", "Idonea", "Ingrid", "Jesen", "Karena", "Kelda", "Kelsey", "Kiersten", "Krystyn", "Lang", "Larsen", "Linnea", "Lis", "Lisolette", "Litzy", "Loki", "Lundy", "Malin", "Marny", "Mia", "Nissa", "Quenby", "Quinby", "Ran", "Ranveig", "Rinda", "Runa", "Sanna", "Savea", "Selma", "Signa", "Signild", "Sigrun", "Snøfrid", "Sonja", "Sorley", "Svea", "Synnove", "Thorborg", "Thurid", "Thyrrni", "Toril", "Toyah", "Tyra", "Ula", "Unn", "Valkyrie", "Vanja", "Vigdis", "Viola", "Ylwa", "Zainab"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function scottishGivenNamesFemale()
{
    $giveNames = array ("Ailsa", "Ainsley", "Artis", "Bonnie", "Campbell", "Davine", "Dree", "Enya", "Genene", "Ilisa", "Jeanne", "Kelcie", "Kelsi", "Lesley", "Leslie", "Logan", "Mairead", "Malvina", "Nairne", "Rae", "Sile", "Siusan", "Tira", "Vanora"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function slavicGivenNamesFemale()
{
    $giveNames = array ("Anezka", "Casmir", "Darva", "Kami", "Kamila", "Kamilia", "Karayan", "Katerina", "Katia", "Kisha", "Klavdia", "Kostya", "Lada", "Laima", "Lala", "Larya", "Lenka", "Lilia", "Lizina", "Lonna", "Malika", "Milena", "Nadine", "Natala", "Neda", "Neveah", "Nijole", "Ondrea", "Radinka", "Saskia", "Sveta", "Szitakota", "Tana", "Tania", "Tasya", "Teca", "Velika", "Vera", "Viera", "Yarmilla", "Zabel", "Zeljka", "Zora", "Zuzana"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function spanishGivenNamesFemale()
{
    $giveNames = array ("Adalia", "Aidia", "Alva", "Aureliano", "Belinda", "Bettina", "Carey", "Carlotta", "Coco", "Damita", "Delfina", "Duenna", "Dulcie", "Elvira", "Enriqua", "Esmerelda", "Esperanza", "Fe", "Fonda", "Frida", "Friera", "Gitana", "Gotzone", "Guadalupe", "Hermosa", "Ines", "Isabel", "Itzel", "Jade", "Jardena", "Julitta", "Kesare", "Kiki", "Lacienega", "Ladonna", "Landrada", "Lela", "Lenora", "Leya", "Liani", "Linda", "Lluvia", "Lola", "Lolita", "Luisa", "Lujuana", "Lupita", "Lux", "Luz", "Madeira ", "Madra", "Maitane", "Maitea", "Majondra", "Manda", "Manuela", "Mariola", "Mariposa", "Marisa", "Melosa", "Mio", "Mira", "Montana", "Mora", "Neiva", "Nerita", "Neva", "Nieve", "Nina", "Novia", "Novyanna", "Oihane", "Ora", "Osana", "Paca", "Paloma", "Placida", "Puma", "Querida", "Queta", "Quinceanos", "Raeka", "Rafaela", "Ramona", "Rana", "Ria", "Rigoberta", "Roana", "Rosalind", "Rosalynda", "Sally", "Salma", "Sancha", "Sancho", "Sandia", "Santana", "Santina", "Savana", "Savanna", "Seina ", "Senalda", "Senona", "Sierra", "Sofiel", "Solana", "Soledad", "Sonora", "Taina", "Tea", "Tejana", "Terceiro", "Teresa", "Texcean", "Tia", "Tierra", "Tina", "Tranquilia", "Trella", "Tulia", "Ursulina", "Verdad", "Veta", "Vina", "Xalbadora", "Xevera", "Xiao", "Xiomara", "Yadra", "Yomaris", "Zaneta", "Zarela", "Zarita", "Zaviera", "Zequinha", "Zuriaa", "Zurine"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}



function swahiliGivenNamesFemale()
{
    $giveNames = array ("Adia", "Barika", "Epua", "Kamaria", "Kesi", "Lakeisha", "Leta", "Nia", "Shani", "Simba", "Taariq", "Winda"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function swedishGivenNamesFemale()
{
    $giveNames = array ("Kajsa", "Maj", "Signe", "Trind", "Valborg"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function teutonicGivenNamesFemale()
{
    $giveNames = array ("Magan", "Minka", "Orinda", "Verena", "Waltraud", "Willa", "Yvette"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function turkishGivenNamesFemale()
{
    $giveNames = array ("Aylin", "Banu", "Jale", "Kari", "Karli", "Kerzi", "Kiral", "Nagihan", "Nerhim", "Nilgun", "Nuray", "Nurhan", "Olcay", "Onur", "Safak", "Sefika", "Semra", "Sezen", "Sibel", "Sila", "Zerdali"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function vietnameseGivenNamesFemale()
{
    $giveNames = array ("Cara", "Duyen", "Hong", "Khanh", "Kieu", "Lan", "Lieu", "Linh", "Loan", "Ly", "Mai", "Mychau", "Nguyet", "Nhi", "Nhu", "Nhung", "Nu", "Sen", "Tai", "Tam", "Tan", "Thao", "Thuy", "Tien", "Trang", "Trinh", "Tuyen", "Ut", "Xuan"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}

function welshGivenNamesFemale()
{
    $giveNames = array ("Bryn", "Carey", "Caron", "Carys", "Ceridwen", "Crisiant", "Dylan", "Dyllis", "Emlyn", "Enid", "Genevieve", "Gladys", "Idelle", "Jensine", "Karrington", "Kordell", "Kynan", "Llewellyn", "Lowri", "Lyneth", "Mabyn", "Mairwen", "Merlyn", "Morgan", "Myfanwy", "Nerys", "Olwen", "Owena", "Reese", "Rhiamon", "Rhiannon", "Rhonwen", "Riannon", "Rowena", "Saeran", "Sian", "Sulwyn", "Taffy", "Teleri", "Telyn", "Tydfill", "Verran", "Vevay", "Wynn"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


function yiddishGivenNamesFemale()
{
    $giveNames = array ("Bruna", "Kyla", "Leba", "Mindel", "Shayndel", "Syshe"
    );

    $select = rand(0, (count($giveNames) - 1) );

    $name = $giveNames[$select];

    return $name;
    
}


?>