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
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
            </div>

            <div class="container shadow rounded border border-3 h-90 bg-white">
                <div class="row justify-content-between py-2 my-2">
                    <div class="col-12 col-sm-2 d-flex justify-content-between">
                        <button class="btn btn-outline-secondary dropdown">
                            <div class="text-nowrap bd-highlight">
                                <i class="fas fa-filter"></i> Filter
                            </div>
                        </button>
                        <button type="button" style="background-color:#6D5BD0; font-size:12px;" class="btn text-white font-inter-600" data-toggle="modal" data-target="#exampleModal" data-whatever=""><b>Edit</b></button>
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
                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <img src="{{asset('images/city1.jpg')}}" class="img-fluid" alt="">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Content-->
                        <div class="p-4">

                            <p class="lead font-weight-bold">{{$city->name}}</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
                                sint voluptatibus!
                                Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

                            <form class="d-flex justify-content-center">
                                <a class="btn btn-primary btn-md my-0 p" href="{{route('clients.index')}}">
                                    ver Clientes
                                    <i class="fas fa-users ml-1"></i>
                                </a>
                            </form>

                        </div>
                        <!--Content-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr>

                <!--Grid row-->
                <div class="row d-flex justify-content-center wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 text-center">

                        <h4 class="my-4 h4">Ciudades Adicionales</h4>

                        <p>Puedes hacer click en las ciudades adicionales para revisarlas.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="text-center col-lg-4 col-md-12 mb-4">

                        <img src="{{asset('images/city2.jpg')}}" class="img-fluid" alt="">
                        <h4 class="my-4 h4">{{'Nombre de ciudad Random'}}</h4>


                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="text-center col-lg-4 col-md-6 mb-4">

                        <img src="{{asset('images/city3.jpg')}}" class="img-fluid" alt="">
                        <h4 class="my-4 h4">{{'Nombre de ciudad Random'}}</h4>


                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="text-center col-lg-4 col-md-6 mb-4">

                        <img src="{{asset('images/city4.jpg')}}" class="img-fluid" alt="">
                        <h4 class="my-4 h4">{{'Nombre de ciudad Random'}}</h4>


                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
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
    <script src="{{asset('css/app.js')}}"></script>
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
