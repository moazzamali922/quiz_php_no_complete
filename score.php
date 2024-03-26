<?php


$answer1=null;
$answer2=null;
$answer3=null;
$answer4=null;
$answer6=null;


if(isset($_POST['medical_condition1'])){
	$answer1=$_POST['medical_condition1'];
}

if(isset($_POST['medical_condition2'])){
	$answer2=$_POST['medical_condition2'];
}
if(isset($_POST['medical_condition3'])){
	$answer3=$_POST['medical_condition3'];
}
if(isset($_POST['medical_condition4'])){
	$answer4=$_POST['medical_condition4'];
}
if(isset($_POST['medical_condition6'])){
	$answer6=$_POST['medical_condition6'];
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<style>
    .greenColor {
        color: green;
        font-weight: bold;
    }

    .redColor {
        color: red;
    }
</style>

<body>


    <!-- Displaying results -->
    <div class="text-center">
        <h1 style="display: inline-block; border-bottom: 3px solid #d99518; padding-bottom: 0.25rem;">Test Result</h1>
    </div>
    <div class="container py-5">
        <div class="d-flex justify-content-between mt-4 align-items-end mb-3 flex-wrap">
            <h3 style="display: inline-block; border-bottom: 3px solid #d99518; padding-bottom: 0.25rem;">Test Breakdown
            </h3>
            <h3 class="text-primary">Score: 100%</h3>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-info question-box">

            <h5>Understanding your results</h5>

            <p>Correct answers are marked with <i class="fas fa-check-circle" style="color: green;"></i></p>
            <p>Incorrect answers are marked with <i class="fas fa-times-circle" style="color: red;"></i></p>

            <p>Answers you selected are marked with <i class="fas fa-arrow-right"></i></p>

        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>If you develop a new medical condition that affects your ability to drive, what should you do?
            </h4>
            <ul style="padding-left: 0px;">
			
				<?php if($answer1=="Inform the DVLA only"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
				
                <i class="fas fa-times-circle" style="color: red;"></i>
                Inform the DVLA only
            </ul>
            <ul style="padding-left: 0px;">
				<?php if($answer1=="Tell TfL immediately"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                
                Tell TfL immediately
            </ul>
			
			<ul style="padding-left: 0px;">
				<?php if($answer1=="Wait for a week to see if things improve"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                
                Wait for a week to see if things improve
            </ul>
            
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>What part of the vehicle are PHV licence discs attached?</h4>
            <ul style="padding-left: 0px;">
				<?php if($answer2=="front and rear windscreens"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                
                <i class="fas fa-check-circle" style="color: green;"></i>
                front and rear windscreens
            </ul>
            <ul style="padding-left: 0px;">
				<?php if($answer2=="rear windscreen only"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                rear windscreen only
            </ul>
            <ul style="padding-left: 0px;">
			
				<?php if($answer2=="front windscreen only"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                front windscreen only
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Who is in charge of setting a fare or giving an accurate estimate to a member of the public?</h4>
            <ul style="padding-left: 0px;">
            <?php if($answer3=="The private hire vehicle operator"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                The private hire vehicle operator
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer3=="The driver of the private hire vehicle"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                The driver of the private hire vehicle
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer3=="DVLA"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                DVLA
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>What measures could you take to lower the chances of a passenger becoming aggressive towards you?</h4>
            <ul style="padding-left: 0px;">
            <?php if($answer4=="Speak calmly and ask them questions."){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                Speak calmly and ask them questions.
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer4=="Speak louder to make sure they know what you are trying to say."){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                Speak louder to make sure they know what you are trying to say.
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer4=="Try to pay no attention to them and hope they calm down"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                Try to pay no attention to them and hope they calm down
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>READ THE TPH NOTICE CAREFULLY AND ANSWER THE QUESTION BELOW:</h4>
            <h5>TPH Notice 11/20 Carriage of e-scooters and e-unicycles
            </h5>
            <h5>
                Ban on e-scooters and e-unicycles on TfL services <br>
                Transport for London (TfL) has announced that all privately-owned e-scooters and e-unicycles, including
                those that can be folded or carried, will not be permitted on its
                <br>
                services from Monday 13 December 2021.
            </h5>
            <h5>
                This is the result of safety concerns about these items following recent fires on transport premises and
                services. Customers in possession of such devices will not be permitted to enter any premises on TfL’s
                network or travel on any of its services, including on the Tube, buses, Overground, TfL Rail, Trams and
                DLR.

            </h5>
            <h5>
                This guidance does not include foldable e-bikes, that are generally subject to better manufacturing
                standards and the batteries are usually positioned in a place where <br>
                they are less likely to be damaged, and so are less of a fire risk.
            </h5>

            <h4 class="mt-5">Which two statements are correct:</h4>
            <ul style="padding-left: 0px;">
                <i class="fas fa-arrow-right"></i>
                <i class="fas fa-check-circle" style="color: green;"></i>
                privately-owned e-scooters and e-unicycles are allowed on TfL services as long as they are folded safely
                and securely
            </ul>
            <ul style="padding-left: 0px;">
                <i class="fas fa-times-circle" style="color: red;"></i>
                privately-owned e-scooters and e-unicycles are NOT allowed on any TfL services
            </ul>
            <ul style="padding-left: 0px;">
                <i class="fas fa-times-circle" style="color: red;"></i>
                According to Section 165 of the Equality Act 2010 PHV drivers wheelchair accessible taxis can charge
                reasonable extra amount of wheelchair users
            </ul>
            <ul style="padding-left: 0px;">
                <i class="fas fa-times-circle" style="color: red;"></i>
                foldable e-bikes are NOT covered by this notice
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>READ THE TPH NOTICE CAREFULLY AND ANSWER THE QUESTION BELOW:</h4>
            <h5>Taxi private hire notice 19/21</h5>
            <h5>
                The Divisional Court has today (Monday 6 December) given judgment in a case about the role of London
                private hire vehicle (PHV) operators and the contracts that they enter into with passengers. <br>
                The case concerned the Supreme Court’s judgment of 19 February 2021 in Uber BV v. Aslam and the
                Divisional Court has now confirmed that:
            </h5>
            <h5>
                “…..in order to operate lawfully under the Private Hire Vehicles (London) Act 1998 a licensed operator
                who accepts a booking from a passenger is required to enter as principal into a contractual obligation
                with the passenger to provide the journey which is the subject of the booking.”

            </h5>
            <h5>
                All London PHV operators will need to carefully consider the Divisional Court’s judgment and take steps
                to ensure that they comply with it, including considering whether any changes to their way of working
                are required.
            </h5>

            <h4 class="mt-5">QUESTION: Who gave the judgement regarding Private hire operators’ contracts with
                passengers?</h4>
            <ul style="padding-left: 0px;">
            <?php if($answer6=="The Supreme Court"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                The Supreme Court
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer6=="The Divisional Court"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-check-circle" style="color: green;"></i>
                The Divisional Court
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer6=="TfL"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                TfL
            </ul>
            <ul style="padding-left: 0px;">
            <?php if($answer6=="DVLA"){ ?>				
                <i class="fas fa-arrow-right"></i>			
				<?php } ?>
                <i class="fas fa-times-circle" style="color: red;"></i>
                DVLA
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-info question-box">
            <h5>Understanding your results</h5>
            <p>Correct answers are marked with <i class="fas fa-check-circle" style="color: green;"></i></p>
            <p>Incorrect answers are marked with <i class="fas fa-times-circle" style="color: red;"></i></p>
            <p>Answers you selected are marked with <i class="fas fa-arrow-right"></i></p>
            <p>Correct answers are shown next to incorrect answers in [brackets]</p>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>
            <ul style="padding-left: 0px;">
                Ridesharing is _ <span class="greenColor">[when]</span> people who do not _ <span
                    class="greenColor">[know]</span> each other pay separate fares and travel together in
                the same _ <span class="greenColor">[vehicle]</span> .
            </ul>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>
            <ul style="padding-left: 0px;">
                If your passenger is an unaccompanied _ <span class="greenColor"> [child]</span> , make sure your
                operator knows, and that you know the
                name of the adult _ <span class="greenColor"> [who will be] </span>meeting the child at the end of the
                journey. Your _ <span class="greenColor"> [operator] </span>should
                give you that information.
            </ul>
            <h5 class="redColor">You left some words unused or did not drag all the words into the incorrect words box.
            </h5>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>
            <ul style="padding-left: 0px;">
                As a driver, you may have to _ <span class="greenColor">[transport children]</span> or adults who are at
                risk. You may come into _
                <span class="greenColor"> [contact]</span> with passengers that are being trafficked, exploited, abused
                or who are in need of help in
                some other way. You can help with this and you should know what to do if you have concerns that a person
                is at risk. You might notice things which do not seem quite right and you could be in a position to _
                <span class="greenColor">[report something] </span> to the police that may help protect someone at risk.
            </ul>
            <h5 class="redColor">You left some words unused or did not drag all the words into the incorrect words box.
            </h5>
        </div>
        <div class="shadow p-3 rounded-3 mb-3 bg-white border border-2 border-danger question-box">
            <h4>Sentence Completion Question</h4>
            <ul style="padding-left: 0px;">
                The <span class="greenColor"> _ [handbook]</span>  provides you with essential information to help you give your <span class="greenColor">_ [passengers]</span>  the safe
                and professional service they expect. It also includes information on your <span class="greenColor"> _ [responsibilities]</span> as a PHV
                driver.
            </ul>
            <h5 class="redColor">You left some words unused or did not drag all the words into the incorrect words box.
            </h5>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/js/bootstrap.min.js">
</body>

</html>