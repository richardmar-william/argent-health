@extends('layouts.app')
@section('title', 'Questionnaire')
@section('content')
<!-- Modal -->
@php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Media;


$randomString = Str::random(40); // generate a random string of length 10
session(['my_random_string' => $randomString]); // store the random string in session
$myValue = session('my_random_string');

@endphp
<h1 class="mai kya na" hidden>

    {{ $myValue }}
</h1>




<div class="modal fade ques-modal" id="abortModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body" id="abortModalBody">

            </div>
            <div class="modal-footer">
                <a href="{{ route('questionnaire.abortQuestionnaire',['catId'=>$cat]) }}" class="btn btn-primary" id="UnsutableBtn">Please click here to review your answer </a>
                <a href="" class="btn btn-danger" id="UnsutableBtn1">Did you make a mistake in your consultation?</a>
                
                <!-- {{ route('questionnaire.abortQuestionnaire',['catId'=>$cat]) }} -->
            </div>
        </div>
    </div>
</div>




<section class="questinnaire-main">
    <div class="container-xxl container">
        <!-- 1st step -->

        <div class="questinnaire-step1 qtnr-inner active">
            <h2 class="questinnaire-heading">Could you please verify your age group</h2>
            <input type="hidden" id="catId" value="{{$cat}}">
            <div class="form-section">
                <form action="">
                    <div class="form-group form-radio">
                        <input type="radio" id="u18" name="radio-group" value="Under 18" checked>
                        <label for="u18">Under 18</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="u25" name="radio-group" value="18-25">
                        <label for="u25">18-25</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="u64" name="radio-group" value="26-64">
                        <label for="u64">26-64</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="u65" name="radio-group" value="65 or above">
                        <label for="u65">65 or above</label>
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
            <h2 class="questinnaire-heading">Could you specify the duration for which you've been experiencing premature
                ejaculation</h2>
            <div class="form-section step2">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="2a" name="radio-group" value="From my first sexual encounter">
                        <label for="2a">From my first sexual encounter</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="2b" name="radio-group" value="More than 6 months" checked>
                        <label for="2b">More than 6 months</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="2c" name="radio-group" value="Less than 6 months">
                        <label for="2c">Less than 6 months</label>
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
            <h2 class="questinnaire-heading">How regularly does premature ejaculation affect you</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="3a" name="radio-group" value="Every time I engage in sexual activity">
                        <label for="3a">Every time I engage in sexual activity</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="3b" name="radio-group"
                            value="More than half the times I engage in sexual activity">
                        <label for="3b">More than half the times I engage in sexual activity</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="3c" name="radio-group"
                            value="Less than half the time during sexual activity">
                        <label for="3c">Less than half the time during sexual activity</label>
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
            <h2 class="questinnaire-heading">How soon after penetration do you typically ejaculate</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="4a" name="radio-group" value="Less than 2 minutes">
                        <label for="4a">Less than 2 minutes </label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="4b" name="radio-group" value="Between 2 and 5 minutes">
                        <label for="4b">Between 2 and 5 minutes</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="4c" name="radio-group" value="Between 5 and 10 minutes" checked>
                        <label for="4c">Between 5 and 10 minutes</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="4d" name="radio-group" value="10 minutes and above">
                        <label for="4d">10 minutes and above</label>
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
            <h2 class="questinnaire-heading">Would you say you have control over when you ejaculate</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="5a" name="radio-group" value="Yes, I can control when I ejaculate">
                        <label for="5a">Yes, I can control when I ejaculate</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="5b" name="radio-group" value="I can control when I ejaculate sometimes">
                        <label for="5b">I can control when I ejaculate sometimes</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="5c" name="radio-group" value="No, I cannot control when I ejaculate">
                        <label for="5c">No, I cannot control when I ejaculate</label>
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
            <h2 class="questinnaire-heading">Has premature ejaculation caused distress or difficulties in your sexual
                relationships</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="6a" name="radio-group" value="yes">
                        <label for="6a">YES</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="6b" name="radio-group" value="no" checked>
                        <label for="6b">NO </label>
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
            <h2 class="questinnaire-heading">Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg, Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?
            </h2>

            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="7a" name="radio-group" value="No" checked>
                        <label for="7a">No </label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="7b" name="radio-group" value="Yes/ other">
                        <label for="7b">Yes/ other</label>
                    </div>
                    <div class="" id="div7b">
                        <div class="form-group form-radio">
                            <input type="radio" id="7ba" name="radio-group1"
                                value="We appreciate you sharing your past experiences with premature ejaculation treatment. Could you please provide more details about the type of treatment you underwent, how long you were on it, and how it impacted you? Were there any side effects? This information will help us understand your situation better and offer the most suitable treatment">
                            <label for="7ba">We appreciate you sharing your past experiences with premature ejaculation treatment. Could you please provide more details about the type of treatment you underwent,how long you were on it, and how it impacted you? Were there any side effects? This information will help us understand your situation better and offer the most suitable treatment</label>
                        </div>
                        <div class="form-group ques-textarea" id="div7ba">
                            <input class="form-control" type="text" placeholder="Please tell us." id="textbox7ba">
                        </div>

                        <div class="form-group form-radio">
                            <input type="radio" id="7bb" name="radio-group1"
                                value="It's important to note that taking multiple medications for premature ejaculation at the same time may lead to undesirable effects, such as lower blood pressure, headaches, dizziness, blurred vision, confusion, fainting, and feeling sick">
                            <label for="7bb">It's important to note that taking multiple medications for premature
                                ejaculation at the same time may lead to undesirable effects, such as lower blood
                                pressure,
                                headaches, dizziness, blurred vision, confusion, fainting, and feeling sick</label>
                            <div class="form-group ques-textarea" id="div7bb">
                                <div class="form-group form-radio">
                                    <input type="radio" id="7bba" name="radio-group21" value="I Confirm">
                                    <label for="7bba">I Confirm</label>
                                </div>
                                <div class="form-group form-radio">
                                    <input type="radio" id="7bbbb" name="radio-group21" value="I Do Not Confirm">
                                    <label for="7bbbb">I Do Not Confirm</label>
                                </div>

                            </div>

                        </div>

                    </div>



                </form>
                <span class="error1" style="color:red"></span>
            </div>


            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="7">Next</a>
            </div>
        </div>
        <!-- 8 step -->
        <div class="questinnaire-step8 qtnr-inner">
            <h2 class="questinnaire-heading">Are you always able to achieve and maintain an erection when you desire</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques8a" name="radio-group" value="yes" checked>
                        <label for="ques8a">YES</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="ques8b" name="radio-group" value="no">
                        <label for="ques8b">No</label>
                    </div>
                    <div class="form-group ques-textarea" id="div8b">
                        <p>Are you currently under any treatment for erectile dysfunction ?</p>
                        <div class="form-group form-radio">
                            <input type="radio" id="8ba" name="8b" value="yes">
                            <label for="8ba">Yes</label>
                        </div>
                        <div class="form-group form-radio">
                            <input type="radio" id="8bb" name="8b" value="no">
                            <label for="8bb">No</label>
                        </div>
                    </div>

                    <div class="form-group ques-textarea" id="div8ba">
                        <div class="form-group form-radio">
                            <p>Please specify your current medication for erectile dysfunction</p>
                            <input type="radio" id="8baa" name="8ba" value="Tadalafil">
                            <label for="8baa">Tadalafil</label><br>
                        </div>
                        <div class="form-group ques-textarea" id="div8baa">
                            <p>Taking medications or erectile dysfunction concurrently with treatments for premature
                                ejaculation can potentially lead to lower blood pressure. Possible side effects may
                                include headaches, dizziness, blurred vision, confusion, fainting, and feeling sick
                            </p>
                            <div class="form-group form-radio">
                                <input type="radio" id="8ba1" name="8ba1"
                                    value="I confirm that I will not combine these medications">
                                <label for="8ba1">I confirm that I will not combine these medications</label>
                            </div>
                            <div class="form-group form-radio">
                                <input type="radio" id="8ba2" name="8ba1" value="I cannot confirm">
                                <label for="8ba2">I cannot confirm</label>
                            </div>
                        </div>
                        <div class="form-group form-radio">
                            <input type="radio" id="8bab" name="8ba" value="Sildenafil">
                            <label for="8bab">Sildenafil</label>
                        </div>
                        <div class="form-group ques-textarea" id="div8bab">
                            <p>Taking medications or erectile dysfunction concurrently with treatments for premature
                                ejaculation can potentially lead to lower blood pressure. Possible side effects may
                                include headaches, dizziness, blurred vision, confusion, fainting, and feeling sick
                            </p>
                            <div class="form-group form-radio">
                                <input type="radio" id="8bab1" name="8ba2"
                                    value="I confirm that I will not combine these medications">
                                <label for="8bab1">I confirm that I will not combine these medications</label>
                            </div>
                            <div class="form-group form-radio">
                                <input type="radio" id="8bab2" name="8ba2" value="I cannot confirm">
                                <label for="8bab2">I cannot confirm</label>
                            </div>
                        </div>
                            <div class="form-group form-radio">
                                <input type="radio" id="8bac" name="8ba" value="Vardenafil">
                                <label for="8bac">Vardenafil</label>
                            </div>
                            <div class="form-group ques-textarea" id="div8bac">
                            <p>Taking medications or erectile dysfunction concurrently with treatments for premature
                                ejaculation can potentially lead to lower blood pressure. Possible side effects may
                                include headaches, dizziness, blurred vision, confusion, fainting, and feeling sick
                            </p>
                            <div class="form-group form-radio">
                                <input type="radio" id="8bac1" name="8ba3"
                                value="I confirm that I will not combine these medications">
                                <label for="8bac1">I confirm that I will not combine these medications</label>
                            </div>
                            <div class="form-group form-radio">
                                <input type="radio" id="8bac2" name="8ba3" value="I cannot confirm">
                                <label for="8bac2">I cannot confirm</label>
                            </div>
                        </div>
                        <div class="form-group form-radio">
                            <input type="radio" id="8bad" name="8ba" value="Avanafil">
                            <label for="8bad">Avanafil</label>
                        </div>
                        <div class="form-group ques-textarea" id="div8bad">
                            <p>Taking medications or erectile dysfunction concurrently with treatments for premature
                                ejaculation can potentially lead to lower blood pressure. Possible side effects may
                                include headaches, dizziness, blurred vision, confusion, fainting, and feeling sick
                            </p>
                            <div class="form-group form-radio">
                                <input type="radio" id="8bad1" name="8ba4"
                                value="I confirm that I will not combine these medications">
                                <label for="8bad1">I confirm that I will not combine these medications</label><br>
                            </div>
                            <div class="form-group form-radio">
                                <input type="radio" id="8bad2" name="8ba4" value="I cannot confirm">
                                <label for="8bad2">I cannot confirm</label>
                            </div>
                        </div>
                        <div class="form-group form-radio">
                            <input type="radio" id="8bae" name="8ba" value="Other">
                            <label for="8bae">Other</label>
                        </div>
                        <div class="form-group ques-textarea" id="div8bae">
                            <input class="form-control" type="text" id="8ba31" name="8ba1" placeholder="Tell us more !!">
                        </div>
                    </div>
                </form>
            </div>


            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)" style="display: none;">Back</a>
                <a class="quest-nextbtn nxt" href="javascript:void(0)" data-proress="1">Next</a>
            </div>
        </div>

         <!-- 9 step -->
        <div class="questinnaire-step9 qtnr-inner">
            <h2 class="questinnaire-heading">Do you regularly use any of the following recreational substances?</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="9a" name="radio-group" value="Ecstasy">
                        <label for="9a">Ecstasy</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="9b" name="radio-group" value="LSD">
                        <label for="9b">LSD</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="9c" name="radio-group" value="Cocaine">
                        <label for="9c">Cocaine</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="9d" name="radio-group" value="Methamphetamine">
                        <label for="9d">Methamphetamine</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="9e" name="radio-group" value="Poppers">
                        <label for="9e">Poppers</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="9f" name="radio-group" value="Other narcotic drugs">
                        <label for="9f">Other narcotic drugs</label>
                    </div>
                    <div class="form-group ques-textarea" id="div9f">
                        <input type="text" id="text9G" class="form-control" name="div10f" placeholder="Tell us more !!">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="9h" name="radio-group" value="no" checked>
                        <label for="9h">No</label>
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
            <h2 class="questinnaire-heading">Do any of the following health conditions pertain to you?</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="10a" name="radio-group"
                            value="Any heart-related problems, such as heart failure, heart valve issues, rhythm disturbances, ischemic heart disease, or peripheral vascular disease">
                        <label for="10a">Any heart-related problems, such as heart failure, heart valve issues, rhythm
                            disturbances, ischemic heart disease, or peripheral vascular disease</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10b" name="radio-group"
                            value="History of heart attack, stroke, transient ischemic attack (TIA), or mini-stroke">
                        <label for="10b">History of heart attack, stroke, transient ischemic attack (TIA), or
                            mini-stroke</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10c" name="radio-group"
                            value="Unexplained instances of feeling faint or dizzy">
                        <label for="10c">Unexplained instances of feeling faint or dizzy</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="10d" name="radio-group" value="Abnormalities in heart rate or rhythm">
                        <label for="10d">Abnormalities in heart rate or rhythm</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10e" name="radio-group"
                            value="Difficulty climbing a flight of stairs without experiencing chest pain">
                        <label for="10e">Difficulty climbing a flight of stairs without experiencing chest pain</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="10f" name="radio-group"
                            value="Presence of mental health conditions like bipolar disorder, mania, or schizophrenia">
                        <label for="10f">Presence of mental health conditions like bipolar disorder, mania, or
                            schizophrenia</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="10g" name="radio-group"
                            value="Blood pressure outside the normal range (below 90/50 mmHg or above 150/90 mmHg)">
                        <label for="10g">Blood pressure outside the normal range (below 90/50 mmHg or above 150/90
                            mmHg)</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="10h" name="radio-group"
                            value="Current or past mental health conditions like anxiety or depression, or the use of antidepressants">
                        <label for="10h">Current or past mental health conditions like anxiety or depression, or the use
                            of antidepressants</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10i" name="radio-group"
                            value="Neurological disorders such as epilepsy, or history of fainting due to low blood pressure">
                        <label for="10i">Neurological disorders such as epilepsy, or history of fainting due to low
                            blood pressure</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10j" name="radio-group"
                            value="Disorders affecting blood clotting or usage of blood thinning medications">
                        <label for="10j">Disorders affecting blood clotting or usage of blood thinning
                            medications</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10k" name="radio-group"
                            value="Blood-related conditions such as Non-Hodgkin lymphoma, sickle cell anemia, or haemophilia">
                        <label for="10k">Blood-related conditions such as Non-Hodgkin lymphoma, sickle cell anemia, or
                            haemophilia</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10l" name="radio-group" value="Liver or kidney disorders">
                        <label for="10l">Liver or kidney disorders</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10m" name="radio-group"
                            value="Eye conditions like glaucoma, or susceptibility to high intraocular pressure (angle-closure glaucoma)">
                        <label for="10m">Eye conditions like glaucoma, or susceptibility to high intraocular pressure
                            (angle-closure glaucoma)</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="10n" name="radio-group"
                            value="Rare inherited conditions like galactose intolerance, Lapp lactase deficiency, or glucose-galactose malabsorption">
                        <label for="10n">Rare inherited conditions like galactose intolerance, Lapp lactase deficiency,
                            or glucose-galactose malabsorption</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="10o" name="radio-group"
                            value="BHormonal disorders like thyroid issues or hypogonadism (low testosterone levels)">
                        <label for="10o">BHormonal disorders like thyroid issues or hypogonadism (low testosterone
                            levels)</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="10p" name="radio-group"
                            value="Vascular disorders affecting your arteries or veins">
                        <label for="10p">Vascular disorders affecting your arteries or veins</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10q" name="radio-group"
                            value="Specific conditions affecting the penis such as Peyronie's disease, injury, or inability to retract foreskin">
                        <label for="10q">Specific conditions affecting the penis such as Peyronie's disease, injury, or
                            inability to retract foreskin</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10r" name="radio-group"
                            value="Prostate conditions like prostatitis or benign prostatic hypertrophy">
                        <label for="10r">Prostate conditions like prostatitis or benign prostatic hypertrophy</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="10s" name="radio-group" value="Other medical conditions not mentioned here">
                        <label for="10s">Other medical conditions not mentioned here</label>
                    </div>
                    <div class="form-group ques-textarea" id="div10s">
                        <input type="text" class="form-control" id="text10s" name="text10s" placeholder="Tell us more !!">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="10t" name="radio-group" value="None of the above apply to me">
                        <label for="10t">None of the above apply to me</label>
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
            <h2 class="questinnaire-heading">Are you currently taking any of the following medications?</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="11a" name="radio-group" value="Monoamine oxidase inhibitors (MAOIs)">
                        <label for="11a">Monoamine oxidase inhibitors (MAOIs)</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11b" name="radio-group" value="Thioridazine">
                        <label for="11b">Thioridazine</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11c" name="radio-group" value="Other mood stabilizers or antidepressants">
                        <label for="11c">Other mood stabilizers or antidepressants</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="11d" name="radio-group" value="Lithium">
                        <label for="11d">Lithium</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11e" name="radio-group" value="Tryptophan">
                        <label for="11e">Tryptophan</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="11f" name="radio-group" value="St John's wort">
                        <label for="11f">St John's wort</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="11g" name="radio-group" value="Tramadol">
                        <label for="11g">Tramadol</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11h" name="radio-group"
                            value="Medications used for migraines, like sumatriptan, riaztriptan, and zolmitriptan">
                        <label for="11h">Medications used for migraines, like sumatriptan, riaztriptan, and
                            zolmitriptan</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11i" name="radio-group"
                            value="Antifungal medications, including ketoconazole, fluconazole, and itraconazole">
                        <label for="11i">Antifungal medications, including ketoconazole, fluconazole, and
                            itraconazole</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11j" name="radio-group"
                            value="HIV medications, including ritonavir, saquinavir, nelfinavir, fosamprenavir, and atazanavir">
                        <label for="11j">HIV medications, including ritonavir, saquinavir, nelfinavir, fosamprenavir,
                            and atazanavir</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11k" name="radio-group"
                            value="Antibiotics including telithromycin, linezolid, azithrmocyin, and clarithromycin">
                        <label for="11k">Antibiotics including telithromycin, linezolid, azithrmocyin, and
                            clarithromycin</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11l" name="radio-group" value="Nefazodone">
                        <label for="11l">Nefazodone</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11m" name="radio-group" value="EOther mental health medications">
                        <label for="11m">EOther mental health medications</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="11n" name="radio-group"
                            value="Non-steroidal anti-inflammatory drugs like ibuprofen or acetylsalicyclic acid">
                        <label for="11n">Non-steroidal anti-inflammatory drugs like ibuprofen or acetylsalicyclic
                            acid</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="11o" name="radio-group" value="Blood thinning medications like warfarin">
                        <label for="11o">Blood thinning medications like warfarin</label>
                    </div>


                    <div class="form-group form-radio">
                        <input type="radio" id="11p" name="radio-group"
                            value="Medications for erectile dysfunction, such as sildenafil, tadalafil, or vardenafil">
                        <label for="11p">Medications for erectile dysfunction, such as sildenafil, tadalafil, or
                            vardenafil</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11q" name="radio-group"
                            value="Medications for high blood pressure, chest pain (angina), or enlarged prostate, like verapamil and diltiazem">
                        <label for="11q">Medications for high blood pressure, chest pain (angina), or enlarged prostate,
                            like verapamil and diltiazem</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11r" name="radio-group" value="Aprepitant">
                        <label for="11r">Aprepitant</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11S" name="radio-group" value="Busprione">
                        <label for="11S">Busprione</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11T" name="radio-group" value="Bupropion">
                        <label for="11T">Bupropion</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11U" name="radio-group" value="Cimetidine">
                        <label for="11U">Cimetidine</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11v" name="radio-group" value="Rectogesic ointment">
                        <label for="11v">Rectogesic ointment</label>
                    </div>

                    <div class="form-group form-radio">
                        <input type="radio" id="11w" name="radio-group" value="Other medical conditions not mentioned here">
                        <label for="11w">Other medical conditions not mentioned here</label>
                    </div>
                    <div class="form-group ques-textarea" id="div11w">
                        <input class="form-control" type="text" id="text11w" name="text11w" placeholder="Tell us more !!">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="11x" name="radio-group" value="None of the above apply to me">
                        <label for="11x">None of the above apply to me</label>
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
            <h2 class="questinnaire-heading">Do you have any allergies to the following</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="12a" name="radio-group" value="Serotonin reuptake inhibitors i.e priligy">
                        <label for="12a">Serotonin reuptake inhibitors i.e priligy </label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="12b" name="radio-group" value="Lactose">
                        <label for="12b">Lactose </label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="12c" name="radio-group" value="Lidocaine or other local anesthetics"
                            checked>
                        <label for="12c">Lidocaine or other local anesthetics</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="12">Next</a>
            </div>
        </div>
        <!-- 13 step -->
        <div class="questinnaire-step13 qtnr-inner">
            <h2 class="questinnaire-heading">Please inform us about any major illnesses, ongoing medical
                conditions,medications (prescribed or over-the-counter) you take, allergies to medication, or surgeries.
                This information is necessary for our clinicians to ensure the prescribed treatment is safe for you</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="13a" name="radio-group"
                            value="I have a major illness, ongoing medical condition, allergy to medication, or take prescribed or over-the-counter medication to inform you about">
                        <label for="13a">I have a major illness, ongoing medical condition, allergy to medication, or take
                            prescribed or over-the-counter medication to inform you about </label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox13a"
                            placeholder="Please provide more information about your condition or medication.">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="13b" name="radio-group"
                            value="I do not have a major illness, ongoing medical condition, operation, allergy to medication, or take prescribed or over-the-counter medication to inform you about"
                            checked>
                        <label for="13b">I do not have a major illness, ongoing medical condition, operation, allergy to
                            medication, or take prescribed or over-the-counter medication to inform you about </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="13">Next</a>
            </div>
        </div>
        <!-- 14 step -->
        <div class="questinnaire-step14 qtnr-inner">
            <h2 class="questinnaire-heading">Would you like us to inform your GP about your treatment?</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="14a" name="radio-group" value="Yes">
                        <label for="14a">Yes </label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox14a"
                            placeholder="Please provide your GP's name and address">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="14b" name="radio-group" value="Yes" checked>
                        <label for="14b">Yes </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="14">Next</a>
            </div>
        </div>
        <!-- questiore details -->

        <div class="questinnaire-laststep qtnr-inner">
            <div class="questinnaire-thankyou">
                <div class="success">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h2 class="questinnaire-heading">You Have Successfully Completed Questionnaire</h2>
            </div>
            <!-- TREATMENT-OPTION-SEC START  -->
            <div class="treatment-option-sec">
                <div class="main-heading text-center treatment-head">
                    <h2>Recommended Treatment options</h2>
                </div>
                <div class="row treatment-row">
                    <h3>Stud 100 Desensitization Spray</h3>
                    <h4>topical medication that can help delay ejaculation by reducing sensitivity. This is suggested if you
                        have an allergy to Dapoxetine.</h4>
                    <h5>Please select the treatment you would prefer:</h5>
                    @php
                    foreach($products as $pro)
                    {
                    $pro_img = Media::select('file_name')->where('mediable_id','=',$pro->id)->get()->toArray();
                    if (strpos($pro->slug, 'free-behavioural-techniques') === false) {
                    @endphp
                    <div class="col-md-6 col-sm-12">
                        <div class="treatment-option-div">
                            <h4>{{ $pro->name }}</h4>
                            <p>It contains the same active ingredient as viagra but comes at <br>a lower price because
                                you
                                aren’t paying for the brand name. </p>
                            <div class="star-reviews d-flex align-items-center">
                                <div class="stars treatment-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <span>261 Reviews</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-12 treatment-btns">
                                    <a href="javascript:void(0);" class="trans-btn">Improve blood Flow</a>
                                    <a href="javascript:void(0);" class="trans-btn">Smooth muscles</a>
                                    <a href="javascript:void(0);" class="trans-btn">relaxing blood vessels</a>
                                    <ul>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>effective
                                                    For</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Work
                                                    within</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Support
                                                    Erection</span> 4 hours</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <figure class="agent-card-pic">
                                        <img src="{{ asset('storage/images/products') }}{{ '/'.$pro_img[0]['file_name'] }}"
                                            class="img-fluid" alt="Sildenafil" />
                                    </figure>
                                </div>
                            </div>
                            <livewire:frontend.product.single-product-cart-component :product="$pro" />
                        </div>
                    </div>

                    @php
                    }
                    } @endphp
                </div>

                <div class="row treatment-row">
                    <h3>Priligy (Dapoxetine) 30mg</h3>
                    <h4>This is the initial recommended treatment if you've never had Dapoxetine before. Dapoxetine is a
                        selective serotonin reuptake inhibitor specifically designed to treat premature ejaculation</h4>
                    @php
                    foreach($products as $pro)
                    {
                    $pro_img = Media::select('file_name')->where('mediable_id','=',$pro->id)->get()->toArray();

                    if (strpos($pro->slug, 'free-behavioural-techniques') !== false) {
                    @endphp
                    <div class="col-md-6 col-sm-12">
                        <div class="treatment-option-div">
                            <h4>{{ $pro->name }}</h4>
                            <p>It contains the same active ingredient as viagra but comes at <br>a lower price because
                                you
                                aren’t paying for the brand name. </p>
                            <div class="star-reviews d-flex align-items-center">
                                <div class="stars treatment-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <span>261 Reviews</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-12 treatment-btns">
                                    <a href="javascript:void(0);" class="trans-btn">Improve blood Flow</a>
                                    <a href="javascript:void(0);" class="trans-btn">Smooth muscles</a>
                                    <a href="javascript:void(0);" class="trans-btn">relaxing blood vessels</a>
                                    <ul>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>effective
                                                    For</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Work
                                                    within</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Support
                                                    Erection</span> 4 hours</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <figure class="agent-card-pic">
                                        <img src="{{ asset('storage/images/products') }}{{ '/'.$pro_img[0]['file_name'] }}"
                                            class="img-fluid" alt="Sildenafil" />
                                    </figure>
                                </div>
                            </div>
                            <livewire:frontend.product.single-product-cart-component :product="$pro" />
                        </div>
                    </div>

                    @php
                    }

                    } @endphp
                </div>
            </div>
            <!-- TREATMENT-OPTION-SEC END  -->
        </div>
    </div>
</section>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function() {
    //click 
    $('#UnsutableBtn').on('click', function() {

    })

    $('#textbox5').hide();
    $('#textbox6').hide();
    $('#textbox8').hide();
    $('#textbox11').hide();
    $('#textbox12').hide();
    $('#div7b').hide();
    $('#div7ba').hide();
    $('#div7bb').hide();
    $('#div8b').hide();
    $('#div8ba').hide();
    $('#div8baa').hide();
    $('#div8bab').hide();
    $('#div8bac').hide();
    $('#div8bad').hide();
    $('#div8bae').hide();
    
    $('#div9f').hide();

    
    $('#div10f').hide();
    $('#div10s').hide();
    $('#div11w').hide();
    $('#textbox13a').hide();
    $('#textbox14a').hide();



    $('#14a').click(function() {
        if ($('#14a').is(':checked')) {
            $('#textbox14a').show();
        }else{
            $('#textbox14a').hide();
        }
    });
    $('#13a').click(function() {
        if ($('#13a').is(':checked')) {
            $('#textbox13a').show();
        }else{
            $('#textbox13a').hide();
        }
    });


    $('#11w').click(function() {

        if ($('#11w').is(':checked')) {
            $('#div11w').show();
        }else{
            $('#div11w').hide();
        }
    });


    $('#10s').click(function() {
        
        if ($('#10s').is(':checked')) {
            $('#div10s').show();
        }else{
            $('#div10s').hide();
        }
    });

    $('#9f').click(function() {
        if ($('#9f').is(':checked')) {
            
            $('#div9f').show();
        }else{
            $('#div9f').hide();
        }

    });

    $('#8bab').click(function() {
        if ($('#8bab').is(':checked')) {
            
            $('#div8bab').show();
        }else{
            $('#div8bab').hide();
        }
    });

    $('#8bac').click(function() {
        if ($('#8bac').is(':checked')) {
            $('#div8bac').show();
        }else{
            $('#div8bac').hide();
        }
    });
    $('#ques8a').click(function() {
        if($('#ques8a').is(':checked')){
                $('#div8b').hide();
            }
    })
    $('#8bad').click(function() {
        if ($('#8bad').is(':checked')) {
            $('#div8bad').show();
        }else{
            $('#div8bad').hide();
        }
        
    });
    $('#8bae').click(function() {
        if ($('#8bae').is(':checked')) {
            $('#div8bae').show();
        }else{
            $('#div8bae').hide();
        }
    });


    $('#8baa').click(function() {
        if ($('#8baa').is(':checked')) {
            $('#div8baa').show();
        }else{
            $('#div11w').hide();
        }
    });

    $('#8ba').click(function() {
        if ($('#8ba').is(':checked')) {
            $('#div8ba').show();
        }else{
            $('#div8ba').hide();
        }
    });

    $('#ques8b').click(function() {
        if ($('#ques8b').is(':checked')) {
            $('#div8b').show();
        }else{
            $('#div8b').hide();
        }
    });

    $('#7ba').click(function() {
        if ($('#7ba').is(':checked')) {
            $('#div7ba').show();
        }else{
            $('#div7ba').hide();
        }
        
    });
    $('#7bb').click(function() {
        if ($('#v').is(':checked')) {
            $('#div7bb').show();
        }else{
            $('#div7bb').hide();
        }
    });


    $('#7b').click(function() {
        console.log("#7b is checked");
        $('#div7b').show();
        if ($('#7bb').is(':checked')) {
            console.log("#7bb is checked");
            $('#div7bb').show();
        }else{
            $('#div7bb').hide();
        }
    });


    $detail = '';
    $('.quest-nextbtn').on('click', function() {
        $catId = $('#catId').val();
        var step = $(this).data("proress");

       
        if (step == 7) {
            console.log("this is 7 step");

            if ($('#7ba').is(':checked')) {
                // $detail = $('#textboxOther').find('input[type="text"]').val();
                $detail = $('#textbox7ba').val();
            }

            if ($('#7bb').is(':checked')) {
                // $detail = $('#textboxOther').find('input[type="text"]').val();
                $detail = $('input[name="radio-group21"]:checked').val();
                console.log("this is 7bb clicked=>",$detail);
            }

            // $('#7bb').click(function() {                
            //      $detail = $('input[name="radio-group21"]:checked').val();
            // });
        }
        if (step == 9) {
            $('#9f').click(function() {
                $detail = $('#text9f').val();
            });
        }
        if (step == 10) {
            $('#10s').click(function() {
                $detail = $('#text10s').val();
            });
        }
        if (step == 11) {
            $('#11w').click(function() {
                $detail = $('#text11w').val();
            });
        }
        if (step == 13) {
            $('#13a').click(function() {
                $detail = $('#textbox13a').val();
            });
        }


        if (step == 14) {
            $('#14a').click(function() {
                $detail = $('#textbox14a').val();
            });
        }
        $ques = $('.questinnaire-step' + step + ' .questinnaire-heading').text();
        $ans = $('.questinnaire-step' + step + ' input[name="radio-group"]:checked').val();


        $.ajax({
            type: "get",
            url: "{{route('questionnaire.storeApremature') }}",
            data: {
                'question': $ques,
                'answer': $ans,
                'detail': $detail,
                'catId': $catId,
            },

            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(result) {

                if (result.status == 404) {
                    $('#abortModal').modal('show');
                    // $('#abortModalBody').html(result.message);
                    $("#abortModalBody").html('No recommended treatment. Based on your answers, there is no treatment suitable for you. If you think you have made an error in your responses, please click below to review your answers')
                    // alert(result.message)
                }
                console.log(result.status);
            }
        });
        // }
    })

});
</script>