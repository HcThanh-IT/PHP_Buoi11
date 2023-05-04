<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="http://kit.fontawesome.com/d8627d2dca.js" crossorigin="anonymous"></script>
	<title>Employee Manager</title>
</head>
<body>
    <!-- header -->
<div class="container p-4">
	<div class="row">
		<div class="col p-3 bg-primary text-white text d-flex">
			<h3>Employee manager</h3>
			<div class="d-flex ms-auto">
				<button class="btn btn-danger btn-sm" data-bs-target="#modal_delete" data-bs-toggle="modal">Delete All</button>
				&nbsp;
				<button class="btn btn-success btn-sm" data-bs-target="#modal_add" data-bs-toggle="modal">Add New Employee</button>				
			</div>
		</div>
		<!-- Modal Add-->
		

		<!-- Modal Delete all-->
		
	</div>
</div>
<!-- content -->
@yield('content')
<!-- footer -->
<div class="container">
	<div class="row">
		<div class="col d-flex bg-light m-2">
			<div class="my-auto">Showing 5 out of 25 entries</div>
			<div class="d-flex ms-auto pt-3">
				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-end">
				    <li class="page-item disabled">
				      <a class="page-link">Previous</a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#">Next</a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</div>
</body>
</html>