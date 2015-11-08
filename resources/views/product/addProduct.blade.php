<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/ecommerce_admin_products.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Product:: Add New</title>
<!-- InstanceEndEditable -->
<!-- OCK front end icons css --> 
<link type="text/css" rel="stylesheet" href="icons/font-awesome.min.css"> 

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="images/icons/favicon.ico" rel="shortcut icon">
   
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300" rel="stylesheet" id="googlefont">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    
 <!--Loading bootstrap css-->
<link type="text/css" rel="stylesheet" href="vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
<link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    
<!--LOADING SCRIPTS FOR PAGE-->
<link type="text/css" rel="stylesheet" href="vendors/bootstrap-datepicker/css/datepicker.css">
<link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.css">

<!--LOADING SCRIPTS FOR PAGE-->
<link type="text/css" rel="stylesheet" href="vendors/jquery-nestable/nestable.css">
    
    <!--Loading style vendors-->
<link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
<link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">

<!--Loading style-->
<link type="text/css" rel="stylesheet" href="css/style.css">  
<!--<link type="text/css" rel="stylesheet" href="css/style.css">-->
<link type="text/css" rel="stylesheet" href="css/style-mango.css" id="theme-style">
<link type="text/css" rel="stylesheet" href="css/vendors.css">
<link type="text/css" rel="stylesheet" href="css/themes/grey.css" id="color-style">
<link type="text/css" rel="stylesheet" href="css/style-responsive.css">

    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body>
<div>
<!--BEGIN TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
  <div id="wrapper"><!--BEGIN TOPBAR-->
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
          <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a id="logo" href="http://www.webqom.com/web88.html" target="_blank" class="navbar-brand"><img src="images/logo_web88.png"></a>          </div>
            
            	<div class="topbar-main">
                	<a id="logo" href="#" class="navbar-brand"><img src="images/logo.jpg"></a>
                    <a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>
                    
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control"/></div>
                </form>
                <ul class="nav navbar-top-links navbar-right">
					<li><a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-shopping-cart fa-fw"></i><span class="badge badge-blue">3</span></a></li>                
<li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img src="images/profile/image_hock.jpg" alt="" class="img-responsive img-circle"/>&nbsp;
                        Support Webqom
                        &nbsp;<span class="caret"></span></a>
<ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
                            <li>
                                <div class="navbar-content">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="images/profile/image_hock.jpg" alt="" class="img-responsive img-circle"/>

                                            <p class="text-center mtm">
                                            	<a href="#" data-target="#modal-change-avatar" data-toggle="modal" class="change-avatar">
                                                <small>Change Avatar</small>                                                </a></p>
                                      </div>
                                        <div class="col-md-7 col-xs-5"><span>Support Webqom</span>

                                            <p class="text-muted small">support@webqom.com</p>

                                            <div class="divider"></div>
                                            <!--<a href="#" class="btn btn-primary btn-sm">View Profile</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-footer">
                                    <div class="navbar-footer-content">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6"><a href="#" class="btn btn-default btn-sm" data-target="#modal-change-password" data-toggle="modal">Change Password</a></div>
                                            <div class="col-md-6 col-xs-6"><a href="#" class="btn btn-default btn-sm pull-right">Sign Out</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                      </ul>
                  </li>
                </ul>
          </div>
        </nav>
        <!--Modal Change Avatar start-->
                            <div id="modal-change-avatar" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Change Avatar</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                      <form class="form-horizontal">
                                        
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Avatar Image </label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> 
                                           	  <img src="images/profile/image_hock.jpg" alt="Avatar" class="img-responsive"><br/>
                                                <input id="exampleInputFile1" type="file"/>
                                              <br/>
                                                <span class="help-block">(Image dimension: 100 x 100 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Change Avatar-->
        <!--Modal Change Password start-->
                <div id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-login-label" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Change Password</h4></div>
                            <div class="modal-body">
                                <div class="form">
                                    <form class="form-horizontal">
                                        
                                        <div class="form-group">
                                        	<label for="password" class="control-label col-md-4">New Password</label>

                                            <div class="col-md-8">
                                            	<div class="input-icon"><i class="fa fa-key"></i> <input id="password" type="password" placeholder="New Password" class="form-control"/><span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label for="password" class="control-label col-md-4">Confirm New Password</label>

                                            <div class="col-md-8">
                                            	<div class="input-icon"><i class="fa fa-key"></i> <input id="password" type="password" placeholder="Confirm New Password" class="form-control"/><span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="col-md-offset-4 col-md-8">
                                               <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp;
                                              <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--END MODAL CHANGE PASSWORD-->
        <!--END TOPBAR-->
        
        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="clock"><strong id="get-date"></strong>

                        <div class="digital-clock">
                            <div id="getHours" class="get-time"></div>
                            <span>:</span>

                            <div id="getMinutes" class="get-time"></div>
                            <span>:</span>

                            <div id="getSeconds" class="get-time"></div>
                        </div>
                    </li>
                    <li><a href="dashboard.html"><i class="fa fa-laptop fa-fw"></i><span class="menu-title">Dashboard</span></a></li>

                    <li class="sidebar-heading"><h4>Orders</h4></li>
                    <li><a href="#"><i class="fa fa-shopping-cart fa-fw"></i><span class="menu-title">Orders</span><span class="fa arrow"></span><span class="badge badge-blue">3</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="orders_list.html">View All Orders</a></li>
							<li><a href="shipments_list.html">View All Shipments</a></li>
                        </ul>
                  </li>
                    <li class="sidebar-heading"><h4>Customers</h4></li>
                    <li><a href="administrators_list.html"><i class="fa fa-cog fa-fw"></i><span class="menu-title">Administrators</span></a> </li>
					<li><a href="customers_list.html"><i class="fa fa-user fa-fw"></i><span class="menu-title">Customers</span></a></li>
                    <li><a href="user_groups_list.html"><i class="fa fa-users fa-fw"></i><span class="menu-title">User Groups</span></a></li>
                    
                    <li class="sidebar-heading"><h4>Products</h4></li>
                    
                  <!-- InstanceBeginEditable name="EditRegion3" -->
                  <li><a href="categories_list.html"><i class="fa fa-cog fa-fw"></i><span class="menu-title">Categories</span></a> </li>
                  <li class="active"><a href="products_list.html"><i class="fa fa-wrench fa-fw"></i><span class="menu-title">Products</span></a></li>
                  <li><a href="filters_list.html"><i class="fa fa-filter fa-fw"></i><span class="menu-title">Filters</span></a></li>
                  <li><a href="brands_list.html"><i class="fa fa-list fa-fw"></i><span class="menu-title">Brands Setup</span></a></li>
                  <li><a href="colors_list.html"><i class="fa fa-pencil-square fa-fw"></i><span class="menu-title">Colors Setup</span></a></li>
                  <!-- InstanceEndEditable -->
                    <li class="sidebar-heading"><h4>Promotions</h4></li>
                    <li><a href="global_discounts_list.html"><i class="fa fa-cog fa-fw"></i><span class="menu-title">Global Discounts</span></a> </li>
					<li><a href="promo_codes_list.html"><i class="fa fa-qrcode fa-fw"></i><span class="menu-title">Promo Codes / Global Coupons</span></a></li>
                
                	<li><a href="newsletter_subscription_list.html"><i class="fa fa-envelope fa-fw"></i><span class="menu-title">Newsletter Subscription</span></a> </li>    
                    <li class="sidebar-heading"><h4>Banners</h4></li>
                    <li><a href="#"><i class="fa fa-check-circle fa-fw"></i><span class="menu-title">Index Banners</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="index_banner_top_list.html">Top Banner</a></li>
							<li><a href="index_middle_top_list.html">Middle Top Banner</a></li>
                            <li class="active"><a href="index_middle_bottom_list.html">Middle Bottom Banner</a></li>
                        </ul>
                    </li>
                    <li><a href="left_banner_list.html"><i class="fa fa-check-circle fa-fw"></i><span class="menu-title">Left Banners</span></a></li>
					<li><a href="left_promotion_banner_list.html"><i class="fa fa-check-circle fa-fw"></i><span class="menu-title">Left Promotion Banners</span></a></li>
                    <li><a href="product_banner_list.html"><i class="fa fa-check-circle fa-fw"></i><span class="menu-title">Product Banners</span></a></li>
                    
              </ul>
          </div>
    </nav>
        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Products</h1>
          </div>
          
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <ol class="breadcrumb page-breadcrumb">
            <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
            <li>Products &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
            <li><a href="products_list.html">Products Listing</a> &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
            <li class="active">Product - Add New</li>
          </ol>
          <!-- InstanceEndEditable --></div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Product <i class="fa fa-angle-right"></i> Add New</h2>
              <div class="clearfix"></div>
              <div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>The information has been saved/updated successfully.</p>
              </div>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>The information has not been saved/updated. Please correct the errors.</p>
              </div>
              <div class="pull-left"> Last updated: <span class="text-blue">15 Sept, 2014 @ 12.00PM</span> </div>
              <div class="clearfix"></div>
              <p></p>
              <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                <li><a href="#images" data-toggle="tab">Images</a></li>
                <li><a href="#description-feature" data-toggle="tab">Description &amp; Features</a></li>
                <li><a href="#shipping-info" data-toggle="tab">Shipping Information</a></li>
                <li><a href="#quantity-discount" data-toggle="tab">Quantity Discounts</a></li>
                <li><a href="#pwp" data-toggle="tab">PWP Setup</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                
                <div id="general" class="tab-pane fade in active">
                  <div class="portlet">
                    <div class="portlet-header">
                      <div class="caption">General</div>
                      <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
      
                    </div>
                    
                    
                    <div class="portlet-body">
                      <div class="row">
                          	<div class="col-md-12">
                            	
                                <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Status <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                  <div data-on="success" data-off="primary" class="make-switch">
                                                    <input type="checkbox" checked="checked"/>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Product Name <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="Product Name">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Product Code <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="Product Code">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            
                                            <div class="form-group">
                                            	<label for="inputFirstName" class="col-md-3 control-label">Promo Behaviour</label>

                                                <div class="col-md-6">
                                                    <div class="xss-margin"></div>
                                                    <div class="checkbox-list">
                                                        <label><input id="inlineCheckbox1" type="checkbox" value="option1"/>&nbsp; Hot</label>
                                                        <label><input id="inlineCheckbox2" type="checkbox" value="option2"/>&nbsp; New</label>
                                                        <label><input id="inlineCheckbox3" type="checkbox" value="option3"/>&nbsp; Sale</label>
                                                        <label><input id="inlineCheckbox4" type="checkbox" value="option4"/>&nbsp; PWP</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Category <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                	note to programmer: this is the multiple selection. Admin can select multiple categories for this product.
                                                	<select multiple="multiple" class="form-control" style="height: 350px;">
                                                        <option value="">-Audio Visual</option>
                                                    	<option value="">&nbsp; --Home Entertainment (30)</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Disc Player (8)</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Mini HiFi (3)</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Micro HiFi (2)</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Souncbar (4)</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Home Theatre System (5)</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---AV Component (8)</option> 
                                                        <option value="">&nbsp; --TV</option> 
                                                        <option value="">List all product category/sub category here.</option>   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Product Brand</label>
                                                <div class="col-md-4">
                                                	<select class="form-control">
                                                    	<option value="" selected="selected">Not defined</option>
                                                        <option>Philips</option>
                                                        <option>Panasonic</option>
                                                        <option>List all brands here</option>
                                                    </select>
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">This field lets you specify the product manufacturer. Customers will be able to use it to sort products in the storefront, search by it and view products for a selected manufacturer.</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Sale Price (RM) <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="0.00" value="0.00">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">The product sale price. The product is sold to customers at this price.</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">List Price (RM)</label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="0.00" value="0.00">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">Manufacturer suggested retail price.</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">Upload Large Image <span class='require'>*</span></label>
                                                    <div class="col-md-9">
                                                      <div class="text-15px margin-top-10px">
                                                      	<div class="text-blue text-12px">Thumbnails displayed on "Products Listing" pages. Thumbnails will be generated from detailed images automatically, but you can also upload them manually below.</div>
                                                    	<div class="xss-margin"></div>
                                                        <input id="exampleInputFile1" type="file"/>
                                                        <span class="help-block">(Image dimension: 800 x 800 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">Upload Thumbnail 1 Image</label>
                                                    <div class="col-md-9">
                                                      <div class="text-15px margin-top-10px">
                                                      	<div class="text-blue text-12px">Thumbnails displayed on "Products Listing" pages.</div>
                                                    	<div class="xss-margin"></div>
                                                        <input id="exampleInputFile1" type="file"/>
                                                        <span class="help-block">(Image dimension: 153 x 153 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">Upload Thumbnail 2 Image <br/>(on hover)</label>
                                                    <div class="col-md-9">
                                                      <div class="text-15px margin-top-10px">
                                                      	<div class="text-blue text-12px">Thumbnails displayed on "Products Listing" pages.</div>
                                                    	<div class="xss-margin"></div>
                                                        <input id="exampleInputFile1" type="file"/>
                                                        <span class="help-block">(Image dimension: 153 x 153 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                            	<label for="inputFirstName" class="col-md-3 control-label">Available Colors</label>

                                                <div class="col-md-6">
                                                	note to programmer: pls list all available colors here after administrator add new color in colors setup page.
                                                    <div class="xss-margin"></div>
                                                    <div class="checkbox-list">
                                                        <label class="checkbox-inline"><input id="inlineCheckbox1" type="checkbox" value="option1"/>&nbsp; White</label>
                                                        <label class="checkbox-inline"><input id="inlineCheckbox2" type="checkbox" value="option2"/>&nbsp; Silver</label> 
                                                        <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="option3"/>&nbsp; Grey</label>
                                                        <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="option3"/>&nbsp; Black</label>
                                                        <label class="checkbox-inline"><input id="inlineCheckbox3" type="checkbox" value="option3"/>&nbsp; Red</label>
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Quantity in Stock (items)</label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="" value="">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">Goods remaining in the warehouse.</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Low Level in Stock (items)</label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="" value="">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">Shows the minimum level of a product in the warehouse, at which the stock is considered to be low.</div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Manufacturer Part Number</label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="" value="">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">The manufacturers part number for this item.</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Ships In</label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="" value="">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">Brief note about the delivery time for this product if relevant.</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Display Order</label>
                                                <div class="col-md-3">
                                                	<input type="text" class="form-control" placeholder="" value="">
                                                    <div class="xss-margin"></div>
                                                    <div class="text-blue text-12px">The display order of the product.</div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                             	<label for="inputFirstName" class="col-md-3 control-label">Tax</label>
                                                    <div class="col-md-6">
                                                        <div class="xss-margin"></div>
                                                        <input type="checkbox" checked="checked"> GST
                                                        
                                                    </div>
                                                    
                                            </div> 
                                            
                                            <div class="form-group">
                                             	<label for="inputFirstName" class="col-md-3 control-label">Tag</label>
                                                    <div class="col-md-5">
                                                        <div class="input-group"><input type="text" class="form-control" placeholder="eg. Digital Gadget"/><span class="input-group-btn"><button type="button" class="btn btn-primary">Add</button></span></div>
                                                        <div class="xss-margin"></div>
                                                        <div class="text-blue text-12px">eg. Digital Gadget, Digital Imaging, 50% Extreme Camera Sales.</div>
                                                    </div>
                                                    
                                            </div>
											

                                          </form>
                                          
                                          		
                                
                                
                                
                                  
                            </div>
                            <!-- end col-md-12 -->
 
                          </div>
                          <!-- end row -->
                      
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
   
                  </div>
                  <!-- end portlet -->
                  <!-- end general -->
                  
                  <div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">Purchase Availability</div>
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
          
                        </div>
                        
                        <div class="portlet-body">
                          <div class="row">
                                <div class="col-md-12">
                                    
                                    <form class="form-horizontal">
                                                
                                                <div class="form-group">
                                                    <label for="inputFirstName" class="col-md-3 control-label">Available</label>
                                                    <div class="col-md-6">
                                                        <div class="xss-margin"></div><input type="checkbox" checked="checked"> Available<br>
                                                        
                                                    </div>
                                                    
                                                    <div class="col-md-4">
                                                    	Availabile Since
                                                        <div class="input-group">
                                                            <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy"/>
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                        <div class="xss-margin"></div>
                                                        <input type="checkbox"> Available in Physical Store Only.
                                                        <div class="xss-margin"></div>
                                                        <div class="text-blue text-12px">Only available items can be ordered.</div>
                                                    </div>

                                                </div>
                                                <div class="clearfix"></div>
                                                
                                                <div class="form-group">
                                                    <label for="inputFirstName" class="col-md-3 control-label">Creation Date</label>
   
                                                    <div class="col-md-4">
                                                        <div class="input-group">
                                                            <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="17 Apr, 2015" value="17 Apr, 2015"/>
                                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="inputFirstName" class="col-md-3 control-label">Out of Stock Actions</label>
   
                                                    <div class="col-md-4">
														<select class="form-control">
                                                           	<option value="">None</option>
                                                            <option value="" selected="selected">Sign up for notification</option>                                                        </select>
                                                            
                                                    </div>
    
                                                </div>

                                              </form>
                                             
                                      
                                </div>
                                <!-- end col-md-12 -->
     
                              </div>
                              <!-- end row -->
                      
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  <!-- end purchase availability --> 
               
                  
                </div>
                <!-- end tab general -->
                
                
                <div id="images" class="tab-pane fade">
                	<div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">Additional Product Images</div>
                          <div class="clearfix"></div>
                          <span class="text-blue text-15px">Additional product images will be displayed in "Product Details" page. Thumbnails will be generated from detailed images automatically. Thumbnails will be resized to 128 x 128 pixels.</span>
                          <div class="xs-margin"></div>
                          <div class="clearfix"></div>
                          <a href="#" class="btn btn-success">Add More Image &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
          
                        </div>
                        
                        <div class="portlet-body">
                          <div class="row">
                                <div class="col-md-12">
                                    
                                    <form class="form-horizontal">
                                                
                                        <div class="form-group border-bottom">
                                                    <label class="col-md-3 control-label">Upload Popup Larger Image of Additional Thumbnail</label>
                                                    <div class="col-md-9">
                                                      <div class="text-15px margin-top-10px">
                                                        <input id="exampleInputFile1" type="file"/>
                                                        <span class="help-block">(Image dimension: 800 x 800 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                                    </div>
                                            </div>        
                                    	<div class="clearfix"></div>

                             		</form>
                                             
                                      
                                </div>
                                <!-- end col-md-12 -->
     
                              </div>
                              <!-- end row -->
                      
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  <!-- end images -->
                  
                </div>
                <!-- end tab images -->
                
                <div id="description-feature" class="tab-pane fade">
                	<div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">Description</div>
                          <div class="clearfix"></div>
                          <span class="text-blue text-15px">You can edit the text by clicking the content below. </span>
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
          
                        </div>
                        
                        <div class="portlet-body">
                          <div class="row">
                                <div class="col-md-12">
                                    
                                    <div contenteditable="true">
                                    	<p><strong>Start edit the content by clicking the text.</strong></p>
                                            <p>Start edit the content by clicking the text.</p>
                                            
                                           
                                        
                                    </div>
                                             
                                      
                                </div>
                                <!-- end col-md-12 -->
     
                              </div>
                              <!-- end row -->
                      
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  <!-- end description -->
                  
                  
                  <div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">Features &amp; Video</div>
                          <div class="clearfix"></div>
                          <span class="text-blue text-15px">You can edit the text by clicking the content below.</span>
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
          
                        </div>
                        
                        <div class="portlet-body">
                          <div class="row">
                                <div class="col-md-12">
                                                	<div contenteditable="true">
														<p>Start edit the content by clicking text.</p>
                                                        <ul class="product-details-list">
                                                            <li>Feature 1.</li>
                                                            <li>Feature 2.</li>
                                                            <li>Feature 3.</li>
                                                            <li>Feature 4.</li>
                                                            <li>Feature 5.</li>
                                                        </ul>
                                                        <div class="md-margin"></div>
                                                        <h4><strong>Video</strong></h4>
                                                        <hr>
                                                        note to programmer: pls integrate for administrator to embed youtube videos in the fckeditor.
                                                    </div>
                                    <div class="clearfix"></div>

                                             
                                      
                                </div>
                                <!-- end col-md-12 -->
     
                              </div>
                              <!-- end row -->
                      
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  <!-- end features & video -->
                  
                  <div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">Warranty &amp; Support</div>
                          <div class="clearfix"></div>
                          <span class="text-blue text-15px">You can edit the text by clicking the content below.</span>
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
          
                        </div>
                        
                        <div class="portlet-body">
                          <div class="row">
                                <div class="col-md-12">
                                    
                                  	<div contenteditable="true">
										<p>Start edit the content by clicking text.</p>
                                    </div>
                                      
                                </div>
                                <!-- end col-md-12 -->
     
                              </div>
                              <!-- end row -->
                      
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  <!-- end warranty & support -->
                  
                  
                  <div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">Return Policy</div>
                          <div class="clearfix"></div>
                          <span class="text-blue text-15px">You can edit the text by clicking the content below.</span>
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
          
                        </div>
                        
                        <div class="portlet-body">
                          <div class="row">
                                <div class="col-md-12">
                                    
                                  	<div contenteditable="true">
										<h4><strong>Sales Cancellation</strong></h4>
                                            <hr>
                                            <p>TBM Sdn Bhd remain the rights to refund if the sales cancelation made by purchaser after the payment. TBM Sdn Bhd will check through all the goods before delivery to ensure the goods are complete and remain functional. Any damage to the goods upon receive will be review by TBM Sdn Bhd either to refund, replace or claim warranty from manufacturer authorized office. If delivery has taken place, then the refund will exclude delivery charges paid. Warranty card and valid purchase receipt is required upon refund/replace/repair.</p>
                                            <div class="md-margin"></div>
                                            <h4><strong>Product Warranty</strong></h4>
                                            <hr>
                                            <p>TBM Sdn Bhd make no liable to the goods warranty, such Goods are supplied and sold on an "as is where is" basis, unless the manufacturer, or supplier, of such Goods has issued a warranty in respect of such Goods, in which case such Goods are supplied and sold with the warranties issued within three to twelve months and granted by the manufacturer, or supplier, of such Goods only. You hereby agree to look solely to such manufacturer, or supplier, for any claims related to such warranties.</p>
                                            <p>All warranty will be covered under respective brands manufacturer, warranty period might be vary according to the types of product. Buyer will need to bear the return shipping fees. All postage fees (if any), will not be refundable. Any goods claimed to be defective must be returned in original condition.</p>
                                            
                                            <div class="md-margin"></div>
                                            <h4><strong>Price Payment Policy</strong></h4>
                                            <hr>
                                            <p>All price stated on TBM online platform will only be available on trading website platform, and all the specific promotions is not applicable for walk-in customer. All payment must be done within 3 working days, or TBM Sdn Bhd will have the rights to neglect the sales order that has been made. TBM Sdn Bhd has the right to decide for the Item sold out is non-refundable or exchangeable.</p>
                                    </div>
                                      
                                </div>
                                <!-- end col-md-12 -->
     
                              </div>
                              <!-- end row -->
                      
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  <!-- end return policy -->
                  
                  
                </div>
                <!-- end tab description & features -->
                
                
                <div id="shipping-info" class="tab-pane fade">
                	<div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">Shipping Information</div>
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
          
                        </div>
                        
                        <div class="portlet-body">
                          <div class="row">
                                <div class="col-md-12">
                                    
                                    <form class="form-horizontal">
                                                
                                        <div class="form-group">
                                       		<label for="inputFirstName" class="col-md-3 control-label">Weight (kg)</label>
                                            <div class="col-md-3">
                                            	<input type="text" class="form-control" placeholder="0.00" value="0.00">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                       		<label for="inputFirstName" class="col-md-3 control-label">Free Shipping</label>
                                            <div class="col-md-2">
                                            	<select class="form-control">
                                                	<option value="" selected="selected">No</option>
                                                    <option>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                       		<label for="inputFirstName" class="col-md-3 control-label">Shipping Cost (RM)</label>
                                            <div class="col-md-3">
                                            	<input type="text" class="form-control" placeholder="0.00" value="0.00">
                                            </div>
                                        </div>  
                                    	<div class="clearfix"></div>

                             		</form>
                                             
                                      
                                </div>
                                <!-- end col-md-12 -->
     
                              </div>
                              <!-- end row -->
                      
                      <div class="clearfix"></div>
                    </div>
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  
                </div>
                <!-- end tab shipping information -->
                
                
                <div id="quantity-discount" class="tab-pane fade">
                	<div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">Quantity Discounts</div>
                          <div class="clearfix"></div>
                          <p class="margin-top-10px"></p>  
                          <a href="#" class="btn btn-success" data-hover="tooltip" data-placement="top" data-target="#modal-add-discount" data-toggle="modal">Add Quantity Discount &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                              <div class="btn-group">
                                <button type="button" class="btn btn-primary">Delete</button>
                                <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                <ul role="menu" class="dropdown-menu">
                                  <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                                </ul>
                              </div> 
                          
                          
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                          
                          
                          <!--Modal add discount start-->
                                  <div id="modal-add-discount" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog modal-wide-width">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label3" class="modal-title">Add Quantity Discount</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form">
                                            <form class="form-horizontal">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Status <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                  <div data-on="success" data-off="primary" class="make-switch">
                                                    <input type="checkbox" checked="checked"/>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">From Quantity</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="Qty">
                                                </div>
                                              </div>
                                              <div class="clearfix"></div>
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">To Quantity</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="Qty">
                                                </div>
                                              </div>
                                              <div class="clearfix"></div>
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Discount </label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="Amount">
                                                  <div class="xs-margin"></div>
                                                  <select name="select" class="form-control">
                                                    <option value="%" >%</option>
                                                    <option value="RM">RM</option>
                                                  </select>
                                                </div>
                                              </div>
                                             
                    
                                              
                                              <div class="form-actions">
                                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--END MODAL add new discount -->
                          <!--Modal delete selected items start-->
                          <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <p><strong>#1:</strong> Price per item - RM 650.00 (Discount - RM 20.00)</p>
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- modal delete selected items end -->
                              <!--Modal delete all items start-->
                              <div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- modal delete all items end -->
          
                        </div>
                        
                    
                    
                    <div class="portlet-body">
                      <div class="form-inline pull-left">
                        <div class="form-group">
                          <select name="select" class="form-control">
                            <option>10</option>
                            <option>20</option>
                            <option selected="selected">30</option>
                            <option>50</option>
                            <option>100</option>
                          </select>
                          &nbsp;
                          <label class="control-label">Records per page</label>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <br/>
                      <div class="table-responsive mtl">
                      	<span class="text-red"><b>Sale Price: RM 670.00</b></span>
                        <table id="example1" class="table table-hover table-striped">
                          <thead>
                            <tr>
                              <th width="1%"><input type="checkbox"/></th>
                              <th>#</th>
                              <th>Product Quantity</th>
                              <th>Product Price/Discount</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="checkbox"/></td>
                              <td>1</td>
                              <td>From 1 Item(s) to 99 Item(s)</td>
                              <td>Price per item - RM 650.00<br/>(Discount - RM 20.00)</td>
                              <td><span class="label label-sm label-success">Active</span></td>
                              <td><a href="#" data-hover="tooltip" data-placement="top" title="Edit" data-target="#modal-edit-discount" data-toggle="modal"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-2" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                  <!--Modal edit discount start-->
                                  <div id="modal-edit-discount" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog modal-wide-width">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label3" class="modal-title">Edit Quantity Discount</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form">
                                            <form class="form-horizontal">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Status <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                  <div data-on="success" data-off="primary" class="make-switch">
                                                    <input type="checkbox" checked="checked"/>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">From Quantity</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="Qty" value="1">
                                                </div>
                                              </div>
                                              <div class="clearfix"></div>
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">To Quantity</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="Qty" value="99">
                                                </div>
                                              </div>
                                              <div class="clearfix"></div>
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Discount </label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" placeholder="Amount" value="20">
                                                  <div class="xs-margin"></div>
                                                  <select name="select" class="form-control">
                                                    <option value="%" >%</option>
                                                    <option value="RM" selected="selected">RM</option>
                                                  </select>
                                                </div>
                                              </div>
                                             
                                             
                                              
                                              <div class="form-actions">
                                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--END MODAL edit discount -->
                                  <!--Modal delete start-->
                                  <div id="modal-delete-2" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><strong>#01:</strong> Price per item - RM 650.00 (Discount - RM 20.00)</p>
                                          <div class="form-actions">
                                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- modal delete end -->
                              </td>
                            </tr>
                            
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="6"></td>
                            </tr>
                          </tfoot>
                        </table>
                        <div class="tool-footer text-right">
                          <p class="pull-left">Showing 1 to 10 of 57 entries</p>
                          <ul class="pagination pagination mtm mbm">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                          </ul>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>    
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  
                </div>
                <!-- end tab quantity discounts -->
                
                
                <div id="pwp" class="tab-pane fade">
                	<div class="portlet">
                  
                  		<div class="portlet-header">
                          <div class="caption">PWP Setup</div>
                          <div class="clearfix"></div>
                          <p class="margin-top-10px"></p>  
                          <a href="#" class="btn btn-success" data-hover="tooltip" data-placement="top" data-target="#modal-pwp-product-new" data-toggle="modal">Add PWP Product &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                              <div class="btn-group">
                                <button type="button" class="btn btn-primary">Delete</button>
                                <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                <ul role="menu" class="dropdown-menu">
                                  <li><a href="#" data-target="#modal-delete-selected-pwp" data-toggle="modal">Delete selected item(s)</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#" data-target="#modal-delete-all-pwp" data-toggle="modal">Delete all</a></li>
                                </ul>
                              </div> 
                          
                          
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                          
                          
                          <!--Modal add pwp product start-->
                          <div id="modal-pwp-product-new" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog modal-wide-width">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label3" class="modal-title">Add PWP Product</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form">
                                            <form class="form-horizontal">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Status <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                  <div data-on="success" data-off="primary" class="make-switch">
                                                    <input type="checkbox" checked="checked"/>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Please select a Category <span class="text-red">*</span></label>
                                                <div class="col-md-6">                  
                                                    <div class="xs-margin"></div>
                                                    <select class="form-control">
                                                        <option value="">- Select Category -</option>
                                                        <option value="">-Audio Visual</option>
                                                    	<option value="">&nbsp; --Home Entertainment</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Disc Player</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Mini HiFi</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Micro HiFi</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Souncbar</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Home Theatrre System</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---AV Component</option> 
                                                        <option value="">&nbsp; --TV</option> 
                                                        <option value="">List all product category/sub category here.</option>   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
        
                                            <div class="form-group">
                                            	<label class="col-md-3 control-label">Please select a Product <span class="text-red">*</span></label>
                                                <div class="col-md-9">
                                                    note to programmer: display all related products according to the category that admin selects above. 
                                                    <div class="clearfix"></div>
                                                    <table class="table checkout-table table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th width="1%"><input type="checkbox"/></th>
                                                                <th class="table-title">Product Name</th>
                                                                <th class="table-title">Product Code</th>
                                                                <th class="table-title">Price</th>
                                                                <th class="table-title">Quantity</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="checkbox"/></td>
                                                                <td class="item-name-col">
                                                                    <figure><a href="product_edit.html"><img src="../images/digital_gadget/digital_imaging/panasonic_DMC-GX1WGC_big1.jpg" alt="Panasonic DMC-GX1WGC Camera Twin Lense (14MM F2.5 &amp; 14-42MM F3.5-5.6)" class="img-responsive"></a></figure>
                                                                    <header class="item-name">
                                                                        <a href="product_edit.html">Panasonic DMC-GX1WGC Camera Twin Lense (14MM F2.5 &amp; 14-42MM F3.5-5.6)</a>                                               
                                                                    </header>
                                                                    <ul>
                                                                      <li>Color: Silver</li>
                                                                    </ul>                                          
                                                                </td>
                                                                <td class="item-code">DMC-GX1WGC</td>
                                                                <td class="item-price-col"><span class="item-price-special">RM 670.<span class="sub-price">00</span></span></td>
                                                                <td>1000</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"/></td>
                                                                <td class="item-name-col">
                                                                    <figure><a href="product_edit.html"><img src="../images/digital_gadget/digital_imaging/panasonic_DMC-GX1WGC_big2.jpg" alt="Panasonic DMC-GX1WGC Camera Twin Lense (14MM F2.5 &amp; 14-42MM F3.5-5.6)" class="img-responsive"></a></figure>
                                                                    <header class="item-name">
                                                                        <a href="product_edit.html">Panasonic DMC-GX1WGC Camera Twin Lense (14MM F2.5 &amp; 14-42MM F3.5-5.6)</a>                                               
                                                                    </header>
                                                                    <ul>
                                                                      <li>Color: Black</li>
                                                                    </ul>                                          
                                                                </td>
                                                                <td class="item-code">DMC-GX1WGC</td>
                                                                <td class="item-price-col"><span class="item-price-special">RM 670.<span class="sub-price">00</span></span></td>
                                                                <td>300</td>
                                                                
                                                            </tr>
                                                            
                                                        </tbody>
                                                       
                                                    </table>
    
                                                </div>
                                            </div>
                                              
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">PWP Price (RM) <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="0.00" value="0.00">
                                                    <div class="xss-margin"></div>
                                                </div>
                                            </div>
                                             
                    
                                              
                                              <div class="form-actions">
                                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--END MODAL add new pwp product-->
                          <!--Modal delete selected items start-->
                          <div id="modal-delete-selected-pwp" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <p><strong>#1:</strong> Panasonic DMC-GX1WGC Camera Twin Lense <br>
Product Code: DMC-GX1WGC <br/> (PWP Price: RM 300.00)</p>
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- modal delete selected items end -->
                              
                              <!--Modal delete all items start-->
                              <div id="modal-delete-all-pwp" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- modal delete all items end -->
          
                        </div>
                        
                    
                    
                    <div class="portlet-body">
                      <div class="form-inline pull-left">
                        <div class="form-group">
                          <select name="select" class="form-control">
                            <option>10</option>
                            <option>20</option>
                            <option selected="selected">30</option>
                            <option>50</option>
                            <option>100</option>
                          </select>
                          &nbsp;
                          <label class="control-label">Records per page</label>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <br/>
                      <div class="table-responsive mtl">
                        <table class="table table-hover table-striped">
                          <thead>
                            <tr>
                              <th width="1%"><input type="checkbox"/></th>
                              <th>#</th>
                              <th><a herf="sort by status">Status</a></th>
                              <th>Image</th>
                              <th><a herf="sort by name">Name</a> / <a herf="sort by product code">Product Code</a></th>
                              <th><a herf="sort by pwp price">PWP Price (RM)</a></th>
                              <th class="table-title"><a herf="sort by sale price">Sale Price (RM)</a></th>
                              <th class="table-title"><a herf="sort by list price">List Price (RM)</a></th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="checkbox"/></td>
                              <td>1</td>
                              <td><span class="label label-sm label-success">Active</span></td>
                              <td><img src="../images/digital_gadget/digital_imaging/panasonic_DMC-GX1WGC_big1.jpg" alt="Panasonic Camera" class="img-responsive" width="100px"></td>
                              <td><a href="product_edit.html">Panasonic DMC-GX1WGC Camera Twin Lense</a> <br/>
                                Product Code: DMC-GX1WGC</td>
                              <td>300.00</td>
                              <td>670.00</td>
                              <td>1,340.00</td>
                              <td><a href="#" data-hover="tooltip" data-placement="top" title="Edit" data-target="#modal-pwp-product-edit" data-toggle="modal"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-pwp" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                              	
                                <!--Modal edit pwp product start-->
                          <div id="modal-pwp-product-edit" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog modal-wide-width">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label3" class="modal-title">Edit PWP Product</h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="form">
                                            <form class="form-horizontal">
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Status <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                  <div data-on="success" data-off="primary" class="make-switch">
                                                    <input type="checkbox" checked="checked"/>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">Please select a Category <span class="text-red">*</span></label>
                                                <div class="col-md-6">                  
                                                    <div class="xs-margin"></div>
                                                    <select class="form-control">
                                                        <option value="">- Select Category -</option>
                                                        <option value="">-Audio Visual</option>
                                                    	<option value="">&nbsp; --Home Entertainment</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Disc Player</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Mini HiFi</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Micro HiFi</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---Souncbar</option>
                                                        <option value="" selected="selected">&nbsp; &nbsp; &nbsp; ---Home Theatre System</option>
                                                        <option value="">&nbsp; &nbsp; &nbsp; ---AV Component</option> 
                                                        <option value="">&nbsp; --TV</option> 
                                                        <option value="">List all product category/sub category here.</option>   
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
        
                                            <div class="form-group">
                                            	<label class="col-md-3 control-label">Please select a Product <span class="text-red">*</span></label>
                                                <div class="col-md-9">
                                                    note to programmer: display all related products according to the category that admin selects above. 
                                                    <div class="clearfix"></div>
                                                    <table class="table checkout-table table-responsive">
                                                        <thead>
                                                            <tr>
                                                                <th width="1%"><input type="checkbox"/></th>
                                                                <th class="table-title">Product Name</th>
                                                                <th class="table-title">Product Code</th>
                                                                <th class="table-title">Sale Price</th>
                                                                <th class="table-title">Quantity</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="checkbox" checked="checked"/></td>
                                                                <td class="item-name-col">
                                                                    <figure><a href="product_edit.html"><img src="../images/digital_gadget/digital_imaging/panasonic_DMC-GX1WGC_big1.jpg" alt="Panasonic DMC-GX1WGC Camera Twin Lense (14MM F2.5 &amp; 14-42MM F3.5-5.6)" class="img-responsive"></a></figure>
                                                                    <header class="item-name">
                                                                        <a href="product_edit.html">Panasonic DMC-GX1WGC Camera Twin Lense (14MM F2.5 &amp; 14-42MM F3.5-5.6)</a>                                               
                                                                    </header>
                                                                    <ul>
                                                                      <li>Color: Silver</li>
                                                                    </ul>                                          
                                                                </td>
                                                                <td class="item-code">DMC-GX1WGC</td>
                                                                <td class="item-price-col"><span class="item-price-special">RM 670.<span class="sub-price">00</span></span></td>
                                                                <td>1000</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td><input type="checkbox"/></td>
                                                                <td class="item-name-col">
                                                                    <figure><a href="product_edit.html"><img src="../images/digital_gadget/digital_imaging/panasonic_DMC-GX1WGC_big2.jpg" alt="Panasonic DMC-GX1WGC Camera Twin Lense (14MM F2.5 &amp; 14-42MM F3.5-5.6)" class="img-responsive"></a></figure>
                                                                    <header class="item-name">
                                                                        <a href="product_edit.html">Panasonic DMC-GX1WGC Camera Twin Lense (14MM F2.5 &amp; 14-42MM F3.5-5.6)</a>                                               
                                                                    </header>
                                                                    <ul>
                                                                      <li>Color: Black</li>
                                                                    </ul>                                          
                                                                </td>
                                                                <td class="item-code">DMC-GX1WGC</td>
                                                                <td class="item-price-col"><span class="item-price-special">RM 670.<span class="sub-price">00</span></span></td>
                                                                <td>300</td>
                                                                
                                                            </tr>
                                                            
                                                        </tbody>
                                                       
                                                    </table>
    
                                                </div>
                                            </div>
                                              
                                              <div class="form-group">
                                                <label for="inputFirstName" class="col-md-3 control-label">PWP Price (RM) <span class="text-red">*</span></label>
                                                <div class="col-md-6">
                                                	<input type="text" class="form-control" placeholder="0.00" value="300.00">
                                                    <div class="xss-margin"></div>
                                                </div>
                                            </div>
                                             
                    
                                              
                                              <div class="form-actions">
                                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--END MODAL edit pwp product-->
                                
                                  <!--Modal delete pwp start-->
                                  <div id="modal-delete-pwp" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this? </h4>
                                        </div>
                                        <div class="modal-body">
                                          <p><strong>#1:</strong> Panasonic DMC-GX1WGC Camera Twin Lense <br/>
Product Code: DMC-GX1WGC <br/> (PWP Price: RM 300.00)</p>
                                          <div class="form-actions">
                                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- modal delete pwp end -->
                              </td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="9"></td>
                            </tr>
                          </tfoot>
                        </table>
                        <div class="tool-footer text-right">
                          <p class="pull-left">Showing 1 to 10 of 57 entries</p>
                          <ul class="pagination pagination mtm mbm">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                          </ul>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                      
                    </div>    
                    <!-- end portlet body -->
                    
                  </div>
                  <!-- end portlet -->
                  
                </div>
                <!-- end pwp -->
                
                
                
                
                
              </div>
              <!-- end tab content -->
              <div class="clearfix"></div>
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- InstanceEndEditable -->
        <!--END CONTENT-->
            
            <!--BEGIN FOOTER-->
  <div class="page-footer">
                <div class="copyright"><span class="text-15px">2015 © <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a href="mailto:support@webqom.com">Webqom Support</a>.</span>
                	<div class="pull-right"><img src="images/logo_webqom.png" alt="Webqom Technologies Sdn Bhd"></div>
                </div>
        </div>
    <!--END FOOTER--></div>
  <!--END PAGE WRAPPER--></div>
</div>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="vendors/jquery-pace/pace.min.js"></script>

<!--LOADING SCRIPTS FOR PAGE-->
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="vendors/moment/moment.js"></script>
<script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="vendors/bootstrap-clockface/js/clockface.js"></script>
<script src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="vendors/jquery-maskedinput/jquery-maskedinput.js"></script>
<script src="js/form-components.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->

<!-- InstanceBeginEditable name="EditRegion4" -->
<script src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="vendors/ckeditor/ckeditor.js"></script>
<script src="js/ui-tabs-accordions-navs.js"></script>
<!-- InstanceEndEditable -->


<!--CORE JAVASCRIPT-->
<script src="js/main.js"></script>
<script src="js/holder.js"></script>
</body>
<!-- InstanceEnd --></html>