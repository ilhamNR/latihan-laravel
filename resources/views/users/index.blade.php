<x-app-layout title="Users">
    <div class="container">
        <x-card title='Users'>
            <H1>using php query</H1>
            <table class="table">
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
        <x-card title='Users'>
            <H1>using foreach</H1>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Twitter</th>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['twitter'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </x-card>
        <x-card title='Users'>
            <H1>using if statement</H1>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Twitter</th>
                </thead>
                <tbody>
                    @if (count($users))
                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['twitter'] }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">
                            <div class='text-center'>
                                Data not found
                            </div>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </x-card>
        <x-card title='Users'>
            <H1>using empty</H1>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Twitter</th>
                </thead>
                <tbody>
                    @empty(!$users)
                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['twitter'] }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">
                            <div class='text-center'>
                                Data not found
                            </div>
                        </td>
                    </tr>
                @endempty
                </tbody>
            </table>
        </x-card>
        <x-card title='Users'>
            <H1>using forelse</H1>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Twitter</th>
                </thead>
                <tbody>
                    @forelse ($users as $key => $user)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['twitter'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <div class='text-center'>
                                Data not found
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </x-card>
    </div>
</x-app-layout>
