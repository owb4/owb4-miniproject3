@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Us</div>
                <div class="card-body">
                    <form method="get" action="/contact" class="needs-validation">
                        {{ csrf_field() }}
                        <div class="col-sm-6">
                            <label for="email">Name</label>
                            <input name="name" type="name" class="form-control" id="name" placeholder="John Doe" required>
                            <div class="invalid-feedback">
                                Please enter a valid name.
                            </div>
                        </div>
                        <br/>
                        <div class="col-sm-6">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                        <br/>
                        <div class="col-sm-6">
                            <label for="subject">Subject</label>
                            <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter subject" required>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>
                        <br/>
                        <div class="col-sm-12">
                            <label for="message">Message</label>
                            <textarea name="message" type="text" class="form-control" id="message" placeholder="Enter details" required></textarea>
                        </div>
                        <br/>
                        <div class="col-sm-5">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
