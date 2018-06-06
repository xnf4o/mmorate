@extends('layouts.default')

@section('title', 'Managed Tables')

@push('css')
    <link href="/assets/plugins/datatables/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables/css/responsive/responsive.bootstrap4.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Панель</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Списки серверов</a></li>
        <li class="breadcrumb-item active">Все сервера</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Managed Tables <small>header small text goes here...</small></h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">Data Table - Default</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            @if(session()->has('message'))
                <div class="col-md-12">
                    <div class="alert alert-green fade show m-b-10">
                        <span class="close" data-dismiss="alert">×</span>
                        {{ session()->get('message') }}
                    </div>
                </div>
            @endif
            <table id="data-table-default" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th width="1%">#</th>
                    <th class="text-nowrap">Название сервера</th>
                    <th class="text-nowrap">Статус</th>
                    <th class="text-nowrap">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($servers as $server)
                    <tr class="odd">
                        <td width="1%">{{ $server->id }}</td>
                        <td>{{ $server->name }}</td>
                        <td>
                            @if($server->status == 0) <span class="label label-yellow">Ожидает модерации</span>
                            @elseif($server->status == 1) <span class="label label-success">Опубликован</span>
                            @else <span class="label label-danger">Удален</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.server.edit', $server->id) }}" class="btn btn-default btn-icon btn-circle btn-info">
                                <i class="fa fa-cog"></i>
                            </a>
                            @if($server->status == 0)
                            <a href="{{ route('admin.server.approve', $server->id) }}" class="btn btn-default btn-icon btn-circle btn-lime">
                                <i class="fa fa-handshake"></i>
                            </a>
                            @endif
                            @if($server->status != 2)
                            <a href="{{ route('admin.server.delete', $server->id) }}" class="btn btn-default btn-icon btn-circle btn-danger">
                                <i class="fa fa-times"></i>
                            </a>
                                @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end panel-body -->
    </div>
    <!-- end panel -->
@endsection

@push('scripts')
    <script src="/assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="/assets/plugins/datatables/js/dataTables.bootstrap4.js"></script>
    <script src="/assets/plugins/datatables/js/responsive/dataTables.responsive.js"></script>
    <script src="/assets/plugins/datatables/js/responsive/responsive.bootstrap4.js"></script>
    <script src="/assets/js/demo/table-manage-default.demo.js"></script>
    <script>
        $(document).ready(function() {
            TableManageDefault.init();
        });
    </script>
@endpush