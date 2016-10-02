<?php


$venue = [];

$venue[] = array(
	'state' => 'Selangor',
	'state' => 'Selangor',
	'name' => 'OUG Shuttle Bug Sdn.Bhd.',
	'address' => 'OUG Market Place, 4th Floor, 2, Jalan Hujan RahmatTaman Overseas Union, 58200',
	'courts' => array(
		array('type' => 'Rubberized Badminton', 'price' => 15),
	)
);

$venue[] = array(
	'state' => 'Selangor',
	'name' => 'Stadium Juara Bukit Kiara',
	'address' => 'Jalan Bukit Kiara 1, Bukit Kiara, 60000',
	'courts' => array(
		array('type' => 'Badminton', 'price' => 30),
	)
);

$venue[] = array(
	'state' => 'Penang',
	'name' => 'PJ Futsal Center',
	'address' => 'Lot 5, Jalan 51A/223, 46100',
	'courts' => array(
		array('type' => 'Futsal', 'price' => 100),
	)
);

$venue[] = array(
	'state' => 'Penang',
	'name' => 'Samba De Futsal',
	'address' => 'Jalan 225, Seksyen 51a, 46100 Petaling Jaya, Selangor',
	'courts' => array(
		array('type' => 'Futsal', 'price' => 140),
	)
);

$venue[] = array(
	'state' => 'Johor',
	'name' => 'Arena Sukan Champion',
	'address' => 'Lot 1020, Jalan Cempaka, Kampung Sungai Kayu Ara, Mukim Damansara, 47400 PJ',
	'courts' => array(
		array('type' => 'Badminton', 'price' => 32),
	)
);

$venue[] = array(
	'state' => 'Johor',
	'name' => 'Ara Courts Badminton Hall',
	'address' => 'Lot 997,Jalan Dahlia Kampung Sungai Kayu Ara 47400',
	'courts' => array(
		array('type' => 'Badminton', 'price' => 12),
	)
);

$venue[] = array(
	'state' => 'Selangor',
	'name' => 'Sports Affairs Cheras',
	'address' => 'Lot 44621, Jalan Perdana 1, Taman Segar Perdana, Batu 9 Cheras,43200 Cheras, Selangor, Malaysia',
	'courts' => array(
		array('type' => 'Futsal', 'price' => 15),
		array('type' => 'Badminton', 'price' => 24),
	)
);

$venue[] = array(
	'state' => 'Kuala Lumpur',
	'name' => 'Sendayan Sport Center',
	'address' => 'Lot 8097-C, Off Jalan Genting Kelang Mukim Setapak 53300 Kuala Lumpur',
	'courts' => array(
		array('type' => 'Futsal', 'price' => 80),
	)
);

echo json_encode(array('data'=>$venue,'responseCode'=>'200'));
