drop database Bucket_List;
create database Bucket_List;
use Bucket_List;

create table user (
    id int auto_increment primary key,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
)

INSERT INTO user (first_name, last_name, email, phone)
    values 
    ('Bob', 'the man', 'bob@theman.com'),
    ('This', 'guy', 'this@guy.com'),
    ('Another', 'Person', 'another@person.com');

create table bucket (
    id int auto_increment primary key,
    user_id int,
)

create table item (
    id int auto_increment primary key,
    name varchar(255),
    description varchar(255)
)