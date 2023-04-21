<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="School Management Portal for AryaGlobal">
    <meta name="keywords" content="AryaGurukul, LittleAryans, StMaryHighSchool">
    <meta name="author" content="ravimehra9911">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dashboard - AryaGlobal</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="../../assets/css/front-office.css" rel="stylesheet">
    <link href="../../assets/css/main.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">
    <link href="../../assets/css/conversion-steps.css" rel="stylesheet">

</head>

<body>
    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="main-wrapper">


        <!-- =================== Students List =================== -->

        <div class="card-body verifyStudentList" style="overflow-x:auto;">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Acadmic Session</th>
                            <th scope="col">Grade Applying</th>
                            <th scope="col">Grade</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Created on</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>2022-2023</td>

                            <td>4th</td>
                            <td>3rd</td>
                            <td>Abeer</td>
                            <td>Kumar</td>
                            <td>Mehra</td>
                            <td>23/08/2016</td>
                            <td>23/06/2022 13:45:55</td>


                            <td><button class="btn btn-primary mb-2"><a href="#">View</a></button>
                            </td>
                            <td><button class="btn btn-primary mb-2 verifyButton">Verify</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>2022-2023</td>

                            <td>4th</td>
                            <td>3rd</td>
                            <td>Shivam</td>
                            <td>Kumar</td>
                            <td>Mehra</td>
                            <td>23/08/2016</td>
                            <td>23/06/2022 13:45:55</td>


                            <td><button class="btn btn-primary mb-2"><a href="#">View</a></button>
                            </td>
                            <td><button class="btn btn-primary mb-2 verifyButton">Verify</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>2022-2023</td>

                            <td>4th</td>
                            <td>3rd</td>
                            <td>Shubham</td>
                            <td>Pathak</td>
                            <td>Mehra</td>
                            <td>23/08/2016</td>
                            <td>23/06/2022 13:45:55</td>


                            <td><button class="btn btn-primary mb-2"><a href="#">View</a></button>
                            </td>
                            <td><button class="btn btn-primary mb-2 verifyButton">Verify</button></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>2022-2023</td>

                            <td>4th</td>
                            <td>3rd</td>
                            <td>Ajit</td>
                            <td>Yadav</td>
                            <td>Mehra</td>
                            <td>23/08/2016</td>
                            <td>23/06/2022 13:45:55</td>


                            <td><button class="btn btn-primary mb-2"><a href="#">View</a></button>
                            </td>
                            <td><button class="btn btn-primary mb-2 verifyButton">Verify</button>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>


        <!-- ================ Conversion Form ======================= -->
        <div class="row conversionForm"
            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: white; z-index: 1; padding: 20px; box-sizing: border-box; display: none;">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="backButton">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </div>
                        <h5 class="card-title">CONVERSION FORM</h5>

                        <div style="margin: 0 auto;">

                            <!-- <h1 class="text-center fw-bold mb-3">Welcome to Online Admissions</h1>
                                        <h4 class="text-center text-black-50">Introducing Online Admissions – Quicker,
                                            Easier, and Completely Online!
                                            Complete your
                                            Child’s School
                                            Application while staying safe and secure at home!</h4>

                                        <div class="p-3 my-4 rounded text-light"
                                            style="background-color: var(--bs-primary)">
                                            <h3>ONLINE CONVERSION</h3>
                                        </div> -->

                            <form class="row g-3">
                                <!-- Progress bar -->
                                <div class="progressbar">
                                    <div class="progress" id="progress"></div>

                                    <div class="progress-step progress-step-active" data-title="Enrollment">
                                    </div>
                                    <div class="progress-step" data-title="Parent Details"></div>
                                    <div class="progress-step" data-title="Student Details"></div>
                                    <div class="progress-step" data-title="Contact Details"></div>
                                    <div class="progress-step" data-title="Front Office"></div>
                                </div>

                                <!-- Steps -->
                                <div class="form-step form-step-active">

                                    <div class="row g-2">
                                        <!--Row Start-->
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Academic Session <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="2022-2023">2022-2023</option>
                                                    <option value="2021-2022">2021-2022</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a session</div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Grade Applying For <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                    <option value="5th">5th</option>
                                                    <option value="6th">6th</option>
                                                    <option value="7th">7th</option>
                                                    <option value="8th">8th</option>
                                                    <option value="9th">9th</option>
                                                    <option value="10th">10th</option>
                                                    <option value="12th">12th</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a grade</div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Student's GR Number <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="1234"
                                                    pattern="[0-9]+" minlength="4" maxlength="6" />
                                                <div class="invalid-feedback">Please enter a GR no.</div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="">Student's First
                                                    Name<span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="First Name"
                                                    pattern="[a-zA-Z]+" minlength="3" maxlength="20" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Student's Middle Name</label>
                                                <input type="text" class="form-control" placeholder="Middle Name" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Student's Last Name<span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="Last Name"
                                                    pattern="[a-zA-Z]+" minlength="3" maxlength="20" />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Student's Photo<span
                                                    class="required">*</span></label>
                                            <input class="form-control" type="file" id="formFile"
                                                accept=".jpg,.png,.jpeg" />
                                            <div class="form-text">
                                                Recent smiling colour photograph of the student's in school
                                                uniform. File Size Should be less than 2Mb. The Image
                                                formats
                                                should be .jpg or .jpeg.
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-secondary">SAVE</button>
                                            <button type="button" class="btn btn-next btn-outline-primary">Next</button>
                                        </div>


                                        <!--Row End-->
                                    </div>
                                    <!--Step End-->
                                </div>

                                <!-- Step Two Start -->
                                <div class="form-step">

                                    <div class="row g-2">
                                        <!--Row Start-->
                                        <div class="mb-3">
                                            <label>Father's Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" placeholder="Full Name"
                                                pattern="[a-zA-Z]+" minlength="3" maxlength="50" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Father's Photo<span
                                                    class="required">*</span></label>
                                            <input class="form-control" type="file" id="formFile"
                                                accept=".jpg,.png,.jpeg" />
                                            <div class="form-text">
                                                File Size Should be less than 2Mb. The Image formats should
                                                be .jpg or .jpeg.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label>Mother's Name <span class="required">*</span></label>
                                            <input type="text" class="form-control" placeholder="Full Name"
                                                pattern="[a-zA-Z]+" minlength="3" maxlength="50" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Mother's Photo<span
                                                    class="required">*</span></label>
                                            <input class="form-control" type="file" id="formFile"
                                                accept=".jpg,.png,.jpeg" />
                                            <div class="form-text">
                                                File Size Should be less than 2Mb. The Image formats should
                                                be
                                                .jpg or .jpeg.
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-secondary">SAVE</button>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-prev btn-outline-primary">Back</button>
                                                <button type="button"
                                                    class="btn btn-next btn-outline-primary">Next</button>
                                            </div>
                                        </div>
                                        <!--Row End-->
                                    </div>
                                    <!--Step End-->
                                </div>

                                <!-- Step Three Start -->
                                <div class="form-step">

                                    <div class="row g-2">
                                        <!--Row Start-->
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Date of
                                                    Birth<span class="required">*</span></label>
                                                <input class="form-control" type="date" min="2003-01-01"
                                                    max="2020-12-31" />
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Blood Group <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="B+">B+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="ABO">ABO</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="Mumbai Blood Group">Mumbai Blood
                                                        Group
                                                    </option>
                                                    <option value="A1B+VE">A1B+VE</option>
                                                    <option value="A1+">A1+</option>
                                                    <option value="A1-">A1-</option>
                                                    <option value="A2B+VE">A2B+VE</option>
                                                    <option value="A2+">A2+</option>
                                                    <option value="AB">AB RH+</option>
                                                    <option value="RH+">O RH+</option>
                                                    <option value="ABO">AB</option>
                                                    <option value="ABO">A+VE</option>
                                                    <option value="ABO">A1B-VE</option>
                                                    <option value="ABO">B</option>
                                                    <option value="ABO">B+VE</option>
                                                    <option value="ABO">B-VE</option>
                                                    <option value="ABO">O+VE</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a blood
                                                    group
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>House <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="BHAIRAV (Yellow)">BHAIRAV (Yellow)
                                                    </option>
                                                    <option value="HINDOL (Red)">HINDOL (Red)</option>
                                                    <option value="MALHAR (Green)">MALHAR (Green)
                                                    </option>
                                                    <option value="MALKAUNS (Blue)">MALKAUNS (Blue)
                                                    </option>
                                                </select>
                                                <div class="invalid-feedback">Please select a house
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Religion <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="Hinduism">Hinduism</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Christianity">Christianity</option>
                                                    <option value="Sikhism">Sikhism</option>
                                                    <option value="Buddhism">Buddhism</option>
                                                    <option value="Jainism">Jainism</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a religion
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Caste <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="GERNERAL">GERNERAL</option>
                                                    <option value="OBC">OBC</option>
                                                    <option value="SBC">SBC</option>
                                                    <option value="SC">SC</option>
                                                    <option value="ST">ST</option>
                                                    <option value="VSNT">VSNT</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a Caste
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Presently studying in grade
                                                    <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                    <option value="5th">5th</option>
                                                    <option value="6th">6th</option>
                                                    <option value="7th">7th</option>
                                                    <option value="8th">8th</option>
                                                    <option value="9th">9th</option>
                                                    <option value="11th">11th</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a grade
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Presently studying in section
                                                    <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a section
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Student's aadhaar card number
                                                    <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="1234"
                                                    pattern="[0-9]+" minlength="12" maxlength="12" />
                                                <div class="invalid-feedback">Please enter a aadhaar card
                                                    no.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Student's aadhaar
                                                    front<span class="required">*</span></label>
                                                <input class="form-control" type="file" id="formFile"
                                                    accept=".jpg,.png,.jpeg" />
                                                <div class="form-text">
                                                    File Size Should be less than 2Mb. The Image formats
                                                    should
                                                    be
                                                    .jpg or .jpeg.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Student's aadhaar
                                                    back<span class="required">*</span></label>
                                                <input class="form-control" type="file" id="formFile"
                                                    accept=".jpg,.png,.jpeg" />
                                                <div class="form-text">
                                                    File Size Should be less than 2Mb. The Image formats
                                                    should be .jpg or .jpeg.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-secondary">SAVE</button>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-prev btn-outline-primary">Back</button>
                                                <button type="button"
                                                    class="btn btn-next btn-outline-primary">Next</button>
                                            </div>
                                        </div>
                                        <!--Row End-->
                                    </div>
                                    <!--Step End-->
                                </div>



                                <!-- Step Four Start -->
                                <div class="form-step">

                                    <div class="row g-2">
                                        <!--Row Start-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Address Line 1 <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter address" />
                                                <div class="invalid-feedback">Enter Address Line 1</div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" placeholder="Enter address" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>City<span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="1234" />
                                                <div class="invalid-feedback">Please enter city name
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>State<span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="1234" />
                                                <div class="invalid-feedback">Select a State</div>

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Pincode <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="1234"
                                                    pattern="[0-9]+" minlength="5" maxlength="5" />
                                                <div class="invalid-feedback">Please enter pincode</div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Primary Email<span class="required">*</span></label>
                                                <input type="email" class="form-control"
                                                    placeholder="name@websit.com" />
                                                <div class="invalid-feedback">Enter Address Line 1</div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Primary Phone Number<span class="required">*</span></label>
                                                <input type="Number" class="form-control" placeholder="9876543210" />
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Secondary Email</label>
                                                <input type="email" class="form-control"
                                                    placeholder="name@websit.com" />
                                                <div class="invalid-feedback">Enter Address Line 1</div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label>Secondary Phone Number</label>
                                                <input type="Number" class="form-control" placeholder="9876543210" />
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-secondary">SAVE</button>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-prev btn-outline-primary">Back</button>
                                                <button type="button"
                                                    class="btn btn-next btn-outline-primary">Next</button>
                                            </div>
                                        </div>

                                        <!--Row End-->
                                    </div>
                                    <!--Step End-->
                                </div>

                                <!-- Step Five Start -->
                                <div class="form-step">

                                    <div class="row g-2">
                                        <!--Row Start-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Status <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option>Hold</option>
                                                    <option>Pass</option>
                                                    <option>Prob.</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a status
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Reason <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="Reason1">Reason 01</option>
                                                    <option value="Reason1">Reason 02</option>
                                                    <option value="Reason1">Reason 03</option>

                                                </select>
                                                <div class="invalid-feedback">Please select a reason
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Notes</label>
                                                <input type="text-area" class="form-control" />
                                            </div>

                                            <div class="d-grid gap-2 d-flex justify-content-between">
                                                <button type="button" class="btn btn-outline-secondary">SAVE</button>
                                                <div>
                                                    <button type="button"
                                                        class="btn btn-prev btn-outline-primary">Back</button>
                                                    <button type="submit" class="btn btn-outline-success"><a
                                                            href="FrontOffice01.html">Submit</a></button>
                                                </div>
                                            </div>

                                            <!--Row End-->
                                        </div>
                                        <!--Step End-->
                                    </div>

                                    <!-- ============== Assign SA =============== -->
                                    <div class="assignSASection">

                                    </div>

                                </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Javascripts -->
    <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../../assets/js/steps.js"></script>
    <script src="../../assets/js/steps.js"></script>
    <script src="../../assets/js/pages/front-office.js"></script>
</body>

</html>