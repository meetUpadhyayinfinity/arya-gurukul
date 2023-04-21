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
    <title>Front Office - AryaGlobal</title>

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
    <!-- Loader -->
    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>





    <!-- ========= Student List =========== -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body" style="overflow-x:auto;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">GR NO.</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Grade </th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><input type="checkbox"></th>
                                    <td>0001</td>
                                    <td>Abeer Kumar Kumar</td>
                                    <td>3rd</td>
                                    <td>A</td>
                                    <td>923061355</td>
                                </tr>
                                <tr>
                                    <th scope="row"><input type="checkbox"></th>
                                    <td>0002</td>
                                    <td>Asma Khan</td>
                                    <td>2nd</td>
                                    <td>B</td>
                                    <td>923061378</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========= End Student List ======== -->

    <!-- ============ Fee Details Box ============= -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <!-- Student Data -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>0001</td>
                                <td>Abeer Kumar Kumar</td>
                                <td>3rd</td>
                                <td>A</td>
                                <td>923061355</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Student Data -->

                    <!-- Filter -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Entry Date <span class="required">*</span></label>
                            <input type="date" class="form-control" />

                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Acadmic Year</label>
                            <select class="form-select">
                                <option selected disabled value="">-select-</option>
                                <option>2020-2021</option>
                                <option>2021-2022</option>
                                <option>2022-2023</option>
                                <option>2023-2024</option>
                                <option>2024-2025</option>
                                <option>2025-2026</option>
                                <option>2026-2027</option>
                                <option>2027-2028</option>
                                <option>2028-2029</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Payment Mode</label>
                            <select class="form-select">
                                <option selected disabled value="">-select-</option>
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                <option value="Card">Card</option>
                                <option value="NEFT">NEFT</option>
                                <option value="RTGS">RTGS</option>
                                <option value="IMPS">IMPS</option>
                                <option value="UPI">UPI</option>
                                <option value="DD">DD</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Filter -->
                    <!-- =========== Fee Details ============ -->
                    <div class="row">
                        <!-- ========= Fees Title Details ======== -->
                        <div class="col-md-6">

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Fee ID</th>
                                        <th scope="col">Fee Kind</th>
                                        <th scope="col">Fee Title</th>
                                        <th scope="col">Due Amount ₹</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td style="width:200px">FM00001</td>
                                        <td style="width:200px">Admission</td>
                                        <td>Admission Fee</td>
                                        <td>4668</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td>FM00002</td>
                                        <td>Admission</td>
                                        <td>Caution Money</td>
                                        <td>25000</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>Total Amount Selected:</b></td>
                                        <td><b> 14004.00</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- ======= End Fees Title Details ====== -->

                        <!-- ========= Input Transaction Details ==========  -->
                        <div class="col-md-6">
                            <div class="row">
                                <div id="ContentPlaceHolder1_cheque1" class="col-md-6 mb-3">
                                    <label class="labelmargin" id="lblchequereceipt">Cheque <span
                                            style="color: red">*</span></label>
                                    <input type="file" name="ctl00$ContentPlaceHolder1$flchequereceipt"
                                        id="flchequereceipt" class="form-control">

                                </div>

                                <div id="ContentPlaceHolder1_cheque3" class="col-md-6 mb-3">
                                    <label class="labelmargin" id="lblchequebank">Select Bank <span
                                            style="color: red">*</span></label>
                                    <select name="ctl00$ContentPlaceHolder1$ddlBank" id="ContentPlaceHolder1_ddlBank"
                                        class="form-select">
                                        <option selected="selected" value="0">-Select-</option>
                                        <option value="State Bank Of India">State Bank Of India</option>
                                        <option value="State Bank Of Indore">State Bank Of Indore</option>
                                        <option value="ICICI Bank Ltd">ICICI Bank Ltd</option>
                                        <option value="HDFC Bank Ltd">HDFC Bank Ltd</option>
                                        <option value="IDBI Bank Ltd">IDBI Bank Ltd</option>
                                        <option value="YES Bank Ltd">YES Bank Ltd</option>
                                        <option value="The Kalyan Janata Sahakari Bank Ltd">The Kalyan
                                            Janata
                                            Sahakari Bank Ltd</option>
                                        <option value="Punjab National Bank">Punjab National Bank </option>

                                    </select>

                                </div>

                                <div id="ContentPlaceHolder1_cheque4" class="col-md-6 mb-3">
                                    <label class="labelmargin" id="lblBranch">Branch Name <span
                                            style="color: red">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$txtchequebranch" type="text"
                                        id="ContentPlaceHolder1_txtchequebranch" placeholder="Enter Branch Name"
                                        class="form-control">

                                </div>
                                <div id="ContentPlaceHolder1_cheque5" class="col-md-6 mb-3">
                                    <label class="labelmargin" id="lblChequeIFSC">IFSC Code <span
                                            style="color: red">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$txtIFSC" type="text"
                                        id="ContentPlaceHolder1_txtIFSC" class="form-control">

                                </div>
                                <div id="ContentPlaceHolder1_cheque6" class="col-md-6 mb-3">
                                    <label class="labelmargin" id="lblChequeNo">Instrument No <span
                                            style="color: red">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$txtinstrumentNo" type="text"
                                        id="ContentPlaceHolder1_txtinstrumentNo" placeholder="Enter Cheque No"
                                        class="form-control">

                                </div>
                                <div id="ContentPlaceHolder1_cheque7" class="col-md-6 mb-3">
                                    <label class="labelmargin" id="lblChequeDate">Instrument Date <span
                                            style="color: red">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$dtchequedate" type="date"
                                        id="ContentPlaceHolder1_dtchequedate" class="form-control">

                                </div>

                            </div>
                        </div>
                        <!-- ========== End Input Transaction Details ======== -->

                        <!-- Submit Button -->
                        <div class="mb-3 d-flex justify-content-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- ========== End Fee Details Box =========== -->




    <!-- Javascripts -->
    <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
</body>

</html>