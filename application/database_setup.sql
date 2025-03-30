SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `authors`;
DROP TABLE IF EXISTS `blogs`;
DROP TABLE IF EXISTS `doctors`;
DROP TABLE IF EXISTS `hospitals`;
DROP TABLE IF EXISTS `news`;
DROP TABLE IF EXISTS `testimonials`;
SET FOREIGN_KEY_CHECKS = 1;

-- Authors table
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE latin1_swedish_ci NOT NULL,
  `about` text COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_swedish_ci NOT NULL,
  `mobile` varchar(20) COLLATE latin1_swedish_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(100) COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`),
  INDEX (`email`),
  INDEX (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `authors` (`name`, `about`, `email`, `mobile`, `image`) VALUES
('John Doe', 'Best selling author', 'john@example.com', '1234567890', 'john.jpg'),
('Jane Smith', 'Award winning writer', 'jane@example.com', '9876543210', 'jane.jpg');
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(150) COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(100) COLLATE latin1_swedish_ci NOT NULL,
  `content` text COLLATE latin1_swedish_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(200) COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `author_id` (`author_id`),
  CONSTRAINT `fk_blog_author` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Inserting 2 sample blog posts
INSERT INTO `blogs` (`topic`, `image`, `content`, `author_id`, `title`) VALUES
('Web Development Trends', 'webdev.jpg', 'The latest trends in web development include...', 1, 'Frontend Technologies 2023'),
('Healthy Living', 'health.jpg', 'Maintaining a healthy lifestyle requires...', 2, 'Nutrition and Wellness Guide');

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_swedish_ci NOT NULL,
  `qualifications` longtext COLLATE utf8mb4_bin NOT NULL DEFAULT (json_array()),
  `surgeries` longtext COLLATE utf8mb4_bin NOT NULL DEFAULT (json_array()),
  `designation` varchar(50) COLLATE latin1_swedish_ci NOT NULL,
  `ratings` int(11) NOT NULL,
  `working_hospital_id` int(11) NOT NULL,
  `about` text COLLATE latin1_swedish_ci NOT NULL,
  `fees` varchar(11) COLLATE latin1_swedish_ci NOT NULL,
  `medical_problems` longtext COLLATE utf8mb4_bin NOT NULL DEFAULT (json_array()),
  `medical_procedures` longtext COLLATE utf8mb4_bin NOT NULL DEFAULT (json_array()),
  `education_and_training` longtext COLLATE utf8mb4_bin NOT NULL DEFAULT (json_array()),
  `honours_and_awards` longtext COLLATE utf8mb4_bin NOT NULL DEFAULT (json_array()),
  `work_experience` longtext COLLATE utf8mb4_bin NOT NULL DEFAULT (json_array()),
  `related_video` varchar(50) COLLATE latin1_swedish_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(100) COLLATE latin1_swedish_ci NOT NULL,
  `profile` varchar(50) COLLATE latin1_swedish_ci NOT NULL,
  `year_of_experience` int(11) NOT NULL,
  `no_of_ratings` int(11) NOT NULL,
  `faq` longtext COLLATE utf8mb4_bin NOT NULL,
  `schedule` longtext COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `working_hospital_id` (`working_hospital_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `doctors` (
  `name`, `qualifications`, `surgeries`, `designation`, `ratings`, 
  `working_hospital_id`, `about`, `fees`, `medical_problems`, 
  `medical_procedures`, `education_and_training`, `honours_and_awards`, 
  `work_experience`, `related_video`, `image`, `profile`, 
  `year_of_experience`, `no_of_ratings`, `faq`, `schedule`
) VALUES
(
  'Dr. Sarah Johnson',
  '["MD", "Board Certified in Internal Medicine", "Fellowship in Cardiology"]',
  '["Angioplasty", "Bypass Surgery", "Valve Replacement"]',
  'Senior Cardiologist',
  4,
  1,
  'Specializes in interventional cardiology with 15 years of experience.',
  '1500',
  '{"conditions": ["Hypertension", "Coronary Artery Disease", "Arrhythmia"]}',
  '{"procedures": ["Echocardiogram", "Stress Test", "Cardiac Catheterization"]}',
  '["Harvard Medical School", "Johns Hopkins Residency"]',
  '["Best Cardiologist Award 2020", "Excellence in Patient Care 2019"]',
  '["Massachusetts General Hospital (2010-2015)", "Mayo Clinic (2015-2020)"]',
  'cardio-care.mp4',
  'sarah_johnson.jpg',
  'cardiology',
  15,
  142,
  '{"q1": "What is your approach to treatment?", "a1": "Personalized care based on latest research"}',
  '{"monday": "9am-5pm", "tuesday": "9am-5pm", "wednesday": "Off"}'
),
(
  'Dr. Michael Chen',
  '["MD", "PhD in Neurology", "Board Certified Neurologist"]',
  '["Deep Brain Stimulation", "Craniotomy", "Spinal Fusion"]',
  'Chief of Neurology',
  5,
  2,
  'Expert in movement disorders and neurodegenerative diseases.',
  '2000',
  '{"conditions": ["Parkinson\'s", "Alzheimer\'s", "Multiple Sclerosis"]}',
  '{"procedures": ["EMG", "Nerve Conduction Study", "Botulinum Toxin Therapy"]}',
  '["Stanford Medical School", "UCLA Neurology Residency"]',
  '["Neurology Innovator Award 2021", "Research Excellence Prize 2018"]',
  '["Cleveland Clinic (2012-2017)", "NYU Langone (2017-present)"]',
  'neuro-care.mp4',
  'michael_chen.jpg',
  'neurology',
  12,
  98,
  '{"q1": "Do you offer second opinions?", "a1": "Yes, we provide comprehensive second opinion services"}',
  '{"monday": "10am-4pm", "tuesday": "10am-4pm", "friday": "10am-2pm"}'
);

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE latin1_swedish_ci NOT NULL,
  `country` varchar(50) COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(50) COLLATE latin1_swedish_ci NOT NULL,
  `department` longtext COLLATE utf8mb4_bin NOT NULL,
  `description` longtext COLLATE utf8mb4_bin NOT NULL,
  `established_in` varchar(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `speciality` longtext COLLATE utf8mb4_bin DEFAULT NULL,
  `images` longtext COLLATE utf8mb4_bin NOT NULL,
  `accreditations` longtext COLLATE utf8mb4_bin DEFAULT NULL,
  `number_of_beds` varchar(20) COLLATE latin1_swedish_ci NOT NULL,
  `facilities` longtext COLLATE utf8mb4_bin NOT NULL,
  `doctors_list` longtext COLLATE utf8mb4_bin NOT NULL,
  `address` text COLLATE latin1_swedish_ci NOT NULL,
  `department_details` longtext COLLATE utf8mb4_bin DEFAULT NULL,
  `infrastructure` longtext COLLATE utf8mb4_bin DEFAULT NULL,
  `team_and_specialities` longtext COLLATE utf8mb4_bin DEFAULT NULL,
  `location` longtext COLLATE utf8mb4_bin DEFAULT NULL,
  `hospital_rating` varchar(20) COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `hospitals` (
  `name`, `country`, `city`, `department`, `description`, 
  `established_in`, `speciality`, `images`, `accreditations`,
  `number_of_beds`, `facilities`, `doctors_list`, `address`,
  `department_details`, `infrastructure`, `team_and_specialities`,
  `location`, `hospital_rating`
) VALUES
(
  'City General Hospital',
  'United States',
  'New York',
  '["Cardiology", "Neurology", "Pediatrics"]',
  'A premier multi-specialty hospital providing world-class healthcare services.',
  '1985',
  '["Cardiac Care", "Neurosurgery"]',
  '["hospital1.jpg", "hospital2.jpg"]',
  '["JCI Accredited", "NABH Certified"]',
  '500',
  '["ICU", "NICU", "24/7 Emergency"]',
  '[1, 2, 3]', -- Assuming these are doctor IDs
  '123 Medical Center Drive, New York, NY 10001',
  '{"Cardiology": {"head": "Dr. Smith", "beds": 50}, "Neurology": {"head": "Dr. Johnson", "beds": 30}}',
  '{"floors": 10, "operation_theaters": 15}',
  '{"cardiology": ["Dr. Smith", "Dr. Lee"], "neurology": ["Dr. Johnson"]}',
  '{"latitude": 40.7128, "longitude": -74.0060}',
  '4.5'
),
(
  'University Medical Center',
  'United Kingdom',
  'London',
  '["Oncology", "Orthopedics", "General Surgery"]',
  'Leading research hospital with advanced treatment facilities.',
  '1972',
  '["Cancer Treatment", "Joint Replacement"]',
  '["umc1.jpg", "umc2.jpg"]',
  '["NHS Approved", "ISO Certified"]',
  '750',
  '["Cancer Center", "Rehabilitation", "Pharmacy"]',
  '[4, 5, 6]', -- Assuming these are doctor IDs
  '456 Health Street, London WC1 6BT',
  '{"Oncology": {"head": "Dr. Brown", "beds": 80}, "Orthopedics": {"head": "Dr. Wilson", "beds": 45}}',
  '{"floors": 12, "operation_theaters": 20}',
  '{"oncology": ["Dr. Brown", "Dr. Taylor"], "orthopedics": ["Dr. Wilson"]}',
  '{"latitude": 51.5074, "longitude": -0.1278}',
  '4.8'
);

CREATE TABLE news (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    topic VARCHAR(100) NOT NULL,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(100) NOT NULL,
    created_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    author_id INT(11) NOT NULL,
    INDEX (author_id)
);

INSERT INTO news (topic, title, content, image, author_id) 
VALUES 
('Medical Research', 'New Breakthrough in Cancer Treatment', 'Scientists have discovered a new treatment that significantly improves recovery rates.', 'cancer_treatment.jpg', 1),
('Hospital Expansion', 'City Hospital Opens New Wing', 'The newly opened wing will accommodate an additional 200 patients.', 'hospital_expansion.jpg', 2);

CREATE TABLE testimonials (
    id INT(11) NOT NULL AUTO_INCREMENT,
    topic VARCHAR(100) NOT NULL,
    patient_name VARCHAR(50) NOT NULL,
    age INT(11) NOT NULL,
    gender VARCHAR(20) NOT NULL,
    country_of_origin VARCHAR(20) NOT NULL,
    doctor_name VARCHAR(50) NOT NULL,
    hospital_name VARCHAR(100) NOT NULL,
    treatment VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    created_on TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    author_id INT(11) NOT NULL,
    description VARCHAR(100) NULL,
    image VARCHAR(100) NULL,
    PRIMARY KEY (id),
    INDEX (author_id)
) CHARACTER SET latin1 COLLATE latin1_swedish_ci;

INSERT INTO testimonials 
(topic, patient_name, age, gender, country_of_origin, doctor_name, hospital_name, treatment, content, author_id, description, image) 
VALUES
('Successful Heart Surgery', 'John Smith', 58, 'Male', 'USA', 'Dr. Sarah Johnson', 'Mayo Clinic', 'Coronary Artery Bypass', 'I had an amazing experience at Mayo Clinic. Dr. Johnson and her team were professional and caring throughout my treatment.', 101, 'Heart surgery testimonial', 'heart_surgery.jpg'),

('Knee Replacement Recovery', 'Maria Garcia', 65, 'Female', 'Spain', 'Dr. Robert Chen', 'Cleveland Clinic', 'Total Knee Replacement', 'After years of pain, my knee replacement at Cleveland Clinic gave me my mobility back. Dr. Chen is truly skilled.', 102, 'Orthopedic success story', 'knee_replacement.jpg');

