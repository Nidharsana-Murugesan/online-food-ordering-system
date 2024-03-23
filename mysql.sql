create database fastfood1;
use fastfood1;

create table siteuser
(
username varchar(30) primary key,
pwd varchar(50),
dob date,
gender varchar(6),
hintq varchar(255),
hinta varchar(255),
emailadd varchar(50),
smsno varchar(15),
role varchar(20)
);
insert into siteuser values('ajay','ajay','1989-12-4','male','Be','php','ajay@gmail.com','3','admin');
insert into siteuser values('pankaj','pankaj','1990-12-5','male','Be','php','pankaj@gmail.com','4','admin');
insert into siteuser values('shubham','shubham','1990-12-5','male','Be','php','shubham@gmail.com','4','customer');

create table vegfastfood
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);


create table nonvegfastfood
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);

create table sandwich
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);

create table pizza
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);


create table soup
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);

create table burger
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);


create table chinese
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);

create table indian
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);

create table thai
(
fid int(5) primary key auto_increment,
fname varchar(30),

fimage longtext,

price varchar(10) 
);


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




