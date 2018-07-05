<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const DATA = array (
  0 =>
  array (
    'id' => '1',
    'amount' => '59',
    'birder_id' => '1',
    'listcategory_id' => '1',
    'newest_species' => 'amerikantukkasotka',
    'newest_date' => '2015-11-08',
  ),
  1 =>
  array (
    'id' => '2',
    'amount' => '182',
    'birder_id' => '2',
    'listcategory_id' => '1',
    'newest_species' => 'harmaasieppo',
    'newest_date' => '2016-12-04',
  ),
  2 =>
  array (
    'id' => '3',
    'amount' => '124',
    'birder_id' => '3',
    'listcategory_id' => '1',
    'newest_species' => 'heinäkurppa',
    'newest_date' => '2018-07-01',
  ),
  3 =>
  array (
    'id' => '4',
    'amount' => '205',
    'birder_id' => '4',
    'listcategory_id' => '1',
    'newest_species' => 'hiiripöllö',
    'newest_date' => '2015-12-19',
  ),
  4 =>
  array (
    'id' => '5',
    'amount' => '168',
    'birder_id' => '5',
    'listcategory_id' => '1',
    'newest_species' => 'mustapääkerttu',
    'newest_date' => '2017-09-02',
  ),
  5 =>
  array (
    'id' => '6',
    'amount' => '145',
    'birder_id' => '6',
    'listcategory_id' => '1',
    'newest_species' => 'varis',
    'newest_date' => '2015-05-03',
  ),
  6 =>
  array (
    'id' => '7',
    'amount' => '186',
    'birder_id' => '7',
    'listcategory_id' => '1',
    'newest_species' => 'avosetti',
    'newest_date' => '2018-05-04',
  ),
  7 =>
  array (
    'id' => '8',
    'amount' => '131',
    'birder_id' => '8',
    'listcategory_id' => '1',
    'newest_species' => 'järripeippo',
    'newest_date' => '2015-12-07',
  ),
  8 =>
  array (
    'id' => '9',
    'amount' => '73',
    'birder_id' => '9',
    'listcategory_id' => '1',
    'newest_species' => 'kaspiantylli',
    'newest_date' => '2015-10-18',
  ),
  9 =>
  array (
    'id' => '10',
    'amount' => '10',
    'birder_id' => '10',
    'listcategory_id' => '1',
    'newest_species' => 'punakottarainen',
    'newest_date' => '2017-04-16',
  ),
  10 =>
  array (
    'id' => '11',
    'amount' => '86',
    'birder_id' => '11',
    'listcategory_id' => '1',
    'newest_species' => 'valkoposkihanhi',
    'newest_date' => '2014-04-08',
  ),
  11 =>
  array (
    'id' => '12',
    'amount' => '37',
    'birder_id' => '12',
    'listcategory_id' => '1',
    'newest_species' => 'suula',
    'newest_date' => '2014-06-19',
  ),
  12 =>
  array (
    'id' => '13',
    'amount' => '130',
    'birder_id' => '13',
    'listcategory_id' => '1',
    'newest_species' => 'taviokuurna',
    'newest_date' => '2014-11-23',
  ),
  13 =>
  array (
    'id' => '14',
    'amount' => '92',
    'birder_id' => '14',
    'listcategory_id' => '1',
    'newest_species' => 'kaulushaikara',
    'newest_date' => '2014-06-11',
  ),
  14 =>
  array (
    'id' => '15',
    'amount' => '203',
    'birder_id' => '15',
    'listcategory_id' => '1',
    'newest_species' => 'aavikkotulkku',
    'newest_date' => '2016-10-28',
  ),
  15 =>
  array (
    'id' => '16',
    'amount' => '28',
    'birder_id' => '16',
    'listcategory_id' => '1',
    'newest_species' => 'käenpiika',
    'newest_date' => '2018-08-16',
  ),
  16 =>
  array (
    'id' => '17',
    'amount' => '201',
    'birder_id' => '17',
    'listcategory_id' => '1',
    'newest_species' => 'ruokki',
    'newest_date' => '2014-07-19',
  ),
  17 =>
  array (
    'id' => '18',
    'amount' => '244',
    'birder_id' => '18',
    'listcategory_id' => '1',
    'newest_species' => 'pikkulokki',
    'newest_date' => '2016-02-11',
  ),
  18 =>
  array (
    'id' => '19',
    'amount' => '166',
    'birder_id' => '19',
    'listcategory_id' => '1',
    'newest_species' => 'pensaskerttu',
    'newest_date' => '2018-07-12',
  ),
  19 =>
  array (
    'id' => '20',
    'amount' => '6',
    'birder_id' => '20',
    'listcategory_id' => '1',
    'newest_species' => 'riskilä',
    'newest_date' => '2014-08-11',
  ),
  20 =>
  array (
    'id' => '21',
    'amount' => '95',
    'birder_id' => '1',
    'listcategory_id' => '2',
    'newest_species' => 'närhi',
    'newest_date' => '2015-01-14',
  ),
  21 =>
  array (
    'id' => '22',
    'amount' => '3',
    'birder_id' => '2',
    'listcategory_id' => '2',
    'newest_species' => 'suokukko',
    'newest_date' => '2015-08-26',
  ),
  22 =>
  array (
    'id' => '23',
    'amount' => '55',
    'birder_id' => '3',
    'listcategory_id' => '2',
    'newest_species' => 'isokirvinen',
    'newest_date' => '2017-08-26',
  ),
  23 =>
  array (
    'id' => '24',
    'amount' => '143',
    'birder_id' => '4',
    'listcategory_id' => '2',
    'newest_species' => 'laulujoutsen',
    'newest_date' => '2015-06-26',
  ),
  24 =>
  array (
    'id' => '25',
    'amount' => '178',
    'birder_id' => '5',
    'listcategory_id' => '2',
    'newest_species' => 'silkkihaikara',
    'newest_date' => '2014-07-01',
  ),
  25 =>
  array (
    'id' => '26',
    'amount' => '179',
    'birder_id' => '6',
    'listcategory_id' => '2',
    'newest_species' => 'punakuiri',
    'newest_date' => '2014-10-17',
  ),
  26 =>
  array (
    'id' => '27',
    'amount' => '106',
    'birder_id' => '7',
    'listcategory_id' => '2',
    'newest_species' => 'nokkavarpunen',
    'newest_date' => '2014-10-07',
  ),
  27 =>
  array (
    'id' => '28',
    'amount' => '177',
    'birder_id' => '8',
    'listcategory_id' => '2',
    'newest_species' => 'sääksi',
    'newest_date' => '2017-08-26',
  ),
  28 =>
  array (
    'id' => '29',
    'amount' => '131',
    'birder_id' => '9',
    'listcategory_id' => '2',
    'newest_species' => 'mustarastas',
    'newest_date' => '2018-07-18',
  ),
  29 =>
  array (
    'id' => '30',
    'amount' => '52',
    'birder_id' => '10',
    'listcategory_id' => '2',
    'newest_species' => 'pikkuruokki',
    'newest_date' => '2015-12-27',
  ),
  30 =>
  array (
    'id' => '31',
    'amount' => '209',
    'birder_id' => '11',
    'listcategory_id' => '2',
    'newest_species' => 'haarapääsky',
    'newest_date' => '2018-04-15',
  ),
  31 =>
  array (
    'id' => '32',
    'amount' => '157',
    'birder_id' => '12',
    'listcategory_id' => '2',
    'newest_species' => 'aavikkotulkku',
    'newest_date' => '2015-01-07',
  ),
  32 =>
  array (
    'id' => '33',
    'amount' => '188',
    'birder_id' => '13',
    'listcategory_id' => '2',
    'newest_species' => 'kaakkuri',
    'newest_date' => '2016-03-26',
  ),
  33 =>
  array (
    'id' => '34',
    'amount' => '211',
    'birder_id' => '14',
    'listcategory_id' => '2',
    'newest_species' => 'nuolihaukka',
    'newest_date' => '2015-01-02',
  ),
  34 =>
  array (
    'id' => '35',
    'amount' => '238',
    'birder_id' => '15',
    'listcategory_id' => '2',
    'newest_species' => 'turturikyyhky',
    'newest_date' => '2017-11-01',
  ),
  35 =>
  array (
    'id' => '36',
    'amount' => '73',
    'birder_id' => '16',
    'listcategory_id' => '2',
    'newest_species' => 'metso',
    'newest_date' => '2015-06-12',
  ),
  36 =>
  array (
    'id' => '37',
    'amount' => '153',
    'birder_id' => '17',
    'listcategory_id' => '2',
    'newest_species' => 'sinisorsa',
    'newest_date' => '2017-05-21',
  ),
  37 =>
  array (
    'id' => '38',
    'amount' => '31',
    'birder_id' => '18',
    'listcategory_id' => '2',
    'newest_species' => 'kirjosieppo',
    'newest_date' => '2016-02-08',
  ),
  38 =>
  array (
    'id' => '39',
    'amount' => '224',
    'birder_id' => '19',
    'listcategory_id' => '2',
    'newest_species' => 'punavarpunen',
    'newest_date' => '2015-08-28',
  ),
  39 =>
  array (
    'id' => '40',
    'amount' => '58',
    'birder_id' => '20',
    'listcategory_id' => '2',
    'newest_species' => 'keltasirkku',
    'newest_date' => '2018-05-15',
  ),
  40 =>
  array (
    'id' => '41',
    'amount' => '47',
    'birder_id' => '1',
    'listcategory_id' => '3',
    'newest_species' => 'punarinta',
    'newest_date' => '2014-07-03',
  ),
  41 =>
  array (
    'id' => '42',
    'amount' => '190',
    'birder_id' => '2',
    'listcategory_id' => '3',
    'newest_species' => 'niittysuohaukka',
    'newest_date' => '2015-07-04',
  ),
  42 =>
  array (
    'id' => '43',
    'amount' => '94',
    'birder_id' => '3',
    'listcategory_id' => '3',
    'newest_species' => 'fasaani',
    'newest_date' => '2014-08-05',
  ),
  43 =>
  array (
    'id' => '44',
    'amount' => '207',
    'birder_id' => '4',
    'listcategory_id' => '3',
    'newest_species' => 'merikihu',
    'newest_date' => '2017-11-16',
  ),
  44 =>
  array (
    'id' => '45',
    'amount' => '156',
    'birder_id' => '5',
    'listcategory_id' => '3',
    'newest_species' => 'härkälintu',
    'newest_date' => '2018-11-23',
  ),
  45 =>
  array (
    'id' => '46',
    'amount' => '230',
    'birder_id' => '6',
    'listcategory_id' => '3',
    'newest_species' => 'harmaasieppo',
    'newest_date' => '2015-03-14',
  ),
  46 =>
  array (
    'id' => '47',
    'amount' => '124',
    'birder_id' => '7',
    'listcategory_id' => '3',
    'newest_species' => 'tunturipöllö',
    'newest_date' => '2015-03-02',
  ),
  47 =>
  array (
    'id' => '48',
    'amount' => '160',
    'birder_id' => '8',
    'listcategory_id' => '3',
    'newest_species' => 'merilokki',
    'newest_date' => '2017-03-18',
  ),
  48 =>
  array (
    'id' => '49',
    'amount' => '3',
    'birder_id' => '9',
    'listcategory_id' => '3',
    'newest_species' => 'kivitasku',
    'newest_date' => '2018-10-08',
  ),
  49 =>
  array (
    'id' => '50',
    'amount' => '100',
    'birder_id' => '10',
    'listcategory_id' => '3',
    'newest_species' => 'kaakkuri',
    'newest_date' => '2014-02-07',
  ),
  50 =>
  array (
    'id' => '51',
    'amount' => '164',
    'birder_id' => '11',
    'listcategory_id' => '3',
    'newest_species' => 'urpiainen',
    'newest_date' => '2016-07-26',
  ),
  51 =>
  array (
    'id' => '52',
    'amount' => '14',
    'birder_id' => '12',
    'listcategory_id' => '3',
    'newest_species' => 'mustalintu',
    'newest_date' => '2015-06-07',
  ),
  52 =>
  array (
    'id' => '53',
    'amount' => '138',
    'birder_id' => '13',
    'listcategory_id' => '3',
    'newest_species' => 'sinirinta',
    'newest_date' => '2017-02-03',
  ),
  53 =>
  array (
    'id' => '54',
    'amount' => '58',
    'birder_id' => '14',
    'listcategory_id' => '3',
    'newest_species' => 'pikkuvarpunen',
    'newest_date' => '2018-05-27',
  ),
  54 =>
  array (
    'id' => '55',
    'amount' => '80',
    'birder_id' => '15',
    'listcategory_id' => '3',
    'newest_species' => 'keltasirkku',
    'newest_date' => '2017-03-25',
  ),
  55 =>
  array (
    'id' => '56',
    'amount' => '87',
    'birder_id' => '16',
    'listcategory_id' => '3',
    'newest_species' => 'ruostesiipirastas',
    'newest_date' => '2014-10-05',
  ),
  56 =>
  array (
    'id' => '57',
    'amount' => '115',
    'birder_id' => '17',
    'listcategory_id' => '3',
    'newest_species' => 'punavarpunen',
    'newest_date' => '2015-09-19',
  ),
  57 =>
  array (
    'id' => '58',
    'amount' => '105',
    'birder_id' => '18',
    'listcategory_id' => '3',
    'newest_species' => 'rautiainen',
    'newest_date' => '2014-01-25',
  ),
  58 =>
  array (
    'id' => '59',
    'amount' => '208',
    'birder_id' => '19',
    'listcategory_id' => '3',
    'newest_species' => 'kirjosieppo',
    'newest_date' => '2017-01-01',
  ),
  59 =>
  array (
    'id' => '60',
    'amount' => '13',
    'birder_id' => '20',
    'listcategory_id' => '3',
    'newest_species' => 'piekana',
    'newest_date' => '2014-10-21',
  ),
  60 =>
  array (
    'id' => '61',
    'amount' => '64',
    'birder_id' => '1',
    'listcategory_id' => '4',
    'newest_species' => 'pohjansirkku',
    'newest_date' => '2015-04-27',
  ),
  61 =>
  array (
    'id' => '62',
    'amount' => '88',
    'birder_id' => '2',
    'listcategory_id' => '4',
    'newest_species' => 'kiiruna',
    'newest_date' => '2014-01-21',
  ),
  62 =>
  array (
    'id' => '63',
    'amount' => '217',
    'birder_id' => '3',
    'listcategory_id' => '4',
    'newest_species' => 'kanahaukka',
    'newest_date' => '2018-05-18',
  ),
  63 =>
  array (
    'id' => '64',
    'amount' => '221',
    'birder_id' => '4',
    'listcategory_id' => '4',
    'newest_species' => 'kapustarinta',
    'newest_date' => '2016-11-07',
  ),
  64 =>
  array (
    'id' => '65',
    'amount' => '227',
    'birder_id' => '5',
    'listcategory_id' => '4',
    'newest_species' => 'leveäpyrstökihu',
    'newest_date' => '2017-07-14',
  ),
  65 =>
  array (
    'id' => '66',
    'amount' => '28',
    'birder_id' => '6',
    'listcategory_id' => '4',
    'newest_species' => 'riekko',
    'newest_date' => '2018-10-02',
  ),
  66 =>
  array (
    'id' => '67',
    'amount' => '80',
    'birder_id' => '7',
    'listcategory_id' => '4',
    'newest_species' => 'myrskylintu',
    'newest_date' => '2014-07-24',
  ),
  67 =>
  array (
    'id' => '68',
    'amount' => '117',
    'birder_id' => '8',
    'listcategory_id' => '4',
    'newest_species' => 'kanadanhanhi',
    'newest_date' => '2017-01-06',
  ),
  68 =>
  array (
    'id' => '69',
    'amount' => '52',
    'birder_id' => '9',
    'listcategory_id' => '4',
    'newest_species' => 'ampuhaukka',
    'newest_date' => '2016-05-27',
  ),
  69 =>
  array (
    'id' => '70',
    'amount' => '4',
    'birder_id' => '10',
    'listcategory_id' => '4',
    'newest_species' => 'jouhisorsa',
    'newest_date' => '2015-10-04',
  ),
  70 =>
  array (
    'id' => '71',
    'amount' => '152',
    'birder_id' => '11',
    'listcategory_id' => '4',
    'newest_species' => 'lehtokerttu',
    'newest_date' => '2017-07-25',
  ),
  71 =>
  array (
    'id' => '72',
    'amount' => '184',
    'birder_id' => '12',
    'listcategory_id' => '4',
    'newest_species' => 'lumihanhi',
    'newest_date' => '2014-08-04',
  ),
  72 =>
  array (
    'id' => '73',
    'amount' => '105',
    'birder_id' => '13',
    'listcategory_id' => '4',
    'newest_species' => 'liro',
    'newest_date' => '2016-01-22',
  ),
  73 =>
  array (
    'id' => '74',
    'amount' => '161',
    'birder_id' => '14',
    'listcategory_id' => '4',
    'newest_species' => 'sepeltasku',
    'newest_date' => '2017-02-18',
  ),
  74 =>
  array (
    'id' => '75',
    'amount' => '104',
    'birder_id' => '15',
    'listcategory_id' => '4',
    'newest_species' => 'ruskosuohaukka',
    'newest_date' => '2018-04-16',
  ),
  75 =>
  array (
    'id' => '76',
    'amount' => '73',
    'birder_id' => '16',
    'listcategory_id' => '4',
    'newest_species' => 'luotokirvinen',
    'newest_date' => '2016-04-01',
  ),
  76 =>
  array (
    'id' => '77',
    'amount' => '246',
    'birder_id' => '17',
    'listcategory_id' => '4',
    'newest_species' => 'viherpeippo',
    'newest_date' => '2018-05-25',
  ),
  77 =>
  array (
    'id' => '78',
    'amount' => '22',
    'birder_id' => '18',
    'listcategory_id' => '4',
    'newest_species' => 'turturikyyhky',
    'newest_date' => '2015-08-15',
  ),
  78 =>
  array (
    'id' => '79',
    'amount' => '226',
    'birder_id' => '19',
    'listcategory_id' => '4',
    'newest_species' => 'haapana',
    'newest_date' => '2017-07-28',
  ),
  79 =>
  array (
    'id' => '80',
    'amount' => '232',
    'birder_id' => '20',
    'listcategory_id' => '4',
    'newest_species' => 'pikkusieppo',
    'newest_date' => '2018-06-11',
  ),
  80 =>
  array (
    'id' => '81',
    'amount' => '123',
    'birder_id' => '1',
    'listcategory_id' => '5',
    'newest_species' => 'ristisorsa',
    'newest_date' => '2016-03-17',
  ),
  81 =>
  array (
    'id' => '82',
    'amount' => '121',
    'birder_id' => '2',
    'listcategory_id' => '5',
    'newest_species' => 'sepeltasku',
    'newest_date' => '2014-08-16',
  ),
  82 =>
  array (
    'id' => '83',
    'amount' => '79',
    'birder_id' => '3',
    'listcategory_id' => '5',
    'newest_species' => 'silkkihaikara',
    'newest_date' => '2016-10-22',
  ),
  83 =>
  array (
    'id' => '84',
    'amount' => '46',
    'birder_id' => '4',
    'listcategory_id' => '5',
    'newest_species' => 'pensassirkkalintu',
    'newest_date' => '2015-05-05',
  ),
  84 =>
  array (
    'id' => '85',
    'amount' => '183',
    'birder_id' => '5',
    'listcategory_id' => '5',
    'newest_species' => 'teeri',
    'newest_date' => '2017-06-24',
  ),
  85 =>
  array (
    'id' => '86',
    'amount' => '122',
    'birder_id' => '6',
    'listcategory_id' => '5',
    'newest_species' => 'kuusitiainen',
    'newest_date' => '2018-10-02',
  ),
  86 =>
  array (
    'id' => '87',
    'amount' => '143',
    'birder_id' => '7',
    'listcategory_id' => '5',
    'newest_species' => 'harmaasorsa',
    'newest_date' => '2016-10-27',
  ),
  87 =>
  array (
    'id' => '88',
    'amount' => '8',
    'birder_id' => '8',
    'listcategory_id' => '5',
    'newest_species' => 'kanadanhanhi',
    'newest_date' => '2017-12-11',
  ),
  88 =>
  array (
    'id' => '89',
    'amount' => '211',
    'birder_id' => '9',
    'listcategory_id' => '5',
    'newest_species' => 'pikkutylli',
    'newest_date' => '2017-12-06',
  ),
  89 =>
  array (
    'id' => '90',
    'amount' => '20',
    'birder_id' => '10',
    'listcategory_id' => '5',
    'newest_species' => 'liejukana',
    'newest_date' => '2017-09-22',
  ),
  90 =>
  array (
    'id' => '91',
    'amount' => '84',
    'birder_id' => '11',
    'listcategory_id' => '5',
    'newest_species' => 'rantasipi',
    'newest_date' => '2016-07-16',
  ),
  91 =>
  array (
    'id' => '92',
    'amount' => '226',
    'birder_id' => '12',
    'listcategory_id' => '5',
    'newest_species' => 'sepelhanhi',
    'newest_date' => '2014-10-05',
  ),
  92 =>
  array (
    'id' => '93',
    'amount' => '7',
    'birder_id' => '13',
    'listcategory_id' => '5',
    'newest_species' => 'vuorihemppo',
    'newest_date' => '2015-12-18',
  ),
  93 =>
  array (
    'id' => '94',
    'amount' => '39',
    'birder_id' => '14',
    'listcategory_id' => '5',
    'newest_species' => 'riskilä',
    'newest_date' => '2016-06-06',
  ),
  94 =>
  array (
    'id' => '95',
    'amount' => '106',
    'birder_id' => '15',
    'listcategory_id' => '5',
    'newest_species' => 'mustarastas',
    'newest_date' => '2014-07-05',
  ),
  95 =>
  array (
    'id' => '96',
    'amount' => '155',
    'birder_id' => '16',
    'listcategory_id' => '5',
    'newest_species' => 'sininärhi',
    'newest_date' => '2018-09-21',
  ),
  96 =>
  array (
    'id' => '97',
    'amount' => '63',
    'birder_id' => '17',
    'listcategory_id' => '5',
    'newest_species' => 'liejukana',
    'newest_date' => '2018-06-11',
  ),
  97 =>
  array (
    'id' => '98',
    'amount' => '20',
    'birder_id' => '18',
    'listcategory_id' => '5',
    'newest_species' => 'pikkuvarpunen',
    'newest_date' => '2014-02-08',
  ),
  98 =>
  array (
    'id' => '99',
    'amount' => '30',
    'birder_id' => '19',
    'listcategory_id' => '5',
    'newest_species' => 'lapinpöllö',
    'newest_date' => '2016-02-03',
  ),
  99 =>
  array (
    'id' => '100',
    'amount' => '90',
    'birder_id' => '20',
    'listcategory_id' => '5',
    'newest_species' => 'vesipääsky',
    'newest_date' => '2016-08-20',
  ),
  100 =>
  array (
    'id' => '101',
    'amount' => '145',
    'birder_id' => '1',
    'listcategory_id' => '6',
    'newest_species' => 'käpytikka',
    'newest_date' => '2017-03-11',
  ),
  101 =>
  array (
    'id' => '102',
    'amount' => '4',
    'birder_id' => '2',
    'listcategory_id' => '6',
    'newest_species' => 'töyhtökiuru',
    'newest_date' => '2017-05-15',
  ),
  102 =>
  array (
    'id' => '103',
    'amount' => '209',
    'birder_id' => '3',
    'listcategory_id' => '6',
    'newest_species' => 'pähkinänakkeli',
    'newest_date' => '2014-08-03',
  ),
  103 =>
  array (
    'id' => '104',
    'amount' => '1',
    'birder_id' => '4',
    'listcategory_id' => '6',
    'newest_species' => 'viirupöllö',
    'newest_date' => '2017-05-13',
  ),
  104 =>
  array (
    'id' => '105',
    'amount' => '130',
    'birder_id' => '5',
    'listcategory_id' => '6',
    'newest_species' => 'mustatiira',
    'newest_date' => '2015-04-11',
  ),
  105 =>
  array (
    'id' => '106',
    'amount' => '36',
    'birder_id' => '6',
    'listcategory_id' => '6',
    'newest_species' => 'mustapyrstökuiri',
    'newest_date' => '2015-07-10',
  ),
  106 =>
  array (
    'id' => '107',
    'amount' => '45',
    'birder_id' => '7',
    'listcategory_id' => '6',
    'newest_species' => 'pohjansirkku',
    'newest_date' => '2015-08-01',
  ),
  107 =>
  array (
    'id' => '108',
    'amount' => '221',
    'birder_id' => '8',
    'listcategory_id' => '6',
    'newest_species' => 'varpushaukka',
    'newest_date' => '2015-02-21',
  ),
  108 =>
  array (
    'id' => '109',
    'amount' => '120',
    'birder_id' => '9',
    'listcategory_id' => '6',
    'newest_species' => 'pikkutuulihaukka',
    'newest_date' => '2016-02-20',
  ),
  109 =>
  array (
    'id' => '110',
    'amount' => '145',
    'birder_id' => '10',
    'listcategory_id' => '6',
    'newest_species' => 'töyhtötiainen',
    'newest_date' => '2018-06-19',
  ),
  110 =>
  array (
    'id' => '111',
    'amount' => '15',
    'birder_id' => '11',
    'listcategory_id' => '6',
    'newest_species' => 'valkopäätiainen',
    'newest_date' => '2018-04-03',
  ),
  111 =>
  array (
    'id' => '112',
    'amount' => '88',
    'birder_id' => '12',
    'listcategory_id' => '6',
    'newest_species' => 'pikkutuulihaukka',
    'newest_date' => '2016-05-15',
  ),
  112 =>
  array (
    'id' => '113',
    'amount' => '30',
    'birder_id' => '13',
    'listcategory_id' => '6',
    'newest_species' => 'luhtahuitti',
    'newest_date' => '2018-06-26',
  ),
  113 =>
  array (
    'id' => '114',
    'amount' => '184',
    'birder_id' => '14',
    'listcategory_id' => '6',
    'newest_species' => 'hernekerttu',
    'newest_date' => '2014-02-26',
  ),
  114 =>
  array (
    'id' => '115',
    'amount' => '71',
    'birder_id' => '15',
    'listcategory_id' => '6',
    'newest_species' => 'kapustarinta',
    'newest_date' => '2015-05-20',
  ),
  115 =>
  array (
    'id' => '116',
    'amount' => '63',
    'birder_id' => '16',
    'listcategory_id' => '6',
    'newest_species' => 'tunturihaukka',
    'newest_date' => '2014-03-17',
  ),
  116 =>
  array (
    'id' => '117',
    'amount' => '139',
    'birder_id' => '17',
    'listcategory_id' => '6',
    'newest_species' => 'sepelrastas',
    'newest_date' => '2016-11-28',
  ),
  117 =>
  array (
    'id' => '118',
    'amount' => '88',
    'birder_id' => '18',
    'listcategory_id' => '6',
    'newest_species' => 'metsäkirvinen',
    'newest_date' => '2014-02-25',
  ),
  118 =>
  array (
    'id' => '119',
    'amount' => '56',
    'birder_id' => '19',
    'listcategory_id' => '6',
    'newest_species' => 'lapasotka',
    'newest_date' => '2015-08-03',
  ),
  119 =>
  array (
    'id' => '120',
    'amount' => '123',
    'birder_id' => '20',
    'listcategory_id' => '6',
    'newest_species' => 'metsähanhi',
    'newest_date' => '2015-12-09',
  ),
  120 =>
  array (
    'id' => '121',
    'amount' => '74',
    'birder_id' => '1',
    'listcategory_id' => '7',
    'newest_species' => 'närhi',
    'newest_date' => '2016-06-11',
  ),
  121 =>
  array (
    'id' => '122',
    'amount' => '225',
    'birder_id' => '2',
    'listcategory_id' => '7',
    'newest_species' => 'puukiipijä',
    'newest_date' => '2018-07-11',
  ),
  122 =>
  array (
    'id' => '123',
    'amount' => '18',
    'birder_id' => '3',
    'listcategory_id' => '7',
    'newest_species' => 'sinirinta',
    'newest_date' => '2014-12-10',
  ),
  123 =>
  array (
    'id' => '124',
    'amount' => '85',
    'birder_id' => '4',
    'listcategory_id' => '7',
    'newest_species' => 'harmaasirkku',
    'newest_date' => '2017-11-21',
  ),
  124 =>
  array (
    'id' => '125',
    'amount' => '114',
    'birder_id' => '5',
    'listcategory_id' => '7',
    'newest_species' => 'punakylkirastas',
    'newest_date' => '2018-03-21',
  ),
  125 =>
  array (
    'id' => '126',
    'amount' => '84',
    'birder_id' => '6',
    'listcategory_id' => '7',
    'newest_species' => 'kanadanhanhi',
    'newest_date' => '2017-06-15',
  ),
  126 =>
  array (
    'id' => '127',
    'amount' => '32',
    'birder_id' => '7',
    'listcategory_id' => '7',
    'newest_species' => 'jalohaikara',
    'newest_date' => '2014-04-05',
  ),
  127 =>
  array (
    'id' => '128',
    'amount' => '39',
    'birder_id' => '8',
    'listcategory_id' => '7',
    'newest_species' => 'puukiipijä',
    'newest_date' => '2018-07-07',
  ),
  128 =>
  array (
    'id' => '129',
    'amount' => '127',
    'birder_id' => '9',
    'listcategory_id' => '7',
    'newest_species' => 'viirupöllö',
    'newest_date' => '2016-03-16',
  ),
  129 =>
  array (
    'id' => '130',
    'amount' => '81',
    'birder_id' => '10',
    'listcategory_id' => '7',
    'newest_species' => 'ruisrääkkä',
    'newest_date' => '2016-12-18',
  ),
  130 =>
  array (
    'id' => '131',
    'amount' => '41',
    'birder_id' => '11',
    'listcategory_id' => '7',
    'newest_species' => 'karikukko',
    'newest_date' => '2015-03-22',
  ),
  131 =>
  array (
    'id' => '132',
    'amount' => '185',
    'birder_id' => '12',
    'listcategory_id' => '7',
    'newest_species' => 'valkoselkätikka',
    'newest_date' => '2016-12-20',
  ),
  132 =>
  array (
    'id' => '133',
    'amount' => '160',
    'birder_id' => '13',
    'listcategory_id' => '7',
    'newest_species' => 'ruskosuohaukka',
    'newest_date' => '2016-02-25',
  ),
  133 =>
  array (
    'id' => '134',
    'amount' => '127',
    'birder_id' => '14',
    'listcategory_id' => '7',
    'newest_species' => 'koskikara',
    'newest_date' => '2017-04-22',
  ),
  134 =>
  array (
    'id' => '135',
    'amount' => '39',
    'birder_id' => '15',
    'listcategory_id' => '7',
    'newest_species' => 'kirjosieppo',
    'newest_date' => '2016-04-18',
  ),
  135 =>
  array (
    'id' => '136',
    'amount' => '214',
    'birder_id' => '16',
    'listcategory_id' => '7',
    'newest_species' => 'pilkkasiipi',
    'newest_date' => '2014-03-12',
  ),
  136 =>
  array (
    'id' => '137',
    'amount' => '82',
    'birder_id' => '17',
    'listcategory_id' => '7',
    'newest_species' => 'närhi',
    'newest_date' => '2016-06-07',
  ),
  137 =>
  array (
    'id' => '138',
    'amount' => '14',
    'birder_id' => '18',
    'listcategory_id' => '7',
    'newest_species' => 'pikkujoutsen',
    'newest_date' => '2018-09-25',
  ),
  138 =>
  array (
    'id' => '139',
    'amount' => '231',
    'birder_id' => '19',
    'listcategory_id' => '7',
    'newest_species' => 'turkinkyyhky',
    'newest_date' => '2014-11-14',
  ),
  139 =>
  array (
    'id' => '140',
    'amount' => '94',
    'birder_id' => '20',
    'listcategory_id' => '7',
    'newest_species' => 'pikkutikka',
    'newest_date' => '2015-04-10',
  )
);

    public function run()
    {
        DB::table('points')->insert(self::DATA);
        DB::table('points')->update([
            'created_at' => Carbon::now(), 'updated_at' => Carbon::now()
        ]);
    }
}
