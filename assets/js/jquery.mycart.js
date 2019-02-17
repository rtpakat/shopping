/*
* jQuery myCart - v1.0 - 2016-04-21
* http://asraf-uddin-ahmed.github.io/
* Copyright (c) 2016 Asraf Uddin Ahmed; Licensed None
*/

(function ($) {

  "use strict";

  var OptionManager = (function () {
    var objToReturn = {};

    var defaultOptions = {
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      clickOnAddToCart: function ($addTocart) { },
      clickOnCartIcon: function ($cartIcon, products, totalPrice, totalQuantity) { },
      checkoutCart: function (products, totalPrice, totalQuantity) { },
      getDiscountPrice: function (products, totalPrice, totalQuantity) { return null; }
    };


    var getOptions = function (customOptions) {
      var options = $.extend({}, defaultOptions);
      if (typeof customOptions === 'object') {
        $.extend(options, customOptions);
      }
      return options;
    }

    objToReturn.getOptions = getOptions;
    return objToReturn;
  }());


  var ProductManager = (function () {
    var objToReturn = {};

    /*
    PRIVATE
    */
    localStorage.products = localStorage.products ? localStorage.products : "";
    var getIndexOfProduct = function (id) {
      var productIndex = -1;
      var products = getAllProducts();
      $.each(products, function (index, value) {
        if (value.id == id) {
          productIndex = index;
          return;
        }
      });
      return productIndex;
    }
    var setAllProducts = function (products) {
      localStorage.products = JSON.stringify(products);
    }
    var addProduct = function (id, name, summary, price, quantity, image) {
      var products = getAllProducts();
      products.push({
        id: id,
        name: name,
        summary: summary,
        price: price,
        quantity: quantity,
        image: image
      });
      setAllProducts(products);
    }
    var model = new Array;
    var modelsum = new Array;
    var modalqulity = new Array;
    /*
    PUBLIC
    */
    var getAllProducts = function () {
      try {
        var products = JSON.parse(localStorage.products);
        return products;
      } catch (e) {
        return [];
      }
    }
    var updatePoduct = function (id, quantity) {
      var productIndex = getIndexOfProduct(id);
      if (productIndex < 0) {
        return false;
      }
      var products = getAllProducts();
      products[productIndex].quantity = typeof quantity === "undefined" ? products[productIndex].quantity * 1 + 1 : quantity;
      setAllProducts(products);
      return true;
    }
    var setProduct = function (id, name, summary, price, quantity, image) {

      // console.log(sumqqy);
      if (typeof id === "undefined") {
        console.error("id required")
        return false;
      }
      if (typeof name === "undefined") {
        console.error("name required")
        return false;
      }
      if (typeof image === "undefined") {
        console.error("image required")
        return false;
      }
      if (!$.isNumeric(price)) {
        console.error("price is not a number")
        return false;
      }
      if (!$.isNumeric(quantity)) {
        console.error("quantity is not a number");
        return false;
      }
      summary = typeof summary === "undefined" ? "" : summary;

      if (!updatePoduct(id)) {
        addProduct(id, name, summary, price, quantity, image);
      }
    }
    var clearProduct = function () {
      setAllProducts([]);
    }
    var removeProduct = function (id) {
      var products = getAllProducts();
      products = $.grep(products, function (value, index) {
        return value.id != id;
      });
      setAllProducts(products);
    }
    var getTotalQuantity = function () {
      var total = 0;
      var products = getAllProducts();
      $.each(products, function (index, value) {
        total += value.quantity * 1;
        
      });
      var sumquantity = total;
      localStorage.setItem("sumpqulity",sumquantity);
      // $('#sumqulity').val(sumquantity);
      // modalqulity.push(sumquantity);

      return total;
    }
    var getTotalPrice = function () {
      console.log("slfsldjf");
      var products = getAllProducts();
      var total = 0;
      $.each(products, function (index, value) {
        total += value.quantity * value.price;
      });
      var sumtotal = total;
      $('#sumprice').val(sumtotal);
      var obj = { sumprice: {}, sumquantity: {} }
      // modelsum.push(sumtotal);
      localStorage.setItem("sumprice",sumtotal);
      return total;
    }

    objToReturn.getAllProducts = getAllProducts;
    objToReturn.updatePoduct = updatePoduct;
    objToReturn.setProduct = setProduct;
    objToReturn.clearProduct = clearProduct;
    objToReturn.removeProduct = removeProduct;
    objToReturn.getTotalQuantity = getTotalQuantity;
    objToReturn.getTotalPrice = getTotalPrice;
    // model.push();
    // console.log(model);
    //  modelsum.push(sumtotal,total)
    //  console.log(modelsum);
    return objToReturn;
    // console.log(objToReturn);

  }());

  var model = new Array;
  var loadMyCartEvent = function (userOptions) {

    var options = OptionManager.getOptions(userOptions);
    var $cartIcon = $("." + options.classCartIcon);
    var $cartBadge = $("." + options.classCartBadge);
    var classProductQuantity = options.classProductQuantity;
    var classProductRemove = options.classProductRemove;
    var classCheckoutCart = options.classCheckoutCart;

    var idCartModal = 'my-cart-modal';
    var idCartTable = 'my-cart-table';
    var idGrandTotal = 'my-cart-grand-total';
    var idEmptyCartMessage = 'my-cart-empty-message';
    var idDiscountPrice = 'my-cart-discount-price';
    var classProductTotal = 'my-product-total';
    var classAffixMyCartIcon = 'my-cart-icon-affix';

    $cartBadge.text(ProductManager.getTotalQuantity());

    if (!$("#" + idCartModal).length) {
      $('body').append(
        
        '<div class="modal fade" id="' + idCartModal + '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
        '<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<table class="table table-hover table-responsive" id="' + idCartTable + '"></table>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
        '<button type="button" class="btn btn-default" id="order_shop"  data-dismiss="modal">ซื้อสินค้า</button>' +

        '</div>' +
        '</div>' +
        '</div>' +
        '</div>'
      );
    }
    var price = new Array;

    var drawTable = function () {
      var $cartTable = $("#" + idCartTable);
      $cartTable.empty();

      var products = ProductManager.getAllProducts();
      $.each(products, function () {
        console.log(this.price);
        
        $("#price").append("<strong>Hello</strong>");
       
        
        var total = this.quantity * this.price;
        $cartTable.append(
          '<tr title="' + this.summary + '" data-id="' + this.id + '" data-price="' + this.price + '">' +
          '<td class="text-center" style="width: 60px;"><img width="235%" height="12%" src="' + this.image + '"/></td>' +
          '<td style="font-size: 13px;">' + this.name + '</td>' +
          '<td title="Unit Price" style="font-size: 13px;">' + this.price + '฿</td>' +
          '<td title="Quantity" style="font-size: 13px;"><input type="number" min="1" style="width: 70px;" class="' + classProductQuantity + '" value="' + this.quantity + '"/></td>' +
          '<td title="Total" id="sumprice" class="' + classProductTotal + '" style="font-size: 13px;">' + total + '฿</td>' +
          '<td title="Remove from Cart" class="text-center" style="width: 30px;" ><a href="javascript:void(0);" class="btn btn-xs btn-danger ' + classProductRemove + '">X</a></td>' +
          '</tr>'
          
          
        );
          
        // $('#qulity').val(this.quantity);
        


        // // ชุด1
        var obj = { id_product: {}, name_product: {}, price_product: {}, qty_product: {} }
        obj.id_product = this.id;
        obj.name_product = this.name;
        obj.price_product = this.price;
        obj.qty_product = this.quantity;

        model.push(obj);
        // var yetVisited = localStorage['convert'];
        // if (!yetVisited) {
        //     // open popup
        //     localStorage['visited'] = "yes";
        // }
        // $.session.set("price", obj);
        
        // localStorage.setItem("lastname", "Smith");
        // document.getElementById("price").innerHTML = localStorage.getItem("lastname");


      });

      $cartTable.append(products.length ?
        '<tr>' +
        '<td></td>' +
        '<td><strong>Total</strong></td>' +
        '<td></td>' +
        '<td></td>' +
        '<td><strong name="my-cart-grand-total" id="' + idGrandTotal + '">฿</strong></td>' +
        '<td></td>' +
        '</tr>'
        : '<div class="alert alert-danger" role="alert" id="' + idEmptyCartMessage + '">Your cart is empty</div>'
      );

      var discountPrice = options.getDiscountPrice(products, ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
      if (products.length && discountPrice !== null) {
        $cartTable.append(
          '<tr style="color: red">' +
          '<td></td>' +
          '<td><strong>Total (including discount)</strong></td>' +
          '<td></td>' +
          '<td></td>' +
          '<td><strong id="' + idDiscountPrice + '">฿</strong></td>' +
          '<td></td>' +
          '</tr>'
        );
      }

      showGrandTotal();
      showDiscountPrice();
    }
    var showModal = function () {
      drawTable();
      $("#" + idCartModal).modal('show');
    }
    var updateCart = function () {
      $.each($("." + classProductQuantity), function () {
        var id = $(this).closest("tr").data("id");
        ProductManager.updatePoduct(id, $(this).val());
      });
    }
    var showGrandTotal = function () {
      $("#" + idGrandTotal).text("฿" + ProductManager.getTotalPrice());
    }
    var showDiscountPrice = function () {
      $("#" + idDiscountPrice).text("฿" + options.getDiscountPrice(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity()));
    }

    /*
    EVENT
    */
    if (options.affixCartIcon) {
      var cartIconBottom = $cartIcon.offset().top * 1 + $cartIcon.css("height").match(/\d+/) * 1;
      var cartIconPosition = $cartIcon.css('position');
      $(window).scroll(function () {
        if ($(window).scrollTop() >= cartIconBottom) {
          $cartIcon.css('position', 'fixed').css('z-index', '999').addClass(classAffixMyCartIcon);
        } else {
          $cartIcon.css('position', cartIconPosition).css('background-color', 'inherit').removeClass(classAffixMyCartIcon);
        }
      });
    }

    $cartIcon.click(function () {
      options.showCheckoutModal ? showModal() : options.clickOnCartIcon($cartIcon, ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
    });

    $(document).on("input", "." + classProductQuantity, function () {
      var price = $(this).closest("tr").data("price");
      var id = $(this).closest("tr").data("id");
      var quantity = $(this).val();

      $(this).parent("td").next("." + classProductTotal).text("฿" + price * quantity);
      ProductManager.updatePoduct(id, quantity);

      $cartBadge.text(ProductManager.getTotalQuantity());
      showGrandTotal();
      showDiscountPrice();
    });

    $(document).on('keypress', "." + classProductQuantity, function (evt) {
      if (evt.keyCode == 38 || evt.keyCode == 40) {
        return;
      }
      evt.preventDefault();
    });

    $(document).on('click', "." + classProductRemove, function () {
      var $tr = $(this).closest("tr");
      var id = $tr.data("id");
      $tr.hide(500, function () {
        ProductManager.removeProduct(id);
        drawTable();
        $cartBadge.text(ProductManager.getTotalQuantity());
      });
    });



    var tests = new Array;
    tests.push(model);
    
    $("#order_shop").click(function () {
      //  debugger;
      //  console.log(localStorage.getItem('sumprice'));
      load_data(localStorage.getItem('sumpqulity'),localStorage.getItem('sumprice'));
      location.href = 'admin/Transportation/index';

      // location.href=base_url('admin/Transportation/index');

      // $("#order_shop").attr("href", "https://www.w3schools.com/jquery/");
    });
    // $(document).ready(function(){
    //     $("#order_shop").click(function(){
    //       $("#order_shop").attr("href", "https://www.w3schools.com/jquery/");
    //     });
    //   });

    $("." + classCheckoutCart).click(function () {
      var products = ProductManager.getAllProducts();
      if (!products.length) {
        $("#" + idEmptyCartMessage).fadeTo('fast', 0.5).fadeTo('fast', 1.0);
        return;
      }
      updateCart();
      options.checkoutCart(ProductManager.getAllProducts(), ProductManager.getTotalPrice(), ProductManager.getTotalQuantity());
      ProductManager.clearProduct();
      $cartBadge.text(ProductManager.getTotalQuantity());
      $("#" + idCartModal).modal("hide");
    });

  }


  var MyCart = function (target, userOptions) {
    /*
    PRIVATE
    */
    var $target = $(target);
    var options = OptionManager.getOptions(userOptions);
    var $cartIcon = $("." + options.classCartIcon);
    var $cartBadge = $("." + options.classCartBadge);
    // console.log($cartBadge);

    /*
    EVENT
    */
    $target.click(function () {
      options.clickOnAddToCart($target);

      var id = $target.data('id');
      var name = $target.data('name');
      var summary = $target.data('summary');
      var price = $target.data('price');
      var quantity = $target.data('quantity');
      var image = $target.data('image');

      ProductManager.setProduct(id, name, summary, price, quantity, image);
      $cartBadge.text(ProductManager.getTotalQuantity());
    });

  }


  $.fn.myCart = function (userOptions) {
    loadMyCartEvent(userOptions);
    return $.each(this, function () {
      new MyCart(this, userOptions);
    });
    console.log(userOptions);
  }


})(jQuery);


