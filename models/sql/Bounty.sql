/*Creating database Bounty*/
create database Bounty
default character set utf8;

/*10 tables createds*/

create table users(
    id int not null primary key auto_increment,
    image text,
    fullname varchar(50),
    email text,
    senha text
);

create table denunces(
    id int not null primary key auto_increment,
    content text,
    date date,
    status varchar(30),
    denunce_category varchar(50),
    denunce_category_id int,
    user_id int,
    foreign key(denunce_category_id) references denunce_categories(id),
    foreign key(user_id) references users(id)
);

create table has_categories(
    id int not null primary key auto_increment,
    c_category_id int,
    denunce_id int,
    foreign key(c_category_id) references c_categories(id),
    foreign key(denunce_id) references denunces(id)
);

create table evidences(
    id int not null primary key auto_increment,
    src text,
    denunce_id int,
    foreign key(denunce_id) references denunces(id)
);

create table testimonies(
    id int not null primary key auto_increment,
    name varchar(50),
    denunce_id int,
    foreign key(denunce_id) references denunces(id)
);

create table c_categories(
    id int not null primary key auto_increment,
    name varchar(30)
);

create table denuncie_categories(
    id int not null primary key auto_increment,
    name varchar(30)
);

create table evidence_types(
    id int not null primary key auto_increment,
    type varchar(30)
);

create table cases(
    id int not null primary key auto_increment,
    name varchar(50),
    status varchar(30),
    start date,
    end date,
    denunce_id int,
    foreign key(denunce_id) references denunces(id)
);

create table investigators(
    id int not null primary key auto_increment,
    name varchar(50)
);

create table investigators_of_investigations(
    id int not null primary key auto_increment,
    name varchar(50),
    investigator_id int,
    case_id int,
    date date,
    foreign key(case_id) references cases(id),
    foreign key(investigator_id) references investigators(id)
);
