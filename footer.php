<!-- JavaScript for Copy and Share Functions -->
<script>
    // Function to copy referral link to clipboard
    document.getElementById("copy-referral-link").addEventListener("click", function() {
        var referralLink = document.getElementById("referral-link").innerText;
        var textArea = document.createElement("textarea");
        textArea.value = referralLink;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);
        alert("Referral link copied to clipboard!");
    });

    // Function to share referral link via WhatsApp
    document.getElementById("share-referral-link").addEventListener("click", function() {
        var referralLink = document.getElementById("referral-link").innerText;
        var whatsappURL = "https://wa.me/?text=" + encodeURIComponent("Join me on the Greenwood AI airdrop! Use my referral code: " + referralLink);
        window.open(whatsappURL, "_blank");
    });
</script>

<!-- jQuery CDN -->
<script src="assets/js/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Bundle CDN -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- Swiper CDN -->
<script src="assets/js/swiper.min.js"></script>

<!-- WOW.js CDN -->
<script src="assets/js/wow.min.js"></script>

<!-- Appear.js CDN -->
<script src="assets/js/appear.js"></script>

<!-- Odometer CDN -->
<script src="assets/js/odometer.min.js"></script>

<!-- Magnific Popup CDN -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!-- Easing.js CDN -->
<script src="assets/js/easing.min.js"></script>

<!-- ScrollSpy.js CDN (if needed) -->
<script src="assets/js/scrollspy.js"></script>

<!-- Countdown.js CDN -->
<script src="assets/js/countdown.js"></script>

<!-- Parallax Scroll CDN -->
<script src="assets/js/parallax-scroll.js"></script>

<!-- Main.js -->
<script src="assets/js/main.js"></script>

<!-- Keep this for your custom scripts -->
<!-- JavaScript for Copy, Share, and Toast Notification -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>