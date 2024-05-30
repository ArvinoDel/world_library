<?= $this->extend('layout/template2'); ?>
<?= $this->section('content'); ?>

<section class="dashboard">
    <div class="top">
        <i class="uil uil-bars sidebar-toggle"></i>
        <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here...">
        </div>
        <img src="<?= base_url('img/user.png') ?>" alt="">
    </div>

    <div class="dash-content">
        <div class="overview">
            <!-- Book Dashboard Section -->
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
                        <tbody id="book-data">
                            <?php if (!empty($books)): ?>
                                <?php foreach ($books as $book): ?>
                                    <tr class="data-list">
                                        <td><span class="data id"><?= $book['id'] ?></span></td>
                                        <td><img src="<?= base_url('img/' . $book['cover']) ?>" alt="" class="cover"></td>
                                        <td><span class="data title"><?= $book['judul'] ?></span></td>
                                        <td><span class="data date"><?= $book['tahun'] ?></span></td>
                                        <td><span class="data Category"><?= $book['kategori'] ?></span></td>
                                        <td><span class="data writer"><?= $book['penulis'] ?></span></td>
                                        <td>
                                            <a href="edit.html" style="text-decoration: none; color: white;">
                                                <button class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button>
                                            </a>
                                            &nbsp;
                                            <a href="hapus.html" style="text-decoration: none; color: white;">
                                                <button class="custom-btn1"><i class='bx bx-trash'></i>Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr class="data-list">
                                    <td colspan="7">No books available.</td>
                                </tr>
                            <?php endif; ?>
                            <tr class="data-list">
                                <td colspan="7">
                                    <a href="/pages/tambah" style="text-decoration: none; color: black;">
                                        <button class="custom-btn2">Tambah</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- User Activity Section -->
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
                            <?php if (!empty($user_activities)): ?>
                                <?php foreach ($user_activities as $activity): ?>
                                    <tr class="data-list">
                                        <td><span class="data id"><?= $activity['id'] ?></span></td>
                                        <td><span class="data names"><?= $activity['name'] ?></span></td>
                                        <td><span class="data email"><?= $activity['email'] ?></span></td>
                                        <td><span class="data date"><?= $activity['date'] ?></span></td>
                                        <td><span class="data type"><?= $activity['type'] ?></span></td>
                                        <td><span class="data status"><span class="status <?= strtolower($activity['status']) ?>"><?= $activity['status'] ?></span></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr class="data-list">
                                    <td colspan="6">No user activities available.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function fetchBooks() {
        $.ajax({
            url: '<?= base_url('admin/fetchBooks') ?>',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                const tbody = $('#book-data');
                tbody.empty();

                if (data.books.length === 0) {
                    tbody.append('<tr class="data-list"><td colspan="7">No books available.</td></tr>');
                } else {
                    data.books.forEach(book => {
                        const row = `
                            <tr class="data-list">
                                <td><span class="data id">${book.id}</span></td>
                                <td><img src="<?= base_url('image/') ?>${book.cover}" alt="" class="cover"></td>
                                <td><span class="data title">${book.judul}</span></td>
                                <td><span class="data date">${book.tahun}</span></td>
                                <td><span class="data Category">${book.kategori}</span></td>
                                <td><span class="data writer">${book.penulis}</span></td>
                                <td>
                                    <a href="edit.html" style="text-decoration: none; color: white;">
                                        <button class="custom-btn"><i class='bx bx-edit-alt'></i>Edit</button>
                                    </a>
                                    &nbsp;
                                    <a href="hapus.html" style="text-decoration: none; color: white;">
                                        <button class="custom-btn1"><i class='bx bx-trash'></i>Delete</button>
                                    </a>
                                </td>
                            </tr>
                        `;
                        tbody.append(row);
                    });
                }
            }
        });
    }

    $(document).ready(function() {
        fetchBooks();
        setInterval(fetchBooks); // Fetch data every 5 seconds
    });
</script>

<?= $this->endSection(); ?>
