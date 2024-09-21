<div class="container">
    <form action="dbRegister.php" method ="POST">
        <div class="row margin-top">
            <div class="col-md-6 side-image">
                <img src="images/register.png" class="img-fluid" alt="login-image">
            </div>
            
            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="username" name = "username" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name = "email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name = "password" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <label for="confirm password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm password" placeholder="Enter your confirm password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            <div class="form-group mt-4">
                                <div class="text-center">
                                    <span>Already have an account?</span>
                                    <a href="login.php">Login Here</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>