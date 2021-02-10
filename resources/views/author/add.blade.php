@extends('__layouts.app')

@section('title', 'Add Author')

@section('content')

	<div class="row">
		<div class="col-md-4">
			<div class="card shadow mb-4">
			<form action="" id="create">
				<div class="card-header">
					<h6 class="card-title my-0 font-weight-bold text-primary">Add Author</h6>
				</div>
				<div class="card-body">
					@csrf
					<div class="form-group">
						<label>Code</label>
						<select name="code" class="form-control custom-select" placeholder="Code" required></select>
					</div>
					<div class="form-group">
						<label>Author</label>
						<input type="text" class="form-control" name="author" placeholder="Author" required>
					</div>
				</div>
				<div class="card-footer">
					<button class="btn btn-primary" type="primary">Add</button>
				</div>
			</div>
			</form>
		</div>
		<div class="col-md-8">
			<div class="card shadow">
				<div class="card-header">
					<h6 class="card-title my-0 font-weight-bold text-primary">History</h6>
				</div>
				<div class="card-body">
					<div id="alert"></div>
					<div class="table-responsive">
						<table class="table table-bordered table-striped" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>Code</th>
									<th>Author</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@push('styles')

	<link rel="stylesheet" href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('sbadmin/vendor/select2/css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('sbadmin/vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

@endpush

@push('scripts')

	<script>
		let ajaxUrl = "{{ route('author.add') }}"
		let createUrl = "{{ route('author.create') }}"
		let deleteUrl = "{{ route('author.destroy', ':id') }}"
		let getBookUrl = "{{ route('book.get') }}"
		let csrf = "{{ csrf_token() }}"
	</script>

	<script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('sbadmin/vendor/select2/js/select2.min.js') }}"></script>

	<script src="{{ asset('js/author.js') }}"></script>

@endpush