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

var spaceQuestions = {
    hairLoss: {
        2: {
            type: "showHairAds",
        },
        5: {
            type: "showTreatment",
            video: {
                desktop: "Minoxidil and Finasteride desk.MP4",
                mobile: "Minoxidil and Finasteride Mobile.MP4",
            },
            delay: 10000,
        },
        8: {
            type: "showTreatment",
            video: {
                desktop: "Pre-comp-hair-mobile.MP4",
                mobile: "Pre-comp-hair-desk.MP4",
            },
            delay: 9000,
        },
    },
    beard: {
        4: {
            type: "showBeardAds",
        },
        7: {
            type: "showTreatment",
            video: {
                desktop: "Pre-comp 6.MP4",
                mobile: "Pre-comp 3.MP4",
            },
            delay: 9000,
        },
        11: {
            type: "showTreatment",
            video: {
                desktop: "A randomized trial desk 1.MP4",
                mobile: "A randomized trial Mobile 1.MP4",
            },
            delay: 10000,
        },
    },
    erectile: {
        2: {
            type: "showTreatment",
            video: {
                desktop: "Our products come in sleek desk.MP4",
                mobile: "Our products come in sleek mobile.MP4",
            },
            delay: 10000,
        },
        8: {
            type: "showReview",
            description:
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun",
        },
        13: {
            type: "showTreatment",
            video: {
                desktop: "Tadalafil (Cialis) got its _weekend pill DESK.MP4",
                mobile: "Tadalafil (Cialis) got its _weekend pill mobile.MP4",
            },
            delay: 9000,
        },
    },
    premature: {
        3: {
            type: "showReview",
            description:
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun",
        },
        6: {
            type: "showTreatment",
            video: {
                desktop: "Pre-comp-Desk.MP4",
                mobile: "Pre-comp.MP4",
            },
            delay: 10000,
        },
        9: {
            type: "showTreatment",
            video: {
                desktop: "Our products come in sleek desk 2.MP4",
                mobile: "Our products come in sleek mobile 2.MP4",
            },
            delay: 10000,
        },
    },
};

$(document).ready(function () {
    var currentStep = 1;
    var totalSteps = $(".quest-v2-step").length;
    var progressTotalSteps = $(".data-progress").length;
    var currentSubStep = 0;
    var progressBarValue = 0;
    var totalSubSteps;
    var getStepVal;
    var questType = $("#quest-page-type").val();
    $(".sub-step").hide();

    // Hide all steps except the first one
    $(".quest-v2-step").not(":first").hide();

    if (questType != undefined && currentStep > 1) {
        $("body").addClass("h-100 bg-white");
    } else {
        $(".quest-v2-header").css("border-bottom", "5px solid #f5f5f5");
        $("body").addClass("h-100 bg-white");
    }

    if (questType == undefined) {
        $("body").removeClass("h-100 bg-white");
        $(".quest-v2-header").css("border-bottom", "none");
    }
    // Function to go to the next step
    function nextStep() {
        if (currentStep < totalSteps) {
            setTimeout(function () {
                $(".quest-v2-step ").hide();
                $(".sub-step").hide();
                if (currentStep >= 1) {
                    $(".quest-v2-header").css("border-bottom", "none");
                }
                currentStep++;
                console.log("currentStep::", currentStep);
                $("#step" + currentStep).show();
                totalSubSteps = $("#step" + currentStep + " .sub-step").length;
                progressBarValue = $("#step" + currentStep).attr(
                    "data-progress"
                );
                if (currentStep > progressTotalSteps) {
                    $(".question-final").addClass("bg-white");
                    $(".question-final").css("padding-top", "48px");
                    $(".quest-v2-content").css("background-color", "#e4e4e4");
                    $(".brands-reviews-content").css("display", "block");
                }
                currentSubStep = 0;
                var steps = Object.keys(spaceQuestions[questType]);

                if (steps.indexOf(currentStep.toString()) != -1) {
                    switch (spaceQuestions[questType][currentStep].type) {
                        case "showHairAds": {
                            showHairAds(spaceQuestions[questType][currentStep]);
                            break;
                        }
                        case "showTreatment": {
                            showVideoAnimation(
                                spaceQuestions[questType][currentStep]
                            );
                            break;
                        }
                        case "showReview": {
                            showReviews(spaceQuestions[questType][currentStep]);
                            break;
                        }
                        case "showBeardAds": {
                            showBeardAds();
                            break;
                        }
                    }
                }
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
                if (currentStep == 1) {
                    $(".quest-v2-header").css(
                        "border-bottom",
                        "5px solid #f5f5f5"
                    );
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
                if (currentStep <= progressTotalSteps) {
                    $(".question-final").addClass("bg-white");
                    $(".question-final").css("padding-top", "48px");
                    $(".quest-v2-content").css("background-color", "#fff");
                    $(".brands-reviews-content").css("display", "none");
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

$(".questionnaire-v2-main .quest-v2-step h3 textarea.in_type").each(
    function () {
        var textarea = $(this);
        var newDiv = $("<div>").addClass("outputDiv");
        textarea.after(newDiv);
        var text = textarea.val();
        newDiv.text(text);
    }
);

function showHairAds() {
    var radios = document.getElementsByName("Q1_answer");

    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            var title = $(radios[i]).attr("id");
            var background = $(radios[i]).data("background");
            var color = $(radios[i]).data("color");
            var name = $(radios[i]).data("name");
            // do whatever you want with the checked radio
            $(".quest-v2-inner-wrap").hide();
            $(".review-user-name").html(name);
            $(".quest-v2-content ").css("background-color", background);
            $("body")
                .removeClass("bg-white")
                .css("background-color", background);
            $(".hair-ad-content").show();

            $(".hair-ad-description").addClass(color);
            // title + 'before.jpg'
            $("#ad-title").addClass(color).html(radios[i].value);
            $("#default-ad-title").addClass(color);
            $("#ad-image-before").attr(
                "src",
                `${app_url}/images/${title}before.png`
            );
            $("#ad-image-after").attr(
                "src",
                `${app_url}/images/${title}after.png`
            );
            // only one radio can be logically checked, don't check the rest
            break;
        }
    }

    setTimeout(function () {
        $(".quest-v2-inner-wrap").show();
        $(".quest-v2-content ").css("background-color", "#fff");
        $("body").addClass("h-100 bg-white");
        $("#ad-title").removeClass(color);
        $(".hair-ad-description").removeClass(color);
        $("#default-ad-title").removeClass(color);
        $(".hair-ad-content").hide();
    }, 5000);
}

function showBeardAds() {
    $(".quest-v2-inner-wrap").hide();
    $(".quest-v2-content ").css("background-color", "#000");
    $("body").removeClass("bg-white").css("background-color", "#000");
    $(".beard-ad-content").show();

    $(".beard-ad-description").addClass("text-white");
    // title + 'before.jpg'

    setTimeout(function () {
        $(".quest-v2-inner-wrap").show();
        $(".quest-v2-content ").css("background-color", "#fff");
        $("body").addClass("h-100 bg-white");
        $(".beard-ad-description").removeClass("text-white");
        $(".beard-ad-content").hide();
    }, 5000);
}

function showReviews(data) {
    $(".quest-v2-inner-wrap").hide();
    $(".quest-v2-content ").css("background-color", "#000");
    $("body").removeClass("bg-white").css("background-color", "#000");
    $("#quest-review-description").html(data.description);
    $(".quest-review-content").show();

    setTimeout(function () {
        $(".quest-v2-inner-wrap").show();
        $(".quest-v2-content ").css("background-color", "#fff");
        $("body").addClass("h-100 bg-white");
        $(".quest-review-content").hide();
    }, 5000);
}

function showVideoAnimation(data) {
    $(".main-container").removeClass("container-fluid");
    $(".quest-v2-inner-wrap").hide();
    $(".quest-v2-content ").css("background-color", "#000");
    $("body").removeClass("bg-white").css("background-color", "#000");
    $(".video-content").show();

    $("#video-src-desktop").attr(
        "src",
        `${app_url}/videos/${data.video.desktop}`
    );
    $("#video-src-mobile").attr(
        "src",
        `${app_url}/videos/${data.video.mobile}`
    );
    $("#video-player-desktop").get(0).load();
    $("#video-player-desktop").get(0).play();

    $("#video-player-mobile").get(0).load();
    $("#video-player-mobile").get(0).play();

    setTimeout(function () {
        $(".main-container").addClass("container-fluid");
        $(".quest-v2-inner-wrap").show();
        $(".quest-v2-content ").css("background-color", "#fff");
        $("body").addClass("h-100 bg-white");
        $(".video-content").hide();
        $(".video-title").empty();
    }, data.delay);
}
