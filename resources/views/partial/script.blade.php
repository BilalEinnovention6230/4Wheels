<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">  
</script>
<script src="/assets/plugins/global/plugins.bundle.js"></script>

<script src="/assets/js/scripts.bundle.js"></script>
 

<!--end::Global Javascript Bundle-->

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 
<script>
     $(document).ready(function() {
                var errorMassage = @json(session('error'));
                if (errorMassage) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: errorMassage,
                        confirmButtonText: "OK",
                    })
                }

                var successMassage = @json(session('success'));
                if (successMassage) {
                    Swal.fire({
                        icon: 'success',
                        title: "Saved",
                        text: successMassage,
                        confirmButtonText: "OK",
                    })
                }
            });
</script>
<!--begin::Page Vendors Javascript(used by this page)-->

<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

<!--end::Page Vendors Javascript-->

<script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>

<!--begin::Page Custom Javascript(used by this page)-->

<script src="/assets/js/custom/widgets.js"></script>

<script src="/assets/js/custom/apps/chat/chat.js"></script>

<script src="/assets/js/custom/modals/create-app.js"></script>

<script src="/assets/js/custom/modals/upgrade-plan.js"></script>

<script src="/assets/js/custom/modals/create-campaign.js"></script>



<script src="/assets/plugins/custom/urdu-keyboard/urdu-keyboard.js"></script>

<script src="https://kit.fontawesome.com/9fdac95a2b.js" crossorigin="anonymous"></script>
@yield('script')