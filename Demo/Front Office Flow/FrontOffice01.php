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
    <title>Admin - AryaGlobal</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <!-- New Styles  -->
    <link rel="stylesheet" href="../../assets/css/front-office.css">

    <!-- Theme Styles -->
    <link href="../../assets/css/main.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">
    <link href="../../assets/css/conversion-steps.css" rel="stylesheet">

</head>

<body>
    <div class="page-container">
        <!-- ==== Loader ===== -->
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>

        <!-- ===== Navbar ====== -->
        <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">

                <div id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                        <li class="nav-item">
                            <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="logo">
                    <a class="navbar-brand" href="index.html"></a>
                </div>

                <div class="" id="headerNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><img
                                    src="../../assets/images/avatars/profile-image.png" alt=""></a>

                            <div class="dropdown-menu dropdown-menu-end profile-drop-menu"
                                aria-labelledby="profileDropDown">
                                <a class="dropdown-item" href="Profile.html"><i data-feather="user"></i>Profile</a>
                                <a class="dropdown-item" href="Login.html"><i data-feather="log-out"></i>Logout</a>
                            </div>

                        </li>
                    </ul>
                </div>

            </nav>
        </div>

        <!-- ==== Sidebar =====  -->
        <div class="page-sidebar">
            <ul class="list-unstyled accordion-menu">
                <li class="sidebar-title">
                    Main
                </li>

                <li>
                    <a href="Dashboard.php"><i data-feather="home"></i>Dashboard</a>
                </li>

                <!-- <li>
                        <a href="#"><i data-feather="edit"></i>Form<i class="fas fa-chevron-right dropdown-icon"></i></a>
                        <ul class="">
                            <li><a href="#"><i class="far fa-circle"></i>Admission</a></li>
                            <li><a href="#"><i class="far fa-circle"></i>Conversion</a></li>
                        </ul>
                    </li> -->

                <li>
                    <a href="#"><i data-feather="database"></i>Form Data<i
                            class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul>
                        <li><a href="#"><i class="far fa-circle"></i>Admission</a></li>
                        <li><a href="ConversionEntry.php"><i class="far fa-circle"></i>Conversion</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i data-feather="users"></i>Users<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul>
                        <li><a href="#"><i class="far fa-circle"></i>Parent</a></li>
                        <li><a href="#"><i class="far fa-circle"></i>Staff</a></li>
                    </ul>
                </li>

                <li class="sidebar-title">
                    Other
                </li>

                <li>
                    <a href=""><i data-feather="star"></i>Masters<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul>
                        <li><a href="Acadmicyear.php"><i class="far fa-circle"></i>Academic Year</a>
                        </li>
                        <li><a href="Level.php"><i class="far fa-circle"></i>Level</a></li>
                        <li><a href="Standard.php"><i class="far fa-circle"></i>Standard</a></li>
                        <li><a href="Division.php"><i class="far fa-circle"></i>Division</a></li>
                        <!-- <li><a href="#"><i class="far fa-circle"></i>Board</a></li> -->
                        <!-- <li><a href="#"><i class="far fa-circle"></i>GR Number</a></li> -->
                        <!-- <li><a href="#"><i class="far fa-circle"></i>Student Confirmation</a></li> -->
                        <li><a href="Country.php"><i class="far fa-circle"></i>Country</a></li>
                        <li><a href="State.php"><i class="far fa-circle"></i>State</a></li>
                        <li><a href="City.php"><i class="far fa-circle"></i>City</a></li>
                        <li><a href="Pincode.php"><i class="far fa-circle"></i>Pincode</a></li>
                    </ul>
                </li>

                <li>
                    <a href=""><i data-feather="star"></i>Fees<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul>
                        <li><a href="Feekind.php"><i class="far fa-circle"></i>Fee Kind</a></li>
                        <li><a href="FeeTitle.php"><i class="far fa-circle"></i>Fee Title</a></li>
                        <li><a href="FeeMap.php"><i class="far fa-circle"></i>Fee Maping</a></li>
                        <li><a href="FeeReciepts.php"><i class="far fa-circle"></i>Fee Recipts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i data-feather="upload"></i>Excel Upload</a>
                </li>
                <li>
                    <a href="Login.html"><i data-feather="log-out"></i>Logout</a>
                </li>

            </ul>
        </div>

        <div class="page-content">
            <div class="main-wrapper">

                <!-- ================= Admission Process Tabs ================== -->

                <div class="card">
                    <div class="processTabs">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card stat-widget verificationTab">
                                    <div class="card-body">
                                        <h5 class="card-title">Verification</h5>
                                        <h2>
                                            <div class="card-icon">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </div>
                                        </h2>
                                        <p>2023-24</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card stat-widget teacherSaTab">
                                    <div class="card-body">
                                        <h5 class="card-title">SA & Meet and Greet</h5>
                                        <h2>
                                            <div class="card-icon">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </div>
                                        </h2>
                                        <p>2023-24</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card stat-widget feesTab">
                                    <div class="card-body">
                                        <h5 class="card-title">Fees</h5>
                                        <h2>
                                            <div class="card-icon">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </div>
                                        </h2>
                                        <p>2023-24</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Student Record Cards -->
                <div class="card studentRecordCard">
                    <div class="card-body studentCards">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card stat-widget" style="background-color: #d9ddfc;">
                                    <div class="card-body">
                                        <h5 class="card-title">New Admissions</h5>
                                        <h2>120</h2>
                                        <p>2023-24</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card stat-widget" style="background-color: #FAD7DD;">
                                    <div class="card-body">
                                        <h5 class="card-title">Hold</h5>
                                        <h2>20</h2>
                                        <p>2023-24</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card stat-widget" style="background-color: #D3FBF9;">
                                    <div class="card-body">
                                        <h5 class="card-title">Pass</h5>
                                        <h2>80</h2>
                                        <p>2023-24</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card stat-widget" style="background-color: #FFF5E0;">
                                    <div class="card-body">
                                        <h5 class="card-title">Probationary</h5>
                                        <h2>30</h2>
                                        <p>2023-24</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Main Filter  -->
                <div class="card mainFilter">
                    <div class="card-body">
                        <form class="row g-3">

                            <div class="col-md-3">
                                <label class="form-label">From Date</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">To Date</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Level</label>
                                <select class="form-select">
                                    <option selected disabled value="">-select-</option>
                                    <option>Pre-K</option>
                                    <option>Primary</option>
                                    <option>Secondary</option>
                                    <option>High Secondary</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Grade</label>
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
                                    <option value="10th">10th</option>
                                    <option value="11th">11th</option>
                                    <option value="12th">12th</option>
                                </select>
                            </div>


                            <div class="col-md-3">
                                <label class="form-label">Division</label>
                                <select class="form-select">
                                    <option selected disabled value="">-select-</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                </select>
                            </div>

                            <div class="col-md-9">
                                <label class="form-label">Search</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <select class="form-select"
                                            style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                            <option selected disabled value="">-select-</option>
                                            <option value="1">Student's First Name</option>
                                            <option value="2">Student's Middle Name</option>
                                            <option value="3">Student's Last Name</option>
                                            <option value="4">Father Name</option>
                                            <option value="5">Mother Name</option>
                                            <option value="6">Primary Email</option>
                                            <option value="7">Mobile Number</option>
                                            <option value="8">GR Number</option>
                                            <option value="9">AadharNumber</option>
                                            <option value="11">Caste</option>
                                            <option value="12">Blood Group</option>
                                            <option value="13">House</option>
                                            <option value="14">Religion</option>
                                            <option value="15">City</option>
                                            <option value="16">PinCode</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">LOAD DATA</button>
                                <button class="btn btn-primary" type="submit">EXPORT DATA</button>
                            </div>

                        </form>

                    </div>
                </div>
                <!-- Main Filter End  -->


                <!-- Verification Filter Start  -->
                <div class="card verifyFilter">
                    <div class="card-body">
                        <h5 class="card-title">Verification Form</h5>
                        <form class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Grade</label>
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
                                    <option value="10th">10th</option>
                                    <option value="11th">11th</option>
                                    <option value="12th">12th</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">Search</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <select class="form-select"
                                            style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                            <option selected disabled value="">-select-</option>
                                            <option value="1">Student's First Name</option>
                                            <option value="2">Student's Middle Name</option>
                                            <option value="3">Student's Last Name</option>
                                            <option value="4">Father Name</option>
                                            <option value="5">Mother Name</option>
                                            <option value="6">User ID</option>
                                            <option value="7">Mobile Number</option>
                                            <option value="9">AadharNumber</option>
                                            <option value="11">Caste</option>
                                            <option value="12">Blood Group</option>
                                            <option value="13">House</option>
                                            <option value="14">Religion</option>
                                            <option value="15">City</option>
                                            <option value="16">PinCode</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Search</button>

                            </div>

                        </form>

                    </div>
                </div>
                <!--  Verification Filter End  -->


                <!--  TeacherSA Filter Start  -->
                <div class="card teacherSaFilter">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Teacher SA</h5> -->
                        <form class="row g-3">

                            <div class="col-md-3">
                                <label class="form-label">From Date</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">To Date</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Level</label>
                                <select class="form-select">
                                    <option selected disabled value="">-select-</option>
                                    <option>Pre-K</option>
                                    <option>Primary</option>
                                    <option>Secondary</option>
                                    <option>High Secondary</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Grade</label>
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
                                    <option value="10th">10th</option>
                                    <option value="11th">11th</option>
                                    <option value="12th">12th</option>
                                </select>
                            </div>


                            <div class="col-md-12">
                                <label class="form-label">Search</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <select class="form-select"
                                            style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                            <option selected disabled value="">-select-</option>
                                            <option value="1">Student's First Name</option>
                                            <option value="2">Student's Middle Name</option>
                                            <option value="3">Student's Last Name</option>
                                            <option value="4">Father Name</option>
                                            <option value="5">Mother Name</option>
                                            <option value="6">Primary Email</option>
                                            <option value="7">Mobile Number</option>
                                            <option value="8">GR Number</option>
                                            <option value="9">AadharNumber</option>
                                            <option value="11">Caste</option>
                                            <option value="12">Blood Group</option>
                                            <option value="13">House</option>
                                            <option value="14">Religion</option>
                                            <option value="15">City</option>
                                            <option value="16">PinCode</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                </div>
                            </div>





                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Search</button>

                            </div>

                        </form>

                    </div>
                </div>
                <!--  TeacherSA filter End  -->


                <!--  Fees Filter Start  -->
                <div class="card feesFilter">
                    <div class="card-body">
                        <h5 class="card-title">Admission and Caution Fee Collection</h5>
                        <form class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Grade</label>
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
                                    <option value="10th">10th</option>
                                    <option value="11th">11th</option>
                                    <option value="12th">12th</option>
                                </select>
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">Search</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <select class="form-select"
                                            style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                            <option selected disabled value="">-select-</option>
                                            <option value="1">Student's First Name</option>
                                            <option value="2">Student's Middle Name</option>
                                            <option value="3">Student's Last Name</option>
                                            <option value="4">Father Name</option>
                                            <option value="5">Mother Name</option>
                                            <option value="6">User ID</option>
                                            <option value="7">Mobile Number</option>
                                            <option value="9">AadharNumber</option>
                                            <option value="11">Caste</option>
                                            <option value="12">Blood Group</option>
                                            <option value="13">House</option>
                                            <option value="14">Religion</option>
                                            <option value="15">City</option>
                                            <option value="16">PinCode</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Search</button>

                            </div>

                        </form>

                    </div>
                </div>
                <!-- Fees Filter End -->

                <!-- ==================== Section Changing Screen ================== -->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <!-- ========== Verrify Tabs =============== -->
                                <div class="verificationSection">
                                    <h2>Verification Students List</h2>
                                    <?php include('ConversionFormVerify.php'); ?>
                                </div>

                                <!-- =========== Teacher SA ================  -->
                                <div class="teacherSaSection">
                                    <h2>SA & Meet and Greet</h2>
                                    <?php include('TeacherSA.php'); ?>
                                </div>

                                <!-- ============== Fees ====================  -->
                                <div class="FeesSection">
                                    <h2>Fees Section</h2>
                                    <?php include('AdmissionCaution.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============ Student List ================ -->
                <!-- <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body" style="overflow-x:auto;">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Acadmic Session</th>
                                                <th scope="col">GR No.</th>
                                                <th scope="col">Grade Applying</th>
                                                <th scope="col">Grade</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Middle Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Date of Birth</th>
                                                <th scope="col">Created on</th>
                                                <th scope="col">Verification</th>
                                                <th scope="col">SA</th>
                                                <th scope="col">M&G</th>
                                                <th scope="col">Fee</th>
                                                <th scope="col">GR</th>
                                                <th scope="col">Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>2022-2023</td>
                                                <td>2856</td>
                                                <td>4th</td>
                                                <td>3rd</td>
                                                <td>Abeer</td>
                                                <td>Kumar</td>
                                                <td>Mehra</td>
                                                <td>23/08/2016</td>
                                                <td>23/06/2022 13:45:55</td>
                                                <td><span class="badge rounded-pill bg-danger">Hold</span></td>
                                                <td><span class="badge rounded-pill bg-danger">Hold</span></td>
                                                <td><span class="badge rounded-pill bg-danger">Hold</span></td>
                                                <td><span class="badge rounded-pill bg-danger">Unpaid</span></td>
                                                <td><span class="badge rounded-pill bg-danger">Hold</span></td>

                                                <td><button class="btn btn-primary mb-2"><a href="#">View</a></button>
                                                </td>
                                                <td><button class="btn btn-primary mb-2"><a
                                                            href="SA.html">Verify</a></button>
                                                </td>
                                                <td><button class="btn btn-primary mb-2"><a
                                                            href="SA.html">S.A.</a></button>
                                                </td>
                                                <td><button class="btn btn-primary mb-2"><a
                                                            href="SA.html">Fee</a></button>
                                                </td>
                                                <td><button class="btn btn-primary mb-2"><a
                                                            href="SA.html">GR</a></button>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- Javascripts -->
    <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
    <!-- New JS  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/pages/front-office.js"></script>
</body>

</html>