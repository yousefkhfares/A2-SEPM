use college
create table course(
course_id serial primary key,
course_code varchar(40),
name varchar(40),
subject varchar(40),
instructor varchar(40),
weeks int(2),
description text)