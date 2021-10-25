DROP TABLE IF EXISTS fill;
CREATE TABLE fill(
	id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	surname varchar(12) NOT NULL,	
	first_name varchar(12) NOT NULL,
	contact int(10) NOT NULL,
	s_date DATE NOT NULL,
	age int(3),
	favourite varchar(255),
	eat_out int(1),
	watch_movies int(1),
	watch_tv int(1),
	listen_radio int(1)
);