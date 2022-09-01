<x-app-layout title="Users">
    <div class="container">
        <x-card title='Users'>
            <H1>User Lists</H1>
            <table class="table" id="table-dummy">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Action</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </x-card>
        <script>
        $(document).ready(function () {
            var datatable;
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });

            $(function() {
                datatable = $('#table-dummy').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{url()->current()}}",
                    columns: [
                        {data: 'DT_RowIndex'},
                        {data: 'name'},
                        {data: 'email'},
                        {data: 'city'},
                        {data: 'action'},
                    ],
                });
            });
        });
    </script>



    </div>
</x-app-layout>
