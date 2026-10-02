<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Data Mahasiswa</title>
</head>

<body>

    <!-- ==================== PERCOBAAN 1-1 ==================== -->

    <header>
        <h1>Sistem Informasi Data Mahasiswa - Praktikum 1 - Kelas PSTI A</h1>

        <p>
            Sistem informasi data mahasiswa merupakan halaman web
            yang digunakan untuk menampilkan dan mengelola informasi mahasiswa.
        </p>

        <img src="fotorachel.jpg.jpeg"
             alt="Gambar mahasiswa"
             width="200"
             height="300">
    </header>

    <hr>

    <nav>
        <ul>
            <li>
                <a href="#informasi">Informasi Aplikasi</a>
            </li>

            <li>
                <a href="#daftar-mahasiswa">Daftar Mahasiswa</a>
            </li>

            <li>
                <a href="#form-tambah">Tambah Mahasiswa Baru</a>
            </li>
        </ul>
    </nav>


    <!-- ==================== PERCOBAAN 1-2 ==================== -->

    <hr>

    <main>

        <section id="informasi">

            <h2>Informasi Sistem</h2>

            <p>
                Sistem ini dibuat untuk membantu menampilkan informasi
                dan data mahasiswa secara sederhana melalui halaman web.
            </p>

            <article>

                <h3>Tujuan Sistem</h3>

                <p>
                    Sistem Informasi Data Mahasiswa bertujuan untuk
                    memudahkan pengguna dalam melihat dan mengelola
                    data mahasiswa.
                </p>

            </article>


            <!-- ==================== PERCOBAAN 1-3 ==================== -->

            <hr>

            <section id="daftar-mahasiswa">

                <h2>Daftar Mahasiswa Aktif</h2>

                <p>
                    Berikut merupakan daftar mahasiswa aktif
                    pada Program Studi Teknik Informatika.
                </p>

                <table border="1" cellpadding="8" cellspacing="0">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NPM</th>
                            <th>Nama Lengkap</th>
                            <th>Program Studi</th>
                            <th>Angkatan</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>2455061001</td>
                            <td>Andi Saputra</td>
                            <td>Teknik Informatika</td>
                            <td>2024</td>
                            <td>andi@gmail.com</td>
                            <td>Aktif</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>2455061002</td>
                            <td>Siti Rahma</td>
                            <td>Teknik Informatika</td>
                            <td>2024</td>
                            <td>siti@gmail.com</td>
                            <td>Aktif</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>2455061003</td>
                            <td>Budi Pratama</td>
                            <td>Teknik Informatika</td>
                            <td>2024</td>
                            <td>budi@gmail.com</td>
                            <td>Aktif</td>
                        </tr>

                    </tbody>

                </table>

            </section>


            <!-- ==================== PERCOBAAN 1-4 ==================== -->

            <hr>

            <section id="form-tambah">

                <h2>Tambah Mahasiswa Baru</h2>

                <p>
                    Silakan isi formulir berikut untuk menambahkan
                    data mahasiswa baru.
                </p>

                <form action="#" method="POST">

                    <fieldset>

                        <legend>Form Data Mahasiswa</legend>


                        <!-- Field 1: NPM -->
                        <p>
                            <label for="npm">
                                Nomor Pokok Mahasiswa (NPM)
                            </label>
                            <br>

                            <input
                                type="text"
                                id="npm"
                                name="npm"
                                placeholder="Contoh : 2315061118"
                                required
                                pattern="[0-9]{8,12}"
                                title="NPM harus berupa angka 8-12 digit">

                            <br>

                            <small>
                                NPM harus berupa angka 8-12 digit.
                            </small>
                        </p>


                        <!-- Field 2: Nama -->
                        <p>
                            <label for="nama">
                                Nama Lengkap:
                            </label>
                            <br>

                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                placeholder="Contoh : Rachel Inaya A"
                                required
                                minlength="3"
                                maxlength="100">

                            <br>

                            <small>
                                Nama minimal 3 karakter dan maksimal 100 karakter.
                            </small>
                        </p>


                        <!-- Field 3: Program Studi -->
                        <p>
                            <label for="program_studi">
                                Program Studi:
                            </label>
                            <br>

                            <select
                                id="program_studi"
                                name="program_studi"
                                required>

                                <option value="">
                                    Pilih Program Studi
                                </option>

                                <option value="Teknik Informatika">
                                    Teknik Informatika
                                </option>

                            </select>

                            <br>

                            <small>
                                Silakan pilih program studi.
                            </small>
                        </p>


                        <!-- Field 4: Angkatan -->
                        <p>
                            <label for="angkatan">
                                Tahun Angkatan:
                            </label>
                            <br>

                            <input
                                type="number"
                                id="angkatan"
                                name="angkatan"
                                placeholder="Contoh : 2024"
                                required
                                min="2018"
                                max="2026">

                            <br>

                            <small>
                                Tahun angkatan harus berada antara 2018-2026.
                            </small>
                        </p>


                        <!-- Field 5: Email -->
                        <p>
                            <label for="email">
                                Alamat Email:
                            </label>
                            <br>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Contoh : email@example.com"
                                required>

                            <br>

                            <small>
                                Gunakan alamat email yang aktif.
                            </small>
                        </p>


                        <!-- Field 6: Button -->
                        <p>
                            <button type="submit">
                                Simpan Data Mahasiswa
                            </button>

                            <button type="reset">
                                Reset Formulir
                            </button>
                        </p>

                    </fieldset>

                </form>

            </section>

        </section>

    </main>

</body>
</html>