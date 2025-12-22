-- ============================================
-- EmpowerEdge Database Setup
-- ============================================

-- Create database
DROP DATABASE IF EXISTS empoweredge;
CREATE DATABASE empoweredge;
USE empoweredge;

-- Roles table
CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Services table
CREATE TABLE services (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    icon VARCHAR(100),
    is_active BOOLEAN DEFAULT TRUE,
    display_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Users table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    role_id INT NOT NULL,
    profile_picture VARCHAR(255),
    is_active BOOLEAN DEFAULT TRUE,
    last_login TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE RESTRICT
);

-- Program table
CREATE TABLE program (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    service_id INT,
    duration_days INT,
    difficulty_level ENUM('beginner', 'intermediate', 'advanced') DEFAULT 'beginner',
    instructor_id INT,
    price DECIMAL(10, 2) DEFAULT 0.00,
    discount_price DECIMAL(10, 2),
    is_featured BOOLEAN DEFAULT FALSE,
    is_active BOOLEAN DEFAULT TRUE,
    start_date DATE,
    end_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE SET NULL,
    FOREIGN KEY (instructor_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Enrollment table (optional)
CREATE TABLE user_program_enrollment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    program_id INT NOT NULL,
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    completion_status ENUM('not_started', 'in_progress', 'completed', 'dropped') DEFAULT 'not_started',
    completion_date TIMESTAMP NULL,
    certificate_issued BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (program_id) REFERENCES program(id) ON DELETE CASCADE,
    UNIQUE KEY unique_enrollment (user_id, program_id)
);

-- ============================================
-- Insert Sample Data
-- ============================================

-- Insert roles
INSERT INTO roles (name, description) VALUES
('admin', 'System administrator with full access'),
('instructor', 'Can create and manage programs'),
('student', 'Regular user who can enroll in programs'),
('guest', 'Limited access user');

-- Insert services
INSERT INTO services (name, description, icon, display_order) VALUES
('Web Development', 'Full stack web development courses', 'code', 1),
('Data Science', 'Data analysis and machine learning', 'analytics', 2),
('Digital Marketing', 'Online marketing strategies', 'trending_up', 3),
('Graphic Design', 'UI/UX and graphic design', 'palette', 4),
('Business Management', 'Entrepreneurship and management', 'business', 5);

-- Insert admin user (password: admin123 - CHANGE THIS IN PRODUCTION)
INSERT INTO users (username, email, password_hash, first_name, last_name, role_id) VALUES
('admin', 'admin@empoweredge.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
 'System', 'Administrator', 1),
('instructor1', 'instructor@empoweredge.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
 'John', 'Doe', 2),
('student1', 'student@empoweredge.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
 'Jane', 'Smith', 3);

-- Insert sample programs
INSERT INTO program (title, description, service_id, duration_days, difficulty_level, instructor_id, price) VALUES
('Full Stack Web Development', 'Learn HTML, CSS, JavaScript, PHP and MySQL', 1, 90, 'beginner', 2, 299.99),
('Data Science Fundamentals', 'Introduction to Python, Pandas and ML', 2, 60, 'intermediate', 2, 399.99),
('Social Media Marketing', 'Master Facebook, Instagram and Twitter marketing', 3, 30, 'beginner', 2, 199.99);

-- ============================================
-- Display confirmation
-- ============================================
SELECT 'Database created successfully!' AS message;
SELECT COUNT(*) as total_tables FROM information_schema.tables 
WHERE table_schema = 'empoweredge';