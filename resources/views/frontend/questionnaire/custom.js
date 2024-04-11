// READ MORE BUTTON JS
$(document).ready(function () {
    $(".recmd-tablets-card:first").show();
    $(".read-m-btn").click(function () {
        $(".recmd-tablets-card").show();
        $(".other-recmd").show();
        $(this).hide();
    });
});

$(document).ready(function () {
    var currentStep = 1;
    var totalSteps = $(".quest-v2-step ").length;
    var progressBarValue = 0;
    var currentSubStep = 0;
    var totalSubSteps;
    var getStepVal;
    $(".sub-step").hide();

    // Hide all steps except the first one
    $(".quest-v2-step").not(":first").hide();

    alert(1)
    // Function to go to the next step
    function nextStep() {
        if (currentStep < totalSteps) {
            setTimeout(function () {
                $(".quest-v2-step ").hide();
                $(".sub-step").hide();
                currentStep++;
                console.log("currentStep::", currentStep);
                $("#step" + currentStep).show();
                totalSubSteps = $("#step" + currentStep + " .sub-step").length;
                progressBarValue = $("#step" + currentStep).attr(
                    "data-progress"
                );
                console.log("pgro" + progressBarValue);
                currentSubStep = 0;
                updateProgressBar();
            }, 400);
        }
    }

    // Function to go to the previous step
    function prevStep() {
        if (currentStep > 1) {
            setTimeout(function () {
                $(".quest-v2-step").hide();
                $(".sub-step").hide();
                currentStep--;
                console.log("currentStep back::", currentStep);
                $("#step" + currentStep).show();
                $("#step" + currentStep + ' input[type="radio"]').prop(
                    "checked",
                    false
                );
                currentSubStep = 0;
                progressBarValue = $("#step" + currentStep).attr(
                    "data-progress"
                );

                console.log("currentSubStep::", currentSubStep);
                updateProgressBar();
            }, 400);
        }
    }

    function nextSubStep() {
        getStepVal = parseInt($(this).attr("step-val"));
        console.log("getStepVal", getStepVal);
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
    }
    function prevSubStep() {
        getStepVal = parseInt($(this).attr("step-val"));
        console.log("getStepVal", getStepVal);
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

            console.log("currentSubStep::", currentSubStep);
            $("#step" + currentStep + " #sub-step" + currentSubStep).addClass(
                "active"
            );
            $("#step" + currentStep + " #sub-step" + currentSubStep).show();
        }
    }
    function updateProgressBar() {
        console.log("totalSteps::", totalSteps);
        // var newWidthPercentage = (currentStep / totalSteps) * 100;
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
    $(".pre-tm-dosage-mg").on("click", function (e) {
        e.preventDefault();
        $(".pre-tm-dosage-mg").removeClass("active");
        $(this).addClass("active");
    });
});

// // quest height js
// $(document).ready(function() {
//     const quesScaledWindowHeight = ($(window).height() / 0.9) - 109;
//     $(".quest-v2-content").css('height', quesScaledWindowHeight + 'vh');
//     console.log("quesScaledWindowHeight", quesScaledWindowHeight);
// });

$(document).ready(function () {
    $(".prev-button").click(function () {
        $("#experiences").val("");
    });
});
