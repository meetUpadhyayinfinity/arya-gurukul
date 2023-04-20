<?php
include('Components/header.php');
include('Components/sidebar.php');
?>

<div class="page-content">
    <div class="main-wrapper">

        <!-- ===== Filter ====== -->
        <div class="card">
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
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Search</button>

                    </div>

                </form>

            </div>
        </div>
        <!-- ==== End Filter =====  -->

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
                                        <select name="ctl00$ContentPlaceHolder1$ddlBank"
                                            id="ContentPlaceHolder1_ddlBank" class="form-select">
                                            <option selected="selected" value="0">-Select-</option>
                                            <option value="State Bank Of India">State Bank Of India</option>
                                            <option value="State Bank Of Indore">State Bank Of Indore</option>
                                            <option value="ICICI Bank Ltd">ICICI Bank Ltd</option>
                                            <option value="HDFC Bank Ltd">HDFC Bank Ltd</option>
                                            <option value="IDBI Bank Ltd">IDBI Bank Ltd</option>
                                            <option value="YES Bank Ltd">YES Bank Ltd</option>
                                            <option value="The Kalyan Janata Sahakari Bank Ltd">The Kalyan Janata
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
    </div>
</div>

<?php include('Components/footer.php') ?>