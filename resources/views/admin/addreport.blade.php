@extends('layouts.master')
@section('title')
       <h1>
           首页
            <small> 报表管理</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard">首页</i> </a></li>
            <li><a href="#">报表管理</a></li>
            <li class="active">上传报表</li>
          </ol>
 @endsection
@section('content')
<div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">财务情况</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              
                  <div class="box-body form-horizontal">

                  <div class="form-group">
                    <label for="total_capital" class="col-sm-2 control-label">资产总额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="资产总额">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                 <div class="form-group">  
                  <label for="money_capital" class="col-sm-2 control-label">货币资金:</label> 
                 <div class=" col-sm-4"> 
                  <div class="input-group ">
                    <input class="form-control" id="money_capital" placeholder="货币资金" type="text">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                 <label for="other_capital" class="col-sm-2 control-label">其他资金:</label> 
                 <div class=" col-sm-4"> 
                  <div class="input-group ">
                    <input class="form-control" id="other_capital" placeholder="其他资金" type="text">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                 </div>

                 <div class="form-group">
                    <label for="total_capital" class="col-sm-2 control-label">负债总额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="负债总额">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="total_capital" class="col-sm-2 control-label">实收资本:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="实收资本">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                   <div class="form-group">
                    <label for="total_capital" class="col-sm-2 control-label">营业收入:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="营业收入">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                    <div class=" col-sm-4"> 
                  <div class="input-group ">
                    <input class="form-control" id="other_capital" placeholder="贷款利息收入" type="text">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                      <div class="form-group">
                    <label for="total_capital" class="col-sm-2 control-label">净利润:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" type="text" placeholder="净利润" />
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>
                  

                  </div><!-- /.box-body -->
               
              </div><!-- /.box -->

              <!-- Form Element sizes -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Different Height</h3>
                </div>
                <div class="box-body">
                  <input class="form-control input-lg" placeholder=".input-lg" type="text">
                  <br>
                  <input class="form-control" placeholder="Default input" type="text">
                  <br>
                  <input class="form-control input-sm" placeholder=".input-sm" type="text">
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Different Width</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-3">
                      <input class="form-control" placeholder=".col-xs-3" type="text">
                    </div>
                    <div class="col-xs-4">
                      <input class="form-control" placeholder=".col-xs-4" type="text">
                    </div>
                    <div class="col-xs-5">
                      <input class="form-control" placeholder=".col-xs-5" type="text">
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- Input addon -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input class="form-control" placeholder="Username" type="text">
                  </div>
                  <br>
                  <div class="input-group">
                    <input class="form-control" type="text">
                    <span class="input-group-addon">.00</span>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input class="form-control" type="text">
                    <span class="input-group-addon">.00</span>
                  </div>

                  <h4>With icons</h4>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                  <br>
                  <div class="input-group">
                    <input class="form-control" type="text">
                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input class="form-control" type="text">
                    <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>

                  <h4>With checkbox and radio inputs</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                        <input class="form-control" type="text">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                        <input class="form-control" type="text">
                      </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                  </div><!-- /.row -->

                  <h4>With buttons</h4>
                  <p class="margin">Large: <code>.input-group.input-group-lg</code></p>
                  <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="fa fa-caret-down"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                    <input class="form-control" type="text">
                  </div><!-- /input-group -->
                  <p class="margin">Normal</p>
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-danger">Action</button>
                    </div><!-- /btn-group -->
                    <input class="form-control" type="text">
                  </div><!-- /input-group -->
                  <p class="margin">Small <code>.input-group.input-group-sm</code></p>
                  <div class="input-group input-group-sm">
                    <input class="form-control" type="text">
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="button">Go!</button>
                    </span>
                  </div><!-- /input-group -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">贷款情况</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
              
                  <div class="box-body form-horizontal">

                 <div class="form-group">
                    <label for="total_capital" class="col-sm-2 control-label">贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="贷款余额" type="text">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>

                     <div class="form-group">
                    <label for="total_capital" class="col-sm-2 control-label">贷款余额:</label>
                    <div class="col-sm-6">
                    <div class="input-group">
                    <input class="form-control" placeholder="贷款余额" type="text">
                    <span class="input-group-addon">万元</span>
                  </div>
                  </div>
                  </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div><!-- /.box-footer -->
        <!-- form end -->
              </div><!-- /.box -->
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">General Elements</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input class="form-control" placeholder="Enter ..." type="text">
                    </div>
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input class="form-control" placeholder="Enter ..." disabled="" type="text">
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                    </div>

                    <!-- input states -->
                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                      <input class="form-control" id="inputSuccess" placeholder="Enter ..." type="text">
                    </div>
                    <div class="form-group has-warning">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with warning</label>
                      <input class="form-control" id="inputWarning" placeholder="Enter ..." type="text">
                    </div>
                    <div class="form-group has-error">
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                      <input class="form-control" id="inputError" placeholder="Enter ..." type="text">
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Checkbox 1
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Checkbox 2
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input disabled="" type="checkbox">
                          Checkbox disabled
                        </label>
                      </div>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
                          Option one is this and that—be sure to include why it's great
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                          Option two can be something else and selecting it will deselect option one
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input name="optionsRadios" id="optionsRadios3" value="option3" disabled="" type="radio">
                          Option three is disabled
                        </label>
                      </div>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled="">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select multiple="" class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Multiple Disabled</label>
                      <select multiple="" class="form-control" disabled="">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>
 @endsection