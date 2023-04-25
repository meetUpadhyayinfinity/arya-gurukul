$(document).ready(function () {
    // Hide all sections by default
    $('.card .verificationSection').hide();
    $('.card .teacherSaSection').hide();
    $('.card .FeesSection').hide();
    // Filter
    $('.verifyFilter').hide();
    $('.teacherSaFilter').hide();
    $('.feesFilter').hide();
    $('.studentRecordCard').hide();

    // ====== Show/hide sections when tabs are clicked ======
    // Verification Tab
    $('.processTabs .verificationTab').click(function () {
        $('.verificationSection').show();
        $('.teacherSaSection').hide();
        $('.FeesSection').hide();
        // Filter
        $('.mainFilter').hide();
        $('.verifyFilter').hide();
        $('.teacherSaFilter').show();
        $('.feesFilter').hide();
        // Buckets
        $('.studentRecordCard').show();
    });

    // TeacherSA Tab
    $('.processTabs .teacherSaTab').click(function () {
        $('.verificationSection').hide();
        $('.teacherSaSection').show();
        $('.FeesSection').hide();
        // Filter
        $('.mainFilter').hide();
        $('.verifyFilter').hide();
        $('.teacherSaFilter').show();
        $('.feesFilter').hide();
        // Buckets
        $('.studentRecordCard').hide();
    });

    // Fees Tab
    $('.processTabs .feesTab').click(function () {
        $('.verificationSection').hide();
        $('.teacherSaSection').hide();
        $('.FeesSection').show();
        // Filter
        $('.mainFilter').hide();
        $('.verifyFilter').hide();
        $('.teacherSaFilter').show();
        $('.feesFilter').hide();
        // Buckets
        $('.studentRecordCard').hide();
    });
});

// ================= Conversion Form appear ===================
var verifyButton = document.querySelector('.verifyButton');
var conversionForm = document.querySelector('.conversionForm');
var backButton = document.querySelector('.backButton');

verifyButton.addEventListener('click', function () {
    conversionForm.style.display = 'block';
    document.querySelector('.verifyStudentList').style.display = 'none';
});

backButton.addEventListener('click', function () {
    conversionForm.style.display = 'none';
    document.querySelector('.verifyStudentList').style.display = 'block';
});

// ================= Fee Pay Appear ====================

var payFeesButton = document.querySelector('.feePayBtn');
var feePayBox = document.querySelector('.feePayBox');
var closeButton = document.querySelector('.closeButton');

payFeesButton.addEventListener('click', function () {
    feePayBox.style.display = 'block';
});

closeButton.addEventListener('click', function () {
    feePayBox.style.display = 'none';
});

// ============== Verification Buckets List Filter ================

$(document).ready(function () {
    // Listen for click events on the tabs
    $('.newAdmissionTab').click(function () {
        // Update the text of the h2 element in the verificationSection
        $('.verificationSection h2').text('New Admissions');
        // Filter
        $('.admissionStudentList .pass').show();
        $('.admissionStudentList .probationary').show();
        $('.admissionStudentList .hold').show();
    });

    $('.holdTab').click(function () {
        $('.verificationSection h2').text('Hold Students');
        $('.admissionStudentList .pass').hide();
        $('.admissionStudentList .probationary').hide();
        $('.admissionStudentList .hold').show();
    });

    $('.passTab').click(function () {
        $('.verificationSection h2').text('Pass Students');
        $('.admissionStudentList .pass').show();
        $('.admissionStudentList .probationary').hide();
        $('.admissionStudentList .hold').hide();
    });

    $('.probationartyTab').click(function () {
        $('.verificationSection h2').text('Probationarty Students');
        $('.admissionStudentList .pass').hide();
        $('.admissionStudentList .probationary').show();
        $('.admissionStudentList .hold').hide();
    });
});

// function filterStudents(tabName) {
//     // hide all rows first
//     $('table tbody tr').hide();

//     // show all rows if newAdmissionTab is clicked
//     if (tabName === 'newAdmission') {
//         $('table tbody tr').show();
//     } else {
//         // show rows according to the tab clicked
//         $('table tbody tr').each(function () {
//             var status = $(this).find('td:eq(2)').text();
//             if (status === tabName) {
//                 $(this).show();
//             }
//         });
//     }
// }

