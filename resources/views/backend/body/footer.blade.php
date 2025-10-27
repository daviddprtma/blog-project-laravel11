<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Logbook <?php echo Date('Y');?> </div>
                            <div>
                                <a href="#"> Privacy Policy</a>
                                &middot;
                                <a href="#"> Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('backend/js/scripts.js')}}"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend/assets/demo/chart-bar-demo.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/datatables-simple-demo.js') }}"></script>

        {{-- for prevent user to right-click inspect element, then do this --}}
  {{-- <script type="text/javascript">
      document.addEventListener('contextmenu', function(e) {
          e.preventDefault();
      });

    document.onkeydown = (e) => {
    // prevent user to do fnKey & F12 key
    if (e.key == 'F12') {
        e.preventDefault();
    }
  };
  </script> --}}
    </body>
</html>
