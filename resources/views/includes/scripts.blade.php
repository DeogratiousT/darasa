
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('mazer/assets/static/js/components/dark.js') }}"></script>
<script src="{{ asset('mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('mazer/assets/compiled/js/app.js') }}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Page Custom Javascript-->
    <!-- Need: Apexcharts -->
    <script src="{{ asset('mazer/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mazer/assets/static/js/pages/dashboard.js') }}"></script>
    @stack('scripts')
<!--end::Page Custom Javascript-->

<!--end::Javascript-->