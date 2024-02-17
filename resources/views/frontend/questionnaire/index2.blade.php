@extends('layouts.app')
@section('title', 'Questionnaire')
@section('content')


<div class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Questinnaire</h2>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade ques-modal" id="abortModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body" id="abortModalBody">

            </div>
            <div class="modal-footer">
                <a href="{{ route('questionnaire.abortQuestionnaire') }}" class="btn btn-primary">See all Answer </a>
            </div>
        </div>
    </div>
</div>
<section class="questinnaire-main">
    <div class="container-xxl container">
        <!-- 1st step -->
        <div class="questinnaire-step1 qtnr-inner active">
            <h2 class="questinnaire-heading">What was your sex assigned at birth?</h2>
            <div class="form-section">
                <form action="">
                    <div class="form-group form-radio">
                        <input type="radio" id="male" name="radio-group" value="male" checked>
                        <label for="male">Male</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="female" name="radio-group" value="female">
                        <label for="female">Female</label>
                    </div>
                    <input type="hidden" class="steps" value="1">
                </form>
                <span class="error1" style="color:red"></span>
            </div>

            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)" style="display: none;">Back</a>
                <a class="quest-nextbtn nxt" href="javascript:void(0)" data-proress="1">Next</a>
            </div>
        </div>
        <!-- 2nd step -->
        <div class="questinnaire-step2 qtnr-inner">
            <h2 class="questinnaire-heading">WHAT IS YOUR AGE GROUP</h2>
            <div class="form-section step2">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id=" NOT SUITABLE1" name="radio-group" value="under18">
                        <label for=" NOT SUITABLE1">UNDER 18</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="next question" name="radio-group" value="18-65" checked>
                        <label for="next question">18-65</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="next section" name="radio-group" value="over65">
                        <label for="next section">OVER 65</label>
                    </div>
                    <input type="hidden" class="steps" value="2">
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="2">Next</a>
            </div>
        </div>
        <!-- 3rd step -->
        <div class="questinnaire-step3 qtnr-inner">
            <h2 class="questinnaire-heading">WHAT TYPE OF BEARD Do you currently have</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="notSutable2" name="radio-group" value="no-growth-at-all">
                        <label for="notSutable2">NO GROWTH AT ALL</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="INFLAMED AREAS" name="radio-group" value="hair-loss-over">
                        <label for="INFLAMED AREAS">HAIR LOSS OVER / AROUND RED INFLAMED AREAS</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="NO GROWTH" name="radio-group"
                            value="defined-circular-areas-of-no-growth">
                        <label for="NO GROWTH">DEFINED CIRCULAR AREAS OF NO GROWTH</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="PATCHY GROWTH" name="radio-group" value="slow-or-patchy-growth" checked>
                        <label for="PATCHY GROWTH">SLOW OR PATCHY GROWTH</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="3">Next</a>
            </div>
        </div>
        <!--4 step  -->
        <div class="questinnaire-step4 qtnr-inner">
            <h2 class="questinnaire-heading">Have you noticed ANY CHANGES SUDDEN IN YOUR BEARD growth</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="NOT SUITABL3" name="radio-group" value="yes">
                        <label for="NOT SUITABL3">YES </label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="THEM PROGRESS" name="radio-group" value="no" checked>
                        <label for="THEM PROGRESS">NO</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="4">Next</a>
            </div>
        </div>
        <!-- 5 step -->
        <div class="questinnaire-step5 qtnr-inner">
            <h2 class="questinnaire-heading">ANY LOSS OF HAIR ON ANY PARTS OF YOUR BODY OTHERWISE</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques5" name="radio-group" value="yes">
                        <label for="ques5">YES</label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox5" placeholder="Tell Us More...">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="SUITABLE1" name="radio-group" value="no" checked>
                        <label for="SUITABLE1">NO</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="5">Next</a>
            </div>
        </div>
        <!-- 6 step -->
        <div class="questinnaire-step6 qtnr-inner">
            <h2 class="questinnaire-heading">HAVE YOU TAKEN MINOXIDIL IN PAST 12 MONTHS</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques6" name="radio-group" value="yes">
                        <label for="ques6">YES</label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox6"
                            placeholder="Tell Us WHAT HAPPEN, EFFICACY, SIDE EFFECTS.">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="CONTINUE SUITABLE" name="radio-group" value="no" checked>
                        <label for="CONTINUE SUITABLE">NO </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="6">Next</a>
            </div>
        </div>
        <!-- 7 step -->
        <div class="questinnaire-step7 qtnr-inner">
            <h2 class="questinnaire-heading">ARE YOU ALLERGIC TO MINOXIDIL </h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id=" NOT SUITABLE4" name="radio-group" value="yes">
                        <label for=" NOT SUITABLE4">YES</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="CONTINUE1" name="radio-group" value="no" checked>
                        <label for="CONTINUE1">NO </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="7">Next</a>
            </div>
        </div>
        <!-- 8 step -->
        <div class="questinnaire-step8 qtnr-inner">
            <h2 class="questinnaire-heading">Do you suffer from sensitive or damaged skin, or have you been diagnosed with a skin condition around the beard area? </h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques8" name="radio-group" value="yes">
                        <label for="ques8">YES</label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox8"
                            placeholder="Tell Us WHAT HAPPEN, EFFICACY, SIDE EFFECTS.">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="SUITABLE CONTINUE1 " name="radio-group" value="no" checked>
                        <label for="SUITABLE CONTINUE1 ">No</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="8">Next</a>
            </div>
        </div>
        <!-- 9 step -->
        <div class="questinnaire-step9 qtnr-inner">
            <h2 class="questinnaire-heading">Have you been diagnosed with high or low blood pressure? </h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="Yes3" name="radio-group" value="yes">
                        <label for="Yes3">Yes</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="question 10" name="radio-group" value="no" checked>
                        <label for="question 10">No </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="9">Next</a>
            </div>
        </div>
        <!--10 step  -->
        <div class="questinnaire-step10 qtnr-inner">
            <h2 class="questinnaire-heading">DO YOU SMOKE</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="Yes4" name="radio-group" value="yes">
                        <label for="Yes4">YES </label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="no1 " name="radio-group" value="no" checked>
                        <label for="no1 ">NO</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="10">Next</a>
            </div>
        </div>
        <!-- 11 step -->
        <div class="questinnaire-step11 qtnr-inner">
            <h2 class="questinnaire-heading">It's really important to let us know if you have any </h2>
            <div class="form-section">
                <form action="#">

                    <div class="form-group form-radio">
                        <input type="radio" id="ques11" name="radio-group" value="yes">
                        <label for="ques11">YES THE ABOVE APPLIES TO ME </label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox11"
                            placeholder="Tell Us WHAT HAPPEN, EFFICACY, SIDE EFFECTS.">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="recently " name="radio-group" value="No" checked>
                        <label for="recently ">NO IT DOES NOT APPLY TO ME </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="11">Next</a>
            </div>
        </div>
        <!-- 12 step -->
        <div class="questinnaire-step12 qtnr-inner">
            <h2 class="questinnaire-heading">WOULD YOU LIKE TO TELL YOUR GP </h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques12" name="radio-group" value="yes">
                        <label for="ques12">YES THE ABOVE APPLIES TO ME </label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox12"
                            placeholder="WHAT IS YOUR GP (including address) ">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="APPLY TO " name="radio-group" value="no-it-does-not-apply-to-me" checked>
                        <label for="APPLY TO ">NO </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="12">Next</a>
            </div>
        </div>
        <!-- 13 step -->


        <div class="questinnaire-step15 qtnr-inner">
            <h2 class="questinnaire-heading">Questinnaire Successfully Completed</h2>
            <h3>Go To Recomeded Treatment page... <a href="{{ url('shop/erectile-dysfunction') }}">Click Here</a>
        </div>
    </div>
</section>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#textbox5').hide();
    $('#textbox6').hide();
    $('#textbox8').hide();
    $('#textbox11').hide();
    $('#textbox12').hide();


    $('#ques5').click(function() {
        if ($('#ques5').is(':checked')) {
            $('#textbox5').show();
        }
    });

    $('#ques6').click(function() {
        if ($('#ques6').is(':checked')) {
            $('#textbox6').show();
        }
    });

    $('#ques8').click(function() {
        if ($('#ques8').is(':checked')) {
            $('#textbox8').show();
        }
    });

    $('#ques11').click(function() {
        if ($('#ques11').is(':checked')) {
            $('#textbox11').show();
        }
    });
    $('#ques12').click(function() {
        if ($('#ques12').is(':checked')) {
            $('#textbox12').show();
        }
    });

    $detail = '';
    $('.quest-nextbtn').on('click', function() {
        // if ($('input[name="radio-group"]', this).is(':checked')) {
        //     // everything's fine...
        // } else {
        //     setTimeout(function() {
        //         $(".quest-backbtn").click();
        //         alert('Please select something!');

        //     }, 1);

        // }
        var step = $(this).data("proress");
        if (step == 5) {
            $detail = $('#textbox5').val();
        }
        if (step == 6) {
            $detail = $('#textbox6').val();
        }
        if (step == 8) {
            $detail = $('#textbox8').val();
        }
        if (step == 11) {
            $detail = $('#textbox11').val();
        }
        if (step == 12) {
            $detail = $('#textbox12').val();
        }
        $ques = $('.questinnaire-step' + step + ' .questinnaire-heading').text();
        $ans = $('.questinnaire-step' + step + ' input[name="radio-group"]:checked').val();
        console.log($ans);
        // if($ans==undefined){
        //   $('.error'+step).html('select the answer');

        // }
        // else{
        //     // $('.nxt').addClass('quest-nextbtn');  
        //     $('.error'+step).html('');
        //     const nextBtns = document.querySelectorAll('.nxt');
        //     nextBtns.forEach((btn, i) => {
        //     btn.addEventListener('click', e => {
        //         e.preventDefault();
        //         steps[i].classList.remove('active');
        //         steps[i + 1].classList.add('active');
        //     });
        //     });

        $.ajax({
            type: "get",
            url: "/agent/public/questionnaire/storeBeared",
            data: {
                'question': $ques,
                'answer': $ans,
                'detail': $detail
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(result) {
                if (result.status == 404) {
                    $('#abortModal').modal('show');
                    $('#abortModalBody').html(result.message)
                    // alert(result.message)
                }
                console.log(result.status);
            }
        });
        // }
    })

});
</script>