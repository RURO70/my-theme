<aside class="sidebar col-md-4">
                <div class="widget redes-sociales">
                    <div class="titulo-seccion">
                        <h3>Síguenos</h3>
                        <div class="redes-sociales">
                            <a class="youtube" href="http://www.youtube.com/falconmasters">
                                <i class="icono fa fa-youtube-play"></i>
                                <span class="seguidores">130k</span>
                            </a>

                            <a class="twitter" href="http://www.twitter.com/falconmasters">
                                <i class="icono fa fa-twitter" ></i>
                                <span class="seguidores">6k</span>
                            </a>

                            <a class="facebook" href="http://www.facebook.com/falconmasters">
                                <i class="icono fa fa-facebook" ></i>
                                <span class="seguidores">6.5k</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget boletin">
                    <div class="titulo-seccion">
                        <h3>Suscribete</h3>
                        <form action="" class="formulario">
                            <label for="email">Suscribete a nuestro boletín</label>
                            <input type="email" id="email" placeholder="Correo Electronico" required>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
                
                <div class="widget ad">
                    <div class="contenedor-ad">
                        <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ad2.jpg" alt="publicidad"></a>
                    </div>
                </div>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : endif; ?>
            </aside>


