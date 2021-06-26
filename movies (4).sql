-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2021 lúc 11:28 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `movies`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `url_picture`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Phim Tình Cảm.', 'Nulla porro cum minus atque. Exercitationem ab quidem aspernatur maiores. Est cumque eos sequi natus nam omnis incidunt vitae. Consequuntur sunt tempora dicta animi voluptates.', 'img/news/news218.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(2, 'Phim Hành Động', 'Perferendis perferendis vero est aut sit. Mollitia minima sit ullam et qui sunt ducimus.', 'img/news/news234.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(3, 'Phim Hoạt Hình', 'Sapiente sapiente et voluptatem quo. Nihil voluptas doloremque aut veniam eligendi corrupti eos.', 'img/news/news221.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(4, 'Phim Khoa Học', 'Rerum occaecati sunt veritatis laborum alias sed quo. Et in consequatur aliquid ipsum consequuntur. Quisquam ut amet praesentium dolores voluptate. Totam ullam aut quis et quibusdam.', 'img/news/news206.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(5, 'Phim Kinh Dị', 'Placeat rerum magni ullam tempore tenetur suscipit. Velit quasi rerum reiciendis repellendus. Doloribus eum consequatur eos excepturi.', 'img/news/news238.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(6, 'Phim Cổ Trang', 'Doloribus ipsa aut dolores vel libero omnis consectetur. Minima et vitae reiciendis ea aliquid dicta nam. Sit dolores quod minus.', 'img/news/news238.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(7, 'Phim Tâm Lý', 'Dolor quae est molestias aliquam qui. Et ut commodi facilis eos. Iste facilis eveniet optio praesentium ut. Qui dolorem sit consequuntur ea repellendus. Repellat nulla quia nemo beatae.', 'img/news/news243.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(8, 'Phim Hài', 'Magni in voluptatibus ut est laboriosam quo consequatur. Dolor nihil debitis aut sint nulla placeat voluptatem labore.', 'img/news/news236.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(9, 'Phim Chiến Tranh', 'Minus ipsam omnis quis rem. Quae est accusamus ut aperiam ut et rem. Quasi et qui sit maxime.', 'img/news/news246.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(10, 'Phim Viễn Tưỡng', 'Quis tempore totam quisquam minus. Eveniet ratione a ullam quidem. Error beatae dolorem qui nostrum sint. Porro adipisci eius et neque.', 'img/news/news231.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories_tags`
--

CREATE TABLE `categories_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `tags_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories_tags`
--

INSERT INTO `categories_tags` (`id`, `categories_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(1, 8, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(2, 6, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(3, 4, 6, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(4, 3, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(5, 5, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(6, 1, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(7, 7, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(8, 10, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(9, 3, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(10, 9, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(11, 8, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(12, 6, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(13, 9, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(14, 7, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(15, 7, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(16, 9, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(17, 3, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(18, 8, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(19, 10, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(20, 5, 6, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(21, 7, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(22, 2, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(23, 4, 5, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(24, 3, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(25, 7, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(26, 2, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(27, 4, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(28, 5, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(29, 8, 4, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(30, 8, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contries`
--

CREATE TABLE `contries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contries`
--

INSERT INTO `contries` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Việt Nam', 'Et impedit possimus doloremque quam doloremque. Modi delectus ex numquam et quia in. Sapiente distinctio repellat earum aut. Cupiditate molestias non ut aperiam minima ut.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(2, 'Hàn Quốc', 'Pariatur ut nisi distinctio temporibus. Nisi rem dolores totam eaque sint fuga et. Fugit harum laboriosam libero quo.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(3, 'Nhật Bản', 'Labore velit cum voluptas fugiat est. Commodi aspernatur quia sit et officiis. Quo quibusdam at voluptas repellat non eos error.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(4, 'Trung Quốc', 'Et commodi voluptas nemo deserunt aperiam eos est ipsum. Cumque autem rerum eligendi consequatur et voluptas.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(5, 'Thái Lan', 'Nostrum ut quis quia. Ipsa odio et totam quos. Ipsa deserunt cum fugiat quis cupiditate id.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(6, 'Mỹ', 'A animi odio illum tenetur rerum. Doloribus pariatur aut unde corporis et. Expedita soluta vel deleniti et optio dolores. Voluptates voluptatem sed voluptatem neque omnis voluptatem voluptatem.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(7, 'Anh', 'Vitae sed explicabo molestias natus. Autem ut et sunt sit. Quae voluptatem fuga nesciunt ut sequi eum quas.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(8, 'Ấn Độ', 'Aut dolorem totam qui. Rem totam id et sapiente et quidem. Molestiae fugiat quis corporis quasi magnam. Natus dignissimos eos cum qui nemo ipsum nihil. Suscipit accusantium enim et ea hic qui.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(9, 'Nga', 'Sint est et vero optio sapiente veniam quia similique. Aperiam voluptatem non qui est quia eveniet nulla.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(10, 'Pháp', 'Ullam quia repellat recusandae quasi temporibus nostrum nam. Facere nesciunt quo illum sit. Aut et quam sit nesciunt.', '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `handle`, `created_at`, `updated_at`) VALUES
(1, 'Thể Loại', 'categories', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(2, 'Quốc Gia', 'contries', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(3, 'Phim Lẻ', 'single_movies', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(4, 'Phim Bộ', 'series_movies', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(5, 'Phim Chiếu Rạp', 'theater_movies', '2021-06-21 21:52:18', '2021-06-21 21:52:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(98, '2021_06_03_103508_create_social_accounts_table', 6),
(187, '2014_10_12_000000_create_users_table', 7),
(188, '2014_10_12_100000_create_password_resets_table', 7),
(189, '2019_08_19_000000_create_failed_jobs_table', 7),
(190, '2021_05_07_081107_create_contries_table', 7),
(191, '2021_05_07_081322_create_categories_table', 7),
(192, '2021_05_07_081622_create_tags_table', 7),
(193, '2021_05_07_081851_create_movies_table', 7),
(194, '2021_05_07_082322_create_categories_tags_table', 7),
(195, '2021_05_07_082420_create_tags_movies_table', 7),
(196, '2021_05_10_012815_create_menus_table', 7),
(197, '2021_05_10_013850_create_single_movies_table', 7),
(198, '2021_05_10_014258_create_series_movies_table', 7),
(199, '2021_05_10_014329_create_theater_movies_table', 7),
(200, '2021_05_10_173402_create_type_movies_table', 7),
(201, '2021_05_10_173816_update_collum_movies_table', 7),
(202, '2021_05_31_172758_update_collum_active_table', 7),
(203, '2021_06_01_093224_update_collum_email_verified_at_user_table', 7),
(204, '2021_06_07_034453_update_collum_provieder_users_table', 7),
(205, '2021_06_07_094801_update_collum_is_disabled_all_table', 7),
(206, '2021_06_10_102939_create_jobs_table', 7),
(207, '2021_06_14_091458_update_collum_avatar_users_table', 7),
(208, '2021_06_17_101606_update_collum_phone_users_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `date` date NOT NULL,
  `url_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film_hot` tinyint(1) NOT NULL,
  `contries_id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_movie` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`id`, `title`, `directors`, `actor`, `time`, `date`, `url_picture`, `url_link`, `view`, `description`, `status`, `film_hot`, `contries_id`, `categories_id`, `created_at`, `updated_at`, `name`, `type_movie`, `year`, `deleted_at`) VALUES
(1, 'Ms. Daisy Batz', 'Adeline Miller IV', 'Carroll Bauch', 84, '1984-08-13', 'img/news/news212.jpg', 'video/video.mp4', 94, 'Esse aliquid et distinctio quam in dicta. Fuga et beatae magnam in odio aut. Eius est iusto magnam tenetur modi. Eum eaque explicabo dolor fugiat qui non. Maiores ut odio dolorem cum.', 'Vincent Cruickshank', 1, 5, 4, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Mertie Bernier II', 2, 2020, NULL),
(2, 'Hertha Murazik Sr.', 'Evangeline Kulas', 'Frederik McKenzie', 78, '1995-08-29', 'img/news/news218.jpg', 'video/video.mp4', 427, 'Rerum vel quia nisi dolorem veniam modi. Non repellendus vitae quisquam deleniti amet at officia. Maxime delectus sint harum quia ipsam saepe. Voluptatum et sequi ipsum. Distinctio delectus eaque quam.', 'Avery Koelpin', 1, 9, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Eulah Parisian', 2, 2018, NULL),
(3, 'Prof. Mariela Gerhold DDS', 'Loma Hodkiewicz', 'Rachel Orn I', 22, '2018-05-12', 'img/news/news224.jpg', 'video/video.mp4', 486, 'Et illum ad voluptatem rerum voluptas autem ipsum magni. Ratione nulla et itaque excepturi nulla modi nemo. Eos voluptatem quasi mollitia repellendus.', 'Dr. Jedediah Altenwerth IV', 0, 7, 10, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Deondre Mosciski', 3, 2019, NULL),
(4, 'Manley Leuschke', 'Kennedi Herzog', 'Vernice Wiegand', 31, '1995-06-03', 'img/news/news221.jpg', 'video/video.mp4', 446, 'Impedit similique iste in quisquam quas delectus. Distinctio voluptatem error enim molestiae. At et ea aspernatur libero molestias accusamus eum.', 'Kattie Durgan', 0, 6, 6, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Peter Schimmel', 2, 2019, NULL),
(5, 'Alyce Pacocha', 'Dr. Bettye Hagenes', 'Dr. Alexandre Murphy', 44, '1973-09-10', 'img/news/news225.jpg', 'video/video.mp4', 329, 'Facilis aut in minima dolor vel consectetur magnam libero. Nulla qui est nemo est porro dolores omnis. Deserunt quos ex et officiis. Enim ut sequi placeat pariatur accusamus illum.', 'Valentin Macejkovic', 0, 5, 10, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Jameson Farrell Sr.', 3, 2018, NULL),
(6, 'Mikayla Brekke', 'Hubert Pacocha', 'Natasha Heidenreich', 98, '1988-10-04', 'img/news/news219.jpg', 'video/video.mp4', 121, 'Deserunt adipisci recusandae est pariatur dolores magni quibusdam. Aspernatur pariatur consectetur nam harum a neque. Cupiditate tenetur dolorum molestias voluptas sunt officiis ea. Explicabo non ea quis sed enim.', 'Amelie Schamberger', 0, 2, 4, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Dashawn O\'Keefe', 2, 2021, NULL),
(7, 'Julian Hackett IV', 'Prof. Garret Bosco', 'Dr. Coralie Johnston DVM', 22, '1999-08-23', 'img/news/news232.jpg', 'video/video.mp4', 76, 'Architecto quos officiis maiores ut maxime. Molestias qui quia quia quia aut. Nihil possimus ducimus mollitia commodi quo. Omnis architecto perspiciatis et voluptatum accusantium.', 'Marcos Rodriguez', 1, 10, 5, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Oswald Parker I', 2, 2019, NULL),
(8, 'Dr. Madge Feeney PhD', 'Mr. Edison Brakus', 'Miss Lonie Ziemann', 114, '1999-07-08', 'img/news/news231.jpg', 'video/video.mp4', 146, 'Commodi sunt eaque mollitia corrupti delectus. Aliquam ut incidunt beatae sed. In tenetur tempore consequatur tenetur dolor ipsa voluptatem voluptates.', 'Kristy Kuhn', 0, 3, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Rafael Willms DDS', 3, 2018, NULL),
(9, 'Fletcher Moen', 'Emie Ernser', 'Estella Stokes', 67, '1976-02-13', 'img/news/news211.jpg', 'video/video.mp4', 52, 'Aspernatur accusantium sint id dicta eaque et. Sint debitis nulla eum odit. Error ad eum nostrum. Eaque inventore molestias necessitatibus eligendi incidunt laudantium. Et deleniti recusandae quae nostrum.', 'Prof. Melany Pacocha DDS', 0, 7, 10, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Danyka Kub', 1, 2018, NULL),
(10, 'Ramon Ratke', 'Charley Lesch V', 'Johathan Feeney', 82, '2019-04-06', 'img/news/news201.jpg', 'video/video.mp4', 70, 'Nihil neque fugiat nostrum amet cumque sapiente nesciunt. Impedit autem officia voluptate eos distinctio perspiciatis consequuntur. In qui repellat atque sunt unde cupiditate. Quia ab incidunt in quia officia.', 'Modesto Hessel', 1, 2, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Angeline Roberts', 3, 2018, NULL),
(11, 'Aliza Mann DDS', 'Prof. Geraldine Torphy', 'Kiley Strosin', 57, '2009-03-27', 'img/news/news232.jpg', 'video/video.mp4', 157, 'Inventore consequuntur dolores quia molestias. Ut tempore distinctio sed ut hic quam ut. Quo sequi ex aut omnis amet commodi. Nostrum quia deleniti qui necessitatibus. Neque ullam dolorem adipisci aperiam.', 'Ernestina Williamson', 1, 2, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Carmel Harris', 2, 2021, NULL),
(12, 'Khalil Gutmann', 'Miss Lucienne Block I', 'Jensen Schoen V', 74, '1995-05-24', 'img/news/news230.jpg', 'video/video.mp4', 111, 'Magnam ea ut vel sunt porro aut. Provident reprehenderit nesciunt qui corrupti odio voluptatum. Tempore aut rerum est ut et et voluptatum quaerat.', 'Mr. Barrett Blick Sr.', 1, 1, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Brandy Emmerich', 2, 2019, NULL),
(13, 'Prof. Lucy Rohan MD', 'Nora Doyle', 'Hope Roberts', 65, '1975-02-18', 'img/news/news237.jpg', 'video/video.mp4', 10, 'Qui expedita a ut aut neque. Sequi praesentium nesciunt officiis sint qui. Iusto veritatis totam velit quam molestiae illo.', 'Mr. Julio Rosenbaum V', 0, 9, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Conor Ritchie', 2, 2020, NULL),
(14, 'Ernestina Marquardt DVM', 'Theresia Treutel', 'Maximillian Murray II', 70, '1975-06-11', 'img/news/news226.jpg', 'video/video.mp4', 240, 'Expedita quis odit veniam distinctio illum saepe sequi. Tempora laudantium voluptatem omnis porro placeat. Officia placeat et non possimus et sed quisquam sint.', 'Lauretta Howell', 0, 6, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Corrine Mohr', 1, 2021, NULL),
(15, 'Dr. Russel Kilback', 'Hadley Ullrich', 'Melisa Runte', 28, '1970-01-21', 'img/news/news224.jpg', 'video/video.mp4', 95, 'Voluptatem laboriosam aliquam reiciendis harum quas nihil. Ducimus vel reprehenderit sed doloribus eius hic.', 'Celestino McClure', 0, 4, 10, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Arjun Erdman PhD', 3, 2020, NULL),
(16, 'Sammy Auer', 'Bret Becker Sr.', 'Dr. Wiley Durgan IV', 22, '1994-01-05', 'img/news/news243.jpg', 'video/video.mp4', 352, 'Omnis id illum amet dicta esse vel. Autem veritatis aut asperiores enim. Dolorum est ullam dolores voluptatum sit quo. At sed qui autem ullam nesciunt non.', 'Kailey Abshire I', 1, 5, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Prof. Raheem Lueilwitz', 2, 2019, NULL),
(17, 'Mike Murphy', 'Mr. Carmel Bogan', 'Mayra Aufderhar', 62, '2019-07-10', 'img/news/news232.jpg', 'video/video.mp4', 230, 'Ipsum maiores architecto et velit sit qui quis. Tenetur et voluptatem quaerat. Id aut aperiam qui molestias animi ipsa illum.', 'Enid Kohler', 1, 1, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Laurianne Littel', 1, 2019, NULL),
(18, 'Tyrese Anderson', 'Ms. Flossie Brakus', 'Effie Bergstrom', 25, '1971-03-27', 'img/news/news245.jpg', 'video/video.mp4', 93, 'Quia consectetur dolorum accusantium in. Aut doloribus enim dolorem ipsa quo ea id. Temporibus nam et laudantium vel incidunt distinctio eos. Nobis dicta corrupti iusto aut.', 'Loma Hegmann III', 1, 1, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Salvatore Beer', 2, 2018, NULL),
(19, 'Eladio Walter', 'Miss Modesta Gutmann PhD', 'Jared Effertz', 106, '1985-11-08', 'img/news/news246.jpg', 'video/video.mp4', 237, 'Impedit commodi quasi rerum molestiae. Tenetur veritatis accusamus ab. A ipsa est minima voluptates pariatur dolores deleniti.', 'Nelle Hermann', 1, 4, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Abdul Klein PhD', 3, 2018, NULL),
(20, 'Joanny Auer', 'Miss Dahlia Goodwin', 'Maximillia Kunde V', 27, '1980-12-26', 'img/news/news237.jpg', 'video/video.mp4', 407, 'Et soluta quisquam soluta odit provident accusantium. Corrupti neque at doloremque inventore aut voluptatem ratione. Magnam voluptatem mollitia numquam reiciendis error. Officia commodi quas consequuntur.', 'Lawson Pouros', 1, 9, 6, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Mr. Timothy Crooks', 2, 2021, NULL),
(21, 'Ben Sanford Jr.', 'Jayden Hodkiewicz', 'Mrs. Karlie Prohaska Sr.', 40, '2001-11-02', 'img/news/news246.jpg', 'video/video.mp4', 123, 'Aut saepe numquam fugiat ad consectetur facilis quam ea. Alias et aspernatur consequatur et aliquid ea. Dolorum est quasi aliquid debitis commodi dolorum nostrum. Ullam voluptatum laudantium amet ut enim.', 'Daisy Rohan', 0, 2, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Orrin Pfannerstill DDS', 2, 2019, NULL),
(22, 'Herta Gibson', 'Prof. Missouri Mayert', 'Rosanna Bahringer', 95, '1986-04-09', 'img/news/news208.jpg', 'video/video.mp4', 438, 'Rerum neque alias odio adipisci aspernatur praesentium. Voluptatem numquam impedit adipisci architecto eligendi est. Inventore vel possimus dicta tempore ratione qui quia. Neque quia sint eos vel sit facere.', 'Claudie Rodriguez', 1, 2, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Prof. Leilani Kunze', 1, 2019, NULL),
(23, 'Kristoffer Cartwright Sr.', 'Stan Feest', 'Madisyn Nitzsche', 37, '1986-01-16', 'img/news/news233.jpg', 'video/video.mp4', 145, 'Aspernatur qui sit consectetur nesciunt quas. Quia itaque odit quae mollitia nulla est. Eaque eaque voluptatem cum quia.', 'Marjolaine Hoppe Jr.', 1, 4, 6, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Jeanne Nienow', 3, 2020, NULL),
(24, 'Mr. Sim Haag', 'Melody Barton', 'Catherine Rice', 41, '1991-08-11', 'img/news/news200.jpg', 'video/video.mp4', 314, 'Et sunt praesentium qui eaque. A nam tenetur debitis dolorem odit neque repellat. Est consequatur debitis sit quibusdam et labore.', 'Prof. Abagail Becker', 0, 10, 6, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Imelda Boyle', 2, 2018, NULL),
(25, 'Chyna Lowe', 'Miss Etha Hickle', 'Marisol Cummings V', 98, '1979-02-17', 'img/news/news244.jpg', 'video/video.mp4', 68, 'Nam qui quae dolorem commodi voluptas aliquam. Nihil et voluptatem temporibus quis harum rem nemo. Error quibusdam velit ducimus fuga fuga dolorem odio.', 'Rogers Dickinson', 1, 5, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Prof. Carley Runolfsdottir DDS', 2, 2018, NULL),
(26, 'Miss Susana Bode Sr.', 'Prof. Omer Lebsack', 'Estevan Hoeger', 116, '2005-11-28', 'img/news/news213.jpg', 'video/video.mp4', 143, 'Sint ut nisi nesciunt fugit eligendi dignissimos quam incidunt. Libero perspiciatis explicabo perspiciatis et quasi. Vel ea ut quod quia est laboriosam voluptatem provident.', 'Daija Schuppe IV', 1, 8, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Wilbert Walter DVM', 1, 2019, NULL),
(27, 'Frederique Osinski', 'Amina Moore', 'Tiara Swift', 50, '2003-09-22', 'img/news/news244.jpg', 'video/video.mp4', 98, 'Et aperiam maxime commodi aut. Doloremque voluptatibus et aut aut possimus nulla sunt perspiciatis. Quibusdam debitis voluptatem dolor quibusdam perferendis assumenda.', 'Nella Hane', 0, 4, 4, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Prof. Horacio Huels IV', 3, 2018, NULL),
(28, 'Paige Wolff', 'Ms. Minerva Greenholt', 'Torrey Legros IV', 26, '2004-03-05', 'img/news/news244.jpg', 'video/video.mp4', 422, 'Cupiditate laudantium voluptatem officiis architecto optio est. Aut aut similique voluptatem. Modi beatae dignissimos qui incidunt nihil enim rerum.', 'Dr. Brendan Langworth', 0, 10, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Vito Howell I', 2, 2020, NULL),
(29, 'Gracie Gorczany', 'Deven Hegmann MD', 'Kristin Terry', 64, '1997-07-11', 'img/news/news224.jpg', 'video/video.mp4', 316, 'Dolor velit est enim non iure. Voluptas et optio alias dolore. Optio dignissimos quis laudantium ut in. Vitae optio sint perferendis saepe pariatur laborum. Amet debitis dicta consequatur ex iusto.', 'Gillian Lubowitz', 1, 6, 5, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Kyleigh Barrows', 1, 2020, NULL),
(30, 'Lelia Connelly MD', 'Hertha Kertzmann V', 'Mable Rath III', 54, '1971-05-23', 'img/news/news228.jpg', 'video/video.mp4', 331, 'Similique beatae aut repellendus est. Id sapiente nemo occaecati nam. Dolorum expedita quidem esse consequatur. Excepturi hic excepturi qui perspiciatis est soluta est. Praesentium necessitatibus vel voluptatem fugit. Excepturi rem cumque vero porro cum.', 'Avis Ward', 1, 5, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Jo Torp', 3, 2021, NULL),
(31, 'Prof. Brett Tromp DDS', 'Royce Rippin', 'Prof. Elisha Spencer V', 101, '1993-05-31', 'img/news/news235.jpg', 'video/video.mp4', 430, 'Sed nam veniam minima sed. Et ullam voluptate occaecati distinctio. Laboriosam odit ab quibusdam explicabo. Tempora vel ut vitae voluptatibus atque eum tenetur.', 'Andres Runte IV', 0, 5, 3, '2021-06-21 21:52:18', '2021-06-21 23:56:26', 'Prof. Gardner Friesen', 1, 2021, NULL),
(32, 'Phyllis Murphy', 'Santiago Jaskolski', 'Kitty Volkman II', 61, '1989-03-06', 'img/news/news200.jpg', 'video/video.mp4', 304, 'Tempora ut veniam soluta perferendis explicabo non accusamus libero. In nemo veritatis molestiae fuga sit ipsam. Mollitia delectus cumque harum vel ratione. Doloribus facilis est quia quaerat quaerat voluptatem mollitia.', 'Brennon Schuster', 0, 6, 10, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Mrs. Cheyenne Paucek II', 1, 2021, NULL),
(33, 'Abagail Stoltenberg', 'Arvel Johnson', 'Elsa Lakin', 27, '1988-03-27', 'img/news/news210.jpg', 'video/video.mp4', 90, 'Hic provident dolore id eum dolorem asperiores. Ratione illum voluptate accusantium labore. Autem facere et odit rerum.', 'Idella Bins', 0, 8, 10, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Thea Krajcik', 2, 2018, NULL),
(34, 'Eulalia Champlin', 'Jany McDermott III', 'Kaylah Nitzsche', 80, '2005-04-22', 'img/news/news212.jpg', 'video/video.mp4', 186, 'Eum et sed qui dignissimos. Quia vitae nam autem ex. Et quisquam similique et hic enim tenetur. Nobis aut consequatur recusandae adipisci ipsa. Illum voluptas dolorem doloribus tempore architecto eius nulla. Mollitia fugiat tempora non.', 'Brook Boyer Sr.', 1, 8, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Kareem Nicolas', 3, 2020, NULL),
(35, 'Miss Nya Rohan', 'Arturo Hand DVM', 'Alexander Legros', 120, '2018-01-29', 'img/news/news230.jpg', 'video/video.mp4', 195, 'Deserunt libero ut nemo commodi. Ab expedita nihil sequi dolor odio vel sed. Et voluptas ipsum provident ullam quia nisi.', 'Chelsey Lynch', 1, 10, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Angelo Lindgren IV', 2, 2021, NULL),
(36, 'Prof. Lula Parisian', 'Miss Mariam Hudson DVM', 'Leonie Homenick', 114, '2016-09-09', 'img/news/news212.jpg', 'video/video.mp4', 161, 'Quia nam est nemo quam ipsum totam architecto. Reprehenderit est fugiat harum nulla eos neque. Hic iure explicabo qui sequi.', 'Dr. Suzanne Miller III', 0, 3, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Jordi Sauer', 2, 2018, NULL),
(37, 'Felipe O\'Reilly', 'Prof. Aric Baumbach I', 'Zetta Ebert V', 52, '2003-05-29', 'img/news/news243.jpg', 'video/video.mp4', 17, 'Harum iusto mollitia optio consequatur quia. Officia harum ut odit ab sit quisquam molestias. Hic et recusandae voluptas dignissimos. Quod soluta ab facere. Esse sit optio possimus nihil sapiente aut distinctio.', 'Isidro Johnson', 0, 4, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Mariane Corwin', 2, 2018, NULL),
(38, 'Lavada Stracke', 'Marlee Hettinger', 'Sonny Krajcik', 45, '1991-10-06', 'img/news/news226.jpg', 'video/video.mp4', 265, 'Dolor aspernatur maiores corporis voluptas ab itaque. Quaerat numquam est error veniam. Consequatur animi quis nulla est qui architecto sequi.', 'Prof. Elouise Stehr V', 0, 10, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Freda Boyle', 1, 2019, NULL),
(39, 'Prof. Shirley Effertz', 'Brando Collins Jr.', 'Mrs. Marlen Barrows PhD', 33, '1976-03-13', 'img/news/news204.jpg', 'video/video.mp4', 137, 'Eos qui at distinctio facere et provident illo autem. Non facilis doloremque rem ipsa. Nisi ab vel aut nobis voluptatum. Consectetur porro numquam repellat inventore pariatur aliquam et.', 'Allen Larson', 0, 9, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Dr. Juvenal Jenkins PhD', 3, 2020, NULL),
(40, 'Mrs. Deborah Cassin', 'Gordon Homenick PhD', 'Cathrine Ruecker', 26, '1990-03-06', 'img/news/news200.jpg', 'video/video.mp4', 302, 'Inventore dolores illo quis rerum. Perferendis voluptate necessitatibus fugit voluptate. Ut et et fuga reprehenderit numquam repellat dignissimos facere.', 'Adrain Anderson DDS', 0, 4, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Ms. Amalia King V', 2, 2018, NULL),
(41, 'Ms. Evangeline Dibbert', 'Maye Buckridge', 'Rhiannon McKenzie', 117, '1981-03-30', 'img/news/news242.jpg', 'video/video.mp4', 214, 'Odio vel ipsa error velit non modi. Nesciunt sapiente iure explicabo molestiae. Quia possimus eos dolore vel perferendis ut voluptatum.', 'Earl Cronin I', 1, 8, 5, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Mr. Gilberto Gutkowski PhD', 2, 2019, NULL),
(42, 'Dr. Nat Huel', 'Stephania Price', 'Gregorio Windler', 99, '2003-03-11', 'img/news/news226.jpg', 'video/video.mp4', 241, 'Ex ut autem fugit dolor placeat. Sequi expedita ut aut ab quas et molestias. Qui eius odio suscipit quia.', 'Nasir Blanda', 1, 3, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Dawn Carter', 3, 2019, NULL),
(43, 'Quincy Mayer', 'Stephon Hammes MD', 'Payton Nader', 75, '1994-10-04', 'img/news/news239.jpg', 'video/video.mp4', 229, 'Culpa et eius facilis rerum. Voluptas quos unde voluptatum quo laudantium id. Veritatis ex vel corrupti non harum enim. Doloribus sit et eius. Voluptas perspiciatis natus doloribus occaecati. Possimus molestias soluta voluptas et voluptatem eum.', 'Micaela Heller', 1, 9, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Miss Mossie Hackett', 2, 2020, NULL),
(44, 'Eve Dooley IV', 'Bruce Cronin', 'Maryse McGlynn', 43, '2004-04-15', 'img/news/news220.jpg', 'video/video.mp4', 181, 'Debitis suscipit officia nesciunt occaecati unde. Perferendis aut quae qui ex atque. Doloribus cupiditate dolorem vel qui id. Est non aut nemo. Cupiditate in tempora quisquam officiis.', 'Van Torphy', 1, 1, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Hipolito Bashirian', 2, 2019, NULL),
(45, 'Vella Beer', 'Blaise Smitham', 'Cayla Corkery', 62, '2002-05-26', 'img/news/news206.jpg', 'video/video.mp4', 403, 'Numquam velit nisi sunt ipsum cumque. Facere reprehenderit exercitationem alias illo velit. Rerum nobis voluptatem rerum tempore cupiditate. Similique natus alias quos ea voluptatem. Molestias commodi quia at fugit.', 'Dr. Madison Weissnat', 1, 4, 6, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Augusta Walter', 3, 2018, NULL),
(46, 'Liam Abbott', 'Bernita Bayer IV', 'Mrs. Pascale Davis MD', 66, '1971-11-23', 'img/news/news241.jpg', 'video/video.mp4', 315, 'In ut velit inventore. Ipsam qui voluptas culpa est sint. Consequatur sint perspiciatis sapiente hic eveniet. Ea beatae velit et.', 'Dr. Bonita McKenzie', 0, 3, 3, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Sadye Lakin', 1, 2018, NULL),
(47, 'Prof. Cortez Hahn MD', 'Isac Dicki', 'Kiara Marvin DDS', 89, '1990-05-07', 'img/news/news225.jpg', 'video/video.mp4', 378, 'Magnam ullam ducimus libero atque iure unde. Nobis qui qui libero totam enim et. Rerum qui ipsa iste in et deserunt recusandae.', 'Austyn Legros', 1, 6, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Mr. Stuart Johnston PhD', 2, 2020, NULL),
(48, 'Verdie Breitenberg', 'Richmond Heidenreich MD', 'Lucio Friesen', 100, '1976-02-29', 'img/news/news232.jpg', 'video/video.mp4', 467, 'Optio vel eum facere voluptatem quam perspiciatis in. Libero et eum rem. Tenetur non corrupti autem omnis laudantium eos id. Repudiandae mollitia et odit.', 'Mara Stehr', 1, 10, 2, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Lester Carroll', 1, 2019, NULL),
(49, 'Brandy Hodkiewicz DDS', 'Sonny Kuhic', 'Prof. Candice Emard', 49, '1978-09-10', 'img/news/news246.jpg', 'video/video.mp4', 323, 'Dolores dolores non quae doloremque. Quaerat iusto et voluptatem nostrum. Facere amet blanditiis est qui sit. Ex et placeat saepe illo eligendi.', 'Thalia Jacobson', 1, 3, 8, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Prof. Quinton Gusikowski', 3, 2019, NULL),
(50, 'Tressa Luettgen', 'Charlotte Boehm', 'Garnett Schaden', 82, '2004-10-30', 'img/news/news211.jpg', 'video/video.mp4', 321, 'Deleniti odit est voluptate corrupti aliquid ut magni. Eligendi dignissimos dolores consequatur qui totam. Omnis ut enim iusto ea.', 'Darryl Leuschke', 1, 3, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18', 'Sabrina Yundt', 2, 2019, NULL),
(51, 'Maurice Kemmer', 'Nicholas Hoppe', 'Clementine Langworth', 28, '2020-02-22', 'img/news/news236.jpg', 'video/video.mp4', 448, 'Explicabo explicabo enim porro ipsum inventore perspiciatis. Provident accusantium dolore sit quibusdam aut. Sed corporis placeat libero est quam impedit.', 'Lenore Koss', 1, 1, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Mrs. Kellie Keebler III', 2, 2020, NULL),
(52, 'Jarod Kunze', 'Alva Cruickshank', 'Itzel Crona', 101, '2004-12-30', 'img/news/news214.jpg', 'video/video.mp4', 315, 'Quo id dolorum ab voluptas ipsum. Praesentium aut repudiandae numquam blanditiis. Et eligendi et nam qui eum. Qui vel aliquid autem et facere consequatur similique.', 'Prof. Alexander Monahan', 1, 9, 7, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Elyssa O\'Kon', 3, 2019, NULL),
(53, 'Dr. Janae Beier IV', 'Miss Stephany Zboncak', 'Prof. Sincere Hoeger', 106, '1972-10-09', 'img/news/news219.jpg', 'video/video.mp4', 433, 'Distinctio aperiam accusantium sit aliquam. Et quod deserunt omnis est nulla earum delectus. Nobis ratione amet sed hic debitis laudantium praesentium. Consequatur ducimus molestiae nisi et. Nulla nostrum vitae doloremque accusantium facilis molestias.', 'Alexandria Macejkovic', 0, 9, 8, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Prof. Westley Blick DDS', 2, 2020, NULL),
(54, 'Macie McClure', 'Emil Hoeger II', 'Reanna Grady', 107, '2007-12-10', 'img/news/news221.jpg', 'video/video.mp4', 281, 'Illum sit non porro autem. Deleniti ducimus temporibus sint quia ipsum maxime et sunt. Optio suscipit in et et consequatur nihil qui consequatur. Excepturi rem eius animi impedit.', 'Mr. Johathan Stracke', 1, 5, 9, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Mrs. Mckayla Bartell IV', 1, 2020, NULL),
(55, 'Mrs. Baby Bednar', 'Kaley Lehner', 'Lester Braun DVM', 35, '2007-01-26', 'img/news/news222.jpg', 'video/video.mp4', 207, 'Et esse nesciunt ut corporis. Nesciunt sunt praesentium et aut nostrum magni. Esse quos atque nobis. Atque autem ratione excepturi cupiditate quasi consequuntur sit veritatis.', 'Kailyn Larson III', 1, 9, 3, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Katlynn Larson', 3, 2019, NULL),
(56, 'Bernice Beier', 'Jerome McCullough PhD', 'Miss Mariana Schmidt', 81, '2013-10-26', 'img/news/news238.jpg', 'video/video.mp4', 253, 'Quos qui sed labore nesciunt. Rerum voluptate recusandae ut aut id totam. Est excepturi consequatur quidem alias. Voluptatibus ut sequi est ut molestiae aut et.', 'Hazle Batz II', 1, 5, 3, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Bette Ledner', 3, 2018, NULL),
(57, 'Emie Block DDS', 'Jo Block PhD', 'Prof. Joseph Vandervort', 39, '1973-12-31', 'img/news/news228.jpg', 'video/video.mp4', 310, 'Eos ad nostrum sed culpa aut animi. Eveniet ullam explicabo atque quasi quia praesentium dolore. Quo ab cumque dolor inventore.', 'Mossie Cremin V', 1, 4, 4, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Javier Mayert III', 3, 2021, NULL),
(58, 'Aletha Stokes', 'Keeley Stanton MD', 'Norma Zboncak', 89, '2004-01-07', 'img/news/news240.jpg', 'video/video.mp4', 477, 'Voluptates voluptatem ut facere officiis deserunt. Assumenda laboriosam et necessitatibus porro omnis voluptas totam. Non quis voluptatum tenetur ut reprehenderit eum. Qui qui vel sit quae enim. Enim ut pariatur omnis incidunt excepturi.', 'Stephany Brekke', 1, 5, 1, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Dr. Keyon Runolfsson', 1, 2020, NULL),
(59, 'Blanche Flatley', 'Dr. Mollie Schaden', 'Dandre Dooley', 82, '2016-01-26', 'img/news/news238.jpg', 'video/video.mp4', 49, 'Et nulla quisquam optio optio culpa explicabo sequi veritatis. Iusto iusto id est earum. Dolor nihil consequatur distinctio quia recusandae reiciendis.', 'Dr. Jerald Reichel', 0, 4, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Aracely Wehner', 3, 2020, NULL),
(60, 'Germaine Mante', 'Tre Braun', 'Edythe Crooks', 49, '1989-08-12', 'img/news/news233.jpg', 'video/video.mp4', 315, 'Autem facilis et consectetur et totam reiciendis debitis dolores. Non aut voluptatem eos explicabo sequi. Vel quos est iure cupiditate. Sed modi qui possimus sint aliquid tempora perferendis.', 'Rosamond Gutkowski', 0, 5, 4, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Veronica Frami', 2, 2019, NULL),
(61, 'Prof. Morton Torphy', 'Mrs. Adriana Medhurst IV', 'Hazel Gusikowski', 79, '2009-11-28', 'img/news/news225.jpg', 'video/video.mp4', 471, 'Excepturi sunt sunt sint id qui maxime vero. Nulla est quos qui nihil. Aperiam quos molestiae doloremque omnis fugiat deserunt. Aut cum vero est est et in voluptatem.', 'Dr. Kayli Olson II', 1, 8, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Clara Krajcik', 2, 2021, NULL),
(62, 'Lily Gutkowski', 'Arely Carroll', 'Gabriella Bauch', 53, '2013-07-13', 'img/news/news227.jpg', 'video/video.mp4', 62, 'Cumque omnis ab asperiores quia. Ut sed animi dolorem consequuntur autem dolores sit. Ad consequatur soluta fugiat dignissimos.', 'Prof. Kathleen Swift', 1, 2, 3, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Jack Braun', 1, 2020, NULL),
(63, 'Miss Mckayla Kiehn III', 'Carmel Schulist PhD', 'Kane Treutel', 51, '1985-09-06', 'img/news/news229.jpg', 'video/video.mp4', 457, 'Cupiditate ratione officia soluta sed. Libero voluptatem in illum aut. Doloribus quisquam quo omnis aspernatur. Nihil qui sed iure eos.', 'Prof. Garrick McKenzie', 0, 2, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Evans Harris', 1, 2018, NULL),
(64, 'Ruben Gaylord', 'Shawna Waelchi', 'Alessandro Harvey', 45, '2008-02-25', 'img/news/news238.jpg', 'video/video.mp4', 342, 'Animi est et aut enim. Consectetur et amet quidem reprehenderit similique blanditiis eum. Maiores molestiae incidunt quia praesentium illo totam et.', 'Stuart Gibson Sr.', 1, 10, 3, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Dr. Shirley Roberts', 3, 2021, NULL),
(65, 'Salma Stroman', 'Milton Bogisich', 'Angie Aufderhar', 49, '1987-12-06', 'img/news/news243.jpg', 'video/video.mp4', 251, 'Quis magnam qui ipsum rerum repellendus quibusdam perspiciatis. Vero est et nulla dolorem qui. Modi atque ullam quia et laudantium tempora ea. Modi consequuntur ut ab voluptatibus et quia vel. Veniam accusantium dolorum qui maxime deleniti.', 'Joy Moen DDS', 1, 7, 9, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Elmer Rohan', 1, 2019, NULL),
(66, 'Nelda Huels', 'Mr. Hector Quigley PhD', 'Raegan Bosco', 117, '1999-09-18', 'img/news/news202.jpg', 'video/video.mp4', 380, 'Doloremque odio nobis ex sed. Reprehenderit sint modi necessitatibus dicta voluptas. Omnis mollitia minima rerum. Enim officia a sed ad exercitationem enim ut. Est rerum dolorem sed aut consequatur. Explicabo ipsa qui necessitatibus consectetur ut.', 'Miss Gudrun Doyle III', 1, 10, 1, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Grover Vandervort', 1, 2020, NULL),
(67, 'Mrs. Zola Stracke', 'Ross Balistreri', 'Brian Parker', 63, '2013-01-29', 'img/news/news244.jpg', 'video/video.mp4', 198, 'Molestias fugiat maiores alias. Quos quod eaque placeat delectus laboriosam aut optio qui. Eligendi in possimus quia dignissimos laborum in praesentium. Beatae beatae optio veritatis ullam beatae maiores sit. Est et quas magnam iusto iste.', 'Amara Kuphal', 1, 2, 7, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Bradly Gaylord DVM', 3, 2020, NULL),
(68, 'Lauren Jaskolski', 'Vicenta Terry', 'Miss Haylee Leannon', 91, '1972-03-15', 'img/news/news217.jpg', 'video/video.mp4', 312, 'Et quo repellat molestiae libero nemo minima non est. Inventore sapiente cum voluptatem porro dolor. Esse ea itaque sit esse nihil et temporibus.', 'Jewel Fay', 1, 2, 2, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Lauren Upton', 1, 2019, NULL),
(69, 'Candice Witting', 'Sabrina Breitenberg', 'Mr. Solon Gottlieb', 78, '2014-09-19', 'img/news/news209.jpg', 'video/video.mp4', 123, 'Consectetur suscipit sit facilis dolor cumque reiciendis. Eos magni dolorem iure rerum placeat ut. Quae culpa magni nihil itaque. Et tenetur ut enim et amet temporibus.', 'Jeanette Doyle PhD', 1, 4, 7, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Quinton Eichmann', 3, 2020, NULL),
(70, 'Rollin Reichel DVM', 'Nora Witting', 'Savanna Hansen PhD', 93, '2013-06-09', 'img/news/news237.jpg', 'video/video.mp4', 476, 'Quis et est fugit temporibus itaque amet tempora. Impedit eos occaecati asperiores. Quos magni et dolores explicabo. Ea molestiae ea et. Quae ut sequi ea.', 'Lorenz Mosciski', 0, 10, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Franz Skiles IV', 2, 2019, NULL),
(71, 'Everette Collins', 'Madisyn Kohler', 'Verda Flatley', 68, '1985-01-07', 'img/news/news242.jpg', 'video/video.mp4', 454, 'Et dolores sunt rerum numquam. Aut a non harum consequatur. Corporis suscipit fugiat velit omnis eius illo sed. Vero earum quis autem enim voluptas. Soluta nam id a deleniti. Saepe et molestiae cupiditate optio quae. Eos officia veniam non non quam vel.', 'Prof. Yvonne Conn', 0, 5, 9, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Sydni Bradtke DDS', 3, 2020, NULL),
(72, 'Heather Pfeffer', 'Assunta Bartell', 'Rafael Kunze', 97, '1995-09-02', 'img/news/news247.jpg', 'video/video.mp4', 308, 'Laborum animi explicabo ut consequatur vel. Quibusdam et ipsum quas aliquam. Reprehenderit eum voluptatem amet amet aut odit. In eum animi deleniti nulla nemo. Aut rerum amet eligendi. Est quia et aut.', 'Marisa McClure IV', 1, 9, 2, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Roy O\'Reilly V', 1, 2018, NULL),
(73, 'Miss Katlynn Marquardt V', 'Leanne Schoen', 'Ellsworth Homenick', 55, '1993-03-16', 'img/news/news232.jpg', 'video/video.mp4', 17, 'Accusantium sequi dolorum cumque consequuntur at nesciunt. Placeat ut praesentium earum eius. Perspiciatis facilis officia accusantium non at rerum. Illo voluptas dolorem voluptatum voluptates.', 'Mr. Keven Carter IV', 0, 2, 10, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Karl Kuhic', 2, 2018, NULL),
(74, 'Florine Farrell', 'Cassandre Keeling', 'Rosetta Mraz', 31, '2008-03-19', 'img/news/news213.jpg', 'video/video.mp4', 113, 'Saepe fuga enim quis dolorem accusamus. Rerum voluptas sit qui aliquid. Culpa dolores in illo repellendus consequatur minus nesciunt qui.', 'Millie Raynor', 1, 3, 8, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Cristobal Huels III', 2, 2020, NULL),
(75, 'Ms. Billie Nikolaus Sr.', 'Waino Yost', 'Mr. Ryann Crist', 46, '1984-08-24', 'img/news/news247.jpg', 'video/video.mp4', 273, 'Vitae repellat eligendi cumque unde iste sed aperiam. Placeat animi tempore facere et quis. Et fugiat omnis sint ea. Ab sint et dolorem omnis sapiente adipisci incidunt.', 'Miss Carolanne Hahn', 0, 2, 8, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Oleta McDermott', 1, 2018, NULL),
(76, 'Garfield Schinner', 'Rubye Ritchie DDS', 'Rhianna Armstrong', 102, '2021-03-01', 'img/news/news230.jpg', 'video/video.mp4', 374, 'Quidem aperiam amet odit voluptas officiis non deleniti eos. Sint sed culpa qui et. Necessitatibus quia quae aut id. Deserunt aspernatur blanditiis dolorum magni dolorem commodi. Repudiandae eaque est quia commodi. Voluptatem consequatur fuga aut.', 'Miss Sandy Hettinger', 0, 3, 10, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Marie McCullough', 2, 2018, NULL),
(77, 'Dylan Schimmel', 'Bernardo Rohan', 'Velva Kirlin', 83, '2018-05-07', 'img/news/news226.jpg', 'video/video.mp4', 255, 'Suscipit pariatur est odio veniam qui dicta. Sunt tempora debitis et voluptatem assumenda cupiditate a recusandae. Tempore fugiat aut sunt ut. Ducimus et vel fugiat. Provident quod delectus dolor nostrum explicabo.', 'Xavier Satterfield', 0, 7, 2, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Rosario Kulas', 2, 2019, NULL),
(78, 'Haleigh Brown', 'Prof. Marquis Hegmann', 'Prof. Isidro Davis', 103, '2002-12-27', 'img/news/news244.jpg', 'video/video.mp4', 44, 'Eos laudantium ad et atque vel recusandae. Possimus voluptatum ad eligendi expedita doloribus. Aut hic quam vero nulla neque eligendi perspiciatis reprehenderit. Sed dolore doloremque ut velit dolor est possimus.', 'Andrew Durgan', 1, 2, 4, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Dr. Teresa Willms', 3, 2018, NULL),
(79, 'Elmore Goyette', 'Amanda Yost', 'Michaela Berge', 20, '2005-09-01', 'img/news/news218.jpg', 'video/video.mp4', 499, 'Quis enim vero voluptas est atque dolor occaecati. Quasi ratione alias hic enim. Id sint incidunt quidem velit tempore nulla voluptatem. Omnis ut minus quisquam necessitatibus praesentium a enim.', 'Prof. Alek Kihn Sr.', 1, 7, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Santina Hodkiewicz', 2, 2021, NULL),
(80, 'Eddie Miller', 'Jerel Muller Jr.', 'Annalise Rowe PhD', 102, '1994-04-26', 'img/news/news210.jpg', 'video/video.mp4', 48, 'Libero neque qui blanditiis ipsum accusamus quam recusandae. Omnis officia non consequatur delectus aut atque eligendi dolor. Ipsam et sint corporis voluptate ea recusandae. Quis doloribus delectus incidunt reprehenderit unde delectus omnis.', 'Jettie Ryan', 1, 5, 4, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Shea Green', 3, 2019, NULL),
(81, 'Eleonore Bergstrom', 'Justen Zieme', 'Emma Predovic', 47, '2005-05-16', 'img/news/news236.jpg', 'video/video.mp4', 194, 'Omnis corrupti nulla et inventore sed. Culpa cumque et odit voluptatem corrupti consequatur delectus. Magni soluta necessitatibus reiciendis necessitatibus at. Omnis recusandae tempore non laborum delectus. Velit culpa sint atque.', 'Dr. Ashtyn Wehner DVM', 1, 5, 10, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Anya Metz', 3, 2020, NULL),
(82, 'Monica Bins', 'Kaia Schoen', 'Easter Weimann I', 88, '2007-09-13', 'img/news/news223.jpg', 'video/video.mp4', 398, 'Qui est voluptatibus fuga voluptatem. Quidem consequatur quasi ea. Non quis voluptatem laborum id eos corrupti harum.', 'Elinor Spinka', 1, 5, 10, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Jordane Kshlerin', 2, 2020, NULL),
(83, 'Gillian Mueller', 'Mr. Donnell Hyatt', 'Marcia Aufderhar PhD', 92, '1970-12-09', 'img/news/news241.jpg', 'video/video.mp4', 106, 'Et ipsam porro voluptatibus amet doloribus aperiam. Ea deserunt provident eveniet doloremque nostrum. Non rerum corrupti tenetur ab voluptas minus.', 'Adrien Ruecker DDS', 0, 5, 4, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Dr. Rick Mueller DVM', 2, 2021, NULL),
(84, 'Samanta Farrell', 'Carlotta Davis', 'Darius Brakus', 34, '2017-10-21', 'img/news/news233.jpg', 'video/video.mp4', 129, 'Reprehenderit quis fugit eos velit soluta tempora ducimus quam. Laudantium in est qui recusandae. Cum nemo beatae aliquam soluta eum alias voluptatem. Voluptas quos ex sit. Voluptas ullam nesciunt et et. Dolore voluptatem sunt quaerat totam culpa vel.', 'Filiberto Lockman', 1, 2, 10, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Mozell Ankunding', 2, 2020, NULL),
(85, 'Barney Koelpin', 'Tyler Beatty III', 'Mona Corwin', 78, '1987-07-13', 'img/news/news225.jpg', 'video/video.mp4', 493, 'Accusamus quaerat error magni dicta. Est non voluptas inventore id. Porro non sed deserunt doloribus labore quam commodi. Minima assumenda eos eos tempora ipsa est.', 'Mr. Adolphus Kihn II', 1, 8, 10, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Emmanuel Lynch', 1, 2021, NULL),
(86, 'Brandi Aufderhar', 'Rachel Maggio', 'Blake Connelly', 111, '2005-05-01', 'img/news/news232.jpg', 'video/video.mp4', 303, 'Officiis ea placeat dolorem eos enim id quia. Tenetur quia officia nemo voluptatem accusamus pariatur aut. Ex amet est aspernatur quod qui molestiae voluptatem. Sint sit nulla a adipisci sed sit. Accusamus nemo est nihil omnis.', 'Prof. Lilly Graham', 1, 10, 3, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Mrs. Lily Weber I', 1, 2021, NULL),
(87, 'Sydney Dicki', 'Prof. Americo Predovic V', 'Sherwood Denesik', 111, '1984-03-10', 'img/news/news210.jpg', 'video/video.mp4', 71, 'Dolores enim enim explicabo aliquam perspiciatis quo. Magnam eos et est sunt aspernatur rerum. Sit facilis ad ea excepturi dolorum cumque et neque.', 'Dr. Darien Bednar', 1, 1, 1, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Prof. Darrin Heidenreich', 1, 2021, NULL),
(88, 'Florida Breitenberg', 'Mrs. Daisha Romaguera', 'Simeon Labadie', 61, '1981-12-13', 'img/news/news201.jpg', 'video/video.mp4', 200, 'Aspernatur asperiores explicabo tempore minus nulla. Ad error dolor voluptatem voluptas ex. Autem suscipit aspernatur deleniti porro. Consectetur iste at qui et non.', 'Scot Johns', 0, 10, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Mariane Schmitt', 1, 2020, NULL),
(89, 'Onie Hodkiewicz MD', 'Percival Hahn', 'Mr. Eriberto Wisozk', 119, '1992-10-29', 'img/news/news210.jpg', 'video/video.mp4', 467, 'Quo velit eum eius et iure suscipit ea qui. Facere velit reiciendis corporis facilis quia quis delectus. Voluptas nisi velit quibusdam totam nisi enim. Doloribus nobis consequuntur deserunt recusandae hic.', 'Ms. Zaria Wisozk', 1, 9, 10, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Jada Walter', 1, 2021, NULL),
(90, 'Prof. Damien Crona', 'Zackary Prohaska', 'Rachel Kertzmann', 66, '1994-06-28', 'img/news/news230.jpg', 'video/video.mp4', 76, 'Nostrum totam ex quae quia ut ipsam dolore. Explicabo non qui est ut quaerat. Quos libero corrupti accusantium quas est. Saepe aut esse et iure.', 'Edna Hill', 0, 8, 6, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Zora Bednar', 3, 2019, NULL),
(91, 'Eunice Jerde II', 'Danyka Goodwin', 'Jadyn Cole', 108, '2004-07-09', 'img/news/news219.jpg', 'video/video.mp4', 136, 'Eum quisquam illum ut et est. Ducimus velit voluptatem eius voluptate. Porro voluptatem culpa atque et reiciendis. Quam minima voluptatem architecto quas et.', 'Maritza Runolfsdottir DVM', 0, 9, 9, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Mr. Pablo Ondricka DDS', 2, 2021, NULL),
(92, 'Michael Kautzer', 'Margarita Kshlerin', 'Kristian Keebler', 84, '1996-08-14', 'img/news/news212.jpg', 'video/video.mp4', 218, 'Tenetur dolorum consectetur perferendis. Quos eveniet dicta qui omnis praesentium beatae in facere. Consequatur ipsum ut minima provident laboriosam.', 'Mr. Ephraim Eichmann', 0, 4, 8, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Osvaldo Ortiz', 3, 2018, NULL),
(93, 'Dr. Ewald Will', 'Americo Johnson', 'Rudolph Jenkins', 99, '1980-07-15', 'img/news/news228.jpg', 'video/video.mp4', 14, 'Qui rerum sapiente molestiae vel in at. Aliquid similique velit magnam blanditiis accusamus magnam laboriosam. Temporibus nihil iure dolorem incidunt ab et. Temporibus deserunt sequi magni minus quam.', 'Josiane Kuhn V', 0, 9, 2, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Dr. Nellie Bernhard', 2, 2021, NULL),
(94, 'Jesse Glover', 'Ms. Alverta Hickle I', 'Ms. Ebba Jacobi I', 30, '2021-01-19', 'img/news/news217.jpg', 'video/video.mp4', 350, 'Eveniet explicabo et et enim quo id nulla. Consequatur facere repellendus aut ipsum consequatur dolorem voluptas facilis. Fugiat veniam nam quibusdam dolorem alias saepe reiciendis.', 'Noble Nader', 0, 3, 6, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Waino Mohr', 2, 2019, NULL),
(95, 'Keira Fay MD', 'Cooper Hodkiewicz', 'Prof. Reynold Koch II', 67, '1982-10-27', 'img/news/news203.jpg', 'video/video.mp4', 282, 'Explicabo ea omnis officiis. Non esse qui non a a deleniti. Sit iure dicta officiis sit. Quod sequi et perspiciatis magnam reprehenderit sit qui sunt.', 'Bridget Bogisich III', 0, 10, 9, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Jazmyn Wolf', 2, 2020, NULL),
(96, 'Remington Blanda', 'Dominique Bechtelar', 'Oral Wiegand', 29, '2000-01-09', 'img/news/news244.jpg', 'video/video.mp4', 494, 'Voluptas corporis sunt quia incidunt dicta minima quae. Nam architecto explicabo aperiam recusandae. Et illum corporis qui suscipit. Qui error repudiandae eum debitis quo eveniet sed.', 'Lilian Howell Sr.', 1, 2, 3, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Chelsie Anderson', 3, 2018, NULL),
(97, 'Janet Homenick', 'Prudence Volkman', 'Ephraim Sanford', 115, '1999-11-10', 'img/news/news215.jpg', 'video/video.mp4', 234, 'Ex recusandae autem eveniet vel. Officiis aut omnis neque dicta. Qui commodi rerum molestiae omnis pariatur omnis quisquam. Quasi itaque voluptas voluptatibus qui aut rerum consequatur.', 'Rachel Konopelski II', 1, 3, 9, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Miss Ora Goyette', 2, 2021, NULL),
(98, 'Mr. Izaiah Jenkins', 'Joel Torphy', 'Luigi Jakubowski', 97, '1975-07-08', 'img/news/news226.jpg', 'video/video.mp4', 305, 'Quam dolor enim nemo repellendus dicta perferendis. Necessitatibus ratione vel aliquid eaque sit ut voluptates. Quidem delectus et et.', 'Ms. Amaya Gibson', 0, 4, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Luciano Deckow', 3, 2018, NULL),
(99, 'Mikel Rohan', 'Bart Ferry V', 'Dr. Dallas Grady', 120, '1970-02-28', 'img/news/news203.jpg', 'video/video.mp4', 448, 'Qui nihil non nobis commodi eaque voluptate quia veniam. Autem ad non minima consequuntur sit occaecati. Soluta possimus voluptatibus suscipit. Est officiis unde placeat qui aperiam. Qui id iure quod aut fugiat sit. Recusandae aspernatur et est in.', 'Haven Gibson', 0, 10, 4, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Mrs. Corine Connelly', 2, 2021, NULL),
(100, 'Ramon Harber', 'Mr. Wiley Ferry PhD', 'Dr. Domingo Fritsch Jr.', 89, '2013-12-11', 'img/news/news226.jpg', 'video/video.mp4', 176, 'Officia dolores voluptates molestiae hic culpa. Delectus quidem sint ex. Illo ut ex dolorum neque molestiae quia sed. Et qui vero eos commodi adipisci. Facere sit voluptas et dolorem. Occaecati facere magni omnis ut voluptatem animi facilis.', 'Mrs. Dulce Becker', 0, 8, 5, '2021-06-22 00:03:36', '2021-06-22 00:03:36', 'Dr. Harmon Hansen DDS', 3, 2020, NULL),
(101, 'Prof. Aditya Cremin', 'Liam Marvin', 'Trent Torp', 24, '2003-10-27', 'img/news/news242.jpg', 'video/video.mp4', 259, 'Molestias consequuntur consectetur aspernatur impedit aut laborum. Laborum nesciunt et quia et.', 'Telly O\'Reilly', 0, 10, 8, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Marco Romaguera', 1, 2018, NULL),
(102, 'Axel Borer DDS', 'Amaya Crist', 'Lew Bradtke', 81, '2010-05-14', 'img/news/news238.jpg', 'video/video.mp4', 321, 'Excepturi unde maxime et sunt iure impedit quis. In est harum temporibus dignissimos amet facere sit. Aliquid exercitationem dolorum voluptatem repellat. Eius sunt aut voluptate.', 'Yvonne West', 1, 1, 2, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Dr. Lyda Bogan', 2, 2021, NULL),
(103, 'Hyman Farrell IV', 'Mrs. Drew Yost', 'Cloyd Zemlak', 29, '1975-10-28', 'img/news/news245.jpg', 'video/video.mp4', 401, 'Incidunt et eos et maxime. Veniam nesciunt qui enim qui et similique quidem. Illum quidem rerum laudantium veniam tempora eum. Omnis voluptas aut labore debitis et.', 'Miss Muriel Berge', 1, 9, 1, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Florian Nitzsche MD', 3, 2019, NULL),
(104, 'Zakary Moen', 'Catalina Marvin', 'Mr. Collin Batz', 29, '1977-01-20', 'img/news/news242.jpg', 'video/video.mp4', 182, 'Cupiditate sunt id ullam quis. Atque esse cumque minus consequuntur aut. Perspiciatis pariatur laudantium explicabo nemo. Ex amet aut occaecati tempora. Tempore quam ratione nisi exercitationem. Tenetur veniam quibusdam adipisci neque.', 'Prof. Hans Connelly', 1, 7, 4, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Asia Hagenes', 3, 2020, NULL),
(105, 'Mrs. Elena Morissette', 'Mr. Chase Hamill PhD', 'Mr. Grayce Zemlak I', 111, '2003-04-25', 'img/news/news217.jpg', 'video/video.mp4', 243, 'Placeat tempora dolorem veritatis rerum ullam qui fuga. Quia sint voluptate repellendus consectetur aut et amet. Similique atque nobis modi earum. Non voluptatibus quod ipsa.', 'Prof. Lonnie Hermann', 1, 8, 7, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Dr. Delta Zulauf Sr.', 2, 2018, NULL),
(106, 'Miss Alexandria Howe', 'Jessie Bergstrom Sr.', 'Jaunita Moore', 25, '2001-06-05', 'img/news/news234.jpg', 'video/video.mp4', 431, 'Et tempore nesciunt porro voluptatem excepturi adipisci in. Aut fugiat molestiae enim sapiente et inventore. Aliquam quia amet exercitationem odio hic aut. Suscipit quos excepturi corrupti velit non iste libero.', 'Mr. Ryleigh Farrell', 1, 4, 4, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Brandi Paucek DDS', 1, 2019, NULL),
(107, 'Ms. Jayne Sporer PhD', 'Dejah Hyatt', 'Maia Balistreri I', 76, '1971-04-01', 'img/news/news234.jpg', 'video/video.mp4', 216, 'Ut ut illum natus aut eum voluptatem libero. Excepturi inventore mollitia ut totam. Ut voluptates nobis et molestiae perspiciatis. Voluptas et eum aut corporis ipsa. Fugit sapiente vel velit et ad et.', 'Armando Ward', 1, 5, 2, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Clare Gorczany', 2, 2020, NULL),
(108, 'Israel Pagac', 'Gennaro Marks', 'Dane Donnelly', 108, '2013-12-24', 'img/news/news229.jpg', 'video/video.mp4', 438, 'Sapiente voluptatem rerum et. Harum nobis perferendis ut laudantium velit ut. Qui ipsum voluptatem similique corrupti.', 'Timothy O\'Reilly', 1, 5, 1, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Providenci Johnston MD', 1, 2019, NULL),
(109, 'Abbie Funk', 'Prof. Lucy Hill Sr.', 'Katherine Cormier', 55, '2008-06-28', 'img/news/news231.jpg', 'video/video.mp4', 189, 'Odit laudantium labore voluptate corrupti. Aut deleniti asperiores fuga dolores. Voluptas ea ipsam non et aut culpa iure qui. Ut ex ut voluptas error aspernatur iure.', 'Josh Russel', 0, 6, 1, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Miss Jolie Bauch', 3, 2018, NULL),
(110, 'Sophie Schmidt', 'Chanel Bernier', 'Catalina Bartell', 105, '2013-07-25', 'img/news/news224.jpg', 'video/video.mp4', 479, 'Laborum sunt totam officiis veritatis. Et cum ratione adipisci laboriosam. Possimus et suscipit ad et animi in iure.', 'Juanita Pfannerstill', 1, 6, 10, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Lawson Halvorson', 2, 2021, NULL),
(111, 'Theron Kirlin', 'Vaughn Hessel', 'Prof. Tom Cronin V', 38, '2011-07-28', 'img/news/news201.jpg', 'video/video.mp4', 383, 'Aliquam adipisci aliquam quae consequatur sapiente. Laudantium et cupiditate dignissimos. Eos amet ex porro maiores in dolorum. Odit velit autem ab quis et consequatur neque. Aut voluptatem quisquam vel pariatur et quia.', 'Ines Sanford', 1, 8, 8, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Dr. Hilton Turner PhD', 1, 2019, NULL),
(112, 'Bertram Schoen Jr.', 'Marta Harvey I', 'Bud Konopelski', 36, '1970-12-02', 'img/news/news244.jpg', 'video/video.mp4', 356, 'Amet unde reiciendis vitae tempora vel necessitatibus. Quas aut quos quod nisi eum. Ut ut numquam earum sapiente veritatis. Ea exercitationem ut atque non ipsam sunt. Velit non aut ab omnis tenetur vel enim. Autem corporis et cum officiis sint inventore.', 'Prof. London Tremblay MD', 1, 10, 9, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Andrew Hilpert', 2, 2021, NULL),
(113, 'Dr. Jordane Hudson III', 'Prof. Jermain Lubowitz Sr.', 'Alexys Abernathy', 55, '1989-11-17', 'img/news/news244.jpg', 'video/video.mp4', 119, 'Omnis quis et laudantium. Et qui et consequatur quis quibusdam sit suscipit. Autem accusantium quam dolores cumque. Et neque voluptas excepturi enim eaque aut.', 'Lucio Daniel II', 0, 2, 5, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Samara Emmerich', 2, 2019, NULL),
(114, 'Hubert Klein', 'Lavon Rosenbaum', 'Lexus Homenick', 116, '2014-12-15', 'img/news/news242.jpg', 'video/video.mp4', 490, 'Mollitia nobis perferendis ea est ex. Quam nobis omnis voluptas dolorem ducimus. Modi impedit quos dignissimos alias reprehenderit repellendus unde in.', 'Gaylord Cremin', 1, 9, 1, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Elenor Price', 1, 2020, NULL),
(115, 'Adah Corkery', 'Viola Kihn', 'Deontae Bernier', 62, '1978-04-22', 'img/news/news229.jpg', 'video/video.mp4', 424, 'Eos deserunt architecto ut culpa. Doloribus odit consequatur omnis sed nihil. Tempora doloremque distinctio quos asperiores in numquam. Esse delectus ut magni inventore et doloremque sit.', 'Nikolas Rempel', 1, 6, 9, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Ms. Alyce Lueilwitz Sr.', 2, 2018, NULL),
(116, 'Jarod Kovacek', 'Madisen Nienow', 'Cristobal Abbott', 110, '2018-06-17', 'img/news/news247.jpg', 'video/video.mp4', 260, 'Quia ratione provident illo eligendi nisi nihil et fuga. Nulla doloribus repellat quia excepturi illo et quia. Et placeat animi fuga. Sed nemo dolorum odio autem eum. Qui accusamus aut et ratione.', 'Dovie Beahan', 1, 3, 5, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Kelvin Kunde', 2, 2020, NULL),
(117, 'Wyman Fisher', 'Bria Christiansen', 'Mr. Herman Jenkins', 52, '1984-01-16', 'img/news/news201.jpg', 'video/video.mp4', 59, 'A aut tempora sit exercitationem et est incidunt. Dolor non amet fugit voluptas iusto. Et vel perferendis velit doloremque harum necessitatibus doloribus. Architecto ipsam dolores voluptatem esse et est. Quis impedit id in a placeat velit eos illum.', 'Ms. Carrie Koss II', 0, 2, 9, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Vivienne Kunze', 3, 2020, NULL),
(118, 'Cassandre Kuhic', 'Toy Bahringer', 'Mr. Armani Lind DDS', 38, '2015-06-02', 'img/news/news201.jpg', 'video/video.mp4', 462, 'Neque et dolorum nobis vero fugit repellendus dicta. Commodi eveniet unde eum iusto aperiam possimus. Laudantium laboriosam corporis odit omnis ea non saepe. Esse eaque molestiae voluptatum aut corrupti neque ipsam. Sit dolorum veniam dolor nulla.', 'Lester Dickens', 1, 3, 7, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Ofelia Beatty', 2, 2021, NULL);
INSERT INTO `movies` (`id`, `title`, `directors`, `actor`, `time`, `date`, `url_picture`, `url_link`, `view`, `description`, `status`, `film_hot`, `contries_id`, `categories_id`, `created_at`, `updated_at`, `name`, `type_movie`, `year`, `deleted_at`) VALUES
(119, 'Mr. Terence McDermott DDS', 'Lela Howell', 'Nina Hoeger', 67, '1986-06-06', 'img/news/news235.jpg', 'video/video.mp4', 498, 'Corrupti quod mollitia minus velit. Id assumenda laudantium minus est. In ab necessitatibus impedit vel pariatur.', 'Dr. Bell Champlin', 0, 7, 4, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Rowena Armstrong', 3, 2018, NULL),
(120, 'Dr. Urban Miller', 'Shirley Pacocha', 'Mr. Braden Schimmel', 73, '1975-09-14', 'img/news/news236.jpg', 'video/video.mp4', 112, 'Officia impedit omnis modi sequi. Aspernatur temporibus nostrum sint sunt et soluta ut. Iste eum quis quae dolorem quibusdam dolorem. Cumque at omnis similique ipsa.', 'Magnolia Beier', 1, 10, 6, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Rudy Powlowski', 1, 2020, NULL),
(121, 'Conner Ondricka', 'Samir Bogan MD', 'Emmett Hand', 118, '1998-04-08', 'img/news/news219.jpg', 'video/video.mp4', 216, 'Consectetur qui sed est a rerum reprehenderit. Nemo voluptatem minus omnis esse. Eum qui animi facere eos et doloremque reiciendis repudiandae.', 'Tad Schuppe', 1, 5, 4, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Rhea Leffler', 3, 2020, NULL),
(122, 'Mrs. Flavie Mante DVM', 'Dr. Darlene Klein IV', 'Patrick Hammes V', 70, '2005-03-08', 'img/news/news209.jpg', 'video/video.mp4', 75, 'Tenetur et voluptatibus eos consequatur ipsa et dolores. Laborum corrupti dignissimos magnam incidunt ad et quia. Enim non voluptatibus aspernatur aut aliquid iusto qui necessitatibus. Commodi magni ipsam at sit similique.', 'Emily Doyle', 1, 2, 6, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Jeromy Grant', 2, 2018, NULL),
(123, 'Celestino Reichert', 'Ismael Hickle', 'Dr. Alize Howe', 53, '1987-03-18', 'img/news/news207.jpg', 'video/video.mp4', 206, 'Et vero consequatur id in facilis est. Atque aut aut ullam sit. Sunt aut nihil nostrum voluptatem. Quo laborum illo doloremque inventore. Consequatur non repellendus est. Itaque sit perspiciatis et temporibus. Earum ea et laboriosam unde.', 'Mrs. Holly Renner', 0, 10, 7, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Jailyn Renner IV', 3, 2018, NULL),
(124, 'Justice Zboncak I', 'Dr. Dianna Corkery V', 'Nora Vandervort', 29, '1978-11-06', 'img/news/news243.jpg', 'video/video.mp4', 161, 'Totam ut suscipit et aspernatur dolorum nulla nihil. Qui facere animi laudantium. Unde consequatur magni voluptatibus minima.', 'Dr. Christ Johnson PhD', 0, 9, 3, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Dr. Jaiden Deckow', 1, 2021, NULL),
(125, 'Kasey Morar', 'Prof. Vinnie Littel', 'Leif Farrell V', 90, '2010-08-05', 'img/news/news229.jpg', 'video/video.mp4', 29, 'Laudantium cupiditate aliquam nulla tempore qui dolorem laudantium. Nihil et sit non occaecati distinctio consequatur velit. Architecto qui tempora est nostrum sapiente adipisci. Quia repellat rerum et optio.', 'Dr. Jordi Sipes', 1, 5, 5, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Nelda Borer', 2, 2020, NULL),
(126, 'Olga Rosenbaum', 'Miss Alena Bayer Jr.', 'Chyna Bernier Jr.', 38, '1982-07-30', 'img/news/news224.jpg', 'video/video.mp4', 415, 'Eum est facilis dolore eum reiciendis inventore earum. Est excepturi officia in mollitia autem inventore voluptas. Nam earum in nihil eveniet aperiam dolor. Dolores voluptate asperiores quisquam asperiores exercitationem.', 'Waino Little DDS', 1, 9, 1, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Tate Grimes III', 1, 2021, NULL),
(127, 'Thelma Schmitt', 'Adrian Pagac', 'Mrs. Sophie Jacobs', 111, '1982-08-10', 'img/news/news202.jpg', 'video/video.mp4', 135, 'Sed ab distinctio cum omnis aut. Consequatur possimus velit aut eos explicabo molestiae. Quo iste aut consectetur et est officiis.', 'Mr. Lyric Schmidt', 1, 6, 8, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Roxanne Bahringer', 1, 2018, NULL),
(128, 'Georgiana Ebert', 'Cyril Block', 'Tad Raynor', 40, '1975-04-10', 'img/news/news227.jpg', 'video/video.mp4', 266, 'Nam sed saepe omnis dignissimos ut commodi. Deserunt consequatur excepturi esse eos explicabo. Aut recusandae dolores iure animi voluptas ut vel. Et similique qui ipsa blanditiis minus.', 'Trace Koepp', 1, 5, 9, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Floyd Bailey', 1, 2018, NULL),
(129, 'Verona Douglas', 'Enid Smitham', 'Prof. Estel Lind DDS', 112, '1981-01-22', 'img/news/news213.jpg', 'video/video.mp4', 223, 'Quo quas dolorem ea dicta necessitatibus rem repellendus. Quisquam saepe rerum neque ut maxime modi. Iste ex neque et et suscipit consequuntur.', 'Dr. Geovanni Von', 1, 8, 4, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Dr. Tiffany Grady MD', 1, 2020, NULL),
(130, 'Anthony O\'Hara', 'Mr. Brooks Murphy V', 'Orrin Emard', 95, '2011-10-05', 'img/news/news222.jpg', 'video/video.mp4', 96, 'Temporibus quo porro dolorum qui ullam et. Aspernatur ut accusamus beatae vero. Sint sunt laboriosam vel magnam numquam consectetur placeat. Iusto labore in enim.', 'Emanuel Hills', 1, 4, 1, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Prof. Lyda Fadel I', 3, 2019, NULL),
(131, 'Mrs. Hettie Swift Jr.', 'Marty Lehner', 'Clementina Langworth', 30, '1972-10-01', 'img/news/news202.jpg', 'video/video.mp4', 451, 'Rerum tempora exercitationem molestiae molestias facilis cupiditate. Corrupti inventore dolores laudantium in recusandae suscipit est. Tempore quas cupiditate quia ut et optio.', 'Eda Wunsch', 1, 2, 8, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Prof. Laurianne Wiegand V', 2, 2018, NULL),
(132, 'Harold Wintheiser', 'Demarcus Olson II', 'Danika Monahan', 49, '1983-04-30', 'img/news/news232.jpg', 'video/video.mp4', 60, 'Temporibus sint vel aperiam. Nihil enim quos sit alias sunt similique eos. Sed ullam labore veniam nobis illum aut.', 'Leopoldo Langworth MD', 1, 5, 3, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Petra Gaylord Jr.', 2, 2019, NULL),
(133, 'Alyce Hansen', 'Prof. Makenzie Ritchie Sr.', 'Lane Waelchi', 67, '1993-07-02', 'img/news/news211.jpg', 'video/video.mp4', 205, 'Hic quam illum doloribus assumenda hic. Dolorum neque repudiandae architecto qui beatae quasi. Dolor quia ducimus ut.', 'Hattie Mohr', 1, 9, 4, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Ms. Alessia Larkin DVM', 1, 2021, NULL),
(134, 'Garnett Gibson', 'Alex Bergstrom', 'Ms. Alaina Greenfelder DDS', 52, '2017-01-07', 'img/news/news211.jpg', 'video/video.mp4', 314, 'Veritatis quo nobis libero neque voluptatibus aut eaque. Amet quia repellat laborum exercitationem. Nam quia deleniti ipsum et.', 'Bill Little', 0, 4, 10, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Reginald Murphy', 1, 2021, NULL),
(135, 'Ila Schmeler', 'Josefa Carroll', 'Alena Heller', 38, '1976-05-08', 'img/news/news207.jpg', 'video/video.mp4', 261, 'Dolorum et magnam similique dolorem nam perferendis. Ea veritatis in dolores rerum. Alias perferendis cum similique alias consequatur et quo. Dicta maxime sapiente pariatur nam in doloribus.', 'Clemmie Bogisich', 1, 5, 7, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Josh Langworth', 3, 2018, NULL),
(136, 'Prof. Merritt Bernier II', 'Angelita Treutel', 'Prof. Travon Sawayn II', 46, '1995-04-13', 'img/news/news223.jpg', 'video/video.mp4', 188, 'Ea blanditiis et voluptatem modi. Impedit qui ab qui corporis est perferendis voluptatem ipsa. Dolorum porro est deserunt vel.', 'Miss Tomasa Jenkins', 1, 1, 8, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Duane McKenzie', 1, 2021, NULL),
(137, 'Mr. Fermin Christiansen PhD', 'Elena Bode', 'Shana Lemke III', 68, '1973-10-28', 'img/news/news235.jpg', 'video/video.mp4', 135, 'Fuga perferendis fugiat aliquid quo alias et quos excepturi. Deleniti incidunt consequatur sed aut. Aut voluptatem voluptas autem rem. Aut corrupti qui voluptatem beatae eos nemo. Ratione dicta qui dolore laborum. Aut aut neque tempora magni.', 'Rosanna Langosh', 0, 4, 6, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Madonna O\'Connell', 3, 2020, NULL),
(138, 'Dr. Rubye Maggio III', 'Eulalia Collier I', 'Alia Abshire', 84, '1971-07-16', 'img/news/news224.jpg', 'video/video.mp4', 491, 'Ab voluptatem minus veritatis harum animi. Qui perferendis hic nihil. Nostrum dicta consequatur error molestiae ad culpa ipsa. Aut aliquam dolor sed qui ut.', 'Fleta Cormier I', 0, 4, 3, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Hilbert Fadel', 1, 2018, NULL),
(139, 'Destinee Langosh I', 'Jennings Mohr MD', 'Mr. Bruce Hudson DVM', 33, '2019-05-11', 'img/news/news231.jpg', 'video/video.mp4', 281, 'Et atque quasi sapiente voluptas aut excepturi. Quibusdam impedit nobis sed illum eaque. Ut accusamus molestias numquam. Dolores aut architecto aperiam. Et est aut maiores modi laudantium optio velit. Et cupiditate earum magnam labore quia quos.', 'Narciso Jaskolski', 0, 4, 5, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Grace Kuhn', 3, 2021, NULL),
(140, 'Mikel Terry', 'Octavia Breitenberg', 'Gerda Murazik I', 53, '2000-08-29', 'img/news/news202.jpg', 'video/video.mp4', 90, 'Sit optio minima velit qui aut amet. Sunt est alias earum fugit vero. Voluptatem voluptatibus ut nesciunt.', 'Eddie Koch', 0, 10, 1, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Bradford Block', 1, 2020, NULL),
(141, 'Marlen Shanahan', 'Madalyn Lubowitz', 'Ron Fay PhD', 34, '1989-03-31', 'img/news/news214.jpg', 'video/video.mp4', 385, 'Qui iste consequatur voluptas quos ullam pariatur neque autem. Pariatur voluptate quae nam et doloribus nemo consequatur. Iure quae similique nemo ut vitae cupiditate.', 'Kane Deckow', 0, 2, 2, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Ms. Albina Mraz V', 3, 2020, NULL),
(142, 'Jerald Stark', 'Mrs. Hertha Rath III', 'Dr. Coby McLaughlin', 29, '1974-05-30', 'img/news/news236.jpg', 'video/video.mp4', 294, 'Laboriosam corporis minima molestiae dolores magni. Quasi tempore animi qui omnis in dolores. Sit praesentium illum occaecati omnis est.', 'Wilford Bahringer', 0, 3, 10, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Reyna Kuhn', 2, 2021, NULL),
(143, 'Wellington Hirthe I', 'Jake Leffler', 'Peggie Donnelly', 108, '1990-10-02', 'img/news/news233.jpg', 'video/video.mp4', 274, 'Voluptatum iste ut occaecati ut. Quia aut dolorem minus architecto culpa explicabo. Autem id nulla et quisquam rem quidem.', 'Toy Becker', 1, 4, 7, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Quentin Pfeffer', 3, 2019, NULL),
(144, 'Mrs. Peggie Abshire II', 'Malachi Rosenbaum', 'Mr. Kaden Fisher', 105, '1975-06-12', 'img/news/news228.jpg', 'video/video.mp4', 26, 'Commodi recusandae et ut rerum ut ducimus fugiat tempora. Laboriosam eos magni et architecto voluptatem. Possimus ipsa rerum blanditiis. Quia enim qui earum aperiam iusto dolorem. Enim qui iusto temporibus aut ratione.', 'Maritza Schinner Sr.', 0, 7, 5, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Annabelle Runte', 2, 2019, NULL),
(145, 'Prof. Aurelio Fritsch', 'Thomas Renner IV', 'Marques Wilkinson', 114, '1975-10-16', 'img/news/news244.jpg', 'video/video.mp4', 191, 'Qui quisquam aut non hic. Aut velit sunt necessitatibus molestiae voluptatem aut autem. Doloremque sed enim qui saepe quod suscipit dicta perspiciatis. In beatae delectus aut asperiores possimus.', 'Carissa Huel', 1, 4, 4, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Carrie Corkery', 3, 2021, NULL),
(146, 'Ms. Lilly Carter', 'Cleveland Huels', 'Gerson Schuster', 87, '1987-11-11', 'img/news/news225.jpg', 'video/video.mp4', 325, 'Excepturi harum nihil qui voluptates repellendus vel dolor. Dolor distinctio harum ad eos magnam deserunt explicabo est. Amet fugit minus enim voluptate. Dolor qui ab ratione saepe.', 'Sophie Hessel', 1, 7, 5, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Otilia Kemmer V', 3, 2019, NULL),
(147, 'Anne Waters', 'Willa Berge', 'Anthony Mills', 93, '1977-07-31', 'img/news/news200.jpg', 'video/video.mp4', 258, 'Eum dolores totam sed ut eos et quis. Laborum ut qui illo quaerat. Et magnam laudantium tempora in itaque id voluptate. Voluptates nihil quae delectus commodi unde minus.', 'Breanna Halvorson', 0, 4, 6, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Jewell Morar', 3, 2021, NULL),
(148, 'Bethany Jenkins', 'Prof. Ignatius Waelchi', 'Rhiannon Effertz', 80, '1989-12-28', 'img/news/news230.jpg', 'video/video.mp4', 226, 'Nobis nihil ratione itaque blanditiis. Ex ea blanditiis voluptatem in odit qui doloribus. Dolorum ullam sed est nam praesentium et pariatur. Vero voluptatum in et aut illo optio quibusdam voluptatem.', 'Jasmin Osinski', 0, 9, 8, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Tracy Grady', 2, 2020, NULL),
(149, 'Sarina Jacobi Jr.', 'Dr. Horacio Cartwright', 'Ethel Ortiz', 100, '1974-02-12', 'img/news/news206.jpg', 'video/video.mp4', 223, 'Dolores voluptas vel atque pariatur est distinctio pariatur. Commodi eaque id iure id incidunt dolores sunt quisquam. Quia consequuntur sequi id dolores voluptatum.', 'Marilyne Tremblay', 1, 3, 10, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Mervin Nitzsche', 3, 2021, NULL),
(150, 'Jesse Kertzmann', 'Pietro Effertz MD', 'Prof. Melyssa Graham PhD', 114, '2018-08-28', 'img/news/news236.jpg', 'video/video.mp4', 335, 'Non ut inventore rerum quia ipsa velit natus quis. Nihil amet natus vel et quis numquam temporibus. Repudiandae provident expedita quibusdam consequatur nihil ut quia.', 'Dr. Sofia Runolfsdottir', 0, 1, 3, '2021-06-22 00:03:41', '2021-06-22 00:03:41', 'Rusty Satterfield', 3, 2021, NULL),
(151, 'Reyna Stanton', 'Julianne McDermott Sr.', 'Dr. Felix Corkery', 53, '1978-10-04', 'img/news/news225.jpg', 'video/video.mp4', 166, 'Odit eum nulla ratione qui. Aliquid vitae eaque magni et aliquam quod. Voluptate adipisci optio excepturi alias aut et tempore.', 'Cooper Stoltenberg Jr.', 0, 10, 3, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Manley Jacobs', 3, 2021, NULL),
(152, 'Dr. Frieda Hagenes', 'Evangeline Kling', 'Syble Leannon', 102, '2014-12-16', 'img/news/news239.jpg', 'video/video.mp4', 289, 'Est quisquam nemo molestiae perferendis. Nemo eum aliquid molestias rerum et dolores. Quis sit eius ab hic et. Voluptatem voluptates ut rem qui. Vero sed aliquam maxime recusandae quia fugit. Eos distinctio tempore fuga et autem.', 'Prof. Abby Thompson Jr.', 0, 10, 2, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Juanita Koepp', 1, 2018, NULL),
(153, 'Samanta Romaguera', 'Karson McClure', 'Prof. Coby Brakus III', 103, '2017-03-02', 'img/news/news221.jpg', 'video/video.mp4', 451, 'Ipsa et aut consequatur voluptas aperiam aperiam rerum. Repellendus autem molestiae sint voluptatem veniam doloremque maxime distinctio. Voluptas praesentium a esse velit est accusantium.', 'Lucious Gislason', 1, 9, 8, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Prof. Israel Trantow', 1, 2021, NULL),
(154, 'Katherine Schoen', 'Olin Morissette IV', 'Dr. Nat Eichmann DVM', 96, '1970-05-17', 'img/news/news218.jpg', 'video/video.mp4', 358, 'Atque vel et eum assumenda laudantium dolore. Nam porro praesentium sequi est odio repudiandae. Aperiam sit et dicta delectus accusamus. Aut occaecati voluptatem magnam earum.', 'Irwin Bogisich', 0, 3, 3, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Armand Cummerata', 2, 2018, NULL),
(155, 'Josefina Lueilwitz', 'Dr. Cierra Huel Sr.', 'Prof. Mathias Nitzsche', 119, '2002-12-18', 'img/news/news235.jpg', 'video/video.mp4', 366, 'Ut recusandae aut aut sit alias ab. Sunt excepturi dolorum provident. Tenetur delectus sapiente atque velit voluptates quasi numquam et. Quas et doloremque voluptas odio atque voluptatem.', 'Dr. Anne Thiel PhD', 0, 7, 6, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Prof. Kirstin Schroeder', 2, 2019, NULL),
(156, 'Prof. Cleora Stracke', 'Haleigh Yost III', 'Pink Sipes', 93, '1987-10-06', 'img/news/news214.jpg', 'video/video.mp4', 426, 'Assumenda odit ut tempora molestias nostrum doloremque dolores. Omnis repellendus eius voluptatem. Quos dolores voluptatem non vel odit laborum.', 'Felicity Paucek', 0, 6, 7, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Heidi McCullough', 2, 2018, NULL),
(157, 'Althea Bosco IV', 'Prof. Daphne Bradtke MD', 'Mariah Green', 79, '2015-11-08', 'img/news/news238.jpg', 'video/video.mp4', 97, 'Odio maiores ab ipsa iusto aut aut. Nobis est rerum eos natus laborum enim. Et accusantium ut eos. Nostrum sed qui corporis.', 'Dr. Cordia Hackett V', 0, 8, 3, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'River Schmidt', 3, 2021, NULL),
(158, 'Jamar Stanton IV', 'Dr. Orlo Reichert', 'Miss Princess Sanford', 64, '2009-04-25', 'img/news/news235.jpg', 'video/video.mp4', 387, 'Quia ut est et nobis voluptas est. Enim sint iusto quis numquam et. Aperiam fugiat sunt exercitationem voluptatem eos iure delectus. Quos soluta molestias quos nostrum.', 'Else Bechtelar', 1, 6, 5, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Zack Dooley V', 1, 2021, NULL),
(159, 'Prof. Daron Dicki V', 'Deangelo Mayert', 'Violette Moen', 45, '2009-06-06', 'img/news/news241.jpg', 'video/video.mp4', 464, 'Maxime quidem nostrum eaque qui in id. Quam voluptatibus eum eius in non quidem. Soluta sed nisi quia porro quis.', 'Casandra Zboncak', 1, 1, 9, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Prof. Oswaldo Crist DDS', 1, 2021, NULL),
(160, 'Jayson Kovacek', 'Katheryn Bailey V', 'Mr. Jarrod Bode DVM', 47, '1992-02-10', 'img/news/news227.jpg', 'video/video.mp4', 360, 'Repudiandae ex enim quos optio expedita voluptatibus sunt cum. Quia culpa dolorem non beatae qui. Voluptates autem quaerat quod. Vero quisquam omnis nisi.', 'Dr. Tyshawn Wolff III', 1, 4, 3, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Dr. Destiney Heller Sr.', 1, 2019, NULL),
(161, 'Presley Kuhic DVM', 'Malika Gulgowski', 'Destin Satterfield', 111, '2017-07-16', 'img/news/news233.jpg', 'video/video.mp4', 411, 'Dolores qui numquam exercitationem eligendi neque ipsum. Et facilis id minus consequuntur. Voluptates odit aut ab est est est. Consectetur modi non consequuntur occaecati quaerat.', 'Eli Nicolas', 1, 8, 2, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Eulah Lynch', 2, 2021, NULL),
(162, 'Dominic McDermott', 'Myrtice Blanda', 'Dr. Courtney Reilly', 60, '2004-03-26', 'img/news/news224.jpg', 'video/video.mp4', 342, 'Excepturi soluta quo illum. Qui omnis eos eaque accusantium sint tempora. Aliquam sunt rerum corrupti voluptatem eligendi sed ab. Omnis vero tenetur non harum et pariatur quo.', 'Steve Zulauf', 1, 4, 6, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Prof. Hester Zemlak PhD', 3, 2020, NULL),
(163, 'Dr. Aisha Kassulke DDS', 'Prof. Oscar Carter Jr.', 'Friedrich Torphy', 117, '1995-01-18', 'img/news/news212.jpg', 'video/video.mp4', 248, 'Sit dolore pariatur dolorem debitis saepe repellat nesciunt. Quod quo unde voluptatum amet. Ex dolorem voluptates impedit qui qui.', 'Ona Skiles', 0, 6, 5, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Gisselle Conroy', 3, 2019, NULL),
(164, 'Eladio Olson', 'Devin Carter', 'Dr. Destiney Hickle', 94, '1973-05-16', 'img/news/news209.jpg', 'video/video.mp4', 271, 'Blanditiis et doloremque sed reprehenderit error maxime. Accusantium incidunt molestiae vel sed consequuntur. Molestiae necessitatibus possimus officiis eveniet iure est omnis.', 'Mr. Jamal Reichel', 0, 1, 9, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Estella Spinka', 1, 2020, NULL),
(165, 'Alfonzo Koepp', 'Alanis Schowalter', 'Angela Bechtelar Jr.', 87, '1978-01-30', 'img/news/news213.jpg', 'video/video.mp4', 59, 'Ea modi enim ex aspernatur perferendis. Vel expedita voluptas nihil qui nostrum ut. Sed fugiat occaecati voluptatem ut magnam voluptas corporis et.', 'Ladarius Kirlin', 0, 4, 4, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Daniella Klein', 2, 2019, NULL),
(166, 'Jimmie Murazik', 'Natasha Ferry', 'Tremaine Feil', 99, '2004-01-11', 'img/news/news246.jpg', 'video/video.mp4', 134, 'Ipsam earum accusamus repellendus necessitatibus placeat voluptates. Doloribus qui illo laudantium aperiam. Eum maiores magnam earum placeat quaerat. Quasi dolor voluptate consequatur neque et nesciunt eaque dolorum.', 'Mr. Orlando Borer', 1, 8, 10, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Meagan O\'Kon IV', 3, 2019, NULL),
(167, 'Andre Schowalter', 'Steve Botsford', 'Jayne Corwin', 66, '2001-11-15', 'img/news/news228.jpg', 'video/video.mp4', 76, 'Qui est eos ad aut expedita fugit. Porro repellat et mollitia. Deserunt ut nihil eos eum accusantium similique non. Aut vero veniam numquam praesentium qui voluptatibus ullam consectetur.', 'Jewell Skiles', 0, 4, 6, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Dr. Santos Hartmann', 3, 2018, NULL),
(168, 'Prof. Jaime Keebler', 'Carmelo Hermiston', 'Antonia McDermott', 45, '2015-01-05', 'img/news/news213.jpg', 'video/video.mp4', 179, 'Aut rerum odit dicta sapiente. Rem quia omnis repellat suscipit autem rerum veniam consequuntur. Est numquam qui vel. Dolor qui veniam dolorem ratione sed cumque impedit. Eius maiores fugiat architecto placeat voluptatem.', 'Edd Gottlieb III', 1, 7, 3, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Prof. Enola Quigley', 1, 2020, NULL),
(169, 'Romaine Rohan', 'Dr. Lindsey Bosco', 'Prof. Giovani O\'Hara PhD', 82, '2005-12-04', 'img/news/news205.jpg', 'video/video.mp4', 364, 'Dolorum laborum debitis assumenda nulla iste. Consequatur autem qui occaecati dolorem et sint enim. Laudantium reiciendis rem deserunt voluptatem quae mollitia. Beatae sunt consequuntur voluptas voluptas illum accusantium.', 'Thelma Kozey', 1, 9, 5, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Zena Ernser', 2, 2018, NULL),
(170, 'Catherine Prosacco', 'Maximillian Breitenberg', 'Dwight Daugherty', 50, '2009-01-21', 'img/news/news220.jpg', 'video/video.mp4', 488, 'Autem voluptatem enim natus facilis. Impedit numquam rerum cumque soluta. Non reprehenderit ipsa cum ut modi. Vel ut cum ipsum enim blanditiis quo.', 'Mr. Raoul Walter', 0, 9, 5, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Ansel Hackett', 1, 2020, NULL),
(171, 'Dariana Goldner', 'Blaze Barrows', 'Mrs. Veronica Rempel', 107, '2005-06-03', 'img/news/news206.jpg', 'video/video.mp4', 364, 'Ut ad unde reprehenderit cumque nihil. Ducimus et nemo accusantium ex expedita blanditiis earum. Praesentium in ipsa quidem molestiae reprehenderit. Ratione voluptatibus omnis dolor sit.', 'Dr. Griffin Haag', 0, 10, 2, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Kaya Zieme', 2, 2021, NULL),
(172, 'Jackeline Blanda DVM', 'Raymundo Ledner', 'Mr. Toney Leffler IV', 53, '2021-03-27', 'img/news/news232.jpg', 'video/video.mp4', 87, 'Sit dicta modi ipsum atque. Necessitatibus consectetur sapiente laborum. Molestiae porro natus earum et. Odio aut tenetur velit veniam maiores et. Ipsam qui velit laborum voluptas nam.', 'Ms. Flo Will DDS', 0, 3, 2, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Noemi Huels', 2, 2021, NULL),
(173, 'Bennett Jacobson', 'Daisha White', 'Giovanny Kautzer', 54, '1988-09-03', 'img/news/news211.jpg', 'video/video.mp4', 183, 'Illum omnis qui et iste doloribus quia modi. Architecto nemo nesciunt quo ea. Est quo quo quia quisquam provident quae et ipsam. Quasi et aut a maiores ut et et voluptates.', 'Miss Lempi Senger', 0, 1, 2, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Prof. Lorine Bosco', 2, 2018, NULL),
(174, 'Hassan Nader', 'Mr. Rey Koch', 'Edyth Stoltenberg', 51, '1984-01-28', 'img/news/news221.jpg', 'video/video.mp4', 53, 'At eveniet saepe architecto eos dolorem id. Fuga eum minus ut quia. Aliquam aliquam unde ut assumenda et. Ut quidem quis recusandae quia provident qui.', 'Tod Conroy', 0, 3, 7, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Eino McDermott', 3, 2018, NULL),
(175, 'Jewel Keeling', 'Salvatore Connelly', 'Prof. Enos Durgan II', 100, '1996-07-22', 'img/news/news234.jpg', 'video/video.mp4', 59, 'Error consequatur ut quia perspiciatis placeat dolore consequatur. Natus molestiae natus non voluptate sequi quos accusantium. Atque dolore corrupti officia autem animi. Quasi tempore repudiandae ducimus et.', 'Ms. Wendy Gerlach', 0, 10, 10, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Russell Luettgen', 2, 2020, NULL),
(176, 'Prof. Mozell Cruickshank MD', 'Timmothy Schowalter I', 'Ramona Prosacco', 119, '2019-01-19', 'img/news/news232.jpg', 'video/video.mp4', 361, 'Dicta aliquid iure veritatis at. Nihil aut architecto eius ipsam quam in aut. Reiciendis voluptates recusandae quod neque eligendi exercitationem velit.', 'Dr. Eino Boyle DVM', 0, 4, 3, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Lelah Veum', 2, 2018, NULL),
(177, 'Antonette Littel', 'Mrs. Janet Langosh', 'Allison Stoltenberg', 87, '2014-03-29', 'img/news/news227.jpg', 'video/video.mp4', 97, 'Quo vel vel dignissimos quia nisi ad accusamus. Distinctio occaecati hic similique minus id. Perferendis assumenda minus et nihil. Qui ut dolor tenetur voluptatem dolorum.', 'Dr. Augustus Sauer', 0, 5, 9, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Jack Haag DVM', 2, 2018, NULL),
(178, 'Prof. Selena Muller', 'Mrs. Zoey Collins I', 'Prof. Boyd Mohr MD', 39, '1978-04-18', 'img/news/news202.jpg', 'video/video.mp4', 91, 'Recusandae quam vero quam ex. Et omnis odio eaque rerum est natus. Aliquam ad voluptate earum est et dolor.', 'Hester Brekke V', 0, 8, 1, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Flossie Moore', 2, 2020, NULL),
(179, 'Jimmie Keeling', 'Mrs. Asa Christiansen', 'Billie Roberts', 73, '1981-12-18', 'img/news/news238.jpg', 'video/video.mp4', 20, 'Deserunt voluptatem fuga et. Suscipit quia mollitia est eligendi consequatur molestiae. Voluptas voluptas minus voluptas quae enim. Nobis accusamus laudantium impedit porro voluptate doloribus.', 'Dr. Austin Lockman Jr.', 1, 3, 2, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Keira Bahringer Jr.', 1, 2019, NULL),
(180, 'Mercedes Powlowski', 'Shakira Stark', 'Dante Koelpin V', 68, '2017-10-09', 'img/news/news231.jpg', 'video/video.mp4', 334, 'Voluptatem est minus neque distinctio ipsum repellendus totam ipsa. Ea qui asperiores omnis quasi optio. Nihil quasi soluta at et voluptatem. Dolore quis architecto rerum occaecati.', 'Rusty Hyatt', 1, 9, 7, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Meagan Zboncak', 1, 2020, NULL),
(181, 'Rozella Bosco', 'Dr. Gladyce Gottlieb MD', 'Nyah Sauer', 91, '1991-11-20', 'img/news/news233.jpg', 'video/video.mp4', 33, 'Quis iusto illo aut iusto sit. Aspernatur quo asperiores aspernatur rem. Laboriosam natus in praesentium odio. Iste sed suscipit vel maxime aliquam.', 'Lenore Turcotte', 0, 3, 10, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Mr. Ellis Goodwin III', 2, 2018, NULL),
(182, 'Mathias Emmerich MD', 'Johnny Hamill', 'Prof. Marlon Hoeger DDS', 37, '2004-05-22', 'img/news/news228.jpg', 'video/video.mp4', 337, 'Sunt nulla quia voluptatibus. Vel aut eum aliquam et quia dicta. Qui repudiandae et quod est. Quo dolorem repellendus corrupti et sunt id et.', 'Garfield Kautzer', 0, 2, 7, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Ms. Gwendolyn Sporer', 1, 2021, NULL),
(183, 'Dr. Cole Ritchie', 'Sallie Friesen V', 'Rudy Roberts', 34, '1981-10-13', 'img/news/news201.jpg', 'video/video.mp4', 285, 'Et placeat occaecati sequi mollitia sit eos quam quisquam. Dolorem autem minus nisi omnis. Eum rerum harum aut enim nisi occaecati dolor. Nihil sit sunt nesciunt. A earum architecto accusamus quisquam. Delectus eum quia et beatae sed et.', 'Gabriel Wilderman', 0, 8, 6, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Prof. Anabelle Deckow I', 3, 2019, NULL),
(184, 'Morton Goyette', 'Mr. Oda Nikolaus V', 'Logan Feest', 47, '2019-10-20', 'img/news/news209.jpg', 'video/video.mp4', 153, 'Enim soluta praesentium consequatur vel. Facilis dolorem temporibus porro. Et veritatis facilis corporis autem et voluptas voluptatem voluptates.', 'Gregg Effertz', 0, 6, 8, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Frankie Feeney', 2, 2019, NULL),
(185, 'Prof. Marco King Jr.', 'Jabari Bayer DVM', 'Kian Harris', 105, '2007-12-29', 'img/news/news210.jpg', 'video/video.mp4', 29, 'Praesentium sint labore quia ratione. Officiis omnis mollitia odit tempore. Ex reprehenderit vel rem sequi nihil nemo dolor. Rem et natus placeat aut et. Porro laborum et nam non ratione optio.', 'Luz Greenholt', 0, 7, 8, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Maximillia Kohler DVM', 1, 2020, NULL),
(186, 'Dr. Celestino Heathcote', 'Kristofer Reinger', 'Kadin Reichert', 45, '1990-08-23', 'img/news/news224.jpg', 'video/video.mp4', 400, 'Inventore libero dolores doloribus nobis sed ratione voluptas. Quos alias consequuntur voluptas dolore sed natus. Ratione aut rerum consequatur architecto qui quis voluptatibus. Dolore laudantium quidem voluptate tenetur amet est exercitationem.', 'Robyn Daniel', 0, 10, 6, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Avery Thompson', 2, 2019, NULL),
(187, 'Mr. Emmet Ortiz V', 'Adolphus Hammes', 'Jordyn Corkery', 100, '2012-07-16', 'img/news/news223.jpg', 'video/video.mp4', 66, 'Adipisci ducimus sequi quod ea ab. Aliquid officia facilis cumque odio vel. Repudiandae id aperiam voluptatem. Eaque sequi et quae accusantium numquam.', 'Ms. Piper Jenkins', 0, 5, 9, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Jordyn McDermott', 1, 2018, NULL),
(188, 'Miss Myrtie Cole IV', 'Prof. Jadyn King', 'Reva Buckridge', 103, '1976-10-26', 'img/news/news220.jpg', 'video/video.mp4', 489, 'Quas quasi enim nihil provident sit ex. Voluptas et voluptatem fugit libero. Dolorem blanditiis voluptatibus et quaerat et non dicta atque. Ut occaecati et dolorem explicabo. Repellat sequi consequatur autem adipisci sed molestiae.', 'Kenyatta Paucek', 1, 9, 3, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Dr. Clyde Reichel', 1, 2020, NULL),
(189, 'Kelley Wiza', 'Prof. Mikayla Erdman', 'Miss Kamille O\'Keefe', 37, '1991-06-10', 'img/news/news244.jpg', 'video/video.mp4', 118, 'Consequatur at natus autem fuga qui. Libero quibusdam ex quod odio labore est et. Non quia unde repudiandae ut natus id autem laboriosam. Nostrum rem odit autem sunt commodi illo reprehenderit. Vero labore aliquam magni aliquid sint.', 'Louisa Koepp', 1, 6, 4, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Joyce Monahan', 3, 2021, NULL),
(190, 'Christop Deckow', 'Dashawn Nitzsche', 'Ressie Miller', 58, '1980-12-09', 'img/news/news224.jpg', 'video/video.mp4', 311, 'Quis itaque quis suscipit blanditiis dolores est suscipit. Autem eveniet illo modi quia reprehenderit.', 'Prof. Brady Goyette II', 1, 7, 1, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Conor Shanahan', 2, 2019, NULL),
(191, 'Holly Botsford PhD', 'Miss Maria Schuppe II', 'Melany Breitenberg', 90, '1989-10-03', 'img/news/news240.jpg', 'video/video.mp4', 158, 'At fuga omnis fugiat ut sit sit. Ea nobis exercitationem earum quia maxime debitis maxime. Tenetur corrupti quam nihil qui iure consequuntur animi. Eligendi odit voluptas cupiditate quae voluptatem distinctio qui.', 'Mrs. Carlee Nader', 0, 3, 1, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Mr. Maximilian Mills IV', 2, 2020, NULL),
(192, 'Kyler Cormier DDS', 'Frances O\'Hara', 'Vernon Torp', 62, '1989-12-21', 'img/news/news247.jpg', 'video/video.mp4', 87, 'Assumenda est ea aperiam. Qui repellat necessitatibus eos saepe. A suscipit id reiciendis odio cum harum. Hic consequuntur impedit temporibus cum odio fugiat et.', 'Justine Kunde I', 0, 6, 6, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Taya Rippin', 2, 2021, NULL),
(193, 'Antwon Breitenberg IV', 'Ms. Maxie White', 'Prof. Clara Turner I', 66, '2003-05-05', 'img/news/news238.jpg', 'video/video.mp4', 407, 'Necessitatibus at animi debitis maxime. Ipsam corporis aperiam sed eos. Aut repellat recusandae accusantium beatae ea. Officia dolorum repudiandae ut qui perferendis.', 'Prof. Russel Huels', 0, 9, 2, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Marjorie Adams MD', 1, 2018, NULL),
(194, 'Bridget Bauch', 'Freda Weimann', 'Emmy Crist', 26, '2009-12-21', 'img/news/news202.jpg', 'video/video.mp4', 24, 'Expedita eius aliquid et adipisci dicta. Perspiciatis odit molestiae commodi at. Et distinctio omnis ut et quam numquam occaecati. Ut voluptatum eius cum officia.', 'Ms. Carolyne Nolan DDS', 0, 1, 1, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Alice Kunze', 3, 2019, NULL),
(195, 'Freddy Marks', 'Mrs. Precious Auer MD', 'Dr. Vida Hyatt PhD', 26, '2021-02-12', 'img/news/news208.jpg', 'video/video.mp4', 128, 'Ratione sed voluptatum aut omnis eum nihil quia quisquam. Voluptas reprehenderit minus expedita neque fugit perferendis. Provident itaque nemo ad aut nihil.', 'Edward Zemlak', 0, 1, 4, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Shane Dickens', 1, 2018, NULL),
(196, 'Ms. Virginia Hyatt Sr.', 'Hallie Volkman', 'Amy Harris V', 92, '1985-12-18', 'img/news/news237.jpg', 'video/video.mp4', 490, 'Qui odit inventore veniam aut asperiores. Alias ipsa est amet nostrum et aut suscipit. Reiciendis aut qui minus sunt. Natus earum est non.', 'Barton Kerluke', 1, 10, 6, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Anibal Rohan', 2, 2019, NULL),
(197, 'Nathaniel Goyette', 'Dr. Clifton Auer I', 'Mr. Milton Monahan III', 44, '2005-07-10', 'img/news/news203.jpg', 'video/video.mp4', 368, 'Voluptatum ex consequatur magni rerum ipsam sit voluptatem. Quidem doloremque libero aut in aliquid. Excepturi eaque rerum molestiae in ipsam in fuga.', 'Paige Wolff', 0, 3, 6, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Charley Cronin', 3, 2021, NULL),
(198, 'Jess Streich', 'Dr. Katlyn Zemlak', 'Jaquelin Kutch MD', 98, '1973-01-31', 'img/news/news209.jpg', 'video/video.mp4', 419, 'Ipsam dolor perferendis reiciendis aperiam et dolor modi distinctio. Voluptates facere velit velit. A aperiam quia quidem ipsum ut tempora. Omnis labore ut nihil suscipit ea provident architecto.', 'Ryan Bartell', 1, 10, 4, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Gabriella Rogahn', 2, 2020, NULL),
(199, 'Casimir O\'Reilly', 'Sanford Friesen', 'Kadin Fahey', 100, '2002-03-12', 'img/news/news231.jpg', 'video/video.mp4', 322, 'Sunt blanditiis similique molestias id. Qui veniam ea necessitatibus non vero tempora esse velit. Porro et sunt cupiditate velit recusandae sunt. Accusantium explicabo illum minima suscipit et iure et.', 'Arno Kilback', 0, 7, 10, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Mariela Gislason', 1, 2021, NULL),
(200, 'Tomas Runolfsson', 'Rogers Mohr', 'Kolby Mante I', 42, '1995-08-09', 'img/news/news231.jpg', 'video/video.mp4', 368, 'Aut earum cumque ratione est molestiae enim. Ullam illum quidem consequuntur illo. Sit quia et voluptatem nobis quas delectus sint blanditiis. Quia nostrum quidem qui rerum molestiae rerum temporibus.', 'Wyman Lemke DVM', 0, 10, 4, '2021-06-22 00:03:42', '2021-06-22 00:03:42', 'Mr. Cornell Grady', 2, 2019, NULL),
(201, 'Myles Bosco', 'Mrs. Simone Morissette', 'Zion Veum IV', 33, '1999-03-07', 'img/news/news211.jpg', 'video/video.mp4', 324, 'Maiores sed natus eligendi est. Ut enim maxime et dolorem optio totam. Sed totam quidem et expedita et. Nisi voluptates velit eligendi quam itaque beatae.', 'Laverne Kerluke', 1, 7, 4, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Angelica O\'Kon', 2, 2018, NULL),
(202, 'Miss Anabelle Paucek', 'Natalia Cormier', 'Prof. Donald Wehner', 62, '1999-09-21', 'img/news/news210.jpg', 'video/video.mp4', 115, 'Est et pariatur itaque sit incidunt et harum rem. Repudiandae perferendis iusto praesentium aut laborum. Exercitationem corrupti qui numquam occaecati eum eum.', 'Kiarra Pouros', 1, 2, 4, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Brown Lueilwitz', 2, 2021, NULL),
(203, 'Barney Harvey', 'Piper Pagac', 'Celia Block', 27, '1997-06-02', 'img/news/news220.jpg', 'video/video.mp4', 361, 'Aut odit unde qui facilis. Quod nisi sit suscipit sint recusandae nihil ut. Officiis libero quis velit doloribus laborum fugit. Perferendis nostrum et laudantium architecto. Aut odit nemo qui est neque beatae.', 'Myrl Gottlieb', 0, 8, 4, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Ephraim Wunsch', 2, 2018, NULL),
(204, 'Mason Halvorson', 'Sylvester O\'Keefe MD', 'Lulu Runte', 49, '1995-10-27', 'img/news/news233.jpg', 'video/video.mp4', 284, 'Nihil veritatis est repudiandae veniam quia. Aperiam maiores nesciunt et facilis repudiandae. Illo et dolorem similique sit qui repellat aliquid. Voluptas neque non quam.', 'Mossie Monahan', 1, 6, 7, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Jodie Veum', 3, 2018, NULL),
(205, 'Mr. Delmer Mills DVM', 'Mr. Horacio Feeney MD', 'Chesley Dietrich', 71, '1991-11-10', 'img/news/news232.jpg', 'video/video.mp4', 210, 'Quae nemo voluptatem et hic. Quaerat veniam porro vel qui a ut recusandae. Sit id ipsam nemo libero neque tempora voluptatem. Voluptatibus amet nobis iste assumenda at.', 'Dr. Jessyca Langosh', 0, 10, 10, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Miss Earline Fisher', 3, 2018, NULL),
(206, 'Asia Parisian', 'Mrs. Eryn Morissette', 'Oswald Mills', 23, '1994-01-28', 'img/news/news209.jpg', 'video/video.mp4', 467, 'Quia inventore laudantium quia et dolor facilis. Dolorem dolor qui accusamus ut. Ullam repellat vel cupiditate iusto. Assumenda doloribus dolores saepe reprehenderit.', 'Prof. Aubrey Herzog', 1, 2, 5, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Janice Wolff', 1, 2019, NULL),
(207, 'Judd Gerlach', 'Torey Champlin', 'Prof. Rowland Kling', 44, '2013-12-17', 'img/news/news230.jpg', 'video/video.mp4', 104, 'Sint necessitatibus tempore reiciendis totam sunt est similique. Quasi et id porro doloremque tempore cumque dolor. Est iusto harum odio a cupiditate consequatur. Aut illum omnis sit et dignissimos maiores.', 'Skyla Block III', 1, 9, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Mrs. Elfrieda Altenwerth', 3, 2021, NULL),
(208, 'Rosario Klocko III', 'Aubree Mitchell', 'Mr. Jake Walsh', 112, '1989-11-16', 'img/news/news226.jpg', 'video/video.mp4', 62, 'Doloribus modi expedita qui pariatur qui. Deleniti cupiditate eos facere neque totam earum. Tempora iure ipsum sit minus possimus deserunt quis. Voluptatem commodi commodi recusandae.', 'Etha Reichel', 0, 8, 10, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Dorcas Hettinger', 2, 2021, NULL),
(209, 'Hannah Keeling', 'Prof. Sheila Kunze', 'Dr. Larry Watsica', 114, '1977-06-11', 'img/news/news200.jpg', 'video/video.mp4', 448, 'Rem illo tenetur suscipit cupiditate aut. Dolorem beatae laudantium voluptas omnis. Sint ut est quis quam minima repellendus delectus. Commodi nulla illum inventore libero eveniet aliquam.', 'Keshaun Pollich', 1, 3, 9, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Shanie Beier Sr.', 3, 2021, NULL),
(210, 'Kaden Hessel', 'Prof. Xzavier Cassin', 'Mr. Charley Senger III', 66, '2006-02-20', 'img/news/news204.jpg', 'video/video.mp4', 23, 'Labore ab consectetur dicta ut alias. Sunt porro tenetur labore enim et nobis laudantium. Nostrum enim harum animi hic vitae labore dicta. Dolorem omnis consectetur temporibus natus. Aliquid consequatur nobis vitae eligendi est qui earum.', 'Moises Rutherford', 0, 6, 2, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Lane Hettinger IV', 2, 2020, NULL),
(211, 'Berniece Bergnaum', 'Verdie Champlin', 'Jodie Ankunding', 40, '2016-12-19', 'img/news/news221.jpg', 'video/video.mp4', 134, 'Excepturi sint tempore et quis molestiae sed. Rem inventore eos vitae aut provident voluptas asperiores. Quis consectetur cumque corporis veritatis sit dolorem. Cum aspernatur odit sed sit id.', 'Lauretta Ruecker V', 1, 8, 8, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Tyrell Aufderhar Sr.', 1, 2019, NULL),
(212, 'Dr. Maybell VonRueden II', 'Stanford Hill', 'Prof. Dorthy Heathcote V', 66, '1988-02-24', 'img/news/news214.jpg', 'video/video.mp4', 406, 'Ipsum et quos dolor accusantium ut vero. Nostrum iste sapiente laudantium officiis voluptas. Deserunt reiciendis sint ad aut dolores in. Est blanditiis sapiente distinctio ratione aut.', 'Lisa Ebert', 0, 6, 7, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Augusta Paucek', 3, 2018, NULL),
(213, 'Abner Ratke', 'Ms. Vilma Russel DDS', 'Jairo O\'Conner', 22, '1973-11-12', 'img/news/news200.jpg', 'video/video.mp4', 18, 'Totam ab consectetur rerum aut quis sunt. Quo consectetur necessitatibus veritatis. A sit ad est ullam vero aut qui maiores. Quasi possimus nam placeat autem excepturi. Placeat laboriosam velit fuga quas sint qui qui voluptatum.', 'Esta Becker', 1, 4, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Patience Kautzer II', 3, 2019, NULL),
(214, 'Flavio Marvin', 'Felicity Spencer', 'Mr. Franz Corwin', 63, '2017-04-03', 'img/news/news247.jpg', 'video/video.mp4', 154, 'Ut et quisquam enim atque qui eaque. Eligendi necessitatibus reprehenderit qui repellat sit occaecati autem. Odio neque eligendi sint earum qui delectus doloribus.', 'Cristina Wyman', 0, 9, 2, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Janelle Kunze', 1, 2020, NULL),
(215, 'Jimmie Rice', 'Dr. Noble Luettgen', 'Makenzie Kilback', 66, '1970-03-18', 'img/news/news233.jpg', 'video/video.mp4', 395, 'Cum fugit voluptate et voluptatem maxime quisquam provident quo. Recusandae occaecati cum odio sed id et. Velit sint sunt vel hic et aut rerum. Itaque est et sint ab.', 'Mr. Ronaldo Hauck II', 1, 4, 1, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Dr. Vidal Hoeger PhD', 3, 2019, NULL),
(216, 'Gina Jones', 'Aniya Schneider II', 'Mrs. Lolita Schinner', 50, '2000-09-22', 'img/news/news236.jpg', 'video/video.mp4', 484, 'Impedit neque delectus et. Amet doloribus eaque corporis. Quo tenetur architecto est similique doloribus minima. Ut autem aliquid deleniti quis quia accusamus. Perferendis est consequatur qui incidunt qui similique earum.', 'Haven Prohaska II', 0, 7, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Nichole Kirlin', 1, 2021, NULL),
(217, 'Josianne Harvey', 'Meagan Lubowitz', 'Zaria Dietrich PhD', 32, '2014-11-25', 'img/news/news209.jpg', 'video/video.mp4', 458, 'Facere incidunt minus assumenda voluptatem perferendis ex similique. Blanditiis doloribus nisi qui occaecati perferendis repellendus id. Doloribus sunt consequatur architecto nisi sint in qui.', 'Stella Torp', 0, 4, 3, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Mr. Ola Veum IV', 1, 2020, NULL),
(218, 'Stefan Rodriguez I', 'Otis Wyman I', 'Ruth Wyman', 97, '1993-05-07', 'img/news/news200.jpg', 'video/video.mp4', 337, 'Delectus aut sit et. Et voluptas eum et sunt. Delectus non qui ratione non.', 'Dr. Elsa Block DVM', 1, 6, 10, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Miss Minnie Kshlerin', 2, 2018, NULL),
(219, 'Norwood Kilback', 'Madonna Hansen', 'Verlie Hirthe', 69, '1972-05-14', 'img/news/news228.jpg', 'video/video.mp4', 275, 'Quia a ad distinctio illum ea qui. Saepe eum dolorem unde molestiae sapiente minus. Omnis voluptatum accusamus consequatur. Expedita placeat enim saepe. Officia facere doloribus reprehenderit in.', 'Rita Gislason', 0, 6, 8, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Carmine Barton', 3, 2019, NULL),
(220, 'Heaven Kunde', 'Dr. Ed Koepp', 'Burnice Streich', 53, '1997-07-24', 'img/news/news244.jpg', 'video/video.mp4', 298, 'Sint quisquam aliquam itaque eaque sint similique omnis facilis. Quo et omnis exercitationem id et qui odio incidunt. Ut ut expedita odit itaque unde accusantium et. Quo fugit minus consequatur adipisci quibusdam.', 'Russell Hermiston', 1, 4, 8, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Trever Olson', 1, 2021, NULL),
(221, 'Miss Carmella Rempel', 'Dr. Wava Schmeler', 'Evan Von II', 26, '2003-05-21', 'img/news/news218.jpg', 'video/video.mp4', 325, 'Accusantium eos odit voluptatem possimus et natus. Eos alias quibusdam ut dolorum dolorem totam est. Non possimus veniam non quis. Nulla quia sapiente non nulla est.', 'Gabriel Becker', 0, 6, 5, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Cydney Gutmann', 2, 2018, NULL),
(222, 'Addison Waelchi', 'Hettie Gaylord', 'Dr. Jimmy DuBuque V', 21, '1972-06-21', 'img/news/news215.jpg', 'video/video.mp4', 206, 'Reiciendis sint debitis ex eligendi. Veritatis distinctio non fugit laborum dolor est. Earum dolorem et voluptates maiores a magni dolores. In dolores ea reiciendis.', 'Robyn Bogisich MD', 1, 8, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Estella Gerhold Sr.', 3, 2021, NULL),
(223, 'Arvel Schroeder', 'Jed Balistreri', 'Joannie D\'Amore', 115, '2004-07-13', 'img/news/news204.jpg', 'video/video.mp4', 169, 'Cumque eligendi vel eum cupiditate sed. Qui autem voluptatem optio unde ea. Voluptas aliquid voluptas totam corrupti. Cum optio aperiam est esse ut fuga ut aliquam.', 'Rhoda Bruen III', 0, 9, 1, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Ike Crist Jr.', 3, 2020, NULL),
(224, 'Karelle McCullough IV', 'Jasmin Fritsch', 'Mercedes Marquardt', 44, '2012-02-16', 'img/news/news210.jpg', 'video/video.mp4', 427, 'Corrupti nisi nobis at autem consequatur aut qui. Aut eaque aut qui dolorem magnam. Quos molestiae odio vel maiores eius minima dolore. Ipsam ab consequatur quibusdam nemo rerum.', 'Mr. Lester Parisian DVM', 0, 4, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Dr. Giovani Nikolaus V', 3, 2019, NULL),
(225, 'Dr. Austen Windler', 'Raul Greenfelder', 'Shaylee Cummerata', 100, '2004-12-12', 'img/news/news216.jpg', 'video/video.mp4', 368, 'Ut illum sunt eos perspiciatis occaecati. Voluptates quibusdam autem unde aut qui possimus. Assumenda voluptas quidem praesentium voluptas perspiciatis aut.', 'Leland Bins I', 0, 4, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Mariam Green MD', 1, 2019, NULL),
(226, 'Mr. Lisandro Kerluke II', 'Wayne Schoen', 'Mrs. Onie Mraz', 72, '1987-12-26', 'img/news/news232.jpg', 'video/video.mp4', 435, 'Optio ut aut aut dolorem molestiae in illum. Consequatur nam et odit sunt facilis animi. Est quia sed praesentium aut voluptatibus omnis tempore doloremque. Natus eveniet blanditiis incidunt magni non beatae maxime id. Incidunt qui mollitia quis id aut.', 'Rafaela Roob', 0, 3, 7, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Keaton Turcotte', 2, 2018, NULL),
(227, 'Talon Sipes', 'Russel D\'Amore DVM', 'Cortez Predovic DVM', 73, '1986-12-10', 'img/news/news227.jpg', 'video/video.mp4', 158, 'Voluptatem sit alias autem non commodi. Sed quidem eum voluptas aut. In temporibus sequi nemo ratione quos animi. Esse in ipsum ut reiciendis voluptatum facilis et. Eaque corporis cumque sunt labore neque. Nulla dolorum suscipit sunt quia voluptas ex.', 'Cassandre Lang', 1, 8, 1, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Kristian Ferry IV', 2, 2020, NULL),
(228, 'Garth O\'Conner', 'Carson Bahringer', 'Cornelius Kuhn', 105, '2013-12-13', 'img/news/news230.jpg', 'video/video.mp4', 32, 'Ea ut rem soluta a consequatur nobis qui vitae. Ut repellat nobis illum unde. Ut dicta nostrum provident quaerat deserunt. Reiciendis earum qui sunt pariatur dolore. A deleniti animi iste similique. Ratione autem aliquid corporis magnam consequatur.', 'Ms. Elaina Lemke', 0, 7, 7, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Edgardo Abshire', 3, 2018, NULL),
(229, 'Dr. Jaden Kessler DDS', 'America Hyatt', 'Twila Feil', 98, '1976-08-01', 'img/news/news238.jpg', 'video/video.mp4', 299, 'Eveniet id ipsa rerum ex accusamus. Blanditiis minima perferendis qui dolores dolorum. Et modi dignissimos numquam odio facilis repellat. Similique incidunt asperiores aspernatur.', 'Ricky Murazik', 1, 1, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Jessica Turcotte IV', 2, 2021, NULL),
(230, 'Raphaelle Erdman', 'Mose Rosenbaum', 'Dr. Juston Hermiston Jr.', 117, '1994-08-25', 'img/news/news201.jpg', 'video/video.mp4', 297, 'Non sed laboriosam pariatur ut sint. Nihil ea velit voluptas doloribus et et. Qui officia amet dolor doloribus qui aspernatur quia.', 'Zetta Stehr', 0, 10, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Prof. Melvin Kessler', 2, 2020, NULL),
(231, 'Clare Mills', 'Meredith Ankunding IV', 'Dr. Ian Runolfsdottir', 81, '1970-12-27', 'img/news/news204.jpg', 'video/video.mp4', 416, 'Incidunt et quia beatae beatae qui. Animi est veniam sit corporis veritatis. Consectetur natus quaerat eius earum consequuntur. Dolores saepe labore reprehenderit omnis ut at quibusdam.', 'Melvin Rodriguez', 0, 6, 3, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Christina Durgan', 2, 2020, NULL),
(232, 'Leslie Rolfson', 'Antonetta Pfannerstill', 'Santino Turcotte', 75, '2001-12-02', 'img/news/news240.jpg', 'video/video.mp4', 3, 'Id rerum molestiae reprehenderit magni numquam. Dolore aut atque blanditiis eaque cumque nihil debitis. Soluta quis voluptas quia quidem ipsa vitae hic. Magni et quos id iste vero similique occaecati.', 'Raymond DuBuque', 0, 1, 1, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Abraham Davis', 3, 2021, NULL),
(233, 'Abe Farrell MD', 'Ernie Bayer Sr.', 'Allen Yundt', 81, '1976-05-28', 'img/news/news237.jpg', 'video/video.mp4', 179, 'Vel voluptatibus nulla ea nostrum earum saepe. Iure cumque debitis tempore. Quo quasi incidunt veniam perspiciatis veniam modi necessitatibus.', 'Onie Collins', 0, 8, 3, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Kaela White', 2, 2020, NULL),
(234, 'Nathanael Grant Sr.', 'Juliana Kuhn', 'Margarita Jakubowski', 81, '1997-11-06', 'img/news/news233.jpg', 'video/video.mp4', 239, 'Et voluptas ea recusandae quia culpa nihil rerum. Quaerat molestiae distinctio iure quia sit et eum. Unde vero ut et. Perspiciatis illo ipsam ullam sapiente laboriosam id quasi ipsum.', 'Allene Gorczany', 1, 10, 10, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Bret Buckridge', 1, 2019, NULL),
(235, 'Mathew Auer', 'Loyce Morissette', 'Karen Mayert III', 102, '1980-07-31', 'img/news/news236.jpg', 'video/video.mp4', 484, 'Sed hic iste vitae quam. Eum quia quis ipsam quis iure. Facilis aut doloribus ab eaque corporis commodi. Ut modi iure ipsum saepe incidunt eum ut.', 'Dylan Anderson', 0, 10, 5, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Magnus Runolfsdottir', 2, 2020, NULL),
(236, 'Elvie Legros V', 'Anthony Murazik', 'Kris Quitzon', 110, '1990-11-10', 'img/news/news229.jpg', 'video/video.mp4', 289, 'Soluta eveniet alias doloribus est. Doloremque aliquid et omnis. Dicta consequatur et dolorem quae necessitatibus qui. Cum expedita quia dignissimos ratione et rerum eum autem. Non aut quam repellat voluptas sed distinctio quos.', 'Jerel Stoltenberg', 1, 6, 10, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Dr. Kathlyn Balistreri', 3, 2018, NULL);
INSERT INTO `movies` (`id`, `title`, `directors`, `actor`, `time`, `date`, `url_picture`, `url_link`, `view`, `description`, `status`, `film_hot`, `contries_id`, `categories_id`, `created_at`, `updated_at`, `name`, `type_movie`, `year`, `deleted_at`) VALUES
(237, 'Izabella Bergstrom', 'Nadia Jerde', 'Federico Johns', 96, '1970-05-28', 'img/news/news241.jpg', 'video/video.mp4', 330, 'Ipsam delectus possimus esse ea. Est reiciendis vero rem aut laborum porro dolores culpa. Et aut laudantium dolor illum fugiat possimus consectetur.', 'Melody Zboncak', 0, 9, 3, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Miss Esmeralda Jacobs', 1, 2018, NULL),
(238, 'Clemmie Grimes', 'Ella Lemke I', 'Mr. Kellen Mueller', 73, '2001-09-18', 'img/news/news217.jpg', 'video/video.mp4', 188, 'Dolorem minima molestias fuga ad eos excepturi et ut. Et iusto quis odit maiores voluptatem perspiciatis. Quia nostrum fugit sint illum. Natus repellat occaecati optio quos et eius. Facere earum commodi ullam voluptas ut quidem molestias.', 'Wilfrid Kertzmann', 0, 1, 9, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Leonel Reinger', 3, 2018, NULL),
(239, 'Francis Gleichner', 'Vicente Erdman', 'Kayley Wilderman', 70, '1994-04-23', 'img/news/news231.jpg', 'video/video.mp4', 480, 'Quia facere incidunt id rerum eum. Possimus dolore voluptatem voluptatum nam. Recusandae quam et corporis accusamus. Dolor nihil facilis nisi quidem ab atque sed.', 'Kariane Harvey', 1, 3, 10, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Trevor Langosh', 2, 2018, NULL),
(240, 'Mrs. Tiana Gutmann Sr.', 'Miss Hellen Kutch I', 'Mrs. Aleen Stiedemann V', 119, '1987-07-11', 'img/news/news223.jpg', 'video/video.mp4', 496, 'Distinctio voluptatem exercitationem voluptatem aut aspernatur perferendis voluptas. Quos quas ducimus enim est. Qui nemo quaerat ullam rem officia autem esse. Consequatur nemo est est.', 'Dr. Buster Tromp DVM', 0, 9, 5, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Sigmund Cummerata DDS', 2, 2018, NULL),
(241, 'Dr. Pearline Shields', 'Gertrude Dickinson', 'Jessica Kohler', 75, '1999-07-14', 'img/news/news222.jpg', 'video/video.mp4', 337, 'Facere eligendi et illo iusto ullam. Perferendis laboriosam omnis officiis est nobis sed. Aut amet neque fuga dolor est autem minima.', 'Ms. Maye Bradtke', 0, 1, 4, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Prof. Lessie Monahan DDS', 3, 2020, NULL),
(242, 'Dr. Dawson Dach DVM', 'Madalyn Erdman Sr.', 'Dr. Sandrine Johnston', 67, '2018-01-02', 'img/news/news240.jpg', 'video/video.mp4', 370, 'Quis a inventore quia quos molestiae cum molestiae. Dolorem et reiciendis similique ut illo maiores sed. Illum explicabo rerum nihil earum temporibus occaecati illum. Beatae ad sint dolores unde. Reprehenderit magni maxime earum maiores accusamus qui ut.', 'Ms. Emilie Graham', 1, 5, 8, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Casimer Casper', 1, 2019, NULL),
(243, 'Gussie Robel', 'Mr. Nikolas Gibson II', 'Prof. Jeffry Ebert', 111, '1989-04-25', 'img/news/news218.jpg', 'video/video.mp4', 97, 'Aut beatae a atque at ea ut perferendis dolorum. Qui nostrum non cumque nam dolor quasi. Qui consectetur soluta eius ipsam. Dolorem asperiores tempore aliquam est autem voluptates dolorem quis. Optio ducimus qui reiciendis voluptatem.', 'Herta Kovacek IV', 1, 4, 9, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Theron Bailey II', 3, 2018, NULL),
(244, 'Prof. Tania Mante', 'Miss Lilian Lynch III', 'Shana Greenholt Jr.', 80, '1989-08-17', 'img/news/news222.jpg', 'video/video.mp4', 410, 'Odio cumque est velit sint ratione. Id a occaecati voluptatem ut fugiat. Et repellat eos quos et perspiciatis. Velit at dolor rerum voluptatem.', 'Prof. Wilhelm Hills', 1, 7, 6, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Miss Loren Ferry PhD', 1, 2021, NULL),
(245, 'Mrs. Dina Klein DDS', 'Miss Dawn Jacobi I', 'Astrid Cronin', 117, '1984-11-27', 'img/news/news233.jpg', 'video/video.mp4', 117, 'Autem et id consequuntur quia fugit sed consequatur. Atque adipisci repudiandae et optio maiores. Assumenda accusamus voluptatem vel omnis quia doloribus.', 'Albina Murphy MD', 1, 1, 9, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Stanton Effertz', 2, 2019, NULL),
(246, 'Yessenia Legros', 'Valentina Funk', 'Nathan Kozey', 70, '2003-10-07', 'img/news/news223.jpg', 'video/video.mp4', 13, 'Nobis repellat reiciendis sit ipsam et itaque. Minus veniam a sunt ea tenetur nulla tenetur. Eligendi aut ut qui et. Expedita velit dicta error totam consequuntur accusamus.', 'Orpha Pollich', 0, 1, 4, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Estelle Stracke', 2, 2020, NULL),
(247, 'Ronaldo Effertz', 'Dr. Margaret Prohaska', 'Solon Ebert', 110, '1980-08-20', 'img/news/news240.jpg', 'video/video.mp4', 203, 'Sapiente laboriosam et deleniti corporis similique et animi. Doloremque laborum accusamus quo non fuga consequatur. Rerum ullam hic sapiente labore corporis inventore quis. Voluptate sint dolor sequi et. Qui voluptates est exercitationem culpa impedit.', 'Robbie Collins', 1, 1, 7, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Dr. Hobart Nitzsche', 3, 2021, NULL),
(248, 'Orion Collier', 'Lisa Beahan DDS', 'Dr. Chaim Haag', 73, '2005-01-31', 'img/news/news214.jpg', 'video/video.mp4', 477, 'Quidem sit error aut tempora similique dolor illum aut. Blanditiis autem nobis magnam cupiditate consequatur dolor quas. Quos amet ex error nam.', 'Prof. Rudolph McCullough', 0, 2, 10, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Bertrand Satterfield', 1, 2020, NULL),
(249, 'Prof. Treva Zemlak', 'Cassie Stoltenberg', 'Idell Lang IV', 63, '2001-10-23', 'img/news/news205.jpg', 'video/video.mp4', 182, 'Ab et facilis explicabo pariatur sunt delectus. A mollitia rerum dicta sint qui temporibus sequi. Enim reprehenderit aut est eligendi. Et sunt possimus laboriosam laudantium occaecati ipsum et est.', 'Robyn Graham', 0, 9, 2, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Keira Cummerata', 2, 2021, NULL),
(250, 'Laisha Effertz', 'Wallace Denesik', 'Victoria Ortiz', 105, '1992-08-02', 'img/news/news207.jpg', 'video/video.mp4', 425, 'Fuga omnis quia est atque provident quod. Ullam provident exercitationem et similique ut sunt ut facilis. Consequatur id quas suscipit alias. Sit et sit quia facilis.', 'Marta Baumbach III', 1, 7, 8, '2021-06-22 00:11:04', '2021-06-22 00:11:04', 'Enid Kozey', 1, 2018, NULL),
(251, 'Anissa Blick', 'Ms. Destiny Wilkinson DVM', 'Andy Goyette', 71, '2001-07-01', 'img/news/news236.jpg', 'video/video.mp4', 146, 'Omnis voluptatem dolorem maxime molestias pariatur amet necessitatibus. Modi neque ullam vero assumenda quod mollitia. Voluptas aspernatur nam non cum quia tempora ex. Optio quia possimus sint natus.', 'Merritt Nienow', 0, 6, 7, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Dr. Arely Hegmann IV', 1, 2018, NULL),
(252, 'Mrs. Agustina Bayer IV', 'Rusty Keebler', 'Neva Parker PhD', 44, '2007-11-12', 'img/news/news246.jpg', 'video/video.mp4', 178, 'Quibusdam eligendi maxime laudantium autem at. Et rem alias sapiente dignissimos expedita earum. Rerum qui at nisi non ipsam. Voluptate et exercitationem aperiam voluptas eaque asperiores ipsam.', 'Drew Considine PhD', 0, 2, 1, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Arno Wisoky II', 1, 2020, NULL),
(253, 'Annamarie Walker', 'Blanca Stoltenberg', 'Preston Howell', 69, '2000-09-08', 'img/news/news204.jpg', 'video/video.mp4', 144, 'Est esse quas totam. Nihil tenetur voluptate nisi et assumenda voluptas. Sit eos deleniti dignissimos et facere. Laudantium distinctio perferendis delectus rem et enim.', 'Miss Nova Murazik', 1, 2, 3, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Harold Bartoletti', 1, 2021, NULL),
(254, 'Amir Nitzsche', 'Prof. Anna O\'Connell', 'Kaylie Lang III', 100, '1999-03-22', 'img/news/news247.jpg', 'video/video.mp4', 495, 'Esse accusamus quaerat omnis dolorem. Voluptatum voluptatem nisi cumque deserunt eum aut fuga. Delectus minus repudiandae omnis rerum debitis omnis et.', 'Deja Schumm', 0, 9, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Josephine Streich', 1, 2021, NULL),
(255, 'Prof. Rasheed Conroy', 'Macy Parker', 'Krystina Green', 118, '1994-10-18', 'img/news/news204.jpg', 'video/video.mp4', 91, 'Et voluptates delectus vero. Enim aut pariatur illo aut et non sequi commodi. Eaque nihil quia adipisci fugiat veritatis corporis numquam. Ut eius et ut quia est accusantium explicabo.', 'Mandy Keebler Sr.', 0, 10, 1, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Prof. Aidan Thompson III', 1, 2020, NULL),
(256, 'Jeff Bogan', 'Ms. Linda Emmerich', 'Mark Trantow', 31, '2013-04-14', 'img/news/news230.jpg', 'video/video.mp4', 149, 'Perferendis maiores sit id quis et. Et in accusantium ut illo aut. Et quasi laudantium illo quos eligendi perspiciatis possimus. Nemo debitis fugiat est doloremque. Veniam facilis iste provident rerum. Magnam veritatis ad rerum quia possimus sint et.', 'Kimberly Shanahan', 1, 4, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Mr. Alan Hahn', 3, 2021, NULL),
(257, 'Myrtis Mills', 'Henry Kiehn', 'Damon Spencer', 101, '1980-07-13', 'img/news/news229.jpg', 'video/video.mp4', 7, 'Qui dolorem dignissimos labore eveniet tempore vel. Quaerat ipsam odio dolor odio accusamus non placeat minima. Voluptas quod et reprehenderit rerum provident officia. Ipsum incidunt laudantium sapiente minima aut natus exercitationem.', 'Evan Waters', 0, 1, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Miss Lucienne Haley PhD', 2, 2019, NULL),
(258, 'Ms. Samanta Gulgowski DVM', 'Prof. Jamaal Kub DDS', 'Prof. Miracle Lindgren', 79, '1992-08-31', 'img/news/news246.jpg', 'video/video.mp4', 451, 'Adipisci qui quis harum praesentium ut corrupti. Rerum voluptas repellendus ut corrupti laudantium est. Consequatur dolor doloremque ipsa culpa.', 'Marcella Welch II', 1, 3, 1, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Kirsten Funk', 3, 2021, NULL),
(259, 'Mrs. Yadira Mayert', 'Lauren Wilkinson', 'Cory Harris', 21, '2002-03-16', 'img/news/news204.jpg', 'video/video.mp4', 84, 'Qui hic iure enim nemo debitis eius quod. Sed perferendis architecto et ut quis doloremque. Omnis quasi sequi aut ipsam quasi a. Praesentium enim cum exercitationem sed nihil debitis fugit.', 'Aida Hickle', 0, 7, 5, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Bettye Adams', 1, 2019, NULL),
(260, 'Cleo Beer', 'Rosetta Langosh', 'Katherine Cummerata', 72, '2020-08-25', 'img/news/news232.jpg', 'video/video.mp4', 391, 'Molestias animi est aut qui. Earum id cumque fugiat maxime odit debitis excepturi libero. Veritatis ratione facere amet omnis sapiente perspiciatis consequatur. Amet voluptatum voluptas temporibus.', 'Kenyatta West V', 0, 8, 10, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Burnice Volkman', 1, 2021, NULL),
(261, 'Fay Hettinger', 'Meda Robel', 'Cole Cassin', 98, '2016-06-30', 'img/news/news216.jpg', 'video/video.mp4', 252, 'Laboriosam nostrum deserunt maiores ea non ullam. Ut autem harum dolor dolore. Accusamus qui dolore repudiandae sed soluta est numquam ea. Eius explicabo commodi corrupti iusto sed et totam quo.', 'Theo Johnston', 0, 5, 1, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Izaiah VonRueden IV', 3, 2019, NULL),
(262, 'Heaven Padberg Jr.', 'Sheila Witting DVM', 'Shayna Kihn', 58, '1983-03-22', 'img/news/news213.jpg', 'video/video.mp4', 373, 'Vel at repudiandae qui corrupti consectetur maiores eum. Commodi rerum fuga illum. Animi deserunt rerum sint deleniti. Asperiores sunt mollitia doloribus cupiditate odit.', 'Jacinto McCullough', 0, 9, 10, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Earnestine Kuhn', 1, 2021, NULL),
(263, 'Antonetta Effertz', 'Catherine Stoltenberg', 'Sigmund Koss', 21, '2008-01-30', 'img/news/news206.jpg', 'video/video.mp4', 368, 'Quia dicta non molestiae consequatur. Tempore maxime in sed. Repellat expedita et a ea.', 'Dr. Clyde Walter Sr.', 1, 3, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Mekhi Kemmer', 2, 2019, NULL),
(264, 'Mr. Andres Roberts DVM', 'Clementina Harvey', 'Mr. Lucius Schmitt II', 60, '1970-03-15', 'img/news/news221.jpg', 'video/video.mp4', 61, 'Officiis dolorem aut est qui occaecati dolorem ut. Sed fuga quia laborum rem quia qui. Iste blanditiis harum debitis ea. Praesentium quae quas aut voluptatem. Libero repudiandae expedita beatae provident laborum qui.', 'Mrs. Kaia Schuster IV', 0, 4, 5, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Dr. Ardith O\'Reilly', 3, 2018, NULL),
(265, 'Kaelyn Deckow', 'Dr. Laurel Nolan DVM', 'Onie Welch', 87, '1972-08-05', 'img/news/news230.jpg', 'video/video.mp4', 421, 'Quo numquam optio ipsam sequi sit consequatur. Sed ratione quo eos ratione minus est. Dignissimos est animi et dolorem. Culpa tempore et vel dolore consequatur aliquid et cupiditate. Architecto suscipit qui eveniet consequatur.', 'Chance Bechtelar', 0, 2, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Carson Wolff', 2, 2019, NULL),
(266, 'Rosalia Bogisich', 'Prof. Cindy Glover DDS', 'Camren Collins', 57, '1976-07-29', 'img/news/news202.jpg', 'video/video.mp4', 268, 'Sed incidunt fugit sunt. Occaecati blanditiis reprehenderit et culpa totam. Ut similique quod ipsum quia delectus illum. Voluptatibus voluptas enim fugiat sunt molestiae qui mollitia.', 'Freda Schulist', 0, 9, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Alysa Wuckert', 3, 2020, NULL),
(267, 'Jodie Hansen V', 'Miss Delilah Runolfsson', 'Dr. Dorthy Hand', 33, '1973-04-14', 'img/news/news220.jpg', 'video/video.mp4', 412, 'Id voluptate quia autem corrupti vel voluptatem. Ad consequatur quia nisi velit praesentium. Doloremque maxime voluptas quis similique earum. Ut quibusdam tempore similique.', 'Marielle Metz', 0, 8, 5, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Miss Adelle Barrows Jr.', 3, 2020, NULL),
(268, 'Pearlie Champlin', 'Trever Boyer', 'Mrs. Maeve Rosenbaum', 82, '2006-10-07', 'img/news/news211.jpg', 'video/video.mp4', 196, 'Ea est iure et ut eaque fugit. Animi architecto vel laboriosam vel. Ut et natus illum laborum dolores. Qui quia odio dolorem natus repellendus eum. Excepturi quis ut unde ducimus in ipsum. Dolores et dolor id autem error qui.', 'Monte Kris', 0, 3, 5, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Miss Ayla Brekke III', 2, 2018, NULL),
(269, 'Alessandro Cormier', 'Dr. Alexys Christiansen Jr.', 'Adell Rolfson Jr.', 106, '1978-02-23', 'img/news/news215.jpg', 'video/video.mp4', 447, 'Rerum quas eveniet omnis dolor sit veritatis. Iure recusandae voluptatem debitis occaecati optio optio. Et et consequatur mollitia ad repellendus aperiam.', 'Whitney Metz', 1, 4, 7, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Delta Spencer', 2, 2020, NULL),
(270, 'Donna Robel', 'Keegan Swift', 'Shanelle Hill I', 78, '1979-08-09', 'img/news/news210.jpg', 'video/video.mp4', 487, 'Natus repudiandae provident sed et illum. Dolorem optio tempora cum numquam nemo. Voluptatum nostrum omnis sequi aperiam et et quia. Molestias ipsum eos in.', 'Dr. Odie Kunze', 1, 10, 1, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Lloyd Heaney', 1, 2021, NULL),
(271, 'Gardner Wolf', 'Amir Kessler', 'Dr. Queen VonRueden', 68, '1993-06-09', 'img/news/news213.jpg', 'video/video.mp4', 452, 'Perferendis fuga et officiis dolores. Vitae totam veniam nemo praesentium eligendi et nam et. Est ut sit similique tempore atque odit perferendis totam. Qui deleniti aliquam minus aut commodi id.', 'Elizabeth Cremin', 1, 1, 10, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Whitney Hagenes', 3, 2018, NULL),
(272, 'Joyce Pfannerstill', 'Prof. Lennie Jerde IV', 'Mrs. Gudrun Schowalter PhD', 59, '2011-07-25', 'img/news/news213.jpg', 'video/video.mp4', 199, 'Ullam vitae architecto voluptatem molestiae facere dolorem nihil debitis. Praesentium sunt fugiat ut quo enim. Ex voluptates ad numquam.', 'Bailee Ziemann', 0, 5, 1, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Wade Torphy', 1, 2020, NULL),
(273, 'Mr. Norberto Grant V', 'Sid Satterfield', 'Roderick Fahey', 29, '2011-09-25', 'img/news/news222.jpg', 'video/video.mp4', 376, 'Sunt accusantium ea libero totam sequi. A nihil aut iusto sapiente nobis rerum et.', 'Prof. Jeramie Farrell', 0, 1, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Mr. Khalil Stoltenberg', 2, 2018, NULL),
(274, 'Arnold Grady Sr.', 'Bert Wyman', 'Ila Kshlerin', 107, '1983-01-27', 'img/news/news236.jpg', 'video/video.mp4', 332, 'Suscipit error sapiente illo assumenda et. Esse possimus dolore occaecati odit. Accusamus id voluptatem omnis quia. Odio vitae voluptas dolorum architecto. Repellat maxime eveniet fuga quibusdam rem occaecati quia perferendis.', 'Mr. Daron Boyer IV', 1, 6, 4, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Brigitte Aufderhar', 3, 2020, NULL),
(275, 'Ms. Rubie Gerlach V', 'Sim McDermott', 'Kaylah Tillman I', 42, '1974-01-30', 'img/news/news226.jpg', 'video/video.mp4', 234, 'Id non repellendus veniam. Laboriosam saepe voluptates quos doloribus officia illum. Rerum laborum dolores debitis molestiae itaque explicabo ut.', 'Luz Robel', 0, 6, 6, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Francis Schaden', 1, 2018, NULL),
(276, 'Estella Bode', 'Dr. Dane Price', 'Lauren Rippin', 64, '1972-08-15', 'img/news/news202.jpg', 'video/video.mp4', 344, 'Libero aut harum et tempore doloribus. In suscipit tempora veritatis rem. Velit perferendis quis et quis vel.', 'Declan Pacocha', 0, 7, 10, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Christy Funk', 3, 2020, NULL),
(277, 'Dr. Lulu Lockman I', 'Dr. Koby Okuneva DVM', 'Dr. Caden Ritchie DVM', 60, '1975-06-17', 'img/news/news231.jpg', 'video/video.mp4', 366, 'Quasi eos tempora dignissimos sed. Quia minus soluta deleniti consequatur ut beatae consequatur. Similique nihil et nulla illum perferendis.', 'Dr. Keshaun Kuhlman', 1, 8, 10, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Ms. Michelle Zulauf Sr.', 2, 2019, NULL),
(278, 'Ms. Treva Dach', 'Karianne Ratke', 'Destini Wilderman Sr.', 82, '2020-07-03', 'img/news/news222.jpg', 'video/video.mp4', 196, 'Ut et sed minus voluptates velit doloribus ad voluptatem. Qui molestiae laboriosam quis ut. Occaecati molestias expedita ut quaerat. Iure quo consequuntur et molestias id.', 'Micaela Williamson', 0, 9, 9, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Mr. Keshawn Nienow', 2, 2018, NULL),
(279, 'Alexandrine Kessler', 'Emilia Renner PhD', 'Darrick McDermott', 22, '1983-12-19', 'img/news/news205.jpg', 'video/video.mp4', 372, 'Est qui eius eum minus est dolorem dicta. Fuga ea itaque nisi voluptatem assumenda rerum modi. Dolor eveniet minus aut error qui dolorem. Recusandae suscipit blanditiis adipisci dignissimos quia. Quis tempore architecto omnis inventore.', 'Addie Larkin', 0, 3, 9, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Floyd Pollich Jr.', 1, 2019, NULL),
(280, 'Alysha Rippin', 'Cora Breitenberg', 'Jed Gleason', 90, '2014-02-01', 'img/news/news228.jpg', 'video/video.mp4', 396, 'Soluta aut ratione amet unde voluptatibus mollitia distinctio. Atque omnis accusantium quis explicabo. Cum dolores suscipit placeat vero reprehenderit. Earum laborum voluptas voluptatem laudantium quis. Id aperiam qui est sapiente qui vel aut.', 'Lulu Fay I', 1, 7, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Aaliyah Rath', 1, 2018, NULL),
(281, 'Prof. Ines Ortiz', 'Oceane Torphy Jr.', 'Eleanora Larkin', 45, '1975-02-13', 'img/news/news239.jpg', 'video/video.mp4', 348, 'Assumenda sed quo aut nostrum. Neque et odit debitis est est. Aliquid possimus nemo omnis velit aliquid est commodi.', 'Ms. Elna Mraz', 1, 6, 8, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Burley Schiller PhD', 2, 2021, NULL),
(282, 'Stephan Kub', 'Ted Schneider DVM', 'Miss Blanche Kuhn IV', 88, '2003-12-10', 'img/news/news225.jpg', 'video/video.mp4', 493, 'Modi non ea sapiente dolor molestiae consequatur. Est culpa fuga harum facilis cupiditate. Qui id dignissimos quam.', 'Dr. Devan Balistreri', 0, 1, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Deon Pfannerstill', 1, 2019, NULL),
(283, 'Caitlyn Cummings MD', 'Amely King', 'Ansley Cassin', 28, '1979-12-20', 'img/news/news236.jpg', 'video/video.mp4', 494, 'Molestiae sit voluptatibus ut eos reprehenderit est mollitia. Quae ullam eaque iure cupiditate. Est nostrum repellat sed repellat quis voluptas accusamus.', 'Kara Zieme', 0, 3, 4, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Mrs. Carlee O\'Keefe', 3, 2020, NULL),
(284, 'Miss Dayana VonRueden Jr.', 'Percy Steuber', 'Tavares Gibson', 95, '1977-10-22', 'img/news/news214.jpg', 'video/video.mp4', 117, 'Nam nihil nemo ipsum fugit qui aut. Maxime labore non dignissimos autem sit ab quae. Qui non molestiae voluptatem nesciunt voluptates. Quae cupiditate alias quaerat corporis.', 'Prof. Agustina Feil', 1, 2, 10, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Kian Kessler II', 2, 2019, NULL),
(285, 'Kassandra Stokes', 'Krystina Waelchi', 'Prof. Trystan Zulauf DVM', 68, '1985-01-27', 'img/news/news204.jpg', 'video/video.mp4', 93, 'Id consequatur et consequuntur ipsum. Fuga explicabo explicabo dicta est natus ut. Deserunt ea aut ducimus excepturi dicta accusantium temporibus.', 'Jacques O\'Kon', 1, 5, 10, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Emmie Maggio', 1, 2019, NULL),
(286, 'Dr. Esther Collins', 'Elton Becker', 'Prof. Delphine Koepp', 68, '1994-05-14', 'img/news/news225.jpg', 'video/video.mp4', 194, 'Aut eligendi sequi dolorum et eveniet aut quam non. Non voluptas at cupiditate omnis sunt. Maiores dolor facilis accusantium fugiat qui et. Ratione est nisi laborum animi quibusdam earum repudiandae. Rerum et reprehenderit optio ipsa eveniet velit modi.', 'Timmothy Thompson', 0, 9, 5, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Eden O\'Conner', 3, 2020, NULL),
(287, 'Agustin Wolff Sr.', 'Dr. Jamie Spinka III', 'Blair Nienow', 50, '1988-06-11', 'img/news/news220.jpg', 'video/video.mp4', 481, 'Illum veritatis ut eum maxime est animi. Doloremque et molestias accusantium sint dolorem excepturi. At vel autem magnam dicta illum.', 'Eliza Schaden', 0, 7, 7, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Orion Swaniawski', 1, 2020, NULL),
(288, 'Alba Murray MD', 'Rigoberto Botsford', 'Uriel Rempel', 50, '2003-10-25', 'img/news/news210.jpg', 'video/video.mp4', 334, 'Libero aspernatur totam et aut ab corporis. Cupiditate expedita et amet voluptatem maiores magni accusantium vitae. Adipisci quas voluptatem dicta. Aut rerum facilis totam eum molestias rerum consequatur.', 'Peter Batz', 1, 1, 4, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Quentin Mayert', 2, 2019, NULL),
(289, 'Dr. Shany Carroll', 'Frederic Hettinger I', 'Miss Jaquelin Quigley I', 90, '1977-02-26', 'img/news/news232.jpg', 'video/video.mp4', 455, 'Porro inventore ea in. Voluptas expedita commodi architecto dolorem fugit voluptatibus. Et ut ipsum quam natus aut occaecati vitae. Laborum consequatur et ipsa ut fugit doloribus.', 'Prof. Meredith Pollich IV', 1, 9, 8, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Matilda Cole', 2, 2019, NULL),
(290, 'Dr. Kellen McClure I', 'Elliott Bogisich', 'Christian Gottlieb III', 77, '1976-05-27', 'img/news/news204.jpg', 'video/video.mp4', 285, 'Sit ipsum et praesentium reprehenderit. Sed ipsum asperiores magni quasi adipisci quaerat inventore suscipit. Et rerum quas cum numquam. Beatae repudiandae culpa amet reprehenderit.', 'Mr. Marquis Johnson Jr.', 0, 4, 10, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Lori Feest', 3, 2018, NULL),
(291, 'Samantha Lindgren', 'Prof. Oceane Ledner', 'Daryl Veum PhD', 61, '1993-10-04', 'img/news/news226.jpg', 'video/video.mp4', 412, 'Rerum labore impedit exercitationem rerum eum quia. Consequatur non eum blanditiis. Quod temporibus vel deserunt repellat quos repellat voluptates. Explicabo porro totam tempora quibusdam et asperiores sequi.', 'Vergie Bailey', 1, 8, 5, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Terrell Jacobs', 3, 2020, NULL),
(292, 'Miss Roberta O\'Conner', 'Dr. Irving Shields III', 'Prof. Sincere Hill', 24, '1975-07-08', 'img/news/news243.jpg', 'video/video.mp4', 478, 'Consequuntur aut minus assumenda saepe ad. Aut ut ipsam ut modi molestias ipsa. Dolorem earum sint ut consectetur voluptas. Est in dolorem eos maiores inventore quis cupiditate.', 'Braxton Hettinger III', 0, 10, 9, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Ramon Vandervort MD', 1, 2021, NULL),
(293, 'Augustus Heidenreich', 'Trace Strosin', 'Loraine Raynor', 89, '1980-04-10', 'img/news/news226.jpg', 'video/video.mp4', 409, 'Atque saepe quaerat voluptatibus placeat nesciunt nobis repellendus. Molestiae distinctio consequatur impedit rerum facere. Consectetur omnis aspernatur repudiandae et.', 'Gwendolyn Robel', 0, 6, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Trystan Kreiger', 1, 2019, NULL),
(294, 'Audra Dietrich', 'Royce Crist', 'Dr. Magnus Grimes IV', 53, '1974-05-17', 'img/news/news207.jpg', 'video/video.mp4', 131, 'Est voluptas soluta sit temporibus fuga eius rerum. Et consectetur nemo aut et. Eum consequatur est aperiam delectus nihil libero.', 'Mallory Boyle', 0, 8, 5, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Prof. Meggie White Jr.', 3, 2020, NULL),
(295, 'Ettie Ebert', 'Prof. Samir Buckridge', 'Mr. Heber Monahan', 107, '2005-08-14', 'img/news/news230.jpg', 'video/video.mp4', 238, 'Quas ullam doloribus voluptatum aut repudiandae. Autem aut id corporis enim non. Quo voluptas et delectus dolores quos sed minima. Ea enim excepturi voluptas repellat.', 'Yazmin Kris', 0, 8, 2, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Ernest Murazik', 1, 2019, NULL),
(296, 'Dr. Russel Reilly', 'Gilberto Ledner', 'Madison Mills MD', 24, '1996-12-26', 'img/news/news210.jpg', 'video/video.mp4', 33, 'Deleniti rerum molestiae rerum excepturi dicta quis. Nobis quos nihil cum optio maxime nulla sit magnam. Voluptas dolore deserunt hic et.', 'Brenna Volkman', 0, 5, 4, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Frida Cronin', 2, 2018, NULL),
(297, 'Marlene Boyer', 'Vince Deckow', 'Fred Smith', 79, '2016-11-18', 'img/news/news228.jpg', 'video/video.mp4', 40, 'Laborum rem quia optio nemo. Consequatur et temporibus ipsa ipsam quis. Id voluptas et qui. Maxime consequatur omnis natus quae debitis quae recusandae. Et dignissimos ipsa at totam enim ea qui. Perferendis aspernatur amet odio ut sit.', 'Clare Johns', 0, 8, 9, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Mervin Reinger', 1, 2019, NULL),
(298, 'Roma Emmerich PhD', 'Ludie Hettinger', 'Israel Gleason DDS', 106, '2019-03-23', 'img/news/news211.jpg', 'video/video.mp4', 158, 'Voluptas saepe consequatur officiis est assumenda. Soluta quasi voluptatem voluptatum nobis totam molestiae quis. Ipsum voluptatem modi repellat et ipsa aut. Ut architecto molestias fugiat.', 'Cristina Price', 0, 10, 6, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Reggie Collins', 2, 2021, NULL),
(299, 'Enola Waelchi', 'Cayla Hermann', 'Diamond Nikolaus', 70, '2002-12-06', 'img/news/news221.jpg', 'video/video.mp4', 176, 'Autem itaque deleniti omnis non perspiciatis in quia. Veniam rem placeat laboriosam fugiat illo commodi. Numquam quia mollitia fugit et molestiae voluptatum illum.', 'Anibal Lynch PhD', 1, 6, 1, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Evalyn Flatley', 3, 2021, NULL),
(300, 'Nikko Kulas', 'Sam Satterfield', 'Litzy Huel', 67, '2012-01-20', 'img/news/news210.jpg', 'video/video.mp4', 80, 'Id et tenetur qui error. Qui sed ipsam quod id aspernatur in dolor. Dignissimos quo cum modi inventore.', 'Angelica Kessler', 1, 10, 5, '2021-06-22 00:11:05', '2021-06-22 00:11:05', 'Carolanne Kovacek', 2, 2021, NULL),
(301, 'Lavon Terry', 'Mr. Derek Reilly', 'Nelda O\'Reilly', 64, '2012-02-12', 'img/news/news215.jpg', 'video/video.mp4', 213, 'Ut magnam excepturi et magnam. Ex quam at officia voluptatem nam maiores sunt. Hic voluptas ut magni quidem. Tenetur nesciunt corrupti tenetur sed neque facere.', 'Mr. Felton Schaden', 1, 8, 2, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Van Erdman', 3, 2019, NULL),
(302, 'Nestor Boehm', 'Trystan White', 'Otha Dietrich', 88, '2011-10-24', 'img/news/news203.jpg', 'video/video.mp4', 339, 'Quae saepe aspernatur et saepe alias asperiores. Rerum voluptatem pariatur eveniet magnam. Asperiores voluptatum dolores officiis. Debitis necessitatibus consequatur est. Eaque perferendis eaque officiis quae.', 'Meagan Ziemann', 0, 10, 3, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Donna Cronin', 3, 2020, NULL),
(303, 'Dr. Leonel Hudson Sr.', 'Dr. Susanna Streich I', 'Prof. Maybell Von Jr.', 116, '2007-05-16', 'img/news/news242.jpg', 'video/video.mp4', 72, 'Et ducimus quasi qui rem minima neque. Hic incidunt consequuntur voluptas praesentium. Aut ut amet error iusto a. Ipsa eum ipsa est facilis vitae aut ullam. Ut tenetur excepturi quisquam nemo odit.', 'Armando Kuvalis', 1, 7, 7, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Cordell Borer Sr.', 3, 2020, NULL),
(304, 'Camryn Ferry', 'Aleen Dicki', 'Freda Gutkowski', 20, '1983-09-09', 'img/news/news246.jpg', 'video/video.mp4', 207, 'Ipsum nisi ea ducimus voluptate. Nisi voluptas totam architecto nisi voluptates est. Adipisci quidem aperiam molestiae tempora et.', 'Madaline Daniel', 0, 7, 1, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Elisha Lebsack', 1, 2019, NULL),
(305, 'Destini Leannon', 'Nayeli Stark', 'Prof. Jayson Dietrich', 21, '1986-05-06', 'img/news/news228.jpg', 'video/video.mp4', 1, 'Et deserunt eum ut cumque error. Quis odit accusamus reiciendis. Ducimus maxime unde animi vel amet. Est aut ut iure. Corrupti sed ex voluptate molestiae quaerat. Aperiam sunt ullam et aliquam aut consequatur et.', 'Prof. Kira Pollich', 0, 10, 2, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Skylar Armstrong', 1, 2021, NULL),
(306, 'Katheryn Hegmann PhD', 'Theodora Hill', 'Greta McKenzie', 63, '2010-09-27', 'img/news/news236.jpg', 'video/video.mp4', 59, 'Voluptatem ut earum quia vel dolores. Vero exercitationem dolorem nihil quam. Esse culpa ipsum nihil nisi sed. Veniam possimus vel totam quo eos.', 'Keegan Morissette', 1, 4, 5, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Ariane Kertzmann', 2, 2020, NULL),
(307, 'Elvie Stiedemann MD', 'Geovanni Gusikowski', 'Reuben Spinka', 33, '2011-11-12', 'img/news/news242.jpg', 'video/video.mp4', 363, 'Et nam quos quasi. Repellendus ipsa rerum asperiores fugiat qui et voluptate. Aut incidunt qui reiciendis velit dolorum minima iusto. Fuga quo est eum non et et tenetur.', 'Anabel DuBuque', 1, 5, 6, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Ivory Kemmer MD', 2, 2020, NULL),
(308, 'Prof. John Lesch', 'Dr. Hortense Cassin V', 'Cora Kunze', 116, '2019-08-25', 'img/news/news201.jpg', 'video/video.mp4', 69, 'Voluptate aspernatur illum eligendi tempora sint. Dolorem a eligendi quis autem.', 'Xander Pouros', 1, 7, 1, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Blanche Emard', 3, 2018, NULL),
(309, 'Mitchell O\'Reilly', 'Janick Kertzmann', 'Athena Torp IV', 111, '1998-04-18', 'img/news/news230.jpg', 'video/video.mp4', 83, 'Consequuntur nihil labore pariatur consequatur dolores. Omnis architecto rerum quisquam dolor dolores delectus amet.', 'Beau Brakus', 1, 4, 9, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Abbie Buckridge', 1, 2021, NULL),
(310, 'Pedro Rutherford DDS', 'Dr. Marian Ullrich', 'Kraig Ankunding', 54, '1975-10-18', 'img/news/news231.jpg', 'video/video.mp4', 385, 'Doloremque eum aut nostrum sequi earum. Nam voluptates deleniti ratione atque. Excepturi ratione repudiandae possimus et. Perspiciatis error et enim.', 'Susanna Olson', 0, 4, 9, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Giovanny Wolf', 2, 2018, NULL),
(311, 'Clemmie Hammes', 'Jennie Kirlin', 'Bethel Jacobi', 21, '1988-07-10', 'img/news/news208.jpg', 'video/video.mp4', 280, 'Soluta autem quam blanditiis consequuntur. Consequuntur sit ut impedit ipsa facere nihil natus voluptate. Fugiat quos vero cumque. Ut dolores totam quia cum dolor dignissimos ab. Architecto laborum qui facere et tempore est ad necessitatibus.', 'Ms. Kiarra Homenick', 0, 8, 7, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Lolita Koch', 2, 2020, NULL),
(312, 'Isabelle Witting', 'Wendell Reinger', 'Deshaun Langosh', 56, '1982-10-08', 'img/news/news217.jpg', 'video/video.mp4', 211, 'Id voluptate ex culpa animi placeat est ipsum. Occaecati voluptas consequuntur quos nisi. Non consequatur esse quisquam et autem quidem.', 'Harold Nader', 1, 7, 5, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Burnice Altenwerth', 2, 2018, NULL),
(313, 'Tamia Johnson', 'Prof. Imelda Hammes DVM', 'Braxton Beatty', 30, '1995-04-21', 'img/news/news231.jpg', 'video/video.mp4', 237, 'Quibusdam voluptatem blanditiis corporis expedita id id. Et nesciunt illum recusandae commodi.', 'Ms. Patricia Ankunding', 1, 5, 3, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Hildegard Daniel', 2, 2021, NULL),
(314, 'Mrs. Demetris Conroy I', 'Prof. Boris Purdy', 'Hilton Waelchi', 20, '1987-12-06', 'img/news/news247.jpg', 'video/video.mp4', 266, 'Fuga voluptatem et animi maxime ut unde magnam. Libero et ut distinctio dolorem ut et nesciunt. Et beatae non ratione ut. Repellat perspiciatis repudiandae optio corrupti.', 'Laila Gorczany Jr.', 1, 1, 10, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Alvina Walsh', 2, 2021, NULL),
(315, 'Rocio Medhurst Sr.', 'Alexandria Tromp', 'Dakota Kulas Jr.', 48, '1974-02-28', 'img/news/news204.jpg', 'video/video.mp4', 124, 'Odio nemo qui modi quod aliquam. Consequatur et doloribus laboriosam rerum architecto. Aliquid fugiat aut eaque. Aspernatur eos sed sit. Labore autem magnam culpa laudantium accusamus totam rem perspiciatis. Ex assumenda qui beatae perferendis ipsum.', 'Reilly Hand', 1, 2, 9, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Rickie Toy', 1, 2021, NULL),
(316, 'Shanelle Schmidt', 'Marjorie Effertz', 'Paula Kunde IV', 29, '1998-01-01', 'img/news/news237.jpg', 'video/video.mp4', 490, 'Quasi nobis optio excepturi nam ratione. Aut fuga molestias quis repudiandae exercitationem delectus eveniet. Sed officiis sit nesciunt est molestiae aut distinctio.', 'Parker Parisian', 1, 1, 5, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Jillian Stroman', 1, 2020, NULL),
(317, 'Shea Schamberger', 'Josianne Bartoletti', 'Vincenza Morissette', 87, '1999-05-04', 'img/news/news239.jpg', 'video/video.mp4', 207, 'Blanditiis totam a numquam optio illo. Dignissimos explicabo omnis soluta dolores quisquam neque cupiditate. Quo dignissimos consequatur enim et repudiandae praesentium sed. Repellendus ut est et totam laudantium.', 'Ms. Lucile Hansen DDS', 0, 7, 9, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Jameson Huels', 2, 2021, NULL),
(318, 'Ms. Billie Lemke', 'Dallas Weimann', 'Antonetta Williamson', 50, '1994-05-13', 'img/news/news226.jpg', 'video/video.mp4', 130, 'Velit aperiam delectus vel. Voluptatem laboriosam iusto perspiciatis. Nulla et voluptatem ea alias ab omnis voluptatem. Unde repellendus assumenda dolor veritatis dolor ut.', 'Dr. Adelbert Buckridge', 1, 1, 6, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Berta Renner III', 3, 2018, NULL),
(319, 'Prof. Lambert Witting I', 'Madonna Gusikowski', 'Eldridge Bartoletti', 106, '1982-11-20', 'img/news/news229.jpg', 'video/video.mp4', 253, 'Iste et quam fugiat qui blanditiis eaque. Velit animi omnis velit et ipsam reiciendis consequatur dolore.', 'Miss Catherine Gislason', 0, 1, 6, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Kristopher Wolf', 1, 2019, NULL),
(320, 'Bethel Stehr', 'Mr. Nathan Welch', 'Prof. Esperanza Sauer V', 75, '2004-04-10', 'img/news/news223.jpg', 'video/video.mp4', 85, 'Deleniti vel qui repudiandae saepe molestiae et. Debitis unde ipsum consequatur consequuntur ea. Qui accusantium maxime similique maiores eveniet fugit. Quasi qui non aut sed.', 'Ava Schowalter', 0, 9, 6, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Ms. Lorine Cremin DVM', 3, 2018, NULL),
(321, 'Dr. Leone Berge', 'Dr. Marty Goyette', 'Prof. Geovanni Braun', 30, '1972-09-10', 'img/news/news233.jpg', 'video/video.mp4', 474, 'Consequuntur hic recusandae deserunt sint iure natus ea. Id eligendi similique voluptatem voluptatem saepe omnis quia. Illo impedit laudantium quidem sed doloribus qui non.', 'Kyler Waelchi PhD', 0, 7, 1, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Dr. Lysanne Reynolds', 2, 2021, NULL),
(322, 'Catharine O\'Keefe', 'Carlotta Auer', 'Aaliyah Schmitt', 96, '2000-11-21', 'img/news/news225.jpg', 'video/video.mp4', 469, 'Aut est corporis aut magnam cupiditate nam ut. Impedit exercitationem ab optio architecto. Quam repellendus sit et consequatur. Consequatur qui qui in provident beatae. Aliquid voluptatem autem quisquam itaque voluptates ea dignissimos.', 'Laura Gulgowski', 0, 6, 10, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Prof. Ryann Beatty DVM', 3, 2019, NULL),
(323, 'Dr. Taryn Roob', 'Miss Aisha Grant IV', 'Reagan Cummings', 57, '1995-05-25', 'img/news/news245.jpg', 'video/video.mp4', 264, 'Fugiat neque sit et unde. Iure est perferendis corporis accusamus consequatur praesentium. Quod sed repudiandae beatae enim molestias.', 'Corrine Gulgowski', 0, 3, 2, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Dejon Kuhn', 1, 2019, NULL),
(324, 'Buford Lubowitz', 'Lauren Langworth', 'Alberto Heidenreich', 70, '1973-11-05', 'img/news/news203.jpg', 'video/video.mp4', 10, 'Ut repellendus quaerat occaecati non praesentium sunt. Aliquid et fuga aspernatur. Nemo occaecati commodi fugit ut quae inventore nostrum dicta. Quidem amet sit ut consectetur qui illo.', 'May Graham', 1, 10, 4, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Tiana Harris', 2, 2019, NULL),
(325, 'Maryjane Lubowitz', 'Adonis Waelchi', 'Amely Volkman', 77, '1993-09-27', 'img/news/news240.jpg', 'video/video.mp4', 478, 'Occaecati ad non ratione nam sed itaque ut. Iusto iusto illo sed rerum expedita. Dolorum et quia facere reiciendis perferendis adipisci deserunt omnis. Officiis quas et nostrum ut voluptas nam. Culpa voluptatem numquam velit et reprehenderit ex.', 'Jess Heathcote', 0, 1, 7, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Leann Braun', 2, 2019, NULL),
(326, 'Mr. Obie Murphy DVM', 'Gaetano McDermott', 'Vern Corkery', 110, '1997-06-14', 'img/news/news244.jpg', 'video/video.mp4', 121, 'Ipsa id pariatur minima voluptate quidem. Et praesentium minus sapiente. Aut repellendus quidem ex. Consequuntur in non minus est dolorum.', 'Jennings Ernser', 1, 3, 10, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Prof. Heber Leuschke', 1, 2020, NULL),
(327, 'Fleta Harber', 'Mrs. Lysanne Treutel', 'Moses Rosenbaum', 33, '2019-07-10', 'img/news/news202.jpg', 'video/video.mp4', 457, 'Molestiae dolorum et dolor minima consequatur. Ut minima fuga velit labore aliquam quidem. Autem non ut repudiandae repudiandae. Molestiae odio nobis nihil blanditiis et quis.', 'Elton Kshlerin', 0, 8, 6, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Billie Koss', 3, 2021, NULL),
(328, 'Amos Murray', 'Tanya Dietrich', 'Hillary Cremin', 31, '1987-06-25', 'img/news/news244.jpg', 'video/video.mp4', 390, 'Mollitia voluptas qui nemo eos doloremque qui. Eius omnis nulla quasi.', 'Ora Miller', 1, 8, 8, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Clint Sipes', 1, 2018, NULL),
(329, 'Mr. Ruben O\'Kon PhD', 'Brooke Thiel', 'Rachael VonRueden', 113, '2002-11-26', 'img/news/news209.jpg', 'video/video.mp4', 71, 'Minus quidem aspernatur nobis quaerat. Facilis atque aliquam ut.', 'Dr. Anibal Dare IV', 1, 6, 8, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Karine Bauch', 1, 2020, NULL),
(330, 'Flo Luettgen', 'Tyrese Reinger', 'Ms. Candace Mann', 91, '1982-06-27', 'img/news/news219.jpg', 'video/video.mp4', 349, 'Quod amet cum repellat minima dignissimos et eaque. Possimus aut aliquid illo quibusdam.', 'Prof. Chadrick Stokes', 1, 1, 9, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Prof. Denis Kuhn', 1, 2021, NULL),
(331, 'Gilda Murazik', 'Mr. Watson Rohan PhD', 'Prof. Ozella Collins II', 35, '2013-11-04', 'img/news/news246.jpg', 'video/video.mp4', 175, 'Eos labore consequatur exercitationem et est vitae magni. Vel aut unde corporis voluptatem tenetur. Incidunt saepe quisquam quia nisi et. Culpa impedit quod aut.', 'Miss Karine Hickle', 1, 8, 2, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Wava Green Sr.', 3, 2018, NULL),
(332, 'Valentin Yundt', 'Nestor Mills', 'Lysanne Cormier III', 59, '1983-02-27', 'img/news/news216.jpg', 'video/video.mp4', 71, 'Et et qui minus dolorum. Laudantium corrupti eveniet quis et consectetur. Ut omnis voluptatibus quibusdam doloremque quidem. Quaerat dolorum doloremque necessitatibus quia.', 'Francis Hoppe', 0, 4, 4, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Arely Kuvalis', 2, 2019, NULL),
(333, 'Brando Rippin', 'Mr. Candido Roberts', 'Prof. Bert Wisoky III', 86, '2009-05-20', 'img/news/news208.jpg', 'video/video.mp4', 291, 'Officiis recusandae quos consequuntur voluptatem sed in. Accusantium exercitationem ducimus nostrum dolorum iusto. Modi aspernatur voluptatem incidunt tenetur neque.', 'Mandy Olson', 0, 8, 6, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Belle Rau', 2, 2019, NULL),
(334, 'Prof. Eddie Bartoletti', 'Jordane Walsh', 'Dr. Elva Auer III', 61, '1971-03-21', 'img/news/news224.jpg', 'video/video.mp4', 295, 'Sed itaque dignissimos culpa eligendi qui. Quia molestiae quo deleniti delectus. Consectetur quo at quos quod aut. Aliquid ut similique laborum sapiente perferendis fuga.', 'Dino Nolan MD', 1, 2, 4, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Margaret Nader', 2, 2021, NULL),
(335, 'Dr. Percy Gislason', 'Prof. Christa Osinski DDS', 'Mr. Ralph Tremblay MD', 32, '2001-12-27', 'img/news/news246.jpg', 'video/video.mp4', 343, 'Laborum harum error labore. Veniam quia minus corrupti omnis voluptatem necessitatibus. Nisi fugiat sit voluptas vel impedit et. Voluptas placeat voluptates nihil quis.', 'Dr. Harley Waters', 0, 8, 5, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Dr. Oliver Muller', 2, 2018, NULL),
(336, 'Brenna Bednar', 'Haylee Ankunding', 'Prof. Magdalena Fritsch', 99, '2010-05-25', 'img/news/news237.jpg', 'video/video.mp4', 105, 'Quo dolorem corporis velit consequatur tenetur. Et assumenda doloremque molestiae reiciendis adipisci dolorem earum. Ut aut nobis in natus quaerat vero voluptas dolore. Voluptatum eius voluptas culpa autem ducimus.', 'Cecil Ryan MD', 0, 5, 3, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Mr. Quincy Cummerata III', 1, 2021, NULL),
(337, 'Dr. Orval Swaniawski III', 'Wyman Gorczany', 'Royce Wunsch DVM', 108, '2008-03-26', 'img/news/news219.jpg', 'video/video.mp4', 43, 'Rerum sed aliquam praesentium id in magnam enim. Et cum magni tempora voluptatum harum. Accusantium incidunt reprehenderit reiciendis quaerat ea vel.', 'Elwyn Brakus', 1, 2, 6, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Delphine Cummings', 2, 2019, NULL),
(338, 'Chad Thompson', 'Retha Strosin', 'Derick Gutmann', 43, '2005-06-30', 'img/news/news238.jpg', 'video/video.mp4', 210, 'Non qui est hic sit qui cumque. Rerum dolores illum sit et. Odit adipisci et deserunt aut est. Deserunt optio minima repellendus qui placeat et. Eum doloribus omnis cum aliquam.', 'Mandy Prosacco V', 0, 3, 9, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Holden Rodriguez', 1, 2019, NULL),
(339, 'Rosalia Marks', 'Dr. Hilario Herman PhD', 'Julianne Bins', 76, '1984-07-21', 'img/news/news241.jpg', 'video/video.mp4', 314, 'Repudiandae placeat qui quia omnis non fugit et delectus. Explicabo molestiae rerum est sit maiores neque. Aut quis quam doloribus quia. Rerum veritatis iste saepe ut nisi.', 'Mr. Domenick Dickinson PhD', 0, 9, 2, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Luna Mohr', 1, 2020, NULL),
(340, 'Dr. Alejandra Huel PhD', 'Anya Olson IV', 'Gwendolyn Gibson', 63, '1973-10-08', 'img/news/news238.jpg', 'video/video.mp4', 350, 'Nihil deleniti expedita ratione eaque suscipit corrupti maxime. Officia ipsam sit consequatur qui consequuntur non doloremque. Modi excepturi repellat quia suscipit dolores sed. Consequuntur amet accusantium sequi voluptas qui voluptatum dolorem qui.', 'Lyric Schmidt', 0, 5, 1, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Elda Murphy', 3, 2021, NULL),
(341, 'Norbert Treutel', 'Eliza Murphy', 'Ewald Kuvalis', 67, '1990-10-11', 'img/news/news218.jpg', 'video/video.mp4', 286, 'Error repellat velit sit qui ut voluptate deserunt. Natus quam ducimus voluptas consequatur. Cupiditate rem eos et sequi suscipit. Officiis sunt aliquam eaque enim dolor consequatur. Numquam vitae illum facere voluptatem.', 'Hoyt Murazik', 0, 7, 1, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Michael Mann', 2, 2019, NULL),
(342, 'Krystel Pfannerstill', 'Cara Schiller', 'Katlyn Oberbrunner', 33, '1994-04-01', 'img/news/news206.jpg', 'video/video.mp4', 288, 'Cupiditate quam quasi debitis est autem eaque rem nesciunt. Et quod quia molestias eligendi. Cupiditate voluptas enim nemo aut nihil excepturi tenetur doloremque. Ut ea autem perferendis dolorem vel earum.', 'Emory Goldner I', 1, 6, 8, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Jamarcus Altenwerth', 1, 2021, NULL),
(343, 'Madilyn Bode', 'Dr. Gaston Schiller Sr.', 'Caleb Moen', 91, '2017-01-11', 'img/news/news231.jpg', 'video/video.mp4', 336, 'Inventore odit voluptas et et dicta dolores assumenda. Ratione rem explicabo eos natus corrupti labore. Fugit enim quaerat laboriosam rerum et quo. Doloremque voluptatem voluptatem est pariatur impedit.', 'Wallace Klocko', 0, 10, 10, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Guido Larkin MD', 2, 2019, NULL),
(344, 'Kaya Osinski', 'Elmo Mohr', 'Prof. Claudia Wolf', 42, '1984-03-01', 'img/news/news218.jpg', 'video/video.mp4', 365, 'Dolorem totam et autem. Cupiditate voluptatem officiis ducimus quia corporis velit. Qui quod sunt error et omnis enim.', 'Judd Bernhard', 0, 5, 8, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Larue Block', 2, 2021, NULL),
(345, 'Ms. Sabryna Batz DVM', 'Prof. Eino Kshlerin', 'Ms. Tiana Jones III', 100, '1990-08-02', 'img/news/news211.jpg', 'video/video.mp4', 248, 'Quia sint error sunt omnis ipsa quos sapiente. Cupiditate sapiente distinctio consequatur aperiam. Id neque soluta sit sed optio nesciunt. Eligendi quam unde commodi.', 'Teresa Hirthe', 1, 5, 6, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Jerome Pfannerstill', 3, 2020, NULL),
(346, 'Daren Weissnat', 'Dudley Rath', 'Prof. Mikel Lind', 91, '2002-09-30', 'img/news/news226.jpg', 'video/video.mp4', 427, 'Aut deleniti aliquid distinctio fugiat aliquid nisi perspiciatis. Quia similique nihil hic voluptas quisquam in iste. Consequatur doloribus distinctio distinctio. Est et tempore omnis est incidunt.', 'Abagail Murray', 0, 6, 4, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Lela VonRueden', 1, 2019, NULL),
(347, 'Fannie Kessler', 'Sven Hauck', 'Maiya Bradtke', 67, '1990-06-11', 'img/news/news244.jpg', 'video/video.mp4', 239, 'Doloremque alias ratione itaque similique sapiente et veniam. Tempora ut facere voluptatem itaque ut hic. Dolorum voluptatem minima neque et saepe.', 'Clyde Littel Sr.', 1, 5, 3, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Joel Little', 1, 2018, NULL),
(348, 'Jerrell Daniel', 'Arjun Schroeder', 'Bruce Wolff', 87, '2001-09-30', 'img/news/news246.jpg', 'video/video.mp4', 381, 'Consequatur voluptas magni hic placeat. At consequatur dolorum ut vitae. Nisi dicta totam ullam iusto. Esse reprehenderit ut reiciendis voluptatem.', 'Clement Toy', 0, 10, 1, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Rhea Reinger Jr.', 3, 2018, NULL),
(349, 'Bart Pouros IV', 'Scotty Donnelly', 'Lura Funk', 44, '1985-05-18', 'img/news/news217.jpg', 'video/video.mp4', 477, 'Corporis quis aliquid ex consectetur sint quia. Deserunt quisquam laborum non. Et minima harum sint. Eos pariatur et praesentium. Non quia enim dolorem. Aut possimus magnam odio voluptatum.', 'Dusty Roob DDS', 1, 3, 5, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Gayle Zieme', 2, 2020, NULL),
(350, 'Camila McLaughlin', 'Johnny Zulauf', 'Magdalen Witting', 70, '1986-08-26', 'img/news/news228.jpg', 'video/video.mp4', 419, 'Ea error et blanditiis voluptatem nihil molestias unde pariatur. Sit est facere aliquid. Ut et distinctio optio et. Optio cumque sed error amet quisquam esse aut a. Libero repudiandae dolorem explicabo ex quis.', 'Eliza Fritsch', 1, 10, 2, '2021-06-22 00:11:07', '2021-06-22 00:11:07', 'Aryanna Koss', 1, 2021, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `series_movies`
--

CREATE TABLE `series_movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `series_movies`
--

INSERT INTO `series_movies` (`id`, `name`, `year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Phim Bộ 2019', 2019, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(2, 'Phim Bộ 2020', 2020, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(3, 'Phim Bộ 2021', 2021, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(4, 'Phim Bộ 2022', 2022, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `single_movies`
--

CREATE TABLE `single_movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `single_movies`
--

INSERT INTO `single_movies` (`id`, `name`, `year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Phim Lẻ 2019', 2019, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(2, 'Phim Lẻ 2020', 2020, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(3, 'Phim Lẻ 2021', 2021, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(4, 'Phim Lẻ 2022', 2022, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `title`, `description`, `url_picture`, `created_at`, `updated_at`) VALUES
(1, 'chiến tranh', 'Sit neque est nemo corrupti provident. Incidunt est quisquam et. Et exercitationem aperiam saepe est consequatur similique.', 'img/news/news208.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(2, 'khoa học', 'Pariatur corporis quos ratione amet veniam totam recusandae omnis. Eum optio tempore aut neque. Nihil quis consequatur magnam voluptatem quia.', 'img/news/news208.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(3, 'quái vật', 'Officia qui accusantium et nobis facilis officia. Perferendis sed omnis et voluptas. Nesciunt vel magni est voluptas. Ex voluptatum et consequatur inventore molestiae ipsum sed perferendis.', 'img/news/news214.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(4, 'anh hung', 'Beatae eaque sed est amet natus tempore voluptates assumenda. Debitis dolores quos sit sint nemo. Et tempora commodi et vel tenetur dignissimos soluta quas. Fugit facilis tempora qui ducimus quas.', 'img/news/news227.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(5, 'hành động', 'Enim laboriosam qui sunt aliquam adipisci quia. Porro deserunt ipsum quod quisquam perferendis atque quo. Tempore omnis qui voluptate rem.', 'img/news/news241.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(6, 'đánh nhau', 'Magnam autem alias sapiente iure soluta voluptatum. Laborum soluta nisi et ut laudantium cum. Maiores laboriosam assumenda mollitia odio. Placeat tempora molestiae non perferendis eum harum.', 'img/news/news225.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(7, 'giết người', 'Explicabo voluptatem rerum nihil sint rerum. Nulla ea modi architecto cum aut pariatur aut. Repellat laudantium voluptas sed et vel eos. Sunt ipsam ut amet suscipit repudiandae architecto aut.', 'img/news/news240.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(8, 'máu me', 'Doloremque animi aliquam ducimus omnis repellendus cumque voluptatem. Et et rerum nisi aperiam. Hic est nostrum reiciendis deserunt.', 'img/news/news208.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(9, 'ám ảnh', 'Minus fugiat cumque maiores esse officia deleniti. Est vel ex laudantium ipsa nisi rerum. Aut voluptates qui neque omnis quaerat quisquam quis.', 'img/news/news233.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(10, 'kinh dị', 'Est et explicabo eius illo et. Vero officia eveniet omnis eum. Dolores ratione ipsa iusto sed eligendi sed harum quia.', 'img/news/news232.jpg', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(11, 'tình cảm', 'Earum molestiae nihil voluptate. Distinctio corporis alias doloribus delectus autem est autem. Eligendi in et unde modi voluptas tenetur fuga cum.', 'img/news/news205.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(12, 'gia đình', 'Quo earum accusantium qui atque quam. Sint magni odio repudiandae id in alias. Ex assumenda est et consequatur unde dolorum quo. Non veniam esse reiciendis.', 'img/news/news213.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(13, 'xã hội', 'Autem aut sit quasi fuga quia tenetur. Sit eos iste doloribus cupiditate voluptas aliquam quo molestias. Saepe voluptate iusto sit et blanditiis aut. Culpa excepturi dolor itaque et alias eos.', 'img/news/news202.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(14, 'tâm lý', 'Et eius sit eos atque dolore laborum veritatis ut. Et excepturi iste quis ut voluptas doloribus est ipsam. Reiciendis voluptatem amet neque sed id magnam autem.', 'img/news/news228.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(15, 'siêu nhân', 'Fuga libero aperiam rerum non omnis voluptatem architecto. Itaque consequatur aliquid autem odio est sunt.', 'img/news/news232.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(16, 'trẻ em', 'Temporibus error rerum rerum culpa. Iusto possimus eos voluptatibus. Pariatur iure nostrum consequatur tempora modi similique. Consequatur dolor odit tenetur.', 'img/news/news211.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(17, 'vui nhộn', 'Ad est doloremque quo ut. Soluta temporibus animi provident beatae occaecati et hic.', 'img/news/news209.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(18, 'hài hước', 'Et eligendi aut molestiae ea. Ratione sit repudiandae sunt sit. Quidem harum unde impedit quo nisi sit sunt sint. Temporibus nesciunt sit enim.', 'img/news/news225.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(19, 'võ thuật', 'Atque fuga voluptatem perspiciatis sapiente nihil nobis et magnam. Distinctio tempore aut dolorem ducimus repellat minus ut. Nihil doloribus totam expedita libero quidem.', 'img/news/news240.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19'),
(20, 'chiến thuật', 'Quia modi tempora voluptatem et et dolor numquam. Iure provident laborum non molestiae. Labore provident qui ut quisquam nihil dolores non.', 'img/news/news208.jpg', '2021-06-22 00:08:19', '2021-06-22 00:08:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags_movies`
--

CREATE TABLE `tags_movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tags_id` bigint(20) UNSIGNED NOT NULL,
  `movies_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags_movies`
--

INSERT INTO `tags_movies` (`id`, `tags_id`, `movies_id`, `created_at`, `updated_at`) VALUES
(1, 7, 21, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(2, 4, 29, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(3, 5, 39, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(4, 2, 48, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(5, 2, 50, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(6, 4, 12, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(7, 1, 44, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(8, 3, 37, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(9, 6, 30, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(10, 8, 27, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(11, 4, 44, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(12, 3, 19, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(13, 4, 10, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(14, 4, 41, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(15, 7, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(16, 5, 40, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(17, 10, 17, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(18, 4, 13, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(19, 8, 28, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(20, 6, 40, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(21, 1, 33, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(22, 6, 7, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(23, 1, 36, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(24, 2, 9, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(25, 8, 1, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(26, 5, 16, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(27, 10, 30, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(28, 9, 44, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(29, 6, 20, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(30, 4, 15, '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(31, 15, 133, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(32, 11, 1, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(33, 4, 133, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(34, 10, 129, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(35, 8, 195, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(36, 20, 74, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(37, 17, 171, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(38, 6, 52, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(39, 5, 192, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(40, 2, 173, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(41, 6, 90, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(42, 12, 96, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(43, 16, 102, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(44, 17, 31, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(45, 17, 198, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(46, 20, 161, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(47, 9, 57, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(48, 16, 13, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(49, 7, 190, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(50, 11, 61, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(51, 10, 98, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(52, 13, 120, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(53, 1, 62, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(54, 4, 173, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(55, 9, 23, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(56, 19, 39, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(57, 18, 27, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(58, 10, 143, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(59, 6, 75, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(60, 5, 127, '2021-06-22 00:09:36', '2021-06-22 00:09:36'),
(61, 3, 28, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(62, 12, 105, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(63, 17, 153, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(64, 13, 10, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(65, 8, 4, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(66, 17, 10, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(67, 10, 107, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(68, 9, 173, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(69, 14, 115, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(70, 17, 82, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(71, 6, 124, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(72, 3, 102, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(73, 8, 70, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(74, 8, 72, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(75, 7, 69, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(76, 1, 28, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(77, 1, 180, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(78, 11, 102, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(79, 16, 166, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(80, 1, 158, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(81, 10, 129, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(82, 14, 60, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(83, 5, 76, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(84, 4, 90, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(85, 12, 19, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(86, 2, 58, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(87, 13, 45, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(88, 2, 47, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(89, 5, 31, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(90, 18, 114, '2021-06-22 00:09:38', '2021-06-22 00:09:38'),
(91, 19, 250, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(92, 1, 148, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(93, 1, 160, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(94, 6, 168, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(95, 7, 94, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(96, 5, 131, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(97, 10, 50, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(98, 12, 264, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(99, 4, 336, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(100, 13, 66, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(101, 18, 25, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(102, 17, 48, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(103, 1, 171, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(104, 16, 286, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(105, 19, 168, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(106, 6, 155, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(107, 4, 153, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(108, 2, 200, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(109, 7, 309, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(110, 5, 234, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(111, 14, 209, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(112, 19, 64, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(113, 17, 225, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(114, 5, 139, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(115, 7, 292, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(116, 14, 278, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(117, 13, 72, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(118, 8, 113, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(119, 11, 182, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(120, 6, 201, '2021-06-22 00:13:57', '2021-06-22 00:13:57'),
(121, 18, 99, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(122, 1, 3, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(123, 12, 27, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(124, 9, 51, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(125, 16, 347, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(126, 8, 189, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(127, 9, 256, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(128, 8, 284, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(129, 5, 176, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(130, 19, 215, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(131, 13, 92, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(132, 12, 175, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(133, 3, 63, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(134, 3, 37, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(135, 19, 212, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(136, 9, 118, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(137, 10, 253, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(138, 5, 66, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(139, 16, 165, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(140, 14, 77, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(141, 1, 291, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(142, 18, 175, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(143, 6, 342, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(144, 15, 71, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(145, 12, 296, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(146, 8, 205, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(147, 17, 184, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(148, 2, 270, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(149, 8, 153, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(150, 9, 283, '2021-06-22 00:13:59', '2021-06-22 00:13:59'),
(151, 9, 93, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(152, 9, 297, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(153, 3, 233, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(154, 17, 224, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(155, 16, 119, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(156, 7, 256, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(157, 19, 114, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(158, 13, 108, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(159, 8, 137, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(160, 1, 279, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(161, 12, 65, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(162, 1, 104, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(163, 17, 85, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(164, 18, 28, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(165, 17, 146, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(166, 2, 51, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(167, 16, 231, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(168, 1, 129, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(169, 13, 171, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(170, 15, 211, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(171, 15, 338, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(172, 14, 61, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(173, 4, 31, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(174, 1, 245, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(175, 13, 260, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(176, 19, 348, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(177, 2, 89, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(178, 20, 24, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(179, 1, 99, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(180, 4, 109, '2021-06-22 00:14:01', '2021-06-22 00:14:01'),
(181, 12, 219, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(182, 15, 338, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(183, 20, 128, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(184, 13, 114, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(185, 8, 199, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(186, 7, 139, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(187, 18, 332, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(188, 2, 348, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(189, 7, 253, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(190, 7, 66, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(191, 16, 259, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(192, 15, 289, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(193, 5, 141, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(194, 13, 225, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(195, 12, 157, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(196, 10, 335, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(197, 20, 206, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(198, 18, 186, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(199, 6, 193, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(200, 12, 343, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(201, 13, 271, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(202, 17, 16, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(203, 9, 188, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(204, 12, 11, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(205, 15, 18, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(206, 8, 5, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(207, 14, 133, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(208, 11, 68, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(209, 6, 127, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(210, 19, 60, '2021-06-22 00:14:03', '2021-06-22 00:14:03'),
(211, 16, 165, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(212, 8, 295, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(213, 14, 281, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(214, 5, 250, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(215, 13, 232, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(216, 6, 221, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(217, 1, 53, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(218, 13, 319, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(219, 3, 5, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(220, 2, 131, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(221, 13, 10, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(222, 19, 293, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(223, 18, 182, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(224, 10, 225, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(225, 17, 193, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(226, 8, 224, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(227, 3, 344, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(228, 13, 166, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(229, 17, 223, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(230, 18, 149, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(231, 5, 232, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(232, 10, 233, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(233, 4, 331, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(234, 8, 98, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(235, 17, 143, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(236, 18, 61, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(237, 1, 101, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(238, 15, 207, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(239, 6, 269, '2021-06-22 00:14:05', '2021-06-22 00:14:05'),
(240, 11, 54, '2021-06-22 00:14:05', '2021-06-22 00:14:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theater_movies`
--

CREATE TABLE `theater_movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theater_movies`
--

INSERT INTO `theater_movies` (`id`, `name`, `year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Phim Chiếu Rạp 2019', 2019, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(2, 'Phim Chiếu Rạp 2020', 2020, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(3, 'Phim Chiếu Rạp 2021', 2021, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL),
(4, 'Phim Chiếu Rạp 2022', 2022, '2021-06-21 21:52:18', '2021-06-21 21:52:18', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_movies`
--

CREATE TABLE `type_movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_movies`
--

INSERT INTO `type_movies` (`id`, `name`, `handle`, `created_at`, `updated_at`) VALUES
(1, 'Phim Lẻ', 'single_movies', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(2, 'Phim Bộ', 'series_movies', '2021-06-21 21:52:18', '2021-06-21 21:52:18'),
(3, 'Phim Chiếu Rạp', 'theater_movies', '2021-06-21 21:52:18', '2021-06-21 21:52:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `level`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `active`, `email_verified`, `provider`, `provider_id`, `address`, `deleted_at`, `avatar`, `phone`) VALUES
(1, 'Daniella Weimann', 'Jaylen Gorczany Jr.ád', 0, 'sasha23@example.org', NULL, 'dEoOdgBKii', '2021-06-21 21:52:17', '2021-06-23 00:38:30', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', '2021-06-23 00:38:30', 'author.jpg', NULL),
(2, 'Julian Heidenreich', 'Trần Anh Đức', 0, 'rleffler@example.org', '$2y$10$Wbtg5NJc0PT3U9.eytDhBOc2RGoTt1/nFHra2nCPzVMiauiIkjfiO', 'EAuzks4Jy2', '2021-06-21 21:52:17', '2021-06-23 03:22:35', 1, NULL, NULL, NULL, 'Thôn 1B, Xã Thủy Phù, Tx Hương Thủy, Tỉnh TT Huế', NULL, 'avatar1.png', '0355238254'),
(3, 'Mr. Deven Walter', 'Marshall Green', 0, 'durgan.priscilla@example.net', '$2y$10$R4RieksEcth1DAxXwUt3POg0E5DOs37Of9NnB8GHUcm22AE5OCeKq', '6kcUeadeBT', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar4.png', NULL),
(4, 'Keven Wuckert', 'Dr. Skyla Labadie DDS', 0, 'mdickens@example.org', '$2y$10$74ExFYoNGCMNQEC8dFs3tenCXuzrKfXBfMZz.a0rkL/jZmXDVmZlu', 'qtLqlj8jfI', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar1.png', NULL),
(5, 'Jacklyn Kulas', 'Dameon Schuster', 0, 'xpaucek@example.org', '$2y$10$0f90BauyulaRYbx.FJHeJ.k9epTx.a6EaHlrA84S1g.BQ/t63lzYK', '8fm3HFeyMV', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar4.png', NULL),
(6, 'Taylor Bogan', 'Judd Muller', 0, 'neal39@example.net', '$2y$10$/VxQ2ff41EACE1LktKcNb.p.DWIMcLeeHRRLLc7Ko0.hXa93lWPxe', 'i75k9CSc6l', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar4.png', NULL),
(7, 'Camryn Dickens', 'Deon Rutherford', 0, 'harry93@example.net', '$2y$10$O4jsOvcR6kq8ca/pImuyieJHsgvBCGJobKaC4uszlT95BZbyK.MiS', 'CXIwe0xFm2', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar2.png', NULL),
(8, 'Garry Windler DVM', 'Mr. Dean Ruecker III', 0, 'addie.farrell@example.org', '$2y$10$jQ9c35kekYoZ.nqMsNHNcukMKjuTUUPpiA3LCVjgzlZYDgNzYD4q.', 'OQ66FfXiKx', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar2.png', NULL),
(9, 'Percy Stroman PhD', 'Juliana Parisian', 0, 'mitchel.bednar@example.net', '$2y$10$cnpwjP8M1PcbO0cyRaw9LOofeV6QCX7PL43zDzrIWk7Ll9gW99U6S', '3wdH27dW7a', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar1.png', NULL),
(10, 'Gay Bosco PhD', 'Eloisa Quigley', 0, 'tlesch@example.net', '$2y$10$F/Mf39oKnwLjTjbeG152MOjA1JthXad2wQmwwatzHE7AZ28mo6yMq', 'nQ7qXqqq4b', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar4.png', NULL),
(11, 'anhduc', 'anhduc', 1, 'anhduc@gmail.com', '$2y$10$jTtuzahqM3cz7HknR03Yz.G6utpjVAjwHzlQJszkEZbONAk84MDQa', 'vnFLdUrq0uRfSPztRBcWD1LNKjuSvS1kuNIEPZKvDBmWjilhdBwpmdlw6xiA', '2021-06-21 21:52:17', '2021-06-21 21:52:17', 1, NULL, NULL, NULL, 'Tổ 1, Phú Bài, Hương Thủy ,TT Huế', NULL, 'avatar2.png', NULL),
(13, 'admin', 'admin', 1, 'admin@gmail.com', '$2y$10$sZXCaodALuO05.IqU5ao..6qe60Cq.CswMh0cTiYFNHW18FxgIVPa', 'ecCiOBdmwnLBU5Za7Epsdm3nZmadQXEVQCln7gzdFfYz8xPx2DzWAoEW26W6', '2021-06-22 23:34:17', '2021-06-24 02:25:20', 1, 'hNzi3mRfQ66XJ5Swj56avpQMlQLSCJ7gpGNP8nGU', NULL, NULL, 'Thôn 5, Xã Thủy Phù, Tx Hương Thủy, Tỉnh TT Huế', NULL, 'avatar3.png', '0355238254');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories_tags`
--
ALTER TABLE `categories_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_tags_categories_id_foreign` (`categories_id`),
  ADD KEY `categories_tags_tags_id_foreign` (`tags_id`);

--
-- Chỉ mục cho bảng `contries`
--
ALTER TABLE `contries`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_contries_id_foreign` (`contries_id`),
  ADD KEY `movies_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `series_movies`
--
ALTER TABLE `series_movies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `single_movies`
--
ALTER TABLE `single_movies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags_movies`
--
ALTER TABLE `tags_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_movies_tags_id_foreign` (`tags_id`),
  ADD KEY `tags_movies_movies_id_foreign` (`movies_id`);

--
-- Chỉ mục cho bảng `theater_movies`
--
ALTER TABLE `theater_movies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_movies`
--
ALTER TABLE `type_movies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `categories_tags`
--
ALTER TABLE `categories_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `contries`
--
ALTER TABLE `contries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT cho bảng `series_movies`
--
ALTER TABLE `series_movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `single_movies`
--
ALTER TABLE `single_movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tags_movies`
--
ALTER TABLE `tags_movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT cho bảng `theater_movies`
--
ALTER TABLE `theater_movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `type_movies`
--
ALTER TABLE `type_movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `categories_tags`
--
ALTER TABLE `categories_tags`
  ADD CONSTRAINT `categories_tags_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_tags_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movies_contries_id_foreign` FOREIGN KEY (`contries_id`) REFERENCES `contries` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tags_movies`
--
ALTER TABLE `tags_movies`
  ADD CONSTRAINT `tags_movies_movies_id_foreign` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tags_movies_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
