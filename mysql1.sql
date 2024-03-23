use fastfood;
create table feedback
(
feedbackid int(5) primary key auto_increment,
name varchar(30),
mobileno varchar(30),
email varchar(30),
date varchar(30),
ymsg varchar(200)
);

insert into feedback values('','pankaj','8602768216','pankaj@gmail.com','12-12-2013','welcome');


create table message
(
messageid int(5) primary key auto_increment,
username varchar(30),
receivername varchar(30),
messagetext text,
messagedate varchar(30)

);


CREATE TABLE newbooking(
	bookingid int(5) primary key AUTO_INCREMENT,
	username varchar(50),
	foodname varchar(50),
	address varchar(255),
	contact varchar(20),
	email varchar(50),
	bookingdate varchar(50)
	);