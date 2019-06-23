

CREATE TABLE `messages` (
	`id`	integer,
	`user_name`	text NOT NULL,
	`user_email`	text,
	`user_phone`	text,
	`message_body`	text NOT NULL,
	`archived`	boolean DEFAULT 0,
	`created_at`	datetime NOT NULL,
	PRIMARY KEY(`id`)
);