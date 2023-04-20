<?php
include('Components/header.php');
include('Components/sidebar.php')
?>

<div class="page-content">
    <div class="main-wrapper">
        <!-- =========== Free Reciept Filter ================ -->
        <div class="feeRecieptsFilter">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All Transaction Reciepts</h5>
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
                                    <label class="form-label">Mode of Payment</label>
                                    <select class="form-select">
                                        <option selected disabled value="">-select-</option>
                                        <option value="cash">Cash</option>
                                        <option value="cheque">Cheque</option>
                                        <option value="upi">UPI</option>
                                        <option value="card">Card</option>
                                        <option value="NEFT">NEFT</option>
                                        <option value="RTGS">RTGS</option>
                                        <option value="IMPS">IMPS</option>
                                        <option value="DD">DD</option>
                                        <option value="razorpay">Razorpay</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Fee Title</label>
                                    <select class="form-select">
                                        <option selected disabled value="">-select-</option>
                                        <option value="1st"> Convesion Quater 01</option>
                                        <option value="2nd">Convesion Quater 02</option>
                                        <option value="3rd">Convesion Quater 03</option>
                                        <option value="4th">Convesion Quater 04</option>
                                        <option value="admission">Admission</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Fee Kind</label>
                                    <select class="form-select">
                                        <option selected disabled value="">-select-</option>
                                        <option value="admission">Admission Fee</option>
                                        <option value="caution">Caution Fee</option>
                                        <option value="term">Term Fee</option>
                                        <option value="tution">Tution Fee</option>
                                    </select>
                                </div>


                                <div class="col-md-9">
                                    <label class="form-label">Search</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <select class="form-select" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                                <option selected disabled value="">-select-</option>
                                                <option value="1">Amount</option>
                                                <option value="2">Student's First Name</option>
                                                <option value="3">Student's Middle Name</option>
                                                <option value="4">Student's Last Name</option>
                                                <option value="5">GR Number</option>
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
                </div>
            </div>
        </div>

        <!-- ============= Free Reciept List =============== -->
        <div class="freeRecieptList">

            <div class="row">

                <div class="col-md-12 col-lg-12">
                    <div class="card table-widget">
                        <div class="card-body">
                            <h5 class="card-title">Recent Transaction Reciepts</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Gr NO</th>
                                            <th scope="col">Transaction ID</th>
                                            <th scope="col">Student Class</th>
                                            <th scope="col">Section</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">Mode</th>
                                            <th scope="col">Fee Title</th>
                                            <th scope="col">Fee Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col"> Date</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <th>77777</th>
                                            <td>00001</td>
                                            <td>5th</td>
                                            <td>B</td>
                                            <td>Ronak</td>
                                            <td>Cash</td>
                                            <td>Convesion Quater 01</td>
                                            <td>Tution Fee</td>
                                            <td>1456</td>
                                            <td>22/May/2022</td>
                                            <td scope="row">
                                                <a href="#"><span class="badge bg-info p-1"><i data-feather="file-text"></i></span></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>77789</th>
                                            <td>000021</td>
                                            <td>6th</td>
                                            <td>B</td>
                                            <td>Shyam</td>
                                            <td>UPI</td>
                                            <td>Convesion Quater 01</td>
                                            <td>Tution Fee</td>
                                            <td>1456</td>
                                            <td>25/May/2022</td>
                                            <td scope="row">
                                                <a href="#"><span class="badge bg-info p-1"><i data-feather="file-text"></i></span></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>77745</th>
                                            <td>00003</td>
                                            <td>5th</td>
                                            <td>B</td>
                                            <td>Raju</td>
                                            <td>Cash</td>
                                            <td>Convesion Quater 01</td>
                                            <td>Tution Fee</td>
                                            <td>1456</td>
                                            <td>28/May/2022</td>
                                            <td scope="row">
                                                <a href="#"><span class="badge bg-info p-1"><i data-feather="file-text"></i></span></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>77709</th>
                                            <td>00101</td>
                                            <td>4th</td>
                                            <td>A</td>
                                            <td>Anuradha</td>
                                            <td>Card</td>
                                            <td>Convesion Quater 01</td>
                                            <td>Tution Fee</td>
                                            <td>1456</td>
                                            <td>10/June/2022</td>
                                            <td scope="row">
                                                <a href="#"><span class="badge bg-info p-1"><i data-feather="file-text"></i></span></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>77327</th>
                                            <td>00104</td>
                                            <td>5th</td>
                                            <td>A</td>
                                            <td>Nirali</td>
                                            <td>Cash</td>
                                            <td>Convesion Quater 01</td>
                                            <td>Tution Fee</td>
                                            <td>1456</td>
                                            <td>12/June/2022</td>
                                            <td scope="row">
                                                <a href="#"><span class="badge bg-info p-1"><i data-feather="file-text"></i></span></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>77687</th>
                                            <td>00107</td>
                                            <td>5th</td>
                                            <td>B</td>
                                            <td>Siddhesh</td>
                                            <td>Cash</td>
                                            <td>Convesion Quater 01</td>
                                            <td>Tution Fee</td>
                                            <td>1456</td>
                                            <td>22/June/2022</td>
                                            <td scope="row">
                                                <a href="#"><span class="badge bg-info p-1"><i data-feather="file-text"></i></span></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>77697</th>
                                            <td>00121</td>
                                            <td>3th</td>
                                            <td>B</td>
                                            <td>Sundar</td>
                                            <td>Cash</td>
                                            <td>Convesion Quater 01</td>
                                            <td>Tution Fee</td>
                                            <td>1456</td>
                                            <td>25/June/2022</td>
                                            <td scope="row">
                                                <a href="#"><span class="badge bg-info p-1"><i data-feather="file-text"></i></span></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <th>77698</th>
                                            <td>00122</td>
                                            <td>5th</td>
                                            <td>A</td>
                                            <td>Mayur</td>
                                            <td>UPI</td>
                                            <td>Convesion Quater 01</td>
                                            <td>Tution Fee</td>
                                            <td>1456</td>
                                            <td>26/June/2022</td>
                                            <td scope="row">
                                                <a href="#"><span class="badge bg-info p-1"><i data-feather="file-text"></i></span></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('Components/footer.php') ?>