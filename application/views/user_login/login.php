
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="">
                <section></section>
            </div>
            
        </div>
        <div class="col-4">
            <div class="card-body bg-light">
                <h3 class="text-center card-title">Login</h3>
                <br>
                <form action="<?php echo base_url('login'); ?>" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" name="user_name" class="form-control" placeholder="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>
                    <br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <br>
                <a href="<?php echo base_url('register'); ?>"><p class="text-center">Register Here</p></a>
            </div>
        </div>
    </div>
</div>
