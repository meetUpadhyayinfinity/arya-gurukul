<?php
include('Components/header.php');
include('Components/sidebar.php');
?>

<div class="page-content">
    <div class="main-wrapper">

        <!-- ================= Thank you screen ================= -->
        <div class="row g-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <p class="text-center"><i style="font-size: 55px;" class="text-success far fa-check-circle"></i>
                            </p>
                            <p class="display-3 text-center">Thank You</p>
                            <p class="h5 text-center">Your application has been
                                successfully submitted and processed for
                                document verfication.</p>
                            <p class="h5 text-center">We will get back you in 24-48 hrs </p>
                            <p class="h5 text-center">Your Current Status is</p>
                            <div style="width: 100px; margin: 0px auto;">
                                <p class="bg-danger text-light text-center px-4 py-2 rounded-pill">
                                    HOLD
                                </p>
                            </div>
                            <p class="text-center">Application
                                Fee <i class="far fa-check-circle text-success"></i> Paid
                            </p>
                        </div>
                        <div class="d-grid gap-2 d-md-flex  justify-content-center">
                            <button type="button" class="btn btn-outline-primary"><a href="../Admin/AdmissionView.html">View</a></button>
                            <button type="button" class="btn btn-outline-primary">Reciept</button>
                            <button type="button" class="btn btn-outline-primary">Pay Admission
                                Fee and Other Fees</button>
                            <button type="button" class="btn btn-outline-primary">Request Another Form</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============== End Thank you screen =============== -->

        <!-- ================== Select Options =================== -->
        <div class="card  justify-content-center">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-3">
                        <label>Number of Forms Required</label>
                        <br>
                        <div class="radio-inputs d-grid gap-2  ">
                            <div class="input-element">
                                <input type="radio" id="1" value="1">
                                <label for="1">1</label>
                            </div>
                            <div class="input-element">
                                <input type="radio" id="2" value="2">
                                <label for="2">2</label>
                            </div>
                            <div class="input-element">
                                <input type="radio" id="3" value="3">
                                <label for="3">3</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class=" mt-3 text-center">
                            <button type="button" class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================= End Select Option ================= -->

        <!-- ================ Message After Submission ============= -->
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <p class="text-center"><i style="font-size: 55px;" class="text-success far fa-check-circle"></i>
                    </p>
                    <p class="h5 text-center">Your request for another form has been submitted. You will recieve another
                        from soon.</p>
                    <p class="h5 text-center">We will get back you in 24-48 hrs </p>
                    <p class="h5 text-center">Your Current Status is</p>
                    <div style="width: 150px; margin: 0px auto;">
                        <p class="bg-danger text-light text-center px-4 py-2 rounded-pill">
                            REQUESTED
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============= End Message After submisssion =========== -->
    </div>
</div>

<?php include('Components/footer.php'); ?>