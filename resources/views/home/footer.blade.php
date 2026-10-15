<footer class="footer">
    <div class="footer-container">

        <div class="footer-section">
            <h3>Smart Hotel</h3>
            <p>
                Comfortable rooms, quality service, and a peaceful stay.
                We are committed to giving you the best hotel experience.
            </p>
        </div>

        <div class="footer-section">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('room') }}">Rooms</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h4>Contact</h4>
            <p>Email: info@smarthotel.com</p>
            <p>Phone: +251 911 234 567</p>
            <p>Addis Ababa, Ethiopia</p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© {{ date('Y') }} Smart Hotel. All rights reserved.</p>
    </div>
</footer>

<style>
.footer {
    background-color: #f7f2f2;
    color: #300d0d;
    padding: 40px 0 20px 0;
    font-family: Arial, sans-serif;
}

.footer-container {
    width: 90%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.footer-section {
    flex: 1;
    min-width: 250px;
    margin-bottom: 20px;
}

.footer-section h3,
.footer-section h4 {
    color: #28a745;
    margin-bottom: 15px;
}

.footer-section p {
    font-size: 14px;
    line-height: 1.6;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 8px;
}

.footer-section ul li a {
    color: #1d0f0f;
    text-decoration: none;
}

.footer-section ul li a:hover {
    color: #28a745;
}

.footer-bottom {
    text-align: center;
    border-top: 1px solid #444;
    padding-top: 15px;
    margin-top: 20px;
    font-size: 14px;
}
</style>
