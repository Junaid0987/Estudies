                </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     
<!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
      <!-- Mainly scripts -->
      <script src="<?php echo $url;?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $url;?>assets/js/popper.min.js"></script>
    <script src="<?php echo $url;?>assets/js/bootstrap.js"></script>
    <script src="<?php echo $url;?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo $url;?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?php echo $url;?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?php echo $url;?>assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo $url;?>assets/js/inspinia.js"></script>
    <script src="<?php echo $url;?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
     </body>
</html>
