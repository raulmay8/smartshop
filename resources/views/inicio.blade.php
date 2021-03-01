@extends('plantilla')
@section('titulo')
Inicio
@endsection
@section('contenido')


<div class="new_arrivals">
	<div class="container">
		<h3><span>Nuevas </span>marcas</h3>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos minus autem fugiat ipsum minima odio aliquid labore. Sit eius nesciunt culpa ipsum. Fugiat ut temporibus vel aliquam vitae id nesciunt?</p>
		<div class="new_grids">
			<div class="col-md-4 new-gd-left">
				<img src="images/wed1.jpg" alt=" " />
				<div class="wed-brand simpleCart_shelfItem">
					<h4>Nuevas collecciones</h4>
					<h5>Con 50% de descuento</h5>
					<p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2" href="#">Añadir a lista </a></p>
				</div>
			</div>
			<div class="col-md-4 new-gd-middle">
				<div class="new-levis">
					<div class="mid-img">
						<img src="images/levis1.png" alt=" " />
					</div>
					<div class="mid-text">
						<h4>up to 40% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-levis">
					<div class="mid-text">
						<h4>up to 50% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="mid-img">
						<img src="images/dig.jpg" alt=" " />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 new-gd-left">
				<img src="images/wed2.jpg" alt=" " />
				<div class="wed-brandtwo simpleCart_shelfItem">
					<h4>Spring / Summer</h4>
					<p>Shop Men</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection
