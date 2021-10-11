create database polls character set utf8mb4 collate utf8mb4_spanish_ci;
use polls;

create table questions (
	id int(5) not null auto_increment,
    title varchar(100) not null,
    type_question enum("text", "gender", "hobby", "number"),
    primary key(id)
);

create table users (
	id int(11) not null auto_increment,
    full_name varchar(50) not null,
    primary key(id)
);

create table answers (
	id int(11) not null auto_increment,
    id_question int(5) not null,
    id_user int(11) not null,
    content varchar(50) not null,
    primary key(id),
	constraint answers_id_question foreign key(id_question) references questions(id) on delete restrict on update cascade,
    constraint answers_id_user foreign key(id_user) references users(id) on delete restrict on update cascade
);

alter table `answers` add constraint `answers_id_question_foreign` foreign key (`id_question`) references `questions` (`id`) on delete cascade on update cascade;

insert into questions(title, type_question) values ("Ingrese su nombre", 1);
insert into questions(title, type_question) values ("Eliga su genero", 2);
insert into questions(title, type_question) values ("¿Tiene algún hobby?", 3);
insert into questions(title, type_question) values ("A su hobby, ¿cuánto tiempo le dedica al mes?", 4);

select * from questions;