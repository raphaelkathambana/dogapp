use dogappdb;
select database();
drop table if exists users;
create table if not exists users(
    id int(3) AUTO_INCREMENT not null,
    name varchar(255) not null default "",
    email varchar(255) not null default "",
    password varchar(100) not null default "",
    created_at datetime not null default current_timestamp(),
    updated_at datetime not null default current_timestamp() ON UPDATE current_timestamp(),
    primary key (id),
    UNIQUE KEY email (email)
);

insert into users (name, email, password) values ("panther", "panther@hot.com", "QmyVF&zz${r{1L`=");
select * from users;
drop table if exists dog_info;
create table if not exists dog_info(
    id INT(3) not null,
    dogName  varchar(100) not null default '',
    dogBreed  varchar(100) not null default '',
    age int(2) not null,
     gender varchar(100) not null default '',
     foreign key (id) references users(id)
);
INSERT INTO dog_info VALUES (1, "Sparky", "German Shepherd", 9, "Male");

DROP TABLE noteContent;
CREATE TABLE IF NOT EXISTS noteContent (
    id INT(11) primary key auto_increment,
    title varchar(255),
    note_description varchar(1024),
    date_of_note datetime
);

INSERT INTO noteContent (title,note_description,date_of_note) VALUES ("Note 2", "This is an Example of a note", "2023-06-17");

delete from noteContent where id = 4;

SELECT * FROM notecontent;