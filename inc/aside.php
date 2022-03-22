<div class="clear-fix py-5"></div>
<div class="card shadow rounded-0 shadow mb-4">
    <div class="card-header">
        <div class="card-title font-weight-bolder">Publicaciones</div>
    </div>
    <div class="card-body">
        <div class="list-group">
            <?php
            $article_all = $conn->query("SELECT id FROM `article_list` where delete_flag = 0  and `status` = 1")->num_rows;
            $articles = $conn->query("SELECT * FROM  `article_list` where delete_flag = 0  and `status` = 1 ");
            while ($row = $articles->fetch_assoc()) :
            ?>
                <a href="./?p=blogs/view_blog&id=<?= $row['id'] ?>" class="list-group-item list-group-item-action text-decoration-none">
                    <p class="text-truncate m-0"><?= $row['title'] ?></p>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</div>