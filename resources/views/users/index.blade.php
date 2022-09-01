<x-app-layout title="Users">
    <div class="container">
        <x-card title='Users'>
            <H1>using php query</H1>
            <table class="table" id="users">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Twitter</th>
                </thead>
                <tbody>
                    <?php foreach ($users as $key=> $user): ?>
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['twitter'] }}</td>
                    </tr>
                    <?php endforeach ?>
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
                    order: [[2, 'desc']],
                    pageLength : 2,
                    lengthMenu: [2, 10, 50, 100],
                    pagingType: "simple",
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
