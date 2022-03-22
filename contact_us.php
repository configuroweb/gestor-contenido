<a href="https://putlocker-is.org"></a><br>
<style>
    .mapouter {
        position: relative;
        text-align: right;
        height: 659px;
        width: 100%;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 659px;
        width: 100%;
    }
</style>
<div class="container">
    <div class="clear-fix my-4"></div>
    <div class="card card-outline card-primary rounded-0 shadow">
        <div class="card-body py-5">
            <h3 class="text-center font-weight-bolder">Información de Contacto</h3>
            <center>
                <hr class="border-primary bg-warning w-25 border-3" style="opacity:1;height:3px;">
            </center>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <dl>
                        <dt><b>Dirección</b></dt>
                        <dd class="pl-3"><?= $_settings->info('school_address') ?></dd>
                        <dt><b>Móvil</b></dt>
                        <dd class="pl-3"><?= $_settings->info('school_email') ?></dd>
                        <dt><b>Whatsapp</b></dt>
                        <dd class="pl-3"><a href="https://configuroweb.com/WhatsappMessenger"><?= $_settings->info('school_tel_no') ?></a></dd>
                        <dt><b>Móvil</b></dt>
                        <dd class="pl-3"><?= $_settings->info('school_mobile') ?></dd>
                    </dl>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.5499632632427!2d-76.53112098542293!3d3.4589568974824356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a66bce1d282f%3A0x6083e7032572ab74!2sTorre%20de%20Cali%2C%20Cali%2C%20Valle%20del%20Cauca!5e0!3m2!1ses-419!2sco!4v1647826406336!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>