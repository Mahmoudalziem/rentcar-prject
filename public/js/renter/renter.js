/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 13);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/renter/renter.js":
/*!***************************************!*\
  !*** ./resources/js/renter/renter.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('.body-image').each(function () {
    $(this).owlCarousel({
      loop: true,
      autoplay: false,
      autoplayTimeout: 4000,
      margin: 0,
      lazyLoad: true,
      nav: true,
      dots: false,
      slideSpeed: 800,
      smartSpeed: 500,
      autoHeight: !0,
      mouseDrag: !0,
      touchDrag: !0,
      responsiveClass: !0,
      items: 1,
      responsive: {
        0: {
          items: 1,
          autoHeight: !0,
          mouseDrag: !1,
          touchDrag: !0
        },
        576: {
          items: 1
        }
      }
    });
  });
  var image_corp_avater = $('#image_crop_avater').croppie({
    enableExif: true,
    viewport: {
      width: 200,
      height: 200,
      type: 'circle'
    },
    boundary: {
      height: 300
    }
  }); //// Upload Image

  $(document).on('click', 'span.user_image_upload', function () {
    $('input[name="image_user_content"]').trigger('click');
  }); /// Change Image

  $('button.crop_user_image').on('click', function () {
    var button = $(this);
    image_corp_avater.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function (response) {
      $.ajax({
        url: $(button).attr('data-action'),
        method: 'POST',
        data: {
          image: response
        },
        beforeSend: function beforeSend() {
          $(button).text('Waiting');
        },
        success: function success() {
          $('img.user_image_avater').attr('src', response);
          $(button).text('Import Image');
          $('#user_image').modal('hide');
        }
      });
    });
  }); /// Filer Reader

  $('input[name="image_user_content"]').change(function () {
    var reader = new FileReader();

    reader.onload = function (event) {
      image_corp_avater.croppie('bind', {
        url: event.target.result
      });
    };

    reader.readAsDataURL(this.files[0]);
    $('#user_image').modal('show');
  }); //// Search Input

  $(document).on('keyup', 'input[type="search"]', function (event) {
    var inputValue = $(this).val().toLowerCase(),
        x = 0,
        courseName = $('div.body-content-title a');

    for (x; x < courseName.length; x++) {
      if (!$(courseName[x]).html().toLowerCase().includes(inputValue)) {
        $(courseName[x]).parents('.car-body').parent().css('display', 'none');
      } else {
        $(courseName[x]).parents('.car-body').parent().css('display', 'block');
      }
    }
  }); /// Update Info

  $('form[name="formUpdate"]').on('submit', function () {
    var name = $('input[name="name"]').val(),
        password = $('input[name="password"]').val(),
        confirm = $('input[name="confirm_password"]').val();

    if (name == '') {
      $('div.validate_error').text('Name Required').removeClass('d-none');
      return false;
    } else if (password != confirm) {
      $('div.validate_error').text('Password Not Matched').removeClass('d-none');
      return false;
    } else {
      var formContent = new FormData(this);
      $.ajax({
        url: $(this).attr('action'),
        data: formContent,
        method: 'post',
        processData: false,
        dataType: false,
        contentType: false,
        beforeSend: function beforeSend() {
          $('button.submit_form').text('Waiting');
        },
        success: function success(response) {
          $('button.submit_form').html('update Info <i class="fa fa-long-arrow-right"></i>');
          $('div.validate_error').text('Info Update Success').removeClass('d-none');
          $('input[name="password"]').val('');
          $('input[name="confirm_password"]').val('');
          $('div.user_name').text(response);
          setTimeout(function () {
            $('div.validate_error').text('').addClass('d-none');
          }, 1000);
        }
      });
      return false;
    }
  });
});

/***/ }),

/***/ 13:
/*!*********************************************!*\
  !*** multi ./resources/js/renter/renter.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /opt/lampp/htdocs/rentCar/resources/js/renter/renter.js */"./resources/js/renter/renter.js");


/***/ })

/******/ });