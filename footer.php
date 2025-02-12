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
<script>
    // Copy Referral Link to Clipboard
    document.getElementById('copy-referral-link').addEventListener('click', function() {
        const referralCode = document.getElementById('referral-link').textContent;
        const shareUrl = `${window.location.href}?referral=${referralCode}`;

        navigator.clipboard.writeText(shareUrl).then(function() {
            showToast('Referral link copied to clipboard!');
        });
    });

    // Show Toast Notification (Custom Toasts on Top-Left)
    function showToast(message) {
        const toastBody = document.getElementById('toast-body');
        toastBody.textContent = message;

        const toast = new bootstrap.Toast(document.getElementById('toast-notification'));
        toast.show();
    }

    // Share Referral Link on Social Media
    document.getElementById('share-referral-link').addEventListener('click', function() {
        const referralCode = document.getElementById('referral-link').textContent;
        const shareText = `Join the Greenwood AI airdrop and claim your rewards! Use my referral code: ${referralCode}`;

        const shareUrl = `${window.location.href}?referral=${referralCode}`;

        // Facebook
        window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`, '_blank');

        // Twitter
        window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(shareText)}&url=${encodeURIComponent(shareUrl)}`, '_blank');

        // WhatsApp
        window.open(`https://wa.me/?text=${encodeURIComponent(shareText)} ${encodeURIComponent(shareUrl)}`, '_blank');
    });

    // Scroll to the notification area after form submission
    if (document.querySelector('.request-info')) {
        window.scrollTo({
            top: document.querySelector('.request-info').offsetTop,
            behavior: 'smooth'
        });
    }
</script>