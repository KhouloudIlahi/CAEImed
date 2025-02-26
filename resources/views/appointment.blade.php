@extends('layouts.app')

@section('title', 'Make an Appointment')

@section('content')
    <section id="appointment" class="appointment section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Appointment</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <form action="{{ url('/appointment') }}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group mt-3">
                        <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="department" id="department" class="form-select" required>
                            <option value="">Select Department</option>
                            <option value="Department 1">Department 1</option>
                            <!-- Ajoutez les autres options -->
                        </select>
                    </div>
                    <div class="col-md-4 form-group mt-3">
                        <select name="doctor" id="doctor" class="form-select" required>
                            <option value="">Select Doctor</option>
                            <option value="Doctor 1">Doctor 1</option>
                            <!-- Ajoutez les autres options -->
                        </select>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                </div>
                <div class="text-center mt-3">
                    <button type="submit">Make an Appointment</button>
                </div>
            </form>
        </div>
    </section>
@endsection
