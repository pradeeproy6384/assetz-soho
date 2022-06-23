<!-- ========== Start Footer ========== -->
<section class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-desc text-center">
					<!--  <p><a href="tel:+919999322014" class="ftr-tel">+91-9999-32-2014</a></p>  -->
					<p>RERA Registration No - PRM/KA/RERA/1251/310/AG/170824/000146  <span>&nbsp;|&nbsp;<a data-toggle="modal" id="form-query" data-target="#disclaimer">Disclaimer </a></span></p>
				</div>
			</div>
		</div>
		<!-- New Footer -->
	</div>
</section>
<div class="new_footer">
	<div class="container-fluid conatiner-pad">
		<div class="row justify-content-center">
			<div class="col-md-4 col-4 pt-1 fixed-cta-item text-center border-right-white  border-white wchats wbg"> <a href="https://bit.ly/3OcaitA" target="_blank" class="chat-btns"><span class="wicons blinking animated"><i class="fa fa-whatsapp faa-wrench animated" aria-hidden="true"></i></span> Whatsapp </a> </div>
			<div class="col-md-4 col-4 pt-1 fixed-cta-item text-center border-right-white">
				<a href="tel:+919910006120"> <span class="blinking text-uppercase"><i class="fa fa-phone faa-wrench animated" aria-hidden="true"></i></span>&nbsp; <span>Call Us</span> </a>
			</div>
			<div class="col-md-4 col-4 pt-1 fixed-cta-item text-center ebg">
				<a class="n-ftr_qruey" data-toggle="modal" id="contact-query" data-target="#query"> <i class="fa fa-envelope-open faa-wrench animated" aria-hidden="true"></i><span class="blinking1"> &nbsp; Enquiry</span></a>
			</div>
		</div>
	</div>
</div>
<!-- ==== // ===== -->
<div class="whatsapp_chat an_bounce"> <a href="https://bit.ly/3OcaitA" target="_blank"><i class="fa fa-whatsapp"></i><span> </span> </a> </div>
<!-- // Stat Whatsapp Chat // -->
<div class="f_dr_chat">
	<a href="https://bit.ly/3OcaitA" target="_blank">
		<div class="f_chat_img"> <img src="assets/images/chat.gif" alt="wchat"> </div>
		<!-- // -->
		<div class="callout callout-success desc ButtonGradient"> <small><i class="fa fa-whatsapp an_bounce" aria-hidden="true"></i> </small>
			<h4>"Click Here To chat with <br>sales team directly."</h4> </div>
		<!-- // -->
	</a>
</div>
<!-- // End Whatsapp Chat // -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/validation.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="assets/js/custome.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.floor-img,.pr-master,.pr-location,.gallery-images,.home-gallery,.pr-floor').magnificPopup({
		delegate: 'a',
		type: 'image',
		// tLoading: 'Loading image #%curr%...',
		// mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});
</script>

<!-- Initialize Swiper -->
<script type="text/javascript">
$(window).on('load', function() {
	$('#onload').modal('show');
});
</script>
<script type="text/javascript">
function validateFormload() {
	var name = document.forms["onloadform"]["first_name"].value;
	if(name == "") {
		alert("Name must be filled out");
		document.onloadform.first_name.focus();
		return false;
	}
	if(!document.onloadform.first_name.value.match(/^[A-Z a-z]+$/)) {
		alert("Please Enter Name Characters Alphabets Only.");
		document.onloadform.first_name.focus();
		return false;
	}
	if(!document.onloadform.email.value.match(/^[A-Za-z0-9\._\-+]+@[A-Za-z0-9_\-+]+(\.[A-Za-z0-9_\-+]+)+$/)) {
		alert("Please Enter The Valid Email ID.");
		document.onloadform.email.focus();
		return false;
	}
	if(!document.onloadform.phone.value.match(/^\d{10}$/)) {
		alert("Please Enter 10 Digits Mobile Number.");
		document.onloadform.phone.focus();
		return false;
	}
}
</script>
<!-- Onload Query Validation -->
<script type="text/javascript">
function validateFormbanner() {
	var name = document.forms["bannerform"]["first_name"].value;
	if(name == "") {
		alert("Name must be filled out");
		document.bannerform.first_name.focus();
		return false;
	}
	if(!document.bannerform.first_name.value.match(/^[A-Z a-z]+$/)) {
		alert("Please Enter Name Characters Alphabets Only.");
		document.bannerform.first_name.focus();
		return false;
	}
	if(!document.bannerform.email.value.match(/^[A-Za-z0-9\._\-+]+@[A-Za-z0-9_\-+]+(\.[A-Za-z0-9_\-+]+)+$/)) {
		alert("Please Enter The Valid Email ID.");
		document.bannerform.email.focus();
		return false;
	}
	if(!document.bannerform.phone.value.match(/^\d{10}$/)) {
		alert("Please Enter 10 Digits Mobile Number.");
		document.bannerform.phone.focus();
		return false;
	}
}
</script>
<!-- Banner Query Validation -->
<!-- Click Tracking  Code -->
<script>
window.addEventListener('load', function() {
	if(window.location.pathname == "/thank-you.html") {
		gtag('event', 'conversion', {
			'send_to': 'AW-687157985/FoNVCPeGmqQDEOHl1McC'
		});
	}
	jQuery('[href="https://bit.ly/3OcaitA"]').click(function() {
		gtag('event', 'conversion', {
			'send_to': 'AW-687157985/I1-vCLudoaQDEOHl1McC'
		});
	});
	jQuery('[href="tel:+919999322014"]').click(function() {
		gtag('event', 'conversion', {
			'send_to': 'AW-687157985/dELiCJihoaQDEOHl1McC'
		});
	});
});
</script>
<script>
$zopim(function() {
	$zopim.livechat.setOnChatStart(function() {
		gtag('event', 'conversion', {
			'send_to': 'AW-687157985/AKNTCM25mqQDEOHl1McC'
		});
	});
});
</script>
</body>

</html>