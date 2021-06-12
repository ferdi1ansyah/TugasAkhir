
<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>



    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg">
                                <div class="p-5">
                                <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">..</h1>
                                    </div>
                                   
                                        <a href="/register/index" class="btn btn-primary btn-user btn-block">
                                            Register Sebagai Guru
                                        </a>
                                        <a href="/registersiswa/index" class="btn btn-primary btn-user btn-block">
                                            Register Sebagai Siswa
                                        </a>
                                    </form>
                                    <hr>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?= $this->endSection(); ?>

    