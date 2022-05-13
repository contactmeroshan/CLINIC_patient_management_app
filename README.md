# deploying simple patient management app by Connecting to MySQL in PHP

Create a Simple Database App: Connecting to MySQL with PHP

## Instructions

##Install database and create table structure:
###create database by using the below commands or commands from the file -- init.sql from the folder named ---> data, which is the same as below 

CREATE DATABASE test;

use test;

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	age INT(3),
	location VARCHAR(50),
	date TIMESTAMP
);

## CONNETIVITY for our dem0 HTTP non-secure , that is disabling SSL at the database level
1) Add your PC IP and server ubuntu VM IP in mysql-server --> CONNECTION SECURITY section(located left pane on the azure portal) 
2) Also set your AD USERNAME in the left pane section - ACIVE DIRECTORY ADMIN section.
3) DISABLE SSL in CONNECTION SECURITY section of the mysql SERVER and ENABLE ---> Allow access to Azure service
- Submit new users
- Query and filter users
- Update users with new data
- Delete users

