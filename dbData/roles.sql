create table roles
(
    id   int auto_increment
        primary key,
    name varchar(50) not null
);

INSERT INTO cardkingdom.roles (id, name) VALUES (1, 'Administrator');
INSERT INTO cardkingdom.roles (id, name) VALUES (2, 'Korisnik');
