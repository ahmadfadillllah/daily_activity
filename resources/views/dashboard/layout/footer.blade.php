<script>
var hostUrl = "{{ asset('dashboard/demo39/dist') }}/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/plugins/global/plugins.bundle.js"></script>
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/js/widgets.bundle.js"></script>
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/js/custom/widgets.js"></script>
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/js/custom/apps/chat/chat.js"></script>
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="{{ asset('dashboard/demo39/dist') }}/assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/js/custom/utilities/modals/new-address.js"></script>
        {{-- <script src="{{ asset('dashboard/demo39/dist') }}/assets/js/custom/utilities/modals/new-target.js"></script> --}}
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/js/custom/utilities/modals/users-search.js"></script>
		<script src="{{ asset('dashboard/demo39/dist') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <script>

            $("#kt_datatable_responsive").DataTable({
                responsive: true
            });
            Inputmask({
                "mask" : "99:99"
            }).mask("#time");
            Inputmask({
                "mask" : "9999-99-99"
            }).mask("#date");
        </script>
        @if (request()->routeIs('dailyactivity.index'))
        <script>
            var inputTags = document.querySelector('[name="action_by"]');
            new Tagify(inputTags, {
                whitelist: @json($name),
                maxTags: 5,
                dropdown: {
                    maxItems: 10,
                    enabled: 0,
                    closeOnSelect: false
                }
            }).on("change", function() {
                // Ketika nilai tag berubah, validasi ulang field "tags"
                n.revalidateField("tags");
            });
        </script>

        @endif
        @include('notif.dashboard')


		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
