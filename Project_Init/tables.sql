drop database Bucket_List;
create database Bucket_List;
use Bucket_List;

create table user (
    id int auto_increment primary key,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    handle varchar(255)
);

INSERT INTO user (first_name, last_name, email, handle)
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
