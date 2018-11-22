@extends('backend/layout/layout')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link href="../assets/css/menu-managment.css" rel="stylesheet">


<div class="col-sm-12 col-xl-6">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> MENU
            <small>Manage Menu Dynamically</small>
        </div>
        <div class="card-body">
            <div>

                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                @endif
                <a href="#newModal" class="btn btn-primary" data-toggle="modal">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;New Menu Item </a>
            </div>
            <br>

            <div class="pull-right">
                <div id="msg"></div>
            </div>
            <div class="list-group">
                <div class="dd" id="nestable">
                    {!! $menus !!}
                </div>
                @if($menus == null)
                <div class="alert alert-danger">No results found</div>
                @endif
            </div>
        </div>
    </div>
</div>


<!-- Create new item Modal -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{!! route('menu.store') !!}" method="POST">
                {!! csrf_field() !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Provide details of the new menu item</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="menu_name" class="col-lg-2 control-label">Menu Name</label>

                        <div class="col-lg-10">
                            <input type="text" name="menu_name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">URL</label>

                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">{!! config('app.site_url') !!}</span>
                                <input type="text" name="url" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection