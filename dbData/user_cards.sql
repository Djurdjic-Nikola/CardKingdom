create table user_cards
(
    id            int auto_increment
        primary key,
    id_user       int      not null,
    id_card       int      not null,
    price         int      not null,
    purchase_time datetime not null,
    constraint user_cards_cards_id_fk
        foreign key (id_card) references cards (id),
    constraint user_cards_users_id_fk
        foreign key (id_user) references users (id)
);

INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (1, 4, 1, 8, '2024-11-24 16:46:26');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (2, 4, 1, 9, '2024-11-24 16:53:50');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (3, 4, 4, 55, '2024-11-24 16:53:54');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (4, 5, 3, 3, '2024-11-24 16:54:48');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (8, 5, 1, 9, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (9, 5, 4, 55, '2024-03-28 12:17:20');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (10, 10, 3, 19, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (11, 11, 15, 12, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (12, 12, 56, 23, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (13, 13, 8, 18, '2024-01-04 11:52:43');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (14, 14, 29, 30, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (15, 15, 5, 11, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (16, 16, 12, 25, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (17, 17, 41, 16, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (18, 18, 23, 18, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (19, 19, 10, 20, '2024-03-28 12:17:20');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (20, 20, 6, 25, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (21, 21, 33, 35, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (22, 22, 21, 12, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (23, 23, 19, 28, '2024-01-04 11:52:43');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (24, 24, 8, 17, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (25, 25, 42, 24, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (26, 26, 14, 18, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (27, 27, 35, 29, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (28, 28, 11, 20, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (29, 29, 24, 22, '2024-03-28 12:17:20');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (30, 30, 18, 15, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (31, 31, 7, 22, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (32, 32, 33, 18, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (33, 33, 50, 27, '2024-01-04 11:52:43');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (34, 34, 12, 14, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (35, 35, 41, 25, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (36, 36, 8, 11, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (37, 37, 25, 30, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (38, 38, 44, 20, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (39, 39, 18, 16, '2024-03-28 12:17:20');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (40, 40, 31, 24, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (41, 41, 21, 12, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (42, 42, 56, 22, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (43, 43, 34, 19, '2024-01-04 11:52:43');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (44, 44, 9, 15, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (45, 45, 48, 28, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (46, 46, 30, 23, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (47, 47, 17, 14, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (48, 48, 20, 27, '2024-10-17 15:50:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (49, 49, 43, 29, '2024-10-16 11:15:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (50, 50, 11, 18, '2024-10-15 13:40:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (71, 12, 7, 25, '2024-11-24 10:20:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (72, 15, 12, 30, '2024-11-24 11:45:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (73, 21, 19, 40, '2024-11-24 12:30:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (74, 23, 5, 35, '2024-11-24 09:15:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (75, 28, 10, 50, '2024-11-24 13:05:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (76, 31, 13, 45, '2024-11-24 14:10:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (77, 25, 21, 20, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (78, 17, 18, 60, '2024-03-28 12:17:20');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (79, 30, 7, 55, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (80, 35, 12, 50, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (81, 19, 22, 40, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (82, 26, 15, 33, '2024-01-04 11:52:43');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (83, 40, 8, 45, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (84, 12, 25, 70, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (85, 15, 16, 28, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (86, 29, 2, 38, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (87, 36, 4, 32, '2024-11-24 13:40:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (88, 33, 11, 22, '2024-11-24 14:45:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (89, 44, 3, 60, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (90, 24, 14, 55, '2024-03-28 12:17:20');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (91, 19, 17, 48, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (92, 30, 6, 40, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (93, 25, 20, 58, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (94, 18, 9, 35, '2024-01-04 11:52:43');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (95, 31, 12, 47, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (96, 23, 5, 52, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (97, 32, 7, 49, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (98, 21, 4, 41, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (99, 29, 14, 50, '2024-11-24 11:20:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (100, 44, 13, 30, '2024-11-24 12:35:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (101, 27, 2, 36, '2024-11-24 13:15:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (102, 19, 23, 42, '2024-08-24 14:05:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (103, 25, 11, 37, '2024-11-24 15:30:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (104, 35, 8, 45, '2024-11-24 16:00:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (105, 31, 6, 28, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (106, 30, 20, 50, '2024-03-28 12:17:20');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (107, 28, 10, 32, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (108, 39, 15, 65, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (109, 33, 16, 55, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (110, 24, 5, 48, '2024-01-04 11:52:43');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (111, 40, 12, 58, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (112, 36, 23, 60, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (113, 33, 7, 55, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (114, 50, 4, 40, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (115, 51, 8, 50, '2024-11-24 13:55:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (116, 44, 9, 35, '2024-11-24 14:20:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (117, 42, 3, 48, '2024-11-24 15:40:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (118, 29, 14, 52, '2024-11-24 16:30:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (119, 24, 13, 30, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (120, 41, 16, 65, '2024-03-28 12:17:20');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (121, 50, 12, 50, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (122, 44, 15, 70, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (123, 27, 8, 25, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (124, 23, 7, 35, '2024-01-04 11:52:43');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (125, 26, 9, 42, '2024-11-09 12:00:08');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (126, 28, 11, 40, '2024-08-27 11:54:18');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (127, 32, 6, 38, '2024-04-07 01:25:44');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (128, 36, 12, 30, '2024-05-06 11:23:53');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (129, 39, 17, 48, '2024-11-24 12:10:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (130, 45, 15, 52, '2024-11-24 12:50:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (131, 23, 4, 43, '2024-11-24 13:40:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (132, 26, 16, 60, '2024-11-24 14:15:00');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (133, 5, 10, 50, '2024-11-24 21:27:13');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (134, 44, 16, 80, '2024-09-25 21:53:16');
INSERT INTO cardkingdom.user_cards (id, id_user, id_card, price, purchase_time) VALUES (135, 44, 16, 50, '2024-08-25 21:53:39');
