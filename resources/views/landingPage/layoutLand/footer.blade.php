<footer>
  <div class="footer">
      <div class="footer-left">
          <img src="images/logo-white.png">
      </div>
      <div class="footer-right">
          <p>&copy; Isla for jop 2023</p>
      </div>
  </div>
</footer>

<script>
  let profileMenu = document.getElementById("profileMenu");

  function toggleMenu() {
      profileMenu.classList.toggle("open-menu");
  }
</script>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> --}}
{{-- <script src="{{ asset('js/validat-user.js') }}"></script> --}}
<script src="{{ asset('script.js') }}"></script>
<script src="{{ asset('jops-landing.js') }}"></script>
<script src="{{ asset('login-validate.js') }}"></script>
<script src="{{ asset('people-landing.js') }}"></script>
{{-- <script src="{{ asset('js/main.js') }}"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> --}}
{{-- <script src="{{ asset('js/datetimepicker.js') }}" defer></script> --}}

</body>
</html>