CREATE DATABASE IF NOT EXISTS Forum; USE Forum;

CREATE TABLE users (
user_id 	INT(8) NOT NULL AUTO_INCREMENT,
user_name   VARCHAR(30) NOT NULL,
user_pass   VARCHAR(255) NOT NULL,
user_email  VARCHAR(255) NOT NULL,
user_date   DATETIME NOT NULL,
user_level  INT(8) NOT NULL,
UNIQUE INDEX user_name_unique (user_name),
PRIMARY KEY (user_id)
);

CREATE TABLE categories (
cat_id      	INT(8) NOT NULL AUTO_INCREMENT,
cat_name    	VARCHAR(177) NOT NULL,
cat_description 	VARCHAR(177) NOT NULL,
UNIQUE INDEX cat_name_unique (cat_name),
PRIMARY KEY (cat_id)
);

CREATE TABLE topics (
topic_id    	INT(8) NOT NULL AUTO_INCREMENT,
topic_subject   	VARCHAR(255) NOT NULL,
topic_date  	DATETIME NOT NULL,
topic_cat   	INT(8) NOT NULL,
topic_by    	INT(8) NOT NULL,
PRIMARY KEY (topic_id)
);

CREATE TABLE posts (
post_id     	INT(8) NOT NULL AUTO_INCREMENT,
post_content    	TEXT NOT NULL,
post_date   	DATETIME NOT NULL,
post_topic  	INT(8) NOT NULL,
post_by 	INT(8) NOT NULL,
PRIMARY KEY (post_id)
);

ALTER TABLE topics ADD FOREIGN KEY(topic_cat) REFERENCES categories(cat_id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE topics ADD FOREIGN KEY(topic_by) REFERENCES users(user_id) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE posts ADD FOREIGN KEY(post_topic) REFERENCES topics(topic_id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE posts ADD FOREIGN KEY(post_by) REFERENCES users(user_id) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE posts ADD FOREIGN KEY(post_by) REFERENCES users(user_id) ON DELETE RESTRICT ON UPDATE CASCADE;

INSERT INTO categories
VALUES (1, "Tech", "For all the GEEKS");
INSERT INTO categories
VALUES (2, "News", "News all over the world");
INSERT INTO categories
VALUES (3, "Memes", "Sweet memes are made of these who am I to disagree");
INSERT INTO categories
VALUES (4, "Games", "Gaming fanatics");
INSERT INTO categories
VALUES (5, "Music", "Share your mixtapes");
INSERT INTO categories
VALUES (6, "Movies", "Spoilers!");

INSERT INTO users
VALUES(1, "Vendetta", "PAD9", "vendetta@pad.nl", "2020-03-22 21:05:33.000", 1);

INSERT INTO topics
VALUES (1, "New IPhone 12 no charging port", "2020-03-22 21:05:33.000", 1, 1);
INSERT INTO topics
VALUES (2, "A foldable phone?", "2020-03-22 21:05:33.000", 1, 1);
INSERT INTO topics
VALUES (3, "Apple vs Samsung", "2020-03-22 21:05:33.000", 1, 1);
INSERT INTO topics
VALUES (4, "My phone won't turn on help.", "2020-03-22 21:05:33.000", 1, 1);
INSERT INTO topics
VALUES (5, "Battery Replacement for Huawei", "2020-03-22 21:05:33.000", 1, 1);

INSERT INTO topics
VALUES (6, "Corona is affecting the economy", "2020-03-22 21:05:33.000", 2, 1);
INSERT INTO topics
VALUES (7, "5G towers cause corona and death", "2020-03-22 21:05:33.000", 2, 1);
INSERT INTO topics
VALUES (8, "CNN is fake news", "2020-03-22 21:05:33.000", 2, 1);
INSERT INTO topics
VALUES (9, "Donald trump says he is treated worse than Lincoln", "2020-03-22 21:05:33.000", 2, 1);
INSERT INTO topics
VALUES (10, "Kim Jong-un dead?", "2020-03-22 21:05:33.000", 2, 1);

INSERT INTO topics
VALUES (11, "Ricardo Milos now", "2020-03-22 21:05:33.000", 3, 1);
INSERT INTO topics
VALUES (12, "Green Gang vs Purple Gang", "2020-03-22 21:05:33.000", 3, 1);
INSERT INTO topics
VALUES (13, "Dankest subreddit?", "2020-03-22 21:05:33.000", 3, 1);
INSERT INTO topics
VALUES (14, "I'm going to hell for this", "2020-03-22 21:05:33.000", 3, 1);
INSERT INTO topics
VALUES (15, "Twitch fails", "2020-03-22 21:05:33.000", 3, 1);

INSERT INTO topics
VALUES (16, "Rainbow Six Siege new event", "2020-03-22 21:05:33.000", 4, 1);
INSERT INTO topics
VALUES (17, "Rainbow six siege is unplayable", "2020-03-22 21:05:33.000", 4, 1);
INSERT INTO topics
VALUES (18, "GTA Online new events", "2020-03-22 21:05:33.000", 4, 1);
INSERT INTO topics
VALUES (19, "Valorant the new hype?", "2020-03-22 21:05:33.000", 4, 1);
INSERT INTO topics
VALUES (20, "Nier;Renoisaince revealed", "2020-03-22 21:05:33.000", 4, 1);

INSERT INTO topics
VALUES (21, "Cardi B can't make songs due to Corona", "2020-03-22 21:05:33.000", 5, 1);
INSERT INTO topics
VALUES (22, "Salim Shady - Habibi", "2020-03-22 21:05:33.000", 5, 1);
INSERT INTO topics
VALUES (23, "Is liking darktrap bad?", "2020-03-22 21:05:33.000", 5, 1);
INSERT INTO topics
VALUES (24, "Videogame OST", "2020-03-22 21:05:33.000", 5, 1);
INSERT INTO topics
VALUES (25, "Lady Gaga is actually a man", "2020-03-22 21:05:33.000", 5, 1);

INSERT INTO topics
VALUES (26, "#JusticeforJohhny", "2020-03-22 21:05:33.000", 6, 1);
INSERT INTO topics
VALUES (27, "Mayans are dyslexic they meant 2021 is the end not 2012", "2020-03-22 21:05:33.000", 6, 1);
INSERT INTO topics
VALUES (28, "Sadece Sen", "2020-03-22 21:05:33.000", 6, 1);
INSERT INTO topics
VALUES (29, "Doom is getting a movie", "2020-03-22 21:05:33.000", 6, 1);
INSERT INTO topics
VALUES (30, "Worst movies of all time", "2020-03-22 21:05:33.000", 6, 1);


CREATE USER 'Aiden'@'localhost' IDENTIFIED BY 'PAD';

GRANT ALL PRIVILEGES ON * . * TO 'Aiden'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;

ALTER USER Aiden IDENTIFIED WITH mysql_native_password BY 'PAD';

GRANT ALL PRIVILEGES ON *.* TO 'Aiden'@'%' WITH GRANT OPTION;

FLUSH PRIVILEGES;

/*2nd DATABASE*/
CREATE DATABASE DATABASEPAD; USE DATABASEPAD;

CREATE TABLE Flagphp(
flag VARCHAR(100) PRIMARY KEY);

CREATE TABLE users (
user_id 	INT(8) NOT NULL AUTO_INCREMENT,
user_name   VARCHAR(30) NOT NULL,
user_pass   VARCHAR(255) NOT NULL,
user_email  VARCHAR(255) NOT NULL,
user_date   DATETIME NOT NULL,
user_level  INT(8) NOT NULL,
UNIQUE INDEX user_name_unique (user_name),
PRIMARY KEY (user_id)
);

CREATE TABLE categories (
cat_id      	INT(8) NOT NULL AUTO_INCREMENT,
cat_name    	VARCHAR(177) NOT NULL,
cat_description 	VARCHAR(177) NOT NULL,
UNIQUE INDEX cat_name_unique (cat_name),
PRIMARY KEY (cat_id)
);

CREATE TABLE topics (
topic_id    	INT(8) NOT NULL AUTO_INCREMENT,
topic_name   	VARCHAR(255) NOT NULL,
topic_discription  	VARCHAR(255) NOT NULL,
PRIMARY KEY (topic_id)
);

CREATE TABLE posts (
post_id     	INT(8) NOT NULL AUTO_INCREMENT,
post_content    	TEXT NOT NULL,
post_date   	DATETIME NOT NULL,
post_topic  	INT(8) NOT NULL,
post_by 	INT(8) NOT NULL,
PRIMARY KEY (post_id)
);

INSERT INTO Flagphp VALUES("RmxhZ2dlTnVtbWVyRHJlaQ==");

CREATE USER 'READDATABASE'@'localhost' IDENTIFIED BY 'MAYBELOOKHERE';

CREATE USER 'READDATABASE'@'%' IDENTIFIED BY 'MAYBELOOKHERE';

GRANT SELECT ON `DATABASEPAD`.* TO 'READDATABASE'@'%';

FLUSH PRIVILEGES;

ALTER USER READDATABASE IDENTIFIED WITH mysql_native_password BY 'MAYBELOOKHERE';

GRANT SELECT ON `DATABASEPAD`.* TO 'READDATABASE'@'localhost';

FLUSH PRIVILEGES;
