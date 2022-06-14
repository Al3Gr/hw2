CREATE TABLE users (
    name varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    email varchar(255) NOT NULL UNIQUE,
    username varchar(255) PRIMARY KEY,
    password varchar(16) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT 0,
    updated_at TIMESTAMP NOT NULL DEFAULT 0
) DEFAULT CHARSET UTF8;


CREATE TABLE posts (
    id int PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content VARCHAR(300) NOT NULL,
    username VARCHAR(255) NOT NULL,
    num_likes int,
    num_comments int,
    created_at TIMESTAMP NOT NULL DEFAULT 0,
    updated_at TIMESTAMP NOT NULL DEFAULT 0,

    FOREIGN KEY (username) REFERENCES users(username)
    ON DELETE CASCADE
) DEFAULT CHARSET UTF8;


CREATE TABLE comments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(255) NOT NULL,
    post_id int NOT NULL,
    comment VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT 0,
    updated_at TIMESTAMP NOT NULL DEFAULT 0,

    FOREIGN KEY(post_id) REFERENCES posts(id)
    ON DELETE CASCADE

) DEFAULT CHARSET UTF8;

CREATE TABLE likes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user VARCHAR(255) NOT NULL,
    post_id int NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT 0,
    updated_at TIMESTAMP NOT NULL DEFAULT 0,


    FOREIGN KEY(user) REFERENCES users(username)
    ON DELETE CASCADE,
    FOREIGN KEY(post_id) REFERENCES posts(id)
    ON DELETE CASCADE
) DEFAULT CHARSET UTF8;


CREATE TRIGGER INCREASE_NUM_LIKES
AFTER INSERT ON likes
FOR EACH ROW 
    UPDATE posts
    SET num_likes = num_likes + 1
    WHERE id = new.post_id;

CREATE TRIGGER DECREASE_NUM_LIKES
AFTER DELETE ON likes
FOR EACH ROW 
    UPDATE posts
    SET num_likes = num_likes - 1
    WHERE id = old.post_id;


CREATE TRIGGER INCREASE_NUM_COMMENTS
AFTER INSERT ON comments
FOR EACH ROW 
    UPDATE posts
    SET num_comments = num_comments + 1
    WHERE id = new.post_id;