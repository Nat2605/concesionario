<div class="formulario">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well well-sm">
                                <form class="form-horizontal" method="post">
                                    @csrf
                                    <fieldset>
                                        <legend class="text-center header">Accede</legend>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                                    class="fa fa-envelope-o bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="email" name="email" type="email" placeholder="Email"
                                                    class="form-control" value="{{old('email')}}">
                                                     @error('email')
                                                        <p>{{$message}}</p>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><i
                                                    class="fa fa-phone-square bigicon"></i></span>
                                            <div class="col-md-8">
                                                <input id="password" name="password" type="password" placeholder="password"
                                                    class="form-control"  value="">
                                                    @error('password')
                                                        <p>{{$message}}</p>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <div class="boton">  
                                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                                </div>
                                            </div>
                                            <p>Si todavía no te has registrado pulsa <a href="/registrar">aquí</a></p>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>