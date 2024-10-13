<html dir="ltr" lang="<?php echo $language["htmlLang"]?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle ?></title>
    <meta name="description" content="<?php echo $pagedescription ?>">
    <meta name="keywords" content="<?php echo $language["header_keyword"]?>" />
    <meta name="classification" content="<?php echo $language["header_classification"]?>" />
    <meta name="author" content="VisuHost" />
    <meta name="robots" content="index, follow, all" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta property="article:author" content="<?php echo $fullUrl ?>" />
    <meta property="article:publisher" content="<?php echo $fullUrl ?>" />
    <meta name="distribution" content="mondial" />
    <meta name="coverage" content="Mondial" />
    <meta name="google-site-verification" content="google-site-verification=Y4UT2heZn1Gl_OwF1LcNG9BTWlyY5jpTX19YiN4kcWU" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="VisuHost" />
    <meta property="og:url" content="<?php echo $fullUrl ?>" />
    <meta property="og:title" content="<?php echo $pagetitle ?>" />
    <meta property="og:description" content="<?php echo $pagedescription?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@VisuHost">
    <meta name="twitter:creator" content="@VisuHost">
    <meta name="twitter:title" content="<?php echo $pagetitle ?>">
    <meta name="twitter:description" content="<?php echo $pagedescription?>">
    <meta name="robots" content="max-image-preview:large">
    <link rel="icon" href="/assets/images/icon.ico" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/pages/home.css">
    <link rel="stylesheet" href="/assets/css/pages/plesk.css">
    <link rel="stylesheet" href="/assets/css/pages/dedicated.css">
    <link rel="stylesheet" href="/assets/css/pages/good.css">
    <link rel="stylesheet" href="/assets/css/compact.css">
    <link rel="canonical" href="<?php echo $fullUrl ?>" />

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "VisuHost",
            "url": "https://visuhost.fr/?lang=fr",
            "logo": "/assets/images/icon.ico",
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "Customer Service",
                "areaServed": "Worldwide",
                "availableLanguage": ["French", "English"]
            }
        }
    </script>



    <?php
    require_once __DIR__ . '/config-metadata.php';  

    if (isset($metadata[$fullUrl])) {
        $data = $metadata[$fullUrl]['structured_data'];
        $jsonLd = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        echo "<script type='application/ld+json'>" . $jsonLd . "</script>";
    }
    ?>


<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "mlmpr7346l");
</script>

<script>
    /******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

;// CONCATENATED MODULE: ./src/lib/Utilities.js
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
var Utilities = /*#__PURE__*/function () {
  function Utilities() {
    _classCallCheck(this, Utilities);
  }
  _createClass(Utilities, null, [{
    key: "ready",
    value: function ready(fn) {
      if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading") {
        fn();
      } else {
        document.addEventListener('DOMContentLoaded', fn);
      }
    }
  }, {
    key: "objectType",
    value: function objectType(obj) {
      return Object.prototype.toString.call(obj).slice(8, -1);
    }
  }, {
    key: "lightenDarkenColor",
    value: function lightenDarkenColor(col, amt) {
      var usePound = false;
      if (col[0] == "#") {
        col = col.slice(1);
        usePound = true;
      }
      var num = parseInt(col, 16);
      var r = (num >> 16) + amt;
      if (r > 255) {
        r = 255;
      } else if (r < 0) {
        r = 0;
      }
      var b = (num >> 8 & 0x00FF) + amt;
      if (b > 255) {
        b = 255;
      } else if (b < 0) {
        b = 0;
      }
      var g = (num & 0x0000FF) + amt;
      if (g > 255) {
        g = 255;
      } else if (g < 0) {
        g = 0;
      }
      return (usePound ? "#" : "") + (g | b << 8 | r << 16).toString(16);
    }
  }, {
    key: "removeCookie",
    value: function removeCookie() {
      document.cookie = "cconsent=; expires=Thu, 01 Jan 1980 00:00:00 UTC; path=/;";
      //remove localStorage consentMode obj
      localStorage.removeItem('consentMode');
    }

    // Create an array of services from Cookieconsent global object
    // Filter based on category or leave empty is all is wanted
  }, {
    key: "listGlobalServices",
    value: function listGlobalServices(category) {
      var categories = [];

      // Global config objectnot set
      if (typeof window.CookieConsent === 'undefined') return categories;

      // Category is not specified or opposite
      if (typeof category === 'undefined') {
        for (var key in window.CookieConsent.config.services) {
          categories.push(key);
        }
      } else {
        for (var _key in window.CookieConsent.config.services) {
          if (window.CookieConsent.config.services[_key].category === category) categories.push(_key);
        }
      }
      return categories;
    }
  }, {
    key: "dispatchEvent",
    value: function dispatchEvent(elem, event) {
      var event;
      if (typeof Event === 'function') {
        event = new Event(event);
      } else {
        event = document.createEvent('Event');
        event.initEvent(event, true, true);
      }
      elem.dispatchEvent(event);
    }
  }]);
  return Utilities;
}();

;// CONCATENATED MODULE: ./src/lib/Filter.js
function Filter_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function Filter_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function Filter_createClass(Constructor, protoProps, staticProps) { if (protoProps) Filter_defineProperties(Constructor.prototype, protoProps); if (staticProps) Filter_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var Filter = /*#__PURE__*/function () {
  function Filter() {
    Filter_classCallCheck(this, Filter);
  }
  Filter_createClass(Filter, [{
    key: "createBlacklist",
    value: function createBlacklist(type) {
      var services = {};
      for (var service in window.CookieConsent.config.services) {
        if (window.CookieConsent.config.services[service].type === type) {
          if (window.CookieConsent.config.categories[window.CookieConsent.config.services[service].category].needed === false) {
            if (window.CookieConsent.config.categories[window.CookieConsent.config.services[service].category].wanted === false) {
              services[service] = window.CookieConsent.config.services[service];
            }
          }
        }
      }
      var blacklist = [];
      for (var service in services) {
        var type = Utilities.objectType(services[service].search);
        if (type === 'String') {
          blacklist.push(services[service].search);
        } else if (type === 'Array') {
          for (var i = 0; i < services[service].search.length; i++) {
            blacklist.push(services[service].search[i]);
          }
        }
      }
      return blacklist;
    }
  }]);
  return Filter;
}();

;// CONCATENATED MODULE: ./src/lib/InsertScriptFilter.js
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function InsertScriptFilter_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function InsertScriptFilter_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function InsertScriptFilter_createClass(Constructor, protoProps, staticProps) { if (protoProps) InsertScriptFilter_defineProperties(Constructor.prototype, protoProps); if (staticProps) InsertScriptFilter_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

var InsertScriptFilter = /*#__PURE__*/function (_Filter) {
  _inherits(InsertScriptFilter, _Filter);
  var _super = _createSuper(InsertScriptFilter);
  function InsertScriptFilter() {
    InsertScriptFilter_classCallCheck(this, InsertScriptFilter);
    return _super.call(this);
  }
  InsertScriptFilter_createClass(InsertScriptFilter, [{
    key: "init",
    value: function init() {
      this.overrideAppendChild();
      this.overrideInsertBefore();
    }
  }, {
    key: "overrideAppendChild",
    value: function overrideAppendChild() {
      Element.prototype.appendChild = function (elem) {
        if (arguments[0].tagName === 'SCRIPT') {
          //console.log('Appending:', arguments);
          for (var key in window.CookieConsent.config.services) {
            // Did user opt-in?
            if (window.CookieConsent.config.services[key].type === 'dynamic-script') {
              if (arguments[0].outerHTML.indexOf(window.CookieConsent.config.services[key].search) >= 0) {
                if (window.CookieConsent.config.categories[window.CookieConsent.config.services[key].category].wanted === false) {
                  window.CookieConsent.buffer.appendChild.push({
                    'this': this,
                    'category': window.CookieConsent.config.services[key].category,
                    arguments: arguments
                  });
                  return undefined;
                }
              }
            }
          }
        }
        return Node.prototype.appendChild.apply(this, arguments);
      };
    }
  }, {
    key: "overrideInsertBefore",
    value: function overrideInsertBefore() {
      Element.prototype.insertBefore = function (elem) {
        if (arguments[0].tagName === 'SCRIPT') {
          //console.log('Inserting:', arguments);
          for (var key in window.CookieConsent.config.services) {
            // Did user opt-in?
            if (window.CookieConsent.config.services[key].type === 'dynamic-script') {
              if (arguments[0].outerHTML.indexOf(window.CookieConsent.config.services[key].search) >= 0) {
                if (window.CookieConsent.config.categories[window.CookieConsent.config.services[key].category].wanted === false) {
                  window.CookieConsent.buffer.insertBefore.push({
                    'this': this,
                    'category': window.CookieConsent.config.services[key].category,
                    arguments: arguments
                  });
                  return undefined;
                }
              }
            }
          }
        }
        return Node.prototype.insertBefore.apply(this, arguments);
      };
    }
  }]);
  return InsertScriptFilter;
}(Filter);

;// CONCATENATED MODULE: ./src/lib/ScriptTagFilter.js
function ScriptTagFilter_typeof(obj) { "@babel/helpers - typeof"; return ScriptTagFilter_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, ScriptTagFilter_typeof(obj); }
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }
function ScriptTagFilter_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function ScriptTagFilter_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function ScriptTagFilter_createClass(Constructor, protoProps, staticProps) { if (protoProps) ScriptTagFilter_defineProperties(Constructor.prototype, protoProps); if (staticProps) ScriptTagFilter_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _get() { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get; } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get.apply(this, arguments); }
function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = ScriptTagFilter_getPrototypeOf(object); if (object === null) break; } return object; }
function ScriptTagFilter_inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) ScriptTagFilter_setPrototypeOf(subClass, superClass); }
function ScriptTagFilter_setPrototypeOf(o, p) { ScriptTagFilter_setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return ScriptTagFilter_setPrototypeOf(o, p); }
function ScriptTagFilter_createSuper(Derived) { var hasNativeReflectConstruct = ScriptTagFilter_isNativeReflectConstruct(); return function _createSuperInternal() { var Super = ScriptTagFilter_getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = ScriptTagFilter_getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return ScriptTagFilter_possibleConstructorReturn(this, result); }; }
function ScriptTagFilter_possibleConstructorReturn(self, call) { if (call && (ScriptTagFilter_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return ScriptTagFilter_assertThisInitialized(self); }
function ScriptTagFilter_assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function ScriptTagFilter_isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function ScriptTagFilter_getPrototypeOf(o) { ScriptTagFilter_getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return ScriptTagFilter_getPrototypeOf(o); }


var ScriptTagFilter = /*#__PURE__*/function (_Filter) {
  ScriptTagFilter_inherits(ScriptTagFilter, _Filter);
  var _super = ScriptTagFilter_createSuper(ScriptTagFilter);
  function ScriptTagFilter() {
    ScriptTagFilter_classCallCheck(this, ScriptTagFilter);
    return _super.call(this);
  }
  ScriptTagFilter_createClass(ScriptTagFilter, [{
    key: "init",
    value: function init() {
      this.filterTags();
    }
  }, {
    key: "filterTags",
    value: function filterTags() {
      var _this = this;
      Utilities.ready(function () {
        var blacklist = _get(ScriptTagFilter_getPrototypeOf(ScriptTagFilter.prototype), "createBlacklist", _this).call(_this, 'script-tag');
        var scriptTags = document.querySelectorAll('script[type="text/plain"]');
        var _iterator = _createForOfIteratorHelper(scriptTags),
          _step;
        try {
          for (_iterator.s(); !(_step = _iterator.n()).done;) {
            var scriptTag = _step.value;
            if (blacklist.indexOf(scriptTag.dataset.consent) < 0) {
              var newtag = document.createElement('script');
              var parentNode = scriptTag.parentNode;
              scriptTag.type = 'text/javascript';
              var _iterator2 = _createForOfIteratorHelper(scriptTag.attributes),
                _step2;
              try {
                for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
                  var attribute = _step2.value;
                  newtag.setAttribute(attribute.nodeName, attribute.nodeValue);
                }
              } catch (err) {
                _iterator2.e(err);
              } finally {
                _iterator2.f();
              }
              newtag.innerHTML = scriptTag.innerHTML;
              parentNode.insertBefore(newtag, scriptTag);
              parentNode.removeChild(scriptTag);
            }
          }
        } catch (err) {
          _iterator.e(err);
        } finally {
          _iterator.f();
        }
      });
    }
  }]);
  return ScriptTagFilter;
}(Filter);

;// CONCATENATED MODULE: ./src/lib/WrapperFilter.js
function WrapperFilter_typeof(obj) { "@babel/helpers - typeof"; return WrapperFilter_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, WrapperFilter_typeof(obj); }
function WrapperFilter_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function WrapperFilter_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function WrapperFilter_createClass(Constructor, protoProps, staticProps) { if (protoProps) WrapperFilter_defineProperties(Constructor.prototype, protoProps); if (staticProps) WrapperFilter_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function WrapperFilter_get() { if (typeof Reflect !== "undefined" && Reflect.get) { WrapperFilter_get = Reflect.get; } else { WrapperFilter_get = function _get(target, property, receiver) { var base = WrapperFilter_superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return WrapperFilter_get.apply(this, arguments); }
function WrapperFilter_superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = WrapperFilter_getPrototypeOf(object); if (object === null) break; } return object; }
function WrapperFilter_inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) WrapperFilter_setPrototypeOf(subClass, superClass); }
function WrapperFilter_setPrototypeOf(o, p) { WrapperFilter_setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return WrapperFilter_setPrototypeOf(o, p); }
function WrapperFilter_createSuper(Derived) { var hasNativeReflectConstruct = WrapperFilter_isNativeReflectConstruct(); return function _createSuperInternal() { var Super = WrapperFilter_getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = WrapperFilter_getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return WrapperFilter_possibleConstructorReturn(this, result); }; }
function WrapperFilter_possibleConstructorReturn(self, call) { if (call && (WrapperFilter_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return WrapperFilter_assertThisInitialized(self); }
function WrapperFilter_assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function WrapperFilter_isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function WrapperFilter_getPrototypeOf(o) { WrapperFilter_getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return WrapperFilter_getPrototypeOf(o); }

var WrapperFilter = /*#__PURE__*/function (_Filter) {
  WrapperFilter_inherits(WrapperFilter, _Filter);
  var _super = WrapperFilter_createSuper(WrapperFilter);
  function WrapperFilter() {
    WrapperFilter_classCallCheck(this, WrapperFilter);
    return _super.call(this);
  }
  WrapperFilter_createClass(WrapperFilter, [{
    key: "init",
    value: function init() {
      this.filterWrappers();
    }
  }, {
    key: "filterWrappers",
    value: function filterWrappers() {
      var blacklist = WrapperFilter_get(WrapperFilter_getPrototypeOf(WrapperFilter.prototype), "createBlacklist", this).call(this, 'wrapped');
      function wrapper() {
        var name = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
        var callback = arguments.length > 1 ? arguments[1] : undefined;
        if (blacklist.indexOf(name) < 0) {
          callback();
        }
      }
      window.CookieConsent.wrapper = wrapper;
    }
  }]);
  return WrapperFilter;
}(Filter);

;// CONCATENATED MODULE: ./src/lib/LocalCookieFilter.js
function LocalCookieFilter_typeof(obj) { "@babel/helpers - typeof"; return LocalCookieFilter_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, LocalCookieFilter_typeof(obj); }
function LocalCookieFilter_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function LocalCookieFilter_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function LocalCookieFilter_createClass(Constructor, protoProps, staticProps) { if (protoProps) LocalCookieFilter_defineProperties(Constructor.prototype, protoProps); if (staticProps) LocalCookieFilter_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function LocalCookieFilter_get() { if (typeof Reflect !== "undefined" && Reflect.get) { LocalCookieFilter_get = Reflect.get; } else { LocalCookieFilter_get = function _get(target, property, receiver) { var base = LocalCookieFilter_superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return LocalCookieFilter_get.apply(this, arguments); }
function LocalCookieFilter_superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = LocalCookieFilter_getPrototypeOf(object); if (object === null) break; } return object; }
function LocalCookieFilter_inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) LocalCookieFilter_setPrototypeOf(subClass, superClass); }
function LocalCookieFilter_setPrototypeOf(o, p) { LocalCookieFilter_setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return LocalCookieFilter_setPrototypeOf(o, p); }
function LocalCookieFilter_createSuper(Derived) { var hasNativeReflectConstruct = LocalCookieFilter_isNativeReflectConstruct(); return function _createSuperInternal() { var Super = LocalCookieFilter_getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = LocalCookieFilter_getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return LocalCookieFilter_possibleConstructorReturn(this, result); }; }
function LocalCookieFilter_possibleConstructorReturn(self, call) { if (call && (LocalCookieFilter_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return LocalCookieFilter_assertThisInitialized(self); }
function LocalCookieFilter_assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function LocalCookieFilter_isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function LocalCookieFilter_getPrototypeOf(o) { LocalCookieFilter_getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return LocalCookieFilter_getPrototypeOf(o); }

var LocalCookieFilter = /*#__PURE__*/function (_Filter) {
  LocalCookieFilter_inherits(LocalCookieFilter, _Filter);
  var _super = LocalCookieFilter_createSuper(LocalCookieFilter);
  function LocalCookieFilter() {
    LocalCookieFilter_classCallCheck(this, LocalCookieFilter);
    return _super.call(this);
  }
  LocalCookieFilter_createClass(LocalCookieFilter, [{
    key: "init",
    value: function init() {
      this.filterlocalCookies();
    }
  }, {
    key: "getCookieDescriptor",
    value: function getCookieDescriptor() {
      var cookieDescriptor;
      cookieDescriptor = Object.getOwnPropertyDescriptor(document, 'cookie') || Object.getOwnPropertyDescriptor(HTMLDocument.prototype, 'cookie');
      if (!cookieDescriptor) {
        cookieDescriptor = {};
        cookieDescriptor.get = HTMLDocument.prototype.__lookupGetter__("cookie");
        cookieDescriptor.set = HTMLDocument.prototype.__lookupSetter__("cookie");
      }
      return cookieDescriptor;
    }
  }, {
    key: "filterlocalCookies",
    value: function filterlocalCookies() {
      // TODO - implement buffer
      var blacklist = LocalCookieFilter_get(LocalCookieFilter_getPrototypeOf(LocalCookieFilter.prototype), "createBlacklist", this).call(this, 'localcookie');
      var cookieDescriptor = this.getCookieDescriptor();
      Object.defineProperty(document, "cookie", {
        configurable: true,
        get: function get() {
          return cookieDescriptor.get.apply(document);
        },
        set: function set() {
          var cookieArguments = arguments;
          if (blacklist.length) {
            var cookieName = arguments[0].split('=')[0];
            Array.prototype.forEach.call(blacklist, function (blacklistItem) {
              if (cookieName.indexOf(blacklistItem) < 0) cookieDescriptor.set.apply(document, cookieArguments);
            });
          } else {
            cookieDescriptor.set.apply(document, cookieArguments);
          }
        }
      });
    }
  }]);
  return LocalCookieFilter;
}(Filter);

;// CONCATENATED MODULE: ./node_modules/redom/dist/redom.es.js
function parseQuery (query) {
  var chunks = query.split(/([#.])/);
  var tagName = '';
  var id = '';
  var classNames = [];

  for (var i = 0; i < chunks.length; i++) {
    var chunk = chunks[i];
    if (chunk === '#') {
      id = chunks[++i];
    } else if (chunk === '.') {
      classNames.push(chunks[++i]);
    } else if (chunk.length) {
      tagName = chunk;
    }
  }

  return {
    tag: tagName || 'div',
    id: id,
    className: classNames.join(' ')
  };
}

function createElement (query, ns) {
  var ref = parseQuery(query);
  var tag = ref.tag;
  var id = ref.id;
  var className = ref.className;
  var element = ns ? document.createElementNS(ns, tag) : document.createElement(tag);

  if (id) {
    element.id = id;
  }

  if (className) {
    if (ns) {
      element.setAttribute('class', className);
    } else {
      element.className = className;
    }
  }

  return element;
}

function unmount (parent, child) {
  var parentEl = getEl(parent);
  var childEl = getEl(child);

  if (child === childEl && childEl.__redom_view) {
    // try to look up the view if not provided
    child = childEl.__redom_view;
  }

  if (childEl.parentNode) {
    doUnmount(child, childEl, parentEl);

    parentEl.removeChild(childEl);
  }

  return child;
}

function doUnmount (child, childEl, parentEl) {
  var hooks = childEl.__redom_lifecycle;

  if (hooksAreEmpty(hooks)) {
    childEl.__redom_lifecycle = {};
    return;
  }

  var traverse = parentEl;

  if (childEl.__redom_mounted) {
    trigger(childEl, 'onunmount');
  }

  while (traverse) {
    var parentHooks = traverse.__redom_lifecycle || {};

    for (var hook in hooks) {
      if (parentHooks[hook]) {
        parentHooks[hook] -= hooks[hook];
      }
    }

    if (hooksAreEmpty(parentHooks)) {
      traverse.__redom_lifecycle = null;
    }

    traverse = traverse.parentNode;
  }
}

function hooksAreEmpty (hooks) {
  if (hooks == null) {
    return true;
  }
  for (var key in hooks) {
    if (hooks[key]) {
      return false;
    }
  }
  return true;
}

/* global Node, ShadowRoot */

var hookNames = ['onmount', 'onremount', 'onunmount'];
var shadowRootAvailable = typeof window !== 'undefined' && 'ShadowRoot' in window;

function mount (parent, child, before, replace) {
  var parentEl = getEl(parent);
  var childEl = getEl(child);

  if (child === childEl && childEl.__redom_view) {
    // try to look up the view if not provided
    child = childEl.__redom_view;
  }

  if (child !== childEl) {
    childEl.__redom_view = child;
  }

  var wasMounted = childEl.__redom_mounted;
  var oldParent = childEl.parentNode;

  if (wasMounted && (oldParent !== parentEl)) {
    doUnmount(child, childEl, oldParent);
  }

  if (before != null) {
    if (replace) {
      parentEl.replaceChild(childEl, getEl(before));
    } else {
      parentEl.insertBefore(childEl, getEl(before));
    }
  } else {
    parentEl.appendChild(childEl);
  }

  doMount(child, childEl, parentEl, oldParent);

  return child;
}

function trigger (el, eventName) {
  if (eventName === 'onmount' || eventName === 'onremount') {
    el.__redom_mounted = true;
  } else if (eventName === 'onunmount') {
    el.__redom_mounted = false;
  }

  var hooks = el.__redom_lifecycle;

  if (!hooks) {
    return;
  }

  var view = el.__redom_view;
  var hookCount = 0;

  view && view[eventName] && view[eventName]();

  for (var hook in hooks) {
    if (hook) {
      hookCount++;
    }
  }

  if (hookCount) {
    var traverse = el.firstChild;

    while (traverse) {
      var next = traverse.nextSibling;

      trigger(traverse, eventName);

      traverse = next;
    }
  }
}

function doMount (child, childEl, parentEl, oldParent) {
  var hooks = childEl.__redom_lifecycle || (childEl.__redom_lifecycle = {});
  var remount = (parentEl === oldParent);
  var hooksFound = false;

  for (var i = 0, list = hookNames; i < list.length; i += 1) {
    var hookName = list[i];

    if (!remount) { // if already mounted, skip this phase
      if (child !== childEl) { // only Views can have lifecycle events
        if (hookName in child) {
          hooks[hookName] = (hooks[hookName] || 0) + 1;
        }
      }
    }
    if (hooks[hookName]) {
      hooksFound = true;
    }
  }

  if (!hooksFound) {
    childEl.__redom_lifecycle = {};
    return;
  }

  var traverse = parentEl;
  var triggered = false;

  if (remount || (traverse && traverse.__redom_mounted)) {
    trigger(childEl, remount ? 'onremount' : 'onmount');
    triggered = true;
  }

  while (traverse) {
    var parent = traverse.parentNode;
    var parentHooks = traverse.__redom_lifecycle || (traverse.__redom_lifecycle = {});

    for (var hook in hooks) {
      parentHooks[hook] = (parentHooks[hook] || 0) + hooks[hook];
    }

    if (triggered) {
      break;
    } else {
      if (traverse.nodeType === Node.DOCUMENT_NODE ||
        (shadowRootAvailable && (traverse instanceof ShadowRoot)) ||
        (parent && parent.__redom_mounted)
      ) {
        trigger(traverse, remount ? 'onremount' : 'onmount');
        triggered = true;
      }
      traverse = parent;
    }
  }
}

function setStyle (view, arg1, arg2) {
  var el = getEl(view);

  if (typeof arg1 === 'object') {
    for (var key in arg1) {
      setStyleValue(el, key, arg1[key]);
    }
  } else {
    setStyleValue(el, arg1, arg2);
  }
}

function setStyleValue (el, key, value) {
  if (value == null) {
    el.style[key] = '';
  } else {
    el.style[key] = value;
  }
}

/* global SVGElement */

var xlinkns = 'http://www.w3.org/1999/xlink';

function setAttr (view, arg1, arg2) {
  setAttrInternal(view, arg1, arg2);
}

function setAttrInternal (view, arg1, arg2, initial) {
  var el = getEl(view);

  var isObj = typeof arg1 === 'object';

  if (isObj) {
    for (var key in arg1) {
      setAttrInternal(el, key, arg1[key], initial);
    }
  } else {
    var isSVG = el instanceof SVGElement;
    var isFunc = typeof arg2 === 'function';

    if (arg1 === 'style' && typeof arg2 === 'object') {
      setStyle(el, arg2);
    } else if (isSVG && isFunc) {
      el[arg1] = arg2;
    } else if (arg1 === 'dataset') {
      setData(el, arg2);
    } else if (!isSVG && (arg1 in el || isFunc) && (arg1 !== 'list')) {
      el[arg1] = arg2;
    } else {
      if (isSVG && (arg1 === 'xlink')) {
        setXlink(el, arg2);
        return;
      }
      if (initial && arg1 === 'class') {
        arg2 = el.className + ' ' + arg2;
      }
      if (arg2 == null) {
        el.removeAttribute(arg1);
      } else {
        el.setAttribute(arg1, arg2);
      }
    }
  }
}

function setXlink (el, arg1, arg2) {
  if (typeof arg1 === 'object') {
    for (var key in arg1) {
      setXlink(el, key, arg1[key]);
    }
  } else {
    if (arg2 != null) {
      el.setAttributeNS(xlinkns, arg1, arg2);
    } else {
      el.removeAttributeNS(xlinkns, arg1, arg2);
    }
  }
}

function setData (el, arg1, arg2) {
  if (typeof arg1 === 'object') {
    for (var key in arg1) {
      setData(el, key, arg1[key]);
    }
  } else {
    if (arg2 != null) {
      el.dataset[arg1] = arg2;
    } else {
      delete el.dataset[arg1];
    }
  }
}

function redom_es_text (str) {
  return document.createTextNode((str != null) ? str : '');
}

function parseArgumentsInternal (element, args, initial) {
  for (var i = 0, list = args; i < list.length; i += 1) {
    var arg = list[i];

    if (arg !== 0 && !arg) {
      continue;
    }

    var type = typeof arg;

    if (type === 'function') {
      arg(element);
    } else if (type === 'string' || type === 'number') {
      element.appendChild(redom_es_text(arg));
    } else if (isNode(getEl(arg))) {
      mount(element, arg);
    } else if (arg.length) {
      parseArgumentsInternal(element, arg, initial);
    } else if (type === 'object') {
      setAttrInternal(element, arg, null, initial);
    }
  }
}

function ensureEl (parent) {
  return typeof parent === 'string' ? html(parent) : getEl(parent);
}

function getEl (parent) {
  return (parent.nodeType && parent) || (!parent.el && parent) || getEl(parent.el);
}

function isNode (arg) {
  return arg && arg.nodeType;
}

var htmlCache = {};

function html (query) {
  var args = [], len = arguments.length - 1;
  while ( len-- > 0 ) args[ len ] = arguments[ len + 1 ];

  var element;

  var type = typeof query;

  if (type === 'string') {
    element = memoizeHTML(query).cloneNode(false);
  } else if (isNode(query)) {
    element = query.cloneNode(false);
  } else if (type === 'function') {
    var Query = query;
    element = new (Function.prototype.bind.apply( Query, [ null ].concat( args) ));
  } else {
    throw new Error('At least one argument required');
  }

  parseArgumentsInternal(getEl(element), args, true);

  return element;
}

var el = html;
var h = (/* unused pure expression or super */ null && (html));

html.extend = function extendHtml (query) {
  var args = [], len = arguments.length - 1;
  while ( len-- > 0 ) args[ len ] = arguments[ len + 1 ];

  var clone = memoizeHTML(query);

  return html.bind.apply(html, [ this, clone ].concat( args ));
};

function memoizeHTML (query) {
  return htmlCache[query] || (htmlCache[query] = createElement(query));
}

function setChildren (parent) {
  var children = [], len = arguments.length - 1;
  while ( len-- > 0 ) children[ len ] = arguments[ len + 1 ];

  var parentEl = getEl(parent);
  var current = traverse(parent, children, parentEl.firstChild);

  while (current) {
    var next = current.nextSibling;

    unmount(parent, current);

    current = next;
  }
}

function traverse (parent, children, _current) {
  var current = _current;

  var childEls = new Array(children.length);

  for (var i = 0; i < children.length; i++) {
    childEls[i] = children[i] && getEl(children[i]);
  }

  for (var i$1 = 0; i$1 < children.length; i$1++) {
    var child = children[i$1];

    if (!child) {
      continue;
    }

    var childEl = childEls[i$1];

    if (childEl === current) {
      current = current.nextSibling;
      continue;
    }

    if (isNode(childEl)) {
      var next = current && current.nextSibling;
      var exists = child.__redom_index != null;
      var replace = exists && next === childEls[i$1 + 1];

      mount(parent, child, current, replace);

      if (replace) {
        current = next;
      }

      continue;
    }

    if (child.length != null) {
      current = traverse(parent, child, current);
    }
  }

  return current;
}

function listPool (View, key, initData) {
  return new ListPool(View, key, initData);
}

var ListPool = function ListPool (View, key, initData) {
  this.View = View;
  this.initData = initData;
  this.oldLookup = {};
  this.lookup = {};
  this.oldViews = [];
  this.views = [];

  if (key != null) {
    this.key = typeof key === 'function' ? key : propKey(key);
  }
};

ListPool.prototype.update = function update (data, context) {
  var ref = this;
    var View = ref.View;
    var key = ref.key;
    var initData = ref.initData;
  var keySet = key != null;

  var oldLookup = this.lookup;
  var newLookup = {};

  var newViews = new Array(data.length);
  var oldViews = this.views;

  for (var i = 0; i < data.length; i++) {
    var item = data[i];
    var view = (void 0);

    if (keySet) {
      var id = key(item);

      view = oldLookup[id] || new View(initData, item, i, data);
      newLookup[id] = view;
      view.__redom_id = id;
    } else {
      view = oldViews[i] || new View(initData, item, i, data);
    }
    view.update && view.update(item, i, data, context);

    var el = getEl(view.el);

    el.__redom_view = view;
    newViews[i] = view;
  }

  this.oldViews = oldViews;
  this.views = newViews;

  this.oldLookup = oldLookup;
  this.lookup = newLookup;
};

function propKey (key) {
  return function (item) {
    return item[key];
  };
}

function list (parent, View, key, initData) {
  return new List(parent, View, key, initData);
}

var List = function List (parent, View, key, initData) {
  this.View = View;
  this.initData = initData;
  this.views = [];
  this.pool = new ListPool(View, key, initData);
  this.el = ensureEl(parent);
  this.keySet = key != null;
};

List.prototype.update = function update (data, context) {
    if ( data === void 0 ) data = [];

  var ref = this;
    var keySet = ref.keySet;
  var oldViews = this.views;

  this.pool.update(data, context);

  var ref$1 = this.pool;
    var views = ref$1.views;
    var lookup = ref$1.lookup;

  if (keySet) {
    for (var i = 0; i < oldViews.length; i++) {
      var oldView = oldViews[i];
      var id = oldView.__redom_id;

      if (lookup[id] == null) {
        oldView.__redom_index = null;
        unmount(this, oldView);
      }
    }
  }

  for (var i$1 = 0; i$1 < views.length; i$1++) {
    var view = views[i$1];

    view.__redom_index = i$1;
  }

  setChildren(this, views);

  if (keySet) {
    this.lookup = lookup;
  }
  this.views = views;
};

List.extend = function extendList (parent, View, key, initData) {
  return List.bind(List, parent, View, key, initData);
};

list.extend = List.extend;

/* global Node */

function place (View, initData) {
  return new Place(View, initData);
}

var Place = function Place (View, initData) {
  this.el = redom_es_text('');
  this.visible = false;
  this.view = null;
  this._placeholder = this.el;

  if (View instanceof Node) {
    this._el = View;
  } else if (View.el instanceof Node) {
    this._el = View;
    this.view = View;
  } else {
    this._View = View;
  }

  this._initData = initData;
};

Place.prototype.update = function update (visible, data) {
  var placeholder = this._placeholder;
  var parentNode = this.el.parentNode;

  if (visible) {
    if (!this.visible) {
      if (this._el) {
        mount(parentNode, this._el, placeholder);
        unmount(parentNode, placeholder);

        this.el = getEl(this._el);
        this.visible = visible;
      } else {
        var View = this._View;
        var view = new View(this._initData);

        this.el = getEl(view);
        this.view = view;

        mount(parentNode, view, placeholder);
        unmount(parentNode, placeholder);
      }
    }
    this.view && this.view.update && this.view.update(data);
  } else {
    if (this.visible) {
      if (this._el) {
        mount(parentNode, placeholder, this._el);
        unmount(parentNode, this._el);

        this.el = placeholder;
        this.visible = visible;

        return;
      }
      mount(parentNode, placeholder, this.view);
      unmount(parentNode, this.view);

      this.el = placeholder;
      this.view = null;
    }
  }
  this.visible = visible;
};

/* global Node */

function router (parent, Views, initData) {
  return new Router(parent, Views, initData);
}

var Router = function Router (parent, Views, initData) {
  this.el = ensureEl(parent);
  this.Views = Views;
  this.initData = initData;
};

Router.prototype.update = function update (route, data) {
  if (route !== this.route) {
    var Views = this.Views;
    var View = Views[route];

    this.route = route;

    if (View && (View instanceof Node || View.el instanceof Node)) {
      this.view = View;
    } else {
      this.view = View && new View(this.initData, data);
    }

    setChildren(this.el, [this.view]);
  }
  this.view && this.view.update && this.view.update(data, route);
};

var ns = 'http://www.w3.org/2000/svg';

var svgCache = {};

function svg (query) {
  var args = [], len = arguments.length - 1;
  while ( len-- > 0 ) args[ len ] = arguments[ len + 1 ];

  var element;

  var type = typeof query;

  if (type === 'string') {
    element = memoizeSVG(query).cloneNode(false);
  } else if (isNode(query)) {
    element = query.cloneNode(false);
  } else if (type === 'function') {
    var Query = query;
    element = new (Function.prototype.bind.apply( Query, [ null ].concat( args) ));
  } else {
    throw new Error('At least one argument required');
  }

  parseArgumentsInternal(getEl(element), args, true);

  return element;
}

var s = (/* unused pure expression or super */ null && (svg));

svg.extend = function extendSvg (query) {
  var clone = memoizeSVG(query);

  return svg.bind(this, clone);
};

svg.ns = ns;

function memoizeSVG (query) {
  return svgCache[query] || (svgCache[query] = createElement(query, ns));
}



;// CONCATENATED MODULE: ./src/lib/Language.js
function Language_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function Language_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function Language_createClass(Constructor, protoProps, staticProps) { if (protoProps) Language_defineProperties(Constructor.prototype, protoProps); if (staticProps) Language_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
var Language = /*#__PURE__*/function () {
  function Language() {
    Language_classCallCheck(this, Language);
  }
  Language_createClass(Language, [{
    key: "setLocale",
    value: function setLocale(locale) {
      window.CookieConsent.config.language.current = locale;
    }
  }], [{
    key: "getTranslation",
    value: function getTranslation(object, locale, key) {
      var currentLocale;
      if (!object.hasOwnProperty('language')) return '[Missing language object]';
      if (!object.language.hasOwnProperty('locale')) return '[Missing locale object]';
      currentLocale = object.language.locale.hasOwnProperty(locale) ? locale : 'en';
      return object.language.locale[currentLocale].hasOwnProperty(key) ? object.language.locale[currentLocale][key] : '[Missing translation]';
    }
  }]);
  return Language;
}();

;// CONCATENATED MODULE: ./src/lib/Interface.js
function Interface_createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = Interface_unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }
function Interface_unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return Interface_arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return Interface_arrayLikeToArray(o, minLen); }
function Interface_arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }
function Interface_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function Interface_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function Interface_createClass(Constructor, protoProps, staticProps) { if (protoProps) Interface_defineProperties(Constructor.prototype, protoProps); if (staticProps) Interface_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }



var Interface = /*#__PURE__*/function () {
  function Interface() {
    Interface_classCallCheck(this, Interface);
    this.elements = {};
  }
  Interface_createClass(Interface, [{
    key: "buildStyle",
    value: function buildStyle() {
      return el('style', '#cconsent-bar, #cconsent-bar * { box-sizing:border-box }', '#cconsent-bar .visually-hide, #cconsent-modal .visually-hide { position: absolute !important; overflow: hidden !important; clip: rect(1px 1px 1px 1px) !important; clip: rect(1px, 1px, 1px, 1px) !important;width: 1px !important; height: 1px !important; }', '#cconsent-bar { background-color:' + window.CookieConsent.config.theme.barColor + '; color:' + window.CookieConsent.config.theme.barTextColor + '; padding:15px; text-align:right; font-family:sans-serif; font-size:14px; line-height:18px; position:fixed; bottom:0; left:0; width:100%; z-index:9998; transform: translateY(0); transition: transform .6s ease-in-out; transition-delay: .3s;}', '#cconsent-bar.ccb--hidden {transform: translateY(100%); display:block; visible:hidden;}', '#cconsent-bar .ccb__wrapper { display:flex; flex-wrap:wrap; justify-content:space-between; max-width:1800px; margin:0 auto;}', '#cconsent-bar .ccb__left { align-self:center; text-align:left; margin: 15px 0;}', '#cconsent-bar .ccb__right { align-self:center; white-space: nowrap;}', '#cconsent-bar .ccb__right > div {display:inline-block; color:#FFF;}', '#cconsent-bar button { line-height:normal; font-size:14px; border:0; padding:10px 10px; color:' + window.CookieConsent.config.theme.barMainButtonTextColor + '; background-color:' + window.CookieConsent.config.theme.barMainButtonColor + ';}', '#cconsent-bar button.consent-give { line-height:normal; font-size:14px; border:none; padding:10px 10px; color:' + window.CookieConsent.config.theme.barMainButtonTextColor + '; background-color:' + window.CookieConsent.config.theme.barMainButtonColor + ';}', '#cconsent-bar button.consent-decline { line-height:normal; font-size:14px; border:none; padding:10px 10px; color:' + window.CookieConsent.config.theme.barMainButtonColor + '; background-color:' + window.CookieConsent.config.theme.barMainButtonTextColor + '; margin-right: 10px; border: 1px solid ' + window.CookieConsent.config.theme.barMainButtonColor + '}', '#cconsent-bar button.ccb__edit { -moz-appearance:none; -webkit-appearance:none; appearance:none; margin-right:15px; border:0; padding:0; text-decoration:underline; color:' + window.CookieConsent.config.theme.barTextColor + '; background:none; }', '#cconsent-bar a:hover, #cconsent-bar button:hover { cursor:pointer; }', '#cconsent-modal { display:none; font-size:14px; line-height:18px; color:#666; width: 100vw; height: 100vh; position:fixed; left:0; top:0; right:0; bottom:0; font-family:sans-serif; font-size:14px; background-color:rgba(0,0,0,0.6); z-index:9999; align-items:center; justify-content:center;}', '@media (max-width: 600px) { #cconsent-modal { height: 100% } }', '#cconsent-modal button { border: 0 }', '#cconsent-modal span, #cconsent-modal span {color:#333}', '#cconsent-modal.ccm--visible {display:flex}', '#cconsent-modal .ccm__content { max-width:600px; max-height:600px; overflow-Y:auto; background-color:#EFEFEF; display:flex; flex-direction:column; justify-content:space-between; }', '@media (max-width: 600px) { #cconsent-modal .ccm__content { max-width:100vw; height:100%; max-height:initial; }}', '#cconsent-modal .ccm__content > .ccm__content__heading { border-bottom:1px solid #D8D8D8; padding:35px 35px 20px; background-color:#EFEFEF; position:relative; }', '#cconsent-modal .ccm__content > .ccm__content__heading span { font-size:21px; font-weight:600; color:#333; margin:0 }', '#cconsent-modal .ccm__content > .ccm__content__heading .ccm__cheading__close { -moz-appearance:none; -webkit-appearance:none; appearance:none; padding:0; border:0; font-weight:600; color:#888; cursor:pointer; font-size:26px; position:absolute; right:15px; top:15px; width:26px; height:26px; background:none; text-align:center; }', '#cconsent-modal .ccm__content > .ccm__content__heading .ccm__cheading__close:focus-visible { box-shadow: 0 0 0 0.25rem ' + window.CookieConsent.config.theme.focusColor + '; }', '#cconsent-modal span, #cconsent-modal span { margin-top:0 }', '#cconsent-modal .ccm__content > .ccm__content__body { background-color:#FFF; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup { margin:0; border-bottom: 1px solid #D8D8D8; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-head {color:#333; font-weight:600; cursor:pointer; position:relative; padding:0; margin:0; transition: background-color .5s ease-out; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-head:hover { background-color:#F9F9F9 }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-head__status { order: 1; position:absolute; left:35px; font-weight: 600; display:inline-block; margin-right: 20px; pointer-events: none; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-head__status.ccm__tab-head__status--checked { font-size:1em; color:#28a834; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-head__status.ccm__tab-head__status--unchecked { font-size:1.4em; color:#e56385; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-head__text { order: 2; pointer-events: none; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup .ccm__tab-head .ccm__tab-head__icon-wedge { transition: transform .3s ease-out; transform-origin: center; position:absolute;right:25px; top:50%; transform:rotate(0deg); transform:translateY(-50%); order: 3;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup .ccm__tab-head .ccm__tab-head__icon-wedge > svg { pointer-events: none; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup.ccm__tabgroup--open .ccm__tab-head .ccm__tab-head__icon-wedge { transform:translateY(-50%) rotate(-180deg) }', '#cconsent-modal .ccm__tab-trigger { appearance: none; background: none; display: flex; flex-direction: row; width: 100%; padding:17px 35px 17px 56px; color:#333; font-weight:600; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content {padding:0; margin:0}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup .ccm__tab-content { max-height: 0; overflow: hidden; opacity: 0; transition: all .5s ease-out; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup .ccm__tab-content__inner { display: flex; flex-direction: row; padding:25px 35px; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup.ccm__tabgroup--open .ccm__tab-head { background-color:#f9f9f9 }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup.ccm__tabgroup--open .ccm__tab-content { max-height: 900px; opacity: 1; }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose {order:1;}', '@media (max-width: 600px) { #cconsent-modal .ccm__content > .ccm__content__body .ccm__tabgroup.ccm__tabgroup--open .ccm__tab-content {flex-direction:column} }', '@media (max-width: 600px) { #cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose { margin-bottom:20px; } }', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose .ccm__switch-component {display:flex; margin-right:35px; align-items:center;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose .ccm__switch__status {font-weight:600;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose .ccm__switch-group {background:none; width:40px; height:20px; margin:0 10px; position:relative;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose .ccm__switch__slider {position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; border-radius:10px; -webkit-transition: .4s; transition: .4s; pointer-events: none;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose .ccm__switch__slider:before {position: absolute; content: ""; height: 12px; width: 12px; left: 4px; bottom: 4px; background-color: white; border-radius:50%; -webkit-transition: .4s; transition: .4s;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose .ccm__switch-group[aria-checked="true"] .ccm__switch__slider {background-color: #28A834;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose .ccm__switch-group:focus-visible {box-shadow: 0 0 0 2px' + window.CookieConsent.config.theme.focusColor + ';}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__choose .ccm__switch-group[aria-checked="true"] .ccm__switch__slider:before {-webkit-transform: translateX(20px); -ms-transform: translateX(20px); transform: translateX(20px);}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__tab-content__desc {order:2;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content span {font-size:18px; margin-bottom:10px; line-height:1;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content p {color:#444; margin-bottom:0}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__list:not(:empty) {margin-top:30px;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__list .ccm__list__title {color:#333; font-weight:600;}', '#cconsent-modal .ccm__content > .ccm__content__body .ccm__tab-content .ccm__list ul { margin:15px 0; padding-left:15px }', '#cconsent-modal .ccm__footer { padding:35px; background-color:#EFEFEF; text-align:center; display: flex; align-items:center; justify-content:flex-end; }', '#cconsent-modal .ccm__footer button { line-height:normal; font-size:14px; transition: background-color .5s ease-out; background-color:' + window.CookieConsent.config.theme.modalMainButtonColor + '; color:' + window.CookieConsent.config.theme.modalMainButtonTextColor + '; border:none; padding:13px; min-width:110px; border-radius: 2px; cursor:pointer; }', '#cconsent-modal .ccm__footer button:hover { background-color:' + Utilities.lightenDarkenColor(window.CookieConsent.config.theme.modalMainButtonColor, -20) + '; }', '#cconsent-modal .ccm__footer button + button { margin-left: 10px; }');
    }
  }, {
    key: "buildBar",
    value: function buildBar() {
      return el('div#cconsent-bar.ccb--hidden', el("div.ccb__wrapper", el('div.ccb__left', el('div.cc-text', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'barMainText'))), el('div.ccb__right', el('div.ccb__button', el('button.ccb__edit', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'barLinkSetting'), {
        'aria-hidden': 'true',
        tabindex: '-1'
      }), window.CookieConsent.config.showRejectAllButton && el('button.consent-decline', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'barBtnRejectAll'), {
        'aria-hidden': 'true',
        tabindex: '-1'
      }), el('button.consent-give', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'barBtnAcceptAll'), {
        'aria-hidden': 'true',
        tabindex: '-1'
      })))), {
        role: 'region',
        'aria-label': Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'cookieBarLabel'),
        'aria-hidden': 'true',
        tabindex: '-1'
      });
    }
  }, {
    key: "buildModal",
    value: function buildModal() {
      // Cookie names list middleware
      var listCookies = function listCookies(category) {
        var list = [];
        for (var service in window.CookieConsent.config.services) {
          window.CookieConsent.config.services[service].category === category && list.push(window.CookieConsent.config.services[service]);
        }
        if (list.length) {
          var listItems = [];
          for (var item in list) {
            listItems.push(el('li', Language.getTranslation(list[item], window.CookieConsent.config.language.current, 'name')));
          }
          return [el('div.ccm__list', el('span.ccm__list__title', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'modalAffectedSolutions')), el('ul', listItems))];
        }
      };
      function modalTabGroups() {
        var contentItems = [];
        var i = 0;
        for (var key in window.CookieConsent.config.categories) {
          var tabId = Math.random().toString(16).slice(2);
          contentItems.push(el('dl.ccm__tabgroup' + '.' + key + (window.CookieConsent.config.categories[key].checked ? '.checked-5jhk' : ''), {
            'data-category': key
          }, el('dt.ccm__tab-head', el('button#ccm__tab-trigger--' + tabId + '.ccm__tab-trigger', el('span.ccm__tab-head__text', Language.getTranslation(window.CookieConsent.config.categories[key], window.CookieConsent.config.language.current, 'name')), el('span.ccm__tab-head__status' + (window.CookieConsent.config.categories[key].checked ? '.ccm__tab-head__status--checked' : '.ccm__tab-head__status--unchecked'), window.CookieConsent.config.categories[key].checked ? '' : '', {
            'aria-label': window.CookieConsent.config.categories[key].checked ? Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'checked') : Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'unchecked')
          }), el('span.ccm__tab-head__icon-wedge', el(document.createElementNS("http://www.w3.org/2000/svg", "svg"), {
            version: "1.2",
            preserveAspectRatio: "none",
            viewBox: "0 0 24 24",
            class: "icon-wedge-svg",
            "data-id": "e9b3c566e8c14cfea38af128759b91a3",
            style: "opacity: 1; mix-blend-mode: normal; fill: rgb(51, 51, 51); width: 32px; height: 32px;"
          }, el(document.createElementNS("http://www.w3.org/2000/svg", "path"), {
            'xmlns:default': "http://www.w3.org/2000/svg",
            class: "icon-wedge-angle-down",
            d: "M17.2,9.84c0-0.09-0.04-0.18-0.1-0.24l-0.52-0.52c-0.13-0.13-0.33-0.14-0.47-0.01c0,0-0.01,0.01-0.01,0.01  l-4.1,4.1l-4.09-4.1C7.78,8.94,7.57,8.94,7.44,9.06c0,0-0.01,0.01-0.01,0.01L6.91,9.6c-0.13,0.13-0.14,0.33-0.01,0.47  c0,0,0.01,0.01,0.01,0.01l4.85,4.85c0.13,0.13,0.33,0.14,0.47,0.01c0,0,0.01-0.01,0.01-0.01l4.85-4.85c0.06-0.06,0.1-0.15,0.1-0.24  l0,0H17.2z",
            style: "fill: rgb(51, 51, 51);"
          }))), {
            'aria-expanded': 'false',
            'aria-controls': 'ccm__tab-content--' + tabId
          })), el('dd#ccm__tab-content--' + tabId + '.ccm__tab-content', el('div.ccm__tab-content__inner', el('div.ccm__tab-content__desc', el('span#ccm__tab-content__title--' + tabId, Language.getTranslation(window.CookieConsent.config.categories[key], window.CookieConsent.config.language.current, 'name')), el('p', Language.getTranslation(window.CookieConsent.config.categories[key], window.CookieConsent.config.language.current, 'description')), el('div.ccm__list', listCookies(key))), el('div.ccm__tab-content__choose', !window.CookieConsent.config.categories[key].needed && el('div.ccm__switch-component', el('span.ccm__switch__status.status-off', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'off')), el('button.ccm__switch-group', el('span.ccm__switch__text.visually-hide', Language.getTranslation(window.CookieConsent.config.categories[key], window.CookieConsent.config.language.current, 'name')), el('span.ccm__switch__slider'), {
            'role': 'switch',
            'data-category': key,
            'aria-checked': window.CookieConsent.config.categories[key].checked,
            'aria-label': Language.getTranslation(window.CookieConsent.config.categories[key], window.CookieConsent.config.language.current, 'name')
          }), el('span.ccm__switch__status.status-on', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'on'))))), {
            'role': 'region',
            'aria-labelledby': 'ccm__tab-trigger--' + tabId,
            'aria-hidden': 'true'
          })));
          i++;
        }
        return contentItems;
      }
      return el('dialog#cconsent-modal', el('div.ccm__content', el('div.ccm__content__heading', el('span#ccm__content__title', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'modalMainTitle')), el('p', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'modalMainText'), window.CookieConsent.config.modalMainTextMoreLink ? el('a', {
        href: window.CookieConsent.config.modalMainTextMoreLink,
        target: '_blank',
        rel: 'noopener noreferrer'
      }, Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'learnMore')) : null), el('button.ccm__cheading__close', '', {
        'aria-label': Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'closeAriaLabel')
      })), el('div.ccm__content__body', el('div.ccm__tabs', modalTabGroups())), el('div.ccm__footer', el('button#ccm__footer__consent-modal-submit', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'modalBtnSave')), window.CookieConsent.config.showRejectAllButton && el('button.consent-decline', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'modalBtnRejectAll')), el('button.consent-give', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'modalBtnAcceptAll')))), {
        'aria-labelledby': 'ccm__content__title',
        'aria-hidden': 'true'
      });
    }
  }, {
    key: "buildInitialModal",
    value: function buildInitialModal() {
      return el('dialog#cconsent-modal', el('div.ccm__content', el('div.ccm__content__heading', el('span#ccm__content__title', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'modalMainTitle')), el('p', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'modalMainText'), window.CookieConsent.config.modalMainTextMoreLink ? el('a', {
        href: window.CookieConsent.config.modalMainTextMoreLink,
        target: '_blank',
        rel: 'noopener noreferrer'
      }, Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'learnMore')) : null)), el('div.ccm__footer', el('button.consent-decline', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'initModalBtnDisagree')), el('button.ccm__edit', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'initModalBtnOptions')), el('button.consent-give', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'initModalBtnAgree')))), {
        'aria-labelledby': 'ccm__content__title',
        'aria-hidden': 'true'
      });
    }
  }, {
    key: "modalRedrawIcons",
    value: function modalRedrawIcons() {
      var tabGroups = this.elements['modal'].querySelectorAll('.ccm__tabgroup');
      var _iterator = Interface_createForOfIteratorHelper(tabGroups),
        _step;
      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var tabGroup = _step.value;
          var lightSwitch = tabGroup.querySelector('button.ccm__switch-group');
          var tabStatus = tabGroup.querySelector('.ccm__tab-head__status');
          if (window.CookieConsent.config.categories[tabGroup.dataset.category].checked) {
            if (!tabGroup.classList.contains('checked-5jhk')) {
              tabGroup.classList.add('checked-5jhk');
              lightSwitch.setAttribute('aria-checked', 'true');
              tabStatus.classList.remove('ccm__tab-head__status--unchecked');
              tabStatus.setAttribute('aria-label', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'checked'));
              tabStatus.textContent = '';
              tabStatus.classList.add('ccm__tab-head__status--checked');
            }
            ;
          } else {
            if (tabGroup.classList.contains('checked-5jhk')) tabGroup.classList.remove('checked-5jhk');
            lightSwitch.setAttribute('aria-checked', 'false');
            tabStatus.setAttribute('aria-label', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'unchecked'));
            tabStatus.textContent = '';
            tabStatus.classList.add('ccm__tab-head__status--unchecked');
          }
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }
    }
  }, {
    key: "render",
    value: function render(name, elem, callback) {
      if (typeof callback === 'undefined') callback = function callback() {};
      if (typeof this.elements[name] !== 'undefined') {
        this.elements[name].parentNode.replaceChild(elem, this.elements[name]);
        this.elements[name] = elem;
        callback(elem);
        return elem;
      } else {
        var insertedElem = mount(document.body, elem, document.body.firstChild);
        if (insertedElem) {
          this.elements[name] = insertedElem;
        }
        callback(insertedElem);
        return insertedElem;
      }
    }
  }, {
    key: "buildInterface",
    value: function buildInterface(callback) {
      if (typeof callback === 'undefined') callback = function callback() {};
      var that = this;
      Utilities.ready(function () {
        if (window.CookieConsent.config.noUI) {
          that.writeBufferToDOM();
          that.buildCookie(function (cookie) {
            that.setCookie(cookie);
          });
          callback();
          return;
        }
        that.render('style', that.buildStyle());

        //show the bar only if layout mode is 'bar'
        if (window.CookieConsent.config.mode == 'bar') {
          that.render('bar', that.buildBar(), function (bar) {
            // Show the bar after a while
            if (!window.CookieConsent.config.cookieExists) {
              setTimeout(function () {
                var _ref, _ref2;
                var buttonSettings = bar.querySelector('.ccb__edit');
                var buttonConsentGive = bar.querySelector('.consent-give');
                var buttonConsentDecline = bar.querySelector('.consent-decline');
                bar.classList.remove('ccb--hidden');
                bar.setAttribute('aria-hidden', 'false');
                bar.setAttribute('tabindex', '0');
                buttonSettings.setAttribute('tabindex', '0');
                buttonSettings.setAttribute('aria-hidden', 'false');
                buttonConsentGive.setAttribute('tabindex', '0');
                buttonConsentGive.setAttribute('aria-hidden', 'false');
                (_ref = buttonConsentDecline !== null) !== null && _ref !== void 0 ? _ref : buttonConsentDecline.setAttribute('tabindex', '0');
                (_ref2 = buttonConsentDecline !== null) !== null && _ref2 !== void 0 ? _ref2 : buttonConsentDecline.setAttribute('aria-hidden', 'false');
              }, window.CookieConsent.config.UITimeout);
            }
          });
        }
        that.render('modal', that.buildModal());

        //show init modal if layout mode is 'modal'
        if (window.CookieConsent.config.mode == 'modal') {
          that.render('modalInit', that.buildInitialModal(), function (modal) {
            if (!window.CookieConsent.config.cookieExists) {
              setTimeout(function () {
                modal.classList.add('ccm--visible');
                modal.setAttribute('aria-hidden', 'false');
                modal.setAttribute('tabindex', '0');
                modal.querySelector('.ccm__footer').style.justifyContent = 'center';
              }, window.CookieConsent.config.UITimeout);
            }
          });
        }
        callback();
      });
    }
  }, {
    key: "addEventListeners",
    value: function addEventListeners(elements) {
      var _this = this;
      // Set the default state for modal
      var modalOpen = false;
      var focusTarget = document.querySelector('body');

      // If you click Accept all cookies
      var buttonConsentGive = document.querySelectorAll('.consent-give');
      var _iterator2 = Interface_createForOfIteratorHelper(buttonConsentGive),
        _step2;
      try {
        var _loop = function _loop() {
          var button = _step2.value;
          button.addEventListener('click', function () {
            var _this$elements$bar4, _this$elements$bar5, _this$elements$bar6, _this$elements$modalI13, _this$elements$modalI14, _this$elements$modalI15, _ref5, _ref6;
            var buttonSettings = document.querySelector('.ccb__edit');
            var buttonConsentDecline = document.querySelector('.consent-decline');

            // We set config to full consent
            for (var key in window.CookieConsent.config.categories) {
              window.CookieConsent.config.categories[key].wanted = window.CookieConsent.config.categories[key].checked = true;
            }
            _this.writeBufferToDOM();
            _this.buildCookie(function (cookie) {
              _this.setCookie(cookie);
            });
            (_this$elements$bar4 = _this.elements['bar']) === null || _this$elements$bar4 === void 0 ? void 0 : _this$elements$bar4.classList.add('ccb--hidden');
            (_this$elements$bar5 = _this.elements['bar']) === null || _this$elements$bar5 === void 0 ? void 0 : _this$elements$bar5.setAttribute('aria-hidden', 'true');
            (_this$elements$bar6 = _this.elements['bar']) === null || _this$elements$bar6 === void 0 ? void 0 : _this$elements$bar6.setAttribute('tabindex', '-1');
            _this.elements['modal'].classList.remove('ccm--visible');
            _this.elements['modal'].setAttribute('aria-hidden', 'true');
            _this.elements['modal'].setAttribute('tabindex', '-1');
            (_this$elements$modalI13 = _this.elements['modalInit']) === null || _this$elements$modalI13 === void 0 ? void 0 : _this$elements$modalI13.classList.remove('ccm--visible');
            (_this$elements$modalI14 = _this.elements['modalInit']) === null || _this$elements$modalI14 === void 0 ? void 0 : _this$elements$modalI14.setAttribute('aria-hidden', 'true');
            (_this$elements$modalI15 = _this.elements['modalInit']) === null || _this$elements$modalI15 === void 0 ? void 0 : _this$elements$modalI15.setAttribute('tabindex', '-1');
            button.setAttribute('tabindex', '-1');
            button.setAttribute('aria-hidden', 'true');
            buttonSettings.setAttribute('tabindex', '-1');
            buttonSettings.setAttribute('aria-hidden', 'true');
            (_ref5 = buttonConsentDecline !== null) !== null && _ref5 !== void 0 ? _ref5 : buttonConsentDecline.setAttribute('tabindex', '-1');
            (_ref6 = buttonConsentDecline !== null) !== null && _ref6 !== void 0 ? _ref6 : buttonConsentDecline.setAttribute('aria-hidden', 'true');
            focusTarget.focus();
            modalOpen = false;
            _this.modalRedrawIcons();
          });
        };
        for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
          _loop();
        }

        // If you click Reject all cookies
      } catch (err) {
        _iterator2.e(err);
      } finally {
        _iterator2.f();
      }
      var buttonConsentDecline = document.querySelectorAll('.consent-decline');
      var _iterator3 = Interface_createForOfIteratorHelper(buttonConsentDecline),
        _step3;
      try {
        var _loop2 = function _loop2() {
          var button = _step3.value;
          button.addEventListener('click', function () {
            var _this$elements$bar7, _this$elements$bar8, _this$elements$bar9, _this$elements$modalI16, _this$elements$modalI17, _this$elements$modalI18;
            var buttonSettings = document.querySelector('.ccb__edit');
            var buttonConsentGive = document.querySelector('.consent-give');

            // We set config to full consent only in is needed
            for (var key in window.CookieConsent.config.categories) {
              window.CookieConsent.config.categories[key].wanted = window.CookieConsent.config.categories[key].checked = window.CookieConsent.config.categories[key].needed;
            }
            _this.writeBufferToDOM();
            _this.buildCookie(function (cookie) {
              _this.setCookie(cookie);
            });
            (_this$elements$bar7 = _this.elements['bar']) === null || _this$elements$bar7 === void 0 ? void 0 : _this$elements$bar7.classList.add('ccb--hidden');
            (_this$elements$bar8 = _this.elements['bar']) === null || _this$elements$bar8 === void 0 ? void 0 : _this$elements$bar8.setAttribute('aria-hidden', 'true');
            (_this$elements$bar9 = _this.elements['bar']) === null || _this$elements$bar9 === void 0 ? void 0 : _this$elements$bar9.setAttribute('tabindex', '-1');
            _this.elements['modal'].classList.remove('ccm--visible');
            _this.elements['modal'].setAttribute('aria-hidden', 'true');
            _this.elements['modal'].setAttribute('tabindex', '-1');
            (_this$elements$modalI16 = _this.elements['modalInit']) === null || _this$elements$modalI16 === void 0 ? void 0 : _this$elements$modalI16.classList.remove('ccm--visible');
            (_this$elements$modalI17 = _this.elements['modalInit']) === null || _this$elements$modalI17 === void 0 ? void 0 : _this$elements$modalI17.setAttribute('aria-hidden', 'true');
            (_this$elements$modalI18 = _this.elements['modalInit']) === null || _this$elements$modalI18 === void 0 ? void 0 : _this$elements$modalI18.setAttribute('tabindex', '-1');
            button.setAttribute('tabindex', '-1');
            button.setAttribute('aria-hidden', 'true');
            buttonSettings.setAttribute('tabindex', '-1');
            buttonSettings.setAttribute('aria-hidden', 'true');
            buttonConsentGive.setAttribute('tabindex', '-1');
            buttonConsentGive.setAttribute('aria-hidden', 'true');
            focusTarget.focus();
            modalOpen = false;
            _this.modalRedrawIcons();
          });
        };
        for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
          _loop2();
        }

        // If you click Cookie settings and open settings modal
      } catch (err) {
        _iterator3.e(err);
      } finally {
        _iterator3.f();
      }
      Array.prototype.forEach.call(document.querySelectorAll('.ccm__edit, .ccb__edit'), function (edit) {
        edit.addEventListener('click', function () {
          var _this$elements$modalI, _this$elements$modalI2, _this$elements$modalI3;
          modalOpen = true;
          _this.elements['modal'].classList.add('ccm--visible');
          _this.elements['modal'].setAttribute('aria-hidden', 'false');
          _this.elements['modal'].setAttribute('tabindex', '0');
          _this.elements['modal'].querySelector('.ccm__cheading__close').focus();
          (_this$elements$modalI = _this.elements['modalInit']) === null || _this$elements$modalI === void 0 ? void 0 : _this$elements$modalI.classList.remove('ccm--visible');
          (_this$elements$modalI2 = _this.elements['modalInit']) === null || _this$elements$modalI2 === void 0 ? void 0 : _this$elements$modalI2.setAttribute('aria-hidden', 'true');
          (_this$elements$modalI3 = _this.elements['modalInit']) === null || _this$elements$modalI3 === void 0 ? void 0 : _this$elements$modalI3.setAttribute('tabindex', '-1');
        });
      });

      // If you click trough the tabs on Cookie settings
      // If you click on/off switch
      this.elements['modal'].querySelector('.ccm__tabs').addEventListener('click', function (event) {
        // If you click trough the tabs on Cookie settings
        if (event.target.classList.contains('ccm__tab-trigger') || event.target.classList.contains('ccm__tab-head__icon-wedge')) {
          var getDlParent = function getDlParent(eventTarget) {
            var parent = eventTarget.parentNode;
            if (parent.nodeName !== 'DL') {
              return getDlParent(parent);
            } else {
              return parent;
            }
          };
          var parentDl = getDlParent(event.target);
          if (parentDl.classList.contains('ccm__tabgroup--open')) {
            parentDl.classList.remove('ccm__tabgroup--open');
            event.target.setAttribute('aria-expanded', 'false');
            parentDl.querySelector('.ccm__tab-content').setAttribute('aria-hidden', 'true');
          } else {
            parentDl.classList.add('ccm__tabgroup--open');
            event.target.setAttribute('aria-expanded', 'true');
            parentDl.querySelector('.ccm__tab-content').setAttribute('aria-hidden', 'false');
          }
        }

        // If you click on/off switch
        if (event.target.classList.contains('ccm__switch-group')) {
          var status = event.target.getAttribute('aria-checked');
          var label = event.target.textContent.trim();
          var dl = document.querySelector('.ccm__tabgroup.' + event.target.dataset.category);
          var dlStatus = document.querySelector('.ccm__tabgroup.' + event.target.dataset.category + ' .ccm__tab-head__status');
          window.CookieConsent.config.categories[event.target.dataset.category].wanted = window.CookieConsent.config.categories[event.target.dataset.category].checked = status === 'true' ? false : true;
          event.target.setAttribute('aria-checked', status !== 'true');
          dl.classList.remove('checked-5jhk');
          dlStatus.classList.remove('ccm__tab-head__status--checked');
          dlStatus.classList.remove('ccm__tab-head__status--unchecked');
          if (status !== 'true') {
            event.target.setAttribute('aria-label', label + ' ' + Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'enabled'));
            dl.classList.add('checked-5jhk');
            dlStatus.setAttribute('aria-label', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'checked'));
            dlStatus.textContent = '';
            dlStatus.classList.add('ccm__tab-head__status--checked');
          } else {
            event.target.setAttribute('aria-label', label + ' ' + Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'disabled'));
            dl.classList.remove('checked-5jhk');
            dlStatus.setAttribute('aria-label', Language.getTranslation(window.CookieConsent.config, window.CookieConsent.config.language.current, 'unchecked'));
            dlStatus.textContent = '';
            dlStatus.classList.add('ccm__tab-head__status--unchecked');
          }
        }
      });

      // If you click close on open modal
      this.elements['modal'].querySelector('.ccm__cheading__close').addEventListener('click', function (event) {
        var _this$elements$modalI4, _this$elements$modalI5, _this$elements$modalI6;
        _this.elements['modal'].classList.remove('ccm--visible');
        _this.elements['modal'].setAttribute('aria-hidden', 'true');
        _this.elements['modal'].setAttribute('tabindex', '-1');
        (_this$elements$modalI4 = _this.elements['modalInit']) === null || _this$elements$modalI4 === void 0 ? void 0 : _this$elements$modalI4.classList.add('ccm--visible');
        (_this$elements$modalI5 = _this.elements['modalInit']) === null || _this$elements$modalI5 === void 0 ? void 0 : _this$elements$modalI5.setAttribute('aria-hidden', 'false');
        (_this$elements$modalI6 = _this.elements['modalInit']) === null || _this$elements$modalI6 === void 0 ? void 0 : _this$elements$modalI6.setAttribute('tabindex', '0');
        modalOpen = false;
      });
      document.addEventListener('keydown', function (event) {
        if (modalOpen && (!event.keyCode || event.keyCode === 27)) {
          var _this$elements$modalI7, _this$elements$modalI8, _this$elements$modalI9;
          _this.elements['modal'].classList.remove('ccm--visible');
          _this.elements['modal'].setAttribute('aria-hidden', 'true');
          _this.elements['modal'].setAttribute('tabindex', '-1');
          (_this$elements$modalI7 = _this.elements['modalInit']) === null || _this$elements$modalI7 === void 0 ? void 0 : _this$elements$modalI7.classList.add('ccm--visible');
          (_this$elements$modalI8 = _this.elements['modalInit']) === null || _this$elements$modalI8 === void 0 ? void 0 : _this$elements$modalI8.setAttribute('aria-hidden', 'false');
          (_this$elements$modalI9 = _this.elements['modalInit']) === null || _this$elements$modalI9 === void 0 ? void 0 : _this$elements$modalI9.setAttribute('tabindex', '0');
          modalOpen = false;
        }
      });

      // If you click submit on cookie settings
      document.getElementById('ccm__footer__consent-modal-submit').addEventListener('click', function () {
        var switchElements = _this.elements['modal'].querySelectorAll('.ccm__switch input');
        Array.prototype.forEach.call(switchElements, function (switchElement) {
          window.CookieConsent.config.categories[switchElement.dataset.category].wanted = switchElement.checked;
        });
        var buttonSettings = document.querySelector('.ccb__edit');
        var buttonConsentGive = document.querySelector('.consent-give');
        var buttonConsentDecline = document.querySelector('.consent-decline');
        _this.buildCookie(function (cookie) {
          _this.setCookie(cookie, function () {
            var _this$elements$modalI10, _this$elements$modalI11, _this$elements$modalI12, _this$elements$bar, _this$elements$bar2, _this$elements$bar3, _ref3, _ref4;
            _this.elements['modal'].classList.remove('ccm--visible');
            _this.elements['modal'].setAttribute('aria-hidden', 'true');
            _this.elements['modal'].setAttribute('tabindex', '-1');
            (_this$elements$modalI10 = _this.elements['modalInit']) === null || _this$elements$modalI10 === void 0 ? void 0 : _this$elements$modalI10.classList.remove('ccm--visible');
            (_this$elements$modalI11 = _this.elements['modalInit']) === null || _this$elements$modalI11 === void 0 ? void 0 : _this$elements$modalI11.setAttribute('aria-hidden', 'true');
            (_this$elements$modalI12 = _this.elements['modalInit']) === null || _this$elements$modalI12 === void 0 ? void 0 : _this$elements$modalI12.setAttribute('tabindex', '-1');
            (_this$elements$bar = _this.elements['bar']) === null || _this$elements$bar === void 0 ? void 0 : _this$elements$bar.classList.add('ccb--hidden');
            (_this$elements$bar2 = _this.elements['bar']) === null || _this$elements$bar2 === void 0 ? void 0 : _this$elements$bar2.setAttribute('aria-hidden', 'true');
            (_this$elements$bar3 = _this.elements['bar']) === null || _this$elements$bar3 === void 0 ? void 0 : _this$elements$bar3.setAttribute('tabindex', '-1');
            buttonSettings.setAttribute('tabindex', '-1');
            buttonSettings.setAttribute('aria-hidden', 'true');
            buttonConsentGive.setAttribute('tabindex', '-1');
            buttonConsentGive.setAttribute('aria-hidden', 'true');
            (_ref3 = buttonConsentDecline !== null) !== null && _ref3 !== void 0 ? _ref3 : buttonConsentDecline.setAttribute('tabindex', '-1');
            (_ref4 = buttonConsentDecline !== null) !== null && _ref4 !== void 0 ? _ref4 : buttonConsentDecline.setAttribute('aria-hidden', 'true');
            focusTarget.focus();
            modalOpen = false;
          });
        });
        _this.writeBufferToDOM();
      });
    }
  }, {
    key: "writeBufferToDOM",
    value: function writeBufferToDOM() {
      var _iterator4 = Interface_createForOfIteratorHelper(window.CookieConsent.buffer.appendChild),
        _step4;
      try {
        for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
          var action = _step4.value;
          if (window.CookieConsent.config.categories[action.category].wanted === true) {
            Node.prototype.appendChild.apply(action.this, action.arguments);
          }
        }
      } catch (err) {
        _iterator4.e(err);
      } finally {
        _iterator4.f();
      }
      var _iterator5 = Interface_createForOfIteratorHelper(window.CookieConsent.buffer.insertBefore),
        _step5;
      try {
        for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
          var _action = _step5.value;
          if (window.CookieConsent.config.categories[_action.category].wanted === true) {
            _action.arguments[1] = _action.arguments[0].parentNode === null ? _action.this.lastChild : _action.arguments[1];
            Node.prototype.insertBefore.apply(_action.this, _action.arguments);
          }
        }
      } catch (err) {
        _iterator5.e(err);
      } finally {
        _iterator5.f();
      }
    }
  }, {
    key: "updateConsentMode",
    value: function updateConsentMode(cookie) {
      var isGTMEnabled = window.dataLayer || false;
      if (isGTMEnabled) {
        var gtag = function gtag() {
          dataLayer.push(arguments);
        };
        gtag('consent', 'update', cookie.consentMode);
        localStorage.setItem('consentMode', JSON.stringify(cookie.consentMode));
      }
    }
  }, {
    key: "buildCookie",
    value: function buildCookie(callback) {
      var cookie = {
        version: window.CookieConsent.config.cookieVersion,
        categories: {},
        services: [],
        consentMode: {}
      };
      for (var key in window.CookieConsent.config.categories) {
        cookie.categories[key] = {
          wanted: window.CookieConsent.config.categories[key].wanted
        };
      }
      for (var _key in window.CookieConsent.config.consentModeControls) {
        var _window$CookieConsent;
        cookie.consentMode[_key] = (_window$CookieConsent = window.CookieConsent.config.categories[window.CookieConsent.config.consentModeControls[_key]]) !== null && _window$CookieConsent !== void 0 && _window$CookieConsent.wanted ? 'granted' : 'denied';
      }
      cookie.services = Utilities.listGlobalServices();
      this.updateConsentMode(cookie);
      if (callback) callback(cookie);
      return cookie;
    }
  }, {
    key: "setCookie",
    value: function setCookie(cookie, callback) {
      var expires_in = new Date(Date.now() + 365 * 24 * 60 * 60 * 1000).toUTCString();
      document.cookie = "cconsent=".concat(JSON.stringify(cookie), "; expires=").concat(expires_in, "; path=/;");
      if (callback) callback();
    }
  }]);
  return Interface;
}();

;// CONCATENATED MODULE: ./src/lib/Configuration.js
function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function Configuration_typeof(obj) { "@babel/helpers - typeof"; return Configuration_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, Configuration_typeof(obj); }
function Configuration_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function Configuration_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function Configuration_createClass(Constructor, protoProps, staticProps) { if (protoProps) Configuration_defineProperties(Constructor.prototype, protoProps); if (staticProps) Configuration_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var Configuration = /*#__PURE__*/function () {
  function Configuration(configObject) {
    Configuration_classCallCheck(this, Configuration);
    window.CookieConsent.buffer = {
      appendChild: [],
      insertBefore: []
    };

    // Wrapper filter function
    window.CookieConsent.wrapper = function () {};

    // Settings injector for users
    window.CookieConsent.setConfiguration = this.setConfiguration.bind(this);
    window.CookieConsent.config = {
      active: true,
      cookieExists: false,
      cookieVersion: 1,
      mode: 'bar',
      modalMainTextMoreLink: null,
      showRejectAllButton: false,
      UITimeout: 1000,
      noUI: false,
      theme: {
        barColor: '#221c66',
        barTextColor: '#fff',
        barMainButtonColor: '#fff',
        barMainButtonTextColor: '#221c66',
        modalMainButtonColor: '#221c66',
        modalMainButtonTextColor: '#fff',
        focusColor: 'rgb(40 168 52 / 75%)'
      },
      language: {
        current: '<?php echo $language["htmlLang"]?>',
        locale: {
          en: {
            cookieBarLabel: 'Cookie consent',
            barMainText: '<?php echo $language["widget_cookie_main_text"];?>',
            closeAriaLabel: 'close',
            barLinkSetting: 'Cookie Settings',
            barBtnAcceptAll: 'Accept all cookies',
            barBtnRejectAll: 'Reject all cookies',
            modalMainTitle: 'Cookie settings',
            modalMainText: 'Cookies are small piece of data sent from a website and stored on the user\'s computer by the user\'s web browser while the user is browsing. Your browser stores each message in a small file, called cookie. When you request another page from the server, your browser sends the cookie back to the server. Cookies were designed to be a reliable mechanism for websites to remember information or to record the user\'s browsing activity.',
            modalBtnSave: 'Save current settings',
            modalBtnAcceptAll: 'Accept all cookies and close',
            modalBtnRejectAll: 'Reject all cookies and close',
            initModalBtnAgree: 'I agree',
            initModalBtnDisagree: 'I do not agree',
            initModalBtnOptions: 'Manage options',
            modalAffectedSolutions: 'Affected solutions:',
            learnMore: 'Learn More',
            on: 'On',
            off: 'Off',
            enabled: 'is enabled.',
            disabled: 'is disabled.',
            checked: 'checked',
            unchecked: 'unchecked'
          },
          fr: {
            cookieBarLabel: 'Consentement aux cookies',
            barMainText: '<?php echo $language["widget_cookie_main_text"];?>',
            closeAriaLabel: 'fermer',
            barLinkSetting: 'Paramètres des cookies',
            barBtnAcceptAll: 'Accepter tous les cookies',
            barBtnRejectAll: 'Rejeter tous les cookies',
            modalMainTitle: 'Paramètres des cookies',
            modalMainText: 'Les cookies sont de petits fichiers de données envoyés par un site Web et stockés sur l\'ordinateur de l\'utilisateur par le navigateur Web de l\'utilisateur pendant sa navigation. Votre navigateur stocke chaque message dans un petit fichier, appelé cookie. Lorsque vous demandez une autre page du serveur, votre navigateur renvoie le cookie au serveur. Les cookies ont été conçus pour être un mécanisme fiable permettant aux sites Web de se souvenir des informations ou d\'enregistrer l\'activité de navigation de l\'utilisateur.',
            modalBtnSave: 'Enregistrer les paramètres actuels',
            modalBtnAcceptAll: 'Accepter tous les cookies et fermer',
            modalBtnRejectAll: 'Rejeter tous les cookies et fermer',
            initModalBtnAgree: 'Je suis d\'accord',
            initModalBtnDisagree: 'Je ne suis pas d\'accord',
            initModalBtnOptions: 'Gérer les options',
            modalAffectedSolutions: 'Solutions affectées :',
            learnMore: 'En savoir plus',
            on: 'Activé',
            off: 'Désactivé',
            enabled: 'est activé.',
            disabled: 'est désactivé.',
            checked: 'coché',
            unchecked: 'décoché'
            }

        }
      },
      categories: {},
      consentModeControls: {},
      services: {}
    };
    this.setConfiguration(configObject);
  }
  Configuration_createClass(Configuration, [{
    key: "setConfiguration",
    value: function setConfiguration(configObject) {
      // The user overrides the default config
      // console.log(window.CookieConsent.config, configObject, { ...window.CookieConsent.config, ...configObject });

      this.mergeDeep(window.CookieConsent.config, configObject);
      //loMerge(window.CookieConsent.config, configObject);
      // The cookie overrides the default and user config
      this.cookieToConfig();

      // We tell the world we did this
      Utilities.dispatchEvent(document, 'CCConfigSet');
    }
  }, {
    key: "cookieToConfig",
    value: function cookieToConfig() {
      function removeReload() {
        Utilities.removeCookie();
        location.reload();
        return false;
      }
      document.cookie.split(';').filter(function (item) {
        if (item.indexOf('cconsent') >= 0) {
          var cookieData = JSON.parse(item.split('=')[1]);

          // We check cookie version. If older we need to renew cookie.
          if (typeof cookieData.version === 'undefined') {
            return removeReload();
          } else {
            if (cookieData.version !== window.CookieConsent.config.cookieVersion) {
              return removeReload();
            }
          }

          // We check if cookie data categories also exist in user config
          for (var key in cookieData.categories) {
            // The cookie contains category not present in user config so we invalidate cookie
            if (typeof window.CookieConsent.config.categories[key] === 'undefined') {
              return removeReload();
            }
          }

          // We check if cookie data consent mode controls also exist in user config
          for (var _key in cookieData.consentMode) {
            if (typeof window.CookieConsent.config.consentModeControls[_key] === 'undefined') {
              return removeReload();
            }
          }

          // We check if cookie data services also exist in user config
          cookieData.services.forEach(function (service) {
            // The cookie contains service not present in user config so we invalidate cookie
            if (typeof window.CookieConsent.config.services[service] === 'undefined') {
              return removeReload();
            }
          });

          // If we don't have UI we ignore the saved cookie configuration.
          if (!window.CookieConsent.config.noUI) {
            // We integrate cookie data into the global config object
            for (var _key2 in cookieData.categories) {
              window.CookieConsent.config.categories[_key2].checked = window.CookieConsent.config.categories[_key2].wanted = cookieData.categories[_key2].wanted === true ? true : false;
            }
          }
          window.CookieConsent.config.cookieExists = true;
          return true;
        }
      });
      return false;
    }

    // Simple object check.
  }, {
    key: "isObject",
    value: function isObject(item) {
      return item && Configuration_typeof(item) === 'object' && !Array.isArray(item);
    }

    //Deep merge two objects.
  }, {
    key: "mergeDeep",
    value: function mergeDeep(target) {
      for (var _len = arguments.length, sources = new Array(_len > 1 ? _len - 1 : 0), _key3 = 1; _key3 < _len; _key3++) {
        sources[_key3 - 1] = arguments[_key3];
      }
      if (!sources.length) return target;
      var source = sources.shift();
      if (this.isObject(target) && this.isObject(source)) {
        for (var key in source) {
          if (this.isObject(source[key])) {
            if (!target[key]) Object.assign(target, _defineProperty({}, key, {}));
            this.mergeDeep(target[key], source[key]);
          } else {
            Object.assign(target, _defineProperty({}, key, source[key]));
          }
        }
      }
      return this.mergeDeep.apply(this, [target].concat(sources));
    }
  }]);
  return Configuration;
}();

;// CONCATENATED MODULE: ./src/lib/RemoveCookies.js
function RemoveCookies_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function RemoveCookies_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function RemoveCookies_createClass(Constructor, protoProps, staticProps) { if (protoProps) RemoveCookies_defineProperties(Constructor.prototype, protoProps); if (staticProps) RemoveCookies_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var RemoveCookies = /*#__PURE__*/function () {
  function RemoveCookies() {
    RemoveCookies_classCallCheck(this, RemoveCookies);
  }
  RemoveCookies_createClass(RemoveCookies, [{
    key: "init",
    value: function init() {
      this.removeUnwantedCookies();
    }
  }, {
    key: "removeUnwantedCookies",
    value: function removeUnwantedCookies() {
      var cookieList = [];
      var config = window.CookieConsent.config;
      document.cookie.split(';').map(function (a) {
        cookieList.push(a.split('=')[0].replace(/(^\s*)|(\s*&)/, ''));
      });
      for (var service in config.services) {
        if (Utilities.objectType(config.services[service].cookies) === 'Array') {
          // Remove cookies if they are not wanted by user
          if (!config.categories[config.services[service].category].wanted) {
            for (var i in config.services[service].cookies) {
              var type = Utilities.objectType(config.services[service].cookies[i].name);
              if (type === 'String') {
                if (cookieList.indexOf(config.services[service].cookies[i].name) > -1) {
                  this.removeCookie(config.services[service].cookies[i]);
                }
              } else if (type === 'RegExp') {
                // Searching cookie list for cookies matching specified RegExp
                var cookieDef = config.services[service].cookies[i];
                for (var c in cookieList) {
                  if (cookieList[c].match(cookieDef.name)) {
                    this.removeCookie({
                      name: cookieList[c],
                      domain: Utilities.objectType(cookieDef.domain) === 'String' ? cookieDef.domain : null
                    });
                  }
                }
              }
            }
          }
        }
      }
    }
  }, {
    key: "removeCookie",
    value: function removeCookie(cookie) {
      // Removing cookies from domain and .domain
      var domain = Utilities.objectType(cookie.domain) === 'String' ? "domain=".concat(cookie.domain, ";") : '';
      document.cookie = "".concat(cookie.name, "=; expires=Thu, 01 Jan 1980 00:00:00 UTC; ").concat(domain, " path=/;");
    }
  }]);
  return RemoveCookies;
}();

;// CONCATENATED MODULE: ./src/lib/CookieConsent.js
function CookieConsent_classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function CookieConsent_defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function CookieConsent_createClass(Constructor, protoProps, staticProps) { if (protoProps) CookieConsent_defineProperties(Constructor.prototype, protoProps); if (staticProps) CookieConsent_defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }







var CookieConsent = /*#__PURE__*/function () {
  function CookieConsent() {
    CookieConsent_classCallCheck(this, CookieConsent);
  }
  CookieConsent_createClass(CookieConsent, [{
    key: "init",
    value: function init(configObject) {
      new Configuration(configObject);
      var removeCookies = new RemoveCookies();
      var insertScriptFilter = new InsertScriptFilter();
      var scriptTagFilter = new ScriptTagFilter();
      var wrapperFilter = new WrapperFilter();
      var localCookieFilter = new LocalCookieFilter();
      removeCookies.init();
      insertScriptFilter.init();
      scriptTagFilter.init();
      wrapperFilter.init();
      localCookieFilter.init();
      var UI = new Interface();
      UI.buildInterface(function () {
        UI.addEventListeners();
      });
    }
  }]);
  return CookieConsent;
}();

;// CONCATENATED MODULE: ./src/index.js

var cookieConsent = new CookieConsent();
window.CookieConsent = window.CookieConsent || {};
window.CookieConsent.init = cookieConsent.init;
/******/ })()
;
</script>

<script>

window.CookieConsent.init({
          language: {
            current: '<?php echo $language["htmlLang"]?>'
          },
          categories: {
            necessary: {
              needed: true,
              wanted: true,
              checked: true,
              language: {
                locale: {
                  en: {
                    name: 'Strictly Necessary Cookies',
                    description: 'Strictly necessary cookies are essential for the proper functioning of a website. They enable basic services such as site navigation and access to secure areas. Without these cookies, certain functionalities of the site cannot be guaranteed.',
            
                  },
                  fr: {
                    name: 'Cookies strictement nécessaires',
                    description: 'Les cookies strictement nécessaires sont des cookies indispensables au bon fonctionnement d\'un site web. Ils permettent de fournir des services de base tels que la navigation sur le site et l\'accès aux zones sécurisées. Sans ces cookies, certaines fonctionnalités du site ne peuvent pas être assurées.',
                  }
                }
              }
            },
            analytics: {
              needed: false,
              wanted: false,
              checked: true,
              language: {
                locale: {
                  en: {
                    name: 'Analytics',
                    description:
                      'Analytical cookies help website owners understand how visitors interact with the site by collecting and reporting information anonymously. These cookies allow us to analyze site traffic and improve the user experience',
                  },
                  fr: {
                    name: 'analytiques',
                    description:
                      'Les cookies analytiques aident les propriétaires de sites Web à comprendre comment les visiteurs interagissent avec le site en collectant et en rapportant des informations de manière anonyme. Ces cookies nous permettent d\'analyser le trafic du site et d\'améliorer l\'expérience utilisateur.',
                  },
                },
              },
					  }
          },
          consentModeControls: {
            ad_storage: 'marketing',
            ad_user_data: 'marketing',
            ad_personalization: 'marketing',
            analytics_storage: 'analytics'
          },
          services: {
            googleAnalytics: {
              category: 'analytics',
              type: '',
              search: '',
              language: {
                locale: {
                  en: {
                    name: 'Google Analytics (analytics_storage)'
                  }
                }
              }
            },
            googleAds: {
              category: 'analytics',
              type: '',
              search: '',
              language: {
                locale: {
                  en: {
                    name: 'Google Ads (ad_storage, ad_user_data, ad_personalization)'
                  }
                }
              }
            },
        
          }
        });
    
  </script>

</head>

<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TQT87BFGWS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TQT87BFGWS');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11257212349"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-11257212349');
</script>

<!DOCTYPE html>


<style>
#cookie-banner {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color:#221c66;
    color: white;
    z-index: 9999;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

#cookie-banner-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 80%;
}

#cookie-banner p {
    margin: 0;
}

#cookie-accept {
    margin-left: 20px;
    padding: 10px 20px;
    color: white;
    background-color: #0f9d58;
    border: none;
    cursor: pointer;
}

#cookie-reject {
    margin-left: 20px;
    padding: 10px 20px;
    color: white;
    background-color: red;
    border: none;
    cursor: pointer;
}

#cookie-policy {
    margin-left: 20px;
    color: white;
    text-decoration: underline;
}

</style>



<body>

    <div class="sur-header ">
        <div class="shd sur-header root-width-res-desktop tweb-content-a-center">
            <div class="pl">
                
                <span>
                <div class="langs">
                        <div class="lang">
                            <img src="https://cdn.rw-hosting.net/assets/images/header/language_header.svg" title="Language" alt="Language">
                        </div>
                        <div class="lang-dropdowns">
                          <a href="?lang=en">
                            <img src="https://cdn.rw-hosting.net/assets/images/language/en.webp" title="<?php echo $language["up1"]?>" alt="<?php echo $language["up1"]?>">
                          </a>
                            <a href="?lang=fr">
                                <img src="https://cdn.rw-hosting.net/assets/images/language/fr.webp" title="<?php echo $language["up2"]?>" alt="<?php echo $language["up2"]?>">
                            </a>
                        </div>
                    </div>
                    &nbsp;&nbsp;
                    
                </span>
            </div>
            <div class="pr">
                <div class="cta-button">
                    <a id="btncallphone" href="https://cp.visuhost.com/login"><?php echo $language["up3"]?></a>
                </div>
                <div class="cta-button2">
                    <a id="" href="https://cp.visuhost.com/register"><?php echo $language["up100000000"]?></a>
                </div>
            </div>
        </div>
    </div>
    <header class="padding-1rem">
        <div class="root-width-res-desktop tweb-content-a-center">
            <div class="spacer-header tweb-content-a-center">
                <div class="logo">
                    <a href="/home?lang=<?php echo $language["htmlLang"]?>">
                        <img src="/assets/images/logos/visuhost_bann.webp" title="<?php echo $language["up4"]?>" alt="<?php echo $language["up4"]?>">
                    </a>
                </div>
                <div  class="menu">
                    <div class="DPDdpd">

                        <div class="dropdown ">
                            <a class="A" href="/home?lang=<?php echo $language["htmlLang"]?>">
                                <?php echo $language["headerhomeslidertittle"]?>
                                
                            </a>
                        </div>

                        <div class="dropdown ">
                            <a class="A" >
                            <?php echo $language["up5"]?>
                                <svg fill="#000000" width="800px" height="800px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M759.2 419.8L697.4 358 512 543.4 326.6 358l-61.8 61.8L512 667z"/></svg>
                            </a>
                            <div class="dropdown-content">
                                <div class="dpd-cpp" data-tab-group="group1">
                                    <div class="pl-nv-items">
                                        <div class="nv-items selected-nav-items">
                                            <a >
                                            <?php echo $language["up6"]?>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" />
                                                </svg>
                                            </a>
                                        </div>                     
                                        <div class="nv-items ">
                                            <a >
                                            <?php echo $language["up7"]?>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="nv-items">
                                            <a >
                                            <?php echo $language["up8"]?>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="nv-items">
                                            <a >
                                            <?php echo $language["up62"]?>
                                                <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pr-sections-parent">
                                        <section id="Sect1">
                                            <div class="content-manager-section-header">
                                                <div class="main-section">
                                                    <div class="pl">
                                                        <div class="logo">
                                                            <h9>VisuHost</h9>
                                                        </div>
                                                    </div>
                                                    <div class="pm">
                                                        <h9>
                                                        <?php echo $language["up11"]?>
                                                        </h9>
                                                        <p>
                                                        <?php echo $language["up12"]?>                                                        
                                                    </p>
                                                    </div>
                                                    <div class="pr">
                                                        <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="wrapper-items-a">
                                                    <a href="/vps/vps?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                                <img src="https://cdn.rw-hosting.net/assets/images/header/linux_header.svg" title="Linux VPS" alt="Linux VPS">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                    VPS KVM LINUX
                                                                </h9>
                                                                <p>
                                                                    <?php echo $language["headercloudslidervpsxeon1desc"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
    
    
                                                    <a href="/vps/vps-windows?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                                <img src="https://cdn.rw-hosting.net/assets/images/header/windows_header.svg" title="Windows VPS" alt="VPS Windows">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                    <?php echo $language["headercloudslidervpswindows"]?>
                                                                </h9>
                                                                <p>
                                                                <?php echo $language["headercloudslidervpswindowsdesc"]?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a href="/vps/vps-storage?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                                <img src="https://cdn.rw-hosting.net/assets/images/header/vps_stockage_header.svg" title="Stockage VPS" alt="VPS Stockage">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                <?php echo $language["headercloudslidervpsstorage"]?>
                                                                </h9>
                                                                <p>
                                                                    <?php echo $language["headercloudslidervpsstoragedesc"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>


                                                </div>
                                            </div>
                                        </section>
    
                                        <section style="display: none;" id="Sect2">
                                            <div class="content-manager-section-header">
                                                <div class="main-section">
                                                    <div class="pl">
                                                        <div class="logo">
                                                            <h9>VisuHost</h9>
                                                        </div>
                                                    </div>
                                                    <div class="pm">
                                                        <h9>
                                                        <?php echo $language["up17"]?>
                                                        </h9>
                                                        <p>
                                                        <?php echo $language["up18"]?>
                                                        </p>
                                                    </div>
                                                    <div class="pr">
                                                        <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="wrapper-items-a">
                                                    <a href="/dedicated/dedicated-server-intel?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                            <img src="https://cdn.rw-hosting.net/assets/images/header/intel_core_header.svg" title="<?php echo $language["up19"]?>" alt="<?php echo $language["up19"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                <?php echo $language["fh03"]?>
                                                               </h9>
                                                                <p>
                                                                    <?php echo $language["fh04"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
    
    
                                                    <a href="/dedicated/dedicated-server-ryzen?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                            <img src="https://cdn.rw-hosting.net/assets/images/header/amd_ryzen_header.svg" title="<?php echo $language["up20"]?>" alt="<?php echo $language["up20"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                <?php echo $language["headerdedicatedslideramdryzentittle"]?>
                                                                </h9>
                                                                <p>
                                                                    <?php echo $language["headerdedicatedslideramdryzendesc"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
    
    
                                                    <a href="/dedicated/dedicated-server-flash?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                                <img src="https://cdn.rw-hosting.net/assets/images/header/dedicated_budget_header.svg" title="<?php echo $language["up21"]?>" alt="<?php echo $language["up21"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                <?php echo $language["up21"]?>
                                                               </h9>
                                                                <p>
                                                                <?php echo $language["up22"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
    
    
                                                    <a href="/dedicated/dedicated-server-xeon?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                                <img src="https://cdn.rw-hosting.net/assets/images/header/intel_xeon_header.svg" title="<?php echo $language["up23"]?>" alt="<?php echo $language["up23"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                    <?php echo $language["headerdedicatedsliderxeonv4tittle"]?>
                                                                </h9>
                                                                <p>
                                                                    <?php echo $language["headerdedicatedsliderxeonv42desc"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="/dedicated/dedicated-server-epyc?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                            <img src="https://cdn.rw-hosting.net/assets/images/header/amd_epyc_header.svg" title="<?php echo $language["up105"]?>" alt="<?php echo $language["up105"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                <?php echo $language["headerwebsliderdedicatedserveramdepyc"]?>
                                                                </h9>
                                                                <p>
                                                                <?php echo $language["headerwebsliderdedicatedserveramdepycdesc"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="/dedicated/dedicated-server-flatrate?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                            <img src="https://cdn.rw-hosting.net/assets/images/header/dedicated_flatrate_header.svg" title="<?php echo $language["up24"]?>" alt="<?php echo $language["up24"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                <?php echo $language["up24"]?>
                                                                </h9>
                                                                <p>
                                                                <?php echo $language["up25"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </section>
    
                                        <section style="display: none;" id="Sect3">
                                            <div class="content-manager-section-header">
                                                <div class="main-section">
                                                    <div class="pl">
                                                        <div class="logo">
                                                            <h9>VisuHost</h9>
                                                        </div>
                                                    </div>
                                                    <div class="pm">
                                                        <h9>
                                                        <?php echo $language["up26"]?>
                                                        </h9>
                                                        <p>
                                                        <?php echo $language["up27"]?>
                                                        </p>
                                                    </div>
                                                    <div class="pr">
                                                        <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="wrapper-items-a">
                                                    <a href="/web/web?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                                <img src="https://cdn.rw-hosting.net/assets/images/header/web_header.svg" title="<?php echo $language["up28"]?>" alt="<?php echo $language["up28"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                    <?php echo $language["headerwebsliderpleskweboofers"]?>
                                                                </h9>
                                                                <p>
                                                                    <?php echo $language["headerwebsliderpleskweboofersdesc"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
    
    
                                                    <a href="/web/rvd-web?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                                <img src="https://cdn.rw-hosting.net/assets/images/header/rvd_web_header.svg" title="<?php echo $language["up29"]?>" alt="<?php echo $language["up29"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                    <?php echo $language["headerwebsliderpleskweboofersresseler"]?>
                                                                </h9>
                                                                <p>
                                                                    <?php echo $language["headerwebsliderpleskweboofersresselerdesc"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                        </section>
    
                                        <section style="display: none;" id="Sect4">
                                            <div class="content-manager-section-header">
                                                <div class="main-section">
                                                    <div class="pl">
                                                        <div class="logo">
                                                            <h9>VH</h9>
                                                        </div>
                                                    </div>
                                                    <div class="pm">
                                                        <h9>
                                                        <?php echo $language["up39"]?>
                                                        </h9>
                                                        <p>
                                                        <?php echo $language["up40"]?>
                                                        </p>
                                                    </div>
                                                    <div class="pr">
                                                        <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" />
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="wrapper-items-a">
                                                   <a href="/backup-infrastructure?lang=<?php echo $language["htmlLang"]?>">
                                                        <div class="case">
                                                            <div class="icone">
                                                                <img src="https://cdn.rw-hosting.net/assets/images/header/backup_header.svg" title="<?php echo $language["up42"]?>" alt="<?php echo $language["up42"]?>">
                                                            </div>
                                                            <div class="text">
                                                                <h9>
                                                                <?php echo $language["up42"]?>
                                                                </h9>
                                                                <p>
                                                                <?php echo $language["up43"]?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
  
                                                </div>
                                            </div>
                                        </section>



                                    </div>
                                </div>
                            </div>
                        </div>
    

                        <div class="dropdown">
                            <a class="A" href="">
                            <?php echo $language["up90"]?>
                                <svg fill="#000000" width="800px" height="800px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path d="M759.2 419.8L697.4 358 512 543.4 326.6 358l-61.8 61.8L512 667z"/></svg>
                            </a>
                            <div style="height:auto!important" class="dropdown-content">
                                <div class="dpd-cpp2">
                                    <div class="custom-about-div">
                                        <div class="part-left">
                                            <div class="discover-our-data-center">
                                                <div class="img">
                                                <a href="/data-center?lang=<?php echo $language["htmlLang"]?>">
                                                    <div class="texte">
                                                    </div>
                                                </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="part-right">
                                            <div class="part-left2 flexcol">
                                                <div class="ctpart">
                                                    <div class="maincat">
                                                        <span>
                                                        <?php echo $language["up91"]?>
                                                        </span>
                                                    </div>
                                                    <ul>
                                                        <a href="/anti-ddos?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up92"]?>
                                                            </li>
                                                        </a>
                                                        <a href="/service-level-agreement?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up102"]?>
                                                            </li>
                                                        </a>
                                                        <a href="/data-center?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up94"]?>
                                                            </li>
                                                        </a>
                                                        <a href="/support?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up95"]?>
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="sepline"></div>
                                            <div class="part-mid flexcol">
                                                <div class="ctpart">
                                                    <div class="maincat">
                                                        <span>
                                                        <?php echo $language["up96"]?>
                                                        </span>
                                                    </div>
                                                    <ul>
                                                        <a href="/contact?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                               Contact
                                                            </li>
                                                        </a>
                                                        <a href="/reviews?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up97"]?>
                                                            </li>
                                                        </a>
                                                        <a href="/partners?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up98"]?>
                                                            </li>
                                                        </a>
                                                        <a href="/about?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up99"]?>
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="sepline"></div>
                                            <div class="part-right2 flexcol">
                                                <div class="ctpart">
                                                    <div class="maincat">
                                                        <span>
                                                        <?php echo $language["up100"]?>
                                                        </span>
                                                    </div>
                                                    <ul>
                                                        <a href="#">
                                                            <li>
                                                            <?php echo $language["up101"]?>
                                                            </li>
                                                        </a>
                                                        <a href="/payment-methods?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up93"]?>
                                                            </li>
                                                        </a>
                                                        <a href="/faq?lang=<?php echo $language["htmlLang"]?>">
                                                            <li>
                                                            <?php echo $language["up103"]?>
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="dropsearh" style="display: none;" class="dropdownSearch">
                        <div  class="dropdown-content2">
                            <div class="dpd-cpp2">
                                <div style="max-height: 499px;
    overflow-y: scroll; justify-content:inherit!important" class="content-result">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="posburger">
                        <label style="display: none;" class="burger" for="burger">
                            <input type="checkbox" id="burger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </label>
                    </div>
                </div>
                    <div class="search">
                        <input type="text" class="TheSearchBar" placeholder="<?php echo $language["up966"]?>">
                        <button class="buttonSearch ">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                        </button>
                        <button id="bt2">
                            <svg width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"  stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        
                    </div>
                    </div>
                    
                </div>
                
            </div>   
        </div>
    </header>

    <div class="burger-menu-responsive" style="display: none;">
        <div class="drop-down">
            <div class="texte">
                <p style="color:white;" ><?php echo $language["up5"]?></p>
                <img src="/../assets/images/icon/arrow-down-white.svg" title="Digital" class="arrow">
            </div>
            <div class="sub-drop-downs">
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up6"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="Digital" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="banner">

                        </div>
                        <div class="items-wrapper">
                            <a href="/vps/vps?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/linux_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        VPS LINUX
                                        <p>
                                        <?php echo $language["headercloudslidervpsxeon1desc"]?>   
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/vps/vps-windows?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/windows_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["headercloudslidervpswindows"]?>
                                        <p>
                                        <?php echo $language["headercloudslidervpswindowsdesc"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/vps/vps-storage?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/vps_stockage_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["headercloudslidervpsstorage"]?>
                                        <p>
                                        <?php echo $language["headercloudslidervpsstoragedesc"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/budget-reseller-vps?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/rvd_vps_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up13"]?>
                                        <p>
                                        <?php echo $language["up14"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/evolue-reseller-vps?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/rvd_vps_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up15"]?>
                                        <p>
                                        <?php echo $language["up16"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up7"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="DevWeb" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="banner">

                        </div>
                        <div class="items-wrapper">
                            <a href="/dedicated/dedicated-server-intel?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/intel_core_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        <?php echo $language["fh03"]?>
                                        <p>
                                            <?php echo $language["fh04"]?>   
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/dedicated/dedicated-server-ryzen?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/amd_ryzen_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["headerdedicatedslideramdryzentittle"]?>
                                        <p>
                                        <?php echo $language["headerdedicatedslideramdryzendesc"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/dedicated/dedicated-server-flash?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/dedicated_budget_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up21"]?>
                                        <p>
                                        <?php echo $language["up22"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/dedicated/dedicated-server-xeon?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/intel_xeon_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["headerdedicatedsliderxeonv4tittle"]?>
                                        <p>
                                        <?php echo $language["headerdedicatedsliderxeonv42desc"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/dedicated/dedicated-server-epyc?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/amd_epyc_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["headerwebsliderdedicatedserveramdepyc"]?>
                                        <p>
                                        <?php echo $language["headerwebsliderdedicatedserveramdepycdesc"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/dedicated/dedicated-server-flatrate?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/dedicated_flatrate_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up24"]?>
                                        <p>
                                        <?php echo $language["up25"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up8"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="DevWeb" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="banner">

                        </div>
                        <div class="items-wrapper">
                            <a href="/web/web?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/web_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        <?php echo $language["headerwebsliderpleskweboofers"]?>
                                        <p>
                                            <?php echo $language["headerwebsliderpleskweboofersdesc"]?>   
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/web/rvd-web?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/rvd_web_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["headerwebsliderpleskweboofersresseler"]?>
                                        <p>
                                        <?php echo $language["headerwebsliderpleskweboofersresselerdesc"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/web/hosting-mail?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/mail_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up32"]?>
                                        <p>
                                        <?php echo $language["up33"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up9"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="DevWeb" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="banner">

                        </div>
                        <div class="items-wrapper">
                            <a href="/backup-infrastructure?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/backup_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        <?php echo $language["up42"]?>
                                        <p>
                                            <?php echo $language["up43"]?>   
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/drive?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/syno_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    RW-Cloud - Drive
                                        <p>
                                        <?php echo $language["drive02"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Secon Part Dropdown -->
        <div class="drop-down">
            <div class="texte">
                <p style="color:white;" ><?php echo $language["up58"]?></p>
                <img src="/../assets/images/icon/arrow-down-white.svg" title="Digital" class="arrow">
            </div>
            <div class="sub-drop-downs">
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up59"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="Digital" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="banner">
<!-- Tunnel IP / Protection Web / Version Tel ? -->
                        </div>
                        <div class="items-wrapper">
                        </div>
                    </div>
                </div>
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up60"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="DevWeb" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="banner">
                        </div>
                    </div>
                </div>
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up61"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="DevWeb" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="banner">

                        </div>
                        <div class="items-wrapper">
                            <a href="/backup-infrastructure?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/backup_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        <?php echo $language["up78"]?>
                                        <p>
                                            <?php echo $language["up79"]?>   
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/it-consulting?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/consulting_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        IT Consulting
                                        <p>
                                        <?php echo $language["up80"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/infogerance?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/secu_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        <h9><?php echo $language["up81"]?></h9>
                                        <p>
                                        <?php echo $language["up82"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="/rental-and-purchase?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/loc_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up83"]?>
                                        <p>
                                        <?php echo $language["up84"]?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up62"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="DevWeb" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="banner">

                        </div>
                        <div class="items-wrapper">
                            <a href="/soon?lang=<?php echo $language["htmlLang"]?>">
                                <div class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/ip_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        <?php echo $language["up87"]?>
                                        <p>
                                            <?php echo $language["up88"]?>   
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Another Dropdown -->
        <div class="drop-down">
            <div class="texte">
                <p style="color:white;" ><?php echo $language["up90"]?></p>
                <img src="/../assets/images/icon/arrow-down-white.svg" title="Digital" class="arrow">
            </div>
            <div class="sub-drop-downs">
                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up91"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="Digital" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="items-wrapper">
                            <a href="/anti-ddos?lang=<?php echo $language["htmlLang"]?>">
                                <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up92"]?>
                                    </div>
                                </div>
                            </a>
                            <a href="/service-level-agreement?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up102"]?>
                                    </div>
                                </div>
                            </a>
                            <a href="/data-center?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up94"]?>
                                    </div>
                                </div>
                            </a>
                            <a href="/support?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up95"]?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up96"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="Digital" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="items-wrapper">
                            <a href="/contact?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    Contact
                                    </div>
                                </div>
                            </a>
                            <a href="/reviews?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        <?php echo $language["up97"]?>
                                    </div>
                                </div>
                            </a>
                            <a href="/partners?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up98"]?>
                                    </div>
                                </div>
                            </a>
                            <a href="/about?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up99"]?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="sub-drop-down">
                    <div class="texte2">
                        <p style=color:white;><?php echo $language["up100"]?></p>
                        <img src="/../assets/images/icon/arrow-down-white.svg" title="Digital" class="arrow">
                    </div>
                    <div class="sub-content">
                        <div class="items-wrapper">
                            <a href="#">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up101"]?>
                                    </div>
                                </div>
                            </a>
                            <a href="/payment-methods?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                        <?php echo $language["up93"]?>
                                    </div>
                                </div>
                            </a>
                            <a href="/faq?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up103"]?>
                                    </div>
                                </div>
                            </a>
                            <a href="/student?lang=<?php echo $language["htmlLang"]?>">
                            <div style="padding:3px; justify-content:flex-start!important" class="case">
                                    <div class="icone">
                                        <img src="https://cdn.rw-hosting.net/assets/images/header/anti_ddos_header.svg" title="Digital" alt="An Icon">
                                    </div>
                                    <div class="texte2">
                                    <?php echo $language["up104"]?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
   


    <script>
function _0xad6c(_0x42a154,_0x1c1c50){var _0x34fdc4=_0x1b9b();return _0xad6c=function(_0x3d6cff,_0x5839aa){_0x3d6cff=_0x3d6cff-(-0x134d+-0xf9b+0x234d);var _0x187d2b=_0x34fdc4[_0x3d6cff];return _0x187d2b;},_0xad6c(_0x42a154,_0x1c1c50);}var _0xbe0ec7=_0xad6c;function _0x1b9b(){var _0xfdd78d=['rch','.buttonSea','nu-respons','asylx','|8|1|0|5','iv>\x0a\x20\x20\x20\x20\x20\x20','value','10747863hTBYeO','tSibling','innerWidth','PFRSH','photo','\x20\x20\x20<a\x20href','uBNAL','filter','dropsearh','forEach','bContents','<img\x20src=\x22','RalGf','initEventL','qYRBD','nextElemen','\x20\x20<button>','ent','qIjso','FnMBs','input','dropdownTr','Loaded','down\x20.text','QAWMu','zUxhG','IMOtO','oFMgF','\x22\x20alt=\x22','eIQIQ','flex','AmBDL','LiGAG','hing\x20the\x20s','.menu','classList','.arrow','\x20\x20\x20\x20\x20\x20\x20\x20<h','KyYko','SjeCc','width','\x20\x20\x20\x20\x20</div','EoIuY','194XxuXoc','100%','initial','CbsRD','\x20\x20\x20\x20\x20\x20\x20\x20\x20<','2rem','json','gCCCX','text\x22]','isteners','ns-parent','getElement','|2|7|12|11','av-items','earch\x20resu','o\x22>\x0a\x20\x20\x20\x20\x20\x20','XPXng','2962680qZBAjP','sub-conten','uhPID','QNhUA','</h2>\x0a\x20\x20\x20\x20','4167430UCFPpK','bt2','esult','add','burger','.search\x20in','.nv-items','rotate(0de','rop-down\x20.','trim','rch.php','rotate(180','transform','resetNavIt','nTriggers','JlOdV','ZyFFm','4|10|9|6|3','.sur-heade','cJPHn','keywords','PiRqX','desc','wTlev','MEHle','some','OJIri','twMzW','SiUWB','dropdowns','selected-n','.DPDdpd','XQivB','catch','FuzWg','AAVJN','.pr-sectio','result-sea','href','marginLeft','PQBIN','body','children','none','\x22item\x22>\x0a\x20\x20','HrioW','earch','.dpd-cpp','toggleDrop','fELIw','img\x22>\x0a\x20\x20\x20\x20','error','762942uscOYq','init','Bar','VtTTW','.TheSearch','/includes/','fcADg','querySelec','\x20\x20\x20\x20\x20\x20\x20</d','stener','edMck','8FTPxAd','</p>\x0a\x20\x20\x20\x20\x20','display','\x20</button>','qAUsC','maxHeight','\x20\x20\x20\x20\x20\x20</a>','subContent','stop-scrol','eAXbg','ropdown','iv\x20class=\x22','every','jdFGa','2213658nArvlv','Error\x20fetc','2341mLjwBb','Swvfg','499px','put[type=\x22','opdowns','PVpvX','ive','innerHTML','toLowerCas','.search','pbyRD','remove','\x20Voir\x20plus','\x20\x20\x20</div>\x0a','BKGDw','KcTgH','tor','hiPSz','=\x22item-inf','UkfUj','toggleSubD','join','VtSkM','includes','.content-r','titre','split','<div\x20class','vANFg','FXmKy','closeAllSu','DOMContent','.burger-me','4|8|3|0|1|','ive\x20.drop-','texte2','toggleSect','wVQZF','\x20\x20\x20\x20\x20\x20\x20\x20<d','ems','block','kCiAU','tPrYh','wqtDg','>\x0a\x20\x20\x20\x20\x20\x20\x20\x20','KSyWf','deg)','0px','map','iMNqu','\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20','AyOhR','ling','1|6|9','length','SjlCk','parentElem','JpPOV','.dropdownS','subDropdow','closeAllDr','xzfHE','ion','xYQPh','VwAZX','vizkK','div\x20class=','NCqtf','down','ById','\x0a\x20\x20\x20\x20\x20\x20\x20\x20','resize','CqeJJ','22rem','\x22>\x0a\x20\x20\x20\x20\x20\x20\x20','iZwuz','ive\x20.sub-d','lts:','\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20','addEventLi','6220900vgBmHh','from','click','style','<p>','wxuqv','5|7|10|2|1','torAll','UHtZT','mHQDv','then','iggers'];_0x1b9b=function(){return _0xfdd78d;};return _0x1b9b();}(function(_0x5f01ad,_0x45bd57){var _0x103029=_0xad6c,_0x4fe005=_0x5f01ad();while(!![]){try{var _0x5be236=parseInt(_0x103029(0x89))/(-0x1*0x125f+0x1*-0x13e9+0x2649)*(parseInt(_0x103029(0x117))/(0x313*0x7+0x1fc3*0x1+-0x3546))+parseInt(_0x103029(0x6e))/(-0x1*0xe69+-0x21ac+-0x6*-0x804)+parseInt(_0x103029(0x128))/(0x1*-0x1b0a+-0x1a26+0x3534)+-parseInt(_0x103029(0x12d))/(0xb*-0x3f+-0x4*-0x985+-0x235a)+parseInt(_0x103029(0x87))/(0x224a+0x2657+-0x489b)+parseInt(_0x103029(0xd9))/(-0xe0e+0x1*0x198e+-0x10b*0xb)*(parseInt(_0x103029(0x79))/(0xf9f+-0x1147*-0x2+-0x3225))+-parseInt(_0x103029(0xec))/(0x4ef+0x19e4+-0x1eca);if(_0x5be236===_0x45bd57)break;else _0x4fe005['push'](_0x4fe005['shift']());}catch(_0x3fe656){_0x4fe005['push'](_0x4fe005['shift']());}}}(_0x1b9b,0x19fd*0x59+0x1*-0xc295b+-0x3575b*-0x3),document[_0xbe0ec7(0xd8)+_0xbe0ec7(0x77)](_0xbe0ec7(0xa8)+_0xbe0ec7(0x102),function(){var _0x2ba71f=_0xbe0ec7,_0x395d5d={'qIjso':_0x2ba71f(0xa1)+_0x2ba71f(0x12f),'wVQZF':_0x2ba71f(0xb1),'fELIw':_0x2ba71f(0x65),'eIQIQ':function(_0x5e738c,_0x32eb8e){return _0x5e738c(_0x32eb8e);},'KyYko':_0x2ba71f(0x100),'xYQPh':_0x2ba71f(0x88)+_0x2ba71f(0x10d)+_0x2ba71f(0x125)+_0x2ba71f(0xd6),'SiUWB':_0x2ba71f(0x72)+_0x2ba71f(0x70),'RalGf':_0x2ba71f(0xf4),'QAWMu':_0x2ba71f(0x73)+_0x2ba71f(0x152)+_0x2ba71f(0x137)};const _0x280266=document[_0x2ba71f(0x75)+_0x2ba71f(0x99)](_0x395d5d[_0x2ba71f(0x149)]),_0x32ca8f=document[_0x2ba71f(0x122)+_0x2ba71f(0xce)](_0x395d5d[_0x2ba71f(0xf8)]);function _0x215368(_0x202ca2){var _0x3348d4=_0x2ba71f;const _0x4cdf6e=_0x32ca8f[_0x3348d4(0x75)+_0x3348d4(0x99)](_0x395d5d[_0x3348d4(0xfe)]),_0x5aafb8=_0x202ca2[_0x3348d4(0xb9)](_0x2f39c1=>_0x3348d4(0xd7)+_0x3348d4(0xf1)+'=\x22'+_0x2f39c1[_0x3348d4(0x153)]+(_0x3348d4(0xd3)+_0x3348d4(0x11b)+_0x3348d4(0xcb)+_0x3348d4(0x66)+_0x3348d4(0xbb)+_0x3348d4(0xaf)+_0x3348d4(0x84)+_0x3348d4(0x6c)+_0x3348d4(0xbb)+_0x3348d4(0xbb)+_0x3348d4(0xf7))+_0x2f39c1[_0x3348d4(0xf0)]+_0x3348d4(0x108)+_0x2f39c1[_0x3348d4(0xa2)]+(_0x3348d4(0xd3)+_0x3348d4(0xbb)+_0x3348d4(0x96)+_0x3348d4(0xbb)+_0x3348d4(0xbb)+_0x3348d4(0xa4)+_0x3348d4(0x9b)+_0x3348d4(0x126)+_0x3348d4(0xbb)+_0x3348d4(0x111)+'2>')+_0x2f39c1[_0x3348d4(0xa2)]+(_0x3348d4(0x12c)+_0x3348d4(0xbb)+_0x3348d4(0xbb)+_0x3348d4(0xdd))+_0x2f39c1[_0x3348d4(0x143)]+(_0x3348d4(0x7a)+_0x3348d4(0xbb)+_0x3348d4(0x115)+_0x3348d4(0xb5)+_0x3348d4(0xbb)+_0x3348d4(0xfc)+_0x3348d4(0x95)+_0x3348d4(0x7c)+_0x3348d4(0xd7)+_0x3348d4(0x76)+_0x3348d4(0xea)+_0x3348d4(0x7f)+_0x3348d4(0xcf)))[_0x3348d4(0x9e)]('');_0x4cdf6e[_0x3348d4(0x90)]=_0x5aafb8,_0x32ca8f[_0x3348d4(0xdc)][_0x3348d4(0x7b)]=_0x202ca2[_0x3348d4(0xbf)]?_0x395d5d[_0x3348d4(0xae)]:_0x395d5d[_0x3348d4(0x6b)];}_0x395d5d[_0x2ba71f(0x109)](fetch,_0x395d5d[_0x2ba71f(0x104)])[_0x2ba71f(0xe3)](_0x5d411a=>_0x5d411a[_0x2ba71f(0x11d)]())[_0x2ba71f(0xe3)](_0x5dc3b6=>{var _0x2e4987=_0x2ba71f,_0x512993={'FuzWg':function(_0x13aa25,_0x4cc159){var _0xd5ee26=_0xad6c;return _0x395d5d[_0xd5ee26(0x109)](_0x13aa25,_0x4cc159);}};_0x280266[_0x2e4987(0xd8)+_0x2e4987(0x77)](_0x395d5d[_0x2e4987(0x112)],()=>{var _0x3b8642=_0x2e4987;let _0x4dd5c=_0x280266[_0x3b8642(0xeb)][_0x3b8642(0x91)+'e']()[_0x3b8642(0x136)]()[_0x3b8642(0xa3)]('\x20')[_0x3b8642(0xf3)](Boolean),_0x5e319f=_0x5dc3b6[_0x3b8642(0xf3)](_0x3df141=>_0x4dd5c[_0x3b8642(0x85)](_0x1dbf3a=>_0x3df141[_0x3b8642(0x141)][_0x3b8642(0x146)](_0x1bd761=>_0x1bd761[_0x3b8642(0x91)+'e']()[_0x3b8642(0xa0)](_0x1dbf3a))||_0x3df141[_0x3b8642(0xa2)][_0x3b8642(0x91)+'e']()[_0x3b8642(0xa0)](_0x1dbf3a)||_0x3df141[_0x3b8642(0x143)][_0x3b8642(0x91)+'e']()[_0x3b8642(0xa0)](_0x1dbf3a)));_0x512993[_0x3b8642(0x14f)](_0x215368,_0x5e319f);});})[_0x2ba71f(0x14e)](_0x3dbbab=>{var _0x547888=_0x2ba71f;console[_0x547888(0x6d)](_0x395d5d[_0x547888(0xc8)],_0x3dbbab);});}));class TabManager{constructor(){var _0x7cbb7a=_0xbe0ec7,_0x1d7d49={'ZyFFm':_0x7cbb7a(0x69)};this[_0x7cbb7a(0x14a)]=document[_0x7cbb7a(0x75)+_0x7cbb7a(0xe0)](_0x1d7d49[_0x7cbb7a(0x13d)]),this[_0x7cbb7a(0x6f)]();}[_0xbe0ec7(0x6f)](){var _0x251130=_0xbe0ec7,_0x2bcdeb={'wTlev':_0x251130(0x14b)+_0x251130(0x124),'qYRBD':_0x251130(0xdb),'iZwuz':_0x251130(0x133),'KcTgH':_0x251130(0x151)+_0x251130(0x121)};this[_0x251130(0x14a)][_0x251130(0xf5)](_0x4fbe29=>{var _0x12c118=_0x251130;const _0x16358d=_0x4fbe29[_0x12c118(0x75)+_0x12c118(0xe0)](_0x2bcdeb[_0x12c118(0xd4)]),_0x2b9808=_0x4fbe29[_0x12c118(0x75)+_0x12c118(0x99)](_0x2bcdeb[_0x12c118(0x98)])[_0x12c118(0x157)];_0x16358d[_0x12c118(0xf5)]((_0x346f7c,_0x4b7f04)=>{var _0x194f7e=_0x12c118,_0x3819db={'PiRqX':_0x2bcdeb[_0x194f7e(0x144)]};_0x346f7c[_0x194f7e(0xd8)+_0x194f7e(0x77)](_0x2bcdeb[_0x194f7e(0xfa)],()=>{var _0x3c61d8=_0x194f7e;this[_0x3c61d8(0x13a)+_0x3c61d8(0xb0)](_0x16358d),_0x346f7c[_0x3c61d8(0x10f)][_0x3c61d8(0x130)](_0x3819db[_0x3c61d8(0x142)]),this[_0x3c61d8(0xad)+_0x3c61d8(0xc7)](_0x2b9808,_0x4b7f04);});});});}[_0xbe0ec7(0x13a)+_0xbe0ec7(0xb0)](_0x4e6518){var _0x3b3650=_0xbe0ec7,_0x56fa7a={'OJIri':_0x3b3650(0x14b)+_0x3b3650(0x124)};_0x4e6518[_0x3b3650(0xf5)](_0x32fa4a=>{var _0x147708=_0x3b3650;_0x32fa4a[_0x147708(0x10f)][_0x147708(0x94)](_0x56fa7a[_0x147708(0x147)]);});}[_0xbe0ec7(0xad)+_0xbe0ec7(0xc7)](_0xfb2ba5,_0x54098a){var _0x56f884=_0xbe0ec7,_0x1bf832={'UHtZT':function(_0x105700,_0x27d8a4){return _0x105700===_0x27d8a4;},'jdFGa':_0x56f884(0x10a),'PVpvX':_0x56f884(0x65)};Array[_0x56f884(0xda)](_0xfb2ba5)[_0x56f884(0xf5)]((_0x5227da,_0x2b728b)=>{var _0x39e9ed=_0x56f884;_0x5227da[_0x39e9ed(0xdc)][_0x39e9ed(0x7b)]=_0x1bf832[_0x39e9ed(0xe1)](_0x2b728b,_0x54098a)?_0x1bf832[_0x39e9ed(0x86)]:_0x1bf832[_0x39e9ed(0x8e)];});}}new TabManager(),document[_0xbe0ec7(0x75)+_0xbe0ec7(0x99)](_0xbe0ec7(0x132)+_0xbe0ec7(0x8c)+_0xbe0ec7(0x11f))[_0xbe0ec7(0xd8)+_0xbe0ec7(0x77)](_0xbe0ec7(0xdb),function(){var _0x57ef21=_0xbe0ec7,_0x3a7841={'tPrYh':_0x57ef21(0xaa)+_0x57ef21(0xdf)+_0x57ef21(0xbe),'iMNqu':_0x57ef21(0xe6)+_0x57ef21(0xe5),'VwAZX':_0x57ef21(0x12e),'uBNAL':_0x57ef21(0x10a),'edMck':_0x57ef21(0xc3)+_0x57ef21(0x68),'NCqtf':_0x57ef21(0x118),'QNhUA':_0x57ef21(0x14c),'XPXng':_0x57ef21(0xb1),'UkfUj':_0x57ef21(0x65),'eAXbg':_0x57ef21(0x92),'BKGDw':_0x57ef21(0x11c)},_0x12c14b=_0x3a7841[_0x57ef21(0xb3)][_0x57ef21(0xa3)]('|'),_0x2af25a=-0x92b*0x2+-0xc5*-0x27+-0x1ab*0x7;while(!![]){switch(_0x12c14b[_0x2af25a++]){case'0':var _0x48980e=document[_0x57ef21(0x75)+_0x57ef21(0x99)](_0x3a7841[_0x57ef21(0xba)]);continue;case'1':var _0x435f86=document[_0x57ef21(0x122)+_0x57ef21(0xce)](_0x3a7841[_0x57ef21(0xc9)]);continue;case'2':_0x11551b[_0x57ef21(0xdc)][_0x57ef21(0x7b)]=_0x3a7841[_0x57ef21(0xf2)];continue;case'3':var _0x11551b=document[_0x57ef21(0x75)+_0x57ef21(0x99)](_0x3a7841[_0x57ef21(0x78)]);continue;case'4':this[_0x57ef21(0xdc)][_0x57ef21(0x114)]=_0x3a7841[_0x57ef21(0xcc)];continue;case'5':var _0x459fa0=document[_0x57ef21(0x75)+_0x57ef21(0x99)](_0x3a7841[_0x57ef21(0x12b)]);continue;case'6':_0x48980e[_0x57ef21(0xdc)][_0x57ef21(0x7b)]=_0x3a7841[_0x57ef21(0x127)];continue;case'7':_0x459fa0[_0x57ef21(0xdc)][_0x57ef21(0x7b)]=_0x3a7841[_0x57ef21(0x9c)];continue;case'8':var _0x2636d3=document[_0x57ef21(0x75)+_0x57ef21(0x99)](_0x3a7841[_0x57ef21(0x82)]);continue;case'9':_0x2636d3[_0x57ef21(0xdc)][_0x57ef21(0x154)]=_0x3a7841[_0x57ef21(0x97)];continue;case'10':_0x2636d3[_0x57ef21(0xdc)][_0x57ef21(0x114)]=_0x3a7841[_0x57ef21(0xcc)];continue;case'11':_0x435f86[_0x57ef21(0xdc)][_0x57ef21(0x7b)]=_0x3a7841[_0x57ef21(0x9c)];continue;}break;}}),document[_0xbe0ec7(0x75)+_0xbe0ec7(0x99)](_0xbe0ec7(0xe6)+_0xbe0ec7(0xe5))[_0xbe0ec7(0xd8)+_0xbe0ec7(0x77)](_0xbe0ec7(0xdb),function(){var _0x281ff7=_0xbe0ec7,_0x3f58e0={'CbsRD':_0x281ff7(0x13e)+_0x281ff7(0x123)+_0x281ff7(0xe9),'xzfHE':_0x281ff7(0x119),'AmBDL':_0x281ff7(0x65),'asylx':_0x281ff7(0xb1),'FXmKy':_0x281ff7(0x14c),'pbyRD':_0x281ff7(0x132)+_0x281ff7(0x8c)+_0x281ff7(0x11f),'PFRSH':_0x281ff7(0xc3)+_0x281ff7(0x68),'SjeCc':_0x281ff7(0xd2),'oFMgF':_0x281ff7(0x12e),'gCCCX':_0x281ff7(0x10e),'VtTTW':_0x281ff7(0x10a)},_0x24b63a=_0x3f58e0[_0x281ff7(0x11a)][_0x281ff7(0xa3)]('|'),_0x441469=0x3*0x119+0x2*0x8b+-0x461;while(!![]){switch(_0x24b63a[_0x441469++]){case'0':_0x506c44[_0x281ff7(0xc1)+_0x281ff7(0xfd)][_0x281ff7(0xdc)][_0x281ff7(0x114)]=_0x3f58e0[_0x281ff7(0xc6)];continue;case'1':this[_0x281ff7(0xdc)][_0x281ff7(0x7b)]=_0x3f58e0[_0x281ff7(0x10b)];continue;case'2':_0x2fa31[_0x281ff7(0xdc)][_0x281ff7(0x7b)]=_0x3f58e0[_0x281ff7(0xe8)];continue;case'3':var _0x2fa31=document[_0x281ff7(0x75)+_0x281ff7(0x99)](_0x3f58e0[_0x281ff7(0xa6)]);continue;case'4':var _0x506c44=document[_0x281ff7(0x75)+_0x281ff7(0x99)](_0x3f58e0[_0x281ff7(0x93)]);continue;case'5':_0x506c44[_0x281ff7(0xc1)+_0x281ff7(0xfd)][_0x281ff7(0xdc)][_0x281ff7(0x154)]=_0x3f58e0[_0x281ff7(0xc6)];continue;case'6':var _0x29fdf8=document[_0x281ff7(0x75)+_0x281ff7(0x99)](_0x3f58e0[_0x281ff7(0xef)]);continue;case'7':_0x506c44[_0x281ff7(0xdc)][_0x281ff7(0x114)]=_0x3f58e0[_0x281ff7(0x113)];continue;case'8':_0x5bd4ff[_0x281ff7(0xdc)][_0x281ff7(0x7b)]=_0x3f58e0[_0x281ff7(0xe8)];continue;case'9':var _0x5bd4ff=document[_0x281ff7(0x122)+_0x281ff7(0xce)](_0x3f58e0[_0x281ff7(0x107)]);continue;case'10':var _0x5b15e4=document[_0x281ff7(0x75)+_0x281ff7(0x99)](_0x3f58e0[_0x281ff7(0x11e)]);continue;case'11':_0x5b15e4[_0x281ff7(0xdc)][_0x281ff7(0x7b)]=_0x3f58e0[_0x281ff7(0x71)];continue;case'12':_0x29fdf8[_0x281ff7(0xdc)][_0x281ff7(0x7b)]=_0x3f58e0[_0x281ff7(0x10b)];continue;}break;}});var burger=document[_0xbe0ec7(0x122)+_0xbe0ec7(0xce)](_0xbe0ec7(0x131)),burgerMenuResponsive=document[_0xbe0ec7(0x75)+_0xbe0ec7(0x99)](_0xbe0ec7(0xa9)+_0xbe0ec7(0xe7)+_0xbe0ec7(0x8f)),surheader=document[_0xbe0ec7(0x75)+_0xbe0ec7(0x99)](_0xbe0ec7(0x13f)+'r');burger[_0xbe0ec7(0xd8)+_0xbe0ec7(0x77)](_0xbe0ec7(0xdb),function(){var _0xc66919=_0xbe0ec7,_0x3d0b18={'VtSkM':function(_0x27b1f4,_0x1934b2){return _0x27b1f4===_0x1934b2;},'wqtDg':_0xc66919(0x10a),'JlOdV':_0xc66919(0x65),'wxuqv':_0xc66919(0x81)+_0xc66919(0xbd)};_0x3d0b18[_0xc66919(0x9f)](burgerMenuResponsive[_0xc66919(0xdc)][_0xc66919(0x7b)],_0x3d0b18[_0xc66919(0xb4)])?(burgerMenuResponsive[_0xc66919(0xdc)][_0xc66919(0x7b)]=_0x3d0b18[_0xc66919(0x13c)],surheader[_0xc66919(0xdc)][_0xc66919(0x7b)]=_0x3d0b18[_0xc66919(0xb4)],document[_0xc66919(0x156)][_0xc66919(0x10f)][_0xc66919(0x94)](_0x3d0b18[_0xc66919(0xde)])):(surheader[_0xc66919(0xdc)][_0xc66919(0x7b)]=_0x3d0b18[_0xc66919(0x13c)],burgerMenuResponsive[_0xc66919(0xdc)][_0xc66919(0x7b)]=_0x3d0b18[_0xc66919(0xb4)],document[_0xc66919(0x156)][_0xc66919(0x10f)][_0xc66919(0x130)](_0x3d0b18[_0xc66919(0xde)]));}),window[_0xbe0ec7(0xd8)+_0xbe0ec7(0x77)](_0xbe0ec7(0xd0),function(){var _0x563398=_0xbe0ec7,_0x202745={'PQBIN':function(_0x10838d,_0x48508e){return _0x10838d>_0x48508e;},'FnMBs':_0x563398(0x65),'vizkK':_0x563398(0x10a),'Swvfg':_0x563398(0x81)+_0x563398(0xbd)};_0x202745[_0x563398(0x155)](window[_0x563398(0xee)],-0x1885+-0x2c*-0x5c+0x3*0x3a5)&&(burgerMenuResponsive[_0x563398(0xdc)][_0x563398(0x7b)]=_0x202745[_0x563398(0xff)],surheader[_0x563398(0xdc)][_0x563398(0x7b)]=_0x202745[_0x563398(0xca)],document[_0x563398(0x156)][_0x563398(0x10f)][_0x563398(0x94)](_0x202745[_0x563398(0x8a)]));});class BurgerMenu{constructor(){var _0x3a0e38=_0xbe0ec7,_0x873d94={'SjlCk':_0x3a0e38(0xa9)+_0x3a0e38(0xe7)+_0x3a0e38(0xab)+_0x3a0e38(0x103)+'e','MEHle':_0x3a0e38(0xa9)+_0x3a0e38(0xe7)+_0x3a0e38(0xd5)+_0x3a0e38(0x135)+_0x3a0e38(0xac),'KSyWf':_0x3a0e38(0xa9)+_0x3a0e38(0xe7)+_0x3a0e38(0xd5)+_0x3a0e38(0x135)+_0x3a0e38(0x129)+'t'};this[_0x3a0e38(0x101)+_0x3a0e38(0xe4)]=document[_0x3a0e38(0x75)+_0x3a0e38(0xe0)](_0x873d94[_0x3a0e38(0xc0)]),this[_0x3a0e38(0xc4)+_0x3a0e38(0x13b)]=document[_0x3a0e38(0x75)+_0x3a0e38(0xe0)](_0x873d94[_0x3a0e38(0x145)]),this[_0x3a0e38(0x80)+'s']=document[_0x3a0e38(0x75)+_0x3a0e38(0xe0)](_0x873d94[_0x3a0e38(0xb6)]),this[_0x3a0e38(0xf9)+_0x3a0e38(0x120)]();}[_0xbe0ec7(0xc5)+_0xbe0ec7(0x8d)](_0x2c06f6){var _0x4a084a=_0xbe0ec7,_0x5a8aa6={'EoIuY':function(_0x7a1022,_0x5dbdc8){return _0x7a1022!==_0x5dbdc8;},'hiPSz':_0x4a084a(0x65),'HrioW':_0x4a084a(0x110),'qAUsC':_0x4a084a(0x134)+'g)'};this[_0x4a084a(0x101)+_0x4a084a(0xe4)][_0x4a084a(0xf5)](_0x435e02=>{var _0x4c9920=_0x4a084a;if(_0x5a8aa6[_0x4c9920(0x116)](_0x435e02,_0x2c06f6)){let _0x4d2915=_0x435e02[_0x4c9920(0xfb)+_0x4c9920(0xed)];_0x4d2915[_0x4c9920(0xdc)][_0x4c9920(0x7b)]=_0x5a8aa6[_0x4c9920(0x9a)];let _0x5e8738=_0x435e02[_0x4c9920(0x75)+_0x4c9920(0x99)](_0x5a8aa6[_0x4c9920(0x67)]);_0x5e8738&&(_0x5e8738[_0x4c9920(0xdc)][_0x4c9920(0x139)]=_0x5a8aa6[_0x4c9920(0x7d)]);}});}[_0xbe0ec7(0xa7)+_0xbe0ec7(0xf6)](_0x2d37a2){var _0x4bd9ac=_0xbe0ec7,_0x56afd6={'JpPOV':function(_0x299636,_0x451323){return _0x299636!==_0x451323;},'zUxhG':_0x4bd9ac(0x65),'mHQDv':_0x4bd9ac(0xb8)};this[_0x4bd9ac(0x80)+'s'][_0x4bd9ac(0xf5)](_0x3a6daf=>{var _0x5053bf=_0x4bd9ac;_0x56afd6[_0x5053bf(0xc2)](_0x3a6daf,_0x2d37a2)&&(_0x3a6daf[_0x5053bf(0xdc)][_0x5053bf(0x7b)]=_0x56afd6[_0x5053bf(0x105)],_0x3a6daf[_0x5053bf(0xdc)][_0x5053bf(0x7e)]=_0x56afd6[_0x5053bf(0xe2)]);});}[_0xbe0ec7(0x6a)+_0xbe0ec7(0xcd)](_0x1c6fbe){var _0x121dcb=_0xbe0ec7,_0x384ea7={'IMOtO':_0x121dcb(0x110),'cJPHn':function(_0xd9a768,_0x43d7f8){return _0xd9a768===_0x43d7f8;},'kCiAU':_0x121dcb(0xb1),'AAVJN':_0x121dcb(0x65),'XQivB':_0x121dcb(0x134)+'g)','AyOhR':_0x121dcb(0x138)+_0x121dcb(0xb7)};let _0x13658a=_0x1c6fbe[_0x121dcb(0xfb)+_0x121dcb(0xed)],_0x9db825=_0x1c6fbe[_0x121dcb(0x75)+_0x121dcb(0x99)](_0x384ea7[_0x121dcb(0x106)]);_0x384ea7[_0x121dcb(0x140)](_0x13658a[_0x121dcb(0xdc)][_0x121dcb(0x7b)],_0x384ea7[_0x121dcb(0xb2)])?(_0x13658a[_0x121dcb(0xdc)][_0x121dcb(0x7b)]=_0x384ea7[_0x121dcb(0x150)],_0x9db825&&(_0x9db825[_0x121dcb(0xdc)][_0x121dcb(0x139)]=_0x384ea7[_0x121dcb(0x14d)])):(this[_0x121dcb(0xc5)+_0x121dcb(0x8d)](_0x1c6fbe),_0x13658a[_0x121dcb(0xdc)][_0x121dcb(0x7b)]=_0x384ea7[_0x121dcb(0xb2)],_0x9db825&&(_0x9db825[_0x121dcb(0xdc)][_0x121dcb(0x139)]=_0x384ea7[_0x121dcb(0xbc)]));}[_0xbe0ec7(0x9d)+_0xbe0ec7(0x83)](_0x39b546){var _0x12e169=_0xbe0ec7,_0x4cb2e1={'CqeJJ':function(_0x549dbe,_0x477488){return _0x549dbe===_0x477488;},'LiGAG':_0x12e169(0x10a),'fcADg':_0x12e169(0x65),'vANFg':_0x12e169(0xb8),'twMzW':_0x12e169(0x8b)};let _0x33a46e=_0x39b546[_0x12e169(0xfb)+_0x12e169(0xed)];_0x4cb2e1[_0x12e169(0xd1)](_0x33a46e[_0x12e169(0xdc)][_0x12e169(0x7b)],_0x4cb2e1[_0x12e169(0x10c)])?(_0x33a46e[_0x12e169(0xdc)][_0x12e169(0x7b)]=_0x4cb2e1[_0x12e169(0x74)],_0x33a46e[_0x12e169(0xdc)][_0x12e169(0x7e)]=_0x4cb2e1[_0x12e169(0xa5)]):(this[_0x12e169(0xa7)+_0x12e169(0xf6)](_0x33a46e),_0x33a46e[_0x12e169(0xdc)][_0x12e169(0x7b)]=_0x4cb2e1[_0x12e169(0x10c)],_0x33a46e[_0x12e169(0xdc)][_0x12e169(0x7e)]=_0x4cb2e1[_0x12e169(0x148)]);}[_0xbe0ec7(0xf9)+_0xbe0ec7(0x120)](){var _0x48a05c=_0xbe0ec7,_0x3a93ad={'uhPID':_0x48a05c(0xdb)};this[_0x48a05c(0x101)+_0x48a05c(0xe4)][_0x48a05c(0xf5)](_0x150b70=>{var _0x591dd9=_0x48a05c;_0x150b70[_0x591dd9(0xd8)+_0x591dd9(0x77)](_0x3a93ad[_0x591dd9(0x12a)],()=>{var _0x50900b=_0x591dd9;this[_0x50900b(0x6a)+_0x50900b(0xcd)](_0x150b70);});}),this[_0x48a05c(0xc4)+_0x48a05c(0x13b)][_0x48a05c(0xf5)](_0x21b3cd=>{var _0x15b359=_0x48a05c;_0x21b3cd[_0x15b359(0xd8)+_0x15b359(0x77)](_0x3a93ad[_0x15b359(0x12a)],()=>{var _0x2871cd=_0x15b359;this[_0x2871cd(0x9d)+_0x2871cd(0x83)](_0x21b3cd);});});}}new BurgerMenu();





    </script>

<?php
ini_set('display_errors', 0);
error_reporting(0);
?>