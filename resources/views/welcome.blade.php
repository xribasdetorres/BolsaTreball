@extends('layouts.public_layout')

@section('content')
	<div class="col-xs-12 image-slider black">
		slider
	</div>
	<div class="col-sm-6 col-xs-12 col-sm-offset-6 hidden-lg hidden-md mt20 search search-input">
		<div class="input-group col-xs-12">
			<input type="text" name="" class="form-control input-md" placeholder="Buscar">
			<span class="input-group-btn">
				<button class="btn btn-info btn-lg" type="button">
					<i class="glyphicon glyphicon-search"></i>
				</button>
			</span>
		</div>
	</div>
	<div class="col-xs-12 mt20">
		<div class="row">
			<!-- Div noticias -->
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 noticias">
				<div class="row">
					<!-- Bucle de noticias aquí -->
					<div class="col-xs-12 noticia mt20 black">
						<div class="row">
							<div class="col-xs-12">
								<p class="title">Guía rapida para diferenciar qué tipos de azucar consumes y cúales son nocivos</p>
							</div>
							<div class="col-xs-12">
								<p class="info">Enero 12, 2017 - <i>Marçal Obiols</i></p>
							</div>
						</div>
					</div>
					<!-- Fin del bucle -->
					<div class="col-xs-12 noticia mt20 black">
						noticia
					</div>
					<div class="col-xs-12 noticia mt20 black">
						noticia
					</div>
					<div class="col-xs-12 noticia mt20 black">
						noticia
					</div>
				</div>
			</div>
			<!-- Div barra derecha -->
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 right-bar padding0">
				@include('includes.right-bar')
			</div>
		</div>
	</div>
@stop


