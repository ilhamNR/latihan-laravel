<x-app-layout title="Product">
    <div class="container">
        <x-card title='Product'>
            <H1>Products list</H1>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Store Name</th>
                    <th>Actions</th>
                </thead>
                {{-- <tbody>
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
                </tbody> --}}
            </table>
        </x-card>
    </div>
</x-app-layout>
