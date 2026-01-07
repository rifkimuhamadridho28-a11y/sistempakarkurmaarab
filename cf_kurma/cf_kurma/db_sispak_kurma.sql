-- Tabel Pengguna (untuk Admin dan mungkin User)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user'
);

-- Tabel Gejala
CREATE TABLE gejala (
    kode_gejala VARCHAR(5) PRIMARY KEY,
    nama_gejala VARCHAR(255) NOT NULL
);

-- Tabel Diagnosa (Penyakit)
CREATE TABLE diagnosa (
    kode_diagnosa VARCHAR(5) PRIMARY KEY,
    nama_diagnosa VARCHAR(255) NOT NULL,
    deskripsi TEXT, -- Deskripsi atau Saran Penanganan
    gambar VARCHAR(255) -- Jika ada gambar terkait penyakit
);

-- Tabel Basis Pengetahuan (Relasi Gejala-Penyakit dengan CF)
CREATE TABLE basis_pengetahuan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_diagnosa VARCHAR(5) NOT NULL,
    kode_gejala VARCHAR(5) NOT NULL,
    mb FLOAT NOT NULL, -- Measure of Belief
    md FLOAT NOT NULL, -- Measure of Disbelief
    FOREIGN KEY (kode_diagnosa) REFERENCES diagnosa(kode_diagnosa) ON DELETE CASCADE,
    FOREIGN KEY (kode_gejala) REFERENCES gejala(kode_gejala) ON DELETE CASCADE
);

-- Contoh Data Awal (Opsional)
INSERT INTO users (username, password, role) VALUES ('admin', MD5('admin'), 'admin');
INSERT INTO gejala (kode_gejala, nama_gejala) VALUES
('G01', 'Daun tengah berukuran kecil'),
('G02', 'Helai Daun Sobek'),
('G03', 'Daun tidak berkembang'),
('G04', 'Daun kerdil'),
('G05', 'Daun hijau pucat'),
('G06', 'Daun menguning'),
('G07', 'Batang berlendir pada batang'),
('G08', 'Pelepah patah dan menggantung'),
('G09', 'Busuk pangkal batang'),
('G10', 'Bercak berwarna coklat');


INSERT INTO diagnosa (kode_diagnosa, nama_diagnosa, deskripsi) VALUES
('K01', 'Tajuk Daun', 'Deskripsi dan penanganan Tajuk Daun...'),
('K02', 'Busuk Kuncup', 'Deskripsi dan penanganan Busuk Kuncup...'),
('K03', 'Antracnose', 'Deskripsi dan penanganan Antracnose...');


INSERT INTO basis_pengetahuan (kode_diagnosa, kode_gejala, mb, md) VALUES
('K01', 'G01', 0.81, 0.3),
('K01', 'G02', 0.8, 0.1),
('K01', 'G03', 0.67, 0.3),
('K01', 'G04', 0.8, 0.2),
('K02', 'G05', 0.9, 0.2),
('K02', 'G06', 0.8, 0.1),
('K02', 'G07', 0.7, 0.3),
('K03', 'G08', 0.85, 0.1),
('K03', 'G09', 0.75, 0.2),
('K03', 'G10', 0.9, 0.1);