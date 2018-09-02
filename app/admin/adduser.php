
<div class="page-header">
    <div class="page-header-title">
        <h4>Registration</h4>
    </div>
    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.php">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Add user</a>
            </li>
        </ul>
    </div>
</div>


<div class="page-body">
    <div class="row">
        <div class="col-sm-12">

            <div class="card">
                <div class="card-header">
                    <h5>Add User</h5>
                </div>
                <div class="card-block">
                    <div class="j-wrapper j-wrapper-640">
                        <form action="http://flatable.phoenixcoded.net/default/j-pro/php/action.php"
                              method="post" class="j-pro" id="j-pro" novalidate>
                            <div class="j-content">

                                <div>
                                    <label class="j-label">Name</label>
                                    <div class="j-unit">
                                        <div class="j-input">
                                            <label class="j-icon-right" for="name">
                                                <i class="icofont icofont-ui-user"></i>
                                            </label>
                                            <input type="text" id="name" name="name" class="form-control form-control-round">
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <div>
                                        <label class="j-label">Email</label>
                                    </div>
                                    <div class="j-unit">
                                        <div class="j-input">
                                            <label class="j-icon-right" for="email">
                                                <i class="icofont icofont-envelope"></i>
                                            </label>
                                            <input type="email" id="email" name="email" class="form-control form-control-round">
                                        </div>
                                    </div>
                                </div>


                                <div>
                                    <div>
                                        <label class="j-label ">Role</label>
                                    </div>
                                    <div class="j-unit">
                                        <div class="j-input">
                                            <select name="select">
                                                <option value="opt1">--Select role --</option>
                                                <option value="admin">Administrator</option>
                                                <option value="school">School</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <label class="j-label ">Password</label>
                                    </div>
                                    <div class="j-unit">
                                        <div class="j-input">
                                            <label class="j-icon-right" for="password">
                                                <i class="icofont icofont-lock"></i>
                                            </label>
                                            <input type="password" id="password"
                                                   name="password">
                                        </div>
                                    </div>
                                </div>


                                <div class="j-response"></div>

                            </div>

                            <div class="j-footer">
                                <button type="submit" class="btn btn-primary">Submit
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>