@extends('clients.nabav.layout')
@section('content')

<div class="container">
    <form method="post" action="contact-process.php" id="contact-form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name"  class="form-control" placeholder="Enter name" />
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Phone</label>
            <input type="text" id="Phone" name="phone" class="form-control" placeholder="Enter phone">
          </div>
        <div class="form-group">
            <label for="email">Email</label>                            
            <input type="email" name="email" id="email" class="form-control"  placeholder="Enter email"/>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" rows="7"  placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
    <div class=" map form-group">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1104689012714!2d108.23586978132357!3d16.059756300051234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f00c05eed%3A0xb72c8e84c343e282!2zMzY1UitWOUcsIDEwMUIgTMOqIEjhu691IFRyw6FjLCBQaMaw4bubYyBN4bu5LCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1712933897004!5m2!1sen!2s"
            width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

@endsection
