create database skypech_bbs;

grant all on skypech_bbs.* to dbuser@localhost identified by 'ewajoERadjk2da';

use skypech_bbs

create table posts(
  id int not null auto_increment primary key,
  tags varchar(255),
  name varchar(255),
  title varchar(255),
  skype_id varchar(255),
  message text,
  female  varchar(255),
  password varchar(255),
  created_at datetime
);

create table tags(
  id int not null auto_increment primary key,
  tags varchar(255),
  created_at datetime
);
