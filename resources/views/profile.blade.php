@extends('app')
@section('content')
<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>Мой профиль</h1>
        </div>
    </div>
</section>
<section id="page-content">
    <div class="container">
        <div class="row">
            <div class="content col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <span class="h4">Account details</span>
                        <p class="text-muted">You will receive an email notification to confirm this action in
                            order to completed changes.</p>
                    </div>
                    <div class="card-body">
                        <form id="form1" class="form-validate">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter username"
                                           required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                           required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <div class="input-group show-hide-password">
                                        <input class="form-control" name="password" placeholder="Enter password"
                                               type="password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true"
                                                                              style="cursor: pointer;"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password2">Confirm Password</label>
                                    <div class="input-group show-hide-password">
                                        <input class="form-control" name="password2" placeholder="Enter password"
                                               type="password" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true"
                                                                              style="cursor: pointer;"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your Name"
                                           required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="surname">Surname</label>
                                    <input type="text" class="form-control" name="surname"
                                           placeholder="Enter your Surname" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" name="gender" required>
                                        <option value="">Select your gender</option>
                                        <option>Female</option>
                                        <option>Male</option>
                                        <option>Rather not say</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gender">Date of Birth</label>
                                    <input class="form-control" type="date" name="dateofbirth" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="telephone">Telephone</label>
                                    <input class="form-control" type="tel" name="telephone"
                                           placeholder="Enter your Telephone number" required>
                                </div>
                            </div>
                            <div class="h5 mb-4">Mailing Address</div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address"
                                           placeholder="Enter your Street Address" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address2">Address 2</label>
                                    <input type="text" class="form-control" name="address2"
                                           placeholder="Enter your Apartment, studio, or floor" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter your City"
                                           required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Zip Code:</label>
                                    <input type="number" class="form-control" name="zip" placeholder="Enter Zip Code"
                                           required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="state">State</label>
                                    <select name="state" class="form-control" required>
                                        <option value="">Australia</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="country">Country</label>
                                    <select name="country" class="form-control" required>
                                        <option value="">United States</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-1 mt-5">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="reminders" id="reminders" class="custom-control-input"
                                           value="1" required>
                                    <label class="custom-control-label" for="reminders"><a href="">Send me occasional
                                            reminders
                                            about these settings</a></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms_conditions" id="terms_conditions"
                                           class="custom-control-input" value="1" required>
                                    <label class="custom-control-label" for="terms_conditions">By checking
                                        this
                                        option, you agree to acceot with the <a href="#">Terms and
                                            Conditions</a>.</label>
                                </div>
                            </div>
                            <button type="submit" class="btn m-t-30 mt-3">Submit</button>
                        </form>
                    </div>
                </div>
                <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
                @endsection
                <script src="js/jquery.js"></script>
                <script src="js/plugins.js"></script>
                <script src="js/functions.js"></script>
                <script src="plugins/validate/validate.min.js"></script>
                <script src="plugins/validate/valildate-rules.js"></script>
            </div>
        </div>
</section>
</div>
</body>
</html>
