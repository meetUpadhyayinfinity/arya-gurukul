<?php
include('Components/header.php');
include('Components/sidebar.php');
?>

<div class="page-content">
    <div class="main-wrapper">

        <!-- ============= Student Info =========== -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto;">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Application Id</th>
                                        <th scope="col">Acadmic Session</th>
                                        <th scope="col">Grade Applying</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Date of Birth</th>
                                        <th scope="col">Created on</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">205</th>
                                        <td>2022-2023</td>
                                        <td>3rd</td>
                                        <td>Abeer</td>
                                        <td>Kumar</td>
                                        <td>Mehra</td>
                                        <td>23/08/2016</td>
                                        <td>23/06/2022 13:45:55</td>
                                    </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== Assign GR and Upload Docs Form ====== -->
        <div class="card">
            <div class="card-body">

                <!--Card Title  -->
                <h5 class="card-title">Upload Documents and Issue GR Number </h5>

                <!--Row Start-->
                <div class="row g-2">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Documents Link<span class="required">*</span></label>
                            <input class="form-control" type="text" id="formFile" accept=".jpg,.png,.jpeg" />
                            <div class="form-text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Issue GR NO.<span class="required">*</span></label>
                            <input class="form-control" type="text" id="formFile" accept=".jpg,.png,.jpeg" />
                            <div class="form-text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Issue Microsoft ID:<span class="required">*</span></label>
                            <input class="form-control" type="text" id="formFile" accept=".jpg,.png,.jpeg" />
                            <div class="form-text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Teams Password<span class="required">*</span></label>
                            <input class="form-control" type="text" id="formFile" accept=".jpg,.png,.jpeg" />
                            <div class="form-text">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">SARAL ID<span class="required">*</span></label>
                            <input class="form-control" type="text" id="formFile" accept=".jpg,.png,.jpeg" />
                            <div class="form-text">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">UID Number<span class="required">*</span></label>
                            <input class="form-control" type="text" id="formFile" accept=".jpg,.png,.jpeg" />
                            <div class="form-text">
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-flex justify-content-end">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-next btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <!--Row End-->
            </div>
        </div>

    </div>
</div>

<?php include('Components/footer.php') ?>   