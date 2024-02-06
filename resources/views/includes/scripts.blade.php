<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugin/adminLte/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugin/adminLte/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugin/adminLte/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('plugin/adminLte/js/adminlte.min.js') }}"></script>
<!-- Sweetalert2 -->
<script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
    /* Sweetalert 2 toast  */
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3500
    });

    @if (Session::has('success'))
        Toast.fire({
            type: 'success',
            title: `{{ Session::get('success') }}`
        })
    @elseif (Session::has('warning'))
        Toast.fire({
            type: 'warning',
            title: `{{ Session::get('warning') }}`
        })
    @elseif (Session::has('error'))
        Toast.fire({
            type: 'error',
            title: `{{ Session::get('error') }}`
        })
    @elseif (Session::has('info'))
        Toast.fire({
            type: 'info',
            title: `{{ Session::get('info') }}`
        })
    @endif
</script>
<script type="text/javascript">
    /***
     * AdminLTE active menu dynamic
     */
    const url = window.location;
    /*remove all active and menu open classes(collapse)*/
    $('ul.nav-sidebar a').removeClass('active').parent().siblings().removeClass('menu-open');
    /*find active element add active class ,if it is inside treeview element, expand its elements and select treeview*/
    $('ul.nav-sidebar a').filter(function () {
        return this.href == url;
    }).addClass('active').closest(".has-treeview").addClass('menu-open').find("> a").addClass('active');
</script>

@yield('scripts')
