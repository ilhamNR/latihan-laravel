<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        // $users = [
        //     [
        //         'name'      => 'John Doe',
        //         'email'     => 'john@mail.com',
        //         'twitter'   => 'johndoe'
        //     ],
        //     [
        //         'name'      => 'Tailor Otwell',
        //         'email'     => 'tailor@mail.com',
        //         'twitter'   => 'tailorott'
        //     ],
        //     [
        //         'name'      => 'Steve Schoger',
        //         'email'     => 'steve@mail.com',
        //         'twitter'   => 'steveschoger',
        //     ],
        // ];

        // return view('users.index', [
        //     'users' => $users,
        // ]);
        $data = User::get();

        if (request()->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($item) {
                    $render =
                    '
                        <button type="button" href="product/'.$item->id.'"class="btn btn-danger">Hapus</button>
                    ';

                    return $render;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('users.index');
    }
    public function show($user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
