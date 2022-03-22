<div class="content py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2 class="text-center font-weight-bolder m-0">Contenido</h2>
                <center>
                    <hr class="border-primary bg-warning my-1" style="width:3vw;height:3px;opacity:1">
                </center>
                <div class="my-2 list-group">
                    <?php
                    $blogs = $conn->query("SELECT a.*,u.username as writer FROM `article_list` a inner join users u on a.user_id = u.id where a.delete_flag = 0 and a.`status` = 1 order by unix_timestamp(a.date_created) desc");
                    while ($row = $blogs->fetch_assoc()) :
                    ?>
                        <div class="list-group-item">
                            <h3><b><?= $row['title'] ?></b></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <small class="text-muted">Escrito por: <a href="https://www.configuroweb.com/acerca-de-mi/"><span class="text-primary"><?= $row['writer'] ?></span></small></a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <small class="text-muted"><?= date("M d,Y, h:i A", strtotime($row['date_created'])) ?></small>
                                </div>
                            </div>

                            <p class="truncate-5"><?= $row['short_description'] ?></p>
                            <div class="text-right">
                                <a href="./?p=blogs/view_blog&id=<?= $row['id'] ?>" class="btn btn-default border btn-flat btn-sm">Ver más</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <?php if ($blogs->num_rows <= 0) : ?>
                    <center><span class="text-muted"><b><i>Sin contenido que mostrar</i></b></span></center>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?php include("./inc/aside.php") ?>
            </div>
        </div>

    </div>
</div>