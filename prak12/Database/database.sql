CREATE DATABASE IF NOT EXISTS db_akademik;
USE db_akademik;

-- Tabel Dosen
CREATE TABLE IF NOT EXISTS t_dosen (
    idDosen INT(11) NOT NULL AUTO_INCREMENT,
    namaDosen VARCHAR(50) NOT NULL,
    noHP VARCHAR(25) NOT NULL,
    PRIMARY KEY (idDosen)
);

INSERT INTO t_dosen (namaDosen, noHP) VALUES
('Dr. Angger Binoko Paksi, M.Kom', '081234567890'),
('Prof. Tri Septianto, S.Kom., M.Kom', '081345678901'),
('Ir. Hery Maryanto, M.T.', '081456789012'),
('Dr. Rahmania Kumalasari, S.Kom., M.Kom', '081567890123');

-- Tabel Mahasiswa
CREATE TABLE IF NOT EXISTS t_mahasiswa (
    npm INT(11) NOT NULL,
    namaMhs VARCHAR(50) NOT NULL,
    prodi VARCHAR(25) NOT NULL,
    alamat VARCHAR(70) NOT NULL,
    noHP VARCHAR(25) NOT NULL,
    PRIMARY KEY (npm)
);

INSERT INTO t_mahasiswa VALUES
(2023001001, 'Samuel Aldrik Sebastian', 'Teknologi Informasi', 'Jl. Merdeka No. 123, Madiun', '081234567891'),
(2023001002, 'Budi Santoso', 'Teknik Informatika', 'Jl. Diponegoro No. 45, Madiun', '081345678902'),
(2023001003, 'Queen Nesha Frywilo', 'Sistem Informasi', 'Jl. Sudirman No. 78, Madiun', '081456789013'),
(2023001004, 'Reyfio Anfawinata', 'Teknik Komputer', 'Jl. Imam Bonjol No. 90, Madiun', '081567890124');

-- Tabel Matakuliah
CREATE TABLE IF NOT EXISTS t_matakuliah (
    kodeMK INT(11) NOT NULL,
    namaMK VARCHAR(70) NOT NULL,
    sks INT(11) NOT NULL,
    jam INT(11) NOT NULL,
    PRIMARY KEY (kodeMK)
);

INSERT INTO t_matakuliah VALUES
(101, 'Pemrograman Web', 3, 6),
(102, 'Basis Data', 3, 6),
(103, 'Pemrograman Mobile', 3, 6),
(104, 'Jaringan Komputer', 2, 4),
(105, 'Rekayasa Perangkat Lunak', 3, 6);

-- Tabel Login untuk Praktikum 12
CREATE TABLE IF NOT EXISTS t_login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO t_login (username, password, email) VALUES
('admin', MD5('admin123'), 'admin@akademik.com');