<h2>Admin Kayıt</h2>
<div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <?= validation_list_errors() ?>
                    <div class="register-form">
                        <h2>Kayıt Ol</h2>
                        <form action="<?= base_url('kayit_ekle') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
                            <div class="group-input">
                                <label for="name">İsim</label>
                                <input register type="text" id="name">
                            </div>
                            <div class="group-input">
                                <label for="lastname">Soyadı</label>
                                <input register type="text" id="lastname">
                            </div>
                            <div class="group-input">
                                <label for="password">Şifre</label>
                                <input register type="text" id="password">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Şifre Doğrulama</label>
                                <input register type="text" id="con-pass">
                            </div>
                             <div class="group-input">
                                <label for="mail">Mail Giriniz</label>
                                <input register type="text" id="mail">
                            </div>
                             <div class="group-input">
                                <label for="phone">Telefon Numarası Giriniz</label>
                                <input register type="text" id="phone">
                            </div>
                            <button type="submit" class="site-btn register-btn">Kayıt Ol</button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>