@extends('backend/layout/layout')
@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link href="../assets/css/menu-managment.css" rel="stylesheet">
<script src="../assets/js/jquery.nestable.js"></script>

<meta name="_token" content="{!! csrf_token() !!}"/>

<script type="text/javascript">
    $(document).ready(function () {

        $('#notification').show().delay(4000).fadeOut(700);

        // publish settings
        $(".publish").bind("click", function (e) {
            var id = $(this).attr('id');
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "#",
                headers: {
                    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                },
                success: function (response) {
                    if (response['result'] == 'success') {
                        var imagePath = (response['changed'] == 1) ? "{!! url('/') !!}/assets/images/publish_16x16.png" : "{!!url('/')!!}/assets/images/not_publish_16x16.png";
                        $("#publish-image-" + id).attr('src', imagePath);
                    }
                },
                error: function () {
                    alert("error");
                }
            });
        });
    });
</script>

<div class="col-sm-12 col-xl-6">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> MENU
            <small>Manage Menu Dynamically</small>
        </div>
        <div class="card-body">
            <div>
            <a href="#newModal" class="btn btn-primary" data-toggle="modal">
                <span class="glyphicon glyphicon-plus"></span>&nbsp;New Menu Item </a>
                </div><br>
            <div class="pull-right">
                <div id="msg"></div>
            </div>
            <div class="list-group">
                <div class="dd" id="nestable">
                    @foreach($menus as $menu)
                    <li class='dd-item' data-id='{{$menu->id}}'>
                        <button type='button' data-action='collapse'>Collapse</button>
                        <button type='button' data-action='expand' style='display: none;'>Expand</button>
                        <div class='dd-handle'></div>
                        <div class='dd-content'><span>{{$menu->title}}</span>
                            <div class='ns-actions'>
<!--                                <a title='Publish Menu' id='{$item->id}' class='publish' href='#'><img id='publish-image-".$item->id."' alt='Publish' src='".url('/').'/assets/images/'.$imageName."'></a>-->
<!--                                <a title='Edit Menu' class='edit-menu' href='".langRoute('admin.menu.edit', $item->id)."'><img alt='Edit' src='".url('/').'/assets/images/edit.png'."'></a>-->
<!--                                <a class='delete-menu' href='".URL::route('admin.menu.delete', $item->id)."'><img alt='Delete' src='".url('/').'/assets/images/cross.png'."'></a><input type='hidden' value='1' name='menu_id'>-->
                            </div>
                        </div>
                    </li>
                    @endforeach


                </div>
                @if($menus === null)
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
            <form action="{!! route('admin.menu.store') !!}" method="POST">
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



<script type="text/javascript">
    $(document).ready(function () {

        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {

                var jsonData = window.JSON.stringify(list.nestable('serialize'));

                //console.log(window.JSON.stringify(list.nestable('serialize')));

                $.ajax({
                    type: "POST",
                    url: "{!! URL::route('admin.menu.save') !!}",
                    data: {'json': jsonData},

                    success: function (response) {

                        //$("#msg").append('<div class="alert alert-success msg-save">Saved!</div>');
                        $("#msg").append('<div class="msg-save" style="float:right; color:red;">Saving!</div>');
                        $('.msg-save').delay(1000).fadeOut(500);
                    },
                    error: function () {
                        alert("error");
                    }
                });

            } else {
                alert('error');
            }
        };

        $('#nestable').nestable({
            group: 1
        }).on('change', updateOutput);
    });
</script>
@endsection