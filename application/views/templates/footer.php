<!-- Footer -->
<footer class="bg-info">
    <div class="container">
        <div class="links t-black">
            <a href="<?= base_url()?>about" class="t-white">About</a>
            <a href="<?= base_url()?>services" class="t-white">Services</a>
            <a href="<?= base_url()?>contact" class="t-white">Contact Us</a>
        </div>
        <div class="copyright t-white center">2020 - All rights reserved to &copy; <b class="t-black" style="font-size:">Worldclass Transfers</b> </div>
    </div>
</footer>


<!--whatsapp chat launcher -->
<div id=waLauncher></div>
<!--whatsapp chat launcher end-->
<!-- JS files upload -->
<script src="<?= base_url()?>resources/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>resources/float_wp/floating-wpp.js"></script>

<script type="text/javascript">
    $(function () {
        $('#waLauncher').floatingWhatsApp({
            phone: '0711777626',
            popupMessage: 'Hello, how can we help you?',
            position:'right',
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Whats\'App Chat',
            zIndex:'1000',
            size:'62',
            autoOpenTimeout: 30000000000
        });
    });
</script>
<script src="<?= base_url()?>resources/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>resources/js/popper.min.js"></script>
<script src="<?= base_url()?>resources/js/slick.min.js"></script>
<script src="<?= base_url()?>resources/js/validator.min.js"></script>
<script src="<?= base_url()?>resources/js/contact.js"></script>
<script src="<?= base_url()?>resources/js/main.js"></script>
<script src="<?= base_url()?>resources/js/aos.js"></script>




</body>

<!-- Mirrored from beetube.me/html-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 09:02:39 GMT -->
</html>

</body>

</html>