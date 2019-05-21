drop database Hospital;
create database Hospital;
 use Hospital;

create table LoginDoct(username varchar(25),password varchar(25),primary key(username));

create table LoginRecep(username varchar(25),password varchar(25),primary key(username));

 create table LoginAcc(username varchar(25),password varchar(25),primary key(username));

 create table Doctor(Dr_id int,Dr_name varchar(25),specialization varchar(25) ,primary key(Dr_id));

 create table Register(Reg_no bigint,Pat_name varchar(25),Reg_date date,Address varchar(50) ,phno bigint(10),primary key(Reg_no));

 create table patient_detail(Reg_no bigint,Pat_name varchar(25),Gender varchar(6),Age int,Phone_no bigint,Dr_id int,primary key(Reg_no,Pat_name,Dr_id),foreign key(Reg_no) references Register(Reg_no),foreign key(Dr_id) references Doctor(Dr_id));

create table Account(Reg_no bigint,Recp_no bigint,Reg_date date,Medicine_fees int,Lab_fees int,Dr_fees int,primary key(Reg_no,Recp_no),foreign key(Reg_no) references Register(Reg_no));
