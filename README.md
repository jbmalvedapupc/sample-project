## Instructions

This is a sample project to show how to use relationships on multiple tables.

1. On the .env file change the following to match you username/password:  
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=sample_db  
DB_USERNAME=root  
DB_PASSWORD=  

2. After saving your .env file run:  
`php artisan config:clear`  

3. I have included sample migrations file to run it and create tables on the sample_db:  
`php artisan migrate:fresh`

4. Run the following scripts:   
CREATE DATABASE `sample_db`;  

INSERT INTO sample_db.students (full_name,created_at,updated_at) VALUES
	 ('Juan Tamad',NULL,NULL),  
	 ('Mina Magic',NULL,NULL);    
INSERT INTO sample_db.teachers (full_name,created_at,updated_at) VALUES
	 ('Mr. Jones',NULL,NULL),
	 ('Mrs. Smith',NULL,NULL);  
INSERT INTO sample_db.files (file_name,student_id,teacher_id,created_at,updated_at) VALUES
	 ('File_name01',1,1,NULL,NULL),
	 ('File_name02',1,2,NULL,NULL);  

5. Run `php artisan serv`
