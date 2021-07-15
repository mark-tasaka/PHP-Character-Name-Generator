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


?>