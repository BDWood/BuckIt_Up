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

INSERT INTO user (first_name, last_name, email, password, username, remember_token, created_at, updated_at)
    VALUES 
        ('Bryan', 'Wood', 'bryan@gmail.com', 
            '$2y$10$YcTG2TjexfjHlPh8e22jg.c.E4Wk5ulufBaHIUfVIW1hpaTlNMOxe', 'BDWood',
            '9vcBOLEe5E1ZFCvFXo4wUtqDSydcsFRMSlucgdzkquYQaaqlmGGXBfy9Vhb8', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Scott', 'Brau', 'scottB@gmail.com', 
            '$2y$10$f0pY4lJbGILkgPJKrDWmMe1G8gzAyDD2K2vNC08HjVTCW5a/05R.C', 'Three30o', 
            'Bg14dnpors63GJMZqjWlUzy5Kmm21Y5NBTCSu2U2KDE5mAaI79yajUurTpri', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Lynne', 'Cudden', 'lynne@gmail.com', 
            '$2y$10$bi1WvpsA/hJ1mTdVsb563egLIEzXY9JG0dsIrbFbZiYjkc5P61pHW', 'ldcudden', 
            'br8MqXD96T6iENlWra54iqnEW8aFQOjJHyHEwcx0b6NBk8rZEstHtuXqV54q', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Scott', 'Kizer', 'scottK@gmail.com', 
            '$2y$10$eewZj5gJlw7yFLL9jmh7Ae1RFiSeSF0MLCPx/6KrtCmAEn1.jzuwa', 'scottK', 
            'XrNSq1AZfz6vNzHcjDFGpgebmw7cK36AKXnWdsLeeg94etNaXGA7Kwob1p9Y', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Armando', 'Acuna', 'armando@gmail.com', 
            '$2y$10$BbFBRQ8N9sqWpg8/qvLZL.PaiE3bIWBzCzCQHjsm0WZB41u7ps.5O', 'aacuna4539', 
            '1nt0n7u5qPqLeovOTNxR04x8DGfMNOfyQ6QZ1GCEMA3PNe6XhIotD1waCIeH', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Evan', 'Alto', 'GlitterBear@gmail.com', 
            '$2y$10$nXwDE34AbUdYrSIq3CXOJO0dNhqdVLzZKbVRQcbgs/a1W1r99d.3a', 'GlitterBear', 
            'Sy9ThhUJ4lz1AfM3EMKfugVwVMrWNGugihS2iNh789ZUUUs8YRQHc91P7mgE', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Jenna', 'Connolly', 'jenna@gmail.com', 
            '$2y$10$Ad6ifjouC8rH4gCmlUx4Sui.zxoxyzDognKeCBgQR9Q787Dxr4Jk2', 'jtsurfrat', 
            'FqdEDV2XPpO0fwblRuQr6WHEs2fuejHojDzhymtynfUQmPvnUQYVhXYLZDJn', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Alexander', 'Persky', 'alexander@gmail.com', 
            '$2y$10$EY3e1EAE0G/88v4kKc7pqemx6sDX6jRnfXGRjdXDaMxEuTzI29SzG', 'bebaps', 
            'yeOe0V9Am8kJiQusV4goCvxSmhOiiSaiVB4so7DXvWNITxIUHUjERNdpLzbf', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Kelly', 'Sharp', 'kelly@gmail.com', 
            '$2y$10$lPPiInYkFTyZXBsZ8AdDmeCJF8HNUv1nmWEd8EjBAzMeQ/aO0aSky', 'ringneck88', 
            'JJXEQ2KXzgADLgDaVMkvir6936yV6rJSsfBQK3h9ErMFmQUURtiJtNQbJWUH', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00'),
        ('Mark', 'Nichols', 'mark@gmail.com', 
            '$2y$10$NbuOVK.Q4/bR1lZVLaD//.AuHCpUuYEkg.bmb90AxNQgcmY6p7fSK', 'mrshmove', 
            'UKA8mqDKNZMF10YG2Mj7ysaGaDcvrDbbSB6E8yOx183LU9Luk53T4H2NzlSX', '2015-05-29 23:23:58', 
            '2015-05-29 23:24:00');

create table bucket (
    id int auto_increment primary key,
    user_id int
);

create table item (
    id int auto_increment primary key,
    name varchar(255),
    description varchar(255),
    bucket_id int
);

INSERT INTO item (name, description, bucket_id)
    VALUES 
    ('Skydiving', 'Jump out of a plane', 1),
    ('Go to Italy', 'Visit the Itallian Swiss Alps', 3),
    ('Visit Iceland', 'See a glacier and hike to a waterfall', 2),
    ('Go to Burning Man', 'Wallow in the music fesitval', 1),
    ('Go to Monoco', 'Watch the Monoco F1 Grand Prix', 3),
    ('Kiss a Dolphin', 'Take a cruise to the Bahamas', 2),
    ('Kiss Under a WaterFall', 'Honeymoon to Hawaii', 1),
    ('Cook a 5 star meal', 'Learn to cook at the Cordon Bleu in France', 3),
    ('Win an Oscar', 'create an award winning film', 2),
    ('Go to the Vatican', 'be blessed by the Pope', 1);