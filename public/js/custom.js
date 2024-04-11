// READ MORE BUTTON JS
$(document).ready(function () {
    $(".recmd-tablets-card:first").show();
    $(".recmd-tabcard-main .hairLossProd").show();
    $(".read-m-btn").click(function () {
        $(".recmd-tablets-card").show();
        $(".other-recmd").show();
        $(this).hide();
    });
});

$(document).ready(function () {
    var currentStep = 1;
    var totalSteps = $(".quest-v2-step").length;
    var progressTotalSteps = $(".data-progress").length;
    var currentSubStep = 0;
    var progressBarValue = 0;
    var totalSubSteps;
    var getStepVal;
    var questType = $('#quest-page-type').val();
    $(".sub-step").hide();

    // Hide all steps except the first one
    $(".quest-v2-step").not(":first").hide();

    if(!questType == 'hairLoss' || currentStep >= 1){
        $('body').addClass('h-100 bg-white')
    }else {
        $('body').removeClass('h-100 bg-white')
    }
    // Function to go to the next step
    function nextStep() {
        if (currentStep < totalSteps) {
            setTimeout(function () {
                $(".quest-v2-step ").hide();
                $(".sub-step").hide();
                if(!questType == 'hairLoss' || currentStep >= 1){
                    $('body').addClass('h-100 bg-white')
                }else {
                    $('body').removeClass('h-100 bg-white')
                }
                currentStep++;
                console.log("currentStep::", currentStep);
                $("#step" + currentStep).show();
                totalSubSteps = $("#step" + currentStep + " .sub-step").length;
                progressBarValue = $("#step" + currentStep).attr(
                    "data-progress"
                );
                if(currentStep > progressTotalSteps) {
                    $('.question-final').addClass('bg-white')
                    $('.question-final').css('padding-top', '48px')
                    $('.quest-v2-content').css("background-color", "#e4e4e4");
                    $('.brands-reviews-content').css('display', 'block');
                }
                currentSubStep = 0;
                updateProgressBar();
                if (currentStep == totalSteps)
                    $(document.body).css("background-color", "#e4e4e4");
            }, 800);
        }
        subStepSamePage();
    }

    // Function to go to the previous step
    function prevStep() {
        if (currentStep > 1) {
            setTimeout(function () {
                $(".quest-v2-step").hide();
                $(".sub-step").hide();
                currentStep--;
                if(!questType == 'hairLoss' || currentStep == 1){
                    $('body').removeClass('h-100 bg-white')
                }
                console.log("currentStep back::", currentStep);
                $("#step" + currentStep).show();
                $("#step" + currentStep + ' input[type="radio"]').prop(
                    "checked",
                    false
                );
                currentSubStep = 0;
                totalSubSteps = $("#step" + currentStep + " .sub-step").length;
                console.log("currentSubStep::", currentSubStep);
                progressBarValue = $("#step" + currentStep).attr(
                    "data-progress"
                );
                if(currentStep < progressTotalSteps) {
                    $('.question-final').addClass('bg-white')
                    $('.question-final').css('padding-top', '48px')
                    $('.quest-v2-content').css("background-color", "#fff");
                    $('.brands-reviews-content').css('display', 'none');
                }
                updateProgressBar();
                if (currentStep == totalSteps - 1)
                    $(document.body).css("background-color", "#484f47");
            }, 800);
        }
        subStepSamePage();
    }

    function nextSubStep() {
        getStepVal = parseInt($(this).attr("step-val"));
        console.log("getStepVal", getStepVal);
        totalSubSteps = $("#step" + currentStep + " .sub-step").length;
        $(".sub-step").hide();
        if (currentSubStep <= totalSubSteps || getStepVal <= totalSubSteps) {
            $(
                "#step" + currentStep + " #sub-step" + currentSubStep
            ).removeClass("active");
            if (getStepVal) {
                currentSubStep += getStepVal;
            } else {
                currentSubStep++;
            }
            console.log("currentSubStep::", currentSubStep);
            console.log("totalSubSteps::", totalSubSteps);
            $("#step" + currentStep + " #sub-step" + currentSubStep).addClass(
                "active"
            );
            $("#step" + currentStep + " #sub-step" + currentSubStep).show();
        }
        subStepSamePage();
    }
    function prevSubStep() {
        getStepVal = parseInt($(this).attr("step-val"));
        console.log("getStepVal", getStepVal);
        totalSubSteps = $("#step" + currentStep + " .sub-step").length;
        if (getStepVal == 0) {
            currentSubStep = 0;
        }
        console.log("currentSubStep::", currentSubStep);
        $(".sub-step").hide();
        if (currentSubStep > 0 || getStepVal > 0) {
            $(
                "#step" + currentStep + " #sub-step" + currentSubStep
            ).removeClass("active");
            if (getStepVal) {
                currentSubStep -= getStepVal;
            } else {
                currentSubStep--;
            }
            $("#step" + currentStep + ' input[type="radio"]').prop(
                "checked",
                false
            );
            $(
                "#step" +
                    currentStep +
                    " #sub-step" +
                    currentSubStep +
                    ' input[type="radio"]'
            ).prop("checked", false);
            console.log("currentSubStep::", currentSubStep);
            $("#step" + currentStep + " #sub-step" + currentSubStep).addClass(
                "active"
            );
            $("#step" + currentStep + " #sub-step" + currentSubStep).show();
        }
        subStepSamePage();
    }
    function updateProgressBar() {
        console.log("progressTotalSteps::", progressTotalSteps);
        // var newWidthPercentage = (currentStep / progressTotalSteps) * 100;
        // $(".progress-bar").css("width", newWidthPercentage + "%");
        $(".progress-bar").css("width", progressBarValue + "%");
        $(".quest-progress-bar h3").html(progressBarValue + "%");
    }
    function openErrorModal() {
        $(".quest-v2-errorstep").show();
        $(".quest-v2-errorstep").addClass("open");
        // alert("Yes, working::");
    }
    function closeErrorModal() {
        $(".quest-v2-errorstep").hide();
        $(".quest-v2-errorstep").removeClass("open");
        $("#step" + currentStep + ' input[type="radio"]').prop(
            "checked",
            false
        );
    }
    function subStepSamePage() {
        let getStepid = $(this).attr("step-id");
        $(".other-step").hide();
        if (getStepid) {
            $(`.other-step[data-sub-id=${getStepid}]`).show();
        }
    }
    $(".open-other-step").click(subStepSamePage);

    // Button click events
    $(".next-button").click(nextStep);
    $(".prev-button").click(prevStep);
    $(".open-que-error").click(openErrorModal);
    $(".close-que-modal").click(closeErrorModal);
    $(".open-sub-step").click(nextSubStep);
    $(".back-sub-step").click(prevSubStep);

    $("#openInrSubSteps").hide();
    $(".open-sub-inr-step").click(function () {
        $("#openInrSubSteps").show();
    });
});

// JavaScript/jQuery code
$(document).ready(function () {
    $(".tablets-list-box .row").on("click", function (e) {
        e.preventDefault();
        $(".tablets-list-box .row").removeClass("active");
        $(this).addClass("active");
    });
});
$(document).ready(function () {
    $(".pre-tm-dosage-mg").on("click", function (e) {
        e.preventDefault();
        $(".pre-tm-dosage-mg").removeClass("active");
        $(this).addClass("active");
    });
});
$(document).ready(function () {
    $(".recmd-tablets-card .trans-btn").on("click", function () {
        $(".recmd-tablets-card").removeClass("active");
        $(this).closest(".recmd-tablets-card").addClass("active");
    });
});
$(document).ready(function () {
    $(".card-design .btn-d-black").on("click", function () {
        $(".card-design").removeClass("active");
        $(this).closest(".card-design").addClass("active");
    });
});
// $(document).ready(function() {
//     $('.user-sidebar .sidebar-active').on('click', function(e) {
//         e.preventDefault();
//         $('.user-sidebar .sidebar-active').removeClass('active');
//         $(this).addClass('active');
//     });
//   });
// // quest height js
// $(document).ready(function() {
//     const quesScaledWindowHeight = ($(window).height() / 0.9) - 109;
//     $(".quest-v2-content").css('height', quesScaledWindowHeight + 'vh');
//     console.log("quesScaledWindowHeight", quesScaledWindowHeight);
// });

$(".questionnaire-v2-main .quest-v2-step h3 textarea.in_type").each(
    function () {
        var textarea = $(this);
        var newDiv = $("<div>").addClass("outputDiv");
        textarea.after(newDiv);
        var text = textarea.val();
        newDiv.text(text);
    }
);
