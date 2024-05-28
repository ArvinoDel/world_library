<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>

<section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!-- hubungin ke database, kalo ada fotonya -->
            <img src="img/user.png" alt="">
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="book">
                    <div class="title">
                        <i class="uil uil-tachometer-fast-alt"></i>
                        <span class="text">Dashboard Buku</span>
                    </div>

                    <div class="book-data">
                        <table>
                            <thead>
                                <tr class="data-list">
                                    <th class="data-title">#</th>
                                    <th class="data-title">Cover</th>
                                    <th class="data-title">Name</th>
                                    <th class="data-title">Date</th>
                                    <th class="data-title">Category</th>
                                    <th class="data-title">Writer</th>
                                    <th class="data-title">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- dibikin foreach -->
                                <tr class="data-list">
                                    <td><span class="data id">1</span></td>
                                    <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                                    <td><span class="data title">The Woman without name</span></td>
                                    <td><span class="data date">2022-02-12</span></td>
                                    <td><span class="data Category">Horror</span></td>
                                    <td><span class="data writer">Andika SNM</span> </td>
                                    <td>
                                        <a href="edit.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button></a>
                                        &nbsp;
                                        <a href="hapus.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn1"><i class='bx bx-trash'></i>Delete</button></a>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">2</span></td>
                                    <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                                    <td><span class="data title">The Woman without name</span></td>
                                    <td><span class="data date">2022-02-12</span></td>
                                    <td><span class="data Category">Horror</span></td>
                                    <td><span class="data writer">Andika SNM</span></td>
                                    <td>
                                        <a href="edit.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button></a>
                                        &nbsp;
                                        <a href="hapus.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn1"><i class='bx bx-trash'></i>Delete</button></a>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">3</span></td>
                                    <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                                    <td><span class="data title">The Woman without name</span></td>
                                    <td><span class="data date">2022-02-13</span></td>
                                    <td><span class="data Category">Horror</span></td>
                                    <td><span class="data writer">Andika SNM</span></td>
                                    <td>
                                        <a href="edit.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button></a>
                                        &nbsp;
                                        <a href="hapus.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn1"><i class='bx bx-trash'></i>Delete</button></a>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">4</span></td>
                                    <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                                    <td><span class="data title">The Woman without name</span></td>
                                    <td><span class="data date">2022-02-13</span></td>
                                    <td><span class="data Category">Horror</span></td>
                                    <td><span class="data writer">Andika SNM</span></td>
                                    <td>
                                        <a href="edit.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button></a>
                                        &nbsp;
                                        <a href="hapus.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn1"><i class='bx bx-trash'></i>Delete</button></a>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">5</span></td>
                                    <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                                    <td><span class="data title">The Woman without name</span></td>
                                    <td><span class="data date">2022-02-14</span></td>
                                    <td><span class="data Category">Horror</span></td>
                                    <td><span class="data writer">Andika SNM</span>
                                    </td>
                                    <td>
                                        <a href="edit.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button></a>
                                        &nbsp;
                                        <a href="hapus.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn1"><i class='bx bx-trash'></i>Delete</button></a>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">6</span></td>
                                    <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                                    <td><span class="data title">The Woman without name</span></td>
                                    <td><span class="data date">2022-02-14</span></td>
                                    <td><span class="data Category">Horror</span></td>
                                    <td><span class="data writer">Andika SNM</span>
                                    </td>
                                    <td>
                                        <a href="edit.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button></a>
                                        &nbsp;
                                        <a href="hapus.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn1"><i class='bx bx-trash'></i>Delete</button></a>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">7</span></td>
                                    <td><img src="img/buku1.jpg" alt="" class="cover"></td>
                                    <td><span class="data title">The Woman without name</span></td>
                                    <td><span class="data date">2022-02-15</span></td>
                                    <td><span class="data Category">Horror</span></td>
                                    <td><span class="data writer">Andika SNM</span>
                                    </td>
                                    <td>
                                        <a href="edit.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button></a>
                                        &nbsp;
                                        <a href="hapus.html" style="text-decoration: none; color: white;"><button
                                                class="custom-btn1"><i class='bx bx-trash'></i>Delete</button></a>
                                    </td>
                                </tr>
                                <br>
                                <tr class="data-list">
                                    <td>
                                        <a href="tambah.html" style="text-decoration: none; color: black;"><button
                                                class="custom-btn2">Tambah</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="activity">
                    <div class="title">
                        <i class="uil uil-clock-three"></i>
                        <span class="text">User Activity</span>
                    </div>

                    <div class="activity-data">
                        <table>
                            <thead>
                                <tr class="data-list">
                                    <th class="data-title">#</th>
                                    <th class="data-title">Name</th>
                                    <th class="data-title">Email</th>
                                    <th class="data-title">Date</th>
                                    <th class="data-title">Type</th>
                                    <th class="data-title">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- dibikin foreach -->
                                <tr class="data-list">
                                    <td><span class="data id">1</span></td>
                                    <td><span class="data names">Prem Shahi</span></td>
                                    <td><span class="data email">pre1213@gmail.com</span></td>
                                    <td><span class="data date">2022-02-12</span></td>
                                    <td><span class="data type">Meminjam</span></td>
                                    <!-- ini dibikin kondisi apabila status completed maka span class status completed
                                kalo status pending ya pending class nya
                                -->
                                    <td><span class="data status"><span class="status completed">Completed</span></span>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">2</span></td>
                                    <td><span class="data names">Deepa Chand</span></td>
                                    <td><span class="data email">amd13131@gmail.com</span></td>
                                    <td><span class="data date">2022-02-12</span></td>
                                    <td><span class="data type">Mengembalikan</span></td>
                                    <td><span class="data status"><span class="status pending">Pending</span></span>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">3</span></td>
                                    <td><span class="data names">Manisha Chand</span></td>
                                    <td><span class="data email">faiax1211@gmail.com</span></td>
                                    <td><span class="data date">2022-02-13</span></td>
                                    <td><span class="data type">Meminjam</span></td>
                                    <td><span class="data status"><span class="status completed">Completed</span></span>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">4</span></td>
                                    <td><span class="data names">Pratima Shahi</span></td>
                                    <td><span class="data email">patrow1@gmail.com</span></td>
                                    <td><span class="data date">2022-02-13</span></td>
                                    <td><span class="data type">Mengembalikan</span></td>
                                    <td><span class="data status"><span class="status pending">Pending</span></span>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">5</span></td>
                                    <td><span class="data names">Man Shahi</span></td>
                                    <td><span class="data email">pratimashhai@gmail.com</span></td>
                                    <td><span class="data date">2022-02-14</span></td>
                                    <td><span class="data type">Meminjam</span></td>
                                    <td><span class="data status"><span class="status completed">Completed</span></span>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">6</span></td>
                                    <td><span class="data names">Ganesh Chand</span></td>
                                    <td><span class="data email">manshahi@gmail.com</span></td>
                                    <td><span class="data date">2022-02-14</span></td>
                                    <td><span class="data type">Mengembalikan</span></td>
                                    <td><span class="data status"><span class="status pending">Pending</span></span>
                                    </td>
                                </tr>
                                <tr class="data-list">
                                    <td><span class="data id">7</span></td>
                                    <td><span class="data names">Bikash Chand</span></td>
                                    <td><span class="data email">ganeshchand@gmail.com</span></td>
                                    <td><span class="data date">2022-02-15</span></td>
                                    <td><span class="data type">Meminjam</span></td>
                                    <td><span class="data status"><span class="status completed">Completed</span></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
    </section>

<?= $this->endSection(); ?>