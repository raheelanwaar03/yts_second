<div class="footer">
    <div class="copyright">
        <p>Copyright © Developed by <a href="{{ env('APP_URL') }}" target="_blank">{{ env('APP_NAME') }}</a>
            2023
        </p>
    </div>
</div>

</div>


<!-- Required vendors -->
<script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('admin/vendor/chart.js') }}/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('admin/vendor/draggable/draggable.js') }}"></script>


<!-- tagify -->
<script src="{{ asset('admin/vendor/tagify/dist/tagify.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/js/jszip.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>

<!-- Apex Chart -->

<script src="{{ asset('admin/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>


<!-- Vectormap -->
<script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('admin/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>
<script src="{{ asset('admin/js/deznav-init.js') }}"></script>
<script src="{{ asset('admin/js/demo.js') }}"></script>
<script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        setTimeout(function() {
            dzSettingsOptions.version = 'dark';
            new dzSettings(dzSettingsOptions);
        }, 1500)
    });
</script>


</body>

</html>
