/*
Author: Eisha Aqeel
File: lab9_users.sql
Course: WEBD2201
Date: April 8, 2022
*/
drop table if exists users;
create table users(
    id varchar(20) primary key,
    password varchar(15) not null,
    first_name varchar(20) not null,
    last_name varchar(30) not null,
    email_address varchar(255) not null,
    enrol_date date not null,
    last_access date not null
);
--GRANT ALL ON users TO faculty;  --required when running the script on opentech to allow faculty members to access your databsae table
insert into users values ('jdoe', 'testpass', 'John', 'Doe', 'jdoe@durhamcollege.ca', '2022-1-1', '2022-2-1');
insert into users values ('eisha', 'passw0rd', 'Eisha', 'Aqeel', 'eisha@durhamcollege.ca', '2022-4-5', '2022-4-9');
insert into users values ('emma', 'heyy8', 'Emma', 'Chamberlain', 'emma@durhamcollege.ca', '2021-9-1', '2022-4-1');
insert into users values ('vin', 'yellow', 'Vin', 'Doe', 'vindoe@durhamcollege.ca', '2022-4-10', '2022-4-12');
insert into users values ('smithb', 'some_password', 'Bill', 'Smith', 'smithb@gmail.com', '2022-04-11', '2022-04-11');