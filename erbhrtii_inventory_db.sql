-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Jul 2026 pada 20.57
-- Versi server: 10.11.18-MariaDB-cll-lve
-- Versi PHP: 8.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erbhrtii_inventory_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `activity` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Menghapus kategori Stabilizer', '127.0.0.1', '2026-07-04 03:55:43', '2026-07-04 03:55:43'),
(2, 1, 'Menambahkan kategori Stabilizer', '127.0.0.1', '2026-07-04 03:55:55', '2026-07-04 03:55:55'),
(3, 1, 'Mengubah satuan Rol', '127.0.0.1', '2026-07-04 04:01:29', '2026-07-04 04:01:29'),
(4, 1, 'Menambahkan barang Projector', '127.0.0.1', '2026-07-04 04:02:42', '2026-07-04 04:02:42'),
(5, 1, 'Mengubah transaksi barang masuk: Printer Canon Tinta', '127.0.0.1', '2026-07-04 04:03:16', '2026-07-04 04:03:16'),
(6, 2, 'Logout dari sistem', '127.0.0.1', '2026-07-04 04:06:01', '2026-07-04 04:06:01'),
(7, 2, 'Login ke sistem', '127.0.0.1', '2026-07-04 04:06:26', '2026-07-04 04:06:26'),
(8, 1, 'Menghapus kategori Softaware', '127.0.0.1', '2026-07-04 04:14:21', '2026-07-04 04:14:21'),
(9, 2, 'Mengubah transaksi barang keluar: Laptop Asus', '127.0.0.1', '2026-07-04 04:16:33', '2026-07-04 04:16:33'),
(10, 1, 'Mengubah satuan Roll', '127.0.0.1', '2026-07-04 04:54:40', '2026-07-04 04:54:40'),
(11, 1, 'Mengubah transaksi barang masuk: Printer Canon Tinta', '127.0.0.1', '2026-07-04 04:54:55', '2026-07-04 04:54:55'),
(12, 1, 'Login ke sistem', '127.0.0.1', '2026-07-04 09:37:05', '2026-07-04 09:37:05'),
(13, 1, 'Login ke sistem', '127.0.0.1', '2026-07-04 09:38:41', '2026-07-04 09:38:41'),
(14, 1, 'Logout dari sistem', '127.0.0.1', '2026-07-04 09:46:29', '2026-07-04 09:46:29'),
(15, 2, 'Login ke sistem', '127.0.0.1', '2026-07-04 09:46:47', '2026-07-04 09:46:47'),
(16, 1, 'Mengubah barang Laptop lenovo', '127.0.0.1', '2026-07-04 09:48:45', '2026-07-04 09:48:45'),
(17, 1, 'Menghapus barang Projector', '127.0.0.1', '2026-07-04 09:48:57', '2026-07-04 09:48:57'),
(18, 1, 'Menambahkan kategori Tinta', '127.0.0.1', '2026-07-04 09:49:19', '2026-07-04 09:49:19'),
(19, 1, 'Mengubah kategori Stabilizer', '127.0.0.1', '2026-07-04 09:50:28', '2026-07-04 09:50:28'),
(20, 1, 'Mengubah kategori Stabilizerr', '127.0.0.1', '2026-07-04 09:50:50', '2026-07-04 09:50:50'),
(21, 1, 'Menghapus kategori Stabilizerr', '127.0.0.1', '2026-07-04 09:51:14', '2026-07-04 09:51:14'),
(22, 1, 'Menghapus kategori Softaware', '127.0.0.1', '2026-07-04 09:51:41', '2026-07-04 09:51:41'),
(23, 1, 'Menambahkan supplier Teta Computer', '127.0.0.1', '2026-07-04 09:53:29', '2026-07-04 09:53:29'),
(24, 1, 'Mengubah supplier Sigma Computer', '127.0.0.1', '2026-07-04 09:53:55', '2026-07-04 09:53:55'),
(25, 1, 'Menghapus satuan Set', '127.0.0.1', '2026-07-04 09:54:08', '2026-07-04 09:54:08'),
(26, 1, 'Menambahkan satuan Set', '127.0.0.1', '2026-07-04 09:54:33', '2026-07-04 09:54:33'),
(27, 1, 'Mengubah satuan pair', '127.0.0.1', '2026-07-04 09:54:46', '2026-07-04 09:54:46'),
(28, 1, 'Mengubah transaksi barang masuk: Printer Canon Tinta', '127.0.0.1', '2026-07-04 09:55:15', '2026-07-04 09:55:15'),
(29, 1, 'Menghapus transaksi barang masuk: Printer Canon Tinta', '127.0.0.1', '2026-07-04 09:55:24', '2026-07-04 09:55:24'),
(30, 1, 'Menambahkan barang masuk: Printer Canon Tinta sebanyak 5', '127.0.0.1', '2026-07-04 09:55:59', '2026-07-04 09:55:59'),
(31, 1, 'Mengubah transaksi barang keluar: Laptop lenovo', '127.0.0.1', '2026-07-04 09:57:05', '2026-07-04 09:57:05'),
(32, 1, 'Menambahkan barang keluar: Kursi Kantor sebanyak 3', '127.0.0.1', '2026-07-04 09:57:42', '2026-07-04 09:57:42'),
(33, 1, 'Menghapus transaksi barang keluar: Laptop lenovo', '127.0.0.1', '2026-07-04 09:57:56', '2026-07-04 09:57:56'),
(34, 2, 'Logout dari sistem', '127.0.0.1', '2026-07-04 09:58:18', '2026-07-04 09:58:18'),
(35, 1, 'Mengubah satuan Set', '127.0.0.1', '2026-07-04 17:10:10', '2026-07-04 17:10:10'),
(36, 1, 'Login ke sistem', '114.10.145.140', '2026-07-05 04:30:39', '2026-07-05 04:30:39'),
(37, 2, 'Login ke sistem', '114.10.145.140', '2026-07-05 04:45:22', '2026-07-05 04:45:22'),
(38, 2, 'Menambahkan barang Spidol', '114.10.145.140', '2026-07-05 04:47:54', '2026-07-05 04:47:54'),
(39, 2, 'Mengubah barang Spidol', '114.10.145.140', '2026-07-05 04:48:06', '2026-07-05 04:48:06'),
(40, 2, 'Menambahkan barang masuk: Spidol sebanyak 2', '114.10.145.140', '2026-07-05 04:48:53', '2026-07-05 04:48:53'),
(41, 2, 'Mengubah transaksi barang masuk: Spidol', '114.10.145.140', '2026-07-05 04:49:14', '2026-07-05 04:49:14'),
(42, 2, 'Menambahkan barang keluar: Spidol sebanyak 3', '114.10.145.140', '2026-07-05 04:49:41', '2026-07-05 04:49:41'),
(43, 1, 'Logout dari sistem', '114.10.148.140', '2026-07-05 05:52:30', '2026-07-05 05:52:30'),
(44, 1, 'Login ke sistem', '114.10.145.140', '2026-07-05 07:12:31', '2026-07-05 07:12:31'),
(45, NULL, 'Logout dari sistem', '114.10.145.235', '2026-07-05 15:13:24', '2026-07-05 15:13:24'),
(46, 1, 'Login ke sistem', '114.10.145.235', '2026-07-05 15:13:34', '2026-07-05 15:13:34'),
(47, 1, 'Logout dari sistem', '114.10.148.235', '2026-07-05 16:40:50', '2026-07-05 16:40:50'),
(48, 1, 'Login ke sistem', '114.10.145.232', '2026-07-05 19:26:29', '2026-07-05 19:26:29'),
(49, 1, 'Logout dari sistem', '114.10.148.232', '2026-07-05 19:29:07', '2026-07-05 19:29:07'),
(50, 2, 'Login ke sistem', '114.10.148.232', '2026-07-05 19:29:22', '2026-07-05 19:29:22'),
(51, 1, 'Login ke sistem', '182.10.100.214', '2026-07-06 04:22:44', '2026-07-06 04:22:44'),
(52, 1, 'Login ke sistem', '182.10.100.214', '2026-07-06 04:26:22', '2026-07-06 04:26:22'),
(53, 1, 'Login ke sistem', '182.10.100.214', '2026-07-06 06:53:38', '2026-07-06 06:53:38'),
(54, 1, 'Login ke sistem', '114.10.148.167', '2026-07-06 18:55:12', '2026-07-06 18:55:12'),
(55, 5, 'Menambahkan barang Kertas HVS', '114.10.145.167', '2026-07-07 14:24:35', '2026-07-07 14:24:35'),
(56, 5, 'Mengubah barang Printer Canon Tinta', '114.10.145.167', '2026-07-07 14:25:01', '2026-07-07 14:25:01'),
(57, 5, 'Menghapus barang Laptop lenovo', '114.10.145.167', '2026-07-07 14:25:29', '2026-07-07 14:25:29'),
(58, 5, 'Menambahkan barang masuk: Router TP-Link sebanyak 2', '114.10.145.167', '2026-07-07 14:26:37', '2026-07-07 14:26:37'),
(59, 5, 'Mengubah transaksi barang masuk: Router TP-Link', '114.10.145.167', '2026-07-07 14:26:53', '2026-07-07 14:26:53'),
(60, 5, 'Menambahkan barang keluar: Kertas HVS sebanyak 1', '114.10.148.167', '2026-07-07 14:27:43', '2026-07-07 14:27:43'),
(61, 5, 'Mengubah transaksi barang keluar: Kertas HVS', '114.10.148.167', '2026-07-07 14:27:58', '2026-07-07 14:27:58'),
(62, 5, 'Logout dari sistem', '114.10.148.167', '2026-07-07 14:29:09', '2026-07-07 14:29:09'),
(63, 1, 'Login ke sistem', '114.10.148.167', '2026-07-07 14:29:31', '2026-07-07 14:29:31'),
(64, 1, 'Login ke sistem', '114.10.148.167', '2026-07-07 14:32:29', '2026-07-07 14:32:29'),
(65, 1, 'Menghapus kategori Softaware', '114.10.145.167', '2026-07-07 14:33:47', '2026-07-07 14:33:47'),
(66, 1, 'Menambahkan kategori Software', '114.10.148.167', '2026-07-07 14:34:34', '2026-07-07 14:34:34'),
(67, 1, 'Menambahkan supplier Toko Gembira', '114.10.145.167', '2026-07-07 14:35:25', '2026-07-07 14:35:25'),
(68, 1, 'Mengubah supplier Toko Gembira', '114.10.145.167', '2026-07-07 14:35:39', '2026-07-07 14:35:39'),
(69, 1, 'Menambahkan satuan Rim', '114.10.145.167', '2026-07-07 14:36:18', '2026-07-07 14:36:18'),
(70, 1, 'Mengubah satuan Pair', '114.10.148.167', '2026-07-07 14:36:30', '2026-07-07 14:36:30'),
(71, 1, 'Menghapus satuan Rim', '114.10.148.167', '2026-07-07 14:36:44', '2026-07-07 14:36:44'),
(72, 1, 'Logout dari sistem', '114.10.148.167', '2026-07-07 14:43:28', '2026-07-07 14:43:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Elektronik', 'Peralatan elektronik', NULL, NULL),
(2, 'ATK', 'Alat tulis kantor', NULL, NULL),
(3, 'Aksesoris Komputer', 'Perangkat pendukung komputer', NULL, NULL),
(4, 'Jaringan', 'Peralatan jaringan komputer', NULL, NULL),
(5, 'Furniture', 'Perabot kantor', NULL, NULL),
(6, 'Laptop', 'Semua Merek dan Type Laptop', '2026-07-03 10:56:55', '2026-07-03 10:56:55'),
(7, 'Printer', 'Segala Jenis Printer', '2026-07-04 02:20:37', '2026-07-04 02:20:37'),
(11, 'UPS', 'Segala jenis ups', '2026-07-04 03:43:40', '2026-07-04 03:43:40'),
(14, 'Tinta', 'Tinta Printer', '2026-07-04 09:49:19', '2026-07-04 09:49:19'),
(15, 'Software', 'Segala Jenis Software', '2026-07-07 14:34:34', '2026-07-07 14:34:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `incoming_items`
--

CREATE TABLE `incoming_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `incoming_items`
--

INSERT INTO `incoming_items` (`id`, `item_id`, `user_id`, `tanggal`, `jumlah`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2026-07-03', 5, 'Pembelian baru', NULL, NULL),
(2, 2, 1, '2026-07-03', 2, 'Restock gudang', NULL, NULL),
(5, 7, 1, '2026-05-19', 5, 'Barang Masuk Dari Suplier', '2026-07-04 09:55:59', '2026-07-04 09:55:59'),
(6, 9, 2, '2026-10-06', 3, 'beli baru', '2026-07-05 04:48:53', '2026-07-05 04:49:14'),
(7, 4, 5, '2026-07-07', 4, 'Barang Masuk Dari Jakarta', '2026-07-07 14:26:37', '2026-07-07 14:26:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0,
  `harga` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `kode_barang`, `nama_barang`, `category_id`, `unit_id`, `stok`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'BRG001', 'Laptop ASUS VivoBook', 1, 1, 6, 8500000.00, NULL, '2026-07-03 11:00:01'),
(2, 'BRG002', 'Printer Epson L3210', 2, 1, 6, 2800000.00, NULL, NULL),
(3, 'BRG003', 'Mouse Logitech M220', 3, 2, 30, 175000.00, NULL, NULL),
(4, 'BRG004', 'Router TP-Link', 4, 1, 12, 750000.00, NULL, '2026-07-07 14:26:53'),
(5, 'BRG005', 'Kursi Kantor', 5, 1, 12, 1200000.00, NULL, '2026-07-04 09:57:42'),
(7, 'BRG007', 'Printer Canon Tinta', 3, 1, 7, 1000000.00, '2026-07-04 02:20:02', '2026-07-07 14:25:01'),
(9, 'BR0010', 'Spidol', 2, 4, 7, 10000.00, '2026-07-05 04:47:54', '2026-07-05 04:49:41'),
(10, 'BR0015', 'Kertas HVS', 2, 4, 1, 35000.00, '2026-07-07 14:24:35', '2026-07-07 14:27:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_supplier`
--

CREATE TABLE `item_supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `item_supplier`
--

INSERT INTO `item_supplier` (`id`, `item_id`, `supplier_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2026-07-03 10:52:36', '2026-07-03 10:52:36'),
(2, 2, 2, '2026-07-03 10:52:36', '2026-07-03 10:52:36'),
(3, 3, 3, '2026-07-03 10:52:36', '2026-07-03 10:52:36'),
(4, 4, 1, '2026-07-03 10:52:36', '2026-07-03 10:52:36'),
(5, 5, 2, '2026-07-03 10:52:36', '2026-07-03 10:52:36'),
(7, 7, 2, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_06_30_143334_create_categories_table', 1),
(5, '2026_06_30_143345_create_suppliers_table', 1),
(6, '2026_06_30_143356_create_units_table', 1),
(7, '2026_06_30_143408_create_items_table', 1),
(8, '2026_06_30_143419_create_incoming_items_table', 1),
(9, '2026_06_30_143439_create_outgoing_items_table', 1),
(10, '2026_06_30_143451_add_role_to_users_table', 1),
(11, '2026_06_30_143502_create_supplier_item_table', 1),
(12, '2026_07_03_130109_create_item_supplier_table', 1),
(13, '2026_07_04_093134_create_activity_logs_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `outgoing_items`
--

CREATE TABLE `outgoing_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `outgoing_items`
--

INSERT INTO `outgoing_items` (`id`, `item_id`, `user_id`, `tanggal`, `jumlah`, `tujuan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2026-07-03', 1, 'Divisi Keuangan', NULL, NULL),
(2, 3, 2, '2026-07-03', 2, 'Divisi IT', NULL, NULL),
(3, 1, 1, '2026-08-05', 4, 'Untuk cabang Jakarta', '2026-07-03 11:00:01', '2026-07-03 11:00:01'),
(5, 5, 1, '2026-06-23', 3, 'Untuk dipakai divisi marketing', '2026-07-04 09:57:42', '2026-07-04 09:57:42'),
(6, 9, 2, '2026-11-06', 3, 'untuk dipakai', '2026-07-05 04:49:41', '2026-07-05 04:49:41'),
(7, 10, 5, '2026-07-09', 3, 'Untuk di pakai di cabang Bandung', '2026-07-07 14:27:43', '2026-07-07 14:27:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cuBNXTLao9ZOWCL2yQV0EK01HnqfhrFPkKE5uMS7', NULL, '114.10.148.167', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN0EwSGJka3FhUXBwWW5aQmNHTUZvOThNV1VnSmNsZVdhT1QxYmtKdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vd3d3Lm5hZGFpc21heWEyMS5teS5pZC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6NDA6Imh0dHBzOi8vd3d3Lm5hZGFpc21heWEyMS5teS5pZC9kYXNoYm9hcmQiO319', 1783430009),
('h77lXCLV2nrQUXOfm2fmqZArQENLbCZFK4RQgd0U', NULL, '85.208.96.195', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicThydDBOczNPNXZvZ1RJMkR5RTdsYnN1WFpOU1VjbUlqZkZYV2k4MSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vbmFkYWlzbWF5YTIxLm15LmlkL2xvZ2luIjtzOjU6InJvdXRlIjtzOjU6ImxvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1783427309),
('iVOPf1LlaIUrd8AfHxYiYOqvsmvtFaV6LpA6MDMj', NULL, '185.191.171.2', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicFBZd0tDWWdyUG5DZnFqMDYwV1I0bmQyYVVadlp2MURJVnZYVUk0ayI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vbmFkYWlzbWF5YTIxLm15LmlkIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1783427302),
('kmjBLgPCq32MvqVqEXGAeS7Wj71x3Hfdr9SgOImU', NULL, '52.247.106.58', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieW1na3VxT1N0cW1TNFR3ZkxabThCN1FPYU02TVZnVG16cUYzN0ZaNiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9uYWRhaXNtYXlhMjEubXkuaWQiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1783433765),
('kSCtXHR5z505QbohvBMv6EGi47dH4BkZasCAR6QF', 1, '114.10.148.167', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYWNCZHZ5UHA3YVhsemxLWUlkRWRPd3VKNU1DZmlzcXp4dFl3OWJjSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vbmFkYWlzbWF5YTIxLm15LmlkL2NhdGVnb3JpZXMvY3JlYXRlIjtzOjU6InJvdXRlIjtzOjE3OiJjYXRlZ29yaWVzLmNyZWF0ZSI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1783429225),
('sN5JNYD7zlhv44aTU4l2HFJ852RXtwsoMW0wrJw8', NULL, '34.75.66.161', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzR3Z0lUb09FcUlIN1dnNVhiNFBPclphYmV6QnVJT05Dek5ucDBrdyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9uYWRhaXNtYXlhMjEubXkuaWQiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1783434215),
('t00mtt0mqO4LqxSBUBNpTEums9zcUUVx6lIYPY1p', NULL, '85.208.96.210', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibTIwckpJUDR3OTBHZEVFWHFscGdpSno2dzA1YzlqTGpZazlnQnRDWSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNjoiaHR0cHM6Ly9uYWRhaXNtYXlhMjEubXkuaWQvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vbmFkYWlzbWF5YTIxLm15LmlkL2Rhc2hib2FyZCI7czo1OiJyb3V0ZSI7czo5OiJkYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1783427306);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
(1, 'PT Surya Multi Sarana', 'Jakarta', '081234567890', 'surya@email.com', NULL, NULL),
(2, 'CV Mitra Teknologi', 'Bandung', '081298765432', 'mitra@email.com', NULL, NULL),
(3, 'PT Sumber Komputer', 'Bekasi', '081377788899', 'sumber@email.com', NULL, NULL),
(4, 'Mega Computer', 'Segitigas Mas', '084772637828', 'mega@gmail.com', '2026-07-03 10:56:02', '2026-07-03 10:56:02'),
(5, 'Sigma Computer', 'HMD', '085367177728', 'sigma@gmail.com', '2026-07-04 02:21:09', '2026-07-04 09:53:54'),
(6, 'Teta Computer', 'Harco Mangga Dua', '083467589274', 'teta@gmail.com', '2026-07-04 09:53:29', '2026-07-04 09:53:29'),
(7, 'Toko Gembira', 'Bandung', '085678905588', 'gembira@gmail.com', '2026-07-07 14:35:25', '2026-07-07 14:35:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier_item`
--

CREATE TABLE `supplier_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `units`
--

INSERT INTO `units` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Unit', NULL, NULL),
(2, 'Pcs', NULL, NULL),
(3, 'Box', NULL, NULL),
(4, 'Pack', NULL, NULL),
(5, 'Roll', '2026-07-03 10:56:16', '2026-07-04 04:54:40'),
(7, 'Pair', '2026-07-04 09:54:33', '2026-07-07 14:36:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','petugas') NOT NULL DEFAULT 'petugas',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$12$JQJeijz5JAzJZrvWhSGkyeqQwkp58sii2xw4DtJuRo/vzfJfsOoJq', 'admin', NULL, '2026-07-03 10:52:36', '2026-07-03 10:52:36'),
(2, 'Petugas', 'petugas@gmail.com', NULL, '$2y$12$biGF.6Cx6Ho4x1rOJrKi5.M3deIVDpwLVd4PPAjrJMPmIwPchQxb2', 'petugas', NULL, '2026-07-03 10:52:36', '2026-07-03 10:52:36'),
(5, 'Dian Gita', 'dian@gmail.com', NULL, '$2y$12$Jy214D3OBsX0C1kO8R5nyup.oyDSFljA6b/GsPuP2bYaYytCMTNd.', 'petugas', NULL, '2026-07-07 14:23:14', '2026-07-07 14:37:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `incoming_items`
--
ALTER TABLE `incoming_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incoming_items_item_id_foreign` (`item_id`),
  ADD KEY `incoming_items_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_kode_barang_unique` (`kode_barang`),
  ADD KEY `items_category_id_foreign` (`category_id`),
  ADD KEY `items_unit_id_foreign` (`unit_id`);

--
-- Indeks untuk tabel `item_supplier`
--
ALTER TABLE `item_supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_supplier_item_id_foreign` (`item_id`),
  ADD KEY `item_supplier_supplier_id_foreign` (`supplier_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outgoing_items`
--
ALTER TABLE `outgoing_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `outgoing_items_item_id_foreign` (`item_id`),
  ADD KEY `outgoing_items_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier_item`
--
ALTER TABLE `supplier_item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supplier_item_supplier_id_item_id_unique` (`supplier_id`,`item_id`),
  ADD KEY `supplier_item_item_id_foreign` (`item_id`);

--
-- Indeks untuk tabel `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `incoming_items`
--
ALTER TABLE `incoming_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `item_supplier`
--
ALTER TABLE `item_supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `outgoing_items`
--
ALTER TABLE `outgoing_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `supplier_item`
--
ALTER TABLE `supplier_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `incoming_items`
--
ALTER TABLE `incoming_items`
  ADD CONSTRAINT `incoming_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `incoming_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `item_supplier`
--
ALTER TABLE `item_supplier`
  ADD CONSTRAINT `item_supplier_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `item_supplier_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `outgoing_items`
--
ALTER TABLE `outgoing_items`
  ADD CONSTRAINT `outgoing_items_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `outgoing_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `supplier_item`
--
ALTER TABLE `supplier_item`
  ADD CONSTRAINT `supplier_item_item_id_foreign` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplier_item_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
