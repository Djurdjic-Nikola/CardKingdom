create table decks
(
    id         int auto_increment
        primary key,
    id_user    int         not null,
    deck_name  varchar(50) not null,
    games_lost int         null,
    games_won  int         null,
    constraint decks_users_id_fk
        foreign key (id_user) references users (id)
);

INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (1, 4, 'Big Banger', 2, 5);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (2, 4, 'Blue Control', 6, 4);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (4, 4, 'Angel Beatdown', 8, 5);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (5, 5, 'Big Banger', 5, 7);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (6, 5, 'Angelss', 8, 9);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (7, 4, 'Crazy Frog', 11, 1);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (28, 4, 'Red Burn', 2, 10);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (29, 5, 'White Weenies', 5, 12);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (30, 8, 'Green Stompy', 7, 15);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (31, 4, 'Mono-Black Control', 6, 9);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (32, 5, 'Dimir Rogues', 8, 11);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (33, 5, 'Simic Ramp', 3, 14);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (34, 5, 'Rakdos Sacrifice', 10, 8);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (35, 4, 'Selesnya Tokens', 4, 13);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (36, 4, 'Izzet Spells', 9, 7);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (37, 5, 'Azorius Flyers', 2, 11);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (38, 9, 'Gruul Aggro', 5, 10);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (39, 10, 'Orzhov Enchantments', 3, 9);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (40, 10, 'Jund Midrange', 6, 12);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (41, 8, 'Esper Control', 8, 13);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (42, 5, 'Boros Aggro', 7, 14);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (43, 5, 'Temur Elementals', 4, 15);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (44, 4, 'Bant Ramp', 3, 10);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (45, 4, 'Naya Zoo', 5, 8);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (46, 4, 'Golgari Graveyard', 6, 12);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (47, 5, 'Five-Color Dragons', 9, 7);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (48, 11, 'Firestorm Fury', 10, 15);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (49, 12, 'Forest Friends', 8, 20);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (50, 13, 'Oceans Might', 12, 17);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (51, 14, 'Dragons Wrath', 14, 22);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (52, 15, 'Vampires Bite', 5, 25);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (53, 16, 'Goblin Gang', 20, 10);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (54, 17, 'Angelic Aura', 7, 30);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (55, 18, 'Mystic Meadow', 10, 12);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (56, 19, 'Thunder Strike', 15, 18);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (57, 20, 'Elvish Elites', 9, 25);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (58, 21, 'Dark Enchantments', 11, 21);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (59, 22, 'Frost Giants', 18, 14);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (60, 23, 'Lightning Blitz', 13, 19);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (61, 24, 'Phoenix Rebirth', 6, 28);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (62, 25, 'Swamps Curse', 8, 22);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (63, 26, 'Rock Rumble', 15, 12);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (64, 27, 'Mana Surge', 10, 20);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (65, 28, 'Beasts Rage', 12, 18);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (66, 29, 'Sky Guardians', 9, 23);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (67, 30, 'Spectral Shadows', 14, 16);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (68, 31, 'Savage Stomp', 13, 24);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (69, 32, 'Arcane Assault', 7, 29);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (70, 33, 'Blood Moon', 14, 20);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (71, 34, 'Shadow Lurkers', 11, 22);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (72, 35, 'Holy Light', 5, 30);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (73, 36, 'Raging Waters', 18, 13);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (74, 37, 'Goblin Horde', 20, 18);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (75, 38, 'Enchanted Grove', 10, 26);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (76, 39, 'Blazing Inferno', 17, 14);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (77, 40, 'Skeletal Legion', 12, 21);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (78, 41, 'Steel Defenders', 9, 25);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (79, 42, 'Night Howlers', 16, 17);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (80, 43, 'Druids Call', 11, 27);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (81, 44, 'Demons Grasp', 14, 19);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (82, 45, 'Thunderfall', 13, 22);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (83, 46, 'Winds of Change', 8, 28);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (84, 47, 'Fungal Frenzy', 6, 32);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (85, 48, 'Seaside Sorcery', 9, 27);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (86, 49, 'Ancient Guardians', 12, 25);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (87, 50, 'Tidebreaker', 15, 20);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (88, 51, 'Storm Chasers', 10, 24);
INSERT INTO cardkingdom.decks (id, id_user, deck_name, games_lost, games_won) VALUES (89, 4, 'Makenai', 2, 20);
