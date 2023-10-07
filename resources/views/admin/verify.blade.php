<?php $page = 'verifyartists';?> @include ('inc.navadmin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ELikha</title>
    <link href="style.css" rel="stylesheet">
    <style>
    body 
    {
        background-color: #EEEEEE;
        color: #535353;
        
    }
    .status-pending {
    background-color: gray;
    color: white;
}

.status-approved {
    background-color: #007BFF;
    color: white;
}
.status-rejected {
    background-color: #DC3545;
    color: white;
    overflow-y: auto;
}
.status-oval {
    width: auto;
    height: 30px;
    border-radius: 15px;
    display: inline-flex;
    align-items: center;
    padding: 0 10px;
}
    </style>
</head>
</div>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="mb-0" style="font-family:Helvetica Neue">Verify Artists</h1>
                <a class="dropdown d-none d-sm-inline-block" style="position: relative; left: 1050px;">
                <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="prof.png" alt="" width="32" height="32" class="rounded-circle me-2">
                  <strong style="color:#535353">{{ Auth::user()->name }}</strong>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                    @csrf
                    @method('delete')
                </form>
                </a>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card text-left shadow h-100 py-2 w-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs text-primary text-uppercase mb-2" style="font-size:40px; font-weight: bold;">
                                    {{$pending}}
                                </div>
                                <div class="p font-weight-bold text-gray-800">Pending Verifications</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card text-left shadow h-100 py-2 w-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs text-primary text-uppercase mb-1" style="font-size:40px; font-weight: bold;">
                                    {{$verified}}
                                </div>
                                <div class="p font-weight-bold text-gray-800">Verified Artists</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-mb-8">
                <div class="card shadow mb-8 h-100 p-3 w-100">
                    <div class="row align-items-center">
                        <form method="get" action="{{ route('verifyartists') }}" class="d-flex">
                            <select name="status_filter" id="status_filter" style="padding: 0.5em; font-size: 1em; border-radius: 0.25em; border: 1px solid #ccc;">
                                <option value="all">All</option>
                                <option value="Pending"{{ request('status_filter') === 'Pending' ? ' selected' : '' }}>Pending</option>
                                <option value="Approved"{{ request('status_filter') === 'Approved' ? ' selected' : '' }}>Approved</option>
                                <option value="Rejected"{{ request('status_filter') === 'Rejected' ? ' selected' : '' }}>Rejected</option>
                            </select>
                            <button type="submit" class="btn btn-outline-dark">Filter</button>
                        </form>                        
                        <div class="card-body">
                            @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    
                    @if(Session::has('reject'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('reject')}}
                        </div>
                    @endif
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Identification</th>
                                    <th>Status</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                  
                                </tr>
                                @foreach ($verify as $verifies)
                                <tr>
                                    <td>{{ $verifies->id }}</td>
                                    <td>{{ $verifies->firstname }} {{ $verifies->middlename }} {{ $verifies->lastname }}</td>
                                    <td>{{ $verifies->IDType }}</td>
                                    <td>
                                        <div class="status-oval @if ($verifies->status === 'Pending') status-pending @elseif ($verifies->status === 'Approved') status-approved @elseif ($verifies->status === 'Rejected') status-rejected @endif">
                                            {{ $verifies->status }}
                                        </div>
                                    </td>
                                    <td>{{ date('M d, Y', strtotime($verifies->created_at)) }}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#VERIFYMODAL_{{ $verifies->id }}">
                                            View
                                        </button>
                                        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#rejectModal{{ $verifies->id }}" data-verifies-id="{{ $verifies->id }}">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i> Reject
                                        </button>
                                        <div class="modal fade" id="VERIFYMODAL_{{ $verifies->id }}" tabindex="-1" role="dialog" aria-labelledby="artmodal" aria-hidden="true">                                            <div class="modal-dialog fixed-modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="image-container">
                                                                    <div class="text-center">
                                                                        <h5>Identification Document</h5>
                                                                        <img src="{{ asset($verifies->identification) }}" alt="Identification Document" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-3">
                                                                <div class="image-container">
                                                                    <div class="text-center">
                                                                        <h5>Selfie</h5>
                                                                        <img src="{{ asset($verifies->selfie) }}" alt="Selfie" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-3">
                                                                <div class="image-container">
                                                                    <div class="text-center">
                                                                        <h5>GCash QR Code</h5>
                                                                        <img src="{{ asset($verifies->gcash) }}" alt="GCash Transaction" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                                        <form action="{{ route('approveartists', $verifies->id) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-outline-primary">Approve</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Rejection Modal -->
                                        <div class="modal fade" id="rejectModal{{ $verifies->id }}" tabindex="-1" aria-labelledby="rejectModalLabel{{ $verifies->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="rejectModalLabel{{ $verifies->id }}">Confirm Reject</h5>
                                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to reject this artist verification?
                                                        <form action="{{ route('rejectartists', $verifies->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $verifies->id }}">
                                                            <textarea name="remarks" rows="3" placeholder="Provide remarks for rejection"></textarea>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-outline-danger">Reject</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                              </table>
                              {{ $verify->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
