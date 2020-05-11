@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

  <div class="container">

      <div class="showcase-content">
          <div class="p-1">
          <div class="center-items home-log">
            <img src="{{ asset('img/logo.jpg') }}" alt="">
          </div>
          <div class="py-2 center-items">
              <a href="/contact" class="btn-primary">Contact Us</a>
              <a href="/about" class="btn-secondary">Learn More</a>
          </div>
          </div>

      </div>

    <div class="home-wrapper">
      <div class="box a">
        <h1>WHAT WE DO</h1>
        <p><strong>FreshStart Psychotherapy</strong> provides a unique service to clients and psychotherapists. For clients we ensure that <strong>low cost</strong> psychotherapy or counselling is provided for the time period <strong>required by the client</strong> and not the therapist. The therapist has an opportunity to gain valuable experience of working with clients who require long term or open ended psychotherapy but cannot access it because it is either not available from the NHS or other bodies or the client cannot afford it.</p>
        <p>Issues that can be addressed in therapy include <strong>depression, anxiety, anger and anger management, addictions, alcohol issues, sexual or sexual orientation issues, bereavement and low self-esteem.</strong></p>
      </div>
      <div class="box b">
        <img class="homepage-tree" src="{{ asset('img/treeoflife.jpg') }}" alt="">
      </div>
      <div class="box c">
        <h1>GET IN TOUCH</h1>
        <p>If you feel that you need access to counselling or psychotherapy for any of the above issues or for any other reason please complete the contact form at the link below: </p>
        <div class="btn-padding">
          <a href="/contact" class="btn-primary">Contact Us</a>
        </div>
        <p>Alternatively you email us at <a href="mailto:enquiries@freshstartpsychotherapy.co.uk">enquiries@freshstartpsychotherapy.co.uk</a> or call us on <strong>020 7691 7638</strong>. Please note this will direct you to an answerphone where you can leave a message with your contact telephone number and we will call back as soon as we possibly can. Please bear in mind that FreshStart is run by Volunteers and you may not receive an immediate response.</p>  
      </div>

      </div>
    </div>
    

@endsection

@section('footer')
    @parent
@endsection