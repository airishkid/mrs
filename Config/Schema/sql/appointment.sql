drop table if exists `appointments`;
create table `appointments`(
	`id` int not null auto_increment primary key,
	`start` datetime not null,
	`end` datetime not null,
	`patient_id` int not null,
	`assigned_by` varchar(255) not null
);
