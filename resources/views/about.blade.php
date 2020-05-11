@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container">
    <h1 class="page-header">About FreshStart Psychotherapy</h1>

    <div class="about-page">
        <div class="about-banner">
            <img class="img-itself" src="{{ asset('img/sunrise-cut2.jpg') }}" alt="">
        </div>
    
    <div class="about-text-1">
        <p><strong>FreshStart Psychotherapy</strong> is a <strong>Community Interest Company (C.I.C.)</strong> and our purpose is two-fold:</p>
            
        <ul> 
            <li><strong>For clients</strong> we provide <strong>psychotherapy and counselling services</strong> on an <strong>open ended</strong> basis. This means that therapy is not time limited and can continue for as long as you, the client, want.  It ensures that <strong>issues can be addressed in your own time and not within a set formula</strong>.
            For example it may be that you simply feel you need the emotional support of a therapist to help you over a difficult period in your life but do not know how long you will need that emotional support. Alternatively, you may have a specific issue that you want to address such as <strong>panic attacks, depression, addiction issues, etc</strong>.  
            FS meets all those needs by matching you with one of our volunteer therapists.</li>
            <li>
                <strong>For therapists</strong> it is a requirement of the various professional bodies  (e.g BACP and UKCP)  that every therapist undertakes a minimum number of client contact hours prior to registration or accreditation. 
By working with clients through FreshStart, <strong>therapists are able to work towards registration and accreditation</strong>. All our volunteer therapists have either completed or are in the final stages of their academic training and need to complete their “client hours”. 
The FreshStart structure ensures that <strong>the therapist receives expert supervision so that their work with each client is in the very best interests of the client</strong>.
            </li>
        <ul>
    </div>
    <div class="about-image-1">
        <img class="img-itself" src="{{ asset('img/field2.jpg') }}" alt="">
    </div>
    <div class="quote-text">
        <h2 class=""><i>"Our wounds are often the openings to the best and most beautiful part of us" - David Richo</i></h2>
    </div>
    <div class="about-text-2">
        <h3>Our History</h3>
        <p>FreshStart, in its original incarnation, started off as a very small set-up in 1999, when three psychotherapist at CCPE (Centre for Counselling and Psychotherapy Education), recognised that there was a need for affordable short and long term counselling and psychotherapy and for trainees to have a well run placement that would prepare them to set up their own practices once they were qualified. For some years it operated under the umbrella of the CCPE, but in January 2009, having grown considerably and established itself as a service within the community, FreshStart Psychotherapy formed a limited company, and in September 2009 it was awarded charitable status. In 2016 the company changed it's status to form a Community Interest Company (C.I.C.) and future plans include expansion to other areas of London.</p>
        </div>
    
    <div class="quote-text">

        <h2 class=""><i>"Think of your head as an unsafe neighbourhood, don't go there alone." - David Richo</i></h2>
    </div>

    <div class="about-image-2">
        <img class="img-itself" src="{{ asset('img/people.jpg') }}" alt="">
    </div>

</div>
</div>


@endsection