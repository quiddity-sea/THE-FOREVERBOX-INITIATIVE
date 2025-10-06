-- ForeverBox Initiative Database Schema
-- MariaDB Schema for content management

CREATE DATABASE IF NOT EXISTS foreverbox_initiative CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE foreverbox_initiative;

-- Pages table for editorial sections
CREATE TABLE IF NOT EXISTS pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    slug VARCHAR(50) UNIQUE NOT NULL,
    title VARCHAR(255) NOT NULL,
    subtitle TEXT,
    color_primary VARCHAR(7) NOT NULL,
    color_secondary VARCHAR(7),
    content LONGTEXT,
    hero_image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    is_active BOOLEAN DEFAULT TRUE,
    display_order INT DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default pages with unique color identities
INSERT INTO pages (slug, title, subtitle, color_primary, color_secondary, display_order) VALUES
('origin', 'Origin', 'From Snowdonia to a Global Vision', '#1a237e', '#3949ab', 1),
('science', 'Science', 'Quantum Biology Meets Innovation', '#004d40', '#00897b', 2),
('case-studies', 'Case Studies', 'Real Impact, Real Results', '#b71c1c', '#e53935', 3),
('forever-fit', 'Forever Fit', 'Transforming Human Potential', '#f57f17', '#fbc02d', 4),
('investment', 'Investment', 'Join the Future of Digital Health', '#4a148c', '#7b1fa2', 5),
('vision', 'Vision', 'The Path Forward', '#01579b', '#0288d1', 6);

-- Content sections for each page
CREATE TABLE IF NOT EXISTS content_sections (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_id INT NOT NULL,
    heading VARCHAR(255),
    body TEXT,
    image_url VARCHAR(255),
    section_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (page_id) REFERENCES pages(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Settings table
CREATE TABLE IF NOT EXISTS settings (
    setting_key VARCHAR(100) PRIMARY KEY,
    setting_value TEXT,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO settings (setting_key, setting_value) VALUES
('site_name', 'The ForeverBox Initiative'),
('site_tagline', 'A Neurodivergent-First Biotechnical Odyssey');
