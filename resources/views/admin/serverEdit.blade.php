@extends('layouts.default')

@section('title', 'Form Validation')

@push('css')
    <link href="/assets/plugins/parsleyjs/src/parsley.css" rel="stylesheet" />
@endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
        <li class="breadcrumb-item active">Form Validation</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Form Validation <small>header small text goes here...</small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Редактировние сервера #{{ $server->id }} ({{ $server->name }})</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <form class="form-horizontal" data-parsley-validate="true" action="{{ route('admin.server.edit.post', $server->id) }}" method="post">
                        @csrf
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="name">Название сервера:</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Required" data-parsley-required="true" value="{{ $server->name }}" />
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="site">Сайт сервера:</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" type="url" id="site" name="site" data-parsley-type="url" placeholder="Email" data-parsley-required="true" value="{{ $server->site }}" />
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="trailer">Трейлер :</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" type="text" id="trailer" name="trailer" data-parsley="Required" placeholder="url" value="{{ $server->trailer }}" />
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="description">Описание (от 20 до 200 символов):</label>
                            <div class="col-md-8 col-sm-8">
                                <textarea class="form-control" id="description" name="description" rows="4">{{ $server->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="tags">Теги (через запятую) :</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" type="text" id="tags" name="tags" data-parsley-type="digits" placeholder="tags" {{ $server->tags }} />
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="coefficient">Коэффициент при голосовании (по умолчанию 1):</label>
                            <div class="col-md-8 col-sm-8">
                                <input class="form-control" type="text" id="coefficient" name="coefficient" data-parsley-type="digits" placeholder="..." {{ $server->coefficient }} />
                            </div>
                        </div>
                        {{--<div class="form-group row m-b-15">--}}
                            {{--<label class="col-md-4 col-sm-4 col-form-label" for="message">Number :</label>--}}
                            {{--<div class="col-md-8 col-sm-8">--}}
                                {{--<input class="form-control" type="text" id="number" name="number" data-parsley-type="number" placeholder="Number" />--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group row m-b-0">
                            <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                            <div class="col-md-8 col-sm-8">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end panel-body -->
                <!-- begin hljs-wrapper -->
                <div class="hljs-wrapper">
				<pre><code class="html">&lt;form data-parsley-validate="true"&gt;
  &lt;!-- required --&gt;
  &lt;input type="text" data-parsley-required="true" /&gt;

  &lt;!-- email --&gt;
  &lt;input type="email" data-parsley-type="email" /&gt;

  &lt;!-- url --&gt;
  &lt;input type="url" data-parsley-type="url" /&gt;

  &lt;!-- digits --&gt;
  &lt;input type="text" data-parsley-type="digits" /&gt;

  &lt;!-- number --&gt;
  &lt;input type="text" data-parsley-type="number" /&gt;

  &lt;!-- textarea range --&gt;
  &lt;textarea rows="4" data-parsley-range="[20,200]"&gt;&lt;/textarea&gt;
&lt;/form&gt;</code></pre>
                </div>
                <!-- end hljs-wrapper -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
    <!-- end row -->
@endsection

@push('scripts')
    <script src="/assets/plugins/parsleyjs/dist/parsley.js"></script>
    <script src="/assets/plugins/highlight/highlight.min.js"></script>
    <script src="/assets/js/demo/render.highlight.js"></script>
    <script>
        $(document).ready(function() {
            Highlight.init();
        });
    </script>
@endpush
