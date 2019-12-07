@extends('user.layouts.master')

@section('page_title','FALCON | Contact Us')

@section('content')

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5375.130116757248!2d96.11702895558342!3d16.86811090187202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19457e441bf3d%3A0x342914d27695fc6b!2sFalcon%20Engineering%20Co.%2C%20Ltd!5e0!3m2!1sen!2smm!4v1568185358671!5m2!1sen!2smm" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">phone</a>
                            <a href="#">fax</a>
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">NO.95, Insein Road, (Near Khawel Chan Bus Stop), <br>Yangon, Myanmar. </a>
                            <a href="#">09-964911300</a>
                            <a href="#">09-777717161</a>
                            <a href="#">ppa@falconmyanmar.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Send Us a Message</h2>

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ url('sendemail/send') }}" class="form-inline contact_box">
                        {{ csrf_field() }}
                        <input type="text" name="first_name" class="form-control input_box" placeholder="First Name *">
                        <input type="text" name="last_name" class="form-control input_box" placeholder="Last Name *">
                        <input type="text" name="email" class="form-control input_box" placeholder="Your Email *">
                        <input type="text" name="subject" class="form-control input_box" placeholder="Subject">
                        <input type="text" name="website" class="form-control input_box" placeholder="Your Website">
                        <textarea class="form-control input_box" name="message" placeholder="Message"></textarea>
                        <button type="submit" name="send" class="btn btn-default" >Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

    @endsection