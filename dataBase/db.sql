create database ADI;
use ADI;

create table level(
id int primary key auto_increment,										
levelName varchar(50) unique,
nbrSession int
);

create table category(
id int primary key auto_increment,
categoryName varchar(50) unique
);

create table training(
id int primary key auto_increment,
trainingName varchar(50) unique
);

create table student(
id int primary key auto_increment,
firstName varchar(50),
lastName varchar(50),
phone varchar(10),
email varchar(50)
);

create table user(
id int primary key auto_increment,
firstName varchar(50),
lastName varchar(50),
phone varchar(10),
email varchar(50),
userName varchar(50),
password varchar(256),
grade varchar(50)
);

create table registering(
id int primary key auto_increment,
registeringDate date,
levelId int not null,
categoryId int not null,
trainingId int not null,
userId int not null,
studentId int not null,
FOREIGN KEY (trainingId) REFERENCES training(id)  on delete cascade on update cascade,
FOREIGN KEY (categoryId) REFERENCES category(id)  on delete cascade on update cascade,
FOREIGN KEY (levelId) REFERENCES level(id)  on delete cascade on update cascade,
FOREIGN KEY (userId) REFERENCES user(id)  on delete cascade on update cascade,
FOREIGN KEY (studentId) REFERENCES student(id)  on delete cascade on update cascade
);

create table session(
id int primary key auto_increment,
sessionDate date,
userId int not null,
studentId int not null,
FOREIGN KEY (userId) REFERENCES user(id)  on delete cascade on update cascade,
FOREIGN KEY (studentId) REFERENCES student(id)  on delete cascade on update cascade,
presenceStudent boolean,
presenceTeasher boolean,
secondUserId int ,
FOREIGN KEY (secondUserId) REFERENCES user(id)  on delete cascade on update cascade,
Paymentstatus boolean,
PaymentDate date
)