/*
Author: Eisha Aqeel
File: contacts.sql
Course: WEBD2201
Date: April 20, 2022
*/
drop table if exists contacts;
create table contacts(
    email_address varchar(255) primary key,
    first_name varchar(20) not null,
    last_name varchar(30) not null,
    phone_number varchar(25) not null,
    created_on date not null
);
--GRANT ALL ON contacts TO faculty;
insert into contacts values ('muath.alzghool@durhamcollege.ca', 'Muath', 'Alzghool', '1234567890', '2022-04-09');
insert into contacts values ('eisha.aqeel@dcmail.ca', 'Eisha', 'Aqeel', '2894554870', '2022-4-20');