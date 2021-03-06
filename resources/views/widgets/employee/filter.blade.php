<div class="card">
	<div class="card-header">Filter</div>
	<div class="card-body">
		{!!Form::model($employee, ["id"=>"filter_form"])!!}
		<div class="row">
			<div class="col-md-4">{{Form::text("id", null, ["class"=>"form-control", "placeholder"=>"id"])}}</div>
			<div class="col-md-4">{{Form::text("firstname", null, ["class"=>"form-control", "placeholder"=>"Firstname"])}}</div>
			<div class="col-md-4">{{Form::text("lastname", null, ["class"=>"form-control", "placeholder"=>"Lastname"])}}</div>
		</div>
		<div class="row">
			<div class="col-md-4">{{Form::date("birthday", null, ["class"=>"form-control", "placeholder"=>"Birthday"])}}</div>
			<div class="col-md-4">{{Form::text("address", null, ["class"=>"form-control", "placeholder"=>"Address"])}}</div>
			<div class="col-md-4">{{Form::text("boss", null, ["class"=>"form-control", "placeholder"=>"Boss"])}}</div>
		</div>
		<div class="row">
			<div class="col-md-4">{{Form::number("salary", null, ["class"=>"form-control", "placeholder"=>"Salary"])}}</div>
		</div>
		{!!Form::close()!!}
	</div>
	<div class="card-footer text-right"><button type="button" class="btn btn-light search" ng-click="reset()"><i class="fas fa-circle"></i> リセット</button> <button type="button" class="btn btn-primary search" ng-click="loadData()"><i class="fas fa-search"></i> 検索</button></div>
</div>