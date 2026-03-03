
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
				<p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
			</footer>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('admin') }}/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('admin') }}/vendors/flatpickr/flatpickr.min.js"></script>
  <script src="{{ asset('admin') }}/vendors/apexcharts/apexcharts.min.js"></script>
	<!-- End plugin js for this page -->
	<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.26.20/dist/sweetalert2.all.min.js
"></script>
	<!-- inject:js -->
	<script src="{{ asset('admin') }}/vendors/feather-icons/feather.min.js"></script>
	<script src="{{ asset('admin') }}/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset('admin') }}/js/dashboard-dark.js"></script>
	<!-- End custom js for this page -->
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

	<script>
		$(document).ready(function() {
			$('#summernote').summernote();
		});


		
	</script>

	@stack('scripts')
</body>
</html>    