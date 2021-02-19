create database dbWebsite;
use dbWebsite;



--------------------ADMIN---------------------

create table admin(
usersID int NOT NULL identity(1, 1) ,
usersUid VARCHAR(128) NOT NULL,
usersEmail VARCHAR(128) NOT NULL,
usersPassword VARCHAR(128) NOT NULL,
PRIMARY KEY(usersID));

select * from admin;






---------------------------------SURVEY LIST---------------------------
create table surveylist
(id_no int not null identity(1, 1),
last varchar(25) not null,
first varchar(25) not null,
mid varchar(25) not null,
sex varchar(25) not null,
age varchar(5) not null,
bdate date not null,
email varchar(30) not null,
contact varchar(11),
house_no varchar(30) not null,
street varchar(30) not null,
brgy varchar(30) not null,
civil_status varchar(30) not null,
q1 varchar(30) not null,
q2 varchar(30) not null,
q3 varchar(30) not null,
q4 varchar(30) not null,
q5 varchar(30) not null,
tandc varchar(30) not null,
PRIMARY KEY(id_no));


insert into surveylist (last, first, mid,sex,age,bdate,email,contact,house_no,street,brgy,civil_status,q1,q2,q3,q4,q5,tandc) values
('Leuterio',	 'Jose Enrico',			'P.','male',	'20','2000-02-19','jeleutz@gmail.com',	'09123456789','32P',	'parada',	'sta.lucia',	'single',	'no', 'no', 'no','no', 'no','yes'),
('Uy',			 'Jefferson Matthew',	'Y.','male',	'21','1999-07-15','jeffuy@gmail.com',	'09123456798','12S',	's.guzman',	'balong bato',	'single',	'no', 'yes','no','no', 'no','yes'),
('Mercado',		 'Madelaine',			'A.','female',	'21','1999-10-14','maddie@gmail.com',	'09123456987','901',	'lindo',	'batis',		'single',	'no', 'yes','no','no', 'no','yes'),
('Dionco',		 'Jerusa Eden',			'A.','female',	'21','1999-08-07','jerjer@gmail.com',	'09123459876','101',	'tido',		'rivera',		'single',	'no', 'no', 'no','no', 'no','yes'),
('Carbon',		 'Adrian Ace',			'B.','male',	'21','1999-12-25','carbonel@gmail.com',	'09123498765','00',		'pronto',	'corazon',		'married',	'yes','yes','no','yes','no','yes'),
('Infante',		 'Joel Angelo',			'T.','male',	'21','1999-11-01','joelita@gmail.com',	'09123498764','02',		'hyper',	'rivera',		'single',	'yes','yes','no','yes','no','yes'),
('Cosmo',		 'Guian',				'A.','male',	'21','1999-01-13','alieno@gmail.com',	'09123498763','01',		'matibay',	'ermitanyo',	'single',	'yes','yes','no','yes','no','yes'),
('Forbes',		 'Shiela Kate',			'G.','female',	'21','1999-05-09','katie12@gmail.com',	'09123498762','222',	'tatalon',	'corazon',		'single',	'yes','yes','no','yes','no','yes'),
('Casingal',	 'Ron Allan',			'V.','male',	'21','1999-06-19','ronald@gmail.com',	'09123498761','69',		'newyork',	'rivera',		'single',	'yes','yes','no','yes','no','yes'),
('Bucao',		 'Vincent',				'L.','male',	'21','1999-03-11','batman@gmail.com',	'09123498721','37',		'kakain',	'balong bato',	'single',	'yes','yes','no','yes','no','yes'),
('Cesar',		 'Dianne',				'B.','female',	'21','1999-06-27','cesario@gmail.com',	'09123498748','912',	'rando',	'onse',			'married',	'yes','yes','no','yes','no','yes'),
('Llevado',		 'Harley',				'K.','male',	'21','1999-12-28','harvey@gmail.com',	'09123498787','85',		'maytulo',	'pasadena',		'single',	'yes','yes','no','yes','no','yes'),
('Sayo',	 	 'Charlie',				'D.','male',	'21','1999-05-25','elmario8@gmail.com',	'09123498711','013',	'aqua',		'greenhills',	'single',	'yes','yes','no','yes','no','yes'),
('Pada',		 'Joseph',				'H.','male',	'21','1999-06-15','elmario7@gmail.com',	'09123498711','013',	'aqua',		'greenhills',	'single',	'yes','yes','no','yes','no','yes'),
('Li',			 'Justin',				'V.','male',	'21','1999-03-12','elmario6@gmail.com',	'09123498711','013',	'aqua',		'greenhills',	'single',	'yes','yes','no','yes','no','yes'),
('Mallari',		 'Rayne',				'P.','male',	'21','1999-01-02','elmario5@gmail.com',	'09123498711','013',	'aqua',		'greenhills',	'single',	'yes','yes','no','yes','no','yes'),
('Siapno',		 'Jythro',				'M.','male',	'21','1999-08-05','elmario4@gmail.com',	'09123498711','013',	'aqua',		'greenhills',	'single',	'yes','yes','no','yes','no','yes'),
('Buenaventura', 'Elventh',				'Q.','male',	'21','1999-07-03','elmario3@gmail.com',	'09123498711','013',	'aqua',		'greenhills',	'single',	'yes','yes','no','yes','no','yes'),
('Llego',		 'Vincent',				'F.','male',	'21','1999-10-12','elmario2@gmail.com',	'09123498711','013',	'aqua',		'greenhills',	'single',	'yes','yes','no','yes','no','yes'),
('Baustista',	 'Justine',				'V.','male',	'21','1999-11-10','elmario1@gmail.com',	'09123498711','013',	'aqua',		'greenhills',	'single',	'yes','yes','no','yes','no','yes');

-----------------------------------Select Table---------------------------------------------------------------
select * from surveylist



-----------------------------------select w/ id no.------------------------------------------------------------
SELECT CONCAT(id_no, ' ') AS Id , CONCAT(last, ', ', first, ' ', mid) AS 'Name', sex,age, FORMAT(bdate, N'MMM dd, yyyy') AS 'Date of Birth', email, contact, CONCAT(house_no, ', ', street, ' street, Brgy.', brgy) AS 'Address',
		CONCAT(civil_status, ' ') as 'Civil Status', q1,q2,q3,q4,q5, tandc	
FROM surveylist ORDER BY id_no;



--------------------------------select w/o id no.--------------------------------------------------------------
SELECT CONCAT(last, ', ', first, ' ', mid) AS 'Name', sex,age, FORMAT(bdate, N'MMM dd, yyyy') AS 'Date of Birth', email, contact, CONCAT(house_no, ', ', street, ' street, Brgy.', brgy) AS 'Address',
		CONCAT(civil_status, ' ') as 'Civil Status', q1,q2,q3,q4,q5, tandc	
FROM surveylist ORDER BY last;

------------------------------------DROP TABLE------------------------------------------------------------------

drop table surveylist


drop table stat1




-------------------------------------STATISTICS-------------------------------------

create table stat1
(id int not null identity(1, 1),
Barangay varchar(30) not null,
act int not null,
Recovered int not null,
Deaths int not null,
Conf int not null,
PUI int not null,
PRIMARY KEY(id));

insert into stat1 (Barangay, act, Recovered, Deaths, Conf, PUI) values
('Addition Hills','','','','',''),
('Balong-Bato','','','','',''),
('Batis','','','','',''),
('Corazon De Jesus','','','','',''),
('Ermitano','','','','',''),
('Greenhills','','','','',''),
('Isabelita','','','','',''),
('Kabayanan','','','','',''),
('Little Baguio','','','','',''),
('Maytunas','','','','',''),
('Onse','','','','',''),
('Pasadena','','','','',''),
('Pedro Cruz','','','','',''),
('Progreso','','','','',''),
('Rivera','','','','',''),
('Salapan','','','','',''),
('San Perfecto','','','','',''),
('St.Joseph','','','','',''),
('Sta.Lucia','','','','',''),
('Tibagan','','','','',''),
('West Crame','','','','','');

------------------------------------------Select---------------------------------

select * from stat1
------------------------------------------------------------------------------


