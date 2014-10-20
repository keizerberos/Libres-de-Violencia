<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Proyecto Mujer');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		//echo $this->html->css('client');
		//echo $this->html->css('fonts');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->html->css('style');
		//echo $this->html->css('bootstrap.min');
		echo $this->Html->script('jquery-1.11.1.min');
		echo $this->html->script('bootstrap.min');
		echo $this->html->script('ssprojects');
		echo $this->html->script('shop');
		echo $this->html->script('plugin');
		echo $this->html->script('jsapi');
	?>
</head>
<body id="s-amp-s-projects-danish-clothing-from-crotch-to-top" class="template-index" >
<div id="nav-main" class="navbar navbar-fixed-top" role="navigation">
			<div class="row visible-xs">

				<div class="col-xs-4 text-right">
                <!--	<div class="cart">
                        <a href="/cart" title="items"><i class="fa fa-shopping-cart"></i> Cart (0)</a>
                    </div>-->
				</div>
                <div class="col-xs-4 text-center">
                    <a href="/MyWeb/" title="Home">
                    <img src="/MyWeb/img/ss-projects-logo.png" alt="S&amp;S-Projects" />
                    </a><!-- #logo -->
				</div>
                <div class="col-xs-4 text-left">
                	<div class="menu-toggle">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-responsive"><i class="fa fa-bars"></i> Menu</button>
                    </div>
				</div>
                <div id="navbar-responsive" class="collapse navbar-collapse col-xs-12">
                    <ul class="nav navbar-nav">
                        <li>
												<?php echo $this->Html->link(
																		'Informate',
																		array(
																				'controller' => 'users',
																				'action' => 'informacion'
																		)
																);
												?>
                        </li>

                        <li>
												<?php echo $this->Html->link(
																		'Testimonion Reales',
																		array(
																				'controller' => 'users',
																				'action' => 'testimonios'
																		)
																);
												?>
                        </li>

                        <li>
												<?php echo $this->Html->link(
																		'Redactanos tu Historia',
																		array(
																				'controller' => 'users',
																				'action' => 'redacta'
																		)
																);
												?>
                        </li>

                        <li>
												<?php echo $this->Html->link(
																		'Cuentanos tu Historia',
																		array(
																				'controller' => 'users',
																				'action' => 'cuenta'
																		)
																);
												?>
                        </li>

                        <li>
												<?php echo $this->Html->link(
																		'Te Ayudamos',
																		array(
																				'controller' => 'users',
																				'action' => 'ayuda'
																		)
																);
												?>
                        </li>
                    </ul>
                </div>
			</div>
			<div class="row hidden-xs">
				<div class="col-sm-2 col-md-2 col-lg-1 text-right">
                    <a href="/MyWeb/" title="Home">
                    <img src="/MyWeb/img/ss-projects-logo.png" alt="S&amp;S-Projects" />
                    </a><!-- #logo -->
				</div>
				<div class="col-sm-8 col-md-8 col-lg-10 text-center">
					<ul class="nav navbar-nav">
							<li>
							<?php echo $this->Html->link(
													'Informate',
													array(
															'controller' => 'users',
															'action' => 'informacion'
													)
											);
							?>
							</li>

							<li>
							<?php echo $this->Html->link(
													'Testimonion Reales',
													array(
															'controller' => 'users',
															'action' => 'testimonios'
													)
											);
							?>
							</li>

							<li>
							<?php echo $this->Html->link(
													'Redactanos tu Historia',
													array(
															'controller' => 'users',
															'action' => 'redacta'
													)
											);
							?>
							</li>

							<li>
							<?php echo $this->Html->link(
													'Cuentanos tu Historia',
													array(
															'controller' => 'users',
															'action' => 'cuenta'
													)
											);
							?>
							</li>

							<li>
							<?php echo $this->Html->link(
													'Te Ayudamos',
													array(
															'controller' => 'users',
															'action' => 'ayuda'
													)
											);
							?>
							</li>
          </ul>
				</div>
			<!--	<div class="col-sm-2 col-md-2 col-lg-1">
                	<div class="cart">
                        <a href="/cart" title="items"><i class="fa fa-shopping-cart"></i> Cart (0)</a>
                    </div>
				</div>-->
			</div>
	</div>
  <div id="wrapper">


<div id="home" class="carousel slide" data-ride="carousel">
    <div class="container carousel-caption">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="hidden-xs">No mas violencia contra la mujer <em>APLICACION PRO MUJER</em></h1><br><br>
                <h1 class="visible-xs">No mas violencia contra la mujer<em>APLICACION PRO MUJER<br></em></h1>

                <a class="video btn btn-outline" href="video"><span>Mira el Video <i class="fa fa-angle-right"></i></span></a>
                <a class="video-popup btn btn-outline" data-toggle="modal" data-target="#videopopup" href=""><span>Mira el Video<i class="fa fa-angle-right"></i></span></a>
            </div>
        </div>
    </div>
    <img class="visible-xs" src="/MyWeb/img/Slide01.jpg" alt="From crotch to top">
    <!-- Wrapper for slides -->
    <div class="carousel-inner hidden-xs">
        <div class="item active">
            <img src="/MyWeb/img/Slide01.jpg" alt="From crotch to top">
        </div>
        <div class="item">
            <img src="/MyWeb/img/Slide02.jpg" alt="From crotch to top">
        </div>
        <div class="item">
            <img src="/MyWeb/img/Slide03.jpg" alt="From crotch to top">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control hidden-xs" href="#home" data-slide="prev">
        <span></span>
    </a>
    <a class="right carousel-control hidden-xs" href="#home" data-slide="next">
        <span></span>
    </a>

</div>
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>
<?php echo $this->element('sql_dump'); ?>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center social">
              <!---  <a class="facebook" target="_blank" href="https://www.facebook.com/SSProjectsDK13"></a>
                <a class="instagram" target="_blank" href="http://instagram.com/ssprojects"></a>
                <a class="vimeo" target="_blank" href="http://vimeo.com/ssprojects2013"></a> -->
            </div>
        </div>
        <div class="row">
            <div id="infolinks" class="col-xs-12 text-center">
                PROJECTO DAL BOLIVIA 2014
            </div>
        </div>
         <div class="row">
            <div class="col-xs-12 text-center">
                <a class="scrollto" href="#home">
                <img src="/MyWeb/img/ss-projects-logo.png" alt="S&amp;S-Projects" />
				</a>
            </div>
        </div>
    </div>
</div>
<div id="legal-notice">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 text-center visible-xs visible-sm"><address>La Paz - Bolivia<br>  ® Fanatic Code <br> Telf: 2260609</address><br></div>
          <div class="col-xs-12 col-sm-12 text-center visible-xs visible-sm"><address><a href="" data-toggle="modal" data-target="#terms">Licencia Aplicacion</a><br><a href="" data-toggle="modal" data-target="#faq">Programadores</a><br><a href="mailto:"></a></address></div>
          	<div class="col-md-7 hidden-xs hidden-sm"><address>La Paz - Bolivia  ® Fanatic Code  Telf: 2260609</address></div>
          <div class="col-md-5 hidden-xs hidden-sm"><address><a href="" data-toggle="modal" data-target="#terms">Licencia Aplicacion</a><a href="" data-toggle="modal" data-target="#faq">Programadores</a><a href="mailto:"></a></address></div>
            <div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog inverse">
                <div class="modal-content">
                    <div class="modal-body text-center">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="/MyWeb/img/ss-projects-logo.png" alt="S&amp;S-Projects" /></button>
                      <h2>® Fanatic Code <em> Licencia Aplicacion</em></h2>
                      <h3>Confirmation</h3>
                      <p>By sending an order on mail you are confirming your order, in which the following terms and conditions is entered into. When we have received your order, you will receive an e-mail confirming your order (This e-mail will be send manually and therefore the time from when placing the order to receive the confirmation e-mail may vary – max. 24 hours). We reserve the right not to deliver in the event that the stock level was incorrect at the time of receiving the order. Should we be unable to deliver the customer has two possibilities: we can return the money or the customer can spend them on other items from our shop. In this case we will contact the customer asap.</p>
                      <h3>Returns</h3>
                      <p>In case our products do not fit the customer, the customer has the possibility to return it and get either another size or another product or to get the money returned. It is our responsibility that the customer received its products. In case of a return it is the customer’s responsibility that we receive the products – likewise the customer is responsible for return postage. Furthermore the products are to be returned in original condition. S&amp;S-Projects reserves the right to refuse any returns which do not comply with the above criteria – it means if the sale value of the product obviously decreased as result of misuse we reserve the right not to change the product.
</p>
                      <h3>Prices</h3>
                      <p>All prices are included vat, taxes and postage. We run a free-postage-conpect no matter the size of the order.</p>
                      <h3>Warranty</h3>
                      <p>If any warranty issues occurs to products sold from S&amp;S-Projects I/S – please contact us immediately.</p>
                      <p>Partly warranty on products sold from S&amp;S-Projects I/S. All legal rights relinquishes with payment.</p>
                    </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          	<div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog inverse">
                <div class="modal-content">
                    <div class="modal-body text-center">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="/MyWeb/img/ss-projects-logo.png" alt="S&amp;S-Projects" /></button>
                      <h2>® Fanatic Code <em> Equipo</em></h2>
                      <h3>Has my order been shipped yet?</h3>
                      <p>All orders are shipped within 1-4 business days.</p>
                      <h3>What should I do if I want to return my product?</h3>
                      <p>In case our products do not fit the customer, the customer has the possibility to change it either to another size or another item of the same pricing, or to get their money back. It is our responsibility that the customer received its products. In case of a return it is the customer’s responsibility that we receive the product.</p>
                      <h3>What should I do if I haven't received my order?</h3>
                      <p>If you haven’t received your order within 5 days send an email to shop@ssprojects.dk. Then we will look in to it.</p>
                      <h3>Why can't I pay with my creditcard?</h3>
                      <p>Internet payment options in Denmark are very few. The market situation right now points towards that the former danish company Nets A/S (now held by, among others, former US president candidate Mitt Romney) is having a monopoly on exactly internet payment.</p>
                      <p>Nets and its subsidiary company Teller A/S exploit this by letting Nets administrate Visa Dankort and letting Teller administrate all other type of cards. By doing this, they force all webshops who want a credit card payment solution to pay all charges twice - including start up fee and monthly charges. Furthermore, with countless restrictions and prohibitions, the danish government indirectly insures they will not loose their market share.</p>
                      <p>This whole totalitarian way of handling the situation differs a lot from what we think is an acceptable way of doing business. As such, this is the reason why we have chosen not to support Nets and their associates.</p>
                      <p>Technically our payment method it is not as smart, but we believe that mobile payment will increase extremely in the forthcoming years. We hope you will support us and the future of payment methods.</p>
                      <h3>Shipping costs</h3>
                      <p>All prices are included vat, taxes and postage. We run a free-postage-conpect no matter the size of the order (within Denmark). The following shipping charges will be added to your order if you want an item sent out of Denmark:</p>
                      <p>Europe: 10 euros</p>
                      <p>Rest of the world: 15 euros</p>
                    </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
    </div>
</div>
  </div><!-- end of #wrapper -->


</body>
</html>
