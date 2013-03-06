drop database if exists `mrs`;
create database `mrs`;
use `mrs`

drop table if exists `patients`;
create table `patients` (
	`id` int not null auto_increment primary key,
	`last_name` varchar(255) not null,
	`first_name` varchar(255) not null,
	`middle_name` varchar(255) not null,
	`gender` varchar(255) not null,
	`status` varchar(45) not null,
	`birthdate` DATE not null,
	`contact_number` varchar(255) not null,
	`image` varchar(255) null,
	`created` DATE not null
);

drop table if exists `users`;
create table `users` (
	`id` int not null auto_increment primary key,
	`last_name` varchar(255) not null,
	`first_name` varchar(255) not null,
	`birthdate` date not null,
	`contact_number` varchar(255) not null,
	`background` varchar(255) not null,
	`username` varchar(50) not null,
	`password` varchar(50) not null,
	`role_id` int not null,
	`created` datetime not null,
	`modified` datetime not null
);

drop table if exists `roles`;
create table `roles` (
	`id` int not null auto_increment primary key,
	`name` varchar(255) not null
);

drop table if exists `hmo`;
create table `hmo` (
	`id` int not null auto_increment primary key,
	`card_no` varchar(255) not null,
	`company_name` varchar(255) not null,
	`patient_id` int not null
);

drop table if exists `physical_state`;
create table `physical_state` (
	`id` int not null auto_increment primary key,
	`weight` varchar(45) not null,
	`height` varchar(45) not null,
	`body_mass_index` int not null,
	`created` datetime not null,
	`patient_id` int not null
);


drop table if exists `clinical_histories`;
create table `clinical_histories` (
	`id` int not null auto_increment primary key,
	`patient_id` int not null
);

drop table if exists `complaints`;
create table `complaints` (
	`id` int not null auto_increment primary key,
	`present_complaint` text not null,
	`history_of_present_illness` text not null,
	`clinical_history_id` int not null
	`patient_id` int not null
);

drop table if exists `mobile_complaints`;
create table `mobile_complaints`(
	`id` int not null auto_increment primary key,
	`complaint` text not null,
	`created` datetime not null,
	`patient_id` int not null
);

drop table if exists `past_medical_histories`;
create table `past_medical_histories` (
	`id` int not null auto_increment primary key,
	`illness_id` int not null,
	`status` tinyint(1) not null,
	`patient_id` int not null,
	`clinical_history_id` int not null
);

drop table if exists `hospitalizations`;
create table `hospitalizations`(
	`id` int not null auto_increment primary key,
	`date_admitted` date not null,
	`reason` text not null,
	`date_checkout` date not null,
	`remarks` text not null,
	`patient_id` int not null,
	`past_medical_history` int not null
);

drop table if exists `surgeries`;
create table `surgeries` (
	`id` int not null auto_increment primary key,
	`date_of_surgery` date not null,
	`reason` text not null,
	`remarks` text not null,
	`patient_id` int not null,
	`past_medical_history` int not null
);

drop table if exists `family_histories`;
create table `family_histories` (
	`id` int not null auto_increment primary key,
	`illness_id` int not null,
	`status` tinyint(1) not null,
	`patient_id` int not null,
	`clinical_history_id` int not null
);

drop table if exists `obgyne_hxs`;
create table `obGyne_hxs` (
	`id` int not null auto_increment primary key,
	`gravida` varchar(255) not null,
	`para` varchar(255) not null,
	`lmp` varchar(255) not null,
	`pmp` varchar(255) not null,
	`patient_id` int not null
);

drop table if exists `illnesses`;
create table `illnesses` (
	`id` int not null auto_increment primary key,
	`name` varchar(255) not null
);

drop table if exists `personal_social_histories`;
create table `personal_social_histories` (
	`id` int not null auto_increment primary key,
	`smoker` tinyint(1) not null,
	`pack_years` varchar(255) not null,
	`alcohol_drinker` tinyint(1) not null,
	`drugs` varchar(255) null,
	`food` varchar(255) null,
	`patient_id` int not null,
	`clinical_history_id` int not null
);

drop table if exists `physical_examinations`;
create table `physical_examinations` (
	`id` int not null auto_increment primary key,
	`blood_pressure` varchar (255) null,
	`heart_rate` varchar(255) null,
	`temperature` varchar(255) null,
	`heent` varchar(255) null,
	`chest_and_lungs` varchar(255) null,
	`heart_cvs` varchar(255) null,
	`gastrointestinal` varchar(255) null,
	`extrimeties` varchar(255) null,
	`GUT` varchar(255) null,
	`neuro_muscular` varchar(255) null,
	`patient_id` int not null,
	`created` datetime not null
);

drop table if exists `therapeutics`;
create table `therapeutics` (
	`id` int not null auto_increment primary key,
	`medication` varchar(255) not null,
	`dose` varchar(255) not null,
	`sig` varchar(255) not null,
	`remarks` varchar(255) not null,
	`created` datetime not null,
	`patient_id` int not null
);

drop table if exists `diagnostics`;
create table `diagnostics`(
	`id` int not null auto_increment primary key,
	`lab_request_id` int not null,
	`status` tinyint(1) not null,
	`patient_id` int not null,
	`requested_by` varchar(255) not null
);

drop table if exists `lab_requests`;
create table `lab_requests` (
	`id` int not null auto_increment primary key,
	`request` varchar(255) not null
);

drop table if exists `blood_chems`;
create table `blood_chems` (
	`id` int not null auto_increment primary key,
	`type` varchar(255) not null
);

drop table if exists `lab_exams`;
create table `lab_exams`(
	`id` int not null auto_increment primary key,
	`type` varchar(255) not null
);

drop table if exists `lab_results`;
create table `lab_results` (
	`id` int not null auto_increment primary key,
	`lab_exam_id` int null,
	`blood_chem_id` int null,
	`result` varchar(255) null,
	`doctor` varchar(255) not null,
	`patient_id` int not null
);

drop table if exists `lead_ECGs`;
create table `lead_ECGs` (
	`id` int not null auto_increment primary key,
	`rhythm` varchar(255) not null,
	`rate` varchar(255) not null,
	`IMP` varchar(255) not null,
	`doctor` varchar(255) not null,
	`patient_id` int not null
);
