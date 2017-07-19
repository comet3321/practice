create database skypech_bbs;

grant all on skypech_bbs.* to dbuser@localhost identified by 'ewajoERadjk2da';

use skypech_bbs

create table posts(
  id int not null auto_increment primary key,
  name varchar(255),
  title varchar(255),
  skype_id varchar(255),
  message text,
  female  varchar(255),
  password varchar(255),
  created timestamp
);
