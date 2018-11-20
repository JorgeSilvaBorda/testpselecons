<!-- navbar -->  
<nav class="navbar navbar-expand-lg fixed-top ">  
    <a onclick="cargar(modulos.principal.nombre);" class="navbar-brand" href="#">TestPSelecons</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
            <li class="nav-item" onclick="cargar(modulos.nosotros.nombre);">
                <a class="nav-link" data-value="nosotros" href="#">Nosotros</a>
            </li>  
            <li class="nav-item"  onclick="cargar(modulos.servicios.nombre);">
                <a class="nav-link " data-value="servicios" href="#">Servicios</a>    
            </li>
            <li class="nav-item"  onclick="cargar(modulos.productos.nombre);"> 
                <a class="nav-link " data-value="productos" href="#">Productos</a>
            </li>   
            <li class="nav-item"  onclick="cargar(modulos.metodosCompra.nombre);">  
                <a class="nav-link " data-value="metodos-compra" href="#">Métodos de compra</a>
            </li>  
            <li class="nav-item"  onclick="cargar(modulos.contacto.nombre);"> 
                <a class="nav-link " data-value="contacto" href="#">Contacto</a>
            </li> 
        </ul> 
    </div>
</nav>
