use b2b;

create table admin_member(
    id smallint(6) unsigned not null primary key,
    name varchar(30) not null default '',
    password varchar(32) not null default '123456',
    key(name,password)
)engine=myisam default charset=utf8 collate=utf8_general_ci;