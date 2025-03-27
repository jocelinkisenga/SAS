@extends("admin.admin")
@section("content")

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					<div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Nouveaux candidats</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Secteur</th>
											<th class="d-none d-xl-table-cell">Business plan</th>
											<th class="d-none d-xl-table-cell">Responsabilite sociale</th>
											<th>Plan d'etudes</th>
											<th class="d-none d-md-table-cell">Etats financiers</th>
											<th class="d-none d-md-table-cell">Plan de croissance</th>
											<th class="d-none d-md-table-cell">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($candidates as $candidate)
																				<tr>
											<td> <i class="align-middle" data-feather="user"></i> {{$candidate->SC}}</td>
											<td class="d-none d-xl-table-cell"> <a href=""><i class="align-middle" data-feather="eye"></i></a> </td>
											<td class="d-none d-xl-table-cell"> <i class="align-middle" data-feather="eye"></i> </td>
											<td><span class="badge bg-warning"> <i class="align-middle" data-feather="eye"></i> </span></td>
											<td class="d-none d-md-table-cell"> <i class="align-middle" data-feather="eye"></i> </td>
											<td class="d-none d-md-table-cell"> <i class="align-middle" data-feather="eye"></i> </td>
											<td class="d-none d-md-table-cell"> <i class="align-middle" data-feather="eye"></i> </td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>

					</div>

				</div>
			</main>

@endsection