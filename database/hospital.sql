-- ==========================================
-- Government Hospital Information System
-- Database : hospital_db
-- ==========================================

CREATE DATABASE IF NOT EXISTS hospital_db;

USE hospital_db;

-- ==========================================
-- ADMIN TABLE
-- ==========================================

CREATE TABLE admin(

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50) NOT NULL,

password VARCHAR(100) NOT NULL

);

INSERT INTO admin(username,password)

VALUES

('admin','admin123');

-- ==========================================
-- DOCTORS TABLE
-- ==========================================

CREATE TABLE doctors(

doctor_id INT AUTO_INCREMENT PRIMARY KEY,

doctor_name VARCHAR(100),

department VARCHAR(100),

experience VARCHAR(50),

image VARCHAR(100)

);

INSERT INTO doctors
(doctor_name,department,experience,image)

VALUES

('Dr. Balakrishna','General Medicine','15 Years','doctor1.jpg'),

('Dr. Swarajalaxmi','Gynaecology','12 Years','doctor2.jpg'),

('Dr. Aiswaraya Rajalaxmi','General Surgery','10 Years','doctor3.jpg'),

('Dr. Jhansi','Dental','8 Years','doctor4.jpg'),

('Dr. Rameshnaidu','Pediatrics','14 Years','doctor5.jpg'),

('Dr. Sharath Chandra','Anesthesia','11 Years','doctor6.jpg'),

('Dr. Niharika Sri','NCD Clinic','9 Years','doctor7.jpg');

-- ==========================================
-- DEPARTMENTS TABLE
-- ==========================================

CREATE TABLE departments(

department_id INT AUTO_INCREMENT PRIMARY KEY,

department_name VARCHAR(100),

doctor_name VARCHAR(100),

description TEXT,

image VARCHAR(100)

);

INSERT INTO departments
(department_name,doctor_name,description,image)

VALUES

('General Medicine','Dr. Balakrishna','Treatment for common diseases.','general-medicine.jpg'),

('Gynaecology','Dr. Swarajalaxmi','Women Healthcare Services.','gynecology.jpg'),

('General Surgery','Dr. Aiswaraya Rajalaxmi','Surgical Procedures.','surgery.jpg'),

('Dental','Dr. Jhansi','Dental Care and Treatment.','dental.jpg'),

('Pediatrics','Dr. Rameshnaidu','Child Healthcare.','pediatrics.jpg'),

('Anesthesia','Dr. Sharath Chandra','Anesthesia Services.','anesthesia.jpg'),

('NCD Clinic','Dr. Niharika Sri','Non Communicable Disease Clinic.','ncd.jpg');

-- ==========================================
-- OP TIMINGS TABLE
-- ==========================================

CREATE TABLE timings(

timing_id INT AUTO_INCREMENT PRIMARY KEY,

department VARCHAR(100),

doctor VARCHAR(100),

days VARCHAR(100),

timing VARCHAR(100)

);

INSERT INTO timings
(department,doctor,days,timing)

VALUES

('General Medicine','Dr. Balakrishna','Monday-Saturday','09:00 AM - 05:00 PM'),

('Gynaecology','Dr. Swarajalaxmi','Monday-Saturday','10:00 AM - 02:00 PM'),

('General Surgery','Dr. Aiswaraya Rajalaxmi','Monday-Saturday','09:00 AM - 01:00 PM'),

('Dental','Dr. Jhansi','Monday-Saturday','10:00 AM - 04:00 PM'),

('Pediatrics','Dr. Rameshnaidu','Monday-Saturday','09:00 AM - 03:00 PM'),

('Anesthesia','Dr. Sharath Chandra','Monday-Saturday','08:00 AM - 04:00 PM'),

('NCD Clinic','Dr. Niharika Sri','Monday-Friday','09:00 AM - 01:00 PM');

-- ==========================================
-- APPOINTMENTS TABLE
-- ==========================================

CREATE TABLE appointments(

appointment_id INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(100),

age INT,

gender VARCHAR(20),

mobile VARCHAR(20),

address TEXT,

department VARCHAR(100),

doctor VARCHAR(100),

appointment_date DATE,

appointment_time TIME

);

-- ==========================================
-- CONTACT TABLE
-- ==========================================

CREATE TABLE contact_messages(

message_id INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(100),

email VARCHAR(100),

mobile VARCHAR(20),

message TEXT,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);