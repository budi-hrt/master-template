<main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
            User
        </li>
        <li class="breadcrumb-item active">Change password</li>
        <!-- Breadcrumb Menu-->
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">

            <h1>Change Password</h1>

            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card">
                        <div class="card-header">
                            <strong>Chnage Password</strong> Form</div>
                        <div class="card-body">
                            <form action="<?= base_url('user/changepassword'); ?>" method="post">
                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <input class="form-control" id="current_password" type="password" name="current_password">
                                    <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="new_password1">New Password</label>
                                    <input class="form-control" id="new_password1" type="password" name="new_password1" placeholder="Enter New Password..">
                                    <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="new_password2">Repeat Password</label>
                                    <input class="form-control" id="new_password2" type="password" name="new_password2" placeholder="Enter Repeat Password..">
                                    <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
                                </div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit">
                                <i class="fa fa-dot-circle-o"></i> Submit</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>