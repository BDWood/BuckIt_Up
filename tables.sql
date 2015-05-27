drop database Bucket_List;
create database Bucket_List;
use Bucket_List;

create table user (
    id int auto_increment primary key,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    phone varchar(255)
)

INSERT INTO user (first_name, last_name, email, phone)
    values 
    ('Bob', 'the man', 'bob@theman.com', '000-000-0000'),
    ('This', 'guy', 'this@guy.com', '111-111-1111'),
    ('Another', 'Person', 'another@person.com', '222-222-2222');

create table bucket (
    id int auto_increment primary key,
    item int,
)