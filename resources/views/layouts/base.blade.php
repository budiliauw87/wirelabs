<div class="bg-base-200 drawer lg:drawer-open">

    <input id="drawer" type="checkbox" class="drawer-toggle">
    <!-- drawer content-->
    <div class="drawer-content">
        <!--navbar-->

        @include('layouts.navbar')

        <!-- content-->
        <main class="bg-base-200 neutral-content p-2">
            {{$slot}}
        </main>

    </div>

    <!-- drawer-->
    @include('layouts.drawer')


</div>
