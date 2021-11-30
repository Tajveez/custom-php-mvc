<h1>Create your account</h1>

<form action="" method="POST">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>First name</label>
                <input type="text" name="firstname" id="firstname" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Last name</label>
                <input type="text" name="lastname" id="lastname" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <!-- password -->
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="passsword" id="passsword" class="form-control">
    </div>

    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirm-password" id="confirm-password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>