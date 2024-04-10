<style>

.cont{
    font-family: sans-serif;
}

</style>

<div class="cont">

    <h1>Welcome to our site!</h1>
    <h3>Enjoy Your Stay!</h3>

    <hr>

    <div>Here's The Details:</div>

    <ul>
        <li><b>Your Name:</b> {{$lead->name}}</li>
        <li><b>Your Email:</b> {{$lead->email}}</li>
        <li><b>Your Message:</b> {{$lead->message}}</li>
    </ul>

</div>
