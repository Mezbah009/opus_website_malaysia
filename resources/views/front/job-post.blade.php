@extends('front.layouts.app')

@php
    $title = "Opus Technology Limited - Software & IT Solutions in Bangladesh";
    $description = "Opus Technology Limited is a leading software company in Bangladesh providing enterprise solutions, fintech, AI, cybersecurity, and IT consultancy.";
    $keywords = "Software Company in Bangladesh, IT Solutions, Enterprise Software, Fintech, AI, Cybersecurity, Mobile Apps, Web Development";
@endphp


@section('content')

<style>
    .designation {
        display: grid;
        grid-template-columns: auto 1fr;
        /* Auto for h2 width, 1fr for button width */
        align-items: center;
        /* Align items vertically */
        gap: 10px;
        /* Adjust as needed */
    }

    button {
        justify-self: end;
        /* Align button to the end (right side) of its grid cell */
    }

    .bi.bi-phone {
        /* Add any specific styling for the phone icon */
        /* For example, you can change the color, size, or add margins */
        color: #000;
        /* Example color */
        font-size: 24px;
        /* Example font size */
        /* Add more styles as needed */
    }
</style>
<br>
<br>
<section>
    <div class="container">
        <div class="designation">
        <h2>{{$job->designation}}</h2>
        <button id="jobButton" onclick="window.location.href= '' "
            style="background-color: #0d6efd; color: #FFFFFF; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Apply
            Now</button>
    </div>

    <p>{!! $job->description !!}</p>

</div>


</section>

<br>

<div class="col-lg col-md icon-box"
    style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
    <div class="icon" style="margin-bottom: 10px;"><i class="bi bi-phone"></i></div>
    <div>
        <h4>Contact</h4>
        <h6>+8801715437373 (HR Department)</h6>
        <h6>hr@opus-bd.com</h6>
        <button id="jobButton1" onclick="window.location.href='' "
            style="background-color: #0d6efd; color: #FFFFFF; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Apply
            Now</button>
    </div>

</div>

<br><br>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        hideDivIfDateExceeded('{{ $job->end_date }}', 'jobButton');
    });
    document.addEventListener('DOMContentLoaded', function() {
        hideDivIfDateExceeded('{{ $job->end_date }}', 'jobButton1');
    });

    function hideDivIfDateExceeded(targetDate, elementId) {
        console.log("Target date:", targetDate);
        const targetDateTime = new Date(targetDate).getTime();
        const currentDateTime = new Date().getTime();

        console.log("Target timestamp:", targetDateTime);
        console.log("Current timestamp:", currentDateTime);

        if (currentDateTime > targetDateTime) {
            const element = document.getElementById(elementId);
            console.log("Element found:", element);
            if (element) {
                element.style.display = 'none';
                console.log("Element hidden");
            } else {
                console.log("Element not found");
            }
        } else {
            console.log("Current date has not exceeded target date");
        }
    }
</script>




@endsection
