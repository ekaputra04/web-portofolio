create database response_user;

use response_user;

create table response(
  id int primary key auto_increment,
  nama varchar(64),
  email varchar(200),
  no_telepon varchar(13),
  pesan text
)