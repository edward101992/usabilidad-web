 <!-- BEGIN CORE PLUGINS -->
            @yield('scriptTabla')
            <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- OTROS SCRIPS DE PAGINAS -->
                <!-- FOTO -->
            <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
            <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>

            @yield('scriptAddColumna')
            <!-- MAXIMO DE CARACTERES -->
            <script src="../assets/pages/scripts/components-bootstrap-maxlength.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

                <!-- DATATABLE -->
            <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
            <script src="../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>


            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="../assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
            <script src="../assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
            <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
            <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>









