
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/stylee.css">
    <style>

header {
    background: #1f2937; /* Darker gray for sophistication */
    color: #f9fafb;
    text-align: center;
    padding: 20px 0;
}

header nav a {
    color: #f9fafb;
    margin: 0 15px;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
}

header nav a:hover {
    color: #fbbf24; /* Gold accent on hover */
}

.container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
}

.contact-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}

.contact-box {
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
}

.contact-form, .contact-info {
    flex: 1;
    min-width: 300px;
    background: #f1e6e6;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.contact-form h2, .contact-info h2 {
    color: #1d3f33; /* Rich green accent */
    margin-bottom: 20px;
    border-bottom: 2px solid #1f7a5a;
    padding-bottom: 5px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    transition: border-color 0.3s;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #1f7a5a;
    outline: none;
}

.contact-form button {
    width: 100%;
    padding: 12px;
    background: #09251c;
    color: #fff;
    font-weight: bold;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s;
}

.contact-form button:hover {
    background: #091f17; /* Darker green on hover */
}

.contact-info p {
    margin-bottom: 12px;
}

.contact-info a {
    color: #0c2e22;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

.social-links a {
    display: inline-block;
    padding: 10px 15px;
    margin: 5px 0;
    background: #11221c;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    transition: background 0.3s;
}

.social-links a:hover {
    background: #15543d;
}

.map iframe {
    border-radius: 8px;
    border: 0;
    width: 100%;
    height: 250px;
}
</style>

</style> 
</head>

<body class="contact-page">

@include('home.header')

<div class="contact-wrapper">

    <div class="contact-box">

        <div class="contact-form">
            <h2>Send Us a Message</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="phone" placeholder="Phone Number">

                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Contact Information</h2>

            <p><strong>Phone:</strong> <a href="tel:+251911234567">+251 911 234 567</a></p>
            <p><strong>Email:</strong> <a href="mailto:info@smarthotel.com">info@smarthotel.com</a></p>
            <p><strong>Address:</strong> Addis Ababa, Ethiopia</p>

            <h2>Follow Us</h2>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Telegram</a>
            </div>

            <h2>Location Map</h2>
            <div class="map">
                <iframe 
                    src="https://www.google.com/maps?q=Addis%20Ababa&output=embed" 
                    width="100%" height="250" style="border:0;" allowfullscreen loading="lazy">
                </iframe>
            </div>
        </div>

    </div>
</div>

@include('home.footer')
</body>

</html>