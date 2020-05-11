@extends('layouts.app')

@section('title', 'Fees')

@section('content')
<div class="container">
    <h1 class="fees-header">Fees</h1>

    <div class="fees-page">
    <div class="fees-text">
        <p>When a client makes contact with the service they are invited to come for an assessment session with a UKCP registered psychotherapist.  Based on an individual's needs and availability, they will then be carefully matched and referred to a therapist who seems the most suitable for working with that particular client.</p>
        <p><strong>Unwaged clients and students pay £12.00 per session</strong> and <strong>earning clients pay £12.00-£25.00 per session</strong> depending on what they can afford.</p>
        <p><strong>For a limited number of clients in exceptional need we may be able to offer fees of £5 per session</strong>. We may have a waiting list for low fee paying clients. <strong>When clients are earning incomes above £25,000, we refer them on to ex-FreshStart volunteers who have completed their training and who are willing/able to take comparatively low-cost private referrals.  In such cases, clients generally pay fees of between £30-£60</strong>.</p>
    </div>
    <div class="fees-image">
        <img class="img-itself" src="{{ asset('img/field2.jpg') }}" alt="">
    </div>
</div>
</div>


@endsection