CREATE DATABASE phpbb;

USE phpbb;

CREATE TABLE user_progress (
   tutorial_id int NOT NULL,   
   user_id mediumint(8) unsigned NOT NULL,      
   progress int DEFAULT 0,
   PRIMARY KEY (tutorial_id, user_id),
   FOREIGN KEY (user_id) REFERENCES phpbb_users(user_id) 
   );