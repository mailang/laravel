@extends('layouts.master')
@section('title')
       <h1>
           修改密码
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li class="active">修改密码</li>
          </ol>
          @endsection
@section('content')
<form id="form" action="{{route('modifypassword')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">修改密码</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              
                  <div class="box-body form-horizontal">

                      <div class="form-group">
                          <label for="total_capital" class="col-sm-4 control-label">*原密码:</label>
                          <div class="col-sm-2">
                                  <input class="form-control" type="password" id="oldpassword" name="oldpassword" placeholder="原密码">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="total_capital" class="col-sm-4 control-label">*新密码:</label>
                          <div class="col-sm-2">
                                  <input class="form-control" type="password" id="password" name="password" placeholder="新密码">
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="total_capital" class="col-sm-4 control-label">*确认密码:</label>
                          <div class="col-sm-2">
                                  <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="确认密码">
                          </div>
                      </div>

                  </div><!-- /.box-body -->
              </div><!-- /.box -->


              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">提交</button>
                  </div>
            </div><!--/.col (right) -->
          </div>

          </div>
        </form>
       
 @endsection