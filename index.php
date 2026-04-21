<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Point of Sale System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HERO SECTION -->
    <section class="hero">
        <h1>The Last POS System You'll Ever Need</h1>
        <p>Fast, reliable, and easy-to-use point of sale for modern businesses</p>
        <button class="cta-button">Get Started for Free →</button>
        <div class="mockup">
            <img src="assets/images/pos-mockup.png" alt="QuickPOS Dashboard Preview">
        </div>
    </section>
    <section class="features">
    <h2>Powerful Features</h2>
    <div class="feature-grid">
        <div class="feature-card">
            <div class="icon">📦</div>
            <h3>Inventory Management</h3>
            <p>Track stock in real-time, set low-stock alerts</p>
        </div>
        <div class="feature-card">
            <div class="icon">📊</div>
            <h3>Sales Analytics</h3>
            <p>Detailed reports and insights to grow your business</p>
        </div>
        <div class="feature-card">
            <div class="icon">🔌</div>
            <h3>Easy Integration</h3>
            <p>Connect with accounting, e-commerce, and more</p>
        </div>
        <div class="feature-card">
            <div class="icon">☁️</div>
            <h3>Cloud Backup</h3>
            <p>Your data is always safe and accessible anywhere</p>
        </div>
    </div>
</section>

<section class="pricing">
    <h2>Simple, Transparent Pricing</h2>
    <div class="pricing-grid">
        <div class="pricing-card">
            <h3>Basic</h3>
            <div class="price">$29<span>/month</span></div>
            <ul>
                <li>✓ Up to 500 transactions/month</li>
                <li>✓ Basic inventory</li>
                <li>✓ Email support</li>
            </ul>
            <button>Get Basic</button>
        </div>
        <div class="pricing-card popular">
            <h3>Pro</h3>
            <div class="price">$79<span>/month</span></div>
            <ul>
                <li>✓ Unlimited transactions</li>
                <li>✓ Advanced analytics</li>
                <li>✓ Priority support</li>
                <li>✓ API access</li>
            </ul>
            <button>Get Pro</button>
        </div>
        <div class="pricing-card">
            <h3>Enterprise</h3>
            <div class="price">Custom</div>
            <ul>
                <li>✓ Everything in Pro</li>
                <li>✓ Dedicated account manager</li>
                <li>✓ Custom integrations</li>
                <li>✓ 99.9% SLA</li>
            </ul>
            <button>Contact Sales</button>
        </div>
    </div>
</section>
<section class="contact">
    <h2>Contact Us</h2>
    <form action="contact.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>
<footer>
    <div class="footer-content">
        <div class="social-links">
            <a href="#">📘 Facebook</a>
            <a href="#">🐦 Twitter</a>
            <a href="#">📸 Instagram</a>
            <a href="#">💼 LinkedIn</a>
        </div>
        <div class="copyright">
            © 2025 QuickPOS. All rights reserved.
        </div>
    </div>
</footer>


</body>

</html>