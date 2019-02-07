-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 12:48 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pliken`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `artikel` mediumtext NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `artikel`, `image`) VALUES
(8, 'Optimalisasi Perpustakaan Desa Pliken  ', '<p>Balai Desa Pliken telah memiliki perpustakaan umum yang dapat dikunjungi oleh berbagai kalangan masyarakat desa. Buku berbagai genre yang terdapat di perpustakaanpun dapat dibaca secara gratis untuk menambah wawasan masyarakat. KKN PPM UGM 2017 berusaha untuk mengoptimalisasikan keadaan perpustakaan desa dengan melakukan pembersihan, penginventarisasian serta penambahan buku sehingga fungsi perpustakaan dapat berfungsi secara lebih optimal. Buku-buku mengenai pertanian dan pariwisata pun ditambahkan ke dalam koleksi terbaru sehingga pengetahuan masyarakat untuk mempersiapkan desa wisata pun semakin bertambah. Jika minat baca masyarakat terus meningkat di tahun-tahun berikutnya, maka mewujudkan Desa Pliken sebagai Desa Wisata pun dapat berjalan dengan lebih mudah. Tidak menutup kemungkinan akan muncul semakin banyak inovasi-inovasi baru mengenai bagaimana Desa Pliken sebagai Desa Wisata ini harus dikembangkan sehingga dapat memiliki nama dalam skala nasional maupun internasional.</p><p><strong>#kknugm</strong></p><p><strong>#UGMasik</strong></p><p><strong>#diarykkn</strong></p><p><strong>#kuliahkerjanyeni</strong></p><p><br></p><p>Mau tau kegiatan kita selanjutnya? Tetep pantengin Instagram Plikenchronicles ya!!!</p><p>Setiap akhir pekan, kita akan update informasi kegiatan selama satu minggu.</p><p><br></p><p>Salam senyum ðŸŒº</p>', 'perpustakaan_1024x683.jpg'),
(17, 'Pembuatan Breeding Center  Desa Pliken ', '<p>Desa Pliken, Kecamatan Kembaran, Kabupaten Banyumas merupakan salah satu desa yang sudah melakukan sistem PHT (Pengendalian hama terpadu). Pengendalian Hama Terpadu (PHT) adalah suatu konsepsi atau cara berpikir mengenai pengendalian Organisme Pengganggu Tumbuhan (OPT) dengan pendekatan ekologi yang bersifat multidisiplin untuk mengelola populasi hama dan penyakit dengan memanfaatkan beragam taktik pengendalian yang kompatibel dalam suatu kesatuan koordinasi pengelolaan. Karena PHT merupakan suatu sistem pengendalian yang menggunakan pendekatan ekologi, maka pemahaman tentang biologi dan ekologi hama dan penyakit menjadi sangat penting. Ada empat prinsip dasar yang mendorong penerapan PHT secara nasional,terutama dalam rangka program pembangunan berkelanjutan yang berwawasan lingkungan. Beberapa prinsip yang mengharuskannya PHT pada tanaman sayuran adalah seperti dinyatakan dalam uraian berikut ini.</p><h4><strong>1. Budidaya tanaman sehat</strong></h4><p>Budidaya tanaman yang sehat dan kuat menjadi bagian penting dalam program pengendalian hama dan penyakit. Tanaman yang sehat akan mampu bertahan terhadap serangan hama dan penyakit dan lebih cepat mengatasi kerusakan akibat serangan hama dan penyakit tersebut. Oleh karena itu, setiap usaha dalam budidaya tanaman paprika seperti pemilihan varietas, penyemaian, pemeliharaan tanaman sampai penanganan hasil panen perlu diperhatikan agar diperoleh pertanaman yang sehat, kuat dan produktif, serta hasil panen yang tinggi.</p><h4><strong>2. Pemanfaatan musuh alami</strong></h4><p>Pengendalian hayati dengan memanfaatkan musuh alami yang potensial merupakan tulang punggung PHT. Dengan adanya musuh alami yang mampu menekan populasi hama, diharapkan di dalam agroekosistem terjadi keseimbangan populasi antara hama dengan musuh alaminya, sehingga populasi hama tidak melampaui ambang toleransi tanaman.</p><h4><strong>3. Pengamatan rutin atau pemantauan</strong></h4><p>Agroekosistem bersifat dinamis, karena banyak faktor di dalamnya yang saling mempengaruhi satu sama lain. Untuk dapat mengikuti perkembangan populasi hama dan musuh alaminya serta untuk mengetahui kondisi tanaman, harus dilakukan pengamatan secara rutin. Informasi yang diperoleh digunakan sebagai dasar tindakan yang akan dilakukan.</p><h4><strong>4. Petani sebagai ahli PHT</strong></h4><p>Penerapan PHT harus disesuaikan dengan keadaan ekosistem setempat. Rekomendasi PHT hendaknya dikembangkan oleh petani sendiri. Agar petani mampu menerapkan PHT, diperlukan usaha pemasyarakatan PHT melalui pelatihan baik secara formal maupun informal.</p><p>Dalam melaksanakan sistem ini, pembuatan breeding center merupakan salah satu cara untuk mengembangkan bunga refugia sebagai tempat hidup musuh alami. Tanaman Refugia berfungsi sebagai microhabitat dari serangga musuh alami dan penarik hama tanaman. Tanaman yang berbunga seperti kenikir, jengger ayam, tapak dara, bunga matahari, tunera, mentega dan kembang kertas masuk golongan tanaman refugia. Bunga tanaman tersebut akan mengeluarkan nectar yang baunya menarik serangga musuh alami maupun serangga hama tanaman untuk datang. &nbsp;</p><p>Penanaman refugia pada lahan sawah dan sayuran atau sekitarnya merupakan suatu usaha konservasi serangga musuh alami. Hal tersebut dimaksudkan supaya tercipta agroekosistem di lahan pertanian bisa terjaga. Apabila agroekosistem lahan pertanian stabil maka populasi hama akan seimbang dengan populasi serangga musuh alami. Pembuatan breeding center yang dilakukan mahasiswa KKN-PPM UGM diharapkan dapat membantu petani agar bisa memanfaatkan musuh alami untuk menaggulangi masalah OPT. Penggunaan pestisida bisa ditekan atau bahkan tidak diaplikasikan agar menghasilkan produk pertanian yang lebih sehat. Kesadaran petani untuk tidak mengaplikasikan pestisida apabila jumlah OPT masih di bawah ambang batas ekonomi diharapakan agar tidak merusak lingkungan.</p>', 'bc.jpg'),
(18, ' Integrasi Padi - Ternak melalui Pengolahan Kompos', '<p>Tahukah kamu? &nbsp;Beberapa warga Desa Pliken cukup banyak yg beternak sapi. Peternakan sapi tersebut menghasilkan kotoran yg melimpah. Agar dapat dimanfaatkan, Tim KKN UGM mengolahnya menjadi pupuk kompos untuk menyuburkan lahan pertanian. Pupuk kompos dibuat pada kotak kayu dengan cara mencampur kotoran sapi, seresah, sekam, molase/dedak, dan larutan em4 yang ditutup plastik kedap udara. Kompos kemudian di balik setiap 3 hari sekali dan dapat dipanen setelah 4-5 minggu. Kelebihan dari penggunaan pupuk kompos ini selain murah, mudah, namun juga ramah lingkungan. Harapannya petani jadi lebih hemat dan produktif.</p><p><br></p><p><strong>#kknugm</strong></p><p><strong>#UGMasik</strong></p><p><strong>#diarykkn</strong></p><p><strong>#kuliahkerjanyeni</strong></p><p>-------------------------------------------</p><p><br></p><p>Mau tau kegiatan kita selanjutnya? Tetep pantengin Instagram Plikenchronicles ya!!!</p><p>Setiap akhir pekan, kita akan update informasi kegiatan selama satu minggu.</p><p><br></p><p>Salam senyum ðŸŒº</p>', 'tes_800x533.jpeg'),
(19, 'Kegiatan Sosialisasi dan Cek Kesehatan di Posyandu', '<p>Kali ini tim Medika membantu kegiatan posyandu balita dan lansia di Desa Pliken. Sobat tau gak sih? Di Desa Pliken memiliki Posyandu sejumlah 10 dengan nama-nama buah loh, seperti pepaya, nanas, semangka, duren, manggis, mangga, dan lain-lain. Mantap kaan. Pada tanggal 4 dan 5 Juli, Tim Medika dibantu teman-teman dari kluster lain memberikan sosialisasi di Posyandu Pepaya dan Srikaya. Sosialisasi kesehatan yang diberikan mengenai Penyakit Tidak Menular (PTM) seperti hipertensi, hiperlipidemia, diabetes melitus, asam urat yang biasanya tinggi probabilitasnya karena faktor usia. Sehingga sosialisasi ini ditujukan untuk Lansia. Selain itu, kami memberikan pemeriksaan kesehatan yaitu mengecek tekanan darah, kadar gula darah, kolesterol dan asam urat. Hal ini bertujuan agar memberikan pemahaman kepada masyarakat bahwa melakukan pemeriksaan rutin adalah wajib dilakukan untuk mengontrol pola makan dan gaya hidup sehat.</p><p><br></p><p><strong>#kknugm</strong></p><p><strong>#UGMasik</strong></p><p><strong>#diarykkn</strong></p><p><strong>#kuliahkerjanyeni</strong></p><p><br></p><p>Mau tau kegiatan kita selanjutnya? Tetep pantengin Instagram Plikenchronicles ya!!!</p><p>Setiap akhir pekan, kita akan update informasi kegiatan selama satu minggu.</p><p><br></p><p>Salam senyum ðŸŒº</p>', 'posyandu.jpeg'),
(20, 'Selfie Deck Desa Pliken', '<p>Selfie Deck merupakan salah satu spot foto menarik yang ada di Pliken. Letaknya berada di Jalan Pertanian, tepatnya di deretan sawah sebelah timur. Bentuknya mirip jembatan bambu dengan ornamen warna-warni yang terpasang di samping kanan dan kirinya. Tempat ini sengaja dibangun di tengah sawah agar pengunjung dapat menikmati sensasi bermain di desa. Disini, pengunjung dapat mengambil foto dengan latar belakang sawah yang luas.&nbsp;</p><p><br></p><p>Jika sawah sedang menghijau, pengunjung akan mendapatkan foto berlatar belakang sawah yang sangat indah. Hamparan sawah hijau akan menambah kesan sejuk dan alami. Bagi pengunjung yang suka berfoto dengan gaya alam hijau, spot foto &nbsp;ini sangat cocok digunakan! Eitssss, bukan berarti hanya pada saat hijau saja tempat ini cocok untuk dikunjungi. Jika sawah tidak menghijau, pengunjung bisa memanfaatkan foto pada jam kapanpun, karena akan tetap mendapatkan hasil foto yang unik.</p><p><br></p><p>Pada pagi hari, matahari terbit akan terlihat muncul dari sebelah timur selfie deck. Di waktu ini, pengunjung bisa memanfaatkannya untuk berfoto ala-ala backlight photograpy. Beranjak ke siang hari, langit biru akan menyapa para pengunjung sehingga cocok digunakan untuk foto dengan gaya ceria. Ornamen warna-warni sangat cocok dimanfaatkan sebagai properti di waktu untuk menambah kesan ceria dan bahagia. Menjelang sore hari, pengunjung bisa menikmati semilir angin di tengah sawah sembari menunggu matahari terbenam dari ufuk barat. Tau nggak sobat? Di Selfi Deck Pliken, matahari terbenam sangat terlihat dengan jelas, loh! Pengunjung bisa memanfaatkannya untuk foto siluet dengan background semburat langit senja.&nbsp;</p><p><br></p><p>Tertarik untuk mencoba foto di Selfie Deck Pliken? Yuk, langsung saja datang kesini !! Tempatnya mudah untuk ditemukan dan rutenya tidak susah untuk dilewati. Oh ya, yempat ini sudah terdaftar di Google Maps, loh! Jika pengunjung bingung bisa mencarinya dengan kata kunci Selfie Deck Pliken.</p>', 'sd5.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
