@extends('templates.template')
@section('content')
    <div class="container-xl mt-3">

        <div class="users-header d-flex align-items-center mb-3">
            <div class="header-title p-2 flex-grow-1">
                <h1>Inventory</h1>
                <p>All the items information is here.</p>
            </div>
            <div class="header-export pe-3">
                <a class="btn btn-primary px-4 py-2" href="#">
                    <i class="bi bi-file-earmark-arrow-down-fill"></i>
                    <span>Export</span>
                </a>
                <a class="btn btn-primary px-4 py-2" href="#">
                    <i class="bi bi-plus-lg"></i>
                    <span>Add</span>
                </a>
            </div>
        </div>

        <div class="users-table">
            <h1>All items()</h1>
            <nav class="navbar navbar-expand-lg bg-body-tertiary p-3">
                <div class="container-xl">
                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item border">
                                <a class="nav-link" href="?usertype=&searchUser=" aria-current="page">View
                                    All</a>
                            </li>
                            <li class="nav-item border border-start-0">
                                <a class="nav-link" href="?usertype=admin&searchUser=">PPE</a>
                            </li>
                            <li class="nav-item border border-start-0">
                                <a class="nav-link" href="?usertype=staff&searchUser=">Disaster Response</a>
                            </li>
                            <li class="nav-item border border-start-0">
                                <a class="nav-link" href="?usertype=staff&searchUser=">Supplies</a>
                            </li>
                            <li class="nav-item border border-start-0">
                                <a class="nav-link" href="?usertype=other&searchUser=">Medicine</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search" method="get">
                            <input name="usertype" type="hidden" value="">
                            <input class="form-control me-3 fs-4" name="searchUser" type="search" value=""
                                aria-label="Search" placeholder="Search">
                            <button class="btn btn-outline-success me-2 fs-4" type="submit">Search</button>
                            <a class="btn btn-outline-secondary fs-4" href="?usertype=&searchUser=">Clear</a>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="table-responsive-lg fs-4">
                <table class="table table table-light table-hover mt-5 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col-4" style="width: 50rem">Item Name</th>
                            <th scope="col-4"style="width: 20rem">Category</th>
                            <th scope="col-1"style="width: 10rem">Quantity</th>
                            <th scope="col-1"style="width: 10rem">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tbl_items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->item_name }}</td>
                                <td>{{ $item->item_category }}</td>
                                <td>{{ $item->item_quantity }}</td>
                                <td>
                                    <a class="btn btn-primary update-btn" href="#">
                                        <i class="bi bi-pencil-square"></i></a>
                                    <a class="btn btn-danger delete-btn"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        @empty
                            <div>
                                <h1>NO ITEMS FOUND!</h1>
                            </div>
                        @endforelse
                    </tbody>
                    {{-- <tbody>
                        @forelse ($tbl_users as $users)
                            <tr>
                                <td>{{ $users->firstname }}</td>
                                <td>{{ $users->lastname }}</td>
                                <td>{{ $users->email }}</td>
                                <td>{{ $users->usertype }}</td>
                                <td>{{ $users->username }}</td>
                                <td>{{ $users->password }}</td>
                                <td>{{ $users->gender }}</td>
                                <td>{{ $users->bday }}</td>
                                <td>{{ $users->contact }}</td>
                                <td>{{ $users->team }}</td>
                                <td>
                                    <a class="btn btn-primary update-btn" href="#">
                                        <i class="bi bi-pencil-square"></i></a>
                                    <a class="btn btn-danger delete-btn"><i class="bi bi-trash3-fill"></i></a>
                                </td>
                            </tr>
                        @empty
                            <div>
                                <h1>NO USER FOUND!</h1>
                            </div>
                        @endforelse
                    </tbody> --}}
                </table>
            </div>
        </div>

    </div>
@endsection
