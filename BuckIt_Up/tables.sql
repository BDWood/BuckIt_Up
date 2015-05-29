drop database BuckIt_Up;
create database BuckIt_Up;
use BuckIt_Up;

create table user (
    id int auto_increment primary key,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255),
    username varchar(255)
);

INSERT INTO user (first_name, last_name, email, username)
    values 
    ('Bob', 'the man', 'bob@theman.com', 'BobTHEMAN'),
    ('This', 'guy', 'this@guy.com', 'ThisGuy12'),
    ('Another', 'Person', 'another@person.com', 'PERSON2');

create table bucket (
    id int auto_increment primary key,
    user_id int
);

create table item (
    id int auto_increment primary key,
    name varchar(255),
    description varchar(255)
);
