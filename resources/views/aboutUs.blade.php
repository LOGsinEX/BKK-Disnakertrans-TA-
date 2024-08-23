@extends('layouts.app')

@section('title', 'About Us')

@section('main')

<head>

    <style>
    .animasi:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease;
        transform: translateY(-10px);
        transition: transform 0.3s ease;
    }
    </style>

</head>

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card mb-0 animasi">
                    <div class="card-header text-center">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="section-header">
                                <h1>Tentang Kami</h1>
                            </div>

                            <style>
                            .gallery {
                                --g: 1vw;
                                /* control the gap */
                                --f: 1.5;
                                /* control the scale factor */

                                display: grid;
                                gap: var(--g);
                                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                                justify-content: center;
                            }

                            .gallery>img {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                cursor: pointer;
                                filter: grayscale(80%);
                                transition: .35s linear;
                            }

                            .gallery img:hover {
                                filter: grayscale(0);
                                transform: scale(var(--f));
                            }

                            body {
                                margin: 0;
                                min-height: 100vh;
                                display: grid;
                                place-content: center;
                                background: #ffff;
                            }
                            </style>
                            </head>

                            <body>
                                <div class="gallery">
                                    <img src="{{ asset('images/magang1.png') }}" alt="a forest after an apocalypse">
                                    <img src="{{ asset('images/magang2.jpg') }}" alt="a waterfall and many rocks">
                                    <img src="{{ asset('images/magang3.jpg') }}" alt="a house on a mountain">

                                </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <p>Selamat datang di Sistem Informasi BKK Disnakertrans Provinsi Banten Kami berdedikasi untuk
                            membantu pencari kerja menemukan
                            pekerjaan impian mereka dan menghubungkan mereka dengan perusahaan yang bereputasi baik.
                            Misi kami adalah menyediakan platform di mana pencari kerja dapat menjelajahi berbagai
                            peluang kerja dan pengusaha dapat menemukan individu berbakat untuk bergabung dengan tim
                            mereka.</p>
                        <p>Di Website BKK Disnakertrans Provinsi Banten, kami berusaha untuk membuat proses pencarian
                            kerja semulus dan seefisien
                            mungkin bagi pencari kerja dan pengusaha. Baik Anda mencari pekerjaan pertama atau berusaha
                            untuk memajukan karir Anda, kami di sini untuk mendukung Anda setiap langkahnya.</p>
                        <p>Terima kasih telah memilih BKK Disnakertrans untuk kebutuhan pencarian kerja Anda!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-header text-center">
                        <h1>Berita Artikel</h1>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-11 order-lg-1">
                                <div class="blog-posts">
                                    <article class="post">
                                        <div class="row mb-3">
                                            <div class="col-lg-5">
                                                <div class="post-image">
                                                    <a href="https://disnakertrans.bantenprov.go.id/berita/pj-gubernur-al-muktabar-kukuhkan-gugus-tugas-daerah-bisnis-dan-ham-provinsi-banten-periode-2023-2025"
                                                        onclick="addViewBerita('5956f313-e0ec-44cd-8227-d3fee5b22426')">
                                                        <img src="https://disnakertrans.bantenprov.go.id/storage/disnakertrans/image_berita-a393bc52-7fd9-4bc5-a8dc-d0f7016262d5.jpg"
                                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                            alt="Pj Gubernur Al Muktabar Kukuhkan Gugus Tugas Daerah Bisnis dan HAM Provinsi Banten Periode 2023 - 2025">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="post-content">
                                                    <h2
                                                        class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                        <a style="color:#08c"
                                                            href="https://disnakertrans.bantenprov.go.id/berita/pj-gubernur-al-muktabar-kukuhkan-gugus-tugas-daerah-bisnis-dan-ham-provinsi-banten-periode-2023-2025"
                                                            onclick="addViewBerita('5956f313-e0ec-44cd-8227-d3fee5b22426')">Pj
                                                            Gubernur Al Muktabar
                                                            Kukuhkan Gugus Tugas Daerah Bisnis dan HAM Provinsi Banten
                                                            Periode 2023 - 2025</a>
                                                    </h2>
                                                    <p class="mb-0">Penjabat (Pj) Gubernur Banten Al Muktabar
                                                        mengukuhkan Gugus Tugas Daerah Bisnis
                                                        dan HAM Provinsi Banten Periode 2023 - 2025 di Pendopo Gubernur
                                                        Banten KP3B Curug, Kota
                                                        Serang, Rabu (3/4/2024). Pembentukan Gugus Tugas Daerah Bisnis
                                                        dan HAM merupakan bentuk dari
                                                        kewajiban negara dalam menghormati meli.... </p>

                                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a
                                                            href="https://disnakertrans.bantenprov.go.id/berita/pj-gubernur-al-muktabar-kukuhkan-gugus-tugas-daerah-bisnis-dan-ham-provinsi-banten-periode-2023-2025"
                                                            onclick="addViewBerita('5956f313-e0ec-44cd-8227-d3fee5b22426')"
                                                            class="btn btn-xs btn-primary text-1 text-uppercase">Baca
                                                            Selengkapnya</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <br><br>

                                    <article class="post">
                                        <div class="row mb-3">
                                            <div class="col-lg-5">
                                                <div class="post-image">
                                                    <a href="https://disnakertrans.bantenprov.go.id/berita/menaker-apresiasi-penyedia-layanan-aplikasi-berikan-insentif-bagi-mitra-kerja"
                                                        onclick="addViewBerita('f1b3d6b4-945f-4478-b29b-225535b67b27')">
                                                        <img src="https://disnakertrans.bantenprov.go.id/storage/disnakertrans/image_berita-a2437db9-c796-46e4-abf2-5e524dbc9e8f.jpg"
                                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                            alt="Menaker Apresiasi Penyedia Layanan Aplikasi Berikan Insentif Bagi Mitra Kerja">

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="post-content">
                                                    <h2
                                                        class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                        <a style="color:#08c"
                                                            href="https://disnakertrans.bantenprov.go.id/berita/menaker-apresiasi-penyedia-layanan-aplikasi-berikan-insentif-bagi-mitra-kerja"
                                                            onclick="addViewBerita('f1b3d6b4-945f-4478-b29b-225535b67b27')">Menaker
                                                            Apresiasi
                                                            Penyedia Layanan Aplikasi Berikan Insentif Bagi Mitra
                                                            Kerja</a>
                                                    </h2>
                                                    <p class="mb-0">Menteri Ketenagakerjaan, Ida Fauziyah, memberikan
                                                        aprsiasi kepada perusahaan
                                                        layanan berbasis aplikasi yang memberikan insentif kepada mitra
                                                        kerjanya jelang Hari Raya
                                                        Idulfitri 1445 Hijriah. Apresiasi ini disampaikannya usai
                                                        menghadiri Rapat Kerja dengan
                                                        Komisi IX DPR RI, di Jakarta, Selasa (26/3/20.... </p>

                                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a
                                                            href="https://disnakertrans.bantenprov.go.id/berita/menaker-apresiasi-penyedia-layanan-aplikasi-berikan-insentif-bagi-mitra-kerja"
                                                            onclick="addViewBerita('f1b3d6b4-945f-4478-b29b-225535b67b27')"
                                                            class="btn btn-xs btn-primary text-1 text-uppercase">Baca
                                                            Selengkapnya</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <br><br>

                                    <article class="post">
                                        <div class="row mb-3">
                                            <div class="col-lg-5">
                                                <div class="post-image">
                                                    <a href="https://disnakertrans.bantenprov.go.id/berita/pelatihan-admin-pengelola-website-ppid"
                                                        onclick="addViewBerita('312f5f7a-0f47-4cc7-80fd-a90b84f71223')">
                                                        <img src="https://disnakertrans.bantenprov.go.id/storage/disnakertrans/image_berita-16387d8c-c15a-484a-b5f1-ec1dcf843d27.jpg"
                                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                            alt="Pelatihan Admin Pengelola Website PPID">

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="post-content">
                                                    <h2
                                                        class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                        <a style="color:#08c"
                                                            href="https://disnakertrans.bantenprov.go.id/berita/pelatihan-admin-pengelola-website-ppid"
                                                            onclick="addViewBerita('312f5f7a-0f47-4cc7-80fd-a90b84f71223')">Pelatihan
                                                            Admin
                                                            Pengelola Website PPID</a>
                                                    </h2>
                                                    <p class="mb-0">Serang - Guna meningkatkan pengelolaan website
                                                        Pejabat Pengelola Informasi dan
                                                        Dokumentasi Publik (PPID) Pelaksana di setiap Organisasi
                                                        Perangkat Daerah (OPD) di
                                                        lingkungan Pemerintah Provinsi Banten, Dinas Pengembangan Sumber
                                                        daya Manusia (BPSDM)
                                                        Provinsi Banten menyelenggarakan pelatihan bagi Admi.... </p>
                                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a
                                                            href="https://disnakertrans.bantenprov.go.id/berita/pelatihan-admin-pengelola-website-ppid"
                                                            onclick="addViewBerita('312f5f7a-0f47-4cc7-80fd-a90b84f71223')"
                                                            class="btn btn-xs btn-primary text-1 text-uppercase">Baca
                                                            Selengkapnya</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <br><br>

                                    <article class="post">
                                        <div class="row mb-3">
                                            <div class="col-lg-5">
                                                <div class="post-image">
                                                    <a href="https://disnakertrans.bantenprov.go.id/berita/kemnaker-komitmen-hadirkan-pelatihan-vokasi-yang-berkualitas"
                                                        onclick="addViewBerita('93093654-c869-4e2b-8416-1c087c6671c0')">
                                                        <img src="https://disnakertrans.bantenprov.go.id/storage/disnakertrans/image_berita-3446ab9c-86ad-48d9-8ac7-60bf1bb67877.jpg"
                                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                            alt="Kemnaker Komitmen Hadirkan Pelatihan Vokasi yang Berkualitas">

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="post-content">
                                                    <h2
                                                        class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                        <a style="color:#08c"
                                                            href="https://disnakertrans.bantenprov.go.id/berita/kemnaker-komitmen-hadirkan-pelatihan-vokasi-yang-berkualitas"
                                                            onclick="addViewBerita('93093654-c869-4e2b-8416-1c087c6671c0')">Kemnaker
                                                            Komitmen
                                                            Hadirkan Pelatihan Vokasi yang Berkualitas</a>
                                                    </h2>
                                                    <p class="mb-0">Kementerian Ketenagakerjaan terus berkomitmen untuk
                                                        menghadirkan pelatihan
                                                        vokasi yang berkualitas. Tujuannya agar pelatihan vokasi dapat
                                                        menjadikan angkatan kerja
                                                        Indonesia, baik angkatan kerja baru maupun angkatan kerja lama,
                                                        menjadi angkatan kerja yang
                                                        kompeten dan berdaya saing.&amp;nbsp; Hal terseb.... </p>
                                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a
                                                            href="https://disnakertrans.bantenprov.go.id/berita/kemnaker-komitmen-hadirkan-pelatihan-vokasi-yang-berkualitas"
                                                            onclick="addViewBerita('93093654-c869-4e2b-8416-1c087c6671c0')"
                                                            class="btn btn-xs btn-primary text-1 text-uppercase">Baca
                                                            Selengkapnya</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <br><br>

                                    <article class="post">
                                        <div class="row mb-3">
                                            <div class="col-lg-5">
                                                <div class="post-image">
                                                    <a href="https://disnakertrans.bantenprov.go.id/berita/badan-publik-wajib-menyediakan-informasi-publik-secara-cepat-dan-tepat"
                                                        onclick="addViewBerita('a3e14d67-df50-4622-a119-31d0a7126758')">
                                                        <img src="https://disnakertrans.bantenprov.go.id/storage/disnakertrans/image_berita-908d4def-a90f-42aa-8180-0d7000d1457b.jpg"
                                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                            alt="Badan Publik Wajib Menyediakan Informasi Publik secara Cepat dan Tepat">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="post-content">
                                                    <h2
                                                        class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                        <a style="color:#08c"
                                                            href="https://disnakertrans.bantenprov.go.id/berita/badan-publik-wajib-menyediakan-informasi-publik-secara-cepat-dan-tepat"
                                                            onclick="addViewBerita('a3e14d67-df50-4622-a119-31d0a7126758')">Badan
                                                            Publik Wajib
                                                            Menyediakan Informasi Publik secara Cepat dan Tepat</a>
                                                    </h2>
                                                    <p class="mb-0">Serang - Undang-Undang No 14 Tahun 2008 tentang
                                                        Keterbukaan Informasi Publik
                                                        (KIP) mengamanatkan, setiap Badan Publik berkewajiban untuk
                                                        menyediakan Informasi Publik
                                                        yang berada di bawah kewenangannya kepada masyarakat dengan
                                                        cepat, aktual, tepat waktu,
                                                        biaya ringan dan cara sederhana.

                                                        &amp;quot;Dala.... </p>
                                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a
                                                            href="https://disnakertrans.bantenprov.go.id/berita/badan-publik-wajib-menyediakan-informasi-publik-secara-cepat-dan-tepat"
                                                            onclick="addViewBerita('a3e14d67-df50-4622-a119-31d0a7126758')"
                                                            class="btn btn-xs btn-primary text-1 text-uppercase">Baca
                                                            Selengkapnya</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <br><br>

                                    <article class="post">
                                        <div class="row mb-3">
                                            <div class="col-lg-5">
                                                <div class="post-image">
                                                    <a href="https://disnakertrans.bantenprov.go.id/berita/kemnaker-ajak-perusahan-aktif-tanggulangi-tuberkolosis-di-tempat-kerja"
                                                        onclick="addViewBerita('317a6284-b5eb-419d-9ca3-40eff4dbdd49')">
                                                        <img src="https://disnakertrans.bantenprov.go.id/storage/disnakertrans/image_berita-5fc809eb-50b9-4e42-ac77-6d4dbf73e141.jpg"
                                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                                            alt="Kemnaker Ajak Perusahan Aktif Tanggulangi Tuberkolosis di Tempat Kerja">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="post-content">
                                                    <h2
                                                        class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                                        <a style="color:#08c"
                                                            href="https://disnakertrans.bantenprov.go.id/berita/kemnaker-ajak-perusahan-aktif-tanggulangi-tuberkolosis-di-tempat-kerja"
                                                            onclick="addViewBerita('317a6284-b5eb-419d-9ca3-40eff4dbdd49')">Kemnaker
                                                            Ajak Perusahan
                                                            Aktif Tanggulangi Tuberkolosis di Tempat Kerja</a>
                                                    </h2>
                                                    <p class="mb-0">Kementerian Ketenagakerjaan (Kemnaker) mengajak
                                                        perusahaan untuk memiliki
                                                        komitmen yang tinggi sekaligus terlibat partisipasi aktif dalam
                                                        menanggulangi Tuberkolosis
                                                        di tempat kerja.&amp;nbsp; Di antaranya dengan menciptakan
                                                        kualitas tempat kerja yang sehat
                                                        (higienis), membudayakan hidup bersih, ventilas.... </p>
                                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a
                                                            href="https://disnakertrans.bantenprov.go.id/berita/kemnaker-ajak-perusahan-aktif-tanggulangi-tuberkolosis-di-tempat-kerja"
                                                            onclick="addViewBerita('317a6284-b5eb-419d-9ca3-40eff4dbdd49')"
                                                            class="btn btn-xs btn-primary text-1 text-uppercase">Baca
                                                            Selengkapnya</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <br><br>
<!-- ======= Maps Section ======= -->
<section id="maps" class="maps">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 bg-blue">
                <!-- Tambahkan kelas bg-blue -->
                <!-- Kode iframe dari Google Maps -->
                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7033901442915!2d106.15669067400748!3d-6.170455993816856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e421ff63e8c1d95%3A0x207fd02ab37344ff!2sDinas%20Tenaga%20Kerja%20Dan%20Transmigrasi%20Provinsi%20Banten!5e0!3m2!1sid!2sid!4v1711701216246!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <!-- Tambahkan kelas table-responsive -->
                            <table class="table table-bordered table-blue">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="text-center text-primary">
                                            <h4>Kantor</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Alamat:</strong></td>
                                        <td>Kawasan Pusat Pemerintahan Provinsi Banten (KP3B) Jl. KH.Syech Nawawi
                                            Al-Bantani Palima Kota Serang</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Telepon:</strong></td>
                                        <td>(0254) 267100/111</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td><a
                                                href="mailto:ppid.disnakertransbanten@gmail.com">ppid.disnakertransbanten@gmail.com</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center text-primary">
                                            <h4>Jadwal Operasional</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Senin - Jumat</strong></td>
                                        <td>07.30 - 16.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sabtu - Minggu</strong></td>
                                        <td>Tutup</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-lg-12 text-center"
                                            style="margin:0 auto;width;100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection