create table cards
(
    id      int auto_increment
        primary key,
    name    varchar(50)  not null,
    text    varchar(255) not null,
    cardSet varchar(50)  not null,
    artwork varchar(255) not null,
    price   int          not null
);

INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (1, 'Serra Angel', 'Flying, Vigilance', 'Core Set 2020', '674340dc93119.jpg', 9);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (2, 'Lightning Bolt', 'Lightning Bolt deals 3 damage to any target.', 'Core Set 2010', '674340dc93119.jpg', 70);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (3, 'Llanowar Elves', 'Tap: Add {G}.', 'Core Set 2019', '674340dc93119.jpg', 3);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (4, 'Shivan Dragon', 'Flying
{R}: Shivan Dragon gets +1/+0 until end of turn.', 'Core Set 2021', '674340dc93119.jpg', 55);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (5, 'Counterspell', 'Counter target spell.', 'Revised Edition', '674340dc93119.jpg', 2);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (6, 'Black Lotus', 'Tap, Sacrifice Black Lotus: Add three mana of any one color.', 'Alpha', '674340dc93119.jpg', 80);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (7, 'Mox Sapphire', 'Tap: Add {U}.', 'Unlimited Edition', '674340dc93119.jpg', 50);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (8, 'Ancestral Recall', 'Target player draws three cards.', 'Alpha', '674340dc93119.jpg', 250);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (9, 'Time Walk', 'Take an extra turn after this one.', 'Beta', '674340dc93119.jpg', 10);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (10, 'Tarmogoyf', 'Tarmogoyf’s power is equal to the number of card types among cards in all graveyards and its toughness is equal to that number plus 1.', 'Modern Masters', '674340dc93119.jpg', 50);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (11, 'Jace, the Mind Sculptor', '+2: Look at the top card of target player\'s library...', 'Worldwake', '674340dc93119.jpg', 100);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (12, 'Snapcaster Mage', 'Flash
When Snapcaster Mage enters the battlefield...', 'Innistrad', '674340dc93119.jpg', 70);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (13, 'Liliana of the Veil', '+1: Each player discards a card...', 'Innistrad', '674340dc93119.jpg', 80);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (14, 'Sol Ring', 'Tap: Add {C}{C}.', 'Commander Legends', '674340dc93119.jpg', 3);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (15, 'Mana Crypt', 'Flip a coin. If you lose the flip, Mana Crypt deals 3 damage to you...', 'Eternal Masters', '674340dc93119.jpg', 200);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (16, 'Goblin Guide', 'Haste
Whenever Goblin Guide attacks, defending player reveals the top card of their library...', 'Zendikar', '674340dc93119.jpg', 25);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (17, 'Thoughtseize', 'Target player reveals their hand. You choose a nonland card from it. That player discards that card.', 'Theros', '674340dc93119.jpg', 15);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (18, 'Bloodbraid Elf', 'Haste
Cascade (When you cast this spell, exile cards from the top of your library until you exile a nonland card with lesser mana value. You may cast it without paying its mana cost...)', 'Alara Reborn', '674340dc93119.jpg', 5);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (19, 'Lightning Helix', 'Lightning Helix deals 3 damage to any target and you gain 3 life.', 'Ravnica: City of Guilds', '674340dc93119.jpg', 2);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (20, 'Elvish Mystic', 'Tap: Add {G}.', 'Magic 2014', '674340dc93119.jpg', 1);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (21, 'Path to Exile', 'Exile target creature. Its controller may search their library for a basic land card, put that card onto the battlefield tapped, then shuffle.', 'Conflux', '674340dc93119.jpg', 6);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (22, 'Ulamog, the Ceaseless Hunger', 'When you cast this spell, exile two target permanents. Indestructible...', 'Battle for Zendikar', '674340dc93119.jpg', 40);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (23, 'Nicol Bolas, the Ravager', 'Flying
When Nicol Bolas, the Ravager enters the battlefield, each opponent discards a card...', 'Core Set 2019', '674340dc93119.jpg', 20);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (24, 'Karn Liberated', '+4: Target player exiles a card from their hand...
-14: Restart the game, leaving in exile all non-Aura permanent cards exiled with Karn Liberated...', 'New Phyrexia', '674340dc93119.jpg', 50);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (25, 'Primeval Titan', 'Trample
Whenever Primeval Titan enters the battlefield or attacks, you may search your library for up to two land cards, put them onto the battlefield tapped, then shuffle.', 'Magic 2012', '674340dc93119.jpg', 15);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (26, 'Vendilion Clique', 'Flash
Flying
When Vendilion Clique enters the battlefield, look at target player’s hand...', 'Morningtide', '674340dc93119.jpg', 40);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (27, 'Aether Vial', 'At the beginning of your upkeep, you may put a charge counter on Aether Vial...
Tap: You may put a creature card with mana value equal to the number of charge counters on Aether Vial from your hand onto the battlefield.', 'Darksteel', '674340dc93119.jpg', 35);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (28, 'Cabal Coffers', 'Tap: Add {B} for each Swamp you control.', 'Torment', '674340dc93119.jpg', 20);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (29, 'Mystic Remora', 'Cumulative upkeep {1}
Whenever an opponent casts a noncreature spell, you may draw a card unless that player pays {4}.', 'Ice Age', '674340dc93119.jpg', 10);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (30, 'Sword of Fire and Ice', 'Equipped creature gets +2/+2 and has protection from red and from blue...
Whenever equipped creature deals combat damage to a player, Sword of Fire and Ice deals 2 damage to any target and you draw a card.', 'Darksteel', '674340dc93119.jpg', 55);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (31, 'Thalia, Guardian of Thraben', 'First strike
Noncreature spells cost {1} more to cast.', 'Dark Ascension', '674340dc93119.jpg', 8);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (32, 'Avacyn, Angel of Hope', 'Flying, vigilance, indestructible
Other permanents you control have indestructible.', 'Avacyn Restored', '674340dc93119.jpg', 45);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (33, 'Dark Confidant', 'At the beginning of your upkeep, reveal the top card of your library and put that card into your hand. You lose life equal to its mana value.', 'Ravnica: City of Guilds', '674340dc93119.jpg', 25);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (34, 'Force of Will', 'You may pay 1 life and exile a blue card from your hand rather than pay this spell’s mana cost...
Counter target spell.', 'Alliances', '674340dc93119.jpg', 100);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (35, 'Gilded Lotus', 'Tap: Add three mana of any one color.', 'Dominaria', '674340dc93119.jpg', 10);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (36, 'Crucible of Worlds', 'You may play land cards from your graveyard.', 'Core Set 2019', '674340dc93119.jpg', 30);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (37, 'Cryptic Command', 'Choose two — Counter target spell; or return target permanent to its owner’s hand; or tap all creatures your opponents control; or draw a card.', 'Lorwyn', '674340dc93119.jpg', 15);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (38, 'Grim Monolith', 'Grim Monolith doesn’t untap during your untap step...
Tap: Add {C}{C}{C}.', 'Urza’s Legacy', '674340dc93119.jpg', 150);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (39, 'Sensei’s Divining Top', 'Tap: Look at the top three cards of your library, then put them back in any order...
{1}: Draw a card, then put Sensei’s Divining Top on top of its owner’s library.', 'Champions of Kamigawa', '674340dc93119.jpg', 40);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (40, 'Phyrexian Altar', 'Sacrifice a creature: Add one mana of any color.', 'Invasion', '674340dc93119.jpg', 35);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (41, 'Mana Vault', 'Mana Vault doesn’t untap during your untap step...
Tap: Add {C}{C}{C}.', 'Unlimited Edition', '674340dc93119.jpg', 100);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (42, 'Ensnaring Bridge', 'Creatures with power greater than the number of cards in your hand can’t attack.', 'Stronghold', '674340dc93119.jpg', 45);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (43, 'Sylvan Library', 'At the beginning of your draw step, you may draw two additional cards...
If you do, choose two cards in your hand drawn this turn. For each of those cards, pay 4 life or put it on top of your library.', 'Commander’s Arsenal', '674340dc93119.jpg', 60);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (44, 'Azusa, Lost but Seeking', 'You may play two additional lands on each of your turns.', 'Core Set 2021', '674340dc93119.jpg', 10);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (45, 'Dark Ritual', 'Add {B}{B}{B}.', 'Revised Edition', '674340dc93119.jpg', 2);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (46, 'Teferi, Time Raveler', 'Each opponent can cast spells only any time they could cast a sorcery...', 'War of the Spark', '674340dc93119.jpg', 12);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (47, 'The Ur-Dragon', 'Eminence — As long as The Ur-Dragon is in the command zone or on the battlefield, other Dragon spells you cast cost {1} less to cast...', 'Commander 2017', '674340dc93119.jpg', 35);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (48, 'Atraxa, Praetors’ Voice', 'Flying, vigilance, deathtouch, lifelink
At the beginning of your end step, proliferate.', 'Commander 2016', '674340dc93119.jpg', 30);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (49, 'Scalding Tarn', '{T}, Pay 1 life, Sacrifice Scalding Tarn: Search your library for an Island or Mountain card, put it onto the battlefield, then shuffle.', 'Zendikar', '674340dc93119.jpg', 50);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (50, 'Wasteland', '{T}: Destroy target nonbasic land.', 'Tempest', '674340dc93119.jpg', 30);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (51, 'Blightsteel Colossus', 'Trample
Infect
Indestructible
If Blightsteel Colossus would be put into a graveyard from anywhere, reveal Blightsteel Colossus and shuffle it into its owner’s library instead.', 'Mirrodin Besieged', '674340dc93119.jpg', 40);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (52, 'Sword of Feast and Famine', 'Equipped creature gets +2/+2 and has protection from black and from green...
Whenever equipped creature deals combat damage to a player, that player discards a card and you untap all lands you control.', 'Mirrodin Besieged', '674340dc93119.jpg', 55);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (53, 'Chalice of the Void', 'Chalice of the Void enters the battlefield with X charge counters on it...
Whenever a player casts a spell with mana value equal to the number of charge counters on Chalice of the Void, counter that spell.', 'Darksteel', '674340dc93119.jpg', 60);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (54, 'Eldrazi Conscription', 'Enchant creature
Enchanted creature gets +10/+10 and has trample and annihilator 2.', 'Rise of the Eldrazi', '674340dc93119.jpg', 20);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (55, 'Craterhoof Behemoth', 'Haste
When Craterhoof Behemoth enters the battlefield, creatures you control gain trample and get +X/+X until end of turn, where X is the number of creatures you control.', 'Avacyn Restored', '674340dc93119.jpg', 35);
INSERT INTO cardkingdom.cards (id, name, text, cardSet, artwork, price) VALUES (56, 'Goblin Horde', 'Cannot be blocked', 'Dominaria', '67434221c639e.jpg', 10);
