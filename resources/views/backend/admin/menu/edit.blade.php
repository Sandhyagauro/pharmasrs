@extends('backend.layout.layout')
@section('content')
<script type="text/javascript">
    $(document).ready(function () {

        $('.type').change(function () {
                var selected = $('input[class="type"]:checked').val();
                if (selected == "custom") {
                    $('.modules').css('display', 'none');
                    $('.url').css('display', 'block');
                }
                else {
                    $('.modules').css('display', 'block');
                    $('.url').css('display', 'none');
                }
            }
        );

        $(".type").trigger("change");
    });
</script>



<div class="col-sm-12 col-xl-6">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> EDIT MENU
            <small>Manage Menu Dynamically</small>
        </div>
        <div class="card-body">

            <form action="{{route('menu.update',$menu->id)}}" method="POST">
                {!! csrf_field() !!}
                <input name="_method" type="hidden" value="PUT">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="menu_name" class="col-lg-2 control-label">Menu Name</label>

                        <div class="col-lg-10">
                            <input type="text" name="menu_name" value="{{ $menu->title}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">URL</label>

                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">{!! config('app.site_url') !!}</span>
                                <input type="text" name="url" value="{{ $menu->url}}" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div >
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
