<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Appointments') }}
        </h2>
    </x-slot>

    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Agenda tu cita</h2>

    <!-- Google Calendar Appointment Scheduling begin -->
    <iframe
        src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ2EcDYGTrihtGdcPQVPcFlDVY8HXT78UeRfVrJfLpqoQLgi66wXQ9EzWdXcuw61SmlJnIWX3eJP?gv=true"
        style="border: 0; background:rgb(255, 255, 255);" width="100%" height="800" frameborder="0"></iframe>
    <!-- end Google Calendar Appointment Scheduling -->

</x-app-layout>