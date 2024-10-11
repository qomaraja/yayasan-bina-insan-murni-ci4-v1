<!doctype html>
<html lang="en">

<head>
    <link href="<?= base_url('/front/images/binsani_logo.png'); ?>" rel="shortcut icon">
    <?= view('layout/meta'); ?>
    <title>Profil</title>
    <?= view('layout/css'); ?>
</head>

<body class="px-3">

    <?= view('layout/header'); ?>

    <div class="container-fluid pt-5 mt-5" id="profil">

        <!-- wilayah profil -->
        <div class="text-center">
            <h1>TENTANG KAMI</h1>
            <img src="<?= base_url('/front/images/binsani_company.jpeg'); ?>" alt="Gambar" class="img-fluid">
        </div>
        <div class="row mt-3">
            <p>Alhamdulillah, dalam perenungan akan nikmat dan anugerah yang telah diberikan oleh Allah SWT kepada kami sebagai warga negara Indonesia, kami tidak dapat mengabaikan kebesaran dan kemurahan-Nya atas ciptaan-Nya yang luar biasa, termasuk di antaranya adalah Negara Kesatuan Republik Indonesia (NKRI). NKRI bukanlah sekadar sebuah entitas politik, tetapi sebuah hadiah besar yang telah dianugerahkan kepada bangsa Indonesia. Kami mengakui bahwa NKRI merupakan warisan luhur dari para pendahulu kami, yang telah memperjuangkan kemerdekaan dan membangun fondasi bagi negara ini. Dalam keberagaman alam dan budaya yang dimiliki oleh Indonesia, kami melihat sebuah keajaiban yang telah diciptakan oleh Sang Pencipta.</p>
        </div>
        <div class="row">
            <p>Pancasila dan Undang-Undang Dasar 1945, sebagai landasan negara, mencerminkan cita-cita mulia untuk mewujudkan kesejahteraan dan keadilan bagi seluruh rakyat Indonesia. Namun, kami sadar bahwa perjalanan menuju terwujudnya cita-cita tersebut masih memerlukan kerja keras, kesabaran, dan komitmen yang kuat dari setiap individu dalam masyarakat. Oleh karena itu, sebagai bentuk tanggung jawab kami sebagai warga negara yang beriman, kami merasa terpanggil untuk ikut serta dalam membangun negara ini. Itulah mengapa kami, dengan penuh kesadaran dan semangat, mendirikan yayasan Bina Insan Murni (Binsani) sebagai wadah nyata dalam mengimplementasikan nilai-nilai kemanusiaan dan kebersamaan.</p>
        </div>
        <div class="row">
            <p>Yayasan Binsani kami rancang sebagai tempat untuk menjalankan program-program pembangunan yang berkelanjutan, tidak hanya untuk kesejahteraan material, tetapi juga spiritual masyarakat. Dalam upaya kami untuk mencapai tujuan tersebut, kami telah merumuskan program-program yang komprehensif dalam tiga tahap, yaitu jangka pendek, jangka menengah, dan jangka panjang. Melalui program-program tersebut, kami bertekad untuk menjangkau dan memberdayakan berbagai lapisan masyarakat, terutama mereka yang rentan seperti kaum dhuafa, anak yatim/piatu, dan anak-anak putus sekolah. Kami percaya bahwa dengan memberikan perhatian dan bantuan kepada mereka yang membutuhkan, kami dapat mewujudkan nilai-nilai kemanusiaan sejati dan membawa perubahan yang positif dalam masyarakat.</p>
        </div>
        <!-- wilayah profil -->

        <!-- wilayah visimisi -->
        <div class="row my-5 text-center px-5 py-2" id="visimisi">
            <div class="row ">
                <h1 class="font-bold font-xl pt-2">VISI</h1>
                <hr>
                <p>Menjadi yayasan yang amanah dan profesional, berperan aktif membantu pemerintah dalam menangatasi masalah di bidang sosial, kemanusiaan dan keagamaan dengan membina generasi insan murni, dalam rangka mewujudkan cita-cita bangsa, sebagai sarana ibadah dalam menuju ridho Allah SWT.</p>
            </div>
            <div class="row">
                <h1 class="font-bold font-xl pt-2">MISI</h1>
                <hr>
                <div class="col-md">
                    <ol class="list-numbered">
                        <li class="list-item">Berperansertra dalam menagatasi masalah sosial dengan menyelenggarakan panti asuhan,panti jompo dan penanganan anak yatim piatu.</li>
                        <li class="list-item">Membantu meningkatkan perekonomian dan taraf hidup sosial masyarakat miskin melalui pembinaan ekonomi serta penyaluran zakat, infaq, dan sedekah</li>
                        <li class="list-item">Berperanserta dalam mencerdaskan kehidupan bangsa dengan meningkatkan taraf pendidikan masyarakat tidak mampu ataupun yang putus sekolah sehingga mampu mencapai jenjang pendidikan yang lebih tinggi.</li>
                        <li class="list-item">Membina generasi insan murni, yaitu manusia yang beriman, bertaqwa, berakhlak mulia, ikhlas dan amanah dengan mendirikan sarana ibadah, menyelenggarakan pendidikan pesantren, madrasah dan pendidikan dasar hingga tinggi.</li>
                    </ol>
                </div>
                <div class="col-md">
                    <ol class="list-numbered">
                        <li class="list-item">Meningkatkan syi'ar islam dengan menyelenggarakan kegiatan keagamaan</li>
                        <li class="list-item">Berperan serta dalam melestarikan lingkungan hidup dengan memberikan pemahaman pola hidup alami berbasis organik, gerakan penanaman pohon dan manajemen lingkungan sehat.</li>
                        <li class="list-item">Berperanserta dalam nilai kemanusiaan dengan membantu korban bencana, fakir miskin, tuna wisma dan gelandangan.</li>
                        <li class="list-item">Meningkatkan kesehatan masyarakat dengan pembinaan pola hidup sehat dan olahraga, penyelengaraan pelayanan kesehatan seperti poliklinik/rumah sakit.</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- wilayah visimisi -->

        <!-- wilayah program -->
        <div class="row my-5">
            <h1 class="font-bold text-center font-xl pb-2">PROGRAM KAMI</h1>
            <div id="programCarousel" class="carousel slide px-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach (array_chunk($program, 4) as $index => $program_chunk) : ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
                            <div class="row">
                                <?php foreach ($program_chunk as $p) : ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="program card" id="card">
                                            <img src="<?= base_url('/front/images/program/' . $p['img']); ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $p['nama_program']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" type="button" data-bs-target="#programCarousel" data-bs-slide="prev">
                </a>
                <a class="carousel-control-next" type="button" data-bs-target="#programCarousel" data-bs-slide="next">
                </a>
            </div>
        </div>
        <!-- wilayah program -->

        <!-- wilayah surat resmi -->
        <div class="row mt-5 mb-3">
            <h1 class="font-bold text-center font-xl">SURAT RESMI</h1>
        </div>
        <div class="row text-center mb-5">
            <div class="col-md-3">
                <h5>AKTA NOTARIS</h5>
                <img src="<?= base_url('/front/images/surat/akta_notaris.jpg'); ?>" class="img-fluid a4-size" alt="">
            </div>
            <div class="col-md-3">
                <h5>SK KEMENKUMHAM</h5>
                <img src="<?= base_url('/front/images/surat/sk_menkumham.jpg'); ?>" class="img-fluid a4-size" alt="">
            </div>
            <div class="col-md-3">
                <h5>SKT KESBANGPOL</h5>
                <img src="<?= base_url('/front/images/surat/skt_kesbangpol.jpg'); ?>" class="img-fluid a4-size" alt="">
            </div>
            <div class="col-md-3">
                <h5>STD DINSOS</h5>
                <img src="<?= base_url('/front/images/surat/std_dinsos.jpg'); ?>" class="img-fluid a4-size" alt="">
            </div>
        </div>
        <!-- wilayah surat resmi -->

    </div>

    <?= view('layout/ingin'); ?>

    <?= view('layout/footer'); ?>

    <?= view('layout/js'); ?>

</body>

</html>