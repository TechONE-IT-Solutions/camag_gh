<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CAMAG</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="{{asset('CAMAGADMIN/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{asset('CAMAGADMIN/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('CAMAGADMIN/assets/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
{{--summernote js link --}}
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $("#mysummernote").summernote();
        $('.dropdown-toggle').dropdown();
    });
</script>
<script>
    let move = document.getElementById('moveMembers');
    move.addEventListener('click',function(e){
        let confirmMember = confirm('Is the four years up, do you want to move all of the members?')
        if(confirmMember){
            return true;
        }
        else{
            e.preventDefault();
            return false;
        }
    });
</script>
</body>

</html>
