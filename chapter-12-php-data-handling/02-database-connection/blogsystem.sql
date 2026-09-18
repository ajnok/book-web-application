-- ทำการลบฐานข้อมูล blog_system ถ้ามีอยู่
DROP DATABASE IF EXISTS blog_system;
-- สร้างฐานข้อมูลและใช้ฐานข้อมูลนั้น
CREATE DATABASE blog_system CHARACTER SET utf8 COLLATE utf8_general_ci;
USE blog_system;
-- ตัวอย่างการสร้างตารางผู้ใช้
CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	email VARCHAR(150) UNIQUE NOT NULL,
	age INT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- ตัวอย่างการสร้างตารางโพสต์
CREATE TABLE posts (
	id INT AUTO_INCREMENT PRIMARY KEY,
	user_id INT,
	title VARCHAR(200) NOT NULL,
	content TEXT,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (user_id) REFERENCES users(id)
);
