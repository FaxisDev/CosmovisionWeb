@extends('layout')

@section('title', 'Cosmovision - Una Pagina de Michel V')

@section('content')


    <div class="container">


        <div class="row">
            <div class="col-12 mb-3">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/img1.jpeg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Si dominamos nuestra mente, la felicidad vendrá.</h5>
                                <p>Dalai Lama</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Las personas solo ven lo que están dispuestas a ver.</h5>
                                <p>Ralph Waldo Emerson.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/img3.jpg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>La amistad siempre ha pertenecido al centro de mi viaje espiritual.</h5>
                                <p>Henri Nouwen</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Atras</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <center><img width="100px" src="{{ asset('images/arte.png') }}" class="img-fluid" alt="..."></center>
                        <h5 class="card-title">Cultura</h5>
                        <p class="card-text">

                            La cultura es el conjunto de todas las formas, los modelos o los patrones, explícitos o
                            implícitos, a través de los cuales una sociedad regula el comportamiento de las personas que la
                            conforman pues en un sentido global abarca todo el hacer humano; el arte, el conocimiento, pero
                            también las formas de ser y de pensar, los valores, las tradiciones y las creencias.
                        </p>
                        <a href="https://es.wikipedia.org/wiki/Cultura" class="btn btn-sm btn-primary">Fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <center><img width="100px" src="{{ asset('images/cultura.png') }}" class="img-fluid" alt="..."></center>
                        <h5 class="card-title">Arte & Cultura</h5>
                        <p class="card-text">Arte y cultura son conceptos muy habitualmente emparejados para referirse a los
                            productos artísticos y culturales que definen los rasgos más importantes de una civilización,
                            especialmente en sus componentes más elitistas y sublimes (la alta cultura), pero también en lo
                            que define su forma de vida y su manera de entender a sí misma y al mundo (cosmovisión,
                            ideología).</p>
                        <a href="https://prezi.com/umn_ax51nndv/semejanzas-y-diferencias-entre-arte-y-cultura/#:~:text=Arte%20y%20cultura%20son%20conceptos,vida%20y%20su%20manera%20de"
                            class="btn btn-sm btn-primary">Fuente</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-8">
                <div class="card">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Cosmovisión
                                Mesoamericana</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Arte
                                prehispánico en la región de Mesoamérica</button>

                        </div>
                    </nav>
                    <div class="card-body">

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab" tabindex="0">
                                <p>En Mesoamérica ésta fue la base para explicar los orígenes y la organización del cosmos;
                                    el
                                    nacimiento de los dioses y la creación de la humanidad; las relaciones de los dioses
                                    entre sí;
                                    entre
                                    los hombres y sus dioses; y entre los hombres y la naturaleza.</p>
                                <p> Es un conjunto de ideas, imágenes y representaciones construidas por el hombre para
                                    interpretar
                                    y
                                    explicar el origen del universo y de la realidad, pero también para ubicarse y actuar
                                    sobre
                                    ella.</p>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                                tabindex="0">
                                <p> Al entender que el arte prehispánico o precolombino fue todo aquello que desarrollaron
                                    las
                                    culturas de los pueblos americanos ante de la llegada de los españoles, podemos
                                    referirnos, más
                                    allá de esto, a un tiempo determinado en el que fueron desarrollados muchas grandes
                                    obras de
                                    arte de gran importancia hoy día para la sociedad.

                                </p>
                                <p>Es importante destacar que, una vez llegaron los españoles, encontraron que no todas las
                                    culturas, según su posición geográfica, se encontraban en un desarrollo que le igualara
                                    a otra.
                                    Se hallaron, por el contrario, muchas más diferencias que semejanzas.</p>
                                <p> Todo esto les dio a entender, tanto a arqueólogos como antropólogos, que era necesario
                                    delimitar
                                    en
                                    dos áreas todo lo que hallaron. Por un lado, tenemos a lo llamado América nuclear, cuyos
                                    pueblos
                                    que
                                    comprenden son México, así como parte de América Central y la Cordillera de los Andes,
                                    entre
                                    tanto,
                                    también todo lo que se abarca a partir de Colombia hasta Chile.</p>

                                <p>Tenemos entonces que, a lo que llamamos periodo clásico, comenzaría a partir del año 292
                                    aproximadamente, con la cultura Maya, aunque culminaría hacia 900, siendo así, según
                                    historiadores,
                                    el máximo auge del arte prehispánico.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 d-flex align-items-center justify-content-center">


                    <center><img width="190px" src="{{ asset('images/mexico.png') }}" class="img-fluid" alt="..."></center>

            </div>
        </div>
    </div>
@endsection
