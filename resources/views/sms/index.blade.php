@extends('layouts.content.admin')

@section('content')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-envelope"></i> Send Message / Sent Messages</h2>&nbsp;
				<utton type="button" data-toggle="modal" data-target=".bs-example-modal-sm" class="btn btn-sm btn-primary"><i class="fa fa-send"></i> New Message</utton>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Settings 1</a>
							</li>
							<li><a href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
    			<!-- <p><button id="btn-export">Export To Excel</button></p> -->
				<table class="table table-striped table-bordered datatables">
					<thead>
						<tr>
							<th>Recipient</th>
							<th>Message ID</th>
							<th>Message</th>
							<th>Status</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>						
						@foreach($messages as $message)
							<tr>
								<td>{{ $message->recipient }}</td>
								<td>{{ $message->message_id }}</td>
								<td>{{ $message->message }}</td>
								<td>
									@if($message->status != App\SendMessage::DELIVERED)
										Delivered
									@else
										Undelivered ({{ $message->response }})
									@endif
								</td>
								<td>{{ date("d-m-Y H:i A", strtotime($message->created_at)) }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-md">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel2"><i class="fa fa-pencil"></i> Compose New Message</h4>
			</div>
			<form method="POST" action="{{ url('sms') }}">
				@csrf
				<div class="modal-body">
					<div class="row form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12"> Recipient(s) <span class="required"> * </span></label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<input name="recipient" class="form-control col-md-7 col-xs-12" required type="text">
						</div>
					</div>

					<div class="row form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12"> Message <span class="required"> * </span></label>
						<div class="col-md-9 col-sm-9 col-xs-12">
							<textarea name="message" class="form-control col-md-7 col-xs-12" required></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button>
					<button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Send Message</button>
				</div>
			</form>

		</div>
	</div>
</div>

@endsection

@section('scripts')
@endsection