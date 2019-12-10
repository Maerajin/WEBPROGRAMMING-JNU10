create table Jmember(
id char(15) not null,
pw1 char(20) not null,
pw2 char(20) not null,
name char(10) not null,
nick char(10) not null,
year char(4) not null,
month char(2) not null,
day char(2) not null,
regist_day char(20), 
primary key(id)
);
