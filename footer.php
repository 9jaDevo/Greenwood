<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper CDN -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- WOW.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<!-- Appear.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/jquery-appear@0.4.1/jquery.appear.min.js"></script>

<!-- Odometer CDN -->
<script src="https://cdn.jsdelivr.net/npm/odometer@0.4.9/odometer.min.js"></script>

<!-- Magnific Popup CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-magnific-popup/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- Easing.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- ScrollSpy.js CDN (if needed) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollspy/1.0.0/scrollspy.min.js"></script>

<!-- Countdown.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/countdown@2.6.0/dist/countdown.min.js"></script>

<!-- Parallax Scroll CDN -->
<script src="https://cdn.jsdelivr.net/npm/parallax-scroll@1.0.2/parallax-scroll.min.js"></script>

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
    if (document.querySelector('.alert')) {
        window.scrollTo({
            top: document.querySelector('.alert').offsetTop,
            behavior: 'smooth'
        });
    }
</script>