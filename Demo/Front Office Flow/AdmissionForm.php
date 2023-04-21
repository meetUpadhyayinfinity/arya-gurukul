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

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">

    <!-- Theme Styles -->
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

    <div class="page-container">



        <!--Row-->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body p-1 d-flex justify-content-around">

                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">

                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"><i class=" text-primary"
                                            data-feather="grid"></i></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">

                                        <li class="nav-item">
                                            <a href="AdmissionForm.html" class="nav-link">
                                                <button type="button" class="btn btn-outline-primary">Form</button>
                                            </a>
                                        </li>

                                        <li style="margin-top: 7px;" class="nav-item dropdown">
                                            <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Admission
                                                Procedure
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="AdmissionProcedure.html">Admission
                                                        Procedure</a></li>
                                                <li><a class="dropdown-item" href="DocumentRequired.html">Documents
                                                        Required</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="ConversionProcess.html">Conversion</a></li>
                                            </ul>
                                        </li>


                                        <li class="nav-item">
                                            <a href="FeeStructure.html" class="nav-link">
                                                <button type="button" class="btn btn-outline-primary">Fee
                                                    Structure</button>
                                            </a>
                                        </li>


                                        <li style="margin-top: 7px;" class="nav-item dropdown">
                                            <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Policies
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="SAPolicy.html">S.A.
                                                        Policy</a></li>
                                                <li><a class="dropdown-item" href="FeePolicy.html">Fee
                                                        Policy</a></li>
                                                <li><a class="dropdown-item" href="PrivacyPolicy.html">Privacy
                                                        Policy</a></li>
                                                <li><a class="dropdown-item" href="WithdrawalPolicy.html">Withdrawal
                                                        Policy</a>
                                                </li>
                                                <li><a class="dropdown-item" href="ParentCooperationPolicy.html">Parent
                                                        Cooperation Policy</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
        <!--Row End-->


        <!--Row-->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ADMISSION FORM</h5>
                        <div style="margin: 0 auto;">
                            <form class="row g-3">

                                <!-- Step Eight -->
                                <div class="form-step form-step-active" id="medicalForm">
                                    <!--Row Start-->
                                    <div class="row g-2">
                                        <p class="bold">Medical Information</p>

                                        <div class="col-12 bg-light p-3 text-center">
                                            <div class="">
                                                <p class="bold">Medical Examination Report</p>
                                                <p>(To be filled by Parent / Guardian of the child)</p>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <p class="bold">Student Information</p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Session:<span class="bold"> 2022-23</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Child Name:<span class="bold"> Ravi Kumar</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Grade:<span class="bold"> 9th</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Date of Birth:<span class="bold"> 23-08-2006</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Gender:<span class="bold"> Male</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Blood:<span class="bold"> B+</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Height<span class="required">*</span></label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Weight<span class="required">*</span></label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Tuberculosis<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Diabetes<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Rheumatic Fever<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Epilepsy<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Hepatits A or B<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Malaria <span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Chicken - Pox<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Measles<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Mumps <span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Any other Illnessess<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="detailbox">
                                            <div class="mb-3">
                                                <label>Please give details including dates. <span
                                                        class="required">*</span></label>
                                                <textarea class="form-control" rows="2"></textarea>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-secondary">SAVE</button>
                                            <button type="button" class="btn btn-next btn-outline-primary">Next</button>
                                            <button type="button" onsubmit="html2pdf();"
                                                class="btn btn-next btn-outline-primary">Print</button>
                                        </div>

                                    </div>
                                    <!--Row End-->
                                </div>
                                <!--Step End-->






                                <!-- Step First -->
                                <div class="form-step ">
                                    <!--Row Start-->
                                    <div class="row g-2">

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Are you from? <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option>Little Aryans</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Select your Gr. No. <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option>9911</option>
                                                    <option>9910</option>
                                                    <option>9909</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
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

                                        <div class="col-md-6">
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

                                        <div class="d-grid gap-2 d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-secondary">SAVE</button>
                                            <button type="button" class="btn btn-next btn-outline-primary">Next</button>
                                        </div>

                                    </div>
                                    <!--Row End-->
                                </div>
                                <!--Step End-->

                                <!-- Step Second -->
                                <div class="form-step">
                                    <!--Row Start-->
                                    <div class="row g-2">
                                        <div>

                                            <h5 class="text-center">IMPORTANT INFORMATION</h5>

                                            <p>Dear Parents,<br>
                                                We are delighted by your interest in Arya Gurukul School. Please
                                                follow the instructions below to ensure that your request for
                                                admission is processed efficiently.</p>
                                            <h5>Enrollment is a four-step process</h5>

                                            <ol>
                                                <li>Application Procedure</li>
                                                <li>S.A. (Standardised Assessment)</li>
                                                <li>Meet & Greet Procedure</li>
                                                <li>Fee Payment & Confirmation of Admission</li>
                                            </ol>

                                            <h5>Application Procedure</h5>
                                            <ul>
                                                <li>Application procedure involves mandatory filling of the
                                                    online
                                                    application form and payment of application fee.</li>
                                                <li>Once the application has been successfully registered, the
                                                    parent
                                                    will receive an intimation through SMS /Email bearing the
                                                    Registration No. which will be used for further references
                                                </li>
                                                <li>Only valid and complete applications will be considered for
                                                    admission</li>
                                                <li>Admission is subject to vacancy and due process as per the
                                                    grade
                                                    applied for. Submitting of application for admission does
                                                    not be
                                                    construed as admission granted.</li>
                                                <li>In case there is no vacancy, the application may not be
                                                    processed.</li>
                                                <li> Admission will be confirmed only on completion of each of
                                                    the
                                                    following –
                                                    <ul>
                                                        <li>The application form must be submitted with
                                                            documents
                                                            stated in the form. In case you are unable to submit
                                                            a
                                                            required document, the school will only accept the
                                                            incomplete application form against a written
                                                            undertaking that the required documents will be
                                                            provided
                                                            within 3 (three) working days.</li>
                                                        <li>Final admission is subject to physical verification
                                                            of
                                                            original documents.</li>
                                                        <li>All information must be complete and accurate. In
                                                            case
                                                            any false, incomplete and/or misleading information
                                                            is
                                                            provided, AryaGurukul reserves the right not to
                                                            process
                                                            the admission form.</li>
                                                        <li>Admissions will be granted subject to payment of
                                                            fees,
                                                            completing the prescribed admission procedure and
                                                            acceptance of all rules, policies and code of
                                                            conduct
                                                            applicable to AryaGurukul students and
                                                            parents/guardians.</li>
                                                        <li>No new admissions are granted in X and XII unless
                                                            there
                                                            is any vacancy and the child has studied from CBSE
                                                            only
                                                            with grades not lower than A1 (before 31st July).
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h5>S.A. (Standardised Assessment)</h5>
                                            <ul>
                                                <li>Once the application has been successfully registered, the
                                                    admission
                                                    Office will review your application details. Upon the
                                                    validity of
                                                    application form the parent will receive an intimation
                                                    through SMS
                                                    /Email bearing the details of S.A. (Standardised assessment)
                                                    for
                                                    your ward.(Learn more)
                                                </li>
                                            </ul>

                                            <h5>Meet & Greet Procedure</h5>
                                            <ul>
                                                <li>If your ward successfully qualifies in his/her S.A.
                                                    (Standardised
                                                    assessment), the parent will receive an intimation through
                                                    SMS/Email
                                                    bearing the details of the meet & greet from the Principal’s
                                                    Office.
                                                    The parents are requested to carry all physical copies of
                                                    original
                                                    documents that have been submitted for physical verification
                                                    by the
                                                    admission department.</li>
                                            </ul>

                                            <h5>Fee Payment & Confirmation of Admission</h5>
                                            <ul>
                                                <li>
                                                    The parent then receives an intimation through SMS/Email
                                                    bearing all
                                                    the details regarding fees.
                                                </li>
                                                <li>
                                                    Admissions is confirmed subject to payment of fees,
                                                    completing the
                                                    prescribed admission procedure and acceptance of all rules,
                                                    policies
                                                    and code of conduct applicable to AryaGurukul students and
                                                    parents/guardians within three working days. (Learn more)
                                                </li>
                                            </ul>

                                            <h5 class="text-center mt-3">GENERAL INSTRUCTIONS FOR FILLING UP THE
                                                REGISTRATION FORM</h5>

                                            <p class="text-center">All fields marked with asterisk (<span
                                                    class="required">*</span>)
                                                are mandatory to be filled.</p>

                                            <ol>
                                                <li> Mention the correct Date of Birth as per Date of Birth
                                                    Certificate
                                                    issued by the municipal corporation. No change in Date of
                                                    Birth
                                                    shall be allowed later</li>
                                                <li> Full name of the student, date of birth, permanent address
                                                    & name of
                                                    the parents(first, middle and last) entered in the form
                                                    should match
                                                    the supporting documents like Date of Birth Certificate,
                                                    Aadhaar
                                                    card, voter Id card, passport etc</li>
                                                <li>All sections of this Registration Form must be completed in
                                                    full to
                                                    be processed. Submission of the Registration Form is a
                                                    request for
                                                    Admission and does not guarantee Admission</li>
                                                <li> Please identify one parent as Preferred contact for
                                                    receiving all
                                                    School communication by SMS, E-mail notifications or
                                                    telephonic
                                                    communication. (not applicable for Single Parent / Guardian)
                                                </li>
                                                <li>One application will be accepted per child. Kindly fill all
                                                    the
                                                    details including the Board selection and preference
                                                    carefully along
                                                    with the applicable application processing fee. No change(s)
                                                    will be
                                                    allowed once the form is submitted</li>
                                                <li>
                                                    Printed copy of the Registration Form must be signed by hand
                                                    by both
                                                    the Parents / Single parent (legally Divorced or having
                                                    adoption
                                                    rights) / legal Guardian and submitted with documentation as
                                                    stated.
                                                    Please refer to the instructions for Parent details for
                                                    Guardianship
                                                    / Child Custody Policy/Form</li>
                                            </ol>

                                            <div class="form-check col-md-3">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label bold">
                                                    Read and Agree <span class="required">*</span>
                                                </label>
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
                                    </div>
                                    <!--Row End-->
                                </div>
                                <!-- Step End -->

                                <!-- Step Third -->
                                <div class="form-step">
                                    <!--Row Start-->
                                    <div class="row g-2">

                                        <p class="bold">Student Details</p>
                                        <p>Session: Auto Fill</p>
                                        <p>Grade: Auto Fill</p>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Applicant's Photo<span
                                                    class="required">*</span></label>
                                            <input class="form-control" type="file" id="formFile"
                                                accept=".jpg,.png,.jpeg" />
                                            <div class="form-text">
                                                File Size Should be less than 2Mb. The Image formats should
                                                be
                                                .jpg or .jpeg.
                                            </div>
                                        </div>

                                        <label>Applicant's Name <span class="required">*</span></label>

                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" placeholder="First Name" />
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Middle Name" />
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Last Name" />
                                        </div>




                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Applicant's Gender <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Transgender</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Date of
                                                    Birth<span class="required">*</span></label>
                                                <input class="form-control" type="date" min="2003-01-01"
                                                    max="2020-12-31" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Place of Birth<span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Original Birth
                                                    Certificate
                                                    with date of birth, child and parent’s name<span
                                                        class="required">*</span></label>
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


                                        <div class="col-md-4">
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
                                            </div>
                                        </div>

                                        <div class="col-md-4">
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

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Sub-Cast (If Applicable)<span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Caste
                                                    Certificate<span class="required">*</span></label>
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

                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <p><span class="bold">Read and Agree</span> <span
                                                            class="required">*</span><br>
                                                        In case of unavailability of child's caste
                                                        certificate you can upload any one of the parent's
                                                        certificate as a proof of caste. Caste certificate
                                                        is required for registration for national
                                                        scholarship examination and board examination.
                                                        Parents are requested to apply for their ward's
                                                        certificate and update the information timely, with
                                                        the school records at the admissions office.</p>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Name of the previous school attended<span
                                                        class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>UDISE number of the previous school <span
                                                        class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Applicant's nationality <span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">School Leaving /
                                                    Transfer Certificates of the previous school</label>
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
                                                <label for="formFile" class="form-label">Marksheet / Passing
                                                    Certificate of the previous class attended by your
                                                    ward <span class="required">*</span></label>
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

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Applicant's aadhaar card number
                                                    <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="1234"
                                                    pattern="[0-9]+" minlength="12" maxlength="12" />
                                                <div class="invalid-feedback">Please enter a aadhaar card
                                                    no.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
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

                                        <div class="col-md-4">
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

                                        <div class="col-md-4">
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

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Applicant's mother tongue
                                                    <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="1234"
                                                    pattern="[0-9]+" minlength="12" maxlength="12" />
                                                <div class="invalid-feedback">Please enter a aadhaar card
                                                    no.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Applicant's active passport number
                                                </label>
                                                <input type="text" class="form-control" placeholder="1234"
                                                    pattern="[0-9]+" minlength="12" maxlength="12" />
                                                <div class="invalid-feedback">Please enter a aadhaar card
                                                    no.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Is the child adopted?<span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option>Yes</option>
                                                    <option>No</option>

                                                </select>
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
                                    </div>
                                    <!--Row End-->
                                </div>
                                <!-- Step End -->

                                <!-- Step Four -->
                                <div class="form-step">
                                    <!--Row Start-->
                                    <div class="row g-2">
                                        <div>
                                            Para
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
                                    </div>
                                    <!--Row End-->
                                </div>
                                <!-- Step End -->

                                <!-- Step Five -->
                                <div class="form-step">
                                    <!--Row Start-->
                                    <div class="row g-2">

                                        <p class="bold">Parents Details</p>

                                        <div class="col-md-12 mb-3">
                                            <label for="formFile" class="form-label">Father's Photo<span
                                                    class="required">*</span></label>
                                            <input class="form-control" type="file" id="formFile"
                                                accept=".jpg,.png,.jpeg" />
                                            <div class="form-text">
                                                File Size Should be less than 2Mb. The Image formats should
                                                be
                                                .jpg or .jpeg.
                                            </div>
                                        </div>

                                        <label>Father's Name <span class="required">*</span></label>

                                        <div class="col-md-4 mb-3">
                                            <input type="text" class="form-control" placeholder="First Name" />
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Middle Name" />
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Last Name" />
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Date of
                                                    Birth<span class="required">*</span></label>
                                                <input class="form-control" type="date" min="2003-01-01"
                                                    max="2020-12-31" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Education Qualifications<span class="required">*</span></label>
                                                <textarea class="form-control" rows="4"></textarea>
                                                <div class="form-text">
                                                    (Please mention institutions & school attended)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Occupation <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="Accounts Professional">Accounts
                                                        Professional</option>
                                                    <option value="Agriculture (Farmer)">Agriculture
                                                        (Farmer)</option>
                                                    <option value="Banking Professional">Banking
                                                        Professional</option>
                                                    <option value="Boards">Boards</option>
                                                    <option value="Business / Self Employed">Business /
                                                        Self Employed</option>
                                                    <option value="Central Government Employee">Central
                                                        Government Employee</option>
                                                    <option value="Central Public Sector Unit">Central
                                                        Public Sector Unit</option>
                                                    <option value="Central University">Central University
                                                    </option>
                                                    <option value="Civil Service">Civil Service</option>
                                                    <option value="Contractual Staff Of Central Government">
                                                        Contractual
                                                        Staff Of Central Government</option>
                                                    <option
                                                        value="Contractual Staff Of Department of School Education Maharashtra Government">
                                                        Contractual Staff Of Department of School
                                                        Education Maharashtra Government</option>
                                                    <option value="Contractual Staff Of Maharashtra Government">
                                                        Contractual Staff Of Maharashtra Government
                                                    </option>
                                                    <option value="Contractual Staff Of other State Government">
                                                        Contractual Staff Of other State Government
                                                    </option>
                                                    <option value="Corporations">Corporations</option>
                                                    <option value="Doctor / Medical Professional">Doctor
                                                        / Medical Professional</option>
                                                    <option value="Educationist">Educationist</option>
                                                    <option value="Maharashtra State Government Employee">
                                                        Maharashtra
                                                        State Government Employee</option>
                                                    <option value="Home Maker">Home Maker</option>
                                                    <option value="Hospitality">Hospitality</option>
                                                    <option value="IT Professional">IT Professional
                                                    </option>
                                                    <option value="Labourer">Labourer</option>
                                                    <option value="Lawyer / Judiciary">Lawyer / Judiciary
                                                    </option>
                                                    <option value="Military Personnel">Military Personnel
                                                    </option>
                                                    <option value="NGO / Volunteer">NGO / Volunteer
                                                    </option>
                                                    <option value="Other State Government Employee">Other
                                                        State Government Employee</option>
                                                    <option value="Paramilitary Personnel">Paramilitary
                                                        Personnel</option>
                                                    <option value="Pilot / Aviation Industry">Pilot /
                                                        Aviation Industry</option>
                                                    <option value="Politician">Politician</option>
                                                    <option value="Private Job">Private Job</option>
                                                    <option value="Private University">Private University
                                                    </option>
                                                    <option value="Retired From Service">Retired From
                                                        Service</option>
                                                    <option value="Self Employed">Self Employed</option>
                                                    <option value="State Public Sector Unit">State Public
                                                        Sector Unit</option>
                                                    <option value="State University">State University
                                                    </option>
                                                    <option value="Unclean Occupation">Unclean Occupation
                                                    </option>
                                                    <option value="Unemployed">Unemployed</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Designation <span class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>
                                                    <option value="A.G.M.">A.G.M.</option>
                                                    <option value="Agriculture / Farmer">Agriculture / Farmer
                                                    </option>
                                                    <option value="Analyst">Analyst</option>
                                                    <option value="Architect">Architect</option>
                                                    <option value="Assistant Manager">Assistant Manager</option>
                                                    <option value="Assistant Vice President">Assistant Vice
                                                        President</option>
                                                    <option value="CEO">CEO</option>
                                                    <option value="Chairman">Chairman</option>
                                                    <option value="Chartered Accountant">Chartered Accountant
                                                    </option>
                                                    <option value="Chef">Chef</option>
                                                    <option value="Civil Servant (A)">Civil Servant (A)</option>
                                                    <option value="Civil Servant (B)">Civil Servant (B)</option>
                                                    <option
                                                        value="Commisioned Officer (Defense and Paramilitary Forces)">
                                                        Commisioned Officer (Defense and Paramilitary Forces)
                                                    </option>
                                                    <option value="Company Secretary">Company Secretary</option>
                                                    <option value="Consultant">Consultant</option>
                                                    <option value="COO / CFO / CIO / CTO">COO / CFO / CIO / CTO
                                                    </option>
                                                    <option value="CXO">CXO</option>
                                                    <option value="D.G.M.">D.G.M.</option>
                                                    <option value="Director">Director</option>
                                                    <option value="Doctor">Doctor</option>
                                                    <option value="Economist">Economist</option>
                                                    <option value="Editor">Editor</option>
                                                    <option value="Educator">Educator</option>
                                                    <option value="Engineer">Engineer</option>
                                                    <option value="Entrepreneur">Entrepreneur</option>
                                                    <option value="Family-Owned">Family-Owned</option>
                                                    <option value="Head">Head</option>
                                                    <option value="Independent Professional">Independent
                                                        Professional</option>
                                                    <option value="Inspector">Inspector</option>
                                                    <option value="Journalist">Journalist</option>
                                                    <option value="Judicial Services">Judicial Services</option>
                                                    <option value="Lawyer">Lawyer</option>
                                                    <option value="Manager">Manager</option>
                                                    <option
                                                        value="Non Commissioned Officer (Military and Paramilitary Forces">
                                                        Non Commissioned Officer (Military and Paramilitary
                                                        Forces</option>
                                                    <option value="Officer">Officer</option>
                                                    <option value="Others">Others</option>
                                                    <option value="Partner">Partner</option>
                                                    <option value="President">President</option>
                                                    <option value="Professor">Professor</option>
                                                    <option value="Proprietor">Proprietor</option>
                                                    <option value="Real Estate Consultant">Real Estate
                                                        Consultant</option>
                                                    <option value="Scientist / Researcher">Scientist /
                                                        Researcher</option>
                                                    <option value="Senior Advisor">Senior Advisor</option>
                                                    <option value="Senior Consultant">Senior Consultant</option>
                                                    <option value="Senior Manager">Senior Manager</option>
                                                    <option value="Senior Vice President">Senior Vice President
                                                    </option>
                                                    <option value="Specialist">Specialist</option>
                                                    <option value="Vice-President">Vice-President</option>
                                                    <option value="Vice-Chairman">Vice-Chairman</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Organization where you work<span
                                                        class="required">*</span></label>
                                                <textarea class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>

                                        <h5>Office Address <span class="required">*</span></h5>

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

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Office Contact No. <span class="required">*</span></label>
                                                <input type="number" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Email ID <span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Mobile Number <span class="required">*</span></label>
                                                <input type="number" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Father's aadhaar card number
                                                    <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="1234"
                                                    pattern="[0-9]+" minlength="12" maxlength="12" />
                                                <div class="invalid-feedback">Please enter a aadhaar card
                                                    no.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Father's aadhaar
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

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Father's aadhaar
                                                    back<span class="required">*</span></label>
                                                <input class="form-control" type="file" id="formFile"
                                                    accept=".jpg,.png,.jpeg" />
                                                <div class="form-text">
                                                    File Size Should be less than 2Mb. The Image formats
                                                    should be .jpg or .jpeg.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label>Annual family income in rupees<span
                                                        class="required">*</span></label>
                                                <select class="form-select">
                                                    <option selected disabled value="">-select-</option>

                                                    <option value="Less than ₹ 3,00,000">Less
                                                        than ₹ 3,00,000</option>
                                                    <option value="₹ 3,00,000 to  ₹ 5,00,000">₹
                                                        3,00,000 to ₹ 5,00,000</option>
                                                    <option value="₹ 5,00,000 to  ₹ 10,00,000">₹
                                                        5,00,000 to ₹ 10,00,000</option>
                                                    <option value="₹ 10,00,000 to  ₹ 15,00,000">₹
                                                        10,00,000 to ₹ 15,00,000</option>
                                                    <option value="More than  ₹ 15,00,000">
                                                        More than ₹ 15,00,000</option>
                                                </select>
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
                                    </div>
                                    <!--Row End-->
                                </div>
                                <!-- Step End -->

                                <!-- Step Six -->
                                <div class="form-step">
                                    <!--Row Start-->
                                    <div class="row g-2">

                                        <p class="bold">Current residential address <span class="required">*</span></p>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Address Line 1 <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter address" />
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
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>State<span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Pincode <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="12345"
                                                    pattern="[0-9]+" minlength="5" maxlength="5" />
                                            </div>
                                        </div>

                                        <p class="bold">Current residential address proof of either parent <span
                                                class="required">*</span></p>

                                        <div class="form-check col-md-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Utility Bill (Water/ Electricity/ Phone etc.)
                                            </label>
                                        </div>

                                        <div class="form-check col-md-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Sale deed/ lease deed / rent agreement / possession letter
                                            </label>
                                        </div>

                                        <div class="form-check col-md-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Bank statement or Passbook
                                            </label>
                                        </div>

                                        <div class="form-check col-md-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Passport / Aadhaar card / Driving License
                                            </label>
                                        </div>
                                        <div class="form-text mb-3">
                                            (Any 2 documents from the list given below)
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label bold">
                                                Permanent address same as current address
                                            </label>
                                        </div>

                                        <p class="bold">Permanent residential address <span class="required">*</span>
                                        </p>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Address Line 1 <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter address" />
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
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>State<span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Pincode <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="12345"
                                                    pattern="[0-9]+" minlength="5" maxlength="5" />
                                            </div>
                                        </div>

                                        <p class="bold">Permanent residential address proof of either parent
                                            <span class="required">*</span>
                                        </p>

                                        <div class="form-check col-md-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Utility Bill (Water/ Electricity/ Phone etc.)
                                            </label>
                                        </div>

                                        <div class="form-check col-md-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Sale deed/ lease deed / rent agreement / possession letter
                                            </label>
                                        </div>

                                        <div class="form-check col-md-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Bank statement or Passbook
                                            </label>
                                        </div>

                                        <div class="form-check col-md-3">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label">
                                                Passport / Aadhaar card / Driving License
                                            </label>
                                        </div>
                                        <div class="form-text mb-3">
                                            (Any 2 documents from the list given below)
                                        </div>

                                        <p class="bold">Emergency Contact Person 1
                                            <span class="form-text">Other than Parents</span>
                                        </p>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Name of person <span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Relationship with the child <span
                                                        class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Contact Number<span class="required">*</span></label>
                                                <input type="Number" class="form-control" />
                                            </div>
                                        </div>

                                        <p class="bold">Emergency Contact Person 2
                                            <span class="form-text">Other than Parents</span>
                                        </p>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Name of person <span class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Relationship with the child <span
                                                        class="required">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Contact Number<span class="required">*</span></label>
                                                <input type="Number" class="form-control" />
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
                                    <!--Row End-->
                                </div>
                                <!--Step End-->

                                <!-- Step Seven -->
                                <div class="form-step">
                                    <!--Row Start-->
                                    <div class="row g-2">
                                        <div>
                                            Para
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
                                    </div>
                                    <!--Row End-->
                                </div>
                                <!-- Step End -->





                                <!-- Step Eight -->
                                <div class="form-step" id="medicalForm">
                                    <!--Row Start-->
                                    <div class="row g-2">
                                        <p class="bold">Medical Information</p>

                                        <div class="col-12 bg-light p-3 text-center">
                                            <div class="">
                                                <p class="bold">Medical Examination Report</p>
                                                <p>(To be filled by Parent / Guardian of the child)</p>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <p class="bold">Student Information</p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Session:<span class="bold"> 2022-23</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Child Name:<span class="bold"> Ravi Kumar</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Grade:<span class="bold"> 9th</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Date of Birth:<span class="bold"> 23-08-2006</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Gender:<span class="bold"> Male</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <p>Blood:<span class="bold"> B+</span></p>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Height<span class="required">*</span></label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label>Weight<span class="required">*</span></label>
                                                <input class="form-control" type="text" />
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Tuberculosis<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Diabetes<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Rheumatic Fever<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Epilepsy<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Hepatits A or B<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Malaria <span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Chicken - Pox<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Measles<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Mumps <span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <div><label>Any other Illnessess<span class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="detailbox">
                                            <div class="mb-3">
                                                <label>Please give details including dates. <span
                                                        class="required">*</span></label>
                                                <textarea class="form-control" rows="2"></textarea>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any (Eye) Vision Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Eye: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div><label>Does the child have any Dental Condition?<span
                                                            class="required">*</span></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions">
                                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Dental: Give Details. <span class="required">*</span></label>
                                                    <textarea class="form-control" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 d-flex justify-content-between">
                                            <button type="button" class="btn btn-outline-secondary">SAVE</button>
                                            <button type="button" class="btn btn-next btn-outline-primary">Next</button>
                                            <button type="button"
                                                class="btn btn-next btn-outline-primary">Print</button>
                                        </div>

                                    </div>
                                    <!--Row End-->
                                </div>
                                <!--Step End-->

                                <!-- Step After -->
                                <div class="form-step">
                                    <!--Row Start-->
                                    <div class="row g-2">

                                        <div class="col">
                                            <div class="mb-3">
                                                <p class="text-center"><i style="font-size: 55px;"
                                                        class="text-success far fa-check-circle"></i></p>
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
                                        </div>

                                        <div class="d-grid gap-2 d-flex justify-content-center"><a
                                                href="../Admin/AdmissionView.html">
                                                <button type="button" class="btn btn-outline-primary">View</button></a>
                                            <button type="button" class="btn btn-outline-primary">Reciept</button>
                                            <button type="button" class="btn btn-outline-primary">Pay Admission
                                                Fee and Other Fees</button>
                                        </div>

                                    </div>
                                    <!--Row End-->
                                </div>
                                <!--Step End-->


                        </div>
                        <!--Step End-->

                        </form>
                        <!--Form End-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->

    </div>
    </div>

    <script>
    var printMedicalForm = document.getElementById('medicalForm');
    html2pdf(printMedicalForm);
    </script>



    <!-- Javascripts -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../../assets/js/steps.js"></script>
    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
</body>

</html>