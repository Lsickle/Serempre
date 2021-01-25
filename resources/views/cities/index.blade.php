<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Ciudades - Serempre</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Revalia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />

</head>

<body>
    <div class="content py-3  min-vh-90 bg-light" id="mainContent">
        <div class="container">
            <div class="sticky-top">
                <div class="row bg-light">
                    <div class="col">
                        <p class="float-left text-secondary text-uppercase font-inter-700" style="font-size:13px;">{{'cities List'}}</p>
                    </div>
                    <div class="col">
                        <a class="float-right font-inter-700 text-secondary" href="#">{{ Auth::user()->name}}</a>
                    </div>
                </div>
                <div class="row bg-light mb-2">
                    <div class="col">
                        <ul class="nav d-flex flex-wrap-reverse flex-md-row border-bottom">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle py-0 px-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">07/11/2020-07/11/1984</a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <h6 class="dropdown-header">Seleccione la Ciudad</h6>
                                    <a class="dropdown-item px-3" href="#">Agosto</a>
                                    <a class="dropdown-item px-3" href="#">Septiembre</a>
                                    <a class="dropdown-item px-3" href="#">Octubre</a>
                                    <a class="dropdown-item px-3 active" href="#">Noviembre</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item px-3" href="#">Ultimo Año </a>
                                    <a class="dropdown-item px-3" href="#">Ultimo mes</a>
                                    <a class="dropdown-item px-3" href="#">Ultimo Semana</a>
                                    <div class="dropdown-divider"></div>
                                    <form class="form">
                                        <a class="dropdown-item px-3" href="#">
                                            <label class="my-0" for="inlineFormInputGroupDate1">Desde</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text px-2">
                                                        <i class="fas fa-calendar-day"></i>
                                                    </div>
                                                </div>
                                                <input type="date" class="form-control" id="inlineFormInputGroupDate1" placeholder="Desde" describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    escoge una fecha valida.
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-3" href="#">
                                            <label class="my-0" for="inlineFormInputGroupDate2">Hasta</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text px-2">
                                                        <i class="fas fa-calendar-day"></i>
                                                    </div>
                                                </div>
                                                <input type="date" class="form-control" id="inlineFormInputGroupDate2" placeholder="Desde" describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    escoge una fecha valida.
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-3" href="#">
                                            <button type="submit" class="btn btn-block btn-primary">Buscar</button>
                                        </a>
                                    </form>
                                </div>
                            </li>
                            <li class="flex-grow-1 nav-item">
                                <a class="text-secondary float-right"><span style="color: #6D5BD0"><b>{{'1.895,15'}}</b></span> Hours</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container shadow rounded border border-3 h-90 bg-white">
                <div class="row justify-content-between py-2 my-2">
                    <div class="col-12 col-sm-2 d-flex justify-content-between">
                        <button class="btn btn-outline-secondary dropdown">
                            <div class="text-nowrap bd-highlight">
                                <i class="fas fa-filter"></i> Filter
                            </div>
                        </button>
                        <button type="button" style="background-color:#6D5BD0; font-size:12px;" class="btn text-white font-inter-600" data-toggle="modal" data-target="#exampleModal" data-whatever=""><b>CREATE</b></button>
                    </div>
                    <div class="col-12 col-sm-5 my-sm-0 my-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover table-sm text-left mb-0" style="color:#6E6893 !important;">
                            <thead class="font-inter-600" style="background-color: #F4F2FF;">
                                <tr>
                                    <th id="th-1" scope="col">#</th>
                                    <th id="th-2" scope="col">Creada</th>
                                    <th id="th-3" scope="col">Nombre</th>
                                    <th id="th-4" scope="col">SHOW</th>
                                    <th id="th-5" scope="col">Add</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $city)
                                <tr>
                                    <th class="align-middle" scope="row"><i class="far fa-check-square"></i></th>
                                    <td class="align-middle" scope="col">
                                        <div class="text-nowrap">
                                            {{$city->created_at}}
                                            <br>
                                            @if($loop->odd)
                                            <span class="badge badge-pill badge-primary">
                                                • Remote
                                            </span>
                                            @else
                                            <span class="badge badge-pill badge-local">
                                                • Local
                                            </span>
                                            @endif

                                        </div>
                                    </td>
                                    <td class="align-middle" scope="col">
                                        <div class="text-nowrap">
                                            <div class="text-dark">{{$city->name}}</div>
                                            Project {{$loop->index + 1}}
                                        </div>
                                    </td>
                                    <td class="align-middle" scope="col">
                                        <a href="{{route('cities.show', ['city' => $city])}}" class="btn btn-sm btn-info text-white">
                                            <div class="text-nowrap">Show</div>
                                        </a>
                                    </td>
                                    <td class="align-middle" scope="col">
                                        <button type="button" class="btn btn-primary clientemodalbutton" data-toggle="modal" data-target="#exampleModal2" data-id="{{$city->id}}"><i class="fas fa-user"></i> Nuevo Cliente</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row flex-row d-flex" style="background-color: #F4F2FF; color:#6E6893 !important;">
                    <div class="col my-auto">
                        <div class="text-left">filas por página: {{$cities->count()}}</div>
                    </div>

                    <div class="col">
                        <div class="text-right">
                            <div class="mx-3">{{$cities->firstItem()}}-{{$cities->lastItem()}} of {{$cities->total()}}</div>
                            <a href="{{$cities->url(1)}}"><i class="px-0 fas fa-angle-double-left"></i></a>
                            <a href="{{$cities->previousPageUrl()}}"><i class="px-1 fas fa-chevron-left"></i></a>
                            <a href="{{$cities->previousPageUrl()}}"><i class="px-1">{{$cities->currentPage() > 1 ? $cities->currentPage() - 1 : ''}}</i></a>
                            <i class="px-0">{{$cities->currentPage()}}</i>
                            <a href="{{$cities->nextPageUrl()}}"><i class="px-1">{{$cities->currentPage() + 1}}</i></a>
                            <a href="{{$cities->nextPageUrl()}}"><i class="px-1 fas fa-chevron-right"></i></a>
                            <a href="{{$cities->url($cities->lastPage())}}"><i class="px-0 fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva Ciudad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal well" data-async data-target="#exampleModal" action="{{route('cities.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nombre:</label>
                            <input maxLength="120" name="name" type="text" class="form-control" id="name">
                            <span class="invalid-feedback" role="alert">
                                <strong id="errorMessage"></strong>
                            </span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                        <button id="submitButton" type="submit" value="Save" name="save" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade modalcliente" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal well" data-async data-target="#exampleModal" action="{{route('clients.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="input-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="nombre del cliente" aria-label="name" aria-describedby="basic-addon1">
                                <span class="invalid-feedback" role="alert">
                                    <strong id="errorMessage"></strong>
                                </span>
                            </div>
                        </div>
                        <input name="city_id" class="d-none" type="text" id="city_id" value="">
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
                        <button id="submitButton2" type="submit" value="Save" name="save" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script>
        $(document).ready( function() {
        $('.modal form').on('submit', function(e) {
            e.preventDefault();
			$.ajaxSetup({
			  headers: {
				  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			  }
            });
            $.ajax({
				url: $(this).attr('action'),
				method: 'POST',
				data:{
                    "_token": "{{ csrf_token() }}",
                    "name": $('input[name=name]').val()
                },
				beforeSend: function(){
					let buttonsubmit = $('#submitButton');
                    buttonsubmit.on('click', function(event) {
                        event.preventDefault();
                    });
                    buttonsubmit.disabled = true;
                    buttonsubmit.prop('disabled', true);
					buttonsubmit.empty();
					buttonsubmit.append(`<i class="fas fa-sync fa-spin"></i> Sending...`);
				},
				success: function(response){
					let buttonsubmit = $('#submitButton');
					let errormessage = $('#errorMessage');
					let input = $('#name');

                    buttonsubmit.unbind("click");
                    buttonsubmit.disabled = false;
                    buttonsubmit.prop('disabled', false);
                    buttonsubmit.prop('class', 'btn btn-primary');
                    buttonsubmit.empty();
                    buttonsubmit.append(`Save`);
                    input.prop('class', 'form-control');
                    errormessage.empty();

                    let newRow = $('tbody');
                    newRow.append(`
                    <tr>
                        <th class="align-middle" scope="row"><i class="far fa-check-square"></i></th>
                        <td class="align-middle" scope="col">
                            <div class="text-nowrap">
                                `+response['created_at']+`
                                <br>
                                <span class="badge badge-pill badge-local">
                                • Local
                                </span>
                            </div>
                        </td>
                        <td class="align-middle" scope="col">
                            <div class="text-nowrap">
                                <div class="text-dark">`+response['name']+`</div>
                                Project
                            </div>
                        </td>
                        <td class="align-middle" scope="col">
                        <a href="/cities/`+response['id']+`" class="btn btn-sm btn-info text-white">
                                <div class="text-nowrap">Show</div>
                            </a>
                        </td>
                        <td class="align-middle" scope="col">
                            <button type="button" class="btn btn-primary clientemodalbutton" data-toggle="modal" data-target="#exampleModal2" data-id="`+response['id']+`"><i class="fas fa-user"></i> Nuevo Cliente</button>
                        </td>
                    </tr>
                    `);


                    toastr.success('saved');
				},
				error: function(error){
					let buttonsubmit = $('#submitButton');
					let errormessage = $('#errorMessage');
					let input = $('#description');

                    buttonsubmit.unbind("click");
                    buttonsubmit.disabled = false;
                    buttonsubmit.prop('disabled', false);
                    buttonsubmit.prop('class', 'btn btn-primary');
                    buttonsubmit.empty();
                    buttonsubmit.append(`Save`);
                    input.prop('class', 'form-control is-invalid');
                    errormessage.empty();

                    errormessage.append(error['responseJSON']['error']);

					toastr.error('error');
				},
				complete: function(){
                    $('#exampleModal').modal('hide');
                    $('input[name=name]').val('');
				}
            })

        })
    });
    $(document).ready( function() {
        $('.modalcliente form').on('submit', function(e) {
            e.preventDefault();
			$.ajaxSetup({
			  headers: {
				  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			  }
            });
            $.ajax({
				url: $(this).attr('action'),
				method: 'POST',
				data:{
                    "_token": "{{ csrf_token() }}",
                    "name": $('input[name=name]').val(),
                    "city_id": $('input[name=city_id]').val()

                },
				beforeSend: function(){
					let buttonsubmit = $('#submitButton');
                    buttonsubmit.on('click', function(event) {
                        event.preventDefault();
                    });
                    buttonsubmit.disabled = true;
                    buttonsubmit.prop('disabled', true);
					buttonsubmit.empty();
					buttonsubmit.append(`<i class="fas fa-sync fa-spin"></i> Sending...`);
				},
				success: function(response){
					let buttonsubmit = $('#submitButton');
					let errormessage = $('#errorMessage');
					let input = $('#name');

                    buttonsubmit.unbind("click");
                    buttonsubmit.disabled = false;
                    buttonsubmit.prop('disabled', false);
                    buttonsubmit.prop('class', 'btn btn-primary');
                    buttonsubmit.empty();
                    buttonsubmit.append(`Save`);
                    input.prop('class', 'form-control');
                    errormessage.empty();
                    toastr.success('saved');
				},
				error: function(error){
					let buttonsubmit = $('#submitButton');
					let errormessage = $('#errorMessage');
					let input = $('#description');

                    buttonsubmit.unbind("click");
                    buttonsubmit.disabled = false;
                    buttonsubmit.prop('disabled', false);
                    buttonsubmit.prop('class', 'btn btn-primary');
                    buttonsubmit.empty();
                    buttonsubmit.append(`Save`);
                    input.prop('class', 'form-control is-invalid');
                    errormessage.empty();

                    errormessage.append(error['responseJSON']['error']);

					toastr.error('error');
				},
				complete: function(){
					$('#exampleModal2').modal('hide');
                    $('input[name=name]').val('');
				}
            })

        })
    });
    $(document).on("click", ".clientemodalbutton", function () {
        var id = $(this).data('id');
        $(".modal-body #city_id").val( id );
            // As pointed out in comments,
            // it is unnecessary to have to manually call the modal.
            // $('#addBookDialog').modal('show');
    });
    </script>
    <script type="text/javascript">
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "6000",
            "extendedTimeOut": "3000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        function NotifiTrue(Mensaje) {
            toastr.success(Mensaje);
        }

        function NotifiFalse(Mensaje) {
            toastr.error(Mensaje);
        }
    </script>
</body>

</html>
