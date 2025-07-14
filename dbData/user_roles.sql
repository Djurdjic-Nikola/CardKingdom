create table user_roles
(
    id      int auto_increment
        primary key,
    id_user int not null,
    id_role int not null,
    constraint user_roles_roles_id_fk
        foreign key (id_role) references roles (id),
    constraint user_roles_users_id_fk
        foreign key (id_user) references users (id)
);

INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (3, 4, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (4, 5, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (5, 4, 1);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (6, 8, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (7, 9, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (8, 10, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (9, 11, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (10, 12, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (11, 13, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (12, 14, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (13, 15, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (14, 16, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (15, 17, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (16, 18, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (17, 19, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (18, 20, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (19, 21, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (20, 22, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (21, 23, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (22, 24, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (23, 25, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (24, 26, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (25, 27, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (26, 28, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (27, 29, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (28, 30, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (29, 31, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (30, 32, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (31, 33, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (32, 34, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (33, 35, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (34, 36, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (35, 37, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (36, 38, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (37, 39, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (38, 40, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (39, 41, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (40, 42, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (41, 43, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (42, 44, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (43, 45, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (44, 46, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (45, 47, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (46, 48, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (47, 49, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (48, 50, 2);
INSERT INTO cardkingdom.user_roles (id, id_user, id_role) VALUES (49, 51, 2);
