drop database BuckIt_Up;
create database BuckIt_Up;
use BuckIt_Up;

create table user (
    id int auto_increment primary key,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255),
    username varchar(255),
    remember_token varchar(255),
    created_at datetime,
    updated_at datetime
);

create table bucket (
    id int auto_increment primary key,
    user_id int
);

create table item (
    id int auto_increment primary key,
    name varchar(255),
    description varchar(255)
);
