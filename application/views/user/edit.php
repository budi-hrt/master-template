<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
            User
        </li>
        <li class="breadcrumb-item active">My Profile</li>
        <!-- Breadcrumb Menu-->
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">

            <h1>Edit Profile</h1>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Horizontal</strong> Form</div>
                        <div class="card-body">
                            <?php echo form_open_multipart('user/edit'); ?>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="email">Email</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="email" type="email" name="email" value="<?= $user['email']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="name">Full Name</label>
                                <div class="col-md-9">
                                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                    <input class="form-control" id="name" type="text" name="name" value="<?= $user['name']; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">Picture</div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                                        </div>

                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit">
                                <i class="fa fa-dot-circle-o"></i> Edit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>